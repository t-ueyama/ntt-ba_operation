/* ページ内リンクの処理  */
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a.pagelink[href^=#]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

/* .imghover ホバーした時の処理  */
$(function(){
	$('.imghover').live('mouseenter',function(){
		$(this).not(':animated').animate({'opacity':'0.7'},{duration:200});
	});
	$('.imghover').live('mouseleave',function(){
		$(this).animate({'opacity':'1'},{duration:200});
	});
});

/* .imgchange ホバーした時の処理（画像変更）  */
//画像に直接付ける場合

$(function(){
	$('.imgchange').mouseenter(function(){
		if(!$(this).hasClass('active')){
			$(this).attr('src',$(this).attr('src').replace('.jpg','_on.jpg'));
			$(this).attr('src',$(this).attr('src').replace('.gif','_on.gif'));
			$(this).attr('src',$(this).attr('src').replace('.png','_on.png'));
		};
	});
	$('.imgchange').mouseleave(function(){
		if(!$(this).hasClass('active')){
			$(this).attr('src',$(this).attr('src').replace('_on.jpg','.jpg'));
			$(this).attr('src',$(this).attr('src').replace('_on.gif','.gif'));
			$(this).attr('src',$(this).attr('src').replace('_on.png','.png'));
		};
	});
});

