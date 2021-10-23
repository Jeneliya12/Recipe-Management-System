<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use App\Models\Recipe;

use App\Models\About;

use App\Models\Menu;

use App\Models\Salad;

use App\Models\Specialty;

use App\Models\Gallery;

use App\Models\Chef;

use App\Models\Events;

use App\Models\Testimonials;

use App\Models\Special;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
 		$slider= Slider::get();
 		$recipe= Recipe::orderBy('recipedate', 'DESC')->take(10)->get();
 		$about= About::get();
 		$menu= Menu::get();
 		$salad=Salad::get();
 		$specialty=Specialty::get();
 		$galleries= Gallery::get();
 		$chefs= Chef::get();
 		$events = Events::get();
 		$testimonials = Testimonials::get();
 		$specials= Special::get();
 		return view('welcome', compact('slider','recipe', 'about', 'menu', 'salad', 'specialty','galleries', 'chefs', 'events', 'testimonials', 'specials'));
	}
}
