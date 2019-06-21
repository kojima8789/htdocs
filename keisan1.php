<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
        $waist = 70;
        $height = 170;
        $rate = $waist / $height;
        echo 'あなたの隠れ肥満度は、',$rate,'です', PHP_EOL;

        $kekka = 1 + 5 * 3;
        echo '1 + 5 * 3 =', $kekka, '<br>'; PHP_EOL;

        $kekka = (1+5)*3;
        echo '(1+5)*3=',$kekka,'<br>', PHP_EOL;


        
             $num = 3;
            $num += 6;
            echo $num,'<br>';
            $num -= 3;
            echo $num,'<br>';
            $num *= 7;
            echo $num,'<br>';
           $num /= 6;
            echo $num,'<br>';
            $num %= 3;
            echo $num,'<br>';
            
            $str = '明太子';
            $str .= 'チーズ';
            $str .= 'もんじゃ';
            echo $str;


        $aaa = 86;
        $bbb = 70;
        $ccc = 93;
        $ave = ($aaa +  $bbb + $ccc) / 3;
        echo '平均値は', $ave; 

        $rainRt = 45;
        echo '降水確率は', $rainRt, '%です<br>';

        if($rainRt >= 70){
            echo '長い傘をもっていきます。';
        }elseif($rainRt >= 40){
            echo '折りたたみ傘を持っていきます。';
        }else{
            echo '傘を持って行きません。';
        }
            echo '<br>';

        $ninzu = 12;
        $yosan = 5000;

        echo '人数は', $ninzu, '人です。<br>';
        echo '一人あたりの予算は', $yosan, 'です。<br>';

        if(($ninzu >= 4) && ($ninzu <= 17) && ($yosan >= 3500)){
            echo 'グループメニューを注文できます';
        }else{
            echo 'グループメニューは注文できません。';
        }
            echo '<br>';

        $kion = 35;
        if($kion >= 25){
            if($kion >= 30){
                if( $kion >= 35){
                    echo 'もの';
                }
                echo 'すごく';
            }
            echo '暑い';
        }else{
            echo '暑くない';
        }
            echo '<br><br>';


            $str = '猫';
            echo $str, 'です。<br>', PHP_EOL;
            switch($str){
                case '犬':
                    echo 'ワンと鳴きます';
                    break;
                case '猫':
                    echo 'ニャーと鳴きます';
                    break;
                case '牛':
                    echo 'モーと鳴きます';
                    break;   
                default:
                    echo 'どのように鳴くのかな？';        
            }
            echo '<br><br>'; 

            $tensu =1;
            if($tensu == 100){
                echo '大変よくできました';
            }elseif($tensu >=60){
                echo 'よくできました';
            }else{
                echo '次回も頑張りましょう';
            }
            echo '<br><br>';


            $year = 2020;
            if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
                echo 'うるう年です';
            }else{
                echo 'うるう年ではありません';
            }
            
        ?>
    </body>
</html>            