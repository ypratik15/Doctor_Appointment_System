<<<<<<< HEAD


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
=======


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
>>>>>>> bbca2a33b6c8aa9f6cb20b184ef166bb37af2f3f
?>