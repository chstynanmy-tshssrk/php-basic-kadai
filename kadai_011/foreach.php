<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP課題‗011</title>
</head>

<body>
  <p>
    <?php
    //変数に以下のキーと値を持つ連想配列を作成する
    $vegetable_informationes =['名前' =>'玉ねぎ','値段' =>200,'産地' =>'北海道'];
    //連想配列$vegetable_informationesのキーと値を1つずつ順番に出力する
    foreach ($vegetable_informationes as $key => $value) {
        echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>
