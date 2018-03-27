(function($){

    var files;

    $('input[type=file]').change(function(){
       files = this.files;
    });

    function hide_success_message() {
        $(".success-sent").hide();
    }

    function show_success_message() {
        $(".success-sent").show();
        setTimeout(hide_success_message(), 10000);
    }

    function hide_error_message() {
        $(".error-sent").hide();
    }

    function show_error_message() {
        $(".error-sent").show();
        setTimeout(hide_error_message(), 10000);
    }

   var formSubmit = function(){

           var name = $("form input[name='username']").val();
           var surname = $("form input[name='usersurname']").val();
           var mail = $("form input[name='email']").val();
           var comment = $("form textarea[name='comment']").val();

           var data = new FormData();
           $.each( files, function( key, value ){
               data.append( key, value );
           });

           data.append( 'username', name);
           data.append( 'usersurname', surname);
           data.append( 'email', mail);
           data.append( 'comment', comment);

           $.ajax({
               url: '/ajax/form-processor.php',
               type: 'post',
               dataType: 'json',
               contentType: false,
               processData: false,
               data: data,
               success: function( respond, textStatus, jqXHR ){

                   if( typeof respond.error === 'undefined' ){


                       $("form input[name='username']").val('');
                       $("form input[name='usersurname']").val('');
                       $("form input[name='email']").val('');
                       $("form textarea[name='comment']").val('');
                       $("form input[type='file']").val('');

                       show_success_message();

                   }
                   else{
                       show_error_message();
                       console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                   }
               },
               error: function( jqXHR, textStatus, errorThrown ){
                   show_error_message();
                   console.log('ОШИБКИ AJAX запроса: ' + textStatus );
               }
           });

   };

    $("#contact-form").validate({

        rules: {
            username: {
                required: true,
                minlength: 3,
                maxlength: 32
            },
            usersurname: {
                required: true,
                minlength: 3,
                maxlength: 32
            },
            email: {
                required: true
            },
            comment: {
                required: true,
                minlength: 3,
                maxlength: 500
            },
            file: {
                required: true
            }

        },
        submitHandler: function(){
            formSubmit();
        }

    });

}(jQuery));