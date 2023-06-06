function validateForm() {
    var currentDate = new Date().toISOString().split('T')[0]; // Get the current date in ISO format
    var currentTime = new Date().toISOString().split('T')[1].slice(0, 5); // Get the current time in HH:mm format

    var selectedDate = document.getElementById("date").value;
    var selectedTime = document.getElementById("time").value;

    if (selectedDate < currentDate) {
        showError("Invalid Date");
        return false;
    }

    if (selectedDate === currentDate && selectedTime < currentTime) {
        showError("Invalid Time");
        return false;
    }

    return true;
}

function showError(message) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.textContent = message;
}

// Remove error message when the inputs are modified
document.getElementById("date").addEventListener("input", removeError);
document.getElementById("time").addEventListener("input", removeError);

function removeError() {
    var errorMessage = document.getElementById("error-message");
    errorMessage.textContent = "";
}
