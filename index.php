<!DOCTYPE html>
<html lang="en">
  <?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}


?>
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
      body {
        background-color: lightblue;
        text-align: center;
      }
      
      .lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid #fff;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fff transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

  </style>
</head>
<body>
  <script>
    const AS_URL_BASE = "https://script.google.com/macros/s/AKfycbybzRtGgZnTg3NAjanYlFAMhZA0va2FZ6mnTQKwQgnpf2cAc-89RA36d6iv8ySwNGq4ZA/exec";
    
    var url = document.location.href;
    var k = url.substr(url.lastIndexOf("k=")+2);
    
    if(k){
      fetch(AS_URL_BASE+'?k='+k)
      .then(r => r.text())
      .then((r) => {
        console.log(r);
        //document.write(r);
        if(r){
          document.location.replace(r);
        }
      })
      .catch(err => console.log(err))
    }

  </script>
  
  <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
  
  
</body>
</html>
