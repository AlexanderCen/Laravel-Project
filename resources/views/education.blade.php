@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <button id="topbutton" onclick="topFunction()">⇑</button>
    <a id="linkbutton" href="https://www.pedulilindungi.id/" target="_blank"><img src="{{asset('css/link.png')}}" alt="">
        <span class="tooltiptext">Cek Status Kesehatanmu di PeduliLindungi</span>
    </a>
    <div class="virus">
        <div class="vl"></div>
        <h1 class="title">COVID-19</h1>
        <div class="subtitle_container">
            <a class="subtitle" onclick="scrolltoSymptomps()">Gejala</a>
            <a class="subtitle" onclick="scrolltoPrevention()">Pencegahan</a>
            <a class="subtitle" onclick="scrolltoPerawatan()">Perawatan</a>
            <a class="subtitle" onclick="scrolltoVarian()">Varian</a><br>
            <a class="subtitle" onclick="scrolltoVaksin()">Vaksin</a><br>
            <a class="subtitle" onclick="scrolltoDampak()">Dampak</a><br>
        </div>
    </div><br>

    <div class="mx-auto" id="gejala">
        <p>COVID-19 adalah penyakit yang disebabkan oleh virus corona baru yang disebut SARS-CoV-2. WHO pertama kali mengetahui virus baru ini pada 31 Desember 2019, menyusul laporan sekelompok kasus 'virus pneumonia' di Wuhan, Republik Rakyat Tiongkok. COVID-19 resmi masuk ke Indonesia pada tanggal 2 Maret 2020.</p>
        <p>COVID-19 mempengaruhi orang-orang dengan cara yang berbeda. Kebanyakan orang yang terinfeksi akan mengembangkan penyakit ringan sampai sedang dan sembuh tanpa rawat inap.</p>
    </div><br>

    <div class="mx-auto" id="gejala">
        <div id="descButton">
            <strong>Gejala</strong>
            <span>
                <button id="btnGejala" class="btn btn-outline-primary buttons">+</button>
            </span>
        </div>
        <div id="gejalaDesc">
            <img src="{{ asset('css/gejala.jpeg') }}" alt="" class="infografis1"><br><br>
            <p>Gejala yang paling umum seperti:</p>
            <ul>
                <li>Demam</li>
                <li>Batuk kering</li>
                <li>Kecapekan</li>
            </ul>
            <p>Ada beberapa gejala lain yang juga bisa muncul pada infeksi virus Corona meskipun lebih jarang, yaitu:</p>
            <ul>
                <li>Diare</li>
                <li>Sakit Kepala</li>
                <li>Konjungtivitis</li>
                <li>Hilangnya kemampuan mengecap rasa</li>
                <li>Hilang kemampuan untuk mencium bau (anosmia)</li>
                <li>Ruam di kulit</li>
            </ul>
            <p>Gejala-gejala COVID-19 ini umumnya muncul dalam waktu 2 hari sampai 2 minggu setelah penderita terpapar virus Corona. Sebagian pasien yang terinfeksi virus Corona bisa mengalami penurunan oksigen tanpa adanya gejala apa pun. Kondisi ini disebut happy hypoxia.</p>
            <p>Orang-orang dari segala usia yang mengalami demam dan/atau batuk yang berhubungan dengan kesulitan bernapas atau sesak napas, nyeri atau tekanan dada, atau kehilangan kemampuan berbicara atau bergerak harus segera mencari perawatan medis. Jika memungkinkan, hubungi penyedia layanan kesehatan, hotline, atau fasilitas kesehatan Anda terlebih dahulu, sehingga Anda dapat diarahkan ke klinik yang tepat</p>
            Sumber: <a href="https://www.alodokter.com/virus-corona" target="_blank"><i>https://www.alodokter.com/virus-corona</i></a>
        </div>

    </div><br>

    <div id="pencegahan" class="mx-auto">
        <div id="descButton">
            <strong>Pencegahan</strong>
            <span>
                <button id="btnPencegahan" class="btn btn-outline-primary buttons">+</button>
            </span>
        </div>
        <div id="pencegahanDesc">
            <img src="{{ asset('css/pencegahan.jpeg') }}" alt="" class="mask_image"><br><br>
            <p>Cara mencegah penyebab virus COVID-19:</p>
            <ul>
                <li>Menjaga jarak walaupun orang di sekitarmu tidak kelihatan sakit</li>
                <li>Menggunakan masker di tempat umum, terutama di dalam ruangan atau ketika jarak fisik tidak memungkinkan</li>
                <li>Pilih ruangan yang terbuka dan berventilasi yang baik daripada yang tertutup. Buka jendela jika di dalam ruangan</li>
                <li>Sering mencuci tangan. Gunakan sabun dan air, atau hand sanitizer</li>
                <li>Dapatkan vaksinasi sesuai dengan giliran anda</li>
                <li>Tutup hidung dan mulut dengan siku tertekuk atau dengan tisu ketika bersin atau batuk</li>
                <li>Beristirahatlah di rumah ketika merasa sakit</li>
            </ul>
            <p>Jika Anda mengalami demam, batuk, dan kesulitan bernapas, cari bantuan medis. Hubungi terlebih dahulu sehingga penyedia layanan kesehatan Anda dapat mengarahkan Anda ke fasilitas kesehatan yang tepat. Ini melindungi Anda, dan mencegah penyebaran virus dan infeksi lainnya.</p>
            <p>Masker yang dipasang dengan benar dapat membantu mencegah penyebaran virus dari orang yang memakai masker ke orang lain. Masker saja tidak melindungi dari COVID-19, dan harus dikombinasikan dengan jarak fisik dan kebersihan tangan. Ikuti saran yang diberikan oleh otoritas kesehatan setempat.</p>
            <a href="https://en.wikipedia.org/wiki/COVID-19#Prevention" target="_blank"><i>Klik di sini untuk info lebih lanjut</i></a>
        </div>

    </div><br>

    <div id="perawatan" class="mx-auto">
        <div id="descButton">
            <strong>Perawatan</strong>
            <span>
                <button class="btn btn-outline-primary buttons" id="btnPerawatan">+</button>
            </span>
        </div>
        <div id="perawatanDesc">
            <img src="{{ asset('css/perawatan.jpg') }}" alt="" class="perawatan_image"><br><br>
            <strong>Perawatan Diri</strong><br>
            <p>Setelah terpapar seseorang yang memiliki COVID-19, lakukan hal berikut:</p>
            <ul>
                <li>Hubungi penyedia layanan kesehatan Anda atau hotline COVID-19 untuk mencari tahu di mana dan kapan harus melakukan tes.</li>
                <li>Bekerja sama dengan prosedur pelacakan kontak untuk menghentikan penyebaran virus.</li>
                <li>Jika pengujian tidak tersedia, tinggal di rumah dan jauh dari orang lain selama 14 hari.</li>
                <li>Selama berada di karantina, jangan pergi bekerja, ke sekolah atau ke tempat umum. Minta seseorang untuk membawakan Anda persediaan.</li>
                <li>Jaga jarak setidaknya 1 meter dari orang lain, bahkan dari anggota keluarga Anda.</li>
                <li>Kenakan masker medis untuk melindungi orang lain, termasuk jika/ketika Anda perlu mencari perawatan medis.</li>
                <li>Sering-seringlah membersihkan tangan Anda.</li>
                <li>Tinggal di ruangan yang terpisah dari anggota keluarga lainnya, dan jika tidak memungkinkan, gunakan masker medis.</li>
                <li>Jaga agar ruangan tetap berventilasi baik.</li>
                <li>Jika Anda berbagi kamar, tempatkan tempat tidur dengan jarak minimal 1 meter.</li>
                <li>Pantau diri Anda untuk gejala apa pun selama 14 hari.</li>
                <li>Hubungi penyedia layanan kesehatan Anda segera jika Anda memiliki salah satu dari tanda-tanda bahaya ini: kesulitan bernapas, kehilangan bicara atau mobilitas, kebingungan atau nyeri dada.</li>
                <li>Tetap positif dengan tetap berhubungan dengan orang yang dicintai melalui telepon atau online, dan dengan berolahraga di rumah.</li>
            </ul>
            <strong>Perawatan Medis</strong>
            <p>Para ilmuwan di seluruh dunia sedang bekerja untuk menemukan dan mengembangkan pengobatan untuk COVID-19.</p>
            <ul>
                <li>Perawatan suportif yang optimal termasuk oksigen untuk pasien yang sakit parah dan mereka yang berisiko terkena penyakit parah dan dukungan pernapasan yang lebih lanjut seperti ventilasi untuk pasien yang sakit kritis.</li>
                <li>Deksametason adalah kortikosteroid yang dapat membantu mengurangi lama penggunaan ventilator dan menyelamatkan nyawa pasien dengan penyakit parah dan kritis.</li>
            </ul>
            <p>WHO tidak merekomendasikan pengobatan sendiri dengan obat apa pun, termasuk antibiotik, sebagai pencegahan atau penyembuhan COVID-19.</p>
            Sumber: <a href="https://www.google.com/search?client=firefox-b-d&q=coronavirus+treatments&stick=H4sIAAAAAAAAAONgVuLVT9c3NMwySk6OL8zJecRowS3w8sc9YSn9SWtOXmPU5OIKzsgvd80rySypFJLmYoOyBKX4uVB18uxiEvBITcwpyQgpSk0syU3NKylexCqWnF-Un5dYlllUWqxQApcAAHr7ekp4AAAA&ictx=1&ved=2ahUKEwim_urtja70AhWsUGwGHbJJCSYQyNoBKAB6BAgHEAA" target="_blank"><i>Google</i></a>
        </div>

    </div><br>

    <div id="varian" class="mx-auto">
        <div id="descButton">
            <strong>Varian</strong>
            <span>
                <button id="btnVarian" class="btn btn-outline-primary buttons">+</button>
            </span>
        </div>
        <div id="varianDesc">
            <img src="{{ asset('css/variant.jpg') }}" alt="" class="variant_image"><br><br>
            <h1>VARIANT OF CONCERN (VOC)</h1>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">WHO Label</th>
                    <th scope="col">Pango Garis Keturunan</th>
                    <th scope="col">Dokumentasi Awal Sampel</th>
                    <th scope="col">Tanggal Penunjukan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Alpha</th>
                    <td>B.1.1.7</td>
                    <td>United Kingdom, Sep 2020</td>
                    <td>18 Dec 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">Beta</th>
                    <td>B.1.351</td>
                    <td>South Africe, May 2020</td>
                    <td>18 Dec 2020</td>
                  </tr>
                  <tr>
                    <th scope="row">Gamma</th>
                    <td>P.1</td>
                    <td>Brazil, Nov 2020</td>
                    <td>11 Jan 2021</td>
                  </tr>
                  <tr>
                    <th scope="row">Delta</th>
                    <td>B.1.617.2</td>
                    <td>India, Oct 2020</td>
                    <td>VOI: 4 April 2021
                        <br>VOC: 11 May 2021
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Omicron</th>
                    <td>B.1.1.529</td>
                    <td>Beberapa Negara, Nov 2020</td>
                    <td>VUM: 24 Nov 2021
                        <br>VOC: 26 Nov 2021
                    </td>
                  </tr>
                </tbody>
              </table>
              <h1>VARIANT OF INTEREST (VOI)</h1>
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">WHO Label</th>
                    <th scope="col">Pango Garis Keturunan</th>
                    <th scope="col">Didokumentasi Awal Sampel</th>
                    <th scope="col">Tanggal Penunjukan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Lambda</th>
                    <td>C.37</td>
                    <td>Peru, Des 2020</td>
                    <td>14 Juni 2021</td>
                  </tr>
                  <tr>
                    <th scope="row">mu</th>
                    <td>B.1.621</td>
                    <td>Kolombia, Jan 2021</td>
                    <td>30 Agustus 2021</td>
                  </tr>
                </tbody>
              </table>
              <h1>VARIANTS UNDER MONITORING (VUM)</h1>
              <table class="table">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">Pango Garis Keturunan</th>
                    <th scope="col">Didokumentasi Awal Sampel</th>
                    <th scope="col">Tanggal Penunjukan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AZ.5 #</td>
                    <td>Beberapa Negara, Jan 2021</td>
                    <td>VUM: 2 Juni 2021</td>
                  </tr>
                  <tr>
                    <td>C.1.2</td>
                    <td>Afrika Selatan, Mei 2021</td>
                    <td>1 Sep 2021</td>
                  </tr>
                  <tr>
                    <td>B.1.617.1 § </td>
                    <td>India, Okt 2020</td>
                    <td>VOI: 4 Apr 2021
                        <br>VUM: 20 Sep 2021
                    </td>
                  </tr>
                  <tr>
                    <td>B.1.526 § </td>
                    <td>Amerika Serikat, Nov 2020</td>
                    <td>VOI: 24 Mar 2021
                        <br>VUM: 20 Sep 2021
                    </td>
                  </tr>
                  <tr>
                    <td>B.1.525 § </td>
                    <td>Beberapa Negara, Dec 2020</td>
                    <td>VOI: 17 Mar 2021
                        <br>VUM: 20 Sep 2021
                    </td>
                  </tr>
                  <tr>
                    <td>B.1.630 </td>
                    <td>Republik Dominika, Mar 2021</td>
                    <td>12 Okt 2021</td>
                  </tr>
                  <tr>
                    <td>B.1.640 </td>
                    <td>Republik Kongo, Sep 2021</td>
                    <td>22 Nov 2021</td>
                  </tr>
                </tbody>
              </table>
              Sumber: <a href="https://covid19.go.id/tentang-covid-19" target="_blank">https://covid19.go.id/tentang-covid-19</a><br>
            <br><strong>Variant of Concern</strong><br>
            <p>Variant of Concern (VOC) adalah varian dengan dua komponen VOI, yang disertai peningkatan penularan dan virulensi. Sehingga terjadi perubahan epidemiologi dan manifestasi klinis yang merugikan, termasuk penurunan efektivitas pemeriksaan diagnostik, penatalaksanaan, dan vaksinasi. Klasifikasi VOC ini harus melalui penilaian menyeluruh untuk memperoleh data yang signifikan.</p>
            <strong>Variant of Interest</strong><br>
            <p>Variant of Interest (VOI) adalah varian SARS CoV-2 yang ditandai dengan mutasi asam amino yang menyebabkan perubahan fenotipe virus, yang diketahui atau diprediksi dapat mengubah kondisi epidemiologi, antigenisitas, dan virulensi virus.</p>
            <p>Varian ini diketahui secara signifikan mengalami transmisi komunitas, baik pada beberapa kasus, klaster, maupun negara. Pola penyebarannya dalam komunitas dapat merugikan kesehatan publik, bahkan memberikan dampak buruk pada proses diagnostik dan terapeutik.</p>
            <p>Definisi VOI ini memuat dua komponen penting, yakni perubahan fenotipe memiliki efek tidak baik pada penanganan penyakit saat ini, serta menyebar dalam komunitas luas secara signifikan.</p>
            <strong>Variant Under Monitoring</strong><br>
            <p>Variants under monitoring (VUM), atau sebelumnya dikenal sebagai <i>alerts for further monitoring</i> , adalah varian dengan perubahan fenotipe yang diperkirakan dapat merugikan tetapi belum didukung oleh temuan epidemiologi yang signifikan. Berdasarkan data aktif dari WHO per tanggal 22 September 2021, terdapat 14 varian yang termasuk dalam VUM, di antaranya B.1.466.2 yang ditemukan di Indonesia pada bulan November 2020 dan R.1 yang telah menyebar ke beberapa negara sejak Januari 2021.</p>
            <br>
            Sumber: <a href="https://www.alomedika.com/variant-concern-dan-variant-interest-mutasi-virus-covid19" target="_blank">Variant of Concern dan Variant of Interest dari Mutasi Virus COVID-19</a>
        </div>

    </div><br>

    <div id="vaksin" class="mx-auto">
        <div id="descButton">
            <strong>Vaksin</strong>
            <span>
                <button id="btnVaksin" class="btn btn-outline-primary buttons">+</button>
            </span>
        </div>
        <div id="vaksinDesc">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Jenis Vaksin</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Efikasi dalam mencegah penyakit: ancestral & Alpha</th>
                    <th scope="col">Efikasi dalam mencegah infeksi: ancestral & Alpha</th>
                    <th scope="col">Efikasi dalam mencegah penyakit: Beta, Gamma, & Delta</th>
                    <th scope="col">Efikasi dalam mencegah infeksi: Beta, Gamma, & Delta</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sinovac</td>
                    <td>China</td>
                    <td>50%</td>
                    <td>44%</td>
                    <td>43%</td>
                    <td>38%</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>AstraZeneca</td>
                    <td>Inggris</td>
                    <td>90%</td>
                    <td>52%</td>
                    <td>85%</td>
                    <td>49%</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Sinopharm</td>
                    <td>China</td>
                    <td>73%</td>
                    <td>65%</td>
                    <td>63%</td>
                    <td>56%</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>CanSino</td>
                    <td>China</td>
                    <td>66%</td>
                    <td>58%</td>
                    <td>57%</td>
                    <td>50%</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Moderna</td>
                    <td>Amerika Serikat</td>
                    <td>94%</td>
                    <td>89%</td>
                    <td>94%</td>
                    <td>80%</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Pfizer-BioNTech</td>
                    <td>Amerika Serikat</td>
                    <td>94%</td>
                    <td>86%</td>
                    <td>85%</td>
                    <td>78%</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Janssen</td>
                    <td>Belanda</td>
                    <td>86%</td>
                    <td>72%</td>
                    <td>60%</td>
                    <td>56%</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Sputnik V</td>
                    <td>Rusia</td>
                    <td>92%</td>
                    <td>81%</td>
                    <td>80%</td>
                    <td>70%</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Novavax</td>
                    <td>Amerika Serikat</td>
                    <td>89%</td>
                    <td>79%</td>
                    <td>79%</td>
                    <td>69%</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Covaxin</td>
                    <td>India</td>
                    <td>78%</td>
                    <td>69%</td>
                    <td>68%</td>
                    <td>60%</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vaksin mRNA lainnya</td>
                    <td></td>
                    <td>91%</td>
                    <td>86%</td>
                    <td>85%</td>
                    <td>78%</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vaksin lainnya</td>
                    <td></td>
                    <td>75%</td>
                    <td>66%</td>
                    <td>65%</td>
                    <td>57%</td>
                  </tr>
                </tbody>
              </table><br>
              <a href="/charts2" style="float: right">See Graphics -></a><br>
              <p>*<b>Efikasi</b> adalah tingkat kemanjuran vaksin dalam melawan suatu penyakit pada orang yang sudah divaksinasi saat tahap uji klinis</p>
              Sumber: <a href="https://www.healthdata.org/covid/covid-19-vaccine-efficacy-summary" target="_blank">COVID-19 vaccine efficacy summary</a>

            <h3><b>KIPI (Kejadian Ikutan Pasca Imunisasi)</b></h3><br>
            <p>Tidak semua orang yang divaksinasi COVID-19 mengalami reaksi atau Kejadian Ikutan Pasca Imunisasi (KIPI). Jika muncul reaksi atau KIPI, itu adalah sesuatu yang wajar. Ingat, KIPI atau reaksi yang muncul setelah vaksinasi jauh lebih ringan dibandingkan terkena COVID-19 atau komplikasi yang disebabkan oleh virus COVID-19.</p>
            <p>Para ahli sepakat bahwa vaksinasi dan penerapan protokol kesehatan (3M) adalah cara yang paling tepat untuk keluar dari pandemi ini. Reaksi vaksin dalam tubuh dapat berbeda pada masing-masing individu. Sebagian besar tidak mengalami keluhan atau keluhan ringan pasca vaksinasi.</p>
            <h3><b>KIPI biasanya bersifat ringan dan sementara, antara lain:</b></h3>
            <ul>
                <li>Nyeri pada lengan, di tempat suntikan</li>
                <li>Sakit kepala atau nyeri otot</li>
                <li>Nyeri sendi</li>
                <li>Menggigil</li>
                <li>Mual atau muntah</li>
                <li>Rasa lelah</li>
                <li>Demam (ditandai dengan suhu di atas 37,8° C)</li>
            </ul>
            <h3><b>Jika mengalami reaksi ringan seperti di atas, apa yang harus saya lakukan?</b></h3><br>
            <p>Jika merasa tidak nyaman, Anda sebaiknya beristirahat. Jika</p>
            <p>dibutuhkan, Anda dapat menggunakan obat penurun panas</p>
            <p>sesuai dosis yang dianjurkan dan minum air putih dengan cukup</p><br>
            <p>Jika terdapat rasa nyeri di tempat suntikan, tetap gerakkan dan</p>
            <p>gunakan lengan seperti biasa. Apabila perlu, kompres bagian</p>
            <p>yang nyeri dengan kain bersih yang dibasahi dengan air dingin.</p><br>
            <a href="https://kipi.covid19.go.id/" class="btn btn-outline-primary" target="_blank">Pelajari Lebih Lanjut Mengenai KIPI</a>
        </div><br>

    <div id="dampak" class="mx-auto">
        <div id="descButton">
            <strong>Dampak</strong>
        </div>
        <div id="dampakDesc">
            <br>
            <div class="tab">
                <button class="tablinks" onclick="openSektor(event, 'Ekonomi')" id="default">Ekonomi</button>
                <button class="tablinks" onclick="openSektor(event, 'Bisnis')">Bisnis</button>
                <button class="tablinks" onclick="openSektor(event, 'Pariwisata')">Pariwisata</button>
                <button class="tablinks" onclick="openSektor(event, 'Kesehatan')">Kesehatan</button>
            </div>

            <div id="Ekonomi" class="tabcontent">
                <li>Untuk pekerja yang dirumahkan dan kena PHK, lebih dari 1,5 juta,”. Dari jumlah ini, 90 persen dirumahkan dan 10 persen kena - PHK. Sebanyak 1,24 juta orang  adalah  pekerja  formal  dan  265 ribu pekerja informal.</li>
                <li>Selanjutnya dampak kedua, <i>PMI Manufacturing Indonesia</i> mengalami kontraksi atau turun hingga 45,3 pada Maret 2020. Padahal dari angka terakhirya itu Agustus 2019, <i>PMI Manufacturing</i> masih berada diangka 49. Adapun <i>PMI Manufacturing</i> ini menunjukkan kinerja industri pengolahan, baik dari sisi produksi, permintaan baru, hingga ketenagakerjaan.</li>
                <li>Ketiga, impor pada triwulan I 2020 turun 3,7 persen <i>year-to-date (ytd)</i>.</li>
                <li>Inflasi / peningkatan harga secara umumdan terus menerus Maret 2020 mencapai 2,96 persen <i>year-on-year (yoy)</i>. Inflasi ini disumbangkan oleh harga emas perhiasan dan beberapa komoditas pangan.</li>
                <li>Kelima,  12.703 penerbangan di 15 bandara dibatalkan sepanjang Januari - Maret 2020. Rinciannya yaitu 11.680 untuk penerbangan domestik dan 1.023 untuk penerbangan internasional. </li>
                <li>Kunjungan turis turun hingga 6.800 per hari, khususnya turis dari Cina.</li>
                <li>Ketujuh, angka kehilangan pendapatan di sektor layanan udara mencapai Rp 207 miliar. Sekitar Rp 4,8 di antaranya disumbang dari penerbangan dari dan ke Cina.</li>
                <li>Penurunan okupansi /penempatan pada 6 ribu hotel turun hingga 50 persen. Selain itu, kata Sri, M enteri Pariwisata dan Ekonomi Kreatif Wishnutama juga memperkirakan potensi kehilangan devisa pariwisata bisa mencapai setengah dari tahun lalu.</li><br>
                Sumber: <a href="https://ummaspul.e-journal.id/Edupsycouns/article/view/423/240" target="_blank"><i>https://ummaspul.e-journal.id/Edupsycouns/article/view/423/240</i></a>
            </div>

            <div id="Bisnis" class="tabcontent">
                Dilansir dari blog pribadi Pakar Marketing Yuswohady, terdapat beberapa bisnis yang mulai meredup di tengah pandemi, seperti bisnis Hotel sehingga banyak hotel yang tutup karena tak ada tamu menginap. Film dan Produksi TV juga saat ini termasuk salah satu bisnis yang rawan menjadi penularan Covid-19. Sehingga pastinya banyak Film dan Produksi TV yang terpaksa berhenti. Maskapai Penerbangan dan Agen Travel pun mengalami dampak yang sangat nyata akibat Covid-19, dikarenakan pembatasan operasional, banyak maskapai yang hampir tidak bertahan karena pendapatan terbesar maskapai penerbangan berasal dari pengangkutan penumpang. <br><br>
                Sumber: <a href="http://lppm.unpam.ac.id/2021/01/07/tak-pandang-bulu-dampak-covid-19-berimbas-di-berbagai-sektor/" target="_blank"><i>http://lppm.unpam.ac.id/2021/01/07/tak-pandang-bulu-dampak-covid-19-berimbas-di-berbagai-sektor/</i></a>
            </div>

            <div id="Pariwisata" class="tabcontent">
                Menteri Pariwisata dan Ekonomi Kreatif Wishnutama Kusubandio mengatakan sektor pariwisata mengalami hantaman yang sangat keras akibat pandemi Covid-19. Hingga saat ini hampir seluruh destinasi wisata di Indonesia tutup. Ini situasi yang sangat berat, di Indonesia hampir semua destinasi wisata, fasilitas, dan hiburannya tutup dan hanya boleh untuk 50% pengunjung berdasarkan anjuran Pemerintah Indonesia untuk social distancing (jaga jarak). Dengan adanya wabah Covid-19 ini sektor pariwisata akan terus belajar dan berimprovisasi. <br>
                Salah satu programnya yaitu cleanliness, health, and safety (CHS) di sektor pariwisata. Tujuannya adalah untuk menerapkan wisata yang sehat dan bersih di sejumlah wisata dan sentra ekonomi kreatif. Untuk itu Kementrian Pariwisata dan Kementrian Kesehatan bekerja sama untuk menerapkan protokol CHS ini, tujuannya adalah untuk meningkatkan kepercayaan wisatawan terhadap destinasi dan industri pariwisata di Indonesia usai Covid-19 sehingga mendorong peningkatan pergerakan dan kunjungan wisatawan. <br><br>
                Sumber: <a href="http://lppm.unpam.ac.id/2021/01/07/tak-pandang-bulu-dampak-covid-19-berimbas-di-berbagai-sektor/" target="_blank"><i>http://lppm.unpam.ac.id/2021/01/07/tak-pandang-bulu-dampak-covid-19-berimbas-di-berbagai-sektor/</i></a>
            </div>

            <div id="Kesehatan" class="tabcontent">
                Pengaruh pandemi covid-19 dalam bidang kesehatan yaitu tingkat kesehatan menurun karena banyak yang terpapar covid-19 dan banyak masyarakat yang stress karena khawatir dan takut tertular virus corona sehingga membuat sistem imun semakin menurun.
                Selain itu banyak tenaga kesehatan yang berguguran akibat pandemi ini karena faktor tertular virus covid-19 maupun faktor kelelahan karena jumlah pasien yang membludak. <br><br>
                Sumber: <a href="http://ners.unair.ac.id/site/index.php/news-fkp-unair/30-lihat/1181-dampak-covid-19-dalam-bidang-kesehatan" target="_blank"><i>http://ners.unair.ac.id/site/index.php/news-fkp-unair/30-lihat/1181-dampak-covid-19-dalam-bidang-kesehata</i></a>
            </div>

        </div>
    </div><br>

    <div>
        <h1 class="text-center">PPKM</h1>
        <div class="containerdalam">
            <h1 class="text-success">Level 1</h1>
            <div class="vl-1"></div>
            <p>Pada level ini, angka kasus konfirmasi positif Covid-19 kurang dari 20 orang per 100 ribu penduduk per minggu. Kejadian rawat inap di rumah sakit juga kurang dari lima orang per 100 ribu penduduk. Kemudian angka kematian kurang dari satu orang per 100 ribu penduduk</p>
        </div><br>
        <div class="containerdalam">
            <h1 class="text-2">Level 2</h1>
            <div class="vl-2"></div>
            <p>Angka kasus konfirmasi positif Covid-19 antara 20 dan kurang dari 50 orang per 100 ribu penduduk per minggu. Kejadi rawat inap di rumah sakit antara lima dan kurang dari 10 orang per 100 ribu penduduk per minggu. Angka kematian akibat Covid-19 kurang dari 2 orang per 100 ribu penduduk</p>
        </div><br>
        <div class="containerdalam">
            <h1 class="text-3">Level 3</h1>
            <div class="vl-3"></div>
            <p>Level 3 menunjukan suatu daerah memiliki angka kasus konfirmasi positif Covid-19 antara 50-100 orang per 100 ribu penduduk per minggu. Kejadian rawat inap di rumah sakit 10-30 orang per 100 ribu penduduk per minggu. Angka kematian akibat Covid-19 antara dua sampai lima orang per 100 ribu penduduk.</p>
        </div><br>
        <div class="containerdalam">
            <h1 class="text-danger">Level 4</h1>
            <div class="vl-4"></div>
            <p>Level 4 menandakan suatu daerah memiliki angka kasus konfirmasi positif Covid-19 lebih dari 150 orang per 100 ribu penduduk per minggu. Kejadian rawat inap di rumah sakit lebih dari 30 orang per 100 ribu penduduk per minggu. Serta, angka kematian akibat Covid-19 lebih dari lima orang per 100 ribu penduduk di daerah tersebut.</p>
        </div><br>
    </div>

    <div class="ytChannel">
        <h1>Channel Youtube Update Berita Covid-19</h1>
        <div class="channel">
            <img src="{{asset('css/cnn.jpg')}}" alt="" class="ytProfile"><br>
            <a href="https://www.youtube.com/c/CNNindonesiaOfficial" target="_blank">View</a>
        </div>
        <div class="channel">
            <img src="{{asset('css/cnbc.jpg')}}" alt="" class="ytProfile"><br>
            <a href="https://www.youtube.com/c/CNBCIndonesia_ID" target="_blank">View</a>
        </div>
        <div class="channel">
            <img src="{{asset('css/kompas.jpg')}}" alt="" class="ytProfile"><br>
            <a href="https://www.youtube.com/c/kompastv" target="_blank">View</a>
        </div>
        <div class="channel">
            <img src="{{asset('css/kompas2.jpg')}}" alt="" class="ytProfile"><br>
            <a href="https://www.youtube.com/c/mykompascom" target="_blank">View</a>
        </div>
    </div><br>


    <div id="faqFlag">
            <div id="FAQ" class="mx-auto">
                <h1><b>Sering Ditanyakan</b></h1><br><br>
                <div id="question">
                    <strong>Apa yang terjadi kepada orang yang terpapar COVID-19?</strong>
                    <span>
                        <button class="btn btn-outline-primary buttons" id="button1" class="button">+</button>
                    </span>
                </div>
                <p id="answer1" class="answer">Di antara mereka yang mengalami gejala, sebagian besar (sekitar 80%) sembuh dari penyakit tanpa memerlukan perawatan di rumah sakit. Sekitar 15% menjadi sakit parah dan membutuhkan oksigen dan 5% menjadi sakit kritis dan membutuhkan perawatan intensif.

                    Komplikasi yang menyebabkan kematian mungkin termasuk gagal napas, sindrom gangguan pernapasan akut (ARDS), sepsis dan syok septik, tromboemboli, dan/atau kegagalan multiorgan, termasuk cedera jantung, hati, atau ginjal.

                    Dalam situasi yang jarang terjadi, anak-anak dapat mengembangkan sindrom peradangan parah beberapa minggu setelah infeksi. </p>
            </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Siapa yang paling berisiko terkena penyakit parah COVID-19? </strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button2">+</button>
                </span>
            </div>
            <p id="answer2" class="answer">Orang berusia 60 tahun ke atas, dan mereka yang memiliki masalah medis mendasar seperti tekanan darah tinggi, masalah jantung dan paru-paru, diabetes, obesitas, atau kanker, berisiko lebih tinggi terkena penyakit serius. Namun, siapa pun dapat jatuh sakit dengan COVID-19 dan menjadi sakit parah atau meninggal pada usia berapa pun. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Apakah ada efek jangka panjang dari COVID-19?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button3">+</button>
                </span>
            </div>
            <p id="answer3" class="answer">Beberapa orang yang pernah terkena COVID-19, baik yang memerlukan rawat inap maupun tidak, terus mengalami gejala, termasuk gejala kelelahan, pernapasan, dan neurologis.

                WHO bekerja sama dengan Jaringan Teknis Global untuk Manajemen Klinis COVID-19, para peneliti, dan kelompok pasien di seluruh dunia untuk merancang dan melaksanakan studi pasien di luar perjalanan penyakit akut awal untuk memahami proporsi pasien yang memiliki efek jangka panjang, berapa lama mereka bertahan, dan mengapa mereka terjadi. Studi-studi ini akan digunakan untuk mengembangkan panduan lebih lanjut untuk perawatan pasien.</p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Bagaimana cara kita melindungi orang lain dan diri kita sendiri jika kita tidak tahu siapa yang terinfeksi?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button4">+</button>
                </span>
            </div>
            <p id="answer4" class="answer">Tetap aman dengan melakukan beberapa tindakan pencegahan sederhana, seperti menjaga jarak fisik, memakai masker, terutama ketika jarak tidak dapat dipertahankan, menjaga ruangan berventilasi baik, menghindari keramaian dan kontak dekat, membersihkan tangan secara teratur, dan batuk ke siku atau tisu yang tertekuk. Periksa saran lokal di mana Anda tinggal dan bekerja. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Kapan seharusnya saya mendapatkan test untuk COVID-19?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button5">+</button>
                </span>
            </div>
            <p id="answer5" class="answer">Siapapun dengan gejala harus diuji, sedapat mungkin. Orang yang tidak memiliki gejala tetapi telah melakukan kontak dekat dengan seseorang yang, atau mungkin, terinfeksi, juga dapat mempertimbangkan pengujian – hubungi pedoman kesehatan setempat dan ikuti panduan mereka.

                Sementara seseorang sedang menunggu hasil tes, mereka harus tetap terisolasi dari orang lain. Jika kapasitas pengujian terbatas, pengujian pertama-tama harus dilakukan untuk mereka yang berisiko lebih tinggi terinfeksi, seperti petugas kesehatan, dan mereka yang berisiko lebih tinggi terkena penyakit parah seperti orang tua, terutama mereka yang tinggal di panti jompo atau fasilitas perawatan jangka panjang.</p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Tes apa yang saya harus dapatkan jika saya terpapar COVID-19?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button6">+</button>
                </span>
            </div>
            <p id="answer6" class="answer">Dalam kebanyakan situasi, tes molekuler digunakan untuk mendeteksi SARS-CoV-2 dan mengkonfirmasi infeksi. Polymerase chain reaction (PCR) adalah tes molekuler yang paling umum digunakan. Sampel diambil dari hidung dan/atau tenggorokan dengan swab. Tes molekuler mendeteksi virus dalam sampel dengan memperkuat materi genetik virus ke tingkat yang dapat dideteksi. Untuk alasan ini, tes molekuler digunakan untuk mengkonfirmasi infeksi aktif, biasanya dalam beberapa hari setelah terpapar dan sekitar waktu gejala mulai muncul. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Bagaimana dengan rapid test?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button7">+</button>
                </span>
            </div>
            <p id="answer7" class="answer">Tes rapid antigen (kadang-kadang dikenal sebagai tes rapid diagnostik – RDT) mendeteksi protein virus (dikenal sebagai antigen). Sampel diambil dari hidung dan/atau tenggorokan dengan swab. Tes ini lebih murah daripada PCR dan akan memberikan hasil lebih cepat, meskipun umumnya kurang akurat. Tes-tes ini bekerja paling baik ketika ada lebih banyak virus yang beredar di masyarakat dan ketika diambil sampelnya dari seorang individu selama waktu mereka paling menular. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Saya ingin mencari tahu jika saya pernah terpapar COVID-19 sebelumnya, test apa yang harus saya ambil?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button8">+</button>
                </span>
            </div>
            <p id="answer8" class="answer">Tes antibodi dapat memberi tahu kita apakah seseorang pernah mengalami infeksi di masa lalu, bahkan jika mereka tidak memiliki gejala. Juga dikenal sebagai tes serologis dan biasanya dilakukan pada sampel darah, tes ini mendeteksi antibodi yang diproduksi sebagai respons terhadap infeksi. Pada kebanyakan orang, antibodi mulai berkembang setelah berhari-hari hingga berminggu-minggu dan dapat menunjukkan apakah seseorang pernah mengalami infeksi sebelumnya. Tes antibodi tidak dapat digunakan untuk mendiagnosis COVID-19 pada tahap awal infeksi atau penyakit, tetapi dapat menunjukkan apakah seseorang pernah menderita penyakit tersebut di masa lalu atau tidak. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Apa perbedaan isolasi dan karantina?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button9">+</button>
                </span>
            </div>
            <p id="answer9" class="answer">Both isolation and quarantine are methods of preventing the spread of COVID-19.<br><br>

                <strong>Quarantine</strong> is used for anyone who is a contact of someone infected with the SARS-CoV-2 virus, which causes COVID-19, whether the infected person has symptoms or not. Quarantine means that you remain separated from others because you have been exposed to the virus and you may be infected and can take place in a designated facility or at home. For COVID-19, this means staying in the facility or at home for 14 days. <br><br>

                <strong>Isolation</strong> is used for people with COVID-19 symptoms or who have tested positive for the virus. Being in isolation means being separated from other people, ideally in a medically facility where you can receive clinical care.  If isolation in a medical facility is not possible and you are not in a high risk group of developing severe disease, isolation can take place at home. If you have symptoms, you should remain in isolation for at least 10 days plus an additional 3 days without symptoms. If you are infected and do not develop symptoms, you should remain in isolation for 10 days from the time you test positive.
            </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>berapa lama waktu yang dibutuhkan untuk timbulnya gejala?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button10">+</button>
                </span>
            </div>
            <p id="answer10" class="answer">Waktu dari terpapar COVID-19 hingga saat gejala mulai muncul rata-rata 5-6 hari dan dapat berkisar antara 1-14 hari. Inilah sebabnya mengapa orang yang telah terpapar virus disarankan untuk tetap di rumah dan menjauh dari orang lain, selama 14 hari, untuk mencegah penyebaran virus, terutama di mana tes tidak mudah tersedia. </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Apa yang terjadi jika saya memiliki gejala COVID-19?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button11">+</button>
                </span>
            </div>
            <p id="answer11" class="answer">
                Jika Anda memiliki gejala yang menunjukkan COVID-19, hubungi penyedia layanan kesehatan Anda atau hotline COVID-19 untuk mendapatkan petunjuk dan cari tahu kapan dan di mana harus melakukan tes, tinggal di rumah selama 14 hari dari orang lain dan pantau kesehatan Anda. <br><br>
                Jika Anda mengalami sesak napas atau nyeri atau tekanan di dada, segera dapatkan bantuan medis di fasilitas kesehatan. Hubungi penyedia layanan kesehatan atau hotline Anda terlebih dahulu untuk petunjuk ke fasilitas kesehatan yang tepat. <br><br>
                Jika Anda tinggal di daerah dengan malaria atau demam berdarah, cari perawatan medis jika Anda demam. <br><br>
                Jika panduan setempat merekomendasikan mengunjungi pusat medis untuk pengujian, penilaian atau isolasi, kenakan masker medis saat bepergian ke dan dari fasilitas dan selama perawatan medis. Juga jaga jarak setidaknya 1 meter dari orang lain dan hindari menyentuh permukaan dengan tangan Anda. Ini berlaku untuk orang dewasa dan anak-anak. <br><br>
            </p>
        </div>
        <div id="FAQ" class="mx-auto">
            <div id="question">
                <strong>Apakah antibiotik efektif dalam mencegah atau menyembuhkan COVID-19?</strong>
                <span>
                    <button class="btn btn-outline-primary buttons" id="button12">+</button>
                </span>
            </div>
            <p id="answer12" class="answer">
                Antibiotik tidak bekerja melawan virus; mereka hanya bekerja pada infeksi bakteri. COVID-19 disebabkan oleh virus, jadi antibiotik tidak berfungsi. Antibiotik tidak boleh digunakan sebagai sarana pencegahan atau pengobatan COVID-19. <br><br>
                Di rumah sakit, dokter terkadang menggunakan antibiotik untuk mencegah atau mengobati infeksi bakteri sekunder yang dapat menjadi komplikasi COVID-19 pada pasien yang sakit parah. Mereka hanya boleh digunakan seperti yang diarahkan oleh dokter untuk mengobati infeksi bakteri.
            </p>
        </div>
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
@endpush
