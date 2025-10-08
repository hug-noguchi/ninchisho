<?php
/*
*Template Name:読まれている記事一覧
*/
get_header(); ?>

<article class="page works info">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
      <img src="<?php echo get_template_directory_uri(); ?>/img/kv_info.png" alt="<?php the_title(); ?>"/>
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



  <section class="post_view_area">
    <div class="inn">
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
                'posts_per_page' => 10,
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
        </div>
    </div>
  </section>

  <section class="diagnosis_link">
    <div class="inn02">
        <h2 class="ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/diagnostic_referral/"><span>認知機能チェックはこちら</span></a></h2>
    </div>
  </section>


  <section class="top_works pad_bt01">
    <div class="inn">

      <div class="tabs">

        <input id="tab01" type="radio" name="tab_switch" checked>
        <label class="tab_label all" for="tab01">すべて</label>
        <input id="tab02" type="radio" name="tab_switch">
        <label class="tab_label about_prevention" for="tab02">認知症について</label>
        <input id="tab03" type="radio" name="tab_switch">
        <label class="tab_label dementia_prevention" for="tab03">認知症予防</label>
        <input id="tab04" type="radio" name="tab_switch">
        <label class="tab_label for_dementia_caregivers" for="tab04">認知症介護者向け</label>
        <!-- <input id="tab05" type="radio" name="tab_switch">
        <label class="tab_label interview" for="tab05">インタビュー記事</label>
        <input id="tab06" type="radio" name="tab_switch">
        <label class="tab_label news" for="tab06">ニュース記事</label> -->

        <div class="tab_content all" id="tab01_content">
        <div class="list">
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => 'info',
                'posts_per_page' => 6,
              );
              $st_query = new WP_Query( $args );
            ?>
            <?php if ( $st_query->have_posts() ): ?>

            <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
            </ul>
            <?php wp_reset_query();endif; ?>
        </div>
  </div>

  <div class="tab_content about_prevention" id="tab02_content">
        <div class="list">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => 'info',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'info_cat', //タクソノミーを指定
                        'field' => 'slug', //タームをスラッグで指定する
                        'terms' => 'about_prevention', //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    ),
                    'posts_per_page' => 6
                  );
                  $st_query = new WP_Query( $args );
                ?>
              <?php if ( $st_query->have_posts() ): ?>
              <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
              </ul>
              <?php wp_reset_query();endif; ?>
        </div>
  </div>

  <div class="tab_content dementia_prevention" id="tab03_content">
        <div class="list">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => 'info',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'info_cat', //タクソノミーを指定
                        'field' => 'slug', //タームをスラッグで指定する
                        'terms' => 'dementia_prevention', //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    ),
                    'posts_per_page' => 6
                  );
                  $st_query = new WP_Query( $args );
                ?>
              <?php if ( $st_query->have_posts() ): ?>
              <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
              </ul>
              <?php wp_reset_query();endif; ?>
        </div>
  </div>

  <div class="tab_content for_dementia_caregivers" id="tab04_content">
        <div class="list">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => 'info',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'info_cat', //タクソノミーを指定
                        'field' => 'slug', //タームをスラッグで指定する
                        'terms' => 'for_dementia_caregivers', //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    ),
                    'posts_per_page' => 6
                  );
                  $st_query = new WP_Query( $args );
                ?>
              <?php if ( $st_query->have_posts() ): ?>
              <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
              </ul>
              <?php wp_reset_query();endif; ?>
        </div>
  </div>

  <div class="tab_content interview" id="tab05_content">
        <div class="list">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => 'info',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'info_cat', //タクソノミーを指定
                        'field' => 'slug', //タームをスラッグで指定する
                        'terms' => 'interview', //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    ),
                    'posts_per_page' => 6
                  );
                  $st_query = new WP_Query( $args );
                ?>
              <?php if ( $st_query->have_posts() ): ?>
              <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
              </ul>
              <?php wp_reset_query();endif; ?>
        </div>
  </div>

  <div class="tab_content news" id="tab06_content">
        <div class="list">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => 'info',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'info_cat', //タクソノミーを指定
                        'field' => 'slug', //タームをスラッグで指定する
                        'terms' => 'news', //表示したいタームをスラッグで指定
                        'operator' => 'IN'
                      ),
                    ),
                    'posts_per_page' => 6
                  );
                  $st_query = new WP_Query( $args );
                ?>
              <?php if ( $st_query->have_posts() ): ?>
              <ul>
              <?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
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
              </ul>
              <?php wp_reset_query();endif; ?>
        </div>
  </div>

</div>

        <div class="more"><a href="<?php echo esc_url( home_url( '/' ) ); ?>info/">記事一覧へ</a></div>
    </div>
  </section>



</article>
<?php get_footer(); ?>
