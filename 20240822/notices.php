<?php
$notice = $_REQUEST['notice'];
$size = $_REQUEST['size'];
?>
<div class="col s<?= $size ?>">
    <div class="card">
        <div class="card-image">
            <img src="<?= $notice['image'] ?>">
            <span class="card-title"><?= $notice['title'] ?></span>
            <?php if ($size < 6) {
                ?>
                <a class="btn-floating halfway-fab waves-effect waves-light red" href="?id=<?= $notice['id'] ?>"><i
                        class="material-icons">add</i></a>
                <?php
            } ?>
        </div>
        <div class="card-content">
            <p><?= $notice['content'] ?></p>
        </div>
    </div>
</div>