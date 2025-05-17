<!-- filepath: c:\xampp\htdocs\HomeCare PT. Hayati\resources\views\homecare.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeCare - Solusi Terbaik untuk Keluarga Anda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f9fafb; }
    .bg-blue { background: #a3bffa !important; }
    .rounded-20 { border-radius: 20px; }
    .section-title { letter-spacing: 1px; color: #2d3748; }
    .card-homecare { border-radius: 16px; }
    .hero-img { max-height: 400px; object-fit: cover; }
    .divider { border-top: 2px solid #e2e8f0; margin: 50px 0; }
    .text-white { color: #edf2f7 !important; }
    .btn-primary { background-color: #667eea; border-color: #667eea; }
    .btn-primary:hover { background-color: #5a67d8; border-color: #5a67d8; }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-blue shadow-sm">
    <div class="container">
      <a class="navbar-brand text-white fw-bold" href="{{route('dashboard')}}">HAYATICARE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-white" href="#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#layanan">Layanan</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#kontak">Kontak</a></li>
        </ul>
        <a href="#kontak" class="btn btn-light ms-3">Konsultasi Gratis</a>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="bg-blue py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 text-white order-lg-2 text-center">
          <img src="{{ asset('images/hero.jpg') }}" alt="Homecare" class="img-fluid rounded-20 shadow hero-img">
        </div>
        <div class="col-lg-6 order-lg-1">
            <h1 class="display-4 fw-bold mb-3 text-white" >CAREGIVER</h1>
            <p class="lead mb-4 text-white text-justify">Di tengah kesibukan dan tuntutan zaman, kehadiran caregiver bukan hanya menjadi kebutuhan, 
                namun solusi nyata untuk memastikan orang-orang terkasih mendapatkan perawatan terbaik.</p>
            <div class="mb-4">
            <span class="badge bg-success me-3 px-3 py-2">Cepat</span>
            <span class="badge bg-primary me-3 px-3 py-2">Legal</span>
            <span class="badge bg-warning text-dark px-3 py-2">Terpercaya</span>
            </div>
          <a href="#kontak" class="btn btn-light btn-lg me-2">Hubungi Kami Sekarang</a>
          <a href="#kontak" class="btn btn-outline-light btn-lg">Konsultasi Gratis</a>
        </div>
      </div>
    </div>
  </section>

    <!-- SECTION MENGAPA MEMILIH KAMI -->
<section class="py-5" id="mengapa-kami">
  <div class="container">
    <div class="bg-white rounded-20 shadow-sm p-4">
      <h3 class="fw-bold text-center section-title mb-4">MENGAPA MEMILIH KAMI?</h3>
      <ul class="fs-5" style="list-style: disc inside;">
        <li><b>Tenaga Profesional & Terlatih:</b> Semua caregiver kami telah melalui proses seleksi ketat dan pelatihan khusus.</li>
        <li><b>Pendekatan Personal:</b> Kami menyesuaikan layanan dengan kebutuhan dan kondisi setiap klien.</li>
        <li><b>Layanan Fleksibel:</b> Tersedia pilihan layanan harian, mingguan, atau bulanan sesuai kebutuhan.</li>
        <li><b>Konsultasi Gratis:</b> Tim kami siap membantu Anda menentukan layanan yang paling sesuai.</li>
      </ul>
    </div>
  </div>
</section>

  <!-- SECTION KONTAK KAMI -->
  <section class="py-5" id="kontak" style="border-top: 2px solid #ddd;">
    <div class="container bg-white rounded-20 shadow-sm p-4">
      <h3 class="fw-bold text-center section-title mb-4">KONTAK KAMI</h3>
      <div class="row g-4">
        <div class="col-md-6">
            <div class="bg-white rounded-20 shadow-sm p-4 h-100">
              <h5 class="fw-bold">Hubungi Kami</h5>
              <ul class="list-unstyled">
              <li><b>Telepon:</b> 0856-4108-9399</li>
              <li><b>Email:</b> hayatirawatrumahindonesia@gmail.com</li>
              </ul>
              <a href="mailto:hayatirawatrumahindonesia@gmail.com" class="btn btn-primary mb-3">Hubungi Kami</a>
              <hr class="my-4">
              <h5 class="fw-bold">Ikuti Kami</h5>
              <ul class="list-unstyled d-flex gap-3">
                <li><a href="https://www.facebook.com/hayati.rawat.rumah.ind" target="_blank" class="text-decoration-none"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 24px; height: 24px;"></a></li>
              <li><a href="https://www.instagram.com/hayatirawatrumah/" target="_blank" class="text-decoration-none"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width: 24px; height: 24px;"></a></li>
              <li><a href="https://www.tiktok.com/@hayatirawatrumahi" target="_blank" class="text-decoration-none"><img src="{{ asset('images/tiktok.png') }}" alt="TikTok" style="width: 24px; height: 24px;"></a></li>
              </ul>
            </div>
        </div>

        <div class="col-md-6">
          <div class="bg-white rounded-20 shadow-sm p-4 h-100">
            <h5 class="fw-bold">Formulir Kontak</h5>
            <form onsubmit="sendToWhatsApp(event)">
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon Anda" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>

        <script>
            function sendToWhatsApp(event) {
                event.preventDefault();

                // Ambil nilai dari input form
                const name = document.getElementById('name').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const message = document.getElementById('message').value.trim();

                // Validasi input
                if (!name || !phone || !message) {
                    alert('Harap isi semua kolom sebelum mengirim pesan.');
                    return;
                }

                // Nomor WhatsApp tujuan (format internasional tanpa tanda +)
                const whatsappNumber = '6285641089399';

                // Format pesan untuk WhatsApp Web
                const whatsappMessage = `Halo, saya ${name}.\nNomor Telepon: ${phone}\n\nPesan:\n${message}`;
                const whatsappWebURL = `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(whatsappMessage)}`;

                // Buka URL WhatsApp Web di tab baru
                window.open(whatsappWebURL, '_blank');
            }
        </script>

              </div>
          </div>
    </section>

  <!-- FOOTER -->
  <footer class="bg-blue text-white py-5">
    <div class="container">
      <div class="row">
        <!-- About Section -->
        <div class="col-md-4">
          <h5 class="fw-bold">Tentang Kami</h5>
          <p>Kami menyediakan layanan homecare profesional yang cepat, legal, dan terpercaya untuk memenuhi kebutuhan keluarga Anda.</p>
        </div>
        <!-- Quick Links -->
        <div class="col-md-4">
          <h5 class="fw-bold">Navigasi</h5>
          <ul class="list-unstyled">
            <li><a href="#tentang" class="text-white text-decoration-none">Tentang</a></li>
            <li><a href="#layanan" class="text-white text-decoration-none">Layanan</a></li>
            <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
          </ul>
        </div>
        <!-- Contact Info -->
        <div class="col-md-4">
          <h5 class="fw-bold">Kontak Kami</h5>
          <ul class="list-unstyled">
            <li><b>Telepon:</b> 0856-4108-9399</li>
            <li><b>Email:</b> hayatirawatrumahindonesia@gmail.com</li>
          </ul>
        </div>
      </div>
      <hr class="my-4 text-white">
      <div class="text-center">
        <p class="mb-0">&copy; 2025 HayatiCare. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>