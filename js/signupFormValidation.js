    const formSignUp=document.querySelector(".reg_form form");
    const password=document.getElementById("password");
    const repeatPassword=document.getElementById("repeatPassword");
    const email=document.getElementById("email");
    const submitBtn=document.querySelector("#regSubmit");
    const resetBtn=document.querySelector("#resetButton");
    let signupFrmVldStatus=false;
    const inoutFieldsNumber=document.querySelectorAll(".fieldInput input[type='number']")
    const labelPassword=password.nextElementSibling;
    const labelPasswordRepeat=repeatPassword.nextElementSibling;




    formSignUp.addEventListener('submit',(event)=>{

            event.preventDefault();
       })

    /////////////////////////////////////////////////control input fields emptiness
    submitBtn.addEventListener("click",(event) => {
        validitySignupForElement(event);
    })

    /////////////////////////////////////////////////password missMatchReport
      password.addEventListener('focusout',()=>{
         passwordMissPatternCheck();
    })


    ///////////////////////////////////////////////// control passwords equality
     repeatPassword.addEventListener('focusout',()=>{
         passwordEqualityCheck();
         repeatPasswordMissPatternCheck();
     })

    ///////////////////////////////////////////////// reset button codes
    resetBtn.addEventListener('click',()=>{
        formSignUp.reset();
        for (let i = 0; i <= formSignUp.elements.length; i++) {
            let label_sibling = formSignUp.elements[i].nextElementSibling
            label_sibling.style.visibility="hidden";

        }
        password.style.backgroundColor="white";
        repeatPassword.style.backgroundColor="white";
    })

    /////////////////////////////////////////////////email code simple validity
    email.addEventListener("focusout",(event)=> {


        emailSimpleValidity();
    });

    /////////////////////////////////////////////////
     function emailSimpleValidity(){
         if(email.validity.typeMismatch){

             document.querySelector(".warning .msg ").innerHTML="ایمیل صحیح نیست"
             $('.warning').css('visibility','visible');
         }
         else {
             document.querySelector(".warning .msg ").innerHTML=""
             $('.warning').css('visibility','hidden');

         }
     }

    /////////////////////////////////////////////////check all sign up form validity
    let validitySignupForElement=(event)=>{
        for (let i = 0; i <= 9; i++) {
            let label_sibling = formSignUp.elements[i].nextElementSibling
           if(!formSignUp.elements[i].checkValidity()){
               if (formSignUp.elements[i].validity.valueMissing) {
                   label_sibling.innerHTML = "فیلد نباید خالی باشد";
                   label_sibling.style.visibility = "visible";

               }

           }


        }

        for (let j = 0; j <=9 ; j++) {
            if(formSignUp.elements[j].checkValidity())
            {
                let labelSibling = formSignUp.elements[j].nextElementSibling;
                    labelSibling.style.visibility="hidden";
            }

        }

        for (let k = 0; k <=9 ; k++) {
            if(!formSignUp.elements[k].validity.valueMissing)
            {
                let labelSibling = formSignUp.elements[k].nextElementSibling;
                labelSibling.style.visibility="hidden";
            }

        }

        emailSimpleValidity();
    }

    /////////////////////////////////////////////////
    window.onload=function(){
            for (let i = 0; i <=9 ; i++) {
         formSignUp.elements[i].oninvalid=function (event)
         {
             formSignUp.elements[i].oninvalid=function(event)
             {
                 event.target.setCustomValidity(" ");
             }
         }
         formSignUp.elements[i].addEventListener('focusout',()=>
             {
                 let label_sibling=formSignUp.elements[i].nextElementSibling;
                 if(!formSignUp.elements[i].validity.valueMissing)
                 {
                     label_sibling.style.visibility="hidden";
                 }
                 if(formSignUp.elements[i].validity.valueMissing)
                 {
                     label_sibling.innerHTML="فیلد نباید خالی باشد";
                     label_sibling.style.visibility="visible";
                 }
             }
         )
    }

        }

    ///////////////////////////////////////////////// warning js codes
    $('.fa-window-close').click(function (){
        $('.warning').css('visibility','hidden');
    })

    /////////////////////////////////////////////////PWDs equality
    function passwordEqualityCheck(){
        if(repeatPassword.value !== password.value)
        {

            labelPassword.innerHTML=" یکسان نیستند";
            labelPassword.style.visibility="visible";

            labelPasswordRepeat.innerHTML=" یکسان نیستند";
            labelPasswordRepeat.style.visibility="visible";
        }

        if(repeatPassword.value ==password.value){
            labelPassword.innerHTML="";
            labelPassword.style.visibility="hidden";

            labelPasswordRepeat.innerHTML="";
            labelPasswordRepeat.style.visibility="hidden";
        }
    }

    /////////////////////////////////////////////////passwordMissPatternCheck
     function passwordMissPatternCheck(){
        if(password.validity.patternMismatch)
        {
            document.querySelector(".warning .msg ").innerHTML="رمز عبور باید حداقل 8کاراکترو حداکثر 12 کاراکترشامل حروف کوچک و بزرگ وعدد به همراه کاراکتر ویژه ";
            password.style.backgroundColor="#ddffbb";
             $('.warning').css('visibility','visible');


        }

        if(!password.validity.patternMismatch)
        {
            password.style.backgroundColor="white";
            $('.warning').css('visibility','hidden');
        }
    }

    /////////////////////////////////////////////////repeatPasswordMissPatternCheck
    function repeatPasswordMissPatternCheck(){
        if(repeatPassword.validity.patternMismatch)
        {
            document.querySelector(".warning .msg ").innerHTML="رمز عبور باید حداقل 8کاراکتر و حداکثر 12کاراکترباشد وشامل حروف کوچک و بزرگ وعدد به همراه کاراکتر ویژه ";
            repeatPassword.style.backgroundColor="#ddffbb";
            $('.warning').css('visibility','visible');

        }

        if(!repeatPassword.validity.patternMismatch)
        {
            repeatPassword.style.backgroundColor="white";
            $('.warning').css('visibility','hidden');
        }
    }