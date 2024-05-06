<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach


    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <input type="email" name="email" >
        <input type="password" name="password">
        <button type="submit">Se connecter</button>
    </form>

</body>
</html>