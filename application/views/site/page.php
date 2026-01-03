<?php
    if($page->status == 'draft') {
        echo '';
    } else {
?>

<h1><?= $page->title ?></h1>
<div><?= $page->content ?></div>
<?php } ?>