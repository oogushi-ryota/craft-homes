// === 外部ライブラリ読み込み ===
import "swiper/css/bundle";

// === ユーティリティライブラリ読み込み ===
import { initAnchorSmoothScroll, fixedBtnObserver } from "./utils/scrollUtils.js";
import { initTabs } from "./utils/tabUtils.js";
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { preventEnterSubmit } from "./utils/formUtils.js";

// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  fixedBtnObserver();           // ← l-footer が画面内に入ったら c-fixed-btn に is-hidden クラスを付与       
  initTabs()            //タブ切り替え
  initAnchorSmoothScroll();     // ← スムーススクロール
  preventEnterSubmit();
  initHamburgerMenu({           // ← ハンバーガーメニュー
    navSelector: ".js-nav",
    btnSelector: ".js-nav-btn",
    closeTargetSelector: ".l-header__nav-item a",
  });
});