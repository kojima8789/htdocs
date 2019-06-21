<?php
    header('Content-type: text/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
        echo "以下の６コの数字を選び出しました！　当たるかな？<br><br>";
        
        $numArr = array(); //空の配列を作る（６コの数字を入れる）

        for($cnt =0; $cnt < 6; $cnt++){   //6回繰り返す
            $num = mt_rand(1,43);         //１〜４３までの乱数を取得する
        

        //数字が重複してないかチェック　　している場合は重複していない数字を取得できるまで乱数の取得を繰り返す
        
        for(; ;){
            //既に同じ数値を取得しているかチェックする
            if(in_array($num,$numArr)){       //数字が$numArrに含まれる場合、１〜４３までの乱数を取得する
                $num = mt_rand(1,43);
            }else{                      //数字が$numArrに含まれない場合
                break;
            }
        }

        $numArr[] = $num;     //選び出した数字を配列$numArrの最後に追加する

        }   
        //６コの数字を小さい頃に並び替える
        sort($numArr);

        //６コの数字を表示する
        foreach($numArr as $num){          //配列の要素の数分繰り返す
            echo $num,'<br>', PHP_EOL;     //数字を表示する
        }
        ?>
    <body>
<html>