<?php

    $my_args = null;
    //  検索するレポート記事の設定
    //  nameが存在する場合、直接名前指定表示
    if( isset( $args['name'])){
        $my_args = array(
            'post_type' => 'reports',  //  カスタム投稿名report
            'name' => $args['name'],    //  スラッグ名
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    
    }
    //  index指定
    if( isset( $args['index'])){
        $my_args = array(
            'post_type' => 'reports',  //  カスタム投稿名report
            'offset' => $args['index'], //  表示開始する番号
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    
    }
    //  postid指定
    if( isset( $args['postid'])){
        $my_args = array(
            'post_type' => 'reports',  //  カスタム投稿名report
            'p' => $args['postid'], //  記事ID
            'posts_per_page' => '1' //   表示させたい件数を指定
            );
    }
    //  plan指定
    if( isset( $args['plan'])){
        $my_args = array(
            'post_type' => 'reports',  //  カスタム投稿名report
            'posts_per_page' => '1', //   表示させたい件数を指定
            'order' => 'DESC', // 投稿の表示順の指定
            'tax_query' => array(
                array(
                  'taxonomy' => 'plancat_taxonomy',
                  'terms' => $args['plan'],
                  'field' => 'slug'
                ),
            )
        );
    }
    //  新着 新しい順 most recent指定
    if( isset( $args['mostrecent'])){
        $my_args = array(
            'post_type' => 'reports',  //  カスタム投稿名report
            'posts_per_page' => '1', //   表示させたい件数を指定
            'offset' => $args['mostrecent'], //  表示開始する番号
            'order' => 'ASC' // 投稿の表示順の指定
        );
    }

    //  レポート記事取得
    $my_query = new WP_Query($my_args);
    ?>

<?php
    //  レポート記事を1つ取得
    while ($my_query->have_posts()) :
        $my_query->the_post();
        //  レポートデータ
    $rep_title = get_post_meta($post->ID, 'report_title', true);
    $rep_image = wp_get_attachment_url(get_post_meta($post->ID, 'report_image', true));
    //  レポート記事データ
    $rep_catchcopy = get_post_meta($post->ID, 'report_catchcopy', true);
    $rep_body = strip_tags(get_the_content());
    //  担当プランナーデータ
    $rep_plannerid = get_post_meta($post->ID, 'report_planner', true);

//--------------------------------------------------------
//  recent中
//--------------------------------------------------------
if( $args['type'] == "recent" ) : ?>
    <div class="p-reportcard">
        <div class="readmore u-display__sp">Read more</div>
        <div class="report__image">
            <button class="p-card__likebutton js-cookiebutton" data-name="report<?php echo $post->ID;?>" data-type="bool"></button>
            <picture>
                <source srcset="<?php echo $rep_image;?>">
                <img src="<?php echo $rep_image;?>" alt="<?php echo $rep_title;?>" width="322" height="216" loading="lazy">
            </picture>
        </div>

        <div class="report__data">
            <div class="title"><?php echo $rep_title;?></div>
            <div class="border"></div>
            <div class="plan__category">
                <ul>
                <?php
                    //  付属するタクソノミー「プランカテゴリ」のタームを全部書き出す
                    $custom_post_tag = 'plancat_taxonomy'; // タクソノミーのスラッグを指定
                    $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                    if(!empty($custom_post_tag_terms)){
                        if(!is_wp_error( $custom_post_tag_terms )){
                            foreach($custom_post_tag_terms as $term){
                                $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                                $tag_term_name = $term->name;
                                if( empty($term->description) ){
                                    echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                }else{
                                    //  説明文に「色を指定する文字列」を書いているのでクラス名として利用
                                    echo '<li class="'.$term->description.'"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                }
                            }
                        }
                    }
                ?>
                </ul>
            </div>

            <div class="area__wrapper">
                <div class="p-card__area__title"></div>
                <div class="area__tags">
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
            <div class="plantags__wrapper">
                <ul>
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

<?php endif; ?>

<?php
//--------------------------------------------------------
//  populer_ranking中
//--------------------------------------------------------
if( $args['type'] == "populer_ranking" ) :
    $class__rank = "";
    //  No.01
    if( $args['rank'] == 1 ){ $class__rank = "01"; }
    if( $args['rank'] == 2 ){ $class__rank = "02"; }
    if( $args['rank'] == 3 ){ $class__rank = "03"; }
?>
    <div class="p-reportcard p-reportcard--ranking <?php echo 'no'.$class__rank;?>">
        <div class="ranklabel"><span>No.</span><br><?php echo $class__rank;?></div>
        <div class="readmore">Read more</div>
        <button class="p-card__likebutton js-cookiebutton" data-name="report<?php echo $post->ID;?>" data-type="bool"></button>


        <div class="report__info__wrapper">
            <div class="report__image">
                <picture>
                    <source srcset="<?php echo $rep_image;?>">
                    <img src="<?php echo $rep_image;?>" alt="<?php echo $rep_title;?>" width="322" height="216" loading="lazy">
                </picture>
            </div>

            <div class="report__data">
                <div class="title"><?php echo $rep_title;?></div>
                <div class="plan__category">
                        <ul>
                        <?php
                            //  付属するタクソノミー「プランカテゴリ」のタームを全部書き出す
                            $custom_post_tag = 'plancat_taxonomy'; // タクソノミーのスラッグを指定
                            $custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag,array( 'orderby'=>'term_id' ) );
                            if(!empty($custom_post_tag_terms)){
                                if(!is_wp_error( $custom_post_tag_terms )){
                                    foreach($custom_post_tag_terms as $term){
                                        $tag_term_link = get_term_link($term->slug, $custom_post_tag);
                                        $tag_term_name = $term->name;
                                        if( empty($term->description) ){
                                            echo '<li><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                        }else{
                                            //  説明文に「色を指定する文字列」を書いているのでクラス名として利用
                                            echo '<li class="'.$term->description.'"><a href="'.$tag_term_link.'">'.$tag_term_name.'</a></li>';
                                        }
                                        //term_description( $term->id, $term->slug );
                                    }
                                }
                            }
                        ?>
                        </ul>
                    </div>

                <div class="area__wrapper">
                    <div class="p-card__area__title"></div>
                    <div class="area__tags">
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
                <div class="plantags__wrapper">
                    <ul>
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
        <div class="border u-hidden__sp"></div>
        <?php /* 記事データ */ ?>
        <?php
//            $article_body_text = "レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。
//            レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。レポート本文が入ります。";
            //$rep_body=mb_convert_encoding($rep_body,"UTF-8","UTF-8");
            $article_body_text = mb_strimwidth($rep_body, 0, 300, '…',"UTF-8");
            //  CSSの-webkit-line-clampで対応
            //if( mb_strlen( $article_body_text )  ){}
        ?>
        <div class="report__article u-hidden__sp">
            <div class="article__catchcopy"><?php echo $rep_catchcopy;?></div>
            <div class="article__body"><?php echo $article_body_text; ?></div>
            <?php //if( $args['rank'] != 1 ){ continue; } ?>
        </div>

        <?php /* プランナーデータはプランナーカードに任せる */ ?>
        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reports_ranking','id' => $rep_plannerid ] ); ?>
    </div>

<?php endif; ?>

<?php
//--------------------------------------------------------
//  plan別 中
//--------------------------------------------------------
if( $args['type'] == "plan_ranking" || $args['type'] == "new" ) :
    $class__rank = "";
    $class__new = "";
    if( $args['type'] == "new" ) $class__new = "new";
    //  No.01
    if( isset( $args['rank'] ) && $args['rank'] == 1 ){ $class__rank = "01"; }
?>
    <div class="p-reportcard p-reportcard--planranking<?php echo ' no'.$class__rank;?><?php echo " ".$class__new;?>">
<?php if( $args['type'] == "plan_ranking" ) : ?>
    <div class="readmore u-hidden__sp">Read more</div>
<?php endif; ?>
<?php if( $args['type'] == "new" ) : ?>
    <div class="readmore">Read more</div>
<?php endif; ?>
        <button class="p-card__likebutton js-cookiebutton" data-name="report<?php echo $post->ID;?>" data-type="bool"></button>


        <div class="report__info__wrapper">
            <div class="report__image">
                <picture>
                    <source srcset="<?php echo $rep_image;?>">
                    <img src="<?php echo $rep_image;?>" alt="<?php echo $rep_title;?>" width="322" height="216" loading="lazy">
                </picture>
            </div>

            <div class="report__data">
                <div class="title"><?php echo $rep_title;?></div>
                <div class="border u-hidden__tab-pc"></div>

                <div class="area__wrapper">
                    <div class="p-card__area__title"></div>
                    <div class="area__tags">
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
                <div class="plantags__wrapper">
                    <ul>
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

        <?php /* プランナーデータはプランナーカードに任せる */ ?>
        <?php get_template_part(GET_PATH_R('template').'/object/project/p-card-planner', null, ['type' => 'reports_ranking','id' => $rep_plannerid ] ); ?>
    </div>

<?php endif; ?>

<?php
//--------------------------------------------------------
//  new
//--------------------------------------------------------
if( $args['type'] == "new" ) : ?>
<?php endif; ?>

<?php
    endwhile;
    wp_reset_postdata();
?>
