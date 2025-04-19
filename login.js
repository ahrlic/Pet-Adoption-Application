/* Groups Members: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: login.js
Date: April 8, 2025
Description: This is a Javascript file for Group Assignment 2 */

//variables
const userUsernameandEmail = document.getElementById('usernameAndEmail');
const usernameAndEmailError = document.getElementById('usernameAndEmailErr');

const userPass = document.getElementById('pass');
const PassError = document.getElementById('PassErr');

const resetButton = document.getElementById('reset');


//regex pattern
const regexUsernameAndEmail = /^([a-zA-Z0-9._-]{1,30}|[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4})$/i
const regexPassword = /^.{8,}$/;

function validateUsernameAndEmail() {
    //checks if username/email is empty or not
    if (userUsernameandEmail.value.trim() === '') {
        usernameAndEmailError.textContent = 'No empty! >:(';
        userUsernameandEmail.classList.add('error-field');
        return false;
    }
    //checks if username/email is valid
    else if (!regexUsernameAndEmail.test(userUsernameandEmail.value.trim())) {
        usernameAndEmailError.textContent = 'Not valid >:(';
        userUsernameandEmail.classList.add('error-field');
        return false;
    }
    //if username/email is in the correct format
    else {
        usernameAndEmailError.textContent = '';
        userUsernameandEmail.classList.remove('error-field');
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
        PassError.textContent = 'Password should be at least 8 characters';
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

function validate(){
    const UsernameAndEmailValid = validateUsernameAndEmail();
    const Password1Valid = validatePassword();

    return UsernameAndEmailValid && Password1Valid;
}

//validate immediately without user having to click the 'sign up' button
userUsernameandEmail.addEventListener('blur', validateUsernameAndEmail);
userPass.addEventListener('blur', validatePassword);

//resets the whole thing (including the error messages)
resetButton.addEventListener('click', function() {
    //resets error messages
    usernameAndEmailError.textContent = '';
    PassError.textContent = '';

    //resets error border
    userUsernameandEmail.classList.remove('error-field');
    userPass.classList.remove('error-field');
});