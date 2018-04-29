<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <?php foreach ($data as $key=>$item): ?>

            <div class="row">
                <div class="col-lg-2">
                    <?php echo $item['phenotype']; ?>
                </div>
                <div class="col-lg-4">
                    <?php echo $item['genotype']; ?>
                </div>
                <div class="col-lg-2">
                    <?php echo $item['genotypeName']; ?>
                </div>
                <div class="col-lg-4">
                    <?php echo $item['geneFormula']; ?>
                </div>
            </div>

        <?php endforeach ?>

    </div>
</div>
