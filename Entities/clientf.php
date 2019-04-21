<?PHP
class clientf{
	private $cin;
	private $nom;
	private $prenom;
	private $mail;
	private $sexe;

	function __construct($cin,$nom,$prenom,$mail,$sexe){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->sexe=$sexe;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getmail(){
		return $this->mail;
	}
	function getsexe(){
		return $this->sexe;
	}
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setsexe($sexe){
		$this->sexe=$sexe;
	}
	
	
}

?>
