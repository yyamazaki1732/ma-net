<?php get_header(); ?>
<main class="l-main">
  <div class="l-bg l-bg--white">
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
        <li class="c-breadcrumbs__item">About</li>
      </ol>
      <div class="p-about-mv">
        <h1 class="p-about-mv__catchphrase"><span class="c-catchphrase c-catchphrase--primary c-catchphrase--right">
            キリスト教的世界観で<br>実務を見つめ、<br class="c-catchphrase__newline">解決への<br>道筋をともに歩む</span>
        </h1>
      </div>
    </div>
  </div>
  <ol class="c-location__list">
    <li class="c-location__item">
      <a href="#vision" class="c-location__link" role="button">ビジョン</a>
    </li>
    <li class="c-location__item">
      <a href="#member" class="c-location__link" role="button">協力者紹介</a>
    </li>
    <li class="c-location__item">
      <a href="#profile" class="c-location__link" role="button">事務所概要</a>
    </li>
  </ol>
  <section class="l-bg l-bg--white">
    <div class="l-bg__inner l-bg__inner--narrow l-bg__inner--short-sub" id="vision">
      <div class="p-about-vision">
        <div class="p-about-vision__heading">
          <h1 class="c-heading c-heading--primary">VISION</h1>
        </div>
        <div class="p-about-vision__catchphrase-block">
          <h2 class="p-about-vision__catchphrase">
            <span class="c-catchphrase c-catchphrase--secondary c-catchphrase--white">遣わされた地で</span><span
              class="c-catchphrase c-catchphrase--secondary c-catchphrase--white">福音に生きる</span>
          </h2>
          <h3 class="p-about-vision__catchphrase-en">
            <span>LIVING OUT</span><span>WHERE WE ARE SENT</span>
          </h3>
        </div>
        <p class="p-about-vision__txt">
          諸教会・宣教団体は、使命の熱心さの故に、団体を成熟に導く、組織形成、財務、法務、税務 などの対応が後回しになり、後に大きな 困難、痛み
          が生じてしまうことがあります。問題の本質を見極め、知恵と経験と知識をもっと適切な解決へ共に歩んでくれる「 誰か 」を、どのように探して良いか分からずに悩んでしまっているのが現状ではないでしょうか。
        </p>
        <p class="p-about-vision__txt">
          MA-netは、諸教会・各宣教団体の<br>より成熟した組織形成を目指し、取り組みます。
        </p>
      </div>
    </div>
  </section>
  <section class="l-bg l-bg--blue">
    <div class="l-bg__inner l-bg__inner--narrow" id="member">
      <div class="p-about-member">
        <div class="p-about-member__heading">
          <h1 class="c-heading c-heading--primary">MEMBER</h1>
        </div>
        <dl class="p-about-member__list">
          <div class="p-about-member__item">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name">大森 謙治<span class="p-about-member__term-occ">行政書士</span></span>
              <a href="https://emitas-office.com/" rel="noopenner noreferrer" target="_blank"
                  class="p-about-member__link">社労士・行政書士事務所<br class="p-about-member__newline">えみたす
                  <img class="p-about-member__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-external-link.svg" alt="外部リンクのアイコン">
                </a>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-member01.jpg"
                alt="大森 謙治" width="240" height="320">
            </dd>
          </div>
          <div class="p-about-member__item">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name">大森 絵美<span class="p-about-member__term-occ">特定社会保険労務士</span></span>
              <a href="https://emitas-office.com/" rel="noopenner noreferrer" target="_blank"
                  class="p-about-member__link">社労士・行政書士事務所<br class="p-about-member__newline">えみたす
                  <img class="p-about-member__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-external-link.svg" alt="外部リンクのアイコン">
                </a>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-member02.jpg"
                alt="大森 絵美" width="240" height="320">
            </dd>
          </div>
          <div class="p-about-member__item p-about-member__item--dummy">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name"><span class="p-about-member__term-occ"></span></span>
              <span class="p-about-member__link"></span>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-dummy.png"
                alt="" width="240" height="320">
            </dd>
          </div>
          <div class="p-about-member__item p-about-member__item--dummy">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name"><span class="p-about-member__term-occ"></span></span>
              <span class="p-about-member__link"></span>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-dummy.png"
                alt="" width="240" height="320">
            </dd>
          </div>
          <div class="p-about-member__item p-about-member__item--dummy">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name"><span class="p-about-member__term-occ"></span></span>
              <span class="p-about-member__link"></span>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-dummy.png"
                alt="" width="240" height="320">
            </dd>
          </div>
          <div class="p-about-member__item p-about-member__item--dummy">
            <dt class="p-about-member__term">
              <span class="p-about-member__term-name"><span class="p-about-member__term-occ"></span></span>
              <span class="p-about-member__link"></span>
            </dt>
            <dd class="p-about-member__desc">
              <img class="p-about-member__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-dummy.png"
                alt="" width="240" height="320">
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </section>
  <section class="l-bg l-bg--white l-bg--bar">
    <div class="l-bg__inner l-bg__inner--narrow" id="profile">
      <div class="p-about-profile">
        <div class="p-about-profile__heading">
          <h1 class="c-heading c-heading--primary">PROFILE</h1>
        </div>
        <h2 class="p-about-profile__subheading">運営委員</h2>
        <dl class="p-about-profile__list">
          <div class="p-about-profile__item">
            <dt class="p-about-profile__term">
              <img class="p-about-profile__pic" src="<?php echo get_template_directory_uri(); ?>/images/pic-profile01.jpg"
                alt="山崎龍一" width="240" height="320">
              代表 山崎龍一
            </dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                1963年生まれ。大学卒業後、会社勤務及び公益法人勤務を経て1993年よりキリスト者学生会(KGK)主事となり、同事務局長、同総主事を歴任。2014年よりお茶の水クリスチャン・センター常務理事。その他、一般財団法人太平洋放送協会理事、学校法人東京キリスト教学園常任理事、聖書宣教会監事、公益財団法人早稲田奉仕園監事を務める。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item p-about-profile__item--dummy">
            <dt class="p-about-profile__term">役員</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                ＊＊＊＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊＊＊＊。＊＊＊、＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item p-about-profile__item--dummy">
            <dt class="p-about-profile__term">役員</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                ＊＊＊＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊＊＊＊。＊＊＊、＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item p-about-profile__item--dummy">
            <dt class="p-about-profile__term">役員</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                ＊＊＊＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊＊＊＊。＊＊＊、＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item p-about-profile__item--dummy">
            <dt class="p-about-profile__term">役員</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                ＊＊＊＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊＊＊＊。＊＊＊、＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item  p-about-profile__item--dummy">
            <dt class="p-about-profile__term">役員</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                ＊＊＊＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊、＊＊＊＊＊＊＊。＊＊＊、＊＊＊＊＊＊＊＊＊。＊＊＊＊、＊＊＊＊。
              </p>
            </dd>
          </div>
          <div class="p-about-profile__item">
            <dt class="p-about-profile__term">住所</dt>
            <dd class="p-about-profile__desc">
              <p class="p-about-profile__txt">
                <a class="p-about-profile__link" href="https://goo.gl/maps/K4rsv8b1LUyAMAXn8" target="_blank"
                  rel=”noopener”>〒101-0062 東京都千代田区神田駿河台
                  2-1 <img src="<?php echo get_template_directory_uri(); ?>/images/icon-current-location.svg
                      " alt="現在地のアイコン" width="16" height="16"></a>
              </p>
            </dd>
          </div>
        </dl>
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