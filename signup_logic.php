<?php 
    session_start();
    //Validating and sanitizing user input.
    if (isset($_POST["button"])) {
        $Fname = trim($_POST["firstname"]);
        $Lname = trim($_POST["lastname"]);
        $pay_time = $_POST["pay_time"];
        $reg_type = $_POST["reg_type"];
        $email = $_POST["email"];
        

        //making sure user name does not contain unwanted characters
        if (!preg_match("/^[a-zA-Z\s'-]+$/", $Fname) ){
            //redirecting user back with a get request attached to the URL
            header("Location: /Backend_Group_10/signup.php?signup=char&lastname=$Lname&pay_time=$pay_time&reg_type=$reg_type&email=$email");
            exit();
        }   
        elseif (!preg_match("/^[a-zA-Z\s'-]+$/", $Lname)) {
            header("Location: /Backend_Group_10/signup.php?signup=char&firstname=$Fname&pay_time=$pay_time&reg_type=$reg_type&email=$email");
            exit();
        //validating email
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: /Backend_Group_10/signup.php?signup=email&firstname=$Fname&lastname=$Lname&pay_time=$pay_time&reg_type=$reg_type");
            exit();
        } else {
            //storing them as session variables and preventing XSS(cross-site scripting attacks)
            $_SESSION['first_name'] = htmlspecialchars($Fname);
            $_SESSION["lastname"] = htmlspecialchars($Lname);
            $_SESSION["email"] = htmlspecialchars($email);
            $_SESSION["pay_time"] = htmlspecialchars($pay_time);
            $_SESSION["reg_type"] = htmlspecialchars($reg_type);
            echo '<script>alert("Sign Up Successful!")</script>';
            header("Location: /Backend_Group_10/login.php");   
        }
    }
?>