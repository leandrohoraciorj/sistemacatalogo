<?php

set_time_limit(90);

ob_start();

error_reporting(0);

// error_reporting(E_ALL);

// Time

date_default_timezone_set('America/Sao_Paulo');

// Url

$httprotocol = "https://";

if( !$_SERVER['HTTPS'] ) {
	$fixprotocol = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	header("Location: ".$fixprotocol);
}

$suport_url = $httprotocol."localhost/";
$system_url = $httprotocol."localhost/administracao";
$panel_url = $httprotocol."localhost/painel";
$admin_url = $httprotocol."localhost/administracao";
$just_url = $httprotocol."localhost";
$app_url = $httprotocol."localhost/app";
$simple_url = "localhost";
$afiliado_url = $httprotocol."localhost/afiliado";

// Comissão Afiliados
$comissao_afiliados = "10";

// Title

$seo_title = "BrandX";
$seo_description = "Compre sem sair de casa!";
//$titulo_topo = "<strong>.</strong>"; //TITULO DA LOGO PARA USAR TITULO INVES DE IMAGEM TIRAR OS // DO COMEÇO E COLOCAR NO DE BAIXO 
$titulo_topo = '<img src="/_core/_cdn/img/logo.png">'; //US4R LOGO INVES DE TITUL5
$titulo_rodape ="BrandX";
$sub_titulo_rodape ="O CATÁLOGO VIRTUAL DESCOMPLICADO!"; //Endereço ou Slogan
$titulo_rodape_marketplace ="BrandX, Compre sem sair de casa!"; //Endereço ou Slogan


// Redes/Whatsapp/Email
$whatsapp = "21981805288";
$usrtelefone = "21981805288";
$email ="contato@brandxmenu.com.br";
$youtube ="https://www.youtube.com/";
$instagram="https://www.instagram.com/";
$facebook ="https://www.facebook.com/61555428296044";

// Db

$db_host = "localhost";
$db_user = "catalogolocal";
$db_pass = " ";
$db_name = "catalogolocal";

// SMTP

$smtp_name = "BrandX";
$smtp_user = "noreply@brandxmenu.com.br";
$smtp_pass = "@@dsaee2342dary";

// Manunten

$manutencao = false;

if( $manutencao ) {

	include("manutencao.php");
	die;

}

// Includes

include("functions.php");

// Tokens


// Recaptcha
// Gerar em: https://www.google.com/recaptcha/admin/
$recaptcha_sitekey = "6LdafUcpAAAAAEi3pQAqp8ZXlep6sEWwqn7IpJgR";
$recaptcha_secretkey = "6LdafUcpAAAAAHA12QjCROEpOn-_Wrh3EftCDG4g";

//External token Utilizado para receber os callbacks do mercado pago pro sistema, pode manter padr
$external_token = "LfBMLcUA4BR3A1AAAALxKYfylrPMhMMg35IskTG4R7jYw181120";

// Mercado pago
// Gerar em: https://www.mercadopago.com.br/developers/panel/credentials
$mp_sandbox = false;

if ($mp_sandbox == true) {
	$mp_public_key = "TEST-0ce721b5-3fa1-425b-b7c1-e08aed663f35";
	$mp_acess_token = "TEST-4189263805309382-010513-6216149706c6cacd32b64a33ccc18f9f-803648656";
} else {
	$mp_public_key = "APP_USR-57857228-8612-4029-b809-e8ab24fa9195";
	$mp_acess_token = "APP_USR-4189263805309382-010513-e119ce0d70e23c936297381c7bb15d32-803648656";
	$mp_client_id = "4189263805309382";
	$mp_client_secret = "iIFh4Bc2L25xzYh7E9OiUV85M2zcTJVo";
}

// Plano padr (id)

$plano_default = "5";

// Root path

$rootpath = $_SERVER["DOCUMENT_ROOT"];

// Images

$image_max_width = 1000;
$image_max_height = 1000;
$gallery_max_files  = 10;

// Global header and footer

$system_header = "";
$system_footer = "";

// Keep Alive

if( $_SESSION['user']['logged'] == "1" && strlen( $_SESSION['user']['keepalive'] ) >= 10 && $_SESSION['user']['keepalive'] != $_COOKIE['keepalive'] ) {
	setcookie( 'keepalive', "kill", time() - 3600 );
	if( strlen( $_SESSION['user']['keepalive'] ) >= 10 ) {
		setcookie( 'keepalive', $_SESSION['user']['keepalive'], (time() + (120 * 24 * 3600)) );
	}
}

$keepalive = $_COOKIE['keepalive'];

if( $_SESSION['user']['logged'] != "1" && strlen( $keepalive ) >= 10 ) {

	make_login($keepalive,"","keepalive","2");

}

?>