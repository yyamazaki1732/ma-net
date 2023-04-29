<?php get_header(); ?>
  <main class="l-main">
    <div class="l-bg l-bg--white l-bg--bar">
      <div class="l-bg__inner l-bg__inner--narrow">
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
          <?php if(strstr($_SERVER['REQUEST_URI'], 'blog')) {?>
          <li class="c-breadcrumbs__item">Blog</li>
          <?php } else { ?>
          <li class="c-breadcrumbs__item">
          <a class='c-breadcrumbs__link' href="<?php echo home_url('/category/blog'); ?>">Blog</a>
          </li>
          <?php } ?>
          <?php if(strstr($_SERVER['REQUEST_URI'], 'incorporation')) {?>
          <li class="c-breadcrumbs__item">法人設立</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'human-affairs')) { ?>
          <li class="c-breadcrumbs__item">人事</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'general-affairs')) { ?>
          <li class="c-breadcrumbs__item">会計 / 総務</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'mamagement')) { ?>
          <li class="c-breadcrumbs__item">運営</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'architectures')) { ?>
          <li class="c-breadcrumbs__item">会堂建築</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'legal-affairs')) { ?>
          <li class="c-breadcrumbs__item">法務</li>
          <?php } else if(strstr($_SERVER['REQUEST_URI'], 'others')) { ?>
          <li class="c-breadcrumbs__item">その他</li>
          <?php } ?>
        </ol>
        <div class="p-blog-main">
          <aside class="p-blog-main__cat">
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
              </ul>
            </div>
          </aside>
          <div class="p-blog-main__cont">
            <ul class="l-blog-list">
            <?php
	            if (have_posts()) : while (have_posts()) : the_post();
              $cat_info = get_the_category();
              $cat_name = $cat_info[0]->name;
	            ?>
              <li class="l-blog-list__item">
                <a href="<?php the_permalink(); ?>" class="l-blog-list__item-link">
                  <div class="l-blog-list__block">
                    <span class="l-blog-list__date"><?php the_time('Y.m.d'); ?></span>
                    <span class="c-tab"><?php echo($cat_name); ?></span>
                  </div>
                  <p class="l-blog-list__title"><?php the_title(); ?></p>
                </a>
              </li>
              <?php endwhile; else: ?>
              <p class="p-blog-main__empty-state">
              <?php if(strstr($_SERVER['REQUEST_URI'], 'incorporation')) {?>
              「法人設立」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'human-affairs')) { ?>
              「人事」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'general-affairs')) { ?>
              「会計 / 総務」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'mamagement')) { ?>
              「運営」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'architectures')) { ?>
              「会堂建築」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'legal-affairs')) { ?>
              「法務」
              <?php } else if(strstr($_SERVER['REQUEST_URI'], 'others')) { ?>
              「その他」
              <?php } ?>
              の投稿は<br class="p-blog-main__newline">ありません。
              </p>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>