<?php require('dbconnect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="s.css">
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
    <br>
    </button>
    <br>
    <br>
    <br>
    <div class="st1">
    <div class="button" onclick="document.location = 'userdetails.php'">
        <span>View Details</span>
    </button>
    </div>
    <br>
    <div class="button" onclick="document.location = 'viewbooks.php'">
        <span>View All Books</span>
</div>
<br>
<div class = "button" onclick="document.location = 'viewpublishers.php'">
        <span> View All Publishers </span>
    </div>

    <br>
    <div class="button" onclick="document.location = 'requestbook.php'">
        <span>Request Book</span>
</div>

    <br>
    <div class="button" onclick="document.location = 'mybooks.php'">
        <span>View My Books</span>
</div>

    <br>

    <div class = "button" onclick="document.location = 'returnbook.php'">
        <span> Return Books </span>
    </div>

   
    <br>
    <br>


    

    </div>
    

</html>