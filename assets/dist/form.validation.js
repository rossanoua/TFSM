(function($){

    // var userLang = navigator.language || navigator.userLanguage;
    // alert ("The language is: " + userLang);

   // var tok = $("meta[name=csrf_token]").attr("content");
   // $("input[name=csrf_tok]").val(tok);

    // Переменная куда будут располагаться данные файлов
    var files;

    // Вешаем функцию на событие
    // Получим данные файлов и добавим их в переменную

    $('input[type=file]').change(function(){
       files = this.files;
    });

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

                   // Если все ОК
                    console.log('good');
                    console.log(respond);
                   if( typeof respond.error === 'undefined' ){
                       // Файлы успешно загружены, делаем что нибудь здесь

                       // выведем пути к загруженным файлам в блок '.ajax-respond'

                       // var files_path = respond.files;
                       // var html = '';
                       // $.each( files_path, function( key, val ){ html += val +'<br>'; } );
                       // $('.ajax-respond').html( html );

                       // name.val('');
                       // surname.val('');
                       // mail.val('');
                       // comment.val('');
                       // $.each( files, function( key, value ){
                       //      console.log(key);
                       //      console.log(value);
                       // });



                   }
                   else{
                       console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                   }
               },
               error: function( jqXHR, textStatus, errorThrown ){

                   // $("form input[name='username']").val('');
                   // $("form input[name='usersurname']").val('');
                   // $("form input[name='email']").val('');
                   // $("form textarea[name='comment']").val('');

                   // $.each( files, function( key, value ){
                   //     value.val('');
                   // });// todo wont work need empty file input with jQuery

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