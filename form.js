//form
let formbtn=document.querySelector('.submit-btn');
let loader=  document.querySelector('.loader');
formbtn.addEventListener('click',()=>{
    let fullname=document.querySelector('#name')||null;
    let email=document.querySelector('#email');
    let password=document.querySelector('#password');
    let number=document.querySelector('#number')||null;
    let tac=document.querySelector('#tc')||null;

    if(fullname!=null){//sign up 
        //form-validation

    if (fullname.value .length<3){
        showFormError('name must be three letter long');
    } else if(!email.value.length){
        showFormError('enter your email');
    } else if(password.value.length<8){
        showFormError('password must be 8 letter long ');
    } else if(Number(number)||number.value.length<10){
        showFormError('enter a valid number');
    } else if(!tac.checked){
        showFormError('you must agree the terms and condition');
    }else{
        SubmitEvent
    }  

    }else{//login page
        if(!email.value.length||!password.value.length){
            showFormError('fill all the inputs')
        }else{
            //submit form
        }

    }
    
})