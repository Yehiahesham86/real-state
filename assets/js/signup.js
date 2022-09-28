var FirstN = document.getElementById("fn");
var LastN = document.getElementById("ln");
var email = document.getElementById("email");
var phone = document.getElementById("number");
var password = document.getElementById("password");
var addBtn = document.getElementById("addBtn")

password.onkeyup= function() {
    var passRegex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,32}$/
    if (!passRegex.test(password.value)) {
        addBtn.disabled = "True";
        password.classList.add("is-invalid")
        password.classList.remove("is-valid")


    }
    else {
        addBtn.removeAttribute("disabled"); 
        password.classList.add("is-valid")
        password.classList.remove("is-invalid")
    }
}

email.onkeyup= function() {
    var emailRegex = /^\S+@\S+\.\S+$/
    if (!emailRegex.test(email.value)) {
        addBtn.disabled = "True";
        email.classList.add("is-invalid")
        email.classList.remove("is-valid")


    }
    else {
        addBtn.removeAttribute("disabled"); 
        email.classList.add("is-valid")
        email.classList.remove("is-invalid")
    }
}

number.onkeyup= function() {
    var numberRegex = /^01[1205][0-9]{8}$/
    if (!numberRegex.test(number.value)) {
        addBtn.disabled = "True";
        number.classList.add("is-invalid")
        number.classList.remove("is-valid")


    }
    else {
        addBtn.removeAttribute("disabled"); 
        number.classList.add("is-valid")
        number.classList.remove("is-invalid")
    }
}

FirstN.onkeyup= function() {
    var FirstNRegex = /^[a-zA-Z]/

    if (!FirstNRegex.test(FirstN.value)) {
        addBtn.disabled = "True";
        FirstN.classList.add("is-invalid")
        FirstN.classList.remove("is-valid")


    }
    else {
        addBtn.removeAttribute("disabled"); 
        FirstN.classList.add("is-valid")
        FirstN.classList.remove("is-invalid")
    }
}

LastN.onkeyup= function() {
    
    if (!LastNRegex.test(LastN.value)) {
        addBtn.disabled = "True";
        LastN.classList.add("is-invalid")
        LastN.classList.remove("is-valid")


    }
    else {
        addBtn.removeAttribute("disabled"); 
        LastN.classList.add("is-valid")
        LastN.classList.remove("is-invalid")
    }
}