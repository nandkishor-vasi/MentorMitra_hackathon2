

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style/sign_in.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php
    include("php/config.php");
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
        if(mysqli_num_rows($verify_query) != 0){
            echo "<div class='message'>
                    <p>This email is used, Try another one</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) values('$username','$email','$age','$password')") or die("Error Occured");
            echo "<div class='message'>
                    <p>Registration Successfull!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
            
        }
    }else{
?>
            <header>Signup</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="age">Age</label>
                    <input id="age" name="age" type="number" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign-in</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>