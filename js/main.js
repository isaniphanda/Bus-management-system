/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function popupConfirm() {
  var txt;
  var r = confirm("You selected:\nSosha to Garankuwa, bus leaving at 07:00am\nConfirm bus booking.");
  if (r == true) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}

console.dir(document);
//Modal
//get modal element
var modal = document.getElementById('simpleModal');
//get open modal button
var route = document.getElementById('route');
//get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];
var closeBtn2 = document.getElementsByClassName('closeBtn')[1];

//get second modal
var modal2 = document.getElementById('secondModal');

var passengers = 0;

//get second modal buttons
cancelBtn = document.getElementById('cancelBtn');
acceptBtn = document.getElementById('acceptBtn');

//get bus info paragraph

//listen for open click
route.addEventListener('click', openModal);
//listen for close click
closeBtn.addEventListener('click', closeModal);
closeBtn2.addEventListener('click', closeModal);
//listen for outside click
window.addEventListener('click', clickOutside);

//1st modal buttons
cancelBtn.addEventListener('click', closeModal);
acceptBtn.addEventListener('click', openModal2);


//function to open modal
function openModal(){
  modal.style.display = 'block';
}

function openModal2(){
  modal2.style.display = 'block';
  modal.style.display = 'none';
  passengers = passengers + 1;
  document.getElementsByClassName('no-onboard')[0].innerHTML = passengers;
  
}

//function to close modal
function closeModal(){
  modal.style.display = 'none';
  modal2.style.display = "none";
}

function clickOutside(e){
  if(e.target == modal){
    modal.style.display = "none";
  }
}

//Time 
const d = new Date();
for(var i = 0; i < 4; i++){
  document.getElementsByClassName("demo")[i].innerHTML = d.getHours()+1 + " : 00";
}







