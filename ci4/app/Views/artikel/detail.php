<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<article class="entry">
    <h2><?= esc($artikel['judul']); ?></h2>

    <?php if (!empty($artikel['gambar'])) : ?>
        <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?= esc($artikel['judul']); ?>" class="artikel-gambar">
    <?php endif; ?>

    <div>
        <?= $artikel['isi']; ?>
    </div>
</article>

<?= $this->endSection() ?>
