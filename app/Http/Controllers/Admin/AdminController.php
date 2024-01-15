<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $blogs = Blog::query()->orderBy('id', 'desc')->paginate(15);

        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.index-standard", compact('blogs'))->render(),
            ]);
        }

        //submit
        return view( 'back.index', compact('blogs'));
    }

    /**
     * @param $id
     * @param Blog $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function singleBlog($id, Blog $blog) {

        $blog  = $blog->find($id);

        return view('back.blog-single', compact('blog') );
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('back.blogs.create');
    }
    // image upload for new blog
    public function uploadImage(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalName();
        Storage::disk('public')->putFileAs('blogs', $image, $imageName);
        $image = 'blogs/'.$imageName;

        return response()->json(['success' => true, 'image' => $image]);
    }

    /**
     * @param BlogRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(BlogRequest $request)
    {
        $blog = new Blog();
        $blog->title_en = $request->title_en;
        $blog->text_en = $request->text_en;
        $blog->title_ru = $request->title_ru;
        $blog->text_ru = $request->text_ru;
        $blog->image = $request->image;
        $blog->video = $request->video;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->save();

        return redirect(route('news'))->with('news-ok', "Новый блог добавлен..");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('back.blogs.edit', compact('blog'));
    }

    /**
     * @param BlogRequest $request
     * @param Blog $blog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $blog->title_en = $request->title_en;
        $blog->text_en = $request->text_en;
        $blog->title_ru = $request->title_ru;
        $blog->text_ru = $request->text_ru;
        // $blog->image = $request->image;
        $blog->video = $request->video;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->save();

        return redirect(route('news'))->with('news-ok', 'Блог было изменено..');
    }


//    public function destroy(Request $request, Blog $blog)
//    {
//        $blog->delete();
//
//        if (Storage::exists('public/' . $blog->image)) {
//            Storage::delete('public/' . $blog->image);
//        }
//
//        return $this->index($request);
//    }

    public function removeBlog(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        $blog->delete();

        if (Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }

        return $this->index($request);
    }


    public function messageList(Request $request)
    {
        $messages = Message::query()->orderBy('id', 'desc')->paginate(15);
        if ($request->ajax()) {
            return response()->json([
                'table' => view( "back.message-standard", compact('messages'))->render(),
            ]);
        }
        //submit
        return view( 'back.message', compact('messages'));
    }

    /**
     * Show the application single message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleMessage($id, Message $model_message)
    {
        $message = $model_message->find($id);
        $message->bold = "1";
        $message->save();
        return view('back.messagesingle', compact('message'));
    }

    /*
    * Remove one from message.
    */
    public function removeMessage(Request $request)
    {

        Message::find($request->id)->delete();
    }
}
