<?php 
 require_once "Connection.php";

    class Order extends Connection
    {
        public function insertOrderModel($dataModel,$table)
        {
            $statement = Connection::connect()->prepare("INSERT INTO $table (num, date_e, cvc, amount, id_product,id_user) 
            VALUES (:num,:date_e,:cvc,:amount,:id_product,:id_user)");
            $statement->bindParam(":num", $dataModel["num"], PDO::PARAM_STR);
            $statement->bindParam(":date_e", $dataModel["date_e"], PDO::PARAM_STR);
            $statement->bindParam(":cvc", $dataModel["cvc"], PDO::PARAM_STR);
            $statement->bindParam(":amount", $dataModel["amount"], PDO::PARAM_STR);
            $statement->bindParam(":id_product", $dataModel["id_product"], PDO::PARAM_STR);
            $statement->bindParam(":id_user", $dataModel["id_user"], PDO::PARAM_STR);

            if ($statement->execute()) {
                return "success";
            }else{
                return "error";
            }
        }
        public function selectProductsModel($table)
        {
            $statement = Connection::connect()->prepare("SELECT id_product,name_product FROM $table");
            $statement->execute();
            return $statement->fetchAll();
        }
        public function selectUsersModel($table)
        {
            $statement = Connection::connect()->prepare("SELECT id_user,names FROM $table WHERE id_user=1");
            $statement->execute();
            return $statement->fetchAll();
        }
        
    }
    
 ?>