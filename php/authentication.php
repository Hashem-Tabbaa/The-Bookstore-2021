<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        require "connection.php";
        $pdo = db::getInstance();
        
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM customer WHERE email = :email";
        
        $stmt = $pdo-> prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt-> execute();
        if($stmt-> rowCount() == 1){
            if($row = $stmt-> fetch()){
                if($row["password"] == $password){
                    // session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $row["customer_id"];
                    $_SESSION["email"] = $email;
                    $_SESSION["name"] = $row["first_name"];
                    header("location: ../index.php");
                    exit;
                }
                $_SESSION["login_status"] = "Wrong Password";
            }
        }else{
            $_SESSION["login_status"] = "Invalid username";
        }
        header("location: ../login.php");
    }else{
        header("location: ../login.php");
    }
?>