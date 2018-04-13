$(function() {
	var btn = $('#goto-top');    
	btn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 120) {
			btn.fadeIn();
		} else {
			btn.fadeOut();
		}
	});

	btn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 300);
		return false;
	});
	
	
	var SkipNav = $('#SkipNav ul');
	var SkipH;
	$('a', SkipNav).each(function(){
		$(this).focus(function(){
			$(SkipNav).addClass('show');
			//$('body').addClass('SkipOn');
		});
		$(this).blur(function(){
			$(SkipNav).removeClass('show');
		});
		$(this).click(function(){
			$(SkipNav).removeClass('show');
			SkipH = $(this).attr('href');
			SkipH = SkipH.substr(1, SkipH.length);
			location.hash = SkipH;
		});
	});
	
	$('#gnavi .navbar-nav > li > a').focus(function(e){
		$('.dropdown-menu').hide();
	});
	
	$("#gnavi li.dropdown a").focus(function(e){
		var Li = $(e.target).closest("li");
		$(".dropdown-menu", Li).show();
	});
	
	$('#main-area a').focus(function(e){
		$('img', this).css('border', '1px dotted black');
	});
	$('#main-area a').blur(function(e){
		$('img', this).css('border', 'none');
	});

	$('#side-area a').focus(function(e){
		$('img', this).css('border', '1px dotted black');
	});
	$('#side-area a').blur(function(e){
		$('img', this).css('border', 'none');
	});
});

