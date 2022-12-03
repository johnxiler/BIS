const pwShow = document.querySelector(".show"),
    createPw = document.querySelector("#createPw"),
    confirmPw = document.querySelector("#confirmPw"),
    alertIcon = document.querySelector(".errorIcon"),
    alertText = document.querySelector(".text"),
    submitBtn = document.querySelector("#button");
var show = document.getElementById("show");

//JS hide and show password
    pwShow.addEventListener("click", ()=>{
        if((createPw.type === "password") && (confirmPw.type === "password")){
            createPw.type = "text";
            confirmPw.type = "text";
            show.textContent = "visibility";
            show.style.color = "#2565AE";
        }else{
            createPw.type = "password";
            confirmPw.type = "password";
            show.textContent = "visibility_off";
        }
    });

    //JS check if check and confirm password
    createPw.addEventListener("input", ()=>{
    let inputValue = createPw.value.trim(); //trim function do not count more than one space

    if(inputValue.length >= 8){
        confirmPw.removeAttribute("disabled");
        submitBtn.removeAttribute("disabled");
        submitBtn.classList.add("active");
    }else{
        confirmPw.setAttribute("disabled" , true);
        submitBtn.setAttribute("disabled" , true);
        submitBtn.classList.remove("active");
    }
});

submitBtn.addEventListener("click", ()=>{
    if(createPw.value === confirmPw.value){
        alertText.innerText = "Password matched";
        alertIcon.style.display = "none";
        alertText.style.color = "#4070F4";
    }else{
        alertText.innerText = "Password didn't matched";
        alertText.style.color = "#D93025";
        alertIcon.style.display = "block";
    }
});

// Validation for email text
var mailInput = document.getElementById("email");
var emailIcon = document.getElementById("emailIcon");

    mailInput.addEventListener("keyup", ()=>{
    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(!pattern.test(mailInput.value)){
            emailIcon.style.color = "red";
            mailInput.focus;
            return false;
        }else{
            emailIcon.textContent = "check_circle";
            emailIcon.style.color = "green";
        }
    });