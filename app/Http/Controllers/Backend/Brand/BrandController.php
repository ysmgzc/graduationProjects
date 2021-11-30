<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Brands.brand_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Brands.brand_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ilk defa db ye veri kayır yeri

        if (Auth::check())
        {
            $isExists = Brand::where('slug',Str::slug($request->title))->first();
            if ($isExists)
            {
                toastError('Böyle bir kategori mevcuttur');
                return redirect()->back();
            }
            $brand = new Brand;
            $brand->title = $request->title;
            $brand->slug = Str::slug($request->title);
            $brand->description = $request->description;
            $brand->keywords = $request->keywords;
            $brand->created_at = now();
            $brand->save();
            toastSuccess('Başarılı bir şekilde oluşturuldu.');
            return redirect()->route('marka.index');
        }
        else
        {

            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
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
        // edit sayfası  açılması
        $brand = Brand::where('id', base64_decode($id))->first();
        return view('Backend.Brands.brand_edit', compact('brand'));
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
        // edit den gelen verilerin güncellenmesi yeri
        if (Auth::check())
        {
            $isSlug = Brand::where('slug',Str::slug($request->slug))->whereNotIn('id', [$id])->first();
            $isTitle = Brand::where('title',$request->title)->whereNotIn('id', [$id])->first();
            if ($isTitle or $isSlug)
            {
                toastr()->error($request->title." adında bir marka var.");
                return redirect()->back();
            }

            $brand = Brand::find($id);
            if ($brand)
            {
                $brand = Brand::where('id', $id)->first();
                $brand->title = $request->title;
                $brand->description = $request->description;
                $brand->keywords = $request->keywords;
                $brand->updated_at = now();
                $brand->save();

                toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
                return redirect()->route('marka.index');
            }
            else
            {
                toastError('İlgili Ürün bulunamamıştır.');
                return redirect()->back();
            }
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
        // ilgili kısmı silme işlemi
        if (Auth::check())
        {
            $brand = Brand::find(base64_decode($id));
            $brand->delete();
            return redirect()->route('marka.index');
        }
        else
        {
            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
    }
}
