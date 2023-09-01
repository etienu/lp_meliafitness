<?php
/*---------------------------------------------------------
    front-page.php
    トップページ
-----------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="ja">

<?php /* head */ ?>
<?php get_template_part(GET_PATH_R('template').'layout/combo/lc-wp-header')?>

<body class="l-header__float">

  <?php /* header bar */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-headerbar' ); ?>
  <?php /* 一番上に戻る */ ?>
  <?php //get_template_part(GET_PATH_R('template').'object/project/p-js-gototop' ); ?>
  <?php /* ローディング */ ?>
  <?php //get_template_part(GET_PATH_R('template').'layout/l-loader' ); ?>

<main>
<?php /* ヒーローセクション */ ?>
<div class="l-section p-hero">
    <div class="p-hero__background">
    </div>
    <div class="p-hero__inner">
        <div class="p-hero__content">
            <div class="p-hero__headline">
                <span>週一</span>のトレーニングで<br>
                <span>人に見せたくなる<br class="u-display__sp">カラダ</span>をつくる。
            </div>
            <div class="p-hero__lead">
                一流俳優・モデルを指導してきた<br class="u-display__sp">本物のパーソナルトレーニング
            </div>
        </div>
        <div class="p-hero__bg__woman">
            <picture>
                <source srcset="<?php echo GET_PATH()?>/mv/mv-woman-sp.png.webp" media="(max-width: 768px)" width="396" height="449">
                <source srcset="<?php echo GET_PATH()?>/mv/mv-woman-sp.png" media="(max-width: 768px)" width="396" height="449">
                <source srcset="<?php echo GET_PATH()?>/mv/mv-woman-pc.png.webp">
                <source srcset="<?php echo GET_PATH()?>/mv/mv-woman-pc.png">
                <img src="<?php echo GET_PATH()?>/mv/mv-woman-pc.png" alt="woman" width="600" height="680">
            </picture>
        </div>
    </div>
</div>

<?php /* training voice */ ?>
<section class="l-section p-tvoice">
    <div class="c-anchor__t-40" id="training_voice"></div>
    <div class="p-tvoice__inner">
        <h2 class="c-headline__h2 p-headline__h2">トレーニングを受けた会員様から<br class="u-display__sp">こんな声が届いています。</h2>
        <?php /* 1 */ ?>
        <div class="p-tvoice__group">
            <div class="p-tvoice__item js-surface__up">
                <div class="p-tvoice__textgroup">
                    <div class="p-tvoice__title">理想的なカラダになれました！</div>
                    <div class="p-tvoice__lead">
                        マンツーマンの指導を受けることができ、自分のなりたい身体に合ったトレーニングができてとても良かったです。<br>
                        2か月で理想の体型になることができまし<br class="u-display_sp">た！
                    </div>
                    <div class="p-tvoice__infogroup">
                        <div class="p-tvoice__age">38歳</div>
                        <div class="p-tvoice__occupation">会社員</div>
                        <div class="p-tvoice__gender">女性</div>
                    </div>
                </div>
                <div class="p-tvoice__image">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/voice01pc.jpg.webp">
                        <source srcset="<?php echo GET_PATH()?>/voice/voice01pc.jpg">
                        <img src="<?php echo GET_PATH()?>/voice/voice01pc.jpg" alt="voice01" width="450" height="300">
                    </picture>
                </div>
            </div>
            <?php /* 2 */ ?>
            <div class="p-tvoice__item reverse js-surface__up">
                <div class="p-tvoice__textgroup no02">
                    <div class="p-tvoice__title">リバウンドせずに体型維持できています！</div>
                    <div class="p-tvoice__lead">
                    4か月前に目標の体重になってからなってからリバウンドもなく、今でもボディメイクを楽しんで続けられています。
                    </div>
                    <div class="p-tvoice__infogroup">
                        <div class="p-tvoice__age">42歳</div>
                        <div class="p-tvoice__occupation">会社経営</div>
                        <div class="p-tvoice__gender">女性</div>
                    </div>
                </div>
                <div class="p-tvoice__image no02">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/voice02pc.jpg.webp">
                        <source srcset="<?php echo GET_PATH()?>/voice/voice02pc.jpg">
                        <img src="<?php echo GET_PATH()?>/voice/voice02pc.jpg" alt="voice02" width="450" height="300">
                    </picture>
                </div>
            </div>

            <?php /* 3 */ ?>
            <div class="p-tvoice__item no03 js-surface__up">
                <div class="p-tvoice__textgroup no03">
                    <div class="p-tvoice__title">周りから“キレイになった”と言われます！</div>
                    <div class="p-tvoice__lead no03">
                        トレーニングをしてメリハリのある体になると、家族や友人から「とてもキレイになった」と褒めてもらえるように。<br>
                        ボディメイクをきっかけに自信が持てるようになりました。
                    </div>
                    <div class="p-tvoice__infogroup no03">
                        <div class="p-tvoice__age">32歳</div>
                        <div class="p-tvoice__occupation">専業主婦</div>
                        <div class="p-tvoice__gender">女性</div>
                    </div>
                </div>
                <div class="p-tvoice__image">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/voice/voice03pc.jpg.webp">
                        <source srcset="<?php echo GET_PATH()?>/voice/voice03pc.jpg">
                        <img src="<?php echo GET_PATH()?>/voice/voice03pc.jpg" alt="voice03" width="450" height="300">
                    </picture>
                </div>
            </div>
        </div><!-- group -->
    </div><!-- inner -->
