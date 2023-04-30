<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>HTML ile form oluşturma</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</head>

<html>
<div class="d-flex justify-content-center">
        <h1>Hasta Kayıt Sistemi</h1>
    </div>
<form action="test.php" name="test" method="post">

  <fieldset>
    <div class="d-flex justify-content-center">
        <h3>Kişisel Bilgiler</h3>
    </div>
  
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="personal_fname">Adı:</label>
        <input 
        name="personal_fname" 
        type="text" 
        class="form-control" 
        id="personal_fname">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="personal_lname">Soyadı:</label>
        <input 
        name="personal_lname" 
        type="text" 
        class="form-control" 
        id="personal_lname">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="medeni_hal">Medeni Hali:</label>
        <select 
        name="medeni_hal" 
        class="form-control" 
        id="medeni_hal">
          <option value="E">Erkek</option>
          <option value="K">Kadın</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="personal_address">Adresi:</label>
        <input 
        name="personal_address" 
        type="text" 
        class="form-control" 
        id="personal_address">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label for="username">Kullanıcı:</label>
        <input
        type="text" 
        name="username" 
        class="form-control"
         id="username">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="password">Parola:</label>
        <input 
        type="password" 
        name="password" 
        class="form-control"
        id="password">
      </div>
    </div>
  </div>
</div>



    <!-- ...diğer kişisel bilgiler... -->
  </fieldset>
   <div class="d-flex justify-content-center">
    <fieldset>
    <div class="text-center">
  <h2>Şikayetler</h2>
    </div>
  <input name="sikayet" type="checkbox" value="basagrisi" /> Baş ağrısı
  <input name="sikayet" type="checkbox" value="karinagrısı" /> Karın ağrısı
  <input name="sikayet" type="checkbox" value="gögüsağrısı" /> Göğüs ağrısı
  <input name="sikayet" type="checkbox" value="nefesdarlıgı" /> Nefes darlığı<br /><br />
  <!-- ...şikayetler ile ilgili diğer... -->
    </fieldset>
   </div>
<div class="container d-flex justify-content-center ">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <fieldset>
        <div class=" d-flex justify-content-center">
            <h4>İlaç Tedavisi</h4>
        </div>
        
        <br />
        Halen kullanmakta olduğunuz ilaçlar var mı?<br />
        <input name="medication_now" type="radio" value="Evet" /> Evet
        <input name="medication_now" type="radio" value="Hayir" />Hayır
        <br /><br />
        Eğer ilaç kullanıyorsanız, aşağıya kullandığınız ilaçları ve günlük dozlarını belirtiniz:<br />
        <textarea name="kullandigi_ilaclar" rows="10" class="form-control"></textarea>
      </fieldset>
    </div>
  </div>
</div>
 
<div class="d-flex justify-content-center mt-3">
  <button class="btn btn-primary" type="submit" name="islem">Gönder</button>
</div>

  

</form>

</html>