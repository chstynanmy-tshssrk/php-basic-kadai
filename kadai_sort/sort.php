<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
   <p>
    <?php
    //ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];
    
    function sort_2way($array, $order) {
      if($order === TRUE) {
        sort($array);
        echo'昇順でソートします。<br>';
      } else {
        rsort($array);
        echo'降順でソートします。<br>';
      }
      foreach($array as $nums){
          echo $nums . '<br>';
      }
    }
    
    sort_2way($nums, TRUE);
    sort_2way($nums, FALSE);
    ?>
  </p>
</body>

</html>

 