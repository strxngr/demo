<html>
   <head>
    <title>artIsst</title>
       <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
       <script src="jquery.fancybox.min.js"></script>
       <link href="jquery.fancybox.min.css" rel="stylesheet">
       <style>
           body{
               
               margin: 0;
               padding: 0;
               background: white;
               
           }
           
           main{
               
               width: 80%;
               margin: 0px auto;
           }
           
           .thumnails{
               width: 40%;
               float: left;
               margin: 60px;
               background: white;
               padding: 20px;
               box-sizing: border-box;
               
           }
           
           
           .thumnails img{
               width: 100%;
               height: auto;
           }
       </style>
    </head>
    <body>
        <div align="center">
              <img src=" artisst.jpg" style="position:relative;width:60%;height:38%;"><br>
    <main>

        <?php
        
        $dir = glob('images/{*.jpg,*.jpeg,*.png}',GLOB_BRACE);
        
        foreach ($dir as $value) {
            
            ?> 
        <div class="thumnails"> 
            
            <a href="<?php echo $value ;?>" data-fancybox="images" data-caption="My caption">
   <img src="<?php echo $value ;?>" alt="<?php echo $value ;?>">
</a>
     
        </div>
        
        <?php
        
        }
            
            ?>
       
       </main>
    </body>
</html>