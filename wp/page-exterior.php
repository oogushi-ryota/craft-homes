<?php
/*
Template Name: 外装リフォーム
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <?php get_template_part('parts/fixed-btn'); ?>
    
    <div class="p-reform p-exterior">
      <?php
      $exterior_bg_id = SCF::get('exterior-fv');
      $exterior_bg_url = wp_get_attachment_url($exterior_bg_id);
      ?>
      <section class="c-under-fv c-under-fv--exterior" style="background-image: url('<?php echo esc_url($exterior_bg_url); ?>');">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Exterior Renovation</span>
            <h1 class="c-under-ttl__ja">外装リフォーム</h1>
          </div>
        </div>
      </section>

      <section class="p-reform-lead">
        <div class="c-inner">
          <h2 class="p-reform-lead__ttl">
            外装を美しく保ち、<br>
            快適な暮らしを未来へつなぐ
          </h2>
          <p class="p-reform-lead__txt">
            クラフトホームズでは、住まいの外装をトータルでサポートしています。<br>
            屋根・外壁・ベランダ・外構・省エネ設備まで、建物の状態やご要望に合わせて最適なプランをご提案。<br>
            デザイン性と機能性を兼ね備えたリフォームで、長く快適に暮らせる住まいを実現します。
          </p>
        </div>
      </section>

      <section class="p-reform-reason">
        <div class="c-inner">
          <h2 class="p-reform-reason__ttl c-under-sec-ttl">外装リフォームが必要な理由</h2>
          <p class="p-reform-reason__txt">
            外装は日々の風雨や紫外線の影響を受け、劣化が進みやすい部分です。<br>
            こんな症状が見られたらリフォームを検討するタイミングです。
          </p>
          <ul class="p-reform-reason__list">
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <?php
                $reason_img01_id = SCF::get('reason_img01');
                $reason_img01_url = wp_get_attachment_url($reason_img01_id);
                ?>
                <picture class="p-reform-reason__img">
                  <img src="<?php echo esc_url($reason_img01_url); ?>" width="330" height="400" alt="外壁の色あせ・ひび割れ">
                </picture>
                <h3 class="p-reform-reason__item-ttl">外壁の色あせ・ひび割れ</h3>
              </div>
              <p class="p-reform-reason__item-txt">見た目だけでなく、防水性の低下につながります。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <?php
                $reason_img02_id = SCF::get('reason_img02');
                $reason_img02_url = wp_get_attachment_url($reason_img02_id);
                ?>
                <picture class="p-reform-reason__img">
                  <img src="<?php echo esc_url($reason_img02_url); ?>" width="330" height="400" alt="屋根材のズレや破損">
                </picture>
                <h3 class="p-reform-reason__item-ttl">屋根材のズレや破損</h3>
              </div>
              <p class="p-reform-reason__item-txt">雨漏りや下地の腐食の原因になります。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <?php
                $reason_img03_id = SCF::get('reason_img03');
                $reason_img03_url = wp_get_attachment_url($reason_img03_id);
                ?>
                <picture class="p-reform-reason__img">
                  <img src="<?php echo esc_url($reason_img03_url); ?>" width="330" height="400" alt="ベランダの防水層の劣化">
                </picture>
                <h3 class="p-reform-reason__item-ttl">ベランダの防水層の劣化</h3>
              </div>
              <p class="p-reform-reason__item-txt">表面のひびや浮きから雨水が侵入しやすくなります。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <?php
                $reason_img04_id = SCF::get('reason_img04');
                $reason_img04_url = wp_get_attachment_url($reason_img04_id);
                ?>
                <picture class="p-reform-reason__img">
                  <img src="<?php echo esc_url($reason_img04_url); ?>" width="330" height="400" alt="外構やフェンスの老朽化">
                </picture>
                <h3 class="p-reform-reason__item-ttl">外構やフェンスの老朽化</h3>
              </div>
              <p class="p-reform-reason__item-txt">安全性や住まいの印象を損なう恐れがあります。</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="p-reform-feature">
        <div class="c-inner">
          <h2 class="p-reform-feature__ttl c-under-sec-ttl">
            クラフトホームズの<br>
            外装リフォームの特徴
          </h2>
          <ol class="p-reform-feature__list">
            <li class="p-reform-feature__item">
              <?php
              $feature_img01_id = SCF::get('feature_img01');
              $feature_img01_url = wp_get_attachment_url($feature_img01_id);
              ?>
              <picture class="p-reform-feature__img">
                <img src="<?php echo esc_url($feature_img01_url); ?>" width="390" height="310" alt="屋外環境に強い施工">
              </picture>
              <h3 class="p-reform-feature__item-ttl">屋外環境に強い施工</h3>
              <p class="p-reform-feature__item-txt">紫外線や風雨にさらされる外装だからこそ、耐久性を重視した施工を行います。</p>
            </li>
            <li class="p-reform-feature__item">
              <?php
              $feature_img02_id = SCF::get('feature_img02');
              $feature_img02_url = wp_get_attachment_url($feature_img02_id);
              ?>
              <picture class="p-reform-feature__img">
                <img src="<?php echo esc_url($feature_img02_url); ?>" width="390" height="310" alt="幅広い工事に対応">
              </picture>
              <h3 class="p-reform-feature__item-ttl">幅広い工事に対応</h3>
              <p class="p-reform-feature__item-txt">屋根・外壁・ベランダから外構・太陽光まで、外装全般をまとめてご相談いただけます。</p>
            </li>
            <li class="p-reform-feature__item">
              <?php
              $feature_img03_id = SCF::get('feature_img03');
              $feature_img03_url = wp_get_attachment_url($feature_img03_id);
              ?>
              <picture class="p-reform-feature__img">
                <img src="<?php echo esc_url($feature_img03_url); ?>" width="390" height="310" alt="景観と機能性の両立">
              </picture>
              <h3 class="p-reform-feature__item-ttl">景観と機能性の両立</h3>
              <p class="p-reform-feature__item-txt">美観を整えるだけでなく、防水性や断熱性など機能性も高めるリフォームをご提案します。</p>
            </li>
          </ol>
        </div>
      </section>

      <section class="p-reform-variation">
        <h2 class="p-reform-variation__ttl c-under-sec-ttl">
          クラフトホームズの<br>
          外装リフォームメニュー
        </h2>
        <div class="p-reform-variation__wrap">
          <div class="p-reform-variation__cont">
            <?php
            $variation_img01_id = SCF::get('variation_img01');
            $variation_img01_url = wp_get_attachment_url($variation_img01_id);
            ?>
            <picture class="p-reform-variation__img">
              <img src="<?php echo esc_url($variation_img01_url); ?>" width="936" height="450" alt="屋根リフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">屋根リフォーム</h3>
              <p class="p-reform-variation__txt">
                屋根は風雨や紫外線の影響を最も受けやすい部分です。<br>
                劣化を放置すると雨漏りや内部腐食の原因にもなります。<br>
                クラフトホームズでは、葺き替え・カバー工法など最適な工法をご提案し、建物の寿命を延ばします。<br>
                耐久性・断熱性・デザイン性を兼ね備えた屋根で、快適な暮らしを守ります。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <?php
            $variation_img02_id = SCF::get('variation_img02');
            $variation_img02_url = wp_get_attachment_url($variation_img02_id);
            ?>
            <picture class="p-reform-variation__img">
              <img src="<?php echo esc_url($variation_img02_url); ?>" width="936" height="450" alt="外壁リフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">外壁リフォーム</h3>
              <p class="p-reform-variation__txt">
                外壁は美観を保つだけでなく、防水性能を維持するためにも重要です。<br>
                ひび割れや色あせが目立ち始めたら、早めのメンテナンスが肝心です。<br>
                当社では、塗装・張り替え・カバー工法など、建物に最適な施工プランをご提案。<br>
                美しさと耐久性を両立し、長く安心して暮らせる住まいへと導きます。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <?php
            $variation_img03_id = SCF::get('variation_img03');
            $variation_img03_url = wp_get_attachment_url($variation_img03_id);
            ?>
            <picture class="p-reform-variation__img">
              <img src="<?php echo esc_url($variation_img03_url); ?>" width="936" height="450" alt="ベランダリフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">ベランダリフォーム</h3>
              <p class="p-reform-variation__txt">
                ベランダは防水層の劣化が進みやすく、放置すると雨漏りの原因となります。<br>
                クラフトホームズでは、防水工事・トップコート補修・防滑仕上げなど幅広く対応。<br>
                安全で快適に使える空間を長期的に維持します。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <?php
            $variation_img04_id = SCF::get('variation_img04');
            $variation_img04_url = wp_get_attachment_url($variation_img04_id);
            ?>
            <picture class="p-reform-variation__img">
              <img src="<?php echo esc_url($variation_img04_url); ?>" width="936" height="450" alt="外構・庭リフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">外構・庭リフォーム</h3>
              <p class="p-reform-variation__txt">
                外構や庭は、住まい全体の印象を決める大切な要素です。<br>
                門扉・フェンス・アプローチ・駐車場・庭づくりなど、デザインと機能性を両立したプランをご提案。<br>
                暮らしに調和する外回り空間をトータルで演出します。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <?php
            $variation_img05_id = SCF::get('variation_img05');
            $variation_img05_url = wp_get_attachment_url($variation_img05_id);
            ?>
            <picture class="p-reform-variation__img">
              <img src="<?php echo esc_url($variation_img05_url); ?>" width="936" height="450" alt="太陽光発電・省エネ機器">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">太陽光発電・省エネ機器</h3>
              <p class="p-reform-variation__txt">エネルギーコストの削減と環境への配慮を両立できる、太陽光発電・蓄電池・省エネ設備の導入もお任せください。最新機器を活用したご提案で、快適で持続可能な住まいづくりをサポートします。</p>
            </div>
          </div>
        </div>
      </section>

      <section class="p-reform-afterservice">
        <div class="c-inner c-inner--160">
          <div class="p-reform-afterservice__cont">
            <div class="p-reform-afterservice__ttlarea">
              <h2 class="p-reform-afterservice__ttl">保証・アフターサービス</h2>
              <p class="p-reform-afterservice__txt">
                すべての工事には、最長10年保証とアフターサービスが付いています。<br>
                施工後も安心してお住まいいただけるよう、しっかりとサポートいたします。
              </p>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>

    <div class="c-breadcrumb">
      <div class="c-inner">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-breadcrumb__link">トップ</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">外装リフォーム</span>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>