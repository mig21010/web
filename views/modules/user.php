
        <h1>Detalles del Usuario</h1>
        <form class="info" id="form" method="POST" onSubmit="return validateUser()">
            <label for="names">Nombre*:</label>
            <input type="hidden" name="id_user" id="id_user">
                <input type="text" name="names" id="names" maxlength="40" required>
            <label for="last_name">Apellidos*:</label>
                <input type="text" name="last_name" id="last_name" required>
            <label for="email">Email*:</label>
                <input type="email" name="email" id="email" required>
            <label for="phone">Telefono*:</label>
                <input type="number" name="phone" id="phone" required>
            <label for="company">Nombre de la empresa*:</label>
                <input type="text" name="company" id="company" required>
            <button type="submit" class="btn" id="btn">Continuar</button>

 
    </div>
 </form>
<?php
    $record = new UserController();
    $record->insertUserController();
?>