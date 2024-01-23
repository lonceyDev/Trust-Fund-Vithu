<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;



class MetaController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $this->seo()->setTitle('Home');
        $this->seo()->setDescription('This is my page description');
        $this->seo()->opengraph()->setUrl('http://current.url.com');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('Article');

        $posts = Project::all();

        return view('myindex', compact('posts'));
    }
}
