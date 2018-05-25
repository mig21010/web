<?php

class UserController{
    public function template()
    {
        include "views/template.php";
    }
    public function linksPagesController()
    {
        if(isset($_GET["action"])){
            $linksController = $_GET["action"];
        }else{
            $linksController = "index";
        }
       
        $request = LinksPages::linksPagesModel($linksController);
        include $request;
    }
    public function insertUserController()
        {
            if (isset($_POST["names"])) {
                if(preg_match('/^[a-zA-Z]+$/', $_POST["names"])&&
                   preg_match('/^[a-zA-Z]+$/', $_POST["last_name"])&&
                   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])&&
                   preg_match('/^[0-9]+$/', $_POST["phone"])&&
                   preg_match('/^[a-zA-Z]+$/', $_POST["company"])
                ){
                # code...
                $dataController = array("names"=>$_POST["names"],
                        "last_name"=>$_POST["last_name"],
                        "email"=>$_POST["email"],
                        "phone"=>$_POST["phone"],
                        "company"=>$_POST["company"]);
                    $request = User::insertUserModel($dataController,"clients");
                    if($request == "success"){
                        header("location:index.php?action=ok");
                    }else{
                        header("location:index.php");
                    }
                }
            }
            
        }
}

?>