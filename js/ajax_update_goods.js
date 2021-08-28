
const xhr= new XMLHttpRequest();
const img=document.querySelector('.uploaded img');
const uploadedTxt=document.querySelector('.uploaded-txt');
let txtFileName;
let imgFileName;


uploadForm=document.querySelector('#uploadForm');

  uploadForm.addEventListener('submit',(event)=>{
      event.preventDefault();
     let address="https://cryptobike.shop/";


      xhr.open('POST',address+"/includes/updateGoods.php",true);
      let data=new FormData(uploadForm);
      xhr.setRequestHeader('enctype','multipart/form-data');

      xhr.send(data);


  });

xhr.addEventListener('load',()=>{
    console.log(" the response is "+xhr.response);

   txtFileName=JSON.parse(xhr.responseText).txtFile;
   imgFileName=JSON.parse(xhr.responseText).imgFile;
   alert(txtFileName  +" , "+ imgFileName+" دانلود شدند");
   let urlImg="https://cryptobike.shop/uploads/img/"+imgFileName;
   let urlTxt="https://cryptobike.shop/uploads/txt/"+txtFileName;

    fetch(urlTxt).then(response=>{
             response.text().then((data)=>{
                 uploadedTxt.innerHTML=data;
                 }
             )
        });


    fetch(urlImg).then(response=> {
        return response.blob();
    } ).then(blob=>{
        console.log(blob);
        img.src=URL.createObjectURL(blob);
    });


});






