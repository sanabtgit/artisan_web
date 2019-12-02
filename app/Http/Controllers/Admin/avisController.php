<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\avis;
//use App\{produit,categorie};



class avisController extends Controller
{
    public function index()
    {
       $avis = avis::all();//orderBy('nom','desc')->orderBy('created_at','desc')->paginate('3');
       //$produits = produit::paginate(5);
        return view('admin.avis.index')->with ('tavis',$avis);//compact('produits'););

      
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response*/
    
    public function create()
    {
       
        return view ('admin.avis.create');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {

        $this->validate($request,[
            'bnom' => 'required',
            'bdescription' => 'required',
            'bimage' => 'required',
            
        ]);

        $mproduit = new produit;
        $mproduit->nom = $request->input('bnom');
        $mproduit->description = $request->input('bdescription');
        $mproduit->image = $request->input('bimage');
        
        $mproduit->save();
       
        return redirect('admin/produit');
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
    
    public function edit($id)
    {
        //
        $mproduit = produit::find($id);
        return view ('admin.produit.edit')->with('edproduit',$mproduit);

    }
 */
    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'bnom' => 'required',
            'bdescription' => 'required',
            'bimage' => 'required',
            
        ]);

        $mproduit = produit::find($id);
        $mproduit->nom = $request->input('bnom');
        $mproduit->description = $request->input('bdescription');
        $mproduit->image = $request->input('bimage');
        
        $mproduit->save();
       
        return redirect('admin/produit');

    }
  */
    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    
    public function destroy($id)
    {
        
        $mproduit = produit::find($id);
        $mproduit->delete();
        return redirect('admin/produit');//->with('success','Chauffeur supprimé !');

    }*/
}