<?PHP
class Annonce{
	private $id;
	private $titre;
	private $type;
	private $description;
    private $image;

	function __construct($titre,$type,$desc,$image){
		$this->titre=$titre;
		$this->type=$type;
		$this->description=$desc;
		$this->image=$image;

	}
	
     function getTitre(){
		return $this->titre;
	}
	function getType(){
		return $this->type;
	}
	function getDesc(){
		return $this->description;
	}	
	function getImage(){
		return $this->image;
	}
	function getId(){
		return $this->id;
	}


	function setTitre($titre){
		$this->titre=$titre;
	}
		function setType($type){
		$this->Type=$type;
	}
	function setDesc($desc){
		$this->Description=$desc;
	}


	function setImage($image){
		$this->image=$image;
	}
	
	
}

?>