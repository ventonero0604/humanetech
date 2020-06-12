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
    <section class="Future">
      <div class="Future__main Future__main--staffDetail">
        <div class="Future__mainTitle Future__mainTitle--staffDetail">
          <p class="StaffDetail__job">ネットワークエンジニア</p>
          <h1 class="StaffDetail__name">松ケ谷 昌功</h1>
          <p class="StaffDetail__kana">AKINORI MATSUGAYA</p>
          <p class="StaffDetail__join">2012年入社</p>
          <p class="StaffDetail__message">
            IT業界のこれからを担い、<br />
            次の世代のエンジニアにつないでゆきたい
          </p>
        </div>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">未来のエンジニア採用</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">社員紹介</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">募集要項</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../engineer_dispatch/faq.php">よくある質問</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/future_engineer.php">採用エントリー</a></li>
        </ul>
      </div>
  
      <div class="Future__contents">
        <div class="StaffDetail">
          <div class="RoundWrapper">
            <div class="FlexBox FlexBox--column FlexBox--middle">
              <div class="StaffDetail__flow"><img src="/src/asset/future/img-career.png" alt="これまでのキャリア" /></div>
              <div class="StaffDetail__container">
                <p class="StaffDetail__titleSmall">
                  Q.シューマネテックに入社を決めた理由は何ですか？
                </p>
                <p class="StaffDetail__title">
                  人を大切にする社風、そして風通しの良い環境で安心して働けます。
                </p>
                <p class="StaffDetail__text">
                  ずばり社長の人柄です。ITを専門にしている会社を運営しながらも、人が好きで、人を平等に扱ってくれる方です。私のような若造でも、分け隔てなく真摯に話を聞いてもらえるので、とても安心して働けます。また、様々な経験から適切で的確なアドバイスをいつも頂いてます。
                </p>
                <p class="StaffDetail__image">
                  <img src="/src/asset/future/img-staff1-1.png" />
                </p>
                <p class="StaffDetail__titleSmall">
                  Q.現在の仕事内容を教えてください。
                </p>
                <p class="StaffDetail__title">
                  自分が提案・設計したシステムを海外で構築
                </p>
                <p class="StaffDetail__text">
                  現在は、大手SIerにて、主に世界進出をしている企業様のネットワークの提案から設計・構築と上流工程から下流工程まで全てを任せられております。最近では、自分が提案・設計したシステムの導入を、イギリスまで構築しに行きました。普段のメールのやり取りは9割方英語なので、なかなか大変な仕事でもありますが、一連の工程を全て担当させていただいていることから、お客様との距離も近く、直接、感謝の言葉をいただけ、とてもやりがいのある仕事です。
                </p>
              </div>
              <div class="StaffDetail__imageContainer">
                <img src="/src/asset/future/img-staff1-2.png" />
              </div>
              <div class="StaffDetail__container">
                <p class="StaffDetail__titleSmall">
                  Q.いま興味を持っている事、勉強している事、日々成長を感じる瞬間などありますか？
                </p>
                <p class="StaffDetail__title">
                  後輩育成と新しい分野での技術の取得に励んでいきたいです。
                </p>
                <p class="StaffDetail__text">
                  自分自身もまだまだ未熟ですが、後輩の育成に興味を持っています。IT業界は、急成長した業界なので、現場にいる人間は毎日が非常に多忙で若い方を育てている時間がなかったため、業界全体でエンジニア（職人)が足りていません。そんな業界のスパイラルを止めるような役目を、少しでも自分ができたらいいと思っています。もちろんこれから自分自身も勉強しなくてはいけません。今は仮想化や、IoTの分野の勉強に励んでいます。
                </p>
              </div>
            </div>
          </div>
  
          <div class="RoundWrapper StaffDetail__messageContainer">
            <div class="StaffDetail__messageWrapper FlexBox">
              <div class="StaffDetail__messageText">
                <p class="StaffDetail__title">
                  エントリーを検討中の方にメッセージ
                </p>
                <p class="StaffDetail__text">
                  弊社で働いているエンジニアは、非常に技術レベルが高く、そして社長を筆頭に人間性もすばらしい方ばかりです。<br />
                  そして知識ゼロからでも、ITエンジニアとしてしっかりと成長できる教育プランも用意されていますので、安心して挑戦できます。ぜひ、あなたも社会的に貢献できるITエンジニアという道で活躍してみませんか？
                </p>
              </div>
              <div class="StaffDetail__messageImage">
                <img src="/src/asset/future/img-staff1-3.png" />
              </div>
            </div>
          </div>
  
          <div class="Future__bnrWrapper FlexBox FlexBox--center">
            <a href="../corporate/recruit/"><img src="/src/asset/future/bnr-info.png" alt="未来のエンジニア採用 募集要項" /></a>
            <a href="../corporate/recruit/future_engineer.php"><img src="/src/asset/future/bnr-entry.png" alt="未来のエンジニア採用 エントリー" /></a>
          </div>
  
        </div>
      </div>
    </section>
  </main>

  <div class="Future__bnrContainer FlexBox FlexBox--column FlexBox--middle">
    <p class="Future__bnrContainerTitle">
      未来のエンジニア採用では、居酒屋バイトや営業職、一般事務職などからITエンジニアへ、異業種からのキャリアチェンジを支援します。
    </p>
    <div class="FlexBox FlexBox--center">
      <a href="./staff_01.php"><img src="/src/asset/future/bnr1.png" alt="パチンコ店スタッフ" /></a>
      <a href="./staff_01.php"><img src="/src/asset/future/bnr2.png" alt="営業職" /></a>
      <a href="./staff_01.php"><img src="/src/asset/future/bnr3.png" alt="大工" /></a>
    </div>
  </div>

  <div class="BreadCrumb">
    <div class="BreadCrumb__wrapper">
      <div class="FlexBox FlexBox--middle">
        <a class="BreadCrumb__item home" href="/contents/template/">HOME</a>
        <p class="BreadCrumb__item">未来のエンジニア採用</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
