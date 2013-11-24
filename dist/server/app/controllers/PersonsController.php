<?php

class PersonsController extends BaseController 
{
	public function __construct(Person $persons)
	{
		$this->persons = $persons;
	}


	public function getIndex()
    {
        $persons = $this->persons->all();

        //return View::make('people.index', compact('persons'));
    }

    public function postPersons()
    {
        $input = Input::all();
		
		//$validation = Validator::make($input);
		
			$this->person->create($input);

		
    }
 }
