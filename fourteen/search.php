<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product search</title>
</head>

<body>
    <center>
        <form action="search.php" method="post">
            Enter your product Name : <input type="text" name="searchproduct"><br><br>
            <input type="submit" name="search" value="Search">
        </form>

        <?php
        include("connection.php");
        if (isset($_POST['search'])) {
            $search = $_POST['searchproduct'];

            $sql = "SELECT * FROM product WHERE  product_name = '$search'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <table border="5px" style="border: green;">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Descrption</th>
                        <th>Unit Cost</th>
                        <th>TaX Rate</th>
                        <th> Expiry Date</th>
                    </tr>
                    <tr>
                        <td><?php echo $row['product_id'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['unit_cost'] ?></td>
                        <td><?php echo $row['tax_rate'] ?></td>
                        <td><?php echo $row['expiry_date'] ?></td>
                    </tr>


                </table>
        <?Php }
        } ?>
    </center>
</body>

</html>