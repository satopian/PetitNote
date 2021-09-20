<?php
/*設定項目*/

/*最初に設定する項目*/

//管理者パスワード 必ず変更してください。
$admin_pass = 'kanripass';

//この掲示板の名前
$boardname = 'Petit Note';

//ホームページ(掲示板からの戻り先)
$home = './'; //相対パス、絶対パス、URLどれでもOK 

//最大スレッド保存件数上限 これ以上はスレッドを削除
//最低500スレッド。
$max_log = 1000;

/*最初に設定する項目 ここまで*/

/*テンプレート切り替え*/
//テンプレートのディレクトリ`/`まで 初期値 'basic/'
$skindir='basic/';

// 設置場所のurl
$root_url = 'http://example.com/oekaki/';

/*SNS連携*/

// ツイートボタンを使う
// スレッドのurlと内容をツイートします。

$use_sns_button = true;
// $use_sns_button = false;


/*掲示板の説明文*/

// テンプレートに直接記入してもいいのですが、設定で入力する事もできます。
// 説明文が1行なら ['説明そのいち']
// 説明文が3行なら ['説明そのいち','説明そのに','説明そのさん']
// 文字をシングルクオートで囲って、カンマで区切ります。
// 説明文が不要なら []で。

$descriptions = ['iPadやスマートフォンでも描けるお絵かき掲示板です。','楽しくお絵かき。'];	

/*使用目的*/

//トップページの入力フォームを使用する
// しない: false でお絵かきボタンのみの表示になります。
// する: true しない: false

$use_top_form = true;
// $use_top_form = false;

//日記モードを使用する
//する: true でスレッド立ては管理者のみになります。
// する: true しない: false

$use_diary = true;
// $use_diary = false;

//画像アップロード機能を使う
// 使う:true 使わない:false
//日記モードの管理者は使わないに設定しても、ファイルアップロードが可能です。

$use_upload = true;
// $use_upload = false;

//コメントのみの新規投稿を許可する、しない。
//しない: false で、スレ立てに画像が必須になります。
// する: true しない: false

$allow_coments_only = true;
// $allow_coments_only = false;

//合言葉機能を使って投稿を制限する
// する: true しない: false
$use_aikotoba = true;
// $use_aikotoba=false;

//合言葉機能で投稿を制限する時の合言葉
//この合言葉が入力されていない時には書き込むことができません。
// 変更して使ってください。
$aikotoba = 'あいうえお';

//年齢制限付きの掲示板として設定する
//する: trueに設定すると確認ボタンを押すまで画像にぼかしが入ります。
// する: true しない: false

$set_nsfw = true;
// $set_nsfw = false;

/*スパム対策*/
//本文に日本語がなければ拒絶 する:true しない:false
$use_japanesefilter = true;
// $use_japanesefilter=false;

//拒絶する文字列 正規表現
$badstring = ['example.example.com','未承諾広告'];

//使用できない名前 正規表現
$badname = ['ブランド','通販','販売','口コミ'];

//AとBが両方あったら拒絶 正規表現
$badstr_A = ['激安','低価','コピー','品質を?重視','大量入荷'];
$badstr_B = ['シャネル','シュプリーム','バレンシアガ','ブランド'];

/*表示件数*/

//1ページに表示するスレッド数

$pagedef = 5;

//1スレッドに返信できるレスの数
$max_res = 100;

//1スレッドに表示するレスの数
//返信画面で全て表示
$dispres= 5;

//カタログモード時の1ページあたりの表示件数
//6の倍数に設定すると画面にきれいにおさまります。
$catalog_pagedef = 24;

/*画像関連*/

//投稿できる画像のファイルサイズ単位kb
$max_kb = 2048;

//お絵かきできる幅と高さの最大サイズ
$pmax_w = 800;//幅
$pmax_h = 800;//高さ

//スレッドの親の表示する幅と高さの最大サイズ
$max_w = 800;
$max_h = 500;

//スレッドのレスの表示する幅と高さの最大サイズ
$res_max_w = 300;
$res_max_h = 300;

//表示する幅と高さの最大サイズを超える時はサムネイルを作成する
// する: true しない: false
$use_thumb = true;
// $use_thumb = false;

/*その他*/

//古いスレッドを自動的に閉じる日数
//初期設定の180で、半年前に立てられたスレッドには返信できなくなります。
$elapsed_days=180;

/*詳細設定*/
//通常は変更しません

//タイムゾーン 日本時間で良ければ初期値 'asia/tokyo'
date_default_timezone_set('asia/tokyo');

//ペイント画面の$pwdの暗号化
define('CRYPT_PASS','v25Xc9nZ82a5JPT');//暗号鍵初期値
define('CRYPT_METHOD','aes-128-cbc');
define('CRYPT_IV','T3pkYxNyjN7Wz3pu');//半角英数16文字

/*変更不可*/

//変更しないでください
//テンポラリ
define('TEMP_DIR','temp/');
//ログ
define('LOG_DIR','log/');
//画像
define('IMG_DIR','src/');
//画像
define('THUMB_DIR','thumbnail/');
