		</article>
 	</main>
	<footer>
		<div class="inn">
			<div class="ft_right">
				<div class="ft_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        				<img src="<?php bloginfo('template_url'); ?>/img/logo_ft.png" alt="<?php bloginfo( 'description' ); ?>">
		  			</a>
				</div>
			</div>
			<div class="ft_left">
				<div class="ft_nav">
					<ul>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>info/">記事一覧</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>diagnostic_referral/">認知機能診断紹介</a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>basic_knowledge/">認知症の基礎知識</a>
						</li>
						<li>
							<a href="https://www.bellco.co.jp/company" target="_blank">運営会社について</a>
						</li>
						<li>
							<a href="https://www.bellco.co.jp/policy" target="_blank">プライバシーポリシー</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
			<small>&copy; 2024  認知症サポート All Rights Reserved.</small>
	</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script_text_slide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/shuffle-text@0.3.0/build/shuffle-text.min.js"></script>

<?php if( is_page('11234') ) : ?>
<script src="<?php bloginfo('template_url'); ?>/js/script_accordion.js"></script>
<?php endif; ?>

<?php if ( is_post_type_archive('topics') ) : ?>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/post_slider.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<?php endif; ?>

<?php if( is_page('11229') ) : ?>
<script src="<?php bloginfo('template_url'); ?>/js/script_line.js"></script>
<?php endif; ?>

<script src="<?php bloginfo('template_url'); ?>/js/script_text_slide_right.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/srvc_slider.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

<?php if (  is_front_page() ||  is_home() ) : ?>
<!--スリックスライダー-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slick/slick.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slick/style.css">
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/slick/main.js"></script>
<?php endif; ?>

<script>
	jQuery(document).ready(function($) {
	// URLのハッシュ部分を取得
	var hash = window.location.hash;

	// ハッシュが存在する場合、そのハッシュに対応するタブをアクティブにする
	if (hash) {
		var tabId = hash.replace('_content', ''); // "_content"を取り除いてラジオボタンのIDと一致させる
		$(tabId).prop('checked', true); // 該当するタブをチェック状態にする

		// 対応するタブコンテンツを表示
		$('.tab_content').hide(); // すべてのタブコンテンツを非表示にする
		$(hash).show(); // 対応するタブコンテンツを表示する
	}

	// タブを切り替える際にURLのハッシュを更新
	$('.tab_label').on('click', function() {
		var tabId = $(this).attr('for');
		window.location.hash = tabId + '_content';
	});
});
</script>

</body>
</html>
