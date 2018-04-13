$(function(){
	$("#play-button").click(function () {
		$('#myCarousel').carousel('cycle');
		$(this).css("color","#777");
		$("#pause-button").css("color","#2996cf");
	});
	
	$("#pause-button").click(function () {
		$('#myCarousel').carousel('pause');
		$(this).css("color","#777");
		$("#play-button").css("color","#2996cf");
	});
	
	
	
	$("#play-link").click(function () {
		$('#myCarousel').carousel('cycle');
		$("#play-button").css("color","#777");
		$("#pause-button").css("color","#2996cf");
	});
	$("#pause-link").click(function () {
		$('#myCarousel').carousel('pause');
		$("#pause-button").css("color","#777");
		$("#play-button").css("color","#2996cf");
	});
	
	var l = new Date();
	l.setDate(l.getDate() - 10); // 掲載期日を設定
	
	$("#top-news li").each(function (i) {
		
		var d = $("span.news-date", this).text();
		d = d.replace(/年|月|日/g, "/");
		var t = new Date(d);

		if(t > l) {
			$("span.label-new", this).css("visibility", "visible")
		}
    });
});