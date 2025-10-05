<?php
/*
Template Name: トップページ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-top">
      <section class="p-top-fv">
        <div class="p-top-fv__bg">
          <div class="c-inner">
            <div class="p-top-fv__ttlarea">
              <h1 class="p-top-fv__ttl">
                新しいと暮らす<br>
                リフォームの住まいで
              </h1>
              <span class="p-top-fv__sub-ttl">CRAFT HOMES</span>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-lead">
        <div class="c-inner">
          <div class="p-top-lead__cont">
            <h2 class="p-top-lead__ttl">
              大切な住まいを、<br>
              これからも安心・快適に。
            </h2>
            <p class="p-top-lead__txt">
              積み重ねた経験と技術で、日々の暮らしを支え、住まいの未来を育む。<br>
              小さな不安も見逃さず、安心と快適を届けます。
            </p>
          </div>
        </div>
      </section>

      <section class="p-top-points">
        <div class="p-top-points__inner">
          <h2 class="p-top-points__ttl">
            安心してお任せいただける<br>
            <span class="p-top-points__l-ttl">3つのポイント</span>
          </h2>
          <ol class="p-top-points__list">
            <li class="p-top-points__item">
              <div class="p-top-points__txtarea">
                <span class="p-top-points__num">01</span>
                <h3 class="p-top-points__item-ttl">地域密着・お客様第一</h3>
                <p class="p-top-points__item-txt">地域に根ざし、住まいを支え続けています。</p>
              </div>
              <picture class="p-top-points__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img01_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img01_sp.png" media="(max-width: 767px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img01.png" width="936" height="450" alt="地域密着・お客様第一">
              </picture>
            </li>
            <li class="p-top-points__item">
              <div class="p-top-points__txtarea">
                <span class="p-top-points__num">02</span>
                <h3 class="p-top-points__item-ttl">中間マージンなしで適正価格</h3>
                <p class="p-top-points__item-txt">自社施工で、適正価格を実現します。</p>
              </div>
              <picture class="p-top-points__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img02.jpg" width="936" height="450" alt="中間マージンなしで適正価格">
              </picture>
            </li>
            <li class="p-top-points__item">
              <div class="p-top-points__txtarea">
                <span class="p-top-points__num">03</span>
                <h3 class="p-top-points__item-ttl">確かな技術と実績</h3>
                <p class="p-top-points__item-txt">
                  豊富な実績と職人の技術で、理想の住まいを実現します。
                </p>
              </div>
              <picture class="p-top-points__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/points/points_img03.jpg" width="936" height="450" alt="中間マージンなしで適正価格">
              </picture>
            </li>
          </ol>
        </div>
      </section>

      <section class="p-top-service">
        <div class="c-inner">
          <h2 class="c-sec-ttl">サービス</h2>
          <p class="p-top-service__txt">
            日々の暮らしを快適に、そして未来へ安心をつなぐために、外装から内装まで幅広いリフォームに対応。<br>
            屋根・外壁・ベランダ・外構から、キッチン・浴室・トイレまで、確かな施工で住まいを守り続けます。
          </p>
          <div class="p-top-service__cont">
            <a href="<?php echo esc_url(home_url('/exterior/')); ?>" class="p-top-service__link p-top-service__link--exterior">
              <h3 class="p-top-service__cont-ttl">外装リフォーム</h3>
              <span class="p-top-service__hover-btn">
                詳しく見る
                <svg class="p-top-service__hover-svg" width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.4919 12.5505C11.8266 12.8686 12.3692 12.8685 12.704 12.5505L18.1591 7.36513C18.4938 7.04694 18.4938 6.53118 18.1591 6.21299L12.704 1.02758C12.3692 0.709638 11.8266 0.709476 11.4919 1.02758C11.1573 1.34569 11.1575 1.86151 11.4919 2.17972L15.4839 5.97429L1.2673 5.97429C0.793914 5.97429 0.410156 6.33908 0.410156 6.78906C0.410156 7.23905 0.793914 7.60383 1.2673 7.60383L15.4839 7.60383L11.4919 11.3984C11.1575 11.7166 11.1573 12.2324 11.4919 12.5505Z" fill="white"/>
                </svg>
              </span>
            </a>
            <a href="<?php echo esc_url(home_url('/interior/')); ?>" class="p-top-service__link p-top-service__link--interior">
              <h3 class="p-top-service__cont-ttl">内装リフォーム</h3>
              <span class="p-top-service__hover-btn">
                詳しく見る
                <svg class="p-top-service__hover-svg" width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.4919 12.5505C11.8266 12.8686 12.3692 12.8685 12.704 12.5505L18.1591 7.36513C18.4938 7.04694 18.4938 6.53118 18.1591 6.21299L12.704 1.02758C12.3692 0.709638 11.8266 0.709476 11.4919 1.02758C11.1573 1.34569 11.1575 1.86151 11.4919 2.17972L15.4839 5.97429L1.2673 5.97429C0.793914 5.97429 0.410156 6.33908 0.410156 6.78906C0.410156 7.23905 0.793914 7.60383 1.2673 7.60383L15.4839 7.60383L11.4919 11.3984C11.1575 11.7166 11.1573 12.2324 11.4919 12.5505Z" fill="white"/>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </section>

      <section class="p-top-about">
        <div class="p-top-about__inner">
          <div class="p-top-about__cont">
            <picture class="p-top-about__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img.jpg" width="886" height="800" alt="会社概要">
            </picture>
            <div class="p-top-about__txtarea">
              <h2 class="p-top-about__ttl c-sec-ttl">会社概要</h2>
              <span class="p-top-about__sub-ttl">クラフトホームズについて</span>
              <p class="p-top-about__txt">
                クラフトホームズは、屋根・外壁のリフォームをはじめ、防水工事や雨樋工事など住まいを守る工事に幅広く対応しています。<br>
                また、新築・増改築・内装・店舗工事など建築全般を手掛け、地域に根ざした総合建設業として信頼をいただいています。
              </p>
              <div class="p-top-about__btn-wrap">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-btn">
                  会社概要を見る
                  <svg class="c-btn__svg" width="24" height="17" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.3142 11.7615C11.6489 12.0796 12.1915 12.0794 12.5263 11.7615L17.9814 6.57607C18.3161 6.25788 18.3161 5.74212 17.9814 5.42393L12.5263 0.238521C12.1915 -0.079425 11.6489 -0.0795861 11.3142 0.238521C10.9796 0.556628 10.9797 1.07245 11.3142 1.39066L15.3061 5.18523L1.08957 5.18523C0.616179 5.18523 0.232422 5.55002 0.232422 6C0.232422 6.44999 0.616179 6.81477 1.08957 6.81477L15.3061 6.81477L11.3142 10.6093C10.9797 10.9275 10.9796 11.4434 11.3142 11.7615Z" fill="#313131"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-news">
        <div class="p-top-news__inner">
          <h2 class="p-top-news__ttl c-sec-ttl">新着情報</h2>
          <ul class="p-top-news__list">
            <li class="p-top-news__item">
              <a href="<?php the_permalink(); ?>" class="p-top-news__link">
                <span class="p-top-news__link-head">
                  <time datetime="2025.00.00" class="p-top-news__time">2025.00.00</time>
                  <span class="p-top-news__tag">カテゴリ</span>
                </span>
                <h3 class="p-top-news__item-ttl">記事のタイトルが入ります。記事のタイトルが入ります。</h3>
              </a>
            </li>
          </ul>
          <div class="p-top-news__btn-wrap">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn">
              新着情報一覧を見る
              <svg class="c-btn__svg" width="24" height="17" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.3142 11.7615C11.6489 12.0796 12.1915 12.0794 12.5263 11.7615L17.9814 6.57607C18.3161 6.25788 18.3161 5.74212 17.9814 5.42393L12.5263 0.238521C12.1915 -0.079425 11.6489 -0.0795861 11.3142 0.238521C10.9796 0.556628 10.9797 1.07245 11.3142 1.39066L15.3061 5.18523L1.08957 5.18523C0.616179 5.18523 0.232422 5.55002 0.232422 6C0.232422 6.44999 0.616179 6.81477 1.08957 6.81477L15.3061 6.81477L11.3142 10.6093C10.9797 10.9275 10.9796 11.4434 11.3142 11.7615Z" fill="#313131"/>
              </svg>
            </a>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>

  </main>

  <?php get_footer(); ?>