<?php

declare(strict_types=1);
namespace oscanguera\exercici_1\tests;

use PHPUnit\Framework\TestCase;
use oscanguera\exercici_1\numberChecker;



class testNumberChecker extends TestCase {
    /**
     * @covers oscanguera\exercici_1\numberChecker::isEven
     */
    public function testIsEven() {
        $evenChecker = new NumberChecker(4);
        $this->assertTrue(@$evenChecker->isEven());

        $oddChecker = new NumberChecker(5);
        $this->assertFalse(@$oddChecker->isEven());
    }
    /**
     * @covers oscanguera\exercici_1\numberChecker::isPositive
     */
    public function testIsPositive() {
        $positiveChecker = new NumberChecker(4);
        $this->assertTrue(@$positiveChecker->isPositive());

        $negativeChecker = new NumberChecker(-5);
        $this->assertFalse(@$negativeChecker->isPositive());
    }
}

?>


