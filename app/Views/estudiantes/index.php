<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
    <?= $title ?>
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Estudiantes</li>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <p>Este es el cuerpo de mi página.</p>
<?= $this->endSection() ?>