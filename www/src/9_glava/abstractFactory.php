<?php


namespace Root;

interface Encoder
{
    public function encode(): string;
}

abstract class CommsManager
{
    public const APPT = 1;
    public const TTD = 2;
    public const CONTACT = 3;

    abstract public function getHeaderText(): string;

    abstract public function make(int $flag_int): Encoder;

    abstract public function getFooterText(): string;
}

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCall верхний колонтитул\n";
    }

    public function make(int $flag_int): Encoder
    {
        switch ($flag_int) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
        }
    }

    public function getFooterText(): string
    {
        return "BloggsCall нижний колонтитул\n";
    }
}

