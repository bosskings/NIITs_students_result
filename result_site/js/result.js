// document.addEventListener("DOMContentLoaded", () => {
//   const sendButton = document.querySelector("#sendbtn");
//   const scoreTextarea = document.querySelector("#student_score");

//   sendButton.addEventListener("click", () => {
//     const score = scoreTextarea.value.trim();
//     if (score == '') {
//       alert("Please enter Student score before sending.");
//      }

//     const studentEmail = document.querySelector(".email p").innerHTML;
//     const fullname = document.querySelector(".student_name").innerHTML;
//     const subject = encodeURIComponent("Student Score Notification");
//     const body = encodeURIComponent(`Dear ${fullname},\n\nYour score is: ${score}\n\nRegards,\nEncor Team`);

//     window.location.href = `mailto:${studentEmail}?subject=${subject}&body=${body}`;
//   });
// });