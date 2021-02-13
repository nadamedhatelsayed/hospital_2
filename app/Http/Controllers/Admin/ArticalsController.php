<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\ArticalStore;
use App\Models\Artical;
use Illuminate\Http\Request;

class ArticalsController extends Controller
{

    public function index()
    {
        $articals=Artical::all();
        return view('back.Articals.Articals',compact('articals'));
    }


    public function store(ArticalStore $request)
    {
        $validated = $request->validated();
        $Articals = new Artical();

        $Articals->title = ['en' => $request->title_en, 'ar' => $request->title];
        $Articals->description = ['en' => $request->description_en, 'ar' => $request->description];

        if ($img = $request->file('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $img->move('images_admin', $filename);
            $Articals->image = $filename;
        };

        $Articals->save();
        toastr()->success(trans('Articals.messages_insert'));

        return redirect()->back()->with(['Add' => ' Data added succesfully ']);
    }

    public function update(ArticalStore $request )
    {
        try {
            $validated = $request->validated();
            $articals = Artical::findOrFail($request->id);

            $articals->title = ['en' => $request->title_en, 'ar' => $request->title];
            $articals->description = ['en' => $request->description_en, 'ar' => $request->description];
            if ($img = $request->file('image')) {
                $file = $request->file('image');

                $extension = $file->getClientOriginalExtension();
                $filename = md5(time()) . '.' . $extension;
                $img->move('images_admin', $filename);
                $articals->image = $filename;
            }
            $articals->save();

            toastr()->success(trans('Articals.messages_update'));
            return redirect()->route('artical.index');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(Request $request)
    {
        $artical = Artical::findOrFail($request->id)->delete();
        toastr()->error(trans('Articals.messages_delete'));
        return redirect()->route('artical.index');
    }
}
