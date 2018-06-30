var $j = jQuery.noConflict();
		$j(document).ready(function(){
			function abrir(){
  				if(aberto == 1) {
					aberto =2;
					document.getElementById("main").style.marginLeft = "19%";
  			  		document.getElementById("mySidebar").style.width = "19%";
  			  		document.getElementById("mySidebar").style.display = "block";
				} else {
					aberto=1;
					document.getElementById("main").style.marginLeft = "0%";
  					document.getElementById("mySidebar").style.display = "none";
  					document.getElementById("openNav").style.display = "inline-block";
				}
  			}
			aberto = 1;
			$j("#openNav").bind("click", function(){
				abrir(); 
  			}); 
  			abrir();
  			

	 });
