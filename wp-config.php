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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'salveoplaneta' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'NOZjHD;$EU#NgKx9 ?|F:[_ <IbB;b[)VSXP{rmPNd%Yk1*8H4(`D&A`_bd]eq|[' );
define( 'SECURE_AUTH_KEY',  '5t+6?Q~m1!9rvOw!K8$BFQDh]yo<G5LXvvZNXw]`gZVWA. ]xRqfr%bo:_M!Ql{N' );
define( 'LOGGED_IN_KEY',    '8aQf!]d-0v`vr{@<-Wf<U{dT9rwqd1p#LU]gS~L=RuMr$1{FbVehF3<97AosBOow' );
define( 'NONCE_KEY',        'Sroa{vBVS2-VRd@+DA9wokaYR3jldzVg}4g+hI!W, Bwvruecfz&IUK?dX]~ v}{' );
define( 'AUTH_SALT',        'FTQ@RPhbznYk@j{3G?3Y!z=E+SLi=]D6F:y7pBQ;WcP[/OVsbe&l[4b/|1TT|Zf ' );
define( 'SECURE_AUTH_SALT', '~91YU3W1TW4nAY;.oz_ smiP2e.~ #Y4t8@EC_X!~O{ 3I+P$:Zg8jXI=h8;i[*R' );
define( 'LOGGED_IN_SALT',   '7|KG o-^,U eD1vo^rHQP!b0*H6U>`N-YG?^>x:~9:c=v7N81p!?N`)U28>2qSI^' );
define( 'NONCE_SALT',       '/S.&YQYq(@Rnl$w)fJ3f#Sp?B~ab6W*0j0x1](/cq|IZ?~8_cTv`6d-UHD]8XlPx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
