<?php
/*
Template Name: 園の1日・年間行事
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
            <span class="c-breadcrumb__link">園の1日・年間行事</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-schedule-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">OVERVIEW</span>
              <h1 class="c-under-fv__ja">
                <span class="p-schedule-fv__txt-obj">園の1日・年間行事</span>
              </h1>
            </hgroup>
            <nav class="c-sec-anchor">
              <ul class="c-sec-anchor__list">
                <li class="c-sec-anchor__item">
                  <a href="#day" class="c-sec-anchor__link">園の1日</a>
                </li>
                <li class="c-sec-anchor__item">
                  <a href="#year" class="c-sec-anchor__link">年間行事</a>
                </li>
              </ul>
            </nav>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/fv/fv_img.jpg" width="970" height="600" alt="園の1日・年間行事">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-schedule-day" id="day">
      <div class="c-inner">
        <div class="p-schedule-day__ttl-wrap">
          <h2 class="p-schedule-day__ttl c-sec-ttl">園の1日</h2>
        </div>
        <div class="p-schedule-day__cont">
          <ul class="p-schedule-day__list">
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">7:00</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">順次登園、自由遊び</h3>
                <p class="p-schedule-day__txt">子どもたちは登園後、それぞれ好きな遊びを楽しみながら一日をスタートします。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">9:30</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">朝の活動</h3>
                <p class="p-schedule-day__txt">0〜2歳児は牛乳やお茶でおやつをとり、必要に応じて0歳児は午前寝をします。3〜5歳児は排泄・手洗いを済ませたあと、公園遊びや町内散歩、製作、わらべうたなどの活動に取り組みます。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">9:45 ~ 11:30</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">午前の活動と昼食</h3>
                <p class="p-schedule-day__txt">0〜2歳児は排泄・手洗いのあと、設定保育に参加し、0歳児は早めに昼食をとります。3〜5歳児は11:30に昼食をとり、その後は絵本や玩具でゆったり過ごします。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">12:30</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">午睡の時間</h3>
                <p class="p-schedule-day__txt">12:30には全園児が排泄・手洗いを済ませ、絵本の読み聞かせのあと午睡に入ります。年齢に応じて休息の長さを調整しながら、心身をしっかりと休めます。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">15:00</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">おやつの時間</h3>
                <p class="p-schedule-day__txt">15:00に起床し、排泄と手洗いを済ませたあと、おやつをいただきます。心身をリフレッシュし、午後の活動に向けてエネルギーを補給します。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">16:00</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">自由遊び・降園</h3>
                <p class="p-schedule-day__txt">午後は玩具遊びやふれあい、ごっこ遊びなどを楽しみながら過ごし、保護者のお迎えに合わせて順次降園します。</p>
              </div>
            </li>
            <li class="p-schedule-day__item">
              <span class="p-schedule-day__time">18:00 ~ 19:00</span>
              <div class="p-schedule-day__details">
                <h3 class="p-schedule-day__cont-ttl">延長保育</h3>
                <p class="p-schedule-day__txt">18:00以降は延長保育を行い、家庭の都合に合わせて安心してお子さまをお預かりします。</p>
              </div>
            </li>
          </ul>
          <div class="p-schedule-day__imgarea">
            <picture class="p-schedule-day__img p-schedule-day__img--01">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img01.jpg" width="264" height="176" alt="">
            </picture>
            <picture class="p-schedule-day__img p-schedule-day__img--02">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img02.jpg" width="340" height="227" alt="">
            </picture>
            <picture class="p-schedule-day__img p-schedule-day__img--03">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img03.jpg" width="250" height="261" alt="">
            </picture>
            <picture class="p-schedule-day__img p-schedule-day__img--04">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/day/day_img04.jpg" width="238" height="179" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="p-schedule-year" id="year">
      <div class="c-inner">
        <div class="p-schedule-day__ttl-wrap">
          <h2 class="p-schedule-year__ttl c-sec-ttl">年間行事</h2>
        </div>
        <div class="p-schedule-year__season">
          <div class="p-schedule-year__blk p-schedule-year__blk--spring">
            <ul class="p-schedule-year__list">
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--spring">
                    <span class="p-schedule-year__month">4月</span>
                    入園式・進級式
                  </h3>
                  <p class="p-schedule-year__txt">
                    新しいお友だちや先生との出会いの季節。<br>
                    入園式では、新入園児を歓迎する温かなセレモニーを行います。<br>
                    在園児は一つ上のクラスへと進級し、新しい環境に胸を躍らせながら新年度がスタートします。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img01.jpg" width="320" height="213" alt="4月入園式・進級式">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--spring">
                    <span class="p-schedule-year__month">5月</span>
                    春の遠足
                  </h3>
                  <p class="p-schedule-year__txt">
                    春の心地よい季節に、園外へお出かけする遠足を実施します。<br>
                    自然にふれたり、公共マナーを学んだりと、園外ならではの体験がたくさん。子どもたちはワクワクしながら、仲間と一緒に楽しい思い出をつくります。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img02.jpg" width="320" height="213" alt="5月春の遠足">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--spring">
                    <span class="p-schedule-year__month">6月</span>
                    保育参観・個人面談
                  </h3>
                  <p class="p-schedule-year__txt">
                    保護者の方に日頃の保育の様子を見ていただく機会です。<br>
                    クラスでの活動や子どもたちの成長を共有し、園とご家庭との連携を深めます。その後の個人面談では、一人ひとりの発達や園生活について丁寧にお話しします。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/spring_img03.jpg" width="320" height="213" alt="6月保育参観・個人面談">
                </picture>
              </li>
            </ul>
          </div>
          <div class="p-schedule-year__blk p-schedule-year__blk--summer">
            <ul class="p-schedule-year__list">
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--summer">
                    <span class="p-schedule-year__month">7月</span>
                    七夕会･水遊びスタート
                  </h3>
                  <p class="p-schedule-year__txt">
                    短冊に願いごとを書いて、七夕の飾りつけを楽しみます。<br>
                    また、気温の上昇に合わせて水遊びもスタート！<br>
                    暑さに負けず、夏ならではのあそびを思いきり楽しめる時期です。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img01.jpg" width="320" height="213" alt="7月七夕会･水遊びスタート">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--summer">
                    <span class="p-schedule-year__month">8月</span>
                    夏祭り
                  </h3>
                  <p class="p-schedule-year__txt">園内で行う楽しい夏のイベントです。子どもたちは浴衣や甚平を着て、盆踊りやゲームコーナーを楽しみます。保護者の方にもご参加いただき、地域とのつながりを感じられるひとときです。</p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img02.jpg" width="320" height="213" alt="8月夏祭り">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--summer">
                    <span class="p-schedule-year__month">9月</span>
                    敬老の日イベント･避難訓練
                  </h3>
                  <p class="p-schedule-year__txt">
                    敬老の日イベントでは近隣の老人ホームで歌を披露しています。<br>
                    また、地震を想定した避難訓練では約束を守って落ち着いて避難する練習を行っています。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/summer_img03.jpg" width="320" height="213" alt="9月敬老の日イベント･避難訓練">
                </picture>
              </li>
            </ul>
          </div>
          <div class="p-schedule-year__blk p-schedule-year__blk--autumn">
            <ul class="p-schedule-year__list">
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--autumn">
                    <span class="p-schedule-year__month">10月</span>
                    運動会
                  </h3>
                  <p class="p-schedule-year__txt">
                    子どもたちが心も体もぐんと成長する姿が見られる一大イベント。<br>
                    かけっこやダンス、親子競技などを通じて、仲間と協力する楽しさや達成感を味わいます。保護者の方と一緒に応援し、園全体で盛り上がる行事です。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img01.jpg" width="320" height="213" alt="10月運動会">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--autumn">
                    <span class="p-schedule-year__month">11月</span>
                    秋の遠足・収穫体験
                  </h3>
                  <p class="p-schedule-year__txt">
                    紅葉の中での園外活動や、芋ほり・野菜の収穫など季節を感じる体験を行います。<br>
                    自然にふれながら、命の大切さや感謝の気持ちを育む良い機会となります。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img02.jpg" width="320" height="213" alt="11月秋の遠足・収穫体験">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--autumn">
                    <span class="p-schedule-year__month">12月</span>
                    発表会･クリスマス会
                  </h3>
                  <p class="p-schedule-year__txt">
                    日頃の練習の成果を披露する発表会を開催。<br>
                    歌や劇、ダンスなど、子どもたちの成長を保護者の方と一緒に喜び合える行事です。クリスマス会ではサンタさんが登場することもあり、子どもたちは大興奮です。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/autumn_img03.jpg" width="320" height="213" alt="12月発表会･クリスマス会">
                </picture>
              </li>
            </ul>
          </div>
          <div class="p-schedule-year__blk p-schedule-year__blk--winter">
            <ul class="p-schedule-year__list">
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--winter">
                    <span class="p-schedule-year__month">1月</span>
                    お正月あそび･書き初め
                  </h3>
                  <p class="p-schedule-year__txt">
                    年始には、かるたやこま回し、福笑いなどの日本の伝統的な遊びを楽しみます。<br>
                    年長さんは書き初めにも挑戦し、集中力や表現力を養います。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img01.jpg" width="320" height="213" alt="1月お正月あそび･書き初め">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--winter">
                    <span class="p-schedule-year__month">2月</span>
                    豆まき・生活発表会
                  </h3>
                  <p class="p-schedule-year__txt">
                    節分には「鬼は外、福は内！」と元気に豆まきをして、健康と無病息災を願います。<br>
                    また、日々の成長を発表する「生活発表会」では、子どもたちの自信に満ちた姿が見られます。
                  </p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img02.jpg" width="320" height="213" alt="2月豆まき・生活発表会">
                </picture>
              </li>
              <li class="p-schedule-year__item">
                <div class="p-schedule-year__txtarea">
                  <h3 class="p-schedule-year__list-ttl p-schedule-year__list-ttl--winter">
                    <span class="p-schedule-year__month">3月</span>
                    ひなまつり・お別れ会・卒園式
                  </h3>
                  <p class="p-schedule-year__txt">ひなまつりでは製作や歌を楽しみ、日本の伝統に親しみます。お別れ会では年長さんに歌やプレゼントを贈り、感謝の気持ちを伝えます。いよいよ卒園式。卒園証書を受け取り、新たな一歩を踏み出します。</p>
                </div>
                <picture class="p-schedule-year__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img03.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/schedule/year/winter_img03.jpg" width="320" height="213" alt="3月ひなまつり・お別れ会・卒園式">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>