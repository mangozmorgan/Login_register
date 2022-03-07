let error_span_register = document.querySelector('#fetch_message_register')
let error_span_login = document.querySelector('#fetch_message_login')
let spanDisplayValid = document.querySelector('#modalMessage')   

async function postData(formattedFormData,url,spanToDisplayError){
    
    const response = await fetch(url,{
        method: 'POST',
        body: formattedFormData
    })
    .then(response =>response.text())
    console.log(response);
    let json = JSON.parse(response);
    console.log(json);
    console.log(Object.entries(json));
    console.log(Object.keys(json));
    if(Object.keys(json)[0] === 'error'){
        spanToDisplayError.innerHTML = Object.values(json)
    }else{

        spanDisplayValid.innerHTML = Object.values(json)
            spanDisplayValid.className = 'modalMessage'
            setTimeout(() => {
                spanDisplayValid.className = 'modalMessageOff' 
            }, 4000);
    }
    
    
     
    // if(response.startsWith('Thanks') || response.startsWith('Hey')){
    //     spanDisplayValid.innerHTML = response
    //     spanDisplayValid.className = 'modalMessage'
    //     setTimeout(() => {
    //         spanDisplayValid.className = 'modalMessageOff' 
    //     }, 4000);
    // }else{
    //     spanToDisplayError.innerHTML = response
    // }

    
}

const register_form = document.querySelector('#register_form')     
register_form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const formattedFormData = new FormData(register_form);
    postData(formattedFormData,'./php/register.php',error_span_register);
})

const login_form = document.querySelector('#login_form')     
login_form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const formattedFormData = new FormData(login_form);
    postData(formattedFormData,'./php/login.php',error_span_login);
})
    