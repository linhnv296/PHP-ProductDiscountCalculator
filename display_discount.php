<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            width: 170px;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount_percent = $_POST["discount_percent"];
    $discount_Amount = ($price*$discount_percent)/100;
    $discountprice = $price - $discount_Amount;
}
?>

<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post">
        <div id="data">
            <label>Product Description:</label>
            <span><?php echo $description?></span><br>
            <label>List Price:</label>
            <span><?php echo $price?></span><br>
            <label>Discount Percent:</label>
            <span><?php echo $discount_percent?></span>(%)<br>
            <label>Discount Amount:</label>
            <span><?php echo $discount_Amount?></span><br>
            <label>Discount Price:</label>
            <span><?php echo $discountprice?></span><br>
        </div>

        <a href="index.php"><div id="buttons">
            <input type="" onclick="" value="Calculate Discount">
        </div></a>
    </form>

</div>
</body>
</html>
<?php
