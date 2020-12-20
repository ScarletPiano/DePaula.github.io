<!DOCTYPE html>
<html lang="en">
<!-- Andrea DePaula --> 
<!-- November  22, 2020 | Due December 1. 2020 -->
<!-- ISTE-240 - Final Nav + Footer php-->
<head>
    <title> <?php echo $title ?> </title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/RochesterLogo.png" />
</head>
<body onload="copyRight()">
    
    <!-- The heading -->
    <div class="im">
        <h1 class='header'>Rochester</h1>
        <!--<p class="time" id="userTime">[Update your browser to see the time]</p>-->
    </div>   
      
    <!-- the navigation leading to all other pages in the site --> 
    <div class="nav">
        <!-- hamburger menu -->
        <div class="mobile">
            <a href="javascript:void(0);" class="burg" onclick="hamburger()">&#9776;</a> 
        </div>  
        <div class="pages">
        <!-- main index page -->
        <a <?php if($page == "welcome") { echo 'class="currentLink menu"'; } else {echo 'class="menu"';}?> href="index.php">Home</a>
        <!-- Outdoor Activities -->
        <div class="dropdown">
            <button class="dropbtn">Outdoor Activities</button>
                <div class="dropdown-content">
                <a <?php if($page == "obp") { echo 'class="current"'; } ?> href="OntarioBeachPark.php">Ontario Beach Park</a>
                <a <?php if($page == "spz") { echo 'class="current"'; } ?> href="SenecaParkZoo.php">Seneca Park Zoo</a>
                <a <?php if($page == "sap") { echo 'class="current"'; } ?> href="SeabreezeAmusementPark.php">Seabreeze Amusement Park</a>
                <a <?php if($page == "hp") { echo 'class="current"'; } ?> href="HighlandPark.php">Highland Park</a>
                <a <?php if($page == "is") { echo 'class="current"'; } ?> href="ISquare.php">Irondequoit Square</a>
                </div>
        </div>    
        <!-- Museums -->
        <div class="dropdown">
            <button class="dropbtn">Museums</button>
                <div class="dropdown-content">
                <a <?php if($page == "smp") { echo 'class="current"'; } ?> href="StrongMuseum.php">The Strong Museum</a>
                <a <?php if($page == "gem") { echo 'class="current"'; } ?> href="GeorgeEastman.php">George Eastman Museum</a>
                <a <?php if($page == "rmsc") { echo 'class="current"'; } ?> href="RochesterMuseum.php">Rochester Museum and Science Center</a>
                <a <?php if($page == "sba") { echo 'class="current"'; } ?> href="SusanBAnthony.php">Susan B. Anthony Museum</a>
                <a <?php if($page == "mag") { echo 'class="current"'; } ?> href="MemorialArtGallery.php">Memorial Art Gallery</a>
                </div>
        </div>    
        <!-- Comments, About, and Sources -->
            <a <?php if($page == "com") { echo 'class="currentLink menu"'; } else {echo 'class="menu"';}?> href="comments.php">Comments</a>
            <a <?php if($page == "about") { echo 'class="currentLink menu"'; } else {echo 'class="menu"';}?> href="about.php">About</a>
            <a <?php if($page == "sources") { echo 'class="currentLink menu"'; } else {echo 'class="menu"';}?> href="sources.php">References</a>
        </div>
    </div>  

   