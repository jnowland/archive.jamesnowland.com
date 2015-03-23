  var $navy = $('#navy');
  var $menu = $('#menu');
  var winW = $(window).width();

$('html').addClass('js');


if ($(window).width() < 768) {
	//$navy.show();
    $menu.hide();
    menuW();
}

    $navy.on('click', function(){
    
    $('#navy').removeClass('close');

    
    if ($(window).width() < 768) {
        $('#navy').removeClass('close');
        var $full = $("div.fullSpan").first();
        var fullM = parseInt($full.css("margin-bottom"));
        var toM = 0;

        $menu.slideToggle(300);
        
        //(fullM == 0) ? toM = 152 : toM = 0;

        if (fullM == 0){
            toM = 152;
            $('#navy').addClass('close');
        } else {
            toM = 0;
            $('#navy').removeClass('close');
        }
        
        $("div.fullSpan").first().animate( {'margin-bottom': toM}, 300 );
        
        

    }

    });

    
    function menuW(){
        $menu.width(winW, 0);
    }
    
    
    $(window).resize(function(){


        if ($(this).width() < 768){
            winW = $(window).width();
            menuW();

            if (($menu).css('display') === 'block'){
                $("div.fullSpan").first().css('margin-bottom', '152px' );
               /* $('#navy').addClass('close');*/
                
            }

        } else {
            $menu.width('100%', 0);
            $("div.fullSpan").first().css('margin-bottom', '0px' );
            $('#navy').removeClass('close');

            if (($menu).css('display') === 'none'){
                $menu.css('display', 'block');

            }

            
        }



    })

