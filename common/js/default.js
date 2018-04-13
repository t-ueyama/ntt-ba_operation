try {document.execCommand('BackgroundImageCache', false, true); }catch(e) {}

var $Default ={
    smoothScrollInit:function(speed){
        $("a[href^=#top],a[class~=smooth]").on('click',function(){
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top-125;
            $("html, body").animate({scrollTop:position}, speed, "swing");
        });
    },
    serviceTabInit:function(){
				$('.tabmenu dt:first').click(function(){
						$('.tabmenu dt:first img').attr('src', $('.tabmenu dt:first img').attr('src').replace('_on', '_off'));
							}, function(){
								 if (!$('.tabmenu dt:first img').hasClass('currentPage')) {
								 $('.tabmenu dt:first img').attr('src', $('.tabmenu dt:first img').attr('src').replace('_off', '_on'));
								 $('.tabmenu dt:last img').attr('src', $('.tabmenu dt:last img').attr('src').replace('_on', '_off'));
						}
			 });

			 
			 $('.tabmenu dt:last').click(function(){
						$('.tabmenu dt:last img').attr('src', $('.tabmenu dt:last img').attr('src').replace('_on', '_off'));
							}, function(){
								 if (!$('.tabmenu dt:last img').hasClass('currentPage')) {
								 $('.tabmenu dt:last img').attr('src', $('.tabmenu dt:last img').attr('src').replace('_off', '_on'));
								 $('.tabmenu dt:first img').attr('src', $('.tabmenu dt:first img').attr('src').replace('_on', '_off'));
						}
			 });

		}
}
//画面ロード時に実行
$(function(){
    $Default.smoothScrollInit(500);
    $Default.serviceTabInit();
		
		$('#tab_l').on("click", function (e) {
        e.preventDefault();
		}); 
		
		$('#tab_r').on("click", function (e) {
        e.preventDefault();
		});
		
		return $('.tabmenu').each(function() {
        // 現在処理している要素を変数化
        var $wrap = $(this);

        // タブの高さを取得
        var tabHeight = $wrap.find('dt').outerHeight(true);

        // コンテンツの表示位置を指定
        $wrap.find('dd').css({'top' : tabHeight});

        // タブをクリック
        $wrap.find('dt').click(function() {
            // 全てのタブの内容を非表示
            $wrap.find('dd').css({'display' : 'none'});

            // クリックされたタブの内容を表示
            $(this).next('dd').css({'display' : 'block'});

            // タブに設定されている「.selected」を削除
            $wrap.find('dt').removeClass('selected');

            // クリックされたタブに「.selected」を追加
            $(this).addClass('selected');

        });

        // 最初のタブを表示
        $wrap.find('dt:first').trigger('click');
    });
});
