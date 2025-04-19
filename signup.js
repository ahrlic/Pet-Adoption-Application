/* Groups Members: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: signup.js
Date: April 8, 2025
Description: This is a Javascript file for Group Assignment 2 - signup.js */

//variables
const userFirstName = document.getElementById('firstname');
const userLastName = document.getElementById('lastname');
const fullNameError = document.getElementById('fullNameErr');

const userUsername = document.getElementById('username');
const usernameError = document.getElementById('usernameErr');

const userEmail = document.getElementById('email');
const emailError = document.getElementById('emailErr');

const userPhoneNumber = document.getElementById('phone-number');
const phoneNumberError = document.getElementById('phoneNumberErr');

const userPass = document.getElementById('pass');
const PassError = document.getElementById('PassErr');

const userPass2 = document.getElementById('pass2');
const Pass2Error = document.getElementById('PassErr2');

const userNewsletter = document.getElementById('newsletter');

const userTerms = document.getElementById('terms')
const termsError = document.getElementById('termsErr');

const resetButton = document.getElementById('reset');


//regex pattern
const regexName = /^[A-Za-z ]+$/i;
const regexUsername = /^[a-zA-Z0-9._-]{1,30}$/
const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/i;
const regexPhoneNumber = /^\(\d{3}\)\s?\d{3}-\d{4}$/
const regexPassword = /^.{8,}$/;


function validateFullName() {
    //checks if name is empty or not
    if (userFirstName.value.trim() === '') {
        fullNameError.textContent = 'First name no empty! >:(';
        userFirstName.classList.add('error-field');
        return false;
    }
    //checks if name follows the xyz@xyz.xyz format
    else if (!regexName.test(userFirstName.value.trim())) {
        fullNameError.textContent = 'Your name contain either symbol, number, or both >:(';
        userFirstName.classList.add('error-field');
        return false;
    }
    //if name is in the correct format
    else {
        fullNameError.textContent = '';
        userFirstName.classList.remove('error-field');
        userLastName.classList.remove('error-field');
        return true;
    }
}

function validateUsername() {
    //checks if username is empty or not
    if (userUsername.value.trim() === '') {
        usernameError.textContent = 'Username no empty! >:(';
        userUsername.classList.add('error-field');
        return false;
    }
    //checks if email follows the xyz@xyz.xyz format
    else if (!regexUsername.test(userUsername.value.trim())) {
        usernameError.textContent = 'You use weird symbols (only . - _ allowed) >:(';
        userUsername.classList.add('error-field');
        return false;
    }
    //if email is in the correct format
    else {
        usernameError.textContent = '';
        userUsername.classList.remove('error-field');
        return true;
    }
}

function validateEmail() {
    //checks if email is empty or not
    if (userEmail.value.trim() === '') {
        emailError.textContent = 'Email no empty! >:(';
        userEmail.classList.add('error-field');
        return false;
    }
    //checks if email follows the xyz@xyz.xyz format
    else if (!regexEmail.test(userEmail.value.trim())) {
        emailError.textContent = 'Email address should be xyz@xyz.xyz format.';
        userEmail.classList.add('error-field');
        return false;
    }
    //if email is in the correct format
    else {
        emailError.textContent = '';
        userEmail.classList.remove('error-field');
        return true;
    }
}

function validatePhoneNumber() {
    //checks if phone number is empty or not
    if (userPhoneNumber.value.trim() === '') {
        phoneNumberError.textContent = 'Phone number no empty! >:(';
        userPhoneNumber.classList.add('error-field');
        return false;
    }
    //checks if email follows the xyz@xyz.xyz format
    else if (!regexPhoneNumber.test(userPhoneNumber.value.trim())) {
        phoneNumberError.textContent = 'Phone number should be (123) 456-7890 format >:(';
        userPhoneNumber.classList.add('error-field');
        return false;
    }
    //if email is in the correct format
    else {
        phoneNumberError.textContent = '';
        userPhoneNumber.classList.remove('error-field');
        return true;
    }
}

function validatePassword() {
    //checks if password is empty or not
    if (userPass.value.trim() === '') {
        PassError.textContent = 'Password no empty! >:(';
        userPass.classList.add('error-field');
        return false;
    }
    //checks if email follows the xyz@xyz.xyz format
    else if (!regexPassword.test(userPass.value.trim())) {
        PassError.textContent = 'Password should be at least 8 characters: 1 uppercase, 1 lowercase.';
        userPass.classList.add('error-field');
        return false;
    }
    //if email is in the correct format
    else {
        PassError.textContent = '';
        userPass.classList.remove('error-field');
        return true;
    }
}

function validatePassword2() {
    //checks if password2 is empty or not
    if (userPass2.value.trim() === '') {
        Pass2Error.textContent = 'Password no empty (again)! >:(';
        userPass2.classList.add('error-field');
        return false;
    }
    //checks if pass2 is the same as pass
    else if (userPass.value.trim() !== userPass2.value.trim()){
        Pass2Error.textContent = 'Password does not match.';
        userPass2.classList.add('error-field');
        return false;
    }
    //if same
    else {
        Pass2Error.textContent = '';
        userPass2.classList.remove('error-field');
        return true;
    }
}


function validate(){
    const FullNameValid = validateFullName();
    const UsernameValid = validateUsername();
    const EmailValid = validateEmail();
    const PhoneNumberValid = validatePhoneNumber();
    const Password1Valid = validatePassword();
    const Password2Valid = validatePassword2();

    //checks if user checked on the terms and conditions checkbox
    if (!userTerms.checked) {
        termsError.textContent = 'Accept the terms and conditions! >:('
        return false;
    }
    else {
        termsError.textContent = '';
    }

    return EmailValid && UsernameValid && FullNameValid && Password1Valid && Password2Valid && PhoneNumberValid;
}

userNewsletter.addEventListener('change', function() {
    if (this.checked) {
        alert('If you agree to receive newsletter, you may receive spam (hehe) :))');
    }
});

//validate immediately without user having to click the 'sign up' button
userFirstName.addEventListener('blur', validateFullName);
userLastName.addEventListener('blur', validateFullName);
userUsername.addEventListener('blur', validateUsername);
userEmail.addEventListener('blur', validateEmail);
userPhoneNumber.addEventListener('blur', validatePhoneNumber);
userPass.addEventListener('blur', validatePassword);
userPass2.addEventListener('blur', validatePassword2);
userTerms.addEventListener('change', validate)

//resets the whole thing (including the error messages)
resetButton.addEventListener('click', function() {
    //resets error messages
    fullNameError.textContent = '';
    usernameError.textContent = '';
    emailError.textContent = '';
    phoneNumberError.textContent = '';
    PassError.textContent = '';
    Pass2Error.textContent = '';
    termsError.textContent = '';

    //resets error border
    userFirstName.classList.remove('error-field');
    userLastName.classList.remove('error-field');
    userUsername.classList.remove('error-field');
    userEmail.classList.remove('error-field');
    userPhoneNumber.classList.remove('error-field');
    userPass.classList.remove('error-field');
    userPass2.classList.remove('error-field');
    userTerms.classList.remove('error-field');
});