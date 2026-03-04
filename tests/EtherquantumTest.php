<?php
/**
 * Tests for EtherQuantum
 */

use PHPUnit\Framework\TestCase;
use Etherquantum\Etherquantum;

class EtherquantumTest extends TestCase {
    private Etherquantum $instance;

    protected function setUp(): void {
        $this->instance = new Etherquantum(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherquantum::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
