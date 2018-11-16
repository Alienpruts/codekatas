<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 16/11/18
 * Time: 9:50
 */

namespace CodeKatas\Codewars;

use PHPUnit\Framework\TestCase;

final class IsPrimeTest extends TestCase
{

    public function testIfIsPrimeWorksAsIntended(): void
    {

        $isPrime = new IsPrime();

        $this->assertFalse($isPrime->is_prime(0));
        $this->assertFalse($isPrime->is_prime(1));
        $this->assertTrue($isPrime->is_prime(2));
        $this->assertTrue($isPrime->is_prime(5));
        $this->assertTrue($isPrime->is_prime(3));
        $this->assertFalse($isPrime->is_prime(4));
        $this->assertFalse($isPrime->is_prime(6));
        $this->assertTrue($isPrime->is_prime(7));
        $this->assertFalse($isPrime->is_prime(8));
        $this->assertFalse($isPrime->is_prime(9));
        $this->assertFalse($isPrime->is_prime(10));
        $this->assertTrue($isPrime->is_prime(41));
        $this->assertFalse($isPrime->is_prime(45));
        $this->assertTrue($isPrime->is_prime(73));
        $this->assertFalse($isPrime->is_prime(75));
        $this->assertTrue($isPrime->is_prime(5099));
        $this->assertFalse($isPrime->is_prime(-1));
    }
}
