<?php
/*
*Template Name:体操で認知症予防！頭も体も一緒にリフレッシュ
*/
get_header(); ?>

<article class="page works info gymnastics">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/kv_gymnastics_introduction.png" class="pc" alt="体操で認知症予防！頭も体も一緒にリフレッシュ"/>
        <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/kv_gymnastics_introduction_sp.png" class="sp" alt="体操で認知症予防！頭も体も一緒にリフレッシュ"/>
        <span class="page_ttl js_typing ">体操で認知症予防！<br class="sp">頭も体も一緒にリフレッシュ</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
  <section class="why_prevention">
    <div class="sec_inner">
      <h2>どうして体操が<br class="sp">認知症予防になるの？</h2>
      <p class="why_prevention_lead">
        頭と体を同時に使うことで、脳と身体の両方にやさしく刺激を与えることができます。おうちでできる簡単な体操から、楽しみながら認知症予防をはじめてみませんか？まずは、動画を見ながら一緒にやってみましょう。
      </p>
      <div class="why_prevention_box">
        <div class="why_prevention_box_sublead">
          <p class="why_prevention_sublead">
            いつも元気で健やかに。<br>
            そんな願いを込めて、この体操をつくりました。<br>
            頭で考えながら楽しく体を動かすことで、<br class="sp">認知症予防につながります。
          </p>
          <div class="why_prevention_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/why_prevention_image.png" alt="イメージ画像">
          </div>
        </div>
        <div class="youtube">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/btn_youtube.png" alt="アイコン再生ボタン">
          <video controls playsinline poster="<?php echo get_template_directory_uri(); ?>/img/thum_youtube.png">
            <source src="<?php echo get_template_directory_uri(); ?>/img/gymnastics.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </section>
  <section class="movement">
    <div class="sec_inner">
      <div class="sec_title">
        <div class="movement_title_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement_title_image.png" alt="イメージ画像">
        </div>
        <h2><span>どんな動き？<br>3つの基本動作をわかりやすく解説</span></h2>
      </div>
      <ul class="movement_list">
        <li class="movement_item">
          <div class="movement_list_title">
            <p><span>01</span>鼻つまみ、耳つまみ</p>
          </div>
          <div class="movement_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement01_1.png" class="pc" alt="鼻つまみ、耳つまみ1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement01_2.png" class="pc" alt="鼻つまみ、耳つまみ2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement01_1_sp.png" class="sp" alt="鼻つまみ、耳つまみ1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement01_2_sp.png" class="sp" alt="鼻つまみ、耳つまみ2">
          </div>
          <ul class="movement_list_sublist">
            <li><p><span>1</span>片方の手で鼻をつまみ、もう片方の手で耳をつまみます。</p></li>
            <li><p><span>2</span>離して、手を入れ替えてみましょう。</p></li>
            <li><p><span>3</span>次は、手を入れ替えるときに拍手を入れてみましょう。</p></li>
            <li><p><span>4</span>鼻と耳をつまんだ手を一離したら、拍手。</p></li>
            <li><p><span>5</span>最後に手をクロスしてやってみましょう。</p></li>
          </ul>
        </li>
        <li class="movement_item">
          <div class="movement_list_title">
            <p><span>02</span>グーとパー</p>
          </div>
          <div class="movement_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement02_1.png" class="pc" alt="グーとパー1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement02_2.png" class="pc" alt="グーとパー2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement02_1_sp.png" class="sp" alt="グーとパー1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement02_2_sp.png" class="sp" alt="グーとパー2">
          </div>
          <ul class="movement_list_sublist">
            <li><p><span>1</span>片方の手をパーにして伸ばします。</p></li>
            <li><p><span>2</span>もう片方の手をグーにして胸に置きます。</p></li>
            <li><p><span>3</span>この手を入れ替える動作を繰り返しましょう。</p></li>
            <li><p><span>4</span>次に、片方の手をグーにして伸ばします。</p></li>
            <li><p><span>5</span>もう片方の手をパーにして胸に置きます。</p></li>
            <li><p><span>6</span>同じように、この手を入れ替える動作を繰り返しましょう。</p></li>
            <li><p><span>7</span>最後は、途中で手を入れ替えていきます。</p></li>
          </ul>
        </li>
        <li class="movement_item">
          <div class="movement_list_title">
            <p><span>03</span>腕の2拍子・3拍子</p>
          </div>
          <div class="movement_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement03_1.png" class="pc" alt="腕の2拍子・3拍子_1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement03_2.png" class="pc" alt="腕の2拍子・3拍子_2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement03_1_sp.png" class="sp" alt="腕の2拍子・3拍子_1">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/movement03_2_sp.png" class="sp" alt="腕の2拍子・3拍子_2">
          </div>
          <ul class="movement_list_sublist">
            <li><p><span>1</span>片方の腕を横・肩・下の順に3拍子で動かします。</p></li>
            <li><p><span>2</span>反対の手は、横→下の2拍子です。</p></li>
            <li><p><span>3</span>これを同時に、リズミカルにおこなってみましょう。</p></li>
            <li><p><span>4</span>最後に左右を入れ替えてみましょう。</p></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="comment">
      <div class="sec_inner comment_inner">
        <div class="comment_title">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/comment_title.png" alt="監修者 三宅先生のコメント">
        </div>
        <p class="comment_txt">
          体操は身体だけでなく、心や精神にも良い影響を与える重要な活動です。<br>
          定期的な体操は健康を促進し、柔軟性や筋力を向上させるだけでなく、ストレスを軽減し、気分をリフレッシュさせる役割を果たします。<br>
          日常的に楽しみながら体操を取り入れましょう。
        </p>
      </div>
    </div>
  </section>
  <section class="gymnastics_everyday">
    <div class="sec_inner">
      <div class="sec_title">
        <div class="gymnastics_everyday_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/gymnastics_everyday_image.png" alt="イメージ画像">
        </div>
        <h2><span>認知症予防だけじゃない<br>体も心も軽くなる <br class="sp">“ベルコのまいにち体操”</span></h2>
      </div>
      <p class="gymnastics_everyday_lead">
        アプリ「ベルコメンバーズ」では、認知症予防だけでなく、就寝前のストレッチやお出かけ前の体ほぐしなど、日常のさまざまなシーンで役立つ体操動画を多数ご紹介しています。<br>
        専門家監修のもと、ご自宅で無理なく続けられる内容ばかり。<br>
        毎日の健康づくりに、ぜひご活用ください。
      </p>
      <ul class="gymnastics_everyday_list">
        <li>
          <div class="gymnastics_everyday_box">
            <p class="gymnastics_everyday_subtitle">MAINICHI TAISOU</p>
            <p class="gymnastics_everyday_title">就寝前に行う体操</p>
            <p class="gymnastics_everyday_txt">次の日に疲れを残さないよう、しっかりと身体をリラックスさせて就寝しましょう。</p>
          </div>
          <div class="gymnastics_everyday_item_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/gymnastics_everyday01.png" alt="就寝前に行う体操">
          </div>
        </li>
        <li>
          <div class="gymnastics_everyday_box">
            <p class="gymnastics_everyday_subtitle">MAINICHI TAISOU</p>
            <p class="gymnastics_everyday_title">外出前に行う体操</p>
            <p class="gymnastics_everyday_txt">足の筋力やバランス感覚を強化することで転倒防止につながります。</p>
          </div>
          <div class="gymnastics_everyday_item_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/gymnastics_everyday02.png" alt="外出前に行う体操">
          </div>
        </li>
        <li>
          <div class="gymnastics_everyday_box">
            <p class="gymnastics_everyday_subtitle">MAINICHI TAISOU</p>
            <p class="gymnastics_everyday_title">お孫さんと一緒にできる体操</p>
            <p class="gymnastics_everyday_txt">レジ袋を使って遊びながらできる体操です。</p>
          </div>
          <div class="gymnastics_everyday_item_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/gymnastics_everyday03.png" alt="お孫さんと一緒にできる体操">
          </div>
        </li>
        <li>
          <div class="gymnastics_everyday_box">
            <p class="gymnastics_everyday_subtitle">MAINICHI TAISOU</p>
            <p class="gymnastics_everyday_title">長時間座り作業の合間に<br class="sp">行う体操</p>
            <p class="gymnastics_everyday_txt">適度に体を動かすことで、肩こりや腰痛の改善になります。</p>
          </div>
          <div class="gymnastics_everyday_item_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gymnastics/gymnastics_everyday04.png" alt="就寝前に行う体操">
          </div>
        </li>
      </ul>
    </div>
  </section>
  <?php include get_template_directory() . '/template/appservice.php'; ?>
  <?php include get_template_directory() . '/template/appbox.php'; ?>
  <section class="gymnastics_supervisor">
    <div class="sec_inner">
      <div class="gymnastics_supervisor_image pc">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bellco_supervisor.png" alt="認知症予防体操の監修者 写真">
      </div>
      <div class="gymnastics_supervisor_box">
        <h2 class="pc">
          <span>認知症予防体操の監修者</span><br><span class="gymnastics_supervisor_name">三宅 良輔</span> <span class="gymnastics_supervisor_subtitle">先生</span>
        </h2>
        <div class="gymnastics_supervisor_title sp">
          <div class="gymnastics_supervisor_image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bellco_supervisor.png" alt="認知症予防体操の監修者 写真">
          </div>
          <h2>
            <span>認知症予防体操の監修者</span><br><span class="gymnastics_supervisor_name">三宅 良輔</span> <span class="gymnastics_supervisor_subtitle">先生</span>
          </h2>
        </div>
        <div class="gymnastics_supervisor_txt">
          <p class="gymnastics_supervisor_career">
            1969年、神奈川県生まれ。<br>
            日本体育大学体育学部教授、医学博士。<br>
            日本体操学会副会長、日本Gボール協会理事。
          </p>
          <p class="gymnastics_supervisor_notes"><span>専門分野は幼児から高齢者までの体つくり運動や健康体操。</span></p>
        </div>
      </div>
    </div>
  </section>
</article>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // セレクタを親階層に合わせて明示（衝突/別ブロック誤取得を防ぐ）
  const youtubeBox = document.querySelector(".why_prevention .youtube");
  if (!youtubeBox) return; // 念のため

  const playButton = youtubeBox.querySelector("img");
  const video      = youtubeBox.querySelector("video");

  // 再生したら非表示
  video.addEventListener("play", function() {
    playButton.style.display = "none";
  });

  // 停止/終了したら再表示
  video.addEventListener("pause", function() {
    playButton.style.display = "block";
  });
  video.addEventListener("ended", function() {
    playButton.style.display = "block";
  });
});
</script>

<?php get_footer(); ?>
