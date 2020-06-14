<?php
//画像やCSSのパス
$staticPath = '../../../src/dist/';
// $staticPath = '../build/';
?><!DOCTYPE html>
<html lang="ja">
<head>
  <title>HumaneTech</title>
  <?php include ('../component/meta.html'); ?>
  <link rel="stylesheet" href="<?php echo $staticPath; ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo $staticPath; ?>js/main.js"></script>
</head>
<body>
<div id="wrapper" class="Page_wrapper">
  <?php include ('../component/header.html'); ?>

  <main>
    <section class="Dispatch">
      <div class="Dispatch__main">
        <h1 class="Dispatch__mainTitle FlexBox FlexBox--center FlexBox--middle">
          <div class="Dispatch__mainSeparateTitle">
            <div><img class="is-pc" src="/src/asset/engineer_dispatch/title.png" alt="ENGINEER PRIDE" /></div>
            <div><img class="is-sp" src="/src/asset/engineer_dispatch/title-sp.png" alt="ENGINEER PRIDE" /></div>
          </div>
          <div class="Dispatch__mainBadge">
            <div><img src="/src/asset/engineer_dispatch/img-main-badge.png" /></div>
          </div>
        </h1>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--dispatch">
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">エンジニア専門派遣の強み</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./consulting.php">キャリアコンサルティング</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./about_dispatch.php">当社の派遣について</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a></li>
        </ul>
      </div>

      <div class="Dispatch__lead">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Dispatch__leadTitle">
            <img class="is-pc" src="/src/asset/engineer_dispatch/text-lead.png" alt="Humanetechだからスペシャリストとして活躍できる場所がある。エンジニアとして更なる高みを目指す環境がある。" />
            <img class="is-sp" src="/src/asset/engineer_dispatch/text-lead-sp.png" alt="Humanetechだからスペシャリストとして活躍できる場所がある。エンジニアとして更なる高みを目指す環境がある。" />
          </h2>
          <p class="Dispatch__leadText">
            ヒューマネテックは、2005年の設立以来、 IT専門の派遣会社としてエンジニアのスペシャリストを派遣することで地道に実績を積み重ねてまいりました。市場のグローバル化が進む中、スタッフの中には世界進出している企業様のネットワークの提案・設計・構築の全てを任せられ、自ら提案・設計したシステムの導入を構築するため、英国まで赴くような人材も数多く存在します。エンジニアとしてやりがいを感じられる仕事に挑戦してみませんか。
          </p>
          <div class="Dispatch__leadImage is-pc"><img src="/src/asset/engineer_dispatch/text-pride.png" alt="ENGINEER PRIDE" /></div>
          <div class="Dispatch__leadImage is-sp"><img src="/src/asset/engineer_dispatch/text-pride-sp.png" alt="ENGINEER PRIDE" /></div>
        </div>
      </div>

      <div class="Dispatch__contents">
        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            直案件が90%以上、クライアントは国内大手優良企業や有名外資系企業
          </div>
          <div class="RoundWrapper__text">
            ヒューマネテックが有する派遣先は、国内大手企業やグローバル展開する外資系企業など、多数。最先端の技術フィールドであなたのスキルを活かしてみませんか？エンジニアとして更なる高みを目指し、エンジニアとして誇りをもてる優良プロジェクトをご紹介します。
          </div>
          <div class="Dispatch__logoWrapper FlexBox FlexBox--center">
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-bnr.png" alt="ロゴ" /></div>
          </div>
          <div class="FlexBox FlexBox--center">
            <div class="Button">
              <a class="button button--navy" href="../corporate/profile.php#client">取引先企業</a>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            スキルを活かせる幅広いエンジニア職種
          </div>
          <div class="RoundWrapper__text">
            職種は、インフラ50%、開発系30%。金融、自動車、家電、医療分野など様々な業界のプロジェクトに加わっていただきます。プリセールス・企画・調査分析、基本設計、運用保守管理など、ご自身が今までに身につけたスキルや得意分野を活かして、スペシャリストとして活躍していただく場所をご提供します。
          </div>
          <div class="Dispatch__jobWrapper FlexBox RoundWrapper__contents">
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-consultunt.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                ITコンサルタント
              </p>
            </div>
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-pm.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                銀行、証券、物流、<br/>
                各業務に特化した<br/>
                PM、PL
              </p>
            </div>
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-dev.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                UNIX, Linux,<br/>
                Windows基盤<br/>
                （ネットワーク/サーバ）<br/>
                設計構築運用保守管理
              </p>
            </div>
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-engineer.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                Java, VB, .Net,<br/>
                DB設計<br/>
                (Oracle, SQLserver)<br/>
                開発エンジニア
              </p>
            </div>
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-data.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                データサイエンティスト/<br/>
                データアナリスト
              </p>
            </div>
            <div class="Dispatch__jobItem FlexBox FlexBox--middle">
              <img src="/src/asset/engineer_dispatch/img-bilingual.png" alt="CONSULTUNT" />
              <p class="Dispatch__jobItemText">
                バイリンガルSE
              </p>
            </div>
          </div>
          <div class="FlexBox FlexBox--center">
            <div class="Button">
              <a class="button button--navy" href="../job/">お仕事を探す</a>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            経験豊富なコンサルタントがあなたのキャリア設計をお手伝い。
          </div>
          <div class="Dispatch__personImage FlexBox">
            <div><img src="/src/asset/engineer_dispatch/img-person1.png" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-person2.png" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-person3.png" /></div>
            <div><img src="/src/asset/engineer_dispatch/img-person4.png" /></div>
          </div>
          <div class="RoundWrapper__text">
            短い文章に変更
          </div>
          <div class="FlexBox FlexBox--center">
            <div class="Button">
              <a class="button button--navy" href="./consulting.php">キャリアコンサルティング</a>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            充実した教育制度&福利厚生で、あなたのスキルアップをバックアップ
          </div>
          <div class="Dispatch__backupItems FlexBox FlexBox--center">
            <div class="Dispatch__backupItem">
              <img src="/src/asset/engineer_dispatch/img1.png" />
              <p class="Dispatch__backupItemTitle">
                キャリアを伸ばす各種支援制度
              </p>
              <ul>
                <li>・キャリアアップ教育研修制度</li>
                <li>・資格支援制度</li>
                <li>・受験・自習支援制度</li>
                <li>・機器の貸出</li>
                <li>・技術書類の貸出</li>
              </ul>
            </div>
            <div class="Dispatch__backupItem">
              <img src="/src/asset/engineer_dispatch/img2.png" />
              <p class="Dispatch__backupItemTitle">
                安心して働ける福利厚生制度
              </p>
              <ul>
                <li>・社会保障制度</li>
                <li>・通勤費補助</li>
                <li>・健康保険組合</li>
                <li>・忘年会・交流会・運動会</li>
              </ul>
            </div>
          </div>
          <div class="FlexBox FlexBox--center">
            <div class="Button">
              <a class="button button--navy" href="../corporate/welfare.php">教育制度・福利厚生</a>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <div class="RoundWrapper__title">
            エントリーから就業までの流れ
          </div>

          <div class="Dispatch__leadFlowWrapper">
            <img class="Dispatch__leadFlow" src="/src/asset/engineer_dispatch/img-flow.png" />
          </div>
          <p class="Dispatch__leadFlowSmall">
            ※横へスクロールしてください。
          </p>

          <div class="Dispatch__flowItemText FlexBox FlexBox--middle RoundWrapper__contents">
            <p>
              職種は、インフラ50%、開発系30%。自動車、家電、医療分野など様々な業界のプロジェクトに加わっていただきます。企画・調査分析、基本設計、運用保守管理など、エンジニアの身につけたスキルや得意分野を活かして、スペシャリストとして活躍していただけます。
            </p>
            <img src="/src/asset/engineer_dispatch/img-badge.png" alt="来社不要" />
          </div>

          <div class="Dispatch__btnWrapper FlexBox FlexBox--center">
            <div class="Button">
              <a class="button button--navy" href="../job/">お仕事を探す</a>
            </div>
            <div class="Button">
              <a class="button button--navy" href="../corporate/recruit/entry_engineer_dispatch.php">派遣登録エントリー</a>
            </div>
          </div>
        </div>

        <div class="Dispatch__bnrWrapper FlexBox FlexBox--center">
          <a href="./about_dispatch.php"><img src="/src/asset/engineer_dispatch/bnr-about.png" alt="当社の派遣について" /></a>
          <a href="./faq.php"><img src="/src/asset/engineer_dispatch/bnr-faq.png" alt="よくある質問" /></a>
          <a href="../corporate/recruit/entry_engineer_dispatch.php"><img src="/src/asset/engineer_dispatch/bnr-entry.png" alt="エンジニア派遣エントリー" /></a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">エンジニア専門派遣の強み</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
