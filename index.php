<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    <script defer src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <h1>Lista Dischi</h1>
    <?php
    $json_file = file_get_contents('API/dischi.json');
    $dischi = json_decode($json_file, true);

    echo '<pre>';
    print_r($dischi);
    echo '</pre>';
    ?>
</body>

</html>