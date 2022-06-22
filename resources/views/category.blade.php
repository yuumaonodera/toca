<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <style>
    .content {
      margin-top:70px;
      margin-left:370px;
    }
    input {
      height:30px;
      border-color: lavender;
    }
    .button-create {
      background:black;
      color:white;
      padding:6px 55px 6px 55px;
      margin-left:80px;
    }
    .title {
      font-family:"Book Antiqua";
      font-size:11px;
      margin-left:370px;
      margin-top:50px;
      border-bottom:solid 2px black;
      border-color:lavender;
      margin-right:410px;
      padding-left:10px;
    }
    table {
      margin-left:366px;
      border-collapse:collapse;
    }
    tr {
      border-bottom:solid 2px lavender;
    }
    td {
      padding-top:9px;
      padding-bottom:9px;
      padding-left:13px;
      font-family:"Franklin Gothic";
      margin-right:20%;
      padding-right:10px;
    }
    .button-update {
      margin-left:420px;
      padding:3px 10px 3px 10px;
      background:blue;
      color:white;
      border:none;
    }
    .button-delete {
      padding:3px 10px 3px 10px;
      background:red;
      color:white;
      border:none;
    }
    .up {
      border:none;
    }
  </style>
  @include('header')
    <div class="content">
      <form action='/category' method="POST">
        @csrf
        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <div>
          <input type="text" name="content" size="70px">
          <button class="button-create">作成</button>
        </div>
      </form>
    </div>
    <div class="title">
      <h1>category</h1>
    </div>
    <table>
    @foreach($item as $category)
    <tr>
      <form method="POST" action="update/{{$category->id}}">
        @csrf
        <td><input type="text" class="up" name="content" value="{{$category->content}}"></td>
        <td><button class="button-update">更新</button></td>
      </form>
      <form method="POST" action="{{$category->id}}/delete">
        @csrf
        <td><button class="button-delete">削除</button></td>
      </form>
    </tr>
    @endforeach
    </table>
</body>

</html>