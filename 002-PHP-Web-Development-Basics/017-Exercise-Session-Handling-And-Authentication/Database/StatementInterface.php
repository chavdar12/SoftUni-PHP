<?php


namespace Database;


interface StatementInterface
{
    /**
     * @param array $param
     * @return ResultSetInterface
     */
    public function execute(array $param = []): ResultSetInterface;
}