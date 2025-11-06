<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi siamo</title>
</head>

<body>
  <nav>
    <ul>
      <li><a href="{{ route("home") }}">Home</a></li>
      <li><a href="{{ route("about") }}">About</a></li>
      <li><a href="{{ route("aboutYou") }}">AboutYou</a></li>
    </ul>
  </nav>
  <h1>Chi sono!</h1>
  <p>{{$info}}</p>
</body>

</html>