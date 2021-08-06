const menuBtn = document.querySelector(".menu-icon span");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".nav-items");
const sign = document.querySelector(".nav-items");
const form = document.querySelector("form");
menuBtn.onclick = ()=>{
  items.classList.add("active");
  menuBtn.classList.add("hide");
  searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
}
cancelBtn.onclick = ()=>{
  items.classList.remove("active");
  menuBtn.classList.remove("hide");
  searchBtn.classList.remove("hide");
  cancelBtn.classList.remove("show");
  form.classList.remove("active");
  cancelBtn.style.color = "#ff3d00";
}
searchBtn.onclick = ()=>{
  form.classList.add("active");
  searchBtn.classList.add("hide");
  cancelBtn.classList.add("show");
}

// function changeBg(){
//     const images = [
//         'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("Images/background.jpg")',
//         'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("Images/background.jpg")',
//         'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("Images/background.png")',
//         'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("Images/background.jpg")'
//     ]
    
//     const section = document.querySelector('body')
//     const bg = images[Math.floor(Math.random() * 
//     images.length)];
//     section.style.backgroundImage = bg;
// }

// setInterval(changeBg, 2000)


// $(document).ready(function(){
//   $("#method").on('change', function(){
//     $(".data").hide();
//     $("#" + $(this).val()).fadeIn(700);
//   }).change();
// });


window.onscroll = function() {myFunction()};

var navigation = document.getElementById("myNav");
var suggestion = document.getElementById("myDisplay");
var sticky = navigation.offsetTop;
var Dsticky = suggestion.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    navigation.classList.add("sticky");
    suggestion.classList.add("Dsticky");
  } else {
    navigation.classList.remove("sticky");
    suggestion.classList.remove("Dsticky");
  }
}