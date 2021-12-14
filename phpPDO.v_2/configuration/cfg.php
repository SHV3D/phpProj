<?php
class dbSetting {
	private $host;
	private $port;
	private $database_name;
	private $charset;
	private $user;
	private $password;

	public function conn () {
		$this->host = "127.0.0.1";
		$this->port = "3307";
		$this->database_name = 'testPHP';
		$this->charset = 'utf8';
		$this->user = "root";
		$this->password = "";

		try {
			$link = "mysql:host=".$this->host.";dbname=".$this->database_name.";charset=".$this->charset.";port=".$this->port.";";
			$pdo = new PDO($link, $this->user, $this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
		catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}	
}

?>