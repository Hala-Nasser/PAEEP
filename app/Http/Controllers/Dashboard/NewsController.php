<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = News::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('news', function ($row) {
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
                ->addColumn('location', function ($row) {
                    return '<span class="fw-bolder text-mute">' . $row->getLocationAttribute() . '</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/news/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           '.trans("general.edit").'
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteNews(' . $row->id . ',this)">
                       '.trans("general.delete").'</button>';
                })
                ->rawColumns(['action', 'news', 'location'])
                ->make(true);
        }

        return response()->view('dashboard.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $is_saved = News::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return response()->view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $is_updated = $news->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $is_deleted = $news->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$news->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
