<?php

namespace App\Http\Controllers;

use App\Career;
use App\ClientFile;
use App\Featured;
use App\Mail\CareerRequest;
use App\Mail\ContactUs;
use App\Partner;
use App\PartnerFile;
use App\product_gender;
use App\Slider;
use Illuminate\Http\Request;
use App\product_category;
use App\product_division;
use App\PageCms;
use App\team_member;
use App\Blog;
use App\Product;
use App\Service;
use App\Client;
use App\Factory;
use App\Showrooms;
use DB;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();
        $blogs = Blog::where('status', 1)->orderByDesc('id')->limit(3)->get();

        $sliders = Slider::all();

        $service = DB::table('services')
        ->where('status', 1)
        ->get();
        $client = DB::table('clients')
        ->where('status', 1)
        ->get();

        $reviews = DB::table('client_reviews')->orderByDesc('id')->get();

        $item_sliders = DB::table('item_sliders')->get();

        return view('frontend.welcome')->with('title','Home')
        ->with('division',$division)
        ->with('category',$category)
        ->with('gender',$gender)
        ->with('service',$service)
        ->with('client',$client)
        ->with('item_sliders',$item_sliders)
        ->with('blogs',$blogs)
        ->with('reviews',$reviews)
        ->with('sliders',$sliders);
    }

    public function home2()
    {
        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();
        $blogs = Blog::where('status', 1)->orderByDesc('id')->limit(3)->get();


        $sliders = Slider::all();

        $service = DB::table('services')
        ->where('status', 1)
        ->get();
        $client = DB::table('clients')
        ->where('status', 1)
        ->get();

        $item_sliders = DB::table('item_sliders')->get();

        $reviews = DB::table('client_reviews')->orderByDesc('id')->get();

        return view('frontend.home')->with('title','Home')
        ->with('division',$division)
        ->with('category',$category)
        ->with('gender',$gender)
        ->with('service',$service)
        ->with('client',$client)
        ->with('item_sliders',$item_sliders)
        ->with('blogs',$blogs)
        ->with('reviews',$reviews)
        ->with('sliders',$sliders);
    }

    public function search(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%%'.$request->search.'%')->get();
        return view('frontend.search')->with('title', 'Search Result')->with('products', $products);
    }

    public function about_us()
    {
        $content = PageCms::all()->where('slug', 'about-us')->first();
        $service = DB::table('services')
            ->where('status', 1)
            ->get();
        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $team = DB::table('team_members')
        ->where('status', 1)
        ->orderBy('sort_number')
        ->get();

        $client = DB::table('clients')
        ->where('status', 1)
        ->get();

        $partners = Partner::all();

        return view('frontend.about-us')->with('title', 'About Us')
            ->with('data', $content)->with('team', $team)->with('client',$client)
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('partners', $partners)->with('service', $service);
    }
    public function team()
    {
        $data = DB::table('team_members')
        ->where('status', 1)
        ->orderBy('sort_number')
        ->get();
        //return $data;

        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        return view('frontend.ourteam')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('title', 'Our Team')->with('team', $data)->with('service', $service);
    }


    public function contact_us()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        return view('frontend.contact')->with('title', 'Contact Us')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('service', $service);
    }

    public function our_partners()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $partners = Partner::all();

        $data = Partner::all();
        return view('frontend.our-partners')->with('title', 'Our Partners')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('partners', $partners);
    }

    public function our_clients()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $clients = Client::all();

        $data = Client::all();
        return view('frontend.client-info')->with('title', 'Our Partners')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('clients', $clients);
    }


    public function our_factory()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $factory = Factory::all();

        $data = Factory::all();
        return view('frontend.factory')->with('title', 'Our Factory')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('factory', $factory);
    }

    public function factory_details($id)
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $factory = Factory::findOrFail($id);

        $data = Factory::findOrFail($id);
        return view('frontend.factory-details')->with('title', 'Our Factory')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('factory', $factory);
    }


    public function our_showroom()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $showroom = Showrooms::all();

        $data = Showrooms::all();
        return view('frontend.showroom')->with('title', 'Our Showroom')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('showroom', $showroom);
    }

    public function showroom_details($id)
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        $showroom = Showrooms::findOrFail($id);

        $data = Showrooms::findOrFail($id);
        return view('frontend.showroom-details')->with('title', 'Our Showroom')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('data', $data)->with('service', $service)
            ->with('showroom', $showroom);
    }

    public function our_values()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        return view('frontend.our-values')->with('title', 'Our Values')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('service', $service);
    }

    public function careers()
    {
        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();
        $category = product_category::all();;
        $gender = product_gender::all();

        return view('frontend.careers')->with('title', 'Careers')
            ->with('division',$division)
            ->with('category',$category)
            ->with('gender',$gender)
            ->with('service', $service);
    }


    public function product_view($id)
    {
        try {
            $ids = Product::findOrFail($id);
        } catch (\Throwable $th) {
            return redirect()->back();
        }

        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        $division = product_division::all();

        $product = DB::table('products')
        ->join('product_categories', 'products.category', '=', 'product_categories.id')
        ->join('product_divisions', 'products.division', '=', 'product_divisions.id')
        ->join('product_genders', 'products.gender', '=', 'product_genders.id')
        ->select('products.*', 'product_categories.category_name',
            'product_categories.id as cat_id', 'product_divisions.division_name',
            'product_genders.gender_name')
        ->where('products.id', '=', $id)
        ->first();

        return view('frontend.product_view')->with('title', $product->name)
            ->with('data', $product)
            ->with('service', $service)
            ->with('division', $division);
    }


    public function services_view($id)
    {
        try {
            $division = product_division::all();
            $category = product_category::all();;
            $gender = product_gender::all();

            $data = Service::findOrFail($id);
            $service = Service::all();
            return view('frontend.service_view')->with('title', $data->title)->with('data', $data)->with('service', $service)
                ->with('division',$division)
                ->with('category',$category)
                ->with('gender',$gender);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function contact(Request $request)
    {
        $emailFrom = $request->email;

        // var_dump($emailFrom);
        // exit();

        $name = $request->name;
        $subject = $request->subject;
        $phone = $request->phone;
        $msg = $request->message;
        $emailTo = 'info@elegrandbd.com';

        $email = new ContactUs($name, $subject, $phone, $emailFrom, $msg);

        Mail::to($emailTo)->send($email);

        echo 'Successfully Send';
    }

    public function division($div_id)
    {
        $division = product_division::findOrFail($div_id);

        $category = DB::table('products')
            ->join('product_categories','products.category', '=', 'product_categories.id')
            ->select('product_categories.category_name', 'product_categories.id as cat_id')
            ->where('products.division', $division->id)
            ->distinct()
            ->get();

        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        return view('frontend.division', compact('category', 'division'))->with('title', 'Division')->with('service', $service);

    }

    public function category($div_id, $cat_id)
    {

        $category = product_category::findOrFail($cat_id);
        $division = product_division::findOrFail($div_id);

        $gender = DB::table('products')
            ->join('product_genders','products.gender', '=', 'product_genders.id')
            ->select('product_genders.gender_name', 'products.gender as gen_id')
            ->where('products.category', $cat_id)
            ->distinct()
            ->get();

        $service = DB::table('services')
            ->where('status', 1)
            ->get();


        return view('frontend.category', compact('category', 'gender', 'division'))->with('title', 'Category')->with('service', $service);

    }

    public function products_view($div_id, $cat_id, $gen_id)
    {
        $products = DB::table('products')
            ->join('product_divisions','products.division', '=', 'product_divisions.id')
            ->join('product_categories','products.category', '=', 'product_categories.id')
            ->join('product_genders','products.gender', '=', 'product_genders.id')
            ->select('products.*', 'product_categories.category_name',
                'product_categories.id as cat_id', 'product_divisions.division_name',
                'product_genders.gender_name')
            ->where('products.division', $div_id)
            ->where('products.category', $cat_id)
            ->where('products.gender', $gen_id)
            ->distinct()
            ->get();
        // var_dump($products);
        // exit();

        return view('frontend.products_view', compact('products'));
    }

    public function career_store(Request $request)
    {

        if ($request->hasFile('cv')) {

            $cv = $request->file('cv');
            $filename = $request->firstname.'-'.$cv->getClientOriginalName();
            $cv->move('backend/cv', $filename);
            $file = 'backend/cv/'.$filename;

            $career = Career::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'number' => $request->number,
                'address' => $request->address,
                'position' => $request->position,
                'qualifications' => $request->qualifications,
                'message' => $request->message,
                'cv' => $file,
            ]);

        } else {
            $career = Career::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'number' => $request->number,
                'address' => $request->address,
                'position' => $request->position,
                'qualifications' => $request->qualifications,
                'message' => $request->message,
            ]);
        }

        $this->career_mail($career);



        return redirect('/career')->with('message', 'Application sent successfully!');

    }

    public function career_mail(Career $career)
    {

        $emailTo = 'career@mmclothingbd.com';

        $email = new CareerRequest($career);

        Mail::to($emailTo)->send($email);

        if (Mail::failures()) {
            return redirect()->back()->with('message', 'Email sending failed!');
        }

        return redirect()->back()->with('message', 'Email sent successfully!');
    }

    public function client_info($id)
    {
        $client = Client::findOrFail($id);

        $client_files = ClientFile::where('client_id', $id)->get();

        return view('frontend.client-info', compact('client', 'client_files'))->with('title', 'Client Information');
    }

    public function partner_info($id)
    {
        $partner = Partner::findOrFail($id);

        $partner_files = PartnerFile::where('partner_id', $id)->get();

        return view('frontend.partner-info', compact('partner', 'partner_files'))->with('title', 'Partner Information');
    }

    public function blogs(){
        $blogs = Blog::all();

        $service = DB::table('services')
            ->where('status', 1)
            ->get();

        return view('frontend.blogs', compact('blogs','service'));
    }

    public function blogs_read($id){
        $data = Blog::findOrFail($id);

        $alls = Blog::orderByDesc('id')->get();
        return view('frontend.blogs_read', compact('data','alls'));
    }

}


