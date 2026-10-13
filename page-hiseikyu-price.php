<?php
/*
Template Name: LP 不倫慰謝料減額（被請求）弁護士費用
*/
$theme = get_template_directory_uri();
$lp_config = rise_hiseikyu_lp_config(array(
  'title' => '不倫慰謝料減額交渉の弁護士費用',
  'desc' => '不倫慰謝料の被請求における弁護士費用のご案内。相談料は何度でも無料。着手金・報酬金の料金体系を分かりやすく掲載しています。',
  'styles' => array(
    'css/tokusetu/t_03_lower.css',
    'css/tokusetu/t_common.css',
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_price.css',
  ),
));
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');
?>

<main id="t-price" class="isharyo-price tachinoki-price akewatashi-price price">
  <h1 class="t-page-h1">不倫慰謝料減額交渉の弁護士費用</h1>
  <nav class="t_breadcrumb">
    <ul>
      <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
      <li>弁護士費用</li>
    </ul>
  </nav>

  <section id="title">
    <div class="t_inner">
      <div class="t_inner_inner">
        <h2 class="pagettl">費用について</h2>
      </div>
    </div>
  </section>
  <h2 class="h_en lead__title">ライズ綜合法律事務所の<br>
    各種費用について</h2>
  <section class="regular first">
    <div class="inner">
      <div class="hgroup_regular">
        <p class="h_en_ul">FEE&nbsp;STRUCTURE</p>
        <h2 class="h_ja">弁護士費用の種類</h2>
      </div>
      <div class="text_block">
        <p>ご依頼をいただいた際の弁護士費用としては、着手金、報酬金、実費、手数料があります。</p>
        <table class="cost_tbl sp_column">
          <tbody>
            <tr>
              <th class="nowrap">着手金</th>
              <td>ご依頼をいただいた際にお支払いただく費用です。</td>
            </tr>
            <tr>
              <th class="nowrap">報酬金</th>
              <td>ご依頼の事件について成功の結果が得られたとき、得られた結果に応じて、着手金とは別にお支払いただくものです。</td>
            </tr>
            <tr>
              <th class="nowrap">実費</th>
              <td>印紙代、郵送代、証明書の発行費用等、実際に事件処理で出費した費用です。</td>
            </tr>
            <tr>
              <th class="nowrap">手数料</th>
              <td>法的文書の作成費用等、着手金・報酬金に代えて事務手数料としてお支払いただく費用です。</td>
            </tr>
          </tbody>
        </table>
        <p>※委任契約解除について<br>委任事務を終了するまで契約を解除できます。<br>この場合、例外として成果がない場合にも解除までの費用として事案の進行状況に応じた弁護士費用をお支払いいただきます。</p>
      </div>
    </div>
  </section>
  <section id="anc01" class="regular">
    <div class="inner scrollin sc_regular">
      <div class="text_block">
        <h3>不倫慰謝料/離婚問題の料金・費用</h3>
        <h4 id="arbitrary">【被請求】</h4>
        <table class="cost_tbl">
          <tbody>
            <tr>
              <th class="nowrap">着手金</th>
              <td>220,000円</td>
            </tr>
            <tr>
              <th class="nowrap">報酬金</th>
              <td>経済的利益の17.6％</td>
            </tr>
          </tbody>
        </table>
        <p>※その他事務管理費11,000円を別途申し受けます。</p>
        <p>※訴訟及び調停に係った場合、33,000円を別途申し受けます。</p>
      </div>
      
    </div>
  </section>
  <section class="top-reason">
    <div class="inner">
      <div class="contents">
        <ul>
          <li id="reason1" class="block reason_1 scrollin scregular on">
            <div class="block_inner">
              <div class="main">
                <h3>相談料は<strong>無料</strong><br>
                  費用が掛からず何度でも</h3>
                <p class="body">当事務所では、安心してご依頼いただけるよう、無料相談は何度でも可能です。まずは時間・費用を気にせず些細なことでもお気軽にご相談ください。</p>
              </div>
              <figure class="yen0"><img decoding="async" src="<?php echo esc_url($theme . '/images/akewatashi/top/reason_1.svg'); ?>" alt="相談料何回でも0円"></figure>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
