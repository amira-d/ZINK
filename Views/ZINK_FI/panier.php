<?PHP
class Panier{
	private $reft;
	private $total;
	private $image;

	function __construct($reft,$total,$image){
		$this->reft=$reft;
		$this->total=$total;
		$this->iamge=$iamge;
		

	}
	
     function getreft(){
		return $this->rfet;
	}
	function gettotal(){
		return $this->total;
	}
	function getimage(){
		return $this->image;
	}
	
	

	function setrfet($rfet){
		$this->reft=$rfet;
	}
	function setDesc($total){
		$this->total=$total;
	
}
function setimage($image){
$this->image=$image;

}
?>