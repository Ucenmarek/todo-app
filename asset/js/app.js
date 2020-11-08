(function ($) {

    var form = $('#add-form'),
        imput = $('#text'),
        farba = '#303030'

    form.on('submit',function (event) {
       event.preventDefault() ;

       var reg = $.ajax({
           type: "post",
           url: form.attr('action'),
           data:form.serialize()



           });

           reg.done(function(data) {
               console.log(data);
              // if (data === 'zapisane') {


                   var li = $('<li class="list-group-item">'+imput.val()+'</li>')
                   li  .appendTo('.list-group')
                       .css({ backgroundColor:'#00bc8c'})
                       .delay(500)
                       .animate({ backgroundColor: farba });












               //}
           });




    });

   imput.on('keypress', function (event) {
        if (event.wich === 13) {

            form.submit();
            return false;
        }
    console.log(wich)
    });

}(jQuery));







