<?php require "./config/connect.php" ?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id= '$id' ";
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        line-height: 1.3em;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        width: 800px;
        height: 400px;
        display: flex;
        gap: 8rem;
        border: 4px solid purple;
        border-radius: 10px;
        padding: 10px;
    }

    .card img {
        height: 100%;
    }
    .card-title{
        font-family: Tahoma;
        line-height: 1.2em;
    }
    .card-price{
        font-weight: 900;
        font-size: 1.7em;
        display: inline-block;
        margin-left: 30px;
        margin-top: 20px;
        padding-right:15px ;
    }
    .card .add {
        background: blue;
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        display: inline-block;
        width: 150px;
        text-align: center;
        padding: 7px;
        border-radius: 8px;
    }
    .back {
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(117,86,204,1) 0%, rgba(213,105,167,1) 90% );
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        display: inline-block;
        width: 180px;
        text-align: center;
        padding: 7px;
        border-radius: 8px;
        position: absolute;
        bottom: 30px;
        right: 5%;
    }
    .card-des{
        color: gray;
        font-size: 1.1em;
    }
    .card-info{
        margin-top: 40px;

    }
</style>

<body>
    <div class="card">
        <div>
            <img src="<?php echo $products['image'] ?>" alt="">
        </div>
        <div class="card-info">
            <h2 class="card-title"><?php echo $products['title'] ?></h2>

            <li class="card-details"><?php echo $products['details'] ?></li>
            <p class="card-des"><?php echo $products['des'] ?></p>
            <h2 class="card-price"><?php echo $products['price'] ?>$</h2>
            <a href="index.php" class="add">add to bag</a>
            <a href="index.php#products" class="back">back to home</a>
        </div>
    </div>
</body>

</html>