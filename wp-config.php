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
define('DB_NAME', 'videovalet');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'lince');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'caf@xpto#1234');

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
define('AUTH_KEY',         'S!-C2|cu~J2L.)PaP4+ad/MKZH;6h-Q$9]0{aST_)8Jz;,E@mysDYt&VC-&]yGq9');
define('SECURE_AUTH_KEY',  '2(Hw2,)Bdpo-qK:QXzUwo!@y-@:7<M7S+4u>^;;E$MmrVO#rKoxTcD|-qi5gN6E+');
define('LOGGED_IN_KEY',    'UlT(ul7dQS?1ITZ.M.<(2U,(tm{s-z<lo(QE7iA-Saq|xp3,zXOu`ixh|Za_K5[e');
define('NONCE_KEY',        'WxyOR,Q+:C6+R~v~q<XWshfo6G;!&-?vkjLl/}-RvTvr7Q%%F}v91U^9:e{}LU>-');
define('AUTH_SALT',        '*Il#] i6N7D+MA)UF:wO)Q<zeA~y/P.nDFGAkCRk: u.r1xRx>m/_[dly=9Fq*l^');
define('SECURE_AUTH_SALT', '|I5K(n-+h~cHB!Ayy@A1]7k12^6-Os6%Br;](BV/6@^Antc1qe>`1In,H&%@jLQz');
define('LOGGED_IN_SALT',   'UlLZO>t~:f*i7gSEAxY:foo+98Mv4wL=fI})2gl^0:RVakwBVPJ+[l&:-@ a-9//');
define('NONCE_SALT',       'qU}_n|F8&Kv0=%.K+Y?-y~UqjT^*Xk:-pqy#(.0NHr5Z>J#&kJrpY36@<#yUu^j2');

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
