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
      <button onclick="increment(this)">0</button>
    </div>
  </div>
  <script>
    const increment = (e) => {
      const clicks = ++e.innerText;
      if (clicks == 10) e.previousElementSibling.innerText = 'You have clicked over ten times';
    };
  </script>
</body>
</html>