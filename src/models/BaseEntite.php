<?php
namespace Src\Models;
abstract class BaseEntite{
    private ?int $id =  null;
    public function getId():?int{
    return $this->id;
    }
    public function __construct()
    {
        throw new \Exception('Not implemented');
    }
    public function setId(int $id): self{
        $this->id=$id;
        return $this;
    }
    abstract public function toArray():array;
}