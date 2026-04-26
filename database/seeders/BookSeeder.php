<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya Ananta Toer',
                'penerbit' => 'Hasta Mitraa',
                'genre' => 'Drama',
                'stok' => 21,
                'cover' => null, 
                'deskripsi' => 'Buku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa. Minke adalah seorang pribumi yang pandai, ia sangat pandai menulis. Tulisannya bisa membuat orang sampai terkagum-kagum dan dimuat di berbagai Koran Belanda pada saat itu. Hanya saja sebagai seorang pribumi, ia kurang disukai oleh siswa-siswi Eropa lainnya. Minke digambarkan sebagai seorang revolusioner di buku ini. Ia berani melawan ketidakadilan yang terjadi pada bangsanya. Ia juga berani memberontak terhadap kebudayaan Jawa, yang membuatnya selalu di bawah. Selain tokoh Minke, buku ini juga menggambarkan seorang "Nyai" yang bernama Nyai Ontosoroh. Nyai pada saat itu dianggap sebagai perempuan yang tidak memiliki norma kesusilaan karena statusnya sebagai istri simpanan. Statusnya sebagai seorang Nyai telah membuatnya sangat menderita, karena ia tidak memiliki hak asasi manusia yang sepantasnya. Namun, yang menariknya adalah Nyai Ontosoroh sadar akan kondisi tersebut sehingga dia berusaha keras dengan terus-menerus belajar, agar dapat diakui sebagai seorang manusia. Nyai Ontosoroh berpendapat, untuk melawan penghinaan, kebodohan, kemiskinan, dan sebagainya hanyalah dengan belajar. Minke juga menjalin asmara dan akhirnya menikah dengan Annelies, anak dari Nyai Ontosoroh dan tuan Mellema. Melalui buku ini, Pram menggambarkan bagaimana keadaan pemerintahan kolonialisme Belanda pada saat itu secara hidup. Pram, menunjukan betapa pentingnya belajar. Dengan belajar, dapat mengubah nasib. Seperti di dalam buku ini, Nyai yang tidak bersekolah, dapat menjadi seorang guru yang hebat bagi siswa HBS dan Minke. Bahkan pengetahuan si nyai itu, yang didapat dari pengalaman, dari buku-buku, dan dari kehidupan sehari-hari, ternyata lebih luas dari guru-guru sekolah HBS.'   
            ],
            
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'penerbit' => 'Bentang Pustaka',
                'genre' => 'Romance',
                'stok' => 14,
                'cover' => null, 
                'deskripsi' => 'Cerita terjadi di Desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.Dari sanalah dimulai cerita mereka. Mulai dari penempatan tempat duduk, pertemuan mereka dengan Pak Harfan, perkenalan mereka yang luar biasa di mana A Kiong yang malah cengar-cengir ketika ditanyakan namanya oleh guru mereka, Bu Mus. Kejadian bodoh yang dilakukan oleh Borek, pemilihan ketua kelas yang diprotes keras oleh Kucai, kejadian ditemukannya bakat luar biasa Mahar, pengalaman cinta pertama Ikal, sampai pertaruhan nyawa Lintang yang mengayuh sepeda 80 km pulang pergi dari rumahnya ke sekolah. Mereka, Laskar Pelangi –nama yang diberikan Bu Muslimah akan kesenangan mereka terhadap pelangi– pun sempat mengharumkan nama sekolah dengan berbagai cara. Misalnya pembalasan dendam Mahar yang selalu dipojokkan kawan-kawannya karena kesenangannya pada okultisme yang membuahkan kemenangan manis pada karnaval 17 Agustus, dan kegeniusan luar biasa Lintang yang menantang dan mengalahkan Drs. Zulfikar, guru sekolah kaya PN yang berijazah dan terkenal, dan memenangkan lomba cerdas cermat. Laskar Pelangi mengarungi hari-hari menyenangkan, tertawa dan menangis bersama. Kisah sepuluh kawanan ini berakhir dengan kematian ayah Lintang yang memaksa Einstein cilik itu putus sekolah dengan sangat mengharukan, dan dilanjutkan dengan kejadian 12 tahun kemudian di mana Ikal yang berjuang di luar pulau Belitong kembali ke kampungnya. Kisah indah ini diringkas dengan kocak dan mengharukan oleh Andrea Hirata, kita bahkan bisa merasakan semangat masa kecil anggota sepuluh Laskar Pelangi ini.'  
            ],

            [
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'penerbit' => 'Kepustakaan Populer Gramedia',
                'genre' => 'Fiksi',
                'stok' => 20,
                'cover' => null, 
                'deskripsi' => 'Novel ini ditulis dalam sudut pandang ‘Aku’ dari kedua karakter Biru Laut Wibisono dan Asmara Jati. Biru Laut adalah seorang Mahasiswa, yang mempunyai adik bernama Asmara Jati. Baik Laut atau Asmara Jati, keduanya menjadi tokoh utama dalam Novel tersebut.
                Bermula pada tahun 1991, Leila mengawali novelnya dengan mengisahkan kehidupan sekelompok mahasiswa yang berkegiatan di suatu rumah di Seyegan, Yogyakarta. Mahasiswa-mahasiswa ini memiliki ketertarikan yang sama terhadap bacaan termasuk sastra. Dalam hal ini, termasuk sastra yang sempat dilarang untuk dibicarakan ketika itu, sastra karya Pramoedya Ananta Toer.
                Dalam novel ini, alur yang digunakan tidak berurutan. Dari 1991, pembaca akan diarahkan menuju bab berikutnya yakni tahun 1998. Leila menulis berdasarkan peristiwa saat ini (ketika Biru Laut berada dalam penjara) dan masa lalu (ketika Biru laut masih menjadi mahasiswa dan buron).
                Sebelum berada di penjara, konflik yang dihadapi Laut cukup banyak. Termasuk bagaimana ketika ia dan teman-temannya mengatur diskusi dan aksi demi membela petani Jagung di Blangguan yang tanahnya diambil secara tidak adil oleh pemerintah. Selain itu, novel ini juga bercerita bagaimana salah satu sahabat Laut berkhianat dan membocorkan informasi kepada intel. Aktivisme-aktivisme dan pembelaan ini yang kemudian diketahui oleh intel mengantarkan Laut kepada penjara.
                Selanjutnya, Novel ini menceritakan bagaimana keluarga Laut termasuk Asmara Jati mengupayakan untuk mencari mahasiswa-mahasiswa yang hilang—termasuk Laut—yang tidak diketahui keberadaannya hingga beberapa tahun. Asmara Jati juga sempat menulis surat imajinatif yang ia sampaikan kepada Laut:'   
            ],

            [
                'judul' => 'Harry Potter',
                'penulis' => 'J.K. Rowling',
                'penerbit' => 'Bloomsbury Publishing',
                'genre' => 'Fantasy',
                'stok' => 20,
                'cover' => null, 
                'deskripsi' => 'Harry Potter adalah seri tujuh novel fantasi yang dikarang oleh penulis Inggris J. K. Rowling. Novel ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ron Weasley dan Hermione Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts. Inti cerita dalam novel-novel ini berpusat pada upaya Harry untuk mengalahkan penyihir hitam jahat bernama Lord Voldemort, yang berambisi untuk menjadi makhluk abadi, menaklukkan dunia sihir, menguasai orang-orang nonpenyihir, dan membinasakan siapapun yang menghalangi jalannya, terutama Harry Potter.'
            ],

            [
                'judul' => 'Ronggeng Dukuh Paruk',
                'penulis' => 'Ahmad Tohari',
                'penerbit' => 'Gramedia Pustaka Utama',
                'genre' => 'Fiksi',
                'stok' => 12,
                'cover' => null, 
                'deskripsi' => 'Sejak Srintil yang belia dinobatkan menjadi ronggeng baru di Dukuh Paruk untuk menggantikan ronggeng terakhir yang mati dua belas tahun yang lalu, semangat kehidupan di Dukuh Paruk kembali menggeliat. Bagi pedukuhan yang kecil, miskin, terpencil tetapi bersahaja itu, ronggeng adalah perlambang kehidupan. Tanpa adanya seorang ronggeng, dukuh itu akan kehilangan jati diri. Srintil menjadi tokoh yang amat terkenal dan digandrungi karena cantik dan menggoda. Semua ingin berjoget dan tidur bersama ronggeng itu. Dari kawula biasa hingga pejabat-pejabat desa, bahkan hingga pejabat kabupaten.
                Namun, malapetaka politik tahun 1965 membuat Dukuh Paruk hancur, baik secara fisik maupun mental. Karena kebodohan mereka tentang politik, mereka terseret arus konflik dan divonis sebagai manusia-manusia pengkhianat negara. Pedukuhan itu dibakar dan ronggeng berserta para penabuh calung ditahan oleh tentara. Hanya saja, karena kecantikannya, Srintil tidak diperlakukan semena-mena oleh para penguasa penjara tahanan politik.
                Pengalaman pahit yang dialaminya sebagai tahanan politik membuat Srintil sadar akan harkatnya sebagai manusia. Setelah bebas, ia berniat memperbaiki citra dirinya dengan tak lagi melayani lelaki manapun dan menjadi wanita somahan. Ketika teman masa kecilnya, Rasus, muncul kembali dalam kehidupannya, sepercik harapan pun muncul. Akan tetapi, ternyata Srintil kembali terhempas, kali ini bahkan membuat jiwanya hancur.'
            ]
        ]);
    }
}