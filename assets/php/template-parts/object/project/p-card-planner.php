<?php
    $my_args = null;
    //  nameが存在する場合、直接名前指定表示
    if( isset( $args['name'])){
        $my_args = array(
            'post_type' => 'planner',  //  設定したカスタム投稿名※ここではplanner
            'name' => $args['name'],    //  スラッグ名
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    
    }
    //  index指定
    if( isset( $args['index'])){
        $my_args = array(
            'post_type' => 'planner',  //  設定したカスタム投稿名※ここではplanner
            'offset' => $args['index'], //  表示開始する番号
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    }
    //  id指定
    if( isset( $args['id'])){
        $my_args = array(
            'post_type' => 'planner',  //  設定したカスタム投稿名※ここではplanner
            'p' => $args['id'],     //  記事id
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    }
    //  postid指定
    if( isset( $args['postid'])){
        $my_args = array(
            'post_type' => 'planner',  //  設定したカスタム投稿名※ここではplanner
            'p' => $args['postid'],    //  記事id
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
        //echo $args['postid'];
        //echo $args['type'];
    }
?>

<?php
    $my_query = new WP_Query($my_args);
    while ($my_query->have_posts()) :
        $my_query->the_post();
        $post_planner = $post;  //  投稿を一時保存
        $pl_name = get_post_meta($post->ID, 'planner_name', true);
    $pl_image = wp_get_attachment_url(get_post_meta($post->ID, 'planner_image', true));
    $pl_company = get_post_meta($post->ID, 'planner_company', true);
    $pl_catchcopy = get_post_meta($post->ID, 'planner_catchcopy', true);
    $pl_point1 = get_post_meta($post->ID, 'planner_point1', true);
    $pl_point2 = get_post_meta($post->ID, 'planner_point2', true);
    $pl_point3 = get_post_meta($post->ID, 'planner_point3', true);
    $pl_gallery1 = wp_get_attachment_url(get_post_meta($post->ID, 'planner_gallery1', true));
    $pl_gallery2 = wp_get_attachment_url(get_post_meta($post->ID, 'planner_gallery2', true));
    $pl_reviewcount = 0;
    $pl_score = 0;
    $pl_scoresum = 0;
    //print_r( $post->ID ."\n" );
    //print_r( $pl_point1 ."\n" );
    //
    //------------------------------------------------
    //  このプランナーを評価しているレビュー記事を全て検索
    //  スコアを全て加算して平均点を出す
    //------------------------------------------------
    $voice_args = array(
        'post_type' => 'voices',
        'meta_key' => 'pr_planner',
        'meta_value' => $post->ID
    );
    $voice_query = new WP_Query( $voice_args );
    while ($voice_query->have_posts()) :
        $voice_query->the_post();
        $pl_scoresum += get_post_meta(get_the_ID(), 'pr_score', true);
        $pl_reviewcount ++;
    endwhile;
    $post = $post_planner;  //  投稿を元に戻す
    if( 0 < $pl_reviewcount ){
        $pl_score = $pl_scoresum / $pl_reviewcount;
        //echo "[count]".$pl_reviewcount." [score]".$pl_score." [sum]".$pl_scoresum;
    }
//--------------------------------------------------------
//  recent中
//--------------------------------------------------------
if( $args['type'] == "recent" ) : ?>

    <div class="p-plannercard">
        <div class="planner__image">
            <div class="p-card__frameborder--image"></div>
            <picture>
                <source srcset="<?php echo $pl_image;?>">
                <img src="<?php echo $pl_image;?>" alt="<?php echo $pl_name;?>" width="158" height="160" loading="lazy">
            </picture>
        </div>
        <div class="planner__data">
            <button class="p-card__favbutton js-cookiebutton" data-name="planner<?php echo $post->ID;?>" data-type="bool"></button>
            <div class="name"><?php echo $pl_name;?></div>
            <div class="company"><?php echo $pl_company;?></div>
            <div class="border"></div>
            <div class="area__wrapper">
                <div class="area__title"></div>
                <div class="area__tags">
                    <ul>
                    <?php
                        //  付属するタクソノミー「エリア」のタームを全部書き出す
                        $custom_post_tag = 'area_taxonomy'; // タクソノミーのスラッグを指定
                        $custom_post_tag_terms = wp_get_object_terms($post_planner->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                        //print_r( $custom_post_tag_terms );
                        if(!empty($custom_post_tag_terms)){
                            if(!is_wp_error( $custom_post_tag_terms )){
                                foreach($custom_post_tag_terms as $term){
                                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                                    $tag_term_name = $term->name;
                                    echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                }
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
//--------------------------------------------------------
//  PopulerReports - ranking中
//--------------------------------------------------------
if( $args['type'] == "reports_ranking" ) : ?>
        <div class="report__planner">
            <?php // 関連プランナーから情報引き出して表示 ?>
            <div class="report__planner__image">
                <picture>
                    <source srcset="<?php echo $pl_image;?>">
                    <img src="<?php echo $pl_image;?>" alt="<?php echo $pl_name;?>" width="68" height="65" loading="lazy">
                </picture>
            </div>
            <div class="report__planner__data">
                <div class="planner__title">担当プランナー</div>
                <div class="planner__name"><?php echo $pl_name;?></div><?php //鈴木 咲 ?>
                <div class="planner__company"><?php echo $pl_company;?></div><?php //株式会社p-wedding ?>
            </div>
        </div>

<?php endif; ?>
<?php
//--------------------------------------------------------
//  reccomend - ranking中
//--------------------------------------------------------
//echo $args['type'];
if( $args['type'] == "reccomend_ranking" ||
    $args['type'] == "reccomend_new" ) :
    //  ランククラス
    $class__rank = "";
    $class__card = "p-plannercard--ranking";
    if( isset( $args['rank'] ) && $args['rank'] == 1 ){ $class__rank = "01"; }
    if( isset( $args['rank'] ) && $args['rank'] == 2 ){ $class__rank = "02"; }
    if( isset( $args['rank'] ) && $args['rank'] == 3 ){ $class__rank = "03"; }
    if( $args['type'] == "reccomend_new" ){ $class__card = "p-plannercard--new";}

 ?>
        <div class="p-plannercard <?php echo $class__card;?> <?php echo 'no'.$class__rank;?>">
        <?php if( $args['type'] == "reccomend_ranking" ) : ?>
            <div class="p-card__ranklabel"><span>No.</span><br><?php echo $class__rank;?></div>
        <?php endif; ?>
        <div class="planner__info__wrapper">
            <div class="planner__profile__wrapper">
                <div class="planner__image">
                    <button class="p-card__favbutton js-cookiebutton" data-name="planner<?php echo $post->ID;?>" data-type="bool"></button>
                    <picture>
                        <source srcset="<?php echo $pl_image;?>">
                        <img src="<?php echo $pl_image;?>" alt="<?php echo $pl_name;?>" width="140" height="160" loading="lazy">
                    </picture>
                </div>
                <div class="planner__name"><?php echo $pl_name;?></div><?php //鈴木 咲 ?>
                <div class="planner__company"><?php echo $pl_company;?></div><?php //株式会社p-wedding ?>
            </div>
            <div class="planner__data">
                <div class="planner__catchcopy"><?php echo $pl_catchcopy;?></div>
                <div class="p-card__area__wrapper">
                    <div class="p-card__area__title"></div>
                    <div class="p-card__area__tags">
                        <ul>
                        <?php
                            //  付属するタクソノミー「エリア」のタームを全部書き出す
                            $custom_post_tag = 'area_taxonomy'; // タクソノミーのスラッグを指定
                            $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                            if(!empty($custom_post_tag_terms)){
                                if(!is_wp_error( $custom_post_tag_terms )){
                                    foreach($custom_post_tag_terms as $term){
                                        $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                                        $tag_term_name = $term->name;
                                        echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                    }
                                }
                            }
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="p-card__plantags__wrapper u-hidden__sp">
                    <ul class="tags__list">
                    <?php
                        //  付属するタクソノミー「エリア」のタームを全部書き出す
                        $custom_post_tag = 'plan_tags'; // タクソノミーのスラッグを指定
                        $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                        if(!empty($custom_post_tag_terms)){
                            if(!is_wp_error( $custom_post_tag_terms )){
                                foreach($custom_post_tag_terms as $term){
                                    $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                                    $tag_term_name = $term->name;
                                    echo '<li><a href="'.$tag_term_link.'">＃'.$tag_term_name.'</a></li>';
                                }
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php /* SP版*/ ?>
        <div class="p-card__plantags__wrapper u-hidden__tab-pc">
            <ul class="tags__list">
            <?php
                $custom_post_tag = 'plan_tags';
                $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                if(!empty($custom_post_tag_terms)){
                    if(!is_wp_error( $custom_post_tag_terms )){
                        foreach($custom_post_tag_terms as $term){
                            $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                            $tag_term_name = $term->name;
                            echo '<li><a href="'.$tag_term_link.'">＃'.$tag_term_name.'</a></li>';
                        }
                    }
                }
            ?>
            </ul>
        </div>


        <div class="planner__point__wrapper">
            <ul>
                <li>・ <?php echo $pl_point1;?></li>
                <li>・ <?php echo $pl_point2;?></li>
                <li>・ <?php echo $pl_point3;?></li>
            </ul>
        </div>

        <?php if( $args['type'] == "reccomend_ranking" ) : ?>
        <div class="planner__photogallery__wrapper">
            <picture>
                <source srcset="<?php echo $pl_gallery1;?>">
                <img src="<?php echo $pl_gallery1;?>" alt="Photo Gallery1" width="159" height="111" loading="lazy">
            </picture>
            <picture>
                <source srcset="<?php echo $pl_gallery2;?>">
                <img src="<?php echo $pl_gallery2;?>" alt="Photo Gallery2" width="159" height="111" loading="lazy">
            </picture>
        </div>
        <?php endif; ?>

    </div>

<?php endif; ?>

<?php
//--------------------------------------------------------
//  reccomend - new中
//--------------------------------------------------------
if( $args['type'] == "recommend_new" ) : ?>
<?php endif; ?>


<?php
//--------------------------------------------------------
//  voice - new 中
//--------------------------------------------------------
if( $args['type'] == "review__new" ) : ?>
        <div class="p-plannercard--mini">
            <?php // 関連プランナーから情報引き出して表示 ?>
            <div class="p-plannercard--mini__image">
                <picture>
                    <source srcset="<?php echo $pl_image;?>">
                    <img src="<?php echo $pl_image;?>" alt="<?php echo $pl_name;?>" width="68" height="65" loading="lazy">
                </picture>
            </div>
            <div class="p-plannercard--mini__data__wrapper">
                <div class="p-plannercard--mini__title">担当プランナー</div>
                <div class="p-plannercard--mini__name"><?php echo $pl_name;?></div><?php //鈴木 咲 ?>
            </div>
            <div class="p-plannercard--mini__score__wrapper">
                <div class="p-plannercard--mini__stars">
                    <?php
                        if( 0 < $pl_score && $pl_score <= 1 ){ echo "★<span>★★★★</span>";}
                        if( 1 < $pl_score && $pl_score <= 2 ){ echo "★★<span>★★★</span>";}
                        if( 2 < $pl_score && $pl_score <= 3 ){ echo "★★★<span>★★</span>";}
                        if( 3 < $pl_score && $pl_score <= 4 ){ echo "★★★★<span>★</span>";}
                        if( 4 < $pl_score && $pl_score <= 5 ){ echo "★★★★★";}
                    ?>
                </div>
                <div class="p-plannercard--mini__scorenum">
                    <?php echo $pl_score; ?>
                </div>
                <div class="p-plannercard__scorecount mini">
                    (<?php echo '<a href="#">'.$pl_reviewcount.'</a>'; ?>)
                </div>
            </div>
        </div>

<?php endif; ?>


<?php
//--------------------------------------------------------
//  review - ranking 中
//--------------------------------------------------------
if( $args['type'] == "review__ranking" ) : ?>
        <div class="p-plannercard--middle">
            <?php // 関連プランナーから情報引き出して表示 ?>
            <div class="p-plannercard__image middle">
                <picture>
                    <source srcset="<?php echo $pl_image;?>">
                    <img src="<?php echo $pl_image;?>" alt="<?php echo $pl_name;?>" width="68" height="65" loading="lazy">
                </picture>
            </div>
            <div class="p-plannercard__data__wrapper middle">
                <div class="p-plannercard__company middle"><?php echo $pl_company;?></div>
                <div class="p-plannercard__name middle"><?php echo $pl_name;?></div>
                <div class="p-plannercard__score__wrapper middle">
                    <div class="p-plannercard__stars middle">
                    <?php
                        if( $pl_score <= 0 ){ echo "<span>★★★★★</span>";}
                        if( 0 < $pl_score && $pl_score <= 1 ){ echo "★<span>★★★★</span>";}
                        if( 1 < $pl_score && $pl_score <= 2 ){ echo "★★<span>★★★</span>";}
                        if( 2 < $pl_score && $pl_score <= 3 ){ echo "★★★<span>★★</span>";}
                        if( 3 < $pl_score && $pl_score <= 4 ){ echo "★★★★<span>★</span>";}
                        if( 4 < $pl_score && $pl_score <= 5 ){ echo "★★★★★";}
                    ?>
                    </div>
                    <div class="p-plannercard__scorenum middle">
                        <?php echo $pl_score; ?>
                    </div>
                    <div class="p-plannercard__scorecount middle">
                        (<?php echo '<a href="#">'.$pl_reviewcount.'</a>'; ?>)
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>

<?php
//--------------------------------------------------------
//  reportcardの中
//--------------------------------------------------------
if( $args['type'] == "reportcard" ) : ?>
<?php endif; ?>

<?php
    endwhile;
    //  
    //if( empty( $args['id'])){
        wp_reset_postdata();
    //}
?>
