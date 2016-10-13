<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Lato & Tangerine font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i|Tangerine:400,700" rel="stylesheet">
   <!--cardo font-->
   <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i" rel="stylesheet">
    <!-- bootstrap Latest compiled and minified CSS 2016 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- bootstrap icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- bootstrap Latest compiled and minified JavaScript 2016 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <!-- title need to be optimized-->
    <title>
        <?php bloginfo('name');?>
    </title>
    <!--helps with plugin effeciency-->
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
                 <!-- navigation-->
                 <header class="site-header ">

    <nav id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php
    
    $args = array(
    'theme_location' => 'primary' ); ?>
            <?php wp_nav_menu( $args ) ;?>
            
    </nav>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> 
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.display = "block";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "100";
            document.body.style.backgroundColor = "white";
        }
    </script>
     <div class=" titolo text-center">
        <h1 class= "main-title"><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
        <h5 class="main-description"><?php bloginfo('description'); ?></h5>

           
           </div>
               <!--/navigation-->
        <!--social media icons-->
      <div class="social">
          | <i class="fa fa-facebook-square" ><a href="#"></a></i> <i class="fa fa-twitter" aria-hidden="true" ><a href="#"></a></i> <i class="fa fa-instagram" aria-hidden="true" ><a href="#"></a></i> <i class="fa fa-google-plus" aria-hidden="true"><a href="#"></a></i>
          </div>
       <!--/social media icons-->
      
      <!--searchbar-->
      <div class="hd-search">
         <?php get_search_form();?>  
      </div>
     
    <!--/searchbar-->
    </header>
    
    



  
    <div class="container home-blogs">