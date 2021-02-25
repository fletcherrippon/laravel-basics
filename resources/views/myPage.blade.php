<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Page</title>
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div>
    <h1>Template with {{ strtoupper('blade') }}</h1>
    <h2>Make a for <code>loop</code></h2>
    <ul>
      @for ($i = 0; $i <= 2; $i++)
        <li>Number {{ $i }}</li>
      @endfor
    </ul>
    <h3>Data parsed from router using <code>foreach</code></h3>
    <ul>
      @foreach ($user as $data)
        <li>{{ $data }}</li>
      @endforeach
    </ul>
    <div>
      <span>Click this 👉</span>
      <button id="button-click">0</button>
    </div>

    @if (1<>0)
      <h4>Hello I show when two values are not the same</h4>
    @endif
  </div>
  <script type="text/javascript" src="{{ mix('/js/buttonClicker.js') }}"></script>
</body>
</html>