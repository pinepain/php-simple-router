<?php declare(strict_types=1);


namespace Pinepain\SimpleRouting;


use Pinepain\SimpleRouting\Chunks\AbstractChunk;

class Route
{
    /**
     * @var string
     */
    public $handler;
    /**
     * @var AbstractChunk[]
     */
    public $chunks;
    /**
     * @var array
     */
    public $extra;

    /**
     * @param string $handler
     * @param AbstractChunk[] $chunks
     * @param array $extra
     */
    public function __construct(string $handler, array $chunks, array $extra = [])
    {
        $this->handler = $handler;
        $this->chunks = $chunks;
        $this->extra = $extra;
    }
}
