<?php 
include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-log-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Course 1">
                        <input type="hidden" name="Price" value="450">
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-log-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item Name" value="Course 1">
                        <input type="hidden" name="Item Name" value="Course 2">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>