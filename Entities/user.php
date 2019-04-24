<?PHP
class user{
	private $userName;
	private $Email;
	private $PWD;
	
	function __construct($user,$email,$pwd){
		$this->userName=$user;
		$this->Email=$email;
		$this->PWD=$pwd;
		
	}
	
	function getuserName(){
		return $this->userName;
	}
	function getEmail(){
		return $this->Email;
	}
	function getPWD(){
		return $this->PWD;
	}
	

	function setuserName($nom){
		$this->userName=$nom;
	}
	function setEmail($email){
		$this->Email=$email;
	}
	function setPWD($pwd){
		$this->PWD=$pwd;
	}
	
	
}

?>