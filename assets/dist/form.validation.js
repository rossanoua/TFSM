(function($){

    // var userLang = navigator.language || navigator.userLanguage;
    // alert ("The language is: " + userLang);

   var tok = $("meta[name=csrf_token]").attr("content");
   $("input[name=csrf_tok]").val(tok);


   var formSubmit = function(){

       $("#subm-form").on("click", function(e){
           e.preventDefault();
           var data = $("#contact-form").serialize();
           console.log(data);
           $.ajax({
               url: '/form-processor.php',
               type: 'post',
               contentType: false,
               processData: false,
               data: {
                   data: data,
               },
               success: function(msg) {
//            var m = msg.toString();

                   console.log(123);
                   console.log(msg);

               }
           });
       });
   }

    $("#contact-form").validate({
        debug: true,
        lang: 'ru',
        invalidHandler: function(event, validator) {
            // 'this' refers to the form
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1
                    ? 'You missed 1 field. It has been highlighted'
                    : 'You missed ' + errors + ' fields. They have been highlighted';
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        submitHandler: function(){
            formSubmit();
        },

    });

}(jQuery));