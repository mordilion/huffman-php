<?php

declare(strict_types=1);

namespace Mordilion\HuffmanPHP;

use PHPUnit\Framework\TestCase;

/**
 * @author Henning Huncke <henning.huncke@check24.de>
 */
class HuffmanTest extends TestCase
{
    public function testSuccessDecodingWithSameDictionaryVersion()
    {
        $dictionary = new Dictionary(['aaabbcc'], 1, 1);
        $huffman = new Huffman($dictionary);

        $original = 'aaaaaaaaaabbcc';
        $encoded = $huffman->encode($original);

        self::assertEquals($original, $huffman->decode($encoded));
    }
}
