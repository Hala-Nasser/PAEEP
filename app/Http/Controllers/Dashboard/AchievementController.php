<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Achievement;
use App\Http\Requests\StoreAchievementRequest;
use App\Http\Requests\UpdateAchievementRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Achievement::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('achievement', function ($row) {
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
                ->addColumn('action', function ($row) {
                    return '<a class="btn btn-secondary btn-sm" href="/dashboard/achievement/' . $row->id . '/edit">
                           <i class="fa fa-edit">
                           </i>
                           '.trans("general.edit").'
                       </a>

                       <button class="btn btn-danger btn-sm delete" onclick="DeleteAchievement(' . $row->id . ',this)">
                       '.trans("general.delete").'</button>';
                })
                ->rawColumns(['action', 'achievement'])
                ->make(true);
        }

        return response()->view('dashboard.achievement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('dashboard.achievement.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAchievementRequest $request)
    {
        $is_saved = Achievement::create($request->getData());
        return $is_saved ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return response()->view('dashboard.achievement.edit', compact('achievement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $is_updated = $achievement->update($request->getData());
        return $is_updated ? parent::successResponse() : parent::errorResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        $is_deleted = $achievement->delete();
        if ($is_deleted) {
            Storage::disk('public')->delete("$achievement->image");
            return parent::successResponse();
        } else {
            return parent::errorResponse();
        }
    }
}
