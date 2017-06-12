<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sogi8wpdev');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'lg7@1234');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i}<w&(#Eo7FP`_Nd%10&>mEr+z<fgCZ9_k%Oi{AURP[^{vqaMau(0_}39mq:UYV,');
define('SECURE_AUTH_KEY',  'c$|gC/9S En+X3XYmlJ,@][DUx{:s=}cW5*Z.4I$sg@.{Eh^?12!OUA-:&/dPUqH');
define('LOGGED_IN_KEY',    '?N@t-3#`%1@tY)I!]j8M4>lQE,?e`YD8W(u|DBlt<)C_lw9[{Zn5EKF|`&f>L&LK');
define('NONCE_KEY',        '9#FUyMg:[[8mOYUbuD@Y|WhXb3jQUk^fu)_#8^Yn^t8KXQp#lfib&i#_y J|2R<c');
define('AUTH_SALT',        't +}<yGkr;d:UnHEXrB*VV=^a<Qpkay|LOCEd$M>O[u0#7vR{c][`GA;B!:]a6UU');
define('SECURE_AUTH_SALT', '7mI:}E*wsLps&7F(,@<h_OZ!FR| 8KtNz=J1|,X!D4l?lh_O&R}>m.qUVrQi;dw)');
define('LOGGED_IN_SALT',   '.cr:6p=[_P$^^]gn^7w/qEuHzEE)X1^(Y-s$VW@ilk=AwUUNi<,<1;I(U*~eA%kw');
define('NONCE_SALT',       '4KVmtR@m&6:/K?gw_03}T/Ny:>:@SO=$k=.fvj4X*Pyd]YZSe8Br`bI~.|)cI!+0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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

define('GOOGLE_FONTS', 'Open+Sans|Roboto');