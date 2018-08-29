<?php

namespace App\Http\Controllers\User\Family;


use App\Contracts\User\Family\FamilyInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Family\FamilyAddRequest;
use Illuminate\Support\Facades\Auth;


class FamilyController extends Controller
{

    protected $familiRepo;

    public function __construct(FamilyInterface $familiRepo)
    {
        $this->familyRepo  = $familiRepo;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $peoples = $this->familyRepo->getPeoples();
        return view('user.family.family',['peoples' => $peoples]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $peoples = $this->familyRepo->create();
        $select = [];
        foreach($peoples as $people){
            $select[$people->id] = $people->name;
        }
        return view('user.family.create',compact('select'));
    }

    /**
     * @param FamilyAddRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(FamilyAddRequest $request)
    {
        $home = $request->home;
        $people =  $this->familyRepo->store($request->all());
        $people->homes()->sync([$home]);
        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function people($id)
    {
//        dd($id);
        return view('user.family.people');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id)
    {
//        dd($id);
        return view('user.family.update');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete($id)
    {
       $this->familyRepo->delete($id);
       return redirect()->back();
    }
}
