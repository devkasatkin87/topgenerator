<?php

namespace src\handler;
use Datto\JsonRpc\Evaluator;
use Datto\JsonRpc\Exceptions\ArgumentException;
use Datto\JsonRpc\Exceptions\MethodException;

class TopArticles implements Evaluator
{
    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function evaluate($method, $arguments) {
        if (count($arguments) !== 2) {
            throw new ArgumentException();
        }

        foreach ($arguments as $argument) {
            if (!is_numeric($argument)) {
                throw new ArgumentException();
            }
        }

        switch ($method) {
            case 'getTopArticles':
                $result = $this->getTopArticles(...$arguments);
                break;
            default:
                throw new MethodException();
        }
        return $result;
    }

    public function getTopArticles(int $id, int $views)
    {
        return $id + $views;
    }

}
