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
            height: 250px;
            background-color: #47b8ddff;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    
</body>
<?php
if(isset($_GET['id']) == true){
    $year = substr($_GET['id'],0,3);
    $month = substr($_GET['id'],3,2);
    $day = substr($_GET['id'],5,2);
    $birthPlace = substr($_GET['id'],7,2);
    $gender = $_GET['id'][12];
    echo "year of birth: ".($year[0] + 17) . (substr($year,1,2)) . "<br>";
    echo "month of birth: ";
    $months = [
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
];
$egyptGovernorates = [
    '01' => 'Cairo',
    '02' => 'Alexandria',
    '03' => 'Port Said',
    '04' => 'Suez',
    '11' => 'Damietta',
    '12' => 'Dakahlia',
    '13' => 'Sharqia',
    '14' => 'Qalyubia',
    '15' => 'Kafr El Sheikh',
    '16' => 'Gharbia',
    '17' => 'Monufia',
    '18' => 'Beheira',
    '19' => 'Ismailia',
    '21' => 'Giza',
    '22' => 'Beni Suef',
    '23' => 'Fayoum',
    '24' => 'Minya',
    '25' => 'Asyut',
    '26' => 'Sohag',
    '27' => 'Qena',
    '28' => 'Aswan',
    '29' => 'Luxor',
    '31' => 'Red Sea',
    '32' => 'New Valley',
    '33' => 'Matrouh',
    '34' => 'North Sinai',
    '35' => 'South Sinai',
    '88' => 'Born Outside the Arab Republic of Egypt'
];
    echo $months[$month] . "<br>";
    echo "day of birth: " . $day . "<br>";
    echo "city of birth: " . $egyptGovernorates[$birthPlace] . "<br>";
    echo "gender: ";
    if($gender % 2 == 0){
        echo'female<br>';
    }
    else{
        echo'male<br>';
    }
    
}
else{
    echo'<form action="id.php" method="get">
        <p>enter your id number</p>
        <input type="text" name = "id">
        <br><br>
        <input type="submit" id = "submit">
    </form>';
}
?>
</html>