<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ConnTest extends TestCase
{

    // 测试协程外部析构
    public function test(): void
    {
        $_this = $this;
        $func  = function () use ($_this) {
            $GLOBALS['conn'] = redis()->borrow();
        };
        run($func);
        $_this->assertTrue(true);
    }

}
