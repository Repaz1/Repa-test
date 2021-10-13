<form action="{{ route('regis.save') }}" method="post">
    @csrf

    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="text" name="password1" placeholder="password1">

    <button type="submit">Login</button>
</form>
