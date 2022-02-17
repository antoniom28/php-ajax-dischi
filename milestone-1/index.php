<?php
 include '../disc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header class="container">
            <img class="logo" src="img/logo.png" alt="" />
        </header>

        <main class="container">
            <div class="container">
                <?php
                foreach ($disc_data as $disc) {
                    echo '<div class="container-disco">';
                        echo "<img src='$disc[poster]' alt='$disc[title]'>";
                        echo "<h3> $disc[title] </h3>";
                        echo "<div> $disc[author] <br> $disc[year] </div>";
                    echo '</div>';
                }
                ?>
            </div>
        </main>
    </div>

</body>
</html>