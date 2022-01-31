<?php
    require "connection.php";

    // if(isset($_SESSION["loggedin"] && $_SESSION["loggedin"] === true)){
    //     header("location: ./index.php");
    //     exit;
    // }
    $pdo = db::getInstance();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phoneNumber = $_POST["phoneNumber"];
        $city = $_POST["city"];
        $place = $_POST["place"];
        $streetName = $_POST["streetName"];
        $buildingNumber = $_POST["buildingNumber"];
        
        $sql = "SELECT customer_id FROM customer WHERE email = :email";
        $statement = $pdo-> prepare($sql);
        $statement-> bindParam(":email", $email, PDO::PARAM_STR);
        if($statement->execute()){
            if($statement->rowCount() == 1){
                session_start();
                $_SESSION['uniqueEmail'] = false;
                header("location: ../signup.php");
                exit;
            }
        }else echo 'Something went wrong... Try again later';
        unset($statement);

        $sql = "INSERT INTO customer (customer_id, first_name, last_name, email, phone_number, password, place, street_name, building_number, city)
        VALUES (NULL, :firstName, :lastName, :email, :phoneNumber, :password, :place, :streetName, :buildingNumber, :city);";
        $statement = $pdo-> prepare($sql);
        $statement-> bindParam(":firstName" , $firstName, PDO::PARAM_STR);
        $statement-> bindParam(":lastName" , $lastName, PDO::PARAM_STR);
        $statement-> bindParam(":email" , $email, PDO::PARAM_STR);
        $statement-> bindParam(":phoneNumber" , $phoneNumber, PDO::PARAM_STR);
        $statement-> bindParam(":password" , $password, PDO::PARAM_STR);
        $statement-> bindParam(":place" , $place, PDO::PARAM_STR);
        $statement-> bindParam(":streetName" , $streetName, PDO::PARAM_STR);
        $statement-> bindParam(":buildingNumber" , $buildingNumber, PDO::PARAM_STR);
        $statement-> bindParam(":city" , $city, PDO::PARAM_STR);

        $statement-> execute();
        unset($statement);
        $pdo = null;
        header("location: ../login.php");
    }
?>