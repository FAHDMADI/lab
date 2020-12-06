<?php

namespace App\Http\Controllers;
use App\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    public function index()
    {
       $instruments = Instrument::all();
	   return view('instrument',['instruments'=>$instruments,'layout'=>'index']);
    }
    /*
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
        $instruments = Instrument::all();
        return view('instrument',['instruments'=>$instruments,'layout'=>'create']);
       /* $students = Student::all() ;
        return view('student',['students'=>$students,'layout'=>'create']);*/
   }
   /** 
   * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instrument = new Instrument();
        
		$instrument->Equipment = $request->input('Equipment');
		$instrument->Manufacturer = $request->input('Manufacturer');
		$instrument->SerialNumber = $request->input('SerialNumber');
		$instrument->ASTM = $request->input('ASTM');
        $instrument->Location = $request->input('Location');
        $instrument->Vendor = $request->input('Vendor');
        $instrument->Contact = $request->input('Contact');
		$instrument->save();
		return redirect('/instrument');
    }
    

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
	
    {
        $instrument = Instrument::find($id);
        $instruments = Instrument::all();
	     return view('instrument',['instruments'=>$instruments,'instrument'=>$instrument,'layout'=>'show']);
    }

    /**  
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $instrument = Instrument::find($id);
    $instruments = Instrument::all();
     return view('instrument',['instruments'=>$instruments,'instrument'=>$instrument,'layout'=>'edit']);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instrument = new Instrument();
        
		$instrument->Equipment = $request->input('Equipment');
		$instrument->Manufacturer = $request->input('Manufacturer');
		$instrument->SerialNumber = $request->input('SerialNumber');
		$instrument->ASTM = $request->input('ASTM');
        $instrument->Location = $request->input('Location');
        $instrument->Vendor = $request->input('Vendor');
        $instrument->Contact = $request->input('Contact');
		$instrument->save();
		return redirect('/instrument');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrument = Instrument::find($id);
		$instrument->delete();
		return redirect('/instrument');
		
    }
}
