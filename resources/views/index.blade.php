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
      margin-left:80px;
    }
    .button-search {
      padding:6px 50px 6px 50px;
      background:black;
      color:white;
      margin-left:80px;
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
      border-bottom:solid 2px lavender;
      margin-left:23%;
      margin-right:463px;
    }
    h3 {
      margin-bottom:5px;
      padding-left:10px;
    }
    .category {
      padding-left:35%;
    }
    table {
      border-collapse:collapse;
      margin-left:23%;
    }
    td {
      border-bottom:solid 2px lavender;
      padding-left:10px;
    }
    .button-delete {
      margin-left:10px;
      padding:3px 13px 3px 13px;
      background:red;
      color:white;
      border:none;
    }
    .button-update {
      margin-left:200px;
      padding:3px 13px 3px 13px;
      background:blue;
      color:white;
      border:none;
    }
    h5 {
      margin-left:240px;
    }
    .uhauha {
      margin-left:130px;
    }
    .up {
      border:none;
    }
    select {
      padding-top: 8px;
      padding-bottom:8px;
      padding-left:4px;
      padding-right:29px;
    }
    ul {
      background:pink;
      color:red;
      margin-top:-5px;
      padding-top:10px;
      padding-bottom:10px;
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
          <select type="text" name="category_id" >
            <option value="" class="category_title">カテゴリ</option>
            @foreach ($word as $category)
            <option value="{{ $category->id }}">{{  $category->content }}</option>
            @endforeach
          </select>
        <button class="button-create">作成</button>
      </div>
    </form>
  </div>
  <div class="contentr">
    <h1 class="sub">Todo検索</h1>
    <form mathod="GET" action="/search">
      @csrf
       <input type="text" name="content" size="50px"> 
       <select type="text" name="category_id">
        <option value="" class="category_title">カテゴリ</option>
         @foreach($word as $category)
         <option value="{{ $category->id }}">{{ $category->content }}</option>
         @endforeach
       </select>
       <button class="button-search">検索</button>
    </form>
  </div>
  <div class="subtitle">
      <h3>Todo</h3>
      <h3 class="category">カテゴリ</h3>
  </div>
  <table>
  @foreach($item as $todo)
  <tr>
      <form mathod="POST" action="update/{{$todo->id}}">
        @csrf
        <td><input type="text" class="up" name="content" value="{{$todo->content}}"></td>
        <td><h5 class="uhauha">{{$todo->category->content}}</h5></td>
        <td><button class="button-update">更新</button></td>
      </form>
      <form method="POST" action="delete/{{$todo->id}}">
        @csrf
        <td><button class="button-delete">削除</button></td>
      </form>
  </tr>
  @endforeach
  </table>
</body>

</html>