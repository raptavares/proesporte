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
define('DB_NAME', 'proesporte');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'proesporte');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'proesporte2017');

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
define('AUTH_KEY',         'aHUKq8io$O+Mu#,q2&<w=yDQ`Y&rN~)a7ZKCNDTxftJ#d<qW[aj5 aBPS0Fjw#}]');
define('SECURE_AUTH_KEY',  '8|K/!n#]J$&.XX!aq!Xp0lb=hToxxi~qLlI~=|m7u.G*Ph?kW7olEuwqOCRPjNyn');
define('LOGGED_IN_KEY',    '*6kv^#:Sd DM=k6tN_MnN]9eM>ag?DsJ7&1{/huf3}s?+G_Gc)M%@z13Xo&.Xl(8');
define('NONCE_KEY',        'ZPCbq9~> #uA32;U}oB-H,-}7}>5`yU<#Ka*5i(8{P-H.4FDhmFTpZ`P]?)Va5^S');
define('AUTH_SALT',        '.sCsx`^3WQUdjH%Y6ZR_>ZSYhug3MGxdzUs$Ajdo@vXV(oy(ZjQPUZe.UJ-Wrcm1');
define('SECURE_AUTH_SALT', '<(acnRswn{&j1k5~y+ Sb5sKNq?N#/$j<Q<vQk8^DTEq%Lb9SCRAY$Z4=bQfpr*D');
define('LOGGED_IN_SALT',   'w80N;[snt|1rr=HG(w;jAu2M1n|XiH}L$7ISt2jRlM:RJ&mG#bZ97Z:Ml*$.a,Lf');
define('NONCE_SALT',       'k;>an<x^`.l>4*3>0H3sc=zvNj:d]-Vz4,idJAUyM%L;1SJu[:opCEJVu{9(HdyI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'pe_';

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
