<?php
class UserController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return $users;
    }

    public function test()
    {
//        var_dump(Config::get('config::database.connections.mysql', 'no value')) . PHP_EOL;
//        var_dump(App::getConfigLoader());
        App::bind('TestB', 'TestB');
        $a = new TestA('a');
        App::make('TestB', array($a, 'name' => 'b'))->showMe();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = new User();
        $user->name = 'test';
        $user->role = 'admin';
        $user->save();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
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