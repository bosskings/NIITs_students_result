

// const faders = document.querySelectorAll('.fade-in');
// const appearOptions = {
//   threshold: 1,
//   rootMargin: "0px 0px -50px 0px"
// };

// const appearOnScroll= new IntersectionObserver(function(entries,appearOnScroll) {
//   entries.forEach(entry => {
//     if (!entry.isIntersecting){
//       return;
//     } else {
//       entry.target.classList.add('appear');
//       appearOnScroll.unobserve(entry.target);
//     }
//   });
// },
//  appearOptions);

//  faders.forEach(fader =>{
//   appearOnScroll.observe(fader);
//  })

window.addEventListener('scroll', reveal);

function reveal() {
 var reveals = document.querySelectorAll('.reveal');

 for(var i = 0; i< reveals.length; i++){

   var windowheight = window.innerHeight;
   var revealtop = reveals[i].getBoundingClientRect().top
   var returnpoint=100;

   if (revealtop < windowheight - returnpoint) {
     reveals[i].classList.add('active');
     
   }
   else{
     reveals[i].classList.remove('active');
   }

 }
}

var scrollToTopBtn = document.getElementById("scrollToTopBtn");

 window.addEventListener("scroll", function() {
   // Show button when user scrolls down 20px from the top of the document
   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
     scrollToTopBtn.style.display = "block";
   } else {
     scrollToTopBtn.style.display = "none";
   }
 });

 // Smooth scroll to top when button is clicked
 scrollToTopBtn.addEventListener("click", function() {
   document.body.scrollTop = 0; // For Safari
   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
 });