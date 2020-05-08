window.onload = () => {

        $(".text").removeClass("hidden");
        
        //$('#textPresentation').show().animate({opacity:1}, 3000);
        
};

$(document).ready(function(){
        //$('#textPresentation').slideDown( 1200 );
        $('#textPresentation').delay( 300 ).show().animate({opacity:1}, 1000);
        $('.tiles').delay( 300 ).show().animate({opacity:1}, 1500);
        $('#show').show().animate({opacity:1}, 1300);
        });


$(window).scroll(function() {
        if (checkVisible($('#blockAllChapter'))) {
                $('.blueBlockChapter').fadeTo( 1000, 1 );
                $('#blockAllChapter').animate({left: '45px'}, 1000);
                $('.imageHomeChapter').animate({left: '200px'}, 1000);
        }

        if (checkVisible($('#blockAuthor'))) {
                $('.blueBlockAuthor').fadeTo( 1000, 1 );
                $('#blockAuthor').animate({left: '45px'}, 1000);
                $('.imageHomeAuthor').animate({left: '200px'}, 1000);
        } 
});

function checkVisible( elm, evalType ) {
        evalType = evalType || "visible";
    
        var vpH = $(window).height(), // Viewport Height
            st = $(window).scrollTop(), // Scroll Top
            y = $(elm).offset().top,
            elementHeight = $(elm).height();
    
        if (evalType === "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));

        if (evalType === "above") return ((y < (vpH + st)));
      
}




/*action.addEventListenner("mouseover", function() {   
        // on met l'accent sur la cible de mouseover
        action.style.backgroundColor= "red";
        
      
});

  let action = document.getElementsByClassName("jstest");
console.log(action);
action.style.backgroundColor= "red";*/
