var age = document.querySelector('input[name="age"]').value;
var height = document.querySelector('input[name="height"]').value;
var weight = document.querySelector('input[name="weight"]').value;
var activityLevel = document.querySelector('select[name="level"]').value;
var calculate = document.querySelector('#calculate');
var reset = document.querySelector('#reset');
var daily = document.querySelector('#daily');
var gender = document.querySelector('select[name="gender"]').value;


document.querySelector('select[name="gender');


function bmrWomen(w,h,a){
	var bmr = 665 + (4.35*w)+(4.7*h)-(4.7*a);
	return bmr;
}

function bmrMen(w,h,a){
	var bmr = 66 + (6.23*w)+(12.7*h) - (6.8*a);
	return bmr;
}

function calories(bmr,level){
	if (level==0){
		return bmr*1.375;
	}

	else if (level==1){
		return bmr*1.55;
	}

	else if (level==2){
		return bmr*1.725;
	}

	else if (level==3){
		return bmr*1.9;
	}
}

calculate.addEventListener("click", function(){

	age = document.querySelector('input[name="age"]').value;
	height = document.querySelector('input[name="height"]').value;
	weight = document.querySelector('input[name="weight"]').value;
	activityLevel = document.querySelector('select[name="level"]').value;
	console.log
	gender = document.querySelector('select[name="gender"]').value;
	console.log(gender);

	if (gender==0){
		var bmr = Math.round(bmrMen(weight,height,age));
		var activity = Math.round(calories(bmr,activityLevel));
		daily.textContent = "You must consume " + activity + " calories to maintain your current weight"


	}

	else if (gender==1){
		var bmr = Math.round(bmrWomen(weight,height,age));
		var activity = Math.round(calories(bmr,activityLevel));
		daily.textContent = "Your BMI is " + bmr + " and you must consume " + activity + " calories to maintain your current weight"
	}
}
);

reset.addEventListener("click", function(){
	age = document.querySelector('input[name="age"]').value="";
	height = document.querySelector('input[name="height"]').value="";
	weight = document.querySelector('input[name="weight"]').value="";
	activityLevel = document.querySelector('select[name="level"]').selectedIndex=0;
	gender = document.querySelector('select[name="gender"]').selectedIndex = 0; //1 = option 2
	daily.textContent = "";


});