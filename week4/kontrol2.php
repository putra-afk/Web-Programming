<?php
$originalPrice = 120000;
$discountPercentage = 20;

if ($originalPrice > 100000) {
    $discountAmount = ($originalPrice * $discountPercentage) / 100;
    $finalPrice = $originalPrice - $discountAmount;
} else {
    $finalPrice = $originalPrice;
}

echo "Original Price: Rp " . number_format($originalPrice, 2, ',', '.') . "<br>";
echo "Final Price after discount: Rp " . number_format($finalPrice, 2, ',', '.') . "<br>";
