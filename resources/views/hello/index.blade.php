<html>
<head>
  <title>Hello/Index</title>
  <style>
    body { font-size: 16pt; color: #999; }
    h1 { font-size: 100pt; text-align:right; color: #eee; margin: -40px 0 -50px 0; }
    th{background-color: #999; color: fff; padding: 5px 10px;}
    td{border: solid 1px #aaa; color: #999; padding: 5px 10px;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  @isset ($msg)
    <p>こんにちは、{{$msg}}さん。</p>
  @else
    <p>なにか書いてください</p>
  @endif
  <form method="POST" action="/hello">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
  </form>
  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
</body>
</html>
