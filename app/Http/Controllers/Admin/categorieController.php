<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\categorie;

class categorieController extends Controller
{
    public function index()
    {
        $categories = categorie::all();//orderBy('nom','desc')->orderBy('created_at','desc')->paginate('3');
       
        return view('admin.categorie_produit.index')->with ('tcategories',$categories);
    }


    public function create()
    {
       
        return  view ('admin.categorie_produit.create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'bnom' => 'required',
            'bdescription' => 'required',
            
        ]);

        $mcategorie = new categorie;
        $mcategorie->nom = $request->input('bnom');
        $mcategorie->description = $request->input('bdescription');
        $mcategorie->save();
        return redirect('admin/categorie_produit');
    }
    public function edit($id)
    {
        //
        $mcategorie = categorie::find($id);
        return view ('admin.categorie_produit.edit')->with('edcategorie',$mcategorie);

    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'bnom' => 'required',
            'bdescription' => 'required',
            
            
        ]);

        $mcategorie = categorie::find($id);
        $mcategorie->nom = $request->input('bnom');
        $mcategorie->description = $request->input('bdescription');
        
        $mcategorie->save();
       
        return redirect('admin/categorie_produit');

    }
    public function destroy($id)
    {
        
        $mcategorie = categorie::find($id);
        $mcategorie->delete();
        return redirect('admin/categorie_produit');//->with('success','Chauffeur supprimé !');*/

    } 
}
