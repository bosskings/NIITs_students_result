const sideBar = document.querySelector(".sidebar1")
const menuBar = document.querySelector(".menu-bar")
const closeMen = document.querySelector(".menu-sec")

menuBar.addEventListener("click", function(){
  sideBar.style.transform = `translateX(${0}px)`


 

})
closeMen.addEventListener("click", function(){
  sideBar.style.transform = `translateX(${-200}px)`
  // menuBar.style.display = "block"
})