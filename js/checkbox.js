
// gestion des checkboxs
document.querySelector('#checkbox_female').addEventListener('click',()=>{
    document.querySelector('#checkbox_male').checked=false   
    document.querySelector('#checkbox_other').checked=false    
})
document.querySelector('#checkbox_male').addEventListener('click',()=>{
    document.querySelector('#checkbox_female').checked=false
    document.querySelector('#checkbox_other').checked=false    
})
document.querySelector('#checkbox_other').addEventListener('click',()=>{
    document.querySelector('#checkbox_male').checked=false
    document.querySelector('#checkbox_female').checked=false    
})