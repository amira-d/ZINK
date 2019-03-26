<?PHP
class Produit{
	private $Nom;
	private $Description;
	private $Type;
	private $Price;
    private $Image;

	function __construct($nom,$desc,$type,$price,$image){
		$this->Nom=$nom;
		$this->Description=$desc;
		$this->Type=$type;
		$this->Price=$price;
		$this->Image=$image;

	}
	
     function getnom(){
		return $this->Nom;
	}
	function getDescription(){
		return $this->Description;
	}
	
	function getType(){
		return $this->Type;
	}
	function getPrice(){
		return $this->Price;
	}
	function getImage(){
		return $this->Image;
	}


	function setNom($nom){
		$this->Nom=$nom;
	}
	function setDesc($desc){
		$this->Description=$desc;
	}
	function setType($type){
		$this->Type=$type;
	}
	function setPrice($prix){
		$this->Price=$prix;
	}
	function setImage($img){
		$this->Image=$img;
	}
	
	
}

?>