<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Menu.menu_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Menu.menu_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isExists = Menu::where('slug',Str::slug($request->title))->first();
        if ($isExists)
        {
            toastError('Böyle bir kategori mevcuttur');
            return redirect()->back();
        }
        $menu = new Menu;
        $menu->title = $request->title;
        $menu->slug = Str::slug($request->title);
        $menu->subcategory = 0;
        $menu->status = ($request->status == 'on') ? 1 : 0 ;
        $menu->save();
        toastSuccess('Başarılı bir şekilde ekleme işlemini gerçekleştirdiniz.');
        return redirect()->route('menu.index');

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
        $menu = Menu::where('id', base64_decode($id))->first();
        return view('Backend.Menu.menu_edit', compact('menu'));
        //
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


        // ilgili kategorimiz disinda demek(belirtilen id dışındaki veriler üzerinde arama yapar ve sonuç döndürür) whereNotIn
        $isSlug = Menu::where('slug',Str::slug($request->slug))->whereNotIn('id', [$id])->first();
        $isTitle = Menu::where('title',$request->title)->whereNotIn('id', [$id])->first();
        if ($isTitle or $isSlug)
        {
            toastr()->error($request->title." adında bir kategori var.");
            return redirect()->back();
        }

        $menu = Menu::find($id);
        if($menu)
        {
            $menu = Menu::where('id', $id)->first();
            $menu->title = $request->title;
            $menu->slug = Str::slug($request->title);
            $menu->subcategory = 0;
            $menu->status = ($request->status == 'on') ? 1 : 0 ;
            $menu->updated_at = now();

            $menu->save();

            toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
            return redirect()->route('menu.index');
        }
        else
        {
            toastError('Böyle bir sayfa bulunamadı');
            return redirect()->back();
        }return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
