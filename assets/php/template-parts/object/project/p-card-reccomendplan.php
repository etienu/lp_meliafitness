<?php
    $plan_imagefile = "";
    $plan_title ="";
    $plan_link ="";
    $plan_color = "gray";
    $plan_alt = "";
    //  nameが存在する場合、直接名前指定表示
    if( isset( $args['index'])){
        switch($args['index'] ){
        case 0:
            //  plan/
            $plan_imagefile ="reccomend-plan01.png";
            $plan_title="国内<br>挙式・披露宴";
            $plan_color = "perple";
            break;
        case 1:
            $plan_imagefile ="reccomend-plan02.png";
            $plan_title="海外<br>ウェディング";
            $plan_color = "blue";
            break;
        case 2:
            $plan_imagefile ="reccomend-plan03.png";
            $plan_title="フォト<br>ウェディング";
            $plan_color = "orange";
            break;
        case 3:
            $plan_imagefile ="reccomend-plan04.png";
            $plan_title="家族・少人数<br>ウェディング";
            $plan_color = "sand";
            break;
        case 4:
            $plan_imagefile ="reccomend-plan05.png";
            $plan_title="リゾート・ビーチ<br>アウトドア<br>ウェディング";
            $plan_color = "green";
            break;
        }
    }
    $plan_alt = str_replace( '<br>', ' ', $plan_title );
    ?>

    <a href="">
        <div class="p-reccomendplancard <?php echo $plan_color?> hover__reverse">
            <div class="reccomendplan__image">
                <picture>
                    <source srcset="<?php echo GET_PATH().'/plan/'.$plan_imagefile;?>">
                    <img src="<?php echo GET_PATH().'/plan/'.$plan_imagefile;?>" alt="<?php echo $plan_alt;?>" width="125" height="125" loading="lazy">
                </picture>
            </div>
            <div class="reccomendplan__data">
                <div class="title"><?php echo $plan_title;?></div>
            </div>
        </div>
    </a>
