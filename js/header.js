

    ///////////////////////////////////////////////////IMGs headers
    cubeOneImg=document.createElement("img");
    cubeOneImg.setAttribute('src','../img/cubetwo.jpg');

    //////////////////////////////
    function signupFrmShow(url) {
        let innerHeight=window.innerHeight;
        let innerwidth=window.innerWidth;
        let registerWindow=window.open(url,"sign up","height="+innerHeight/2+", width="+innerwidth/4+" top="+innerHeight/2+" left="+innerwidth/2);
        if(registerWindow==null)
            alert("popup blocker is active");
    }





    ////////////////////////////////////login form toggle
    $('document').ready(function () {
        $('#signUpDiv form').hide();
        $('#loginLink').click(function (event) {
          event.preventDefault();
          $('#loginForm').slideToggle(300);

        });


    })

    ////////////////////////////////registering form toggle
    $('document').ready(function(){
        $('.reg_form').hide();
        $('#regLink').click(function(event){
            event.preventDefault();
            $('.reg_form').slideToggle(300)

        })


    })


    //////////////////////////////header image toggle codes
    setInterval(function () {
    },4000)

    setInterval(()=> {  $('#figure img').animate({
        left:'+=1490px'
    },4000,function () {
        $('#figure img').fadeOut(3000);
        $('#figure img').css('left','-1490px');
        $('#figure img').fadeIn(3000);
    });
    },4000);

    /////////////////////////////////////////header image selection codes with AJAX
    var image_header_id;
    $('input:radio[name="image_header"]').change(function (){

        if($(this).is(':checked'))
        {
            image_header_id=$(this).attr('id');
        }

        let IMAG_URL="https://cryptobike.shop/img/headers_img/";



        switch (image_header_id)
        {
            case "Attention":
                IMAG_URL +="Atention/Atention_header.jpg";
                break;
            case "Elite":
                IMAG_URL+="Elites/header_elites.jpg";
                break;
            default:
                break;
        }

        let xhr = new XMLHttpRequest();
        xhr.addEventListener('readystatechange',()=>{
           try{
               if(xhr.readyState==4)
               {
                   if(xhr.status>=200 && xhr.status<300 || xhr.status==304)
                   {
                       const response=xhr.response;
                       const blob=new Blob([response],{type:'image/jpg'});
                       const img=document.createElement('img');
                       img.src=IMAG_URL;
                        img.width=1490;
                        img.height=219;

                        if(document.getElementById('figure').hasChildNodes())
                        {
                            $('#figure').empty();
                            $('#figure').append(img);
                        }
                         if(!document.getElementById('figure').hasChildNodes())
                        {
                            $('#figure').append(img);

                        }
                   }
               }
           }
           catch (ex){
               alert("request was not successful !!!");
           }
        });
        xhr.open("POST",IMAG_URL,true);
        xhr.send();

    });

