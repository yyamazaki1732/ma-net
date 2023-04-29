<footer class="l-footer">
  <div class="l-footer__inner">
    <ul class="l-footer__list">
      <li class="l-footer__item">
        <a href="#" class="l-footer__button js-pagetop" aria-label="TOPまでスクロール" role="button">
          <span class="l-footer__button-txt ">Back to Top</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url('/about'); ?>" class="l-footer__item-link">
          私たちについて<span class="l-footer__item-en">About</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url('/service'); ?>" class="l-footer__item-link">
          サービス<span class="l-footer__item-en">Service</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url('/faq'); ?>" class="l-footer__item-link">
          よくある質問<span class="l-footer__item-en">Faq</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url('/category/blog'); ?>" class="l-footer__item-link">
          ブログ<span class="l-footer__item-en">Blog</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url('/contact'); ?>" class="l-footer__item-link">
          お問合せ<span class="l-footer__item-en">Contact</span>
        </a>
      </li>
      <li class="l-footer__item">
        <a href="<?php echo home_url(); ?>" class="l-footer__item-link">
          <svg class="l-footer__logo" role="img" aria-label="MA-netのロゴマーク" width="142" height="171"
            viewBox="0 0 142 171" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M75.5895 15.4189C70.0964 6.11045 62.2184 0.380113 53.7509 0.756754C38.5308 1.45623 27.0622 21.6066 28.1608 45.7655C28.4556 52.4912 29.715 58.8403 31.6979 64.4361C24.8917 67.3148 18.0856 72.238 12.378 78.9907C-1.90418 95.805 -4.15504 117.408 7.3404 127.255C13.3427 132.393 21.9442 133.308 30.7868 130.618C36.5211 138.5 44.6671 146.49 54.6084 153.512C80.0645 171.483 107.611 176.164 116.159 163.977C119.079 159.807 119.401 154.238 117.552 147.97C121.303 145.307 124.894 141.997 128.19 138.123C142.472 121.309 145.259 100.163 134.407 90.8818C132.45 89.2138 130.2 88.0301 127.734 87.3306C128.779 83.3489 129.369 78.9638 129.369 74.3633C129.369 66.2924 127.574 58.8672 124.599 53.11C127.654 49.4781 129.369 45.335 129.369 40.9229C129.369 26.3146 110.29 14.4773 86.7366 14.4773C82.878 14.4773 79.1534 14.8001 75.6163 15.392M83.3604 43.2097C83.2264 39.9813 82.8512 36.8337 82.2885 33.8205C84.5662 33.4977 86.9778 33.3363 89.443 33.3363C101.474 33.3363 111.737 37.4255 115.81 43.1559C113.613 41.8645 111.228 41.1651 108.736 41.1651C99.6255 41.1651 91.8815 50.6887 89.1483 63.8712C86.4151 63.8712 83.7623 63.629 81.2435 63.2255C82.9048 57.1723 83.6819 50.3659 83.3604 43.2097ZM117.284 51.0923C115.837 55.881 110.29 59.9164 102.653 62.0956C104.824 54.8049 108.843 49.9085 113.452 49.9085C114.792 49.9085 116.078 50.3121 117.284 51.0923ZM66.3986 85.555C72.2669 82.1114 77.0633 75.4933 80.0645 67.0457C82.2349 67.261 84.4858 67.3686 86.7634 67.3686C87.3797 67.3686 87.9693 67.3686 88.5856 67.3417C88.2908 69.6015 88.13 71.9421 88.13 74.3633C88.13 83.9408 90.6488 92.5498 94.6682 98.6029C92.6853 100.379 90.7828 102.342 88.9607 104.468C87.6477 106.001 86.4419 107.589 85.3433 109.176C78.2691 104.199 71.0075 100.271 64.0673 97.4192C65.4875 93.3838 66.2646 89.3483 66.4254 85.555H66.3986ZM94.4539 140.921C90.4881 141.917 87.0314 141.54 84.6734 139.522C82.0742 137.289 81.2167 133.442 81.8866 128.815C86.817 132.824 91.0508 136.94 94.4271 140.921H94.4539ZM65.9698 40.1427C66.1038 41.4072 66.211 42.6985 66.2646 44.0168C66.4789 48.5096 66.1842 52.814 65.5143 56.7419C62.7811 54.4013 61.227 51.6034 61.227 48.6172C61.227 45.4695 62.9687 42.5371 65.9966 40.1158L65.9698 40.1427ZM48.1506 12.5941C52.4647 12.4058 56.5645 15.392 59.7532 20.4766C50.187 25.3192 44.0776 32.6906 44.0776 40.9767C44.0776 50.3659 51.9824 58.6251 63.8797 63.3062C63.2098 65.3508 62.406 67.234 61.4681 68.902C60.7446 67.9873 59.914 67.1533 59.0297 66.4001C53.1882 61.423 44.9618 60.4007 36.3872 62.7951C34.4846 57.8718 33.252 51.9532 32.9573 45.5502C32.1534 27.7674 38.9328 12.9976 48.1506 12.5941ZM51.902 76.9191C51.634 76.9729 51.3393 76.9729 51.0713 76.9998C46.5696 77.2151 42.309 73.9329 39.0667 68.4447C42.6842 68.2026 45.8997 69.0366 48.3381 71.135C50.0799 72.6146 51.2589 74.6055 51.902 76.946V76.9191ZM23.9539 98.9527C20.6044 103.741 20.6848 110.467 23.5787 117.919C18.3535 119.318 13.557 118.78 10.2344 115.955C2.89228 109.687 5.49148 94.5406 15.9955 82.1652C21.3547 75.843 27.7589 71.4578 33.7076 69.5208C38.0217 78.7754 44.4795 85.3667 51.7412 87.5189C51.3125 89.3483 50.6962 91.2584 49.8655 93.1416C38.0217 90.8011 28.3752 92.5767 23.9271 98.9258L23.9539 98.9527ZM39.1471 108.53C36.0388 111.516 32.7161 113.911 29.4202 115.606C29.4202 114.072 29.7954 112.754 30.5456 111.651C32.0998 109.418 35.1277 108.423 39.1471 108.53ZM102.01 162.067C97.0263 169.196 76.9829 163.681 57.2344 149.772C47.7486 143.074 40.085 135.675 35.2081 129.003C35.2081 129.003 35.1813 129.003 35.1545 129.003C35.1545 129.003 35.1813 129.003 35.2081 129.003C41.8535 126.098 48.4185 121.255 53.9921 114.691C54.528 114.072 55.0371 113.426 55.5462 112.781C61.7629 115.417 68.569 119.184 75.3216 123.972C76.0451 124.484 76.7686 124.995 77.4653 125.533C74.5177 136.24 76.0987 146.194 82.6637 151.79C87.7817 156.175 95.0166 157.117 102.734 155.153C103.43 157.951 103.243 160.318 102.01 162.094V162.067ZM114.738 126.663C112.997 128.707 111.175 130.591 109.299 132.259C104.288 125.371 97.4282 118.404 89.1483 112.054C90.1933 110.575 91.3187 109.095 92.5514 107.642C94.1859 105.732 95.874 103.984 97.589 102.396C100.778 105.678 104.583 107.589 108.656 107.589C114.792 107.589 120.312 103.284 124.09 96.4238C128.056 102.611 124.251 115.417 114.712 126.663H114.738ZM107.155 95.5898C112.541 92.8188 117.552 92.0117 121.035 93.7066C118.919 96.935 116.266 98.8451 113.372 98.8451C111.094 98.8451 108.977 97.6613 107.155 95.5898ZM124.171 86.6849C118.168 86.0392 111.228 87.761 104.476 91.5275C102.278 87.1154 100.912 81.0622 100.912 74.4171C100.912 71.3502 101.206 68.4447 101.716 65.7275C109.835 63.8174 116.775 60.4545 121.652 56.0962C124.224 60.5621 125.859 67.1264 125.859 74.4171C125.859 78.883 125.242 83.1068 124.171 86.7118V86.6849Z" />
          </svg>

        </a>
      </li>
    </ul>
    <div class="l-footer__copy"><span>&copy; MA - net</span></div>
  </div>
