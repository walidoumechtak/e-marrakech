<?php include "functions.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="themes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="themes/css/all.min.css">
    <?php if(isset($includeIndexCss)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/index.css">
    <?php } ?>
    <?php if(isset($includeLoginCss)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/login.css">
    <?php } ?>
    <?php if(isset($includeForgetCss)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/forget.css">
    <?php } ?>
    <?php if(isset($includeregistreCss)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/register.css">
    <?php } ?>
    <?php if(isset($includeBooks)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/books.css">
    <?php } ?>
    <?php if(isset($includeNav)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/nav.css">
    <?php } ?>
    <?php if(isset($includeAbout)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/about.css">
    <?php } ?>
    <?php if(isset($includeBlog)){?>
      <link rel="stylesheet" type="text/css" href="themes/css/blog.css">
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="themes/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="themes/css/owl.theme.default.min.css">
    <title><?php gettitle(); ?></title>
</head>
<body>
    