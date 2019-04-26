<?PHP
class clientf{
	private $cin;
	private $nom;
	private $prenom;
	private $mdp;
	private $mail;
	private $sexe;
	

	function __construct($cin,$nom,$prenom,$mdp,$mail,$sexe){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mdp=$mdp;
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
	function getmdp(){
		return $this->mdp;
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
	function setmdp($mdp){
		$this->mdp=$mdp;
	}
	function setsexe($sexe){
		$this->sexe=$sexe;
	}
	
	

	//
	public function exist()
	{
		$db=config::getConnexion();
		$req=$db->prepare('SELECT * FROM clientf WHERE cin=:cin');
		$req->bindValue(':cin',$this->cin);
		$req->execute();
		if ($req->rowCount()==0)
			return false;
		$clientf=$req->fetch();
		if ($clientf['mdp']!=$this->mdp)
			return false;
		return true;
	}
}

?>
