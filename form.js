
function formValidator(){
	

	
	// Make quick references to our fields
	var Fname = document.getElementById('Fname');
	var Department = document.getElementById('Department');
	var College = document.getElementById('College');
	var Email = document.getElementById('Email');
        var Mobile = document.getElementById('Mobile');   
	
	// Check each input in the order that it appears in the form!
	if(isAlphabet(Fname,"Please enter only letters for your name")){
		if(SelectionDep(Department,"Please select department")){
				if(SelectionCollege(College,"Please select Collage")){
						if(emailValidator(Email, "Please enter a valid email address")){
                                                     if(isNumeric(Mobile, "Please enter a valid Mobile Number")){

							return true;
						}
					}
				}
			}
		}
	
	
	
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}


function SelectionDep(elem, helperMsg){
	if(elem.value == "--------------select---------------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function SelectionCollege(elem, helperMsg){
	if(elem.value == "--------------select---------------"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
