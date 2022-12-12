<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>氏名</p>
  <form action="/add" method="POST">
    @csrf
    <input type="text" name="name">
  <p>メールアドレス</p>
    <input type="text" name="mail">
    <br>
    <input type="submit" value="送信する">
  </form>
</body>
</html>