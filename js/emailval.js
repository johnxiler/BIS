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

// Validation for email for text
var text = document.getElementById("textInput").value;
var icon = document.getElementById("textVal");

        text.addEventListener("keyup", ()=>{ 
            var textinput = document.getElementById("textInput").value;
            if(!textinput.test(text ==  "")){
                    icon.style.color = "red";
                    return false;
                }else{
                    icon.textContent = "check_circle";
                    icon.style.color = "green";
                }
        });
