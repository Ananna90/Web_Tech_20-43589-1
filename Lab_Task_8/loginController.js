function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("type").value == ""){
						get("err_type").innerHTML="userid Required";
						get("err_type").style.color="red";
						hasError=true;
					}
				
					if(get("userid").value == ""){
						get("err_userid").innerHTML="userid Required";
						get("err_userid").style.color="red";
						hasError=true;
					}
					if(get("password").value == ""){
						get("err_password").innerHTML="password Required";
						get("err_password").style.color="orange";
						hasError=true;
					}
				
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{  
			
			            get("err_type").innerHTML="";
				    get("err_userid").innerHTML="";
					get("err_password").innerHTML="";
					
				}
				