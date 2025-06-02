<!DOCTYPE html>
<html lang="<?= $activeLang->short_form; ?>" <?= $rtl ? 'dir="rtl"' : ''; ?>>
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="ahrefs-site-verification" content="eb3f8c75a35d15bc6550b44453eb1eada26778080aa948d568e188f394b6eff4">
<title><?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?></title>
<meta name="description" content="<?= escSls($description); ?>"/>
<meta name="keywords" content="<?= escSls($keywords); ?>"/>
<meta name="author" content="<?= escSls($baseSettings->application_name); ?>"/>
<meta name="author" content="<?= $ogAuthor; ?>"/>
<meta property="og:locale" content="ja_JP"/>
<meta property="og:site_name" content="<?= escSls($baseSettings->application_name); ?>"/>
<link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
<meta name="author" content="bfmedia（ビエフメディア）">
<?= csrf_meta(); ?>
<?php if (isset($postType)): ?>
<meta property="og:type" content="<?= $ogType; ?>"/>
<meta property="og:title" content="<?= $ogTitle; ?>"/>
<meta property="og:description" content="<?= escSls($description); ?>"/>
<meta property="og:url" content="<?= currentFullURL(); ?>"/>
<meta property="og:image" content="<?= $ogImage; ?>"/>
<meta property="og:image:width" content="<?= $ogWidth; ?>"/>
<meta property="og:image:height" content="<?= $ogHeight; ?>"/>
<meta property="article:author" content="<?= $ogAuthor; ?>"/>
<meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
<meta property="fb:app:id" content="<?= $generalSettings->facebook_app_id; ?>"/>
<?php foreach ($ogTags as $tag): ?>
<meta property="article:tag" content="<?= escSls($tag->tag); ?>"/>
<?php endforeach; ?>
<meta property="article:published_time" content="<?= $ogPublishedTime; ?>"/>
<meta property="article:modified_time" content="<?= $ogModifiedTime; ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
<meta name="twitter:creator" content="@<?= escSls($ogCreator); ?>"/>
<meta name="twitter:title" content="<?= escSls($post->title); ?>"/>
<meta name="twitter:description" content="<?= escSls($description); ?>"/>
<meta name="twitter:image" content="<?= $ogImage; ?>"/>
<?php else: ?>
<meta property="og:image" content="<?= getLogo(); ?>"/>
<meta property="og:image:width" content="240"/>
<meta property="og:image:height" content="90"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
<meta property="og:description" content="<?= escSls($description); ?>"/>
<meta property="og:url" content="<?= currentFullURL(); ?>"/>
<meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
<meta property="fb:app:id" content="<?= $generalSettings->facebook_app_id; ?>"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
<meta name="twitter:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
<meta name="twitter:description" content="<?= escSls($description); ?>"/>
<?php endif;
if ($generalSettings->pwa_status == 1): ?>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?= escSls($baseSettings->application_name); ?>">
<meta name="msapplication-TileImage" content="<?= base_url('assets/img/pwa/144x144.png'); ?>">
<meta name="msapplication-TileColor" content="#2F3BA2">
<link rel="manifest" href="<?= base_url('manifest.json'); ?>">
<link rel="apple-touch-icon" href="<?= base_url('assets/img/pwa/144x144.png'); ?>">
<?php endif; ?>
<link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>
<link rel="canonical" href="<?= currentFullURL(); ?>"/>
<link rel="alternate" href="<?= currentFullURL(); ?>" hreflang="<?= $activeLang->language_code; ?>"/>
<?= view('common/_fonts'); ?>
<?php if ($activeLang->text_direction == 'rtl'): ?>
<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.rtl.min.css'); ?>" rel="stylesheet">
<?php else: ?>
<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<?php endif; ?>
<link href="<?= base_url($assetsPath . '/css/icons-2.2.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url($assetsPath . '/css/plugins-2.2.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url($assetsPath . '/css/style-2.2.min.css'); ?>" rel="stylesheet">
<?php if ($rtl): ?>
<link href="<?= base_url($assetsPath . '/css/rtl-2.2.min.css'); ?>" rel="stylesheet"/>
<?php endif;
if ($darkMode == true) : ?>
<link href="<?= base_url($assetsPath . '/css/dark-2.2.min.css'); ?>" rel="stylesheet"/>
<?php endif; ?>
<link href="<?= base_url($assetsPath . '/css/custom.css'); ?>" rel="stylesheet"/>
<link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>?v=2" />
<?= loadView('partials/_css_js_header'); ?>
<?= $generalSettings->custom_header_codes; ?>
<meta name="google-site-verification" content="c7t0BySOTJoXpYjTRP6b7p1ZvaO4UFM0Q-ng-QVwXa8" />
<!-- GTM-1 -->
<!-- Google Tag Manager (noscript) -->
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV7LWBV6"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TV7LWBV6');</script>
<!-- End Google Tag Manager -->
<meta name="facebook-domain-verification" content="a128fsc32lceieusi2hinj9hdfrtnu" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5DZP2JZV93"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5DZP2JZV93');
</script>
<!-- Google tag (gtag.js) -->
<!-- AMP Analytics --><script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8" type="text/javascript"></script>
</head>
<body class="<?= $activeTheme->theme; ?>">
<!-- Google Tag Manager -->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-NN77HP7X&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
<?= loadView('nav/_nav_top'); ?>
<header id="header" <?= isset($headerNoMargin) ? 'class="mb-0"' : ''; ?>>
<?= loadView('nav/_nav_main'); ?>
<?= loadView('nav/_nav_mobile'); ?>
</header>
<?= loadView('partials/_ad_spaces', ['adSpace' => 'header', 'class' => 'mb-3']); ?>
<?= loadView('partials/_modals'); ?>