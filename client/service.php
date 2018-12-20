<section class="service" id="service"  data-aos="fade-in" data-aos-once="true">
    <div class="service-parallax"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 service-title">
                <h2>
                    <?= translate($sections['info']->services->title); ?>
                </h2>
                <?php if($sections['info']->services->description): ?>
                    <div class="section-description">
                        <?= translate($sections['info']->services->description); ?> 
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="row service-content lg">
            <?php foreach($services as $service): ?>
            <div class="col-md-4">
                <div class="col-item">
                    <div class="service-num">
                        <div class="service-num-item">
                            <?= valute($service['price'], false); ?>
                        </div>
                    </div>
                    <div class="service-bottom">
                        <div class="service-info">
                            <div class="service-description">
                                <?= translate($service['title']); ?>
                            </div>
                            <div class="service-addon">
                                <?= translate($service['text']); ?>
                            </div>
                        </div>
                        <div class="service-price">
                            <?= valute($service['price'], true); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="row service-content sm">
            <div class="col-12">
                <div class="swiper-container service-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($services as $service): ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-item">
                                <div class="service-num">
                                    <div class="service-num-item">
                                        <?= valute($service['price'], false); ?>
                                    </div>
                                </div>
                                <div class="service-bottom">
                                    <div class="service-info">
                                        <div class="service-description">
                                            <?= translate($service['title']);?>
                                        </div>
                                        <div class="service-addon">
                                            <?= translate($service['text']); ?>
                                        </div>
                                    </div>
                                    <div class="service-price">
                                        <?= valute($service['price'], true); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination service-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>