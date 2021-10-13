<?php

namespace App\Http\Controllers;

use App\Models\People;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PeoplesController extends Controller
{

    public function show()
    {


        $Ppl = People::all();
        $date = Carbon::now();
        $date->subYear();


        /* @var \App\Models\People $People */
        foreach ($Ppl as $People) {
            if ($date->gt($People->reg_date)) {
                dump("ok");
            } else {
                dump("notokey");
            }
        }


    }

    public function index(Request $request)
    {



        if  ($request->isMethod('get')) {
            return view('people.people', ["Peoples" => People::all()]);
        }
        /* @var \App\Models\People $author */

            $author = People::where('email', $request->post('email'))->first();
              if (!$author) {
                  dd('account info is wrong');
              } elseif ($author->password != $request->post('password')) {
                 dd('password is wrong');
              }  else {
                  dd('helo' . ' ' . $author->name);
              }
          }



    public function reg(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('people.regis');
        }
        /* @var \App\Models\People $reg */
        $date = Carbon::now();
        $reg = new People();
        $reg->reg_date = $date->format('Y-m-d');
        $reg->name = $request->post('name');
//        $mailex = People::where('email', $request->post('email'))->first();

        if (People::where('email', $request->post('email'))->first()) {
            dd ('email already exist');
        } else {
            $reg->email = $request->post('email');
        }

//        $pwd = $request->post('password');
//        $pwd1 = $request->post('password1');

        if ($request->post('password') == $request->post('password1')) {
            $reg->password = $request->post('password');
        } else {
            dd('Passwords does not match');
        }
        if (empty($reg->name && $reg->email && $request->post('password') && $request->post('password1'))){
            dd('Все поля должны быть заполнены');
        }else {
            $reg->save();
        }



        return redirect()->route('people.index');

    }
}


//        dd(People::query()->where('email','!=' , 'malina@ukr.net',)->get());

//            $People = null;
//            $i = 0;
//           while ($i < 100 && $People ? $People->password != 'buba456' : true) {
//               $i = $i + 1;
//             $People = People::where('id', $i)->first();
//
//
//           }
//            dump($People);

//        foreach ($array as $key => $value){
//         dump ($value[]);
//        }


//        $inmas = [
//
//            'mass' => [
//                56,58
//            ],
//            'str' => 'kola',
//            'inter' => 158
//        ];
////        dd($inmas ['inter']);
////         dd(count($inmas));
//         $count = count($inmas);
//         while (($count)-1 ){
////             $count--;
//            dump($count);
//
//        }
////        dd('okey');

//       $author = People::where('email', $request->post('email'))->where('password', $request->post('password'))->first();
//            dd('User does not exist');
//
//        }else
//        $uname = People::all();
//            foreach ($uname as $uname1) {
//                dump($uname1['name']);
//            }




//($email['email'] != $request->post('email')) {
//                  dd('users does not exist');
//(People::where('email', $request->post('email'))->where('password', $request->post('password'))->first()) {
//                  dd('hello' . ' ' . $email['name'])

////       foreach ($mail as $people) {
//           if ($request->post('email') == $mail->email) {
//               dump('okey');
//           } else {
//               dump('notokey');
//           }
//
//
////        }


//        dd($);





//        /* @var \App\Models\People $Human*/
//        if (!$Human = People::find($request->post('people_id'))){
//            $Human = new People();
//            $Human->reg_date = $date->format('Y-m-d');
//        }

//        $Human->name = $request->post('name');
//        $Human->email = $request->post('surname');
//        $Human->password = $request->post('password');
////        $Human->age = $request->post('age');
////        if ($Human->age > 60) {
////            dd('ВЫ СТАРПЕР');
////        }
//        $Human->save();


//        return redirect()->route('people.index');

