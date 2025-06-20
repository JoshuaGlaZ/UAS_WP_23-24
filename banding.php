<?php
  if (isset($_POST['hape']) && !empty($_POST['hape'])) {
    $selectedHape = $_POST['hape'];
  } else {
    header("Location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
  <div class="bg">
    <h1>&lt;/&nbsp;&gt;</h1>
  </div>
  <div class="nav">
    <img src="https://picsum.photos/175/111" alt="">
    <h1>HP Store</h1>
  </div>
  <form class="content" action='/banding.php' method='post'>
    <?php
      if (!empty($selectedHape)) {
        foreach ($selectedHape as $h) {
          $hape = json_decode($h, true);
          echo "<div class='hp'>";
          echo "<div class='main'>";
          echo "<img class='hpImage' src='" . $hape['url_gambar'] . "' alt='Model HP' />";
          echo "<h2>" . $hape['Merk'] . " </h2>";
          echo "<h4 style='color: #a89ec9;'>" . $hape['Model'] . "</h4>";
          echo "<ul class='spec-list'>";
          foreach ($hape['spec'] as $spec) {
            echo "<li>" . $spec . "</li>";
          }
          echo "</ul>";
          echo "<div class='tokenInfo'>";
          echo "<div class='price'>";
          echo "<ins>Rp</ins>";
          echo "<p>" . number_format($hape['Harga']) . "</p>";
          echo "</div>";
          echo "<div class='duration'>";
          echo "<ins>SKU = </ins>";
          echo "<p>" . $hape['SKU'] . "</p>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
      }
    ?>
  <a id="kembali" href="/index.php">&larr; Kembali</a>
  </form>
</body>
</html>

