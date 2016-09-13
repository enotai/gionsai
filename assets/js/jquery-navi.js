$(function() {
		var navi = $('#menu');
		//navの位置    
		var navTop = navi.offset().top;
		//スクロールするたびに実行
		$(window).scroll(function () {
				var winTop = $(this).scrollTop();
				//スクロール位置がnavの位置より下だったらクラスfixedを追加
				if (winTop >= navTop) {
					navi.addClass('fixed')
				} else if (winTop <= navTop) {
					navi.removeClass('fixed')
				}
		});
});
