<?php 
require_once __DIR__ . '/../../logics/temperature.php';
require_once __DIR__ . '/../layouts/header.php';
?>
    
    <?php if(!isset($convertedValue)): ?>
        <?php require 'form.php' ?>
    <?php else: ?>
        <div class="flex flex-col">
            <p class="text-lg font-semibold mb-1">Result of your Calculation</p>
            <p class="text-3xl font-semibold mb-5"><?= "$temperature &deg;$fromUnit = $convertedValue &deg;$toUnit" ?></p>                
            <a href="temperature.php" class="w-full text-center border-1 rounded-md p-1 mt-3 cursor-pointer hover:bg-gray-300 focus:ring-2">Calculate Again</a>                
        </div>
    <?php endif; ?>

<?php require_once __DIR__ . '/../layouts/footer.php'?>