<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    
        $servername = "localhost";
        $username = "root";
        $password ="";      
        $db = "studentdetails";

        $conn = mysqli_connect($servername,$username,$password,$db);

        if($conn)
        {
           // echo "Conected succesfully";
        }
        else
        {
            die("connection failed").mysqli_connect_error();
        }
    ?>
</body>
</html>