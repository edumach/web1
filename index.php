<!DOCTYPE html>
<html lang="cs">
   <head>
      <meta charset="utf-8">
      <title>Výukový web | <?php echo $_SERVER['HTTP_HOST'] ;?></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="shortcut icon" href="favicon.ico">
   </head>
   <body>	
   		<div class="container">
			<?php
				// zavolání skriptu s kódem pro hlavičku
				require "hlavicka.php";
            ?>
         <div class="row">
		 	<div class="col-sm-3">
				<?php
					// zavolání skriptu s kódem pro menu
					require "menu.php";
				?>
            </div>
            <div class="col-sm-9">
            	<?php
               		@$text=htmlspecialchars(strip_tags($_GET['text']));
					if($text==''){
					   $text='titulka';
					}
					if (file_exists($text.'.php')) {
					   require $text.'.php';
					} else {
					   require 'error404.php';
					}
            	?>
			</div>
         </div> 
			 <?php
				// zavolání skriptu s kódem pro patičku
				require "paticka.php";
			?>
      </div>
   </body>
</html>
