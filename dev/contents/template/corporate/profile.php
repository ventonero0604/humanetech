<?php
//画像やCSSのパス
$staticPath = '/src/dist/';
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
    <section class="Corporate Profile">
      <div class="Corporate__main Corporate__main--profile FlexBox FlexBox--middle">
        <h1 class="Corporate__title"><img src="/src/asset/corporate/title-profile.png" alt="教育制度・福利厚生" /></h1>
      </div>
  
      <div class="LocalNavi">
        <ul class="LocalNavi__list">
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./">企業情報</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./philosophy.php">企業理念</a></li>
          <li class="LocalNavi__listItem"><p class="LocalNavi__listLink is-current">会社概要</p></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./profile.php#access">アクセス</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="./welfare.php">教育制度・福利厚生</a></li>
          <li class="LocalNavi__listItem"><a class="LocalNavi__listLink" href="../corporate/recruit/">採用情報</a></li>
        </ul>
      </div>

      <div class="Corporate__wrapper">
        <div class="RoundWrapper Profile__container--0padding">
          <div class="FlexBox FlexBox--center">
            <div><img class="is-pc" src="/src/asset/corporate/text-profile.png" alt="COMPANY PROFILE" /></div>
            <div><img class="is-sp" src="/src/asset/corporate/text-profile-sp.png" alt="COMPANY PROFILE" /></div>
          </div>
          <h3 class="Profile__contentsTitle">
            会社概要
          </h3>

          <div class="RoundWrapper__contents">
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  社　名
                </td>
                <td class="Profile__text">
                  ヒューマネテック株式会社（英語表記　HumaneTech Co.,Ltd.）
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  本社所在地
                </td>
                <td class="Profile__text">
                  <div>〒101-0041<br/>東京都千代田区神田須田町一丁目18番地　アーバンスクエア神田ビル 10F</div>
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  電話/FAX
                </td>
                <td class="Profile__text">
                  TEL：03-3254-1330 （代表）／FreeCall：0800-9191-333 ／ FAX：03-3254-1332
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  設　立
                </td>
                <td class="Profile__text">
                  2005年
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  資本金
                </td>
                <td class="Profile__text">
                  1400万円
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  決　算
                </td>
                <td class="Profile__text">
                  11月
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  社員数
                </td>
                <td class="Profile__text">
                  社員数45名（契約社員を含む）
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  事業内容
                </td>
                <td class="Profile__text">
                  <p>システムエンジニアリング</p>
                  <p>システムコンサルティング／</p>
                  <p>インフラ基盤構築／</p>
                  <p>クラウドインテグレーション／</p>
                </td>
                <td class="Profile__text">
                  <p>システム運用及び運用改善支援／</p>
                  <p>アジャイル開発、オフショア開発／</p>
                  <p>エンジニア教育事業／</p>
                  <p>ITエンジニア派遣、人材紹介 　他</p>
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  主要取引銀行
                </td>
                <td class="Profile__text">
                  <p>三菱東京UFJ銀行　神田支店／</p>
                  <p>みずほ銀行　神田支店／</p>
                  <p>金融公庫　渋谷支店</p>
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  社　名
                </td>
                <td class="Profile__text">
                  ヒューマネテック株式会社（英語表記　HumaneTech Co.,Ltd.）
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  主要取引銀行
                </td>
                <td class="Profile__text">
                  <p>三菱東京UFJ銀行　神田支店／</p>
                  <p>みずほ銀行　神田支店／</p>
                  <p>金融公庫　渋谷支店</p>
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  顧　問
                </td>
                <td class="Profile__text">
                  <p>北・長谷見法律事務所／</p>
                  <p>社会保険労務士法人 坂井事務所／</p>
                  <p>税理士法人 KMCパートナーズ</p>
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__tableTitle">
                  免　許
                </td>
                <td class="Profile__text">
                  <p>一般派遣免許 （派）13-301980／</p>
                  <p>職業紹介免許 13-ユ-302450／</p>
                  <p>プライバシーマーク　10862336（02）号</p>
                </td>
              </tr>
            </table>
            <div class="FlexBox FlexBox--center" id="access">
              <div><img src="/src/asset/corporate/text-access.png" alt="ACCESS" /></div>
            </div>
          </div>
        </div>
      </div>

      <div class="Profile__mapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.2461299586635!2d139.76886231612048!3d35.695560336791566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c02561c908b%3A0x567f98d1c87b6048!2z44OS44Ol44O844Oe44ON44OG44OD44Kv5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1591489388955!5m2!1sja!2sjp" width="100%" height="598" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" saturation="-100"></iframe>
      </div>

      <div class="Corporate__wrapper">
        <div class="RoundWrapper Profile__container--0padding">
          <div class="FlexBox FlexBox--center">
            <div><img src="/src/asset/corporate/text-history.png" alt="HISTORY" /></div>
          </div>
          <h3 class="Profile__contentsTitle">
            沿革
          </h3>

          <div class="RoundWrapper__contents">
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2005. 12
                </td>
                <td class="Profile__text">
                  千代田区内神田1丁目にて3名で起業、ヒューマネテック株式会社設立
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2006. 05
                </td>
                <td class="Profile__text">
                  千代田区内神田3丁目に事務所移転、ホームページの開設
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2006. </span>06
                </td>
                <td class="Profile__text">
                  一般派遣免許：（般）13－301980を取得、派遣事業を開始
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2007. 04
                </td>
                <td class="Profile__text">
                  事業拡大により　千代田区神田須田町1丁目に移転
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2007. </span>08
                </td>
                <td class="Profile__text">
                  職業紹介免許：13－ﾕ302450を取得、人材紹介事業を開始
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2008. 06
                </td>
                <td class="Profile__text">
                  中国IT企業と連携し、SAPコンサルタントの派遣事業を開始
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2006. 05
                </td>
                <td class="Profile__text">
                  株式会社ジーフィーと提携し、証券ソリューションの営業を開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2006. </span>05
                </td>
                <td class="Profile__text">
                  プライベートセミナーの実施一般派遣免許：（般）13－301980を取得、派遣事業を開始
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2011. 05
                </td>
                <td class="Profile__text">
                  アジアにおけるコールセンター開設コンサルティングを開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2011. </span>07
                </td>
                <td class="Profile__text">
                  タイを中心にした東南アジアでのオフショアサービスの営業を開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2011. </span>09
                </td>
                <td class="Profile__text">
                  事業拡大により千代田区神田須田町1-18に移転　教室・ラボ環境の整備
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2011. </span>10
                </td>
                <td class="Profile__text">
                  IT　Expo2011 展示会に出展　スマホ用ソリューションの展示・拡販
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2012. 04
                </td>
                <td class="Profile__text">
                  派遣先企業の拡大
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2012. </span>07
                </td>
                <td class="Profile__text">
                  スマートフォン用Webアプリケーション開発サービスを開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2012. </span>12
                </td>
                <td class="Profile__text">
                  it-divers.com 全面改訂　スマホ対応
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2013. 02
                </td>
                <td class="Profile__text">
                  it-diversマガジン（メルマガ）発刊
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2013. </span>07
                </td>
                <td class="Profile__text">
                  プライバシーマーク　10862336（1）号　取得
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2014. 08
                </td>
                <td class="Profile__text">
                  it-diversマガジン20号を発刊
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2014. </span>09
                </td>
                <td class="Profile__text">
                  派遣免許の更新
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2015. 07
                </td>
                <td class="Profile__text">
                  プライバシーマーク更新
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2015. </span>08
                </td>
                <td class="Profile__text">
                  人材紹介免許の更新
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2015. </span>10
                </td>
                <td class="Profile__text">
                  新派遣法の施行により　派遣免許番号の変更　派13-301980
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2015. </span>11
                </td>
                <td class="Profile__text">
                  最高売上を更新
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2015. 01
                </td>
                <td class="Profile__text">
                  東京都情報産業サービス健康保険組合に（協会けんぽより）加入
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2016. 01
                </td>
                <td class="Profile__text">
                  代表取締役交代、役員変更
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2016. 11
                </td>
                <td class="Profile__text">
                  ホームページの全面リニューアル
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2017. 01
                </td>
                <td class="Profile__text">
                  技術者の無期雇用制度導入
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2017. </span>04
                </td>
                <td class="Profile__text">
                  セキュリティ製品AppGuardの販売開始
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2018. ?
                </td>
                <td class="Profile__text">
                  プライバシーマーク更新
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2018. </span>?
                </td>
                <td class="Profile__text">
                  派遣免許の更新
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2019. 06
                </td>
                <td class="Profile__text">
                  <p>ベトナム工科大学視察</p>
                  <p>ベトナム人エンジニアの積極的採用開始</p>　
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2019. </span>06
                </td>
                <td class="Profile__text">
                  基盤エンジニアのための実践型セミナー開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2019. </span>11?
                </td>
                <td class="Profile__text">
                  改正派遣法に準じた労使協定の締結
                </td>
              </tr>
            </table>
            <table class="Profile__table">
              <tr class="Profile__column">
                <td class="Profile__date">
                  2020. 03
                </td>
                <td class="Profile__text">
                  新型コロナ対策として一部社員のテレワーク開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2020. </span>04
                </td>
                <td class="Profile__text">
                  オンライン完結型の登録制度開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2020. </span>05
                </td>
                <td class="Profile__text">
                  テレワーク派遣開始
                </td>
              </tr>
              <tr class="Profile__column">
                <td class="Profile__date">
                  <span class="is-spInline">2020. </span>06
                </td>
                <td class="Profile__text">
                  ホームページリニューアル
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="RoundWrapper Profile__container" id="client">
          <div class="FlexBox FlexBox--center">
            <div><img src="/src/asset/corporate/text-client.png" alt="MAIN CLIENT" /></div>
          </div>
          <h3 class="Profile__contentsTitle">
            主要取引先
          </h3>

          <div class="RoundWrapper__contents">
            <ul class="Profile__list FlexBox FlexBox--wrap">
              <li class="Profile__listItem">
                <div>NECシステムテクノロジー株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>日本インサイトテクノロジー株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社NTTデータ</div>
              </li>
              <li class="Profile__listItem">
                <div>日本GE株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>エヌ・ティ・ティ・コミュニケーションズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>GEヘルスケア・ジャパン株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社QES（旧　QUICK電子サービス）</div>
              </li>
              <li class="Profile__listItem">
                <div>日本自動化開発株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>SETソフトウェア株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>日本情報通信株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社アイ・エム・ジェイ</div>
              </li>
              <li class="Profile__listItem">
                <div>日本ヒューレット・パッカード株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>アクセンチュア株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>ネットワンシステムズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社インターネットイニシアティブ（IIJ）</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社野村総合研究所</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社IIJエンジニアリング</div>
              </li>
              <li class="Profile__listItem">
                <div>NRIセキュアテクノロジーズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>上田八木短資株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社東京証券取引所</div>
              </li>
              <li class="Profile__listItem">
                <div>キヤノンITソリューションズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社東証システムサービス</div>
              </li>
              <li class="Profile__listItem">
                <div>コムテック株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>東洋エンジニアリング株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>サティヤム コンピュータ サービス リミテッド</div>
              </li>
              <li class="Profile__listItem">
                <div>東洋ビジネスエンジニアリング株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社シーイーシー（CEC）</div>
              </li>
              <li class="Profile__listItem">
                <div>東洋ビジネスシステムサービス株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社JMAシステムズ</div>
              </li>
              <li class="Profile__listItem">
                <div>パナソニックインフォメーションシステムズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>シスコシステムズ合同会社</div>
              </li>
              <li class="Profile__listItem">
                <div>ピットクルー株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社シマンテック</div>
              </li>
              <li class="Profile__listItem">
                <div>リアライズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>シャープビジネスコンピュータソフトウェア株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>国立大学法人</div>
              </li>
              <li class="Profile__listItem">
                <div>日鉄ソリューションズ株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>社会福祉法人</div>
              </li>
              <li class="Profile__listItem">
                <div>株式会社セゾン情報システムズ</div>
              </li>
              <li class="Profile__listItem">
                <div>国際協力データサービス株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>日商エレクトロニクス株式会社</div>
              </li>
              <li class="Profile__listItem">
                <div>他　大手SI企業、外資系企業 ※アイウエオ順</div>
              </li>
            </ul>
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
        <p class="BreadCrumb__item">会社概要</p>
      </div>
    </div>
  </div>

  <div id="footer">
  <?php include ('../component/footer.html'); ?>
  </div>
</div>
</body>
</html>
