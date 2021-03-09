<?php

$server   = "localhost";
$userName = "root";
$password = "";
$dbName   = "usersnti";


    $con = mysqli_connect($server,$userName,$password,$dbName);


if(!$con)  {


    die ('error:' .mysqli_connect_error());
}

else{
    if($_SERVER["REQUEST_METHOD"] == "POST");{

        $name = $_POST['name'];  
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $password= $_POST['password'];


        $sql  = "insert into users (name,phone,email,password) values ('$name','$phone','$email','$password'" ;

        $res =  mysqli_query($con,$sql);
    
if($res){

    echo"success data";


}

else{

    echo  "error".mysqli_error($con);
}





    }

    }







    





?>