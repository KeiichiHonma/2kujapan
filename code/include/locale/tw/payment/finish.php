<?php
require_once('locale/tw/common.php');//共通翻訳ファイル
require_once('locale/tw/maintenance.php');//メンテナンスファイル
$page2_locale = array(
    //seo
    'keyword' => '東京,日本,旅遊,購物,優惠券,打折,折扣券,購買記錄',
    'description' => '購買記錄。日遊酷棒是可以以99元的價格任您選擇日本的家電賣場，百貨店，化妝品店可以享受大幅折扣的優惠券的網站。',
    'title' => '購買記錄｜日遊酷棒',
    'h1' => '購買記錄',
    
    //message
    'finish_message' => '感謝您的購買',//ご購入ありがとうございました. 

    //payment_alert
    'payment_alert1' => '請務必列印本頁作爲顧客方存根保存',//必ずこのページを印刷の上,お客様控えとして保存いただきますようお願いいたします.
    'payment_alert2' => '請務必保管好登陸賬戶和密碼，一旦遺失今後將無法獲得優惠券。',//ログインアカウントおよびログインパスワードを控えずに進むと,<br />後日,クーポン券の発行を行うことができなくなりますので,ご注意ください.
    'payment_alert3' => '咨詢我公司時需要使用本客戶編號',//お客様番号はお問い合わせの際に必ず必要となります.
    'payment_alert4' => '有任何不清楚的地方請致電以下號碼咨詢<br />日游酷棒客服中心:info@813.co.jp(周一至周五09:00-17:30)',//ご不明点がある場合,下記にお問い合わせ下さい.<br />お客様センター: info@813.co.jp
    
    'payment_maintenance_message' => '現在、『日游酷棒』サイトのメンテンスを実施しております。<br />ご購入処理は正常に終了しておりますので、メンテナンス終了後、本画面に表示されているログインアカウント、ログインパスワードを使用してクーポン券を印刷していただきますようお願い申し上げます。<br />皆様にはご迷惑をおかけしますことを深くお詫び申し上げます。',//現在、『日游酷棒』サイトのメンテンスを実施しております。<br />ご購入処理は正常に終了しておりますので、メンテナンス終了後、本画面に表示されているログインアカウント、ログインパスワードを使用してクーポン券を印刷していただきますようお願い申し上げます。<br />皆様にはご迷惑をおかけしますことを深くお詫び申し上げます。
);
$locale = array_merge($common_locale,$page2_locale);
$locale = array_merge($page_locale,$locale);
?>
