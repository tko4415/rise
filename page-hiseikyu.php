<?php
/*
Template Name: LP 不倫慰謝料減額（被請求）
*/
$img = get_template_directory_uri() . '/images/lp/isyaryo/hiseikyu';
$lp_config = array(
  'home' => '/hiseikyu/',
  'copy' => '不倫慰謝料の減額交渉を得意とする',
  'title' => '【無料相談】不倫・浮気の慰謝料減額交渉を得意とする弁護士法人ライズ綜合法律事務所',
  'desc' => '突然の不倫慰謝料請求にお悩みの方へ。相談料0円・全国対応。減額交渉を得意とする弁護士が円満解決までサポートします。',
  'contact' => '/hiseikyu/contact/',
  'tel' => '0120-657-001',
  'tel_href' => '0120657001',
  'nav' => array(
    array('label' => '弁護士費用', 'url' => '/hiseikyu/price/'),
    array('label' => '解決までの流れ', 'url' => '/hiseikyu/flow/'),
    array('label' => '弁護士紹介', 'url' => '/hiseikyu/lawyer/'),
    array('label' => '事務所案内', 'url' => '/hiseikyu/office/'),
    array('label' => '不倫慰謝料減額コラム', 'url' => '/hiseikyu/column/'),
  ),
  'styles' => array('css/lp/hiseikyu-base.css', 'css/lp/hiseikyu.css'),
  'scripts' => array('js/lp/hiseikyu.js'),
  'footer_nav' => array(
    array('label' => '弁護士費用', 'url' => '/hiseikyu/price/'),
    array('label' => '解決までの流れ', 'url' => '/hiseikyu/flow/'),
    array('label' => '弁護士紹介', 'url' => '/hiseikyu/lawyer/'),
    array('label' => '事務所案内', 'url' => '/hiseikyu/office/'),
    array('label' => '不倫慰謝料減額コラム', 'url' => '/hiseikyu/column/'),
    array('label' => 'お問い合わせ', 'url' => '/hiseikyu/contact/'),
  ),
);
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');
?>

