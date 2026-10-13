<?php
/*
Template Name: LP 不倫慰謝料減額（被請求）弁護士紹介
*/
$lp_config = rise_hiseikyu_lp_config(array(
  'title' => '不倫慰謝料の減額交渉を得意とする弁護士紹介',
  'desc' => '不倫慰謝料の減額交渉を得意とする弁護士法人ライズ綜合法律事務所の弁護士紹介。東京本店・東京中央・大阪の所属弁護士をご紹介します。',
  'styles' => array(
    'css/tokusetu/t_03_lower.css',
    'css/tokusetu/t_common.css',
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_lawyer.css',
  ),
));
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');

$offices = array(
  array(
    'en' => 'TOKYO',
    'name' => '東京本店事務所',
    'lawyers' => array(
      array(
        'position' => '代表社員弁護士',
        'name' => '田中 泰雄',
        'bar' => array('第一東京弁護士会所属', '弁護士登録番号 第25485号'),
        'photo' => '/assets_prev/images/office/ph_tanaka.jpg',
        'career' => array(
          array('', '一橋大学法学部卒業'),
          array('平成06年', '司法試験合格'),
          array('平成09年', '司法修習修了(第49期)'),
          array('平成09年', "弁護士登録(弁護士登録番号 第25485号)\n東京都内の法律事務所に勤務し契約書の精査、作成、不動産、金銭消費貸借、離婚、労働事件等の調停、訴訟を担当"),
          array('平成12年', "個人の債務整理(任意整理、自己破産、民事再生等)事件や商工ローン事件にも従事\n弁護士会(第二東京弁護士会)でも民事訴訟改善検討委員会、仲裁業務研究会(仲裁人補助者)等の委員を務め一般法律相談やクレサラ法律相談を担当\n財団法人法律扶助協会の相談員(一般事件、クレサラ事件、離婚DV事件)も務める"),
          array('平成23年', "約14年所属した第二東京弁護士会から埼玉弁護士会に登録替え\n弁護士法人ライズ綜合法律事務所を設立\n現在に至る\n著書に「資産流動化の法律と実務」（共著。新日本法規出版株式会社刊）等がある"),
        ),
      ),
      array(
        'position' => '社員弁護士',
        'name' => '久松亮一',
        'bar' => array('第一東京弁護士会所属', '弁護士登録番号 第45707号'),
        'career' => array(
          array('平成13年', '東京大学法学部卒業'),
          array('平成21年', '法政大学法科大学院修了'),
          array('平成21年', '司法試験合格'),
          array('平成23年', '司法修習修了(第64期)'),
          array('平成24年', '弁護士登録(弁護士登録番号 第45707号)'),
        ),
      ),
      array(
        'position' => '弁護士',
        'name' => '森本香奈',
        'bar' => array('東京弁護士会所属', '弁護士登録番号 第27307号'),
        'career' => array(
          array('平成5年', '早稲田大学法学部卒業'),
          array('平成9年', '司法試験合格'),
          array('平成12年', '司法修習修了(第52期)'),
          array('平成12年', '弁護士登録(弁護士登録番号 第27307号)'),
        ),
      ),
      array(
        'position' => '弁護士',
        'name' => '小澤信也',
        'bar' => array('第一東京弁護士会所属', '弁護士登録番号 第59938号'),
        'career' => array(
          array('平成25年', '日本大学法学部卒業'),
          array('平成28年', '早稲田大学法科大学院修了'),
          array('平成30年', '司法試験合格'),
          array('令和1年', '司法修習修了(第72期)'),
          array('令和2年', '弁護士登録(弁護士登録番号 第59938号)'),
        ),
      ),
      array(
        'position' => '弁護士',
        'name' => '南海汰',
        'bar' => array('第二東京弁護士会所属', '弁護士登録番号 第67875号'),
        'career' => array(
          array('令和3年', '岡山大学法学部卒業'),
          array('令和5年', '神戸大学法科大学院修了'),
          array('令和6年', '司法試験合格'),
          array('令和8年', '司法修習修了(第78期)'),
          array('令和8年', '弁護士登録(弁護士登録番号 第67875号)'),
        ),
      ),
    ),
  ),
  array(
    'en' => 'TOKYO',
    'name' => '東京中央事務所',
    'lawyers' => array(
      array(
        'position' => '社員弁護士',
        'name' => '三上陽平',
        'bar' => array('第一東京弁護士会所属', '弁護士登録番号 第50126号'),
        'career' => array(
          array('平成20年', '中央大学法学部卒業'),
          array('平成22年', '東京大学法科大学院修了'),
          array('平成24年', '司法試験合格'),
          array('平成25年', '司法修習修了(第66期)'),
          array('平成26年', '弁護士登録(弁護士登録番号 第50126号)'),
        ),
      ),
    ),
  ),
  array(
    'en' => 'OSAKA',
    'name' => '大阪事務所',
    'lawyers' => array(
      array(
        'position' => '社員弁護士',
        'name' => '加来裕章',
        'bar' => array('大阪弁護士会所属', '弁護士登録番号 第51866号'),
        'career' => array(
          array('平成22年', '京都大学法学部卒業'),
          array('平成25年', '九州大学法科大学院修了'),
          array('平成25年', '司法試験合格'),
          array('平成26年', '司法修習修了(第67期)'),
          array('平成27年', '弁護士登録(弁護士登録番号 第51866号)'),
        ),
      ),
      array(
        'position' => '弁護士',
        'name' => '奥野京子',
        'bar' => array('大阪弁護士会所属', '弁護士登録番号 第27399号'),
        'career' => array(
          array('昭和59年', '神戸市外国語大学卒業'),
          array('平成9年', '司法試験合格'),
          array('平成12年', '司法修習修了(第52期)'),
          array('平成12年', '弁護士登録(弁護士登録番号 第27399号)'),
        ),
      ),
      array(
        'position' => '弁護士',
        'name' => '石田岳彦',
        'bar' => array('大阪弁護士会所属', '弁護士登録番号 第27383号'),
        'career' => array(
          array('平成7年', '京都大学法学部卒業'),
          array('平成9年', '司法試験合格'),
          array('平成11年', '司法修習修了(第52期)'),
          array('平成11年', '弁護士登録(弁護士登録番号 第27383号)'),
        ),
      ),
    ),
  ),
);
?>

