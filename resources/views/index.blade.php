<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemampatan (Compaction)</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('css/one-page-wonder.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Compaction</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Pemampatan (Compaction)</h1>
        <h2 class="masthead-subheading mb-0">Mengurangi panjang pesan atau jumlah bloknya.</h2>
        <form id="myForm" action="#">
          <div class="input-group input-group-lg">
            <input type="text" id="textinput" class="form-control rounded-pill mt-5" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-lg" style="text-align: center"
              placeholder="Enter the text you want to encrypt.">
          </div>
          <div class="input-group input-group-lg">
            <input type="number" id="key" class="form-control rounded-pill mt-5" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-lg" style="text-align: center"
              placeholder="Enter the key" onkeypress="return hanyaAngka(event)">
          </div>
          <button href="#" onclick="myFunction()" class="btn btn-primary btn-xl rounded-pill mt-5" id="show">ENCRYPT
            NOW</button>
        </form>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>


  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="{{url('img/Protect.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Result</h2>
            <h3>Plain Text : <p id="pt"></p>
            </h3>
            <h3 class="mt-3">Cipher Text : <p id="ct"></p>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<script>
  var input = document.getElementById("textinput");
  input.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      document.getElementById("show").click();
    }
  });
  $(document).ready(function () {
    $("section").hide();
    $("#show").click(function () {
      $("section").show();
    });
  });
  
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))            
        return false;
    return true;
  }
  
  function myFunction() {
    var str = document.getElementById("textinput").value;
    var pampat = "";
    var hilang = "";
    var i;
    var j = 1;
    for (i = 0; i <= str.length; i++) {
      if (j == document.getElementById("key").value) {
        pampat += str.substring(i, i + 1);
        j = 0;
      } else {
        hilang += str.substring(i, i + 1);
      }
      j++;
    }
    document.getElementById("pt").innerHTML = document.getElementById("textinput").value;
    document.getElementById("ct").innerHTML = hilang + "&" + pampat;
  }
</script>

</html>