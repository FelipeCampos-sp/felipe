<?php


define('MAILUSER', "felipe.ferreiraa.campos@gmail.com");
define('MAILPASS', "mercenario82");
define('MAILPORT', 587);
define('MAILHOST', "smtp.gmail.com");



define('HOME', 'https://www.publisheweb.com.br');
// define('HOME', 'http:/publisheweb.com.br');
//define('HOME', 'https://www.upinside.com.br/projetos/wshtml5');
define('THEME', 'publishe');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);

define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);   

$pg_name = 'Publisheweb | Agencia Web!';
$pg_site = 'Publishe Web';
$pg_google_author = '108289759262433735086';
$pg_google_publisher = 'b/105879958045370823527/105879958045370823527/posts/QGErEDVtpsk?pageId=105879958045370823527&hl=pt-BR&lbcont=https://business.google.com/b/105879958045370823527/photos/l/02861134735260579760%3Fhl=pt-BR&_ga=1.148171775.97055620.1456992158&pid=6258084059561664418&oid=105879958045370823527';
// $pg_fb_app = '517675305100995';
$pg_fb_app = '1645688398824202';
$pg_fb_author = 'felipe.ferreiracampos.9';
$pg_fb_page = 'publisheweb';
// $pg_twitter = '@PublisheWebBr';
$pg_twitter = 'PublisheWebBr';
$twitter_id = '706375554593898496';
$pg_domain = 'http://www.publisheweb.com.br';
$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = 'Conheça a Publishe Web sua Nova Agencia Web';
        $pg_desc = 'Esse Site Esta Sendo Desenvolvido Pela Publishe Web Melhor Agencia De Web';
        $pg_image = $pg_sitekit . 'index.jpg';
        $pg_url = 'http://publisheweb.com.br';
        break;

endswitch;

function SitemapPing() {
    $SitemapPing = array();
    $SitemapPing['g'] = 'http://www.google.com/webmasters/tools/ping?sitemap=' . HOME . '/sitemap.xml';
    $SitemapPing['b'] = 'http://www.bing.com/webmaster/ping.aspx?siteMap=' . HOME . '/sitemap.xml';

    foreach ($SitemapPing as $sitemapUrl):
        $ch = curl_init($sitemapUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
    endforeach;
}

if (!file_exists('sitemap.xml.gz')):
    $gzip = gzopen('sitemap.xml.gz', 'w9');
    $gmap = file_get_contents('sitemap.xml');
    gzwrite($gzip, $gmap);
    gzclose($gzip);
    SitemapPing();
endif;
