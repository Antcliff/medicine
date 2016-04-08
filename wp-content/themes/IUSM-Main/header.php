<!DOCTYPE HTML>
<html lang="en">
  <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
   <link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|GeorgiaPro:regular" media="screen" rel="stylesheet" type="text/css"/>

  <title><?php wp_title('') ?> | <?php bloginfo(''); ?></title>
   
  
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS -->
 <link href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://assets.iu.edu/brand/legacy/brand.css" rel="stylesheet" type="text/css"/>
   
 
    

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" />
   
 
  
   <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


 <script type="text/javascript">
function swap(targetId){
  if (document.getElementById){
        target = document.getElementById(targetId);
            if (target.style.display == "none"){
                target.style.display = "";
            } else{
                target.style.display = "none";
            }
                
  }
}
 
  jQuery(document).ready(function($) {  

	/* Stick navigation to the top of the page */
	var stickyNavTop = $('.navbar-fixed-top').offset().top; 

	$(window).scroll(function(){  
		var scrollTop = $(window).scrollTop();  

		if (scrollTop > stickyNavTop) {   
			$('.navbar-fixed-top').addClass('sticky-header'); 
			$('.site-header').addClass('shifted');
		} else {  
			$('.navbar-fixed-top').removeClass('sticky-header');   
			$('.site-header').removeClass('shifted');
		}  

	});
});
   
  
  window.onbeforeunload = function(){
	window.scrollTo(0,0);
}

  
   $(function(){ 
     var navMain = $("#navbar");
     navMain.on("click", "a", null, function () {
         navMain.collapse('hide');
     });
 });
  
  $(document).ready(function () {
     $('a[href^="#"]:not([data-toggle="tab"])').on('click', function (e) {
         e.preventDefault();

         var target = this.hash,
             $target = $(target);

         $('html, body').stop().animate({
             'scrollTop': $target.offset().top - 80
         }, 1000, 'swing', function () {
             window.location.hash = target;
         });
     });
 });

 
  
  
function openCity(evt, cityName) {
  var i, x, tablinks, d;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
 
  d = document.getElementsByClassName("dot");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
 
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].classList.remove("w3-red");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-red");
}

  
jQuery(document).ready(function ($) {

   
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    


  $(document).ready(function($) {
    $('#accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast');

    });
  });
  
    $(document).ready(function($) {
    $('#accordion2').find('.accordion-toggle2').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast');

      //Hide the other panels
      $(".accordion-content2").not($(this).next()).slideUp('fast');

    });
  });
  
    $(document).ready(function($) {
    $('#accordion3').find('.accordion-toggle3').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast');

      //Hide the other panels
      $(".accordion-content3").not($(this).next()).slideUp('fast');

    });
  });
  
  
  
 </script>
  </head>

<body <?php body_class(); ?>>

    <!-- Fixed navbar -->
          <div id="branding-bar-v1" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
	<div class="bar">
		<div class="wrapper">
			<p class="campus">
				<a href="http://www.iu.edu" title="Indiana University">
					<img src="//assets.iu.edu/brand/legacy/trident-large.png" height="73" width="64" alt=" " />
					<span class="show-on-desktop" itemprop="name">Indiana University <br/> School of Medicine</span>
					<span class="show-on-tablet" itemprop="name">Indiana University <br/> School of Medicine</span>
					<span class="show-on-mobile" itemprop="name">Indiana University <br/> School of Medicine</span>
				</a>
             
			</p>
		</div>
	</div>
</div>        
    
        
        
   
        
        
       
</div>

     <nav class="navbar navbar-inverse navbar-fixed-top" >           
  <div class="container">
    <div id="branding-bar1" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity">
	<div class="bar">
		<div class="wrapper">
			<p class="campus">
				<a href="http://www.iu.edu" title="Indiana University">
					<img src="//assets.iu.edu/brand/legacy/trident-large.png" height="73" width="64" alt=" " />
					<span class="show-on-tablet" itemprop="name">Indiana University <br/> School of Medicine</span>
					<span class="show-on-mobile" itemprop="name">Indiana University <br/> School of Medicine</span>
				</a>
             
			</p>
		</div>
	</div>
</div>        
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php
          if(is_home() || is_front_page()) :
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse ',
                'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
         
         else :         
     wp_nav_menu( array(
                'menu'              => 'template',
                'theme_location'    => 'template',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse ',
                'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
         endif;
       
        ?>      
        </div><!--/.nav-collapse -->
 </div>    <!-- container -->
    </nav>
 
 <div id="sticky"></div>

    
        
    <!-- <img class="img-responsive" id="text-image" src="<?php/* bloginfo('template_directory'); */?>/images/logo-text.png" alt=""/>-->
     <!-- Join our team button 
  <div class="buttons">
        <div class="join">
        <a href="#join" class="join_button">Join our Team</a>
        </div>
        <div class="learn">
        <a href="#learn" class="learn_button">Learn More</a>
        </div>
 </div>
    
          </div>  -->
