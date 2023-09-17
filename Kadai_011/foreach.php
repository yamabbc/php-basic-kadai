<!DOCTYPE html>
<html lang="ja">
 
  <head>
     <meta charset="UTF-8">
     <title>課題011</title>
  </head>
 
  <body>
    <p>
        <?php
        $onion_data =['名前' =>'玉ねぎ', '場所' => 200, '産地' => '北海道'];

        // 連想配列$onion_dataのキーと値を1つずつ順番に出力する
        foreach ($onion_data as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
  </body>
</html>
