@extends('component.template')
@section('container')
@include('component.login')
    <section class="hero" id="hero">
        <div class="container">
            <div class="text">
                <h1>Belajar<span class="text-berjalan"></span></h1>
                <h2>Lebih Mudah & Menyenangkan</h2>
            </div>
            <div class="cild-container">
                <div class="content">
                    <h3>
                        Mengaji Qur’an <br />
                        Bersama Almaas Mentor Terbaik
                    </h3>
                    <p>
                        Rasakan Indahnya Kehangatan Batin dalam Perjalanan Mengaji
                        Al-Qur'an Bersama Almaas: Menuju Terwujudnya Generasi Islam
                        Berkualitas, Beradab, dan Berakhlakul Karimah yang Menginspirasi!"
                    </p>
                    <a href="#register"><button>Daftar Sekarang</button></a>
                </div>
                <img src="../img/image1.png" alt="" />
            </div>
        </div>
    </section>

    <section class="memilih">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#184e00" fill-opacity="1"
                d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,112C672,107,768,149,864,149.3C960,149,1056,107,1152,112C1248,117,1344,171,1392,197.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="sub-judul">
                <h3>Kenapa Memilih <span>Almaas?</span></h3>
                <p>Almaas melayani privat ngaji online di seluruh Indonesia</p>
            </div>
            <div class="alasan">
                <div class="cild-alasan">
                    <img src="../img/muslim-1.png" alt="" />
                    <div class="text-alasan">
                        <h4>Guru Profesional</h4>
                        <p>
                            Guru profesional, berpengalaman, lulusan pesantren dan
                            universitas Islam.
                        </p>
                    </div>
                </div>
                <div class="cild-alasan">
                    <img src="../img/muslim-2.png" alt="" />
                    <div class="text-alasan">
                        <h4>Free Konsultasi</h4>
                        <p>
                            Guru profesional, berpengalaman, lulusan pesantren dan
                            universitas Islam.
                        </p>
                    </div>
                </div>
                <div class="cild-alasan">
                    <img src="../img/01.png" alt="" />
                    <div class="text-alasan">
                        <h4>Semua Usia</h4>
                        <p>Kami menerima murid semua usia dari balita hingga lansia</p>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <h3>Sekarang Belajar Membaca Al-Qurán Jadi Lebih Mudah</h3>
                    <p>
                        Mudah daftarnya, mudah belajarnya, mudah atur jadwalnya, mudah
                        atur tempatnya, mudah metodenya, mudah pembelajarannya dan mudah
                        evaluasinya. Privatngaji.com menawarkan kamu kemudahan untuk dekat
                        dengan Quran. Mari belajar ngaji online.
                    </p>
                </div>
                <button>Konsultasi Gratis</button>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,112C672,107,768,149,864,149.3C960,149,1056,107,1152,112C1248,117,1344,171,1392,197.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <h3>Tentang <span>Kami</span></h3>
            <p>
                Kami adalah lembaga bimbingan belajar / kursus yang berfokus pada
                pembelajaran Al Quran dan Bahasa Arab. Berdiri sejak tahun 2018,
                alhamdulilah saat ini kami sudah memiliki ratusan murid dari berbagai
                wilayah Indonesia dan beberapa negara lainnya, lebih dari 100 guru
                ngaji juga sudah bergabung bersama kami.
            </p>
            <p>
                Kami menyediakan layanan privat ngaji online untuk semua kalangan,
                pria – wanita, anak-anak hingga dewasa, serta dari pemula hingga
                mahir. Kami memberikan solusi bagi anda yang kesulitan ingin belajar
                membaca Al Quran dan Bahasa Arab, dengan memberikan kemudahan dari
                segi guru, materi, kurikulum, fasilitas dan sebagainya
            </p>
        </div>
    </section>

    <section class="program" id="program">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
            <path fill="#184e00" fill-opacity="1"
                d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,112C672,107,768,149,864,149.3C960,149,1056,107,1152,112C1248,117,1344,171,1392,197.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <h3>Program Kami</h3>
            <div class="cild-program">
                <div class="box-program">
                    <img src="{{ asset('img/NGAJI.png') }}" alt="">
                </div>
                <div class="box-program">
                    <img src="../img/NGAJI-1.png" alt="" />
                </div>
                <div class="box-program">
                    <img src="../img/NGAJI-2.png" alt="" />
                </div>
                <div class="box-program">
                    <img src="../img/NGAJI-3.png" alt="" />
                </div>
                <div class="box-program">
                    <img src="../img/NGAJI-4.png" alt="" />
                </div>
                <div class="box-program">
                    <img src="../img/NGAJI-5.png" alt="" />
                </div>
            </div>

            <div class="youtube">
                <iframe height="315" src="https://www.youtube.com/embed/MgpBAPqjzOo?si=BIDmN3h5tEPz4a_8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe height="315" src="https://www.youtube.com/embed/cS9-3m4-470"
                    title="Berbagi Jumat Berkah 09 Juni 2023 di Masjid Mambaus Sholihin Surabaya" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="register" id="register">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
            <path fill="#fff" fill-opacity="1"
                d="M0,160L48,170.7C96,181,192,203,288,186.7C384,171,480,117,576,112C672,107,768,149,864,149.3C960,149,1056,107,1152,112C1248,117,1344,171,1392,197.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <h3>DAFTAR <span>BELAJAR MENGAJI</span> DI BAWAH SEKARANG</h3>

            <div class="container-register">
                <form action="/register" method="post">
                    @csrf
                    <h4>Formulir Pendaftaran</h4>
                    <p>
                        Saya berminat untuk tahu lebih lanjut berkenaan kelas mengaji
                        Almaas
                    </p>

                    <div class="container-input">
                        <div class="flex">
                            @error('email')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            <input type="email" placeholder="Email" name="email" class="input"
                                value="{{ old('email') }}" required />
                        </div>
                        <div class="flex">
                            @error('nama_lengkap')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            @error('nama_panggilan')
                                <span class="kanan">{{ $message }}</span>
                            @enderror
                            <input class="input" type="text" placeholder="Nama Lengkap" name="nama_lengkap"
                                value="{{ old('nama_lengkap') }}" required />
                            <input class="input" type="text" placeholder="Nama Panggilan" name="nama_panggilan"
                                value="{{ old('nama_panggilan') }}"  required/>
                        </div>
                        <div class="flex">
                            @error('whatsapp')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            @error('pendidikan')
                                <span class="kanan">{{ $message }}</span>
                            @enderror
                            <input class="input" type="text" placeholder="No Whatsapp" name="whatsapp"
                                value="{{ old('whatsapp') }}" required/>
                            <input class="input" type="text" placeholder="Pendidikan Terakhir" name="pendidikan"
                                value="{{ old('pendidikan') }}" required />
                        </div>
                        <div class="flex">
                            @error('pekerjaan')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            <input class="input" class="input" type="text" placeholder="Pekerjaan"
                                name="pekerjaan" value="{{ old('pekerjaan') }}" required />
                        </div>
                        <div class="flex">
                            @error('tempat_lahir')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            @error('usia')
                                <span class="kanan">{{ $message }}</span>
                            @enderror
                            <input class="input" type="text" placeholder="Tempat Lahir" name="tempat_lahir"
                                value="{{ old('tempat_lahir') }}" required />
                            <input class="input" type="number" placeholder="Usia" name="usia"
                                value="{{ old('usia') }}" required />
                        </div>
                        <div class="flex">
                            @error('password')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            <input class="input" type="password" placeholder="Password" name="password" required />
                            <input class="input" type="password" placeholder="Confirm Password" name="confirm"
                                required />
                        </div>
                        <div class="flex">
                            @error('alamat_rumah')
                                <span class="kiri">{{ $message }}</span>
                            @enderror
                            <input class="input" type="text" placeholder="Alamat Rumah" name="alamat_rumah"
                                value="{{ old('alamat_rumah') }}" required />
                        </div>
                        <div class="flex radio">
                            <div class="tahap">
                                <h6>Tahap Penguasaan Saya:</h6>
                                <input type="radio" name="tahap" value="iqra" id="Iqra"checked />
                                <label for="Iqra">Iqra</label>
                                <input type="radio" name="tahap" value="muqaddam" id="Muqaddam" />
                                <label for="Muqaddam">Muqaddam</label>
                                <input type="radio" name="tahap" value="Al-Quran" id="quran" />
                                <label for="quran">Al-Quran</label>
                            </div>

                            <div class="gender">
                                <h6>Jenis Kelamin:</h6>
                                <input type="radio" name="gender" value="pria" id="pria" checked />
                                <label for="pria">Pria</label>
                                <input type="radio" name="gender" value="wanita" id="wanita" />
                                <label for="wanita">Wanita</label>
                            </div>
                        </div>

                        <div class="bimbingan">
                            <h6>Program Bimbingan:</h6>
                            <div class="row-bimbingan">
                                <input type="radio" name="bimbingan_id" value="1" id="1" checked />
                                <label for="1">Bimbingan Ngaji Privat</label>
                            </div>
                            <div class="row-bimbingan">
                                <input type="radio" name="bimbingan_id" value="2" id="2" />
                                <label for="2">Bimbingan Ngaji Tahfidz</label>
                            </div>
                            <div class="row-bimbingan">
                                <input type="radio" name="bimbingan_id" value="3" id="3" />
                                <label for="3">Bimbingan Ngaji Privat Online</label>
                            </div>
                            <div class="row-bimbingan">
                                <input type="radio" name="bimbingan_id" value="4" id="4" />
                                <label for="4">Bimbingan Ngaji BB</label>
                            </div>
                        </div>

                        <button class="btn">Daftar Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection