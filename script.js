//dflex-projet
var dflexproj1 = document.getElementById('dflexproj1');
var dflexproj2 = document.getElementById('dflexproj2');
var diapoProj = document.getElementById('projet');
flexProj();
window.addEventListener('resize',flexProj);
function flexProj(){
  if (window.innerWidth<=500){
    dflexproj1.className="d-flex flex-column";
    dflexproj2.className="d-flex flex-column";
    projet.style.height="2550px";
  } else if (window.innerWidth>500) {
    dflexproj1.className="d-flex justify-content-center";
    dflexproj2.className="d-flex justify-content-center";
    projet.style.height="1000px";
  }
}
//dlex-projet

//burgerMenu
var burgerMenu = document.getElementById("burgerMenu");
var topNav = document.getElementById("responsiveNav");
var openBurger = 0;

burgerMenu.addEventListener("click",function(){
    burgerMenu.classList.toggle("change");
    if (topNav.className === "topnav") {
      topNav.className += " responsive";
      openBurger = 1;
    } else {
      topNav.className = "topnav";
      openBurger = 0;
    }
})

window.onscroll = function() {scrollBM()};

var burgerMenu = document.getElementById("burgerMenu");
var bgY = burgerMenu.offsetTop;
var topNav = document.getElementById("responsiveNav");

function scrollBM() {
  if (window.pageYOffset > bgY) {
    topNav.className = "topnav";
  }
  if (openBurger==1) {
    burgerMenu.classList.toggle("change");
    openBurger=0;
  }
}
//



//h1
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 3000
  });

//h3
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml13');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter2'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml13 .letter2',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 2000,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.ml13 .letter2',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1000,
    delay: 2200
  });

  //Apropos
  var btParcours = document.getElementById('btnparcours');
  var btHobbies = document.getElementById('btnhobbies');
  var btAmbitions = document.getElementById('btnambitions');
  var parcours = document.getElementById('parcours');
  var hobbies = document.getElementById('hobbies');
  var ambitions = document.getElementById('ambitions');

  hobbies.style.display="none";
  ambitions.style.display="none";

  btParcours.addEventListener("click",function (){
    parcours.style.display="block";
    hobbies.style.display="none";
    ambitions.style.display="none";
  });

  btHobbies.addEventListener("click",function (){
    parcours.style.display="none";
    hobbies.style.display="block";
    ambitions.style.display="none";
  });

  btAmbitions.addEventListener("click",function (){
    parcours.style.display="none";
    hobbies.style.display="none";
    ambitions.style.display="block";
  });

  //Apropos
