<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $common->site->title; ?></title>

    <link rel="stylesheet" href="/static/bootstrap.css">
    <link rel="stylesheet" href="/static/animate.min.css">
    <link rel="stylesheet" href="/static/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/swiper.min.css">
    <link rel="stylesheet" href="/static/aos.css">
    <link rel="stylesheet" href="/static/style.css">

    <script src="/static/jquery.min.js"></script>
    <script src="/static/swiper.min.js"></script>
    <script src="/static/aos.js"></script>
    <script src="/static/script.js"></script>
</head>
<body class="animated" style="opacity:0 ">
    <?php require_once('client/navbar.php');?>

    <?php require_once('client/header.php'); ?>

    <?php if(in_array('wwc', $sections['available'])): ?>

        <?php require_once('client/wwc.php'); ?>
    
    <?php endif;?>
    
    <?php if(in_array('about',$sections['available'])): ?>
    
        <?php require_once('client/about.php');?>
    
    <?php endif;?>

    <?php if(in_array('video',$sections['available'])): ?>
        <?php require_once('client/video.php'); ?>
    <?php endif;?>

    <?php if(in_array('services',$sections['available'])): ?>

        <?php require_once('client/service.php'); ?>

    <?php endif;?>

    <?php if(in_array('wsd',$sections['available'])): ?>
    
        <?php require_once('client/wsd.php'); ?>

    <?php endif;?>

    <?php if(in_array('contact',$sections['available'])): ?>

        <?php require_once('client/contact.php'); ?>

    <?php endif;?>
    
    <?php require_once('client/footer.php'); ?>
</body>
</html>