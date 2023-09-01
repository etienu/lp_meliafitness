<?php
/*---------------------------------------------------------
    front-page.php
    トップページ
-----------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="ja">

<?php get_template_part(GET_PATH_R('template').'layout/combo/lc-wp-header')?>

<body>

  <?php /* header bar */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-headerbar' ); ?>
  <?php /* 一番上に戻る */ ?>
  <?php //get_template_part(GET_PATH_R('template').'object/project/p-js-gototop' ); ?>
  <?php /* ローディング */ ?>
  <?php //get_template_part(GET_PATH_R('template').'layout/l-loader' ); ?>

<main>
<?php /* ヒーローセクション */ ?>
<section class="l-section p-hero">
    <div class="p-hero__inner">
        <div class="p-hero__background"></div>
        <div class="p-hero__content">
            <div class="background"></div>
            <div class="p-hero__textwrapper">
                <div class="lead"><span>You can meet</span><br>the best wedding planner.</div>
                <div class="border"></div>
                <h2 class="headline"><span class="accent">誰</span><span class="top">と作るか</span><br><span class="middle">から</span><br><span class="bottom">始める結婚式</span><h2>
                <div class="border"></div>
                <div class="p-hero__logo-wrapper">
                    <a href="<?php echo esc_url(home_url()); ?>">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/common/logo.png">
                        <img src="<?php echo GET_PATH()?>/common/logo.png" alt="Best Planner" width="258" height="187">
                    </picture>
                    </a>
                    <!--
                    <div class="logo"><a href="<?php echo esc_url(home_url()); ?>"><h1><?php echo get_bloginfo('name');?></h1></a></div>
-->
                </div>
            </div>
        </div>
    </div>
    <div class="p-hero__buttonwrapper">
            <button class="button plan">
                <div class="text">
                    <p>おすすめの</p><p><span><b>プラン</b>から</span></p><p>プランナーを探す</p>
                </div>
            </button>
            <button class="button area">
                <div class="text">
                    <p>希望の</p><p><span><b>エリア</b>から</span></p><p>プランナーを探す</p>
                </div>
            </button>
        </div>
</section>

<?php /* RecentPlanner and Reports - 最近見たレポートとプランナー */ ?>
<section class="l-section u-color-bg__sky">
    <div class="p-recent__inner">
        <h2 class="c-headline__h2 p-headline__h2">Recent Planner and Reports<span>最近見たレポートとプランナー</span></h2>
        <div class="p-recent__planner__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">Planner<span>プランナー</span></h3>
            <div class="splide" id="splide__planner" role="group" aria-label="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide p-recent__planner__griditem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'recent','index' => 2 ] ); ?>
                        </li>
                        <li class="splide__slide p-recent__planner__griditem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'recent','index' => 1 ] ); ?>
                        </li>
                        <li class="splide__slide p-recent__planner__griditem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'recent','index' => 0 ] ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-recent__report__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">Report<span>レポート</span></h3>
            <div class="splide" id="splide__report" role="group" aria-label="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 3 ] ); ?>
                        </li>
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 2 ] ); ?>
                        </li>
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 1 ] ); ?>
                        </li>
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 0 ] ); ?>
                        </li>
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 3 ] ); ?>
                        </li>
                        <li class="splide__slide reportitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'recent','index' => 2 ] ); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /* Whats Best Planner - ベストプランナーとは */ ?>
