<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ArtValue';
?>
<div id="page-wrapper">
    <div id="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <header id="header">
                        <a href="/site" id="logo"><img src="/main/images/artvalue-logo.png"
                                                           alt="artvalue, art, luxe et collection"></a>
                        <div class="page-title">
                            <div class="adv-search">
                                <input type="text" id="adv-search-fld" placeholder="Advanced search &gt;">
                                <button type="button"></button>
                            </div>
                            <h1><a href="home.html">art, luxe et collection</a></h1>
                        </div>
                        <nav id="nav">
                            <ul>
                                <li>
                                    <a href="#" class="has-child">buy &amp; sell</a>
                                    <div class="mega-menu">
                                        <ul>
                                            <li>
                                                <a href="#">upcoming & online auctions</a>
                                                <div>
                                                    <h2>Upcoming & Online Auctions</h2>
                                                    <p>Free and unlimited access to our database:</p>
                                                    <p>- 1,5 million auctions results since 1987</p>
                                                    <p>- 100.000 authors, creators and brands</p>
                                                    <p><img src="/main/images/auctions-results-menu-thumb-1.jpg" alt="">
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">fixed-price listings</a>
                                                <div>
                                                    <h2>Fixed-Price Listings</h2>
                                                    <p>Free and unlimited access to our:</p>
                                                    <p>- 2,5 million auctions results since</p>
                                                    <p>- 200.000 authors, creators and</p>
                                                    <p><img src="/main/images/auctions-results-menu-thumb-2.jpg" alt="">
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">auctions results</a>
                                                <div>
                                                    <h2>Auctions Results</h2>
                                                    <p>Free and unlimited access to:</p>
                                                    <p>- 3,5 million auctions results</p>
                                                    <p>- 300.000 authors, creators</p>
                                                    <p><img src="/main/images/auctions-results-menu-thumb-3.jpg" alt="">
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">how to buy & sell ?</a>
                                                <div>
                                                    <h2>How to Buy & Sell ?</h2>
                                                    <p>Free and unlimited access:</p>
                                                    <p>- 4,5 million auctions</p>
                                                    <p>- 400.000 authors</p>
                                                    <p><img src="/main/images/auctions-results-menu-thumb-4.jpg" alt="">
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">artvaluation</a>
                                                <div>
                                                    <h2>Artvaluation</h2>
                                                    <p>Free and unlimited:</p>
                                                    <p>- 5,5 million</p>
                                                    <p>- 500.000</p>
                                                    <p><img src="/main/images/auctions-results-menu-thumb-5.jpg" alt="">
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" class="has-child">categories</a></li>
                                <li><a href="#" class="has-child">professionnals</a></li>
                                <li><a href="#" class="has-child">about us</a></li>
                                <li class="lang-switcher"><a href="#" class="on">FR</a> <span>|</span> <a
                                        href="#">EN</a></li>
                                <li class="access">
                                    <?php
                                    if (Yii::$app->user->isGuest) {
                                        echo '<a href="#" class="log-in">Log In</a>
                                              <span>|</span>
                                              <a href="#" class="sign-in">SignIn</a>';
                                    } else {
                                        echo '<a href="#" >'.Yii::$app->user->identity->username.'</a>';
                                        echo '<li><a href="#" class="">'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Logout'
                                            )
                                            . Html::endForm()
                                            . '</a></li>';
                                    }
                                    ?>
                                </li>

                            </ul>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-wrapper">
        <link rel="stylesheet" type="text/css" href="/main/assets/css/slider/style.css">

        <div id="wowslider-container1">
            <div class="ws_images">
                <ul>
                    <li><img src="/main/images/slider/slide-1.jpg" alt="Writing"
                             title="Sed ut perspiciatis unde omnisistenat us error sit olata. olatvoluptatem accus antium doloremque laudantium, totam."
                             id="wows1_0">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.<img src="/main/images/slider/slide-button.png"
                                                                          alt=""></li>
                    <li><img src="/main/images/slider/slide-2.jpg" alt="Old Letters"
                             title="Sed ut perspiciatis unde omnisistenat us error sit olata. olatvoluptatem accus antium doloremque laudantium, totam."
                             id="wows1_1">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.<img src="/main/images/slider/slide-button.png"
                                                                          alt=""></li>
                    <li><img src="/main/images/slider/slide-3.jpg" alt="Stack Letters"
                             title="Sed ut perspiciatis unde omnisistenat us error sit olata. olatvoluptatem accus antium doloremque laudantium, totam."
                             id="wows1_2">Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.<img src="/main/images/slider/slide-button.png"
                                                                          alt=""></li>
                </ul>
            </div>
            <div class="ws_bullets">
                <div>
                    <a href="#" title="Writing"><img src="/main/images/slider/slide-1-thumb.jpg" alt="">Bullet 1</a>
                    <a href="#" title="Old Letters"><img src="/main/images/slider/slide-2-thumb.jpg" alt="">Bullet 2</a>
                    <a href="#" title="Stack Letters"><img src="/main/images/slider/slide-3-thumb.jpg" alt="">Bullet
                        3</a>
                </div>
            </div>
            <div class="ws_shadow"></div>
        </div>
    </div>

    <div id="main">
        <div class="container">
            <div class="row main-row">
                <div class="12u">
                    <section class="auctions">
                        <h1>most popular</h1>
                        <div class="category-panel">
                            <ul>
                                <li><a href="#">Category #1</a></li>
                                <li><a href="#">Category #2</a></li>
                                <li><a href="#">Category #3</a></li>
                                <li><a href="#">Category #4</a></li>
                                <li><a href="#">Category #5</a></li>
                                <li><a href="#">Category #6</a></li>
                                <li><a href="#">View all</a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-name">artist / brand</div>
                                <div class="item-title">title of object</div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-category">Category</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price">Price : 10.000 &euro;</div>
                                <div class="item-btn"><a href="#" title="Details &gt;">details <span>&gt;</span></a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="auctions">
                        <h1>upcoming & online auctions</h1>
                        <div class="items">
                            <div class="item">
                                <div class="item-date">Friday <strong>29 April 2016</strong></div>
                                <div class="item-title">title of auction</div>
                                <div class="item-bid bid-now"><a href="#">bid now</a></div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-house">auction house</div>
                                <div class="item-category">Sale Category<br>---</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price lots">XXXXX <span>lots</span></div>
                                <div class="item-btn">
                                    <a href="#" title="Catalog &gt;">catalog <span>&gt;</span></a>
                                    <a href="#" title="Follow +">follow <span>+</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-date">Friday <strong>29 April 2016</strong></div>
                                <div class="item-title">title of auction</div>
                                <div class="item-bid"></div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-house">auction house</div>
                                <div class="item-category">Sale Category<br>---</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price lots">XXXXX <span>lots</span></div>
                                <div class="item-btn">
                                    <a href="#" title="Catalog &gt;">catalog <span>&gt;</span></a>
                                    <a href="#" title="Follow +">follow <span>+</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-date">Friday <strong>29 April 2016</strong></div>
                                <div class="item-title">title of auction</div>
                                <div class="item-bid bid-now"><a href="#">bid now</a></div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-house">auction house</div>
                                <div class="item-category">Sale Category<br>---</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price lots">XXXXX <span>lots</span></div>
                                <div class="item-btn">
                                    <a href="#" title="Catalog &gt;">catalog <span>&gt;</span></a>
                                    <a href="#" title="Follow +">follow <span>+</span></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-date">Friday <strong>29 April 2016</strong></div>
                                <div class="item-title">title of auction</div>
                                <div class="item-bid bid-now"><a href="#">bid now</a></div>
                                <div class="item-thumb"><img src="/main/images/sample-item-thumb.jpg" alt=""></div>
                                <div class="item-house">auction house</div>
                                <div class="item-category">Sale Category<br>---</div>
                                <div class="item-location fr">FRANCE - Paris - 75000</div>
                                <div class="item-price lots">XXXXX <span>lots</span></div>
                                <div class="item-btn">
                                    <a href="#" title="Catalog &gt;">catalog <span>&gt;</span></a>
                                    <a href="#" title="Follow +">follow <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-section">
                        <h1><a href="#" class="view-all">View all &rarr;</a>featured dealers</h1>
                        <div class="items">
                            <div class="item">
                                <div class="item-title">usagi galerie</div>
                                <div class="item-thumb"><img src="/main/images/featured-dealers-img1.jpg" alt=""></div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">galerie du passage</div>
                                <div class="item-thumb"><img src="/main/images/featured-dealers-img2.jpg" alt=""></div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">natalie boldyreff</div>
                                <div class="item-thumb"><img src="/main/images/featured-dealers-img3.jpg" alt=""></div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">photo originale</div>
                                <div class="item-thumb"><img src="/main/images/featured-dealers-img4.jpg" alt=""></div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">photo originale</div>
                                <div class="item-thumb"><img src="/main/images/featured-dealers-img4.jpg" alt=""></div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-section">
                        <h1><a href="#" class="view-all">View all &rarr;</a>featured auctions houses</h1>
                        <div class="items">
                            <div class="item">
                                <div class="item-title">sotheby's</div>
                                <div class="item-thumb"><img src="/main/images/featured-auctions-houses-img1.jpg" alt="">
                                </div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">artcurial</div>
                                <div class="item-thumb"><img src="/main/images/featured-auctions-houses-img2.jpg" alt="">
                                </div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">christie's</div>
                                <div class="item-thumb"><img src="/main/images/featured-auctions-houses-img3.jpg" alt="">
                                </div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">ivoire</div>
                                <div class="item-thumb"><img src="/main/images/featured-auctions-houses-img4.jpg" alt="">
                                </div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">ivoire</div>
                                <div class="item-thumb"><img src="/main/images/featured-auctions-houses-img4.jpg" alt="">
                                </div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                        </div>
                    </section>
                    <section class="featured-section">
                        <h1><a href="#" class="view-all">View all &rarr;</a>featured experts & specialists</h1>
                        <div class="items">
                            <div class="item">
                                <div class="item-title">barbara gladstone</div>
                                <div class="item-thumb"><img src="/main/images/featured-experts-specialists-img1.jpg"
                                                             alt=""></div>
                                <div class="item-category">Spec. : Cubisme,<br>Impressionisme</div>
                                <div class="item-location">Paris - 75000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">david zwirner</div>
                                <div class="item-thumb"><img src="/main/images/featured-experts-specialists-img2.jpg"
                                                             alt=""></div>
                                <div class="item-category">Spec. : Cubisme,<br>Impressionisme</div>
                                <div class="item-location">Lyon - 69000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">arne glimcher</div>
                                <div class="item-thumb"><img src="/main/images/featured-thumb.jpg" alt=""></div>
                                <div class="item-category">Spec. : Cubisme,<br>Impressionisme</div>
                                <div class="item-location">Montpellier - 69000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">paula cooper</div>
                                <div class="item-thumb"><img src="/main/images/featured-experts-specialists-img3.jpg"
                                                             alt=""></div>
                                <div class="item-category">Spec. : Cubisme,<br>Impressionisme</div>
                                <div class="item-location">Lyon - 69000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                            <div class="item">
                                <div class="item-title">paula cooper</div>
                                <div class="item-thumb"><img src="/main/images/featured-experts-specialists-img3.jpg"
                                                             alt=""></div>
                                <div class="item-category">Spec. : Cubisme,<br>Impressionisme</div>
                                <div class="item-location">Lyon - 69000</div>
                                <div class="item-price">FRANCE</div>
                                <div class="item-btn"><a href="#">view profile <span>&gt;</span></a></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <div id="copyright">
                        &copy; 2016 <strong>ArtValue</strong>
                        <a href="#">Terms of Use</a>
                        <a href="#">Privacy</a>
                        <a href="#">Policy</a>
                        <a href="#">Security</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
                <div class="12u footer-content">
                    <p>Tous droits r&eacute;serv&eacute;s &copy; <strong>Artvalue.com</strong></p>
                    <p>Il est interdit de reproduire d'une quelconque fa&ccedil;on ou de modifier tout ou partie de ce
                        site<br>
                        &agrave; quelque fin que ce soit sans une autorisation pr&eacute;alable et explicite de <strong>Artvalue.com</strong>
                    </p>
                    <p><a href="home.html" id="logo"><img src="/main/images/artvalue-logo.png"
                                                          alt="artvalue, art, luxe et collection"></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#top" id="back-top"></a>

