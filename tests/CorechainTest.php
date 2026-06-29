<?php
/**
 * Tests for CoreChain
 */

use PHPUnit\Framework\TestCase;
use Corechain\Corechain;

class CorechainTest extends TestCase {
    private Corechain $instance;

    protected function setUp(): void {
        $this->instance = new Corechain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Corechain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
