function submitForm() {
    //get username's value
    var username = document.getElementById('username').value;

    //when username empty return error
    if (username.trim() === "") {
        alert("Username cannot be empty");
        return;
    }
    //send to server side
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
//get respond back
function displayResult(response) {
    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = response;
}
