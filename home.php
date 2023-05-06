<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form</title>
</head>
<body>
    <main>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" required="required" placeholder="Enter your name" />
                </div>
                <div>
                    <label for="phone">phone:</label>
                    <input type="tel" name="phone" pattern="/^[+]212(6|7)\d{8}$/" placeholder="+212xxxxxxxxx" required><br><br>
                </div>

                <button type="submit">Subscribe</button>

            </form>
        <?php else : ?>

            <?php
            if (isset($_POST['name'], $_POST['phone'])) {
                $name = htmlspecialchars($_POST['name']);
                $phone = htmlspecialchars($_POST['phone']);

              
                echo " $name ";
                echo " $phone";
            } else {
                echo 'You need to provide your name and email address.';
            }

            ?>

        <?php endif ?>
    </main>
</body>

</html>