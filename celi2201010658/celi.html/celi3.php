<?php
    $pr = "p1";
    if (isset($_GET["pg"])) {

    	# code...
    }
    $konten =""
    $judulpage=""

    switch($pr){
    	case "p1":
    	   $judulpage="halaman 1";
    	   $konten= "<h3>Halaman p1</h3";
    	   $konten="<p> Menampilkan halaman p2</p>";
    	   break;
        case "p2":
           $judulpage="halaman 1";
    	   $konten= "<h3> Halaman p2</h3";
    	   $konten="<p> Menampilkan halaman p2</p>";
    	   break;

    	 case "p3":
    	   $judulpage="halaman 3";
    	   $konten= "<h3> Halaman p3</h3";
    	   $konten= "<p> Menampilkan halaman p2</p>";	# code...
       
    	 break;
    		# code...
    		
    	    
    	default:
    	   $judulpage= "halaman 1";
    	   $konten= "<h3>Halaman p1</h3";
    	   $kontne= "<p> Menampilkan halaman p2</p>";
    	   
    	 break;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-compatible" content="IE-edge">
    	<title> <?=$judulpage; ?></title>
    </head>
    <body>
         <a href="celi3.php=1?pg>">halaman 1 </a>, <a href =celi3.php?pg=2">halaman 2</a>,<a href=celi3.php?pg=3">halaman 3</a> 
         
    </body>
    </html>