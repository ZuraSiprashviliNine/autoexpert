<header id="header" class="header" data-aos="fade-in" data-aos-once="true">
    <div class="cover"></div>
    <div class="container header-container">
        <div class="clip">
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="col-item left">
                    <div class="header-title">
                        <h2>
                            შეავსე განაცხადი
                        </h2>
                    </div>
                    <div class="header-content">
                        <form action="#">
                            <div class="header-content-title">
                                ჩვენ დაგეხმარებით თქვენთვის საუკეთესო ავტომობილის შერჩევაში
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 col-md-6">
                <div class="col-item right">
                    <div class="right-wrap">
                        <div class="right-title">
                            <h2>
                                <?= translate('what we check');?>
                            </h2>
                        </div>
                        <div class="right-content">
                            <ul>
                                <?php foreach($checks as $check): ?>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <?= translate($check['title']);?>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>