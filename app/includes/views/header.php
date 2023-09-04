<?php
    ob_start();
    $siteName = $arguments['siteName'];
?>

<doctype html>
    <html>

    <head>
        <title>
            <?= $siteName; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vendor/fortawesome/font-awesome/css/all.min.css" rel="stylesheet">

<?php
    $template = ob_get_contents();
    ob_end_clean();