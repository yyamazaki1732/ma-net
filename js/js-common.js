
const mediaQueryS = window.matchMedia('(max-width: 1023px)');
const mediaQueryL = window.matchMedia('(min-width: 1024px)');
const header = document.getElementsByClassName('l-header__inner')[0];
(() => {
  // ===============================================
  // # header関連
  // ===============================================
  const headerLogoType = document.getElementsByClassName('l-header__icon-link')[0];
  const headerButton = document.getElementsByClassName('l-header__button')[0];
  const headerNavi = document.getElementsByClassName('l-header__nav')[0];
  const headerLogo = document.getElementsByClassName('l-header__icon-logo')[0];
  const listItem01 = document.getElementsByClassName('l-header__item01-link');
  const listItem02 = document.getElementsByClassName('l-header__item02-link');
  let clickCount = 0;

  window.addEventListener('load', () => {
    headerButton.classList.remove('is-active');
    headerNavi.classList.remove('is-showed');
    headerLogo.classList.remove('is-active');
  })

  headerButton.addEventListener('click', function () {
    this.classList.toggle('is-active');
    headerNavi.classList.toggle('is-showed');
    headerLogo.classList.toggle('is-active');
    ariaCount();
    for (let i = 0; i < listItem02.length; i++) {
      listItem02[i].addEventListener('click', naviMove)
      function naviMove() {
        setTimeout(() => {
          this.classList.remove('is-active');
          headerNavi.classList.remove('is-showed');
          headerLogo.classList.remove('is-active');
          ariaCount();
        }, 100);
      }
    }
    function ariaCount() {
      clickCount++;
      if (clickCount % 2 != 0) {
        headerButton.setAttribute('aria-expanded', true);
        headerNavi.setAttribute('aria-hidden', false);
      } else {
        headerButton.setAttribute('aria-expanded', false);
        headerNavi.setAttribute('aria-hidden', true);
      }
    }
  });

  if (mediaQueryL.matches) {
    headerLogoType.setAttribute('tabIndex', 1);
    for (let i = 0; i < listItem01.length; i++) {
      listItem01[i].setAttribute('tabIndex', 2)
    }
  }

  let headerMenu01 = document.getElementsByClassName('l-header__item01');
  const headerList = document.getElementsByClassName('l-header__list02');
  for (let i = 0; i < headerList.length; i++) {
    headerMenu01[i].addEventListener('mouseenter', () => {
      headerList[i].style.transition = "all ease .3s"
      headerList[i].classList.add('is-active')
    })
    headerMenu01[i].addEventListener('mouseleave', () => {
      headerList[i].style.transition = "initial"
      headerList[i].classList.remove('is-active')
    })
  }

  // window.addEventListener('scroll', function () {
  //   if (window.scrollY > header.offsetHeight) {
  //     header.classList.add('is-active');
  //   } else {
  //     header.classList.remove('is-active');
  //   }
  // });

  // ===============================================
  // #pageTop
  // ===============================================
  const footerButton = document.getElementsByClassName('js-pagetop')[0];
  footerButton.addEventListener('click', () => {
    window.scroll({ top: 0, behavior: 'smooth' });
  });
  // ===============================================
  // # ancker (Service page & Index page)
  // ===============================================
  const ScrollTrigger = document.querySelectorAll('a[href^="#"]');
  const headerHeight = header.offsetHeight
  for (let i = 0; i < ScrollTrigger.length; i++) {
    ScrollTrigger[i].addEventListener('click', (e) => {
      e.preventDefault();
      let href = ScrollTrigger[i].getAttribute('href');
      let targetElement = document.getElementById(href.replace('#', ''));
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.pageYOffset;
      const target = rect + offset - headerHeight;
      window.scrollTo({
        top: target,
        behavior: 'smooth',
      });
    });
  }

  const urlHash = location.hash;
  window.addEventListener('DOMContentLoaded', function () {
    if (urlHash) {
      setTimeout(function () {
        window.scrollTo({ top: 0 }, 0);
      })
      setTimeout(function () {  //ペー,ジロード用に処理を遅らす
        // スクロール先の要素を取得 （アンカーの リンク先 #.. の # を取り除いた名前と一致する id名の要素）
        const urlTarget = document.getElementById(urlHash.replace('#', ''));
        // スクロール先の要素の位置を取得
        const urlPosition = window.pageYOffset + urlTarget.getBoundingClientRect().top - headerHeight;
        window.scroll({
          top: urlPosition,
          behavior: 'smooth'
        });
      }, 200);
    }
  });
  // ===============================================
  // # accordion
  // ===============================================
  const accHeading = document.getElementsByClassName('js-accordion-ttl');
  const accLink = document.getElementsByClassName('p-index-service__item-link--s');

  for (let i = 0; i < accHeading.length; i++) {
    const content = accHeading[i].nextElementSibling;
    accHeading[i].addEventListener('click', function () {
      this.classList.toggle('is-active');
      if (content.style.height) {
        toggleUp();
      } else {
        toggleDown();
      }
    });
    content.addEventListener('click', function () {
      accHeading[i].classList.toggle('is-active');
      toggleUp();
    })

    function toggleUp() {
      content.style.height = null;
      accHeading[i].setAttribute('aria-expanded', false);
      content.setAttribute('aria-hidden', true);
      accLink[i].setAttribute('tabIndex', -1);
    }
    function toggleDown() {
      content.style.height = content.scrollHeight + 'px';
      content.setAttribute('aria-expanded', true);
      content.setAttribute('aria-hidden', false);
      accLink[i].setAttribute('tabIndex', 0)
    }
  }
  // ===============================================
  // # keydown
  // ===============================================
  function handleKeyDown(event) {
    if (event.code === "Enter") {
      document.activeElement.click();
    }
  }
  addEventListener("keydown", handleKeyDown);
})();