window.onload = () => {
        $(".text").removeClass("hidden");
};

$(document).ready(function () {
        $('#textPresentation').delay(300).show().animate({ opacity: 1 }, 1000);
        $('.chaptersContainer').delay(300).show().animate({ opacity: 1 }, 1500);
        $('#show').show().animate({ opacity: 1 }, 1300);
});


$(window).scroll(function () {
        if (checkVisible($('#blockAllChapter'))) {
                $('.blueBlockChapter').fadeTo(1000, 1);
                $('#blockAllChapter').animate({ left: '45px' }, 1000);
                $('.imageHomeChapter').animate({ left: '200px' }, 1000);
        }

        if (checkVisible($('#blockAuthor'))) {
                $('.blueBlockAuthor').fadeTo(1000, 1);
                $('#blockAuthor').animate({ left: '45px' }, 1000);
                $('.imageHomeAuthor').animate({ left: '200px' }, 1000);
        }
});

let checkVisible = (element) => {
        if (element.length !== 0) {
                let viewportHeight = $(window).height();
                let scrollTop = $(window).scrollTop();
                let top = element.offset().top;
                let elementHeight = element.height();

                return ((top < (viewportHeight + scrollTop)) && (top > (scrollTop - elementHeight)));
        }
}

let isChapterVisible = false;

$(document).ready(() => {
        $("#chapterButtonContainer").click(function () {
                isChapterVisible = !isChapterVisible;
                console.log(isChapterVisible);
                $(".singleChapterContent").toggle();
                if (isChapterVisible == true){
                        $("#chapterButton").html('Vue Réduite<i class="fas fa-angle-double-up"></i>');
                        $("#singleChapterExtract").css("display", "none")
                } else {
                        $("#chapterButton").html('Tout Lire<i class="fas fa-angle-double-down"></i>');
                        $("#singleChapterExtract").css("display", "block")
                }               
        });
});
