<?php /** @noinspection PhpUnusedLocalVariableInspection */

/**
 * Created by PhpStorm.
 * User: bert
 * Date: 20/11/18
 * Time: 12:21
 */

namespace CodeKatas\HackerRank;

use PHPUnit\Framework\TestCase;

class ClassVsInstanceTest extends TestCase
{


    public function testIfClassCanBeInstantiated(): void
    {

        $this->assertInstanceOf(ClassVsInstance::class, new ClassVsInstance());

    }

    public function testIfAgeIsSetCorrectly(): void
    {
        $value = 15;
        $expected = 15;
        $classVsInstance = new ClassVsInstance($value);

        $this->assertSame($expected, $classVsInstance->getAge());
    }

    public function testIfAgeIsSetToDefaultIfNegative(): void
    {
        $value = -15;
        $expected = 0;
        $classVsInstance = new ClassVsInstance($value);

        $this->assertSame($expected, $classVsInstance->getAge());
    }

    public function testIfMessageIsDisplayedAfterInvalidAge(): void
    {
        $value = -15;
        $expected = 'Age is not valid, setting age to 0.';
        $classVsInstance = new ClassVsInstance($value);

        $this->expectOutputString($expected);
    }

    public function testIfYearPassesIncreasesAgeByOne(): void
    {
        $expected = 2;
        $actual = 1;
        $classVsInstance = new ClassVsInstance($actual);

        $this->assertSame($expected, $classVsInstance->yearPasses()->getAge());

    }

    public function testIfAmIOldShowsCorrectOutput(): void
    {
        $actual = 12;
        $classVsInstance = new ClassVsInstance($actual);
        $young = 'You are young.';
        $teen = 'You are a teenager.';
        $old = 'You are old.';

        $this->assertSame($young, $classVsInstance->amIOld());
        $classVsInstance->yearPasses();
        $this->assertSame($teen, $classVsInstance->amIOld());
        $classVsInstance->yearPasses();
        $classVsInstance->yearPasses();
        $classVsInstance->yearPasses();
        $classVsInstance->yearPasses();
        $classVsInstance->yearPasses();
        $this->assertSame($old, $classVsInstance->amIOld());

    }
}
