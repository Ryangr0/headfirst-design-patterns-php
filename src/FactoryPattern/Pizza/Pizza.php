<?php

namespace HeadFirst\FactoryPattern\Pizza;

abstract class Pizza
{
    private $name      = '';
    protected $dough     = null;
    protected $sauce     = null;
    protected $cheese    = null;
    protected $veggies   = [];
    protected $pepperoni = null;
    protected $clams     = null;

    protected $sliceShape = 'normal';


    public $prepare = '';
    public $bake    = '';
    public $cut     = '';
    public $box     = '';

    abstract public function prepare();

    public function bake()
    {
        $this->bake = 'Bake for 25 minutes at 350';
    }

    public function cut()
    {
        $this->cut = 'Cutting the pizza into ' . $this->sliceShape . ' slices.';
    }

    public function box()
    {
        $this->box = 'Place pizza in official PizzaStore box';
    }

    public function name()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function dough()
    {
        return $this->dough;
    }

    /**
     * @return null
     */
    public function sauce()
    {
        return $this->sauce;
    }

    /**
     * @return null
     */
    public function cheese()
    {
        return $this->cheese;
    }

    /**
     * @return array
     */
    public function veggies(): array
    {
        return $this->veggies;
    }

    /**
     * @return null
     */
    public function pepperoni()
    {
        return $this->pepperoni;
    }

    /**
     * @return null
     */
    public function clams()
    {
        return $this->clams;
    }

    public function __toString()
    {
    }


}