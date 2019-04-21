<?PHP
class achat{
	private $ref;
	private $prix;
	private $nbr;
	

	function __construct($ref,$prix,$nbr){
		$this->ref=$ref;
		$this->prix=$prix;
		$this->nbr=$nbr;
	}
	
	function getref(){
		return $this->ref;
	}
	function getprix(){
		return $this->prix;
	}
	function getnbr(){
		return $this->nbr;
	}
	
	

	function setref($ref){
		$this->ref=$ref;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setnbr($nbr){
		$this->nbr=$nbr;
	}

	
}
?>