<?php
    $error = "";
    $x = "";
    $y = "";
    $result = "";


    if(isset($_GET['operation'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];


        if(is_numeric($x) && is_numeric($y)){
            switch($op){
                case 'add' : $result = $x + $y;
                    break;
                case 'sub' : $result = $x + $y;
                    break;
                case 'pro' : $result = $x + $y;
                    break;
                case 'div' : $result = $x + $y;
                    break;
            }
        }else{
            $error = "Enter Number first";
        }


    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goddy - php calculator</title>
</head>
<body>

    <h1><?= $error ?></h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <div>
            <label for="num 1">Number 1<"></label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div>

        <div>
            <label for="num 2">Number 2<"></label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>">
        </div>

        <div>
        <label for="result">Result<"></label>
        <input type="number" id="result" value="<?= $result ?>"disabled>
        </div>

        <div>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="pro" name="operation">
            <input type="submit" value="div" name="operation">
        </div>

    </form>
</body>
</html>