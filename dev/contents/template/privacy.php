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
        <h1><img src="/src/asset/title-privacy.png" alt="個人情報保護方針" /></h1>
      </div>

      <div class="Others__wrapper">
        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">個人情報保護方針</h2>
          <p class="RoundWrapper__text">
            当社は、人材派遣及びシステム開発などの事業に関する業務を行うに当たって、高度情報通信社会における個人情報保護の重要性を認識し、顧客並びに当社従業員(派遣登録者を含む)の個人情報を保護することに関して、事業の内容および規模を考慮した適切な個人情報の取得、利用および提供を定め、個人情報の保護に努めます。このことから、以下に示す方針を実行・維持する為に個人情報保護マネジメントシステムを構築し、運用するとともに、その継続的改善に全社を挙げて取り組むことを宣言します。
          </p>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              目的外利用の禁止
            </h3>
            <p class="Privacy__listText">
              当社は、人材派遣およびシステム回月などの事業に関する業務、並びに従業者の雇用・人事管理上必要な範囲に限定した適切な個人情報の取得、利用および提供を行います。　また特定された利用目的の達成に必要な範囲を超えた個人情報の取り扱い(目的外利用)を行わず、それを実現するための措置を講じます。
            </p>
          </div>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              法令、規範の遵守
            </h3>
            <p class="Privacy__listText">
              当社は、個人情報の取り扱いに関する「法令、国が定める指針その他の規範」を遵守いたします。
            </p>
          </div>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              個人情報の安全対策
            </h3>
            <p class="Privacy__listText">
              当社は、個人情報への不正アクセス、個人情報の漏洩、滅失またはき損の防止および是正に努めます。
            </p>
          </div>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              苦情・相談への対応
            </h3>
            <p class="Privacy__listText">
              当社は、個人情報に関する苦情および相談に、適切かつ迅速に対応いたします。
            </p>
          </div>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              個人情報保護の取り組みの継続的改善
            </h3>
            <p class="Privacy__listText">
              当社は、個人情報保護マネジメントシステムを継続的に改善します。
            </p>
            <div class="Privacy__listText Privacy__listText--right">
              平成18年4月（制定）平成28年10月1日（改訂）<br/>
              ヒューマネテック株式会社　代表取締役　森田　庸一
            </div>
          </div>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              お問い合わせ
            </h3>
            <p class="Privacy__listText">
              当社の個人情報保護方針あるいは当社保有の個人情報に関するお問合せ等は、下記当社「相談窓口担当」までご連絡ください。
            </p>
          </div>
          <div class="RoundWrapper__contents Privacy__info">
            <div class="Privacy__listTitle Privacy__infoTitle FlexBox FlexBox--center">
              <p>ヒューマネテック株式会社</p>
              <p>個人情報相談窓口</p>
              <p>個人情報管理責任者</p>
            </div>
            <div class="Privacy__listText Privacy__listText--spColumn">
              <div class="Privacy__listText--column FlexBox">
                <p>電話：03(3254)1330</p>
                <p class="ml20">FAX：03(3254)1332</p>
                <p class="ml20">メール：security@humanetech.jp</p>
              </div>
              <div class="Privacy__listText--column FlexBox">
                <p>郵送：</p>
                <p>〒101-0041 東京都千代田区神田須田町一丁目18番地 アーバンスクエア神田ビル 10F</p>
              </div>
              <div class="Privacy__listText--column FlexBox">
                <p>受付時間：</p>
                <p>10:00～12:00 13:00～17:00（土・日・祭日・年末年始を除く）</p>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">個人情報の取り扱い（利用目的の公表、開示）について</h2>
          <p class="RoundWrapper__text">
            ヒューマネテック株式会社は、「個人情報保護方針」に基づき、当社が事業の用に供する個人情報を次の通り取扱います。
          </p>
          <div class="RoundWrapper__contents Privacy__list">
            <h3 class="Privacy__listTitle">
              個人情報の利用目的
            </h3>
            <p class="Privacy__listText">
              当社が事業の用に供する個人情報は、次のいずれかに該当する業務の目的で取得し、利用目的の範囲内で適正に取扱います。
            </p>
            <p class="Privacy__listTitle--small">
              応募者の個人情報
            </p>
            <div class="Privacy__listText Privacy__listText--indent">
              <p>・ 採用活動にかかわる、各種情報（セミナー・イベントやホームページの案内等をいう。以下同じ）の提供や連絡等を行うため。</p>
              <p>・ 面接または試験等の採用選考を行うため。</p>
              <p>・ 応募者についての統計、データ分析を行うため。</p>
              <p>・ 応募者の入社後、人材育成や福利厚生その他人事管理に関わる一切の事項を行うため。</p>
            </div>
            <p class="Privacy__listTitle--small">
              お問合せを行った方の個人情報
            </p>
            <div class="Privacy__listText">
              ・ 問合せ内容の報告・連絡のため。
            </div>
            <p class="Privacy__listTitle--small">
              アンケート情報について
            </p>
            <div class="Privacy__listText Privacy__listText--indent">
              <p>・ 当社内でのメディア利用に関する統計に利用するため。</p>
              <p>・ 問合せ内容の確認のため。</p>
            </div>
            <p class="Privacy__listTitle--small">
              人材の派遣先／紹介先／業務発注元／委託先　担当者の個人情報
            </p>
            <div class="Privacy__listText Privacy__listText--indent">
              <p>・ 派遣/紹介の手続き及び通常の営業業務を行うため。</p>
              <p>・ 受注業務・委託業務の推進のため。</p>
            </div>
            <p class="Privacy__listTitle--small">
              従業員、従業員のご家族、退職者の方、役員
            </p>
            <div class="Privacy__listText Privacy__listText--indent">
              <p>・ 業務上の連絡・情報交換、勤怠管理、給与の支払、人員の適正配置、人事評価、教育研修、福利厚生・安全衛生等の労務管理、社員証の作成、その他労働関係法令・税関係法令及び社会福祉関係法令に定められた義務の履行のため。</p>
              <p>・ 社内規程に定められた各種手続の受理、履行及び管理のため。</p>
              <p>・ 健康保険組合、厚生年金基金、社会保険事務所への連絡・提供のため。</p>
            </div>

            <h3 class="Privacy__listTitle">
              個人情報保護の取り組みの継続的改善
            </h3>
            <p class="Privacy__listText">
              当社は業務遂行のため、および次の(1)～(4)を除き、第三者に開示又は提供いたしません。
            </p>
            <div class="Privacy__listText Privacy__listText--indent  Privacy__listText--margin">
              <p>(1) ご本人の同意がある場合</p>
              <p>(2) 法令などで認められた場合</p>
              <p>(3) 人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき</p>
              <p>(4) 公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき</p>
            </div>

            <h3 class="Privacy__listTitle">
              個人情報の開示等に応じる手続き
            </h3>
            <div class="Privacy__listText">
              <p>当社に保有している<b>個人情報の利用目的の通知、個人情報の開示・内容の訂正・追加又は削除・利用の停止・消去および第三者への提供の停止等</b>に誠実に対応いたします。</p>
              <p class="Privacy__listText--margin">手続きは下記相談窓口までご連絡ください。ご請求内容を確認のうえ、書面で対応いたします。 なお受託された業務に関わるご本人又は代理人より直接当社にご請求があった場合は、受託元のご担当者にご連絡の上、対処いたします。</p>
              <p class="Privacy__listText--margin Privacy__listText--indent">※ 開示等の要求を行うご本人様（代理の方）へ いたずら等を防ぐため開示要求（個人情報の利用目的の通知、開示の請求）には、手数料が発生いたしますので予めご了承ください。　手数料は、郵便料金＋簡易書留代金（合計：400円）となります。お
              支払い方法は、申請書送付時に、手数料分の切手を同封してください。なお個人情報の訂正・追加・利用の停止・削除のご
              請求の場合、手数料は不要です。</p>
              <p class="Privacy__listText--margin">個人情報開示等申請書ダウンロードはコチラから。［<a href="#">PDFファイル：65Kバイト</a>］</p>
              <p>※ PDFファイルのダウンロードにはAdobe Readerが必要です。（<a href="#">無償ダウンロードはコチラ</a>）</p>
            </div>

            <h3 class="Privacy__listTitle">
              個人情報の苦情・相談窓口
            </h3>
            <div class="Privacy__listText">
              個人情報の開示等、及び苦情・相談の窓口を次に示します。
            </div>
            <div class="RoundWrapper__contents Privacy__info">
              <div class="Privacy__listTitle Privacy__infoTitle FlexBox FlexBox--center">
                <p>ヒューマネテック株式会社</p>
                <p>個人情報相談窓口</p>
                <p>個人情報管理責任者</p>
              </div>
              <div class="Privacy__listText Privacy__listText--spColumn">
                <div class="Privacy__listText--column FlexBox">
                  <p>電話：03(3254)1330</p>
                  <p class="ml20">FAX：03(3254)1332</p>
                  <p class="ml20">メール：security@humanetech.jp</p>
                </div>
                <div class="Privacy__listText--column FlexBox">
                  <p>郵送：</p>
                  <p>〒101-0041 東京都千代田区神田須田町一丁目18番地 アーバンスクエア神田ビル 10F</p>
                </div>
                <div class="Privacy__listText--column FlexBox">
                  <p>受付時間：</p>
                  <p>10:00～12:00 13:00～17:00（土・日・祭日・年末年始を除く）</p>
                </div>
              </div>
            </div>

            <h3 class="Privacy__listTitle">
              認定個人情報保護団体
            </h3>
            <div class="Privacy__listText">
              当社は、認定個人情報保護団体である「一般財団法人日本情報経済社会推進協会（JIPDEC）」に所属しております。
            </div>

            <div class="Privacy__listText">
              <p class="Privacy__listTitle--small">【認定個人情報保護団体の名称及び、苦情の解決の申出先】</p>
              <p>認定個人情報保護団体の名称：一般財団法人日本情報経済社会推進協会（JIPDEC）</p>
              <p>苦情の解決の申出先：個人情報保護苦情相談室</p>
              <p>住所：〒106-0032　東京都港区六本木１－９－９　六本木ファーストビル12F</p>
              <p>電話：03-5860-7565／0120-700-779</p>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">個人情報保護方針</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('component/footer.html'); ?>
  </div>
</div>
</body>
</html>
