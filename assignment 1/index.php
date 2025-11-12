<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 90vh;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 250px;
            height: 300px;
            background-color: #47b8ddff;
            border-radius: 6px;
        }
        img{
            width: 100px;
            height: 200px;
        }
    </style>
</head>
<body>
    
</body>
<?php
if(isset($_GET['height']) == true && isset($_GET['weight']) == true && isset($_GET['gender']) == true){
    $x = ($_GET['weight'] / (($_GET['height'] * $_GET['height']) / 10000));
    echo 'your BMI = ' . $x . "<br>";
    if($x < 18.5){
        echo '<img src = "18.5.png">';
    }
    else if($x < 25){
        echo '<img src = "25.png">';
    }
    else if($x < 30){
        echo '<img src = "30.png">';
    }
    else if($x < 35){
        echo '<img src = "35.png">';
    }
    else{
        echo '<img src = "40.png">';
    }
}
else{
    echo'<form action="index.php" method="get">
        <p>Gender</p>
        <div>
        <input type="radio" name = "gender" value="male">male
        <input type="radio" name = "gender" value="female">female
        </div>
        <p>your height in cm</p>
        <input type="number" name = "height">
        <p>your weight in kg</p>
        <input type="number" name = "weight">
        <br><br>
        <input type="submit">
    </form>';
}
?>
</html>