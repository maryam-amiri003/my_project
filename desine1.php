<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    device-width , iitial-scale=1.0">
    <title>Hidden Eye</title>
    
    <link rel="stylesheet" href="beauty1.css">  
</head>
<body dir="rtl">

<?php

$countries =[
    ["name" => "Wolf in Sheeps Clothing </br> گرگ در لباس میش " , "desc" => "نویسنده:George Simon" ,  "img" => "image/d1.jpeg"],
    ["name" => "The Shadows Between </br> سایه های میان ما" , "desc" => "نویسنده:Trisha Lonsler" , "img" => "image/d2.jpeg"],
    ["name" => "More Foxy than Foxy </br> روباه تر از روباه" , "desc" => "نویسنده:Ito J. Griffith" , "img" => "image/d3.jpeg"],
    ["name" => "Dracula </br> دراکولا" , "desc" => "نویسنده:Bram Stoker" , "img" => "image/d4.jpeg"],
    ["name" => "Dark Psychological Secrets </br> رازهای روانشناسی تاریک" , "desc" => "نویسنده:William Cooper" , "img" => "image/d5.jpeg"],
    ["name" => "A Girl With all the Gifts </br> دختری با تمام موهبت ها" , "desc" => "نویسنده:Mike Carey" , "img" => "image/d6.jpeg"],
    ["name" => "Twilight </br> گرگ و میش" , "desc" => "نویسنده:Stephanie Meyer" , "img" => "image/d7.jpeg"],
    ["name" => "Exorcist </br> جن گیر" , "desc" => "نویسنده:William Peter Blatty" , "img" => "image/d8.jpeg"],
    ["name" => "Death Zone </br> محدوده ی مرگ" , "desc" => "نویسنده:Catherine Arden" , "img" => "image/d9.jpeg"],
    ["name" => "Magic Shop </br> مغازه جادویی" , "desc" => "نویسنده:James R.Doty" , "img" => "image/d10.jpeg"],
];   
?>

<header>
<h1 class="typing">Hidden Eye</h1>
</header>

<div class="nav-bar">
<nav>
    <a her="#">صفحه اصلی</a>
    <a her="#">کتاب متنی</a>
    <a her="#">کتاب صوتی</a>
    <a hre="#">ارتباط با ما</a>
</nav>
</div>

<div class="box">

<div class="container">
 
<?php
foreach ($countries as $country ){
    echo '<div class="card">';
    echo '<img src="' . $country['img'] . '"alt="' . $country['name'] . '">';
    echo "</br>";
    echo "<h3>" . $country['name'] ."</h3>";
    echo "<p>" . $country['desc'] . "</p>";
    echo "</div>";
}
?>
</div>

</br>
</br>

<div class="more-content"><a href="./Hidden Eye2.php" title="بیشتر">بیشتر</a></div>

</div>
</body>
</html