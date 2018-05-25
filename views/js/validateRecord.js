function validateUser()
{
    var names = document.querySelector("#names").value;
    var last_name = document.querySelector("#last_name").value;
    var email = document.querySelector("#email").value;
    var phone = document.querySelector("#phone").value;
    var company = document.querySelector("#company").value;

    if (names != "") {      
        var characterers = names.length;
        var expresion = /^[a-zA-Z]*$/;
        if (characterers > 40) {
            document.querySelector("label[for='names']").innerHTML += "<br>Escribe menos de 40 caracteres</br>";
            return false;
        }
        if(!expresion.test(names))
        {
            document.querySelector("label[for='names']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
        
    }
    if (last_name != "") {      
        var characterers = last_name.length;
        var expresion = /^[a-zA-Z]*$/;
        if (characterers > 50) {
            document.querySelector("label[for='last_name']").innerHTML += "<br>Escribe menos de 50 caracteres</br>";
            return false;
        }
        if(!expresion.test(last_name))
        {
            document.querySelector("label[for='last_name']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
        
    }
    if (email != "") {      
        var characterers = email.length;
        var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        if (characterers > 50) {
            document.querySelector("label[for='email']").innerHTML += "<br>Escribe menos de 50 caracteres</br>";
            return false;
        }
        
    }
    if (phone != "") {      
        var characterers = phone.length;
        var expresion = /^[0-9]*$/;
        if (characterers > 20) {
            document.querySelector("label[for='phone']").innerHTML += "<br>Escribe menos de 20 caracteres</br>";
            return false;
        }
        if(!expresion.test(phone))
        {
            document.querySelector("label[for='phone']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
        
    }
    if (company != "") {      
        var characterers = company.length;
        var expresion = /^[a-zA-Z]*$/;
        if (characterers > 40) {
            document.querySelector("label[for='company']").innerHTML += "<br>Escribe menos de 40 caracteres</br>";
            return false;
        }
        if(!expresion.test(company))
        {
            document.querySelector("label[for='company']").innerHTML += "<br>No se admite caracteres especiales</br>";
            return false;
        }
        
    }
    
    return true;
}