<div class="popup-container" id="login-popup">
    <div class="popup">
        <div class="popup-close" id="login-popup-close" title="Close"></div>
        <div class="popup-title">Log in to MyArtValue</div>
        <div class="login-with-social">
            <div class="social-media-btn fb" title="Log in with Facebook">
                <a href="/site/auth?authclient=facebook">Log in with Facebook</a>
            </div>
            <div class="social-media-btn tw" title="Log in with Twitter">
                <a href="#">Log in with Twitter</a>
            </div>
        </div>
        <div class="popup-prompt">Already have an account? Please log in <a href="#">here</a>:</div>
        <!--        <div class="popup-login-fields">-->
        <!--            <div>-->
        <!--                <input type="email" placeholder="Email">-->
        <!--                <input type="checkbox" id="remember-me" checked>-->
        <!--                <label for="remember-me">-->
        <!--                    <i class="checkbox-remember-me"></i>Remember me-->
        <!--                </label>-->
        <!--            </div>-->
        <!--            <div>-->
        <!--                <input type="password" placeholder="Password">-->
        <!--                <a href="#" class="forgot-password">Forgot Password?</a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <a href="#" class="popup-btn white-btn">Log In</a>-->
        <!--        <input type="button" class="popup-btn white-btn" value="Log In">-->
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="popup-login-fields">
                <div>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => "Username"])->label(false) ?>
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">
                        <i class="checkbox-remember-me"></i>Remember me
                    </label>
                </div>
                <div>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => "Password"])->label(false) ?>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <?php
                //                $form->field($model, 'rememberMe')->checkbox()
                ?>
            </div>
            <?= Html::submitButton('Log In', ['class' => 'popup-btn white-btn', 'name' => 'login-button']) ?>
        <?php ActiveForm::end(); ?>

        <div class="popup-separator"></div>
        <a href="#" id="sign_up" class="popup-btn gray-btn">Sign Up</a>
    </div>
