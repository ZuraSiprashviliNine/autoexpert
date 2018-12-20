<nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-5">
                <a href="#header" class="logo">
                    <img src="http://auto-expert.ge/wp-content/themes/avtopodbor/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-7">
                <ul class="d-lg-none d-flex">
                    <li class="side active">
                        <button class="bars">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div id="sidebar">
                            <div class="d-flex flex-row align-items-center justify-content-end">
                                <button class="sidebar-close">
                                    <span class="fa fa-times"></span>
                                </button>
                            </div>
                            <ul>
                                <?php foreach($navigation as $item): ?>
                                    <li>
                                        <a href="#<?= $item['slag']; ?>">
                                            <?= translate($item['title']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="d-none d-lg-flex">
                    <?php foreach($navigation as $item): ?>
                        <li>
                            <a href="#<?= $item['slag']; ?>">
                                <?= translate($item['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>