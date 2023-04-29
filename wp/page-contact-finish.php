<?php get_header(); ?>
<main class="l-main">
  <div class="l-bg l-bg--white l-bg--bar">
    <div class="l-bg__inner l-bg__inner--narrow">
      <ol class="c-breadcrumbs c-breadcrumbs">
        <li class="c-breadcrumbs__item">
          <a href="<?php echo home_url(); ?>" class="c-breadcrumbs__link">
            <svg role="img" aria-label="ホームのアイコン" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px"
              viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve">
              <g>
                <polygon class="st0" points="256.031,7.375 0,190.313 0,504.625 201.609,504.625 201.609,336.672 310.391,336.672 310.391,504.625 
                    512,504.625 512,190.313 	" style="fill: currentColor"></polygon>
              </g>
            </svg>
          </a>
        </li>
        <li class="c-breadcrumbs__item">Contact</li>
      </ol>
      <div class="p-finish-main">
        <h1 class="p-finish-main__title">送信完了</h1>
        <p class="p-finish-main__txt">お問合せありがとうございます。 ご入力頂いた内容で承りました。<br>担当者よりご連絡いたしますので、いましばらくお待ちください。</p>
      </div>
      <div class="p-finish-main__button">
        <a href="<?php echo get_template_directory_uri(); ?>" class="c-button c-button--primary c-button--white">
          <span class="c-button__txt">
            トップに戻る
            <span class="c-button__arrow-block">
              <svg class="c-button__arrow" width="22" height="16" viewBox="0 0 22 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M15.3431 0.929125L21.7071 7.29309C22.0976 7.68361 22.0976 8.31678 21.7071 8.7073L15.3431 15.0713C14.9526 15.4618 14.3195 15.4618 13.9289 15.0713C13.5384 14.6807 13.5384 14.0476 13.9289 13.657L18.5858 9.00019L-7.31201e-07 9.00019L-5.56355e-07 7.00019L18.5858 7.00019L13.9289 2.34334C13.5384 1.95281 13.5384 1.31965 13.9289 0.929125C14.3195 0.538601 14.9526 0.538601 15.3431 0.929125Z" />
              </svg>
            </span>
          </span>
        </a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>