<?php
$doc = "Home";
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $search = htmlspecialchars($_GET['q']);
}
?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H9Z681C9TH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H9Z681C9TH');
    </script>
    <meta charset="utf-8">
    <link rel="manifest" href="/manifest.json">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hello, we are MechNoSense, an FTC robotics team located in Benton County. We work on teaching robotics, business, and programming skills.">
    <meta name="keywords" content="MechNoSense mechnosense robots robotics robot">
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/favicon.min.png">
    <script src="https://ajax.GOOGLEAPIS.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css" />
    <title>Search results for <?php ?> &#8211; MechNoSense</title>
</head>

<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <?php include 'C:\wamp64\www\MechNoSense\navbar.php'; ?>
        <div class="jumbotron text-center">
            <h1 id="title123">
                Search
            </h1>
            <hr />
            <?php include 'C:\wamp64\www\MechNoSense\names.php'; ?>
        </div>
        <form class="d-flex" action="/search" method="GET">
            <input class="form-control me-2" name="q" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
            <button class="btn btn-outline-success" type="submit">Go</button>
        </form>
        <h3>
            Results for <?php if (isset($_GET['q']) && !empty($_GET['q'])) echo $search; ?>:
        </h3>
    </div>
    <?php include 'C:\wamp64\www\MechNoSense\footer.php'; ?>
</body>

</html>