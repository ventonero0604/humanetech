<?php
//画像やCSSのパス
$staticPath = '../../src/dist/';
// $staticPath = '../build/';
?><!DOCTYPE html>
<html lang="ja">
<head>
  <title>HumaneTech</title>
  <?php include ('component/meta.html'); ?>
  <link rel="stylesheet" href="<?php echo $staticPath; ?>css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?php echo $staticPath; ?>js/main.js"></script>
</head>
<body>
<div id="wrapper" class="Page_wrapper">
  <?php include ('component/header.html'); ?>

  <main>
    <section class="Others">
      <div class="Others__main FlexBox FlexBox--center FlexBox--middle">
        <h1><img src="/src/asset/title-sitemap.png" alt="サイトマップ" /></h1>
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <div class="RoundWrapper__contents RoundWrapper__contents--spColumn FlexBox">
            <div class="Sitemap__column Sitemap__column--1st">
              <div class="Sitemap__list Sitemap__list--fixed">
                <a class="Sitemap__listTitle" href="/contents/template/">HOME</a>
                <a class="Sitemap__listLink" href="/contents/template/job/">案件を探す</a>
                <a class="Sitemap__listLink" href="/contents/template/news.php">NEWS</a>
                <a class="Sitemap__listLink" href="/contents/template/contact.php">お問い合わせ</a>
                <a class="Sitemap__listLink" href="/contents/template/privacy.php">個人情報保護方針</a>
              </div>
              <div class="Sitemap__list">
                <a class="Sitemap__listTitle" href="/contents/template/solution/">サービス</a>
                <a class="Sitemap__listLink" href="/contents/template/solution/">人材ソリューション</a>
                <a class="Sitemap__listLink" href="/contents/template/solution/base.php">基盤ソリューション</a>
                <a class="Sitemap__listLink" href="/contents/template/solution/system.php">システムソリューション</a>
              </div>
            </div>
            <div class="Sitemap__column Sitemap__column--2nd">
              <div class="Sitemap__list Sitemap__list--fixed">
                <a class="Sitemap__listTitle" href="/contents/template/engineer_dispatch/">エンジニア派遣</a>
                <a class="Sitemap__listLink" href="/contents/template/engineer_dispatch/">エンジニア専門派遣の強み</a>
                <a class="Sitemap__listLink" href="/contents/template/engineer_dispatch/consulting.php">キャリアコンサルティング</a>
                <a class="Sitemap__listLink" href="/contents/template/engineer_dispatch/about_dispatch.php">当社の派遣について</a>
                <a class="Sitemap__listLink" href="/contents/template/engineer_dispatch/faq.php">よくある質問</a>
              </div>
              <div class="Sitemap__list">
                <a class="Sitemap__listTitle" href="/contents/template/corporate/recruit/future_engineer.php">未来のエンジニア採用</a>
                <a class="Sitemap__listLink" href="/contents/template/corporate/recruit/future_engineer.php">未来のエンジニア採用</a>
                <a class="Sitemap__listLink" href="/contents/template/future_engineer/staff.php">社員紹介</a>
              </div>
            </div>
            <div class="Sitemap__list Sitemap__column Sitemap__column--3rd">
              <a class="Sitemap__listTitle" href="/contents/template/corporate/">企業情報</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/">企業情報</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/philosophy.php">経営理念</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/profile.php">会社概要</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/welfare.php">教育制度・福利厚生</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/recruit/">採用情報</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/recruit/entry_career.php">中途・キャリア採用</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/recruit/entry_engineer_dispatch.php">派遣エントリー</a>
              <a class="Sitemap__listLink" href="/contents/template/corporate/recruit/future_engineer.php">未来のエンジニア採用エントリー</a>
            </div>
          </div>

          <div class="Sitemap__jobInfo RoundWrapper__contents">
            <div class="Sitemap__jobInfoTitle">
              <a class="Sitemap__listTitle" href="/contents/template/job/">案件情報一覧</a>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">その他IT系</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【飯田橋】月額30万～　大手IT企業での営業ポジション募集</a>
                  <a href="/contents/template/job/job_01.php">【中野】PCIDSSに関するセキュリティコンサルサント</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">開発</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【西大井】SharePoint Serverのサイト構築支援</a>
                  <a href="/contents/template/job/job_01.php">【初台】システム開発保守＜VB.NET＊ASP.NET＞</a>
                  <a href="/contents/template/job/job_01.php">【東京】システム開発プロジェクトのソリューションアーキテクト</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">ネットワーク</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【浜松町】月額45万以上！グローバルネットワークの更改対応</a>
                  <a href="/contents/template/job/job_01.php">【浜松町】4月～グローバルネットワークの維持増、運用業務</a>
                  <a href="/contents/template/job/job_01.php">【麹町】小売業でのインフラ基盤要件定義、設計、構築業務</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">サーバ</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【JR神田駅】監視サービス構築プロジェクト！</a>
                  <a href="/contents/template/job/job_01.php">【月額60万円も可能】流通向けLinuxサーバの設計構築</a>
                  <a href="/contents/template/job/job_01.php">【天王洲アイル】未経験OK　クラウドエンジニア　3名募集</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">運用保守</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【JR神田駅】システム運用保守のSE業務！</a>
                  <a href="/contents/template/job/job_01.php">【横浜ベイクォーター】二次受け運用サポート業務／サブリーダー</a>
                  <a href="/contents/template/job/job_01.php">【横浜】Webセキュリティ・アクセス管理システムの運用業務</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">サポート</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【東京】インフラ部署での内勤業務（議事録・資料作成メイン）</a>
                  <a href="/contents/template/job/job_01.php">【浜松町】4月～職種未経験OK！セキュリティエンジニア募集！</a>
                  <a href="/contents/template/job/job_01.php">【天王洲アイル】4月～セキュリティ製品のテクニカルサポート！</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoItem">
              <div class="Sitemap__jobInfoItemWrapper FlexBox">
                <a class="Sitemap__jobInfoTitleText" href="/contents/template/job/index02.php"><span class="Sitemap__listTitle">IT事務・翻訳系</span></a>
                <div>
                  <a href="/contents/template/job/job_01.php">【六本木】外資系マーケティング業務＜MAツール経験者求む！＞</a>
                  <a href="/contents/template/job/job_01.php">【六本木】大手外資ITメーカー、デジタルマーケ担当、BtoC</a>
                </div>
              </div>
            </div>
            <div class="Sitemap__jobInfoTitle">
              <a class="Sitemap__listTitle" href="#">読み物</a>
            </div>
            <p class="RoundWrapper__text">
              COMING SOON
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">サイトマップ</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
