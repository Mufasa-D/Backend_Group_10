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
        <div class="Background-palette">
            
            <div class="container-form">
                <H1>Register </H1>
                <p><span style="color: #7ab730;">NB:</span>  Payment must be made within 5 days after reservation is booked.</p> 
                <p>Already booked a reservation? <a href="login.php">View Reservation</a></p> <BR>
                <form action="signup_logic.php" method="post" enctype="multipart/form-data">
                    <label style="margin-right: 210px;" for="passport_pic">Upload Passport Picture</label>
                    <input type="file" name="passport_pic" id="pic" required>
                    <?php 
                        if (isset($_GET['firstname'])){
                            $Fname = $_GET['firstname'];
                            echo '<input type="text" name="firstname" placeholder="Firstname" value="'.$Fname.'" required> <br>';
                        } else {
                            echo '<input type="text" name="firstname" placeholder="Firstname" required> <br>';

                        } if (isset($_GET['lastname'])){
                            $Lname = $_GET['lastname'];
                            echo '<input type="text" name="lastname" placeholder="Lastname" value="'.$Lname.'" required> <br>';
                        } else {
                            echo '<input type="text" name="lastname" placeholder="Lastname" required> <br>';
                        
                        } if (isset($_GET['email'])){
                            $email = $_GET['email'];
                            echo '<input type="email" name="email" placeholder="Email" value="'.$email.'" required <br>';
                        } else {
                            echo '<input type="email" name="email" placeholder="Email" required  <br>';
                        }
                        echo ' <select name="reg_type" required>
                                    <option selected hidden value="">Select Registeration type</option>
                                    <option value="Premium Experience ($999)">Premium Experience ($999)</option>
                                    <option value="Regualar Experience ($555)">Regualar Experience ($555)</option>
                                </select> <br>
                                <select name="pay_time" required>
                                    <option selected hidden value="">Pay Now or Later?</option>
                                    <option value="Pay Now">Pay Now</option>
                                    <option value="Pay Later">Pay Later</option>
                                </select> <br>
                                <input type="submit" name="button" value="Book Reservation">';
                    ?>
                    <?php 
                        // checking if user was not redirected back to this page
                        if (!isset($_GET['signup'])) {
                            exit();
                        } else {
                            //storing the get request in variable
                            $signup_check = $_GET['signup'];
                
                            //displaying error messages per get request value
                            if ($signup_check == "char") {
                                echo "<p style='color: red; font-weight: 500px;'> Invalid name entered. Try again </p>";
                                    exit();
                            }elseif ($signup_check == "email"){
                                echo "<p style='color: red;'> Invalid Email. Try again </p>";
                                exit();
                            }
                        }
                    ?>
                   
                </form>
            </div>
           
        </div>
    </main>
    <br><br><br>
</body>
</html>

