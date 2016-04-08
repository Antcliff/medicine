<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'School of Medicine IU' ),
    'secondary_menu' => __( 'Secondary Menu', 'School of Medicine IU'),
 'areas_menu' => __( 'Areas Menu', 'School of Medicine IU'),
 'template' => __(' Template Menu', 'School of Medicine IU')
   
) );


add_theme_support( 'post-thumbnails' ); 

add_image_size( 'about-pic',  90, 40, true);

add_image_size('areas-pic', 200, 300, true);


add_image_size('meet-pic', 100, 100, true);

add_image_size('news-pic', 300, 260, true);




add_action( 'init', 'codex_book_init' );
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Sub Pages', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Sub Page', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Sub Pages', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Sub Page', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Sub Page', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Sub Page', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Sub Page', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Sub Page', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Sub Page', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Sub Pages', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Sub Pages', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Sub Pages:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No sub pages found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No sub pages found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'sub-page', $args );
}


function add_custom_metabox()
{
 add_meta_box(
 'meta',
 'Sub Page Template',
'meta_callback',
  'sub-page',
  'normal',
  'high'
 
 
 );
 
 
 
}
add_action('add_meta_boxes', 'add_custom_metabox');

function meta_callback( $post ){
wp_nonce_field( basename( __FILE__ ), 'sub_page_nonce' );
 $stored_meta = get_post_meta( $post->ID );
?>

 <div class="meta-row">
  <div class="meta-th">
   <label for="heading-id" class="row-title">Section Heading </label>
   </div>
  <div class="meta-td">
  <input type="text" name="heading-id" id="heading-id" value="<?php if ( ! empty ($stored_meta['heading-id'] ) ) echo esc_attr($stored_meta['heading-id'][0] );  ?>">  
  </div>
  


<div class="meta">
  <div class="meta-th">
   <h1>Section  Content</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'section_title_content', true );
 $editor = 'section_title_content';
 $settings = array(
   'textarea_rows' => 3,
 
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div>
  <!---------------------------------------------------------------------------------------- ------------------------------------------->
  <div class="meta-th">
   <label for="title-top-id" class="row-title">Title For Page Content Top </label>
   </div>
  <div class="meta-td">
  <input type="text" name="title-top-id" id="title-top-id" value="<?php if ( ! empty ($stored_meta['title-top-id'] ) ) echo esc_attr($stored_meta['title-top-id'][0] );  ?>">  
  </div>
  


<div class="meta">
  <div class="meta-th">
   <h1>Title Page Content Top</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'page_content_top', true );
 $editor = 'page_content_top';
 $settings = array(
   'textarea_rows' => 3,

 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div>  
  
  
  <div class="meta-th">
   <label for="box-content-heading" class="row-title">Additional Content Heading Box </label>
   </div>
  <div class="meta-td">
  <input type="text" name="box-content-heading" id="box-content-heading" value="<?php if ( ! empty ($stored_meta['box-content-heading'] ) ) echo esc_attr($stored_meta['box-content-heading'][0] );  ?>">  
  </div>
  
  
  <div class="meta">
  <div class="meta-th">
   <h1>Additionial Page Content</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'page_content_box', true );
 $editor = 'page_content_box';
 $settings = array(
   'textarea_rows' => 5,
  
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div> 
  
  
    
  <div class="meta">
  <div class="meta-th">
   <h1>Additionial Page Content Indnet Contnet 1</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'page_content_box_indent_one', true );
 $editor = 'page_content_box_indent_one';
 $settings = array(
   'textarea_rows' => 3,
  
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div>  
  
  
    <div class="meta">
  <div class="meta-th">
   <h1>Additionial Page Content Indnet Contnet 2</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'page_content_box_indent_two', true );
 $editor = 'page_content_box_indent_two';
 $settings = array(
   'textarea_rows' => 3,
  
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div> 
  
  
  
   <div class="meta-th">
   <label for="accordian-title-left-side" class="row-title">Accordian Title Left Side</label>
   </div>
  <div class="meta-td">
  <input type="text" name="accordian-title-left-side" id="accordian-title-left-side" value="<?php if ( ! empty ($stored_meta['accordian-title-left-side'] ) ) echo esc_attr($stored_meta['accordian-title-left-side'][0] );  ?>">  
  </div>
  
  
     <div class="meta">
  <div class="meta-th">
   <h1>Accordian Content Left Side</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'accordian-content-left-side', true );
 $editor = 'accordian-content-left-side';
 $settings = array(
   'textarea_rows' => 3,
  
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div> 
  
  
   <div class="meta-th">
   <label for="accordian-link1" class="row-title">Accordian Link 1</label>
   </div>
  <div class="meta-td">
  <input type="text" name="accordian-link1" id="accordian-title-left-side" value="<?php if ( ! empty ($stored_meta['accordian-link1'] ) ) echo esc_attr($stored_meta['accordian-link1'][0] );  ?>">  
  </div>
  
  
    
     <div class="meta">
  <div class="meta-th">
   <h1>Accordian Content Left Side</h1>
 </div>
 <div class="meta-editor"></div>
 <?php
 
 $content = get_post_meta( $post->ID, 'accordian-link1-content1', true );
 $editor = 'accordian-link1-content1';
 $settings = array(
   'textarea_rows' => 3,
  
 
 );
 
 wp_editor($content, $editor, $settings);
 ?>
  </div> 
  
  
</div><!-- meta row -->
<?php
} 


