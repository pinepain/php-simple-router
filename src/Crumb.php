<?php declare(strict_types=1);


namespace Pinepain\SimpleRouting;


class Crumb
{
    /**
     * @var string
     */
    public $handler;
    /**
     * @var array
     */
    public $variables;
    /**
     * @var array
     */
    public $extra;

    /**
     * @param string $handler
     * @param array  $variables
     * @param array  $extra
     */
    public function __construct(string $handler, array $variables, array $extra = [])
    {
        $this->handler   = $handler;
        $this->variables = $variables;
        $this->extra = $extra;
    }
}
