function massege(){
	if(document.getElementById('text_ar').value == ""){
		document.write("שגיאה: לא הכנסת תווים");
	}
	else{
		alert("תודה רבה על הודעתך, אקרא אותה בימים הקרובים");
	}
}
n =  new Date();
year = n.getFullYear();
month = n.getMonth() + 1;
day = n.getDate();
document.getElementById("date").innerHTML = day + "/" + month + "/" + year;

function chack(){
	if(document.getElementById('chackcon').value == ""){
		document.write("שגיאה: לא הכנסת תווים ולכן הודעתך לא תיקרא");
	}
	else{
		alert("תודה רבה על הודעתך");
	}
}
function clickh(){
	alert("הוספת פריט");
}
function bowomb(){
	alert("בחרת פריט בצבע שחור");
}
function bowomw(){
	alert("בחרת פריט בצבע לבן");
}
function empay(){
	alert("זה המייל שלי || tck945@gmail.com");
}
function sendmail(){
	if(document.getElementById('sem').value == ""){
		document.write("שגיאה: לא מילאת פרטים");
	}
	else{
		alert("תודה רבה על הודעתך");
	}
}

/*var x = document.getElementById('login');
var y = document.getElementById('register');
var z = document.getElementById('btn');

function register(){
	x.style.left = "-400px";
	y.style.left = "50px";
	z.style.left = "110px";
}
function login(){
	x.style.left = "50px";
	y.style.left = "450px";
	z.style.left = "0px";
}*/