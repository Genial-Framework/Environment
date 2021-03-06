<?php
/**
 * @link      <https://github.com/SyzerPHP/Environment> for the canonical source repository.
 * @copyright Copyright (c) 2018, SyzerPHP <https://github.com/SyzerPHP>.
 * @license   <https://github.com/SyzerPHP/Environment/blob/master/LICENSE> New BSD License.
 */
namespace SyzerPHP\Environment;
use \PHPUnit\Framework\TestCase;
/**
 * KeyTest.
 */
final class KeyTest extends TestCase
{
    public function testGenerateKey(): void
    {
        $this->assertTrue(\is_string(Key::generateKey()));
        $this->assertTrue(\strlen(Key::generateKey()) > 12);
        $this->assertTrue(\strlen(Key::generateKey()) > 8);
        $this->assertTrue(\substr(Key::generateKey(), 0, 8) === '[SYZER]@');
    }
}
