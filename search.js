// Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
// Author: Fiona Ang
// Section: CST 8285 300_301
// File: search.js
// Date: April 8, 2025
// Description: This is a Javascript file for Assignment2

//get data from php
const url = 'display-data.php';

let currentFilters = {
    types: ['Cat', 'Dog', 'Hamster'],
    statuses: ['Available', 'Adopted']
};

document.addEventListener('DOMContentLoaded', function() {
    updateCheckboxStates();
    
    // Add event listener for the filter form
    document.getElementById('filter-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Update current filters based on checkboxes
        currentFilters.types = getSelectedCheckboxes('type[]');
        currentFilters.statuses = getSelectedCheckboxes('status[]');
        
        // Refresh the pet list with new filters
        getPets();
    });
});

// function to getPets (filter)
function getPets() {
    let url = 'display-data.php';
    
    if (currentFilters.types.length > 0 || currentFilters.statuses.length > 0) {
        url += '?';
        if (currentFilters.types.length > 0) {
            url += `type=${currentFilters.types.join(',')}`;
        }

        if (currentFilters.statuses.length > 0) {
            if (currentFilters.types.length > 0) url += '&';
            url += `status=${currentFilters.statuses.join(',')}`;
        }
    }
    
    fetch(url)
    .then(response => response.json())
    .then(displayAllPets);
}

//function to get the selected checkboxes
function getSelectedCheckboxes(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    return Array.from(checkboxes).map(cb => cb.value);
}

//function to set the checkboxes to match the filter
function updateCheckboxStates() {
    document.querySelectorAll('input[name="type[]"]').forEach(checkbox => {
        checkbox.checked = currentFilters.types.includes(checkbox.value);
    });
    
    document.querySelectorAll('input[name="status[]"]').forEach(checkbox => {
        checkbox.checked = currentFilters.statuses.includes(checkbox.value);
    });
}

function displayAllPets(pets){
    const displayDataDiv = document.querySelector('.display-data');
    //index so that each pet has different id
    let button_index = 0;
    let image_index = 0;
    let container_index = 0;

    displayDataDiv.innerHTML = '';

    //one pet one div
    pets.forEach((petData) => {
        const onePet = document.createElement('div');
        onePet.className = 'one-pet';

        //the html
        onePet.innerHTML = `
            <div id="petContainer${container_index}" class="pets-container">
                <div class="oneContainer">
                    <h3>${petData.name}</h3>
                    <div class="pet-images">
                        <img id="image1${image_index}" src="${petData.photo_url}" class="visible">
                        <img id="image2${image_index}" src="${petData.photo_url2}">
                    </div>
                    <div class="buttons">
                        <button id="prev${button_index}" class="prev-button"><</button>
                        <button id="next${button_index}" class="next-button">></button>
                    </div>
                    <p class="description">${petData.description}</p>
                    <p><b>Species:</b> ${petData.species}</p>
                    <p><b>Age:</b> ${petData.age}</p>
                    <p><b>Gender:</b> ${petData.gender}</p>
                    <p><b>Status:</b> ${petData.adoption_status}</p>
                </div>
            </div>
        `;

        button_index++;
        image_index++;
        container_index++;
        displayDataDiv.appendChild(onePet);
    });
    
    addButtonEventListeners();
}

//function to change photo when user click on the buttons
function addButtonEventListeners(){
    const currentIndices = {};
    
    document.querySelectorAll('.pets-container').forEach((container, index) => {
        currentIndices[index] = 0;
        
        const images = container.querySelectorAll('.pet-images img');
        const nextButton = container.querySelector('.next-button');
        const prevButton = container.querySelector('.prev-button');
        
        function updateVisibility() {
            images.forEach((img, i) => {
                if (i === currentIndices[index]) {
                    img.classList.add('visible');
                } else {
                    img.classList.remove('visible');
                }
            });
        }
        
        nextButton.addEventListener('click', () => {
            currentIndices[index] = (currentIndices[index] + 1) % images.length;
            updateVisibility();
        });
        
        prevButton.addEventListener('click', () => {
            currentIndices[index] = (currentIndices[index] - 1 + images.length) % images.length;
            updateVisibility();
        });
    });
}

document.addEventListener('DOMContentLoaded', getPets);