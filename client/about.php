<section class="about" id="about" data-aos="fade-in" data-aos-once="true">
    <div class="container about-container">
        <div class="bg-addon"></div>
        <div class="row">
            <div class="col-12">
                <div class="col-item">
                    <div class="about-info">
                        <h2 class="about-title">
                            <?= translate($about['info']['title']); ?>
                        </h2>
                        <div class="about-description">
                            <?= translate($about['info']['description']);?>
                        </div>
                    </div>
                    <div class="about-suggestions suggestion">
                        <div class="suggestion-title">
                            <?= translate($about['info']['motto']); ?>
                        </div>
                        <ul class="suggestion-list">
                            <?php foreach($about['items'] as $ab): ?>
                            <li>
                                <div class="suggestion-icon">
                                    <span class="fa fa-check"></span>
                                </div>
                                <div class="suggestion-text">
                                    <?= translate($ab['text']); ?>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>