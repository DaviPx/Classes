
function teste() {

	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var bdate = document.getElementById("bdate").value;
	
	var user = '{"name": "' + name + '"}';

	//JSON.stringify() -> para apresentar o json em formato string

	alert(JSON.parse(user));
}