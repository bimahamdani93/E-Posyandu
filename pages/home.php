<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../public/fontawesome/css/all.min.css">
    <title>home</title>
</head>

<body>
    <div class="w-full h-screen font-sans bg-cover bg-landscape">
        <div class="container bg-white flex items-center justify-center flex-1 h-full mx-auto">
            <div class="mt-8 text-5xl font-medium text-gray-900">
                Selamat Datang <?php echo $_SESSION['level'] ?>
            </div>
        </div>
    </div>
</body>

</html>