    const modal = document.querySelector(".modal");
    const trigger = document.querySelector(".trigger");
    const closeButton = document.querySelector(".close-button");

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


// const send = document.getElementById('send');
document.getElementById('send').addEventListener("click", function(e)
{
    e.preventDefault();
    var form_inputs = document.getElementsByClassName("form-group");
    for (let i = 0; i < form_inputs.length; i++) {
        if(form_inputs[i].value == null | form_inputs[i].value.length == 0)
        {
            form_inputs[i].classList.add("has-error")
        }else{
            form_inputs[i].classList.remove("has-error")
        }
        
    }
    return;
    alert("Clicked");
})
