function alternatingSums($arr) {
    $sums = [0,0];
    foreach($arr as $i => $weight) {
        $sums[$i % 2] += $weight;
    }
    return $sums;
}
