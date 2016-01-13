<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'projetos_tulio_site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TwkT-ss*Jk12yFb9p`nKQ+)7.zSh?M.281YAF{N;kfvl_ddYzx`7O<+YiM2/&|C1');
define('SECURE_AUTH_KEY',  'W)Up-]$C/Jjj!.D?C$Ll_hz]6wmG#PLe3-f;SGVh=cC!o(N5PS$5!.+`+ H?Wc}^');
define('LOGGED_IN_KEY',    '-l=yobBu7PQ_m|tvX[YS@#A$WsU~XnV<gA_O|}R]F@WPftBzaq^<n)bCfl7C>1J`');
define('NONCE_KEY',        'zU?xF)Vu602y(vqE5^1-)ez.F<oL23)4e5E}L`=,8^8FSr?6T@I[S^&g #=(p~:M');
define('AUTH_SALT',        'sw#<G~|~kcJ]i -@%$G8[oM+#h(U|rREX-aqzz-DJI+03Vl]6Nj2g`LQ@qINOUpt');
define('SECURE_AUTH_SALT', '^78HPd?&1SP}ekRYk0=hV#!1!|`.%S{P^9=+?doUm9D2H`OAQX&[f|B;~UIIs+N]');
define('LOGGED_IN_SALT',   '=@c/F+ p-=&I+fuhz!I8=s!V|F6Hp5n$yK8,s}(XX%8]K#|vv7zjoeW,->igWMh|');
define('NONCE_SALT',       'fl?i#3LF].<Wj(7RiL|9H) o@a5vO |B$LU;vNh*C-~i#t<C;Gcp #sYoJ-A,Ar.');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tm_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
