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
      <div class="Solution__main Solution__main--base FlexBox FlexBox--center">
        <div class="Solution__mainWrapper Solution__mainWrapper--base FlexBox FlexBox--column FlexBox--center">
          <div><img src="/src/asset/solution/ico-base.png" alt="BASE SOLUTION" /></div>
          <h1 class="Solution__mainTitle Solution__mainTitle--base">
            基盤ソリューション
          </h1>
          <h2 class="Solution__titleText">
            導入計画から運用までワンストップで対応
          </h2>
        </div>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list LocalNavi__list--3items">
          <li class="LocalNavi__listItem--small"><a class="LocalNavi__listLink" href="./">人材ソリューション</a></li>
          <li class="LocalNavi__listItem--small"><p class="LocalNavi__listLink is-current">基盤ソリューション</p></li>
          <li class="LocalNavi__listItem--small"><a class="LocalNavi__listLink" href="./system.php">システムソリューション</a></li>
        </ul>
      </div>

      <div class="Solution__lead Solution__lead--base">
        <div class="FlexBox FlexBox--column FlexBox--middle">
          <h2 class="Solution__leadTitle"><img src="/src/asset/solution/lead-base.png" alt="ヒューマネテックなら導入計画から運用までワンストップで対応" /></h2>
          <p class="Solution__leadText">
            法人様向けITインフラ基盤の導入コンサルティング、構築、設計、運用、そして運用改善までをサポートしています。またニーズが高まるAWSやAzureへの移行をご検討中の企業様向けのCloud Integration（クラウドインテグレーション）事業に力を入れています。
          </p>
          <img class="Solution__leadFlow" src="/src/asset/solution/img-flow.png" />
          <div class="Solution__leadImage"><img src="/src/asset/solution/text-base.png" alt="BASE SOLUTION" /></div>
        </div>
      </div>

      <div class="Solution__person FlexBox FlexBox--center">
        <div class="Solution__personItem FlexBox">
          <div class="Solution__personTextWrapper">
            <img src="/src/asset/solution/title-system-engineer.png" alt="エンジニア紹介" />
            <p class="Solution__personJob">ネットワークエンジニア　2009年入社</p>
            <p class="Solution__personName"><b>西本 親永</b>SHINEI NISHIMOTO</p>
            <p class="Solution__personLead">NW分野でITインフラの最適化をご提案</p>
            <p class="Solution__personText">
              データセンターネットワークの設計・構築に携わり、セキュリティ製品導入やISMS取得などに携わってきました。分野としてはNW・情報セキュリティを得意としています。豊富な経験を活かし、ITインフラの最適化をご提案いたします。
            </p>
          </div>
          <img src="/src/asset/solution/img-base-person.png" alt="ENGINEER PRIDE" />
        </div>
      </div>

      <div class="Solution__contents">
        <div class="RoundWrapper">
          <div class="RoundWrapper__title">サービス内容</div>
          <div class="Solution__baseList RoundWrapper__contents">
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base1.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    クラウド導入支援サービス
                  </div>
                  <div class="Solution__baseItemText">
                    法人様向けITインフラ基盤の導入コンサルティング、構築、設計、運用、そして運用改善までをサポートしています。またニーズが高まるAWSやAzureへの移行をご検討中の企業様向けのCloud
                    Integration（クラウドインテグレーション）事業に力を入れています。
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base2.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    インフラ基盤構築
                  </div>
                  <div class="Solution__baseItemText">
                    仮想化基盤、サーバ、ネットワーク、ストレージ、OS、ミドルウェアまでインフラ基盤全般の設計、構築、運用保守まで最適なプランでご提案いたします。ヒューマネテックでは、多様な現場で培われた経験とノウハウを持つ専門技術者を擁しており、お客様ニーズに最適化したシステム導入サービスをご提供いたします。仮想基盤システムの構築で多数の実績があり、クラウドサービス、ハイブリッド、クラスタ、バックアップシステムの選定など、お客様要件に最適な環境構築を実施します。ヒアリング、環境調査、現状分析から、設計・構築、データ移行、テスト、運用監視、保守まで一貫してご提供いたします。
                  </div>
                  <div class="Solution__baseItemInfo">
                    <p class="Solution__baseItemInfoTitle">
                      導入事例
                    </p>
                    <p class="Solution__baseItemInfoText">
                      生命保険会社のインフラ設計構築、外資系製造業でのインフラ設計構築、データセンター内サーバ類設計構築、国際ネットワークの構築 等多数
                    </p> 
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base3.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    プロジェクト業務請負
                  </div>
                  <div class="Solution__baseItemText">
                    「常駐型」「持ち帰り型」双方に対応します。経験豊富なエンジニアによるチームを編成、指揮命令や教育、指導を弊社で実施します。
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base4.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    ITシステムコンサルティング
                  </div>
                  <div class="Solution__baseItemText">
                    経営および情報システムに深い知識と経験を持つコンサルタントが、最適なソリューションをアドバイスします。経営戦略や経営環境を分析し、情報戦略を推進するために必要とされるITシステムのRFI/グランドデザイン策定を支援します。
                  </div>
                </div>
              </div>
            </div>
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base5.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    セキュリティ対策支援
                  </div>
                  <div class="Solution__baseItemText">
                    セキュリティ診断によりセキュリティリスクを洗い出し、必要とするセキュリティ対策について、運用、改善、再診断までトータルに支援します。
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base6.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    事業継続・災害対策支援・BCP
                  </div>
                  <div class="Solution__baseItemText">
                    「事業停止による影響範囲の特定、事業継続・復旧の優先順位付け、事業継続計画の策定、トップマネジメントによる社内への浸透、戦略的な活用方法を支援します。
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base7.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    運用支援
                  </div>
                  <div class="Solution__baseItemText">
                    情報システム部門に代わり、ハードウェアやソフトウェアの操作方法、トラブル対応といったエンドユーザ様のお問い合わせに電話や電子メール（オンサイト/オフサイト）でお答えします。
                  </div>
                </div>
              </div>
            </div>
            <div class="Solution__baseListItem">
              <div class="FlexBox">
                <div class="Solution__baseItemImage"><img src="/src/asset/solution/ico-base8.png" /></div>
                <div class="Solution__baseItemTextWrapper">
                  <div class="Solution__baseItemTitle">
                    リモート監視センター
                  </div>
                  <div class="Solution__baseItemText">
                    クラウド、オンプレミス環境を問わず、24時間365日体制でリモート監視・障害、性能監視、作業代行・障害対応を実施します。
                  </div>
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
          <a class="Solution__bottomBnrItem Solution__bottomBnrItem--human" href="./">
            <img src="/src/asset/solution/bnr-img-human.png" class="Solution__bottomBnrImage" />
            <img src="/src/asset/solution/bnr-text-human.png" class="Solution__bottomBnrTitle" alt="人材ソリューション" />
          </a>
          <a class="Solution__bottomBnrItem Solution__bottomBnrItem--system" href="./system.php">
            <img src="/src/asset/solution/bnr-img-system.png" class="Solution__bottomBnrImage" />
            <img src="/src/asset/solution/bnr-text-system.png" class="Solution__bottomBnrTitle" alt="システムソリューション" />
          </a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="#">HOME</a>
        <p class="BreadCrumb__item">人材ソリューション</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
