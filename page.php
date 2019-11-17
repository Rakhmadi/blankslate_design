<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
                         
    <?php wp_head();?>
</head>
<body>
    <nav class="nav white shadow relative">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
    </div>
    <div class="row primary bawah">
        <div class="footer bawah">
            <div class="col-3">
               <div class="c">
               <ul>
                    <li><a href="http://">chec</a></li>
                </ul>
               </div>
            </div>
            <div class="col-3">
            <div class="c">
               <ul>
               <li><a href="http://">chec</a></li>
                </ul>
               </div>
            </div>
            <div class="col-3">
            <div class="c">
               <ul>
               <li><a href="http://">chec</a></li>
                </ul>
               </div>
            </div>
        </div>
    </div>
   
    <div class="mid-bt" onclick="show()">
       <p>></p>
    </div>
    <div id="t" onclick="hide()" class="slide-k">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
   </div>
    <script>
    function show(){
        document.getElementById('t').style.width="50%";
    }
    function hide(){
        document.getElementById('t').style.width="0";
    }
    </script>
</body>
</html>
