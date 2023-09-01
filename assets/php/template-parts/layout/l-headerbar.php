<?php
//----------------------------------------
//  ヘッダーバー
//----------------------------------------
?>
<?php
  $homeurl = esc_url(home_url());
  //  トップページの場合はスムーススクロールさせる為URLを入れない
  if( is_home() || is_front_page() ) :
    $homeurl = "";
  endif;
?>

<header class="l-header">

<div class="p-headerbar">
  <div class="p-headerbar__menulist left">
    <ul>
      <li class="p-headerbar__menuitem"><a href="#profile">OWNER’S PROFILE</a></li>
      <li class="p-headerbar__menuitem"><a href="#feature">FEATURE</a></li>
      <li class="p-headerbar__menuitem"><a href="#membersvoice">MEMBER’S VOICE</a></li>
    </ul>
  </div>
  <div class="p-headerbar__logo">
    <a href="#">
      <picture>
          <source srcset="<?php echo GET_PATH()?>/header/logo-full-pc.png">
          <img src="<?php echo GET_PATH()?>/header/logo-full-pc.png" alt="MELIA FITNESS" width="130" height="94">
      </picture>
    </a>
  </div>
  <div class="p-headerbar__menulist right">
    <ul>
      <li class="p-headerbar__menuitem"><a href="#price">PRICE</a></li>
      <li class="p-headerbar__menuitem"><a href="#qanda">Q&A</a></li>
      <li class="p-headerbar__menuitem"><a href="#access">ACCESS</a></li>
    </ul>
  </div>
  <div class="p-headerbar__buttonarea">
    <div class="c-button__cv p-button__cv">LINE予約</div>
    <div class="p-hamburger__wrapper">
      <div class="p-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</div>

</header>

<?php
//----------------------------------------
//  SPメニュー
//----------------------------------------
?>
<div class="p-spmenu__background"></div>
<div class="p-spmenu">
  <div class="p-spmenu__inner">
    <div class="p-spmenu__list__wrapper">
      <ul>
        <li><a href="<?php echo $homeurl; ?>#">TOP</a></li>
        <li><a href="<?php echo $homeurl; ?>#profile">OWNER’S PROFILE</a></li>
        <li><a href="<?php echo $homeurl; ?>#feature">FEATURE</a></li>
        <li><a href="<?php echo $homeurl; ?>#membersvoice">MEMBER’S VOICE</a></li>
        <li><a href="<?php echo $homeurl; ?>#price">PRICE</a></li>
        <li><a href="<?php echo $homeurl; ?>#qanda">Q&A</a></li>
        <li><a href="<?php echo $homeurl; ?>#access">ACCESS</a></li>
      </ul>
    </div><!-- p-spmenu__list__wrapper -->
    <div class="p-spmenu__snswrapper">
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
    </div><!-- p-profile__list__wrapper -->

  </div>
</div>

<?php /* */ ?>
