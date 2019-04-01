<?PHP
class ingredient{
	private $id;
	private $barcode;
	private $quantity;
	private $category;
	private $type;
	function __construct($id,$barcode,$quantity,$category,$type){
		$this->id=$id;
		$this->barcode=$barcode;
		$this->quantity=$quantity;
		$this->category=$category;
		$this->type=$type;
	}
	
	function getid(){
		return $this->id;
	}
	function getbarcode(){
		return $this->barcode;
	}
	function getquantity(){
		return $this->quantity;
	}
	function getcategory(){
		return $this->category;
	}
	function gettype(){
		return $this->type;
	}

	function setbarcode($barcode){
		$this->barcode=$barcode;
	}
	function setquantity($quantity){
		$this->quantity;
	}
	function setcategory($category){
		$this->category=$category;
	}
	function settype($type){
		$this->type=$type;
	}
	
}

?>