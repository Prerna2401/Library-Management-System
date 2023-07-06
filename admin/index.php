<?php require('dbconnect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="s1.css">
    </head>


    <h1>

        <?php
        $r = $_SESSION['username'];
        echo "Welcome $r, To Library Management System" ?>
        
    </button>
    </h1>
    <right>
    
    </right>

    <button class="button" style="float:right"  onclick="document.location = 'logout.php'">
        <span> Logout</span>
    <br></button>
    <br><br><br>

    
    <div class="st1">
    <div class="button" onclick="document.location = 'addpublisher.php'">
        <span>Add A Publisher</span>
    </div>
    <br><br>
    <div class="button" onclick="document.location = 'addbook.php'">
        <span>Add A Book</span>
    </button>
   
    </div>
    <br><br>

    <div class="button" onclick="document.location = 'viewbooks.php'">
        <span>Manage All Books</span>
    </div>

    <br><br>


    <div class = "button" onclick="document.location = 'viewpublishers.php'">
        <span> View All Publishers </span>
    </div>
    <br>
    <br>

    <div class="button" onclick="document.location = 'accept_issue.php'">
        <span>Accept Book Issue</span>
    </div>
    <br><br>
    <div class="button" onclick="document.location = 'history.php'">
        <span>View Book History</span>
    </div>

    <br><br>
  

</div>
    

</html>