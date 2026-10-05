<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Jajang Didin</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <header class="navbar">

        <div class="nav-container">

            <a href="#" class="logo">
                &lt;/&gt; <span>Jajang Didin</span>
            </a>

            <nav>
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#project">Project</a>
                <a href="#kontak">Kontak</a>
            </nav>

        </div>

    </header>


    <!-- =========================
         HERO / BERANDA
    ========================== -->
    <section class="hero" id="beranda">

        <div class="hero-container">

            <div class="hero-text">

                <p class="hello">Halo, saya</p>

                <h1>Jajang Didin</h1>

                <h3>
                    Mahasiswa Informatika |
                    Developer |
                    Data Enthusiast
                </h3>

                <p class="description">
                    Saya adalah mahasiswa Informatika yang tertarik
                    pada teknologi, pengembangan web, kecerdasan
                    buatan, dan data science. Saat ini saya sedang
                    mempelajari berbagai teknologi dalam bidang
                    Informatika, khususnya pengembangan aplikasi
                    berbasis web dan kecerdasan buatan.
                </p>

                <div class="hero-buttons">

                    <a href="#kontak" class="btn primary">
                        Hubungi Saya
                    </a>

                    <a href="#project" class="btn secondary">
                        Lihat Project
                    </a>

                </div>

            </div>


            <!-- FOTO PROFIL -->
            <div class="hero-image">

                <div class="image-decoration"></div>

                <img
                    src="{{ asset('images/profil.png') }}"
                    alt="Foto Profil Jajang Didin"
                >

            </div>

        </div>

    </section>


    <!-- =========================
         KONTEN UTAMA
    ========================== -->
    <main class="container">


        <!-- =========================
             TENTANG SAYA
        ========================== -->
        <section class="section" id="tentang">

            <div class="about-card">

                <div class="quote-icon">
                    “
                </div>

                <div>

                    <h2>Kutipan</h2>

                    <blockquote>
                        "Kesuksesan adalah hasil dari usaha
                        dan proses yang dilakukan secara konsisten."
                    </blockquote>

                </div>

            </div>

        </section>


        <!-- =========================
             TIGA KOLOM
        ========================== -->
        <section class="three-column">


            <!-- KEAHLIAN -->
            <div class="card">

                <div class="card-title">
                    <span class="icon">✦</span>
                    <h2>Keahlian</h2>
                </div>

                <ul class="skill-list">

                    <li>
                        <span class="skill-icon html">5</span>
                        HTML
                    </li>

                    <li>
                        <span class="skill-icon css">3</span>
                        CSS
                    </li>

                    <li>
                        <span class="skill-icon php">php</span>
                        PHP
                    </li>

                    <li>
                        <span class="skill-icon laravel">L</span>
                        Laravel
                    </li>

                    <li>
                        <span class="skill-icon python">Py</span>
                        Python
                    </li>

                    <li>
                        <span class="skill-icon data">DS</span>
                        Data Science
                    </li>

                    <li>
                        <span class="skill-icon ai">AI</span>
                        Kecerdasan Buatan
                    </li>

                </ul>

            </div>


            <!-- HOBI -->
            <div class="card">

                <div class="card-title">
                    <span class="icon">☆</span>
                    <h2>Hobi</h2>
                </div>

                <ol class="hobby-list">

                    <li>Belajar teknologi</li>

                    <li>Membuat project</li>

                    <li>Mempelajari kecerdasan buatan</li>

                    <li>Membaca</li>

                </ol>

                <div class="hobby-decoration">
                    &lt;/&gt;
                </div>

            </div>


            <!-- PROJECT -->
            <div class="card project-card" id="project">

                <div class="card-title">

                    <span class="icon">▣</span>

                    <h2>
                        Pengalaman dan Project
                    </h2>

                </div>

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Project / Kegiatan</th>
                                <th>Teknologi</th>
                                <th>Tahun</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>EcoScan AI</td>
                                <td>Python, AI, Streamlit</td>
                                <td>2026</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>SkripsiVibe AI</td>
                                <td>AI, NLP, Gemini, Whisper</td>
                                <td>2026</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Web Portfolio</td>
                                <td>HTML, Laravel</td>
                                <td>2026</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


        <!-- =========================
             INFORMASI TAMBAHAN
        ========================== -->
        <section class="info-card">

            <div class="card-title">

                <span class="icon">▤</span>

                <h2>
                    Informasi Tambahan
                </h2>

            </div>

            <p>
                Saya sedang
                <strong>belajar pengembangan web</strong>
                menggunakan Laravel.
            </p>

            <p>
                Saya juga tertarik dengan
                <em>Artificial Intelligence</em>
                dan
                <mark>Data Science</mark>.
            </p>

        </section>


        <!-- =========================
             KONTAK
        ========================== -->
        <section class="contact-grid" id="kontak">


            <!-- SOCIAL MEDIA -->
            <div class="card">

                <div class="card-title">

                    <span class="icon">●</span>

                    <h2>Media Sosial</h2>

                </div>


                <a
                    href="https://www.instagram.com/cardboxs_?stkn=bWF1dXkyNHVnc2Jy"
                    target="_blank"
                    class="social-link"
                >

                    <span>
                        📷 Instagram
                    </span>

                    <span>→</span>

                </a>


                <a
                    href="https://www.linkedin.com/in/jajangdidin"
                    target="_blank"
                    class="social-link"
                >

                    <span>
                        💼 LinkedIn
                    </span>

                    <span>→</span>

                </a>

            </div>


            <!-- AUDIO -->
            <div class="card">

                <div class="card-title">

                    <span class="icon">♫</span>

                    <h2>Lagu Favorit</h2>

                </div>

                <audio controls class="audio-player">

                    <source
                        src="{{ asset('audio/lagu.mp3') }}"
                        type="audio/mpeg"
                    >

                    Browser Anda tidak mendukung
                    pemutar audio.

                </audio>

                <p class="audio-text">
                    Nikmati musik favorit saya 🎧
                </p>

            </div>

        </section>


        <!-- =========================
             VIDEO KARYA
        ========================== -->
        <section class="video-card">

            <div class="card-title">

                <span class="icon">▶</span>

                <h2>Video Karya</h2>

            </div>

            <div class="video-container">

                <!--
                    GANTI VIDEO_ID DENGAN ID VIDEO YOUTUBE
                    MILIK KAMU
                -->

                <iframe
                    src="https://www.youtube.com/embed/smAKCgr2JEg"
                    title="Video Karya Jajang Didin"
                    allowfullscreen>
                </iframe>

            </div>

        </section>


    </main>


    <!-- =========================
         FOOTER
    ========================== -->
    <footer>

        <div class="footer-container">

            <p>
                &copy; 2026 Jajang Didin.
                Semua hak dilindungi.
            </p>

            <div class="footer-social">

                <a
                    href="https://www.instagram.com/cardboxs_?stkn=bWF1dXkyNHVnc2Jy"
                    target="_blank"
                >
                    Instagram
                </a>

                <a
                    href="https://www.linkedin.com/in/jajangdidin"
                    target="_blank"
                >
                    LinkedIn
                </a>

            </div>

        </div>

    </footer>


</body>

</html>