<?php
/*
*Template Name:INFO
*/
get_header(); ?>

<article class="page works info">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_info.png" alt="認知症"/>
        <span class="page_ttl js_typing">認知症</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs">
    <span><a href="/ninchisho/">トップ</a></span> >
    <span><a href="/ninchisho/info/">記事一覧</a></span> >
    <span>
      <?php
        $post_id = get_the_ID();
        $terms = get_the_terms($post_id, 'info_cat');
        if ($terms && !is_wp_error($terms)) {
          foreach ($terms as $term) {
            $term_link = get_term_link($term);

            if (!is_wp_error($term_link)) {
              echo '<span><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></span> ';
            }
          }
        } else {
          echo 'カテゴリーがありません。';
        }
      ?>
    </span>
  </div>
  <section class="pege_sec top_works">
    <div class="inn">

        <div class="cat_list">
            <div class="blurTrigger cat_list_detail"><a href="<?php echo esc_url( home_url( '/' ) ); ?>info/">すべて</a></div>
            <?php
              $terms = get_terms( 'info_cat');
              foreach ( $terms as $term ){
                echo '<div class="blurTrigger cat_list_detail"><a href="'.get_term_link($term->slug, 'info_cat').'">'.$term->name.'</a></div>'; //タームのリンク
              }
            ?>
        </div>

        <div class="list">
            <?php if(have_posts()): ?>
            <ul>
                <?php while(have_posts()): the_post(); ?>
                            <li class="scroll_up">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="bx">
                                        <div class="lbx">
                                            <?php if(has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.jpg">
                                            <?php endif; ?>
                                              <?php
                                                if ($terms2 = get_the_terms($post->ID, 'info_cat')) :
                                                    foreach ( $terms2 as $term ) {
                                                        $term_slug = $term -> slug;
                                                        echo ('<span class="info_cat ') ;
                                                        echo esc_html($term_slug) ;
                                                        echo ('">') ;
                                                        echo esc_html($term->name)  ;
                                                        echo ('</span> ') ; }
                                                endif;
                                                ?>
                                        </div>
                                        <div class="rbx">
                                            <time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                                            <h2 class="ttl js_typing"><?php the_title(); ?></h2>
                                            <div class="h2_txt">
                                                <?php
                                                if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
                                                  $content = mb_substr( strip_tags( $post->post_content ), 0, 100, 'UTF-8' );
                                                  echo $content . '…';
                                                } else {
                                                  echo strip_tags( $post->post_content );
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <span class="list_arrow">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_r.png">
                                        </span>
                                    </div>
                                </a>
                            </li>
                <?php endwhile; ?>
            <?php else: ?>
            </ul>
            <?php endif; ?>

  <div class="scroll_up"><?php wp_pagenavi(); ?></div>
        </div>
    </div>
  </section>

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
  <!--<section class="pege_sec search">
    <div class="inn">
        <div class="search_area scroll_up">
      <?php
      if ( function_exists( 'feas_search_form' ) ) {
        feas_search_form('0');
      }
      ?>
        </div>
        <hr class="comp_top scroll_up">
    </div>
  </section>-->

</article>
<?php get_footer(); ?>
