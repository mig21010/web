<?php

class OrderController
{

    public function insertOrderController()
        {
            if (isset($_POST["num"])) {
                if(preg_match('/^[0-9]+$/', $_POST["num"])&&
                //    preg_match('/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})+$/', $_POST["date_e"])&&
                   preg_match('/^[0-9]+$/', $_POST["cvc"])&&
                   preg_match('/^[0-9]+$/', $_POST["amount"])
                ){
                # code...
                $dataController = array("num"=>$_POST["num"],
                        "date_e"=>$_POST["date_e"],
                        "cvc"=>$_POST["cvc"],
                        "amount"=>$_POST["amount"],
                        "id_product"=>$_POST["id_product"],
                        "id_user"=>$_POST["id_user"]);
                    $request = Order::insertOrderModel($dataController,"order_detail");
                    if($request == "success"){
                        header("location:index.php?action=success");
                        // echo "Registro exitoso";
                    }else{
                        header("location:index.php");
                        echo "error";
                    }
                }
            }
            
        }
    public function selectProductsController()
    {
        $request = Order::selectProductsModel("product");
        // var_dump($request);
        foreach ($request as $products => $product) {
            echo '
                <input name="id_product" value="'.$product["id_product"].'" disabled>
            ';
        }
    }
    public function selectUsersController()
    {
        $request = Order::selectUsersModel("clients");
        // var_dump($request);
        foreach ($request as $clients => $client) {
            echo '
                <input name="id_user" value="'.$client["id_user"].'" disabled>
            ';
        }
    }
    
}

?>