
const validateForm = document.getElementById("submit").addEventListener("click", () => {
  
  var email = document.getElementById("email").value;
  var fullname = document.getElementById("fullname").value;
  var program = document.getElementById("program").value;
  var phone = document.getElementById("phone").value;
  var batchNo = document.getElementById("batch_no").value;
  var regNo = document.getElementById("reg_no").value;

  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert("Please enter a valid email.");
    return;
  }

  if (fullname.trim() === "") {
    alert("Full name is required.");
    return;
  }

  if (program.trim() === "") {
    alert("Program field cannot be empty.");
    return;
  }

  if (!/^[0-9]{10,15}$/.test(phone)) {
    alert("Phone number must be between 10 and 15 digits.");
    return;
  }

  if (!/^[a-zA-Z0-9]+$/.test(batchNo)) {
    alert("Batch number must contain only letters and numbers.");
    return;
  }

  if (!/^[a-zA-Z0-9]+$/.test(regNo)) {
    alert("Registration number must contain only letters and numbers.");
    return;
  }

  alert("Form submitted successfully!");

});

