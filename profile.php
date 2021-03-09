<?php 



require  'databaseconnection1.php';


?>


<!DOCTYPE HTML>
<html>

<head>
    <title>data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>Posts|| <a href="formpost.php">form</a></h1>

        </div>






        <table class='table table-hover table-bordered table-dark'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
            </tr>




<?php 
             while($data = mysqli_fetch_assoc($result)){

              
                echo '<tr>';
            
                echo '<td>'.$data["id"].'</td>';
                echo '<td>'.$data["name"].'</td>';
                echo '<td>'.$data["phone"].'</td>';
                echo '<td>'.$data["email"].'</td>';
                echo '<td>'.$data["password"].'</td>';

                echo '</tr>';

              }

//


?>







        </table>

    </div>



</body>

</html>