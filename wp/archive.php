  <?php get_header(); ?>

  <main class="l-main">
    <?php get_template_part('parts/fixed-btn'); ?>
    
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
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="p-news-category__link p-news-category__link--all <?php if ( is_home() || is_post_type_archive('post') || is_page('news') && !is_category() ) echo 'is-current'; ?>">全て</a>
          </li>
          <?php
          // 未分類の ID を取得
          $uncat_id = get_cat_ID('未分類');

          $categories = get_categories( array(
            'orderby'    => 'term_order',
            'order'      => 'ASC',
            'hide_empty' => 0, // ★ 空のカテゴリも表示
            'exclude'    => array( $uncat_id ), // ★ 未分類を除外
          ) );

          foreach ( $categories as $category ) :
            $is_current = ( is_category( $category->term_id ) ) ? ' is-current' : '';
          ?>

          <li class="p-news-category__item category-<?php echo esc_attr( $category->slug ); ?>">
            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="p-news-category__link<?php echo $is_current; ?>">
              <?php echo esc_html( $category->name ); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <section class="p-news-archive">
        <div class="c-inner">

          <?php if ( have_posts() ) : ?>
          <ul class="p-news-archive__list">
            <?php while ( have_posts() ) : the_post(); ?>
            <li class="p-news-archive__item">
              <a href="<?php the_permalink(); ?>" class="p-news-archive__link">
                <span class="p-news-archive__link-head">
                  <time datetime="<?php echo get_the_date('c'); ?>" class="p-news-archive__time"><?php echo get_post_time('Y.m.d'); ?></time>
                  <?php
                  $categories = get_the_category();
                  if ( $categories ) :
                    foreach ( $categories as $category ) :
                  ?>
                    <span class="p-news-archive__tag">
                      <?php echo esc_html( $category->name ); ?>
                    </span>
                  <?php
                    endforeach;
                  endif;
                  ?>
                </span>
                <h3 class="p-news-archive__item-ttl"><?php the_title(); ?></h3>
              </a>
            </li>
            <?php endwhile; ?>
          </ul> 
          <?php else : ?>
            <p>記事が見つかりませんでした。</p>
          <?php endif; ?>

          <?php get_template_part('parts/pagination'); ?>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
    
    <div class="c-breadcrumb">
      <div class="c-inner">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-breadcrumb__link">トップ</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">新着情報</span>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>