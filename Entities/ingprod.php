<?PHP
class ingprod{
	private $Nom_P;
	private $Nom_Ing;
	

	function __construct($nom,$desc){
		$this->Nom_P=$nom;
		$this->Nom_Ing=$desc;
		

	}
	
     function getprod(){
		return $this->Nom_P;
	}
	function geting(){
		return $this->Nom_Ing;
	}
	
	


	function setprod($prod){
		$this->Nom_P=$prod;
	}
	function seting($ing){
		$this->Nom_Ing=$ing;
	}

	
	
}

?>