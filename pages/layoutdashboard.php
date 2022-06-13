<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>

    <main class="bg-gray-100 dark:bg-gray-800 h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <div class="h-screen hidden lg:block shadow-lg relative w-80">
                <?php include 'components/sidebar.php'; ?>
            </div>
            <div class="flex flex-col w-full md:space-y-4">
                <div class="overflow-auto h-screen pt-6 pb-24 px-4 md:px-6">
                    <?php include 'route.php'; ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>