</section>

<?php /* profile */ ?>
<section class="l-section p-profile">
    <div class="c-anchor__t-40" id="profile"></div>
    <div class="p-profile__inner">
        <h2 class="c-headline__h2 p-headline__h2 big">OWNER’S PROFILE</h2>
        <div class="c-lead">代表プロフィール</div>
        <div class="p-profile__wrapper">
            <div class="p-profile__owner js-surface__up">
                <div class="p-profile__image">
                    <picture>
                        <source srcset="<?php echo GET_PATH()?>/profile/profile01pc.jpg.webp">
                        <source srcset="<?php echo GET_PATH()?>/profile/profile01pc.jpg">
                        <img src="<?php echo GET_PATH()?>/profile/profile01pc.jpg" alt="profile" width="360" height="360">
                    </picture>
                </div>
                <div class="p-profile__contents">
                    <div class="p-profile__header">
                        <div class="p-profile__name">Kailani</div>
                        <div class="p-profile__snswrapper">
                            <ul>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="p-icon__circle fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="p-icon__circle fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <i class="p-icon__circle fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="p-profile__lead">
                        出産を機に激太りし、様々なダイエット法を試し、失敗を繰り返した過去を持つ。<br>
                        その後、筋トレや食事改善によってダイエットに成功。<br>
                        自身の経験を活かし、現在はパーソナルトレーナーをしており、これまで1000人以上の肉体改造に成功。<br>
                        またYouTubeで1000万回再生された動画を持つ、筋トレインフルエンサーとしても活動している。<br>
                        YouTubeやInstagramではトレーニングやダイエットに良い食事法を発信している。<br>
                    </div>
                </div>
            </div>
            <div class="p-profile__messagewrapper">
                <div class="p-profile__messageinner">
                    <div class="p-profile__messagetitle">
                        Message
                    </div>
                    <div class="p-profile__messagelead">
                        <span>MELIA FITNESS</span>ではあなたに合った身体の動かし方や食生活の大切さをプロのトレーナーがマンツーマンでサポートいたします。<br>
                        継続することができて挫折しないボディメイク・ダイエットに自信があります。<br>
                        ぜひ<span>MELIA FITNESS</span>で身体づくりの素晴らしさを体験してください。<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /* problem */ ?>
