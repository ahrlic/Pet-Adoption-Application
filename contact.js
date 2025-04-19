/* Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: contact.js
Date: April 8, 2025
Description: This is a Javascript file for Group Assignment 2 - contact.js */

//variables
const userName = document.getElementById('name');
const nameError = document.getElementById('nameErr');

const userEmail = document.getElementById('email');
const emailError = document.getElementById('emailErr');

const userMessage = document.getElementById('message');
const messageError = document.getElementById('messageErr');

const resetButton = document.getElementById('reset');

const startingform = document.getElementById('section2');


//regex pattern
const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/i;
const regexName = /^[A-Za-z ]+$/i;

//
function validateName() {
    //checks if username is empty or not
    if (userName.value.trim() === '') {
        nameError.textContent = 'Name no empty! >:(';
        userName.classList.add('error-field');
        return false;
    }
    //checks if email follows the xyz@xyz.xyz format
    else if (!regexName.test(userName.value.trim())) {
        nameError.textContent = 'Your name contain either symbol, number, or both >:(';
        userName.classList.add('error-field');
        return false;
    }
    //if email is in the correct format
    else {
        nameError.textContent = '';
        userName.classList.remove('error-field');
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

function validateMessage() {
    //checks if message is empty or not
    if (userMessage.value.trim() === '') {
        messageError.textContent = 'Message no empty! >:(';
        userMessage.classList.add('error-field');
        return false;
    }
    //if message is valid
    else {
        messageError.textContent = '';
        userMessage.classList.remove('error-field');
        return true;
    }
}

function validate(){
    const EmailValid = validateEmail();
    const NameValid = validateName();
    const MessageValid = validateMessage();

    return EmailValid && NameValid && MessageValid;
}

//validate immediately without user having to click the 'sign up' button
userName.addEventListener('focusout', validateName);
userEmail.addEventListener('focusout', validateEmail);
userMessage.addEventListener('focusout', validateMessage);

//resets the whole thing (including the error messages)
resetButton.addEventListener('click', function() {
    //resets error messages
    nameError.textContent = '';
    emailError.textContent = '';
    messageError.textContent = '';

    //resets error border
    userName.classList.remove('error-field');
    userEmail.classList.remove('error-field');
    userMessage.classList.remove('error-field');
});

//automatic scrolling to section2
window.onload = function() {
    setTimeout(function() {
        if (section2) {
            section2.scrollIntoView({behavior:'smooth'});
        }
    }, 500);
};