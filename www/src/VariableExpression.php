<?php


namespace Root;


class VariableExpression extends Expression
{
    public function __construct(private string $name, private mixed $val = null)
    {
    }

    public function interpret(InterpreterContext $context): void
    {
        if (!is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    public function setValue(mixed $value): void
    {
        $this->val = $value;
    }

    public function getKey(): string
    {
        return $this->name;
    }
}