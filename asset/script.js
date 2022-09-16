$('#form').submit(function(e){
    // e.preventDefault();
    let th = $(this);

    $.ajax({
        url: 'index.php', 
        type: 'POST',
        data: th.serialize(),
        beforeSend: function()
        {
            $('.loader').fadeIn();
        }, 
        success: function()
        {
            $('.loader').fadeOut('slow', function(){
                console.log("сообщение отправлено");
            });
        },
        error: function()
        {
            alert('ошибка отправки');
        }
    });
});