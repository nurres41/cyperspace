<?php

// The number of all products purchased by the user
function calculateTotalQuantity($purchaseHistory) {
    $totalQuantity = 0;
    foreach ($purchaseHistory as $purchase) {
        $totalQuantity += $purchase["quantity"];
    }
    return $totalQuantity;
}

// the number of certain products the user bought
function calculateProductQuantity($purchaseHistory, $product) {
    $productQuantity = 0;
    foreach ($purchaseHistory as $purchase) {
        if ($purchase["product"] === $product) {
            $productQuantity += $purchase["quantity"];
        }
    }
    return $productQuantity;
}


