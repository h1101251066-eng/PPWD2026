<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Profil Saya</tittle>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img src="saya.jpeg" alt="Foto Profil" class="foto-profil">
        <h1>Andini Salsabilla</h1>
        <p>Mahasiswa Semester 3 - Universitas Tanjungpura</p>
    </header>

    <nav class=""konten>
        <a href="#tentang">Tentang</a>
        <a href="#jadwal">Jadwal</a>
        <a href="#kontak">Kontak</a>
        <a href="#hobi">Hobi</a>
    </nav>

    <main class="konten">
        <section id="tentang">
        <h2>Tentang Saya</h2>
        <p>Halo! Saya Andini Salsabilla, mahasiswa yang sedang belajar membuat website dengan HTML dan CSS. Saya suka desain karena bisa membuat halaman yang tadinya polos menjadi menarik.</p>
        <p>Cita-cita saya menjadi seorang UI/UX Desainer.</p>
        </section>

        <section id="jadwal">
            <h2>Jadwal Mata Kuliah</h2>
            <table>
                <tr><th>Hari</th><th>Mata Kuliah</th><th>Jam</th></tr>
                <tr><th>Senin</th><th>Pemrograman Web Dasar</th><th>08.00 - 10.00</th></tr>
                <tr><th>Selasa</th><th>Pemrograman Berorientasi Objek</th><th>10.00 - 12.00</th></tr>
                <tr><th>Rabu</th><th>Manajemen Proyek SI</th><th>07.30 - 09.45</th></tr>
                <tr><th>Kamis</th><th>Basis Data</th><th>10.00 - 12.50</th></tr>
                <tr><th>Jumat</th><th>Rekayasa Perangkat Lunak</th><th>08.00 - 10.00</th></tr>
            </table>
        </section>

        <section id="kontak">
            <h2>Formulir Kontak</h2>
            <form>
                <label for="nama">Nama</label>
                <input type="text" id="nama" placeholder="Tulis Nama Anda">

                <label for="email">Email</label>
                <input type="email" id="email" placeholder="[email protected]">

                <label for="pesan">Pesan</label>
                <textarea id="pesan" rows="4" placeholder="Tulis Pesan Disini"></textarea>

                <button type="submit">Kirim Pesan</button>
            </form>
        </section>

        <section id="hobi">
            <h2>Daftar Hobi</h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>Hobi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Membaca Novel</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Mendengarakan Musik</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Traveling</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Menonton Film</td>
                </tr>
            </table>
        </section>
    </main>

    <footer class="footer">

        <p>&copy; 2026 Andini Salsabilla. Dibuat dengan HTML &amp; CSS</p>
    </footer>

</body>
</html>