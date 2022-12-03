const pwShow = document.querySelector(".show"),
    password = document.querySelector("#password"),
    submitBtn = document.querySelector("#button");
var show = document.getElementById("show");

    //JS hide and show password
    pwShow.addEventListener("click", ()=>{
        if((password.type === "password")){
            password.type = "text";
            show.textContent = "visibility";
            show.style.color = "#2565AE";
        }else{
            password.type = "password";
            show.textContent = "visibility_off";
        }
    });

    //JS check if check and confirm password
    password.addEventListener("input", ()=>{
        
    let inputValue = password.value.trim(); //trim function do not count more than one space

    if(inputValue.length >= 8){
        submitBtn.removeAttribute("disabled");
        submitBtn.classList.add("active");
    }else{
        submitBtn.setAttribute("disabled" , true);
        submitBtn.classList.remove("active");
    }
});