<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 2018-09-20
 * Time: 6:39 PM
 */

?>

<!DOCTYPE html>

<html>
<head>
    <title>Invoice</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    global $head;
    echo $head;
    ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>/style.css">
</head>

<?php

global $body_class;
$body_class = is_array( $body_class ) ? $body_class : [];
$body_class[] = 'body';

?>

<body id="body" class="<?= implode( " ", array_filter( $body_class ) ); ?>">

<div class="header"></div>
<div class="main">

