<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\produit;
use App\categorie;

use App\artisan;


class produitController extends Controller
{
    public function index()
    {
       $produits = produit::all();
        return view('admin.produit.index')->with ('tproduits',$produits);//compact('produits'););

   
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response*/
    
    public function create()
    {
    
        $tartisan = artisan::all()->pluck('nom','id');
        $tcategories = categorie::all()->pluck('nom','id');
        return view ('admin.produit.create',compact('tartisan','tcategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // id	created_at	updated_at	nom	description	image	categorie_id	artisan_id
     
        $this->validate($request,[
            'bnom' => 'required',
            'bdescription' => 'required',
            'bimage' => 'required',
            'categorie_id'=>'required',
            'artisan_id'=>'required'
        ]);

        $mproduit = new produit;
        $mproduit->nom = $request->input('bnom');
        $mproduit->description = $request->input('bdescription');
        $mproduit->image = $request->input('bimage'); 
        $mproduit->categorie_id = $request->input('categorie_id');
        $mproduit->artisan_id = $request->input('artisan_id');      
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
     */
    public function edit($id)
    {
        //
        $mproduit = produit::find($id);
        return view ('admin.produit.edit')->with('edproduit',$mproduit);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response*/
    
    public function destroy($id)
    {
        
        $mproduit = produit::find($id);
        $mproduit->delete();
        return redirect('admin/produit');//->with('success','Chauffeur supprimé !');*/

    } 
}