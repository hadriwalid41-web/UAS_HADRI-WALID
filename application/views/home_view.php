<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['judul'] ?? $judul; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #dd4814; }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $judul; ?></h1>
        <p><?php echo $pesan; ?></p>
    </div>

</body>
</html>