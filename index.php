<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <?php wp_head();?>
</head>
<body >
    <nav class="nav white shadow relative">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
    <div class='jumbo'></div>
    <div class="row">

    <?php
       for ($i=0; $i < 3; $i++) { 
           echo"<div class='col-3'><div class='mr-5'><div class='card shadow border-left'></div></div></div>";
       }
      ?>

    </div>
    <div class="row">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
    </div>
    <div class="row primary">
        <div class="footer">
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
    <div id="t" onmouseleave="hide(this)" onclick="hide()" class="slide-k">
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