function custom_meta_save( $post_id )
{
 $is_autosave = wp_is_post_autosave( $post_id );
 $is_revision = wp_is_post_revision( $post_id );
 $is_valid_nonce = ( isset( $_POST['sub_page_nonce'] ) && wp_verify_nonce( $_POST['sub_page_nonce'], basename(__FILE__ ) ) ) ? 'true' : 'false';
 
 if ( $is_autosave || $is_revision || !$is_valid_nonce )
 {
  return;
 }
 
 if ( isset( $_POST['heading-id'] ) )
 {
  update_post_meta( $post_id, 'heading-id', sanitize_text_field( $_POST['heading-id'] ) );
 }
 
 
 if ( isset( $_POST['section_title_content'] ) )
 {
  update_post_meta( $post_id, 'section_title_content', sanitize_text_field( $_POST['section_title_content'] ) );
 }
 
 if ( isset( $_POST['title-top-id'] ) )
 {
  update_post_meta( $post_id, 'title-top-id', sanitize_text_field( $_POST['title-top-id'] ) );
 }
 
  if ( isset( $_POST['page_content_top'] ) )
 {
  update_post_meta( $post_id, 'page_content_top', sanitize_text_field( $_POST['page_content_top'] ) );
 }
 
 
 
  if ( isset( $_POST['box-content-heading'] ) )
 {
  update_post_meta( $post_id, 'box-content-heading', sanitize_text_field( $_POST['box-content-heading'] ) );
 }
 
  
  if ( isset( $_POST['page_content_box'] ) )
 {
  update_post_meta( $post_id, 'page_content_box', sanitize_text_field( $_POST['page_content_box'] ) );
 }
 
   if ( isset( $_POST['page_content_box'] ) )
 {
  update_post_meta( $post_id, 'page_content_box_indent_one', sanitize_text_field( $_POST['page_content_box_indent_one'] ) );
 } 
  
   if ( isset( $_POST['page_content_box'] ) )
 {
  update_post_meta( $post_id, 'page_content_box_indent_two', sanitize_text_field( $_POST['page_content_box_indent_one'] ) );
 }
 
 
   if ( isset( $_POST['accordian-title-left-side'] ) )
 {
  update_post_meta( $post_id, 'accordian-title-left-side', sanitize_text_field( $_POST['accordian-title-left-side'] ) );
 }
 
   if ( isset( $_POST['accordian-content-left-side'] ) )
 {
  update_post_meta( $post_id, 'accordian-content-left-side', sanitize_text_field( $_POST['accordian-content-left-side'] ) );
 }
 
    if ( isset( $_POST['accordian-link1'] ) )
 {
  update_post_meta( $post_id, 'accordian-link1', sanitize_text_field( $_POST['accordian-link1'] ) );
 }
 
 
    if ( isset( $_POST['accordian-link1-content1'] ) )
 {
  update_post_meta( $post_id, 'accordian-link1-content1', sanitize_text_field( $_POST['accordian-link1-content1'] ) );
 }
 
 
 
 
 
}

add_action( 'save_post', 'custom_meta_save');

add_action( 'edit_form_after_editor', 'testing_accordion_section' );
 




?>