<!-- add some theme support first
 -->
 <?php
 function chefit_theme_support(){
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag ');
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support(  'custom-header');
    add_theme_support(  'woocommerce' );
    add_theme_support( 'html5',array('search-form','comment-form','comment-list','gallery','navigation-widgets') );
    add_theme_support('responsive-embeds');
    add_theme_support( 'post-formats',array(
        'link','aside','gallery','image','video','chat'
    ) );
    // add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // menus are register here 
    register_nav_menus(array(
        'header_menu'  =>  'Header Menu',
        'footer_menu'   =>  'Footer Menu',
        'sidebar_menu'  =>  'Siderbar menu'
    ));
    register_sidebar( array(
        'name'  =>  'Footer Sidebar',
        'Description'   =>  'This is footer sidebar',
        'id'    => 'fsidebar',
        'class'=> 'wid-about
        widget
        wid-post
        wid-tag
        wid-gallery',
        'before_title'=>'<div class="widget wid-about">
        <div class="wid-header">
            <h5>',
        'after_title'=>'</h5>
        </div>
        <div class="wid-content">'

    ) );
}
add_action('after_setup_theme','chefit_theme_support');



// link css and script
function chefit_css_script(){
    wp_enqueue_style( 'zerogrid', get_template_directory_uri().'/css/zerogrid.css',true,true);
    wp_enqueue_style('slide',get_template_directory_uri().'/css/slide.css',true,true);
    wp_enqueue_style('menu',get_template_directory_uri().'/css/menu.css');
    wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('styelsheet',get_stylesheet_uri());


    wp_enqueue_script('classie',get_template_directory_uri().'/js/classie.js',array('jquery'), true, true);
    wp_enqueue_script('demo',get_template_directory_uri().'/js/demo.js',array('jquery'), true, true);
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-1.11.3.min.js',array('jquery'), true, true);
    wp_enqueue_script('responsive',get_template_directory_uri().'/js/responsiveslides.min.js',array('jquery'), true, true);
    wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js',array('jquery'), true, true);
    
}
add_action('wp_enqueue_scripts','chefit_css_script');



    function own_msg(){
        echo 'Please check the menu position at right';
    }

    class open_daily extends WP_widget{
       public function __construct(){
            parent::__construct('open_daily','Open Daily',array(
                'description'   =>  'this is open daily widget'
            ));
        }
        public function widget($args,$instance){
            
            ?>
            <h4><?php echo $instance['title'];?></h4>
					<p><span>mon.</span> <?php echo $instance['mon'];?></p>
					<p><span>tue.-wed.</span> <?php echo $instance['tue'];?></p>
					<p><span>thu.-sat.</span> <?php echo $instance['thu'];?></p>
					<p><span>sun.</span> <?php echo $instance['sun'];?></p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
            
            <?php 
        }
        public function form($instance){
           
         ?> 
         <p>
             <label for="">Title</label>
             <input type="text" name="<?php echo $this -> get_field_name('title');?>" id="" value="<?php echo $instance['title'];?>" class="widefat">
             <label for="">mon.</label>
             <input type="text" name="<?php echo $this -> get_field_name('mon');?>" id="" value="<?php echo $instance['mon'];?>" class="widefat">
             <label for="">tue.-wed.</label>
             <input type="text" name="<?php echo $this -> get_field_name('tue')?>" id="" value="<?php echo $instance['tue'];?>" class="widefat">
             <label for="">thu.-sat.</label>
             <input type="text" name="<?php echo $this -> get_field_name('thu');?>" id="" value="<?php echo $instance['thu'];?>" class="widefat">
             <label for="">sun.</label>
             <input type="text" name="<?php echo $this -> get_field_name('sun');?>" value="<?php echo $instance['sun'];?>" class="widefat">
             <label for="">If any personal Massage</label>
             <input type="text" name="<?php echo $this -> get_field_name('msg');?>" id="" value="<?php echo $instance['msg'];?>" class="widefat">
         </p>
         <?php 

        }
    }


    function widget_daily(){
        register_widget( 'open_daily' );
    }
    add_action('widgets_init','widget_daily');

    class customer_test_widget extends WP_Widget{
       public function __construct(){
           parent::__construct('customer_test_widget','Testimonial Widget',array(
                'description'   =>  'this is testimonial widget'
            ));
        }
        public function widget($args,$instance){
          ?> 
          <h4><?php echo $instance['title'];?></h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.</p>
		</div>
          <?php
            }
         public function form($instance){
             ?>
             <p>
                 <label for="">title</label>
                 <input type="text" name="<?php echo $this -> get_field_name('title');?>" id="" value="<?php echo $instance['title'];?>">
             </p>
             
             
             <?php 
              
          }
            
        
    }




    function cust_test_wid(){
        register_widget('customer_test_widget');
    }
    add_action('widgets_init','cust_test_wid');
 ?>