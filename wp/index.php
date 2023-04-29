<?php get_header(); ?>
  <main class="l-main">
  <div class="p-index-opening">
      <svg class="p-index-opening__type" width="144" height="30" viewBox="0 0 146 32" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor">
        <g transform="translate(1, 1)">
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
    </div>
    <div class="p-index-mv">
      <div class="p-index-mv__inner">
        <div class="p-index-mv__block01">
          <h1 class="p-index-mv__catchphrase">
            <span class="c-catchphrase c-catchphrase--primary">知恵と経験に<br>基づく宣教</span>
          </h1>
          <span class="p-index-mv__note">※（仮）スタート。ブログ開始しました。<br class="p-index-mv__note-newline">その他のページは準備中です。</span>
        </div>
        <div class="p-index-mv__block02">
          <h2 class="p-index-mv__catchphrase-en">
            SERVING MINISTRY<br>
            <span>with</span>Administration<br>
            <span>and</span>Management
          </h2>
          <a href="#service" class="c-scroll" aria-label="サービスセクションまでスクロール">
            <span class="c-scroll__txt">Scroll</span>
          </a>
        </div>
          <?php
            $args = array(
            'category_name' => "blog",
            'posts_per_page' => 1,
            );
            $posts = new WP_Query( $args );
            if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post();
          ?>
        <a href="<?php the_permalink(); ?>" class="p-index-mv__block03">
          <div class="p-index-mv__subheading">Blog</div>
          <div class="p-index-mv__box">
            <div class="p-index-mv__date"><?php the_time('Y.m.d'); ?></div>
            <div class="p-index-mv__title"><?php the_title(); ?></div>
          </div>
        </a>
              <?php
              endwhile;
              endif;
              wp_reset_postdata();
              ?>
      </div>
    </div>
    <section class="p-index-service" id="service">
      <div class="l-bg l-bg--blue">
        <div class="l-bg__inner l-bg__inner--narrow">
          <div class="p-index-service__inner01">
            <div class="p-index-service__heading">
              <h1 class="c-heading c-heading--primary">SERVICE</h1>
            </div>
            <h2 class="p-index-service__catchphrase">
              <span class="c-catchphrase c-catchphrase--secondary">6つの宣教領域</span>
            </h2>
            <p class="p-index-service__txt">
            教会や宣教団体が事務管理・財務・税務・法務における課題に直面したとき、どこに（誰に）相談したら良いか分からないという声をよく聞きます。そこで、MA-netでは安定した宣教論・教会論に基づいた各分野の専門家をご紹介し問題解決を図りつつ団体を建て上げていきます。
            </p>
          </div>
        </div>
      </div>
      <div class="l-bg l-bg--white">
        <div class="l-bg__inner l-bg__inner--short">
          <div class="p-index-service__inner02">
            <ul class="p-index-service__list">
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス01</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-inc.svg" alt="法人設立のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">法人設立</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      諸教会における宗教法人格取得を中心としつつ、諸活動においての適切な法人格（一般社団法人、NPO法人、他）取得や法人格未取得団体の運営と事務管理についてのサポートをします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス02</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-hum.svg" alt="人事のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">人事</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      献身者・宣教団体スタッフの待遇は大変厳しいものです。働き人が支えられ、その家族の歩みを守ることは、教会と宣教団体の責任です。<br>その責任を果たすためコンプライアンスを意識しつつ、運営面においても様々なサポートをします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス03</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-gen.svg" alt="会計・総務のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">会計・総務</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      委ねられた献金・寄付金を適切に管理し、会計報告などの実務的サポートをします。<br>収益事業を開始した場合の区分経理、申告・納税、個人の確定申告業務については、税理士がサポートします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス04</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-mgmt.svg" alt="運営のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">運営</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      組織全体の代表者・役員会・理事会の働きの価値を最大に引き出すためには、多くの人の理解と協力を形成する事務局・総務部門の強化が必須です。<br>責任者をサポートする秘書・アシスタント業務から危機管理まで幅広くサポートします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス05</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-arch.svg" alt="会堂建築のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">会堂建築</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      会堂は礼拝の神学に基づき諸教会が建築委員会などの準備を経て、祈りをもって建て上げるものです。<br>その会堂建築のプロセスを、一級建築士がサポートし、不動産の売却、購入などは宅建士がサポートします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="p-index-service__item">
                <h3 class="p-index-service__subheading">サービス06</h3>
                <div class="js-link--l">
                  <div class="p-index-service__item-heading js-accordion-ttl">
                    <img class="p-index-service__item-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-legal.svg" alt="法務のアイコン" width="80"
                      height="80">
                    <h3 class="p-index-service__item-name">法務</h3>
                    <span class="p-index-service__icon-button"></span>
                  </div>
                  <div class="p-index-service__desc-block">
                    <p class="p-index-service__desc">
                      不注意から事故に至るまで充分な危機管理の備えがないため、実際に直面した際、様々な痛みが生じることがあります。<br>法的解決と共にキリスト教的世界観に基づいた和解へのプロセスのために、弁護士がサポートします。
                      <span class="js-link--s"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-arrow.svg" alt="右矢印" width="22" height="12"></span>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </section>
    <section class="l-bg l-bg--blue">
      <div class="l-bg__inner l-bg__inner--narrow">
        <div class="p-index-about">
          <div class="p-index-about__heading">
            <h1 class="c-heading c-heading--primary">ABOUT</h1>
          </div>
          <h2 class="p-index-about__catchphrase">
            <span class="c-catchphrase c-catchphrase--secondary">課題解決と<br>宣教の結実</span>
          </h2>
          <div class="p-index-about__pic-block"><img class="p-index-about__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-about.webp" alt="本と万年筆"
              width="664" height="884"></div>
          <p class="p-index-about__txt">MA-net（ MINISTRY ADMIN NETWORK
            ）は、諸教会・各宣教団体がミニストリーの前進を図るために、教会論及び宣教論に立ったコーディネーターが最初の窓口となり、解決の糸口を見出すと共に成熟したミニストリー展開を支援します。</p>
          <div class="p-index-about__button">
            <a href="<?php echo home_url('/about'); ?>" class="c-button c-button--primary c-button--blue">
              <span class="c-button__txt">
                さらに詳しく
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
    </section>
    <div class="p-index-scripture">
      <div class="p-index-scripture__inner">
        <div class="p-index-scripture__title">Nehemiah 2:17</div>
        <div class="p-index-scripture__txt">Then I said to them, <br> “You see the trouble <br>we are in: Jerusalem lies in ruins,<br> and its gates have been burned with fire.<br> Come, let us rebuild the wall of Jerusalem, <br>and we will no longer be in disgrace.”
        </div>
      </div>
    </div>
    <section class="l-bg l-bg--white">
      <div class="l-bg__inner l-bg__inner--narrow">
        <div class="p-index-blog">
          <h1 class="c-heading c-heading--primary">BLOG</h1>
          <p class="p-index-blog__txt">            日常の活動・歩みの中から考えさせられたことを分ち合います。
          </p>
          <ul class="l-blog-list">
          <?php
                $args = array(
                  'category_name' => "blog",
                  'posts_per_page' => 3
                );
                $posts = new WP_Query( $args );
                if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post();
                $cat_info = get_the_category();
                $cat_name = $cat_info[0]->name;
                $cat_slug = $cat_info[0]->slug;
                // $content = mb_substr(get_the_excerpt(), 0, 77, 'UTF-8');
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
            <?php
              endwhile;
              endif;
              wp_reset_postdata();
              ?>
          </ul>
          <div class="p-index-blog__button">
            <a href="<?php echo home_url('/category/blog'); ?>" class="c-button c-button--primary c-button--white">
              <span class="c-button__txt">
                一覧を見る
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
    </section>
    <div class="l-contact">
      <a href="<?php echo home_url('/contact'); ?>" class="l-contact__link">
        <div class="l-contact__heading">
          <h1 class="c-heading c-heading--secondary">CONTACT</h1>
        </div>
        <!-- <p class="l-contact__txt">お気軽に<br class="l-contact__newline">
          お問い合わせください。</p> -->
      </a>
      <div class="l-contact__color"></div>
      <div class="l-contact__img"></div>
    </div>
  </main>
<?php get_footer(); ?>