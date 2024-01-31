<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use App\Models\Management;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::query()->paginate();
        $managements = Management::query()->get();

        return view('pages.admin.activities.index', compact('activities', 'managements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityRequest $request)
    {
        $attachment = null;

        if ($request->file('attachment')) {
            $attachment = $request->file('attachment')->store('activities', 'public');
        }

        Activity::create([
            ...$request->except(['attachment', 'is_done']),
            'attachment' => $attachment,
            'is_done' => $request->has('is_done')
        ]);

        return redirect()->back()->with('message', 'تم إضافة النشاط الجديد بنجاح');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('pages.admin.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        $content = $activity;
        $managements = Management::query()->with('user', 'user.user:id,first_name,last_name')->get();

        return view('pages.admin.activities.modal', compact('content', 'managements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(ActivityRequest $request, Activity $activity)
    {
        $attachment = $activity->attachment;

        if ($request->file('attachment')) {
            $attachment = $request->file('attachment')->store('activities', 'public');
        }

        $activity->update([
            ...$request->except(['attachment', 'is_done']),
            'attachment' => $attachment,
            'is_done' => (int)$request->has('is_done')
        ]);

        return redirect()->back()->with('message', 'تم تعديل النشاط بنجاح');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->back()->with('message', 'تم حذف النشاط بنجاح');;
    }
}