</div>

<div class="popup-container" id="signin-popup">
    <div class="popup">
        
<!--        <div class="popup-close" id="signin-popup-close" title="Close"></div>-->
<!--        <div class="popup-title">Sign up to MyArtValue</div>-->
<!--        <div class="popup-subtitle">Are you a professional?<a href="#">Apply Here &gt;</a></div>-->
<!--        <div class="login-with-social">-->
<!--            <div class="social-media-btn fb">-->
<!--                <a href="#">Log in with Facebook</a>-->
<!--            </div>-->
<!--            <div class="social-media-btn tw">-->
<!--                <a href="#">Log in with Twitter</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup-prompt">Please enter your name, email and password:</div>-->
<!--        <div class="popup-login-fields">-->
<!--            <div>-->
<!--                <input type="text" placeholder="First Name">-->
<!--            </div>-->
<!--            <div>-->
<!--                <input type="text" placeholder="Last Name">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup-login-fields">-->
<!--            <div>-->
<!--                <input type="email" placeholder="Email">-->
<!--            </div>-->
<!--            <div>-->
<!--                <input type="password" placeholder="Password">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup-login-fields">-->
<!--            <div class="agreement-section">-->
<!--                <input type="checkbox" id="terms-agreement" checked>-->
<!--                <label for="terms-agreement">-->
<!--                    <i class="checkbox-terms-agreement"></i>By signing up, you agree to our <a href="#">Terms of Use</a>-->
<!--                    and <a href="#">Privacy Policy</a>.-->
<!--                </label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="popup-separator"></div>-->
<!--        <a href="#" class="popup-btn gray-btn">Sign Up</a>-->











        <?php $form = ActiveForm::begin(['id' => 'form-signup',
                                         ]); ?>
                <div class="popup-close" id="signin-popup-close" title="Close"></div>
                <div class="popup-title">Sign up to MyArtValue</div>
                <div class="popup-subtitle">Are you a professional?<a href="#">Apply Here &gt;</a></div>
                <div class="login-with-social">
                    <div class="social-media-btn fb">
                        <a href="#">Log in with Facebook</a>
                    </div>
                    <div class="social-media-btn tw">
                        <a href="#">Log in with Twitter</a>
                    </div>
                </div>
                <div class="popup-prompt">Please enter your name, email and password:</div>
                <div class="popup-login-fields">
                    <div>
