<?PHP
class livraison {
	private $location;
	private $cin;
	private $nom;
	private $prenom;
	private $numero;
	private $email;
	private $heures;
	private $minutes;
	
	private $etat;
	function __construct( $cin,$nom,$prenom,$numero,$email,$heures,$minutes , $location ,$etat){
		$this->location=$location;
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numero=$numero;
		$this->email=$email;
		$this->heures=$heures;
		$this->minutes=$minutes;
		
		$this->etat=$etat;
	}
	function getLocation(){
		return $this->location;
	}
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNumero(){
		return $this->numero;
	}
	function getEmail(){
		return $this->email;
	}
	function getHeures(){
		return $this->heures;
	}
	function getMinutes(){
		return $this->minutes;
	}
	
	function getEtat(){
		return $this->etat;
	}
	function setlocation($location){
		$this->location=$location;
	}

	function setCin($cin){
		$this->cin=$cin;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setHeures($heures){
		$this->heures=$heures;
	}
	function setMinutes($minutes){
		$this->minutes=$minutes;
	}
	
	function setEtat($etat){
		$this->etat=$etat;
	}
	
}

?>