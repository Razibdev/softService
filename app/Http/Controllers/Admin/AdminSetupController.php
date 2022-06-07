<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use Session;
use Validator;
use App\Models\Category;
use App\Models\SpecialLink;
use App\Models\SpecialCategory;
use App\Models\WorkStation;

class AdminSetupController extends Controller
{
    //Special Link
    public function createspeciallink()
    {
        menuSubmenu('variations', 'speciallinks');
        return view('admin.speciallink.create');
    }
    public function storespeciallink(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'linktype' => 'required |unique:special_links,linktype',
        ]);
        $data = new SpecialLink;
        $data->title = $request->title;
        $data->linktype = $request->linktype;
        $data->link = $request->link;
        $data->save();
        return redirect()->route('admin.listspeciallink')->with('success', 'Special Link Added Successfully');
        
    }
    public function editspeciallink($id)
    {
        menuSubmenu('variations', 'speciallinks');
        $data = SpecialLink::find($id);
        //dd($data);
        if (!$data) {
            return redirect()->back()->with('warning', 'No Special Link Found');
        }
        return view('admin.speciallink.edit',compact('data')); 
    }
    public function updatespeciallink(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
            'linktype' => 'required |unique:special_links,linktype',
        ]);
        $data = SpecialLink::where('id',$request->id)->first();
        $data->title = $request->title;
        $data->linktype = $request->linktype;
        $data->link = $request->link;
        $data->save();
        return redirect()->route('admin.listspeciallink')->with('success', 'Special Link Update Successfully');
    }
    public function deletespeciallink($id)
    {
        $data = SpecialLink::where('id',$id)->first();
        $data->delete();
        return redirect()->route('admin.listspeciallink')->with('success', 'Special Link Delete Successfully');
        
    }
    public function listspeciallink()
    {
        menuSubmenu('variations', 'speciallinks');
        $datas = SpecialLink::latest()->paginate(20);

        return view('admin.speciallink.index', [
            'datas' => $datas
        ]);
    }


    //Special Category
    public function createspecialcategory()
    {
        menuSubmenu('variations', 'specialcategories');
        $workstation = WorkStation::where('active', true)->get();
        return view('admin.specialcategory.create',compact('workstation'));
    }
    public function storespecialcategory(Request $request)
    {
        $request->validate([
            'category' => 'required |unique:special_categories,category',
        ]);
        $data = new SpecialCategory;
        $data->category = $request->category;
        $data->workstation = $request->workstation;
        $data->save();
        return redirect()->route('admin.listspecialcategory')->with('success', 'Special Category Added Successfully');
        
    }
    public function editspecialcategory($id)
    {
        menuSubmenu('variations', 'specialcategories');
        $data = SpecialCategory::find($id);
        //dd($data);
        if (!$data) {
            return redirect()->back()->with('warning', 'No Special Category Found');
        }
        return view('admin.specialcategory.edit',compact('data')); 
    }
    public function updatespecialcategory(Request $request)
    {
        $request->validate([
            'category' => 'required |unique:special_categories,category',
        ]);
        $data = SpecialCategory::where('id',$request->id)->first();
        $data->category = $request->category;
        $data->workstation = $request->workstation;
        $data->save();
        return redirect()->route('admin.listspecialcategory')->with('success', 'Special Category Update Successfully');
    }
    public function deletespecialcategory($id)
    {
        $data = SpecialCategory::where('id',$id)->first();
        $data->delete();
        return redirect()->route('admin.listspecialcategory')->with('success', 'Special Category Delete Successfully');
        
    }
    public function listspecialcategory()
    {
        menuSubmenu('variations', 'specialcategories');
        $datas = SpecialCategory::latest()->paginate(20);
        //dd( $datas);

        return view('admin.specialcategory.index', [
            'datas' => $datas
        ]);
    }
}
