    const modal = document.querySelector(".modal");
    const trigger = document.querySelector(".trigger");
    const closeButton = document.querySelector(".close-button");
    const form_inputs = $(".form-group");
    function delay(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
          end = new Date().getTime();
       }
     }

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

// Word-Count: Displaying word count
form_inputs[3].addEventListener("keyup", function()
{
    var max = 45, current = form_inputs[3].value;
    document.getElementById("lcount").innerHTML = max - countWords(current);
})


// Word Count Function
function countWords(str) {
    return str.trim().split(/\s+/).length;
}

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
            form_inputs[i].classList.add("has-error") 
            flag = true
        }else{
            flag = false;
            form_inputs[i].classList.remove("has-error");
        }
        
    }
    if(!flag)
    {
        var response = '<div class="alert alert-warning alert-dismissable">Creating wish book..... </div>';
        
        $('#wish-book .ajax-response').html(response).show('slow');
        var formData = $('#wish-book').serialize();
         var url		=	"./routes/services.php";
        $.ajax({
            url: url,
            method: 'POST',
            data: formData +'&action=send_wish',        
        }).done(function(result){
            console.log(result);   
            // return;
            var data = JSON.parse(result)
            if(data.status == 1){
                response = '<div class="alert alert-success">'+data.message+'</div>';
            }else{
                response = '<div class="alert alert-danger">'+data.message+'</div>';
            }
            $('#wish-book .ajax-response').html(response).delay(5000).hide('slow'); 
            
            delay(10000) // Wait for user to read message before refreshing page.
            window.location.reload(); //Rewfreshing page to Update Cards
        })
    }
    
})


function validate_phone(phone)
{
    let regx = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g; //|REGEX
    if(phone.match(regx) && phone.length >= 10)
    {
        return true;
    }else
    {
        alert("Enter a valid phoner number");
        return false;
    }
}
