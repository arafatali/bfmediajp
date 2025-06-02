<?php 
if ($generalSettings->show_post_date == 1): ?>
    <span><?= formatDateFront($postItem->created_at); ?></span>
<?php endif;
if ($generalSettings->comment_system == 1): ?>
    <span><i class="icon-comment"></i>&nbsp;<?= $postItem->comment_count; ?></span>
<?php endif;
if ($generalSettings->show_hits): ?>
    <span class="m-r-0"><i class="icon-eye"></i>&nbsp;<?= isset($postItem->pageviews_count) ? $postItem->pageviews_count : $postItem->pageviews; ?></span>
<?php endif; ?>