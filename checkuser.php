<?php
try{
     $pdo=new PDO('mysql:host=localhost;dbname=pms', 'root', 'admin');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt=$pdo->prepare ("select * from m_users where Usercode=:username and Password=:password");
     $stmt->bindvalue(':username',$_REQUEST['username'] ,PDO::PARAM_STR);
     $stmt->bindValue(':password',$_REQUEST['password'] , PDO::PARAM_STR);
     $stmt->execute();
      $cnt=$stmt->rowCount(); 
     while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
         $session=$row;
     }
}catch(PDOExecution $e){
    echo $e->getMessage();
}



?>