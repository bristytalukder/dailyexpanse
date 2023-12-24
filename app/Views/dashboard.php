
<?= $this->extend('backend/nav') ?>
<?= $this->section('content') ?>
<!----------------------------- Start Content ------------------------------->

<?= $this->include('backend/mainContent') ?>

<!----------------------------- End Content ------------------------------->
<?= $this->include('backend/footer') ?>
<?= $this->endSection('content') ?>