
<?php  

$_POST = json_decode(file_get_contents("php://input"), true);


try{
    $pdo = new PDO('mysql:host=localhost;dbname=employees', 'root', 'admin');
//     echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// return false;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare(
        "INSERT INTO sd3(
            emp_id,
            emp_name,
            birthdate,
            Hired_date,
            CreatedDate,
            DeletedDate,
            UpdatedDate,
            UpdatedByCode)
        VALUES (
            :emp_id,
            :emp_name,
            :birthdate,
            :Hired_date,
            :CreatedDate,
            :DeletedDate,
            :UpdatedDate,
            :UpdatedByCode)"
    );
    $stmt->bindValue(':emp_id', $_POST["no"], PDO::PARAM_STR);
    $stmt->bindValue(':emp_name', $_POST["name"], PDO::PARAM_STR);
    $stmt->bindValue(':birthdate', $_POST["bday"], PDO::PARAM_STR);
    $stmt->bindValue(':Hired_date', $_POST["datehired"], PDO::PARAM_STR);
    $stmt->bindValue(':CreatedDate',date('Y-m-d h:i:s'), PDO::PARAM_STR);
    $stmt->bindValue(':DeletedDate', NULL, PDO::PARAM_STR);
    $stmt->bindValue(':UpdatedDate',date('Y-m-d h:i:s') , PDO::PARAM_STR);
    $stmt->bindValue(':UpdatedByCode', '37757', PDO::PARAM_STR);
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