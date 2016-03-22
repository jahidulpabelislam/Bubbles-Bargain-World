<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Jahidul Pabel Islam">
    <meta name="description"
          content="<?php echo $description ?>">
    <meta name="keywords"
          content="<?php echo $keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?> - Bubbles Bargain World</title>
    <!-- the favicon for browsers -->
    <link rel="icon" href="/images/favicon.png">
    <!-- the style sheet for the site -->
    <link rel="stylesheet" type="text/css" href="/lib/style2.css"/>
</head>

<body>
<!-- header container which includes logo and opening hours -->
<header>

    <!-- Logo -->
    <img id="logo" src="/images/logo.png" alt="Bubbles Bargain World Logo">

    <!-- Div containing opening hours -->
    <div id="openinghours">

        <!-- The opening hour for each day -->
        <p id="monday">Monday: 9am - 5:30pm</p>
        <p id="tuesday">Tuesday: 9am - 5:30pm</p>
        <p id="wednesday">Wednesday: 9am - 5:30pm</p>
        <p id="thursday">Thursday: 9am - 5:30pm</p>
        <p id="friday">Friday: 9am - 5:30pm</p>
        <p id="saturday">Saturday: 9am - 5:30pm</p>
        <p id="sunday">Sunday: 10am - 4pm</p>
    </div>
</header>

<!-- Navigation bar -->
<nav>

    <!-- Menu Icon/Only used for smaller screens -->
    <img id="menu-icon" src="/images/menu-icon.svg" alt="Menu">

    <!-- The different links -->
    <ul>
        <li><a id="current" href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>
</nav>

<!-- The main content -->
<section>

    <!-- Heading for page -->
    <h1><?php echo $title ?></h1>