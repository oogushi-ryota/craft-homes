  <footer class="l-footer">
    <div class="c-inner">
      <div class="l-footer__head">
        <div class="l-footer__nav c-nav">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__nav-logo c-nav__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="クラフトホームズのロゴ">
          </a>
          <nav class="l-footer__nav-nav c-nav__nav">
            <ul class="l-footer__nav-list c-nav__list">
              <li class="l-footer__nav-item c-nav__item">
                <a href="<?php echo esc_url(home_url('/exterior/')); ?>" class="l-footer__nav-link c-nav__link">外装リフォーム</a>
              </li>
              <li class="l-footer__nav-item c-nav__item">
                <a href="<?php echo esc_url(home_url('/interior/')); ?>" class="l-footer__nav-link c-nav__link">内装リフォーム</a>
              </li>
              <li class="l-footer__nav-item c-nav__item">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="l-footer__nav-link c-nav__link">新着情報</a>
              </li>
              <li class="l-footer__nav-item c-nav__item">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-footer__nav-link c-nav__link">会社概要</a>
              </li>
              <li class="l-footer__nav-item c-nav__item c-nav__contact l-footer__nav-contact">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-footer__nav-link l-footer__nav-contact-btn c-nav__link c-nav__contact-btn">
                  <svg class="l-footer__svg c-nav__svg" width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.4324 0H3.03242C1.49242 0 0.232422 1.2375 0.232422 2.75V19.25C0.232422 20.7625 1.49242 22 3.03242 22H25.4324C26.9724 22 28.2324 20.7625 28.2324 19.25V2.75C28.2324 1.2375 26.9724 0 25.4324 0ZM24.8724 5.84375L15.7164 11.4675C14.8064 12.0313 13.6584 12.0313 12.7484 11.4675L3.59242 5.84375C3.45204 5.76635 3.32911 5.66178 3.23107 5.53637C3.13302 5.41096 3.06191 5.26732 3.02203 5.11413C2.98215 4.96095 2.97433 4.80141 2.99904 4.64517C3.02376 4.48893 3.08049 4.33924 3.16582 4.20516C3.25114 4.07108 3.36328 3.9554 3.49544 3.86512C3.6276 3.77483 3.77704 3.71183 3.93472 3.67991C4.09239 3.64799 4.25502 3.64783 4.41276 3.67943C4.5705 3.71103 4.72007 3.77373 4.85242 3.86375L14.2324 9.625L23.6124 3.86375C23.7448 3.77373 23.8943 3.71103 24.0521 3.67943C24.2098 3.64783 24.3725 3.64799 24.5301 3.67991C24.6878 3.71183 24.8372 3.77483 24.9694 3.86512C25.1016 3.9554 25.2137 4.07108 25.299 4.20516C25.3844 4.33924 25.4411 4.48893 25.4658 4.64517C25.4905 4.80141 25.4827 4.96095 25.4428 5.11413C25.4029 5.26732 25.3318 5.41096 25.2338 5.53637C25.1357 5.66178 25.0128 5.76635 24.8724 5.84375Z" fill="white"/>
                  </svg>
                  お問い合わせ
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="l-footer__other-nav">
          <ul class="l-footer__other-nav-list">
            <li class="l-footer__other-nav-item">
              <a href="https://www.craftman-1226.com/" class="l-footer__other-nav-link" target="_blank">
                企業サイト
                <svg class="l-footer__nav-svg" width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1560_1154)">
                <path d="M3.74707 0V12.1875H16.7471V0H3.74707ZM15.4971 11.0156H4.99707V1.17188H15.4971V11.0156Z" fill="#313131"/>
                <path d="M1.99707 13.8281V8.67188V3.98438V2.8125H0.74707V15H13.7471V13.8281H12.4971H1.99707Z" fill="#313131"/>
                <path d="M8.02343 9.16038L11.7065 5.70745V8.19174H12.9565V3.70703H8.17287V4.87891H10.8227L7.13965 8.33181L8.02343 9.16038Z" fill="#313131"/>
                </g>
                <defs>
                <clipPath id="clip0_1560_1154">
                <rect width="16" height="15" fill="white" transform="translate(0.74707)"/>
                </clipPath>
                </defs>
                </svg>
              </a>
            </li>
            <li class="l-footer__other-nav-item">
              <a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="l-footer__other-nav-link">
                プライバシーポリシー
              </a>
            </li>
          </ul>
        </div>
      </div>
      <small class="l-footer__small">Copyright © by クラフトホームズ</small>
    </div>
  </footer>

  <script type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.min.js?250711"></script>

  <?php wp_footer(); ?>
</body>
</html>