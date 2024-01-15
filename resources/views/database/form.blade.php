<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Form</title>
</head>
<body>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('check.connection') }}" method="POST">
        @csrf
        <label for="server">Server:</label>
        <input type="text" name="server" required>
        <br>

        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>

        

        <button type="submit">Check Connection</button>
    </form>

</body>
</html>
