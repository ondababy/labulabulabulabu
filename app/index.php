<?php
include("./includes/header.php");
?>

<style>
    .footer {
        background-color: #37AFE1;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        transition: color 0.3s;
    }

    .footer a:hover {
        color: #FFD700;
    }

    .footer .social-icons a {
        margin: 0 10px;
        font-size: 20px;
    }

    .topics {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .topic {
        width: 300px; 
        margin: 20px; 
        text-align: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); 
        border-radius: 8px; 
        overflow: hidden; 
    }

    .topic img {
        width: 100%; 
        height: auto; 
    }

    .topic h3 {
        margin: 15px 0 10px; 
    }

    .topic p {
        padding: 0 15px 15px; 
    }

    .features-section {
        padding: 60px 0; 
        text-align: center;
        background-color: #fff;
    }

    .section-title {
        font-size: 36px; 
        font-weight: bold;
        margin-bottom: 60px; 
    }

    .features {
        display: flex;
        flex-direction: column;
        gap: 50px; 
    }

    .feature {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px; 
    }

    .feature-img img {
        width: 130px; 
        height: 200px;
    }

    .feature-text {
        text-align: left;
    }

    .feature-number {
        font-size: 48px; 
        color: #F08030; 
        font-weight: bold;
        margin-right: 15px; 
    }

    .feature h3 {
        font-size: 28px; 
        font-weight: bold;
    }

    .feature p {
        font-size: 18px; 
        color: #333;
    }

    @media (min-width: 768px) {
        .features {
            flex-direction: row;
            justify-content: space-between;
        }

        .feature {
            width: 30%;
        }
    }

    .section-1 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 120vh; 
        padding: 20px;
        color: white;
        background-color: #37AFE1;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    .content-wrapper {
        display: flex;
        justify-content: space-between;
        width: 100%; 
    }

    .left-content {
        flex: 1;
        padding: 0;
    }

    .left-content h1 {
        font-size: 64px; 
        font-weight: bold;
        margin-bottom: 20px;
    }

    .left-content p {
        font-size: 43px; 
        margin-bottom: 20px;
    }

    .cta-button {
        display: inline-block;
        padding: 15px 25px;
        background-color: #ffffff;
        color: #6f2dbd;
        font-weight: bold;
        font-size: 18px;
        border-radius: 8px;
        text-decoration: none;
        margin-bottom: 10px;
    }

    .cta-button:hover {
        background-color: #ddd;
    }

    .right-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-placeholder {
        width: 100%; 
        max-width: 700px; 
        height: auto; 
    }
</style>

<section class="section-1">
    <div class="content-wrapper">
        <div class="left-content">
            <h1>Sharpen Your Math Skills Through Fun Games</h1>
            <p>Challenge yourself with exciting math games that enhance your skills while making learning fun.</p>
            <p>Whether you're practicing or testing your knowledge, our interactive games will boost your accuracy, speed, and confidence in math.</p>
            <a href="home.php" class="cta-button">Start Playing Now</a>
        </div>
        <div class="right-content">
            <img class="image-placeholder" src="resources/images/mathhh.jpg" alt="Fun Math Games" />
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <h2 class="section-title">Boost your math skills with us!</h2>
        <div class="features">
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/2.png" alt="Sign up in seconds">
                </div>
                <div class="feature-text">
                    <span class="feature-number">1.</span>
                    <h3>Sign up in seconds</h3>
                    <p>Create an account on our website and get started in just 1 minute. Once you've signed up, you'll have access to all of our free, standards-aligned games.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/3.png" alt="Choose from 1000 skills to practice">
                </div>
                <div class="feature-text">
                    <span class="feature-number">2.</span>
                    <h3>Choose your math skills you want to improve</h3>
                    <p>Select the math facts or skills you want to practice, and we'll generate problems based on your selection.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-img">
                    <img src="resources/images/1.png" alt="Monitor progress with detailed reports">
                </div>
                <div class="feature-text">
                    <span class="feature-number">3.</span>
                    <h3>Monitor progress with detailed reports</h3>
                    <p>Our detailed game reports help you to track students' progress and identify areas for improvement. You can use this information to adjust your approach and ensure students are meeting standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#privacy">Privacy Policy</a>
            <a href="#terms">Terms of Service</a>
        </div>
        <div class="social-icons mt-3">
            <a href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram-square"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="mt-3">
            &copy; <?php echo date("Y"); ?> Do Math & Conquer. All rights reserved.
        </div>
    </div>
</footer>
