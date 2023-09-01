<?php
    //  一旦パーツ化
    //  実際にはinstagramの最新情報を取得するか
    //  記事か何かに、８つ表示する情報をリストで作成できるようにするべき
?>
<?php if( empty( $args['sphide'] ) ) : ?>
<div class="griditem">
<?php endif; ?>
<?php if( isset( $args['sphide'] ) ) : ?>
<div class="griditem u-hidden__sp">
<?php endif; ?>

    <picture>
        <source srcset="<?php echo GET_PATH()?>/instagram/<?php echo $args['file'];?>">
        <img src="<?php echo GET_PATH()?>/instagram/<?php echo $args['file'];?>" alt="<?php echo $args['alt'];?>" width="<?php echo $args['w'];?>" height="<?php echo $args['h'];?>">
    </picture>
</div>

