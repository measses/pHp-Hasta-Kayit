<?php
  // Verileri Ekrana Yazdırma
    echo "Adı: " . $_POST["personal_fname"] . "<br>";
    echo "Soyadı: " . $_POST["personal_lname"]. "<br>";
    echo "Adresi: " . $_POST["personal_address"]. "<br>";
    echo "Medeni Hali: " . $_POST["medeni_hal"]. "<br>";
    echo "Kullanıcı: " . $_POST["username"]. "<br>";
    echo "Parola: " . $_POST["password"]. "<br>";
   
    echo "İlaç Tedavisi: " . $_POST["medication_now"]. "<br>";
    echo "İlaçlar: " . $_POST["kullandigi_ilaclar"];


?>
