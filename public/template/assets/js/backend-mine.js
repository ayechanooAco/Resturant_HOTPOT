$(document).ready(function(){
	getCountMenu();

	
})
function getCountMenu(){
	$.get('/menus/count',function(response){
		$.each(response.data,function(i,v){
			$(`.${v.name}-backend-count`).html(v.meats_count);
		})

	$.each(response.lastdate,function(i,v){
			$.each(v,function(k,j){
				$(`.${j.category.name}-latestUpdate`).html(j.created_at);
			})
			
		})
	})


}