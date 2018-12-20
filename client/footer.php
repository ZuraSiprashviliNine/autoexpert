<footer >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 order-1">
                <div class="col-item copy">
                    <?= $common->site->copy; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 order-lg-2 order-3">
                <div class="col-item social-networks">
                    <?php foreach($socials['items'] as $social): ?>
                        <div class="social-networks-item-wrap">
                            <a href="<?= $social->link;?>" target="_blank" class="social-networks-item">
                                <span class="fa fa-<?=$social->icon;?> <?= $social->name;?>">
                                </span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-lg-3 order-2">
                <div class="col-item contact">
                    <span class="phone">
                        <?= $common->site->phone; ?>
                    </span>
                    <span class="email">
                        <?= $common->site->email; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>