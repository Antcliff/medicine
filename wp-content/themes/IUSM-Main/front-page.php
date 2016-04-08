<?php get_header(); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
<!-- Begin page content -->
    <div id="primary" class="container-fluid ">
     <main id="main" class="site-main" role="main">   
      <div class="image-container">
       <div class="image-wrap">
 <section id="image">

  <div id="image-main">
   
    <img class="img-responsive" id="image-main-mobile" src="<?php bloginfo('template_directory'); ?>/images/tablet-main-image.png" alt=""/>
     </div><!-- image-main -->
   <div class="container">
 <div class="image-content">
<h1 class="heading1">Transforming</h1>
  <h1 class="heading2">Health</h1>
   <p><b>Ranked #1</b> in the nation for something related to the school of medicine</p>
  <div class="buttons">
    <button class="btn" id="button1">Join Our Team</button>
    <button class="btn" id="button2">Learn More</button>
  </div>
  </div>
  </div>

 </section>
      </div>
      </div>
     <section id="about">
       <div class="container">
         <div class="about-left">
      <img id="research-icon" src="<?php bloginfo('template_directory'); ?>/images/Icon-Home-Research.png" width="40" height="40" alt=""/>
          <h3 class="about-name"><?php $pageID = 25;
                   $page = get_post($pageID);
              echo $page->post_title; ?></h3>
           <div id="about-text">
              <?php  $id=25; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
              </div>
        
        
         </div><!--about left -->
        <div class="about-middle">
               <img id="education-icon" src="<?php bloginfo('template_directory'); ?>/images/Icon-Home-Education.png" width="48" height="40" alt=""/>

        <h3 class="about-name"><?php $pageID = 30;
                   $page = get_post($pageID);
              echo $page->post_title; ?></h3>
         <div id="about-text">
              <?php  $id=30; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
              </div>
        
        </div><!-- about middle -->
        
        <div class="about-right">
              <img id="research-icon" src="<?php bloginfo('template_directory'); ?>/images/Icon-Home-Patient-Care.png" width="40" height="40" alt=""/>
        <h3 class="about-name"><?php $pageID = 32;
                   $page = get_post($pageID);
              echo $page->post_title; ?></h3>
        
         <div id="about-text">
              <?php  $id=32; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
              </div>
        
        </div><!-- about right -->
        
        
    
        
        
      </div>
     </section>
     <section id="education" class="scroll">
      <div class="education_back">
        
        <div class="container">
     <?php
     $query = new WP_query( 'pagename=education');
       
      //Loops through each page content and displays on front page       
       if ($query->have_posts()) {        
        while ( $query->have_posts() ) {         
          $query->the_post();
         echo '<div class="education-content">';
         the_content();
         echo '</div>';
        }
        
       } // end if
        
        wp_reset_postdata();
        
     ?>
         
       </div> 
      </div><!-- education back -->
 <div class="container">
      <div class="medical_program">
         <div id="medical_education">
             <h3><?php $pageID = 50;
                   $page = get_post($pageID);
              echo $page->post_title; ?></h3>
             <div id="medical_education_content">
              <?php  $id=50; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
              </div>
         </div>
                   <div id="education_program">
                      <h3><?php $pageID = 58;
                   $page = get_post($pageID);
              echo $page->post_title; ?></h3>
                      <div id="education_program_content">
              <?php  $id=58; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
              </div>
                   <div id="expand">
        <ul>
            <li>
                <a href="#" onclick="swap('sectionOneLinks');return false;">+ MD</a>
                <ul id="sectionOneLinks" style="display: none;">
                   <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionTwoLinks');return false;">+ Ph.D</a>
                <ul id="sectionTwoLinks" style="display: none;">
                   <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="swap('sectionThreeLinks');return false;">+ Combined Degrees</a>
                <ul id="sectionThreeLinks" style="display: none;">
                    <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                </ul>
            </li>
          <li>
                <a href="#" onclick="swap('sectionFourLinks');return false;">+ Undergraduate Degrees</a>
                <ul id="sectionFourLinks" style="display: none;">
                    <li>A link to a page</li>
                   <li>A link to a page</li>
                  <li>A link to a page</li>
                  <li>A link to a page</li>
                </ul>
            </li>
          <li>
                <a href="#" onclick="swap('sectionFiveLinks');return false;">+ Residency</a>
                <ul id="sectionFiveLinks" style="display: none;">
                   <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                  <li>Random text</li>
                </ul>
            </li>
        </ul>
    </div>
                                                                                            
       
      </div>
  </div>
     
   <div class="sub-nav">
   <!-- Static navbar -->
      <nav class="navbar navbar-default">
       <h3 id="title_sec_menu">Popular Student Resources</h3>
       <div class="dropdown">

    <!-- trigger button -->
    <button id="sub">Menu</button>
       <?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'Categories', 'container_class' => 'main-menu', 'container_id' => 'header', 'theme_location'  => 'secondary_menu') ); ?>
       </div>
       
      </nav>
   </div>
       
     </section>
     <section id="research">
      <div class="mobile-pic">
      <img class="img-responsive" id="research-mobile" src="<?php bloginfo('template_directory'); ?>/images/tablet-research.png" alt=""/>
      
      </div>
      <div id="research_back">
       <div class="container">
      <h3><?php $pageID = 79;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
        <div class="research_education_content">
        <?php  $id=79; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
        
        
        </div>
      </div>
      </div>
      <div class="research_banner_back">
       <div class="container">
           <h3><?php $pageID = 88;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
          <div class="research_medical_content">
        <?php  $id=88; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
        
        
        </div>
        
        
        
       </div>
       
      
      
      </div>
      </section>
     <section id="clinical">      
      <div class="container">
           
       <h3 id="areas">Areas of Expertise</h3>
       
       
       
       
      <div class="tabbable tabs-left">
           <ul class="pad nav-tabs">
          <li class="active"><a href="#a" data-toggle="tab"> <p><?php $pageID = 92;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
          <li ><a href="#b" data-toggle="tab"><p><?php $pageID = 94;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
          <li><a href="#c" data-toggle="tab"><p><?php $pageID = 101;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
          <li><a href="#d" data-toggle="tab"> <p><?php $pageID = 164;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
          <li><a href="#e" data-toggle="tab"> <p><?php $pageID = 166;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
          <li><a href="#f" data-toggle="tab"> <p><?php $pageID = 170;
     $page = get_post($pageID);
     echo $page->post_title; ?></p></a></li>
        </ul>
        <div class="tab-content">
         <div class="tab-pane active" id="a"> <?php  $id=92; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
          echo '<div class="brain_content">';
            echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
           echo $content;  
          echo '</div>';
        
            
                
              ?></div>
         <div class="tab-pane" id="b"> <?php  $id=94; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
                echo '<div class="brain_content">';
          echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
          echo $content;  
          echo '</div>';
              ?></div>
         <div class="tab-pane" id="c"> <?php  $id=101; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo '<div class="brain_content">';
          echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
          echo $content;  
          echo '</div>';
              ?> </div>
           <div class="tab-pane" id="d"> <?php  $id=164; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo '<div class="brain_content">';
          echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
          echo $content;  
          echo '</div>';
              ?> </div>
         
           <div class="tab-pane" id="e"> <?php  $id=166; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo '<div class="brain_content">';
          echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
          echo $content;  
          echo '</div>';
              ?> </div>
         
           <div class="tab-pane" id="f"> <?php  $id=170; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo '<div class="brain_content">';
          echo '<figure class="area-thumb">';
          the_post_thumbnail('areas-pic');
          echo '</figure>';
          echo $content;  
          echo '</div>';
              ?> </div>
        </div>
      </div>
      </div>
       <div class="meet">
        <div class="container">
          <h3><?php $pageID = 106;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
       <div class="meet-doc">
       
      <?php  
        echo '<div class="meet-title">'; 
        
               $id=180; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               
          echo '<figure class="meet-thumb">';
          the_post_thumbnail('meet-pic');
          echo '</figure>';
       
          echo '<h3 id="meet-title">';
        $pageID = 180;
     $page = get_post($pageID);
        echo $page->post_title; 
        echo '</h3>';
       
          echo $content;  
        
        
         echo '<div id="social-icon">';
        echo '<ul>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-twitter.png" alt=""/> </a>';
        echo '</li>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-facebook.png" alt=""/> </a>';
        echo '</li>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-linkedin.png" alt=""/> </a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        
        
        
          echo '</div>';
        
         
          
         echo '<div class="meet-content">';
             echo '<div style="border:1px solid #7d110c;"></div>';
          echo'<h3 id="focus">';
        $pageID = 182;
         $page = get_post($pageID);
         echo $page->post_title; 
        echo '</h3>';
         $id=182; 
         $post = get_post($id); 
         $content = apply_filters('the_content', $post->post_content);        
          echo $content;      
        
        
        
         echo '</div>';
        
        echo '<div class="meet-title-2">';
              $id=186; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               
          echo '<figure class="meet-thumb">';
          the_post_thumbnail('meet-pic');
          echo '</figure>';
          
          echo '<h3 id="meet-title">';
           $pageID = 186;
     $page = get_post($pageID);
        echo $page->post_title; 
       echo '</h3>';
          echo $content;  
        
        echo '<div id="social-icon">';
        echo '<ul>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-twitter.png" alt=""/> </a>';
        echo '</li>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-facebook.png" alt=""/> </a>';
        echo '</li>';
        echo '<li>';
        echo ' <a href="#"><img class="img-responsive" src="';
         bloginfo('template_directory');
        echo '/images/meet-linkedin.png" alt=""/> </a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
         
         
         
        echo '</div>';
  
        echo '<div class="meet-content-2">';
             echo '<div style="border:1px solid #7d110c;"></div>';
          echo'<h3 id="focus">';
        $pageID = 188;
         $page = get_post($pageID);
         echo $page->post_title; 
        echo '</h3>';
         $id=188; 
         $post = get_post($id); 
         $content = apply_filters('the_content', $post->post_content);        
          echo $content; 
        
        
         echo '</div>';
        
        
              ?> 
        
        </div><!-- Indent -->
       </div><!-- Meet -->
  

       
       
       
       
     
    
     </section>
     <section id="academic">
      <div id="academic_back">    
      <div class="container">
       <h3><?php $pageID = 111;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
          <div class="academic_content">
        <?php  $id=111; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>
       </div>
       </div>      
       
      </div>
      
    <div id="locations">
   <div class="container">
    <div class="parent">
    <div class="col1 child"> 
     
     <h3 id="locations-title"><?php $pageID = 113;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
      <?php  $id=113; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>      
     
     <div id="slider">
      <div class="grey-bar-locations">
    
       <a href="#" class="control_next">   <img class="left-button" src="<?php bloginfo('template_directory'); ?>/images/Button-Red-Circle-Right.png" alt=""/> </a>
  <a href="#" class="control_prev">  <img class="left-button" src="<?php bloginfo('template_directory'); ?>/images/Button-Red-Circle-Left.png" alt=""/> </a>
        
      </div>
    
  <ul>
   
     <li><div class="mobile-bloomington">
     <?php  $id=314; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
    <li><div class="mobile-bloomington">
     <?php  $id=322; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
    <li><div class="mobile-bloomington">
     <?php  $id=324; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
       <li><div class="mobile-bloomington">
     <?php  $id=326; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
   <li><div class="mobile-bloomington">
     <?php  $id=328; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
   <li><div class="mobile-bloomington">
     <?php  $id=330; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
   <li><div class="mobile-bloomington">
     <?php  $id=332; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
    <li><div class="mobile-bloomington">
     <?php  $id=334; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
   <li><div class="mobile-bloomington">
     <?php  $id=336; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
     ?>   </div></li>
   
  </ul>  
