<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use App\Product;
use App\Collection;
use App\Customer;
use Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::find(1);
        return view('admin.index', compact('company'));
    }

    public function webpage()
    {
        $company = Company::find(1);
        $products = Product::all();
        $cheapProducts = Product::where('isOffer', '=', 1)->get();
        $collections = Collection::all();

        //return response()->json(compact('company', 'cheapProducts', 'collections', 'products'), 200);

        return view('webpage.index', compact('company', 'cheapProducts', 'collections', 'products'));   
    }

    public function membership()
    {
        $company = Company::find(1);
        return view('webpage.membership', compact('company'));
    }

    public function catalog()
    {
        $company = Company::find(1);
        return view('webpage.catalog', compact('company'));
    }

    public function register(Request $request)
    {
        $customer               = new Customer();
        $customer->name         = $request->input('name');
        $customer->email        = $request->input('email');
        $customer->telephone    = $request->input('telephone');
        $customer->isAffiliated = 0;

        $customer->save();
        $data = ['name' => $request->input('name'), 'email' => $request->input('email'), 'telephone' => $request->input('telephone')];

        Mail::send('emails.contact', $data, function($message)
        {
            $message->from('pretord@example.com', 'Tienda Pretord');
            $message->to('badillo.oma@outlook.com');
        });

        return redirect('/catalog');
    }

    public function products($collection_id = 0)
    {
        $company = Company::find(1);
        $products = [];
        if($collection_id == 0)
            $products = Product::all();
        else
            $products = Product::where('collection_id', '=', $collection_id)->get();

        return view('webpage.products', compact('products', 'company'));
    }

    public function productDetail($product_id)
    {
        $company = Company::find(1);
        $product = Product::find($product_id);

        return view('webpage.product_detail', compact('product', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = Company::find(1);

        $company->name        = $request->input('name');
        $company->mission = $request->input('mission');
        $company->vision       = $request->input('vision');
        $company->description       = $request->input('description');
        
        if($request->hasFile('logo'))
        {
            if($request->file('logo')->isValid())
            {
                $company->logo       = 'img/page/logo.png';
                $company_logo = $request->file('logo');
                $company_logo->move('img/page', 'logo.png');
            }
        } 
        $company->save();

        return redirect('admin/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
