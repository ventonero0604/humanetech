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
    <section class="Solution">
      <div class="Solution__main Solution__main--system FlexBox FlexBox--center">
        <div class="Solution__mainWrapper Solution__mainWrapper--system FlexBox FlexBox--column FlexBox--center">
          <div><img src="/src/asset/solution/ico-system.png" alt="SYSTEM SOLUTION" /></div>
          <h1 class="Solution__mainTitle Solution__mainTitle--system">
            システムソリューション
          </h1>
          <h2 class="Solution__titleText">
            新しい時代を見据えた<br/>
            IT戦略のお手伝いをします。
          </h2>
        </div>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--3items">
          <li class="LocalNavi__listItem--small"><a class="LocalNavi__listLink" href="./">人材ソリューション</a></li>
          <li class="LocalNavi__listItem--small"><a class="LocalNavi__listLink" href="./base.php">基盤ソリューション</a></li>
          <li class="LocalNavi__listItem--small"><p class="LocalNavi__listLink is-current">システムソリューション</p></li>
        </ul>
      </div>

      <div class="Solution__lead Solution__lead--system">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Solution__leadTitle"><img src="/src/asset/solution/lead-system.png" alt="新しい時代を見据えたIT戦略のお手伝いをします。" /></h2>
          <p class="Solution__leadText">
            新時代に向けてビジネス戦略に必要なビジネスモデル・システム構築に関するコンサルティング、調査・分析、設計、開発、導入、運用保守のシステムソリューションサービスを提供します。
          </p>
          <div class="Solution__leadImage"><img src="/src/asset/solution/text-system.png" alt="SYSTEM SOLUTION" /></div>
        </div>
      </div>

      <div class="Solution__person FlexBox FlexBox--center">
        <div class="Solution__personItem FlexBox">
          <div class="Solution__personTextWrapper">
            <img src="/src/asset/solution/title-system-engineer.png" alt="エンジニア紹介" />
            <p class="Solution__personJob">システムエンジニア　2006年入社</p>
            <p class="Solution__personName"><b>田中 裕樹</b>HIROKI TANAKA</p>
            <p class="Solution__personLead Solution__personLead--system">フルスタックエンジニアを目指して</p>
            <p class="Solution__personText">
              システムに関するコンサルティングやシステム開発の上流から下流まで、時にコーディングもこなす自称なんでも屋です。プロジェクトにおける問題となりそうな点の勘所は、 多くのプロジェクトで成功と失敗を経験してきたからこそ養えたとものと自負しております。またお客様に寄り添うことを常に意識してコンサルティングしております。
            </p>
          </div>
          <img src="/src/asset/solution/img-system-person.png" alt="ENGINEER PRIDE" />
        </div>
      </div>

      <div class="Solution__contents">
        <div class="System__wrapper">
          <div class="System__header FlexBox FlexBox--center FlexBox--middle">
            <img src="/src/asset/solution/ico-system1.png" />
            <div class="System__headerTextWrapper">
              <h3 class="System__headerTitle">
                システムコンサルティングサービス
              </h3>
              <p class="System__headerText">
                デジタル・トランスフォーメーション（DX）の実現に向けて、現状のビジネスモデル分析・課題抽出の整理及び新ビジネスモデルの立案から実行までを支援します。
              </p>
            </div>
          </div>
          <div class="System__body">
            <div class="System__list RoundWrapper__contents">
              <div class="RoundWrapper__title">
                サービス内容
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  DX支援サービス
                </div>
                <div class="System__listText">
                  デジタイゼーション（システムによる業務効率化）・デジタライゼーション（プロセスを含めた高付加価値への改善）さらにデジタルトランスフォーメーション（デジタイゼーション及びデジタライゼーションを活用したイノベーション）を実現を支援します。事業に力を入れています。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  RFI/RFP作成支援サービス
                </div>
                <div class="System__listText">
                  情報提供依頼書や提案依頼書の作成を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  システム可視化サービス
                </div>
                <div class="System__listText">
                  膨大となったソフトウェア資産（ソースコードなど）を解析ツールを利用してシステムの実態を可視化します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  アジャイル開発導入サービス
                </div>
                <div class="System__listText">
                  変化するビジネスに対応できる開発プロセスであるアジャイル開発手法の導入を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  Webコンテンツ分析サービス
                </div>
                <div class="System__listText">
                  一般的なコンテンツ分析ツールでは収集できない精密なデータを収集するしくみを利用しマーケティング戦略を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  スクラム支援サービス
                </div>
                <div class="System__listText">
                  アジャイル開発プロセスの一つであるスクラム開発の導入を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  オフショア開発支援サービス
                </div>
                <div class="System__listText">
                  オフショア開発先のご提案やシステム開発のブリッジ要員などを支援します。
                </div>
              </div>
            </div>
        
            <div class="System__list RoundWrapper__contents">
              <div class="RoundWrapper__title">
                コンサルティング実績
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  公共系アプリケーション<br />
                  ソフト資産分析
                </div>
                <div class="System__listText">
                  <p>・現状システムの概要アーキテクチャの把握</p>
                  <p>・ドキュメントと実装の一致性チェック</p>
                  <p>・RFP用添付資料の作成</p>
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  大手金融機関ソフト資産分析
                </div>
                <div class="System__listText">
                  ・ソフトウェア全体構造の可視化
                  ・標準コストの把握
                  ・保守作業効率阻害要因の把握
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  業務パッケージソフトウェア<br/>
                  資産分析
                </div>
                <div class="System__listText">
                  ・案件別の保守コスト把握
                  ・案件別保守コスト算定の指標づくり
                  ・保守プロセスの改善提案
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="System__wrapper">
          <div class="System__header FlexBox FlexBox--center FlexBox--middle">
            <img src="/src/asset/solution/ico-system2.png" />
            <div class="System__headerTextWrapper">
              <h3 class="System__headerTitle">
                プロジェクトマネジメントサービス
              </h3>
              <p class="System__headerText">
                プロジェクトを成功させるために必要なスキルをもった人材によるプロジェクト実行を支援します。<br/>
                また、アジャイル開発をするためのスクラム（アジャイル開発手法）をスクラムマスターを中心に支援します。
              </p>
            </div>
          </div>
          <div class="System__body">
            <div class="System__list RoundWrapper__contents">
              <div class="RoundWrapper__title">
                サービス内容
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  PM支援サービス
                </div>
                <div class="System__listText">
                  プロジェクトマネージャの業務を代行したり業務のサポートを支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  PMO支援サービス
                </div>
                <div class="System__listText">
                  組織内におけるプロジェクトマネジメントの支援します。
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="System__wrapper">
          <div class="System__header FlexBox FlexBox--center FlexBox--middle">
            <img src="/src/asset/solution/ico-system3.png" />
            <div class="System__headerTextWrapper">
              <h3 class="System__headerTitle">
                クラウドインテグレーションサービス
              </h3>
              <p class="System__headerText">
                オンプレミス上のシステムをAWSへ移行する支援を行います。<br/>
                クラウド上でのアプリケーション開発などを支援します。
              </p>
            </div>
          </div>
          <div class="System__body">
            <div class="System__list RoundWrapper__contents">
              <div class="RoundWrapper__title">
                サービス内容
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  AWS移行サービス
                </div>
                <div class="System__listText">
                  オンプレミスで稼動しているシステムをAmazon Web Services（AWS）のクラウドへ移行するために必要な作業を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  AP開発サービス
                </div>
                <div class="System__listText">
                  アプリケーション開発に関する企画・分析・設計・開発・導入・運用・保守を支援します。
                </div>
              </div>
              <div class="System__listItem FlexBox">
                <div class="System__listTitle FlexBox__item--fill">
                  プロトタイプ開発サービス
                </div>
                <div class="System__listText">
                  新規アプリケーション開発における技術的課題などを発見するための目的であるプロトタイプ開発の作業を支援します。
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="Solution__contactWrapper">
          <p>お問い合わせはこちら</p>
          <p class="Solution__contactTitle">アウトソーシング事業部</p>
          <p class="Solution__contactText">一般派遣免許 （派）13-301980</p>
          <p class="Solution__contactImage"><img src="/src/asset/solution/img-tel.png" alt="03-3254-1330" /></p>
          <p class="Solution__contactText">受付時間　9:30〜18:00（土・日・祝及び弊社休業日を除く）</p>
        </div>

        <div class="Solution__bottomBnr FlexBox FlexBox--center">
          <a class="Solution__bottomBnrItem Solution__bottomBnrItem--base" href="./base.php">
            <img src="/src/asset/solution/bnr-img-base.png" class="Solution__bottomBnrImage" />
            <img src="/src/asset/solution/bnr-text-base.png" class="Solution__bottomBnrTitle" alt="基盤ソリューション" />
          </a>
          <a class="Solution__bottomBnrItem Solution__bottomBnrItem--human" href="./">
            <img src="/src/asset/solution/bnr-img-human.png" class="Solution__bottomBnrImage" />
            <img src="/src/asset/solution/bnr-text-human.png" class="Solution__bottomBnrTitle" alt="人材ソリューション" />
          </a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <p class="BreadCrumb__item">システムソリューション</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
