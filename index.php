<?php
  $arrHape = array(
    array("SKU" => "12345", "Merk" => "Samsung", "Model" => "Galaxy S22", "Harga" => 18000000, "url_gambar" => "https://picsum.photos/175/100", "spec" => array("4GB", "5G", "5150mAH", "256GB")),
    array("SKU" => "54321", "Merk" => "Xiaomi", "Model" => "Mi 11 Pro", "Harga" => 9500000, "url_gambar" => "https://picsum.photos/175/101", "spec" => array("8GB", "5G", "5050mAH", "256GB")),
    array("SKU" => "AB012", "Merk" => "Redmi", "Model" => "Redmi Note 12", "Harga" => 6500000, "url_gambar" => "https://picsum.photos/175/102", "spec" => array("6GB", "5G", "5350mAH", "256GB")),
    array("SKU" => "67890", "Merk" => "Apple", "Model" => "iPhone 13", "Harga" => 20000000, "url_gambar" => "https://picsum.photos/175/103", "spec" => array("4GB", "5G", "3095mAH", "256GB")),
    array("SKU" => "09876", "Merk" => "Oppo", "Model" => "Find X3", "Harga" => 12000000, "url_gambar" => "https://picsum.photos/175/104", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "BC345", "Merk" => "Vivo", "Model" => "X60 Pro", "Harga" => 11000000, "url_gambar" => "https://picsum.photos/175/105", "spec" => array("12GB", "5G", "4200mAH", "256GB")),
    array("SKU" => "CDE67", "Merk" => "Realme", "Model" => "GT Neo 2", "Harga" => 9000000, "url_gambar" => "https://picsum.photos/175/106", "spec" => array("8GB", "5G", "5000mAH", "256GB")),
    array("SKU" => "EFG89", "Merk" => "OnePlus", "Model" => "9 Pro", "Harga" => 15000000, "url_gambar" => "https://picsum.photos/175/107", "spec" => array("12GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "HIJ01", "Merk" => "Nokia", "Model" => "X20", "Harga" => 7000000, "url_gambar" => "https://picsum.photos/175/108", "spec" => array("6GB", "5G", "4470mAH", "128GB")),
    array("SKU" => "KLM23", "Merk" => "Sony", "Model" => "Xperia 5 II", "Harga" => 14000000, "url_gambar" => "https://picsum.photos/175/109", "spec" => array("8GB", "5G", "4000mAH", "256GB")),
    array("SKU" => "NOP45", "Merk" => "Google", "Model" => "Pixel 6", "Harga" => 13000000, "url_gambar" => "https://picsum.photos/175/110", "spec" => array("8GB", "5G", "4614mAH", "128GB")),
    array("SKU" => "QRS67", "Merk" => "Asus", "Model" => "ROG Phone 5", "Harga" => 16000000, "url_gambar" => "https://picsum.photos/175/111", "spec" => array("16GB", "5G", "6000mAH", "512GB")),
    array("SKU" => "TUV89", "Merk" => "Lenovo", "Model" => "Legion Duel", "Harga" => 10000000, "url_gambar" => "https://picsum.photos/175/112", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
    array("SKU" => "WXY01", "Merk" => "ZTE", "Model" => "Axon 30", "Harga" => 8000000, "url_gambar" => "https://picsum.photos/175/113", "spec" => array("8GB", "5G", "4200mAH", "128GB")),
    array("SKU" => "YZA23", "Merk" => "Honor", "Model" => "Magic 3", "Harga" => 11000000, "url_gambar" => "https://picsum.photos/175/114", "spec" => array("12GB", "5G", "4600mAH", "256GB")),
    array("SKU" => "BCD45", "Merk" => "Meizu", "Model" => "18 Pro", "Harga" => 10000000, "url_gambar" => "https://picsum.photos/175/115", "spec" => array("8GB", "5G", "4500mAH", "256GB")),
    array("SKU" => "EFG67", "Merk" => "Sharp", "Model" => "Aquos R6", "Harga" => 9500000, "url_gambar" => "https://picsum.photos/175/116", "spec" => array("12GB", "5G", "5000mAH", "256GB")),
    array("SKU" => "HIJ89", "Merk" => "Micromax", "Model" => "IN Note 2", "Harga" => 5500000, "url_gambar" => "https://picsum.photos/175/117", "spec" => array("4GB", "5G", "5000mAH", "128GB")),
    array("SKU" => "KLM01", "Merk" => "Infinix", "Model" => "Zero X Pro", "Harga" => 7000000, "url_gambar" => "https://picsum.photos/175/118", "spec" => array("8GB", "5G", "4500mAH", "128GB")),
    array("SKU" => "NOP23", "Merk" => "Tecno", "Model" => "Phantom X", "Harga" => 7500000, "url_gambar" => "https://picsum.photos/175/119", "spec" => array("8GB", "5G", "4700mAH", "256GB"))
  );
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
      foreach ($arrHape as $hape) {
        echo "<div class='hp'>";
        echo "<div class='main'>";
        echo "<img class='hpImage' src='" . $hape['url_gambar'] . "' alt='Model HP' />";
        echo "<h2>" . $hape['Merk'] . " </h2>";
        echo "<h4 style='color: #a89ec9;'>" . $hape['Model'] . "</h4>";
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
        echo "<hr />";
        echo "<div class='creator'>";
        echo "<input type='checkbox' class='choose' id='choose-" . $hape['SKU'] . "' name='hape[]' value='" . htmlspecialchars(json_encode($hape)) . "'>";
        echo "<label for='choose-" . $hape['SKU'] . "'> Choose </label>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    ?>
    <button type='submit' id="banding" >Bandingkan</button>
  </form>
  <script>
    $(document).ready(function() {
      function threeCheckBox() {
        var numberOfChecked = $('input.choose:checked').length;

        if (numberOfChecked === 3) {
          $('#banding').prop('disabled', false);
          $('input.choose').not(':checked').prop('disabled', true);
        } else {
          $('#banding').prop('disabled', true);
          $('input.choose').prop('disabled', false);
        }
      }

      threeCheckBox();

      $('input.choose').click(function() {
        threeCheckBox();
      });
    });
  </script>
  </body>
</html>

