
<head>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
  <style>
      .question p{
          cursor: pointer;
          background: #8FC4E8;
      }

      .answer p{
          background: #00aa00;
      }

      .close{

      }
  </style>

</head>
<div dir="rtl"  id="commaonQuestion">
    <div class="question">
        <p id="first">مدت زمان ارسال کالا حدودا چقدر است</p>
        <div class="answer">
            <p> بستگی دارد</p>
        </div>
    </div>


    <div class="question">
        <p id="second">نحوه برگشت کالا چگونه هست</p>
        <div class="answer">
        <p>شما کالا را برگشت میدهید</p>
        </div>
    </div>

</div>


<script>
    $('document').ready(function () {

            $('.answer').hide();


        $('#commaonQuestion p').click(function () {

           let  $thisAnswer=$(this).next('.answer');

             if($thisAnswer.is(':hidden'))
             {

                 $thisAnswer.slideDown('slow');
             }
         else
             {
                 $thisAnswer.fadeOut('slow');
             }

        })

    });

</script>
<?php
?>