<section class="l-section p-problem">
    <div class="c-anchor__t-40" id="problem"></div>
    <div class="p-problem__background">
        <div class="p-problem__background__woman">
        </div>
    </div>
    <div class="p-problem__inner">
        <div class="p-problem__content">
            <div class="p-problem__title">こんなお悩みありませんか？</div>
            <div class="p-problem__list js-surface__up">
                <ul>
                    <li class="p-problem__item">トレーニングをしても本当に痩せられるか不安。</li>
                    <li class="p-problem__item">トレーニングしたいけど時間がない。</li>
                    <li class="p-problem__item no03">厳しい食事制限に耐えられるか分からない。</li>
                    <li class="p-problem__item no04">一時的に痩せてもリバウンドしないか心配。</li>
                    <li class="p-problem__item no05">ダイエットに失敗してきたので続けられるか不安。</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php /* feature  */ ?>
<section class="l-section p-feature">
    <div class="p-feature__inner">
        <div class="p-feature__header">
            <div class="c-headline__h2 p-headline__h2">
                <span>MELIA FITNESS</span>は<br class="u-display__sp">そんな悩みをお持ちの方にこそ<br>
                ご利用していただきたい理由があります。
            </div>
        </div>
        <div class="p-feature__arrowwrapper">
            <div class="p-feature__arrow">
            </div>
        </div>

        <div class="c-anchor__t-40" id="feature"></div>
        <h2 class="c-headline__h2 p-headline__h2 big">FEATURE</h2>
        <div class="c-lead"><span>MELIA FITNESS</span>が選ばれる5つの特徴</div>
        <?php /* 1 */ ?>
        <div class="p-feature__itemlist">
            <ul>
                <li class="p-feature__item js-surface__up">
                    <div class="p-feature__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/feature/feature01pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/feature/feature01pc.jpg">
                            <img src="<?php echo GET_PATH()?>/feature/feature01pc.jpg" alt="feature01" width="450" height="330">
                        </picture>
                    </div>
                    <div class="p-feature__textwrapper">
                        <div class="p-feature__texttitle">
                            「人に見せたくなるカラダ作り」に<br><span>こだわったトレーニング</span>
                        </div>
                        <div class="p-feature__textlead">
                            体重を落とすだけではなく、人に見せたくなるカラダを目指したトレーニングをします。引き締まった魅力的なカラダになると、自信を持つことができます。
                        </div>
                    </div>
                </li>
                <?php /* 2 */ ?>
                <li class="p-feature__item no02 js-surface__up">
                    <div class="p-feature__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/feature/feature02pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/feature/feature02pc.jpg">
                            <img src="<?php echo GET_PATH()?>/feature/feature02pc.jpg" alt="feature02" width="450" height="330">
                        </picture>
                    </div>
                    <div class="p-feature__textwrapper no02">
                        <div class="p-feature__texttitle">
                            お尻・太ももなどの部位を<br>効率的に鍛える最先端マシンの導入
                        </div>
                        <div class="p-feature__textlead">
                        お尻や太ももを引き締めるトレーニングをするためのヒップスラスターという最先端のマシンを導入。<br>
