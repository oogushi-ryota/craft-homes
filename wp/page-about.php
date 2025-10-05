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
                <th class="p-about-company__th">会社名</th>
                <td class="p-about-company__td">クラフトホームズ</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">所在地</th>
                <td class="p-about-company__td">
                  〒000-0000<br>
                  東京都
                </td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">電話番号</th>
                <td class="p-about-company__td">000-0000-0000</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">FAX番号</th>
                <td class="p-about-company__td">000-0000-0000</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">創立</th>
                <td class="p-about-company__td">0000年 0月</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">資本金</th>
                <td class="p-about-company__td">00万円</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">従業員数</th>
                <td class="p-about-company__td">00名（0000年 0月 現在）</td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">業務内容</th>
                <td class="p-about-company__td">
                  (1) 一般住宅設計, 施工(ソーラーサーキット住宅) (SE工法)<br>
                  (2)土地有効活用, 企画, 立案<br>
                  (3)大型建築(S造, RC造, SRC造) 建築, 設計, 施工<br>
                  (4)不動産紹介
                </td>
              </tr>
              <tr class="p-about-company__tr">
                <th class="p-about-company__th">取引銀行</th>
                <td class="p-about-company__td">みずほ銀行, 埼玉りそな銀行, 武蔵野銀行, 東京信用金庫</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>