<main class="lp-hiseikyu">
  <h1 class="t-page-h1">【無料相談】不倫・浮気の慰謝料減額交渉を得意とする弁護士法人ライズ綜合法律事務所</h1>

  <section class="lp-hiseikyu-mv">
    <picture>
      <source srcset="<?php echo $img; ?>/mv-sp.png" media="(max-width: 768px)">
      <img class="lp-hiseikyu-mv__bg" src="<?php echo $img; ?>/mv_bg_pc.jpg" alt="" width="1440" height="898">
    </picture>
    
    <div class="lp-hiseikyu-mv__inner">
      <div class="sp-wrap">
        <p class="lp-hiseikyu-mv__lead">不倫・慰謝料問題でお悩みの方へ<span class="lp-hiseikyu-mv__lead-line"></span></p>
        <h2 class="lp-hiseikyu-mv__ttl">
          <span class="lp-hiseikyu-mv__ttl-small">不倫<br>慰謝料<span class="lp-hiseikyu-mv__ttl-no">の</span></span>
          <span class="lp-hiseikyu-mv__ttl-large">減額交渉</span>
        </h2>
        <p class="lp-hiseikyu-mv__name">弁護士 加来裕章</p>
        <div class="lp-hiseikyu-mv__catch">
          <p><span class="mark">突然、慰謝料請求が届いたら</span></p>
          <p><span class="accent">不倫慰謝料<span class="sp-small">の</span>交渉実績<span class="sp-small">が</span><br class="sp">豊富な弁護士</span><span class="mark nobg">に</span></p>
          <p><span class="mark">まずはご相談ください</span></p>
        </div>
      </div>
      <ul class="lp-hiseikyu-mv__circles">
        <li class="lp-hiseikyu-mv__circle lp-hiseikyu-mv__circle--fee">
          <p class="lp-hiseikyu-mv__circle-label">相談料</p>
          <p class="lp-hiseikyu-mv__circle-num">0</p>
          <p class="lp-hiseikyu-mv__circle-unit">円</p>
        </li>
        <li class="lp-hiseikyu-mv__circle lp-hiseikyu-mv__circle--count">
          <p class="lp-hiseikyu-mv__circle-label _first">法律相談実績</p>
          <p class="lp-hiseikyu-mv__circle-num">45</p>
          <p class="lp-hiseikyu-mv__circle-unit">万件<br>以上</p>
          <p class="lp-hiseikyu-mv__circle-note">※2018年6月～2026年6月時点</p>
        </li>
        <li class="lp-hiseikyu-mv__circle lp-hiseikyu-mv__circle--speed">
          <p class="lp-hiseikyu-mv__circle-label">最短</p>
          <p class="lp-hiseikyu-mv__circle-num">即日<br>着手</p>
        </li>
      </ul>
    </div>
  </section>

  <div id="wrapper">
    <div id="container">
      <div class="bg02">
        <section class="sec_01">
          <div class="inner">
            <ul class="btn_anchor d-flex flex-wrap">
              <li><a href="#contents01">弁護士依頼のメリット</a></li>
              <li><a href="#contents02">選ばれる理由</a></li>
              <li><a href="#contents03">減額交渉実績</a></li>
              <li><a href="/hiseikyu/flow/">相談の流れ</a></li>
              <li><a href="/hiseikyu/price/">料金体系</a></li>
              <li><a href="#contents06">よくあるご質問</a></li>
            </ul>
          </div>
        </section>
      </div>

      <div class="clip_shadow z1">
        <section class="sec_02">
          <div class="inner">
            <h2 class="text-center text_fff"><b class="serif">こんな</b><strong class="serif">お悩み</strong><br class="sp">
            抱えていませんか？</h2>
            <p class="balloon01 text-center text_fff">突然内容証明が届いて<br>どうすればいいかわからない</p>
            <div class="balloon02">
              <p class="balloon02_text text-center text_fff">高額な慰謝料請求があり<br>減額したい</p>
              <p class="balloon03_text text_fff">一方的に書類にサインを<br>させられ取り消したい</p>
            </div>
            <p class="balloon04 text-center text_fff">職場や家族にばれずに<br>解決をしたい</p>
            <figure class="face sp"><img src="<?php echo $img; ?>/bg_onayami_face.png" alt="" width="324" height="310"></figure>
          </div>
        </section>
      </div>

      <div class="clip_shadow z2">
        <section class="sec_03 bg01" id="contents01">
          <div class="inner">
            <h2 class="text_blue2 text-center">
              <span class="chonchon">ご安心ください</span>
              <b>弁護士に相談することで<br class="sp"><strong class="serif"><span class="red_line">解決が可能</span></strong><span class="serif-tail serif">です</span></b>
            </h2>
            <h3 class="merit_headline text_fff">弁護士に依頼する<b>メリット</b></h3>
            <ul class="merit_list">
              <li>
                <dl>
                  <dt class="text_blue2">交渉のストレス減少</dt>
                  <dd>交渉は弁護士が行うので、直接連絡を取り合う必要がなくなります。</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt class="text_blue2">更なるトラブル回避</dt>
                  <dd>今後起こりうる問題を未然に防ぐことができます。</dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt class="text_blue2">慰謝料金額の減額</dt>
                  <dd>適正な慰謝料額を計算することで、ほとんどの場合減額が可能です。</dd>
                </dl>
              </li>
            </ul>
            <div class="inner">
              <p class="risk">感情的になり<b class="text_blue">内容証明を無視</b>したり、<br class="pc"><b class="text_blue">提示された金額をそのまま支払ってしまう</b>ことなどは大きなリスクです。</p>
              <div class="fuwat">
                <p class="balloon text-center text_fff">まずは落ち着いて<br class="sp"><strong class="serif">弁護士にご相談ください</strong></p>
                <figure class="bengoshi">
                  <img src="<?php echo $img; ?>/img_illust_bengoshi.png" alt="" width="640" height="640" class="sp">
                  <img src="<?php echo $img; ?>/img_illust_bengoshi_pc.png" alt="" width="730" height="354" class="pc">
                </figure>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="clip_shadow z3">
        <section class="sec_04" id="contents02">
          <div class="inner">
            <h2 class="text-center">ライズ綜合法律事務所が<br class="sp">選ばれる<strong class="text_red"><span class="">5</span>つの理由</strong></h2>
            <ol class="reason_anchor">
              <li>
                <a href="#reason01" class="d-flex align-items-center">
                  <p class="num text_fff">01</p>
                  <p class="text">相談は何度でも<strong>無料</strong></p>
                </a>
              </li>
              <li>
                <a href="#reason02" class="d-flex align-items-center">
                  <p class="num text_fff">02</p>
                  <p class="text"><b>慰謝料請求担当部署</b>がサポート</p>
                </a>
              </li>
              <li>
                <a href="#reason03" class="d-flex align-items-center">
                  <p class="num text_fff">03</p>
                  <p class="text"><strong>45万件</strong>を超える法律相談実績<span class="kome text-right">※2018年6月～2026年6月時点</span></p>
                </a>
              </li>
              <li>
                <a href="#reason04" class="d-flex align-items-center">
                  <p class="num text_fff">04</p>
                  <p class="text"><strong>全国対応可能</strong></p>
                </a>
              </li>
              <li>
                <a href="#reason05" class="d-flex align-items-center">
                  <p class="num text_fff">05</p>
                  <p class="text">プライバシーは<strong>徹底厳守</strong></p>
                </a>
              </li>
            </ol>
            <div class="reason_list">
              <ol>
                <li class="d-flex flex-column align-items-center bgF fuwat" id="reason01">
                  <p class="num"><small>理由</small>01</p>
                  <h3 class="text-center text_blue2">相談料は<b class="text_blue">無料</b><br>費用が掛からず何度でも</h3>
                  <div class="box">
                    <p class="text">当事務所では、安心してご依頼いただけるよう、無料相談は何度でも可能です。まずは時間・費用を気にせず些細なことでもお気軽にご相談ください。</p>
                    <figure><img src="<?php echo $img; ?>/foto_reason01.jpg" alt="" width="640" height="360"></figure>
                  </div>
                </li>
                <li class="d-flex flex-column align-items-center bgF fuwat" id="reason02">
                  <p class="num"><small>理由</small>02</p>
                  <h3 class="text-center text_blue2"><b class="text_blue">慰謝料請求担当部署</b>が<br>トータルサポート</h3>
                  <div class="box">
                    <p class="text">ライズ綜合法律事務所では慰謝料請求担当部署を持ち、JADP認定夫婦カウンセラー®の資格を有したスタッフが在籍しております。不倫の慰謝料の相場のご相談や相手への交渉、和解後のトラブル防止などのトータルサポートで不倫のお悩みを解決いたします。</p>
                    <figure><img src="<?php echo $img; ?>/foto_reason02.jpg" alt="" width="640" height="360"></figure>
                  </div>
                </li>
                <li class="d-flex flex-column align-items-center bgF fuwat" id="reason03">
                  <p class="num"><small>理由</small>03</p>
                  <h3 class="text-center text_blue2"><b class="text_blue">45万件</b>を超える法律相談実績<br>経験豊富な弁護士が<br>交渉から解決まで対応</h3>
                  <div class="box">
                    <div class="text">
                      <p>豊富な実績とノウハウを活かし、交渉から解決まで、一人ひとりのご依頼者様に最適な解決策をご提案いたします。安心してご相談ください。</p>
                      <p class="kome pc">※2018年6月～2026年6月時点</p>
                    </div>
                    <figure><img src="<?php echo $img; ?>/foto_reason03.jpg" alt="" width="640" height="360"></figure>
                    <p class="kome text-right sp">※2018年6月～2026年6月時点</p>
                  </div>
                </li>
                <li class="d-flex flex-column align-items-center bgF fuwat" id="reason04">
                  <p class="num"><small>理由</small>04</p>
                  <h3 class="text-center text_blue2">日本全国<b class="text_blue">どこでも対応</b><br>オンライン相談も可能</h3>
                  <div class="box">
                    <div class="text">
                      <p>日本全国どこでも対応可能ですのでお気軽にご相談ください。またオンラインでの相談も受け付けています。</p>
                      <p class="kome pc">※オンライン相談とはパソコンやスマートフォンなどを用いて、インターネットを介しリアルタイムで映像・音声を共有してやり取りする相談のことです。<br>※オンライン相談の際の通信料はご相談者様の自己負担になります。</p>
                    </div>
                    <figure><img src="<?php echo $img; ?>/foto_reason04.jpg" alt="" width="640" height="360"></figure>
                    <p class="kome sp">※オンライン相談とはパソコンやスマートフォンなどを用いて、インターネットを介しリアルタイムで映像・音声を共有してやり取りする相談のことです。<br>※オンライン相談の際の通信料はご相談者様の自己負担になります。</p>
                  </div>
                </li>
                <li class="d-flex flex-column align-items-center bgF fuwat" id="reason05">
                  <p class="num"><small>理由</small>05</p>
                  <h3 class="text-center text_blue2">プライバシー管理を徹底<br><b class="text_blue">家族・会社にばれずに</b>解決</h3>
                  <div class="box">
                    <p class="text">ご依頼者様の情報は厳重に保護され、外部に漏れることはありません。<br>情報漏洩対策として、仮想化技術「Parallels Remote Application Server」を導入し、高度なセキュリティを確保しています。</p>
                    <figure><img src="<?php echo $img; ?>/foto_reason05.jpg" alt="" width="640" height="360"></figure>
                  </div>
                </li>
              </ol>
            </div>
          </div>
        </section>
      </div>

      <section class="sec_05 bg01 z4" id="contents03">
        <div class="inner">
          <h2 class="text-center">ライズ綜合法律事務所の<br class="sp"><strong class="text_red">減額交渉実績</strong></h2>
          <ol class="case_list">
            <li class="bgF fuwat">
              <p class="num">CASE<b>01</b></p>
              <div class="row justify-content-center align-items-center">
                <figure>
                  <img src="<?php echo $img; ?>/img_case01_person.png" alt="" width="80" height="80">
                </figure>
                <div class="txt_clm">
                  <p class="name fw_m"><b>I</b>さん<span class="spec">（20代／女性）</span></p>
                  <p class="situation">職場の同僚と不倫</p>
                </div>
              </div>
              <div class="seikyugaku">
                <p class="text-center text_blue2">
                  <span class="marker">交際男性の妻から<br class="sp"><strong>200万円</strong>の慰謝料請求</span>
                </p>
              </div>
              <div class="box">
                <div class="graph_area">
                  <figure class="graph"><img src="<?php echo $img; ?>/img_case01_graph.png" alt="170万円の減額に成功" width="640" height="400"></figure>
                  <div class="amount d-flex justify-content-center">
                    <p class="amount_arrow"><span class="text_fff">減額<br>金額</span></p>
                    <p class="num text_red"><strong>170</strong>万円</p>
                  </div>
                </div>
                <div class="accordion_text">
                  <p class="description">Iさんは、職場の同僚男性から、「妻と離婚した」と告げられ、その後意気投合し交際することになりました。<br>しかし後日、交際男性の離婚が成立していないことが発覚。すぐに交際を解消しましたが、交際男性の妻の代理人弁護士から、「不倫の慰謝料として、金200万円を支払え」という書面が送られてきました。<br>Iさんは、突然の高額な慰謝料請求にとまどい、今回のことを何とか円満に解決したいと、当事務所にご相談をいただきました。<br>弁護士から、相手方夫婦が本件が原因で離婚に至ったとしても、その責任は男性側にあり、あくまでIさんは騙された立場であると主張し、慰謝料200万円は高額すぎる金額であると交渉を進めました。<br>しかし、当初相手方代理人弁護士は、「同じ職場の同僚であれば、離婚したか、していないか知る方法はいくらでもある」と、Iさんにも責任があると、こちらの主張を認めませんでしたが、事細かに説明を行い、粘り強く交渉した結果、慰謝料30万円で和解をすることが出来ました。</p>
                  <div class="point_area sp">
                    <p class="tit text_fff"><span>POINT</span></p>
                    <div class="text_area bg02">
                      <p class="fw_m">不倫相手から騙されていたケースでも、相手方がこちら側に過失があると、争ってくる場合は多々あります。弁護士にご依頼いただくことで、正しい主張をし、過失についても十分に争うことが可能です。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="point_area pc">
                <p class="tit text_fff"><span>POINT</span></p>
                <div class="text_area bg02">
                  <p class="fw_m">不倫相手から騙されていたケースでも、相手方がこちら側に過失があると、争ってくる場合は多々あります。弁護士にご依頼いただくことで、正しい主張をし、過失についても十分に争うことが可能です。</p>
                </div>
              </div>
              <div class="accordion_btn sp"><span class="text_fff">詳しく見る</span><i class="mark"></i></div>
            </li>
            <li class="bgF fuwat">
              <p class="num">CASE<b>02</b></p>
              <div class="row justify-content-center align-items-center">
                <figure>
                  <img src="<?php echo $img; ?>/img_case02_person.png" alt="" width="80" height="80">
                </figure>
                <div class="txt_clm">
                  <p class="name fw_m"><b>E</b>さん<span class="spec">（30代／女性）</span></p>
                  <p class="situation">職場の同僚と不倫</p>
                </div>
              </div>
              <div class="seikyugaku">
                <p class="text-center text_blue2">
                  <span class="marker">交際男性の妻から<br class="sp"><strong>500万円</strong>の慰謝料請求</span>
                </p>
              </div>
              <div class="box">
                <div class="graph_area">
                  <figure class="graph"><img src="<?php echo $img; ?>/img_case02_graph.png" alt="450万円の減額に成功" width="640" height="400"></figure>
                  <div class="amount d-flex justify-content-center">
                    <p class="amount_arrow"><span class="text_fff">減額<br>金額</span></p>
                    <p class="num text_red"><strong>450</strong>万円</p>
                  </div>
                </div>
                <div class="accordion_text">
                  <p class="description">Eさんは、同僚である男性に仕事の悩みを相談していく内に、その男性に惹かれてしまい不倫関係に発展してしまいました。実は、交際相手の妻も職場の同僚であり、三者とも同じ職場内で働く関係であったことから、早々に交際相手の妻に不倫の事実がばれてしまいました。<br>その後、交際相手の妻から「不倫の慰謝料として500万円を支払え」「支払わないと職場や（Eさんの）家族に不倫のことを話す」「裁判も検討している」などの内容のメールが何通も送られてきました。相手の感情を逆なでし、職場や家族にばらされることを恐れたＥさんは、当初弁護士に相談することをためらいましたが、自身で対応することに限界を感じ、当事務所にご相談をいただきました。<br>500万円という高額な慰謝料は払えない、でも裁判は避けたいとのEさんの意向を組み、弁護士が相手方と慎重かつ粘り強く交渉を行った結果、職場や家族に知られることなく、慰謝料50万円で和解を成立させることができました。</p>
                  <div class="point_area sp">
                    <p class="tit text_fff"><span>POINT</span></p>
                    <div class="text_area bg02">
                      <p class="fw_m">今回のように、不倫相手の配偶者から執拗に連絡が入るケースもあります。当事務所にご依頼いただければ、慰謝料の減額交渉だけでなく、相手方と直接やりとりするストレスからも解放されます。浮気・不倫の慰謝料トラブルは、当事務所にご相談ください。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="point_area pc">
                <p class="tit text_fff"><span>POINT</span></p>
                <div class="text_area bg02">
                  <p class="fw_m">今回のように、不倫相手の配偶者から執拗に連絡が入るケースもあります。当事務所にご依頼いただければ、慰謝料の減額交渉だけでなく、相手方と直接やりとりするストレスからも解放されます。浮気・不倫の慰謝料トラブルは、当事務所にご相談ください。</p>
                </div>
              </div>
              <div class="accordion_btn sp"><span class="text_fff">詳しく見る</span><i class="mark"></i></div>
            </li>
            <li class="bgF fuwat">
              <p class="num">CASE<b>03</b></p>
              <div class="row justify-content-center align-items-center">
                <figure>
                  <img src="<?php echo $img; ?>/img_case03_person.png" alt="" width="80" height="80">
                </figure>
                <div class="txt_clm">
                  <p class="name fw_m"><b>H</b>さん<span class="spec">（40代／男性）</span></p>
                  <p class="situation">職場の同僚と不倫</p>
                </div>
              </div>
              <div class="seikyugaku">
                <p class="text-center text_blue2">
                  <span class="marker">交際女性の夫から<br class="sp"><strong>380万円</strong>の慰謝料請求</span>
                </p>
              </div>
              <div class="box">
                <div class="graph_area">
                  <figure class="graph"><img src="<?php echo $img; ?>/img_case03_graph.png" alt="280万円の減額に成功" width="640" height="400"></figure>
                  <div class="amount d-flex justify-content-center">
                    <p class="amount_arrow"><span class="text_fff">減額<br>金額</span></p>
                    <p class="num text_red"><strong>280</strong>万円</p>
                  </div>
                </div>
                <div class="accordion_text">
                  <p class="description">Hさんは、同僚である女性と不倫関係に。交際開始から1年が経過した頃、突然、交際女性の夫の代理人弁護士から連絡がありました。代理人弁護士から「不倫の慰謝料と、調査に使った探偵費用を合わせた額380万円を支払え」「回答次第では、即刻裁判を起こす」と強い口調で請求を受けました。Hさんは、高額の慰謝料請求と裁判という言葉に驚き、自身で対応出来ないと当事務所にご相談をいただきました。<br>Hさんによれば、相手方夫婦は離婚することが決定しており、穏便に解決したのちには、交際女性と一緒になりたいとの希望がありました。<br>弁護士からは、交際女性と一緒になるなら、Hさんと交際女性が連帯して慰謝料を支払うことで、一挙的な解決の途を提案し、相手方代理人と交渉を重ねた結果、連帯して慰謝料100万円を支払うことで和解が成立しました。</p>
                  <div class="point_area sp">
                    <p class="tit text_fff"><span>POINT</span></p>
                    <div class="text_area bg02">
                      <p class="fw_m">今回のように、不倫相手の配偶者が依頼した弁護士から直接慰謝料請求の連絡が来る場合があります。ご自身で対応すると、相手方に有利な条件で話を進められたり、裁判を引きかえに高額な慰謝料を支払ってしまう可能性があります。当事務所にご相談いただければ、現状を的確に判断し、ご依頼をすべき事案であるかどうかも判断させていただきます。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="point_area pc">
                <p class="tit text_fff"><span>POINT</span></p>
                <div class="text_area bg02">
                  <p class="fw_m">今回のように、不倫相手の配偶者が依頼した弁護士から直接慰謝料請求の連絡が来る場合があります。ご自身で対応すると、相手方に有利な条件で話を進められたり、裁判を引きかえに高額な慰謝料を支払ってしまう可能性があります。当事務所にご相談いただければ、現状を的確に判断し、ご依頼をすべき事案であるかどうかも判断させていただきます。</p>
                </div>
              </div>
              <div class="accordion_btn sp"><span class="text_fff">詳しく見る</span><i class="mark"></i></div>
            </li>
          </ol>
        </div>
      </section>

      <div class="clip_shadow z5">
        <section class="sec_06 ng_action d-flex flex-column align-items-center">
          <div class="inner">
            <h2 class="text-center text_fff">
              <figure class="ico"><img src="<?php echo $img; ?>/ico_caution.png" alt="" width="98" height="88"></figure>
              <span>慰謝料問題は弁護士への依頼が<br><strong class="serif">解決の近道</strong>です</span>
            </h2>
            <h4 class="downarrow_text text_fff">慰謝料交渉を自分で進めた場合の失敗例</h4>
            <ul class="ng_list text_fff">
              <li>適正な相場がわからず、<span class="text_yellow">相場より高い金額で示談してしまった。</span></li>
              <li>相手を怒らせてしまい、<span class="text_yellow">家族や会社にバラされてしまった。</span></li>
              <li>請求を無視した結果、<span class="text_yellow">裁判となり給料を差し押えられてしまった。</span></li>
            </ul>
            <p class="kome text_fff">※下記の場合は弁護士への依頼で<br class="sp">慰謝料を減額できる可能性が高くなります。<br>まずはお気軽にご相談ください。</p>
            <h4 class="check_headline text-center text_blue2"><span>CHECK</span></h4>
            <ul class="check_list text_fff">
              <li>・不倫を理由に離婚・別居をしていない</li>
              <li>・結婚している期間が短い</li>
              <li>・相場よりも高額な慰謝料を請求された</li>
              <li>・不倫期間が短い</li>
              <li>・慰謝料を払う経済力がない</li>
              <li>・既婚者同士の不倫 （W不倫） だった</li>
              <li>・自分だけに慰謝料が請求された</li>
            </ul>
            <h4 class="downarrow_text text_fff ">慰謝料相場</h4>
            <ul class="souba_list">
              <li>
                <dl class="d-flex">
                  <dt class="text_fff">全体の相場</dt>
                  <dd class="text_blue2">50万～300万程度</dd>
                </dl>
              </li>
              <li>
                <dl class="d-flex">
                  <dt class="text_fff">離婚に至らなかった場合</dt>
                  <dd class="text_blue2">50万～100万程度</dd>
                </dl>
              </li>
              <li>
                <dl class="d-flex">
                  <dt class="text_fff">離婚に至る場合</dt>
                  <dd class="text_blue2">100万～300万程度</dd>
                </dl>
              </li>
            </ul>
            <p class="kome text_fff">※ 上記の相場はあくまで一般的な目安です。<br class="sp">具体的な状況や条件によって異なる場合がありますので、弁護士にご相談ください。</p>
          </div>
        </section>
      </div>

      <div class="clip_shadow z6">
        <section class="sec_07" id="contents04">
          <div class="inner">
            <h2 class="text-center">解決までの<br class="sp"><strong class="text_red">4ステップ</strong></h2>
            <ol class="step_list">
              <li class="bgF fuwat">
                <div class="sp">
                  <div class="step_title d-flex align-items-center">
                    <p class="num text_fff">STEP 1</p>
                    <h3 class="text_blue2 bg01">まずはお電話ください</h3>
                  </div>
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step01.png" alt="" width="164" height="227"></figure>
                    <div class="txt_clm">
                      <p class="underline_balloon text_blue2">所要時間10分程度</p>
                      <p class="text">まずはお電話ください。いつでも無料で受け付けています。お気軽にお電話ください。</p>
                    </div>
                  </div>
                </div>
                <div class="pc">
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step01.png" alt="" width="164" height="227"></figure>
                    <div class="txt_clm">
                      <div class="step_title d-flex align-items-center">
                        <p class="num text_fff">STEP 1</p>
                        <h3 class="text_blue2 bg01">まずはお電話ください</h3>
                      </div>
                      <div class="d-flex txt_clm2">
                        <p class="underline_balloon text_blue2"><span>所要時間10分程度</span></p>
                        <p class="text">まずはお電話ください。いつでも無料で受け付けています。お気軽にお電話ください。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="bgF fuwat">
                <div class="sp">
                  <div class="step_title d-flex">
                    <p class="num text_fff">STEP 2</p>
                    <h3 class="text_blue2 bg01">弁護士との法律相談</h3>
                  </div>
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step02.png" alt="" width="190" height="228"></figure>
                    <div class="txt_clm">
                      <p class="text">ご相談内容を詳細にお伺いし、法的な観点を踏まえて適切なアドバイスをご提供いたします。</p>
                    </div>
                  </div>
                </div>
                <div class="pc">
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step02.png" alt="" width="190" height="228"></figure>
                    <div class="txt_clm">
                      <div class="step_title d-flex">
                        <p class="num text_fff">STEP 2</p>
                        <h3 class="text_blue2 bg01">弁護士との法律相談</h3>
                      </div>
                      <p class="text">ご相談内容を詳細にお伺いし、法的な観点を踏まえて適切なアドバイスをご提供いたします。</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="bgF fuwat">
                <div class="sp">
                  <div class="step_title d-flex">
                    <p class="num text_fff">STEP 3</p>
                    <h3 class="text_blue2 bg01">契約‧交渉</h3>
                  </div>
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step03.png" alt="" width="223" height="223"></figure>
                    <div class="txt_clm">
                      <p class="text">ご相談いただいた内容を基に、弁護士が相手方との交渉を進めさせていただきます。安心してお任せください。</p>
                    </div>
                  </div>
                </div>
                <div class="pc">
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step03.png" alt="" width="223" height="223"></figure>
                    <div class="txt_clm">
                      <div class="step_title d-flex">
                        <p class="num text_fff">STEP 3</p>
                        <h3 class="text_blue2 bg01">契約‧交渉</h3>
                      </div>
                      <p class="text">ご相談いただいた内容を基に、弁護士が相手方との交渉を進めさせていただきます。安心してお任せください。</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="bgF fuwat">
                <div class="sp">
                  <div class="step_title d-flex">
                    <p class="num text_fff">STEP 4</p>
                    <h3 class="text_blue2 bg01">解決</h3>
                  </div>
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step04.png" alt="" width="240" height="205"></figure>
                    <div class="txt_clm">
                      <p class="text">相手方との和解や示談が成立した際には、和解書などの書面を作成いたします。解決後のご相談についても、どうぞお気軽にご連絡ください。</p>
                    </div>
                  </div>
                </div>
                <div class="pc">
                  <div class="step_content d-flex align-items-center">
                    <figure><img src="<?php echo $img; ?>/img_step04.png" alt="" width="240" height="205"></figure>
                    <div class="txt_clm">
                      <div class="step_title d-flex">
                        <p class="num text_fff">STEP 4</p>
                        <h3 class="text_blue2 bg01">解決</h3>
                      </div>
                      <p class="text">相手方との和解や示談が成立した際には、和解書などの書面を作成いたします。解決後のご相談についても、どうぞお気軽にご連絡ください。</p>
                    </div>
                  </div>
                </div>
              </li>
            </ol>
            <div class="cost_area bgF" id="contents05">
              <h3 class="text_fff">費用体系</h3>
              <div class="cost_set cost01 d-flex align-items-center justify-content-between justify-content-md-center fuwat">
                <p class="theme text_blue2">相談料</p>
                <p class="amount text-blue"><strong class="serif">0</strong><span>円</span></p>
              </div>
              <div class="cost_set cost02 d-flex align-items-center justify-content-between justify-content-md-center fuwat">
                <p class="theme text_blue2">着手金</p>
                <p class="amount text-blue"><strong class="serif">22</strong><span>万円<br><small>（税込）</small></span></p>
              </div>
              <div class="cost_set cost03 d-flex align-items-center justify-content-between justify-content-md-center fuwat">
                <p class="theme text_blue2">成功報酬</p>
                <p class="amount text-blue d-flex align-items-end align-items-md-start"><small>減額した金額の</small><span><strong class="amount serif">17.6</strong><span class="percent"><b>%</b><br>(税込)</span></span></p>
              </div>
              <div>
                <p class="kome">※その他事務管理費11,000円（税込）を別途申し受けます。</p>
                <p class="kome">※訴訟及び調停に係った場合、33,000円（税込）を別途申し受けます。</p>
                
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="sec_08 bgF z8" id="contents06">
        <div class="inner">
          <h2 class="text-center text_blue2">よくあるご質問</h2>
          <dl class="qa_set">
            <dt class="accordion_btn">不倫の慰謝料相場はどのくらいですか？<span class="ico"></span></dt>
            <dd class="accordion_text"><p>裁判所の手続きを踏んで離婚慰謝料を決める場合、離婚理由にもよりますが、一般的な相場は50万～300万円となります。</p></dd>
          </dl>
          <dl class="qa_set">
            <dt class="accordion_btn">弁護士から内容証明が届きました。無視したらどうなりますか？<span class="ico"></span></dt>
            <dd class="accordion_text"><p>弁護士からの内容証明が届いた場合、そのまま無視すると問題がさらに深刻化する恐れがあります。<br>内容証明は法的手続きの一環であり、重要な通知書です。無視することで、慰謝料請求訴訟が提起され、適切な対応を怠ると不利な判決が下される可能性があります。<br>そのため、内容証明を受け取った際は、速やかに弁護士に相談し、適切な対応を講じることが重要です。</p></dd>
          </dl>
          <dl class="qa_set">
            <dt class="accordion_btn">会社や家族に知られずに解決することは可能ですか？<span class="ico"></span></dt>
            <dd class="accordion_text"><p>会社や家族に知られることなく進めることは可能ですが、そのためには慎重な対応が求められます。弁護士は個人情報やプライバシーを守る法的義務があるため、安心してご相談ください。<br>また、相手方との合意に基づいて和解金の支払いや解決を進める際には、秘密保持契約や非公開の合意書を取り交わすことが一般的です。</p></dd>
          </dl>
          <dl class="qa_set">
            <dt class="accordion_btn">弁護士に依頼すると何をしてくれるのですか？<span class="ico"></span></dt>
            <dd class="accordion_text">
              <p>主に以下の対応を行います。</p>
              <p><b>和解交渉:</b> 相手方との間で和解交渉を行い、慰謝料の金額や支払い条件などを取り決めます。</p>
              <p><b>訴訟代理:</b> 必要に応じて、訴訟手続きを代理します。弁護士は適切な法的戦略を立案し、あなたの代理として裁判所で証言します。</p>
              <p><b>交渉のサポート:</b> 交渉の過程全体をサポートし、不安や疑問に対処いたします。具体的には、相手方からの提案や要求に対して適切に対応し、交渉が円満に進むよう努めます。<br>さらに、法的なアドバイスや戦略の提供を通じて、最良の結果を引き出すために尽力いたします。</p>
            </dd>
          </dl>
          <dl class="qa_set">
            <dt class="accordion_btn">どのタイミングで無料相談を申し込むべきですか？<span class="ico"></span></dt>
            <dd class="accordion_text"><p>問題が発生したタイミングで速やかに相談いただくのがおすすめです。<br>不安や疑問があるなどのタイミングでもお気軽にご相談ください。</p></dd>
          </dl>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
