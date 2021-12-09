<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function searchShow()
   {
       if(strip_tags($_GET['q'])!="")
       {
           $q=strip_tags($_GET["q"]);
           $data=Product::where("name","like",'%'.$q.'%')->paginate(25);


           return view('products.product_searchlist',['data'=>$data]);
       }
       else
       {
           return redirect('/');
       }
   }
}
