
// Function to validate the full name input
function validateFullName() {
  const fullName = document.getElementById("fullName").value;
  const namePattern = /^[A-Za-z]+$/;

  if (namePattern.test(fullName)) {
    document.getElementById("validationMessage").textContent = "Valid full name!";
    document.getElementById("validationMessage").style.color = "green";
    return true;
  } else {
    document.getElementById("validationMessage").textContent = "Invalid full name! Please enter a valid full name with only letters.";
    document.getElementById("validationMessage").style.color = "red";
    return false;
  }
}


// Function to validate the email input
function validateEmail() {
  const email = document.getElementById("email").value;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (emailPattern.test(email)) {
    document.getElementById("validationemail").textContent = "Valid email address!";
    document.getElementById("validationemail").style.color = "green";
    return true;
  } else {
    document.getElementById("validationemail").textContent = "Invalid email address! Please enter a valid email address.";
    document.getElementById("validationemail").style.color = "red";
    return false;
  }
}

// Function to validate the phone number input
function validatePhoneNumber() {
  const phoneNumber = document.getElementById("phoneNumber").value;
  const phonePattern = /^\d{3}[-\s]?\d{3}[-\s]?\d{4}$/;

  if (phonePattern.test(phoneNumber)) {
    document.getElementById("validationnumber").textContent = "Valid phone number!";
    document.getElementById("validationnumber").style.color = "green";
    return true;
  } else {
    document.getElementById("validationnumber").textContent = "Invalid phone number! Please enter a valid phone number.";
    document.getElementById("validationnumber").style.color = "red";
    return false;
  }
}
//validate address
function validateAddress() {
    const address = document.getElementById("address").value;

    if (address.trim() !== "") {
      document.getElementById("validationaddress").textContent = "Valid address!";
      document.getElementById("validationaddress").style.color = "green";
      return true;
    } else {
      document.getElementById("validationaddress").textContent = "Please enter a valid address.";
      document.getElementById("validationaddress").style.color = "red";
      return false;
    }
  }

// Function to validate the entire form before submission
function validateForm() {
  const isFullNameValid = validateFullName();
  const isEmailValid = validateEmail();
  const isPhoneNumberValid = validatePhoneNumber();
  const isAddressValid = validateAddress();

  return isFullNameValid && isEmailValid && isPhoneNumberValid && isAddressValid;
}


