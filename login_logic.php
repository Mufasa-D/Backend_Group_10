<?php 
    session_start();
    //storing data entered in login page
    $FN = trim(htmlspecialchars($_POST['firstname']));
    $LN = trim(htmlspecialchars($_POST['lastname']));
    $E = htmlspecialchars($_POST["email"]);

    //if button is pressed....
    if (isset($_POST['button'])){
        if ($_SESSION['first_name'] != $FN) {
            header("Location: /Backend_Group_10/login.php?login=char");
            exit();
        } 
        elseif ($_SESSION['lastname'] != $LN) {
            header("Location: /Backend_Group_10/login.php?login=char");
            exit();
        }
        elseif ($_SESSION['email'] != $E) {
            header("Location: /Backend_Group_10/login.php?login=email");
            exit();
        }
        else {
            header("Location: /Backend_Group_10/dashboard.php");
            exit();
        }

    }
?>