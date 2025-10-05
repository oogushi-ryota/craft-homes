<?php
/*
Template Name: お問い合わせ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-contact">
      <section class="c-under-fv c-under-fv--contact">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Contact</span>
            <h1 class="c-under-ttl__ja">お問い合わせ</h1>
          </div>
        </div>
      </section>

      <section class="p-contact-form">
        <div class="p-contact-form__inner">
          <p class="p-contact-form__txt">
            住まいに関するご相談やお見積り依頼など、どうぞお気軽にお問い合わせください。<br>
            小さな不具合から大規模な工事まで、専門スタッフが丁寧に対応いたします。
          </p>
          <div class="p-contact-form__bg">
            <h2 class="p-contact-form__ttl">お問い合わせフォーム</h2>
            <div class="p-contact-form__form">
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="name">
                  <span class="p-contact-form__required">必須</span>
                  お名前
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="例）日本 太郎" size="40" class="p-contact-form__default" id="name" type="text" name="name" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="furigana">
                  <span class="p-contact-form__required">必須</span>
                  フリガナ
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="例）ニホンタロウ" size="40" class="p-contact-form__default" id="furigana" type="text" name="furigana" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="email">
                  <span class="p-contact-form__required">必須</span>
                  メールアドレス
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="xxxx@gmail.com" size="40" class="p-contact-form__default" id="email" type="text" name="email" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="tel">
                  <span class="p-contact-form__required">必須</span>
                  電話番号
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="000-0000-0000" size="40" class="p-contact-form__default" id="tel" type="text" name="tel" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="postcode">
                  <span class="p-contact-form__required">必須</span>
                  郵便番号
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="〒 000-0000" size="40" class="p-contact-form__default" id="postcode" type="text" name="postcode" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="address">
                  <span class="p-contact-form__required">必須</span>
                  ご住所
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="例）東京都新宿区西新宿2-8-1" size="40" class="p-contact-form__default" id="address" type="text" name="address" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="address">
                  <span class="p-contact-form__required">必須</span>
                  ご住所
                </label>
                <div class="p-contact-form__inputarea">
                  <input placeholder="例）東京都新宿区西新宿2-8-1" size="40" class="p-contact-form__default" id="address" type="text" name="address" required aria-required="true">
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <span class="p-contact-form__label">
                  <span class="p-contact-form__required">必須</span>
                  お問い合わせ項目
                </span>
                <div class="p-contact-form__inputarea p-contact-form__inputarea--checkbox">
                  <label class="p-contact-form__checkbox">
                    <input type="checkbox" name="inquiry[]" value="外装リフォーム">
                    <span class="p-contact-form__chklabel">外装リフォーム</span>
                  </label>
                  <label class="p-contact-form__checkbox">
                    <input type="checkbox" name="inquiry[]" value="内装リフォーム">
                    <span class="p-contact-form__chklabel">内装リフォーム</span>
                  </label>
                </div>
              </div>
              <div class="p-contact-form__formblk">
                <label class="p-contact-form__label" for="details">
                  <span class="p-contact-form__required">必須</span>
                  お問い合わせ内容
                </label>
                <div class="p-contact-form__inputarea">
                  <textarea placeholder="お問い合わせ内容をご記載ください。" name="details" class="p-contact-form__default" id="details" cols="100" rows="10"></textarea>
                </div>
              </div>
            </div>
            <div class="p-contact-form__btn-wrap">
              <button type="submit" class="p-contact-form__btn">送信内容を確認する</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>