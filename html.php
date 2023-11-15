<!DOCTYPE html>
<html lang="en">
<head>
    <script src="verify_ajax.js"></script>
    <meta charset="UTF-8">
    <title>Username Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .Container{
            border: 1px solid black;
            padding: 20px;
            width: fit-content;

        }
        .buttonContainer{
            display: flex;
           justify-content: right;
        }
        #submitBtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 40px;
            font-size: 16px;
            cursor: pointer;
            border:none;
            
        }
        #username{
            height: 50px;
        }
    </style>
</head>
<body>

    <h2>Username Verification</h2>
<div class="Container">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username">

    <br><br>
<div class="buttonContainer">
    <button id="submitBtn" onclick="submitForm()">Submit</button>
</div>
    <div id="result"></div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    

</body>
</html>
