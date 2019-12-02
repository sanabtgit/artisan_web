<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\artisan;
use App\delegation;



class artisanController extends Controller
{
    public function index($nom = null)
    {
      $artisan = artisan::all();//orderBy('nom','desc')->orderBy('created_at','desc')->paginate('3');
       //$produits = produit::paginate(5);
        return view('admin.artisan.index')->with ('tartisan',$artisan);//compact('produits'););

        
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response*/
    
    public function create()
    {
        $tdelegation = delegation::all()->pluck('nom','id');
        return view ('admin.artisan.create',compact('tdelegation'));
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
            'bprenom' => 'required',
            'baddress' => 'required',
            'delegation_id' => 'required',
            'bface' => 'required',
            'btwitt' => 'required',
            'bemail' => 'required',
        ]);
        
       $martisan = new artisan;
        $martisan->nom = $request->input('bnom');
        $martisan->prenom = $request->input('bprenom');
        $martisan->email = $request->input('bemail');
          $martisan->address = $request->input('baddress');
        $martisan->delegation_id = $request->input('delegation_id');
       $martisan->face = $request->input('bface');
       $martisan->twitt = $request->input('btwitt');
      
       $martisan->save();
        
     dd( $martisan); 
        return redirect('admin/artisan');
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
        $martisan = artisan::find($id);
        $tdelegation = delegation::all()->pluck('nom','id');
       
       
        return view ('admin.artisan.edit')->with('edartisan',$martisan,'tdelegation');

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
            'bprenom' => 'required',
            'baddress' => 'required',
            'delegation_id' => 'required',
            'bface' => 'required',
            'btwitt' => 'required',
            'bemail' => 'required',
            
        ]);
        $tdelegation = delegation::all()->pluck('nom','id');
        $martisan = artisan::find($id);
        $martisan->nom = $request->input('bnom');
        $martisan->prenom = $request->input('bprenom');
        $martisan->email = $request->input('bemail');
        $martisan->address = $request->input('baddress');
        $martisan->delegation_id = $request->input('delegation_id');
        $martisan->face = $request->input('bface');
        $martisan->twitt = $request->input('btwitt');
        
        $martisan->save();
       
        return redirect('admin/artisan');
       
      
     
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        
        $martisan = artisan::find($id);
        $martisan->delete();
        return redirect('admin/artisan');//->with('success','Chauffeur supprimé !');

    } 
}