<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content="タイトル"/>
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja-JP">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="summary">

  <title>テスト</title>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css?251011">

  <!-- フォント読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__nav c-nav">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo c-nav__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="クラフトホームズのロゴ">
        </a>
        <nav class="c-nav__nav js-nav">
          <ul class="l-header__list c-nav__list">
            <li class="l-header__item c-nav__item">
              <a href="<?php echo esc_url( home_url( '/exterior/' ) ); ?>" class="l-header__link c-nav__link">外装リフォーム</a>
            </li>
            <li class="l-header__item c-nav__item">
              <a href="<?php echo esc_url( home_url( '/interior/' ) ); ?>" class="l-header__link c-nav__link">内装リフォーム</a>
            </li>
            <li class="l-header__item c-nav__item">
              <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="l-header__link c-nav__link">新着情報</a>
            </li>
            <li class="l-header__item c-nav__item">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-header__link c-nav__link">会社概要</a>
            </li>
            <li class="l-header__item l-header__contact c-nav__item c-nav__contact">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-header__link l-header__contact-btn c-nav__link c-nav__contact-btn">
                <svg class="l-header__svg c-nav__svg" width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.4324 0H3.03242C1.49242 0 0.232422 1.2375 0.232422 2.75V19.25C0.232422 20.7625 1.49242 22 3.03242 22H25.4324C26.9724 22 28.2324 20.7625 28.2324 19.25V2.75C28.2324 1.2375 26.9724 0 25.4324 0ZM24.8724 5.84375L15.7164 11.4675C14.8064 12.0313 13.6584 12.0313 12.7484 11.4675L3.59242 5.84375C3.45204 5.76635 3.32911 5.66178 3.23107 5.53637C3.13302 5.41096 3.06191 5.26732 3.02203 5.11413C2.98215 4.96095 2.97433 4.80141 2.99904 4.64517C3.02376 4.48893 3.08049 4.33924 3.16582 4.20516C3.25114 4.07108 3.36328 3.9554 3.49544 3.86512C3.6276 3.77483 3.77704 3.71183 3.93472 3.67991C4.09239 3.64799 4.25502 3.64783 4.41276 3.67943C4.5705 3.71103 4.72007 3.77373 4.85242 3.86375L14.2324 9.625L23.6124 3.86375C23.7448 3.77373 23.8943 3.71103 24.0521 3.67943C24.2098 3.64783 24.3725 3.64799 24.5301 3.67991C24.6878 3.71183 24.8372 3.77483 24.9694 3.86512C25.1016 3.9554 25.2137 4.07108 25.299 4.20516C25.3844 4.33924 25.4411 4.48893 25.4658 4.64517C25.4905 4.80141 25.4827 4.96095 25.4428 5.11413C25.4029 5.26732 25.3318 5.41096 25.2338 5.53637C25.1357 5.66178 25.0128 5.76635 24.8724 5.84375Z" fill="white"/>
                </svg>
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
        <div class="l-header__hamburger js-nav-btn">
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
        </div>
      </div>
    </div>
  </header>