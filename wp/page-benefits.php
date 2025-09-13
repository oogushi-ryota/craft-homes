<?php
/*
Template Name: 福利厚生・待遇
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
            <span class="c-breadcrumb__link">福利厚生・待遇</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-benefits-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">BENEFIT</span>
              <h1 class="c-under-fv__ja">
                <span class="p-benefits-fv__txt-obj">福利厚生・待遇</span>
              </h1>
            </hgroup>
            <h2 class="p-benefits-fv__ttl">
              <span class="c-color-txt">「ここでずっと働きたい」</span><br>
              そう思える職場づくりを目指しています。
            </h2>
            <p class="p-benefits-fv__txt c-under-fv__txt">
              にこまるえんでは、職員が安心して働き続けられることが、子どもたちの笑顔や健やかな成長につながると考えています。<br>
              産休・育休、時短勤務、充実した有給制度など、それぞれのライフステージに合わせた制度を整備。<br>
              また、スタッフ同士が支え合い、困ったときに頼れるあたたかな風土も魅力のひとつです。<br>
              保育のやりがいを感じながら、心にゆとりを持って働ける環境をにこまるえんは大切にしています。
            </p>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/fv/fv_img.jpg" width="970" height="600" alt="福利厚生・待遇">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-benefits-details">
      <div class="c-inner">
        <div class="p-benefits-details__ttl-wrap">
          <h2 class="p-benefits-details__ttl c-sec-ttl">福利厚生</h2>
        </div>
        <ul class="p-benefits-details__list">
          <li class="p-benefits-details__item p-benefits-details__item--01">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img01.svg" width="136" height="136" alt="各種社会保険完備">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">各種社会保険完備</h3>
              <p class="p-benefits-details__txt">雇用保険・健康保険・厚生年金・労災保険など、法定の社会保険をしっかり完備しています。安心して長く働ける環境です。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--02">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img02.svg" width="136" height="136" alt="交通費規定支給">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">実費支給（上限なし）</h3>
              <p class="p-benefits-details__txt">公共交通機関を利用される方には、交通費を規定に基づいて支給。通勤にかかる負担を軽減します。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--03">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img03.svg" width="136" height="136" alt="昇給あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">昇給あり</h3>
              <p class="p-benefits-details__txt">年1回、評価に応じた昇給の機会があります。日々のがんばりがしっかりと給与に反映される仕組みです。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--04">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img04.svg" width="136" height="136" alt="有給休暇あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">有給休暇あり</h3>
              <p class="p-benefits-details__txt">有休の取得を推奨しています。体調不良やプライベートの予定など、必要なときにしっかり休める環境です。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--05">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img05.svg" width="136" height="136" alt="扶養内勤務もOK">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">扶養内勤務もOK</h3>
              <p class="p-benefits-details__txt">ライフスタイルに合わせて、扶養内でのパート勤務も可能です。子育てや家庭との両立を応援します。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--06">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img06.svg" width="136" height="136" alt="賞与年2回">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">賞与年2回</h3>
              <p class="p-benefits-details__txt">年2回の賞与支給あり（※支給条件あり）。日々の努力や保育への貢献がしっかり評価されます。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--07">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img07.svg" width="136" height="136" alt="住宅・燃料手当">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">住宅・燃料手当</h3>
              <p class="p-benefits-details__txt">住宅手当や冬季の燃料手当など、地域や生活に合わせた手当も支給。暮らしを支える制度が整っています。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--08">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img08.svg" width="136" height="136" alt="退職金制度あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">退職金制度あり</h3>
              <p class="p-benefits-details__txt">長く働いた方には退職金制度をご用意。将来も安心してキャリアを築いていただけます。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--09">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img09.svg" width="136" height="136" alt="朝夕手当あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">朝夕手当あり</h3>
              <p class="p-benefits-details__txt">早番・遅番の時間帯に勤務された方には、早朝時間帯は正職員1日500円、パート職員は1日800円、遅番の時間帯17：15以降勤務するパート職員は400円を支給しております。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-benefits-job">
      <div class="p-benefits-job__inner">
        <h2 class="p-benefits-job__ttl c-sec-ttl">募集要項</h2>
        <ul class="c-tabbtn-list js-tabbtn-list">
          <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list1" data-term-id="1">正職員保育士</li>
          <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list2" data-term-id="2">パート保育士</li>
          <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list3" data-term-id="3">調理員</li>
        </ul>
        <table class="p-benefits-job__table js-tab-item" id="tab1">
          <tbody class="p-benefits-job__tbody">
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">募集職種</th>
              <td class="p-benefits-job__td">正職員保育士</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">応募資格</th>
              <td class="p-benefits-job__td">保育士資格をお持ちの方</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">雇用形態</th>
              <td class="p-benefits-job__td">正職員</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務地</th>
              <td class="p-benefits-job__td">にこまるえん円山</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務時間</th>
              <td class="p-benefits-job__td">
                7：00～19：00の間のシフト制<br>
                週40時間 完全週休2日制<br>
                固定勤務可（例）8：30～17：30<br>
                固定勤務の場合、処遇改善29,000円スタート
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">給与</th>
              <td class="p-benefits-job__td">
                月給：20,1000円スタート<br>
                処遇改善：39,000円/月<br>
                住宅手当：5,000円/月<br>
                早朝手当：500円/1日手当（7～8：00）<br>
                賞与：夏7/10 冬12/10 年3.3ヶ月<br>
                燃料手当：世帯主6万円 その他3万円 12/10支給
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">待遇</th>
              <td class="p-benefits-job__td">
                [待遇]各社保完備（勤務による）<br>
                交通費実費、車通勤可（円山不可）昇給、有給、専用のノートバソコン支給<br>
                スマートウオッチ支給<br>
                [応募]電話またはWebで応募ください
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">入職祝金</th>
              <td class="p-benefits-job__td">20万円支払い内訳（勤務3日目5万円 その後25日払い5万円×3回）</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">引越し費用ご負担</th>
              <td class="p-benefits-job__td">
                沖縄県、九州、四国から札幌市に引越し：一律50万円その他の道外から札幌市に引越し：一律30万円道内から札幌市に引越し：一律15万円（札幌市内の引越しは適用外）<br>
                引越し業者に支払い日にお支払いします。<br>
                ※ご家族の転園の場合で札幌市に引越しをされた場合もお支払いいたします。
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">募集理由</th>
              <td class="p-benefits-job__td">増員の募集です。</td>
            </tr>
          </tbody>
        </table>
        <table class="p-benefits-job__table js-tab-item" id="tab2">
          <tbody class="p-benefits-job__tbody">
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">募集職種</th>
              <td class="p-benefits-job__td">パート保育士</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">応募資格</th>
              <td class="p-benefits-job__td">保育士資格をお持ちの方</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">雇用形態</th>
              <td class="p-benefits-job__td">パート</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務地</th>
              <td class="p-benefits-job__td">①にこまるえん円山 ②にこまるえん白石 ③にこまるえん東白石</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務時間</th>
              <td class="p-benefits-job__td">
                ①にこまるえん円山<br>
                a）7:00~9:00<br>
                b）9:00~17:00<br>
                c）11:00~19:00<br><br>
                ②にこまるえん白石<br>
                a）7:00~9:00<br>
                b）14:00~18:00<br>
                c）15:00~19:00<br><br>
                ③にこまるえん東白石<br>
                a）8:30~13:30<br>
                b）9:00~14:00<br><br>
                固定シフト 週3～6日勤務<br>
                その他 お気軽にお問い合わせください。<br>
                募集している時間はあくまで目安としております。<br>
                ご希望の時間帯と１～２時間のズレがある場合は調整致しますのでお気軽にご相談下さい。<br>
                慣らし保育後でも大歓迎勤<br>
                務開始日は柔軟に対応致します。
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">給与</th>
              <td class="p-benefits-job__td">
                時給1,200円スタート<br>
                7:00~8:00 800円/1日手当<br>
                17:00~19:00時給1,300円<br>
                処遇改善4,500円/月
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">待遇</th>
              <td class="p-benefits-job__td">
                [待遇]各社保完備（勤務による）<br>
                交通費実費、車通勤可（円山不可）昇給、有給、正職員登用有<br>
                スマートウオッチ支給<br>
                （H30年から8名の方がパートから正職員になっております）<br>
                [応募]電話またはWebで応募ください
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">入職祝金</th>
              <td class="p-benefits-job__td">20万円支払い内訳（勤務3日目5万円 その後25日払い5万円×3回）</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">引越し費用ご負担</th>
              <td class="p-benefits-job__td">
                沖縄県、九州、四国から札幌市に引越し：一律50万円その他の道外から札幌市に引越し：一律30万円道内から札幌市に引越し：一律15万円（札幌市内の引越しは適用外）<br>
                引越し業者に支払い日にお支払いします。<br>
                ※ご家族の転園の場合で札幌市に引越しをされた場合もお支払いいたします。
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">募集理由</th>
              <td class="p-benefits-job__td">各園増員の募集です。</td>
            </tr>
          </tbody>
        </table>
        <table class="p-benefits-job__table js-tab-item" id="tab3">
          <tbody class="p-benefits-job__tbody">
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">募集職種</th>
              <td class="p-benefits-job__td">調理員</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">応募資格</th>
              <td class="p-benefits-job__td">
                調理師、栄養士免許あれば尚可<br>
                資格は必要ありません。
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">雇用形態</th>
              <td class="p-benefits-job__td">パート</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務地</th>
              <td class="p-benefits-job__td">①にこまるえん白石 ②にこまるえん南郷</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務時間</th>
              <td class="p-benefits-job__td">
                ①白石<br>
                a）8:00~13:30<br>
                b）9:30~17:30<br>
                c）13:00~17:00<br><br>
                ②南郷<br>
                c）13:00~17:00<br>
                b）15:00~17:00<br>
                上記固定勤務可<br><br>
                募集している時間はあくまで目安としております。<br>
                ご希望の時間帯と１～２時間のズレがある場合は調整致しますのでお気軽にご相談下さい。<br>
                慣らし保育後でも大歓迎勤<br>
                務開始日は柔軟に対応致します。
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">給与</th>
              <td class="p-benefits-job__td">
                時給1,090円スタート<br>
                処遇改善4,500円/月
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">待遇</th>
              <td class="p-benefits-job__td">
                [待遇]各社保完備（勤務による）<br>
                交通費実費、車通勤可（円山不可）昇給、有給、正職員登用有<br>
                スマートウオッチ支給<br>
                （H30年から8名の方がパートから正職員になっております）<br>
                [応募]電話またはWebで応募ください
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">入職祝金</th>
              <td class="p-benefits-job__td">10万円支払い内訳（勤務3日目5万円 その後25日払い5万円）</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>