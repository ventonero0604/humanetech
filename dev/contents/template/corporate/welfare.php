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
    <section class="Corporate">
      <div class="Corporate__main Corporate__main--welfare FlexBox FlexBox--middle">
        <h1 class="Corporate__title"><img src="/src/asset/corporate/title-welfare.png" alt="教育制度・福利厚生" /></h1>
      </div>

      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">企業情報</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./philosophy.php">企業理念</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php">会社概要</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php#access">アクセス</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">教育制度・福利厚生</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">採用情報</a></li>
        </ul>
      </div>

      <div class="Corporate__container Corporate__container--text">
        <div class="Welfare__leadTitle FlexBox FlexBox--center">
          <img src="/src/asset/corporate/lead-education.png" alt="教育制度" />
        </div>
        <div class="FlexBox FlexBox--column FlexBox--middle FlexBox--center">
          <div class="Welfare__leadWrapper">
            <img class="Welfare__leadTitleText is-pc" src="/src/asset/corporate/lead-education-text.png"
              alt="充実した教育制度で、あなたのスキルをバックアップします" />
            <img class="Welfare__leadTitleText is-sp" src="/src/asset/corporate/lead-education-text-sp.png"
              alt="充実した教育制度で、あなたのスキルをバックアップします" />
            <p class="Welfare__leadText">
              入社時に一人一人の経験及び技術志向から個別の教育プログラム（カリキュラム）を作成し、1年目に受講をしていただきます。
              2年目、3年目には習得した技術により新しい仕事へのチャレンジが可能です。弊社の資格取得支援制度により今まで多くのエンジニアが個人資格を取得し、独り立ちしています。
            </p>
          </div>
          <img class="Welfare__leadBottomText" src="/src/asset/corporate/text-education.png" alt="EDUCATION" />
        </div>
      </div>

      <div class="Corporate__wrapper">
        <div class="RoundWrapper">
          <h3 class="RoundWrapper__title">
            キャリアアップ教育研修制度
          </h3>
          <div class="RoundWrapper__text">
            e-ラーニングの講座数は大手他社をも凌駕していることはもちろん、社内での座学や実機を使った教育体制を整えています。個別指導会や定期開催の技術トレーニングにぜひご参加ください。
          </div>
          <div class="RoundWrapper__contents Welfare__item">
            <div class="FlexBox">
              <p class="Welfare__itemTitle">
                技術者カリキュラム
              </p>
              <div class="Welfare__itemTextWrapper">
                <p class="Welfare__itemBold">
                  インフラ担当エンジニア向け
                </p>
                <p class="Welfare__itemText">
                  弊社エンジニアによる実機トレーニングを月1回開催しています。Windows、Linuxのサーバ構築から最近ではAWSに力を入れて講習会を開いています。 
                </p>
                <p class="Welfare__itemBold">
                  開発エンジニア向け
                </p>
                <p class="Welfare__itemText">
                  忙しく働いているスタッフ向けに自由な時間帯で受講できるようにe-ラーニングシステムにより、技術者向けインフラコース、開発者コースに分かれて受講できます。
                </p>
              </div>
            </div>
          </div>
          <div class="RoundWrapper__contents Welfare__item">
            <div class="FlexBox">
              <p class="Welfare__itemTitle">
                技術者カリキュラム
              </p>
              <div class="Welfare__itemTextWrapper">
                <p class="Welfare__itemText">
                  経験4年～5年目にはマネジメントコースとしてヒアリングやリーダシップ講義を受講できます。
                </p>
              </div>
            </div>
          </div>
          <div class="RoundWrapper__contents Welfare__item">
            <div class="FlexBox">
              <p class="Welfare__itemTitle">
                一般教養コース
              </p>
              <div class="Welfare__itemTextWrapper">
                <p class="Welfare__itemText">
                  職種変更希望の方に、英会話、簿記、情報管理（セキュリティ）や、更にはOfficeの高度な使用方法を開設している講義を受講できます。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <h3 class="RoundWrapper__title">
            資格取得支援制度
          </h3>
          <div class="RoundWrapper__text">
            事前に申請すれば、受験料一部負担（半額まで）や外部スクール授業料の一部負担をします。
          </div>
          <div class="RoundWrapper__contents Welfare__item">
            <div class="FlexBox">
              <p class="Welfare__itemTitle">
                対象資格
              </p>
              <div class="Welfare__itemTextWrapper">
                <p class="Welfare__itemText">
                  Cisco社資格 / Microsoft社資格 / Linux資格 / Oracle社資格
                </p>
              </div>
            </div>
          </div>
          <div class="RoundWrapper__contents Welfare__item">
            <div class="FlexBox">
              <p class="Welfare__itemTitle">
                過去実績のスクール例
              </p>
              <div class="Welfare__itemTextWrapper">
                <div class="Welfare__itemText">
                  <p>IT系資格取得のAcademyケンスクール（<a href="http://www.kenschool.jp">http://www.kenschool.jp</a>）</p>
                  <p>個別指導　CatalystL2,３スイッチを使用した研修</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  受験・自習支援制度
                </div>
                <p>
                  弊社では以下の機器、書籍の貸出をしています。皆さんのご希望、ご要望に応じて随時増やしています。今後も機器、書籍ともに更新してゆきますので、お気軽にお知らせください。
                </p>
                <div class="Welfare__itemBlockTextSmall">
                  <p>【注意】</p>
                  <p>※資格取得が前提のお仕事の場合、特別コースを設定する場合があります。</p>
                  <p>※ご利用の方は、弊社での契約予定、契約中の方に限らせて頂きます。</p>
                  <p>※貸し出し中の場合は、ご容赦願います。大型機器についての配送手配はご自身でお願いします。</p>
                </div>
              </div>
              <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img1.png" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <h3 class="RoundWrapper__title">機器の貸出</h3>
          <div class="RoundWrapper__contents FlexBox  Welfare__list">
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">Cisco機器</p>
              <div class="Welfare__listText">
                <p>・L3　WS-C3560-24TSE</p>
                <p>・ルーター　Cisco2801<br/>※各１セット</p>
                <p>・L3　WS-C3550-24-EMI</p>
                <p>・L2　Catalyst2950-24</p>
                <p>・ルーター　Cisco2611XM</p>
              </div>
            </div>
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">開発機器の貸出し</p>
              <div class="Welfare__listText">
                <p>・MSDN Windows</p>
                <p>・Visual Studio</p>
                <p>・MS Expression</p>
                <p>・Photoshop</p>
                <p>・Illustrator</p>
              </div>
              <p class="Welfare__listTitle">PC / ServerのHW</p>
              <div class="Welfare__listText">
                <p>・PC（Windows）</p>
                <p>・IAサーバ</p>
              </div>
            </div>
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">開発環境の貸出し</p>
              <div class="Welfare__listText">
                <p>・NetScreen　5XT,<br/>5GT※2セット
              </div>
              <p class="Welfare__listTitle">ロードバランサー</p>
              <div class="Welfare__listText">
                <p>・F5社　BIG-IP 2400<br/>※1セット</p>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper">
          <h3 class="RoundWrapper__title">技術書籍の貸出</h3>
          <div class="RoundWrapper__contents FlexBox  Welfare__list">
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">サーバ系</p>
              <div class="Welfare__listText">
                <p>・WindowsServerマスターガイド</p>
                <p>・WindowsServer2003SP1</p>
                <p>・よく分かるWindowsServer2003</p>
                <p>・ひと目で分かる</p>
                <p>・WindowsServer2008</p>
                <p>・WindowsServer2008<br/>ネットワーク構築ガイド</p>
                <p>・LPIC1試験対策</p>
                <p>・LPICレベル１教科書</p>
                <p>・LINUX標準資格教科書<br/>※２セット</p>
              </div>
              <p class="Welfare__listTitle">データベース系</p>
              <div class="Welfare__listText">
                ・ORACLE MASTER Bronze<br/>DBA１１ｇ教科書
              </div>
            </div>
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">開発環境の貸出し</p>
              <div class="Welfare__listText">
                <p>・マスタリングTCP/IP</p>
                <p>・ネットワーク構築ガイド</p>
                <p>・CCENT/CCNA　ICND</p>
                <p>・CCNA　ICND2</p>
                <p>・CCNA ICND2テキスト</p>
                <p>・CCNP BSC</p>
                <p>・CiscoSWITCH CCNP642－813J教科書</p>
                <p>・ネットワークセキュリティ設計ガイド</p>
              </div>
              <p class="Welfare__listTitle">運用系</p>
              <div class="Welfare__listText">
                <p>・ITILV3ファンデーション</p>
                <p>・ITILの基礎</p>
              </div>
            </div>
            <div class="Welfare__listItems">
              <p class="Welfare__listTitle">開発環境の貸出し</p>
              <div class="Welfare__listText">
                <p>・マスタリングTCP/IP</p>
                <p>・Javaフレームワーク入門</p>
                <p>・WindowsAzure<br/>実践クラウドプログラミング</p>
                <p>・jQueryデザインブック</p>
                <p>・スマートフォンサイト設計入門</p>
                <p>・iPhone/iPad/iPod touch<br/>プログラミングバイブル</p>
                <p>・iOSプログラミング入門</p>
                <p>・Androidアプリ開発</p>
                <p>・Facebookアプリ開発入門教室</p>
                <p>・Facebookページ 制作<br/>パーフェクトガイド</p>
                <p>・Photoshop</p>
                <p>・Illustrator 等々</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="Corporate__container Corporate__container--text">
        <div class="Welfare__leadTitle FlexBox FlexBox--center">
          <img src="/src/asset/corporate/lead-welfare.png" alt="教育制度" />
        </div>
        <div class="FlexBox FlexBox--column FlexBox--middle FlexBox--center">
          <div class="Welfare__leadWrapper">
            <img class="Welfare__leadTitleText is-pc" src="/src/asset/corporate/lead-welfare-text.png"
              alt="充実した教育制度で、あなたのスキルをバックアップします" />
            <img class="Welfare__leadTitleText is-sp" src="/src/asset/corporate/lead-welfare-text-sp.png"
              alt="充実した教育制度で、あなたのスキルをバックアップします" />
            <p class="Welfare__leadText">
              入社時に一人一人の経験及び技術志向から個別の教育プログラム（カリキュラム）を作成し、1年目に受講をしていただきます。
              2年目、3年目には習得した技術により新しい仕事へのチャレンジが可能です。弊社の資格取得支援制度により今まで多くのエンジニアが個人資格を取得し、独り立ちしています。
            </p>
          </div>
          <img class="Welfare__leadBottomText" src="/src/asset/corporate/text-welfare.png" alt="EDUCATION" />
        </div>
      </div>

      <div class="Corporate__wrapper">
        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  社会保険制度
                </div>
                <p>
                  雇用、年金、健康の社会保険完備です。
                  健康診断は毎年一度の受診を励行しています。
                  提携する健診機関での受診や組合直営の健診センターで受診の場合は、交通費も支給しています。
                </p>
              </div>
              <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img2.png" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  通勤費補助
                </div>
                <p>
                  福利厚生として通勤費補助は、全額から限度額まで給与とは別に支給しています。通勤費込みの月額給与を支給する企業が多い中、社員に喜ばれている補助制度といえます。また給与と区分した支給により所得税が軽減されています。
                </p>
              </div>
              <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img3.png" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  健康保険組合
                </div>
                <p>
                  東京都情報産業サービス健康保険組合（TJK）に加盟しています。大手フィットネスクラブの優待会員、格安ゴルフフィー、東京ディズニーランドの入場料2500円…など、全国の有名レジャー施設がありえない金額で利用できる特典満載です。国内約2000軒のホテル・旅館、全国850ヵ所のレジャー施設、各種サービスをご利用できます。通常金額に対して大変安く利用できます。また共済会からの頒布品は、品質に対して非常に安く購入できます。
                </p>
              </div>
              <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img4.png" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  メンタルヘルスケア
                </div>
                <p>
                  ITエンジニアのお仕事には自分では解決できない悩みも多いもの。 あれ？つらいかも？と思った時は、まずは専門家に相談することをお薦めしています。メンタルカウンセラーが心の悩みを解きほぐします。不安になった方も一度ご相談下さい。
                </p>
              </div>
              <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img5.png" /></div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper Welfare__itemBlock">
          <div class="RoundWrapper__contents">
            <div class="FlexBox FlexBox--middle">
              <div class="Welfare__itemBlockText">
                <div class="RoundWrapper__title">
                  忘年会・交流会・運動大会の実施
                </div>
                <p>
                  社員同士での情報交流に定期的に懇親会を催しております。 夏は川辺でBBQを行ったり、ゴルフコンペを開催したり、特に年末恒例の忘年会は色々な方が参加し盛り上がります。
                </p>
              </div>
             <div class="Welfare__itemBlockImage"><img src="/src/asset/corporate/img6.png" /></div>
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
        <a class="BreadCrumb__item" href="./">企業情報</a>
        <p class="BreadCrumb__item">教育制度・福利厚生</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