女性の美尻をつくると有名なマシンです。
                        </div>
                    </div>
                </li>
                <?php /* 3 */ ?>
                <li class="p-feature__item no03 js-surface__up">
                    <div class="p-feature__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/feature/feature03pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/feature/feature03pc.jpg">
                            <img src="<?php echo GET_PATH()?>/feature/feature03pc.jpg" alt="feature03" width="450" height="330">
                        </picture>
                    </div>
                    <div class="p-feature__textwrapper no03">
                        <div class="p-feature__texttitle">
                        厳しい食事制限なし&<br>トレーニングは週一～二回でOK
                        </div>
                        <div class="p-feature__textlead">
                        厳しい食事制限ではなく、正しい食事習慣を身に着けられるようにサポートします。<br>
                        トレーニングは週1回、たったの50分でOKなので、仕事や家事が忙しくてもご利用いただけます。
                        </div>
                    </div>
                </li>
                <?php /* 4 */ ?>
                <li class="p-feature__item no04 js-surface__up">
                    <div class="p-feature__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/feature/feature04pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/feature/feature04pc.jpg">
                            <img src="<?php echo GET_PATH()?>/feature/feature04pc.jpg" alt="feature04" width="450" height="330">
                        </picture>
                    </div>
                    <div class="p-feature__textwrapper no04">
                        <div class="p-feature__texttitle">
                            確実に筋肉をつけるので<br>リバウンドと無縁
                        </div>
                        <div class="p-feature__textlead">
                        リバウンドの多くの原因は筋肉が落ちてしまって基礎代謝がおちてしまうこと。MELIA FITNESSのプログラムは確実に筋肉をつけるのでリバウンドしにくい身体になれます。
                        </div>
                    </div>
                </li>
                <?php /* 5 */ ?>
                <li class="p-feature__item no05 js-surface__up">
                    <div class="p-feature__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/feature/feature05pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/feature/feature05pc.jpg">
                            <img src="<?php echo GET_PATH()?>/feature/feature05pc.jpg" alt="feature05" width="450" height="330">
                        </picture>
                    </div>
                    <div class="p-feature__textwrapper no05">
                        <div class="p-feature__texttitle">
                            "ボディメイクを楽しむ"がモットーなので楽しく続けられる
                        </div>
                        <div class="p-feature__textlead">
                            <span>MELIA FITNESS</span>はその方のなりたい体に合わせて、無理のない継続できるトレーニングを提案いたします。トレーニングと正しい食生活を継続すると、１～２か月で効果を感じていただけます。あなたの体が引き締まっていくのを感じると楽しく前向きに続けることができます。
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php /* visual yoga */ ?>
<section class="p-visual">
    <div class="p-visual__yoga">
    </div>
</section>

