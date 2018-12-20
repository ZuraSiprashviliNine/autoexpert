<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= 'Admin Panel' ?></title>

    <link rel="stylesheet" href="/static/bootstrap.css">
    <link rel="stylesheet" href="/static/animate.min.css">
    <link rel="stylesheet" href="/static/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/swiper.min.css">
    <link rel="stylesheet" href="/static/aos.css">
    <link rel="stylesheet" href="/static/style.css">
    <link rel="stylesheet" href="/static/admin.css">

    <script src="/static/jquery.min.js"></script>
    <script src="/static/swiper.min.js"></script>
    <script src="/static/aos.js"></script>
    <script src="/static/script.js"></script>
</head>
<body class="animated" style="opacity:0 " id="admin">
        
    <div class="page" id="login">
        <div class="something_useful">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-4">
                    <form action="/admin" method="post">
                        <div class="form-text">
                            <h1>
                                <?= translate('please fill the form'); ?>
                            </h1>
                        </div>
                        <div class="form-item">
                            <label for="user_name">
                                <?= translate('user name'); ?>
                            </label>
                            <input type="text" class="form-input" placeholder="<?= translate('user name'); ?>" name="login-user-name">
                        </div>
                        <div class="form-item">
                            <label for="password">
                                <?= translate('password'); ?>
                            </label>
                            <input type="password" placeholder="*********" name="login-user-password" class="form-input" palaceholder="<?= translate('password');?>">
                        </div>
                        <div class="form-buttons">
                            <div class="form-button-item">
                                <button class="form-button" type="reset">
                                    <?= translate('reset'); ?>
                                </button>
                            </div>
                            <div class="form-button-item">
                                <button class="form-button" type="submit" name="login-submit">
                                    <?= translate('submit'); ?>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>