<?php get_header(); ?>
<main class="l-main">
  <div class="l-bg l-bg--white l-bg--bar">
    <div class="l-bg__inner">
      <ol class="c-breadcrumbs c-breadcrumbs--narrow">
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
      <p class="p-contact-main__micro">※サービスが開始するまでは、お問合せは承っておりません。</p>
      <?php echo do_shortcode( '[contact-form-7 id="55" title="入力画面"]' ); ?>
    </div>
  </div>
</main>
<script>
  document.addEventListener('wpcf7mailsent', function (event) {
    location = 'https://ma-network.org/contact-finish/';
  }, false);
</script>
<script>
  document.getElementsByClassName('c-button--secondary')[0].disabled = 'true'
</script>
<?php get_footer(); ?>