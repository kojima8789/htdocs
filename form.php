<?php
    header('Content-type: text/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
            $name = $_POST['namae'];
            $name = htmlspecialchars( $name, ENT_QUOTES, 'UTF-8');
            echo 'あなたの名前は',$name,'さんですね<br>'; 
            $tel = $_POST['denwa'];
            $tel = htmlspecialchars( $tel, ENT_QUOTES, 'UTF-8');
            echo 'あなたの電話番号は', $tel,'ですね';
        ?>      
    </body>
</html>        