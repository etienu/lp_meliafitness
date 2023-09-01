<?php
    $my_args = null;
    //  slugが存在する場合、直接名前指定表示
    if( isset( $args['slug'])){
        //echo $args['slug'];
        $my_args = array(
            'post_type' => 'keyword',    //  カスタム投稿名
            'name' => $args['slug'],    //  スラッグ名
            'posts_per_page' => '1'     //  表示させたい件数を指定
            );
    
    }
    ?>

<?php
    $my_query = new WP_Query($my_args);
    while ($my_query->have_posts()) :
        $my_query->the_post();
        $pickup__title = str_replace('非公開: ', '', get_the_title());
        //$pl_name = get_post_meta($post->ID, 'planner_name', true);
//--------------------------------------------------------
//  type == pickup
//--------------------------------------------------------
if( $args['type'] == "pickup" ) : ?>
    <div class="p-pickup__tags__card">
        <div class="call"><?php echo $pickup__title;?></div>
        <div class="p-card__plantags__wrapper">
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
<?php endif; ?>


<?php
    endwhile;
    wp_reset_postdata();
?>
