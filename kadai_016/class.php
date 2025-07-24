<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP基礎編kadai_016</title>
</head>

<body>
  <p>
    <?php
    //クラスの定義
    class Food{
      //プロパティの定義
      public $name;
      public $price;
      
      //コンストラクタを定義する
      public function __(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    
      //メソッドを定義する
      public function show_price() {
       return $this->price;
      }
    }
    //クラスの定義
    class Animal{
      //プロパティの定義
      public $name;
      public $height;
      public $weight;

      //コンストラクタを定義する
      public function __(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
   
    //メソッドを定義する
    public function show_height() {
     return $this->height;
      }
    }

    $food = new Food('potato',250);
    $animal = new Animal('dog',60,5000);

    print_r($food);
    echo'<br>';
    print_r($animal);
    echo'<br>';

    ?>
  </p>
</body>   

</html>

