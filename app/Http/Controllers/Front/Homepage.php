<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Models
use App\Models\Category;
use App\Models\Article;

class Homepage extends Controller
{
    public function index(){
        $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);//paginate sayfalandırma
        //Anasayfaya makalaleri gönderir
        $data['categories']=Category::orderBy('name')->get();
        return view('front.homepage',$data);
        //ss
        //sss
    }
    public function single($category,$slug){
        $category= Category::whereSlug($category)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle bir yazı bulunamadı.');
        $article->increment('hit');
        $data['article']=$article;
        $data['categories']=Category::orderBy("name","ASC")->get();
        return view('front.single',$data);
    }
    public  function category($slug){
        $category= Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $data['category']=$category;
        $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);
        $data['categories']=Category::orderBy('name')->get();
        return view('front.category',$data);
    }
}
