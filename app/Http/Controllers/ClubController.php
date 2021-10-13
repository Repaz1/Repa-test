<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
USE Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\AggregatedType;
use function GuzzleHttp\Promise\all;


class ClubController extends Controller
{

    public function reserv(Request $request){
        if ($request->isMethod('get')) {
            return view('club.reservation');
        }

        $email = $request->post('email');
        $pwd = $request->post('password');
        $date = $request->post('appt1');
        $time = $request->post('appt2');
        if (!$email || !$pwd || !$date || !$time) {
            dd('Все поля должны быть заполнены');
        }

        if (!$client = Client::where('email', $email)->where('password', $pwd)->first()){
            dd('wrong account info');
        }


        /* @var \App\Models\Reservation $reserv */
        $reserv = new Reservation();
        $reserv->email = $email;
        $reserv->name = $client->name;
        $reserv->reserv_date = (new Carbon($date . ' ' . $time))->format('Y-m-d H:i:s');;
        $reserv->save();
            dd('Добрый день' .',' . $client->name .'.' . 'Ваша запись забронирована, дата посещения - ' . $reserv->reserv_date);


    }
    public function registr(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('club.registration', ['Client' => Client::all()]);
        }

        $name = $request->post('name');
        $email = $request->post('email');
        $pwd = $request->post('password');
        $pwd1 = $request->post('password1');


        if(!$name || !$email || !$pwd || !$pwd1){
            dd('Все поля должны быть заполнены');
        }

        if ($pwd !== $pwd1) {
            dd ('Password does not match');
        }

        if (Client::where ('email', $email)->first()){
            dd ('user already exist');
        }


        /* @var \App\Models\Reservation $reg */
        $reg = new Client();
        $reg->reg_date = date('Y-m-d');
        $reg->name = $name;
        $reg->email = $email;

        $reg->password = $pwd;
        $reg->save();
        return redirect()->route('login.index')->with('Client', $reg);

    }


    public function log(Request $request){
        if ($request->isMethod('get')) {
            return view('club.login');
        }
        /* @var \App\Models\Reservation $details */


        if (!Client::where('email', $request->post('email'))->Where('password', $request->post('password'))->first()) {
            dd('user doesnt not exist');
        }
            return redirect()->route('reservation.index');

    }
}
