<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Menu.submenu_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $menu = Menu::where('subcategory', 0)->get();
        return view('Backend.Menu.submenu_create', compact('menu'));
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
        $menu = Menu::where('id', $request->subcategory)->first();
        $submenu = new Menu;
        $submenu->title = $request->title;
        $submenu->slug = $menu->slug.'-'.Str::slug($request->title);
        $submenu->subcategory = $request->subcategory;
        $submenu->status = ($request->status == 'on') ? 1 : 0 ;
        $submenu->updated_at = now();
        $submenu->save();

        toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir');
        return redirect()->route('submenu.index');
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
        $submenu = Menu::where('id', base64_decode($id))->first();
        $menu = Menu::where('subcategory', 0)->get();
        return view('Backend.Menu.submenu_edit', compact('submenu', 'menu'));
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
            $menu = Menu::where('id', $request->subcategory)->first();
            $submenu = Menu::where('id', $id)->first();
            $submenu->title = $request->title;
            $submenu->slug = $menu->slug.'-'.Str::slug($request->title);
            $submenu->subcategory = $request->subcategory;
            $submenu->status = ($request->status == 'on') ? 1 : 0 ;
            $submenu->updated_at = now();
            $submenu->save();

            toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
            return redirect()->route('submenu.index');
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
        //
    }
}
