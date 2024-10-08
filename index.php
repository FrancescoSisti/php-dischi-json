<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <h1 class="text-center">Lista Dischi</h1>
        <div class="row">
            <div class="col" v-for="disco in dischi">
                <div class="card" style="width: 18rem;">
                    <img :src="disco.poster" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ disco.title }}</h5>
                        <p class="card-text">{{ disco.author }}</p>
                        <p class="card-text">{{ disco.year }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="js/app.js"></script>
</body>

</html>