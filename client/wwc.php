<section class="check" id="check"  data-aos="fade-in" data-aos-once="true">
    <div class="container">
        <div class="row">
            <div class="col-12 check-title">
                <h2>
                    <?= translate($sections['info']->wwc->title); ?>
                </h2>
                <?php if($sections['info']->wwc->description): ?>
                    <div class="section-description">
                        <?= translate($sections['info']->wwc->description); ?> 
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="row check-content">
            <div class="col-12">
                <div class="col-item">
                    <div class="col-row">
                    <?php for($i = 0; $i < 6; $i++): ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?= $check_visual[$i]['icon'];?>" alt="">
                            </div>
                            <div class="item-text">
                                <?= translate($check_visual[$i]['title']);?>
                            </div>
                            <div class="pop">
                                <div class="tri">
                                    <span>
                                        <?=translate($check_visual[$i]['info']); ?>
                                    </span>
                                    <div class="t"></div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                    </div>

                    <div class="col-row">
                    <?php for($i = 6; $i < 8; $i++): ?>
                        <div class="item">
                            <div class="item-icon">
                                <img src="<?= $check_visual[$i]['icon'];?>" alt="">
                            </div>
                            <div class="item-text">
                                <?= translate($check_visual[$i]['title']);?>
                            </div>
                            <div class="pop">
                                <div class="tri">
                                    <span>
                                        <?=translate($check_visual[$i]['info']); ?>
                                    </span>
                                    <div class="t"></div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                    </div>   

                    
                    <div class="col-row">
                        <?php for($i = 8; $i < 14; $i++): ?>
                            <div class="item">
                                <div class="item-icon">
                                    <img src="<?= $check_visual[$i]['icon'];?>" alt="">
                                </div>
                                <div class="item-text">
                                    <?= translate($check_visual[$i]['title']);?>
                                </div>
                                <div class="pop">
                                    <div class="tri">
                                        <span>
                                            <?=translate($check_visual[$i]['info']); ?>
                                        </span>
                                        <div class="t"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>