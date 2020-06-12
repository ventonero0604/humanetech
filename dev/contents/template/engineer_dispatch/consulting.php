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
      <div class="Dispatch__main Dispatch__main--consulting">
        <h1 class="Dispatch__mainTitle Dispatch__mainTitle--consulting FlexBox FlexBox--middle"><img
            src="/src/asset/engineer_dispatch/title-consulting.png" alt="キャリアコンサルティング" /></h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">エンジニア専門派遣の強み</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">キャリアコンサルティング</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./about_dispatch.php">当社の派遣について</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/entry_engineer_dispatch.php">エントリー</a></li>
        </ul>
      </div>
  
      <div class="Dispatch__contents">
        <div class="RoundWrapper">
          <h2 class="RoundWrapper__title">
            経験豊富なコンサルタントがあなたのキャリア設計をお手伝い。
          </h2>
          <div class="Dispatch__personImage FlexBox">
            <img src="/src/asset/engineer_dispatch/img-person1.png" />
            <img src="/src/asset/engineer_dispatch/img-person2.png" />
            <img src="/src/asset/engineer_dispatch/img-person3.png" />
            <img src="/src/asset/engineer_dispatch/img-person4.png" />
          </div>
          <div class="RoundWrapper__text">
            あなたのキャリア設計をサポートするために、経験豊富なコンサルタントがエンジニアひとり一人に寄り添ってアドバイスします。ご本人のスキルや得意分野を活かしたミスマッチの少ない仕事へのアサイン、プロの視点による技術面の実践的なアドバイスはもとより、現場常駐時には定期的なキャリアカウンセリングを行います。また他業種でも活躍する優秀なコンサルタントや、独自のメンタルヘルス制度と連携することで、あらゆる問題に対して万全な支援体制を構築しています。
          </div>
        </div>
  
        <div class="RoundWrapper RoundWrapper--header">
          <h2 class="RoundWrapper__title">
            コンサルタント紹介
          </h2>
          <div class="FlexBox">
            <img src="/src/asset/engineer_dispatch/img-person1-l.png" />
            <div class="Consultant__textWrapper">
              <div class="Consultant__titleWrapper FlexBox FlexBox--bottom">
                <h3 class="Consultant__title">
                  森田 庸一
                </h3>
                <p class="Consultant__titleSmall">
                  YOICHI MORITA
                </p>
              </div>
              <p class="Consultant__textBold">
                あなたにマッチした働き方を一緒に探します。
              </p>
              <p class="Consultant__text">
                「悩んだら進め！」を座右の銘として行動し、皆様の「こうなりたいっ！」を一緒に考え、一緒に悩みながら次に進められるようなアドバイスを心がけています。必ずやあなたにマッチングしたお仕事を獲得してみせます。
              </p>
            </div>
          </div>
          <div class="Consultant__itemFooterWrapper">
            <div class="FlexBox FlexBox--center">
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <p class="Consultant__itemFooterText--large">
                  <b>00</b>年
                </p>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <div class="Consultant__itemFooterText">
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                </div>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  エンジニアの声
                </p>
                <div class="Consultant__itemFooterText Consultant__itemFooterText--fixed">
                  このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="RoundWrapper RoundWrapper--body">
          <div class="FlexBox FlexBox--reverse">
            <img src="/src/asset/engineer_dispatch/img-person2-l.png" />
            <div class="Consultant__textWrapper Consultant__textWrapper--reverse">
              <div class="Consultant__titleWrapper FlexBox FlexBox--bottom">
                <h3 class="Consultant__title">
                  中嶋 英樹
                </h3>
                <p class="Consultant__titleSmall">
                  HIDEKI NAKASHIMA
                </p>
              </div>
              <p class="Consultant__textBold">
                多彩な経験から皆様のキャリアップの支援をします。
              </p>
              <p class="Consultant__text">
                人材ビジネスの世界に10年以上在籍しており、特にエンジニア派遣業界は8年のキャリアを有しています。その経験と資格を活かして、エンジニアの皆様がキャリアアップを図れるお仕事のご提案をさせていただきます。
              </p>
            </div>
          </div>
          <div class="Consultant__itemFooterWrapper">
            <div class="FlexBox FlexBox--center">
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <p class="Consultant__itemFooterText--large">
                  <b>00</b>年
                </p>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <div class="Consultant__itemFooterText">
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                </div>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  エンジニアの声
                </p>
                <div class="Consultant__itemFooterText Consultant__itemFooterText--fixed">
                  このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper RoundWrapper--body">
          <div class="FlexBox">
            <img src="/src/asset/engineer_dispatch/img-person3-l.png" />
            <div class="Consultant__textWrapper">
              <div class="Consultant__titleWrapper FlexBox FlexBox--bottom">
                <h3 class="Consultant__title">
                  田中 裕樹
                </h3>
                <p class="Consultant__titleSmall">
                  HIROKI TANAKA
                </p>
              </div>
              <p class="Consultant__textBold">
                エンジニアの視点からのアドバイスをします。
              </p>
              <p class="Consultant__text">
                オープン系開発を得意とし、オブジェクト指向開発、UML設計開発手法で、中小規模の開発から大規模システム開発まで長年やって来ました。お客様のシステム開発からコンサルティングまで行っております。また4年制大学でシステム開発についての非常勤講師を務めています。そんな経験から皆様のサポートとなるアドバイスをします。
              </p>
            </div>
          </div>
          <div class="Consultant__itemFooterWrapper">
            <div class="FlexBox FlexBox--center">
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <p class="Consultant__itemFooterText--large">
                  <b>00</b>年
                </p>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <div class="Consultant__itemFooterText">
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                </div>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  エンジニアの声
                </p>
                <div class="Consultant__itemFooterText Consultant__itemFooterText--fixed">
                  このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="RoundWrapper RoundWrapper--footer">
          <div class="FlexBox FlexBox--reverse">
            <img src="/src/asset/engineer_dispatch/img-person4-l.png" />
            <div class="Consultant__textWrapper Consultant__textWrapper--reverse">
              <div class="Consultant__titleWrapper FlexBox FlexBox--bottom">
                <h3 class="Consultant__title">
                  武田 のあ
                </h3>
                <p class="Consultant__titleSmall">
                  NOA TAKEDA
                </p>
              </div>
              <p class="Consultant__textBold">
                ぜひ女性の方もお問い合わせください。
              </p>
              <p class="Consultant__text">
                これまでのIT技術者はどうしても女性が少ないイメージがありますが、女性視線からも「やりがい」を感じることのできるお仕事をご提案させていただきます。ヘルプデスク、ITサポート系の案件を担当しています。
              </p>
            </div>
          </div>
          <div class="Consultant__itemFooterWrapper">
            <div class="FlexBox FlexBox--center">
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <p class="Consultant__itemFooterText--large">
                  <b>00</b>年
                </p>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  業界経験年数
                </p>
                <div class="Consultant__itemFooterText">
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                  <p>株式会社〇〇〇〇〇〇</p>
                </div>
              </div>
              <div class="Consultant__itemFooter">
                <p class="Consultant__itemFooterTitle">
                  エンジニアの声
                </p>
                <div class="Consultant__itemFooterText Consultant__itemFooterText--fixed">
                  このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。
                </div>
              </div>
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
        <a class="BreadCrumb__item" href="./">エンジニア専門派遣の強み</a>
        <p class="BreadCrumb__item">キャリアコンサルティング</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
