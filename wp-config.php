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
define('DB_NAME', 'test2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',BJLyVtRve&FU:X2lawD>t!tF~%AJ);_f[%{eF&CGpqh7pfI4ikQspBHxK`a*Rcu');
define('SECURE_AUTH_KEY',  'v/_UR^}l$&.sSSN9RZJ3uz,N*$2tb^0Jn&Ca)|<9MKJh#7aKqcdi>0,HEuAV?GNY');
define('LOGGED_IN_KEY',    'bJ1%_g.;ls0hr kAjI<sRqR{t]w6 N6Y3qaCM75Ig(Xn7]RB3bFdPJM;y27PQ/OT');
define('NONCE_KEY',        '_*sBba6`>B~MI:V8/%=oPhcSXDRLUmTjp2@B|Kf[ zP>R]((<~2]+:eKdd2/8;Ho');
define('AUTH_SALT',        'zJb>1F;F28b)[<f-G#2RRjIuTO+I]%sFMx|gpPA>BWj(Dv/I+A~k>Gm7wAulzUx4');
define('SECURE_AUTH_SALT', 'Eiw8vb#+*]G?4_|KN/Ko21,OD[%OMU{^zD`P&rP/fF@|$QK{<-G1)~FEFG>dS;`L');
define('LOGGED_IN_SALT',   ':(lpR~xP;CpRR UA!H2b|Zc$}=FSr4@qDPLOW.|h`k,+`4PuCcQE@,8OkThyv*Yt');
define('NONCE_SALT',       'N5@8>YNouhkpEglL!-?KetZ:tkHfH?;mzA6. 1Dmg/x,x[-+QT4&T6OVMLtnA75c');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
