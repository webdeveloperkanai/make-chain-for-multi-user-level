<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./main.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            overflow: scroll;
        }

        .container {
            position: relative;
        }

        .row {
            margin-left: 20%;
            max-width: 50% !important;
            position: relative !important;
            display: flex;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="box circle" id="parent"></div>
        <div class="row">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="box circle" id="bxt<?= $i ?>" style="top: 250px;"> Child <?= $i ?> </div>

                <?php if ($i > 1) { ?>
                    <script>
                        var distance = getDistance(`bxt<?= $i - 1 ?>`, `bxt<?= $i ?>`);
                        console.log(distance)
                        distance = distance + 150;
                        console.warn(distance + 150)
                        document.getElementById(`bxt<?= $i ?>`).style.left = distance + "px";
                        drawLine('parent', `bxt<?= $i ?>`);
                    </script>
                <?php } else { ?>
                    <script>
                        document.getElementById(`bxt<?= $i ?>`).style.left = "left: 500px";
                        drawLine('parent', `bxt<?= $i ?>`);
                    </script>

            <?php }
            } ?>
        </div>

        <div class="rowxx">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <div class="box circle" id="bxt2<?= $i ?>" style="top: 450px;"> Child <?= $i ?> of 1</div>

                <?php if ($i > 1) { ?>
                    <script>
                        var distance = getDistance(`bxt2<?= $i - 1 ?>`, `bxt2<?= $i ?>`);
                        console.log(distance)
                        distance = distance + 150;
                        console.warn(distance + 150)
                        document.getElementById(`bxt2<?= $i ?>`).style.left = distance + "px";
                        drawLine('bxt1', `bxt2<?= $i ?>`);
                    </script>
                <?php } else { ?>
                    <script>
                        document.getElementById(`bxt2<?= $i ?>`).style.left = "left: 500px";
                        drawLine('bxt1', `bxt2<?= $i ?>`);
                    </script>

            <?php }
            } ?>
        </div>
        <div class="rowxx">
            <?php for ($i = 1; $i <= 16; $i++) { ?>
                <div class="box circle" id="bxt3<?= $i ?>" style="top: 650px;"> Child <?= $i ?> of 3</div>

                <?php if ($i > 1) { ?>
                    <script>
                        var distance = getDistance(`bxt3<?= $i - 1 ?>`, `bxt3<?= $i ?>`);
                        console.log(distance)
                        distance = distance + 150;
                        console.warn(distance + 150)
                        document.getElementById(`bxt3<?= $i ?>`).style.left = distance + "px";
                        drawLine('bxt3', `bxt3<?= $i ?>`);
                    </script>
                <?php } else { ?>
                    <script>
                        document.getElementById(`bxt3<?= $i ?>`).style.left = "left: 500px";
                        drawLine('bxt3', `bxt3<?= $i ?>`);
                    </script>

            <?php }
            } ?>
        </div>
        <div class="rowxx">
            <?php for ($i = 1; $i <= 30; $i++) { ?>
                <div class="box circle" id="bxt8<?= $i ?>" style="top: 950px;"> Child <?= $i ?> of 8</div>

                <?php if ($i > 1) { ?>
                    <script>
                        var distance = getDistance(`bxt8<?= $i - 1 ?>`, `bxt8<?= $i ?>`);
                        console.log(distance)
                        distance = distance + 150;
                        console.warn(distance + 150)
                        document.getElementById(`bxt8<?= $i ?>`).style.left = distance + "px";
                        drawLine('bxt8', `bxt8<?= $i ?>`);
                    </script>
                <?php } else { ?>
                    <script>
                        document.getElementById(`bxt8<?= $i ?>`).style.left = "left: 500px";
                        drawLine('bxt8', `bxt8<?= $i ?>`);
                    </script>

            <?php }
            } ?>
        </div>

    </div>

</body>

</html>