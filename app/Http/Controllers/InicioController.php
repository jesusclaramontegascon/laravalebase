<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\InicioModel;

class InicioController extends Controller
{  
    public $metadatos;
	public $contenidoweb;
	public $Verpie;
	public $Vermenu;
	public $verzonabanner;
	
   
   
	public function VermetaDatos()
	{   
	   $ObjetoInicioModel=new InicioModel();
	   $resultado_VermetaDatos=$ObjetoInicioModel->ObtenermetaDatos();
	   $this->metadatos=$resultado_VermetaDatos;
	   return $this->metadatos;
	}
	
	public function Zonabanner()
	{
	   $ObjetoInicioModel=new InicioModel();
	   $resultadobanner=$ObjetoInicioModel->ObtenerdatosBanner();
	   $this->verzonabanner="";
	   $this->verzonabanner.=$resultadobanner;

	   return $this->verzonabanner;
	}
	public function Vermenu()
	{  
	  $ObjetoInicioModel2=new InicioModel();
	  $verdatosmenu=$ObjetoInicioModel2->ObtenerdatosMenu();
	  //print_r($verdatosmenu);
	 $this->Vermenu="";
     $this->Vermenu.=$verdatosmenu;


	 return $this->Vermenu;
	}
	
	public function VerContenidoweb()
	{
		$ObjetoInicioModel3=new InicioModel();
		$resultado_VerContenidoweb=$ObjetoInicioModel3->ObtenerdatosWeb();
		
		$this->contenidoweb="";
		$this->contenidoweb.=$resultado_VerContenidoweb;
		return $this->contenidoweb;
		
	}
	
	public function VerPie()
	{   $ObjetoInicioModel=new InicioModel();
		$resultado_VerPie=$ObjetoInicioModel->ObtenerdatosPie();
		
     $this->Verpie="";
	 $this->Verpie.=$resultado_VerPie;
	 return $this->Verpie;
	}
	
	
}
