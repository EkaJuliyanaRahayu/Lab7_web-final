<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    #kontak {
        max-width: 800px;
        margin: 40px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }

    .info-kontak h3 {
        margin-top: 0;
        color: #2196F3;
        font-size: 24px;
        border-bottom: 2px solid #2196F3;
        padding-bottom: 10px;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin: 20px 0;
    }

    .info-item i {
        font-size: 20px;
        color: #2196F3;
        margin-right: 15px;
        min-width: 25px;
    }

    .info-text strong {
        display: block;
        font-size: 16px;
    }

    a {
        color: #2196F3;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<section id="kontak">
    <div class="info-kontak">
        <h3>📞 Hubungi Saya</h3>

        <div class="info-item">
            <i class="fas fa-user"></i>
            <div class="info-text">
                <strong>Nama:</strong>
                Eka Juliyana Rahayu
            </div>
        </div>

        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <div class="info-text">
                <strong>Email:</strong>
                <a href="mailto:eka610407@gmail.com">eka610407@gmail.com</a>
            </div>
        </div>

        <div class="info-item">
            <i class="fas fa-star"></i>
            <div class="info-text">
                <strong>Profil Singkat:</strong>
                Aktif dalam kegiatan berbagi ilmu dan memiliki minat di bidang teknologi serta pengembangan diri.
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
