<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Http\Controllers\Controller;
use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $current_date = Carbon::now()->toDateString('Y-m-d');

        if ($request->ajax()) {
            // $data = Slider::select('*')->where('status', 1)->where('publish_date', '<=', $current_date)->get();
            $data = Slider::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('slider', function ($row) {
                    return '<div class="d-flex align-items-center">
                    <a class="symbol symbol-50px">
                        <span class="symbol-label"
                            style="background-image:url( ' . Storage::url($row->image)  . ');"></span>
                    </a>
                    <div class="ms-5">
                        <a class="text-gray-800 text-hover-primary fs-5 fw-bolder">' . $row->getTitleAttribute() . '</a>
                            <div class="text-muted fs-7 fw-bolder">' . $row->getDescriptionAttribute() . '</div>
                    </div>
                </div>';
                })
                ->addColumn('status', function ($row) {
                    return $row->getIsActiveAttribute();
                })
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/slider/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           ' . trans("general.edit") . '
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteSlider(' . $row->id . ',this)">
                       ' . trans("general.delete") . '</button>';
                })
                ->rawColumns(['action', 'slider', 'status'])
                ->make(true);
        }

        return response()->view('dashboard.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $is_saved = Slider::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return response()->view('dashboard.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $is_updated = $slider->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $is_deleted = $slider->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$slider->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
