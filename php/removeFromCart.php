<?php
    require "./connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        $pdo = db::getInstance();
        $sql = "DELETE FROM cart WHERE book_id = :book_id AND customer_id = :customer_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":customer_id",$_SESSION["id"]);
        $stmt->bindParam(":book_id",$_POST["bookID"]);
        $stmt-> execute();
        // var_dump($_POST);
        // var_dump($_SESSION);
        header("location: ../cart.php");
        $pdo = null;
        exit;
    }
?>