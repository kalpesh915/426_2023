<?php
    require_once("session.php");
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <span class="navbar-brand">
            <?php
                echo $email;
            ?>
        </span>
        <li class="nav-link"><a href='home.php' class="nav-link">Home</a></li>
        <li class="nav-link"><a href='profile.php' class="nav-link">Profile</a></li>
        <li class="nav-link"><a href='changepassword.php' class="nav-link">Change Password</a></li>
        <li class="nav-link"><a href='otherusers.php' class="nav-link">Other Users</a></li>
        <li class="nav-link"><a href='delete.php' class="nav-link">Delete Account</a></li>
        <li class="nav-link"><a href='logout.php' class="nav-link">Logout</a></li>
    <ul>
</nav>