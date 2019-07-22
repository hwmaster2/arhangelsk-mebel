function my_stat(obj){
    im=new Image();
    im.src="/statistic/statistic.php?t="+obj;
}

function a_change(){
	for(i=0;i<document.links.length;i++){
	var str=document.links[i].href;
    document.links[i].onclick=function(){my_stat(this.href);};
        //if(str.indexOf("google")>0){
	     //   document.links[i].onclick=function(){my_alert(document.links[i].href);};
        //}else window.alert("нет совпадения с index3");
	}
}