<section class="l-section">
    <div class="p-whats__inner">
        <div class="p-whats__background"></div>
        <h2 class="c-headline__h2 p-headline__h2">What’s Best Planner ?<span>ベストプランナーとは</span></h2>
        <div class="p-whats__catchcopy">
            <span>結</span>婚式を創るのはヒト。<br>
            ふたりの理想の結婚式を<br class="u-display__sp">一緒に創ってくれる<br>
            ヒトから探しませんか。<br>
        </div>
        <div class="p-whats__lead">
            <div class="background"></div>
            <p class="no01">ふたりの理想を叶えてくれるプランナーを<br>
            自分達の目で見てお願いしたい。<br>
            海外では当たり前のことが、<br class="u-display__sp">日本では式場からが基本になっています。</p>
            <p class="no02">ふたりの希望に寄り添い、<br class="u-display__sp">しっかり受け止めて、<br>
            親身に叶えようとしてくれる<br class="u-display__sp">プランナーがいます。</p>
            <p class="no03">そして、<br>
            「自分たちにとって最高の結婚式だった！」<br>
            「この方にお願いして本当に良かった！」<br>
            こんな声を増やしていきたいと思っています。</p>
        </div>
        <div class="p-whats__cv">
            <div class="call">初めてご利用される方へ</div>
            <a href="" class="btn p-button blue cv hover__reverse">ベストプランナーの使い方をみる</a>
        </div>
        <div class="p-whats__slide">
            <div class="splide" id="splide__whats" role="group" aria-label="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner01.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner01.png" alt="planner01" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner02.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner02.png" alt="planner02" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner03.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner03.png" alt="planner03" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner04.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner04.png" alt="planner04" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner05.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner05.png" alt="planner05" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner01.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner01.png" alt="planner01" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner02.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner02.png" alt="planner02" width="235" height="235">
                            </picture>
                        </li>
                        <li class="splide__slide whatsitem">
                            <picture>
                                <source srcset="<?php echo GET_PATH()?>/planner/planner03.png">
                                <img src="<?php echo GET_PATH()?>/planner/planner03.png" alt="planner03" width="235" height="235">
                            </picture>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /* Reccomend Plan | おすすめのプランからプランナーを探す */ ?>
<section class="l-section">
    <div class="p-reccomend__inner plan sectionpaper">
        <h2 class="c-headline__h2 p-headline__h2">Reccomend Plan<span>おすすめのプランから<div class="u-display__inline-block u-hidden__sp">プランナーを</div>探す</span></h2>
        <div class="p-reccomend-items__wrapper">
            <div class="item no01">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-reccomendplan', null, ['index' => 0 ] ); ?>
            </div>
            <div class="item no02">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-reccomendplan', null, ['index' => 1 ] ); ?>
            </div>
            <div class="item no03">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-reccomendplan', null, ['index' => 2 ] ); ?>
            </div>
            <div class="item no04">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-reccomendplan', null, ['index' => 3 ] ); ?>
            </div>
            <div class="item no05">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-reccomendplan', null, ['index' => 4 ] ); ?>
            </div>
        </div>
    </div>
</section>

