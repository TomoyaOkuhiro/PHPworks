<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <hr>
  <p>何かお話ししてください</p>
  <form method="post">
    <input type="text" name="a">
    <input type="submit" value="送るよ">
  </form>
  <?php
  $security = htmlspecialchars($_POST["a"], ENT_QUOTES);
  echo isset($security) && $security != "" ? $security . "にゃあ" : "何かしゃべって";
  ?>
  <img src="neko.png" alt="ねこさん">
  <hr>

</body>

</html>