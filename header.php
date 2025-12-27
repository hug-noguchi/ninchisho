<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MKL8GBT5');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<?php
  $description = '';

  if (is_page('basic_knowledge')) {
    $description = '認知症の初期症状・種類・原因を徹底解説。アルツハイマー型など4タイプの特徴、もの忘れとの違い、予防方法までわかりやすく網羅。「最近物忘れが多い」「家族の様子がおかしい」と感じたらまず読むべき基礎知識。';

  } elseif (is_page('diagnostic_referral')) {
    $description = '認知機能チェックが無料でできるアプリを紹介。スマホで簡単セルフチェック。もの忘れが気になる方、ご家族の変化を感じた方へ。医師監修で安心。認知症の早期発見・予防の第一歩を今日から始めましょう。';

  } elseif (is_page('gymnastics_introduction')) {
    $description = '認知症予防体操を動画で紹介。頭と体を同時に使う運動で脳を活性化。自宅で簡単にできる3つの基本動作を専門家が監修。シニアの健康づくり・介護予防に最適。楽しみながら毎日続けられるベルコ体操。';

  } elseif (is_singular('info')) {
    if (function_exists('aioseo')) {
        $description = aioseo()->meta->description->getPostDescription(get_queried_object());
    }
    if (empty($description)) {
        $description = trim(wp_title('', false)) . ' - ' . get_bloginfo('description');
    }

  } else {
    $description = trim(wp_title('', false));
    if ($description) $description .= ' - ';
    $description .= get_bloginfo('description');
  }
?>
<meta name="description" content="<?php echo esc_attr($description); ?>">
<title><?php global $page, $paged;
  wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'tpl_087_rwd' ), max( $paged, $page ) );
	?></title>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" sizes="32x32">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-touch-icon.png" sizes="192x192">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style02.css">
<?php if ( is_page(array("gymnastics_introduction")) ) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gymnastics.css<?php echo '?' .filemtime( get_template_directory() . '/css/gymnastics.css'); ?>">
  <?php elseif ( is_page("diagnosis") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/diagnosis.css<?php echo '?' .filemtime( get_template_directory() . '/css/diagnosis.css'); ?>">
  <?php elseif ( is_page("diagnostic_referral") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/diagnostic_referral.css<?php echo '?' .filemtime( get_template_directory() . '/css/diagnostic_referral.css'); ?>">
  <?php elseif ( is_page("basic_knowledge") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/basic_knowledge.css<?php echo '?' .filemtime( get_template_directory() . '/css/basic_knowledge.css'); ?>">
  <?php elseif ( is_singular("info") ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/info.css<?php echo '?' .filemtime( get_template_directory() . '/css/info.css'); ?>">
<?php endif; ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery1.4.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<?php if( is_page('') ) : ?>
<?php endif; ?>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "oiw9cuy44k");
</script>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKL8GBT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if (  is_front_page() ||  is_home() ) : ?>
<?php endif; ?>

<header>
  <div class="inn_head">
    <div class="header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php bloginfo('template_url'); ?>/img/logo_head.jpg" alt="<?php bloginfo( 'description' ); ?>" class="pc">
		  <img src="<?php bloginfo('template_url'); ?>/img/logo_head.jpg" alt="<?php bloginfo( 'description' ); ?>" class="sp">
      </a>
    </div>
    <div class="header__cnt pc">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>basic_knowledge/">認知症の基礎知識</a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral/">認知機能診断紹介</a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>gymnastics_introduction/">ベルコ体操紹介</a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>search/"><span>記事を探す</span></a>
    </div>
    <nav class="sp">
      <div class="cp_fullscreenmenu">
        <input class="toggle" type="checkbox" />
        <div class="hamburger"><span></span></div>
        <div class="menu">
          <div>
            <ul>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list/">読まれている記事一覧</a>
              </li>
              <li class="pl">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list#tab02_content">ー 認知症について</a>
              </li>
              <li class="pl">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list#tab03_content">ー 認知症予防</a>
              </li>
              <li class="pl">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list#tab04_content">ー 認知症介護者向け</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral/">認知機能診断紹介</a>
              </li>
              <li class="pl">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral#diagnostic_can">ー 認知機能チェックによってできること</a>
              </li>
              <li class="pl">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral#supervisor">ー 監修者</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>basic_knowledge/">認知症の基礎知識</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>gymnastics_introduction/">ベルコ体操紹介</a>
              </li>
              <li class="hd_search_sp">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>search/"><span>記事を探す</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>

<main>
