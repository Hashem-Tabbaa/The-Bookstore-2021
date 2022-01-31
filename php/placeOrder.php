<?php
	session_start();
	require "./connection.php";
    $pdo = db::getInstance();
    $sql = "UPDATE cart SET confirmed = true WHERE customer_id = :customer_id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(":customer_id",$_SESSION["id"],PDO::PARAM_STR);
	try{
        $stmt->execute();
    }catch(PDOException $e){
        $sql = "DELETE FROM cart WHERE customer_id = :customer_id AND confirmed = false";
	    $stmt = $pdo->prepare($sql);
	    $stmt->bindParam(":customer_id",$_SESSION["id"],PDO::PARAM_STR);
        $stmt->execute();
        header("location: ../cart.php");	
    }
    $_SESSION["confirmed"] = true;
    header("location: ../cart.php");	
    $pdo = null;
?>