<?php /* Populer Reports | 人気のウェディングレポート */ ?>
<section class="l-section">
    <div class="p-reports__inner">
        <h2 class="c-headline__h2 p-headline__h2">Populer Reports<span>人気のウェディングレポート</span></h2>
        <?php /* Ranking | 人気レポートランキング PC */ ?>
        <div class="p-reports__ranking__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">Ranking<span>人気レポートランキング</span></h3>
            <div class="item__wrapper u-hidden__sp">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 32, 'rank' => 1 ] ); ?>
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 46, 'rank' => 2 ] ); ?>
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 50, 'rank' => 3 ] ); ?>
            </div>
            <?php /* Ranking | 人気レポートランキング SP */ ?>
            <div class="splide u-hidden__tab-pc" id="splide__reports__ranking__sp" role="group" aria-label="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 32, 'rank' => 1 ] ); ?>
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 46, 'rank' => 2 ] ); ?>
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'populer_ranking','postid' => 50, 'rank' => 3 ] ); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="" class="p-button gray arrow hover__reverse">人気レポートランキングを<br class="u-hidden__tab-pc">もっとみる</a>
        </div>

        <?php /* Reports By Plan | プラン別人気レポート */ ?>
        <div class="p-reports__plan__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">Reports By Plan<span>プラン別人気レポート</span></h3>
            <div class="item__wrapper">
                <ul>
                    <li>
                        <h4 class="c-headline__h4 no01 perple">国内挙式・披露宴</h4>
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'plan_ranking','plan'=>'pct_domestic_wedding_and_reception', 'rank' => 1 ] ); ?>
                    </li>
                    <li>
                        <h4 class="c-headline__h4 no02 orange">フォトウェディング</h4>
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'plan_ranking','plan'=>'pct_photo_wedding', 'rank' => 1 ] ); ?>
                    </li>
                    <li>
                        <h4 class="c-headline__h4 no03 green">リゾート・アウトドア・<br>ビーチウェディング</h4>
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'plan_ranking','plan'=>'pct_domestic_wedding_and_reception', 'rank' => 1 ] ); ?>
                    </li>
                </ul>
                <div class="p-reports__populer-button__wrapper">
                    <a href="" class="p-button gray arrow hover__reverse">プラン別人気レポートをもっとみる</a>
                </div>
            </div>
        </div>
        <?php /* New Reports | 新着のレポート */ ?>
        <div class="p-reports__new__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">New Reports<span>新着レポート</span></h3>
            <div class="splide item__wrapper" id="splide__reports__new" role="group" aria-label="carousel-heading">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide newitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'new', 'mostrecent' => 0 ] ); ?>
                        </li>
                        <li class="splide__slide newitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'new', 'mostrecent' => 1 ] ); ?>
                        </li>
                        <li class="splide__slide newitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'new', 'mostrecent' => 2 ] ); ?>
                        </li>
                        <li class="splide__slide newitem">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-report', null, ['type' => 'new', 'mostrecent' => 3 ] ); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-reports__new-button__wrapper">
                <a href="" class="p-button gray arrow hover__reverse">新着レポートをもっとみる</a>
            </div>
        </div>
    </div>
</section>

<?php /* Reccomend Planner | 人気のウェディングプランナー */ ?>
<section class="l-section">
    <div class="p-reccomend__inner planner">
        <h2 class="c-headline__h2 p-headline__h2">Reccomend Planner<span>人気のウェディングプランナー</span></h2>
        <?php /* Ranking | 人気プランナーランキング */ ?>
        <div class="p-reccomend-ranking__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">Ranking<span>人気プランナーランキング</span></h3>
            <div class="item__wrapper u-hidden__sp">
                <ul class="itemlist">
                    <li class="item">
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 25, 'rank' => 1 ] ); ?>
                    </li>
                    <li>
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 26, 'rank' => 2 ] ); ?>
                    </li>
                    <li>
                        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 60, 'rank' => 3 ] ); ?>
                    </li>
                </ul>
            </div>
            <?php // SP ?>
            <div class="splide u-hidden__tab-pc" id="splide__reccomend__ranking" role="group" aria-label="carousel-heading">
                <div class="item__wrapper">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 25, 'rank' => 1 ] ); ?>
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 26, 'rank' => 2 ] ); ?>
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_ranking','postid' => 60, 'rank' => 3 ] ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php /* New in | 新着プランナー */ ?>
        <div class="p-reccomend-new__wrapper">
            <h3 class="c-headline__h3 p-headline__h3">New in<span>新着プランナー</span></h3>
            <div class="splide" id="splide__reccomend__new" role="group" aria-label="carousel-heading">
                <div class=" item__wrapper">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide newitem">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_new','postid' => 25] ); ?>
                            </li>
                            <li class="splide__slide newitem">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_new','postid' => 26 ] ); ?>
                            </li>
                            <li class="splide__slide newitem">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_new','postid' => 60 ] ); ?>
                            </li>
                            <li class="splide__slide newitem">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reccomend_new','postid' => 48 ] ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php /* プランナー一覧へボタン */ ?>
        <div class="p-reccomend__button__wrapper">
            <a href="" class="p-button gray arrow hover__reverse">プランナー一覧へ</a>
        </div>
    </div>

</section>

