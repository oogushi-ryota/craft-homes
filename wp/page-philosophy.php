<?php
/*
Template Name: 理念・保育方針
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
            <span class="c-breadcrumb__link">理念・保育方針</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-philosophy-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">PHILOSOPHY・NURSERY POLICY</span>
              <h1 class="c-under-fv__ja">
                <span class="p-philosophy-fv__txt-obj">理念・保育方針</span>
              </h1>
            </hgroup>
            <h2 class="p-philosophy-fv__ttl c-sec-ttl">にこまるえんの理念と保育の考え方</h2>
            <p class="c-under-fv__txt">
              にこまるえんでは、木のぬくもりあふれる園舎の中で、子どもたちが安心して毎日を過ごせる環境づくりを大切にしています。<br>
              「自分そのものを認めてもらえる」安心感の中で、子どもたちが遊びや関わりを通して、自ら考え、表現し、協力し合う経験を積み重ねていけるような保育を目指しています。<br>
              保育士として、子どもの心と体の健康を支え、子育て家庭に寄り添い、そして地域に愛される園であり続ける。<br>
              そんな思いを胸に、日々の保育に取り組んでいます。
            </p>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/philosophy/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/philosophy/fv/fv_img.jpg" width="970" height="600" alt="理念・保育方針の画像">
          </picture>
        </div>
      </div>
    </section>

    <div class="p-philosophy-section">
      <div class="c-inner">
        <section class="p-philosophy-policy">
          <div class="p-philosophy-policy__inner">
            <div class="p-philosophy-policy__ttl-wrap">
              <h2 class="p-philosophy-policy__ttl c-sec-ttl">にこまるえんの保育方針</h2>
            </div>
            <ul class="p-philosophy-policy__list">
              <li class="p-philosophy-policy__item">小規模の保育園の特性を生かし、保育士が一人ひとりの子どもや保護者に丁寧に関わり安心して過ごせる保育を行う</li>
              <li class="p-philosophy-policy__item">絵本の読み聞かせやふれあい遊び、わらべうたを通して、豊かな心を育てる</li>
              <li class="p-philosophy-policy__item">一人ひとりに寄り添い、自分に自信が持てるような自己肯定感を育む保育を行う</li>
            </ul>
          </div>
        </section>

        <section class="p-philosophy-goal">
          <div class="p-philosophy-goal__ttl-wrap">
            <h2 class="p-philosophy-goal__ttl c-sec-ttl">にこまるえんの保育目標</h2>
          </div>
          <div class="p-philosophy-goal__cont">
            <picture class="p-philosophy-goal__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/philosophy/goal/goal_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/philosophy/goal/goal_img.jpg" width="970" height="600" alt="にこまるえんの保育目標の画像">
            </picture>
            <div class="p-philosophy-goal__txtarea">
              <h3 class="p-philosophy-goal__cont-ttl">
                子どもたちの<span class="c-color-txt">「らしさ」</span>が育つ場所。
              </h3>
              <p class="p-philosophy-goal__txt">
                子どもたちが、自分らしくのびのびと育っていくこと。<br>
                にこまるえんでは、そんな願いを込めて、「よく食べ、よく寝て、よく遊ぶ」毎日の中で、表情豊かに自分の気持ちを伝え、人とのつながりを大切にできる子どもたちを育んでいます。
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>