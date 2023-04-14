<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sum</title>
</head>

<body>
    <center>
        <form action="index.php" method="post">
            Num 1 : <input type="number" name="num1"><br><br>
            Num 2 : <input type="number" name="num2"><br><br>
            <button type="submit" name="submit">submit</button>
        </form>

        <h3>Result</h3>
   

    <?php
    if (isset($_POST['submit'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

       $sum = $num1+$num2;

       echo "Number1 = $num1<br><br>";
       echo "Number2 =$num2<br><br>";
       echo "Result = ".$sum;
       

    }

    ?>
 </center>
</body>

</html>