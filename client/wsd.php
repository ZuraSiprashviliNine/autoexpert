<section class="work" id="work"  data-aos="fade-in" data-aos-once="true">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 work-title">
                            <h2>
                                <?= translate($sections['info']->wsd->title); ?>
                            </h2>
                            <?php if($sections['info']->wsd->description): ?>
                                <div class="section-description">
                                    <?= translate($sections['info']->wsd->description); ?> 
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="row work-content lg">
                        <?php foreach($resellers as $reseller): ?> 
                        <div class="col-md-6">
                            <div class="col-item">
                                <div class="work-icon">
                                    <img src="<?= $reseller['image']; ?>" alt="">
                                </div>
                                <div class="work-text">
                                    <div class="work-text-wrap">
                                        <div class="work-text-title">
                                            <b>
                                                <?= translate($reseller['title']); ?>
                                            </b>
                                        </div>
                                        <div class="work-text-description">
                                            <p>
                                                <?= translate($reseller['text']); ?>
                                            </p>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row work-content sm">
                        <div class="col-12">
                            <div class="swiper-container work-swiper">
                                <div class="swiper-wrapper">
                                <?php foreach($resellers as $reseller): ?> 
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-item">
                                            <div class="work-icon">
                                                <img src="<?= $reseller['image']; ?>" alt="">
                                            </div>
                                            <div class="work-text">
                                                <div class="work-text-wrap">
                                                    <div class="work-text-title">
                                                        <b>
                                                            <?= translate($reseller['title']);?>
                                                        </b>
                                                    </div>
                                                    <div class="work-text-description">
                                                        <p>
                                                            <?= translate($reseller['text']); ?>
                                                        </p>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination work-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>