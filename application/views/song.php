<html>  
    <head>  
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <link href="<?php echo base_url()?>css/singer.css" rel="stylesheet" type="text/css" />
        <title>CI heiilo world</title>  
    </head>  
    <body>  
       <table>
    <tr><td>歌曲名字</td><td>歌曲图片</td><td>播放</td></tr>
           <?php


           $imgBaseUrl = base_url()."images/";
           foreach($songs as $song){

               $name = $song['song_name'];
               $img=$imgBaseUrl.$song['song_icon_url'];
            echo "<tr><td>$name</td><td><img src='$img'></td><td>播放</td></tr>";

           }

           ?>


       </table>

        
    </body>  
</html>  