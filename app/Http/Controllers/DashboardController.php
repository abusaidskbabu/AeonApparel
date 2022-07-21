<?php

namespace App\Http\Controllers;

use App\Career;
use App\ClientFile;
use App\Partner;
use App\PartnerFile;
use App\product_gender;
use App\Slider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\team_member;
use App\Service;
use App\Client;
use App\Factory;
use App\Showrooms;
use App\PageCms;
use App\product_category;
use App\product_division;
use App\Product;
use App\User;
use App\Blog;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard')->with('title', 'Dashboard');
    }

    //sliders
    public function sliders_index()
    {
        $sliders = Slider::all();

        //return $sliders;
        return view('backend.sliders.index')->with('title', 'Sliders')->with('sliders', $sliders);
    }
    public function sliders_create()
    {
        return view('backend.sliders.create')->with('title', 'Create Slider');
    }
    public function sliders_insert(Request $request)
    {
        $this->validate($request,
            [
                'file' => 'max:5000|required',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('frontend/img/slides', $filename);
            $filename = 'frontend/img/slides/'.$filename;

            $insert = Slider::create([
                'heading' => $request->heading,
                'year_1st' => $request->year_1st,
                'year_2nd' => $request->year_2nd,
                'span_text' => $request->span_text,
                'image' => $filename
            ]);
        }
        return redirect()->route('sliders.index')->with('success', 'Slider Has Been Created !');

    }


    public function sliders_remove($id)
    {
        $data = Slider::findOrFail($id);
        if($data->image != null){
            File::delete($data->image);
        }
        $data->delete();
        return redirect()->route('sliders.index')->with('success', 'Slider Has Been Deleted !');
    }


    public function item_slider_index(){

        $item_sliders = DB::table('item_sliders')->get();
        return view('backend.sliders.item-sliders')->with('title', 'Item Sliders')->with('item_sliders', $item_sliders);
    }

    public function item_slider_create(){

        return view('backend.sliders.item-slider-create')->with('title', 'Item Slider Create');
    }

    public function item_slider_store(Request $request)
    {
        $this->validate($request,
            [
                'file' => 'max:5000|required',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('frontend/img/slides', $filename);
            $filename = 'frontend/img/slides/'.$filename;

            DB::table('item_sliders')->insert([
                'image' => $filename
            ]);
        }
        return redirect()->route('item.sliders.index')->with('success', 'Slider Has Been Created !');

    }

    public function item_slider_remove($id)
    {
        $data = DB::table('item_sliders')->where('id',$id)->first();
        if($data->image != null){
            File::delete($data->image);
        }
        DB::table('item_sliders')->where('id', $id)->delete();
        return redirect()->route('item.sliders.index')->with('success', 'Slider Has Been Deleted !');
    }

    public function teammember_index()
    {
        $members = team_member::all();
        return view('backend.team_members')->with('title', 'Team Members')->with('members', $members);
    }
    public function teammember_create()
    {
        return view('backend.team_member_create')->with('title', 'Add Member');
    }
    public function teammember_post(Request $request)
    {
        //return $request;
        $this->validate($request,
        [
            'name' => 'required',
            'designation' => 'required',
            'file' => 'max:1096',
            'sort_number' => 'required | numeric',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);

            $insert = team_member::create([
                'name'=>$request->name,
                'designation'=>$request->designation,
                'image'=>'uploads/'.$filename,
                'linkedin'=>$request->linkedin,
                'facebook'=>$request->facebook,
                'sort_number'=>$request->sort_number,
                'status'=>$request->state,
            ]);
        }
        else{
            $insert = team_member::create([
                'name'=>$request->name,
                'designation'=>$request->designation,
                'image'=>$request->file,
                'linkedin'=>$request->linkedin,
                'facebook'=>$request->facebook,
                'sort_number'=>$request->sort_number,
                'status'=>$request->state,
            ]);
        }

        return redirect('/dashboard/teammembers')->with('success', 'Member Has Been Added');
    }
    public function teammember_view($id)
    {
        try {
            $member = team_member::findOrFail($id);
            return view('backend.team.view')->with('title', 'View Member')->with('data', $member);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
        //return $member;
        //return view('backend.team.view')->with('title', 'View Member')->with('data', $member);
    }
    public function teammember_edit($id)
    {
        $member = team_member::findOrFail($id);
        //return $member;
        return view('backend.team.edit')->with('title', 'Edit Member')->with('data', $member);
    }
    public function teammember_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'name' => 'required',
            'designation' => 'required',
            'file' => 'max:1096',
            'sort_number' => 'required | numeric',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
        $member = team_member::findOrFail($id);
        //return $member;
        if($member == null){
            return redirect()->back();
        }
        if($request->file == null){
            $member->name = $request->name;
            $member->designation = $request->designation;
            $member->image = $request->prev_img;
            $member->linkedin = $request->linkedin;
            $member->facebook = $request->facebook;
            $member->sort_number = $request->sort_number;
            $member->status = $request->state;
            $member->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);

                $member->name = $request->name;
                $member->designation = $request->designation;
                $member->image = 'uploads/'.$filename;
                $member->linkedin = $request->linkedin;
                $member->facebook = $request->facebook;
                $member->sort_number = $request->sort_number;
                $member->status = $request->state;
                $member->save();
            }
        }
        return redirect('/dashboard/teammembers')->with('success', 'Member has been Edited !');
    }
    public function teammember_delete($id)
    {
        $member = team_member::findOrFail($id);
        //return $member;
        return view('backend.team.delete')->with('title', 'Delete Member')->with('data', $member);
    }
    public function teammember_remove($id)
    {
        $member = team_member::findOrFail($id);
        if($member->image != null){
            File::delete($member->image);
        }
        $member->delete();
        return redirect('/dashboard/teammembers')->with('success', 'Member has been Deleted !');
    }
    public function services_index()
    {
        $service = Service::all();
        return view('backend.services.index')->with('title', 'Services Information')->with('data', $service);
    }
    public function services_create()
    {
        return view('backend.services.create')->with('title', 'Create Services');
    }
    public function services_insert(Request $request)
    {
        // echo $request->icon_2;
        // var_dump($request->icon_2);
        // exit();
        //return $request;
        $this->validate($request,
        [
            'title' => 'required',
            'file' => 'required|max:1096',
            'overview' => 'required',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        //return $request->file('file');
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);
        }
        $insert = Service::create([
            'title'=>$request->title,
            'icon_2'=>$request->icon_2,
            'icon'=>'uploads/'.$filename,
            'overview'=>$request->overview,
            'status'=>$request->state,
        ]);
        return redirect('/dashboard/servicesinformation')->with('success', 'Service Has Been Created !');
    }
    public function services_view($id)
    {
        $service = Service::findOrFail($id);
        //return $member;
        return view('backend.services.view')->with('title', 'View Services')->with('data', $service);
    }
    public function services_edit($id)
    {
        $data = Service::findOrFail($id);
        //return $member;
        return view('backend.services.edit')->with('title', 'Edit Service')->with('data', $data);
    }
    public function services_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'title' => 'required',
            'file' => 'max:1096',
            'overview' => 'required',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        $data = Service::findOrFail($id);
        //return $member;
        if($request->file == null){
            $data->title = $request->title;
            $data->icon_2 = $request->icon_2;
            $data->icon = $request->prev_img;
            $data->status = $request->state;
            $data->overview = $request->overview;
            $data->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);
                $data->title = $request->title;
                $data->icon_2 = $request->icon_2;
                $data->icon = 'uploads/'.$filename;
                $data->status = $request->state;
                $data->overview = $request->overview;
                $data->save();
            }
        }
        return redirect('/dashboard/servicesinformation')->with('success', 'Service has been Edited !');
    }
    public function services_delete($id)
    {
        $data = Service::findOrFail($id);
        //return $member;
        return view('backend.services.delete')->with('title', 'Delete Service')->with('data', $data);
    }
    public function services_remove($id)
    {
        $data = Service::findOrFail($id);
        if($data->icon != null){
            File::delete($data->icon);
        }
        $data->delete();
        return redirect('/dashboard/servicesinformation')->with('success', 'Service has been Deleted !');
    }

    // clients

    public function ourclients_index()
    {
        $client = Client::all();
        return view('backend.clients.index')->with('title', 'Our Clients')->with('data', $client);
    }
    public function ourclients_create()
    {
        return view('backend.clients.create')->with('title', 'Create Clients');
    }
    public function ourclients_insert(Request $request)
    {
        //return $request;
        $this->validate($request,
        [
            'name' => 'required',
            'file' => 'max:1096|required',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $image = $request->file('file');
        $filename = time().uniqid().$image->getClientOriginalName();
        $image->move('uploads', $filename);

        $insert = Client::create([
            'name'=>$request->name,
            'image'=>'uploads/'.$filename,
            'status'=>$request->state,
        ]);

        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move('backend/clients/', $filename);
                $filename = 'backend/clients/' . $filename;

                ClientFile::create([
                   'client_id' => $insert->id,
                   'file' => $filename
                ]);

            }
        }


        return redirect('/dashboard/ourclients')->with('success', 'Client Has Been Created !');
    }
    public function ourclients_view($id)
    {
        $client = Client::findOrFail($id);
        return view('backend.clients.view')->with('title', 'View Client')->with('data', $client);
    }
    public function ourclients_edit($id)
    {
        $data = Client::findOrFail($id);
        //return $member;
        return view('backend.clients.edit')->with('title', 'Edit Client')->with('data', $data);
    }
    public function ourclients_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'name' => 'required',
            'file' => 'max:1096',
            'state' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        $data = Client::findOrFail($id);
        //return $member;
        if($request->file == null){
            $data->name = $request->name;
            $data->image = $request->prev_img;
            $data->status = $request->state;
            $data->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);

                $data->name = $request->name;
                $data->image = 'uploads/'.$filename;
                $data->status = $request->state;
                $data->save();
            }
        }
        return redirect('/dashboard/ourclients')->with('success', 'Client Has Been Edited !');
    }
    public function ourclients_delete($id)
    {
        $data = Client::findOrFail($id);
        return view('backend.clients.delete')->with('title', 'Delete Client')->with('data', $data);
    }
    public function ourclients_remove($id)
    {
        $data = Client::findOrFail($id);
        if($data->image != null){
            File::delete($data->image);
        }

        $client_files = ClientFile::where('client_id', $id);

        if ($client_files != null) {
            foreach ($client_files as $file) {
                File::delete($file->file);
            }
        }


        $data->delete();
        return redirect('/dashboard/ourclients')->with('success', 'Client Has Been Deleted !');
    }


    // factory
    public function factory_index()
    {
        $client = Factory::all();
        return view('backend.factory.index')->with('title', 'Our Factory')->with('data', $client);
    }
    public function factory_create()
    {
        return view('backend.factory.create')->with('title', 'Create Factory');
    }
    public function factory_insert(Request $request)
    {
        //return $request;
        $this->validate($request,
        [
            'title' => 'required',
            'file' => 'required',

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
       

        $image = $request->file('file');
        $filename = time().uniqid().$image->getClientOriginalName();
        $image->move('uploads', $filename);

        $worker = '';
        $galleries = '';
        if ($request->hasFile('workers')) {
            foreach ($request->file('workers') as $file) {
                $workers = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/factories/', $workers);
                $worker .=$workers.',';
            }
        }

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $gallery = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/factories/', $gallery);
                $galleries .= $gallery.',';
            }
        }

        $factory = new Factory();
        $factory->title = $request->title;
        $factory->location= $request->location;
        $factory->machineries = $request->machineries;
        $factory->banner = 'uploads/'.$filename;
        $factory->workers = $worker;
        $factory->gallery = $galleries;
        $factory->save();

        return redirect('/dashboard/factory')->with('success', 'Factory Has Been Created !');
    }
    public function factory_view($id)
    {
        $factory = Factory::findOrFail($id);
        return view('backend.factory.view')->with('title', 'View Factory')->with('data', $factory);
    }
    public function factory_edit($id)
    {
        $data = Factory::findOrFail($id);
        return view('backend.factory.edit')->with('title', 'Edit Factory')->with('data', $data);
    }
    public function factory_update(Request $request, $id)
    {
        //return $request;
        
        $data = Factory::findOrFail($id);
        $data->title = $request->title;
        $data->location= $request->location;
        $data->machineries = $request->machineries;

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);
            $data->banner = 'uploads/'.$filename;
        }
        
        
        
        if ($request->hasFile('workers')) {
            $worker = '';
            foreach ($request->file('workers') as $file) {
                $workers = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/factories/', $workers);
                $worker .=$workers.',';
            }
            $data->workers = $data->workers.$worker;
        }

        if ($request->hasFile('gallery')) {
            $galleries = '';
            foreach ($request->file('gallery') as $file) {
                $gallery = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/factories/', $gallery);
                $galleries .= $gallery.',';
            }
            $data->gallery = $data->gallery.$galleries;
        }
        $data->save();

        return redirect('/dashboard/factory')->with('success', 'Factory Has Been Edited !');
    }
    public function factory_delete($id)
    {
        $data = Factory::findOrFail($id);
        return view('backend.factory.delete')->with('title', 'Delete Factory')->with('data', $data);
    }
    public function factory_remove($id)
    {
        $data = Factory::findOrFail($id);
        if($data->banner != null){
            File::delete($data->banner);
        }

        $galleries = explode(",",$data->gallery);

        if ($galleries != null) {
            foreach ($galleries as $kew => $value) {
                $image_path = 'backend/factories/'.$value;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }

        $workers = explode(",",$data->workers);

        if ($workers != null) {
            foreach ($workers as $key => $value) {
                $image_path = 'backend/factories/'.$value;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }

        $data->delete();
        return redirect('/dashboard/factory')->with('success', 'Factory Has Been Deleted !');
    }

    public function factory_image_delete($id, $image){
        $data = Factory::findOrFail($id);
        $workers = explode(",",$data->workers);

        if (($key = array_search($image, $workers)) !== false) {
            $image_path = 'backend/factories/'.$image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            unset($workers[$key]);
        }
        $current_workers = '';
        foreach ($workers as $key => $value) {
            $current_workers .= $value.',';
        }
        $data->workers = $current_workers;
        $data->save();
        return redirect()->back()->with('title', 'Edit Factory')->with('data', $data);
    }

    public function factory_gallery_delete($id, $image){
        $data = Factory::findOrFail($id);
        $gallery = explode(",",$data->gallery);

        if (($key = array_search($image, $gallery)) !== false) {
            $image_path = 'backend/factories/'.$image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            unset($gallery[$key]);
        }
        $current_gallery = '';
        foreach ($gallery as $key => $value) {
            $current_gallery .= $value.',';
        }
        $data->gallery = $current_gallery;
        $data->save();
        return redirect()->back()->with('title', 'Edit Factory')->with('data', $data);
    }

    // factory end 


    // showroom start 

    public function showroom_index()
    {
        $showroom = Showrooms::all();
        return view('backend.showroom.index')->with('title', 'Our Showroom')->with('data', $showroom);
    }
    public function showroom_create()
    {
        return view('backend.showroom.create')->with('title', 'Create Showroom');
    }
    public function showroom_insert(Request $request)
    {
        //return $request;
        $this->validate($request,
        [
            'title' => 'required',
            'file' => 'required',

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
       

        $image = $request->file('file');
        $filename = time().uniqid().$image->getClientOriginalName();
        $image->move('uploads', $filename);

        $worker = '';
        $galleries = '';
        if ($request->hasFile('workers')) {
            foreach ($request->file('workers') as $file) {
                $workers = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/showrooms/', $workers);
                $worker .=$workers.',';
            }
        }

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $gallery = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/showrooms/', $gallery);
                $galleries .= $gallery.',';
            }
        }

        $showroom = new Showrooms();
        $showroom->title = $request->title;
        $showroom->location= $request->location;
        $showroom->banner = 'uploads/'.$filename;
        $showroom->workers = $worker;
        $showroom->gallery = $galleries;
        $showroom->save();

        return redirect('/dashboard/showroom')->with('success', 'Showroom Has Been Created !');
    }
    public function showroom_view($id)
    {
        $showroom = Showrooms::findOrFail($id);
        return view('backend.showroom.view')->with('title', 'View Showroom')->with('data', $showroom);
    }
    public function showroom_edit($id)
    {
        $data = Showrooms::findOrFail($id);
        return view('backend.showroom.edit')->with('title', 'Edit Showroom')->with('data', $data);
    }
    public function showroom_update(Request $request, $id)
    {
        //return $request;
        
        $data = Showrooms::findOrFail($id);
        $data->title = $request->title;
        $data->location= $request->location;

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);
            $data->banner = 'uploads/'.$filename;
        }
        
        
        
        if ($request->hasFile('workers')) {
            $worker = '';
            foreach ($request->file('workers') as $file) {
                $workers = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/showrooms/', $workers);
                $worker .=$workers.',';
            }
            $data->workers = $data->workers.$worker;
        }

        if ($request->hasFile('gallery')) {
            $galleries = '';
            foreach ($request->file('gallery') as $file) {
                $gallery = time().uniqid().$file->getClientOriginalName();
                $file->move('backend/showrooms/', $gallery);
                $galleries .= $gallery.',';
            }
            $data->gallery = $data->gallery.$galleries;
        }
        $data->save();

        return redirect('/dashboard/showroom')->with('success', 'Showroom Has Been Edited !');
    }
    public function showroom_delete($id)
    {
        $data = Showrooms::findOrFail($id);
        return view('backend.showroom.delete')->with('title', 'Delete Showroom')->with('data', $data);
    }
    public function showroom_remove($id)
    {
        $data = Showrooms::findOrFail($id);
        if($data->banner != null){
            File::delete($data->banner);
        }

        $galleries = explode(",",$data->gallery);

        if ($galleries != null) {
            foreach ($galleries as $kew => $value) {
                $image_path = 'backend/showrooms/'.$value;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }

        $workers = explode(",",$data->workers);

        if ($workers != null) {
            foreach ($workers as $key => $value) {
                $image_path = 'backend/showrooms/'.$value;
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }

        $data->delete();
        return redirect('/dashboard/showroom')->with('success', 'Showroom Has Been Deleted !');
    }

    public function showroom_image_delete($id, $image){
        $data = Showrooms::findOrFail($id);
        $workers = explode(",",$data->workers);

        if (($key = array_search($image, $workers)) !== false) {
            $image_path = 'backend/showrooms/'.$image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            unset($workers[$key]);
        }
        $current_workers = '';
        foreach ($workers as $key => $value) {
            $current_workers .= $value.',';
        }
        $data->workers = $current_workers;
        $data->save();
        return redirect()->back()->with('title', 'Edit Showroom')->with('data', $data);
    }

    public function showroom_gallery_delete($id, $image){
        $data = Showrooms::findOrFail($id);
        $gallery = explode(",",$data->gallery);

        if (($key = array_search($image, $gallery)) !== false) {
            $image_path = 'backend/showrooms/'.$image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            unset($gallery[$key]);
        }
        $current_gallery = '';
        foreach ($gallery as $key => $value) {
            $current_gallery .= $value.',';
        }
        $data->gallery = $current_gallery;
        $data->save();
        return redirect()->back()->with('title', 'Edit Showroom')->with('data', $data);
    }

    // showroom end 

    public function our_partners_index()
    {
        $partner = Partner::all();
        return view('backend.partners.index')->with('title', 'Our Partners')->with('data', $partner);
    }
    public function our_partners_create()
    {
        return view('backend.partners.create')->with('title', 'Create Partners');
    }
    public function our_partners_insert(Request $request)
    {
        //return $request;
        $this->validate($request,
            [
                'name' => 'required',
                'file' => 'max:1096|required',
                'state' => 'required|not_in:null'

            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $image = $request->file('file');
        $filename = time().uniqid().$image->getClientOriginalName();
        $image->move('uploads', $filename);

        $insert = Partner::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>'uploads/'.$filename,
            'status'=>$request->state,
        ]);

        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $file) {
                $filename = $file->getClientOriginalName();
                $file->move('backend/partners/', $filename);
                $filename = 'backend/partners/' . $filename;

                PartnerFile::create([
                    'partner_id' => $insert->id,
                    'file' => $filename
                ]);

            }
        }


        return redirect('/dashboard/our-partners')->with('success', 'Partner Has Been Created !');
    }
    public function our_partners_view($id)
    {
        $partner = Partner::findOrFail($id);
        return view('backend.partners.view')->with('title', 'View Partner')->with('data', $partner);
    }
    public function our_partners_edit($id)
    {
        $data = Partner::findOrFail($id);
        //return $member;
        return view('backend.partners.edit')->with('title', 'Edit Partner')->with('data', $data);
    }
    public function our_partners_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
            [
                'name' => 'required',
                'file' => 'max:1096',
                'state' => 'required|not_in:null'

            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        $data = Partner::findOrFail($id);
        //return $member;
        if($request->file == null){
            $data->name = $request->name;
            $data->image = $request->prev_img;
            $data->status = $request->state;
            $data->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);

                $data->name = $request->name;
                $data->image = 'uploads/'.$filename;
                $data->status = $request->state;
                $data->save();
            }
        }
        return redirect('/dashboard/our_partners')->with('success', 'Partner Has Been Edited !');
    }
    public function our_partners_delete($id)
    {
        $data = Partner::findOrFail($id);
        return view('backend.partners.delete')->with('title', 'Delete Partner')->with('data', $data);
    }
    public function our_partners_remove($id)
    {
        $data = Partner::findOrFail($id);
        if($data->image != null){
            File::delete($data->image);
        }

        $partner_files = PartnerFile::where('partner_id', $id);

        if ($partner_files != null) {
            foreach ($partner_files as $file) {
                File::delete($file->file);
            }
        }


        $data->delete();
        return redirect('/dashboard/our-partners')->with('success', 'Partner Has Been Deleted !');
    }





    public function pagecms_index()
    {
        $cms = PageCms::all();
        return view('backend.cms.index')->with('title', 'Page Cms')->with('data', $cms);
    }
    public function pagecms_view($id)
    {
        $content = PageCms::findOrFail($id);
        return view('backend.cms.view')->with('title', 'View Page')->with('data', $content);
    }
    public function pagecms_edit($id)
    {
        $data = PageCms::findOrFail($id);
        return view('backend.cms.edit')->with('title', 'Edit Page')->with('data', $data);
    }
    public function pagecms_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'title' => 'required',
            'content' => 'required'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        $data = PageCms::findOrFail($id);

        $data->title = $request->title;
        $data->content = $request->content;
        $data->why_chose_us = $request->why_chose_us;
        $data->save();
        return redirect('/dashboard/pagecms')->with('success', 'Page Has Been Edited ! ');
    }
    
    
    public function career_index()
    {
        $career = Career::all();
        return view('backend.career.index')->with('title', 'career & Posts')->with('data', $career);
    }
    public function jobs_list()
    {
        $career = DB::TABLE('jobs')->get();
        return view('backend.career.job-list')->with('title', 'Jobs')->with('data', $career);
    }
    public function career_create()
    {
        return view('backend.career.create')->with('title', 'Create career');
    }
    public function career_insert(Request $request)
    {
        //return $request->file('file');
        $this->validate($request,
        [
            'title' => 'required',
            'content' => 'required',
            'status' => 'required|not_in:null',
            'date' => 'required'
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        //return $request->file('file');
        
        $insert = DB::TABLE('jobs')->insert([
            'title'=>$request->title,
            'content'=>$request->content,
            'last_date'=>$request->date,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/jobs')->with('success', 'career Has Been Created !');
    }
    public function career_view($id)
    {
        $career = career::findOrFail($id);
        return view('backend.career.view')->with('title', 'View career')->with('data', $career);
    }
    public function career_edit($id)
    {
        $data = DB::TABLE('jobs')->where('id',$id)->first();
        //return $member;
        return view('backend.career.edit')->with('title', 'Edit career')->with('data', $data);
    }
    public function career_update(Request $request, $id)
    {
        
        $this->validate($request,
        [
            'title' => 'required',
            'content' => 'required',
            'status' => 'required|not_in:null',
            'date' => 'required'
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        //return $request->file('file');
        
        $insert = DB::TABLE('jobs')->where('id',$id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'last_date'=>$request->date,
            'status'=>$request->status,
        ]);
        return redirect('/dashboard/jobs')->with('success', 'career Has Been Edited !');
    }
    public function job_remove($id)
    {
        DB::TABLE('jobs')->where('id',$id)->delete();
        return redirect('/dashboard/jobs')->with('success', 'career Has Been Deleted !');
    }
    public function career_delete($id)
    {
        $data = career::findOrFail($id);
        return view('backend.career.delete')->with('title', 'Delete career')->with('data', $data);
    }
    public function career_remove($id)
    {
        $data = Career::findOrFail($id);
        if($data->cv != null){
            File::delete($data->cv);
        }
        $data->delete();
        return redirect('/dashboard/career')->with('success', 'Career Has Been Deleted !');
    }


    //Product Division
    public function division_index()
    {
        $division = product_division::all();
        //return $division;
        return view('backend.products.division.index')->with('title', 'Product Category')->with('data', $division);
    }
    public function division_create()
    {
        return view('backend.products.division.create')->with('title', 'Create Category');
    }
    public function division_insert(Request $request)
    {
        $this->validate($request,
            [
                'division_name' => 'required|unique:product_divisions',
                'file' => 'max:1096',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);

            $insert = product_division::create([
                'division_name'=>$request->division_name,
                'image'=>'uploads/'.$filename,
            ]);
        }
        else{
            $insert = product_division::create([
                'division_name'=>$request->division_name,
                'file'=>$request->file,
            ]);
        }
        return redirect()->route('division.index')->with('success', 'Product Division Has Been Created !');

    }
    public function division_edit($id)
    {
        try {
            $data = product_division::findOrFail($id);
            return view('backend.products.division.edit')->with('title', 'Edit Division')->with('data', $data);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    public function division_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
            [
                'division_name' => 'required',
                'file' => 'max:1096',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $data = product_division::findOrFail($id);
        if($request->file == null){
            $data->division_name = $request->division_name;
            $data->image = $request->prev_img;
            $data->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);

                $data->division_name = $request->division_name;
                $data->image = 'uploads/'.$filename;
                $data->save();
            }
        }
        return redirect()->route('division.index')->with('success', 'Division Has Been Updated !');
    }

    public function division_remove($id)
    {
        $data = product_division::findOrFail($id);
        if($data->image != null){
            File::delete($data->image);
        }
        $data->delete();
        return redirect()->route('division.index')->with('success', 'Division Has Been Deleted !');
    }


    //Product Category
    public function category_index()
    {
        $category = product_category::all();
        //return $category;
        return view('backend.products.category.index')->with('title', 'Product Category')->with('data', $category);
    }
    public function category_create()
    {
        return view('backend.products.category.create')->with('title', 'Create Category');
    }
    public function category_insert(Request $request)
    {
        $this->validate($request,
        [
            'category_name' => 'required',

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );


            $insert = product_category::create([
                'category_name'=>$request->category_name,
                'parent_id'=>$request->parent_id,

            ]);

        return redirect()->route('category.index')->with('success', 'Product Category Has Been Created !');

    }
    public function category_edit($id)
    {
        try {
            $data = product_category::findOrFail($id);
            return view('backend.products.category.edit')->with('title', 'Edit Category')->with('data', $data);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    public function category_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'category_name' => 'required',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $data = product_category::findOrFail($id);

            $data->category_name = $request->category_name;
            $data->parent_id = $request->parent_id;
            $data->save();

        return redirect()->route('category.index')->with('success', 'Category Has Been Edited !');
    }

    public function category_remove($id)
    {
        $data = product_category::findOrFail($id);

        $data->delete();
        return redirect()->route('category.index')->with('success', 'Category Has Been Deleted !');
    }


    //Product Gender
    public function gender_index()
    {
        $gender = product_gender::all();
        return view('backend.products.gender.index')->with('title', 'Product Gender')->with('data', $gender);
    }
    public function gender_create()
    {
        return view('backend.products.gender.create')->with('title', 'Create Category');
    }
    public function gender_insert(Request $request)
    {
        $this->validate($request,
        [
            'gender_name' => 'required|unique:product_genders',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $insert = product_gender::create([
            'gender_name'=>$request->gender_name,
        ]);

        return redirect()->route('gender.index')->with('success', 'Product Gender Has Been Created !');

    }
    public function gender_edit($id)
    {
        try {
            $data = product_gender::findOrFail($id);
            //return $data;
            return view('backend.products.gender.edit')->with('title', 'Edit Product Gender')->with('data', $data);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    public function gender_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'gender_name' => 'required|unique:product_genders',
        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        $data = product_gender::findOrFail($id);
        $data->gender_name = $request->gender_name;
        $data->save();

        return redirect()->route('gender.index')->with('success', 'Product Gender Has Been Edited !');
    }

    public function gender_remove($id)
    {
        $data = product_gender::findOrFail($id);
        $data->delete();
        return redirect()->route('gender.index')->with('success', 'Product Gender Has Been Deleted !');
    }

    //Products
    public function get_subcategory($id){
        $subcategory = product_category::where('parent_id', $id)
                               ->get();
        return json_encode($subcategory);
    }

    public function products_index()
    {
        $product = Product::all();
        //return $product;
        return view('backend.products.product.index')->with('title', 'Products')->with('data', $product);
    }
    public function products_create()
    {
        $category = product_category::whereNull('parent_id')->get();
        $division = product_division::all();
        $gender = product_gender::all();
        return view('backend.products.product.create')
        ->with('title', 'Create Product')
        ->with('category', $category)
        ->with('gender', $gender)
        ->with('division', $division);
    }

    public function products_insert(Request $request)
    {
        //return $request;
        $this->validate($request,
            [
                'name' => 'required',
                // 'division' => 'required|not_in:null',
                'parent_category' => 'required|not_in:null',
                'sub_category' => 'required|not_in:null',
                // 'gender' => 'required|not_in:null',
                'image_front' => 'max:1096',
                'image_back' => 'max:1096',
                'status' => 'required|not_in:null'

            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $image_front_name = '';
        $image_back_name = '';


        if ($request->hasFile('image_front')) {
            $image_front = $request->file('image_front');
            $image_front_name = time() . uniqid() . $image_front->getClientOriginalName();
            $image_front->move('uploads', $image_front_name);
        }

        if ($request->hasFile('image_back')) {
            $image_back = $request->file('image_back');
            $image_back_name = time() . uniqid() . $image_back->getClientOriginalName();
            $image_back->move('uploads', $image_back_name);
        }

        $insert = Product::create([
            'name' => $request->name,
            'parent_category' => $request->parent_category,
            'category' => $request->sub_category,
            // 'gender' => $request->gender,
            'image_front' => 'uploads/' . $image_front_name,
            'image_back' => 'uploads/' . $image_back_name,
            'color' => $request->color,
            'size' => $request->size,
            'description' => $request->desc,
            'status' => $request->status,
        ]);

        return redirect()->route('products.index')->with('success', 'Product Has Been Created !');
    }
    public function products_view($id)
    {
        //return $id;
        try {
            $ids = Product::findOrFail($id);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
        $product = Product::findOrFail($id);
        //return $product;
        return view('backend.products.product.view')->with('title', 'View Product')->with('data', $product);
    }

    public function products_edit($id)
    {
        try {
            $ids = Product::findOrFail($id);
        }
        catch (\Throwable $th) {
            return redirect()->back();
        }

        $category = product_category::all();
        $division = product_division::all();
        $gender = product_gender::all();

        $product = Product::findOrFail($id);
        //var_dump($product);
        return view('backend.products.product.edit')->with('title', 'Edit Products')
            ->with('data', $product)
            ->with('division', $division)
            ->with('category', $category)
            ->with('gender', $gender);
    }
    
    public function products_update(Request $request, $id)
    {
        //return $request;
        $this->validate($request,
        [
            'name' => 'required',
            'division' => 'required|not_in:null',
            'category' => 'required|not_in:null',
            'gender' => 'required|not_in:null',
            'image_front' => 'max:1096',
            'image_back' => 'max:1096',
            'status' => 'required|not_in:null'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $data = Product::findOrFail($id);


            $data->name = $request->name;
            $data->division = $request->division;
            $data->category = $request->category;
            $data->gender = $request->gender;
            $data->color = $request->color;
            $data->size = $request->size;
            $data->description = $request->desc;
            $data->status = $request->status;


            if($request->hasFile('image_front')) {
                $image_front = $request->file('image_front');
                $image_front_name = time() . uniqid() . $image_front->getClientOriginalName();
                $image_front->move('uploads', $image_front_name);

                File::delete($data->image_front);
                $data->image_front = 'uploads/' . $image_front_name;
            }

        if($request->hasFile('image_back')) {
            $image_back = $request->file('image_back');
            $image_back_name = time() . uniqid() . $image_back->getClientOriginalName();
            $image_back->move('uploads', $image_back_name);

            File::delete($data->image_back);
            $data->image_back = 'uploads/' . $image_back_name;
        }

            $data->save();

        return redirect()->route('products.index')->with('success', 'Product has been Edited !');
    }

    public function products_remove($id)
    {
        try {
            $ids = Product::findOrFail($id);
        }
        catch (\Throwable $th) {
            return redirect()->back();
        }

        $data = Product::findOrFail($id);
        if($data->image_front != null){
            File::delete($data->image_front);
        }
        if($data->image_back != null){
            File::delete($data->image_back);
        }
        $data->delete();
        return redirect()->route('products.index')->with('success', 'Product has been Deleted !');
    }
    public function settings()
    {
        return view('backend.settings.password')->with('title', 'Settings');
    }
    public function update_password(Request $request){
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $id = session()->get('id');
        $password = User::all()->where('id',$id)->first();

        if(Hash::check($request['current_password'], $password->password))
        {
          $obj_user = User::find($id);
          $obj_user->password = Hash::make($request['password']);
          $obj_user->save();
          return redirect('dashboard')->with('success','Password Updated!!');
        }
        else{
            return redirect()->back()->with([
                'message' => 'Your Current Password Does Not Match !!!',
            ])->withInput();
        }
    }

    public function website_setting()
    {
        return view('backend.settings.website-setting')->with('title', 'Website Setting');
    }

    public function website_setting_store(Request $request){
        
        // $this->validate($request,[
        //     'name' => 'required',
        //     'file' => 'required',
        // ]);

        $data = DB::table('website_setting')->orderBy('id','DESC')->first();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);
            $insert = DB::TABLE('website_setting')->where('id',$data->id)->update([
                'name' => $request->name,
                'logo' => 'uploads/'.$filename,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'twiter' => $request->twiter,
                'instagram' => $request->instagram,
            ]);
        }else{
            $insert = DB::TABLE('website_setting')->where('id',$data->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'twiter' => $request->twiter,
                'instagram' => $request->instagram,
            ]);
        }
        
        

        return redirect('/dashboard/website/setting')->with('success', 'Website Setting Changed !');
    }

    public function blogs(){
        $data = Blog::all();

        return view('backend.blog.index')->with('title', 'Blogs')->with('data', $data);
    }

    public function blogs_create(){
        return view('backend.blog.create')->with('title', 'Create Blog');
    }

    public function blogs_store(Request $request){
        $this->validate($request,
        [
            'title' => 'required',
            'file' => 'required|max:1096',
            'content' => 'required'

        ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
        //return $request->file('file');
        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time().uniqid().$image->getClientOriginalName();
            $image->move('uploads', $filename);
        }
        $insert = Blog::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'image'=>'uploads/'.$filename,
            'content'=>$request->content,
            'status'=>$request->status,
            'date'=>$request->date,
        ]);
        return redirect('/dashboard/blogs')->with('success', 'Blog Has Been Created !');
    }

    public function blogs_view($id)
    {
        $blog = Blog::findOrFail($id);
        //return $member;
        return view('backend.blog.view')->with('title', 'View Blog')->with('data', $blog);
    }
    public function blogs_edit($id)
    {
        $data = Blog::findOrFail($id);
        //return $member;
        return view('backend.blog.edit')->with('title', 'Edit Blog')->with('data', $data);
    }
    public function blogs_update(Request $request, $id)
    {
        //return $request;
        // $this->validate($request,
        // [
        //     'title' => 'required',
        //     'file' => 'required|max:1096',
        //     'content' => 'required'

        // ],
        //     $messages = [
        //         'required' => 'The :attribute field is required.',
        //     ]
        // );
        $data = Blog::findOrFail($id);
        //return $member;
        if($request->file == null){
            $data->title = $request->title;
            $data->author = $request->author;
            $data->image = $request->prev_img;
            $data->status = $request->status;
            $data->content = $request->content;
            $data->date = $request->date;
            $data->save();
        }
        else{
            if($request->hasFile('file')){
                $image = $request->file('file');
                $filename = time().uniqid().$image->getClientOriginalName();
                $image->move('uploads', $filename);
                $data->title = $request->title;
                $data->author = $request->author;
                $data->image = 'uploads/'.$filename;
                $data->status = $request->status;
                $data->content = $request->content;
                $data->date = $request->date;
                $data->save();
            }
        }
        return redirect('/dashboard/blogs')->with('success', 'Blog has been Edited !');
    }
    public function blogs_delete($id)
    {
        $data = Blog::findOrFail($id);
        //return $member;
        return view('backend.blog.delete')->with('title', 'Delete Blog')->with('data', $data);
    }
    public function blogs_remove($id)
    {
        $data = Blog::findOrFail($id);
        if($data->icon != null){
            File::delete($data->icon);
        }
        $data->delete();
        return redirect('/dashboard/blogs')->with('success', 'Blog has been Deleted !');
    }


    public function review_index(){

        $review = DB::table('client_reviews')->get();
        return view('backend.client-review.index')->with('title', 'Client Review')->with('review', $review);
    }

    public function review_create(){

        return view('backend.client-review.create')->with('title', 'Review Create');
    }

    public function review_store(Request $request)
    {
        $this->validate($request,
            [
                'client' => 'required',
                'review' => 'required',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );
       
        DB::table('client_reviews')->insert([
            'client' => $request->client,
            'review' => $request->review
        ]);
       
        return redirect()->route('review.index')->with('success', 'Review Has Been Created !');

    }

    public function review_remove($id)
    { 
        DB::table('client_reviews')->where('id', $id)->delete();
        return redirect()->route('review.index')->with('success', 'Review Has Been Deleted !');
    }

}
