
<?php  
try{
$pdo =new PDO('mysql:host=localhost;dbname=employees', 'root' , 'admin');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt=$pdo->query("SELECT * FROM  sd3 WHERE DeletedDate is not null");
$informations=$stmt->fetchAll();



foreach($informations as $key=>$val){
    $informations[$key]['edit']=false;
}


}catch(PDOExecution $e){
    echo $e->getMessage();  
}

print_r(json_encode($informations))
?>