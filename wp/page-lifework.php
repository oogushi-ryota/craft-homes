<?php
/*
Template Name: ライフワークバランス
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
            <span class="c-breadcrumb__link">ライフワークバランス</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-lifework-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="p-lifework-fv__txtarea c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">TEACHER’S ONE flow</span>
              <h1 class="c-under-fv__ja">
                <span class="p-lifework-fv__txt-obj">ライフワークバランス</span>
              </h1>
            </hgroup>
            <p class="p-lifework-fv__txt c-under-fv__txt">
              にこまるえんで働く保育士の1日をご紹介します。<br>
              にこまるえんの先生たちは、毎日子どもたちの笑顔に囲まれながら、元気いっぱいに過ごしています。<br>
              登園の受け入れから遊びや食事、午睡、降園対応まで、子どもたち一人ひとりに寄り添いながら、チームで協力して保育を行っています。
            </p>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/fv/fv_img.jpg" width="970" height="600" alt="ライフワークバランス">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-lifework-flow">
      <div class="c-inner">
        <div class="p-lifework-flow__ttl-wrap">
          <h2 class="p-lifework-flow__ttl c-sec-ttl">1日のお仕事の流れ</h2>
        </div>
        <div class="p-lifework-flow__cont">
          <ul class="p-lifework-flow__list">
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">8:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">順次登園・自由あそび</h3>
                <p class="p-lifework-flow__txt">
                  出勤 「おはようございます！」と笑顔で挨拶。<br>
                  職員用の連絡ノート、保育日誌等を確認する。<br>
                  園児受け入れ。<br>
                  職員朝礼 クラスの活動、アレルギー情報、子どもたちの体調や気になる様子を共有する。<br>
                  登園人数確認（にこまこスマートウオッチ使用）
                </p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">9:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">検温・排泄・朝おやつ（牛乳）</h3>
                <p class="p-lifework-flow__txt">
                  個々の発達に合わせた援助。<br>
                  子どもたちがワクワクする気持ちで今日一日をスタートできるような関わりをもつ。
                </p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">10:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">設定保育</h3>
                <p class="p-lifework-flow__txt">散歩、公園あそび、製作等を行う。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">11:00 ~ 11:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">排泄・給食</h3>
                <p class="p-lifework-flow__txt">基本的に食育の観点から一緒に給食を食べる。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">12:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">排泄・着替え（パジャマ）</h3>
                <p class="p-lifework-flow__txt">一人ひとりの発達に合わせた援助をする。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">12:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">検温・午睡</h3>
                <p class="p-lifework-flow__txt">
                  午睡前の絵本読み聞かせ、検温と口の中に何も入っていないかチェックしてから入眠。<br>
                  午睡チェック、連絡ノートや週案記入など。<br>
                  交代で休憩。
                </p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">15:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">起床・排泄・着替え・検温</h3>
                <p class="p-lifework-flow__txt">一人ひとりの発達に合わせた援助をする。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">15:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">おやつ</h3>
                <p class="p-lifework-flow__txt">基本的におやつも一緒に食べる。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">16:00 ~ 17:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">自由あそび・順次降園</h3>
                <p class="p-lifework-flow__txt">
                  子どもたちと一緒に遊ぶ。<br>
                  お迎え時保護者対応。<br>
                  退勤
                </p>
              </div>
            </li>
          </ul>
          <div class="p-lifework-flow__imgarea">
            <picture class="p-lifework-flow__img p-lifework-flow__img--01">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img01.jpg" width="264" height="176" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--02">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img02.jpg" width="340" height="227" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--03">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img03.jpg" width="250" height="261" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--04">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img04.jpg" width="238" height="179" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--05">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img05.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img05.jpg" width="207" height="160" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--06">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img06.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img06.jpg" width="340" height="227" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>