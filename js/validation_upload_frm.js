const formUpload=document.querySelector('#uploadForm');
const messageErrorMissingValue="فیلد نباید خالی باشد";

window.onload=function(){
    for (let i = 0; i < formUpload.elements.length; i++) {
         formUpload.elements[i].oninvalid=function(event){
             event.target.setCustomValidity(' ');
         }
    }
    for (let i = 0; i < formUpload.elements.length; i++) {
        let labelSibling=formUpload.elements[i].previousElementSibling;

        formUpload.elements[i].addEventListener('focusout',(event)=> {
            if(event.target.validity.valueMissing)
            {
                labelSibling.innerHTML=messageErrorMissingValue;
                labelSibling.style.visibility='visible'

            }
        })


    }
    for (let j = 0; j < formUpload.elements.length; j++) {
        let labelSibling=formUpload.elements[j].previousElementSibling;

        formUpload.elements[j].addEventListener('focusout',(event)=> {
            if(!event.target.validity.valueMissing)
            {
                labelSibling.innerHTML=messageErrorMissingValue;
                labelSibling.style.visibility='hidden'

            }
        })


    }



}
