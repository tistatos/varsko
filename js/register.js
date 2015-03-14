(function () {
		$('.btn-next').click(function(){
			var href=$(this).attr('href');
			console.log(href);
			$(href+"Tab").addClass("wizardactivetab");
		});

		$('.btn-prev').click(function(){
			var parentID=$(this).parent().attr('id');
			console.log(parentID);
			$("#"+parentID+"Tab").removeClass("wizardactivetab");
		});
}());