<?php get_header(); ?>
  <main class="l-main">
    <div class="l-main__inner">
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
            <li class="c-breadcrumbs__item">Service</li>
          </ol>
          <div class="p-service-mv">
            <h1 class="p-service-mv__catchphrase">
              <span
                class="c-catchphrase c-catchphrase--primary c-catchphrase--right">課題に直面し<br>本質を見極めることが<br>スタート</span>
            </h1>
          </div>
        </div>
      </div>
      <ol class="c-location__list">
        <li class="c-location__item">
          <a href="#service01" class="c-location__link" role="button">法人設立</a>
        </li>
        <li class="c-location__item">
          <a href="#service02" class="c-location__link" role="button">人事</a>
        </li>
        <li class="c-location__item">
          <a href="#service03" class="c-location__link" role="button">会計 / 総務</a>
        </li>
        <li class="c-location__item">
          <a href="#service04" class="c-location__link" role="button">運営</a>
        </li>
        <li class="c-location__item">
          <a href="#service05" class="c-location__link" role="button">会堂建築</a>
        </li>
        <li class="c-location__item">
          <a href="#service06" class="c-location__link" role="button">法務</a>
        </li>
      </ol>
      <section class="l-bg l-bg--white">
        <div class="l-bg__inner  l-bg__inner--short-sub" id="service01">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス01</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-inc.svg" alt="法人設立のアイコン" width="80" height="80">
              <h2 class="l-service__title">法人設立</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">継続と安定の礎を形成するために</h3>
              <p class="l-service__txt">
                諸教会・宣教団体は、使命の熱心さの故に、団体を成熟に導く、組織形成、財務、法務、税務 などの対応が後回しになり、後に大きな 困難、痛み
                が生じてしまうことがあります。問題の本質を見極め、知恵と経験と知識をもっと適切な解決へ共に歩んでくれる「 誰か 」を、どのように探して良いか分からずに悩んでしまっているのが現状ではないでしょうか。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 法人設立</dt>
                  <dd class="l-service__desc">宗教法人設立の準備、 行政窓口との交渉などを サポート。 他法人設立もサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 法人未取得・団体支援</dt>
                  <dd class="l-service__desc">任意団体の運営、不動産 取得に伴う諸問題・運営 をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 行政諸手続・各種申請</dt>
                  <dd class="l-service__desc">非課税申告、規則変更、各種行政手続きや登記 などをサポート。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-inc--blue.svg" alt="法人設立のアイコン" width="80" height="80">
          </div>
        </div>
      </section>
      <section class="l-bg l-bg--blue">
        <div class="l-bg__inner" id="service02">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス02</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-hum.svg" alt="人事のアイコン" width="80" height="80">
              <h2 class="l-service__title">人事</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">献身者・同労者を大切にするために</h3>
              <p class="l-service__txt">
                献身者・宣教団体スタッフの待遇は大変厳しいものです。働き人が支えられ、その家族の歩みを守ることは、教会と宣教団体の責任です。<br
                  class="l-service__newline">その責任を果たすためコンプライアンスを意識しつつ、運営面においても様々なサポートをします。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 社会保険諸手続き</dt>
                  <dd class="l-service__desc">厚生年金・健康保険加入手続き。その他傷病手当などの一時金対応をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 労務一般</dt>
                  <dd class="l-service__desc">就業規則、雇用契約書、給与計算に伴う様々な実務をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 在留資格などの行政手続き</dt>
                  <dd class="l-service__desc">宣教師の在留資格に伴う行政手続きをサポート。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-hum.svg" alt="人事のアイコン" width="80" height="80">
          </div>
        </div>
      </section>
      <section class="l-bg l-bg--white">
        <div class="l-bg__inner" id="service03">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス03</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-gen.svg" alt="会計 / 総務のアイコン" width="80" height="80">
              <h2 class="l-service__title">会計 / 総務</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">公明正大な会計処理を目指して</h3>
              <p class="l-service__txt">
                委ねられた献金・寄付金を適切に管理し、会計報告などの実務的サポートをします。<br
                  class="l-service__newline">収益事業を開始した場合の区分経理、申告・納税、個人の確定申告業務については、税理士がサポートします。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 会計システム導入 / 整備</dt>
                  <dd class="l-service__desc">基本的な会計業務の 整備、会計ソフトの導入 などをサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 確定申告・年末調整</dt>
                  <dd class="l-service__desc">個人の確定申告及び 教会・宣教団体スタッフの年末調整などのサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 収益事業</dt>
                  <dd class="l-service__desc">付随事業収益活動の 区分経理、確定申告、消費税をはじめとする各種税務をサポート。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-gen--blue.svg" alt="会計 / 総務のアイコン" width="80" height="80">
          </div>
        </div>
      </section>
      <section class="l-bg l-bg--blue">
        <div class="l-bg__inner" id="service04">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス04</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-mgmt.svg" alt="運営のアイコン" width="80" height="80">
              <h2 class="l-service__title">運営</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">リーダーシップを支える</h3>
              <p class="l-service__txt">
                組織全体の代表者・役員会・理事会の働きの価値を最大に引き出すためには、多くの人の理解と協力を形成する事務局・総務部門の強化が必須です。責任者をサポートする秘書・アシスタント業務から危機管理まで幅広くサポートします。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 代表者 / 役員 アシスト 秘書業務</dt>
                  <dd class="l-service__desc">代表者の賜物、専門性が最大に発揮できるための秘書業務・秘書研修をご提供。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 総務部門評価</dt>
                  <dd class="l-service__desc">特に団体の理事会運営に必須の事務局機能の強化をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 保険</dt>
                  <dd class="l-service__desc">危機管理の重要性も 踏まえ、中立で適正な 保険をご紹介。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-mgmt.svg" alt="運営のアイコン" width="80" height="80">
          </div>
        </div>
      </section>
      <section class="l-bg l-bg--white">
        <div class="l-bg__inner" id="service05">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス05</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-arch.svg" alt="会堂建築のアイコン" width="80" height="80">
              <h2 class="l-service__title">会堂建築</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">礼拝を豊かにする会堂を目指して</h3>
              <p class="l-service__txt">
                会堂は礼拝の神学に基づき諸教会が建築委員会などの準備を経て、祈りをもって建て上げるものです。その会堂建築のプロセスを、一級建築士がサポートし、不動産の売却、購入などは宅建士がサポートします。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 会堂建設</dt>
                  <dd class="l-service__desc">単なる施工アドバイスだけではなく、建築計画の時点から専門的な立場からサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 増改築</dt>
                  <dd class="l-service__desc">予算・用途に合わせ、より機能的な増改築への道筋をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 不動産売却 / 購入 / 移転</dt>
                  <dd class="l-service__desc">会堂・宣教団体事務所の移転、売却、購入、賃貸などの契約締結を サポート。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-arch--blue.svg" alt="会堂建築のアイコン" width="80" height="80">
          </div>
        </div>
      </section>
      <section class="l-bg l-bg--blue">
        <div class="l-bg__inner" id="service06">
          <div class="l-service">
            <div class="l-service__heading">
              <h1 class="c-heading c-heading--primary">サービス06</h1>
            </div>
            <div class="l-service__title-block">
              <img class="l-service__icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-legal.svg" alt="法務のアイコン" width="80" height="80">
              <h2 class="l-service__title">法務</h2>
            </div>
            <div class="l-service__cont-block">
              <h3 class="l-service__phrase">危機管理から紛争解決まで</h3>
              <p class="l-service__txt">
                不注意から事故に至るまで充分な危機管理の備えがないため、実際に直面した際、様々な痛みが生じることがあります。<br
                  class="l-service__newline">法的解決と共にキリスト教的世界観に基づいた和解へのプロセスのために、弁護士がサポートします。
              </p>
              <h4 class="l-service__subheading">サポート内容</h4>
              <dl class="l-service__list">
                <div class="l-service__item">
                  <dt class="l-service__term">01 争い解決 / 和解</dt>
                  <dd class="l-service__desc">法的視点を押さえつつ、キリスト者としてのふさわしい解決を導きだすことをサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">02 法令順守</dt>
                  <dd class="l-service__desc">不注意の故に法令違反や争いに転じてしまわないように、事前予防をサポート。</dd>
                </div>
                <div class="l-service__item">
                  <dt class="l-service__term">03 事故 / 事件対応</dt>
                  <dd class="l-service__desc">突発的な事故や事件に巻き込まれてしまったときの法的サポート。</dd>
                </div>
              </dl>
            </div>
            <img class="l-service__icon-bg" src="<?php echo get_template_directory_uri(); ?>/images/icon-legal.svg" alt="法務のアイコン" width="80" height="80">
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
    </div>
  </main>
  <?php get_footer(); ?>