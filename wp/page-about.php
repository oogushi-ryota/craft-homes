<?php
/*
Template Name: 会社概要
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-about">
      <section class="c-under-fv c-under-fv--about">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Company</span>
            <h1 class="c-under-ttl__ja">会社概要</h1>
          </div>
        </div>
      </section>

      <section class="p-about-lead">
        <div class="c-inner">
          <h2 class="p-about-lead__ttl">クラフトホームズの想い</h2>
          <p class="p-about-lead__txt">
            大切な住まいを、これからも安心・快適に。 クラフトホームズは、積み重ねた経験と確かな技術で、お客様一人ひとりの暮らしに寄り添います。<br>
            地域に根ざした総合建設会社として、これからも信頼と安心をお届けしてまいります。
          </p>
        </div>
      </section>

      <section class="p-about-company">
        <div class="c-inner">
          <table class="p-about-company__table">
            <tbody class="p-about-company__tbody">
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">屋号</th>
                <td class="p-about-company__td">クラフトホームズ</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">運営会社名</th>
                <td class="p-about-company__td">株式会社クラフトマン</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">所在地</th>
                <td class="p-about-company__td">
                  〒180-0004<br>
                  東京都武蔵野市吉祥寺本町1-20-1 吉祥寺永谷シティプラザ
                </td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">電話番号</th>
                <td class="p-about-company__td">
                  0120-990-656<br>
                  042-843-5280
                </td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">FAX番号</th>
                <td class="p-about-company__td">042-843-5268</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">創立</th>
                <td class="p-about-company__td">2022年12月26日</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">資本金</th>
                <td class="p-about-company__td">5,000万円</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">従業員数</th>
                <td class="p-about-company__td">32名　※業務委託社員含む（2025年10月現在）</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">業務内容</th>
                <td class="p-about-company__td">
                  <span class="p-about-company__td-wrap">
                    <span class="p-about-company__td-list-num">(1)</span>
                    戸建住宅・集合住宅・店舗・オフィスを対象とした「総合リフォーム事業」
                  </span>
                  <span class="p-about-company__td-wrap">
                    <span class="p-about-company__td-list-num">(2)</span>
                    太陽光発電システム、蓄電池、オール電化設備、省エネ改修等の「太陽光発電・省エネ事業」
                  </span>
                  <span class="p-about-company__td-wrap">
                    <span class="p-about-company__td-list-num">(3)</span>
                    マンション・ビル・商業施設における外壁補修、防水などの「大規模修繕・改修工事業」
                  </span>
                  <span class="p-about-company__td-wrap">
                    <span class="p-about-company__td-list-num">(4)</span>
                    市区町村をはじめとする公共施設の改修工事、耐震補強、インフラ整備等の「公共工事業」 
                  </span>
                </td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">取引銀行</th>
                <td class="p-about-company__td">みずほ銀行　青梅信用金庫　payapay銀行</td>
              </tr>
            </tbody>
          </table>
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
            <span class="c-breadcrumb__link">会社概要</span>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>