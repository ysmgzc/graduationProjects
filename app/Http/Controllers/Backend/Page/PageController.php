<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agreement = Agreement::all();
        return view('Backend.Page.page_list', compact('agreement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Page.page_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Agreement::where('id', base64_decode($id))->first();
        return view('Backend.Page.page_edit', compact('page'));
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
        $page = Agreement::find($id);
        if($page)
        {
            $page = Agreement::where('id', $id)->first();
            $page->title = $request->title;
            $page->content =  $request->content;
            $page->status = ($request->status == 'on') ? 1 : 0 ;
            $page->description = $request->description;
            $page->keywords = $request->keywords;
            $page->updated_at = now();

            $page->save();

            toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
            return redirect()->route('sozlesme.index');
        }
        else
        {
            toastError('Böyle bir sayfa bulunamadı');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Agreement::find(base64_decode($id));
        if ($page)
        {
            $page = Agreement::where('id', base64_decode(id))->first();
            $page->delete();
            toastSuccess('Başarılı bir şekilde silme işlemi gerçekleştirildi');
            return redirect()->route('sozlesme.index');
        }
        else
        {
            toastError('Böyle bir sayfa bulunamadı');
            return redirect()->back();
        }
    }
}
