<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\favList;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$articles = Article::orderBy('created_at','desc')->paginate(4);
        $articles = Article::when(request('searchKey'),function($query){
            $key = request('searchKey');
            $query->where('title','like','%'.$key.'%');
        })->orderBy('created_at','desc')->paginate(6);
        $categories = Category::get()->toArray();
        $name = "Doe";
        //dd($articles->toArray());
        //dd($name);
        return view('Layouts.articleLayout',compact('articles','name'));
    }

    // only for testing will delete later
    public function testUi()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(4);
        //dd($articles->toArray());
        return view('Layouts.withNav',compact('articles'));
    }

    //testing again for favorite page
    public function test(){
        return view('Layouts.testFav');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get()->toArray();
        //dd($categories);
        return view('Layouts.createArticles',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $rules = [
            'image'=>'mimes:jpg,jpeg,png',
            'category'=>'required',
            'title'=>'required|unique:articles,title',
            'description'=>'required|min:255',
            'author'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            //dd($request->image);dd($imageName);
            return redirect()->route('article.create')->withErrors($validator)->withInput();
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data = [
                'category'=>$request->category,
                'title'=>$request->title,
                'article_text'=>$request->description,
                'author'=>$request->author,
                'image'=>$imageName,
            ];
            //dd($data);
            Article::create($data);
            return redirect()->route('articles#index')->with(['createSuccess'=>'Post Creation Success!']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Article::where('id',$id)->first();
        //dd($data);
        return view('Layouts.readArticle',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Article::where('id',$id)->first()->toArray();
        $categories = Category::get()->toArray();
        //dd($data);
        return view('Layouts.updateArticle',compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($id);
        $rules = [
            'category'=>'required',
            'title'=>'required|unique:articles,title,12',
            'description'=>'required',
            'author'=>'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
        $errorMsg = [
            'category'=>'Please write a title for your updated post.',
            'title.unique'=>'Since the title is already taken, please choose another.'
        ];
        $validator = Validator::make($request->all(),$rules,$errorMsg);
        if($validator->fails()){
            //dd($request->category);
            return redirect()->route('article.edit',$id)->withErrors($validator)->withInput();

        }else{
            $data = $request->all();
            $data = [
                'category'=>$request->category,
                'title'=>$request->title,
                'article_text'=>$request->description,
                'author'=>$request->author,
                'image'=>$request->image
            ];
            //dd($data);
            Article::where('id',$id)->update($data);
            return redirect()->route('articles#index')->with(['createSuccess'=>'Post Creation Success!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::where('id',$id)->delete();
        return redirect()->route('articles#index')->with(['deleteSuccess'=>'Post Deletion Success!']);
    }
    // when user click readmore -> to show article in details
    public function readMore(){
        return view('Layouts.readArticles');
    }
    //favorite articles
    public function favoriteArticles(string $id,$user_id = 2){
        //saving favorite article in DB
        $a_id = (int)$id;
        $dataForDB = [
            'user_id' => 3,
            'article_id'=> $a_id
        ];
       //favList::create($dataForDB);
        //showing favorite article from DB
        $data = favList::where('user_id', $user_id)->get('article_id');
        //dd(gettype($data));
        foreach($data as $items){
            $allPostId = (int)$items->article_id;
            $dataToShow = Article::where('id',$allPostId)->get();
        }
        $articles = Article::orderBy('created_at','desc')->get();
        $favroites = DB::table('articles')
                    ->join('fav_lists','articles.id','=','fav_lists.');
      //  $showData = Article::where('id',$data)->get();
        //dd($showData);
        return view('Layouts.favoriteArticles',compact('data','dataToShow','articles'));
    }
    //update cause build in function doesn't work
    public function updateArticle(Request $request, $id){
        $rules = [
            // 'image'=>'mimes:jpg,jpeg,png',
            'category'=>'required',
            'title'=>'required|unique:articles,title,'.$id,
            'description'=>'required|min:255',
            'author'=>'required',
            // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ];
        $errorMsg = [
            'category'=>'Please write a title for your updated post.',
            'title.unique'=>'Since the title is already taken, please choose another.'
        ];
        $validator = Validator::make($request->all(),$rules,$errorMsg);
        if($validator->fails()){
            return redirect()->route('article.edit',$id)->withErrors($validator)->withInput();
        }else{
            $data = $request->all();
            //dd($request->image);
            // $imageName = time().'.'.$request->image->extension();
            //dd($imageName);
            // $request->image->move(public_path('images'), $imageName);
            // $request->image->move(public_path('images'));
            $data = [
                'category'=>$request->category,
                'title'=>$request->title,
                'article_text'=>$request->description,
                'author'=>$request->author,
                // 'image'=>$request->image,
            ];
            //dd($data);
            Article::where('id',$id)->update($data);
            return redirect()->route('articles#index')->with(['updateSuccess'=>'Post Update Success!']);
             }
    }

    public function __invoke()
    {
        // Controller logic here
    }



}
