<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP_kadai_011</title>
</head>

<body>
  <p>
    <?php
    $personal_datas = [
      '名前'=>'玉ねぎ',
      '値段'=>200,
      '産地'=>'北海道'
    ];

    foreach ($personal_datas as $key=>$value){
      echo "{$key} : {$value} <br>";
    };

    ?>
  </p>
  
</body>
</html>