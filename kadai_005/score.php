<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編課題005</title>
</head>

<body>
  <p>
    <?php
    //変数を代入する
    $score_1 = 80;
    $score_2 = 60;
    $score_3 = 55;
    $score_4 = 40;
    $score_5 = 100;
    $score_6 = 25;
    $score_7 = 80;
    $score_8 = 95;
    $score_9 = 30;
    $score_10 = 60;

    //変数の合計
    $total_score = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;
    //変数の平均得点の出力
    echo $total_score / 10;
    ?>

  </p>
</body>
</html>