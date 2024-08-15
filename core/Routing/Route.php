<?php
namespace Routing;
class Route
{
    private $path;
    private $callback;

    public function __construct($path, $callback) {
        $this->path = $path;
        $this->callback = $callback;
    }

    public function getPath() {
        return $this->path;
    }

    public function getCallback() {
        return $this->callback;
    }
}