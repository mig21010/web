function validateOrder()
{
    var num = document.querySelector("#num").value;
    var date_e = document.querySelector("#date_e").value;
    var cvc = document.querySelector("#cvc").value;
    var amount = document.querySelector("#amount").value;
    var id_product = document.querySelector("#id_product").value;
    var id_user = document.querySelector("#id_user").value;
    if (num != "") {      
        var characterers = num.length;
        var expresion = /^[0-9]*$/;
        if (characterers > 16) {
            document.querySelector("label[for='num']").innerHTML += "<br>Escribe menos de 16 caracteres</br>";
            return false;
        }
        if(!expresion.test(num))
        {
            document.querySelector("label[for='num']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
    }
    if (date_e != "") {      
        var characterers = num.length;
        var expresion = /^(0[1-9]|[1-2]\d|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$/;
        
        if(!expresion.test(date_e))
        {
            document.querySelector("label[for='date_e']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
    }
    if (cvc != "") {      
        var characterers = cvc.length;
        var expresion = /^[0-9]*$/;
        if (characterers > 4) {
            document.querySelector("label[for='cvc']").innerHTML += "<br>Escribe menos de 4 caracteres</br>";
            return false;
        }
        if(!expresion.test(cvc))
        {
            document.querySelector("label[for='cvc']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
    }
    if (amount != "") {      
        var characterers = amount.length;
        var expresion = /^[0-9]*$/;
        if (characterers > 10) {
            document.querySelector("label[for='amount']").innerHTML += "<br>Escribe menos de 10 caracteres</br>";
            return false;
        }
        if(!expresion.test(amount))
        {
            document.querySelector("label[for='amount']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
    }
    

    return true;
}
$("#amount").change(function() {

    if($("#amount").val() >0 && $("#amount").val()<10 ){
        $("#price").val(70);
    }else if($("#amount").val() >10 && $("#amount").val()<21){
        $("#price").val(60);
    }
    // alert();
    
    });