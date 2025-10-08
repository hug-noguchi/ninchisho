<?php get_header(); ?>


<article class="page works info contact02">
  <section class="kv_area">
    <h1>
      <div class="kv_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kv_contact.png" alt="ベルコの認知症ケア"/>
        <span class="page_ttl js_typing ">ベルコの認知症ケア</span>
      </div>
    </h1>
  </section>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section id="post-<?php the_ID(); ?>" class="content">
    <article class="post">
      <?php the_content(); ?>
    <?php wp_link_pages('before=<p id="pageLinks">ページ:&after='); ?>
    </article>
  </section>
  <?php endwhile;?>
  <?php endif; ?>

</article>

<?php get_footer(); ?>

<script>
  const emailInputs = [document.getElementById('email'), document.getElementById('email02')];

  emailInputs.forEach(emailInput => {
    emailInput.addEventListener('input', function() {
      if (emailInput.value) {
        emailInput.style.color = 'rgba(102, 102, 102, 1)';
      } else {
        emailInput.style.color = 'rgba(102, 102, 102, 0.6)';
      }
    });
  });
</script>
