<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題015</title>
 </head>
 
 <body>

    <p>
    <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             private $name;
             private $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
         }
 
         // インスタンス化する
         $food = new Food('potato',250);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($food);
         ?>
     </p>

     <p>
    <?php
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             private $name;
             private $height;
             private $weight;

             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
         }
 
         // インスタンス化する
         $animal = new Animal('dog',60,5000);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($animal);
         ?>
     </p>

     <p>
        <?php
        // クラスを定義する
        class Food2 {
            // プロパティを定義する                        
            public $name;
            public $price;

            // メソッドを定義する
            public function show_price(int $name) {
                $this->name = $name;
            }
            public function set_name() {
                echo $this->name . '<br>';
            }
        }

        // インスタンス化する
        $potatoprice = new Food2();

        // メソッドにアクセスして実行する
        $potatoprice->show_price(250);
        $potatoprice->set_name();

        // インスタンス化する
        $pote = new Food2();

        // プロパティにアクセスし、値を代入する
        $pote->name = 60;

        // プロパティにアクセスし、値を出力する
        echo $pote->name;
        ?>
    </p>
 </body>
 
 </html>