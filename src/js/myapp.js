var myapp = {
	adminurl:'?amdin=admin'
};
(function(myapp,$){
	$(function(){
		$(".geturl").click(function(){
			var that = $(this);
			var url = that.attr("url");
			$.get(url,function(data){
				if(data.msg){
					alert(data.msg);
				}
			},"json");
		});
	});

})(myapp,jQuery);