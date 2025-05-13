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
      <a class="navbar-brand text-white fw-bold" href="#">HOMECARE</a>
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
            <h1 class="display-4 fw-bold mb-3 text-white">Solusi Terbaik untuk Keluarga Anda</h1>
            <p class="lead mb-4 text-white">Butuh Perawat Lansia, Babysitter, atau ART yang Terlatih dan Amanah?<br>
            Kami hadir memberikan layanan Home Care & Penyalur Tenaga Profesional ke Rumah Anda.</p>
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

  <!-- SECTION TENTANG KAMI -->
  <section class="py-5" id="tentang">
    <div class="container">
      <div class="row g-4">
        <!-- Tentang Kami -->
        <div class="col-md-6">
          <div class="bg-white rounded-20 shadow-sm p-4 h-100">
            <h3 class="fw-bold text-center section-title mb-3">TENTANG KAMI</h3>
            <p>Produk kami merupakan hasil terbaik yang dirancang untuk memenuhi kebutuhan keluarga Anda. Kami menyediakan layanan yang cepat, legal, dan terpercaya.</p>
          </div>
        </div>
        <!-- Visi & Misi -->
        <div class="col-md-6">
          <div class="bg-white rounded-20 shadow-sm p-4 h-100">
            <h3 class="fw-bold text-center section-title mb-3">VISI & MISI</h3>
            <ul>
              <li>Menyediakan layanan homecare profesional yang terpercaya.</li>
              <li>Memberikan solusi terbaik untuk kebutuhan keluarga Anda.</li>
              <li>Memastikan layanan yang amanah, berkualitas, dan sesuai kebutuhan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION LAYANAN -->
  <section class="py-5" id="layanan" style="border-top: 2px solid #ddd;">
    <div class="container">
      <h3 class="fw-bold section-title mb-4">LAYANAN</h3>
      <div class="row g-4">
        <!-- Perawat & Bidan Home Care -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Perawat & Bidan Home Care">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Perawat & Bidan Home Care</h5>
              <p class="card-text">Layanan kesehatan di rumah oleh perawat atau bidan profesional.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="{{route('views/homecare')}}" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Caregiver -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Caregiver">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Caregiver</h5>
              <p class="card-text">Pendamping aktivitas harian untuk pasien atau lansia.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Babysitter -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Babysitter">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Babysitter</h5>
              <p class="card-text">Tenaga profesional untuk menjaga dan merawat anak Anda.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Asisten Rumah Tangga -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Asisten Rumah Tangga">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Asisten Rumah Tangga</h5>
              <p class="card-text">Layanan ART untuk membantu pekerjaan rumah tangga Anda.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION LAYANAN HOME CARE -->
  <section class="py-5" id="layanan-homecare" style="border-top: 2px solid #ddd;">
    <div class="container">
      <h3 class="fw-bold section-title mb-4">LAYANAN HOME CARE</h3>
      <div class="row g-4">
        <!-- Rawat Medis -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Rawat Medis">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Rawat Medis</h5>
              <p class="card-text">Layanan perawatan medis di rumah oleh tenaga kesehatan profesional.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Rawat Orang Sakit -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Rawat Orang Sakit">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Rawat Orang Sakit</h5>
              <p class="card-text">Pendampingan dan perawatan untuk pasien yang sedang sakit.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Rawat Jaga di RS -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Rawat Jaga di RS">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Rawat Jaga di Rumah Sakit</h5>
              <p class="card-text">Layanan pendampingan pasien selama dirawat di rumah sakit.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
        <!-- Rawat Lansia -->
        <div class="col-md-6 col-lg-3">
          <div class="card shadow-sm border-0 rounded-20 h-100">
            <img src="https://via.placeholder.com/300x200" class="card-img-top rounded-top" alt="Rawat Lansia">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Rawat Lansia</h5>
              <p class="card-text">Perawatan khusus untuk lansia dengan kebutuhan tertentu.</p>
              <p class="fw-bold text-primary">Rp. 0</p>
              <a href="#" class="btn btn-primary btn-sm">Detail</a>
            </div>
          </div>
        </div>
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
              <li><b>Alamat:</b> JL Alamat Lengkap Jakarta</li>
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
            <li><b>Alamat:</b> JL Alamat Lengkap Jakarta</li>
          </ul>
        </div>
      </div>
      <hr class="my-4 text-white">
      <div class="text-center">
        <p class="mb-0">&copy; 2024 HomeCare. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>