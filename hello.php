<?php
    header('content-type: text/html; charset=UTF-8');
?>
<html>
<body>
<?php
  $var = 3;
  echo '[整数型]',$var,'<br>', PHP_EOL;

  $var = 23.456;
  echo '[浮動小数点型]',$var,'<br>', PHP_EOL;
  echo '$varは、', (string)$var,'<br>';

  $var ='あいうえお';
  echo '[文字列型]', $var,'<br>',PHP_EOL;

  print "ただいま¥¥外出中¥¥です。<br>";

  $no = 3;
  echo "私は、$no 階に住んでいます。<br>";

  $name ='ラーメン';
  // $str = <<<EOD
  // お昼になりました。<br>
  // $name を食べに行きましょう。
  // EOD;

  // echo $str.'<br>';

  echo $name,$var,'<br>';

  define('MAX_DISPLINE',15);
  echo MAX_DISPLINE;

  const MAX_DISPLINE = 15;
  echo MAX_DISPLINE;


   
?>
</body>
</html>    