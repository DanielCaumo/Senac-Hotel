/* DROPDOWN PROFILE MENU */

let card = document.querySelector(".card"); //declearing profile card element
let displayPicture = document.querySelector(".display-picture"); //declearing profile picture

displayPicture.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
card.classList.toggle("hidden")})

cadastrar.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
cadastrarBox.classList.toggle("hidden");
loginBox.classList.toggle("hidden");
cadastrar.classList.toggle("inativo");
login.classList.toggle("inativo");
setaCadastrar.classList.toggle("hidden");
setaEntrar.classList.toggle("hidden");
});

login.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
cadastrarBox.classList.toggle("hidden");
loginBox.classList.toggle("hidden");
cadastrar.classList.toggle("inativo");
login.classList.toggle("inativo");
setaCadastrar.classList.toggle("hidden");
setaEntrar.classList.toggle("hidden");
});


/* SIDE MENU */

// Get Menu Button
const button = document.getElementById('menu-burger');

// Get Nav
const nav = document.getElementById('nav');


// Listen to click event
button.addEventListener('click', () => {

	// If nav Closed
	if(nav.classList.contains('nav-open'))
	{
		nav.classList.toggle('nav-closed');
		nav.classList.remove('nav-open');
		button.innerText = 'Agendar Horário';
	}
	// If Nav opend
	else
	{
		nav.classList.toggle('nav-open');
		nav.classList.remove('nav-closed');
		button.innerText = 'Fechar';
	}
});