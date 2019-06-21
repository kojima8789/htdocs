<?php
    header('Content-type: text/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
        function kakeNum( $dat1,$dat2){
            $yyy = $dat1 * $dat2;
            return($yyy);
        }   

        $ans = kakeNum(3,7);
        echo '結果は', $ans,'です。<be><br>';


        function chkkisu($aaa){
            return $aaa %2;
        }

        $num = 5;
        if(chkkisu($num)){
            echo '奇数です';
        }
        ?>
    </body>
</html>        