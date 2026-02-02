<?php


function bruteforceHash(int $targetHash, int $maxLen): ?string
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyz0123456789';

    // TODO:
    // 1) Générer toutes les chaînes de longueur 1..$maxLen
    // 2) Calculer toy_hash($candidate) et comparer à $targetHash
    $hash = hash('sha256', $candidate);
    // 3) Retourner $candidate dès que ça match
    // 4) Si rien trouvé, retourner null

    return null;
}

$targetHash2letters = "1fdbc74ccfd68d0714ae539c0d93f2f3a1805387632eca33d3bd6a5013afb13e";
// $targetHash4letters = "092c79e8f80e559e404bcf660c48f3522b67aba9ff1484b0367e1a4ddef7431d";
// $targetHash6letters = "110812f67fa1e1f0117f6f3d70241c1a42a7b07711a93c2477cc516d9042f9db";
// $targetHash8letters = "cd08c4c4316df20d9c30450fe776dcde4810029e641cde526c5bbffec1f770a3";

$maxLen = 2;

$found = bruteforceHash($targetHash, $maxLen);
echo "Found = " . $found ;

