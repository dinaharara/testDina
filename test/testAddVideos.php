<?php
// Manual Testing Code

// Test Case 1: Submitting valid input
$_POST['name'] = 'video 1';
$_POST['description'] = 'This is the description of video 1.';
$_POST['link'] = 'https://example.com/video';
$_POST['submit'] = true;

// Test Case 2: Submitting empty name
$_POST['name'] = '';
$_POST['description'] = 'This is the description of video 2.';
$_POST['link'] = 'https://example.com/video';
$_POST['submit'] = true;

// Test Case 3: Submitting empty description
$_POST['name'] = 'video 3';
$_POST['description'] = '';
$_POST['link'] = 'https://example.com/video';
$_POST['submit'] = true;

// Test Case 4: Submitting empty link
$_POST['name'] = 'video 4';
$_POST['description'] = 'This is the description of video 4.';
$_POST['link'] = '';
$_POST['submit'] = true;

// Test Case 5: Not submitting the form
// This case can be used to test the behavior when the form is not submitted.

// Include the original code
include '../connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $link=$_POST['link'];

    $sql="insert into `videos`(name,description,link)
    values('$name','$description','$link')";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Video added successfully.";
    else
        echo "Error: " . mysqli_error($con);
}
?>
