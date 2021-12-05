function adlog(){
	if(document.getElementById("adminName").value=="admin" && document.getElementById("password").value=="passwd@123"){
		return true;
	}
	else{
		alert("Invalid Login Credentials!");
		document.getElementById("adminName").value="";
		document.getElementById("password").value="";
		return false;
	}
}
