<?php 

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Http\Resources\SkillCollection;
use App\Http\Controllers\SkillResources;
use App\Http\Resources\SkillResources as ResourcesSkillResources;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new SkillCollection(Skill::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        return response()->json('Skill Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return new ResourcesSkillResources($skill);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return response()->json('Skill Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json('Skill Delete');
    }
}
?>