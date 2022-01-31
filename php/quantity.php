<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require ("./connection.php");
        session_start();
        $pdo = db::getInstance();
        $sql = "UPDATE cart SET quantity = :quantity WHERE customer_id = :customer_id AND book_id = :book_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":quantity", $_POST["quantity"], PDO::PARAM_INT);
        $stmt->bindParam(":customer_id", $_SESSION["id"], PDO::PARAM_INT);
        $stmt->bindParam(":book_id", $_POST["book"], PDO::PARAM_INT);

        $stmt->execute();
        $pdo = null;
        header("location: ../cart.php");
        exit;
    }
?>