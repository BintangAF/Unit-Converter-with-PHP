<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/output.css">
    <title>Unit Converter</title>
</head>
<body>
    <div class="h-screen flex items-center justify-center">
        <div class="w-full max-w-md">
            <div id="card" class="p-4 border-2 rounded-lg">
                <h1 class="text-3xl font-bold">Unit Converter</h1>

                <div id="menu" class="flex gap-3 py-3">
                    <a href="../length/length.php" class="<?= $currentPage == 'length.php' ? 'text-blue-600 underline' : '' ?> text-lg font-semibold hover:text-blue-600">Length</a>
                    <a href="../weight/weight.php" class="<?= $currentPage == 'weight.php' ? 'text-blue-600 underline' : '' ?> text-lg font-semibold hover:text-blue-600">Weight</a>
                    <a href="../temperature/temperature.php" class="<?= $currentPage == 'temperature.php' ? 'text-blue-600 underline' : '' ?> text-lg font-semibold hover:text-blue-600">Temperature</a>
                </div>
                
                <div id="content" class="py-3">
        