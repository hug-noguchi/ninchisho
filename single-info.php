<?php
/*
*Template Name:info詳細
*/
get_header(); ?>

<style>
  .app_box .app_box_wrapper .app_detail .app_detail_title {
    margin: 0 0 min(1.2vw, 20px) !important;
  }
  .app_box .app_box_wrapper .app_detail .app_detail_txt {
    margin: 0 0 min(1vw, 32px) !important;
  }
  @media only screen and (max-width: 780px) {
    .app_box .app_box_wrapper .app_detail .app_detail_title,
    .app_box .app_box_wrapper .app_detail .app_detail_txt {
      margin-bottom: 12px !important;
    }
  }
  .app_box .btn_appstore {
    margin-top: 0;
  }
</style>

<article class="page info_detail">
  <section class="pege_sec info_detail fadeUp">
    <div class="inn02">
      <div class="breadcrumbs">
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></span> >
        <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>info/">記事一覧</a></span> >
        <span><?php the_title(); ?></span>
      </div>
      <div class="post_meta">
        <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
        <p>
          <?php
            $terms2 = get_the_terms($post->ID, 'info_cat');
            if ($terms2 && !is_wp_error($terms2)) :
            foreach ($terms2 as $term) :
              $term_link = get_term_link($term, 'info_cat');
              if (!is_wp_error($term_link)) :
          ?>
            <span class="info_cat <?php echo esc_attr($term->slug); ?>">
              <a href="<?php echo esc_url($term_link); ?>">
                <?php echo esc_html($term->name); ?>
              </a>
            </span>
          <?php
              endif;
            endforeach;
          endif;
          ?>
        </p>
      </div>
      <h1 class="ttl js_typing"><?php the_title(); ?></h1>
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="fadeIn i_ct"/>
      <?php endif; ?>
    </div>
  </section>

  <div class="pege_sec detail_dontent">
    <div class="inn02 fadeUp">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="info_app">
    <div class="pc">
      <div class="sec_inner">
        <div class="app_image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/info_app_pc.png" alt="ベルコメンバーズ" width="189" height="280">
        </div>
        <div class="app_detail">
          <p class="app_detail_title">\ 無料ダウンロード /</p>
          <div class="appstore_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_bellcomembers.png" alt="ベルコメンバーズロゴ" width="390" height="45">
          </div>
          <p class="app_detail_txt">認知機能チェックもできる、暮らしの安心アプリ</p>
          <div class="btn_app_box">
            <div class="btn_appstore">
              <a href="https://apps.apple.com/jp/app/%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA%E3%82%A2%E3%83%97%E3%83%AA/id6473576667?utm_source=bellco.co.jp&amp;utm_medium=referral&amp;utm_campaign=ninchisho_ios" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_ios.svg" alt="appstore" width="180" height="60">
              </a>
            </div>
            <div class="btn_googleplay">
              <a href="https://play.google.com/store/search?q=%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA&amp;c=apps&amp;pli=1&amp;utm_source=bellco.co.jp&amp;utm_medium=referral&amp;utm_campaign=ninchisho_android" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn_android.svg" alt="googlepay" width="203" height="60">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sp">
      <div class="sec_inner">
        <div class="app_detail">
          <p class="app_detail_title">\ 無料ダウンロード /</p>
          <div class="appstore_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_bellcomembers.png" alt="ベルコメンバーズロゴ">
          </div>
          <div class="row">
            <div class="app_image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/info_app_sp.png" alt="ベルコメンバーズ" width="109" height="220">
            </div>
            <div>
              <p class="app_detail_txt">認知機能チェックもできる、<br>暮らしの安心アプリ</p>
              <div class="btn_app_box">
                <div class="btn_appstore">
                  <a href="https://apps.apple.com/jp/app/%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA%E3%82%A2%E3%83%97%E3%83%AA/id6473576667?utm_source=bellco.co.jp&amp;utm_medium=referral&amp;utm_campaign=ninchisho_ios" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/btn_ios.svg" alt="appstore">
                  </a>
                </div>
                <div class="btn_googleplay">
                  <a href="https://play.google.com/store/search?q=%E3%83%99%E3%83%AB%E3%82%B3%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC%E3%82%BA&amp;c=apps&amp;pli=1&amp;utm_source=bellco.co.jp&amp;utm_medium=referral&amp;utm_campaign=ninchisho_android" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/btn_android.svg" alt="googlepay">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="diagnosis_link">
    <div class="inn02">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral/">
        <picture>
          <source media="(max-width: 780px)" srcset="<?php echo get_template_directory_uri(); ?>/img/diagnosis_link_sp.png">
          <img src="<?php echo get_template_directory_uri(); ?>/img/diagnosis_link_pc.png" alt="認知機能チェックはこちら" width="800" height="168">
        </picture>
      </a>
    </div>
  </div>

  <?php
  // ACFフィールド「load_file」にチェックが入っているか判定
  $show_supervisor = get_field('load_file');

  if ( $show_supervisor ) : ?>
      <?php include get_template_directory() . '/template/supervisor.php'; ?>
  <?php endif; ?>

  <section class="post_view_area post_view_read">
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
            <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg" alt="noimage">
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            </a>
          </li>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>
        <div class="more">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>postviews_list/">読まれている記事の一覧へ</a>
        </div>
      </div>
    </div>
  </section>

  <section class="post_view_area post_view_category">
    <div class="inn">
      <h2 class="ttl js_typing">このカテゴリの記事一覧</h2>
      <div class="bx">
        <ul>
          <?php
          $target_term_ids = array();

          if ( is_tax( 'info_cat' ) ) {
            $qo = get_queried_object();
            if ( $qo && ! is_wp_error( $qo ) && ! empty( $qo->term_id ) ) {
              $target_term_ids[] = (int) $qo->term_id;
            }
          } else {
            $terms = get_the_terms( get_the_ID(), 'info_cat' );
            if ( $terms && ! is_wp_error( $terms ) ) {
              foreach ( $terms as $t ) {
                $target_term_ids[] = (int) $t->term_id;
              }
            }
          }

          $target_term_ids = array_unique( array_filter( $target_term_ids ) );

          $ids_args = array(
            'post_type'           => 'info',
            'posts_per_page'      => 12,
            'orderby'             => 'date',
            'order'               => 'DESC',
            'ignore_sticky_posts' => true,
            'no_found_rows'       => true,
            'fields'              => 'ids',
          );

          if ( is_singular( 'info' ) ) {
            $ids_args['post__not_in'] = array( get_the_ID() );
          }

          if ( ! empty( $target_term_ids ) ) {
            $ids_args['tax_query'] = array(
              array(
                'taxonomy' => 'info_cat',
                'field'    => 'term_id',
                'terms'    => $target_term_ids,
                'operator' => 'IN',
              ),
            );
          }

          $ids_query  = new WP_Query( $ids_args );
          $unique_ids = array_slice( array_values( array_unique( $ids_query->posts ) ), 0, 6 );

          if ( ! empty( $unique_ids ) ) :
            $post_query = new WP_Query( array(
              'post_type'      => 'info',
              'post__in'       => $unique_ids,
              'orderby'        => 'post__in',
              'posts_per_page' => 5,
              'no_found_rows'  => true,
            ) );
            while ( $post_query->have_posts() ) : $post_query->the_post();
          ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'medium' ); ?>
                <?php else : ?>
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/noimg.jpg" alt="noimage">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
              </a>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
            <li>該当する記事が見つかりませんでした。</li>
          <?php endif; ?>
        </ul>

        <?php
        $term_link = home_url( '/info/' );
        if ( ! empty( $target_term_ids ) ) {
          $tmp_link = get_term_link( (int) $target_term_ids[0], 'info_cat' );
          if ( ! is_wp_error( $tmp_link ) ) {
            $term_link = $tmp_link;
          }
        }
        ?>
        <div class="more">
          <a href="<?php echo esc_url( $term_link ); ?>">
            このカテゴリ記事の一覧へ
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/template/appbox.php'; ?>
</article>
<?php get_footer(); ?>
