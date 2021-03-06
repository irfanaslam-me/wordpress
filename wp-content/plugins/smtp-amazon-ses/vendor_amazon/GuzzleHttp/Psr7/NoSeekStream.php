<?php

namespace YaySMTPAmazonSES\Aws3\GuzzleHttp\Psr7;

use YaySMTPAmazonSES\Aws3\Psr\Http\Message\StreamInterface;
/**
 * Stream decorator that prevents a stream from being seeked
 */
class NoSeekStream implements \YaySMTPAmazonSES\Aws3\Psr\Http\Message\StreamInterface
{
    use StreamDecoratorTrait;
    public function seek($offset, $whence = SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }
    public function isSeekable()
    {
        return false;
    }
}
