const imgUploadBtn=document.querySelector('#imgFile');
const imgUploadCustom=document.querySelector('.upload  .upload-img .fa-upload');

const txtUploadBtn=document.querySelector('#txtFile');
const txtUploadCustom=document.querySelector('.upload .upload-article .fa-upload ')


imgUploadCustom.addEventListener('click',()=>{
    imgUploadBtn.click();
})


imgUploadBtn.addEventListener('change',()=>{
if(imgUploadBtn.value)
    imgUploadCustom.value=imgUploadBtn.value;
else
    imgUploadCustom.value="تصویر کالا مورد نظر را بارگزاری کنید";
})


txtUploadCustom.addEventListener('click',()=>{
   txtUploadBtn.click();
})