</div>
 
<nav class="w3-sidenav w3-light-grey w3-card-2">
  <div class="locations-left">
  <a href="#" class="tablink " onclick="openCity(event, 'Bloomington')">Bloomington</a>		
  <a href="#" class="tablink " onclick="openCity(event, 'Evansville')">Evansville</a>		
  <a href="#" class="tablink" onclick="openCity(event, 'Fort_Wayne')">Fort Wayne</a>
   <a href="#" class="tablink" onclick="openCity(event, 'Gary')">Gary</a>
 <a href="#" class="tablink" onclick="openCity(event, 'Indianapolis')">Indianapolis</a>
 </div>
 <div class="locations-right">
 <a href="#" class="tablink" onclick="openCity(event, 'Muncie')">Muncie</a>
  <a href="#" class="tablink" onclick="openCity(event, 'South_Bend')">South Bend</a>
 <a href="#" class="tablink" onclick="openCity(event, 'Terra_Haute')">Terra Haute</a>
 <a href="#" class="tablink" onclick="openCity(event, 'West_Lafayette')">West Lafayette</a>
 </div>
</nav>
      
     
     
     </div><!-- col 1 -->
    
    <div class="col3 child">
     <div class="right">
     <div id="Bloomington" class="w3-container city ">
      <div class="dot"></div>
    
      <div id="city-content">
      <?php  $id=320; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>

  <div id="Evansville" class="w3-container city ">
      <div class="dot"></div>
       
    
      <div id="city-content">
      <?php  $id=322; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>

  <div id="Fort_Wayne" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=324; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
      
        <div id="Gary" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=326; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
          <div id="Indianapolis" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=328; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
         <div id="Muncie" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=330; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
       <div id="South_Bend" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=332; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
      
       <div id="Terra_Haute" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=334; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
      
       <div id="West_Lafayette" class="w3-container city ">
      <div class="dot"></div>
    <div id="city-content">
      <?php  $id=336; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>   
      </div>
  </div>
      
     </div><!-- right -->
