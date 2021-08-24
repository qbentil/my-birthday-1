    const modal = document.querySelector(".modal");
    const trigger = document.querySelector(".trigger");
    const closeButton = document.querySelector(".close-button");
    const form_inputs = document.getElementsByClassName("form-group");

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);


// Word Count Function
form_inputs[3].addEventListener("keyup", function()
{
    var max = 45, current = form_inputs[3].value;
    document.getElementById("lcount").innerHTML = max - countWords(current);
})


function countWords(str) {
    return str.trim().split(/\s+/).length;
}
// Word Count Function


// const send = document.getElementById('send');
document.getElementById('send').addEventListener("click", function(e)
{
    e.preventDefault();
    var flag = false; // Error handler
    for (let i = 0; i < form_inputs.length; i++) {
        if(form_inputs[i].value == null | form_inputs[i].value.length == 0)
        {
            flag = true;
            form_inputs[i].classList.add("has-error")
            
        }else if(form_inputs[i].getAttribute('id') == 'phone' && !validate_phone(form_inputs[i].value)){
            flag = true;
            form_inputs[i].classList.add("has-error") 
        }else{
            flag = false;
            form_inputs[i].classList.remove("has-error");
        }
        
    }
    if(!flag)
    {
        alert('Ready to Subvmit Form')
    }else{
        alert("One or more fields has error")
    }
    
})


function validate_phone(phone)
{
    let regx = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
    if(phone.match(regx) && phone.length >= 10)
    {
        return true;
    }else
    {
        alert("Enter a valid phoner number");
        return false;
    }
}
