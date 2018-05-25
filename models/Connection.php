<?php

class Connection{

	public function connect(){

		$link = new PDO("mysql:host=localhost;dbname=web","root","admin");
        return $link;
        // var_dump($link);

	}

}
// $a = new Connection();
// $a->connect();
?>