</div><!-- col3 -->
      </div><!-- container -->

    
    
     </div>
      </div>
      
      <div class="partnership">
         <div class="container">
             <h3><?php $pageID = 115;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
          <div class="partnership_content">
        <?php  $id=115; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
              ?>      
         </div>
          <div class="partnership_image">
           <table id="sponsors_table" width="100%">
           <tr>
           <td> <a href="http://www.eskenazihealth.edu/" target="_blank"><img class="img-responsive" id="eskenazi" src="<?php bloginfo('template_directory'); ?>/images/eskenazi.png" alt=""/></a></td>
            <td align="right"><a href="http://iuhealth.org/" target="_blank"><img class="img-responsive" id="IU-Health" src="<?php bloginfo('template_directory'); ?>/images/IU-Health.png" alt=""/></a></td>
           </tr>
            <tr>
            <td><a href="http://iuhealth.org/" target="_blank"><img class="img-responsive" id="riley" src="<?php bloginfo('template_directory'); ?>/images/riley.png" alt=""/></a></td>
            <td align="right"><a href="https://www.deaconess.com/" target="_blank"><img class="img-responsive" id="deaconess" src="<?php bloginfo('template_directory'); ?>/images/deaconess.png" alt=""/></a></td>
            </tr>
           
           </table>
           
          
          
          </div>
      
      
      
      </div>
     
      
          
       
     </section>
      
        <section id="careers" >      
     
           <div class="careers_back">
              <img class="img-responsive" id="mobile-careers" src="<?php bloginfo('template_directory'); ?>/images/tablet-careers.png" alt=""/> 
            <div class="container">
              <div class="box">
             <h3 id="test"><?php $pageID = 120;
               $page = get_post($pageID);
               echo $page->post_title; ?></h3>
             <div class="careers_content">
              <p id="ptest"><?php  $id=120; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?></p>
              

            </div>
            
           </div> 
        
        </div>
       
      </div>
      </section>
        <section id="news" >
          <div class="inside">
           
           <div class="container"> 
            <div class="news-title">
               <h3><?php $pageID = 124;
     $page = get_post($pageID);
     echo $page->post_title; ?></h3>
            <h4>Experience what its like to be part of the IU School of Medicine team.</h4>
            </div>
            <div class="full-inside">
              <div class="inside-left">
            
            <div class="inside_content">
            
            <?php  $id=124; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
               <form class="navbar-form" role="search">
                 <div class="input-group add-on">
                   <input type="text" class="form-control inside-blog-search" placeholder="Search Our Blogs.." name="srch-term" id="srch-term" />
                   <div class="input-group-btn">
                     <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                   </div>
                 </div>
               </form>

            </div>
         
         
            
               <h3 id="inside-blog">Blog Categories</h3>
