<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\produit;
use App\categorie;
use App\artisan;
class produitController extends Controller
{
    public function index(Request $request)
    { 
        $dbproduits =\DB::select("SELECT 
        produits.*,
        artisans.nom  as nomart,
        artisans.prenom  as prenomart,
        categories.nom as nomcat 
        FROM produits , artisans,categories
        WHERE artisans.id=produits.artisan_id
         and categories.id=produits.categorie_id");
        return view('admin.produit.index',  compact('dbproduits',$dbproduits)); 
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
                'imagepro'=>'image|nullable|max:10000'
                 ]);
            if ($request->hasFile('imagepro')){
                $fichiercoplet=$request->file('imagepro')->getClientOriginalName();
                $nomfichier=pathinfo($fichiercoplet,PATHINFO_FILENAME);
                $extfichier=$request->file('imagepro')->getClientOriginalExtension();
                $fichier=$nomfichier.'-'.time().'.'.$extfichier;
                $chemin=$request->file('imagepro')->storeAs('public',$fichier);
            }else{
                $fichier='unnamed.jpg';
            }
             $mproduit = new produit;
            $mproduit->nom = $request->input('bnom');
            $mproduit->description = $request->input('bdescription');
            $mproduit->categorie_id = $request->input('categorie_id');
            $mproduit->artisan_id = $request->input('artisan_id');  
           $mproduit->imagepro =$fichier;
            $mproduit->save();
            return redirect('admin/produit')->with('success','produit ajouté');

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
         
            
        ]);
    

        $mproduit = produit::find($id);
        $mproduit->nom = $request->input('bnom');
        $mproduit->description = $request->input('bdescription');
      //  $mproduit->imagepro = $request->input('bimage');
        
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