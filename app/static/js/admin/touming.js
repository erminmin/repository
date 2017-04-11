window.onload=function(){
	var num=0;
	setInterval(function(){
		num++;
        if(num>=$(".bannerbox li").length){
          num=0;
        }
		for(var i=0;i<$(".bannerbox li").length;i++){
			$(".bannerbox li")[i].style.opacity=0;
		}
		animate($(".bannerbox li")[num],{opacity:1},2500);
	},4000)
}