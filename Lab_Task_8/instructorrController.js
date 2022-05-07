	function get(id)
				{
					return document.getElementById(id);
				}
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("uname").value == ""){
						get("err_uname").innerHTML="Entry your name";
						get("err_uname").style.color="green";
						hasError=true;
					}
					if(get("phone").value == ""){
						get("err_phone").innerHTML="phone Required";
						get("err_phone").style.color="red";
						hasError=true;
					}

					if(get("address").value == ""){
						get("err_address").innerHTML="addrress needed";
						get("err_address").style.color="yellow";
						hasError=true;
					}





					if(get("email").value == ""){
						get("err_email").innerHTML="Email needed ";
						get("err_email").style.color="orange";
						hasError=true;
					}


					if(get("date").value == ""){
						get("err_date").innerHTML="date needed ";
						get("err_date").style.color="white";
						hasError=true;
					}


					if(get("bg").value == ""){
						get("err_bg").innerHTML="Blood group  needed ";
						get("err_bg").style.color="grey";
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
				      get("err_address").innerHTML="";
					get("err_email").innerHTML="";
					get("err_date").innerHTML="";
					get("err_bg").innerHTML="";
				}