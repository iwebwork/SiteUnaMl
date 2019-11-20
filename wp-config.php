<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blogml' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JlG{ayWEt|Cj8wco5z~UnmxQe!p-GsxKJm/h-@zrBSD3mh-4%}ypD^OnWB=EJ%uE' );
define( 'SECURE_AUTH_KEY',  '6>99SM19mj?p$sA;]XCpkxU{[~[W ?wqqEJnT`E<BGQ.:Mq%!Wmi24HXnFc|9en_' );
define( 'LOGGED_IN_KEY',    '.Q$ao}fm;F8$jm[WX{0g`^e3lX$YZ490{xbxsGeJb[DSsHOh(So0Q%}p6q^Z`h1V' );
define( 'NONCE_KEY',        'QskCJ mU,m2G-hb^b24c2}<|?8sm6b$N3k#^fKhn[KwqPLeI0zh8~jja%V$ZlPum' );
define( 'AUTH_SALT',        ']ZknD6{VEr(am$3@3bw2Aak!+M$..|%5j?$wG?qZr[aREyOW<mF[qLk`D!.&m(Om' );
define( 'SECURE_AUTH_SALT', '$M?h6CH4ZPq^d1H?sC+S,J%gZFuno`DDd24?*&8*SP}0C^Co3<]owQvUAvI3Ql;u' );
define( 'LOGGED_IN_SALT',   'tabzM`,W|t]{8;tSLazR1lt3Y*5 5|S9:3q^%7ca5*#Z-CP[En[-dUaQwUab+&Ri' );
define( 'NONCE_SALT',       'IE&cmsT?%LW#rECrJ#Xi*@Au%(_l^3z}pM&f}_n%S_<m:sAGf(ejbfwZvvn*k|{U' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_blogMl';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
