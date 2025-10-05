<?php
/*
Template Name: 新着情報
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

      <div class="p-news-category">
        <ul class="p-news-category__list">
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link p-news-category__link--all">全て</a>
          </li>
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link is-current">カテゴリ</a>
          </li>
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link">カテゴリ</a>
          </li>
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link">カテゴリ</a>
          </li>
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link">カテゴリ</a>
          </li>
          <li class="p-news-category__item">
            <a href="" class="p-news-category__link">カテゴリ</a>
          </li>
        </ul>
      </div>

      <section class="p-news-archive">
        <div class="c-inner">
          <ul class="p-news-archive__list">
            <li class="p-news-archive__item">
              <a href="" class="p-news-archive__link">
                <span class="p-news-archive__link-head">
                  <time datetime="2025.00.00" class="p-news-archive__time">2025.00.00</time>
                  <span class="p-news-archive__tag">カテゴリ</span>
                </span>
                <h3 class="p-news-archive__item-ttl">記事のタイトルが入ります。記事のタイトルが入ります。</h3>
              </a>
            </li>
          </ul>
          <div class="p-news-archive__pagination">
            <span class="prev page-numbers disabled">前へ</span>
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="">2</a>
            <a class="page-numbers" href="">3</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="">8</a>
            <a class="next page-numbers" href="">次へ</a>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
    
  </main>

  <?php get_footer(); ?>