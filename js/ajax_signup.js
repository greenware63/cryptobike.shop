const xhr=new XMLHttpRequest();
formSignUp.addEventListener('submit',(event)=>{
    event.preventDefault();

    let address="https://cryptobike.shop";
    xhr.open('post',address+"/includes/inc_userSignUp.php");
    xhr.setRequestHeader('enctype','multipart/form-data');
    xhr.send(new FormData(formSignUp));
});
xhr.onload=function(){
    let result=xhr.responseText;
    alert(result);
}