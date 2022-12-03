const email = document.querySelector("#email"),
    submitBtn = document.querySelector("#button");

    //JS check if check and confirm password
    email.addEventListener("input", ()=>{
    let inputValue = email.value.trim(); //trim function do not count more than one space

    if(inputValue.length >= 8){
        submitBtn.removeAttribute("disabled");
        submitBtn.classList.add("active");
    }else{
        submitBtn.setAttribute("disabled" , true);
        submitBtn.classList.remove("active");
    }
});

// Validation for email text
var mailInput = document.getElementById("email");
var emailIcon = document.getElementById("emailIcon");

    mailInput.addEventListener("keyup", ()=>{
    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(!pattern.test(mailInput.value)){
            emailIcon.style.color = "#EAD3A8";
            mailInput.focus;
            return false;
        }else{
            emailIcon.textContent = "check_circle";
            emailIcon.style.color = "green";
        }
    });