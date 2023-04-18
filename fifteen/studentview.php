<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student View</title>
</head>

<body>
    <center>
        <form action="studentview.php" method="post">
            Enter student Roll NO : <input type="number" name="rollno"><br><br>
            <input type="submit" name="search" value="Search">
        </form><br><br>
        <table border="5px" style="color: green;">
            <tr>
                <th>Name</th>
                <th>Mark</th>
                <th>Grade</th>
            </tr>


            <?php
            include('connection.php');
            if (isset($_POST['search'])) {
                $rollno = $_POST['rollno'];
                $sql = "SELECT * FROM student WHERE rollno = '$rollno'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {

            ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['mark'] ?></td>
                            <td><?php echo $row['grade'] ?></td>
                        </tr>

            <?php
                    }
                }
            }
            // }
            ?>
        </table>
    </center>

</body>

</html>