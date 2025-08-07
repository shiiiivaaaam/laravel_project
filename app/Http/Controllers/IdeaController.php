<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){
        //this one also works.
        // $idea = new Ideas;
        // $idea->content = request()->get('idea','');
        // $idea->likes=100;
        // $idea->save();

        // dd(request()->all());
        $validated=request()->validate([ 'content'=> 'required|min:3|max:200' ]);

        $validated['user_id']=auth()->id();

        Idea::create( $validated );
        return redirect()->route('dashboard')->with('success','Idea created successfully!');
}


// public function destroy($id){

//     Ideas::where('id', $id)->firstOrFail()->delete();

//     return redirect()->route('dashboard')->with('success','Idea deleted successfully');
// }

//above and below works the same ;

public function destroy(Idea $id){

    $this->authorize('delete', $id);
    $id->delete();

    return redirect()->route('dashboard')->with('success','Idea deleted successfully');

}


public function show(Idea $idea){

    return view('ideas.show',['idea'=>$idea]);

}

//both does the same thing .
// public function edit(Ideas $idea){

//     return view('show.idea',compact('idea'));

// }

public function edit(Idea $idea){
    $this->authorize('update', $idea);
    $editing = true;

    return view('ideas.show',compact('idea','editing'));
}


public function update(Request $request, Idea $idea){


        $this->authorize('update', $idea);
        request()->validate([ 'content'=> 'required|min:3|max:200' ]);


        $idea->content = request()->get('content','');
        $idea->save();

        return redirect()->route('ideas.show',$idea->id)->with('success','Idea updated successfully!');

}



}
