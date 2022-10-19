<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\TweetForm;

class TweetFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets=TweetForm::select('id','name','title','contact','created_at')->get();
        return view ('tweet.index',compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tweet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TweetForm::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'url' => $request->url,
            'gender' => $request->gender,
            'age' => $request->age,
            'contact' => $request->contact,
        
        ]);
            return to_route('tweets.index');

    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet=TweetForm::find($id);
        if($tweet->gender===0)
        {$gender='男性';}else{$gender='女性';}
        if($tweet->age===1){$age='~19歳';}
        if($tweet->age===2){$age='20歳~29歳';}
        if($tweet->age===3){$age='30歳~39歳';}
        if($tweet->age===4){$age='40歳~49歳';}
        if($tweet->age===5){$age='50歳~59歳';}
        if($tweet->age===6){$age='60歳~';}

        return view ('tweet.show',compact('tweet','gender','age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet=TweetForm::find($id);
        return view('tweet.edit',compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tweet=TweetForm::find($id);
        $tweet->name=$request->name;
        $tweet->title=$request->title;
        $tweet->email=$request->email;
        $tweet->url=$request->url;
        $tweet->gender=$request->gender;
        $tweet->age=$request->age;
        $tweet->contact=$request->contact;
        $tweet->save();
        return to_route('tweets.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet=TweetForm::find($id);
        $tweet->delete();
        return to_route('tweets.index');
    }
    
}
