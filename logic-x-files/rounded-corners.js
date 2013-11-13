function roundedCorners(){
	
	$j('img.rounded-corners').each(function(i,e){
		
		var round_class = 'round-div-corners';
		
		var w = $j(e).width();
		var h = $j(e).height();
		var src = $j(e).attr('src');
		var classes = $j(e).attr('class');
		classes.replace('rounded-corners',round_class);
		
		
		var template = $j("<div></div>");
		template.addClass(round_class);
		template.addClass(classes);
		template.css({ backgroundImage:"url('"+src+"')", width:w+'px', height:h+'px', backgroundRepeat:'no-repeat' });
		
		$j(e).replaceWith(template);
		
	});
	
}
