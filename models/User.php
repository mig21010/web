<?php 
 require_once "Connection.php";

    class User extends Connection
    {
        public function insertUserModel($dataModel,$table)
        {
            $statement = Connection::connect()->prepare("INSERT INTO $table (names, last_name, email, phone, company) 
            VALUES (:names,:last_name,:email,:phone,:company)");
            $statement->bindParam(":names", $dataModel["names"], PDO::PARAM_STR);
            $statement->bindParam(":last_name", $dataModel["last_name"], PDO::PARAM_STR);
            $statement->bindParam(":email", $dataModel["email"], PDO::PARAM_STR);
            $statement->bindParam(":phone", $dataModel["phone"], PDO::PARAM_STR);
            $statement->bindParam(":company", $dataModel["company"], PDO::PARAM_STR);

            if ($statement->execute()) {
                return "success";
            }else{
                return "error";
            }
        }
        
    }
    
 ?>