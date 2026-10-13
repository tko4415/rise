<?php
/*
Template Name: 立ち退き特設 - price
*/
?>

<?php
  get_template_part('template-parts/header', 'tachinoki');
?>

<?php
  // スラッグを取得
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>

<main id="t-price" class="<?php echo "tachinoki-" . $slug; ?>">
  <h1 class="t-page-h1">立ち退きの弁護士費用（着手金・相談料無料・完全成功報酬型）</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'tachinoki' ); ?>
  <section class="intro">
    <h2 class="t-page-h2">立ち退き料交渉の弁護士費用</h2>
    <div class="inner">
      <ul class="feature">
        <li>
          <p>完全成功報酬</p>
        </li>
        <li>
          <p>着手金無料</p>
        </li>
        <li>
          <p>ご相談無料</p>
        </li>
      </ul>
    </div>
  </section>
    <section id="reason" class="t_reason">
    <div class="inner">
      <div class="main">
        <ul>
          <li id="reason1" class="block reason_1 scrollin scregular">
            <hgroup>
              <h3>お客様に損をさせない<br><strong>安心の費用保証サービス</strong></h3>
              <p class="body">増額ができない場合事務手数料以外の費用はかかりません。また無料相談で事前に増額について診断をさせていただくことも可能です。</p>
            </hgroup>
            <ul class="case">
              <li>
                <h4>1円でも増額ができなかった場合</h4>
                <div class="body">
                  <p class="upper">弁護士費用は<strong>いただきません</strong></p>
                  <p class="note">※事務手数料を除く</p>
                  <figure><img class="_sp" src="<?php echo get_template_directory_uri(); ?>/images/tachinoki/top/reason_1_1.svg" alt="提示額=交渉後 弁護士費用支払不要"><img class="_pc" src="<?php echo get_template_directory_uri(); ?>/images/tachinoki/top/reason_1_1_pc.svg" alt="提示額=交渉後 弁護士費用支払不要"></figure>
                  <p class="lower">同額以下の場合<br>本来かかるはずの<strong>弁護士費用は不要！</strong></p>
                </div>
              </li>
              <li>
                <h4>増額金額が費用より少なかった場合</h4>
                <div class="body">
                  <p class="upper">弁護士費用は<strong>増額金額を上限</strong>とします</p>
                  <p class="note"></p>
                  <figure><img class="_sp" src="<?php echo get_template_directory_uri(); ?>/images/tachinoki/top/reason_1_2.svg" alt="提示額=交渉後 弁護士費用支払不要"><img class="_pc" src="<?php echo get_template_directory_uri(); ?>/images/tachinoki/top/reason_1_2_pc.svg" alt="提示額=交渉後 弁護士費用支払不要"></figure>
                  <p class="lower">増額分を超えた<strong><br>弁護士費用の請求はありません！</strong></p>
                </div>
              </li>
            </ul>
          </li>
          <li id="reason2" class="block reason_2 scrollin scregular">
            <hgroup>
              <h3>相談料は<strong>無料</strong><br>費用が掛からず何度でも</h3>
              <p class="body">当事務所では、安心してご依頼いただけるよう、無料相談は何度でも可能です。まずは時間・費用を気にせず些細なことでもお気軽にご相談ください。</p>
            </hgroup>
            <p class="price">
              <span class="left"><strong>相談料</strong><br><strong>何回でも</strong></span><span class="right"><span class="number">0</span><span class="yen">円</span></span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="price-detail kojin">
    <h2 class="t-page-h2">個人の方の立ち退き交渉サービス<br>弁護士費用詳細</h2>
    <div class="inner">
      <div class="price-table">
        <h3 class="t-page-h3">報奨金・着手金</h3>
        <table class="cost_tbl sp_column">
          <tbody>
            <tr>
              <th class="nowrap">相談料</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">着手金</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">解決報酬</th>
              <td>経済的利益×11％又は，110,000円，<br class="_sp">いずれか高い額</td>
            </tr>
            <tr>
              <th class="nowrap">成果報酬</th>
              <td>
                【立退料提示前】<br>
                立退料 17.6% + 55,000円<br>
                【立退料提示後】<br>
                経済的利益が300万円以下の部分　22%<br class="_sp">
                + 110,000円<br>
                経済的利益が300万円超～3,000万円以下の部分　17.6%<br>
                経済的利益が3,000万円超の部分　11%<br>
              </td>
            </tr>
          </tbody>
        </table>
        <p class="note">※別途、事務手数料11,000円を申し受けます。</p>
      </div>
      <div class="price-table">
        <h3 class="t-page-h3">訴訟の場合</h3>
        <table class="cost_tbl sp_column">
          <tbody>
            <tr>
              <th class="nowrap">着手金</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">解決報酬</th>
              <td>経済的利益×11％又は，110,000円，<br class="_sp">いずれか高い額</td>
            </tr>
            <tr>
              <th class="nowrap">成果報酬</th>
              <td>
                【立退料提示前】<br>
                立退料 17.6% + 55,000円<br>
                【立退料提示後】<br>
                経済的利益が300万円以下の部分　22%<br class="_sp">
                + 110,000円<br>
                経済的利益が300万円超～3,000万円以下の部分　17.6%<br>
                経済的利益が3,000万円超の部分　11%<br>
              </td>
            </tr>
          </tbody>
        </table>
        <p class="note">
          ※訴訟手続き等費用として，110,000円を申し受けます。<br>
          ※別途、事務手数料11,000円を申し受けます。
        </p>
      </div>
    </div>
  </section>

  <section class="price-detail hojin">
    <h2 class="t-page-h2">法人の方の立ち退き交渉サービス<br>弁護士費用詳細</h2>
    <div class="inner">
      <div class="price-table">
        <h3 class="t-page-h3">報奨金・着手金</h3>
        <table class="cost_tbl sp_column">
          <tbody>
            <tr>
              <th class="nowrap">相談料</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">着手金</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">解決報酬</th>
              <td>経済的利益×11％又は，110,000円，<br class="_sp">いずれか高い額</td>
            </tr>
            <tr>
              <th class="nowrap">成果報酬</th>
              <td>
                【立退料提示前】<br>
                立退料 17.6% + 55,000円<br>
                【立退料提示後】<br>
                経済的利益が300万円以下の部分　22%<br class="_sp">
                + 110,000円<br>
                経済的利益が300万円超～3,000万円以下の部分　17.6%<br>
                経済的利益が3,000万円超の部分　11%<br>
              </td>
            </tr>
          </tbody>
        </table>
        <p class="note">※別途、事務手数料11,000円を申し受けます。</p>
      </div>
      <div class="price-table">
        <h3 class="t-page-h3">訴訟の場合</h3>
        <table class="cost_tbl sp_column">
          <tbody>
            <tr>
              <th class="nowrap">着手金</th>
              <td>無料</td>
            </tr>
            <tr>
              <th class="nowrap">解決報酬</th>
              <td>経済的利益×11％又は，110,000円，<br class="_sp">いずれか高い額</td>
            </tr>
            <tr>
              <th class="nowrap">成果報酬</th>
              <td>
                【立退料提示前】<br>
                立退料 17.6% + 55,000円<br>
                【立退料提示後】<br>
                経済的利益が300万円以下の部分　22%<br class="_sp">
                + 110,000円<br>
                経済的利益が300万円超～3,000万円以下の部分　17.6%<br>
                経済的利益が3,000万円超の部分　11%<br>
              </td>
            </tr>
          </tbody>
        </table>
        <p class="note">
          ※訴訟手続き等費用として，110,000円を申し受けます。<br>
          ※別途、事務手数料11,000円を申し受けます。
        </p>
      </div>
    </div>
  </section>
</main>

<?php
  get_template_part('template-parts/footer', 'tachinoki');
?>
