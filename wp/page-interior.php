<?php
/*
Template Name: 内装リフォーム
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <?php get_template_part('parts/fixed-btn'); ?>
    
    <div class="p-reform p-interior">
      <section class="c-under-fv c-under-fv--interior">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Interior Renovation</span>
            <h1 class="c-under-ttl__ja">内装リフォーム</h1>
          </div>
        </div>
      </section>

      <section class="p-reform-lead">
        <div class="c-inner">
          <h2 class="p-reform-lead__ttl">
            暮らしを快適に彩り、<br>
            住まいの価値を高める
          </h2>
          <p class="p-reform-lead__txt">
            内装は、毎日の暮らしを快適にするための大切な空間です。<br>
            クラフトホームズでは、キッチン・浴室・洗面・トイレなどの水回りから、壁紙・床材のリフォームまで、デザイン性と機能性を両立したご提案を行っています。<br>
            お客様のライフスタイルやご希望に合わせて、快適で心地よい住まいづくりをトータルにサポートします。
          </p>
        </div>
      </section>

      <section class="p-reform-reason">
        <div class="c-inner">
          <h2 class="p-reform-reason__ttl c-under-sec-ttl">内装リフォームが必要な理由</h2>
          <p class="p-reform-reason__txt">
            内装は毎日の暮らしに直結するため、劣化や不便を放置すると快適性や使い勝手に影響します。<br>
            こんな症状やお悩みが見られたら、リフォームを検討するタイミングです。
          </p>
          <ul class="p-reform-reason__list">
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <picture class="p-reform-reason__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img01.jpg" width="330" height="400" alt="キッチンや浴室設備の老朽化">
                </picture>
                <h3 class="p-reform-reason__item-ttl">キッチンや浴室設備の老朽化</h3>
              </div>
              <p class="p-reform-reason__item-txt">使い勝手が悪くなったり、水漏れの原因になることがあります。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <picture class="p-reform-reason__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img02.jpg" width="330" height="400" alt="壁紙や床材の汚れ・傷み">
                </picture>
                <h3 class="p-reform-reason__item-ttl">壁紙や床材の汚れ・傷み</h3>
              </div>
              <p class="p-reform-reason__item-txt">見た目が古くなるだけでなく、衛生面にも影響します。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <picture class="p-reform-reason__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img03.jpg" width="330" height="400" alt="収納不足や間取りの使いづらさ">
                </picture>
                <h3 class="p-reform-reason__item-ttl">収納不足や間取りの使いづらさ</h3>
              </div>
              <p class="p-reform-reason__item-txt">暮らしの変化に合わせた改善が必要です。</p>
            </li>
            <li class="p-reform-reason__item">
              <div class="p-reform-reason__imgwrap">
                <picture class="p-reform-reason__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img04.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/reason/reason_img04.jpg" width="330" height="400" alt="トイレや洗面の不具合">
                </picture>
                <h3 class="p-reform-reason__item-ttl">トイレや洗面の不具合</h3>
              </div>
              <p class="p-reform-reason__item-txt">水回りの小さな不具合が快適さを損ないます。</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="p-reform-feature">
        <div class="c-inner">
          <h2 class="p-reform-feature__ttl c-under-sec-ttl">
            クラフトホームズの<br>
            内装リフォームの特徴
          </h2>
          <ol class="p-reform-feature__list">
            <li class="p-reform-feature__item">
              <picture class="p-reform-feature__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img01.jpg" width="390" height="310" alt="暮らしに合わせた最適な提案">
              </picture>
              <h3 class="p-reform-feature__item-ttl">暮らしに合わせた最適な提案</h3>
              <p class="p-reform-feature__item-txt">家族構成やライフスタイルに合わせた、使いやすく快適な空間を実現します。</p>
            </li>
            <li class="p-reform-feature__item">
              <picture class="p-reform-feature__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img02.jpg" width="390" height="310" alt="デザイン性と機能性の両立">
              </picture>
              <h3 class="p-reform-feature__item-ttl">デザイン性と機能性の両立</h3>
              <p class="p-reform-feature__item-txt">インテリアの雰囲気に調和しながら、最新設備を導入して快適さを高めます。</p>
            </li>
            <li class="p-reform-feature__item">
              <picture class="p-reform-feature__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/feature/feature_img03.jpg" width="390" height="310" alt="水回りリフォームの豊富な実績">
              </picture>
              <h3 class="p-reform-feature__item-ttl">水回りリフォームの豊富な実績</h3>
              <p class="p-reform-feature__item-txt">キッチン・浴室・洗面・トイレなど、毎日使う場所だからこそ確かな施工で安心です。</p>
            </li>
          </ol>
        </div>
      </section>

      <section class="p-reform-variation">
        <h2 class="p-reform-variation__ttl c-under-sec-ttl">
          クラフトホームズの<br>
          内装リフォームメニュー
        </h2>
        <div class="p-reform-variation__wrap">
          <div class="p-reform-variation__cont">
            <picture class="p-reform-variation__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img01.jpg" width="936" height="450" alt="キッチンリフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">キッチンリフォーム</h3>
              <p class="p-reform-variation__txt">
                毎日使うキッチンだからこそ、使いやすさとデザイン性の両立が大切です。<br>
                収納力や動線を見直し、快適に調理ができる空間を実現します。<br>
                対面式・アイランド型など、ご希望に合わせたレイアウトのご提案も可能です。<br>
                毎日の料理がもっと楽しく、心地よい時間に変わります。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <picture class="p-reform-variation__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img02.jpg" width="936" height="450" alt="浴室リフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">浴室リフォーム</h3>
              <p class="p-reform-variation__txt">
                一日の疲れを癒やす浴室は、快適性と安全性が求められる場所。<br>
                最新のユニットバスや手すり設置、防カビ仕様など、ご家族のニーズに合わせた安心・快適なバスルームをご提案します。<br>
                心も体もリラックスできる、上質なくつろぎ空間を実現します。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <picture class="p-reform-variation__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img03.jpg" width="936" height="450" alt="洗面リフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">洗面リフォーム</h3>
              <p class="p-reform-variation__txt">
                洗面所は朝の身支度から夜のスキンケアまで、暮らしの中心となる空間です。<br>
                収納性・清掃性に優れた洗面台や、湿気に強い内装材を選ぶことで、毎日の生活がより快適に。<br>
                家族みんなが気持ちよく使える清潔で明るい洗面空間をつくります。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <picture class="p-reform-variation__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img04.jpg" width="936" height="450" alt="トイレリフォーム">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">トイレリフォーム</h3>
              <p class="p-reform-variation__txt">
                トイレは、毎日使うからこそ清潔さと機能性が重要です。<br>
                節水機能・抗菌仕様・手洗い一体型などの最新設備を導入し、快適で美しい空間をつくります。<br>
                毎日使う場所だからこそ、安心と清潔にこだわった空間をご提案します。
              </p>
            </div>
          </div>
          <div class="p-reform-variation__cont">
            <picture class="p-reform-variation__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img05.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/interior/variation/variation_img05.jpg" width="936" height="450" alt="内装リフォーム（壁紙・床など）">
            </picture>
            <div class="p-reform-variation__txtarea">
              <h3 class="p-reform-variation__cont-ttl">内装リフォーム<br class="is-sp">（壁紙・床など）</h3>
              <p class="p-reform-variation__txt">
                クロスや床材の張り替えは、住まいの印象を一新するポイントです。<br>
                デザイン性の高い素材や、断熱・防音性能に優れた仕上げ材を採用し、快適な空間へとリフレッシュします。<br>
                お部屋の雰囲気を一新し、毎日がより心地よく過ごせる住まいに。
              </p>
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
            <span class="c-breadcrumb__link">内装リフォーム</span>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>