<?php
class LinksPages
{
    public function linksPagesModel($linksModel)
    {
        if($linksModel == "user" || $linksModel == "order")
        {
            $module = "views/modules/".$linksModel.".php";
        }else if($linksModel == "index"){
            $module = "views/modules/inicio.php";
        }else if($linksModel == "ok"){
            $module = "views/modules/order.php";
        }else if($linksModel == "success"){
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php";
        }
        return $module;

    }
}

?>