<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | DC Play</title>
</head>
<body>
    <form action="{{url('admin/login/validation')}}" method="post">
        @csrf
        <input type="email" name="email" value="pedrovpdias@gmail.com"/>
        <input type="password" name="password" id="" />
        <button type="submit">Login</button>
    </form>
</body>
</html>