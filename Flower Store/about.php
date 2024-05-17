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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>"Why choose us? At Flowerly, we're more than just an online flower shop. We're a team of passionate floral experts who are dedicated to providing you with the highest quality products and exceptional customer service.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide Unmatched quality, Unique arrangements, Hassle-free ordering, Personalized service, Timely delivery, So c hoose Flowerly for your next floral purchase and experience the difference for yourself. We look forward to serving you!"</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>"We are a family-owned and operated flower shop that has been serving our local community for over 20 years. Our team of expert florists has a passion for creating beautiful arrangements that are tailored to each customer's unique needs and preferences. Our commitment to exceptional customer service means that we go above and beyond to exceed our customers' expectations, every time. Whether you're looking for a stunning wedding bouquet, a heartfelt sympathy arrangement, or just a beautiful centerpiece to brighten up your home, we have something for every occasion. We take pride in being a part of life's most important moments and strive to make each one unforgettable. Thank you for considering us for your floral needs. We look forward to serving you!"</p>
            <a href="#reviews" class="btn">Customer reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Customer reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"I ordered a bouquet of roses for my girlfriend's birthday and was blown away by the quality of the flowers. They were fresh, vibrant, and absolutely stunning. The ordering process was simple and the delivery was on time. I highly recommend this online flower store for anyone looking for high-quality blooms."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"I was looking for a unique floral arrangement for a friend's bridal shower, and this online flower store had exactly what I was looking for. The arrangement was beautifully put together, and the flowers were fresh and vibrant. The customer service was excellent, and the delivery was prompt. Highly recommend!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"I ordered flowers for my wife's anniversary and was extremely satisfied with my purchase. The arrangement was beautifully put together, and the flowers were fresh and long-lasting. The customer service was top-notch, and the delivery was prompt. I will definitely be a repeat customer!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"I ordered flowers for my sister's wedding and was blown away by how stunning the arrangements were. The florist clearly has a great eye for detail and design, and the flowers were fresh and fragrant. The customer service was exceptional, and the team went above and beyond to make sure everything was perfect. Thank you!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"I ordered flowers for my mother's birthday and was pleasantly surprised by the variety of options available on this online flower store. The website was easy to navigate, and the ordering process was seamless. The flowers were delivered on time and were exactly as pictured. Overall, a great experience!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"I ordered flowers for my mother's retirement party, and I couldn't have been happier with the results. The arrangement was elegant and tasteful, and the flowers were clearly of the highest quality. The customer service was excellent, and the delivery was prompt and reliable. I would definitely recommend this online flower store to anyone looking for beautiful blooms."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>