<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/animation.css">
    <!-- fontawsome Icon -->
    <link href="asset/fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="asset/fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="asset/fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">

    <title>Tracker BMI</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-primary
    ">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="asset//image/logo_peltekkes.png" alt="" width="40" class="d-inline-block align-text-top">
                <p class="m-0 p-0 mx-2">Tracker Body Mass Index</p>
            </a>
        </div>
    </nav>
    <div class="container layer-am">
        <div class="px-4 py-5  text-center">
            <!-- <img class="d-block mx-auto mb-4" src="asset//image/logo dngn background.png" alt="" width="72"> -->
            <h1 class="display-6 fw-bold">Tracker Body Mass Index</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4">IMT adalah teknik sederhana untuk memprediksi tingkat obesitas dan kekurangan berat
                    badan yang berhubungan dengan lebih dan kurangnya lemak tubuh serta dapat memprediksi komplikasi
                    medis .</p>
                <p><i class="fa-regular fa-circle-question"></i> <b>Apa jenis kelamin anda?</b></p>
                <div class="gap-5 d-flex justify-content-sm-center">

                    <div class="card round-4 hoverCard <?php if (isset($_GET['jk'])) {
                        echo $_GET['jk'] == "L" ? "card-selected" : "";
                    } ?>" id="laki-laki" onclick="location.href='index.php?jk=L'">
                        <div class="d-flex m-3 flex-column">
                            <img class="d-block mx-auto mb-4" src="asset//image/laki-laki.png" alt="" width="100">
                            <p>Laki-laki</p>
                        </div>
                    </div>
                    <div class="card round-pill hoverCard <?php if (isset($_GET['jk'])) {
                        echo $_GET['jk'] == "P" ? "card-selected" : "";
                    } ?>" id="perempuan" onclick="location.href='index.php?jk=P'">
                        <div class="d-flex m-3 flex-column">
                            <img class="d-block mx-auto mb-4" src="asset//image/perempuan.png" alt="" width="100">
                            <p>Perempuan</p>
                        </div>
                    </div>
                </div>
                <?php if (isset($_GET["jk"])): ?>
                    <div class="card mx-4 mt-5">
                        <div class="card-header">
                            Hitung BMI
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-floating mb-2">
                                    <input type="number" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required>
                                    <label for="floatingInput">Tinggi Badan</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" required id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Berat Badan</label>
                                  
                                </div>
                            
                            </form>
                            <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-2 btn-block" type="submit">Hitung</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

        </div>
        <p class="accordion_Text"><i class="fa-regular fa-circle-info"></i> <b>Info</b></p>
        <div class="accordion mt-4 mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Apa itu BMT ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <p class="text-align-justify">
                            Body Mass Index (BMI) atau yang sering dikenal dengan Indeks Massa Tubuh (IMT) adalah nilai
                            ukur untuk mengetahui status gizi seseorang berdasarkan berat dan tinggi badannya. Nilai BMI
                            (IMT) juga dapat menjadi alat skrining awal untuk mengetahui risiko seseorang terhadap suatu
                            penyakit.
                        </p>
                        <p>
                            Nilai BMI (IMT) yang tinggi menandakan bahwa Anda kelebihan berat badan (overweight atau
                            obesitas). Sementara nilai BMI (IMT) yang rendah artinya Anda kekurangan gizi dan memiliki
                            berat
                            badan rendah. Namun, IMT tidak bisa membedakan persen lemak tubuh dan persen massa otot.
                        </p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Cara Penilaian BMI(IMT)?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Pengukuran IMT dilakukan dengan mengukur berat badan (kilogram) dan tinggi badan (meter)
                            sampel. Hasil yang didapat dimasukkan dalam rumus IMT = BB (kg) / TB2 (m2 ). Hasil yang
                            didapatkan dikategorikan berdasar BMI yang ada di Indonesia termasuk kategori underweight,
                            normal, overweight, obesitas I dan Obesitas II. (Kamaruddin, 2020).
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Mengapa harus mengukur BMI(IMT)?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Mengetahui membantu Anda untuk menjaga rasio lemak tubuh yang terkait dengan tinggi badan
                            Anda. IMT juga memberi peringatan peluang risiko penyakit yang mungkin mengintai kesehatan
                            Anda.
                        </p>
                        <p>
                            IMT yang sehat umumnya mengarah pada kualitas hidup yang lebih bahagia dan lebih sehat.
                            Sementara IMT yang tinggi berkaitan erat dengan risiko penyakit seperti diabetes tipe 2,
                            penyakit jantung, dan tekanan darah tinggi.
                        </p>
                        <p>
                            Mengetahui IMT berarti memberi pertimbangan bagi Anda dan tenaga kesehatan dalam mengambil
                            keputusan mengenai kondisi kesehatan tubuh Anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Obesitas:Apa saja faktor risikonya?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Jika Anda memiliki IMT 30 ke atas, Anda dikategorikan obesitas. Obesitas membawa efek bagi
                            tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi kesehatan tertentu,
                            seperti:
                        </p>
                        <p>
                        <ul>
                            <li>Diabetes tipe 2</li>
                            <li>Kolestrol LDL tinggi, Kolestrol HDL rendah, atau kadar lipid darah yang tidak sehat</li>
                            <li>Penyakit jantung koroner</li>
                            <li>Stroke</li>
                            <li>Penyakit kantung empedu</li>
                            <li>Osteoartritis</li>
                            <li>Sleep apnea dan masalah pernapasan</li>
                            <li>Peradangan kronis dan peningkatan stres oksidatif</li>
                            <li>Kanker</li>
                            <li>Depresi klinis, kecemasan, dan kondisi kesehatan mental dan lainnya</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Keurangan Berat badan: Apa saja faktor risikonya?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Jika IMT Anda di bawah 18,5, berat badan Anda termasuk kurang. Ketika berat badan Anda cukup
                            rendah dari berat ideal, Anda juga memiliki risiko penyakit tertentu akibat kekurangan
                            nutrisi dan sistem kekebalan tubuh yang lemah.
                            Hal ini membuka peluang pada risiko kesehatan berikut:

                        </p>
                        <p>
                        <ul>
                            <li>Malnutrisi</li>
                            <li>Anemia</li>
                            <li>Osteoporosis karena kekurangan kalsium dan vitamin D</li>
                            <li>Masaalah kesuburan dari siklus menstruasi tidak teratur</li>
                            <li>Risiko Komplikasi operasi yang lebih tinggi</li>
                            <li>Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <footer class="blog-footer">
        <p>Tracker Body Mass Index By <a href="https://getbootstrap.com/">....</a> by <a
                href="https://twitter.com/mdo">@....</a>.</p>
        <p>
            <a href="#">Kembali keatas</a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="asset/js/index.js"></script>
</body>

</html>