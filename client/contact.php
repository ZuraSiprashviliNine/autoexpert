<section class="contact" id="contact"  data-aos="fade-in" data-aos-once="true">
    <div class="container">
        <div class="row">
            <div class="col-12 contact-title">
                <div class="col-item">
                    <h2>
                        <?= translate($sections['info']->contact->title); ?>
                    </h2>
                    <?php if($sections['info']->contact->description): ?>
                        <div class="section-description">
                            <?= translate($sections['info']->contact->description); ?> 
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-12 col-simple contact-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-10 offset-1">
                            <div class="container-fluid">
                                <form action="#" class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="contact-input-wrap name">
                                            <input type="text" class="contact-input" placeholder="Name">
                                        </div>
                                        <div class="contact-input-wrap email">
                                            <input type="text" class="contact-input" placeholder="Email Or Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="contact-input-wrap message">
                                            <textarea placeholder="Message" class="contact-input-message contact-input"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-input-wrap button">
                                            <button class="contact-input-submit" type="submit">
                                                send
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>