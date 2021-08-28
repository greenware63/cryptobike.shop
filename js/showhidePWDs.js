let  eyeIcons=document.querySelectorAll(".fieldInput i ");
let PWDs=document.querySelectorAll(".fieldInput input[type='password']");

eyeIcons[0].onclick=function(){

    if(PWDs[0].getAttribute("type")=="password")
    {
        PWDs[0].setAttribute("type","text");
        PWDs[0].type="text";
        eyeIcons[0].style.opacity='100%';
    }
    else
    {
        PWDs[0].setAttribute("type","password");
        eyeIcons[0].style.opacity='50%';
    }

}

eyeIcons[1].onclick=function(){

    if(PWDs[1].getAttribute("type")=="password")
    {
        PWDs[1].setAttribute("type","text");
        PWDs[1].type="text";
        eyeIcons[1].style.opacity='100%';
    }
    else
    {
        PWDs[1].setAttribute("type","password");
        eyeIcons[1].style.opacity='50%';
    }

}

