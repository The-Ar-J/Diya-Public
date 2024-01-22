<!doctype html>
<html lang="en">
  <head>
    <?php global $server, $title, $description; ?>
    <!-- tailwind css path -->
    <?php $css = $server . "../assets/styles/output.css"; ?>

    <!-- assets path -->
    <?php
        $brand = $server . "../assets/imgs/brand/diyaSVG/diya-black-logo.svg";
    ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?= $css ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Bootstrap CSS start -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS end -->
  </head>
  <body>