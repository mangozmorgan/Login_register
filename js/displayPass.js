document.querySelectorAll('.eye').forEach(element =>{
    element.addEventListener('click',()=>{
        element.classList.toggle('eyeOff')
        if(element.parentElement.previousElementSibling.type === 'password'){
            element.parentElement.previousElementSibling.type = 'text'
        }else{
            element.parentElement.previousElementSibling.type = 'password'
        }
    })
    
})