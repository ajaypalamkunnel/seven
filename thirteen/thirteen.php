<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK STORE</title>
</head>

<body>
    <?php
    include('connection.php');
    ?>
    <center>
        <h4>search Your Book</h4><br><br>
        <form action="thirteen.php" method="POST">
        Enter your book name : <input type="text" name="title"><br><br>
        <input type="submit" name="searchbutton" value="search">

        </form><br><br>
        
    
    <?Php
       // $searchName = $_POST['title'];

        $sql = "SELECT * FROM store WHERE title = '$_POST[title]'";

        $result = mysqli_query($conn,$sql);

        if($result)
        {
            while($row=mysqli_fetch_array($result))
            {
        
        
    ?>
    <table border="5px" style="border: green;">
        <tr>
            <th>Book NO</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th> Date of Purchase</th>
        </tr>
        <tr>
        <td>
           <?php
           echo $row['bookno'];
           ?> 
        </td>
        <td>
           <?php
           echo $row['title'];
           ?> 
        </td>
        <td>
           <?php
           echo $row['author'];
           ?> 
        </td>
        <td>
           <?php
           echo $row['price'];
           ?> 
        </td>
        <td>
           <?php
           echo $row['dateofpurchase'];
           ?> 
        </td>
        </tr>
        
    </table>
    <?php
            }
        }
    ?>
    </center>

</body>

</html>