<?php /* Pick up Tags | キーワードからプランナーを探す */ ?>
<section class="l-section">
    <div class="p-pickup-tag__wrapper">
        <h2 class="c-headline__h2 p-headline__h2">Pick up Tags<span>キーワードからプランナーを探す</span></h2>
        <div class="item__wrapper">
            <ul>
                <li class="no01">
                    <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-pickuptags', null, ['type' => 'pickup','slug' => 'from_location' ] ); ?>
                </li>
                <li>
                    <div class="separate"></div>
                </li>
                <li class="no02">
                    <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-pickuptags', null, ['type' => 'pickup','slug' => 'from_the_particulars' ] ); ?>
                </li>
                <li>
                    <div class="separate"></div>
                </li>
                <li class="no03">
                    <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-pickuptags', null, ['type' => 'pickup','slug' => 'from_the_format' ] ); ?>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php /* Voice | 先輩花嫁からの口コミ */ ?>
<section class="l-section">
<?php /* */ ?>
    <div class="p-voices__inner">
        <h2 class="c-headline__h2 p-headline__h2">Voice<span>先輩花嫁からの口コミ</span></h2>
        <div class="item__wrapper">
            <div class="newvoice__wrapper">
                <h3 class="c-headline__h3 p-headline__h3">New voice<span>新着口コミ</span></h3>
                <div class="splide p-voices__slider" id="splide__voices__new" role="group" aria-label="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide item">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'new','postid' => 72 ] ); ?>
                            </li>
                            <li class="splide__slide item">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'new','postid' => 72 ] ); ?>
                            </li>
                            <li class="splide__slide item">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'new','postid' => 72 ] ); ?>
                            </li>
                            <li class="splide__slide item">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'new','postid' => 72 ] ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ranking__wrapper">
                <h3 class="c-headline__h3 p-headline__h3">Ranking<span>プランナー満足度ランキング</span></h3>
                <? /* PC */ ?>
                <div class="rankitem__wrapper u-hidden__sp">
                    <ul>
                        <li class="item no01">
                            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 1, 'planner_postid' => 44 ] ); ?>
                        </li>
                        <li>
                            <div class="item no02">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 2, 'planner_postid' => 25 ] ); ?>
                            </div>
                        </li>
                        <li>
                            <div class="item no03">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 3, 'planner_postid' => 19 ] ); ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <? /* SP */ ?>
                <div class="splide rankitem__wrapper u-hidden__tab-pc" id="splide__voices__ranking" role="group" aria-label="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide item no01">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 1, 'planner_postid' => 44 ] ); ?>
                            </li>
                            <li class="splide__slide item no02">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 2, 'planner_postid' => 25 ] ); ?>
                            </li>
                            <li class="splide__slide item no03">
                                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-review-planner', null, ['type' => 'ranking','rank'=> 3, 'planner_postid' => 19 ] ); ?>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="p-voices__button__wrapper">
                <a href="" class="p-button gray arrow hover__reverse">口コミ一覧へ</a>
            </div>
        </div>
    </div>
</section>

<?php /* Instagram | インスタグラム */ ?>
<section class="l-section">
    <div class="p-instagram__inner sectionpaper">
        <h2 class="c-headline__h2 p-headline__h2">Instagram<span>インスタグラム</span></h2>
        <div class="p-instagram__gridwrapper">
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta01.png','alt'=>'instagram01', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta02.png','alt'=>'instagram02', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta03.png','alt'=>'instagram03', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta04.png','alt'=>'instagram04', 'w'=>'260', 'h'=>'260', 'sphide' => 'true'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta05.png','alt'=>'instagram05', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta06.png','alt'=>'instagram06', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta07.png','alt'=>'instagram07', 'w'=>'260', 'h'=>'260'] ); ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-instagram__griditem', null, ['file' => 'insta08.png','alt'=>'instagram08', 'w'=>'260', 'h'=>'260', 'sphide' => 'true'] ); ?>
        </div>
    </div>
</section>


</main>

<?php get_footer(); ?>

</body>
</html>