<?php /* members-voice */ ?>
<section class="l-section p-mvoice">
    <div class="c-anchor b-100" id="membersvoice"></div>
    <div class="p-mvoice__background"></div>
    <div class="p-mvoice__inner">
        <h2 class="c-headline__h2 p-headline__h2 big line">MEMBER’S VOICE</h2>
        <div class="c-lead">会員様の声</div>
        <div class="p-mvoice__itemlist">
            <ul>
                <?php /* 1 */ ?>
                <li class="p-mvoice__item js-surface__up">
                    <div class="p-mvoice__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice01pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice01pc.jpg">
                            <img src="<?php echo GET_PATH()?>members_voice/member-voice01pc.jpg" alt="member_voice01" width="450" height="340">
                        </picture>
                    </div>
                    <div class="p-mvoice__textgroup">
                        <div class="p-mvoice__title">
                            引き締まったメリハリボディになれました！
                        </div>
                        <div class="p-mvoice__infogroup">
                            <div class="p-mvoice__info__age">43歳</div>
                            <div class="p-mvoice__info__occupation">会社員</div>
                            <div class="p-mvoice__info__gender">女性</div>
                        </div>
                        <div class="p-mvoice__lead">
                            自己流のダイエットでは体重は落ちても、なぜか体型はだらしないままで、少し時間が経つとリバウンドをしてしまっていました。<br>
                            <span>MELIA FITNESS</span>でマンツーマンのトレーニングを受けて、リバウンド知らずの引き締まった身体を維持できています。<br>
                            週1のトレーニングで無理なく通うことができ、楽しく続けることができています。<br>
                            <span>MELIA FITNESS</span>を選んで良かったです！
                        </div>
                    </div>
                </li>
                <?php /* 2 */ ?>
                <li class="p-mvoice__item reverse js-surface__up">
                    <div class="p-mvoice__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice02pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice02pc.jpg">
                            <img src="<?php echo GET_PATH()?>members_voice/member-voice02pc.jpg" alt="member_voice02" width="450" height="340">
                        </picture>
                    </div>
                    <div class="p-mvoice__textgroup no02">
                        <div class="p-mvoice__title">
                            ボディメイクが楽しくなりました！
                        </div>
                        <div class="p-mvoice__infogroup">
                            <div class="p-mvoice__info__age">36歳</div>
                            <div class="p-mvoice__info__occupation">公務員</div>
                            <div class="p-mvoice__info__gender">女性</div>
                        </div>
                        <div class="p-mvoice__lead">
                            前からジムに通っていましたが、ダイエットはいつも途中で挫折してしまっていたのでプロのトレーナーの方から教わりたいと思い、MELIA FITNESSを利用しました。<br>
                            自分の目指している身体に合わせて、トレーニングや食生活について提案をしてくださるので、理想的なボディメイクができたと思っています。<br>
                            今ではボディメイクをとても楽しく感じるようになりました。
                        </div>
                    </div>
                </li>
                <?php /* 3 */ ?>
                <li class="p-mvoice__item no03 js-surface__up">
                    <div class="p-mvoice__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice03pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>members_voice/member-voice03pc.jpg">
                            <img src="<?php echo GET_PATH()?>members_voice/member-voice03pc.jpg" alt="member_voice03" width="450" height="340">
                        </picture>
                    </div>
                    <div class="p-mvoice__textgroup no03">
                        <div class="p-mvoice__title">
                            ダイエットに成功しました！
                        </div>
                        <div class="p-mvoice__infogroup">
                            <div class="p-mvoice__info__age">32歳</div>
                            <div class="p-mvoice__info__occupation">会社員</div>
                            <div class="p-mvoice__info__gender">女性</div>
                        </div>
                        <div class="p-mvoice__lead">
                            運動をほぼしたことがなく、トレーニングは厳しいものというイメージがあり、最初は不安でしたが、トレーナーの方に丁寧にトレーニング方法を教えていただくことができ、無理なく楽しく取り組めました。<br>
                            ２か月で目標体重になり、身体も引き締まり、ダイエットに成功しました。<br>
                            ダイエットに成功すると同時に、健康な身体を手に入れることが出来たと思います。
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php /* price */ ?>
<section class="l-section p-price">
    <div class="c-anchor__t-40" id="price"></div>
    <div class="p-price__background"></div>
    <div class="p-price__inner">
        <h2 class="c-headline__h2 p-headline__h2 big">PRICE</h2>
        <div class="c-lead">ご利用料金</div>
        <div class="p-price__content">
            <div class="p-price__pricewrapper js-surface__up">
                <span class="mid">月額</span>
                <span class="yen">¥</span>
                <span class="number">29<span class="comma">,</span>800</span>
                <span class="min">税込</span>
            </div>
            <div class="p-price__leadwrapper">
                <div class="p-price__lead--main">
                    週1で通うMELIA FITNESSの<br class="u-display__sp">パーソナルトレーニング
                </div>
                <div class="p-price__lead--sub">
                    トレーナーとマンツーマンで理想的なボディメイクを目指します。
                </div>
            </div>
            <div class="p-price__supplement">
                ※Kailaniご指名の場合は月額￥39,800
            </div>
        </div>
    </div>
</section>

<?php /* campaign-cv */ ?>
<section class="l-section p-campaign">
    <div class="p-campaign__background"></div>
    <div class="p-campaign__inner js-surface__up">
        <div class="p-campaign__header">
            期間限定無料体験キャンペーン
        </div>
        <div class="p-campaign__content">
            <div class="p-campaign__course">
                体験コース　1回60分
            </div>
            <div class="p-campaign__items">
                <ul>
                    <li class="item01">
                        <div class="normal">通常価格</div>
                        <div class="number">
                            <span class="yen">¥</span>12,000<span class="tax">税込</span>
                        </div>
                    </li>
                    <li class="item02">
                        <div class="arrow-image"></div>
                    </li>
                    <li class="item03">
                        <div class="serif">先着10名様限定</div>
                        <span class="yen">￥</span><span class="number">０</span>
                    </li>
                </ul>
            </div>
            <div class="p-campaign__periodwrapper">
                <div class="p-campaign__periodtitle">キャンペーン期間</div>
                <div class="p-campaign__periodschedule">12月1日<span class="bra">（</span>月<span class="brar">）</span>～12月30日（金）</div>
            </div>
        </div>
        <div class="p-campaign__footer">
            <div class="c-button__cv p-button__cv arrow-right">２分で完了！LINEで予約する</div>
        </div>
    </div>
