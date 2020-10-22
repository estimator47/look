<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;


use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Http\Requests\NewRequest,
   Models\Message,
   Models\Price,
   Models\Info
};

class AdminController extends Controller
{
     use Indexable;
     /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct(AdminRepository $repository)
    {

        //$this->middleware('auth');

        $this->repository = $repository;
        $this->namespace = 'back';
    }

    /**
     * Show the application single news page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsSingle($id, Info $model_info)
    {
        $new = $model_info->find($id);
        return view('back.newssingle', compact('new'));
    }
    /**
     * Create a new view for news in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.news.create');
    }
    /**
     * Upload a new image for new news in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/news/', $filename);
        return view('back.news.create', ['image' => $filename]);
    }
    /**
     * Store a newly created news in storage.
     *
     * @param  \App\Http\Requests\NewRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewRequest $request)
    {
        $this->repository->store($request);

        return redirect(route('news.create'))->with('news-ok', 'Новости добавлены...');
    }
    /**
     * Edit a new view for selected news.
     *
     * @return void
     */
    public function edit($id)
    {
        $new = Info::find($id);
        return view('back.news.edit', compact('new'));
    }


    /**
     * Update selected news.
     *
     * @return void
     */
    public function update(NewRequest $request, $new)  //->find('id')
    {
        $this->repository->updateNews($request, $new);
        return redirect(route('under'))->with('news-updated', 'Новости были изменены');
    }
    /**
     * Delete selected news.
     *
     * @return void
     */
    public function destroy(Request $request, $id)
    {
        $new = Info::find($id);
        $this->repository->delete($new);
        return $this->index($request);
    }

    /**
     * Show the application message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function message(Request $request)
    {
        $messages = $this->repository->funcMessage($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".message-standard", ['messages' => $messages])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.message', ['messages' => $messages]);
    }
    /**
     * Show the application single message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function messageSingle($id, Message $model_message)
    {


        $message = $model_message->find($id);
        $message->bold = "1";
        $message->save();
        return view('back.messagesingle', compact('message'));
    }
    /**
     * Remove one from message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function remove(Request $request)
    {

        Message::find($request->id)->delete();
    }

    /**
     * Show the application Price message page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function priceMessage(Request $request)
    {
        $prices = $this->repository->priceMessage($request);

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".askprice-standard", ['prices' => $prices])->render(),
            ]);
        }

        //submit
        return view($this->namespace . '.askPrice', ['prices' => $prices]);
    }
    /**
     * Remove one from askPrice.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function removePrice(Request $request)
    {

        Price::find($request->id)->delete();
    }


}
