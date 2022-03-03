<?php

/**
 * Template Name:Contact us
 * 
 */ ?>
 <?php get_header();   ?>

 
   <div class ="row">
  <!--The div element for the map -->
    <div class ="col-2">>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.0857468149836!2d-75.69798271184122!3d45.42258689868738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0451aaaaaaab%3A0x6e6d20678145a9a5!2snorth%20west%20territories!5e0!3m2!1sen!2sca!4v1644596274409!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
    </div>
    <div class="col-2"
        <h2>Big Savings! Ottawa Headquarters <br>
            100 Sparks St., Ottawa, ON <br>
            P.O. Box: K1P 5B7 <br>
            Tel: 613-400-5567 
        </h2>
    </div>

</div>

<div class ="row">
    <h2>Send e-mail to Our Customer Service:</h2>
    <form action="mailto:someone@example.com" method="post" enctype="text/plain" class="form-contact">
    Name:<br>
    <input type="text" name="name"><br>
    E-mail:<br>
    <input type="text" name="mail"><br>
    Comment:<br>
    <textarea name="comment" cols="40" rows="5"></textarea><br></br>
    <input type="submit" value="Send">
    <input type="reset" value="Reset">
    </form>
</div>

<?php get_footer();   ?>