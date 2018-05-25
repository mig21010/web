<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/web/views/css/styles.css">
    
    <script src="http://localhost/web/public/js/jquery-3.1.1.min.js"></script>
    <!-- <script type="text/javascript" src="../public/js/sweetalert2.all.min.js"></script> -->
    <title>Growth Institute</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="http://localhost/web/public/image/logo-white.png" alt="logo">
            </div>

        </div>
    </header>
<div class="container">
        <?php include "modules/navigation.php";?>

        <?php 
        $user = new UserController();
        $user->linksPagesController();
        ?>
    
</body>
<footer >
    <p class="copyright">Copyright</p>
</footer>
<script src="views/js/validateRecord.js"></script>
<script src="views/js/validateOrder.js"></script>
</html>