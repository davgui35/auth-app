<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class EmailTest extends TestCase
{
  public function testTrueAssetsToTrue(): void
  {
    $condition = true;
    $this->assertTrue($condition);
  }
}
