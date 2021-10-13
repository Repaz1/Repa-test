<form action="{{ route('login.save') }}" method="post">
    @csrf

    <input type="text" name="email"  placeholder="email">
    <input type="text" name="password" placeholder="password">

    <button type="Submit">Login</button>
</form>
