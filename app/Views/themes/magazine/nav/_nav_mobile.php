<div class="header-mobile-container">
<div class="fixed-top">
<div class="header-mobile">
<div class="d-flex justify-content-between align-items-center">
<button type="button" class="menu-button mobile-menu-button" aria-label="menu">
<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="#222222" stroke-width="2" height="24" width="24" viewBox="0 0 24 24">
<line x1="2" y1="4" x2="22" y2="4"></line>
<line x1="2" y1="11" x2="22" y2="11"></line>
<line x1="2" y1="18" x2="22" y2="18"></line>
</svg>
</button>
<div class="mobile-logo">
<a href="<?= langBaseUrl(); ?>">
<img src="<?= $darkMode == 1 ? getLogoFooter() : getLogo(); ?>" alt="logo" class="logo" width="150" height="50">
</a>
</div>
<div class="mobile-search">
<button type="button" class="menu-button mobile-search-button" aria-label="search">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
<circle cx="11" cy="11" r="8"></circle>
<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>
</button>
</div>
</div>
<div class="mobile-search-form">
<form action="<?= generateURL('search'); ?>" method="get" id="search_validate">
<div class="display-flex align-items-center">
<input type="text" name="q" maxlength="300" pattern=".*\S+.*" class="form-control form-input" placeholder="<?= trans("placeholder_search"); ?>" <?= $rtl == true ? 'dir="rtl"' : ''; ?> required>
<button class="btn btn-custom" aria-label="search">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
<circle cx="11" cy="11" r="8"></circle>
<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>
</button>
</div>
</form>
</div>
</div>
</div>
</div>

<div id="navMobile" class="nav-mobile">
<div class="nav-mobile-inner">
<div class="row">
<div class="col-12 mb-3">
<ul class="nav navbar-nav">
<?php if ($generalSettings->show_home_link == 1): ?>
<li class="nav-item"><a href="<?= langBaseUrl(); ?>" class="nav-link"><?= trans("home"); ?></a></li>
<?php endif;
if (!empty($baseMenuLinks)):
foreach ($baseMenuLinks as $item):
if ($item->item_visibility == 1 && ($item->item_location == "top" || $item->item_location == "main") && $item->item_parent_id == "0"):
$subLinks = getSubMenuLinks($baseMenuLinks, $item->item_id, $item->item_type);
if (!empty($subLinks)): ?>
<li class="nav-item dropdown">
<a href="#" class="dropdown-toggle d-flex justify-content-between nav-link" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
<span><?= esc($item->item_name) ?></span>
<i class="icon-arrow-down"></i>
</a>
<ul class="dropdown-menu menu-sub-items">
<?php if ($item->item_type == "category"): ?>
<li class="nav-item"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>" class="nav-link"><?= trans("all"); ?></a></li>
<?php endif;
foreach ($subLinks as $sub):
if ($sub->item_visibility == 1):?>
<li class="nav-item"><a href="<?= generateMenuItemURL($sub, $baseCategories); ?>" class="nav-link"><?= esc($sub->item_name) ?></a></li>
<?php endif;
endforeach; ?>
</ul>
</li>
<?php else: ?>
<li class="nav-item"><a href="<?= generateMenuItemURL($item, $baseCategories); ?>" class="nav-link"><?= esc($item->item_name) ?></a></li>
<?php endif;
endif;
endforeach;
endif; ?>
</ul>
</div>
<div class="col-4">
<form action="<?= base_url('switch-dark-mode'); ?>" method="post">
<?= csrf_field(); ?>
<input type="hidden" name="back_url" value="<?= currentFullURL(); ?>">
<?php if ($darkMode == 1): ?>
<button type="submit" name="theme_mode" value="light" class="btn btn-md btn-default btn-switch-mode-mobile" aria-label="dark-mode">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
<path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg>
</button>
<?php else: ?>
<button type="submit" name="theme_mode" value="dark" class="btn btn-md btn-default btn-switch-mode-mobile" aria-label="dark-mode">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="dark-mode-icon" viewBox="0 0 16 16">
<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
</svg>
</button>
<?php endif; ?>
</form>
</div>
</div>
</div>
</div>
<div id="overlay_bg" class="overlay-bg"></div>