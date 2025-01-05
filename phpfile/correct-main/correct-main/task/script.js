
function showOtherr(){
    alert();
    document.getElementById('test').style.display = "block";
}

function validateForm() {
    let valid = true;
    let name = document.getElementById('name').value.trim();
    const nameRegex = /^[A-Za-z\s'-]+$/;
    if (!name || !nameRegex.test(name)) {
        console.log("Name validation failed");
        document.getElementById('nameError').innerText = "Enter a valid name.";
        valid = false;
    } else {
        document.getElementById('nameError').innerText = "";
    }



    let email = document.getElementById('email').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        console.log("Email validation failed");
        document.getElementById('mailError').innerText = "Enter a valid email address.";
        valid = false;
    } else {
        document.getElementById('mailError').innerText = "";
    }




// Password validation
let password = document.getElementById('password').value.trim();
    const minLength = 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasDigit = /\d/.test(password);
    const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);

    if (!password || password.length < minLength) {
        console.log("Password validation failed: Minimum length not met");
        document.getElementById('passwordError').innerText = "Password must be at least 8 characters long.";
        valid = false;
    } else if (!hasUpperCase) {
        console.log("Password validation failed: No uppercase letter");
        document.getElementById('passwordError').innerText = "Password must contain at least one uppercase letter.";
        valid = false;
    } else if (!hasLowerCase) {
        console.log("Password validation failed: No lowercase letter");
        document.getElementById('passwordError').innerText = "Password must contain at least one lowercase letter.";
        valid = false;
    } else if (!hasDigit) {
        console.log("Password validation failed: No digit");
        document.getElementById('passwordError').innerText = "Password must contain at least one digit.";
        valid = false;
    } else if (!hasSpecialChar) {
        console.log("Password validation failed: No special character");
        document.getElementById('passwordError').innerText = "Password must contain at least one special character.";
        valid = false;
    } else {
        document.getElementById('passwordError').innerText = "";
    }


    // phone validation
    let phone = document.getElementById('phone').value.trim();
    const phoneRegex = /^\d{10}$/;

    if (!phone || !phoneRegex.test(phone)) {
        console.log("Phone number validation failed");
        document.getElementById('phoneError').innerText = "Enter a valid phone number.";
        valid = false;
    } else {
        document.getElementById('phoneError').innerText = "";
    }


      // Pincode validation
      let pincode = document.getElementById('pincode').value.trim();
    const pincodeRegex = /^\d{6}$/; // Exactly 6 digits

    if (!pincode || !pincodeRegex.test(pincode)) {
        console.log("Pincode validation failed");
        document.getElementById('pincodeError').innerText = " 6 digits Pincode";
        valid = false;
    } else {
        document.getElementById('pincodeError').innerText = "";
    }

// DOB validation
let dob = document.getElementById('dob').value.trim();
    if (!dob) {
        console.log("DOB validation failed: Field is required");
        document.getElementById('dobError').innerText = "Date of Birth is required.";
        valid = false;
    } else {
        document.getElementById('dobError').innerText = "";
    }


   // Gender validation
   let gender = document.querySelector('input[name="gender"]:checked');
    if (!gender) {
        console.log("Gender validation failed: No option selected");
        document.getElementById('genderError').innerText = "Please select a gender.";
        valid = false;
    } else {
        document.getElementById('genderError').innerText = "";
    }

    

    return valid;
}

