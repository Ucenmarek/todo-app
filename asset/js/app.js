(function ($) {
     /*edit-form*/
    var form = $('#add-form'),
        imput = form.find ('#text'),
        farba = '#303030'

    imput.val('').focus();

    form.on('submit',function (event) {
       event.preventDefault() ;

       var reg = $.ajax({
           type: "post",
           url: form.attr('action'),
           data:form.serialize()



           });

           reg.done(function(data) {
               console.log(data);
               //if (data =='ok') {
                 $.ajax({url:'/tapp'}).done(function (html) {

                    var newitem = $(html).find('li:last-child');
                    
                        newitem.appendTo('.list-group')
                                .css({backgroundColor:'#00bc8c'})
                                .delay(500)
                                .animate({backgroundColor:farba});
                  
                     
                 });
                 /*  var li = $('<li class="list-group-item">'+imput.val()+'</li>')
                   li  .appendTo('.list-group')
                       .css({ backgroundColor:'#00bc8c'})
                       .delay(500)
                       .animate({ backgroundColor: farba });*/

                 //} 
                    
           });




    });
    /*odoslanie cez enter*/

   imput.on('keypress', function (event) {
        if (event.which === 13) {

            form.submit();
            return false;
        }
    //console.log(event.which)
    });

    /*EDIT
        nastavenie sa rovno na text*/
    
    $('#edit-form').find('#text').select();



    /* DELETE
    
    delete item potvrdenie cez confirm*/
    $('#delete-form').on('submit' , function (event) {
        return confirm('Naozaj to chceš vzmazať ?');


        
    })

}(jQuery));







