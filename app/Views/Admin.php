<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
    <?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
    <li class="breadcrumb-item active"><a href="#">Home</a></li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <p>Este es el cuerpo de mi página.</p>
<?= $this->endSection() ?>