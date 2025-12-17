<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    device-width , iitial-scale=1.0">
    <title>Hidden Eye</title>
    <link rel="stylesheet" href="beauty2.css">  
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
    ["name" => "Heartless </br> سنگدل" , "desc" => "نویسنده:Marissa Maher" , "img" => "image/d11.jpg"],
    ["name" => "Haunting Adeline </br> شکار ادلاین" , "desc" => "نویسنده:H.D.Carlton" , "img" => "image/d12.jpg"],
    ["name" => "Toxic </br> سمی" , "desc" => "نویسنده:Nicole Blanchard" , "img" => "image/d13.jpg"],
    ["name" => "Now You're Mine </br> حالا تو مال منی" , "desc" => "نویسنده:Morgan Bridges" , "img" => "image/d14.jpg"],
    ["name" => "Bratva Prince  </br> عروس براتوا" , "desc" => "نویسنده:T.J.Maguire" , "img" => "image/d15.jpg"],
    ["name" => "Heartless </br> سنگدل" , "desc" => "نویسنده:H.D.Carlton" , "img" => "image/d16.jpg"],
    ["name" => "The Lies we Steal </br> دروغ هایی که میدزدیم" , "desc" => "نویسنده:Monty Jay" , "img" => "image/d17.jpg"],
    ["name" => "Reckless </br> بی پروا" , "desc" => "نویسنده:Lauren Roberts" , "img" => "image/d18.jpg"],
    ["name" => "Hooked </br> قلاب شده" , "desc" => "نویسنده:Emily Mclntire" , "img" => "image/d19.jpg"],
    ["name" => "From Blood and Ash </br> از خون و خاکستر" , "desc" => "نویسنده:Jennifer L. Armentrout" , "img" => "image/d20.jpg"],
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

<div class="more-content"><a href="./Hidden Eye.php" title="نمایش کمتر">بستن</a></div>

</div>
</body>
</html>