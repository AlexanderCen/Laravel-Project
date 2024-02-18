<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasis')->insert([
            //

            //Jkt barat
            ['id_kota' => '1', 'nama' => 'PKC Cengkareng', 'alamat' => 'Jl. Kamal Raya No.2, RT.8/RW.7, Cengkareng Bar., Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730', 'tanggal' => '24-28 Januari', 'jam' => '08.00 - 12.00 WIB', 'no_telp' => '(021) 29038167', 'gambar' => 'gambar/1_1.jpg'],
            ['id_kota' => '1', 'nama' => 'Mal Neo Soho', 'alamat' => 'Jalan Letjen S. Parman No.Kav. 28, RT.3/RW.5, Tanjung Duren Selatan, Grogol petamburan, Kota Jakarta Barat, Jakarta 11470', 'tanggal' => '20-24 Januari', 'jam' => '09.00 - 16.00 WIB', 'no_telp' => '(021) 56989999', 'gambar' => 'gambar/1_2.jpg'],
            ['id_kota' => '1', 'nama' => 'Mal Ciputra Jakarta', 'alamat' => 'Jl. Arteri S. Parman, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470', 'tanggal' => '25-26 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '(021) 5662121', 'gambar' => 'gambar/1_3.jpg'],

            //jkt timur
            ['id_kota' => '2', 'nama' => 'Puskesmas Kecamatan Kramat Jati', 'alamat' => 'Jl. Kerja Bakti No.1, RT.2/RW.10, Kramat Jati, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13510', 'tanggal' => '17-28 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/2_1.jpg'],
            ['id_kota' => '2', 'nama' => 'Mal Cibubur Junction', 'alamat' => 'Jl. Jambore No.1, RW.7, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Jawa Barat 13720', 'tanggal' => '21 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '(021) 87755678', 'gambar' => 'gambar/2_2.jpg'],

            //jkt utara
            ['id_kota' => '3', 'nama' => 'RTH Kalijodo', 'alamat' => 'VQ5Q+QG6, RT.9/RW.5, Pejagalan, Penjaringan, North Jakarta City, Jakarta 14450', 'tanggal' => '14-31 Januari', 'jam' => '08.00 - 11.30 WIB', 'no_telp' => '', 'gambar' => 'gambar/3_1.jpg'],
            ['id_kota' => '3', 'nama' => 'Mal Baywalk', 'alamat' => 'Jl. Pluit Karang Ayu 1 No.B1, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450', 'tanggal' => '17 Januari - 11 Februari Setiap Senin - Sabtu', 'jam' => '10.00 - 16.00 WIB', 'no_telp' => '(021) 29628000', 'gambar' => 'gambar/3_2.jpg'],
            ['id_kota' => '3', 'nama' => 'Mal Pluit Village', 'alamat' => 'Jl. Pluit Indah No.12, RW.4, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450', 'tanggal' => '26 Januari - 8 Februari Setiap Senin - Jumat', 'jam' => '08.00 - 12.00 WIB', 'no_telp' => '(021) 6683888', 'gambar' => 'gambar/3_3.jpg'],

            //jkt selatan
            ['id_kota' => '4', 'nama' => 'Puskesmas Kecamatan Cilandak', 'alamat' => 'Jl. Komplek BNI 46 No.57, Cilandak Barat, Cilandak, RT.4/RW.5, Cilandak Barat, RT.4/RW.5, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430', 'tanggal' => '24-28 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '(021) 7694279', 'gambar' => 'gambar/4_1.jpg'],
            ['id_kota' => '4', 'nama' => 'Puskesmas Kelurahan Gandaria Selatan', 'alamat' => 'Jl. Poncol No.17, RT.1/RW.7, Gandaria Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12420', 'tanggal' => '24-28 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/4_2.jpg'],
            ['id_kota' => '4', 'nama' => 'Puskesmas Kelurahan Cipete Selatan', 'alamat' => 'Jl. Anggur II No.122, RT.9/RW.3, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410', 'tanggal' => '24-28 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '(021) 7669455', 'gambar' => 'gambar/4_3.jpg'],

            //jkt pusat
            ['id_kota' => '5', 'nama' => 'RPTRA Matahari', 'alamat' => 'Rawasari Barat 6 No.79A, RT.4/RW.1, Cemp. Putih Tim., Kec. Cempaka Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510', 'tanggal' => '17-21 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/5_1.jpg'],
            ['id_kota' => '5', 'nama' => 'RSUD Cempaka Putih', 'alamat' => 'Jl. Rawasari Sel. No.1, RT.16/RW.2, Cemp. Putih Tim., Kec. Cempaka Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510', 'tanggal' => '17-21 Januari', 'jam' => '09.00 - 12.00 WIB', 'no_telp' => '(021) 4224243', 'gambar' => 'gambar/5_2.jpg'],
            ['id_kota' => '5', 'nama' => 'Hall C1, JIExpo', 'alamat' => 'JIExpo Hall C1, Jl. Rajawali Selatan XIV No.2, RW.10, Gn. Sahari Utara, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10720', 'tanggal' => '18-22 dan 24-29 Januari', 'jam' => '09.00 - 15.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/5_3.jpg'],

            //bogor
            ['id_kota' => '6', 'nama' => 'Kantor Kecamatan Bogor Timur (AstraZeneca)', 'alamat' => 'Jl. Raya Pajajaran No.16, RT.03/RW.04, Baranangsiang, Kec. Bogor Timur, Kota Bogor, Jawa Barat 16143', 'tanggal' => '22 Januari', 'jam' => '08.00 - 12.00', 'no_telp' => '', 'gambar' => 'gambar/6_1.jpg'],
            ['id_kota' => '6', 'nama' => 'Kantor Kelurahan Cibuluh (AstraZeneca)', 'alamat' => ' Jalan KS. Tubun No. 234, Kelurahan Cibuluh, Kecamatan Bogor Utara, RT.01/RW.04, Tanah Baru, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16151', 'tanggal' => '14 Januari', 'jam' => '08.00 - 12.00 WIB', 'no_telp' => '(0251) 8653235', 'gambar' => 'gambar/6_2.jpg'],
            ['id_kota' => '6', 'nama' => 'Kantor Kelurahan Tanah Baru (AstraZeneca)', 'alamat' => 'Jl. Pangeran Sogiri No.26, RT.04/RW.02, Tanah Baru, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16154', 'tanggal' => '14 Januari', 'jam' => '08.00 - 13.00 WIB', 'no_telp' => '(0251) 8663828', 'gambar' => 'gambar/6_3.jpg'],

            //depok
            ['id_kota' => '7', 'nama' => 'D\'Mall Depok', 'alamat' => 'Jl. Margonda Raya No.88, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423', 'tanggal' => '21-22 Januari', 'jam' => '09.00 - 14.00 WIB', 'no_telp' => '(021) 7753487', 'gambar' => 'gambar/7_1.jpg'],
            ['id_kota' => '7', 'nama' => 'Rumah Sakit Universitas Indonesia (RSUI)', 'alamat' => 'Pondok Cina, Beji, Kota Depok, Jawa Barat 16424', 'tanggal' => 'Mulai dari 12 Januari 2022', 'jam' => '08.00 - 15.00 (Senin - Jumat) 08.00 - 12.00 (Sabtu)', 'no_telp' => '(021) 50829292', 'gambar' => 'gambar/7_2.jpg'],

            //tangerang
            ['id_kota' => '8', 'nama' => 'QBIG BSD City', 'alamat' => 'Jl. BSD Raya Utama, Lengkong Kulon, Kec. Pagedangan, Kabupaten Tangerang, Banten 15331', 'tanggal' => '21-23 & 28-30 Januari', 'jam' => '08.00 - 14.00 WIB', 'no_telp' => '(021) 80826789', 'gambar' => 'gambar/8_1.jpg'],
            ['id_kota' => '8', 'nama' => 'Teraskota Entertainment Center', 'alamat' => 'CBD Lot VII B, Jl. Pahlawan Seribu, Lengkong Gudang, Kec. Serpong, Kota Tangerang Selatan, Banten 15322', 'tanggal' => '12-31 Januari', 'jam' => '08.00 - 12.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/8_2.jpg'],
            ['id_kota' => '8', 'nama' => 'Puskesmas Jurumudi Baru', 'alamat' => 'Jalan Halim Perdana Kusuma, Belendung, Benda, RT.004/RW.001, Pajang, Benda, Kota Tangerang, Banten 15123', 'tanggal' => '13-15 Januari', 'jam' => '07.30 - 10.00 WIB', 'no_telp' => '(021) 55796181', 'gambar' => 'gambar/8_3.jpg'],

            //bekasi
            // ['id_kota' => '', 'nama' => '', 'alamat' => '', 'tanggal' => '', 'jam' => '', 'no_telp' => '', 'gambar' => 'gambar/'],
            ['id_kota' => '9', 'nama' => 'Puskesmas Mekarmukti', 'alamat' => 'Jl. Raya Cibarusah, Mekarmukti, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530', 'tanggal' => 'Setiap Selasa dan Jumat', 'jam' => '08.00 - 11.00 WIB', 'no_telp' => '', 'gambar' => 'gambar/9_1.jpg'],
            ['id_kota' => '9', 'nama' => 'Puskesmas Telaga Murni', 'alamat' => 'Jl. Raya Imam Bonjol No.59-17, Telagamurni, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa Barat 17530', 'tanggal' => 'Senin - Jumat', 'jam' => '07.00 - selesai', 'no_telp' => '(021) 89107679', 'gambar' => 'gambar/9_2.jpg'],

            //Riau
            // ['id_provinsi' => 1, 'nama' => 'Politeknik Kesehatan KemenKes Prov. Riau', 'alamat' => "Jl. Melur No.103, Harjosari, Kec. Sukajadi, Kota Pekanbaru, Riau 28156", 'no_telp' => "+6276136581", 'gambar' => "gambar/PoltekKes.jpg"],
            // ['id_provinsi' => 1, 'nama' => 'RS. Daerah Madani Kota Pekanbaru', 'alamat' => "Jl. Garuda Sakti, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28291", 'no_telp' => "", 'gambar' => "gambar/RS Madani.jpg"],
            // ['id_provinsi' => 1, 'nama' => 'Universitas Muhammadiyah Riau Kampus 1', 'alamat' => "Jl. KH. Ahmad Dahlan No.88, Kp. Melayu, Kec. Sukajadi, Kota Pekanbaru, Riau 28156", 'no_telp' => "+6276135008", 'gambar' => "gambar/Gedung_Rektorat5.jpg"],

            // //Aceh
            // ['id_provinsi' => 2, 'nama' => 'RSUD dr. Zubir Mahmud', 'alamat' => "Jl. Medan-Banda Aceh Km. 372 Desa Seuneubok Barat Kec. Idi timur Kab. Aceh Timur", 'no_telp' => "+6264621139", 'gambar' => "gambar/RSUD Mahmud.jpg"],
            // ['id_provinsi' => 2, 'nama' => 'RS. Avicenna Bireuen', 'alamat' => "Jl. Laksamana Malahayati No.Desa, Lhok Awe Teungoh, Kota Juang, Kabupaten Bireuen, Aceh", 'no_telp' => "+6264422887", 'gambar' => "gambar/2_2.jpg"],
            // ['id_provinsi' => 2, 'nama' => 'Rumah Sakit Telaga Bunda', 'alamat' => "Jl. Peutua Banta No.7, Gampong Bireuen Meunasah Blang, Bireun Meunasah Blang, Juang City, Bireuen Regency, Aceh 24251", 'no_telp' => "+62644324433", 'gambar' => "gambar/RS Telaga Bunda.jpeg"],

            // //Bali
            // ['id_provinsi' => 3, 'nama' => 'Puskesmas Selemadeg Barat', 'alamat' => "Jl. Raya Denpasar - Gilimanuk No.104, Lalanglinggah, Kec. Selemadeg Bar., Kabupaten Tabanan, Bali 82162", 'no_telp' => "+623618311286", 'gambar' => "gambar/Puskesmas Selemadeg Barat.jpg"],
            // ['id_provinsi' => 3, 'nama' => 'Kasih Ibu General Hospital Kedonganan', 'alamat' => "Jl. Raya Uluwatu No.69 A, Kedonganan, Kuta, Bali, 80361", 'no_telp' => "+62361703270", 'gambar' => "gambar/Kasih Ibu General Hospital Kedonganan.jpg"],
            // ['id_provinsi' => 3, 'nama' => 'Klinik Tiara Husada', 'alamat' => "Jl. Raya Tuban, Kuta, Badung Regency, Bali 80361", 'no_telp' => "+62361753676", 'gambar' => "gambar/3_3.jpg"],

            // //Banten
            // ['id_provinsi' => 4, 'nama' => 'Puskesmas Panongan', 'alamat' => "Jl. Raya Panongan, RT.01/RW.02, Panongan, Kec. Panongan, Kabupaten Tangerang, Banten 15710", 'no_telp' => "+6281287911077", 'gambar' => "gambar/Puskesmas Panongan.jpg"],
            // ['id_provinsi' => 4, 'nama' => 'Puskesmas Pasir Jaya', 'alamat' => "blok a4 no, Jl. Perum Bukit Tiara No.18, Pasir Jaya, Kec. Cikupa, Kabupaten Tangerang, Banten 15710", 'no_telp' => "", 'gambar' => "gambar/Puskesmas Pasir Jaya.jpg"],
            // ['id_provinsi' => 4, 'nama' => 'RS Hermina Bitung', 'alamat' => "Jl. Raya Serang Kabupaten No.KM 10, Kadu, Kec. Curug, Kabupaten Tangerang, Banten 15810", 'no_telp' => "+622159497525", 'gambar' => "gambar/RS HERMINA BITUNG.jpg"],

            // //Bengkulu
            // ['id_provinsi' => 5, 'nama' => 'RSUD Hasanuddin Damrah Manna', 'alamat' => "Jl. Raya Padang Panjang, Pagar Dewa, Kota Manna, Kabupaten Bengkulu Selatan, Bengkulu 38515", 'no_telp' => "", 'gambar' => "gambar/RSUD Hasanuddin Damrah Manna.jpg"],
            // ['id_provinsi' => 5, 'nama' => 'RSU Ummi Bengkulu', 'alamat' => "Jl. Hibrida No.1, Sido Mulyo, Kec. Gading Cemp., Kota Bengkulu, Bengkulu 38229", 'no_telp' => "+6273624832", 'gambar' => "gambar/RSU Ummi Bengkulu.jpg"],
            // ['id_provinsi' => 5, 'nama' => 'RSKJ Soeprapto Provinsi Bengkulu', 'alamat' => "Jl. Bakti Husada, Lkr. Barat, Kec. Gading Cemp., Kota Bengkulu, Bengkulu 38211", 'no_telp' => "+62736343339", 'gambar' => "gambar/5_3.jpg"],

            // //Gorontalo
            // ['id_provinsi' => 6, 'nama' => 'RSUD Otanaha', 'alamat' => "kecamatan, Buladu, Dungingi, Kota Gorontalo, Gorontalo 96136", 'no_telp' => "", 'gambar' => "gambar/6_1.jpg"],
            // ['id_provinsi' => 6, 'nama' => 'RS Bunda Gorontalo', 'alamat' => "Jl. Kh. Agus Salim No.390, Wumialo, Kota Tengah, Kota Gorontalo, Gorontalo 96138, Indonesia", 'no_telp' => "+62435829290", 'gambar' => "gambar/RS Bunda.jpg"],
            // ['id_provinsi' => 6, 'nama' => 'RSUD Dr. M.M. Dunda', 'alamat' => "Hunggaluwa, Limboto, Kabupaten Gorontalo, Gorontalo 96181", 'no_telp' => "+62435881455", 'gambar' => "gambar/RSUD Dr. M.M. Dunda.png"],

            // //Jambi
            // ['id_provinsi' => 7, 'nama' => 'RSUD KH. Daud Arif Kuala Tungkal', 'alamat' => "Tungkal II, Tungkal Ilir, Kabupaten Tanjung Jabung Barat, Jambi 36514", 'no_telp' => "+6274221621", 'gambar' => "gambar/RSUD KH. Daud Arif Kuala Tungkal.jpg"],
            // ['id_provinsi' => 7, 'nama' => 'RSUD Sultan Thaha Saifuddin', 'alamat' => "Jl. Muara Bungo - Jambi Desa Bogorejo Kelurahan Tebing Tinggi, Bedaro Rampak, Tebo Tengah, Kabupaten Tebo, Jambi 37573", 'no_telp' => "+6274421727", 'gambar' => "gambar/RSUD Sultan Thaha Saifuddin.jpg"],
            // ['id_provinsi' => 7, 'nama' => 'RS Permata Hati', 'alamat' => "JL,Lebai Hasan, Sungai Pinang, Ps. Muara Bungo, Kabupaten Bungo, Jambi 40115, Indonesia", 'no_telp' => "+628117444118", 'gambar' => "gambar/RS Permata Hati.jpg"],

            // //Jawa Barat
            // ['id_provinsi' => 8, 'nama' => 'RS Hermina Mekarsari', 'alamat' => "Jl. Raya Cileungsi - Jonggol No.KM.1, RT.4/RW.4, Cileungsi Kidul, Kec. Cileungsi, Bogor, Jawa Barat 16820, Indonesia", 'no_telp' => "+622129232525", 'gambar' => "gambar/RS Hermina Mekar Sari.jpg"],
            // ['id_provinsi' => 8, 'nama' => 'RSUD Sultan Thaha Saifuddin', 'alamat' => "Jl. Muara Bungo - Jambi Desa Bogorejo Kelurahan Tebing Tinggi, Bedaro Rampak, Tebo Tengah, Kabupaten Tebo, Jambi 37573", 'no_telp' => "+6274421727", 'gambar' => "gambar/RSUD Sultan Thaha Saifuddin.jpg"],
            // ['id_provinsi' => 8, 'nama' => 'RS DR. Sismadi', 'alamat' => "Jl. Raya Narogong KM. 20, Rawahingkik, Limusnunggal, Cileungsi, Kec. Cileungsi, Bogor, Jawa Barat 16820, Indonesia", 'no_telp' => "+622182484065", 'gambar' => "gambar/RS DR. Sismadi.jpg"],

            // //Jawa Tengah
            // ['id_provinsi' => 9, 'nama' => 'RS PKU Kutowinangun', 'alamat' => "Jl. Pemuda No.12, Kutowinangun, Kec. Kutowinangun, Kabupaten Kebumen, Jawa Tengah 54393", 'no_telp' => "+62287661137", 'gambar' => "gambar/RS PKU Kutowinangun.jpg"],
            // ['id_provinsi' => 9, 'nama' => 'Rumah Sakit Muhammadiyah Sruweng', 'alamat' => "Jl. Raya Sruweng No.5, Sruweng, Kec. Sruweng, Kabupaten Kebumen, Jawa Tengah 54361", 'no_telp' => "+622873872001", 'gambar' => "gambar/9_2.jpg"],
            // ['id_provinsi' => 9, 'nama' => 'RS Permata Medika', 'alamat' => "Jl. Indrakila No.17, Indrakila, Kebumen, Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah 54311, Indonesia", 'no_telp' => "+622873870779", 'gambar' => "gambar/RS Permata Medika.jpg"],

            // //Jawa Timur
            // ['id_provinsi' => 10, 'nama' => 'Kantor Kejaksaan Tuban', 'alamat' => "Jl. RA. Kartini, Kutorejo, Kec. Tuban, Kabupaten Tuban, Jawa Timur 62311", 'no_telp' => "", 'gambar' => "gambar/roh-ft-Tuban-kantor-Kajari-Tuban.jpg"],
            // ['id_provinsi' => 10, 'nama' => 'Rumah Sakit Putra Waspada', 'alamat' => "Jl. Jayeng Kusuma No.66, Trimulyo, Ngujang, Kec. Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66226", 'no_telp' => "+62355335550", 'gambar' => "gambar/RS Putra Waspada.png"],
            // ['id_provinsi' => 10, 'nama' => 'Rumah Sakit Islam Orpeha Tulungagung', 'alamat' => "Jl. KH Abdul Fatah No.80, Batangsaren, Kec. Kauman, Kabupaten Tulungagung, Jawa Timur 66228", 'no_telp' => "+62355327691", 'gambar' => "gambar/rumah-sakit-islam-rsi-orpeha-tulungagung-jalan-kh-abdul-fatah-tulungagung.jpg"],

            // //Kalimantan Barat
            // ['id_provinsi' => 11, 'nama' => 'Kantor Lurah Benoa', 'alamat' => "Jl. Praja Sentral, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80361", 'no_telp' => "+62361771571", 'gambar' => "gambar/Lurah Benoa.jpg"],
            // ['id_provinsi' => 11, 'nama' => 'Puskesmas Bkia Abian Base', 'alamat' => "Gg. Mawar Jl. Raya Kuta No.3, Kuta, Kabupaten Badung, Bali 80361", 'no_telp' => "+62361764814", 'gambar' => "gambar/11_2.jpg"],
            // ['id_provinsi' => 11, 'nama' => 'Rumah Sakit TK IV Sintang', 'alamat' => "Jl. MT. Haryono KM. 03, Kapuas Kanan Hulu, Kecamatan Sintang, Kapuas Kanan Hulu, Kec. Sintang, Kabupaten Sintang, Kalimantan Barat 78613", 'no_telp' => "+6256522624", 'gambar' => "gambar/Rumah Sakit TK IV Sintang.jpg"],

            // //Kalimantan Selatan
            // ['id_provinsi' => 12, 'nama' => 'Rumah Sakit Daerah Mangusada Badung', 'alamat' => "Jl. Raya Kapal, Mangupura, Mengwi, Kapal, Kec. Mengwi, Kabupaten Badung, Bali 80351", 'no_telp' => "+623619006813", 'gambar' => "gambar/B-BESUK.jpg"],
            // ['id_provinsi' => 12, 'nama' => 'POLRES Bangli', 'alamat' => "Jl. Lettu Lila, Kawan, Kec. Bangli, Kabupaten Bangli, Bali 80613", 'no_telp' => "+6236691072", 'gambar' => "gambar/Bangli.jpg"],
            // ['id_provinsi' => 12, 'nama' => 'Rumah Sakit Bhayangkara Denpasar', 'alamat' => "2F, Jl. Trijata No.32, Sumerta Kelod, Kec. Denpasar Utara, Kota Denpasar, Bali 80233", 'no_telp' => "+62361234670", 'gambar' => "gambar/1608900018_Depan RSBH 1 BARU.jpg"],

            // //Kalimantan Tengah
            // ['id_provinsi' => 13, 'nama' => 'RSI PKU Muhammadiyah Palangka Raya', 'alamat' => "Jl. RTA Milono No.KM. 2,5, Menteng, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73111", 'no_telp' => "+625363244801", 'gambar' => "gambar/RS PKU Muhammadiyah Palangkaraya.jpg"],
            // ['id_provinsi' => 13, 'nama' => 'Rumah Sakit Ibu dan Anak Pucuk Permata Hati', 'alamat' => "Jl. Teuku Umar Barat No.71XX, Padangsambian Klod, Kec. Denpasar Bar., Kota Denpasar, Bali 80117", 'no_telp' => "+62361486579", 'gambar' => "gambar/Pucuk Permata.jpg"],
            // ['id_provinsi' => 13, 'nama' => 'Puskesmas Payangan', 'alamat' => "Jl. Raya Payangan, Puhu, Payangan, Kabupaten Gianyar, Bali 80572", 'no_telp' => "", 'gambar' => "gambar/rsud-payangan.jpg"],

            // //Kalimantan Timur
            // ['id_provinsi' => 14, 'nama' => 'Klinik Utama Budi Mulia', 'alamat' => "Jl. R. A Kartini No.1, Tanah Grogot, Kabupaten Paser, Kalimantan Timur 76251", 'no_telp' => "+6254322173", 'gambar' => "gambar/14_1.jpg"],
            // ['id_provinsi' => 14, 'nama' => 'RSIA Puri Bunda Tabanan', 'alamat' => "Jl. Dr. Ir. Soekarno, Banjar Anyar, Kec. Kediri, Kabupaten Tabanan, Bali 82121", 'no_telp' => "+6281138205504", 'gambar' => "gambar/Puri Bunda.jpg"],
            // ['id_provinsi' => 14, 'nama' => 'Rumah Sakit Manuaba', 'alamat' => "Jl. Cokroaminoto No.28, Ubung Kaja, Kec. Denpasar Utara, Kota Denpasar, Bali 80116", 'no_telp' => "+62361286183", 'gambar' => "gambar/RSU MANUABA.jpg"],

            // //Kalimantan Utara
            // ['id_provinsi' => 15, 'nama' => 'Rumah Sakit Universitas Udayana', 'alamat' => "Jl. Rumah Sakit Unud, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361", 'no_telp' => "+623618953670", 'gambar' => "gambar/Univ Udayana.jpg"],
            // ['id_provinsi' => 15, 'nama' => 'Puskesmas Abiansemal 3', 'alamat' => "Jl. Sibang Kaja, Sibang Kaja, Abiansemal, Sibang Kaja, Kec. Abiansemal, Kabupaten Badung, Bali 80111", 'no_telp' => "+623618463263", 'gambar' => "gambar/Abiansemal 3.jpg"],
            // ['id_provinsi' => 15, 'nama' => 'PKM I Denpasar Utara', 'alamat' => "Jl. Angsoka No.17, Dangin Puri Kangin, Kec. Denpasar Utara, Kota Denpasar, Bali 80234", 'no_telp' => "", 'gambar' => "gambar/berita_201705120537_HariPertamaPenerapanPKMDiDenpasar.jpg"],

            // //Kepulauan Bangka Belitung
            // ['id_provinsi' => 16, 'nama' => 'RSUD Bengkalis', 'alamat' => "Jl. Kelapapati Tengah No.90, Klp. Pati, Kec. Bengkalis, Kabupaten Bengkalis, Riau 28711", 'no_telp' => "+627667008100", 'gambar' => "gambar/RSUD Bengkalis.jpg"],
            // ['id_provinsi' => 16, 'nama' => 'UPTD Puskesmas Tualang', 'alamat' => "Jl. Hang Tuah, Tualang, Kec. Tualang, Kabupaten Siak, Riau 28685", 'no_telp' => "+627619950066", 'gambar' => "gambar/UPTD Puskesmas Tualang.jpg"],
            // ['id_provinsi' => 16, 'nama' => 'Puskesmas Kandis', 'alamat' => "Jl. Datuk Setia Maharaja, Telaga Sam Sam, Kec. Kandis, Kabupaten Siak, Riau 28686", 'no_telp' => "", 'gambar' => "gambar/kandis.jpg"],

            // //Kepulauan Riau
            // ['id_provinsi' => 17, 'nama' => 'RSUD Muhammad Sani Kab. Karimun', 'alamat' => "Jalan Soekarno Hatta No.1, Harjosari, Tebing, Kabupaten Karimun, Kepulauan Riau 29663", 'no_telp' => "+62777327808", 'gambar' => "gambar/Muhammad Sani.jpg"],
            // ['id_provinsi' => 17, 'nama' => 'Klinik Utama Dunia Medical Centre', 'alamat' => "Jl. Komp. Fanindo, Tj. Uncang, Kec. Batu Aji, Kota Batam, Kepulauan Riau 29425", 'no_telp' => "+627787432899", 'gambar' => "gambar/Dunia Medical.png"],
            // ['id_provinsi' => 17, 'nama' => 'RS. Charis Medika', 'alamat' => "Komplek Muka Kuning Paradise Blok D 1-9, Jl. Letjen R. Suprapto No.9, Bukit Tempayan, Kec. Batu Aji, Kota Batam, Kepulauan Riau 29425", 'no_telp' => "+627783582502", 'gambar' => "gambar/rs-Charis-Medika.png"],

            // //DKI Jakarta
            // ['id_provinsi' => '18', 'nama' => 'RSUD TAMANSARI', 'alamat' => '8, Jl. Madu No.10A, RT.2/RW.4, Mangga Besar, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11180, Indonesia', 'no_telp' => '(021) 26075052', 'gambar' => 'gambar/18_1.jpg'],
            // ['id_provinsi' => '18', 'nama' => 'RSUD CENGKARENG POS 1', 'alamat' => 'Jl. Bumi Cengkareng Indah No.1, RT.13/RW.10, Cengkareng Tim., Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11730, Indonesia', 'no_telp' => '(021) 54372874', 'gambar' => 'gambar/18_2.jpg'],
            // ['id_provinsi' => '18', 'nama' => 'POS VAKSIN POLSEK PALMERAH', 'alamat' => '6, Jl. Palmerah Barat III No.1, RT.6/RW.14, Palmerah, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480, Indonesia', 'no_telp' => '(021) 5483667', 'gambar' => 'gambar/18_3.jpg'],

            // //Lampung
            // ['id_provinsi' => '19', 'nama' => 'KLINIK UTAMA RAWAT INAP RAHAYU', 'alamat' => 'Bandar Jaya Bar., Kec. Terbanggi Besar, Kabupaten Lampung Tengah, Lampung 34163, Indonesia', 'no_telp' => '0725-528260', 'gambar' => 'gambar/19_1.jpg'],
            // ['id_provinsi' => '19', 'nama' => 'RSD SUKADANA', 'alamat' => 'Mataram Marga, Sukadana, Kabupaten Lampung Timur, Lampung 34182, Indonesia', 'no_telp' => '0725-625022', 'gambar' => 'gambar/19_2.jpg'],
            // ['id_provinsi' => '19', 'nama' => 'RSUD RAGAB BEGAWE CARAM MESUJI', 'alamat' => 'Brabasan, Tj. Raya, Kabupaten Mesuji, Lampung 34598, Indonesia', 'no_telp' => '', 'gambar' => 'gambar/19_3.jpg'],

            // //Maluku
            // ['id_provinsi' => '20', 'nama' => 'RSUD CENDRAWASIH DOBO', 'alamat' => 'Jl. Cendrawasih No.Km. 6, Siwalima, Pulau-Pulau Aru, Kabupaten Kepulauan Aru, Maluku, Indonesia', 'no_telp' => '0917-21366', 'gambar' => 'gambar/20_1.jpg'],
            // ['id_provinsi' => '20', 'nama' => 'RSU KAREL SADSUITUBUN', 'alamat' => 'Kel. Ohoijang Watdek, Kei Kecil, Kabupaten Maluku Tenggara, Maluku, Indonesia', 'no_telp' => '0916-21613', 'gambar' => 'gambar/20_2.jpg'],
            // ['id_provinsi' => '20', 'nama' => 'RS PRATAMA GORAN RIUN/GOROM', 'alamat' => 'Unnamed Road, Ondor, Pulau Gorom, Kabupaten Seram Bagian Timur, Maluku, Indonesia', 'no_telp' => '', 'gambar' => 'gambar/20_3.jpg'],

            // //Maluku Utara
            // ['id_provinsi' => '21', 'nama' => 'RSUD LABUHA', 'alamat' => 'Marabose, Bacan, Kabupaten Halmahera Selatan, Maluku Utara, Indonesia', 'no_telp' => '00-00000000', 'gambar' => 'gambar/21_1.jpg'],
            // ['id_provinsi' => '21', 'nama' => 'RSUD DR H CHASAN BOESOIRIE', 'alamat' => 'Jl. Cempaka, Tanah Tinggi Bar., Ternate Sel., Kota Ternate, Maluku Utara, Indonesia', 'no_telp' => '0921-3121281', 'gambar' => 'gambar/21_2.jpg'],
            // ['id_provinsi' => '21', 'nama' => 'RSUD WEDA', 'alamat' => 'Jalan Raya, Were, Weda, Kabupaten Halmahera Tengah, Maluku Utara, Indonesia', 'no_telp' => '62-82195572007', 'gambar' => 'gambar/21_3.jpg'],

            // //NTB
            // ['id_provinsi' => '22', 'nama' => 'RSUD PRAYA', 'alamat' => 'Jl. H. Lalu Hasyim, Bunut Baok, Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511, Indonesia', 'no_telp' => '0370-654007', 'gambar' => 'gambar/22_1.jpg'],
            // ['id_provinsi' => '22', 'nama' => 'RSU PROVINSI NTB', 'alamat' => 'Jl. Prabu Rangkasari, Dasan Cermen, Kec. Sandubaya, Kota Mataram, Nusa Tenggara Bar. 84371, Indonesia', 'no_telp' => '62-(0370) 7502', 'gambar' => 'gambar/22_2.jpg'],
            // ['id_provinsi' => '22', 'nama' => 'RSUD DR R. SOEDJONO SELONG', 'alamat' => 'Jl. Prof. M Yamin SH No.55, Khusus Kota Selong, Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83611, Indonesia', 'no_telp' => '0376-21683', 'gambar' => 'gambar/22_3.jpg'],

            // //NTT
            // ['id_provinsi' => '23', 'nama' => 'RUMAH SAKIT DAERAH AERAMO', 'alamat' => 'Aeramo, Aesesa, Kabupaten Nagekeo, Nusa Tenggara Tim., Indonesia', 'no_telp' => '0381-0', 'gambar' => 'gambar/23_1.jpg'],
            // ['id_provinsi' => '23', 'nama' => 'RUMAH SAKIT UMUM DAERAH KOMODO', 'alamat' => 'Jl. Raya Labuan Bajo-Ruteng, Golo Bilas, Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim., Indonesia', 'no_telp' => '082144364975', 'gambar' => 'gambar/23_2.jpg'],
            // ['id_provinsi' => '23', 'nama' => 'RSUD SOE', 'alamat' => 'Jl. Boegenville No 07 Soe Timor Tengah Selatan, So\'e, Kota Soe, So\'e, Kota Soe, Kabupaten Timor Tengah Selatan, Nusa Tenggara Tim., Indonesia', 'no_telp' => '0388-21005', 'gambar' => 'gambar/23_3.jpg'],

            // //Papua
            // ['id_provinsi' => '24', 'nama' => 'RS PT FREEPORT INDONESIA', 'alamat' => 'Amamapare, Kec. Mimika Tim. Jauh, Kabupaten Mimika, Papua 99971, Indonesia', 'no_telp' => '0901-407666', 'gambar' => 'gambar/24_1.jpg'],
            // ['id_provinsi' => '24', 'nama' => 'RSUD OKSIBIL', 'alamat' => 'Jalan Poros No.2, Kabiding, Oksibil, Kabupaten Pegunungan Bintang, Papua 99573, Indonesia', 'no_telp' => '081248048401', 'gambar' => 'gambar/24_2.jpg'],
            // ['id_provinsi' => '24', 'nama' => 'RUMAH SAKIT MULIA', 'alamat' => 'Pruleme, Mulia, Kabupaten Puncak Jaya, Papua 98973, Indonesia', 'no_telp' => '0969-31125', 'gambar' => 'gambar/24_3.jpg'],

            // //Papua Barat
            // ['id_provinsi' => '25', 'nama' => 'RSUD. SCHOLOO KEYEN', 'alamat' => 'Jalan Teminabuan Ayamaru, Keyen, Teminabuan, Kabupaten Sorong Selatan, Papua Bar. 98454, Indonesia', 'no_telp' => '0951-081240017', 'gambar' => 'gambar/25_1.jpg'],
            // ['id_provinsi' => '25', 'nama' => 'RS PERTAMINA', 'alamat' => 'jalan ahmad yani kelurahan klaligi distrik sorong manoi, Klaligi, Sorong Manoi, Kota Sorong, Papua Bar. 98412, Indonesia', 'no_telp' => '0951-321362', 'gambar' => 'gambar/25_2.jpg'],
            // ['id_provinsi' => '25', 'nama' => 'RSAL DR.AZHAR ZAHIR MANOKWARI', 'alamat' => 'Jalan Serma Suwandi No. 01, Sanggeng, Manokwari Barat, Sanggeng, Manokwari Barat, Sanggeng, Manokwari Bar., Kabupaten Manokwari, Papua Bar. 98312, Indonesia', 'no_telp' => '0986-2211492', 'gambar' => 'gambar/25_3.jpg'],

            // //Sulawesi Barat
            // ['id_provinsi' => '26', 'nama' => 'RS BHAYANGKARA POLDA SULBAR', 'alamat' => 'Unnamed Road, Simboro, Kec. Simboro Dan Kepulauan, Kabupaten Mamuju, Sulawesi Barat 91512, Indonesia', 'no_telp' => '0426-2322916', 'gambar' => 'gambar/26_1.jpg'],
            // ['id_provinsi' => '26', 'nama' => 'RSUD WONOMULYO', 'alamat' => 'Sidodadi, Wonomulyo, Kabupaten Polewali Mandar, Sulawesi Barat 91352, Indonesia', 'no_telp' => '', 'gambar' => 'gambar/26_2.jpg'],
            // ['id_provinsi' => '26', 'nama' => 'RSU KONDOSAPATA', 'alamat' => 'Balla, Kabupaten Mamasa, Sulawesi Barat 91365, Indonesia', 'no_telp' => '6282-71411985', 'gambar' => 'gambar/26_3.jpg'],

            // //Sulawesi Selatan
            // ['id_provinsi' => '27', 'nama' => 'RSUD KH. HAYYUNG', 'alamat' => 'Bontobangung, Bontoharu, Kab. Kepulauan Selayar, Sulawesi Selatan 92812, Indonesia', 'no_telp' => '0414-2313031', 'gambar' => 'gambar/27_1.jpg'],
            // ['id_provinsi' => '27', 'nama' => 'RSUD LANTO DG PASEWANG', 'alamat' => 'Jl. Lkr., Empoang Sel., Binamu, Kabupaten Jeneponto, Sulawesi Selatan 92311, Indonesia', 'no_telp' => '0419-21004', 'gambar' => 'gambar/27_2.jpg'],
            // ['id_provinsi' => '27', 'nama' => 'RSUD SALEWANGANG MAROS', 'alamat' => 'Jl. Poros Makassar - Maros, Taroada, Kec. Turikale, Kabupaten Maros, Sulawesi Selatan 90516, Indonesia', 'no_telp' => '0411-371166', 'gambar' => 'gambar/27_3.jpg'],

            // //Sulawesi Tengah
            // ['id_provinsi' => '28', 'nama' => 'RSUD MOROWALI', 'alamat' => 'Jl. Trans Sulawesi, Bahomohoni, Palu Utara, Kota Palu, Sulawesi Tengah 94973, Indonesia', 'no_telp' => '0409-2220085', 'gambar' => 'gambar/28_1.jpg'],
            // ['id_provinsi' => '28', 'nama' => 'RSUD WAKAI', 'alamat' => 'Jl. Sultan Hasanudin No.32, Ampana, Ampana Kota, Kabupaten Tojo Una-Una, Sulawesi Tengah 94683, Indonesia', 'no_telp' => '62-85240576179', 'gambar' => 'gambar/28_2.jpg'],
            // ['id_provinsi' => '28', 'nama' => 'RSUD KABUPATEN BANGGAI', 'alamat' => 'Jl. Imam Bonjol No.14, Bungin Tim., Luwuk, Kabupaten Banggai, Sulawesi Tengah 94711, Indonesia', 'no_telp' => '0461-21820', 'gambar' => 'gambar/28_3.jpg'],

            // //Sulawesi Tenggara
            // ['id_provinsi' => '29', 'nama' => 'RSU KAB. KONAWE', 'alamat' => 'Tuoy, Unaaha, Kabupaten Konawe, Sulawesi Tenggara 93415, Indonesia', 'no_telp' => '0-040821042', 'gambar' => 'gambar/29_1.jpg'],
            // ['id_provinsi' => '29', 'nama' => 'RSUD KAB. MUNA', 'alamat' => 'Kabupaten Muna, Sulawesi Tenggara 93611, Indonesia', 'no_telp' => '0403-2521065', 'gambar' => 'gambar/29_2.jpg'],
            // ['id_provinsi' => '29', 'nama' => 'RSUD KAB. BUTON', 'alamat' => 'Laburunci, Ps. Wajo, Kabupaten Buton, Sulawesi Tenggara 93754, Indonesia', 'no_telp' => '0402-2816585', 'gambar' => 'gambar/29_3.jpg'],

            // //Sulawesi Utara
            // ['id_provinsi' => '30', 'nama' => 'RSUD DATOE BINANGKANG', 'alamat' => 'Lolak II, Lolak, Kabupaten Bolaang Mongondow, Sulawesi Utara, Indonesia', 'no_telp' => '0434-085240594', 'gambar' => 'gambar/30_1.jpg'],
            // ['id_provinsi' => '30', 'nama' => 'RSUD DR. SAM RATULANGI TONDANO', 'alamat' => 'Jl. R. Suprapto No.123, Luaan, Tondano Tim., Kabupaten Minahasa, Sulawesi Utara, Indonesia', 'no_telp' => '0431-321172', 'gambar' => 'gambar/30_2.jpg'],
            // ['id_provinsi' => '30', 'nama' => 'RSUD TALAUD', 'alamat' => 'Gemeh, Kabupaten Kepulauan Talaud, Sulawesi Utara, Indonesia', 'no_telp' => '0000-085342236', 'gambar' => 'gambar/30_3.jpg'],

            // //Sumatera Barat
            // ['id_provinsi' => '31', 'nama' => 'RSUD PROF. DR. HANAFIAH', 'alamat' => 'JL. Bunto Kandung No.1, Baringin, Lima Kaum, Kabupaten Tanah Datar, Sumatera Barat 27211, Indonesia', 'no_telp' => '0752-71008', 'gambar' => 'gambar/31_1.jpg'],
            // ['id_provinsi' => '31', 'nama' => 'RSJ PROF HB SA\'ANIN PADANG', 'alamat' => 'Jalan Raya Ulu Gadut, Limau Manis Selatan, Pauh, Limau Manis Sel., Padang, Kota Padang, Sumatera Barat 25157, Indonesia', 'no_telp' => '0751-72001', 'gambar' => 'gambar/31_2.jpg'],
            // ['id_provinsi' => '31', 'nama' => 'RSU LUBUK BASUNG', 'alamat' => 'Jl. DR. MH. Hatta, Padang Baru, Lubuk Basung, Kabupaten Agam, Sumatera Barat 26415, Indonesia', 'no_telp' => '0752-76017', 'gambar' => 'gambar/31_3.jpg'],

            // //Sumatera Selatan
            // ['id_provinsi' => '32', 'nama' => 'RS BUKIT ASAM MEDIKA', 'alamat' => 'Jl. Raya Bukit Asam, Tj. Enim, Lawang Kidul, Kabupaten Muara Enim, Sumatera Selatan 31716, Indonesia', 'no_telp' => '0734-451204', 'gambar' => 'gambar/32_1.jpg'],
            // ['id_provinsi' => '32', 'nama' => 'RS SRIWIJAYA PALEMBANG', 'alamat' => 'Jalan Jenderal Sudirman KM.4.5 No.502, 20 Ilir D. IV, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30138, Indonesia', 'no_telp' => '0711-419680', 'gambar' => 'gambar/32_2.jpg'],
            // ['id_provinsi' => '32', 'nama' => 'RSUD BANYUASIN', 'alamat' => 'JL. Palembang Betung, Km. 48, Seterio, Kedondong Raye, Kec. Banyuasin III, Kabupaten Banyu Asin, Sumatera Selatan 30912, Indonesia', 'no_telp' => '0711-891646', 'gambar' => 'gambar/32_3.jpg'],

            // //Sumatera Utara
            // ['id_provinsi' => '33', 'nama' => 'RUMAH SAKIT BALIMBINGAN PTP IV', 'alamat' => 'Balimbingan, Tanah Jawa, Kabupaten Simalungun, Sumatera Utara 21181, Indonesia', 'no_telp' => '0622-7562036', 'gambar' => 'gambar/33_1.jpg'],
            // ['id_provinsi' => '33', 'nama' => 'RSU SEMBIRING', 'alamat' => 'Jl. Besar No.77, Deli Tua Tim., Kec. Deli Tua, Kabupaten Deli Serdang, Sumatera Utara 20355, Indonesia', 'no_telp' => '061-7033569', 'gambar' => 'gambar/33_2.jpg'],
            // ['id_provinsi' => '33', 'nama' => 'RSUD SIDIKALANG', 'alamat' => 'Batang Beruh, Sidikalang, Kabupaten Dairi, Sumatera Utara 22218, Indonesia', 'no_telp' => '0627-21008', 'gambar' => 'gambar/33_3.jpg'],

            // //Yogyakarta
            // //['id_provinsi' => '', 'nama' => '', 'alamat' => '', 'no_telp' => '', 'gambar' => 'gambar/'],
            // ['id_provinsi' => '34', 'nama' => 'RSUD BANTUL', 'alamat' => 'Jl. Dr. Wahidin Sudiro Husodo, Area Sawah, Trirenggo, Kec. Bantul, Bantul, Daerah Istimewa Yogyakarta 55714, Indonesia', 'no_telp' => '0274-367381', 'gambar' => 'gambar/34_1.jpg'],
            // ['id_provinsi' => '34', 'nama' => 'RS NUR ROHMAH', 'alamat' => 'Jalan Wonosari - Yogya Bandung, Playen, Km. 7, Jambu Rejo, Bandung, Kec. Playen, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55861, Indonesia', 'no_telp' => '0274-394574', 'gambar' => 'gambar/34_2.jpg'],
            // ['id_provinsi' => '34', 'nama' => 'RSUD WATES', 'alamat' => 'Jalan Tentara Pelajar Km. 1 No. 5, Area Sawah, Beji, Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55651, Indonesia', 'no_telp' => '0274- 773169', 'gambar' => 'gambar/34_3.jpg'],

        ]);
    }
}
