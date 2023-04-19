<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  @foreach ($students as $x )

       {{ $x['id'] }} - {{ $x['name'] }} - {{ $x['email'] }}
      <br>
  @endforeach  
</body>
</html>
