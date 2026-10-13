<?php
/*
Template Name: LP 不倫慰謝料減額（被請求）お問い合わせ
*/
$is_thanks = is_page() && get_post() && get_post()->post_name === 'thanks';
$contact = '/hiseikyu/contact/';
$lp_config = rise_hiseikyu_lp_config(array(
  'title' => $is_thanks
    ? 'お問合せを受け付けました。（不倫慰謝料減額）'
    : 'お問い合わせ｜不倫慰謝料の減額交渉を得意とする弁護士法人ライズ綜合法律事務所',
  'desc' => 'ご質問・ご相談は以下のフォームから、または0120-657-001よりお問合せください。ご相談は無料です。まずはご相談ください。',
  'contact' => $contact,
  'contact_form' => !$is_thanks,
  'noindex' => $is_thanks,
  'styles' => array(
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_contact.css',
  ),
));
if (!$is_thanks && function_exists('wpcf7_enqueue_scripts')) {
  add_action('wp_enqueue_scripts', function () {
    wpcf7_enqueue_scripts();
    wpcf7_enqueue_styles();
  });
}
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');
?>

<main id="t-contact" class="<?php echo $is_thanks ? 'isharyo-thanks' : 'isharyo-contact'; ?>">

  <h1 class="t-page-h1">お問い合わせ</h1>
  <nav class="t_breadcrumb">
    <ul>
      <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
      <?php if ($is_thanks) : ?>
      <li><a href="<?php echo esc_url($contact); ?>">お問い合わせ</a></li>
      <li>お問い合わせ完了</li>
      <?php else : ?>
      <li>お問い合わせ</li>
      <?php endif; ?>
    </ul>
  </nav>

<?php if ($is_thanks) : ?>
<main class="contact thanks">
  <section id="mv"></section>
  <section id="title">
    <div class="t_inner">
      <div class="t_inner_inner">
        <h2 class="pagettl">お問合せ</h2>
      </div>
    </div>
  </section>
  <div class="topicpath">
    <div class="inner">
      <ul>
        <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
        <li><a href="<?php echo esc_url($contact); ?>">お問合せ</a></li>
        <li>お問い合わせ完了</li>
      </ul>
    </div>
  </div>
  <section id="lead">
    <div class="inner scrollin sc_regular">
      <h2 class="h_en">CONTACT</h2>
      <h3 class="h_ja tac mb10">お問合せを<span class="ib">受け付けました</span></h3>
      <p class="ml tac_spl">この度はお問合せ頂き、誠にありがとうございます。<br>
        ご相談内容を確認し、担当者より折り返しご連絡させて頂きます。</p>
    </div>
  </section>
</main>
<?php else : ?>
<main class="contact">
  <section id="mv"></section>
  <section id="title">
    <div class="t_inner">
      <div class="t_inner_inner">
        <h2 class="pagettl">お問い合わせ</h2>
      </div>
    </div>
  </section>
  <section id="lead">
    <div class="inner scrollin sc_regular">
      <h2 class="h_en">CONTACT</h2>
      <p class="ml tac_spl tal">ご質問・ご相談は以下のフォームから、または<a class="red" href="tel:0120657001">0120-657-001</a>よりお問合せください。ご相談は無料です。 一人ひとりの方の事情に合わせて、最適な方法をご提案いたします。まずはご相談ください。<br><br class="sp">
      弁護士法人ライズ綜合法律事務所は、クライアント様の情報資産を脅威からお守りしリスクを最小化するため、情報セキュリティシステム（ISMS）につきISO 27001認証を取得しております。</p>
    </div>
  </section>
  <section class="sec_gray contact">
    <div class="inner">
      <?php echo do_shortcode('[contact-form-7 id="1649" title="コンタクトフォーム_不倫慰謝料減額LP用" use_confirm_on_submit "true"]'); ?>
    </div>
  </section>
</main>
<?php endif; ?>

</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
