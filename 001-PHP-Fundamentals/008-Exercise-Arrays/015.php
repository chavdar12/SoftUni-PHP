<?php
$length = intval(fgets(STDIN));
$bestSeq = null;
$bestSeqSum = -1;
$bestSeqIndex = -1;
while (true) {
    $line = trim(fgets(STDIN));
    if ($line === 'Clone them!') {
        break;
    }
    $seq = array_map('intval', explode('!', $line));
    $maxOnesCount = 0;
    $currentOnesCount = 0;
    $sum = array_sum($seq);
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == 1) {
            $currentOnesCount++;
            $maxOnesCount = max($maxOnesCount, $currentOnesCount);
        } else {
            $currentOnesCount = 0;
        }
    }
    if ($maxOnesCount > $bestSeqSum || ($maxOnesCount == $bestSeqSum && $sum > $bestSeqSum)) {
        $bestSeqSum = $maxOnesCount;
        $bestSeqIndex++;
        $bestSeq = $seq;
    }
}
echo "Best DNA sample $bestSeqIndex with sum: $bestSeqSum.\n";
echo implode(' ', $bestSeq) . PHP_EOL;