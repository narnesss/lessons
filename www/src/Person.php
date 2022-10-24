<?php


namespace Root;


class Person
{

    private ?string $myname;
    private ?int $myage;
    private int $id;

    public function __construct(protected string $name, private int $age)
    {
        $this->myname = $name;
        $this->myage = $age;
    }

    public function __get(string $property): mixed
    {
        $method = "get{$property}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function __call(string $method, array $args): mixed
    {
        if (method_exists($this->writer, $method)) {
            return $this->writer->$method($this);
        }
    }

    public function __isset(string $property): bool
    {
        $method = "get{$property}";
        return (method_exists($this, $method));
    }

    public function __set(string $property, mixed $value): void
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    public function __unset(string $property): void
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method(null);
        }
    }

    public function __destruct()
    {
        if (!empty($this->id)) {
            // save Person data
            print "saving person\n";
        }
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return "Bob";
    }

    public function getAge(): int
    {
        return 44;
    }

    public function setName(?string $name): void
    {
        $this->myname = $name;
        if (!is_null($name)) {
            $this->myname = strtoupper($this->myname);
        }
    }

    public function setAge(?int $age): void
    {
        $this->myage = $age;
    }

    public function writeName(): void
    {
        $this->writer->writeName($this);
    }

}