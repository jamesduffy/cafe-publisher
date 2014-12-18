<?php

class AppController extends BaseController {

    function getIndex()
    {
    	 if (! Auth::check())
		{
			return Redirect::to('/');
		}

        return View::make('app');
    }

}
