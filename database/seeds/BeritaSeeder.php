<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            [

                // "judul" => ,
                // "tanggal" => Carbon::parse('2022-01-06'),
                // "gambar" => "gambar/",
                // "isi" => "",
                // "shortdesc" => "",
                // "sumber" => "",

                "judul" => "Pengetatan Pintu Masuk Negara Demi Menekan Laju Penularan Omicron",
                "tanggal" => Carbon::parse('2022-01-06'),
                "gambar" => "gambar/Berita_1.jpeg",
                "isi" => "JAKARTA - Pemerintah terus berupaya menekan peluang importasi kasus COVID-19 terutama bervarian Omicron. Beberapa upaya seperti Polri meluncurkan aplikasi Monitoring Karantina pada 6 Januari 2022 di terminal keberangkatan Bandara Soekarno - Hatta.

                Aplikasi ini bentuk kolaborasi lintas sektor untuk memastikan karantina dijalankan secara disiplin dan tidak ada transmisi lokal khususnya terkait varian Omicron melalui upaya penyatuan data menjadi 1 sistem sebagai visi bersama satu data nasional.

                \"Demi menekan laju penularan Omicron, Pemerintah Indonesia terus meningkatkan upaya skrining ketat di pintu-pintu masuk negara serta menegakkan peraturan karantina tanpa pandang bulu,\" Juru Bicara Satgas Penanganan COVID-19 Prof. Wiku Adisasmito dalam Keterangan Pers Perkembangan Penanganan COVID-19, Kamis (6/1/2022) yang disiarkan kanal YouTube Sekretariat Presiden.

                Upaya Pemerintah ini cukup beralasan. Karena, di Indonesia sendiri data penanganan COVID-19 per 5 Januari 2022 mencatat sebanyak 164 kasus Omicron. Kementerian Perhubungan pun memprediksi kedatangan ke Indonesia akan mulai meningkat signifikan per tanggal 5 Januari 2022 hingga beberapa minggu kedepan. Setidaknya sampai minggu ketiga bulan Januari 2022.

                \"Sehingga langkah antisipasi direncanakan sedemikian rupa. Termasuk keputusan untuk menunda segala bentuk perjalanan yang tidak mendesak dan terencana apalagi dalam jumlah besar. Karena akan memberikan risiko terhadap kebershasilan pengendalian COVID-19 pasKa Nataru,\" lanjutnya.

                Selain itu, Satgas juga menghimbau Pemerintah dan Satgas COVID-19 di daerah untuk mengencarkan upaya 3T (testing, tracing dan treatment) agar dapat menghindari lonjakan kasus COVID-19 di komunitas akibat varian Omicron. Penelitian menunjukkan bahwa varian Omicron menyebabkan infeksi yang tidak terlalu parah.

                \"Meskipun begitu saya mohon masyarakat tidak lengah serta tetap waspada melakukan protokol kesehatan dalam kegiatan sehari-hari,\" saran Wiku.

                Dan yang menjadi catatan penting, bahwa sampai kapan pun virus akan terus bermutasi. Ini adalah hal alamiah. Karenanya untuk mengantisipasi penularan dari varian-varian tersebut, protokol kesehatan perlu terus menjadi budaya baru tentunya didukung upaya vaksinasi dan dalam waktu dekat dengan menerima Booster vaksin.",

                "shortdesc" => "JAKARTA - Pemerintah terus berupaya menekan peluang importasi kasus COVID-19 terutama bervarian Omicron. Beberapa upaya seperti Polri meluncurkan aplikasi Monitoring Karantina pada 6 Januari 2022 di terminal keberangkatan Bandara Soekarno - Hatta.",
                "sumber" => "https://covid19.go.id/artikel/2022/01/06/pengetatan-pintu-masuk-negara-demi-menekan-laju-penularan-omicron",
            ],
            [
                "judul" => "Penyesuaian Kebijakan Masuk Indonesia Demi Mencegah Importasi Kasus",
                "tanggal" => Carbon::parse('2022-01-06'),
                "gambar" => "gambar/Berita_2.jpeg",
                "isi" => "JAKARTA - Pemerintah kembali menyesuaikan aturan untuk Pelaku Perjalanan Luar Negeri yang akan masuk ke Indonesia. Terkini Pemerintah mengeluarkan Surat Edaran Satgas No. 1 Tahun 2022 tentang Protokol Kesehatan Perjalanan Luar Negeri dan Surat Keputusan Ketua Satgas No. 2 Tahun 2022 tentang Pintu Masuk atau (Entry Point), Tempat Karantina dan Kewajiban RT-PCR bagi WNI Pelaku Perjalanan Luar Negeri.

                \"Salah satunya yang terus dipantau dan dievaluasi adalah peraturan pelaku perjalanan luar negeri. Yang secara alamiah membuka peluang importasi kasus dengan catatan jika tidak dikendalikan dengan baik,\" Juru Bicara Satgas Penanganan COVID-19 Prof. Wiku Adisasmito, Kamis (6/1/2022) yang disiarkan kanal YouTube Sekretariat Presiden.

                Terdapat beberapa penyesuaian penting dalam kebijakan terbaru tersebut diantaranya :

                Pertama, penambahan Perancis menjadi negara asal kedatangan Warga Negara Asing (WNA) yang tidak boleh memasuki Indonesia sementara waktu. Akibat tingginya kasus Omicron dimana per 5 Januari 2022 mencapai 2.838 varian Omicron.

                Kedua, menyesuaikan waktu karantina dari 14 hari menjadi 10 hari. Ini diperuntukkan bagi pelaku perjalanan dalam 14 hari terakhir berada pada negara dengan transmisi komunitas akibat varian Omicron dan negara-negara di sekitarnya, serta jumlah kasus Omicron melebihi 10 ribu kasus. Sedangkan kewajiban karantina 10 hari disesuaikan menjadi 7 hari bagi negara asal kedatangan diluar kategori yang disebutkan sebelumnya.

                Ketiga, menyesuaikan waktu tes ulang PCR kedua. Yaitu pada hari ke-9 bagi pelaku perjalanan dengan kewajiban karantina 10 hari, dan tes ulang pada hari ke-6 bagi pelaku perjalanan dengan kewajiban karantina 7 hari. Berdasarkan 3 studi ilmiah dari Russel dkk (2021), Askrof dkk (2021), dan Wels dkk (2020) menyatakan bahwa karantina selama 7 hari dibarengi  entry dan exit tes cukup baik mengurangi potensi transmisi lokal hingga di bawah 25%.

                Keempat, pengubahan teknis hak mengajukan tes pembanding RT-PCR bagi pelaku perjalanan setelah tes ulang kedua RT-PCR melalui pembiayaan mandiri. Nantinya pelaku perjalanan wajib melakukan tes pembanding dan pemeriksaan pembanding dengan metode deteksi molekuler yang mampu melihat kegagalan deteksi gen S atau SGTF yang umumnya merupakan indikasi kasus Sars-Cov2 varian B.1.1.529 secara bersamaan, demi menskrining kasus Omicron dengan baik.

                Selain itu, laboratorium (lab) pembanding dapat dilakukan ditempat tambahan yaitu Balitbangkes, lab pemerintah lainnya seperti BTKL Lapkesda dan lab rujukan lainnya. Hal ini demi meningkatkan aksesibilitas melaksanakan tes pembanding bagi tiap pelaku perjalanan.

                Kelima, berdasarkan arahan presiden pada rapat terbatas di tanggal 3 Januari 2022, maka dilakukan pembatasan pemberian dispensasi karantina. Khusus pengajuannya, diperuntukkan bagi WNI dengan kebutuhan mendesak. Seperti, kondisi kesehatan mengancam nyawa atau kondisi kesehatan yang membutuhkan perhatian khusus, kedukaan seperti anggota keluarga inti meninggal.

                Sedangkan untuk WNA, yaitu kepala kantor perwakilan asing maupun WNA dengan visa diplomatik atau dinas, pejabat asing setingkat menteri ke atas pendatang dengan skema TCA, delegasi negara G20 dan orang terhormat atau terpandang seperti tokoh ekonomi global. Pihak-pihak ini dapat mengirimkan surat pengajuan kepada Satgas COVID-19, baik fisik ke kantor BNPB maupun surat elektronik ke persuratan@bnpb.go.id dengan tujuan Kepala Satuan Tugas COVID-19.

                \"Masing-masing minimal 3 hari dan 7 hari sebelum kedatangan,\" imbuh Wiku.

                Untuk pelaksanaan kebijakan ini, efektif sepenuhnya pada Jumat, 7 Januari 2022 dengan penerapannya dimulai sejak 4 Januari 2022. Harapannya memberikan waktu yang cukup bagi penyebaran sosialisasi kebijakan kepada petugas di lapangan maupun masyarakat. Karena itu, pelaku perjalanan yang tiba di Indonesia sebelum 4 Januari 2022 menjalankan durasi karantina sesuai SE satgas sebelumnya. Sementara, yang datang saat 4 Januari dan seterusnya akan menyesuaikan dengan apa yang tertulis di dalam SE Satgas No. 1 Tahun 2022.

                Hal ini berlaku bagi negara tambahan asal kedatangan yang harus menjalani karantina lebih lama yaitu Perancis. Dengan masa berlaku efektif bagi pelaku perjalanan yang datang di tanggal sejak surat edaran ini di rilis. \"Oleh karena itu mohon petugas dilapangan dapat membantu memudahkan proses penyesuaian terkait waktu testing dan masa karantina pelaku perjalanan yang ada,\" lanjut Wiku.",

                "shortdesc" => "JAKARTA - Pemerintah kembali menyesuaikan aturan untuk Pelaku Perjalanan Luar Negeri yang akan masuk ke Indonesia. Terkini Pemerintah mengeluarkan Surat Edaran Satgas No. 1 Tahun 2022 tentang Protokol Kesehatan Perjalanan Luar Negeri dan Surat Keputusan Ketua Satgas No. 2 Tahun 2022 tentang Pintu Masuk atau (Entry Point), Tempat Karantina dan Kewajiban RT-PCR bagi WNI Pelaku Perjalanan Luar Negeri.",
                "sumber" => "https://covid19.go.id/berita/penyesuaian-kebijakan-masuk-indonesia-demi-mencegah-importasi-kasus"
            ],
            [
                "judul" => "Pemda Segera Penanganan Dini Mengantisipasi Dampak Nataru Dan Ancaman Transmisi Omicron",
                "tanggal" => Carbon::parse('2022-01-06'),
                "gambar" => "gambar/Berita_3.jpeg",
                "isi" => "JAKARTA - Paska periode libur Natal dan Tahun Baru (Nataru) 2022 dan adanya COVID-19 varian Omicron menjadi ancaman dalam penanganan saat ini. Juru Bicara Satgas Penanganan COVID-19 Prof. Wiku Adisasmito menyayangkan perkembangan tingkat provinsi menunjukkan perkembangan kurang baik. Dikhawatirkan, dampak Nataru pada kenaikan kasus mulai terlihat 2 minggu kemudian.

                Dari data terbaru, ada kenaikan kasus aktif ini pada sejumlah provinsi. Terjadi kenaikan selama 4 minggu berturut-turut yaitu di provinsi Ibukota DKI Jakarta dan Kepulauan Riau. Lalu kenaikan dalam 3 minggu berturut-turut yaitu Kalimantan Selatan. Serta kenaikan dalam 2 minggu terakhir diantaranya Aceh, Sumatera Utara, Banten, Bali, Nusa Tenggara Barat, Kalimantan Tengah, Sulawesi Tenggara serta Papua.

                \"Perlu diperhatikan bahwa pada beberapa daerah data kenaikan kasus banyak dikontribusikan oleh pencatatan kasus dari pelaku perjalanan luar negeri yang masuk ke Indonesia,\" Wiku dalam Keterangan Pers Perkembangan Penanganan COVID-19, Kamis (6/1/2022) yang disiarkan kanal YouTube Sekretariat Presiden.

                Dalam hal ini, seluruh Pemda diminta mengantisipasi terhadap kemungkinan kenaikan kasus beberapa minggu ke depan. Hal ini merupakan dampak dari periode Natal dan Tahun Baru. Terkait ini, Pemerintah pusat melalui berbagai kementerian dan lembaga juga terus mengupayakan seluruh tahapan pelaksanaan karantina bagi pelaku perjalanan luar negeri dilaksanakan dengan baik.

                Tujuannya mencegah penularan lokal dari orang positif apalagi yang terinfeksi varian Omicron. \"Tentunya hal ini hanya dapat berhasil dengan peran serta masyarakat yang patuh menjalankan aturan karantina yang sudah ditetapkan,\" lanjutnya.

                Yang juga penting, setiap daerah harus berupaya mencegah agar importasi kasus ini tidak lolos ke masyarakat. Serta melakukan langkah pengendalian apabila terjadi indikasi transmisi komunitas sedini mungkin.

                \"Kedisiplinan protokol kesehatan di tempat umum dan bagi pelaku perjalanan juga perlu untuk selalu diawasi dan ditegakkan untuk mencegah semakin meluasnya penularan,\" pungkas Wiku.",

                "shortdesc" => "JAKARTA - Paska periode libur Natal dan Tahun Baru (Nataru) 2022 dan adanya COVID-19 varian Omicron menjadi ancaman dalam penanganan saat ini. Juru Bicara Satgas Penanganan COVID-19 Prof. Wiku Adisasmito menyayangkan perkembangan tingkat provinsi menunjukkan perkembangan kurang baik. Dikhawatirkan, dampak Nataru pada kenaikan kasus mulai terlihat 2 minggu kemudian.",
                "sumber" => "https://covid19.go.id/berita/pemda-segera-penanganan-dini-mengantisipasi-dampak-nataru-dan-ancaman-transmisi-omicron"
            ],
            [
                "judul" => "Angka Kesembuhan COVID-19 Terus Meningkat Hingga 4.115.358 Orang",
                "tanggal" => Carbon::parse('2022-01-06'),
                "gambar" => "gambar/Berita_4.jpeg",
                "isi" => "JAKARTA - Perkembangan penanganan pandemi COVID-19 per 6 Januari 2022 secara nasional menunjukkan angka kesembuhan harian sebesar 209 orang sembuh per hari. Angka kumulatifnya bertambah melebihi 4,1 juta orang sembuh atau tepatnya 4.115.358 orang (96,5%).

                Pada kasus aktif atau pasien positif yang masih membutuhkan perawatan medis, bertambah 317 kasus dan kumulatifnya menjadi 5.195 kasus (0,1%). Sementara pasien terkonfirmasi positif (RT-PCR/TCM dan rapid antigen), hari ini bertambah sebanyak 533 kasus dan kumulatifnya, atau jumlah pasien terkonfirmasi positif yang tercatat sejak kasus pertama hingga hari ini mencapai 4.264.669 kasus.

                Disamping itu, pasien meninggal bertambah 7 kasus dan kumulatifnya mencapai 144.116 kasus (3,4%). Selain itu, dari hasil uji laboratorium per hari, spesimen selesai diperiksa (RT-PCR/TCM dan rapid test antigen) per hari sebanyak 274.727 spesimen dengan jumlah suspek sebanyak 5.088 kasus.

                Untuk perkembangan program vaksinasi, penerima vaksin ke-1 bertambah 773.534 orang dengan totalnya melebihi 167 juta orang atau 167.999.777 orang. Sedangkan penerima vaksinasi ke-2 bertambah 731.980 orang dan totalnya meningkat melebihi 115 juta orang atau angka tepatnya 115.554.584 orang. Serta penerima harus vaksin ke-3 bertambah 2.046 orang dan jumlah kumulatifnya melebihi 1,2 juta orang atau 1.297.372 orang. Untuk target sasaran vaksinasi berada di angka 208.265.720 orang.

                Lebih lanjut, melihat perkembangan penanganan per provinsi, terdapat 5 provinsi menambahkan pasien sembuh harian tertinggi. Provinsi Papua Barat menambahkan 68 orang dan kumulatifnya 23.300 orang, diikuti DKI Jakarta menambahkan 50 orang dan kumulatifnya 851.541 orang, Jawa Barat menambahkan 27 orang dan kumulatifnya 693.711 orang, Jawa Timur menambahkan 20 orang dan kumulatifnya 370.309 orang serta Jawa Tengah menambahkan 14 orang dan kumulatifnya 455.663 orang.

                Lalu, pada penambahan kasus terkonfirmasi positif harian terdapat 5 provinsi dengan angka tertinggi. Yakni di DKI Jakarta menambahkan 267 kasus dan kumulatifnya 866.331 kasus, diikuti Kepulauan Riau menambahkan 123 kasus dan kumulatifnya 54.500 kasus, Jawa Timur menambahkan 25 kasus dan kumulatifnya 400.153 kasus, Jawa Barat menambahkan 24 kasus dan kumulatifnya 708.971 kasus serta Banten menambahkan 21 kasus dan kumulatifnya 132.897 kasus.

                Pada sebaran kasus aktif per daerah, ada 5 provinsi dengan angka tertinggi. Diantaranya DKI Jakarta sebanyak 1.181 kasus, Jawa Tengah sebanyak 1.025 kasus, Kepulauan Riau sebanyak 619 kasus, Lampung 531 kasus dan Jawa Barat sebanyak 504 kasus.

                Selain itu, per hari ini terdapat 6 provinsi yang menambahkan kematian. Yaitu Jawa Tengah menambahkan 2 kasus dan kumulatifnya 30.290 kasus.

                Sementara 5 provinsi lainnya masing-masing menambahkan 1 kasus yakni DKI Jakarta dengan kumulatifnya 13.609 kasus, DI Yogyakarta dengan kumulatifnya 5.272 kasus, Sumatera Utara dengan kumulatifnya 2.895 kasus, Sulawesi Utara dengan kumulatifnya 1.063 kasus dan Jambi dengan kumulatifnya 782 kasus.

                Disamping itu, hasil uji per hari jejaring laboratorium berbagai wilayah, jumlah kumulatif spesimen selesai diperiksa mencapai 64.697.095 spesimen. Terdiri dari spesimen positif (kumulatif) sebanyak 7.904.518 spesimen dan spesimen negatif (kumulatif) sebanyak 55.121.544 spesimen. Positivity rate spesimen (NAA dan Antigen) harian di angka 0,24% dan positivity rate spesimen mingguan (26 Desember - 1 Januari 2022) di angka 0,14%. Sementara spesimen invalid dan inkonklusiv (per hari) berjumlah 18 spesimen.

                Untuk jumlah orang yang diperiksa per hari ini ada 208.788 orang dan kumulatifnya 43.624.574 orang. Lalu pada hasil terkonfirmasi negatif jumlah kumulatifnya meningkat menjadi 39.359.905 orang termasuk tambahan hari ini sebanyak 208.255 orang. Sementara positivity rate (NAA dan Antigen) orang harian di angka 0,26% dan positivity rate orang mingguan (26 Desember - 1 Januari 2022) di angka 0,12%. Secara sebaran wilayah terdampak masih berada di 34 provinsi dan 510 kabupaten/kota. ",

                "shortdesc" => "JAKARTA - Perkembangan penanganan pandemi COVID-19 per 6 Januari 2022 secara nasional menunjukkan angka kesembuhan harian sebesar 209 orang sembuh per hari. Angka kumulatifnya bertambah melebihi 4,1 juta orang sembuh atau tepatnya 4.115.358 orang (96,5%).",
                "sumber" => "https://covid19.go.id/berita/angka-kesembuhan-covid-19-terus-meningkat-hingga-4115358-orang"

            ],
            [
                "judul" => "[SALAH] Video Penduduk Aborigin di Australia Menyambut Pemerintah dengan Busur dan Panah sebagai Bentuk Penolakan Vaksin Covid-19",
                "tanggal" => Carbon::parse('2022-01-07'),
                "gambar" => "gambar/Hoax_1.jpg",
                "isi" => "Akun Twitter dengan nama pengguna “anisaz9_basit” mengunggah sebuah video yang menunjukkan sekelompok warga pribumi Australia, atau penduduk Aborigin, tengah mengarahkan busur dan panah ke arah beberapa orang petugas pemerintahan. Dalam unggahan tersebut juga disertai dengan keterangan yang menyatakan bahwa aksi tersebut dilakukan sebagai bentuk penolakan atas program vaksinasi Covid-19 secara paksa yang dilakukan oleh pemerintah.

                Berdasarkan hasil penelusuran, video tersebut bukan merupakan video penduduk Aborigin di Australia yang menolak vaksin Covid-19, melainkan merupakan video konflik antara pemerintah Brasil dengan penduduk pribumi, suku Guarani, pada tahun 2019 lalu. Video yang sama pertama kali diunggah oleh akun Twitter dengan nama pengguna “LemusteleSUR” pada 29 Maret 2019 lalu.

                Dengan demikian, narasi yang diunggah oleh akun Twitter dengan nama pengguna “anisaz9_basit” tersebut dapat dikategorikan sebagai Konteks yang Salah/False Context.",

                "shortdesc" => "Hasil Periksa Fakta Khairunnisa Andini.

                Bukan video penduduk Aborigin di Australia yang menolak vaksin Covid-19. Video tersebut merupakan video konflik antara pemerintah Brasil dengan penduduk Guarani pada tahun 2019 lalu.",

                "sumber" => "https://turnbackhoax.id/2022/01/07/salah-video-penduduk-aborigin-di-australia-menyambut-pemerintah-dengan-busur-dan-panah-sebagai-bentuk-penolakan-vaksin-covid-19/"
            ],
            [
                "judul" => "[SALAH] Pemesanan Online Vaksin Covid-19 Sinopharm Melalui E-Commerce",
                "tanggal" => Carbon::parse('2021-12-31'),
                "gambar" => "gambar/Hoax_2.png",
                "isi" => "Beredar sebuah tangkapan layar sebuah E-Commerce yang menampilkan pemesanan slot untuk vaksinasi COVID-19 Gotong Royong Sinopharm. Dalam tangkapan layar tersebut disebutkan bahwa pemesanan vaksin Sinopharm ditawarkan dengan deposit sebesar Rp10 ribu untuk reservasi atau membayar penuh sebesar Rp700 ribu.

                Berdasarkan penelusuran, melansir dari Jalahoaks yang berkoordinasi dengan Kementerian Kesehatan Republik Indonesia bahwa informasi terkait cara untuk mendapatkan vaksin Sinopharm di salah satu toko online melalui reservasi dengan deposit Rp10 ribu dan mengisi link https://forms.gle/JsF73mynTJgz2LUb8 atau langsung mendaftar dengan pembayaran penuh dengan harga Rp700 ribu adalah tidak benar.

                Kementerian Kesehatan juga menegaskan bahwa penyelenggaraan vaksinasi COVID-19 hanya ada 2 jalur, yaitu vaksinasi program penanggungjawab Kementerian Kesehatan (jenis vaksin yg digunakan Sinovac, Coronavac, Astrazeneca, dan Pfizer) dan vaksinasi gotong royong penanggungjawab Kementerian BUMN bekerja sama dengan Kadin (vaksin Sinopharm).

                Vaksinasi Covid-19 tidak diperjualbelikan secara bebas. Bila ada yg pihak menjual bebas, sebaiknya kita bisa membantu dengan melaporkan (report) ke marketplace tempat ditemukan, dan dapat berkoordinasi juga dengan Badan POM selaku pengawas peredaran obat (termasuk vaksin).",

                "shortdesc" => "Informasi menyesatkan. Kementerian Kesehatan Republik Indonesia mengatakan bahwa informasi terkait cara untuk mendapatkan vaksin Sinopharm di salah satu toko online melalui reservasi dengan deposit Rp10 ribu dan mengisi link https://forms.gle/JsF73mynTJgz2LUb8 atau langsung mendaftar dengan pembayaran penuh dengan harga Rp700 ribu adalah tidak benar.",
                "sumber" => "https://turnbackhoax.id/2021/12/31/salah-pemesanan-online-vaksin-covid-19-sinopharm-melalui-e-commerce/"
            ],
            [
                "judul" => "[SALAH] Victor Lindelof Gagal Jantung setelah Vaksinasi Covid-19, kemudian Jantungnya Dipasangi Chip",
                "tanggal" => Carbon::parse('2021-12-31'),
                "gambar" => "gambar/Hoax_3.jpg",
                "isi" => "Beredar postingan di grup Telegram bernama congor_istana, yang memposting sebuah gambar disertai dengan narasi yang menyatakan bahwa, bek tengah Manchester United Victor Lindelof jantungnya dipasangi chip selama 2 hari. Menyusul klaim tersebut, ditambahkan pula 2 gambar bertuliskan Victor Lindelof pensiun dini dan kasus para atlet gagal jantung setelah vaksin Covid-19.

                Postingan tersebut beredar di tengah program vaksinasi yang sedang digencarkan pemerintah untuk menghentikan pandemi Covid-19, dan bermaksud untuk memberikan bukti bahwa vaksin Covid-19 berbahaya.

                Setelah dilakukan penelusuran fakta terkait, tidak benar bahwa Victor Lindelof sesak napas setelah diberikan vaksin Covid-19, pun juga tidak dipasangi chip di bagian jantung.

                Dilansir dari detik.com, Lindelof harus meninggalkan lapangan di 16 menit terakhir MU melawan Norwich City (0-1), karena sesak napas secara mendadak. Pihak fans dan klub menduga Lindelof terpapar Covid-19 dan ia memiliki riwayat sakit pernapasan. Kebetulan, sehari setelah pertandingan lawan Norwich Citys, MU menutup pusat latihan di Carrington setelah ditemukan sejumlah kasus positif corona di antara pemain dan staf klub.

                Namun hal ini dibantah oleh pihak Manchester United bahwa Lindelof terpapar Covid-19, pasalnya hasil pemeriksaan media menunjukkan Lindelof negatif Covid-19. Adapun mengenai keterhubungan dengan vaksinasi Covid-19 juga tidak ada informasi resmi. Saat ini kondisi Victor Lindelof sudah pulih sepenuhnya.

                Adapun klaim bahwa jantung Victor Lindelof dipasangi chip selama 2 hari juga tidak benar. Melansir dari tempo.co, Lindelof diberi perawatan intensif dan dipasangi alat monitor jantung selama 2 hari, bukan chip. Hal ini disampaikan langsung oleh istrinya Maja Nilsson Lindelof,

                “Dia menjalani banyak tes dan jantungnya dipasang monitor selama dua hari untuk memastikan semuanya baik-baik saja.”

                Berdasarkan data yang terkumpul dapat disimpulkan bahwa klaim congor_istana adalah tidak benar dan termasuk kategori Konten yang Menyesatkan.",

                "shortdesc" => "Hasil Periksa Fakta Ani Nur MR.

                Informasi Palsu. Pihak Manchester United membantah bahwa sesak napas yang dialami Victor Lindelof karena terpapar Covid-19, pun juga tidak ada informasi resmi bahwa sesak napas tersebut berkaitan dengan vaksinasi Covid-19. Karena sakitnya tersebut, jantung Victor Lindelof dipasangi alat monitor jantung selama 2 hari oleh petugas medis, bukan chip.",
                "sumber" => "https://turnbackhoax.id/2021/12/31/salah-victor-lindelof-gagal-jantung-setelah-vaksinasi-covid-19-kemudian-jantungnya-dipasangi-chip/"
            ],
            [
                "judul" => "[SALAH] Link Mendaftarkan Bantuan Covid-19 Bagi yang Mempunyai E-KTP",
                "tanggal" => Carbon::parse('2021-12-24'),
                "gambar" => "gambar/Hoax_4.jpg",
                "isi" => "Akun Facebook bernama Memeyy Nackolly memposting informasi mengenai warga Indonesia yang mempunyai E-KTP bisa mendaftarkan E-KTPnya untuk menerima bantuan dana Covid-19 per tanggal 25 November 2021. Besaran dana bantuan adalah Rp600.000. Dalam postingan tersebut juga dicantumkan link pendaftaran.

                Setelah ditelusuri, Kepala Biro Humas Kementrian Sosial (Kemensos) Hasim mengatakan informasi tersebut tidak benar saat dikonfirmasi oleh Kompas.com. Bantuan yang diberikan pemerintah melalui Kemensos akan terpusat melalui sistem. Nantinya jika ada bantuan akan diinformasikan melalui laman atau media sosial resmi Kemensos.

                Masyarakat diimbau untuk waspada dan berhati-hati terhadap informasi bantuan yang diumumkan bukan berasal dari Kemensos. Adapun untuk mengecek status bantuan sosial dari pemerintah dapat mengakses https://cekbansos.kemensos.go.id. dengan cara memasukan provinsi, kabupaten, kecamatan, desa/kelurahan tempat tinggal, dan nama penerima sesuai KTP.

                Dengan demikian informasi masyarakat yang mempunyai E-KTP bisa mendaftarkan bantuan Covid-19 ke link dalam postingan Facebook tidak benar. Hal tersebut sudah dijelaskan oleh Kepala Biro Humas Kementrian Sosial (Kemensos) Hasim dan informasi mengenai bantuan bisa didapatkan melalui akun media sosial dan laman resmi Kemensos, sehingga hal tersebut masuk dalam kategori konten palsu.",

                "shortdesc" => "Hasil Periksa Fakta Luthfiyah OJ (UIN Raden Mas Said Surakarta).

                Kepala Biro Humas Kementrian Sosial (Kemensos) Hasim mengatakan hal tersebut tidak benar dan informasi mengenai bantuan bisa didapatkan melalui akun media sosial resmi Kemensos. Adapun untuk mengecek status bantuan sosial dari pemerintah dapat mengakses https://cekbansos.kemensos.go.id.",
                "sumber" => "https://turnbackhoax.id/2021/12/24/salah-link-mendaftarkan-bantuan-covid-19-bagi-yang-mempunyai-e-ktp/"
            ],
        ]);
    }
}
