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
    <div class='jumbo'></div>
    <div class="row">
    <div class='col-3  '><div class='mr-5'></div></div>
    <div class='col-3  '><div class='mr-5'></div></div>
    <div class='col-3  '><div class='mr-5'></div></div>
    <div class='col-2  '><div class='mr-5'></div></div>
    <div class='col-2  '><div class='mr-5'></div></div>

    <?php
       for ($i=0; $i < 1000; $i++) { 
           echo"<div class='col-4  '><div class='mr-5'>loop</div></div>";
       }
      ?>
    </div>
    <div class="mid-bt" onclick="show()">
       <p>></p>
    </div>
    <div id="t" onclick="hide()" class="slide-k"></div>
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
