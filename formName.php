<?php
    header('Content-type: http/html; charset=UTF-8');
?>
<html>
    <body>
        <?php
        $name = $_POST['name'];
        $name = htmlspecialchars($name,ENT_QUOTES, 'UTF-8');
        echo $name,'さん、こんにちは！';   
        ?>
    </body>
</html>         
