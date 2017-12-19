function validateform(){  
	var name=document.loginForm.username.value;  
	var password=document.loginForm.password.value;  
  
	if (name==null || name==""){  
  		alert("please fill all required fields");  
  		return false;  
	}
	else if(password.length<6){  
  		alert("Password must be at least 6 characters long.");  
  		return false;  
  	}  
}  


function newaccountvalidateform(){
    var name=document.form.username.value;
    var password=document.form.password.value;
    var fullName=document.form.fullName.value;
    var age=document.form.age.value;
    var bloodGroup=document.form.bloodGroup.value;
    var mobileNumber=document.form.mobileNumber.value;
    
    if((name==null || name=="") && (password==null || password=="") && (age==null || age=="") &&(mobileNumber==null || mobileNumber=="")&&(bloodGroup=="") ){
        alert("please fill all required fields");
        return false;
    } 
    else if(password.length<6){  
  		alert("Password must be at least 6 characters long.");  
  		return false;  
  	} 
} 
function fun(){
			var donorSearch = document.getElementById("donorSearch");
      var homeImg     = document.getElementById("homeImg");
			donorSearch.style.visibility="visible";
      homeImgSearch.style.visibility="hidden";
}

function showUser(str) {
    if (str === "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
		