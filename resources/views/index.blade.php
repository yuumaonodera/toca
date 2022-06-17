<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <style>
    input {
      height:30px;
    }
    .button-create {
      padding:6px 50px 6px 50px;
      background:black;
      color:white;
    }
    .button-search {
      padding:6px 50px 6px 50px;
      background:black;
      color:white;
    }
    .title {
      font-size:25px;
      font-family:"Book Antiqua";
    }
    .sub {
      font-size:25px;
      font-family:"Book Antiqua";
    }
    .card {
      margin-left:23%;
      margin-top:60px;
    }
    .contentr {
      margin-left:23%;
    }
    .subtitle {
      display:flex;
      border-bottom:solid 2px black;
      margin-right:30%;
      margin-left:23%;
    }
    h3 {
      margin-bottom:5px;
      padding-left:10px;
    }
    .category {
      padding-left:43%;
    }
    table {
      border-collapse:collapse;
      margin-left:23%;
    }
    td {
      border-bottom:solid 2px black;
      padding-left:10px;
      padding-bottom:10px;
      padding-top:10px;
    }
    .button-update {

    }
  </style>
  @include('header')
  <div class="index">
    <form action='/' method="POST">
      @csrf
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="card">
        <h1 class="title">新規作成</h1>
        <input type="text" name="content" size="50px">
        <p>
          <lavel><b>カテゴリ</b></lavel>
          <select type="text" name="content" value="{{$word->$category}}">
            @foreach($word as $category)
            <option value="{{$word -> $category}}"></option>
            @endforeach
        </p>
        <button class="button-create">作成</button>
      </div>
    </form>
  </div>
  <div class="contentr">
    <h1 class="sub">Todo検索</h1>
    <input type="text" name="search" size="50px">
    <button class="button-search">検索</button>
  </div>
  <div class="subtitle">
      <h3>Todo</h3>
      <h3 class="category">カテゴリ</h3>
  </div>
  <table>
  @foreach($item as $todo)
  <tr>
      <td>{{$todo->content}}</td>
      <td><button class="button-update">更新</button></td>
      <td><button class="button-delete">削除</button></td>
  </tr>
  @endforeach
  </table>
</body>

</html>