</section>


<?php /* flow */ ?>
<section class="l-section p-flow">
    <div class="c-anchor__t-40" id="flow"></div>
    <div class="p-flow__inner">
        <h2 class="c-headline__h2 p-headline__h2 big left line">FLOW</h2>
        <div class="c-lead">パーソナルトレーニングの流れ</div>
        <div class="p-flow__content js-surface__upgroup">
            <ul>
                <li class="p-flow__item">
                    <div class="p-flow__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/flow/flow01pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/flow/flow01pc.jpg">
                            <img src="<?php echo GET_PATH()?>/flow/flow01pc.jpg" alt="flow01" width="300" height="300">
                        </picture>
                    </div>
                    <div class="p-flow__textwrapper">
                        <div class="p-flow__textstep">STEP01</div>
                        <div class="p-flow__texttitle">カウンセリング</div>
                        <div class="p-flow__textlead">まずはカウンセリングでお体の状態やライフスタイルをお伺いし、今後の流れをご説明いたします。</div>
                    </div>
                </li>
                <li class="p-flow__item no02">
                    <div class="p-flow__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/flow/flow02pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/flow/flow02pc.jpg">
                            <img src="<?php echo GET_PATH()?>/flow/flow02pc.jpg" alt="flow02" width="300" height="300">
                        </picture>
                    </div>
                    <div class="p-flow__textwrapper no02">
                        <div class="p-flow__textstep">STEP02</div>
                        <div class="p-flow__texttitle">測定・メニュー提案</div>
                        <div class="p-flow__textlead">体組成計で現在の身体の状態を確認します。その後、理想の身体になるためのトレーニングメニューをご提案させていただきます。</div>
                    </div>
                </li>
                <li class="p-flow__item no03">
                    <div class="p-flow__image">
                        <picture>
                            <source srcset="<?php echo GET_PATH()?>/flow/flow03pc.jpg.webp">
                            <source srcset="<?php echo GET_PATH()?>/flow/flow03pc.jpg">
                            <img src="<?php echo GET_PATH()?>/flow/flow03pc.jpg" alt="flow01" width="300" height="300">
                        </picture>
                    </div>
                    <div class="p-flow__textwrapper no03">
                        <div class="p-flow__textstep">STEP03</div>
                        <div class="p-flow__texttitle">トレーニング</div>
                        <div class="p-flow__textlead">専属のトレーナーがマンツーマンであなたのなりたい身体に合わせたトレーニングをサポートいたします。</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php /* q & a */ ?>
<section class="l-section p-qanda">
    <div class="c-anchor__t-40" id="qanda"></div>
    <div class="p-qanda__inner">
        <h2 class="c-headline__h2 p-headline__h2 big">Q&A</h2>
        <div class="c-lead center">よくあるご質問</div>
        <div class="p-qanda__list">
            <ul>
                <?php /* 1 */ ?>
                <li class="p-qanda__item js-surface__up">
                    <div class="p-qanda__q">ダイエットをしたいのですが、どれくらいの効果がありますか？</div>
                    <div class="p-qanda__a">個人差はありますが、週に1回のパーソナルトレーニングと自宅でのトレーニング、食生活を改善することで、２か月で効果を感じていただくことができます。</div>
                </li>
                <?php /* 1 */ ?>
                <li class="p-qanda__item js-surface__up">
                    <div class="p-qanda__q">運動をしたことがなく、体力に自信がありません。大丈夫でしょうか？</div>
                    <div class="p-qanda__a">MELIA FITNESSは専属のトレーナーがマンツーマンでトレーニングのサポートをしております。また、無理なトレーニングはしないため、運動をしたことがなく、体力に自信がない方でも安心して取り組んでいただけます。</div>
                </li>
                <?php /* 1 */ ?>
                <li class="p-qanda__item no03 js-surface__up">
                    <div class="p-qanda__q">リバウンドはしませんか？</div>
                    <div class="p-qanda__a">リバウンドの原因は筋肉が落ちて基礎代謝が下がってしまうことが原因であると考えられています。<br>
