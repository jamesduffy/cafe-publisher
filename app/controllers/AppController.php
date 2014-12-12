<?php

class AppController extends BaseController {

    function getIndex()
    {
        return View::make('app');
    }

}
