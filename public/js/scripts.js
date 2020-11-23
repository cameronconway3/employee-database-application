// Form elements
const form = document.querySelector("form");
const firstNameInput = document.querySelector("#inputFirstName");
const lastNameInput = document.querySelector("#inputLastName");
const dobInput = document.querySelector("#inputDOB");
const emailAddressInput = document.querySelector("#inputEmail");
const submit = document.querySelector("#submitEmployee");

// Validation check
let firstNameValid = false;
let lastNameValid = false;
let dobValid = false;
let emailAddressValid = false;

// Validation elements - updated with message when validation fails
const firstNameError = document.querySelector(".first-name-error");
const lastNameError = document.querySelector(".last-name-error");
const dobError = document.querySelector(".dob-error");
const emailAddressError = document.querySelector(".email-address-error");

// If we are on the form page
if(form) {
    // Update first name validation message and input styling on keyup
    firstNameInput.addEventListener("keyup", e => {
        if(e.target.value.trim().length !== 0) {
            firstNameError.innerHTML = "";
            firstNameInput.style.border = "1px solid #7FDAE6";
            firstNameValid = true;
        } 
    })
    
    // Update last name validation message and input styling on keyup
    lastNameInput.addEventListener("keyup", e => {
        if(e.target.value.trim().length !== 0) {
            lastNameError.innerHTML = "";
            lastNameInput.style.border = "1px solid #7FDAE6";
            lastNameValid = true;
        } 
    })
    
    // Update dob validation message and input styling on keyup
    dobInput.addEventListener("keyup", e => {
        if(e.target.value.trim().length !== 0) {
            dobError.innerHTML = "";
            dobInput.style.border = "1px solid #7FDAE6";
            dobValid = true;
        } 
    })
    
    // Update email address validation message and input styling on keyup
    emailAddressInput.addEventListener("keyup", e => {
        if(e.target.value.trim().length !== 0) {
            emailAddressError.innerHTML = "";
            emailAddressInput.style.border = "1px solid #7FDAE6";
            emailAddressValid = true;
        } 
    })
    
    // Validate the whole form when submit is clicked
    submit.addEventListener('click', e => {
        // Validate first name field
        firstNameError.innerHTML = "";
        firstNameInput.style.border = "1px solid #7FDAE6";
        const firstNameVal = firstNameInput.value;
        if(firstNameVal.trim().length === 0) {
            firstNameError.innerHTML = "<p class='validation-message'>Please enter a first name</p>";
            firstNameInput.style.border = "1px solid red";
            firstNameValid = false;
        } else {
            firstNameValid = true;
        }
    
        // Validate last name field
        lastNameError.innerHTML = "";
        lastNameInput.style.border = "1px solid #7FDAE6";
        const lastNameVal = lastNameInput.value;
        if(lastNameVal.trim().length === 0) {
            lastNameError.innerHTML = "<p class='validation-message'>Please enter a last name</p>";
            lastNameInput.style.border = "1px solid red";
            lastNameValid = false;
        } else {
            lastNameValid = true;
        }
    
        // Validate date of birth field
        dobError.innerHTML = "";
        dobInput.style.border = "1px solid #7FDAE6";
        const dobVal = dobInput.value;
        if(dobVal.trim().length === 0) {
            dobError.innerHTML = "<p class='validation-message'>Please enter a date of birth</p>";
            dobInput.style.border = "1px solid red";
            dobValid = false;
        } else {
            if(/^\d{2}\/\d{2}\/\d{2}$/.test(dobVal)) {
                dobValid = true;
            } else {
                dobError.innerHTML = "<p class='validation-message'>Invalid format (DD/MM/YY)</p>";
                dobInput.style.border = "1px solid red";
                dobValid = false;
            }
        }
        
        // Validate email address field
        emailAddressError.innerHTML = "";
        emailAddressInput.style.border = "1px solid #7FDAE6";
        const emailAddressVal = emailAddressInput.value;
        if(emailAddressVal.trim().length === 0) {
            emailAddressError.innerHTML = "<p class='validation-message'>Please enter an email address</p>";
            emailAddressInput.style.border = "1px solid red";
            emailAddressValid = false;
        } else {
            if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailAddressVal)) {
                emailAddressValid = true;
            } else {
                emailAddressError.innerHTML = "<p class='validation-message'>Invalid format</p>";
                emailAddressInput.style.border = "1px solid red";
                emailAddressValid = false;
            }
        }
        
        if(firstNameValid === true && lastNameValid === true && dobValid === true && emailAddressValid === true) {
            // Form Submits
        } else {
            e.preventDefault();
        }
    })

    // Manage symfony validation
    if(dobInput.classList.contains('is-invalid')) {
        dobError.innerHTML = "<p class='validation-message'>Invalid date</p>";
    }
}
