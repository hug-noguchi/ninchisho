<?php
/*
*Template Name:認知機能診断
*/
get_header(); ?>

<article class="page works info cognitive_function">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kv_blue.png" class="pc" alt="青色背景"/>
        <img src="<?php echo get_template_directory_uri(); ?>/img/kv_blue_sp.png" class="sp" alt="青色背景"/>
        <span class="page_ttl js_typing ">アプリで始める、<br class="sp">やさしい認知機能チェック</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
  <section class="cognitive_function">
    <div class="sec_inner">
      <h2>認知機能チェックとは？</h2>
      <p class="cognitive_function_lead">
        認知機能チェックとは、記憶力・判断力・注意力・言語能力など、脳の働きに関わる機能を確認するための簡単な検査です。<br>
        主に以下のような目的で実施されます。
      </p>
      <div class="cognitive_function_box">
        <ul class="cognitive_function_list">
          <li><span>認知症の早期発見</span></li>
          <li><span>脳卒中や事故後の影響の把握</span></li>
          <li><span>加齢による認知機能の変化の確認</span></li>
          <li><span>介護や日常生活への支援の必要性の判断</span></li>
        </ul>
        <div class="cognitive_function_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/cognitive_function_image.png" alt="認知機能チェックとは？">
        </div>
      </div>
      <p class="cognitive_function_txt">
        特に高齢者の運転免許更新時や健康診断の一環として用いられます。<br>
        検査では、記憶力や見当識（時間や場所を把握する力）などが評価され、簡易な質問形式で行われることが一般的です。
      </p>
    </div>
  </section>
  <section class="prevention">
    <div class="sec_inner">
      <div class="sec_title">
        <h2><span>アプリで簡単。<br>認知症予防の第一歩。</span></h2>
        <div class="prevention_title_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/prevention_title_image.png" alt="イメージ画像">
        </div>
      </div>
      <div class="prevention_box">
        <div class="prevention_image_box">
          <div class="prevention_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/prevention_image.png" alt="アプリで簡単。認知症予防の第一歩。">
          </div>
          <p>※会員登録には専用のアプリをダウンロードして頂く必要があります。</p>
        </div>
        <div class="prevention_txt">
          <p>
            ベルコが運営する<strong>生活支援アプリ</strong>「<span class="underline_yellow"><strong>ベルコメンバーズ</span></strong>」では、認知症予防の専門医・浦上克哉教授（日本認知症予防学会代表理事）監修による「<span class="underline_yellow"><strong>認知機能チェック</strong></span>」をご利用いただけます。
          </p>
          <p>
            アプリに登録すれば、ご自宅にいながら手軽にチェックが可能。
            結果はグラフで分かりやすく表示され、ご自身やご家族の健康管理に役立てていただけます。
          </p>
          <p>
            チェック結果は、総合点だけでなく各診断項目ごとの得点や専門医によるコメントも確認できます。<br>
            過去の結果は自動で保存され、月ごとの点数推移はグラフで色分け表示されるため、状態の変化を一目で把握できます。<br>
            さらに、過去10回分の履歴も一覧で確認でき、継続的な健康管理に役立ちます。
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="app_box">
    <div class="app_box_wrapper pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/bg_app.png" class="bg_app_box">
      <div class="sec_inner">
        <div class="app_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/appstore_image.png" alt="ベルコメンバーズ">
        </div>
        <div class="app_detail">
          <p class="app_detail_title">\ 無料ダウンロード /</p>
          <div class="appstore_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/logo_bellcomembers.png" alt="ベルコメンバーズロゴ">
          </div>
          <p class="app_detail_txt">【ベルコメンバーズアプリ】をダウンロードする</p>
          <div class="btn_app_box">
            <div class="btn_appstore">
              <a href="https://apps.apple.com/jp/app/%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA%E3%82%A2%E3%83%97%E3%83%AA/id6473576667?utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_ios" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_ios.svg" alt="appstore">
              </a>
            </div>
            <div class="btn_googleplay">
              <a href="https://play.google.com/store/search?q=%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA&c=apps&pli=1&utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_android" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_android.svg" alt="googlepay">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="app_box_wrapper sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/bg_app_sp.png" class="bg_app_box">
      <div class="sec_inner">
        <div class="app_detail">
          <p class="app_detail_title">\ 無料ダウンロード /</p>
          <div class="appstore_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/logo_bellcomembers.png" alt="ベルコメンバーズロゴ">
          </div>
          <div class="app_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/appstore_image.png" alt="ベルコメンバーズ">
          </div>
          <p class="app_detail_txt">【ベルコメンバーズアプリ】<br class="sp">をダウンロードする</p>
          <div class="btn_app_box">
            <div class="btn_appstore">
              <a href="https://apps.apple.com/jp/app/%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA%E3%82%A2%E3%83%97%E3%83%AA/id6473576667?utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_ios" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_ios.svg" alt="appstore">
              </a>
            </div>
            <div class="btn_googleplay">
              <a href="https://play.google.com/store/search?q=%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA&c=apps&pli=1&utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_android" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_android.svg" alt="googlepay">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="merit">
    <div class="sec_inner">
      <h2>ベルコメンバーズでできる<br>「認知機能チェック」の3つのメリット</h2>
      <ul class="merit_list">
        <li class="merit_item">
          <div class="merit_box">
            <div class="merit_badge">
              <div class="merit_badge_inner">
                <span class="merit_label">メリット</span>
                <span class="merit_num">01</span>
              </div>
            </div>
            <h3 class="merit_title">ゲーム感覚だから、<br>気軽にチェックが続けられる！</h3>
            <div class="merit_image sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit01_image.png" alt="ゲーム感覚だから、気軽にチェックが続けられる！">
            </div>
            <p class="merit_txt">
              認知機能チェックと聞くと難しそうに思えるかもしれませんが、ベルコメンバーズのチェック機能は、ゲームのような感覚で楽しめる設計です。<br>
              日常の延長で取り組める内容なので、年齢を問わず始めやすく、無理なく続けられます。<br>
              「気づいたときに気軽にチェック」が自然と習慣になる仕組みです。
            </p>
          </div>
          <div class="merit_image pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit01_image.png" alt="ゲーム感覚だから、気軽にチェックが続けられる！">
          </div>
        </li>
        <li class="merit_item">
          <div class="merit_box">
            <div class="merit_badge">
              <div class="merit_badge_inner">
                <span class="merit_label">メリット</span>
                <span class="merit_num">02</span>
              </div>
            </div>
            <h3 class="merit_title">記録が残るから、<br>小さな変化も見逃さない！</h3>
            <div class="merit_image sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit02_image.png" alt="記録が残るから、小さな変化も見逃さない！">
            </div>
            <p class="merit_txt">
              チェック結果はアプリ内に自動で保存され、過去の結果と比較しながら確認できます。<br>
              自分では気づきにくい変化もデータとして「見える化」されるので、状態の変化に早く気づくことができます。<br>
              生活習慣の見直しや医師への相談など、早めの対策に役立てられます。
            </p>
          </div>
          <div class="merit_image pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit02_image.png" alt="記録が残るから、小さな変化も見逃さない！">
          </div>
        </li>
        <li class="merit_item">
          <div class="merit_box">
            <div class="merit_badge">
              <div class="merit_badge_inner">
                <span class="merit_label">メリット</span>
                <span class="merit_num">03</span>
              </div>
            </div>
            <h3 class="merit_title">医師監修の安心チェックで、<br>信頼して続けられる！</h3>
            <div class="merit_image sp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit03_image.png" alt="医師監修の安心チェックで、信頼して続けられる！">
            </div>
            <p class="merit_txt">
              ベルコメンバーズのチェックは、医師監修のもと開発されています。<br>
              専門的な視点に基づいた内容なので、自己流では把握しづらい認知機能の状態も正しく評価可能です。<br>
              信頼できるからこそ、安心して継続できる、そんなセルフケアツールとして活用いただけます。
            </p>
          </div>
          <div class="merit_image pc">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/merit03_image.png" alt="医師監修の安心チェックで、信頼して続けられる！">
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="operation">
    <div class="sec_inner">
      <div class="sec_title">
        <div class="operation_title_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/operation_title_image.png" alt="イメージ画像">
        </div>
        <h2><span>かんたん操作でできる！<br>『認知機能チェック』の使い方</span></h2>
      </div>
      <p class="operation_lead">『認知機能チェック』の使い方をご紹介します。</p>
      <ul class="operation_list">
        <li>
          <p class="operation_num">01</p>
          <div class="operation_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/operation01.png" alt="ホーム画面の「認知機能チェック」をタップします。">
          </div>
          <p class="operation_txt">ホーム画面の「認知機能チェック」をタップします。</p>
        </li>
        <li>
          <p class="operation_num">02</p>
          <div class="operation_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/operation02.png" alt="「認知機能チェックを始める」をタップします。">
          </div>
          <p class="operation_txt">「認知機能チェックを始める」をタップします。</p>
        </li>
        <li>
          <p class="operation_num">03</p>
          <div class="operation_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/operation03.png" alt="「スタート」をタップしチェックをスタートします。">
          </div>
          <p class="operation_txt">「スタート」をタップしチェックをスタートします。</p>
        </li>
        <li>
          <p class="operation_num">04</p>
          <div class="operation_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/operation04.png" alt="15問の認知機能チェックのテストが終了すると結果が表示されます。">
          </div>
          <p class="operation_txt">15問の認知機能チェックのテストが終了すると結果が表示されます。</p>
        </li>
      </ul>
    </div>
  </section>
  <?php include get_template_directory() . '/template/appservice.php'; ?>
  <?php include get_template_directory() . '/template/appbox.php'; ?>
  <section class="supervisor_new">
    <div class="sec_inner">
      <div class="supervisor_new_image pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/supervisor_round.png" alt="監修者 浦上 克哉 教授">
      </div>
      <div class="supervisor_new_box">
        <h2 class="pc">
          <span>監修者</span><br><span class="supervisor_name">浦上 克哉</span> <span class="supervisor_sub_title">教授</span>
        </h2>
        <div class="supervisor_new_title sp">
          <div class="supervisor_new_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/diagnostic_referral/supervisor_round.png" alt="監修者 浦上 克哉 教授">
          </div>
          <h2>
            <span>監修者</span><br><span class="supervisor_name">浦上 克哉</span> <span class="supervisor_sub_title">教授</span>
          </h2>
        </div>
        <div class="supervisor_new_txt">
          <div>
            日本認知症予防学会代表理事<br>
            日本老年精神医学会理事<br>
            日本老年学会理事<br>
            日本認知症予防学会専門医
          </div>
          <div class="career">
            <p><span class="year">1983年</span><span class="text">鳥取大学医学部医学科卒業</span></p>
            <p><span class="year">1988年</span><span class="text">同大大学院博士課程修了</span></p>
            <p><span class="year">1990年</span><span class="text">同大脳神経内科・助手</span></p>
            <p><span class="year">1996年</span><span class="text">同大脳神経内科・講師</span></p>
            <p><span class="year">2001年</span><span class="text">同大保険学科生体制御学講座環境保健学分野の教授（2022年まで）</span></p>
            <p><span class="year">2016年</span><span class="text">北翔大学客員教授（併任）</span></p>
            <p><span class="year">2022年</span><span class="text">鳥取大学医学部保健学科認知症予防学講座（寄付講座）教授に就任</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>
