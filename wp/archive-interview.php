<?php
/*
Template Name: 職員インタビュー
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
            <span class="c-breadcrumb__link">職員インタビュー</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-interview-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">INTERVIEW</span>
              <h1 class="c-under-fv__ja">
                <span class="p-interview-fv__txt-obj u-fs-28">職員インタビュー</span>
              </h1>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-interview-archive">
      <div class="c-inner">
        <?php
        $args = array(
          'post_type' => 'post-interview',
          'posts_per_page' => 9, // すべての投稿を表示する場合は-1に設定
          'orderby'        => 'date',   // 日付で並べ替え
          'order'          => 'DESC',   // 降順（新しいものが先頭）
          'paged' => get_query_var('paged'),
        );

        $interview_query = new WP_Query($args);
        ?>

        <?php if ($interview_query->have_posts()) : ?>

        <ul class="p-interview-archive__list">
        <?php while ($interview_query->have_posts()) : $interview_query->the_post(); ?>
          <li class="p-interview-archive__item">
            <a href="<?php the_permalink(); ?>" class="p-interview-archive__link">
              <div class="p-interview-archive__img-wrap">
                <picture class="p-interview-archive__img">
                <?php if (has_post_thumbnail()) :?>
                  <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="職員インタビューのサムネイル">
                <?php else : ?>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/thumbnail.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/thumbnail.jpg" alt="代替画像">
                <?php endif; ?>
                </picture>
                <span class="p-interview-archive__name" style="background-color: <?php the_field('backgroud-color'); ?>;"><?php the_field('year'); ?>年入職 : <?php the_field('teacher'); ?></span>
              </div>
              <p class="p-interview-archive__txt"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </ul>

        <div class="p-interview-archive__pager">
        <?php
        // 現在のクエリを保持してページネーションリンクを生成する
        echo paginate_links(array(
            'base'    => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format'  => '?paged=%#%',
            'current' => max(1, get_query_var('paged')), // 現在のページ番号
            'mid_size' => 2, // ページ番号の表示範囲
            'total'   => $interview_query->max_num_pages, // 最大ページ数
            'prev_text' => '', // 前へのテキストを空に設定
            'next_text' => '', // 次へのテキストを空に設定
            'screen_reader_text' => '', // スクリーンリーダー用のテキスト
        ));
        ?>
        </div>

        <?php else : ?>
          <!-- 投稿がない場合のメッセージ -->
          <p class="p-interview-archive__no-posts">投稿がありません。</p>
        <?php endif; ?>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>