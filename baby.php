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





//  $dirname = "./files/baby/";
// $images = scandir($dirname);
// $ignore = Array(".", "..");
// foreach($images as $curimg ){
//     if(!in_array($curimg, $ignore)) {
//     //    echo $curimg  . "<br>";
//     // echo "<img src='./files/baby/$curimg/' /><br>\n";
//     $newdir='./files/baby/'.$curimg . '/' ;
//     $images1 = scandir($newdir);
//     $ignore1 = Array(".", "..");
//     foreach ( $images1 as $val){
//         if(!in_array($val, $ignore1)) {
//         echo "<img src='./files/baby/$curimg/$val' />\n";
//         }
//     }

//     }
// } 

	try{
		$pdo = new PDO('mysql:host=localhost;dbname=majai_thriftsup','root','admin');
		$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		$stmt = $pdo->query(
		"SELECT * FROM images"
		);
		$tbody = '';
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$tbody .=  '<img src="'.$row['FileName'] .'">';
			
				}
		
	}catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?> 

<?=$tbody?>

