<?php
    if(isset($_POST['a']) && isset($_POST['b'])){
        switch($_POST['button']){
            case '+': $result = $_POST['a']+$_POST['b']; break;
            case '-': $result = $_POST['a']-$_POST['b']; break;
            case '*': $result = $_POST['a']*$_POST['b']; break;
            case '/': $result = $_POST['a']/$_POST['b']; break;
            default: $result = "Неопределенное значение!"; break;
        }
    }
    else
        $result = "";
	
?>
<html>
    <head>
        <title>Калькулятор</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="a" value="<?= $_POST['a'];?>">
            <input type="text" name="b" value="<?= $_POST['b'];?>">
            = <?php echo $result;?>
            

            <input type="submit" name="button" value="+">
            <input type="submit" name="button" value="-">
            <input type="submit" name="button" value="*">
            <input type="submit" name="button" value="/">
        </form>
    </body>
</html>
