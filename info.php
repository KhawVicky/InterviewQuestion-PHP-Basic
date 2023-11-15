<?php
    $username = isset($_POST['username']) ? $_POST['username'] : '';

    if ($username === 'abc') {
        echo '<p style="color: green;">Verified</p>';
    } else {
        echo '<p style="color: red;">Error</p>';
    }
?>
