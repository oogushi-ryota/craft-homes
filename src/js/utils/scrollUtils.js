// ▼スムーススクロール処理
export function initAnchorSmoothScroll() {
  const links = document.querySelectorAll('a[href*="#"]');
  let headerHeight = 9;

  // デバイス幅が375px以下の場合は7.1rem（通常は0rem）
  if (window.innerWidth <= 375) {
    headerHeight = 7;
  }

  links.forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      const targetId = href.split("#")[1];
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        e.preventDefault();

        // ヘッダー高さをrem単位で調整してスクロール
        const fontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
        const offset = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight * fontSize;

        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });
      }
    });
  });
}
// ▲スムーススクロール処理

// ▼l-footer が画面内に入ったら c-fixed-btn に is-hidden クラスを付与
export function fixedBtnObserver() {
  const fixedBtn = document.querySelector('.c-fixed-btn');
  const footer = document.querySelector('.l-footer');

  if (!fixedBtn || !footer) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          fixedBtn.classList.add('is-hidden');
        } else {
          fixedBtn.classList.remove('is-hidden');
        }
      });
    },
    {
      root: null, // ビューポートを基準
      threshold: 0, // 一部でも入ったら発火
    }
  );

  observer.observe(footer);
}
// ▲l-footer が画面内に入ったら c-fixed-btn に is-hidden クラスを付与