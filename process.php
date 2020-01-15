<?php
echo 'Processing...';

//Check for a get variable
if(isset($_GET['name'])) {
    echo 'GET: Your name is '. $_GET['name'];
}
//Check for a get variable
if(isset($_POST['name'])) {
    echo 'POST: Your name is '. $_POST['name'];
}