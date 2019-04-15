<?php $this->layout('base'); ?>
<?php $this->start('content'); ?>
    <h2><?php echo $this->e($pageTitle); ?></h2>
    <p class="date">
        <small>Published on <?php echo $this->e($post['published']); ?></small>
    </p>
<?php if ($post['modified']) {
    ?>
    <p>
        <small>Last updated: <?php echo $this->e($post['modified']); ?></small>
    </p>
<?php
} ?>
    
    <?php echo $post['htmlContent']; ?>

    <p class="center"><small><a href="<?php echo $this->e($requestRoot); ?>index.html">Index</a></small></p>
<?php $this->stop(); ?>
