<?php

/*
Template Name: template_about
*/

get_header(); ?>

<!--StyleSheets -->

<link rel="stylesheet"  href="/custom.css" type="text/css" media="all">

<!--End of StyleSheets -->




<div class="container-fluid">
    
 
  <div class="row-fluid">
    <div id="contact" class="span6">
      <h3>Contact</h3>
        <form id="well" class="well span11">
        <div class="row">
            <div class="span12">
                <label>First Name</label> <input class="span10" placeholder= "First Name" type="text"> 
                <label>Last Name</label> <input class="span10" placeholder="Last Name" type="text">
                <label>Email Address</label> <input class="span10" placeholder=  "email address" type="text">                       <label>Subject</label>  <select class="span10" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        Report a Bug or Update
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                       Compliments or Complaint
                    </option>
                </select>
            </div>
    
            <div class="span12">
                <label>Message</label> 
                <textarea class="input-xlarge span11" id="message" name="message"
                rows="10">
    </textarea>
            </div><button class="btn btn-primary pull-right" type="submit">Send</button>
        </div>
    </form>
    </div>
    <div id="about" class="span6">
     <h3>About</h3>
        <form id="well" class="well span11">
        <p>League of Legends is a fast paced competitive online game that blends the speed and intensity of an RTS
(Real Time Strategy) with RPG (Role Playing Game) elements. Two Teams of powerful champions, each with a unique design
and playstyle, battle head-to-head across multiple battlefields and game modes. With an ever-expanding roster of champions, frequent updates and a thriving tournament scene, League of Legends offers and endless replayability for players of every skill level.</p>
            </br>
        <p>League Daily is a website which hosts a number of features.
        <ol>
  <ul id="aboutlist">
  <li type="square">News from the League of Legends scene.</li>
  <li type="square">Updates to the game like patch notes, champion updates and game changes.</li>
  <li type="square">Results from comeptitive scene, current standings of major tournaments and leagues.</li>
  <li type="square">A specific champion page for all 117 champions which consists of champion information, lore behind the champion, user submissions such as artwork, cosplay photos, crafts and finally a place to discuss the champions, its lore and user submissions.</li>
</ul>
<img src="/images/lollogo.png" hieght="300" width="362">
        
        </p>
        </form>
        
    </div>
  </div>
</div>









<!-- Java Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/wordpress/wp-content/themes/capture/js/bootstrap.min.js"></script>









<?php get_footer(); ?>