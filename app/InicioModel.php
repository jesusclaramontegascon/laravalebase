<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

class InicioModel extends Model
{
	public $datosWeb;public $datosPie;
	public $datosMenu;public $datosBanner;
	
	public $metadatos;public $oglocale;
	public $ogtype;public $ogtitle;
	public $ogdescription;public $ogurl;public $icon;
	public $contenidoweb;public $Verpie;public $Vermenu;
	
   public function ObtenerdatosWeb()
   {
	   $this->datosWeb=view('partials.zonadatosweb');
	   return $this->datosWeb;
	   
   }

   public function ObtenerdatosPie()
   {
	   //$this->datosPie="Obtener Datos PIE<br/>";
	   
	   return view('partials.zonapie');
	   //return $this->datosPie;
   }

   public function ObtenermetaDatos()
   {
	   //$this->metaDatos="Obtener Meta Datos<br/>";
	   
	  $this->oglocale="es_ES";
	  $this->ogtype="website";
      $this->ogtitle="Titulo og title";
	  $this->ogdescription="Desarrollador web";
	  $this->ogurl="http://www.jesusclaramontegascon.com/";
	  $this->icon='<link rel="shortcut icon" href="favicon.ico">/>';
	  
	  	$this->metadatos=array
		("title"=>"Titulo 1",
		 "keywords"=>"palabra1, palabra2",
		 "description"=>"descripcion",
		 "oglocale"=>$this->oglocale,
		 "ogtype"=>$this->ogtype,
		 "ogtitle"=>$this->ogtitle,
		 "ogdescription"=>$this->ogdescription,
		 "ogurl"=>$this->ogurl,
		);
	
	
	   return $this->metadatos;

   }


   public function ObtenerdatosMenu()
   { $vista_menu=view('partials.zonamenu');
	//return view('partials.zonamenu');
	$valor="kk";
	return $vista_menu;
   }
   
   public function ObtenerdatosBanner()
   {return view('partials.zonabanner');
   }
}
