$('#burlyWoodRdBtn').click(function () {
    let $rdBtn=$(this);

    if($rdBtn.data('wasChecked')==true)
    {
        $('body').css()
        $rdBtn.prop('checked',false);
        $rdBtn.data('wasChecked',false);
    }
    else
    {

        $rdBtn.data('wasChecked',true);
        $('body').removeClass('burlyWood');

    }

});
////////////////////////////////////////////////////////////
$('#showOurPlace').click(function()
{
    let url="placeStore.php";
    let innerheight=window.innerHeight;
    let innerwidth=window.innerWidth;
    let registerWindow=window.open(url,"sign up","height="+innerheight/2+", width="+innerwidth/2+" top="+innerheight/2+" left="+innerwidth/2);
    $(this).css('border-radius','10px');

    if(registerWindow==null)
        alert("popup blocker is active");

});







