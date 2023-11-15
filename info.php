<?php
    $username = isset($_POST['username']) ? $_POST['username'] : ''; //get username
    //when username == abc return verified
    if ($username === 'abc') {
        echo '<p style="color: green;">Verified</p>';
    } else {
        echo '<p style="color: red;">Error</p>';
    }
?>
