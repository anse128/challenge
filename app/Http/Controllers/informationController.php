<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\information;
use Illuminate\Http\Request;

class informationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
      

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $information = information::where('LastName', 'LIKE', "%$keyword%")
                ->orWhere('Gender', 'LIKE', "%$keyword%")
                ->orWhere('Age', 'LIKE', "%$keyword%")
                ->orWhere('City', 'LIKE', "%$keyword%")
                ->orWhere('State', 'LIKE', "%$keyword%")
                ->orWhere('Country', 'LIKE', "%$keyword%")
                ->orWhere('MarvelCharacter', 'LIKE', "%$keyword%")
                ->orWhere('MarvelComic', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $information = information::latest()->paginate($perPage);
        }

        return view('information.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('information.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        information::create($requestData);

        return redirect('information')->with('flash_message', 'information added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $information = information::findOrFail($id);

        return view('information.show', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $information = information::findOrFail($id);

        return view('information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $information = information::findOrFail($id);
        $information->update($requestData);

        return redirect('information')->with('flash_message', 'information updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        information::destroy($id);

        return redirect('information')->with('flash_message', 'information deleted!');
    }
}
