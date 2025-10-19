<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{


    // validation 





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Recentjobs = Job::latest()->with(['employer','tags'])->get();
        $Featuredjobs = Job::where('featured',true)->latest()->with(['employer','tags'])->get();
        return view('jobs.index',[
            'featuredjobs' => $Featuredjobs ?? [] ,
            'jobs' => $Recentjobs ?? [],
            'tags' => Tag::all(), 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $attr =     $request->validate([
            'title' => 'required|string|max:255',
            'salary' => ['required'],
            'location' => 'required|string|max:255',
            'schedule' => ['required', Rule::in(['Full Time','Part Time'])],
            'workType' => ['required', Rule::in(['OnSite','Hybrid','Remote'])],
            'experienceLevel' => ['required', Rule::in(['fresher','internship','entry-level','mid-level','senior'])],
            'url' => ['required','active_url'],
            'description' => ['required','string'],
            'responsibility' => ['required','string'],
            'requirement_skills' => ['required','string'],
            'benefits' => ['required','string'],
            'tags' => ['nullable'],
        ]); 

        $attr['featured'] = $request->has('featured') ;

        // $employer = Auth::user()->employer;
        // abort_unless($employer,403,"You must be an employer to post a job");
        $job = Auth::user()->employer->jobs()->create(Arr::except($attr,'tags'));

        if($attr['tags'] ?? false){
            $tags =  explode(',',$attr['tags']);
            // normalised tag and remove duplicates
            $normalised = [];

            foreach($tags as $tag){
                $clean = strtolower(trim($tag));
                $clean = preg_replace('/[^a-z0-9]/', '', $clean);
                $normalised[$clean] = $tag ;
            }
            foreach ($normalised as $tag ) {
                $job->tag($tag);
            }
        }

        return redirect('/jobs/'.$job->id)->with('success','Job posted successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show',[
            'job'=>$job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit',[
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
