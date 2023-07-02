<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Table de multiplication</title>
</head>

<body>
    <h3>Table de multiplication</h3>
    <div class="contenaire mx-5 ">
        <table class="table-bordered text-center ">
            <tr>
                <?php
                for ($i = 0; $i < 10; $i++) {
                    echo '<th >' . $i . '</th>';
                }

                ?>

            </tr>
            <tr>
                <?php
                echo '<th>1</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . $i . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>2</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 2) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>3</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 3) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>4</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 4) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>5</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 5) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>6</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 6) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>7</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 7) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>8</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 8) . '</td>';
                }

                ?>
            </tr>
            <tr>
                <?php
                echo '<th>9</th>';
                for ($i = 1; $i < 10; $i++) {
                    echo '<td>' . ($i * 9) . '</td>';
                }

                ?>
            </tr>

        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>