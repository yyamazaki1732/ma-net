<?php get_header(); ?>
<main class="l-main">
  <div class="l-bg l-bg--white l-bg--bar">
    <div class="l-bg__inner l-bg__inner--narrow">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
        $cat_info = get_the_category();
        $cat_name = $cat_info[0]->name;
        $cat_slug = $cat_info[0]->slug;
        $cat_id = $cat_info[0]->term_id;
        ?>
      <ol class="c-breadcrumbs">
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
        <li class="c-breadcrumbs__item">
          <a class='c-breadcrumbs__link' href="<?php echo home_url('/category/blog'); ?>">Blog</a>
        </li>
        <li class="c-breadcrumbs__item">
        <a class='c-breadcrumbs__link' href="<?php echo get_category_link($cat_id)?>"><?php echo($cat_name) ?>
        </a>
        </li>
        <li class="c-breadcrumbs__item">
          <?php the_title(); ?>
        </li>
      </ol>
      <section class="p-post-main">
        <aside class="p-post-main__cat">
          <div class="l-cat">
            <div class="l-cat__title">
              カテゴリー
            </div>
            <ul class="l-cat__list">
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/blog'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">一覧</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/incorporation'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">法人設立</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/human-affairs'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">人事</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/general-affairs'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">会計 / 総務</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/mamagement'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">運営</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/architectures'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">会堂建築</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/legal-affairs'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">法務</span></span>
                </a>
              </li>
              <li class="l-cat__item">
                <a href="<?php echo home_url('/category/others'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-inner"><span class="c-tab">その他</span></span>
                </a>
              </li>
              <li class="l-cat__item l-cat__item--secondary">
                <a href="<?php echo home_url('/category/blog'); ?>" class="l-cat__item-link">
                  <span class="l-cat__link-back">他の記事を見る</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <article class="p-post-main__cont">
          <div class="p-post-main__container">
            <h1 class="p-post-main__title">
              <?php the_title(); ?>
            </h1>
            <span class="p-post-main__block">
              <span class="p-post-main__date">
                <?php the_date(); ?>
              </span>
              <span class="c-tab">
                <?php echo($cat_name); ?>
              </span>
            </span>
          </div>
            <?php the_content(); ?>
          <?php
          endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </article>
      </section>
    </div>
  </div>
</main>
<?php get_footer(); ?>