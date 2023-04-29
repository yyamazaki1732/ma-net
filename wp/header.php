<!DOCTYPE html>
<html lang="ja">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-585SP4M');</script>
<!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- preload -->
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" as="image" media="(max-width: 1023px)">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/icon-mark.svg" as="image">
  <?php 
    if (is_home()) {
    ?>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/pic-bg-top.webp" as="image">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/pic-about.webp" as="image">
  <?php
  }
	?>
  <?php 
    if (is_home('about')) {
    ?>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/pic-member01.jpg" as="image">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/pic-member02.jpg" as="image">
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/pic-profile01.jpg" as="image">
  <?php
  }
	?>

  <!-- ogp -->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.png">
  <meta property="og:title" content="Ma-net (MINISTRY Admin Network)">

  <meta property="og:description" content="descriptionと同じ">
  <meta property="og:url" content="<?php echo get_template_directory_uri(); ?>/">
  <meta property="og:site_name" content="Ma-net (MINISTRY Admin Network)">

    <!-- favicon -->
  <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" sizes="any"> -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

  <?php wp_head(); ?>
  <!-- <meta name="google-site-verification" content="WfAOCj-FU-_cDoxEqV3jKyansB0J1UTpKIzCbR5weIQ" /> -->
</head>
<body>
  <header class="l-header">
    <div class="l-header__inner">
      <a href="<?php echo home_url(); ?>" class="l-header__icon-link">
        <svg class="l-header__icon-logo" role="img" aria-label="MA-netのロゴタイプ" width="144" height="30"
          viewBox="0 0 144 30" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
          <g clip-path="url(#clip0_47_3665)">
            <path
              d="M0 29.015L4.6 0.334961H10.1L17.24 17.495L24.38 0.334961H29.88L34.48 29.015H27.86L25.58 11.905L18.4 29.015H16.08L8.9 11.905L6.62 29.015H0Z" />
            <path
              d="M58.0101 23.595H47.1701L44.9801 29.015H38.1001L49.6601 0.334961H55.7201L67.0301 29.015H60.1501L58.0001 23.595H58.0101ZM56.2001 18.525L52.6701 8.89496L49.1001 18.525H56.1901H56.2001Z" />
            <path d="M69.27 15.4248H80.28V20.8448H69.27V15.4248Z" />
            <path
              d="M84.8501 9.8352H91.0401V12.1152C92.9301 9.7052 95.1701 9.3252 96.9701 9.3252C98.6501 9.3252 100.84 9.6252 102.47 11.2552C104.28 13.0652 104.41 15.3352 104.41 16.8852V29.0152H98.2201V19.1652C98.2201 17.9152 98.1801 16.3252 97.1901 15.3352C96.7201 14.8652 95.9401 14.4752 94.8301 14.4752C93.5401 14.4752 92.7201 14.9952 92.2501 15.5052C91.2201 16.5352 91.0501 17.9152 91.0501 19.1652V29.0152H84.8601V9.8352H84.8501Z" />
            <path
              d="M121.59 22.8251C121.07 23.9051 120.34 24.3751 120.26 24.4151C119.62 24.8051 118.67 24.9751 117.77 24.9751C116.87 24.9751 115.53 24.8051 114.59 23.7751C113.81 22.9151 113.43 21.5351 113.43 20.5051H127.75V19.8651C127.75 17.4951 127.32 14.4851 125.04 12.0851C122.67 9.59508 119.58 9.20508 117.43 9.20508C115.28 9.20508 112.4 9.63508 110.08 11.9551C108.15 13.9351 107.16 16.7751 107.16 19.5251C107.16 22.7051 108.36 25.2451 110.04 26.9251C112.28 29.1651 114.81 29.6751 117.69 29.6751C119.84 29.6751 121.9 29.3751 123.75 28.2551C124.87 27.5651 126.59 26.1451 127.45 23.4351C127.52 23.2551 127.58 23.0351 127.64 22.8351H121.61M113.65 16.8151C113.82 15.9551 114.25 15.2651 114.73 14.7551C115.33 14.1551 116.28 13.5051 117.87 13.5051C119.12 13.5051 120.11 13.9351 120.79 14.5851C121.69 15.4451 121.99 16.6451 122.04 16.8251H113.66L113.65 16.8151Z" />
            <path
              d="M139.59 9.83502V3.64502H133.4V9.83502H129.57V14.825H133.4V29.015H139.59V14.825H143.42V9.83502H139.59Z" />
          </g>
          <defs>
            <clipPath id="clip0_47_3665">
              <rect width="143.42" height="29.33" fill="white" transform="translate(0 0.334961)" />
            </clipPath>
          </defs>
        </svg>
      </a>
      <div class="l-header__link-block">
        <a class="l-header__link-contact" href="<?php echo home_url('/contact'); ?>">
          <span class="l-header__contact-block">
            <img class="l-header__icon-mail" src="<?php echo get_template_directory_uri(); ?>/images/icon-mail.svg" alt="お問合せ">
            <span class="l-header__micro-copy"><span>お問合せ</span><span>Contact</span></span>
          </span>
        </a>
        <div role="button" class="l-header__button js-header-button" aria-label="メニューの開閉ボタン" aria-controls="header-navi"
          aria-expanded="false" tabindex="0">
          <span class="l-header__bar"></span><span class="l-header__bar"></span>
        </div>
      </div>
      <nav class="l-header__nav">
        <ul class="l-header__list01">
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url('/about'); ?>">
              <span>私たちについて<span class="l-header__item01-en">About</span></span>
            </a>
            <ul class="l-header__list02">
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/about#vision'); ?>">
                  <span> ビジョン<span class="l-header__item02-en">Vision</span></span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/about#member'); ?>">
                  <span>協力者<span class="l-header__item02-en">Member</span></span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/about#profile'); ?>">
                  <span>事務所概要<span class="l-header__item02-en">Profile</span></span>
                </a>
              </li>
            </ul>
          </li>
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url('/service'); ?>">
              <span>サービス<span class="l-header__item01-en">Service</span></span>
            </a>
            <ul class="l-header__list02">
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service01'); ?>">
                  <span>
                    法人設立<span class="l-header__item02-en">Incorporation</span>
                  </span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service02'); ?>">
                  <span>
                    人事<span class="l-header__item02-en">Incorporation</span>
                  </span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service03'); ?>">
                  <span>
                    会計/総務<span class="l-header__item02-en">General
                      affairs</span>
                  </span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service04'); ?>">
                  <span>運営<span class="l-header__item02-en">Management</span></span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service05'); ?>">
                  <span>
                    会堂建築<span class="l-header__item02-en">Architecture</span>
                  </span>
                </a>
              </li>
              <li class="l-header__item02">
                <a class="l-header__item02-link" href="<?php echo home_url('/service#service06'); ?>">
                  <span>
                    法務<span class="l-header__item02-en">Legal
                      affairs</span>
                  </span>
                </a>
              </li>
            </ul>
          </li>
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url('/faq'); ?>">
              <span>よくある質問<span class="l-header__item01-en">Faq</span></span>
            </a>
          </li>
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url('/category/blog'); ?>">
              <span>ブログ<span class="l-header__item01-en">Blog</span></span>
            </a>
          </li>
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url('/contact'); ?>">
              <span>お問合せ<span class="l-header__item01-en">Contact</span></span>
            </a>
          </li>
          <li class="l-header__item01">
            <a class="l-header__item01-link" href="<?php echo home_url(); ?>">
              <svg role="img" aria-label="MA-netのロゴマーク" width="142" height="171" viewBox="0 0 142 171"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M75.5895 15.4189C70.0964 6.11045 62.2184 0.380113 53.7509 0.756754C38.5308 1.45623 27.0622 21.6066 28.1608 45.7655C28.4556 52.4912 29.715 58.8403 31.6979 64.4361C24.8917 67.3148 18.0856 72.238 12.378 78.9907C-1.90418 95.805 -4.15504 117.408 7.3404 127.255C13.3427 132.393 21.9442 133.308 30.7868 130.618C36.5211 138.5 44.6671 146.49 54.6084 153.512C80.0645 171.483 107.611 176.164 116.159 163.977C119.079 159.807 119.401 154.238 117.552 147.97C121.303 145.307 124.894 141.997 128.19 138.123C142.472 121.309 145.259 100.163 134.407 90.8818C132.45 89.2138 130.2 88.0301 127.734 87.3306C128.779 83.3489 129.369 78.9638 129.369 74.3633C129.369 66.2924 127.574 58.8672 124.599 53.11C127.654 49.4781 129.369 45.335 129.369 40.9229C129.369 26.3146 110.29 14.4773 86.7366 14.4773C82.878 14.4773 79.1534 14.8001 75.6163 15.392M83.3604 43.2097C83.2264 39.9813 82.8512 36.8337 82.2885 33.8205C84.5662 33.4977 86.9778 33.3363 89.443 33.3363C101.474 33.3363 111.737 37.4255 115.81 43.1559C113.613 41.8645 111.228 41.1651 108.736 41.1651C99.6255 41.1651 91.8815 50.6887 89.1483 63.8712C86.4151 63.8712 83.7623 63.629 81.2435 63.2255C82.9048 57.1723 83.6819 50.3659 83.3604 43.2097ZM117.284 51.0923C115.837 55.881 110.29 59.9164 102.653 62.0956C104.824 54.8049 108.843 49.9085 113.452 49.9085C114.792 49.9085 116.078 50.3121 117.284 51.0923ZM66.3986 85.555C72.2669 82.1114 77.0633 75.4933 80.0645 67.0457C82.2349 67.261 84.4858 67.3686 86.7634 67.3686C87.3797 67.3686 87.9693 67.3686 88.5856 67.3417C88.2908 69.6015 88.13 71.9421 88.13 74.3633C88.13 83.9408 90.6488 92.5498 94.6682 98.6029C92.6853 100.379 90.7828 102.342 88.9607 104.468C87.6477 106.001 86.4419 107.589 85.3433 109.176C78.2691 104.199 71.0075 100.271 64.0673 97.4192C65.4875 93.3838 66.2646 89.3483 66.4254 85.555H66.3986ZM94.4539 140.921C90.4881 141.917 87.0314 141.54 84.6734 139.522C82.0742 137.289 81.2167 133.442 81.8866 128.815C86.817 132.824 91.0508 136.94 94.4271 140.921H94.4539ZM65.9698 40.1427C66.1038 41.4072 66.211 42.6985 66.2646 44.0168C66.4789 48.5096 66.1842 52.814 65.5143 56.7419C62.7811 54.4013 61.227 51.6034 61.227 48.6172C61.227 45.4695 62.9687 42.5371 65.9966 40.1158L65.9698 40.1427ZM48.1506 12.5941C52.4647 12.4058 56.5645 15.392 59.7532 20.4766C50.187 25.3192 44.0776 32.6906 44.0776 40.9767C44.0776 50.3659 51.9824 58.6251 63.8797 63.3062C63.2098 65.3508 62.406 67.234 61.4681 68.902C60.7446 67.9873 59.914 67.1533 59.0297 66.4001C53.1882 61.423 44.9618 60.4007 36.3872 62.7951C34.4846 57.8718 33.252 51.9532 32.9573 45.5502C32.1534 27.7674 38.9328 12.9976 48.1506 12.5941ZM51.902 76.9191C51.634 76.9729 51.3393 76.9729 51.0713 76.9998C46.5696 77.2151 42.309 73.9329 39.0667 68.4447C42.6842 68.2026 45.8997 69.0366 48.3381 71.135C50.0799 72.6146 51.2589 74.6055 51.902 76.946V76.9191ZM23.9539 98.9527C20.6044 103.741 20.6848 110.467 23.5787 117.919C18.3535 119.318 13.557 118.78 10.2344 115.955C2.89228 109.687 5.49148 94.5406 15.9955 82.1652C21.3547 75.843 27.7589 71.4578 33.7076 69.5208C38.0217 78.7754 44.4795 85.3667 51.7412 87.5189C51.3125 89.3483 50.6962 91.2584 49.8655 93.1416C38.0217 90.8011 28.3752 92.5767 23.9271 98.9258L23.9539 98.9527ZM39.1471 108.53C36.0388 111.516 32.7161 113.911 29.4202 115.606C29.4202 114.072 29.7954 112.754 30.5456 111.651C32.0998 109.418 35.1277 108.423 39.1471 108.53ZM102.01 162.067C97.0263 169.196 76.9829 163.681 57.2344 149.772C47.7486 143.074 40.085 135.675 35.2081 129.003C35.2081 129.003 35.1813 129.003 35.1545 129.003C35.1545 129.003 35.1813 129.003 35.2081 129.003C41.8535 126.098 48.4185 121.255 53.9921 114.691C54.528 114.072 55.0371 113.426 55.5462 112.781C61.7629 115.417 68.569 119.184 75.3216 123.972C76.0451 124.484 76.7686 124.995 77.4653 125.533C74.5177 136.24 76.0987 146.194 82.6637 151.79C87.7817 156.175 95.0166 157.117 102.734 155.153C103.43 157.951 103.243 160.318 102.01 162.094V162.067ZM114.738 126.663C112.997 128.707 111.175 130.591 109.299 132.259C104.288 125.371 97.4282 118.404 89.1483 112.054C90.1933 110.575 91.3187 109.095 92.5514 107.642C94.1859 105.732 95.874 103.984 97.589 102.396C100.778 105.678 104.583 107.589 108.656 107.589C114.792 107.589 120.312 103.284 124.09 96.4238C128.056 102.611 124.251 115.417 114.712 126.663H114.738ZM107.155 95.5898C112.541 92.8188 117.552 92.0117 121.035 93.7066C118.919 96.935 116.266 98.8451 113.372 98.8451C111.094 98.8451 108.977 97.6613 107.155 95.5898ZM124.171 86.6849C118.168 86.0392 111.228 87.761 104.476 91.5275C102.278 87.1154 100.912 81.0622 100.912 74.4171C100.912 71.3502 101.206 68.4447 101.716 65.7275C109.835 63.8174 116.775 60.4545 121.652 56.0962C124.224 60.5621 125.859 67.1264 125.859 74.4171C125.859 78.883 125.242 83.1068 124.171 86.7118V86.6849Z" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
