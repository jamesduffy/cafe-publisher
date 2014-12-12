<?php

class StaticPagesController extends BaseController {

    public function getAbout()
    {
        return View::make('pages/about');
    }

    public function getTermsOfService()
    {
        return View::make('pages/terms');
    }

    public function getPrivacyPolicy()
    {
        return View::make('pages/privacy');
    }

}
