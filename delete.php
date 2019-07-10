<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/12/19
 * Time: 9:51 AM
 */

//Connect to the database

$con = mysqli_connect('localhost','root','','may_syst');
//Check id the connection was successful

if (!$con){
    echo "Connection Failed";
}else{
    //Proceed by deleting
    //Start by checking if the delete has been clicked
    if (isset($_GET['id_yangu'])){
        $received_id = $_GET['id_yangu'];
        //Create the delete query
        $deleteQuery = "DELETE FROM majina WHERE id=$received_id";

        //Complete by finally deleting

        $delete = mysqli_query($con,$deleteQuery);

        //check if the deleting was successful

        if (!$deleteQuery){
            echo "Deleting Failed";
        }else{
            echo "Record Deleted successfully";
            header('location:viewUsers.php');
        }
    }
}


?>