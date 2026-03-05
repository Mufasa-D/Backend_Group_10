<?php 
    include("top_header.htm");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEE:Ghana | Travel & Tours</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="background-color: #f1f1f1;">    
    <nav>
        <div class="container nav-flex">
            <div class="logo">SEE:<span>Ghana</span></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="#"  style="border-bottom: 3px solid #333;">Check Status</a></li>
                <li><a href="contacts.htm">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br>
        
    <main> 
        <div class="container-form" style="margin-top: 50px;">
            <H1>Sign in </H1>
            <p>Not signed up yet? <a href="signup.php">Sign Up</a></p> <br>  
                <form action="login_logic.php" method="post">
                    <input type="text" name="firstname" placeholder="Firstname" required> <br>
                    <input type="text" name="lastname" placeholder="Lastname" required> <br>
                    <input type="email" name="email" placeholder="Email" required> <br>
                    <input type="submit" name="button" value="View Reservation">
                    <?php 
                        // checking if user entered wrong details
                        if (!isset($_GET['login'])) {
                            echo '<script>alert("SignUp was successful!")</script>';
                            exit();
                        } else {
                            //displaying errors
                            $signup_check = $_GET['login'];

                            //displaying error messages per get request value
                            if ($signup_check == "char") {
                                echo "<p style='color: red; font-weight: 500px;'> Invalid login details. Try Again</p>";
                                exit();
                            }elseif ($signup_check == "email"){
                                echo "<p style='color: red;'> Incorrect Email. Try Again </p>";
                                exit();
                            }
                        }
                    ?>
                </form>
            </div>
    </main>
    <br>
</body>
</html>