<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\VisualLibrary;
use App\Http\Requests\StoreVisualLibraryRequest;
use App\Http\Requests\UpdateVisualLibraryRequest;
use App\Http\Controllers\Controller;
use App\Models\VisualLibraryMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class VisualLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = VisualLibrary::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('visual-library', function ($row) {
                    return '<div class="d-flex align-items-center">
                    <a class="symbol symbol-50px">
                        <span class="symbol-label"
                            style="background-image:url( ' . Storage::url($row->image)  . ');"></span>
                    </a>
                    <div class="ms-5">
                        <a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->getTitleAttribute() . '</a>
                    </div>
                </div>';
                })
                ->addColumn('description', function ($row) {
                    return '<span class="fw-bolder text-mute">' . $row->getDescriptionAttribute() . '</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/visual-library/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           ' . trans("general.edit") . '
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteVisualLibrary(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'visual-library', 'description'])
                ->make(true);
        }

        return response()->view('dashboard.visual-library.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.visual-library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisualLibraryRequest $request)
    {
        $is_saved = VisualLibrary::create($request->getData());
        if ($is_saved) {
            if ($request['images']) {
                $images = [];
                foreach ($request['images'] as $image) {
                    $imageName = time() . "" . random_int(1, 999999) . '.' . $image->getClientOriginalExtension();
                    $image->storePubliclyAs('VisualLibrary', $imageName, ['disk' => 'public']);
                    $media = new VisualLibraryMedia();
                    $media->visual_library_id = $is_saved->id;
                    $media->image = 'VisualLibrary/' . $imageName;
                    $images[] = $media;
                }
                $is_saved->media()->saveMany($images);
            }
        }
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(VisualLibrary $visualLibrary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisualLibrary $visualLibrary)
    {
        return response()->view('dashboard.visual-library.edit', compact('visualLibrary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisualLibraryRequest $request, VisualLibrary $visualLibrary)
    {
        $is_updated = $visualLibrary->update($request->getData());
        if ($is_updated) {
            if ($request['images']) {
                foreach ($request['images'] as $image) {
                    $imageName = time() . "" . random_int(1, 999999) . '.' . $image->getClientOriginalExtension();
                    $image->storePubliclyAs('VisualLibrary', $imageName, ['disk' => 'public']);
                    $media = new VisualLibraryMedia();
                    $media->visual_library_id = $visualLibrary->id;
                    $media->image = 'VisualLibrary/' . $imageName;
                    $media->save();
                }
            }
        }
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisualLibrary $visualLibrary)
    {
        foreach ($visualLibrary->media as $media) {
            $media_deleted = $media->delete();
            if ($media_deleted) {
                Storage::disk('public')->delete("$media->image");
            }
        }
        $deleted = $visualLibrary->delete();
        if ($deleted) {
            Storage::disk('public')->delete("$visualLibrary->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }

    public function deleteMedia(VisualLibraryMedia $visual_library_media){
        $deleted = $visual_library_media->delete();
        if ($deleted) {
            Storage::disk('public')->delete("$visual_library_media->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
