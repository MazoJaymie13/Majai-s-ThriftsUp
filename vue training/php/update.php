
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
    $stmt = $pdo->prepare(
        "UPDATE `sd3`
         SET 
            `emp_id`=:emp_id,
            `emp_name`=:emp_name,
            `birthdate`=:birthdate,
            `Hired_date`=:Hired_date,
            `UpdatedDate`=now(),
            `UpdatedByCode`='34782'
        WHERE 
            `sd3`.`id`=:id ");
       
    $stmt->bindValue(':id', $_POST["id"], PDO::PARAM_INT);
    $stmt->bindValue(':emp_id', $_POST["emp_id"], PDO::PARAM_STR);
    $stmt->bindValue(':emp_name', $_POST["emp_name"], PDO::PARAM_STR);
    $stmt->bindValue(':birthdate', $_POST["birthdate"], PDO::PARAM_STR);
    $stmt->bindValue(':Hired_date', $_POST["Hired_date"], PDO::PARAM_STR);
    $stmt->execute();

    
    // $stmt= $pdo->prepare("INSERT INTO sd3 (`emp_id`, `emp_name`, `birthdate`, `Hired_date`) 
    // VALUES(:emp_id, :emp_name , :birthdate, :Hired_date");
    // $stmt->bindValue(':emp_id', $_POST["no"], PDO::PARAM_STR);
    // $stmt->bindValue(':emp_name', $_POST["name"], PDO::PARAM_STR);
    // $stmt->bindValue(':birthdate', $_POST["bday"], PDO::PARAM_STR);
    // $stmt->bindValue(':Hired_date', $_POST["datehired"], PDO::PARAM_STR);
// $stmt->bindValue(':created_date' , date('Y-m-d h:i:s'), PDO::PARAM_STR);
// $stmt->bindValue(':deleted_date' , null, PDO::PARAM_STR);
// $stmt->bindValue(':updated_date' , date('Y-m-d h:i:s'),  PDO::PARAM_STR);

} catch (PDOException $e) {
    echo $e->getMessage();
}


// header( "location:../");

?>