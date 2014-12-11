<?php

class TestController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        App::bind('TestB', 'TestB');
        $a = new TestA('a');
        App::make('TestB', array($a, 'name' => 'b'))->showMe();
        return 'test';
    }
}


class TestA
{
    public $name;
    use TraitEcho;

    function __construct($name)
    {
        // TODO: Implement __construct() method.
        $this->name = $name;
    }

}

class TestB
{
    public $name;
    use TraitEcho;

    function __construct(TestA $a, $name)
    {
        // TODO: Implement __construct() method.
        $this->a = $a;
        $this->name = $this->a->name . ' and ' . $name;
    }

}

trait TraitEcho
{
    public function showMe()
    {
        print $this->name . "<br>";
    }
}