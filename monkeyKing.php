<?php

function monkeyKing($n, $m) {
    $i = 0;
    $monkeys = range(1, $n); //初始化猴子
    while (count($monkeys) > 1) {
        if ($i > 0) {//因为指针默认指向第一个，所以刚开始数就不要移动指针了
            if (!next($monkeys)) {
                reset($monkeys); //数到头了，从头开始数
            }
        }
        $i++;
        if ($i == $m) {
            unset($monkeys[key($monkeys)]); //干掉猴子
            if (!current($monkeys)) {
                reset($monkeys); //如果删除的是最后一个猴子则指向第一个猴子
            }
            $i = 0;
        }
    }
    return current($monkeys);
}
