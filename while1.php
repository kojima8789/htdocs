<?php
    header('Content-type: text/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
        // $num = 0;
        // $cnt = 0;
        // echo $num, '個の●を表示します。<br>';
        // while($cnt < $num){
        //     echo '●';
        //     $cnt ++;
        // } 
        // echo '<br><br>';
        
        // $num = 1;
        // $cnt = 0;
        // echo $num, '個の●を表示します。<br>';
        // do {
        //     echo '●';
        //     $cnt ++;
        // }while($cnt < $num);
        // echo '<br><br>';

        // $num =1;
        // echo $num, '個の●を表示します。<br>';
        // for($cut = 0; $cnt < $num; $cnt ++){
        //     echo '●';
        // }

        $arr = array('カレー','ハンバーグ','オムライス');

        foreach( $arr as $value){
            echo $value,'が好き。<br>';
        }

        $price = array('apple' => 230,
                       'melon' => 560,
                       'banana' => 150);

        foreach($price as $key => $value){
            echo $key,'は', $value,'円です,<br>';
        }
        echo '<br><br>';


        $days = array('morning' => '朝',
                      'afternoon' => '昼',
                      'evening' => '夕方');

        foreach($days as $key => $value){
            echo 'Good',$key,'! ', $value,'になりました！<br>';
        }    
        
        for($cnt =1; $cnt <=10; $cnt++){
            echo '繰り返し', $cnt,'回目です';
            if($cnt %2){
                echo '<br>', PHP_EOL;
                continue;
            }
            echo '偶数です<br>', PHP_EOL;
        }
        echo '<br><br>';


        $cnt = 0;
        while(1){
            $cnt++;

            if($cnt > 10){
                echo '10になりました。ループを抜けます。<br>', PHP_EOL;
                break;
            }
            echo '[',$cnt,']';

            if($cnt %3){
                echo 'スキップします。<br>',PHP_EOL;
                continue;
            }
            echo ' 3の倍数です。<br>', PHP_EOL;
        }
        echo '終了します。';

        ?>
