<?php
/*
Template Name: LP 不倫慰謝料減額（被請求）事務所案内
*/
$lp_config = rise_hiseikyu_lp_config(array(
  'title' => '事務所案内｜不倫慰謝料の減額交渉を得意とする弁護士法人ライズ綜合法律事務所',
  'desc' => '弁護士法人ライズ綜合法律事務所の事務所案内。東京本店・東京中央・大阪の所在地、電話番号、アクセスをご案内します。',
  'styles' => array(
    'css/tokusetu/t_03_lower.css',
    'css/tokusetu/t_common.css',
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_office.css',
  ),
));
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');

$offices = array(
  array(
    'en' => 'TOKYO',
    'name' => '東京本店事務所',
    'section_class' => 'office sec_gray',
    'rows' => array(
      array('代表社員弁護士', '田中 泰雄'),
      array('社員弁護士', '久松 亮一'),
      array('弁護士', '森本 香奈'),
      array('弁護士', '小澤 信也'),
      array('弁護士', '南 海汰'),
      array('住所', "〒103-0027<br>東京都中央区日本橋3-9-1<br>日本橋三丁目スクエア12階"),
      array('TEL/FAX', '03-6630-7900(代)&nbsp;/ <span class="ib">03-6630-7901</span>'),
      array('アクセス', "東京駅八重洲口から徒歩7分<br>日本橋駅から徒歩2分"),
    ),
    'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12963.515409634043!2d139.7740112!3d35.6799849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80479c68984b1d02!2z5byB6K235aOr5rOV5Lq644Op44Kk44K657ac5ZCI5rOV5b6L5LqL5YuZ5omA!5e0!3m2!1sja!2sjp!4v1652769122363!5m2!1sja!2sjp',
  ),
  array(
    'en' => 'TOKYO',
    'name' => '東京中央事務所',
    'section_class' => 'regular office',
    'rows' => array(
      array('社員弁護士', '三上 陽平'),
      array('住所', "〒104-0032<br>東京都中央区八丁堀3-12-8<br>HF八丁堀ビルディング 2F"),
      array('TEL/FAX', '03-6633-8122(代)&nbsp;/ <span class="ib">03-6633-8133</span>'),
      array('アクセス', "八丁堀駅から徒歩6分<br>宝町駅から徒歩6分"),
    ),
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.061702202953!2d139.77264117578744!3d35.675482672589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601889a094df0dff%3A0x22efd485d3346f57!2zSEblhavkuIHloIDjg5Pjg6vjg4fjgqPjg7PjgrA!5e0!3m2!1sja!2sjp!4v1736775274555!5m2!1sja!2sjp',
  ),
  array(
    'en' => 'OSAKA',
    'name' => '大阪事務所',
    'section_class' => 'office sec_gray',
    'rows' => array(
      array('社員弁護士', '加来 裕章'),
      array('弁護士', '奥野 京子'),
      array('弁護士', '石田 岳彦'),
      array('住所', "〒532-0003<br>大阪府大阪市淀川区宮原4-1-45<br>新大阪八千代ビル 5階"),
      array('TEL/FAX', '06-6393-3111(代) / <span class="ib">06-6393-3112</span>'),
      array('アクセス', '各線新大阪駅より徒歩3分'),
    ),
    'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.151023445059!2d135.4960926523328!3d34.7348401878056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e43814855555%3A0xced06e8a2fe0db99!2z5byB6K235aOr5rOV5Lq644Op44Kk44K657ac5ZCI5rOV5b6L5LqL5YuZ5omAIOWkp-mYquS6i-WLmeaJgA!5e0!3m2!1sja!2sjp!4v1761029571478!5m2!1sja!2sjp',
  ),
);
?>

<main id="t-office" class="isharyo-office akewatashi-office office">
  <h1 class="t-page-h1">事務所案内</h1>
  <nav class="t_breadcrumb">
    <ul>
      <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
      <li>事務所案内</li>
    </ul>
  </nav>

  <main class="office top">
    <section id="mv"></section>
    <section id="title">
      <div class="t_inner">
        <div class="t_inner_inner">
          <h2 class="pagettl">事務所案内</h2>
        </div>
      </div>
    </section>
    <div class="topicpath">
      <div class="inner">
        <ul>
          <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
          <li>事務所案内</li>
        </ul>
      </div>
    </div>
    <?php foreach ($offices as $office) : ?>
    <section class="<?php echo esc_attr($office['section_class']); ?>">
      <div class="inner">
        <div class="hgroup_regular">
          <p class="h_en_ul"><?php echo esc_html($office['en']); ?></p>
          <h2 class="h_ja"><?php echo esc_html($office['name']); ?></h2>
        </div>
        <div class="office_body">
          <dl>
            <?php foreach ($office['rows'] as $row) : ?>
            <dt><?php echo esc_html($row[0]); ?></dt>
            <dd><?php echo wp_kses($row[1], array('br' => array(), 'span' => array('class' => array()))); ?></dd>
            <?php endforeach; ?>
          </dl>
          <div class="officemap">
            <iframe src="<?php echo esc_url($office['map']); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
    <?php endforeach; ?>
  </main>
</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
