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
      <div class="Dispatch__main Dispatch__main--faq">
        <h1 class="Dispatch__mainTitle Dispatch__mainTitle--faq FlexBox FlexBox--middle"><img
            src="/src/asset/engineer_dispatch/title-faq.png" alt="よくある質問" /></h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">エンジニア専門派遣の強み</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./consulting.php">キャリアコンサルティング</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./about_dispatch.php">当社の派遣について</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">よくある質問</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a></li>
        </ul>
      </div>
  
      <div class="Dispatch__contents">
        <div class="Faq__wrapper">
          <div class="Faq__items FlexBox">
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  弊社の派遣について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  正社員派遣を中心に、有期雇用型の派遣サービスにも対応しています。詳しくは「当社の派遣について」をご覧ください。
                </p>
              </div>
            </div>
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  弊社の派遣先について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  中小企業から大手SI企業や外資系企業まであります。詳しくは会社概要の主要取引先をご覧ください。
                </p>
              </div>
            </div>
          </div>
          <div class="Faq__items FlexBox">
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  個人情報の取り扱いについて
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  ヒューマネテック株式会社は、Ｐマークを取得しております。個人情報保護方針に基づき予めご提示させていただいた目的外での使用を禁止し厳重に個人情報を取り扱っております。詳細に関してはヒューマネテック個人情報保護方針を確認いただくか担当窓口までお問い合わせください。
                </p>
              </div>
            </div>
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  各種保険について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  各種社会保険（健康保険、厚生年金保険、雇用保険、労災保険）に加入しており、皆様の健康と将来の不安解消を支援しております。　年一度の定期健康診断（生活習慣病健診）を無料で実施しております。
                </p>
              </div>
            </div>
          </div>
          <div class="Faq__items FlexBox">
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  銀行について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  振込先の銀行については制限をしておりません。現在ご利用の銀行をそのまま申請していただけます。
                </p>
              </div>
            </div>
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  給料支給日について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  支給日は毎月15日になります。月末締め翌月15日支払いとなりますので、仮に10月に働いていただいた分の給与は11月15日にお支払いいたします。
                </p>
              </div>
            </div>
          </div>
          <div class="Faq__items FlexBox">
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  健康保険組合
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  東京都情報サービス産業健康保険組合に加盟しており、組合が直接経営をしております、健康診断センター、メンタルへルスカウンセリング、運動施設の利用が可能です。また提携の施設がありますので割安の料金で利用が可能です。また自動的に共済組合を利用できますので衣料、医薬、旅行等々福利厚生が充実しております。
                </p>
              </div>
            </div>
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  入社後の教育について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  弊社では、客先常駐のエンジニアが多い為、e-ラーニングを導入して技術教育をしております。また法律上の年8時間を超えて教育を受けることが可能です。また受講は仕事の一環として別途規定により賃金が支払われます。また時流に即した新技術の説明セミナーの開催や、弊社先輩エンジニアによる業務上必要な知識を吸収する為、ハンズオン研修を不定期ですが実施しております。
                </p>
              </div>
            </div>
          </div>
          <div class="Faq__items FlexBox">
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  福利厚生について
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  交通費は上限を2.5万円として本給とは別に支給しております。交通費を本給と分けることにより所得税が節税されます。なお遠方より通勤で上限を超える場合ご相談ください。
                </p>
              </div>
            </div>
            <div class="Faq__item">
              <div class="Faq__itemHeader">
                <p class="Faq__itemTitle">
                  キャリアコンサルティングについて
                </p>
              </div>
              <div class="Faq__itemBody FlexBox">
                <p class="Faq__itemText">
                  経験豊かなコンサルタントが定期的なスキルチェック、キャリア5カ年計画などを策定し、常にエンジニアとしての目標を定めています。また日々の仕事によるストレスカウンセリングの相談も行うなど、サポート体制を整えております。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="Dispatch__bnrWrapper FlexBox FlexBox--center">
          <a href="./"><img src="/src/asset/engineer_dispatch/bnr-about.png" alt="当社の派遣について" /></a>
          <a href="#"><img src="/src/asset/engineer_dispatch/bnr-faq.png" alt="よくある質問" /></a>
          <a href="../corporate/recruit/entry_engineer_dispatch.php"><img src="/src/asset/engineer_dispatch/bnr-entry.png" alt="エンジニア派遣エントリー" /></a>
        </div>
      </div>
    </section>
  </main>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <a class="BreadCrumb__item" href="./">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">よくある質問</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
