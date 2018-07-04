<?php
use Illuminate\Http\Request;
use App\Resume;
use App\Comment;



Route::get('/', function () {
	$re = Resume::all();
	// return $re;
    return view('welcome',compact('re'));
})->name('home1');
Route::post('/', function (Request $r) {
	$re = new Resume;
	$re->name = $r->name;
	$re->description = $r->editor1;
	$re->save();
    return redirect(route('home1'));
})->name('post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::post('/update', 'HomeController@update')->name('update');
Route::get('/home/editdoc', 'HomeController@editdoc');
Route::post('/docupdate', 'HomeController@docupdate')->name('docupdate');
Route::get('/comment/{id}', function ($id) {
	$re = Resume::where('id',$id)->get()[0];
	$com = Comment::where('resume_id',$id)->get();
    return (view('comments',compact('com','re')));
});

Route::post('/comment', function (Request $r) {
	$com = new Comment();
	$com->description = $r->all()["editor1"];
	$com->resume_id = $r->all()["id"];
	$com->save();
	return Redirect::back();
})->name('comment');