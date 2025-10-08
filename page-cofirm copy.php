<?php get_header(); ?>

<style>
  .contact02_confirm .required {
    display: none;
  }
  .contact02_confirm input {
    color: #666666;
  }
</style>

<article class="page works info contact02_confirm">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>

<table class="form__table">
<tbody>
<tr>
<th>
<div class="form__head">
<h4>氏名</h4>

</div></th>
<td></td>
</tr>

<tr>
<th>
<div class="form__head">
<h4>ふりがな</h4>

</div></th>
<td></td>
</tr>

<tr>
<th>
<div class="form__head">
<h4>メールアドレス</h4>

</div></th>
<td>
</td>
</tr>

<tr>
<th>
<div class="form__head">
<h4>メールアドレス確認用</h4>

</div></th>
<td></td>
</tr>

<tr>
<th>
<div class="form__head">
<h4>お問合わせ内容種類</h4>

</div></th>
<td></td>
</tr>

<tr>
<th>
<div class="form__head">
<h4>お問合わせ内容</h4>

</div></th>
<td></td>
</tr>
</tbody>
</table>

<p id="button_move"><span>送信する</span></p>

</div>

</article>
<?php get_footer(); ?>