<ul id="blog-links-inside">
    <li class="active"><a data-toggle="tab" href="#students"><?php $pageID = 128;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
    <li><a data-toggle="tab" href="#faculty"><?php $pageID = 130;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
    <li><a data-toggle="tab" href="#leadership"><?php $pageID = 132;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
    <li><a data-toggle="tab" href="#re"><?php $pageID = 136;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
   <li><a data-toggle="tab" href="#ac"><?php $pageID = 138;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
   <li><a data-toggle="tab" href="#money"><?php $pageID = 140;
     $page = get_post($pageID);
     echo $page->post_title; ?></a></li>
  </ul>


               </div><!-- inside left -->
          <div class="inside-right">
           <div class="tab-content">
    <div id="students" class="tab-pane fade in active">
       <?php  $id=128; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
    <div id="faculty" class="tab-pane fade">
      <?php  $id=130; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
    <div id="leadership" class="tab-pane fade">
    <?php  $id=132; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
    <div id="re" class="tab-pane fade">
    <?php  $id=136; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
            <div id="ac" class="tab-pane fade">
    <?php  $id=138; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
            <div id="money" class="tab-pane fade">
      <?php  $id=140; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
    </div>
  </div>
            </div>
         
            </div><!-- full -->
         
         </div>
      </section>
         
         
   
      <section id="footer">
       <div class="container">
        <div class="footer-wrapper">
         <div class="left-footer">
          <h3><?php $pageID = 142;
          $page = get_post($pageID);
          echo $page->post_title; ?>
          </h3>
              <div class="footer_content">
         <?php  $id=142; 
               $post = get_post($id); 
               $content = apply_filters('the_content', $post->post_content); 
               echo $content;  
               ?>
        
            </div>
       
         </div>
        
        <div class="left-middle-footer">
         <h3>Subscribe</h3>
         <div class="left-middle-content">
              <form class="email-sub" role="search">
                
                   <input type="email" class="form-control" placeholder="Enter Email Address" name="email" id="email">
                   <div class="input-group-btn">
                     <button class="btn1" type="submit"><i class="glyphicon glyphicon-arrow-right"></i></button>
                   </div>
                
               </form>
          
         
          <p>Sign up for the IUSM e-newsletter. We respect your privacy and will not share your email address</p>
         
         </div>
        
        
        </div>
        
        <div class="right-middle-footer">
         <h3>Popular Resources</h3>
         <div class="footer-links">
          <div class="left-links">
           <li><a href="#">Apply</a></li>
           <li><a href="#">Degreen Programs</a></li>
           <li><a href="#">Library</a></li>
           <li><a href="#">Campuses</a></li>
          </div>
          <div class="right-links">
           <li><a href="#">Students</a></li>
           <li><a href="#">Faculty</a></li>
           <li><a href="#">Alumi</a></li>
           <li><a href="#">Donors</a></li>         
          </div>
         
         
         </div><!-- footer links -->
        
        </div><!-- right middle -->
        <div class="right-footer">
         <h3>Connect with us!</h3>
        <div class="social">
          <div class="twitter">
           <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt=""/> </a>
          </div>
         <div class="facebook">
          <a href="#"> <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt=""/> </a>
         
         </div>
         <div class="linkedin">
          <a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt=""/> </a>
        
         
         </div>
         
         
        </div>
        
        </div>
        
        </div><!-- wrapper -->
        <address>FairBanks Hall  &sdot; 340 West 10th Street, Suite 6200  &sdot; Indianapolis, IN 46202-3082 &sdot; (317) 274 8157 <address>
         <button id="log">Login</button>
            <button id="web">Webmaster</button>
       </div><!-- indent -->
      
      
      
      </section>
      
   
      
      
	</main><!-- .site-main -->



</div><!-- .content-area -->
<?php get_footer(); ?>
     