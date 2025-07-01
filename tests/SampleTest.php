<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testName() {
        $this->assertEquals("Aditya Giri Kurniawan", "Aditya Giri Kurniawan");
    }

    public function testNIM() {
        $this->assertEquals("23.01.4969", "23.01.4969");
    }
}
