<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 28/02/2017
 * Time: 12:06
 */
require_once('conn.php');//open connection to the database

$moduleID = $_POST['moduleID'];

$lecturer = $_POST['lecturer'];

if(isset($_POST)) {
   // $sql = "update student set f_name = :fname,surname = :sname,email = :email, password = :password where Student_ID = :studentID";
    $sql = "update module set Lecturer_ID = :lecturerId where module_id = :moduleID";
    $stmt = $handler->prepare($sql);
    $stmt->bindParam(':lecturerId', $lecturer);
    $stmt->bindParam(':moduleID', $moduleID );


    $stmt->execute();

    header('Location: http://52.26.52.79/editDeleteModule.php');
}