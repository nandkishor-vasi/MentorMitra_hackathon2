<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            padding: 0;
            margin: 0;
            scroll-behavior: smooth;
        }
        ::-webkit-scrollbar {
            width: 8px;
            /* Set the width of the scrollbar */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #616161;
            /* Set the color of the scrollbar thumb */
            border-radius: 5px;
            /* Add curves to the scrollbar thumb */
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* Set the color of the scrollbar track */
            border-radius: 5px;
            /* Add curves to the scrollbar track */
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        

        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .item-center {
            align-items: center;
        }

        .space-even {
            justify-content: space-evenly;
        }

        .nav-bar {
            position: fixed;
            z-index: 1;
            background-color: blue;
            width: 100%;
            height: 4rem;
            margin-top: -60px;
            display: flex;
            justify-content: space-between;
        }

        .nav-bar {
            img {
                width: 1.8rem;
                height: 1.7rem;
            }

            p {
                font-size: 1.2rem;
                font-weight: 700;
            }
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(250, 250, 252);
            gap: 1rem;
            list-style-type: none;
            font-size: 0.9rem;
            padding: 1rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .logo {
            border-radius: 10px 3px 5px 20px;
            width: 100px;
            height: 55px;
        }

        .sitename {
            font-family:'Times New Roman', Times, serif;
            font-size: 15rem;
        }

        li {
            border-radius: 4px;
            padding: 0.2rem;
        }

        li:hover {
            cursor: pointer;
            background-color: #5849c8;
        }

        li:active {
            transform: scale(0.95);
        }

            .menu  {
                font-family: 'Times New Roman', Times, serif;
                height: 16px;
                border: 1.5px solid rgb(255, 255, 255);
            }

        .left-nav {
            color: white;
            display: grid;
            margin-left: 5%;
            margin-top: 10%;
        }

        .left-nav a {
            color: white;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-top: 0.75rem;
            margin-right: 6rem;
        }

        .dropdown-content {
            i {
                color: black;
            }

            display: none;
            position: absolute;
            top: 2.3rem;
            background-color: azure;
            min-width: 10rem;
            box-shadow: 0 8px 16px;
            z-index: 1;
            padding: 0px 0px 0px 9px;
            border-radius: 10px;
        }

        .dropdown-content a {
            font-size: 14px;
            color: black;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: azure;
            text-decoration: none;
        }

        .dropdown:hover .down {
            display: none;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content div {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dropdown-content div:hover .down {
            display: flex;
        }

        .dropdown-content div:hover .right {
            display: none;
        }
        .user_logo{
            margin-right: 10px;
        }
        .manofprofile {
            
            border-radius: 50% ;
            padding: 14px;
            background-color: rgb(6, 6, 197);
        }









        .container {
            margin: 60px auto 50px;
            /* Adjusted margin to accommodate fixed navbar */
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            height: 40.5rem;

        }

        .heading {
            display: flex;
        }

        h1 {
            margin-top: 10px;
            color: #333;
            text-align: left;
            margin-bottom: 25px;
            margin-left: 9px;
        }

        .heading h2 {
            position: absolute;
            top: 113px;
            right: 9rem;
        }

        .right-box {
            display: block;
        }

        td {
            padding: 1rem 0.6rem 0 1.5rem;
        }

        .chart {
            padding: 11px 29px 11px 29px;
            border: 1px solid black;
            max-height: 290px;
            overflow-y: auto;
            position: absolute;
            right: 2rem;
            top: 10.5rem;
        }

        .top {
            position: absolute;
            top: 8.8rem;
            right: 2rem;
            padding-top: 0.2rem;
            display: flex;
            gap: 3.22rem;
            height: 1.5rem;
            background-color: rgb(193, 215, 244);
            border: 1px solid black;
            border-bottom: none;

            h3 {
                margin-left: 0.2rem;
                margin-right: 0.2rem;
            }
        }

        .total {
            position: absolute;
            background-color: rgb(187, 209, 254);
            top: 28rem;

            h2 {
                display: flex;
                margin-top: -25px;
            }

            .text {
                position: absolute;
                left: 0.4rem;

            }

            .tot-price {
                position: absolute;
                right: 0.72rem;
            }
        }

        .pay {
            display: grid;
            align-items: center;
            justify-content: center;
            gap: 33px;
            button {
                font-size: 2rem;
                font-weight: 700;
                width: 17.65rem;
                position: absolute;
                cursor: pointer;
            }
            a{
                text-decoration: none;
            }
            button:hover {
                background-color: rgb(230, 227, 227);
            }

            button:active {
                transform: scale(0.98);
                
            }
        }
        .qr {
            position: absolute;
            top: 21rem;
            border: 2px solid black;
        }
        
        .hidden {
            display: none;
        }

        .cart-items {
            max-height: 585px;
            /* Set the maximum height for scrolling */
            overflow-y: auto;
            /* Enable vertical scrolling */
            margin-bottom: 20px;
            width: 85%;
            position: relative;
            margin-top: -0.7rem;
        }

        .product {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #e0f2f1;
            /* Light blue background */
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
            height: 6rem;
        }

        .product img {
            width: 200px;
            height: auto;
        }

        .product-details {
            padding: 20px;
            text-align: left;
            display: flex;
            justify-content: space-between;
        }

        .product-details h2 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #333;
        }

        .product-details p {
            margin-bottom: 10px;
            color: #666;
        }

        .remove-btn {
            padding: 6px 10px;
            margin-top: 1rem;
            height: 2.5rem;
            font-size: 14px;
            background-color: #2196F3;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .remove-btn:hover {
            background-color: #0b7dda;
            /* Darker blue color on hover */
        }

        .remove-btn:active {
            transform: scale(0.9);
        }

        .total {
            margin-top: 11px;
            right: 31.88px;
            border: 1px solid black;
            border-top: none;
            width: 17.58rem;
            height: 2.5rem;
        }

        .checkout-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            /* Green color */
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #45a049;
            /* Darker green color on hover */
        }

        footer {
            margin-top: -34px;
        }

        .foot-panel1 {
    height: 20px;
    display: flex;
    background-color: white;
    color: black;
    padding: 1.5rem 0 1.5rem 0;
    align-items: center;
    justify-content: center;
    font-size: 1rem;

    a {
        padding: .7rem;
        border: 3px solid rgb(118, 219, 246);
        border-radius: 100rem;
        background-color: rgb(203, 241, 252);
    }

    a:hover {
        background-color: rgb(202, 225, 251);
    }

    a:active {
        transform: scale(0.95);
    }
}

        .foot-panel2 {
            background-color: #0068cf;
            color: white;
            display: flex;
            justify-content: space-evenly;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        ul a {
            display: block;
            font-size: 0.85rem;
            margin-top: 10px;
            color: #dddddd;
        }

        ul p {
            font-weight: 750;
        }

        ul {
            display: block;
            margin-top: 20px;
        }

        .logo {
            background-image: url("amazon_logo.png");
            background-size: cover;
            height: 50px;
            width: 100px;
        }

        .foot-panel4 {
            background-color: #004a99;
            color: white;
            height: 80px;
            display: block;
            justify-content: center;
            align-items: center;
            font-size: 0.7rem;
            text-align: center;
        }

        .pages {
            padding-top: 25px;
        }

        .copyright {
            padding-top: 6px;
        }
        
    </style>
    <script>
        function scrollToHeight(height) {
            window.scrollTo({
                top: height,
                behavior: 'smooth' // Smooth scrolling
            });
        }

        function toggleImage() {
            var img = document.getElementById("scanner");
            img.classList.toggle("hidden"); // Toggle the 'hidden' class
        }

    </script>
</head>

<body>
    <nav>
        <div class="nav-bar flex">
            <ul class="flex">
                <img src="Final Logo.png" alt="logo">
                <p class="sitename">MentorMitra</p>
            </ul>
            <ul class="flex justify-center item-center">
                <!-- <li>
                    <div style="cursor: pointer">
                    <div class="flex item-center menu"
                        style="gap: 6px; border-radius: 0.5rem;padding: 0.5rem;margin-bottom: 1rem;">
                        <i class="fa-solid fa-bars"></i>
                        <p>Explore Courses</p>
                    </div>
                </li> -->
                    <div class="dropdown"> 
                        
                        <div class="user_logo ">
                        <i class="fa-solid fa-user manofprofile"></i>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                
                <div class="dropdown-content">             <!--This content will be hidden before hovering on explore courses -->
                    <div>
                        <i class="fa-solid fa-arrow-right right"></i>       <!--Arrow right before hovering on particular course -->
                        <i class="fa-solid fa-arrow-down down"></i>         <!--Arrow below after hovering on particular course -->
                        <a href="home.php">My Profile</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right right"></i>
                        <i class="fa-solid fa-arrow-down down"></i>
                        <a href="mycart.php">My Cart</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right right"></i>
                        <i class="fa-solid fa-arrow-down down"></i>
                        <a href="logout.php">Log out</a>
                    </div>
                </div>
            </div>
        </ul>
        </div>
    </nav>


    <div class="container">
        <div class="left-box">
            <div class="heading">
                <h1>My Cart</h1>
            </div>
            <?php 
                        $total = 0;
                        if(isset($_SESSION['cart'])) 
                        {
                            foreach($_SESSION['cart'] as $key => $value) {
                                {
                                    $total = $total + $value['Price'];
                                    echo "
                                      
                                      <div class='cart-items'>
                                          <div class='product'>
                                              <div class='product-details'>
                                                  <h2>$value[Item_Name]</h2>
                                                  <p>Price: $value[Price]$</p>
                                                  <form action='manage_cart.php'method='POST'>
                                                      <button name='Remove_Item' class='remove-btn'>REMOVE</button>
                                                      <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                  </form>
                                                </div>
                                            </div>
                                      </div>
                                    ";
                                }
                            }
                        }
                        ?>
            
            

                    <div class=' flex justify-center item-center' style="gap:5px">
                        <div>
                            <p style="font-size: 2.2rem;" >Total:</p>
                            <p style="font-size: 2.2rem;"><?php echo "$total$" ?></p>
                        </div>
                        <div class="pay" style="bottom:0">
                            <div style="display: grid; align-items: center; justify-content: center;">
                                <button onclick='scrollToHeight(180), toggleImage()'>Pay Now</button>
                            </div>
                            <div>
                                <img class='hidden'  id='scanner' src='data:image/png;base64,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' alt='QR Scaanner'>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
</body>

</html>