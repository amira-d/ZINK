<?PHP
class Recrutement{
	private $id;
	private $titre;
	private $description;
    private $service;
    private $deadline;
    private $image;

	function __construct($titre,$desc,$service,$deadline,$image){
		$this->titre=$titre;
		$this->description=$desc;
		$this->service=$service;
		$this->deadline=$deadline;
		$this->image=$image;

	}
	
     function getTitre(){
		return $this->titre;
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
	function getService(){
		return $this->service;
	}
	function getDeadline(){
		return $this->deadline;
	}


	function setTitre($titre){
		$this->titre=$titre;
	}

	function setDesc($desc){
		$this->Description=$desc;
	}


	function setImage($image){
		$this->image=$image;
	}
	function setService($service){
		$this->service=$service;
	}
	/*function getDeadline($deadline){
		$this->deadline=$deadline;
	}*/
	
	
}

?>