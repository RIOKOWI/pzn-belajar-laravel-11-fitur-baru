<?php

use App\Helper\MathHelper;

test('example', function () {
    $result1 = MathHelper::add(10, 10);
    $result2 = MathHelper::add(10, 10);
    $result3 = MathHelper::add(11, 10);

    expect($result1)->toBe(20);
    expect($result2)->toBe(20);
    expect($result1)->toBe($result2);

    expect($result3)->toBe(21);
});
