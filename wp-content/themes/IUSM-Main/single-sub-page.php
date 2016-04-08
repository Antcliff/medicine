
<?php get_header(); ?>

 <div class="jumbotron">
<div class="container">
   <div class="sub-page-heading">
   <h1><?php echo get_post_meta( get_the_ID(), 'heading-id', true ); ?></h1>
    <p><?php echo get_post_meta( get_the_ID(), 'section_title_content', true ); ?></p>
 </div><!-- sub-page-heading -->
    
</div><!-- container -->
</div><!-- jumbotron -->

  <div class="container">
                  <div class="row sub-page-content">
                         <!-- two columns -->   
      
                         <div class="col-sm-7" > 
                        <h3 id="page-heading-col-7"><?php echo get_post_meta( get_the_ID(), 'title-top-id', true ); ?></h3>
                           <p id="page-heading-content"><?php echo get_post_meta( get_the_ID(), 'page_content_top', true ); ?></p>
                          
                          
                            <div class="sub-box">
<h3 id="sub-box-h3"><?php echo get_post_meta( get_the_ID(), 'box-content-heading', true ); ?></h3>
<p><?php echo get_post_meta( get_the_ID(), 'page_content_box', true ); ?></p>
                             <div class="sub-page-indent">
                             <p><?php echo get_post_meta( get_the_ID(), 'page_content_box_indent_one', 'true');?> </p>
                             <p><?php echo get_post_meta( get_the_ID(), 'page_content_box_indent_two', 'true');?></p>
                             
                             </div>
 

                             </div><!-- sub-box -->
                          <div class="sub-accordians">
                          <div class="border row">
                          <div class="border col-lg-6">
                          <h3><?php echo get_post_meta( get_the_ID(), 'accordian-title-left-side', 'true');?></h3>
                          <p><?php echo get_post_meta( get_the_ID(), 'accordian-content-left-side', 'true');?></p>
 <div id="sub-expand1">
 <div id="accordion">
  <p class="accordion-toggle"><span id="plus">&#43;</span><?php echo get_post_meta( get_the_ID(), 'accordian-link1', 'true');?></a></p>
  <div class="accordion-content default">
      <li><?php echo get_post_meta( get_the_ID(), 'accordian-link1-content1', 'true');?></li>

  </div>
  <p class="accordion-toggle"><span id="plus">&#43;</span>Link 2</a></p>
  <div class="accordion-content">
     <li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
  </div>
  <p class="accordion-toggle"><span id="plus">&#43;</span>Link 3</a></p>
  <div class="accordion-content">
    <li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
  </div>
  <p class="accordion-toggle"><span id="plus">&#43;</span>Link 4</a></p>
  <div class="accordion-content">
    <li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
  </div>
  <p class="accordion-toggle"><span id="plus">&#43;</span>Link 5</a></p>
  <div class="accordion-content">
    <li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
<li>Random Text</li>
  </div>
</div><!-- end accordians -->
</div><!-- Sub expand 1 -->
                           
                           
                           </div><!-- border col-lg-6 -->
                           </div><!-- border row -->
                          </div><!-- sub-accordians -->
                          
                   </div><!-- col-ssm-7 -->
                   
                   
   </div><!-- row sub-page-content -->
   
   
</div><!-- container -->


<?php get_footer(); ?> 