function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("uname").value == ""){
						get("err_uname").innerHTML="uname Required";
						get("err_uname").style.color="orange";
						hasError=true;
					}
					if(get("phone").value == ""){
						get("err_phone").innerHTML="phone Required";
						get("err_phone").style.color="red";
						hasError=true;
					}
					if(get("email").value == ""){
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="orange";
						hasError=true;
					}
					if(get("sal").value == ""){
						get("err_sal").innerHTML="sal Required";
						get("err_sal").style.color="orange";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp()
				{  
				    get("err_uname").innerHTML="";
				    get("err_phone").innerHTML="";
					get("err_email").innerHTML="";
					get("err_sal").innerHTML="";
				}
				