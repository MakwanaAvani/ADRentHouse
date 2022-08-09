<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Property;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
        // dd($property);
        //return view('admin.adminrentyourproperty')->with('property', $property);
        return view('admin.adminrentyourproperty', ['property' => $property]);
        //return view('viewhomeapartment', ['property' => $property]);
        //return "$property";
    }
    public function indexview(Request $request)
    {
        $query = Property::query()->where('status', 2);
        $category = Category::all();
        $property = $query->get();
        return view('viewhomeapartment',  compact('category', 'property'));
    }

    public function filter(Request $request)
    {
        //dd($request->all());
        $query = Property::query()->where('status', 2);
        $category = Category::all();

            if (empty($request['categories'])) {
                $property = $query->get();
            } else {
                $property = $query->where('cat_id',$request['categories'])->get();
            }
            return view('viewhomeapartment',  compact('category','property'));
    }
    public function indexvidash()
    {
        $property = Property::all()->where('status', 2)->take(3);
        return view('dashboard', ['property' => $property]);
    }
    public function indexviewhouse($id)
    {
        $property = Property::find($id);

        $profind = Property::where('id', $property->id)->get()->toArray();
        // dd($profind);
        $image = Image::where('post_id', $property->id)->get()->toArray();

        // dd($image);

        return view('viewhouse', compact('image'), ['profind' => $property]); //,'image'=>$ima]);
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
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'addr1' => 'required',
                'addr2' => 'required',
                'rentprice' => 'required',
            ]
        );
        $input = $request->all();

        $about = implode(',', $input['rentout']);
        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $imagename = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path('/cover/'), $imagename);

            $property = [
                "cat_id" => $request->rentype,
                "owner_name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "addr1" => $request->addr1,
                "addr2" => $request->addr2,
                "room" => $request->room,
                "floor" => $request->floor,
                "age_property" => $request->age,
                "rent_out" => $about,
                "price" => $request->rentprice,
                "about_property" => $request->aboutpeoperty,
                "cover" => $imagename,
                "user_id" => Auth::user()->id,
                "status" => 1,

            ];
        };
        $new_property = Property::create($property);
        // dd($new_property);
        // $property=new Property();
        if ($request->hasfile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $imagename = time() . '_' . $file->getClientOriginalName();
                $image['post_id'] = $new_property->id;
                $image['image'] = $imagename;
                $file->move(\public_path('/rental/'), $imagename);
                Image::create($image);
            }
        }

        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        $property = Property::find();
        return view('viewhomeapartment', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        return view('admin.editrentyourproperty', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->status = $request->status == true ? '2' : '1';
        $property->update();
        // dd($property);
        return redirect(route('admin.adminrentyourproperty'));
        // return view('admin.adminrentyourproperty')->with('status', 'Status update Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        $property->delete();

        return redirect()->route('admin.adminrentyourproperty')
            ->with('success', 'Product deleted successfully');
    }
}
