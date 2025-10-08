<?php
/*
*Template Name:認知症予防の体操
*/
get_header(); ?>

<article class="page works info gymnastics">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_gymnastics.png" alt="認知症予防の体操" class="pc"/>
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_gymnastics_sp.png" alt="認知症予防の体操" class="sp"/>
        <span class="page_ttl js_typing">
          自宅でできる体操で認知症を予防しよう！
          <br><br>
          <span class="page_txt">いつも元気で健やかに<br>
          そんな願いを込めた体操を作りました。<br>
          頭で考えながら楽しく動くことで<br>
          認知症の予防になります。</span>
        </span>
      </div>
    </h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/kv_bell_luco.png" alt="ベルルコちゃん" class="bell_luco"/>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>

  <section>
    <div class="lead_box">
      <p class="lead_detail">
        <span class="lead_ttl">自宅でできる体操で<br>
        認知症を予防しよう！</span>
        <br><br>
        <span class="lead_txt">
          この体操は巧緻性の運動を<br class="sp">目的とした体操です。<br>
          ちょっと複雑な運動を<br class="sp">頭で考えながら体を動かすので、<br>
          脳トレの運動として行ってみて下さい。
      </span>
      </p>
    </div>
  </section>

  <section class="bellco">
    <div>
      <h2 class="bellco_ttl">認知症予防の体操</h2>
      <div class="youtube">
        <video controls poster="<?php echo get_template_directory_uri(); ?>/img/thum_youtube.png">
          <source src="<?php echo get_template_directory_uri(); ?>/img/gymnastics.mp4" type="video/mp4">
        </video>
      </div>
      <div class="supervisor">
        <img src="<?php echo get_template_directory_uri(); ?>/img/supervisor_ttl.png" alt="認知症予防の体操の監修者" class="supervisor_ttl">
        <div class="supervisor_box">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bellco_supervisor.png" alt="認知症予防の体操の監修者 写真">
          <div class="supervisor_detail">
            <p class="supervisor_name">三宅 良輔先生</p>
            <p class="supervisor_txt">1969年、神奈川県生まれ。日本体育大学体育学部教授、医学博士。日本体操学会副会長、日本Gボール協会理事。専門分野は幼児から高齢者までの体つくり運動や健康体操。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="btn_app">
    <p class="btn_app_txt">ベルコメンバーズアプリDLで認知症予防の体操の解説も確認できます！</p>
    <div>
      <?php include get_template_directory() . '/template/appstore.php'; ?>
    </div>
  </section>

  <section class="diagnosis_link">
    <div class="inn02">
        <h2 class="ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/diagnostic_referral/"><span>認知機能チェックはこちら</span></a></h2>
    </div>
  </section>

</article>
<?php get_footer(); ?>
