// Get the elements
var openPopupBtn = document.getElementById('openPopupBtn');
var closePopupBtn = document.getElementById('closePopupBtn');
var popupForm = document.getElementById('popupForm');

// Show the popup form
openPopupBtn.onclick = function() {
    popupForm.style.display = 'block';
}

// Close the popup form
closePopupBtn.onclick = function() {
    popupForm.style.display = 'none';
}

// Close the popup form if the user clicks outside of it
window.onclick = function(event) {
    if (event.target == popupForm) {
        popupForm.style.display = 'none';
    }
}