<main id="t-lawyer" class="isharyo-lawyer akewatashi-lawyer">
  <h1 class="t-page-h1">不倫慰謝料の減額交渉を得意とする弁護士紹介</h1>
  <nav class="t_breadcrumb">
    <ul>
      <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
      <li>弁護士紹介</li>
    </ul>
  </nav>

  <main class="office lawyer">
    <section id="mv"></section>
    <section id="title">
      <div class="t_inner">
        <div class="t_inner_inner">
          <h2 class="pagettl">弁護士紹介</h2>
        </div>
      </div>
    </section>
    <?php foreach ($offices as $office) : ?>
    <section class="office sec_gray">
      <div class="inner">
        <div class="hgroup_regular">
          <p class="h_en_ul"><?php echo esc_html($office['en']); ?></p>
          <h2 class="h_ja"><?php echo esc_html($office['name']); ?></h2>
        </div>
        <ul class="introduction">
          <?php foreach ($office['lawyers'] as $lawyer) : ?>
          <li class="block">
            <div class="left">
              <h3 class="name"><span class="position"><?php echo esc_html($lawyer['position']); ?></span><?php echo esc_html($lawyer['name']); ?></h3>
              <p class="shozoku"><?php echo esc_html($lawyer['bar'][0]); ?><br><?php echo esc_html($lawyer['bar'][1]); ?></p>
              <?php if (!empty($lawyer['photo'])) : ?>
              <figure class="portrait"><img decoding="async" src="<?php echo esc_url($lawyer['photo']); ?>" alt=""></figure>
              <?php endif; ?>
            </div>
            <div class="right">
              <block class="history">
                <p>経歴</p>
                <dl>
                  <?php foreach ($lawyer['career'] as $row) : ?>
                  <dt><?php echo esc_html($row[0]); ?></dt>
                  <dd><?php echo nl2br(esc_html($row[1])); ?></dd>
                  <?php endforeach; ?>
                </dl>
              </block>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
    <?php endforeach; ?>
  </main>
</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
