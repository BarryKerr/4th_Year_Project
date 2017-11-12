<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 28/02/2017
 * Time: 11:32
 */
require_once('conn.php');//open connection to the database

if(isset($_POST)) {
    $studentID = $_GET['id'];
    $sql = "DELETE FROM student where Student_ID = :studentID";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':studentID', $studentID);
    $stmt->execute();

    header('Location: http://52.26.52.79/home.php');
}