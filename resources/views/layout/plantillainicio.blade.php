<?php
use App\Http\Controllers\InicioController;
$Objeto_InicioController=new InicioController();
$resultado_metadatos=$Objeto_InicioController->VermetaDatos();
$resultado_pie=$Objeto_InicioController->VerPie();
$resultado_menu=$Objeto_InicioController->Vermenu();

echo "<br>*************************<br>";
print_r($resultado_metadatos);echo "<br>";
echo "*************************<br>";
?>
<html>
 @yield('zonahead')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php print_r($resultado_metadatos["title"]);?></title>
		 <meta name="Description" content="<?php print_r($resultado_metadatos["description"]);?>"/>
		 <meta name="keywords" content="<?php print_r($resultado_metadatos["keywords"]);?>"/>
		 <meta property="og:locale" content="<?php print_r($resultado_metadatos["oglocale"]); ?>"/>
         <meta property="og:type" content="<?php print_r($resultado_metadatos["ogtype"]);?>"/>
		 <meta property="og:title" content="<?php print_r($resultado_metadatos["ogtitle"]);?>"/>	
         <meta property="og:description" content="<?php print_r($resultado_metadatos["ogdescription"]);?>"/>
         <meta property="og:url" content="<?php print_r($resultado_metadatos["ogurl"]);?>"/>		 
    </head>
    <body>
	
	 @yield('zonamenu')
	<h1> <?php print_r($resultado_menu);?>
	</h1>
	<br/>
	 
	 @yield('zonabanner')
	<h1> Esto es la zona banner</h1>
	 
	 @yield('zonacontenido')
       
	 @yield('zonafooter')
	 <?php print_r($resultado_pie);?>
    </body>
</html>
