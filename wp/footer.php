  <footer class="l-footer">
    <div class="c-inner">
      <div class="l-footer__cont">
        <div class="l-footer__left">
          <picture class="l-footer__logo">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" width="100" height="132" alt="にこまるえんのロゴ">
          </picture>
          <a href="https://nikomaru-en.com/" class="l-footer__official-link" target="_blank" rel="noopener">
            <span class="l-footer__official-txt">公式サイト</span>
            <svg class="l-footer__official-icon" width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.2327 0.917969H5.23267V11.918H21.2327V0.917969Z" stroke="#FFB502" stroke-miterlimit="10"/>
              <path d="M17.2327 14.918H1.23267V2.91797" stroke="#FFB502" stroke-miterlimit="10"/>
            </svg>
          </a>
        </div>
        <div class="l-footer__right">
          <nav class="l-footer__nav">
            <ul class="l-footer__nav-list">
              <li class="l-footer__nav-item">
                <span class="l-footer__nav-link">にこまるえんってどんなとこ</span>
                <ul class="l-footer__menu-list">
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/philosophy/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>理念・保育方針
                    </a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>園の概要・施設紹介
                    </a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/schedule/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>園の1日・年間行事
                    </a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/wellbeing/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>食育・アレルギー対応
                    </a>
                  </li>
                </ul>
              </li>
              <li class="l-footer__nav-item">
                <span class="l-footer__nav-link">働く魅力</span>
                <ul class="l-footer__menu-list">
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/benefits/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>福利厚生・待遇
                    </a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/career/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>研修制度・キャリアパス
                    </a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/lifework/' ) ); ?>" class="l-footer__menu-link">
                      <span class="l-footer__menu-link-line">ｰ </span>ライフワークバランス
                    </a>
                  </li>
                </ul>
              </li>
              <li class="l-footer__nav-item">
                <ul class="l-footer__menu-list">
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/interview/' ) ); ?>" class="l-footer__nav-link">職員インタビュー</a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="l-footer__nav-link">よくあるご質問</a>
                  </li>
                  <li class="l-footer__menu-item">
                    <a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>" class="l-footer__nav-link">ENTRY</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <small class="l-footer__small">© にこまるえん</small>
  </footer>

  <script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js?250711"></script>

  <?php wp_footer(); ?>
</body>
</html>