function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("review").value == ""){
						get("err_review").innerHTML="Review Required";
						get("err_review").style.color="orange";
						hasError=true;
					}
				
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{  
				    get("err_review").innerHTML="";
				    
				}