MELIA FITNESSのプログラムでは、確実に筋肉をつけられますので、リバウンドしにくい体になれます。</div>
                </li>
                <?php /* 1 */ ?>
                <li class="p-qanda__item no04 js-surface__up">
                    <div class="p-qanda__q">厳しい食事制限をする自信がありません。</div>
                    <div class="p-qanda__a">MELIA FITNESSでは食事の選び方や食べ方など食事改善についてアドバイスを行っております。<br>
厳しい食事制限はありませんのでご安心ください。</div>
                </li>
                <?php /* 1 */ ?>
                <li class="p-qanda__item js-surface__up">
                    <div class="p-qanda__q">トレーニングの際に必要なものはありますか？</div>
                    <div class="p-qanda__a">トレーニングウェアとトレーニング時に使用するシューズをおもちください。<br>
お持ちでない場合はレンタルをご用意しておりますのでご利用ください。</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php /* visual gym */ ?>
<section class="l-section p-visual gym">
    <div class="p-visual__gym">
    </div>
</section>

<?php /* access */ ?>
<section class="l-section p-access">
    <div class="c-anchor__t-40" id="access"></div>
    <div class="p-access__inner">
        <h2 class="c-headline__h2 p-headline__h2 big left line">ACCESS</h2>
        <div class="c-lead left">アクセス</div>

        <div class="p-access__content js-surface__up">
            <div class="p-access__textgroup">
                <ul>
                    <li class="p-access__title">MELIA FITNESS</li>
                    <li class="p-access__subtitle">パーソナルトレーニングジム メリアフィットネス</li>
                    <li class="p-access__address-number">〒170-6045</li>
                    <li class="p-access__address">東京都豊島区東池袋3-1-1 サンシャイン60 45階</li>
                    <li class="p-access__walking">JR池袋駅より徒歩５分</li>
                    <li class="p-access__tel">TEL 00-0000-0000</li>
                    <li class="p-access__time">営業時間　10：00～22：00</li>
                </ul>
            </div>
            <div class="p-access__googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.870489474041!2d139.71558127643627!3d35.72940352732517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d6f393e6fa5%3A0x2d61fabefab2f99f!2z44K144Oz44K344Oj44Kk44OzNjDjg5Pjg6s!5e0!3m2!1sja!2sjp!4v1687315844603!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php /* campaign-cv */ ?>
<section class="l-section p-campaign">
    <div class="p-campaign__background"></div>
    <div class="p-campaign__inner no02 js-surface__up">
        <div class="p-campaign__header">
            期間限定無料体験キャンペーン
        </div>
        <div class="p-campaign__content">
            <div class="p-campaign__course">
                体験コース　1回60分
            </div>
            <div class="p-campaign__items">
                <ul>
                    <li class="item01">
                        <div class="normal">通常価格</div>
                        <div class="number">
                            <span class="yen">¥</span>12,000<span class="tax">税込</span>
                        </div>
                    </li>
                    <li class="item02">
                        <div class="arrow-image"></div>
                    </li>
                    <li class="item03">
                        <div class="serif">先着10名様限定</div>
                        <span class="yen">￥</span><span class="number">０</span>
                    </li>
                </ul>
            </div>
            <div class="p-campaign__periodwrapper">
                <div class="p-campaign__periodtitle">キャンペーン期間</div>
                <div class="p-campaign__periodschedule">12月1日<span class="bra">（</span>月<span class="brar">）</span>～12月30日（金）</div>
            </div>
        </div>
        <div class="p-campaign__footer">
            <div class="c-button__cv p-button__cv arrow-right">２分で完了！LINEで予約する</div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>

</body>
</html>
