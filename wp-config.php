<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpressblog' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CizQdXw9o`q7&=Agh:sOC;XXM<tc,)o`<b9G[UsK]ERJu0!91_<$m{/|8Js/CxdO' );
define( 'SECURE_AUTH_KEY',  'h[k0C,<=zW`2(Y]:FFF8i|$Qo[H{>sI(C6yDF&.Kbi^pj-T0p{nU~tH;UP%1!!Nv' );
define( 'LOGGED_IN_KEY',    '-&c?xqIH/AMyuIayuemse$sRrFEdvi6IK88/Z*qwQ<;@ZHU=#OL.|g[AkZGGm q=' );
define( 'NONCE_KEY',        '|0PvKup2@&kIv.2?HT-D2N?8qQ*9)~~e4a[NJed H]|T!}W30;7VBg&U/4q@ZG%g' );
define( 'AUTH_SALT',        'a`CvtznrLk,cwZM&ExkH<G P=ClY`rnQbf7IE:qy}P`~veCskO)}3v)@v7JkdHb<' );
define( 'SECURE_AUTH_SALT', 'y~naRM^^ihX%jto*D0qz;3n|`+gynN[rk7adgG:9PWp!T wEp@cHN{?IeRLTI{rj' );
define( 'LOGGED_IN_SALT',   '$<{mwU:r*kf74@F>P1Rgh O)sh*3%auJe=i5af=83dHLxf2N-bNT,&%)GdM_kE66' );
define( 'NONCE_SALT',       'Xw>F_X+bpa45FnZXY<_.;]z69_{NZ!]DVU`Hu[_N;UxA?dsb:.%H8Zg7Ii9j}Qi-' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
