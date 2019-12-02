<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\client;




class clientController extends Controller
{
    public function index()
    {
       $clients = client::all();//orderBy('nom','desc')->orderBy('created_at','desc')->paginate('3');
       
        return view('admin.client.index')->with ('tclient',$clients);
    }
   /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
       
        return view ('admin.client.create');
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
            'blogin' => 'required',
            'bpasswd' => 'required',
            'btel' => 'required',
            'bemail' => 'required',
            'baddres' => 'required',
        ]);
	
        /*id
        nom
        prenom
        login
        passwd
        email
        address
        tel
       */
        $mclient = new client;
        $mclient->nom = $request->input('bnom');
        $mclient->prenom = $request->input('bprenom');
        $mclient->login = $request->input('blogin');
        $mclient->passwd = $request->input('bpasswd');
        $mclient->email = $request->input('bemail');
        $mclient->address = $request->input('baddres');
        $mclient->tel = $request->input('btel');
        $mclient->save();
       
        return redirect('admin/client');
    }
  
    /*
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        //
    }*/

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mclient = client::find($id);
        return view ('admin.client.edit')->with('edclient',$mclient);

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
            'blogin' => 'required',
            'bpasswd' => 'required',
            'btel' => 'required',
            'bemail' => 'required',
            'baddres' => 'required',
            
        ]);

        $mclient = client::find($id);
        $mclient->nom = $request->input('bnom');
        $mclient->prenom = $request->input('bprenom');
        $mclient->login = $request->input('blogin');
        $mclient->passwd = $request->input('bpasswd');
        $mclient->email = $request->input('bemail');
        $mclient->address = $request->input('baddres');
        $mclient->tel = $request->input('btel');
        $mclient->save();
       
        return redirect('admin/client');

    } 

    
    public function destroy($id)
    {
        
        $mclient = client::find($id);
        $mclient->delete();
        return redirect('admin/client');//->with('success','Chauffeur supprimé !');

    }
}