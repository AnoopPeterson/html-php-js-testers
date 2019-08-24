<?php
class DB
{	
	function connect(){
		try{
			$pdo_string = sprintf('mysql:host=%s;dbname=%s;charset=utf8', 'localhost', 'testproject');
			$pdo = new PDO($pdo_string, 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		} catch (PDOException $e){
			echo "Connection Failed: ".$e->getMessage();
		}
	}

	function query($request, array $params) {
		$stmt = self::connect()->prepare($request);
		$stmt->execute($params);

		#Code specific for SELECT command
		if(explode(' ', $request)[0] == 'SELECT'){
			$data = $stmt->fetchAll();
			return $data;
		}
	}

}
