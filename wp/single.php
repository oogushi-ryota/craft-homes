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
              <span class="p-news-details__category">
                <?php
                $categories = get_the_category();
                if ( $categories ) {
                  foreach ( $categories as $category ) {
                    echo '<span class="p-news-details__category-item category-' . esc_attr( $category->slug ) . '">';
                    echo esc_html( $category->name );
                    echo '</span>';
                  }
                }
                ?>
              </span>
              <time datetime="<?php echo get_the_date( 'c' ); ?>" class="p-news-details__time"><?php echo get_post_time('Y.m.d'); ?></time>
            </span>
            <h2 class="p-news-details__ttl"><?php the_title(); ?></h2>
          </div>
          <div class="p-news-details__thumb-area">
            <?php if (has_post_thumbnail()) : ?>
            <picture class="p-news-details__thumb">
              <source srcset="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" type="image/webp">
              <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="サムネイル">
            </picture>
            <?php endif; ?>
          </div>
          <div class="p-news-details__cont">
            <?php the_content(); ?>
          </div>
          <div class="p-news-details__btn-wrap">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-btn">
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