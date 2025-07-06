<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    

    <div style="max-width: 800px; margin: 30px auto; padding: 0 20px;">
        <div style="background-color: #fff3cd; padding: 20px; border-left: 5px solid #ffc107; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 20px;">
            <p style="margin: 0; font-size: 18px;"><i class="fas fa-newspaper" style="color: #ffc107;"></i> <strong>Selamat datang di portal artikel kami!</strong> Di sini, kamu bisa menemukan berbagai konten menarik seputar pendidikan, teknologi, pengembangan diri, dan banyak lagi.</p>
        </div>

        <div style="margin-top: 25px;">
            <h3><i class="fas fa-compass" style="color: #2196F3;"></i> Jelajahi Artikel Unggulan</h3>
            <ul style="padding-left: 20px; line-height: 1.8;">
                <li><i class="fas fa-book-open" style="color: #4caf50;"></i> Wawasan tentang pendidikan modern dan peran teknologi di dalamnya.</li>
                <li><i class="fas fa-tools" style="color: #4caf50;"></i> Pembahasan seputar keterampilan teknis yang aplikatif di era digital.</li>
                <li><i class="fas fa-users" style="color: #4caf50;"></i> Inspirasi dari komunitas, kegiatan edukatif, dan pengalaman lapangan.</li>
            </ul>

            <p style="margin-top: 10px;"><i class="fas fa-hand-point-right" style="color: #f57c00;"></i> Yuk, mulai jelajahi dan temukan artikel yang sesuai dengan minatmu!</p>
        </div>
    </div>
<?= $this->endSection() ?>
