<h1>Orden de Pago</h1>
<form class="info" method="POST" onSubmit="return validateOrder()">
    <label for="num">Numero de tarjeta*:</label>
    <input type="hidden" name="id_order" id="id_order">
        <input type="text" name="num" id="num">
    <label for="date_e">Fecha de expiración*:</label>
        <input type="date" name="date_e" id="date_e" >
    <label for="cvc">CVC*:</label>
        <input type="number" name="cvc" id="cvc">
    <label for="amount">Cantidad*:</label>
        <input type="number" name="amount" id="amount" >
    <label for="price">Precio*:</label>
        <input type="number" name="price" id="price" disabled>
    <label for="id_product">Producto*:</label>
            <?php
                $product = new OrderController();
                $product->selectProductsController();
            ?>
        <!-- <input type="hidden" name="id_product" value="1"> -->
    <label for="id_user">User*:</label>
            <?php
                $user = new OrderController();
                $user->selectProductsController();
            ?>
            <!-- <input type="text" name="id_user"> -->
    <button type="submit" class="btn">Realizar Compra</button>
 
</div>
    
 </form>
 <?php
    $order = new OrderController();
    $order->insertOrderController();
?>