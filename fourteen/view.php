<!DOCTYPE html>
<html lang="en">

<head>
    <title>VIEW</title>
</head>

<body>
    <center>
        <h2>product Details</h2>
        <table border="5px" style="color: green;">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Descrption</th>
                <th>Unit Cost</th>
                <th>TaX Rate</th>
                <th> Expiry Date</th>
            </tr>
            <?php
            include('connection.php');
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['product_id'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['unit_cost'] ?></td>
                    <td><?php echo $row['tax_rate'] ?></td>
                    <td><?php echo $row['expiry_date'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br><br>
        <a href="search.php" style="color: orange; border-radius: 4px;">Search</a>
    </center>
</body>

</html>