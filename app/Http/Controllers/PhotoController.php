<?php

namespace App\Http\Controllers;

use App\Models\imageCaption;
use App\Models\photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    // show photos page //
    public function index()
    {
        $data['title'] = "Photo";
        $data['edit_caption'] = '';
        return view('admin.photo', $data);
    }

    // add photos //
    public function addPhotos(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => "required|unique:image_captions",
            'date' => "required",
            'image' => "required|",
        ]);
        $data = new imageCaption();
        $data['title'] = $request->input('title');
        $data['date'] = $request->input('date');
        $data->save();
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $file->move(public_path('uploadphoto/'), $filename);

                DB::table('photos')->insert([
                    'img_caption_id' => $data->id,
                    'image' => $filename,
                ]);
            }
        }
        $data1['slug'] = str_replace(' ', '-', $request->title) . '-' . $data->id;
        imageCaption::where('id', $data->id)->update($data1);
        return redirect('photo')->with('success', "Captions inserted successfully");
    }

    // list photos //
    public function showPhotos(Request $request)
    { {
            if ($request->ajax()) {
                $data = imageCaption::select('id', 'title', 'date', 'status')->orderBy('id','desc')->get();
                return Datatables::of($data)
                    ->addColumn('action', function ($row) {
                        $btn = '<a href="editPhotos' . $row->id . '" ><i class="fa fa-edit"></i></a>';
                        $btnDelete = ' <a href="#" class="text-denger" onClick = "deleteData(\'' . $row->id . '\')"><i class="fa fa-trash" style="color:#f5325c"></i></a>';
                        $btnView = ' <a href="#" onClick = "imageData(\'' . $row->id . '\')"><i class="fa fa-eye"></i></a>';
                        $btnAdd = ' <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" onClick="addImg(\'' . $row->id . '\')"><i class="fa fa-plus"></i> </button>';
                        return $btn . '' . $btnDelete . '' . $btnView . '' . $btnAdd;
                    })
                    ->addColumn('status', function ($row) {
                        
                        
                        $imgCount = Photo::where('img_caption_id', $row->id)->count();
                        if ($imgCount == 0) {
                            $disable = "disabled";
                        } else {
                            $disable = "";
                        }


                        if ($row->status == '1') {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        
                        
                        $btn = '
                        <label class="form-check form-switch">
                          <input class="form-check-input" type="checkbox"
                          onClick="statusData(\'' . $row->id . '\')" ' . $checked  . $disable . '>
                           </label>';
                        return $btn;
                        
                    })
                    ->addIndexColumn()
                    ->rawColumns(['action', 'status'])
                    ->make(true);
            }
            return redirect('photo');
        }
    }

    // list of images //
    public function listImage($id)
    {
        $images = photo::where('img_caption_id', $id)->select('*')->get();
        foreach ($images as $img) {
?>
            <div class="col-3 " id="delete_image_<?php echo $img->id; ?>">
                <div class="trash text-end">
                    <a href="#" onclick="delImage(<?php echo $img->id; ?>);"><i class="fa fa-times"></i></a>
                </div>
                <div class="card shadow mt-1">

                    <div class="img-g card-body ">

                        <img src="<?php echo ('uploadphoto/') . $img->image; ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
<?php
        }
    }

    //edit photos //
    public function editPhotos($id)
    {
        $data['title'] = "Photo";
        $data['edit_caption'] = imageCaption::where('id', $id)->first();
        return view('admin.photo', $data);
    }


    // update photos //
    public function updatePhotos(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $match_title = imageCaption::where('title', $title)->where('id', '!=', $id)->first();
        if ($match_title) {
            return redirect('editPhotos' . $id)->with('error', "Captions title already exists");
        } else {
            $data['title'] = $request->input('title');
            $data['date'] = $request->input('date');
            imageCaption::where('id', $id)->update($data);
            return redirect('photo')->with('success', "Captions updated successfully");
        }
    }

    // status photos //
    public function statusPhotos($id)
    {
        $data = imageCaption::select('status')->where('id', $id)->first();
        if ($data->status == '1') {
            $user['status'] = '0';
        } else {
            $user['status'] = '1';
        }
        imageCaption::where('id', $id)->update($user);
    }



    // delete photos //
    public function deletePhotos($id)
    {
        $photos = Photo::where('img_caption_id', $id)->get();
        foreach ($photos as $value) {
            $file_path = public_path('uploadphoto/' . $value->image);

            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $value->delete();
        }
        ImageCaption::where('id', $id)->delete();
        return redirect('photo')->with('success', ' Photos deleted successfully');
    }

    public function delPhotos($id)
    {
        $photosget = Photo::select('img_caption_id')->where('id', $id)->first();
        $img_caption_id = $photosget->img_caption_id;
        photo::where('id', $id)->delete();
        $val = Photo::where('img_caption_id', $img_caption_id)->count();
        if($val== 0){
            $user['status'] = '0';
            imageCaption::where('id', $img_caption_id)->update($user);
            
        }
    }

    public function addImage(Request $request)
    {
        $id = $request->img_id;
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $name = $file->getClientOriginalName();
                $filename = $request['name'] . '_' . str_replace(' ', '_', $name);
                $file->move(public_path('uploadphoto/'), $filename);
                DB::table('photos')->insert([
                    'img_caption_id' => $id,
                    'image' => $filename,
                ]);
            }
        }
        return redirect('photo');
    }
}
