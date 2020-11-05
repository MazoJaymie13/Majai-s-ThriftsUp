<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Clothes</title>

    <style>
        img1{
            width:50px ; height:50px;
        }
    </style>
</head>
<body>
    <?php 
    
// $dirname = "./files/baby/";
// $images = scandir($dirname);


// $ignore = Array(".", "..");
// foreach($images as $curimg ){
//     if(!in_array($curimg, $ignore)) {
//        echo $curimg . "<br>";
//     echo "<img src='./files/baby/$curimg' /><br>\n";

//     }
// }


$dirname = "./files/baby/";
$images = scandir($dirname);
$ignore = Array(".", "..");
foreach($images as $curimg ){
    if(!in_array($curimg, $ignore)) {
    //    echo $curimg  . "<br>";
    // echo "<img src='./files/baby/$curimg/' /><br>\n";
    $newdir='./files/baby/'.$curimg . '/' ;
    $images1 = scandir($newdir);
    $ignore1 = Array(".", "..");
    foreach ( $images1 as $val){
        if(!in_array($val, $ignore1)) {
        echo "<img src='./files/baby/$curimg/$val' />\n";
        // echo  $val . "<br> <br> <br>";
        }
    }

    }
}
?> 

</body>
</html>