<!--                        <input type="text" placeholder="First Name">-->
                        <?= $form->field($model_signup, 'username')->textInput(['autofocus' => true,'placeholder' => "First Name"])->label(false) ?>
                    </div>
                    <div>
<!--                        <input type="text" placeholder="Last Name">-->
                        <?= $form->field($model_signup, 'last_name')->textInput(['autofocus' => true,'placeholder' => "Last Name"])->label(false) ?>

                    </div>
                </div>
                <div class="popup-login-fields">
                    <div>
<!--                        <input type="email" placeholder="Email">-->
                        <?= $form->field($model_signup, 'email')->textInput(['placeholder' => "Email"])->label(false) ?>
                    </div>
                    <div>
<!--                        <input type="password" placeholder="Password">-->
                        <?= $form->field($model_signup, 'password')->passwordInput(['placeholder' => "Password"])->label(false) ?>
                    </div>
                </div>
                <div class="popup-login-fields">
                    <div class="agreement-section">
                        <input type="checkbox" id="terms-agreement" checked>
                        <label for="terms-agreement">
                            <i class="checkbox-terms-agreement"></i>By signing up, you agree to our <a href="#">Terms of Use</a>
                            and <a href="#">Privacy Policy</a>.
                        </label>
                    </div>
                </div>
                <div class="popup-separator"></div>
<!--                <a href="#" class="popup-btn gray-btn">Sign Up</a>-->
                <?= Html::submitButton('Sign Up', ['class' => 'popup-btn gray-btn', 'name' => 'signup-button']) ?>
        <?php ActiveForm::end(); ?>
        
    </div>
</div>