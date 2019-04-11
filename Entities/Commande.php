<?PHP
class commande {
	private $cin;
	private $nom;
	private $prenom;
	private $numero;
	private $email;
	private $heures;
	private $minutes;
	private $produits;
	private $prix;
	private $quantite;
	private $etat;
	function __construct($cin,$nom,$prenom,$numero,$email,$heures,$minutes,$produits,$prix,$quantite,$etat){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->numero=$numero;
		$this->email=$email;
		$this->heures=$heures;
		$this->minutes=$minutes;
		$this->produits=$produits;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->etat=$etat;
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
	function getProduits(){
		return $this->produits;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getEtat(){
		return $this->etat;
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
	function setProduits($produits){
		$this->produits=$produits;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	
}

?>