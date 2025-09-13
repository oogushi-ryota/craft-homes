<?php
/*
Template Name: 園の概要・施設紹介
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="c-breadcrumb">
      <nav class="c-breadcrumb__nav"> 
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-breadcrumb__link">ホーム</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">園の概要・施設紹介</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-about-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">OVERVIEW</span>
              <h1 class="c-under-fv__ja">
                <span class="p-about-fv__txt-obj">園の概要・施設紹介</span>
              </h1>
            </hgroup>
            <nav class="c-sec-anchor">
              <ul class="c-sec-anchor__list">
                <li class="c-sec-anchor__item">
                  <a href="#outline" class="c-sec-anchor__link">園の概要</a>
                </li>
                <li class="c-sec-anchor__item">
                  <a href="#history" class="c-sec-anchor__link">沿革</a>
                </li>
                <li class="c-sec-anchor__item">
                  <a href="#facility" class="c-sec-anchor__link">運営施設一覧</a>
                </li>
              </ul>
            </nav>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/fv/fv_img.jpg" width="970" height="600" alt="園の概要・施設紹介の画像">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-about-outline" id="outline">
      <div class="c-inner">
        <div class="p-about-outline__cont">
          <h2 class="p-about-outline__ttl c-sec-ttl">園の概要</h2>
          <table class="p-about-outline__table">
            <tbody class="p-about-outline__tbody">
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">法人名</th>
                <td class="p-about-outline__td">一般社団法人にこまるえん</td>
              </tr>
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">代表理事</th>
                <td class="p-about-outline__td">大澤 誠</td>
              </tr>
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">電話番号</th>
                <td class="p-about-outline__td">011-896-3088</td>
              </tr>
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">FAX</th>
                <td class="p-about-outline__td">011-850-9687</td>
              </tr>
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">法人設立</th>
                <td class="p-about-outline__td">平成29年6月7日</td>
              </tr>
              <tr class="p-about-outline__tr">
                <th class="p-about-outline__th">顧問弁護士</th>
                <td class="p-about-outline__td">瀬戸 悠介</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="p-about-history" id="history">
      <div class="p-about-history__inner">
        <h2 class="p-about-history__ttl c-sec-ttl">沿革</h2>
        <ul class="p-about-history__list">
          <li class="p-about-history__item">
            <span class="p-about-history__date">平成29年6月7日</span>
            <span class="p-about-history__txt">一般社団法人にこまるえん設立</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">平成30年4月1日</span>
            <span class="p-about-history__txt">にこまるえん東白石 開園</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">平成31年4月1日</span>
            <span class="p-about-history__txt">にこまるえん南郷 開園</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">令和2年4月1日</span>
            <span class="p-about-history__txt">にこまるえん白石 開園</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">令和3年7月21日</span>
            <span class="p-about-history__txt">株式会社 にこＲＩＳＥ 設立</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">令和4年4月1日</span>
            <span class="p-about-history__txt">スマートウオッチ型の保育支援システム 「にこまこ」リリース</span>
          </li>
          <li class="p-about-history__item">
            <span class="p-about-history__date">令和5年4月1日</span>
            <span class="p-about-history__txt">にこまるえん円山 開園</span>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-about-facility" id="facility">
      <div class="c-inner">
        <h2 class="p-about-facility__ttl c-sec-ttl">保育施設一覧</h2>
        <ul class="p-about-facility__list">
          <li class="p-about-facility__item">
            <picture class="p-about-facility__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img01.jpg" width="280" height="187" alt="にこまるえん白石">
            </picture>
            <h3 class="p-about-facility__list-ttl">にこまるえん白石</h3>
            <p class="p-about-facility__txt">
              〒003-0002<br>
              北海道札幌市白石区東札幌2条5丁目6-9 インフィニティ東札幌1階<br>
              TEL : 011-850-9686
            </p>
          </li>
          <li class="p-about-facility__item">
            <picture class="p-about-facility__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img02.jpg" width="280" height="187" alt="にこまるえん東白石">
            </picture>
            <h3 class="p-about-facility__list-ttl">にこまるえん東白石</h3>
            <p class="p-about-facility__txt">
              〒003-0024<br>
              北海道札幌市白石区本郷通9丁目南2-10 林ビル<br>
              TEL : 011-799-1565
            </p>
          </li>
          <li class="p-about-facility__item">
            <picture class="p-about-facility__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img03.jpg" width="280" height="187" alt="にこまるえん南郷">
            </picture>
            <h3 class="p-about-facility__list-ttl">にこまるえん南郷</h3>
            <p class="p-about-facility__txt">
              〒003-0024<br>
              北海道札幌市白石区本郷通8丁目南1-2<br>
              TEL : 011-867-9770
            </p>
          </li>
          <li class="p-about-facility__item">
            <picture class="p-about-facility__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/facility/facility_img04.jpg" width="280" height="187" alt="にこまるえん円山">
            </picture>
            <h3 class="p-about-facility__list-ttl">にこまるえん円山</h3>
            <p class="p-about-facility__txt">
              〒064-0821<br>
              北海道札幌市中央区北1条西23丁目1-33<br>
              TEL : 011-676-9911
            </p>
          </li>
        </ul>
      </div>
    </section>
    
    <?php get_template_part( 'parts/parts', 'entry' ); ?>

  </main>

  <?php get_footer(); ?>