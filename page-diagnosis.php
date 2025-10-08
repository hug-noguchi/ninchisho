<?php
/*
*Template Name:認知症機能診断結果
*/
get_header(); ?>

<article class="page works info diagnosis">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/kv_diagnosis.png" alt="認知症機能診断結果"/>
        <span class="page_ttl js_typing ">認知症機能診断結果</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>

  <section class="diagnosis_box">
    <div class="results_tb">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/can02.png" alt="認知機能診断結果 見本">
      </div>
    </div>
    <div class="diagnosis_txt">
      <p class="diagnosis_ttl">会員登録するとできること</p>
      <p class="diagnosis_lead">
        認知機能診断を行ったあとの点数詳細<br>
        過去の認知機能診断結果について確認することができます。
      </p>
    </div>
    <div class="results_tb">
      <img src="<?php echo get_template_directory_uri(); ?>/img/can03.png" alt="認知機能診断結果一覧 見本">
    </div>
    <div class="btn_box">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/btn_check02_b.png" alt="会員登録してもう一度認知症チェック">
      </a>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/btn_check02_w.png" alt="認知症の予防に取り組む">
      </a>
    </div>
  </section>

  <section class="cognition">
    <div class="cognition_inn">
      <p class="cognition_ttl">それぞれの認知機能について</p>
      <p class="cognition_lead">
        認知機能診断を行ったあとの点数詳細、過去の認知機能診断結果について確認することができます。
      </p>
      <ul class="cognition_list">
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_date.png" alt="日時の見当識">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_assignment.png" alt="数唱課題">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_shapes.png" alt="図形認識">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_shapes02.png" alt="図形記憶">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_number.png" alt="数字と文字の順序課題">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_vision.png" alt="視覚・空間記憶">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_goods.png" alt="物品呼称">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
        <li class="cognition_item">
          <div class="cognition_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis/icon_ delay.png" alt="遅延再認">
          </div>
          <div class="cognition_box">
            <p class="cognition_txt">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <p class="btn_cognition">
              <a href="#">
                <span>詳しくはこちら</span>
              </a>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="btn_app">
    <div>
      <?php include get_template_directory() . '/template/appstore.php'; ?>
    </div>
  </section>

</article>
<?php get_footer(); ?>
