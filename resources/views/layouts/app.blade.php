<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{config("app.name", "Three Little Pigs")}}</title>
  <link  rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
  <header>
    <ul class="flex">
      <li>
        <a href="{{ route('register') }}">Register</a>
      </li>
    </ul>
  </header>


  @yield("content")
</body>
</html>