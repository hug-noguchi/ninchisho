<?php
/*
*Template Name:サイト内検索
*/
get_header(); ?>

<article class="page works info">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_search.png" alt="<?php the_title(); ?>"/>
        <span class="page_ttl js_typing"><?php the_title(); ?></span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

  <section class="pege_sec search">
    <div class="inn">
        <div class="search_area">
            <h2 class="ttl js_typing">キーワードから探す</h2>
              <div class="h2_txt">
                  キーワードを入力して、検索するボタンを押してください。
              </div>
              <div class="serch_form scroll_up">
              <?php
              if ( function_exists( 'feas_search_form' ) ) {
                feas_search_form('1');
              }
              ?>
            </div>
        </div>
    </div>
  </section>
  <section class="diagnosis_link">
    <div class="inn02">
        <h2 class="ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/diagnostic_referral/"><span>認知機能チェックはこちら</span></a></h2>
    </div>
  </section>

</article>
<?php get_footer(); ?>
