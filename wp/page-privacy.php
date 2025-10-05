<?php
/*
Template Name: プライバシーポリシー
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-privacy">
      <section class="c-under-fv c-under-fv--privacy">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Privacy Policy</span>
            <h1 class="c-under-ttl__ja">プライバシー<br class="is-sp">ポリシー</h1>
          </div>
        </div>
      </section>

      <section class="p-privacy-lead">
        <div class="c-inner">
          <p class="p-privacy-lead__txt">
            株式会社クラフトホームズ（以下「当社」）は、屋根・外装・防水・内装など各種リフォーム事業を主な事業内容とし、事業活動を通じて取扱う個人情報の適切な保護を重要な責務と位置づけております。<br>
            そのため当社は、個人情報の保護に関する法律（以下「個人情報保護法」）その他の関連法令及びガイドラインを遵守し、個人情報の適正な取得、利用および提供に関するルールと体制を整備いたします。<br>
            また、本プライバシーポリシーを定め、これを実行・維持し、継続的に改善することを宣言いたします。なお、本プライバシーポリシーにおける用語は、特段の定義がない限り個人情報保護法令の定義に従います。
          </p>
        </div>
      </section>

      <section class="p-privacy-details">
        <div class="c-inner">
          <ol class="p-privacy-details__list">
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">1. 個人情報の取得と利用目的</h2>
              <p class="p-privacy-details__item-txt">
                当社は、以下の目的のためにお客様の個人情報を取得・利用いたします。<br>
                ・お問い合わせへの対応<br>
                ・ご依頼いただいた業務の遂行および関連するご連絡<br>
                ・見積書・資料等の送付<br>
                ・サービス改善や新サービスのご案内<br>
                ・法令等に基づく対応
              </p>
            </li>
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">2. 個人情報の取得と利用目的</h2>
              <p class="p-privacy-details__item-txt">当社は、取得した個人情報を正確かつ最新の状態に保つよう努め、不正アクセス、紛失、改ざん、漏えい等を防止するため、必要かつ適切な安全管理措置を講じます。</p>
            </li>
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">3. 個人情報の第三者提供</h2>
              <p class="p-privacy-details__item-txt">
                当社は、以下の場合を除き、あらかじめご本人の同意を得ることなく個人情報を第三者に提供することはありません。<br>
                ・法令に基づく場合<br>
                ・人の生命、身体または財産の保護のために必要な場合<br>
                ・業務委託先に業務を委託する場合（委託先においても適切な管理を行います）
              </p>
            </li>
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">4. 個人情報の開示・訂正・利用停止等</h2>
              <p class="p-privacy-details__item-txt">お客様からご自身の個人情報の開示、訂正、追加、削除、利用停止等のご請求があった場合、法令に基づき、速やかに対応いたします。</p>
            </li>
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">5. プライバシーポリシーの改定</h2>
              <p class="p-privacy-details__item-txt">当社は、本プライバシーポリシーを必要に応じて見直し、継続的な改善に努めます。改定後の内容は本ページにて公表いたします。</p>
            </li>
            <li class="p-privacy-details__item">
              <h2 class="p-privacy-details__item-ttl">6. お問い合わせ窓口</h2>
              <p class="p-privacy-details__item-txt">
                クラフトホームズ<br>
                〒000-0000<br>
                東京都〇〇区〇〇<br>
                TEL：000-0000-0000<br>
                Mail：info@example.com
              </p>
            </li>
          </ol>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
    
  </main>

  <?php get_footer(); ?>