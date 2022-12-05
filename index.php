<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>PHP Dischi JSON</title>
</head>
<body>

<div id="app">
  <header>
    <div class="container h-100 d-flex justify-content-center align-items-center justify-content-between">
      <i class="fa-brands fa-spotify fa-2xl"></i>
      <h2>Dischi Spotify</h2>
    </div>
  </header>

  <main>
    <div class="container card-wrap">
      <div class="row d-flex flex-wrap justify-content-center">
        <div v-for="(disco, index) in dischi" :key="index" class="card m-4 p-4 text-center" style="width: 18rem;">
          <img :src="disco.poster" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{disco.title}}</h5>
          <p class="card-text">{{disco.author}}</p>
          <p class="card-text">{{disco.year}}</p>
        </div>
      </div>
    </div>
  </main>

</div>

  <script src="./js/main.js"></script>
</body>
</html>