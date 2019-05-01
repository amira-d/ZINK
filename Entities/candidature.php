<?PHP
class Candidature{
	private $id;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $email;
	private $num;
	private $cv;
	private $lettre;
	private $service;
    private $photo;
    private $id_recrutement;

	function __construct($nom,$prenom,$date_naissance,$email,$num,$cv,$lettre,$service,$photo,$id_rec){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->email=$email;
		$this->num=$num;
		$this->cv=$cv;
		$this->lettre=$lettre;
		$this->service=$service;
		$this->photo=$photo;

	}
	
    function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDateN(){
		return $this->date_naissance;
	}	
	function getEmail(){
		return $this->email;
	}
	function getNum(){
		return $this->num;
	}
	function getCv(){
		return $this->cv;
	}
	function getLettre(){
		return $this->lettre;
	}	
	function getService(){
		return $this->service;
	}
	function getPhoto(){
		return $this->photo;
	}

	 function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setDateN($date_naissance){
		 $this->date_naissance=$date_naissance;
	}	
	function setEmail($email){
		$this->email=$email;
	}
	function setNum($num){
		$this->num=$num;
	}
	function setCv($cv){
		$this->cv=$cv;
	}
	function setLettre($lettre){
		$this->lettre=$lettre;
	}	
	function setService($service){
		$this->service=$service;
	}
	function setPhoto($photo){
		$this->photo=$photo;
	}




	
	
}

?>