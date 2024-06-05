<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
}

if (isset($_GET['daftar'])) {
    $filename = "zr.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['daftar']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*

*GANTI NAMA BRAND DENGAN INI
<?php echo $BRANDS ?> 

* GANTI URL PATH DENGAN INI
<?php echo $urlPath ?>
 
* SAMA GANTI REDIRECT LOGIN/REGISTER

*/

?>

<!doctype html>
<html amp lang="id">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://terimampq.dev/pic/logo-slot.gif" as="image">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="https://slot-pic.vranje.rs/icon-mantap.jpg">
<link rel="canonical" href="https://resketapangnews.kalbar.polri.go.id/product/?varian=<?php echo $BRANDS ?>">
<title><?php echo $BRANDS ?> 🔫 Situs Slot Gacor Maxwin Hari Ini Gampang Menang Jackpot Besar 2024</title>

<meta name="title" content="<?php echo $BRANDS ?> 🔫 Situs Slot Gacor Maxwin Hari Ini Gampang Menang Jackpot Besar 2024">
<meta name="description" content="<?php echo $BRANDS ?> Ialah situs slot gacor maxwin yang telah menjadi daya tarik utama bagi penikmat judi online, dengan penawaran deposit yang terbilang sangat murah hanya 10 ribu rupiah. <?php echo $BRANDS ?> juga memberikan kesempatan bagi lebih banyak pemain untuk mencoba keberuntungan hari ini dengan gampang menang jackpot besar dalam berbagai permainan slot. Segera daftar sekarang untuk mencari cuan tambahan setiap harinya.">
<style amp-custom>
*{box-sizing:border-box;margin:0;padding:0}:focus{outline:0}::-webkit-scrollbar{display:none}a,a:after,a:hover,a:visited{text-decoration:none;color:#bdc1c6}
html{max-width:500px;margin:0 auto;background:#202124}body{color:#bdc1c6;font-family:'Noto Sans',arial,sans-serif}
.atas{display:grid;min-height:100vh}.atasbox{margin:auto;text-align:center}.ataslink{display:inline-grid;margin:.88rem 0}
.ataslink a{padding:.5rem 3.8rem;background:#33333388;margin-bottom:.5rem;border-radius:.38rem;box-shadow:0 -1px #ccb38a88;letter-spacing:1px}
.ataslink a.btn1{color:#eee;background-image:linear-gradient(to right, #cb356b, #bd3f32);box-shadow:none;font-weight:bold}
.imghero{box-shadow:inset 0 0 0 8px #888;border-radius:8px}
</style>
</head>
<body>
<main>
<div class=atas>
  <div class=atasbox>
    <div><amp-img class=imghero height=120 width=300 alt="<?php echo $BRANDS ?>" src="https://lkk.bio/ib/JXoa8Wm8bz.png"></amp-img></div>
    <div class=ataslink>
      <a href="https://ps4d-gacor.xyz/"target=_blank class=btn1>LOGIN 1</a>
      <a href="https://ps4d-gacor.xyz/"target=_blank rel="noopener noreferrer nofollow">LOGIN 2</a>
      <a href="https://ps4d-gacor.xyz/"target=_blank rel="noopener noreferrer nofollow">RTP Slot</a>
    </div>
  </div>
</div>
</main>
</body>
</html>
