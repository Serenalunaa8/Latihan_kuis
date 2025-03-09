<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Season</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    $tangkapbulan = $_POST['bulan'];

    if ($tangkapbulan == "Desember" || $tangkapbulan == "January" || $tangkapbulan == "February") {
        ?>
        <body style="background-color: blanchedalmond;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card" style="width: 35rem; background-color:#eaca9c;">
                    <div class="d-flex align-items-center">
                        <img src="winter.png" class="rounded float-start" alt="..." style="width: 50%; height: auto; padding: 15px; float: left;">
                        <div class="right" style="padding: 15px;">
                            <div class="title" style="font-size: 31px;">It's <span style="color: rgb(39, 125, 125);"><b>Winter</b></span> Time!</div>
                            <div class="subtitle" style="color: rgba(151, 145, 145, 0.982); font-size: small;"><i>December - February</i></div>
                            <div style="font-size: small;">
                                <p>Winter serves as a time for reflection and introspection, where the silence of snow offers us a chance to contemplate the warmth within our hearts.</p>
                            </div>
                            <button type="button" class="btn btn-info" style="font-size: smaller; padding: 5px 10px;">
                                <a href="season.html"><div style="color: black">Back to Menu</div></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <?php
    } else if ($tangkapbulan == "June" || $tangkapbulan == "July" || $tangkapbulan == "August") {
        ?>
        <body style="background-color: blanchedalmond;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card" style="width: 35rem; background-color:#eaca9c;">
                    <div class="d-flex align-items-center">
                        <img src="summer.png" class="rounded float-start" alt="..." style="width: 50%; height: auto; padding: 15px; float: left;">
                        <div class="right" style="padding: 15px;">
                            <div class="title" style="font-size: 31px;">It's <span style="color: blue;"><b>Summer</b></span> Time!</div>
                            <div class="subtitle" style="color: rgba(151, 145, 145, 0.982); font-size: small;"><i>June - August</i></div>
                            <div style="font -size: small;">
                                <p>Summer marks a time of energy and freedom, where the shining sun encourages us to celebrate life and our presence in this world.</p>
                            </div>
                            <button type="button" class="btn btn-primary" style="font-size: smaller; padding: 5px 10px;">
                                <a href="season.html"><div style="color: white">Back to Menu</div></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <?php
    } else if ($tangkapbulan == "September" || $tangkapbulan == "October" || $tangkapbulan == "November") {
        ?>
        <body style="background-color: blanchedalmond;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card" style="width: 35rem; background-color:#eaca9c;">
                    <div class="d-flex align-items-center">
                        <img src="autumn.png" class="rounded float-start" alt="..." style="width: 50%; height: auto; padding: 15px; float: left;">
                        <div class="right" style="padding: 15px;">
                            <div class="title" style="font-size: 31px;">It's <span style="color:rgb(255, 176, 7);"><b>Autumn</b></span> Time!</div>
                            <div class="subtitle" style="color: rgba(151, 145, 145, 0.982); font-size: small;"><i>September - November</i></div>
                            <div style="font-size: small;">
                                <p>Autumn invites us to reflect on the cycles of life, as the falling leaves teach us the art of letting go and embracing change.</p>
                            </div>
                            <button type="button" class="btn btn-warning" style="font-size: smaller; padding: 5px 10px;">
                                <a href="season.html"><div style="color: black">Back to Menu</div></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <?php
    } else if ($tangkapbulan == "March" || $tangkapbulan == "April" || $tangkapbulan == "May") {
        ?>
        <body style="background-color: blanchedalmond;">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card" style="width: 35rem; background-color:#eaca9c;">
                    <div class="d-flex align-items-center">
                        <img src="winter.png" class="rounded float-start" alt="..." style="width: 50%; height: auto; padding: 15px; float: left;">
                        <div class="right" style="padding: 15px;">
                            <div class="title" style="font-size: 31px;">It's <span style="color: green;"><b>Spring</b></span> Time!</div>
                            <div class="subtitle" style="color: rgba(151, 145, 145, 0.982); font-size: small;"><i>March - May</i></div>
                            <div style="font-size: small;">
                                <p>Spring symbolizes hope and renewal, reminding us that life always finds a way to return with each blooming flower.</p>
                            </div>
                            <button type="button" class="btn btn-success" style="font-size: smaller; padding: 5px 10px;">
                                <a href="season.html"><div style="color: white">Back to Menu</div></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
