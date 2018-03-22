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

       $("#subm-form").on("click", function(e){
           e.preventDefault();

           var name = $("form input[name='username']").val();
           var surname = $("form input[name='usersurname']").val();
           var mail = $("form input[name='email']").val();
           var comment = $("form textarea[name='comment']").val();

           var data = new FormData();
           $.each( files, function( key, value ){
               data.append( key, value );
           });

           data.append( 'name', name);
           data.append( 'usersurname', surname);
           data.append( 'email', mail);
           data.append( 'comment', comment);


           // console.log(data);
           $.ajax({
               url: '/form-processor.php',
               type: 'post',
               dataType: 'json',
               contentType: false,
               processData: false,
               data: data,
               success: function( respond, textStatus, jqXHR ){

                   // Если все ОК
                    console.log(respond);
                   if( typeof respond.error === 'undefined' ){
                       // Файлы успешно загружены, делаем что нибудь здесь

                       // выведем пути к загруженным файлам в блок '.ajax-respond'

                       var files_path = respond.files;
                       var html = '';
                       $.each( files_path, function( key, val ){ html += val +'<br>'; } );
                       $('.ajax-respond').html( html );
                   }
                   else{
                       console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                   }
               },
               error: function( jqXHR, textStatus, errorThrown ){
                   console.log('ОШИБКИ AJAX запроса: ' + textStatus );
               }
           });
       });
   };

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
        }

    });

}(jQuery));