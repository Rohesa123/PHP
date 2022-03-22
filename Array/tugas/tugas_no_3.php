<?php

$berita = [
    [
        "Kategori" => "pendidikan",
        "Judul" => "Potret Pendidikan di Daerah Terpencil",
        "Artikel" => "Anak anak SD di desa Mekar Jaya, Kabupaten Muara enim jika pasca turun hujan harus berjuang lebih keras dalam menuntut ilmu, mereka harus berjalan kaki tanpa menggunakan sepatu dalam kondisi lumpur dan becek dengan jarak tempuh mencapai 5 km untuk belajar di sekolah dan menggapai cita cita mereka.

        Selain akses jalan yang rusak, kondisi sekolah juga sangat mengkhawatirkan. minimnya pelajar di wilayah desa tersebut ditambah bangunan kelas dalam kondisi rusak, membuat sejumlah siswa sekolah dasar negeri 12 ini terpaksa digabung dengan siswa kelas lain.

        Hingga kini, sarana dan prasarana sangat minim, seperti kelas yang rusak dan perpustakaan yang kurang buku, selain itu sekolah ini hanya mempunyai tenaga pengajar 8 orang.

        Menurut pihak sekolah, mereka sudah sering melaporkan kondisi sekolahnya ke dinas pendidikan kabupaten empat lawang, namun sampai saat ini belum ada perhatian sedikitpun dari pemerintah setempat.",
        "Tanggal" => "12 Februari 2022",
    ],
    [
        "Kategori" => "Bencana Alam",
        "Judul" => "Kabut Asap dipalangkaraya",
        "Artikel" => "Kabut asap yang menyelimuti kota Palangkaraya, Kalimantan tengah dan sekitarnya kian pekat, jarak pandang hanya mencapai 50 hingga 100 meter. Ditengah kabut asap warga tetap beraktivitas di luar ruangan, kondisi kabut asap akibat kebakaran lahan gambut kini sangat dikeluhkan warga.

        Selain menimbulkan pusing dan seak nafas, warga yang berkendara juga tidak dapat mengetahui jika ada pengendara lain dihadapannya akibat jarak pandang yang terbatas. Sementara itu, dinas pendidikan kota Palangkaraya, 2 hari lalu telah meliburkan kegiatan belajar siswa di sekolah hingga 5 hari kedepan.",
        "Tanggal" => "18 Februari 2022",
    ],
    [
        "Kategori" => "Bencana Alam",
        "Judul" => "Gempa bumi lombok",
        "Artikel" => "Gempa bumi berkekuatan 7 skala lichter kembali mengguncang Lombok. warga panik dan menyelamatkan diri ke dataran tinggi karena ada informasi peringtan dini tsunami.

        Kepanikan melanda warga setelah gempa kembali mengguncang Lombok utara, Nusa Tenggara Barat. Jalanan dipenuhi kendaraan yang hendak menuju ke arah dataran yang lebih tinggi, karena gempa dikabarkan berpotensi tsunami.

        Gempa bumi berkekuatan 7,0 skala richter mengguncang lombok utara pada pukul delapan belas lewat empat puluh enam (18.46) waktu Indonesia tengah, gempa terjadi 18 km barat laut lombok timur dengan kedalaman 15 kilometer.

        Gempa yang mengguncang Lombok membuat warga panik dan berhamburan keluar rumah, listrik yang mati total semakin menambah kepanikan. Informasi peringartan dirni tsunami juga dikeluarkan pihak BMKG yang membuat warga langsung berinisiatif mengungsi ke dataran tinggi.

        Namun, selang satu jam kemudian peringatan dini tsunami akhirnya dicabut. Menurut data yang dikeluarkan pihak BMKG, selain meruntuhkan bangunan gempa juga menyebabkan air laut terpantau naik di 3 wilayah, yakni di pelabuhan carik Lombok utara, pelabuhan bada Sumbawa dan lembar Lombok barat. Sementara hingga berita ini diturunkan gempa susulan masih terus terjadi.",
        "Tanggal" => "20 Januari 2022",
    ],
    [
        "Kategori" => "Bencana Alam",
        "Judul" => "Banjir di Rangkasbitung",
        "Artikel" => "Banjir merendam pemukiman warga dan sejumlah bangunan sekolah di Lebak, Banten, Selasa sore. Para siswa harus menanggalkan alas kaki untuk berangkat ke sekolah.

        Guyuran hujan deras selama 3 hari. membuat aktivitas warga dan para siswa terganggu, Salah satunya di Sekolah Menengah Negeri 1 Rangkasbitung, Lebak, Banten.
        Banjir setinggi 30 hingga 50 cm membuat siswa harus berjalan menerjang genangan menuju sekolah tanpa alas kaki, meski demikian para siswa tetap semangat belajar.

        Hingga tadi malam hujan masih mengguyur wilayah Rangkasbitung, Lebak Banten, warga berharap sistem saluran air segera diperbaiki",
        "Tanggal" => "1 Februari 2022",
    ],
    [
        "Kategori" => "Bencana Alam",
        "Judul" => "Waspada cuaca ekstrem Di musim hujan",
        "Artikel" => "Badan Meteorologi Klimatologi dan Geofisika atau BMKG kota Bogor, Jawa barat,
        memperkirakan puncak cuaca ekstrim akan berlangsung pada bulan Januari hingga Maret mendatang. Selain hujan badai, cuaca ekstrim juga akan berpotensi terjadi puting beliung.

        Dari pantauan citra satelit setempat, wilayah Bogor dinilai rawan terjangan puting beliung karena berada ditengah himpitan gunung salak dan pangrango. Masyarakat diminta waspada terhadap gejala kilatan petir awal pada sore hari sebagai penanda potensi angin ribut.

        Untuk mengantisipais ancaman bahaya pohon tumbang dinas pertamanan kota Bogor mulai gencar memangkas dahan dan ranting pohon disepanjang jalur utama,
        pepohonan besar berusia tua juga ditebang lantaran kondisi batangnya keropos.
        Selain itu posko kebencanaan juga disiagakan untuk mempercepat sistem komunikasi

        Dalam kondisi seperti ini, sayangnya teknologi yang dimiliki bmkg Indonesia saat ini belum mampu mempredikis kemunculan puting beliung karena diameternya kurang dari 1 km.
        Sedangkan radar dan citra satelit bmkg hanya mampu mendeteksi awan cumulonimbus diatas diameter 4 km",
        "Tanggal" => "30 Januari 2022",
    ],
];

foreach ($berita as $artikel) {
    echo "<p>Kategori : " . $artikel['Kategori'] . "</p>";
    echo "<p>Tanggal : " . $artikel['Tanggal'] . "</p>";
    echo "<h1>" . $artikel['Judul'] . "</h1>";
    echo "<p>" . $artikel['Artikel'] . "</p><hr>";
}

// for ($a = 0; $a < count($berita); $a++) {
//     echo "<p>Kategori : " . $berita[$a]['Kategori'] . "</p>";
//     echo "<p>Tanggal : " . $berita[$a]['Tanggal'] . "</p>";
//     echo "<h1>" . $berita[$a]['Judul'] . "</h1>";
//     echo "<p>" . $berita[$a]['Artikel'] . "</p><hr>";
// }
