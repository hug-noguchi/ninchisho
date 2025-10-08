<?php
/*
*Template Name:認知機能チェック
*/
get_header(); ?>

<article class="page works info diagnostic_referral">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kv_diagnostic_referral.png" alt="認知機能診断を行ってみましょう"/>
        <span class="page_ttl js_typing ">認知機能チェックを<br class="sp">行ってみましょう</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>

  <section class="diagnostic_referral_lead">
    <div class="lead_inn inn02">
      <p class="lead_txt">
        認知症は誰にでもかかる可能性のある身近な病気です。<br>
        まずはあなたの認知機能をチェックしてみませんか？
      </p>
    </div>
  </section>

  <section class="diagnostic_can" id="diagnostic_can">
    <div class="can_inn">
      <h2 class="can_ttl">認知機能チェックによって<br class="sp">できること</h2>
      <div class="can_box">
        <div class="can_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/can01.png" alt="認知機能診断によってできること">
        </div>
        <p class="can_lead">
          認知症や軽度認知障害（MCI）になると、脳の認知機能がさまざまな要因で低下することがあります。<br>
          認知機能チェックでは、個々の認知機能のレベルを理解し、適切な介入や予防策を考えることに役立ちます。<br>
          更にアプリの登録を行うと過去の結果と推移も確認でき認知機能の状態が視覚的に確認できます。
          <br><br>
          ※会員登録には専用のアプリをダウンロードして頂く必要があります。
        </p>
      </div>
      <div class="can_table">
        <div class="results">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/can02.png" alt="認知機能診断結果">
          </div>
        </div>
        <div class="results_list">
          <img src="<?php echo get_template_directory_uri(); ?>/img/can03.png" alt="認知機能診断結果一覧">
        </div>
      </div>
      <div class="btn_member">
        <div>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/btn_check01_b.png" alt="会員登録してチェック">
          </a>
        </div>
        <!-- <div>
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/btn_check01_w.png" alt="会員登録せずにチェック">
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <section class="detection">
    <div class="detection_inn">
      <h2>認知症早期発見</h2>
      <div class="detection_box">
        <p class="detection_txt">
          認知機能チェックは認知症予防に有効な手段の1つです。
          <br><br>
          認知機能の低下を早く見つけることで、認知症の予防や症状の進行を遅らせることが期待できます。そのために、認知機能チェックで自分の認知機能のベースラインを知ることが重要です。
        </p>
        <div class="detection_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/detection.png" alt="認知症早期発見">
        </div>
      </div>
    </div>
  </section>


  <section class="supervisor" id="supervisor">
    <div class="supervisor_inn">
      <h2>監修者</h2>
      <div class="supervisor_box">
        <div class="supervisor_image">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/supervisor.png" alt="浦上 克哉教授">
          </div>
          <p class="supervisor_name">
            <span>
              浦上 克哉教授
            </span>
          </p>
        </div>
        <p class="supervisor_txt">
          日本認知症予防学会代表理事、日本老年精神医学会理事、日本老年学会理事、日本認知症予防学会専門医<br>
          ・1983年　鳥取大学医学部医学科卒業<br>
          ・1988年　同大大学院博士課程修了<br>
          ・1990年　同大脳神経内科・助手<br>
          ・1996年　同大脳神経内科・講師<br>
          ・2001年　同大保険学科生体制御学講座環境保健学分野の教授（2022年まで）<br>
          ・2016年　北翔大学客員教授（併任）<br>
          ・2022年　鳥取大学医学部保健学科認知症予防学講座（寄付講座）教授に就任
        </p>
      </div>
    </div>
  </section>

  <section class="btn_app">
    <div>
      <?php include get_template_directory() . '/template/appstore.php'; ?>
    </div>
  </section>

</article>
<?php get_footer(); ?>
