<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/11/19
 * Time: 9:53 AM
 */

if (isset($_GET['btn_save'])){
    $inputName = $_GET['name'];
    $inputEmail = $_GET['email'];
    $inputPassword = $_GET['password'];

    //To save data connect to the db;

    $con = mysqli_connect("localhost","root","","may_syst");

    //check if the connection was successful

    if (!$con){
        echo "Connection Failed";
    }else{
        //proceed to save data to the db
        //start by creating the insert query

        $insertQuery = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputName','$inputEmail','$inputPassword')";
      //Check if the insert query is correct

        if (!$insertQuery){
            echo "Error on insertQuery";
        }else{
            //Proceed to finally write data to db

            $ingiza = mysqli_query($con,$insertQuery);
            //check if the data was saved successfully

            if (!$ingiza){
                echo "Saving Failed";
            }else{
                echo "Saved Successfully";
          //      header('location:saveUser.php');
                echo "<br>";
                echo "<a href='saveUser.php'>Add More People</a>";
                echo "<br>";
                echo "<a href='viewUsers.php'>Check Saved</a>";
            }
        }


    }

}





?>