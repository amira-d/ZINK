<?php 
include '../config.php';
class User{
	private $login;
    private $pwd;
	
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new config();
		$this->conn=$c->getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from admin where email='$login' && Password='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>