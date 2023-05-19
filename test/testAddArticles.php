<?php
// Manual Testing Code

// Test Case 1: Submitting valid input
$_POST['name'] = 'Article 1';
$_POST['description'] = 'This is the description of Article 1.';
$_POST['link'] = 'https://example.com/article1';
$_POST['submit'] = true;

// Test Case 2: Submitting empty name
$_POST['name'] = '';
$_POST['description'] = 'This is the description of Article 2.';
$_POST['link'] = 'https://example.com/article2';
$_POST['submit'] = true;

// Test Case 3: Submitting empty description
$_POST['name'] = 'Article 3';
$_POST['description'] = '';
$_POST['link'] = 'https://example.com/article3';
$_POST['submit'] = true;

// Test Case 4: Submitting empty link
$_POST['name'] = 'Article 4';
$_POST['description'] = 'This is the description of Article 4.';
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

    $sql="insert into `articles`(name,description,link)
    values('$name','$description','$link')";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Article added successfully.";
    else
        echo "Error: " . mysqli_error($con);
}
?>