</footer>
<script>
  const mediaQueryS = window.matchMedia('(max-width: 1023px)');
  const mediaQueryL = window.matchMedia('(min-width: 1024px)');
  const header = document.getElementsByClassName('l-header__inner')[0];
</script>
<script>
    <?php 
    if (is_home()) {
    ?>
    // ===============================================
    // # オープニング
    // ===============================================
    const opening_bg = document.getElementsByClassName('p-index-opening')[0];
    const opening_type = document.getElementsByClassName('p-index-opening__type')[0];
    const opening_block01 = document.getElementsByClassName('p-index-mv__block01')[0];
    const opening_block02 = document.getElementsByClassName('p-index-mv__block02')[0];
    const opening_block03 = document.getElementsByClassName('p-index-mv__block03')[0];
    const opening_service = document.getElementsByClassName('p-index-service')[0];
    const opening_header = document.getElementsByClassName('l-header__inner')[0];

    const openingArray = [opening_bg, opening_type, opening_block01, opening_block02, opening_block03, opening_service, opening_header]
    const isHomeArray = openingArray.slice(2);

    const keyName = 'visited';
    const keyValue = true;

    if (!sessionStorage.getItem(keyName)) {
      sessionStorage.setItem(keyName, keyValue);
      //ここに初回のアクセス時の処理
      for (const values of isHomeArray) {
        values.classList.add('is-home');
      }
      for (const values of openingArray) {
        values.classList.add('is-showed');
      }
    } else {
      //ここに二回目以降のアクセス時の処理
      opening_bg.remove();
    }
    // ===============================================
    // # リンク
    // ===============================================
    const linkNum = ['01', '02', '03', '04', '05', '06'];
    const listItemL = document.getElementsByClassName('js-link--l');
    const listItemS = document.getElementsByClassName('js-link--s');
    const list = document.getElementsByClassName('p-index-service__list')[0];
    const listItem = document.getElementsByClassName('p-index-service__item');
    const tab = document.getElementsByClassName('p-index-service__item-heading');
    const tabList = document.getElementsByClassName('p-index-service__desc-block');
    const tabAtt = ['aria-label', 'role', 'aria-expanded', 'aria-controls', 'tabIndex']
    const tabListAtt = ['role', 'aria-hidden', 'id']

    if (mediaQueryL.matches) {
      for (let i = 0; i < linkNum.length; i++) {
        listItemL[i].outerHTML = `<a href="https://ma-network.org/service#service${linkNum[i]}" class="p-index-service__item-link--l">${listItemL[i].outerHTML}</a>`;
      }
    } else {
      list.setAttribute('role', 'tablist')
      for (let i = 0; i < linkNum.length; i++) {
        listItem[i].setAttribute('role', 'presentation');
        for (let t = 0; t <= 4; t++) {
          const tabValue = ['このタブを開く', 'tab', false, `panel-${linkNum[i]}`, 0];
          tab[i].setAttribute(tabAtt[t], tabValue[t]);
        }
        for (let l = 0; l <= 2; l++) {
          const tabListValue = ['tabpanel', true, `panel-${linkNum[i]}`];
          tabList[i].setAttribute(tabListAtt[l], tabListValue[l]);
        }
        listItemS[i].innerHTML = `<a href="https://ma-network.org/service#service${linkNum[i]}" class="p-index-service__item-link--s" tabindex='-1'>さらに詳しく<img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></a>`
      }
    }
    // ===============================================
    // # リロード
    // ===============================================
    const breakPoint = 1024;
    let resizeFlag;
    window.addEventListener('load', () => {
      if (breakPoint < window.innerWidth) {
        resizeFlag = false;
      } else {
        resizeFlag = true;
      }
      resizeWindow();
    }, false);
    const resizeWindow = () => {
      window.addEventListener('resize', () => {
        if (breakPoint < window.innerWidth && resizeFlag) {
          window.location.reload();
          resizeFlag = false;
        }
        else if (breakPoint >= window.innerWidth && !(resizeFlag)) {
          window.location.reload();
          resizeFlag = true;
        }
      }, false);
    }
    <?php
	  }
	  ?>
    <?php 
    if (is_page('contact')) {
    ?>
    const formLink = document.getElementsByClassName('l-form__link');
    const url01 = 'https://policies.google.com/privacy';
    const url02 = 'https://policies.google.com/terms';
    formLink[0].setAttribute('href', url01)
    formLink[1].setAttribute('href', url02)
    <?php
	  }
	  ?>

</script>
<?php wp_footer(); ?>
</body>

</html>