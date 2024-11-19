

<!-- connection.php-->
<!-- Connection To MYSQL Database -->
<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "edoc";

    $con = mysqli_connect($server,$username,$password,$db);

    if($con)
    {
        echo "";
    }
    else
    {
        echo "Error in Connection";
    }
?>