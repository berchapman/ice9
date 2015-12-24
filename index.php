<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Ice9 Creative</title>
    <meta name="description" content="Company website">
    <meta name="author" content="Richard Ber Chapman">
    
    <!-- TO BE MOVED TO PHP CALLS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>    
    <script src="/js/quickContact.js"></script>        
    
    <!-- HEADER -->
</head>
<?php include('php-dev/header.php'); ?>
<body id="<?php getCurrentFileName() ?>">
<header>
    <h1><?php echo COMPANY ?> Creative</h1>
    <p><?php echo SLOGAN ?></p>
    <h3>Painless Web Solutions</h3>
    <h4>web agency</h4>
</header>
<div class="banner contact-CTA center">
    <div class="grid col-3">
        <section>
            <p>Call us at 888.888.8888</p>
        </section>
        <section>
            <p>Email us at info@ice9.com</p>
        </section>
        <section>
            <p>Message us right here, right now:</p> REWORK WITH PHPMAILER
            <form id="quickContact-form" method="post" action="quickContact.php">
                <div class="field">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                </div>                    
                
                <div class="field">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>    
                
                <div class="field">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>                   
                
                <div class="field">
                    <button type="submit">Send</button>
                </div>
            </form>
            <div id="form-status"></div>
        </section>        
    </div>
</div>
<div class="banner image-bg center">
    <div class="grid col-2">
        <section>
            <h3><a href="">Web Design ></a></h3>
        </section>
        <section>
            <h3><a href="">Email Marketing ></a></h3>
        </section>
        <section>
            <h3><a href="">Development ></a></h3>
        </section>
        <section>
            <h3><a href="">Business Solutions ></a></h3>
        </section>        
    </div>
</div>
<main>
    <section class="center">
        <article class="writing">
            <h2>Our Services</h2>
            <p>We offer expertise in web design, development, hosting, and email marketing. At Ice9, we believe in the power of extraordinary design coupled
            with top-notch development to build web sites, apps, and marketing campaigns that you can take pride in.    
            </p>
            <h3>Web Design</h3>
            <p>Fully responsive, mobile-ready websites created to meet your exact needs and realize your vision. Your business 
            is an exercise in excellence — demand nothing less from your online presence.
            </p>
            <h3>Development</h3>
            <p>Have a problem in need of a solution? An idea itching for implementation? Let Ice9 transform bytes into brilliance.
            We leverage proven web technology to deliver cross-platform delight wherever the internet connects. 
            </p>
            <h3>Email Marketing</h3>
            <h3>Business Solutions</h3>            
        </article>
    </section>    
    <section class="center">
        <article class="writing">
            <h2>Why Choose Us?</h2>
            <p>Nowhere else will you find <!--a more wretched hive of scum and villany--> an agency as uncompromising as Ice9 in our attention to beauty, functionality, and service.</p>
        </article>
    </section>      
</main>


    
    
</body>
</html>