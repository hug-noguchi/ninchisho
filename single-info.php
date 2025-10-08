<?php
/*
*Template Name:info詳細
*/
get_header(); ?>

<article class="page info_detail aa">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_info.png" alt="認知症"/>
        <span class="page_ttl js_typing">認知症</span>
      </div>
    </h1>
  </section>

  <section class="pege_sec info_detail fadeUp">
    <div class="inn02">
      <div class="breadcrumbs">
        <span><a href="/ninchisho/">トップ</a></span> >
        <span><a href="/ninchisho/info/">記事一覧</a></span> >
        <span><?php the_title(); ?></span>
      </div>
      <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
      <h2 class="ttl js_typing"><?php the_title(); ?></h2>
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="fadeIn i_ct"/>
      <?php endif; ?>
    </div>
  </section>

 <section class="pege_sec detail_dontent">
    <div class="inn02 fadeUp">
      <?php the_content(); ?>
    </div>
  </section>

  <?php
    $load_file = get_field('load_file');
    if ($load_file && in_array('表示', $load_file)) {
        include get_template_directory() . '/template/supervisor.php';
    }
  ?>

  <section class="diagnosis_link">
    <div class="inn02">
        <h2 class="ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/diagnostic_referral/"><span>認知機能チェックはこちら</span></a></h2>
    </div>
  </section>

  <section class="post_view_area">
    <div class="inn">
        <h2 class="ttl js_typing">読まれている記事一覧</h2>
        <div class="bx">
            <ul>
                <?php
                $post_args = array(
                'post_type'  => 'info',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key'     => 'views',
                        'value'   => 0,
                        'compare' => '>=',
                        'type'    => 'NUMBER'
                    ),
                ),
                'orderby' => 'meta_value_num',
                'order'   => 'DESC',
                );
                $post_query = new WP_Query( $post_args );
                if( $post_query->have_posts() ):
                while( $post_query->have_posts() ):
                $post_query->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg">
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    </a>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
        <div class="more"><a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list/">読まれている記事の一覧へ</a></div>
        </div>
    </div>
  </section>
</article>
<?php get_footer(); ?>

<script>
  var templateUrl = "<?php echo get_template_directory_uri(); ?>";
  $(document).ready(function () {
    $(".btn_appstore").each(function () {
      var newButton = $(
        '<div class="btn_app_box">' +
          '<p class="font_bold">【ベルコメンバーズアプリ】のダウンロードはこちらから</p>' +
          '<div class="btn_app">' +
            '<a href="https://apps.apple.com/jp/app/%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA%E3%82%A2%E3%83%97%E3%83%AA/id6473576667?utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_ios" target="_blank">' +
              '<img src="' + templateUrl + '/img/appstore.svg" alt="appstore">' +
            '</a>' +
            '<a href="https://play.google.com/store/search?q=%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA&c=apps&pli=1&utm_source=bellco.co.jp&utm_medium=referral&utm_campaign=ninchisho_android" target="_blank">' +
              '<img src="' + templateUrl + '/img/googlepay.png" alt="googlepay">' +
            '</a>' +
          '</div>' +
        '</div>'
      );
      $(this).after(newButton);
    });
  });
</script>
