<?php

    require_once('functions/DynamicNavBarHighlight.php')

?>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Picture & Title -->
    <a class="navbar-brand" href="#">
        <img src="./assets/images/bug.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bugtracker
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar -->
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?=echoActiveClassIfRequestMatches("?p=information")?>" href="?p=information">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=echoActiveClassIfRequestMatches("?p=submitbug")?>" href="?p=submitbug">Submit a Bug</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=echoActiveClassIfRequestMatches("?p=listbugs")?>" href="?p=listbugs">Check Bugs</a>
            </li>
        </ul>
        <!-- Right side text -->
        <span class="navbar-text">
      Bugtracker v.0.0.1-INDEV
    </span>
    </div>
</nav>
