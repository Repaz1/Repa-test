<form action="{{ route('reservation.save') }}" method="post">
    @csrf

    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <label for="appt">Select a date:</label>
    <input type="date" id="appt" name="appt1">
    <label for="appt">Select a time:</label>
    <input type="time" id="appt" name="appt2">


    <button type="Login">Submit</button>
</form>
