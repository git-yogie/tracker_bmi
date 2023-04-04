<?php
if ($_POST) {
    $tinggi = $_POST["tinggi"];
    $berat = $_POST["berat"];
    if ($tinggi > 0 && $berat > 0) {
    }

    $BMI = number_format(($berat / (($tinggi * $tinggi) / 10000)), 2, '.', "");
    if ($BMI < 17) {
        $spec = 0;
        $color = 'lowIndex2';
    
    }else if($BMI > 17 && $BMI < 18.4){
        $spec = 1;
        $color = 'lowindex1';
    }  else if ($BMI > 18.5 && $BMI < 25) {
        $spec = 2;
        $color = 'idealIndex';
    } else if ($BMI > 25.1 && $BMI < 27) {
        $spec = 3;
        $color = 'ObesityIndex1';
    }else if($BMI > 27){
        $spec = 4;
        $color = 'ObesityIndex2';
    }
}
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
    <!-- fontawsome Icon -->
    <link href="asset/fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="asset/fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="asset/fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">

    <title>Tracker BMI</title>
</head>

<body>
<div class="context">
   <h1>Pure Css Animated Background</h1>
</div>
    <nav class="navbar navbar-dark bg-primary
    ">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="asset//image/logo_peltekkes.png" alt="" width="40" class="d-inline-block align-text-top">
                <img src="asset//image/logo_hima_poltekkes.png" alt="" width="40" class="d-inline-block align-text-top">
                <p class="m-0 p-0 mx-2">Tracker Body Mass Index</p>
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="px-4 py-5  text-center">
            <!-- <img class="d-block mx-auto mb-4" src="asset//image/logo dngn background.png" alt="" width="72"> -->
            <h1 class="display-6 fw-bold">Tracker Body Mass Index</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4">IMT adalah teknik sederhana untuk memprediksi tingkat obesitas dan kekurangan berat
                    badan yang berhubungan dengan lebih dan kurangnya lemak tubuh serta dapat memprediksi komplikasi
                    medis.</p>
                <div class="card">
                    <div class="card-header">Hasil</div>
                    <div class="card-body">

                    </div>
                </div>


            </div>

        </div>
        <p class="accordion_Text"><i class="fa-regular fa-circle-info"></i> <b>Info</b></p>
        <div class="accordion mt-4 mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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