<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        $conn = new PDO('mysql:host=localhost;dbname=projet-web', 'root', '');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$instance = new PDO('mysql:host=localhost;dbname=projet-web', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());

		}
      }
      return $conn;
    }
  }
?>