<form action="{{ route('people.save') }}" method="post">
    @csrf

    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">

    <button type="Login">Login</button>
</form>

