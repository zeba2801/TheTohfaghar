<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <script src="https://kit.fontawesome.com/2aba508813.js"crossorigin="anonymous"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php @include 'header.php'; ?>
<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>
<section class="about">
    <div class="flex">
        <div class="image">
            <img src="images/about-img-01.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Hand Crafted Items Are Created Under One Roof, By One Maker.<br> By Supporting The Maker, You Support Their Creativity And Skill. <br>You Get To Shake the Hand Of The Creator Of Your Beautiful Piece. <br>Your Gift Has A Very Special Story Of A Lifetime Woven Into It. </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="flex">
        <div class="content">
            <h3>what we provide?</h3>
            <p>You Can Make It Your Own! Personalising Your Piece Creates A <br>Feeling Of Pride That It Is Unique To You. Each Item Is Created<br> With Love And Skill. These Products Are Made To The Highest <br>Quality Because The Maker Understand The Value Of Each Piece.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
        <div class="image">
            <img src="images/about-img-02.jpg" alt="">
        </div>
    </div>
    <div class="flex">
        <div class="image">
            <img src="images/about-img-03.jpg" alt="">
        </div>
        <div class="content">
            <h3>who we are?</h3>
            <p>We are your Santa Claus, or you can call us your genie.<br> Come onboard and make your wish. We will make it come true. <br> Wishlist your loved items and when its time get it ordered. <br> Experience the world of handmade craft and personalised gifts with us. </p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <h1 class="title">client's reviews</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/img-1.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 1</h3>
        </div>
        <div class="box">
            <img src="images/img-2.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 2</h3>
        </div>
        <div class="box">
            <img src="images/img-3.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 3</h3>
        </div>
        <div class="box">
            <img src="images/img-4.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 4</h3>
        </div>
        <div class="box">
            <img src="images/img-5.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 5</h3>
        </div>
        <div class="box">
            <img src="images/img-6.jpg" alt="">
            <p>I am very happy with my personalised gift as it is exactly as I ordered it, which arrived in a short time. Well done, I had a very positive experience with your craft packaging and service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 6</h3>
        </div>
    </div>
</section>
<?php @include 'footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>
