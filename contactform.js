jQuery(document).ready(function($) {

    $(".ajax-contact-form").submit(function() {
    var str = $(this).serialize();
    
    $.ajax({
    type: "POST",
    url: "http://zonarost.site/contact.php",
    data: str,
    success: function(msg) {
    if(msg == 'OK') {
    result = '<p>Ваш заказ принят</p>';
    $(".fields").hide();
    } else {
    result = msg;
    }
    
    $('.block_zak').addClass( "block_zak_active" );
    }
    });
    return false;
    });
    });
    