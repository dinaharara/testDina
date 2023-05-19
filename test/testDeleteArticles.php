<?php
include '../connect.php';

function fetchArticles($con) {
    $articles = [];

  $sql = "SELECT * FROM `articles`";
  $result = mysqli_query($con, $sql);

  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      $articles[] = $row;
    }
  }
  return $articles;
}

function displayArticles($articles, $deleteId = null) {
  foreach ($articles as $article) {
    // Check if the current article is the one being deleted
    if ($deleteId != null && $article['id'] == $deleteId) {
      echo '
        <tr>
          <td colspan="5" class="success">Article successfully deleted!</td>
        </tr>
      ';
    }
  }
}

$articles = fetchArticles($con);

// Test Case: Deleting an existing article
$deleteId = 1; // Provide the ID of the article you want to delete
$_GET['deleteid'] = $deleteId;
// Display the articles and perform the tests
displayArticles($articles, $deleteId);

?>

