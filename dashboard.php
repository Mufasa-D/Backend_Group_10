<?php  
    include("top_header.htm");
    session_start();

    if (!isset($_SESSION['first_name'])){
        header("Location: /Backend_Group_10/index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEE:Ghana | Travel & Tours</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>    
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
    
    <section>
        <h1></h1>
    </section>

    <section class="hero">
        <div class="hero-content">
            <h2><span style="color: #90d63b; ">Akwaba/Welcome</span> <?php echo $_SESSION['first_name'] ?></h2> <br>
            
            <?php 
                echo '<script>alert("You\'ve Signed in successfully!")</script>';

                    if ($_SESSION["pay_time"] == "Pay Later"){
                        echo '<h2>You have 5 days to make payment else your reservation will be revoked</h2>';
                    } else {
                        echo "<h2>We are having a problem with our payment system. <br> You'll be alerted soon through your email to make payment when we fix the issue. <br> Sorry for the inconvenience.</h2>";
                    }
                    ?>
                <h1>Below are some <span style="color: #90d63b;">Hotels</span> and <br><span style="color: #90d63b;">Locations</span> you'll interact with soon</h1>
                <form action="index.php" method="post">
                    <input type="submit" value="Logout Now" name="logout">
                </form>
        </div>
    </section>

    <section>
        <div class="container2">
            <div class="photo-gallery">
                <div class="column">
                    <div class="photo">
                        <img src="images/andrew-molo-xB_6jCXUa34-unsplash.jpg" title="Cape Coast Castle" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/badal-patel-uLDjIClrohM-unsplash.jpg" title="A corridor (Elmina Castle)" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/Elmina_Castle_-_Ghana.jpg" title="A longshot of Cape Coast Castle">
                    </div>
                    <div class="photo">
                        <img src="images/nana-kwandoh-FgtREiQ2rws-unsplash.jpg"  title="The Black Star Square (Independence Square)" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/tobias-nii-kwatei-quartey-xQ7rXZqRLww-unsplash.jpg"  title="" alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="photo">
                        <img src="images/emmanuel-offei-rEBd3_2M-FU-unsplash.jpg" title="Woman dancing ADOWA" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/emmanuel-yeboah-okine-RCAUud6Wcmo-unsplash.jpg" title="Women dancing during a festival"  alt="">
                    </div>
                    <div class="photo">
                        <img src="images/ifeoluwa-b--CgUhaShACE-unsplash.jpg" title="The Black Star Gate" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/virgyl-sowah-E9NPWGBXM9o-unsplash.jpg" title="A sky view of Tamale" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/Kakum.jpg" title="Kakum National Park"  alt="">
                    </div>
                    <div class="photo">
                        <img src="images/yoel-winkler-zCAh6tOWFt8-unsplash.jpg" title="The beach"  alt="">
                    </div>
                </div>
                <div class="column">
                    <div class="photo">
                        <img src="images/julianna-corbett-R3IYAFLDX0I-unsplash.jpg" title="Mole National Park"  alt="">
                    </div>
                    <div class="photo">
                        <img src="images/kofi-bhavnani-4c-k7vendbg-unsplash.jpg" title="A busy Market in Kumasi" alt="">
                    </div>
                    <div class="photo">
                        <img src="images/kofi-nuamah-barden-xcw7t-Ow8iY-unsplash.jpg" title="Labadi beach hotel"  alt="">
                    </div>
                    <div class="photo">
                        <img src="images/Kwame Nkrumah.jpg" title="Kwame Nkrumah Memerial Park & Mausokeum"  alt="">
                    </div>
                    <div class="photo">
                        <img src="images/women_adowa.jpg" title="Kwame Nkrumah Memerial Park & Mausokeum" title="Ladies dancing during a festival" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <video style="margin: 12px;" src="videos/Visit Ghana and Go Beyond The Return 2024.mp4" controls width="98%"></video>
</body>
</html>

<?php 
    session_destroy();
    exit();
?>