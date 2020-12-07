
<?php  

$_POST = json_decode(file_get_contents("php://input"), true);

try{
    $pdo = new PDO('mysql:host=localhost;dbname=employees', 'root', 'admin');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// return false;

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $del1 = $pdo->prepare(
        "DELETE FROM `sd3`
        WHERE 
            `sd3`.`id`=:id ");
     $del2  =$pdo->prepare("UPDATE SD3 SET DeletedDate=now() where id=:id");
    $del2->bindValue(':id', $_POST["id"], PDO::PARAM_INT);
    $del2->execute(); 

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>