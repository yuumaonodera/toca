<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <style>
    body {
      margin:0;
      padding:0;
    }
    .container {
      background:black;
      height:100%;
      display: flex;
      justify-content:space-between;
    }
    .Todo {
      color:white;
      font-size:20px;
      font-weight:17px;
      font-family:Georgia;
      margin-top:40px;
      margin-bottom:40px;
      margin-left:250px;
      text-decoration:none;
    }
    .Cate {
      margin-top:40px;
      margin-bottom:40px;
      margin-right:250px;
      font-size:17px;
      font-family: "Yu Mincho";
      color:white;
      text-decoration:none;
    }
  </style>
  <div class="container">
      <a href="/" class="Todo" >Todo</a>
      <a href="/category" class="Cate">カテゴリ一覧</a>
  </div>
</body>

</html>