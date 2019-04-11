<?PHP
class stock{
	private $idstock;
	private $nom;
	private $type;
	function __construct($idstock,$nom,$type){
		$this->idstock=$idstock;
		$this->nom=$nom;
		$this->type=$type;
	}
	
	function getidstock(){
		return $this->idstock;
	}

	function getnom(){
		return $this->nom;
	}
	function gettype(){
		return $this->type;
	}

	
	function setnom($nom){
		$this->nom=$nom;
	}
	function settype($type){
		$this->type=$type;
	}
	
}

?>