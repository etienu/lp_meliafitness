<?php
    $my_args = null;
    //  nameが存在する場合、直接名前指定表示
    if( isset( $args['term'])){
        $my_args = array(
            'post_type' => 'voices',  //  設定したカスタム投稿名※ここではplanner
            'name' => $args['name'],    //  スラッグ名
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    
    }
    //  postid指定
    if( isset( $args['postid'])){
        $my_args = array(
            'post_type' => 'voices',  //  設定したカスタム投稿名※ここではplanner
            'p' => $args['postid'],    //  記事id
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
        //echo $args['postid'];
        //echo $args['type'];
    }
    if( isset( $args['planner_postid'])){
        $my_args = array(
            'post_type' => 'planner',  
            'p' => $args['planner_postid'],
            'posts_per_page' => '1'
            );
    }

?>

<?php
    $my_query = new WP_Query($my_args);
    while ($my_query->have_posts()) :
        $my_query->the_post();
//--------------------------------------------------------
//  recent中
//--------------------------------------------------------
if( $args['type'] == "new" ) :
    $pr_title = get_post_meta($post->ID, 'pr_title', true);
    $pr_reviewimage = wp_get_attachment_url(get_post_meta($post->ID, 'pr_reviewimage', true));
    //  担当プランナーデータ
    $pr_plannerid = get_post_meta($post->ID, 'pr_planner', true);
    $pr_score     = get_post_meta($post->ID, 'pr_score', true);

    $pr_reviewername = get_post_meta($post->ID, 'pr_reviewername', true);
    $pr_age = get_post_meta($post->ID, 'pr_age', true);
    $pr_gender = get_post_meta($post->ID, 'pr_gender', true);
    $pr_plancategory = get_post_meta($post->ID, 'pr_plancategory', true);

    $pr_body = strip_tags(get_the_content());
    $article_body_text = mb_strimwidth($pr_body, 0, 300, '…',"UTF-8");
 ?>
    <div class="p-card-review-planner">
        <div class="review__new__triangle p-card__new__triangle">NEW</div>
        <div class="review__readmore p-card__readmore">Read more</div>
        <div class="review__image">
            <picture>
                <source srcset="<?php echo $pr_reviewimage;?>">
                <img src="<?php echo $pr_reviewimage;?>" alt="review image" width="229" height="236" loading="lazy">
            </picture>
            <?php /* プランナーデータはプランナーカードに任せる SP版 */ ?>
            <div class="planner__wrapper u-hidden__tab-pc">
                <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'review__new','id' => $pr_plannerid ] ); ?>
            </div>
        </div>
        <div class="review__data__wrapper">
            <div class="review__data__head">
                <div class="title__wrapper">
                    <div class="title"><?php echo $pr_title; ?></div>
                    <div class="score__wrapper">
                        <div class="score__title">プランナー満足度</div>
                        <div class="score__stars">
                            <?php
                                switch( $pr_score ){
                                case 1: echo "★<span>★★★★</span>"; break;
                                case 2: echo "★★<span>★★★</span>"; break;
                                case 3: echo "★★★<span>★★</span>"; break;
                                case 4: echo "★★★★<span>★</span>"; break;
                                case 5: echo "★★★★★"; break;
                                }
                             ?>
                        </div>
                    </div>
                </div>
                <div class="planner__wrapper u-hidden__sp">
                    <?php /* プランナーデータはプランナーカードに任せる */ ?>
                    <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'review__new','id' => $pr_plannerid ] ); ?>
                </div>
            </div>
            <div class="review__data__main">
                <div class="review__data__body">
                    <?php echo $article_body_text; ?>
                </div>
                <div class="reviewer__data">
                    <div class="reviewer__name">
                        <?php echo $pr_reviewername." さん"; ?>
                    </div>
                    <div class="reviewer__age">
                        <?php echo $pr_age."歳"; ?>
                    </div>
                    <div class="reviewer__gender">
                        <?php echo $pr_gender; ?>
                    </div>
                </div>
                <div class="review__category">
                    <?php
                     $term = get_term($pr_plancategory); // IDからタームを取得
                    //echo $term->slug;
                    echo $term->name;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
//--------------------------------------------------------
//  voice - ranking
//--------------------------------------------------------
//echo $args['type'];
if( $args['type'] == "ranking" ) :
    //  ランククラス
    $class__rank = "";
    $class__card = "p-plannercard--ranking";
    if( isset( $args['rank'] ) && $args['rank'] == 1 ){ $class__rank = "01"; }
    if( isset( $args['rank'] ) && $args['rank'] == 2 ){ $class__rank = "02"; }
    if( isset( $args['rank'] ) && $args['rank'] == 3 ){ $class__rank = "03"; }
    if( $args['type'] == "reccomend_new" ){ $class__card = "p-plannercard--new";}

 ?>
    <div class="p-card-review-planner p-card-review-planner--ranking">
        <div class="p-card__ranklabel middle <?php echo "no".$class__rank;?>"><span>No.</span><br><?php echo $class__rank;?></div>
        <div class="p-card__goto-planner-page">このプランナーページへ</div>
        <div class="planner__wrapper">
            <?php /* プランナーデータはプランナーカードに任せる */ ?>
            <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'review__ranking','id' => $args['planner_postid']] ); ?>
        </div>
        <?php
            //------------------------------------------------
            //  このプランナーを評価しているレビュー記事を全て検索
            //  最新の投稿を取得
            //------------------------------------------------
            $voice_args = array(
                'post_type' => 'voices',
                'meta_key' => 'pr_planner',
                'meta_value' => $args['planner_postid'],
                'order' => 'ASC',
                'posts_per_page' => '1'
            );
            $voice_query = new WP_Query( $voice_args );
            while ($voice_query->have_posts()) :
                $voice_query->the_post();
                $pr_title = get_post_meta(get_the_ID(), 'pr_title', true);
                $pr_body = strip_tags(get_the_content());
                $article_body_text = mb_strimwidth($pr_body, 0, 105, '…',"UTF-8");
            ?>
            <div class="p-card-rp__data__wrapper">
                <div class="p-card-rp__forplanner ranking">プランナーへの口コミ</div>
                <div class="p-card-rp__title ranking"><?php echo $pr_title; ?></div>
                <div class="p-card-rp__body ranking">
                    <?php echo $article_body_text; ?>
                </div>
            </div>

            <?php
            endwhile;
        ?>
    </div>

<?php endif; ?>


<?php
    endwhile;
    wp_reset_postdata();
?>
