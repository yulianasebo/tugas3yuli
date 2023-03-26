<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <p></p> <p></p>
   
<div class="bg-success p-2" style="--bs-bg-opacity: .5;">
<div class="d-flex justify-content-center"> <h1>Pencarian Film</h1></div></div>
<p></p>
<div class="d-flex justify-content-center">
  
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        
        <input type="submit" value="Cari" name="cari"></input>
<hr color="blue">
    </form>
    </div>
    <?php
    
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
        
            echo "<h1>Hasil</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=be35c0b9&s="'.$judul.'"';
            

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }
        ?>
    <header>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<p></p>
    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="otto.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title"> A Man Called Otto</h3>
        <p class="card-text">film A Man Called Otto bercerita tentang pria paruh baya bernama Otto. Ia mengalami kesialan saat istrinya meninggal dan Otto terpaksa pensiun dari pekerjaannya. Otto yang memiliki sifat pemarah, memutuskan untuk bunuh diri. Belum sempat melancarkan aksinya, ia kedatangan sebuah keluarga yang menjadi tetangga barunya. Mereka sangat ramai hingga mengganggu Otto. Tapi siapa sangka, justru tetangga itulah yang menyelamatkan hidup Otto yang hampir berakhir begitu saja.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="jhon.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title">John Wick: Chapter 4</h3>
        <p class="card-text">Hampir empat tahun berlalu, Keanu Reeves akhirnya kembali lagi dengan film John Wick di chapter ke-empatnya. Meskipun belum ada sinopsis plot resmi untuk John Wick: Chapter 4, ada banyak info tentang apa yang mungkin terjadi. Film ini melanjutkan akhir yang eksplosif dari John Wick 3, yang membuat John benar-benar terpisah dari organisasi pembunuh yang dikenal sebagai The High Table. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="dungeons.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title">Dungeons & Dragons: Honor Among Thieves (31 Maret 2023)</h3>
        <p class="card-text">Seorang pencuri yang menawan dan sekelompok petualang melakukan perampokan epik untuk mengambil relik yang hilang, tetapi keadaan menjadi sangat berbahaya ketika mereka berhadapan dengan orang yang salah. Dungeons & Dragons: Honor Among Thieves terinspirasi dari permainan roleplay dengan nama yang sama (D&D). Di layar lebar, semangat permainan legendaris ini dikemas dalam petualangan yang lucu dan penuh aksi.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="creed.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title">Bed Rest (Maret 2023)</h3>
        <p class="card-text">Horor mengerikan mengisahkan tentang kejadian setelah pindah ke rumah pedesaan yang lapang, megah, dan sedikit bobrok yang sedang direnovasi, peristiwa aneh dan menakutkan (selalu percaya pada kucing yang lari, ketakutan) mulai terjadi, tetapi hanya untuk Julie — yang awalnya menyimpannya untuk dirinya sendiri, bahkan setelah dia terbatas pada tirah baring setelah jatuh dari tangga.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="mindcage.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title">Mindcage</h3>
        <p class="card-text">Mindcage bercerita tentang detektif Jake Doyle dan Mary Kelly yang sedang mencari bantuan dari seorang pembunuh berantai kejam bernama The Artist yang sedang dipenjara. Mereka ingin mengungkap kasus peniru dari The Artist yang sedang menajdi buron di kota.

Saat Mary menggali informasi tentang The Artist yang gila tapi brilian, ia dan Jake justru terjebak dalam permainan kucing tikus yang kejam. Mereka harus berpacu dengan waktu agar tetap selangkah lebih maju dari The Artist dan sang peniru.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="creed.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h3 class="card-title">Creed III (1 Maret 2023)</h3>
        <p class="card-text">Film tersebut merupakan sekuel dari Creed II (2018). Setelah peristiwa Creed II (2018), Adonis "Donnie" Creed berkembang pesat baik dalam karir tinju maupun kehidupan keluarganya.Ketika seorang teman masa kecil dan mantan petinju handal, Damian "Dame" Anderson, muncul kembali setelah menjalani hukuman yang lama di penjara, dia sangat ingin membuktikan bahwa dia pantas mendapatkan kesempatannya di atas ring. Pertarungan antara mantan teman lebih dari sekadar perkelahian. Untuk menyelesaikan skor, Donnie harus mempertaruhkan masa depannya untuk melawan Dame.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
