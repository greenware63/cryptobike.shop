let selectedBike=document.getElementById('selectedBike');

$('document').ready(function () {
    $('#selectedBike').val("Cube");
    createOffer('img/68_race.jpg',"15,000,000  تومان")
});

selectedBike.addEventListener("change", (event)=>{
    let selectedBikeName=selectedBike.value;



    switch (selectedBikeName) {
        case "Cube":
            let price="15,000,000 تومان"
            createOffer('img/68_race.jpg',price)
            break;
        case "Shimano":
            price="20,000,000 تومان";
            createOffer('img/68xsl.jpg',price)
            break;

        default:
            break;

    }

});


selectedBike.addEventListener('click',(event)=>{
    selectedBike.value="";
});


let createOffer=(url,price)=> {
    $divGoods = $(document.createElement('div'));

   let $price = $(document.createElement('p'));

    $price.text(price);
    $price.addClass("price");
   let $buttonBuy = $(document.createElement('button'));

   let  $describe=$(document.createElement('p'));
     $describe.text("this is a simple describe about this bike");
     $describe.attr('class',"describe");

    $buttonBuy.click(function () {
        let $buyButton = $(this);
        $buyButton.css({
            'background-color': 'forestgreen',
            'border': '2px solid #FE0037'
        });


    });
    $buttonBuy.text("خرید");


    $img = $(document.createElement('img'));
    let $figure = $(document.createElement('figure'));
        $figure.append($img)
    
         $figure.append($describe);
        

    $img.attr('src', url);
    $divGoods.append($figure);
    $divGoods.append($price);
    $divGoods.append($buttonBuy);
    $divGoods.addClass('goodsOffered');


    $('.middleDiv placeHolder').html($divGoods);

}

///////////////////jQuery select range of price

$('#slcRngPrc').change(function(){
    let selectedMaxPrice=$('#slcRngPrc').val();
    $('#selectedMaxPrice').val(selectedMaxPrice);
});
/////////////////////////////////////////////toggle icon
$('document').ready(function(){
        $('.tire').click(function (){
            $('.tire on,.tire .off').toggle();
        })
})
