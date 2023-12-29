<?php
include "libs/load.php";
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Events</title>

    <!-- Include color-modes.js script -->
    <script src="assets/js/color-modes.js"></script>

    <style>
        body {
            /* position: absolute; */
            padding-top: 70px; /* Adjust the value based on your navbar height */
        }

        /* Add more styles as needed */
    </style>
</head>

<body>

<header class="mb-auto">
    <?php
    load_template("nav_bar");
    ?>
</header>

<div class="goals">
    <h1>Example lists</h1>
    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
    <ol>
        <li>First list item</li>
        <li>List item with a longer description</li>
        <li>Third list item to close it out</li>
    </ol>
</div>

</body>
</html>
