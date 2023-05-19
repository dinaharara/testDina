<?php
// Manual Testing Code

// Test Case 1: Updating an existing article
$updateId = 1; // Provide the ID of the article you want to update
$_GET['updateid'] = $updateId;

// Test Case 2: Attempting to update a non-existing article
// $nonExistingId = 10; // Provide a non-existing ID
// $_GET['updateid'] = $nonExistingId;

include '../connect.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM `articles` WHERE id=$id ";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name=$row['Name'];
$description=$row['Description'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $description=$_POST['description'];

  $sql="update `articles` set id=$id , name = '$name' , description = '$description' where id=$id";
  $result = mysqli_query($con,$sql);
  if($result)
  header('location:articles.php');
  else
  die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<style>
    .add-article-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 20px;
      }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    
    tr:hover {
      background-color: #f5f5f5;
    }
    
    .actions {
      white-space: nowrap;
    }
    
    .actions button {
      margin-right: 5px;
    }
    
    .actions button.update {
        border: 0;
      background-color: #4CAF50;
      color: white;
    }
    
    .actions button.delete {
        border: 0;
      background-color: #f44336;
      color: white;
    }
    .btn-log{
      background:#214761;
      color:#fff;
      border-radius: 10px;
      display:block;
      margin:20px 10px;
      padding:5px 15px ;
    }
    .btn-log:hover{
      color:#fff;
    }
    #wrapper {
    width: 100%;
    display: flex;
    justify-content: space-between;
    /* margin-top:30px; */
}
    </style>

<body>      
    <div id="wrapper">
        <div class="navbar ">
         <h2>AdminPFG</h2>    
        </div>
        <a class="btn-log my-5" href="logout.php">log out</a>
    </div>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li >
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    
                    <li>
                        <a href="articles.php"><i class="fa fa-edit "></i>Artices</a>
                    </li>
                    <li>
                        <a href="events.php"><i class="fa fa-edit "></i>Events</a>
                    </li>
                    <li>
                        <a href="videos.php"><i class="fa fa-edit "></i>Videos</a>
                    </li>
                    <li>
                        <a href="theStories/theAdmin/addingStories.php"><i class="fa fa-table "></i>Adding Stories</a>
                    </li>
                     <li>
                        <a href="theStories/theAdmin/viewpinnedStories.php"><i class="fa fa-edit "></i>View Pinned Stories</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                </div>              
                <form method="post">
                  <div class="form-group">
                    <label for="validationServer01">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name" 
                    value="<?php echo $name?>">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Description" value="<?php echo $description?>"
                    >
                  </div>  
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>           
                  <hr />         
            </div>
          </div>
          <div class="footer">
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2023 Admin PFG | Design by: Dina Harara
                </div>
              </div>
        </div>         
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>