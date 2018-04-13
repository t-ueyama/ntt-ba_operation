<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wpress1_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wpress1_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'E9dKvLHX');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VsZco$P?PviQWG?;k8a,`KE2h},2r/mFaK{QMP5Ci1*x_1r6XP%%L^V=bGe;de,q');
define('SECURE_AUTH_KEY',  '5j9>,6<1(0]|GiqL-t-3-f#-)u{G}SF-ud5 m@N?o@]Pl:U+CFu)oB_(C.1Ght:|');
define('LOGGED_IN_KEY',    '(~WQ9z;$0=phr*1g9d(u-9Rz&MU+$B_+-c}Kl7sreb6 M<?z>A1y;, c,T1Ul|NE');
define('NONCE_KEY',        '+{HV_v{]yh-__YrF&A~R/UYx[##MGr#N%`;`n:Y~X!P:d4SKh#=Yu@n-3T!E*oZS');
define('AUTH_SALT',        'g]]J+nJS:C[y2a%3`XpMczP Me/!7-Ual7$v2LO<|#Ta[|+dCp]UO{i%T&j%b*lW');
define('SECURE_AUTH_SALT', 'i+<.^#q!#-rdPWv.-zKh&l7EyE0?`P^7[j3p8h=gz3.=SvoTGNjE{YcXr2gEM{Bv');
define('LOGGED_IN_SALT',   '>0i*+Ri{J:1=mI|_c;J]2^ $NwPlb%Ko;+[#Gr<K9zTbsANLhfn}k9>Sz& x]2`1');
define('NONCE_SALT',       'Q22`bxal7wh/d/zKEC7Whm:_>!9@au6M<K7[uQ2}^p+&}&U3Kgjw7Yj}iK~dH$`B');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
