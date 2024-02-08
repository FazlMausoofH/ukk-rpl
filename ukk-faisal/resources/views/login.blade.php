<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{url('/verif') }}" method="post">
      @csrf
      <label for="">Username</label>
      <input type="text" name="US">
      <label for="">Password</label>
      <input type="password" name="PS">
      <button type="submit">login</button>
    </form>
    
</body>
</html>