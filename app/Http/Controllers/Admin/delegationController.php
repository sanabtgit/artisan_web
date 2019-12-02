<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\delegation;
class delegationController extends Controller
{
    public function index($nom = null)
    {
       $delegations = delegation::all();//orderBy('nom','desc')->orderBy('created_at','desc')->paginate('3');
       
        return view('admin.delegation.index')->with ('tdelegations',$delegations);//compact('produits'););

       
    }
   /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
       
        return view ('admin.delegation.create');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'bnom' => 'required',
            
            
        ]);

        $mdelegation = new delegation;
        $mdelegation->nom = $request->input('bnom');
     
        
        $mdelegation->save();
       
        return redirect('admin/delegation');
    }
  
    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mdelegation = delegation::find($id);
        return view ('admin.delegation.edit')->with('eddelegation',$mdelegation);

    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'bnom' => 'required',
            
        ]);

        $mdelegation = delegation::find($id);
        $mdelegation->nom = $request->input('bnom');
      ;
        
        $mdelegation->save();
       
        return redirect('admin/delegation');

    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        
        $mdelegation = delegation::find($id);
        $mdelegation->delete();
        return redirect('admin/delegation');//->with('success','Chauffeur supprimé !');

    } 
}
