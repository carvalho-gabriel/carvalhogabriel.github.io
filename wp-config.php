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
define( 'DB_NAME', 'site02' );

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
define( 'AUTH_KEY',         '^EM?@yhTe^4UnTQ6`n+ZJAdJe?[a}3af+lG%y &c~z8>Fv0+$Qn+BCPeVt:&>z1l' );
define( 'SECURE_AUTH_KEY',  '#$-Y%BB5^KUef4)>i>gK#@eH-!qd~BH5rXXF-s{Vq<hoTmn 1v,-(R_q;37/wZ|}' );
define( 'LOGGED_IN_KEY',    '#j63cvz3iRVTd*%s_R!Z(VilTW?tY.x;Dfj(awQizV37)/vN!~8aKIS8d[qY=oMq' );
define( 'NONCE_KEY',        '{sq<F!F/o[5UA}z^`eF?*$v@Is3L_4(Yqr c;]amc[Gf5Cref.Dj@=z4;`*wUkw!' );
define( 'AUTH_SALT',        'b7j>rtARG+EP1e7O_ZkA>]fZ vSwcnXw?#%XOtw/`2QofGC.pH>el6VY~-zu(]-u' );
define( 'SECURE_AUTH_SALT', 'A9MQ3IbH~;5-A-=&7:eo,(,EgubDXvVH7> *G4Cd8x{Ca}K3Q&9[{<kInc`q2WHQ' );
define( 'LOGGED_IN_SALT',   '~6JJ1D!Hn=;87LGDd#-9sr{^dt{6L4CSJ) 36xY4<l5@s>%.Ch^Ltz?wvQx6G.sA' );
define( 'NONCE_SALT',       '|R4I+-%En>S}GLku&MFI2:O2~!/pi,aN(Ab476RN{h<;aAjUPI&. $tipIw#Dl_F' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
