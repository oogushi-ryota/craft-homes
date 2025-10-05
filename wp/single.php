<?php
/*
Template Name: 新着情報詳細
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-news">
      <section class="c-under-fv c-under-fv--news">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">News</span>
            <h1 class="c-under-ttl__ja">新着情報</h1>
          </div>
        </div>
      </section>

      <section class="p-news-details">
        <div class="c-inner">
          <div class="p-news-details__ttl-area">
            <span class="p-news-details__ttl-head">
              <span class="p-news-details__category">カテゴリ</span>
              <time datetime="" class="p-news-details__time">2025.07.06</time>
            </span>
            <h2 class="p-news-details__ttl">タイトルが入ります。タイトルが入ります。</h2>
          </div>
          <div class="p-news-details__thumb-area">
            <picture class="p-news-details__thumb">
              <!-- <source srcset="../assets/img/career/training/training_img01.webp" type="image/webp"> -->
              <img src="https://placehold.jp/960x670.png" width="960" height="670" alt="サムネイル">
            </picture>
          </div>
          <div class="p-news-details__cont">
            <h1>h1の見出し</h1>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <p>テキストが入ります。<a href="">リンク</a></p>
            <figure>
              <img src="https://placehold.jp/640x480.png" alt="">
            </figure>
            <h2>h2の見出し</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <h3>h3の見出し</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <h4>h4の見出し</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <img src="https://placehold.jp/400x400.png" alt="">
            <ol>
              <li>番号付きリスト</li>
              <li>番号付きリスト</li>
              <li>番号付きリスト</li>
            </ol>
            <ul>
              <li>番号なしリスト</li>
              <li>番号なしリスト</li>
              <li>番号なしリスト</li>
            </ul>
          </div>
          <div class="p-news-details__btn-wrap">
            <a href="" class="c-btn">
              新着情報一覧を見る
              <svg class="c-btn__svg" width="24" height="17" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.3142 11.7615C11.6489 12.0796 12.1915 12.0794 12.5263 11.7615L17.9814 6.57607C18.3161 6.25788 18.3161 5.74212 17.9814 5.42393L12.5263 0.238521C12.1915 -0.079425 11.6489 -0.0795861 11.3142 0.238521C10.9796 0.556628 10.9797 1.07245 11.3142 1.39066L15.3061 5.18523L1.08957 5.18523C0.616179 5.18523 0.232422 5.55002 0.232422 6C0.232422 6.44999 0.616179 6.81477 1.08957 6.81477L15.3061 6.81477L11.3142 10.6093C10.9797 10.9275 10.9796 11.4434 11.3142 11.7615Z" fill="#313131"/>
              </svg>
            </a>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
    
  </main>

  <?php get_footer(); ?>