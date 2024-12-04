<?php

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='d'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    $docid = $_SESSION['userId'];
    if($_POST){
        //import database
        include("../connection.php");
        $title=$_POST["title"];
        // $docid=$_POST["docid"];
        $date=$_POST["date"];
        $time=$_POST["time"];
        $sql="insert into schedule (docid,title,scheduledate,scheduletime) values ($docid,'$title','$date','$time');";
        $result= $database->query($sql);
        header("location: schedule.php?action=session-added&title=$title");
        
    }


?>