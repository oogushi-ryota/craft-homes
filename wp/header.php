<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.png">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css?250827">

  <!-- フォント読み込み -->
  <script>
    (function(d) {
      var config = {
        kitId: 'qwv3pbk',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

  <?php wp_head(); ?>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6T6DDBVZ96"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6T6DDBVZ96');
  </script>
</head>

<body class="p-top">
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__cont">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__link">
          <picture class="l-header__logo">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" width="55" height="72" alt="にこまるえんのロゴ">
          </picture>
        </a>
        <div class="l-header__navarea">
          <nav class="l-header__nav js-nav">
            <ul class="l-header__nav-list">
              <li class="l-header__nav-item l-header__nav-item--trigger">
                <span class="l-header__nav-btn">にこまるえんってどんなとこ</span>
                <div class="l-header__mega-menu">
                  <ul class="l-header__mega-menu-list">
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/philosophy/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>理念・保育方針
                      </a>
                    </li>
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>園の概要・施設紹介
                      </a>
                    </li>
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/schedule/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>園の1日・年間行事
                      </a>
                    </li>
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/wellbeing/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>食育・アレルギー対応
                      </a>
                    </li>
                  </ul>
                </div>      
              </li>
              <li class="l-header__nav-item l-header__nav-item--trigger">
                <span class="l-header__nav-btn">働く魅力</span>
                <div class="l-header__mega-menu">
                  <ul class="l-header__mega-menu-list">
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/benefits/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>福利厚生・待遇
                      </a>
                    </li>
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/career/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>研修制度・キャリアパス
                      </a>
                    </li>
                    <li class="l-header__mega-menu-item">
                      <a href="<?php echo esc_url( home_url( '/lifework/' ) ); ?>" class="l-header__mega-menu-link">
                        <span class="l-header__mega-menu-line">ｰ </span>ライフワークバランス
                      </a>
                    </li>
                  </ul>
                </div>   
              </li>
              <li class="l-header__nav-item">
                <a href="<?php echo esc_url( home_url( '/interview/' ) ); ?>" class="l-header__nav-link">職員インタビュー</a>
              </li>
              <li class="l-header__nav-item">
                <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="l-header__nav-link">よくあるご質問</a>
              </li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>" class="l-header__entry">
              <span class="l-header__entry-txt">ENTRY</span>
              <svg class="l-header__arrow" width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.2324 5.91895L0.704101 11.4189L0.704102 0.418945L10.2324 5.91895Z" fill="white"/>
              </svg>              
            </a>
          </nav>
          <div class="l-header__hamburger js-nav-btn">
            <span class="l-header__hamburger-line"></span>
            <span class="l-header__hamburger-line"></span>
            <span class="l-header__hamburger-line"></span>
          </div>
        </div>
      </div>
    </div>
  </header>