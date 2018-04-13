
//imghover/////////////////////////////////////////////////////////////////////////////////
$(function() {

	//ロールオーバー
	$(".imghover").hover(animateKesu,animateDasu); //ふわっと消す
	//$(".imghoverMore").hover(animateKesuMore,animateDasuMore); //ふわっと背景画像を表示させる

	//ページ上部へ戻る
	initScrollToTop();

});
	
///////////////////////////////////////////////////////////////////////////////////////////
// scroll To Top
function initScrollToTop() {
	$(".page_up").click(function() {
		var delay = 300;
		// スクロールする時間 単位 m秒
		$('html,body').animate({
			scrollTop : 0
		}, delay);
		return false;
	});
}

///////////////////////////////////////////////////////////////////////////////////////////
//  ふわっと消す
function animateKesu() {
	//スピード指定、透明度の指定
	$(this).stop().fadeTo(400, 0.5);
	//$(this).stop().animate({opacity: 0.5, filter: alpha(opacity=50)}, 400);

}

function animateDasu() {
	//スピード指定、透明度の指定
	$(this).stop().fadeTo(300, 1.0);
	//$(this).stop().animate({opacity: 1.0, filter: alpha(opacity=100)}, 300);
}

///////////////////////////////////////////////////////////////////////////////////////////
//  ふわっと背景画像を表示させる
function animateKesuMore() {
	//スピード指定、透明度の指定
	$(this).stop().fadeTo(400, 0);
}

function animateDasuMore() {
	//スピード指定、透明度の指定
	$(this).stop().fadeTo(300, 1.0);
}

//=================================== SMOOTH SCROLLING EXTERNAL ANCHOR //      

jQuery(document).ready(function($) {
    $(function() {
        var target = $('[id="' + location.hash.slice(1) +'"]');
        /*if (target.length) {
            $('html,body').css({
                scrollTop: 0
            }).animate({
                scrollTop: target.offset().top
            }, 800);
        }*/
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[id="' + this.hash.slice(1) +'"]');
                if (target.length) {
                    $('html,body').animate({
                            scrollTop: target.offset().top - 0
                    }, 800);
                    return false;
                }
            }
        });
    });
});

