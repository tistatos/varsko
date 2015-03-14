(function () {
		$('.btn-next').click(function(){
			var href=$(this).attr('href');
			$(href+"Tab").addClass("wizardactivetab");
		});

		$('.btn-prev').click(function(){
			var parent = $(this).parent();
			var type = parent[0].tagName;
			if(type !== 'DIV')
				parent = parent.parent();
			var parentID= parent.attr("id");
			$("#"+parentID+"Tab").removeClass("wizardactivetab");
		});
}());