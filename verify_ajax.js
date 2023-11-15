function submitForm() {
    var username = document.getElementById('username').value;

    if (username.trim() === "") {
        alert("Username cannot be empty");
        return;
    }

    $.ajax({
        type: 'POST',
        url: 'info.php',
        data: { username: username },
        success: function (response) {
            displayResult(response);
        },
        error: function () {
            alert('Error in AJAX request');
        }
    });
}

function displayResult(response) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = response;
}
