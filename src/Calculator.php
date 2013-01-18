<?php

class Calculator
{

    public function calculate($operation)
    {
        return eval("return $operation;");
    }
}
