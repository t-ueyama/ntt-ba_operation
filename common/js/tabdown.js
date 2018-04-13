if(! $jQ) { var $jQ = jQuery; }

$(document).ready( function() {

	(function() {
		var SkipNav = $jQ("#SkipNav ul");
		var SkipH;
		$jQ("a", SkipNav).each(function(){
			$jQ(this).focus(function(){
				$jQ(SkipNav).addClass("show");
				$jQ("body").addClass("SkipOn");

			//	$jQ("#header").style.top = '39px'; 

			});
			$jQ(this).blur(function(){
				$jQ(SkipNav).removeClass("show");
				$jQ("body").removeClass("SkipOn");
			});
			$jQ(this).click(function(){
				$jQ(SkipNav).removeClass("show");
				$jQ("body").removeClass("SkipOn");
				SkipH = $jQ(this).attr("href");
				SkipH = SkipH.substr(1, SkipH.length);
				location.hash = SkipH;
			});
		});
	})();
} );  // ready()
