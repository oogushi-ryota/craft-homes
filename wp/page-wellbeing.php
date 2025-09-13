<?php
/*
Template Name: 安全・健康への取り組み
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
            <span class="c-breadcrumb__link">食育・アレルギー対応</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-wellbeing-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">INITIATIVE</span>
              <h1 class="c-under-fv__ja">
                <span class="p-wellbeing-fv__txt-obj u-fs-28">食育・アレルギー対応</span>
              </h1>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-wellbeing-cont">
      <div class="c-inner">
        <h2 class="p-about-facility__ttl c-sec-ttl">にこまるえんの食育・アレルギー対応</h2>
        <div class="p-wellbeing-cont__wrap">
          <div class="p-wellbeing-cont__blk">
            <h3 class="p-wellbeing-cont__blk-ttl p-wellbeing-cont__blk-ttl--security">安全管理（園内・登園・防犯など）</h3>
            <p class="p-wellbeing-cont__txt">にこまるえんでは、不審者対策や施設の安全性にも配慮し、子どもたちが毎日を安心して過ごせる環境づくりに努めています。</p>
            <ul class="p-wellbeing-cont__list">
              <li class="p-wellbeing-cont__item">オートロックやインターホンによる入退室管理</li>
              <li class="p-wellbeing-cont__item">散歩時は不審者等に遭遇した場合のために、ココセコム（緊急ボタン）を導入。セコムの警備員が迅速に駆けつけて対応します。</li>
              <li class="p-wellbeing-cont__item">園内設備の定期点検・事故防止マニュアルの整備</li>
              <li class="p-wellbeing-cont__item">
                業界初のスマートウォッチ型の保育業務支援システム「にこまこ」を開発・導入致しました。<br>
                その日の園児の登園状況、天気や緊急連絡、子どものアレルギー情報などを職員同士で瞬間に共有しています。
              </li>
            </ul>
          </div>
          <div class="p-wellbeing-cont__blk">
            <h3 class="p-wellbeing-cont__blk-ttl p-wellbeing-cont__blk-ttl--heart">健康管理（体調・衛生・感染症対応）</h3>
            <p class="p-wellbeing-cont__txt">子どもたちの健康状態を日々見守りながら、体調の変化に早く気づけるよう細やかな観察を行っています。</p>
            <ul class="p-wellbeing-cont__list">
              <li class="p-wellbeing-cont__item">登園時の視診・体温チェックの実施</li>
              <li class="p-wellbeing-cont__item">発熱や怪我、感染症時の対応マニュアルの徹底</li>
              <li class="p-wellbeing-cont__item">嘱託医との連携・定期的な健康診断の実施</li>
            </ul>
          </div>
          <div class="p-wellbeing-cont__blk">
            <h3 class="p-wellbeing-cont__blk-ttl p-wellbeing-cont__blk-ttl--allergie">食育・アレルギー対応</h3>
            <p class="p-wellbeing-cont__txt">栄養バランスの整った食事や、子どもたちが食べる楽しさを学べる食育にも力を入れています。</p>
            <ul class="p-wellbeing-cont__list">
              <li class="p-wellbeing-cont__item">札幌市の統一献立を使用し、旬の食材や行事食も取り入れています</li>
              <li class="p-wellbeing-cont__item">アレルギーのあるお子さまには、個別対応を徹底しています</li>
              <li class="p-wellbeing-cont__item">食育活動（クッキング、野菜栽培など）を通して“食べること”の大切さを伝えています</li>
            </ul>
          </div>
          <div class="p-wellbeing-cont__blk">
            <h3 class="p-wellbeing-cont__blk-ttl p-wellbeing-cont__blk-ttl--disaster">防災・避難訓練</h3>
            <p class="p-wellbeing-cont__txt">もしものときに備えて、子どもたちも職員も落ち着いて行動できるよう、定期的な訓練を行っています。</p>
            <ul class="p-wellbeing-cont__list">
              <li class="p-wellbeing-cont__item">火災・地震・水害など、さまざまな災害を想定した月1回の避難訓練</li>
              <li class="p-wellbeing-cont__item">緊急時のマニュアルを整備し、全職員に周知徹底</li>
              <li class="p-wellbeing-cont__item">地域や消防署とも連携し、実践的な訓練の機会も設けています</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>