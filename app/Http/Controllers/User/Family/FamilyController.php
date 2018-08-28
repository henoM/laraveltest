<?php

namespace App\Http\Controllers\User\Family;


use App\Contracts\User\Family\FamilyInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Family\FamilyAddRequest;


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
//        dd(147896325);
        return view('user.family.family');
    }

    public function create()
    {
//        dd(7855);
        return view('user.family.create');
    }
    public function store(FamilyAddRequest $request)
    {

        $this->familyRepo->store($request->all());

        return view('user.family.create');
    }
}
