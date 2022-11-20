<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companyInfo;
use App\Models\socailLinks;
use App\Models\homeButton;
use App\Models\homeDescription;
use App\Models\services;
use App\Models\serviceDetails;
use App\Models\infos;
use App\Models\infosBar;
use App\Models\projectDescription;
use App\Models\projects;
use App\Models\contact;



class CompanyInfos extends Controller
{

    public function home()
    {
        $companyInfo = companyInfo::find(1);
        $socailLinks = socailLinks::find(1);
        $homeDescription = homeDescription::find(1);
        $homeButton = homeButton::find(1);
        $serviceDetails = serviceDetails::find(1);
        $services = services::all();
        $projectDescription = projectDescription::find(1);
        $infos = infos::find(1);
        $infosBar = infosBar::all();
        $projects = projects::all();
        echo view('index', 
        [
            'companyInfo'=> $companyInfo, 
            'socailLinks'=>$socailLinks, 
            'homeDescription'=> $homeDescription,
            'homeButton'=>$homeButton,
            'serviceDetails'=> $serviceDetails,
            'services'=> $services,
            'projectDescription' => $projectDescription,
            'infos'=> $infos,
            'infosBar'=>$infosBar,
            'projects' => $projects
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = companyInfo::find(1);
        echo view('console/common/header');
        echo view('console/index', ['data' => $data]);
        echo view('console/common/footer'); 
    }


    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = companyInfo::find($id);
            $data->mobile = $request->mobile;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->save();
        }
            $data = new companyInfo;
            $data->mobile = $request->mobile;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->save();
        return redirect(route('index'));
    }


    public function socailLink(){
        $data = socailLinks::find(1);
        echo view('console/common/header');
        echo view('console/edit-social-media',['data'=>$data]);
        echo view('console/common/footer');
    }


    public function updateSocailLinks(Request $request)
    {

        $id = $request->id;
        if(!empty($id)){
            $data = socailLinks::find($id);
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            $data->linkedin = $request->linkedin;
            $data->save();
        }
            $data = new socailLinks;
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            $data->linkedin = $request->linkedin;
            $data->save();
        return redirect(route('socailLink'));
    }

    public function homeButton(){
        $data = homeButton::find(1);
        echo view('console/common/header');
        echo view('console/button', ['data' => $data]);
        echo view('console/common/footer');
    }


    public function updateButton(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = homeButton::find($id);
            $data->button_1_name = $request->button_1;
            $data->button_1_url = $request->button_1_url;
            $data->button_2_name = $request->button_2;
            $data->button_2_url = $request->button_2_url;
            $data->save();
        }
            $data = new homeButton;
            $data->button_1_name = $request->button_1;
            $data->button_1_url = $request->button_1_url;
            $data->button_2_name = $request->button_2;
            $data->button_2_url = $request->button_2_url;
            $data->save();
        return redirect(route('homeButton'));
    }

    public function homeDetails(){
        $data = homeDescription::find(1);
        echo view('console/common/header');
        echo view('console/home', ['data'=> $data]);
        echo view('console/common/footer');
    }

    public function updatehomeDetails(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = homeDescription::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
        }
        $data = new homeDescription;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect(route('homeDetails'));
    }

    public function serviceDetails(){
        $data = serviceDetails::find(1);
        echo view('console/common/header');
        echo view('console/service_description', ['data'=> $data]);
        echo view('console/common/footer');
    }

    public function updateServiceDetails(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = serviceDetails::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
        }
        $data = new serviceDetails;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect(route('serviceDetails'));
    }

    public function service(){
        $data = services::all();
        echo view('console/common/header');
        echo view('console/view-service', ['service'=> $data]);
        echo view('console/common/footer');
    }

    public function serviceAddEdit(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = services::find($id);
            if(!empty($request->image))
            {
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/image', $name);
                $data->image = $name;
            }
            else{
                $data->image = $request->image_hidden;
            }
            $data->url = $request->url;
            $data->description = $request->description;
            $data->save();
        }else{
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $image->storeAs('public/image', $name);
            $data = new services;
            $data->image = $name;
            $data->url = $request->url;
            $data->description = $request->description;
            $data->save();
        }
        return redirect(route('service'));
    }

    public function Addservice(){
        echo view('console/common/header');
        echo view('console/add-service');
        echo view('console/common/footer');
    }

    public function DeleteService($id){
        $data = services::findOrFail($id);
        $data->delete();
        return redirect(route('service'));
    }    

    public function ViewProject(){
        $data = projectDescription::find(1);
        echo view('console/common/header');
        echo view('console/project-description', ['data'=> $data]);
        echo view('console/common/footer');
    }


    public function AddEditProject(Request $request ){
        $id = $request->id;
        if(!empty($id)){
            $data = projectDescription::find($id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            echo $data;
        }else{
            $data = new projectDescription;
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
        }
        return redirect(route('ViewProject'));
    }

    public function viewInfo(){
        $data = infos::find(1);
        echo view('console/common/header');
        echo view('console/infos', ['data'=>$data]);
        echo view('console/common/footer');
    }    

    public function updateInfos(Request $request)
    {
        $id = $request->id;
        if(!empty($id)){
            $data = infos::find($id);
            $data->title = $request->title;
            $data->titleDescription = $request->titleDescription;
            $data->description = $request->description;
            $data->save();
            echo $data;
        }else{
            $data = new infos;
            $data->title = $request->title;
            $data->titleDescription = $request->titleDescription;
            $data->description = $request->description;
            $data->save();
        }
        return redirect(route('viewInfo'));
    }


    public function viewInfoBar(){
        $data = infosBar::all();
        echo view('console/common/header');
        echo view('console/view-infos-bar', ['InfoBar'=>$data]);
        echo view('console/common/footer');
    }    


    public function AddInfoBar(){
        echo view('console/common/header');
        echo view('console/add-infos-bar');
        echo view('console/common/footer');
    } 

    public function AddIndosBar(Request $request){
        $data = new infosBar;
        $data->title = $request->title;
        $data->percentage = $request->percentage;
        $data->save();
        return redirect(route('viewInfoBar'));
    } 


    public function DeleteIndosBar($id){
        $data = infosBar::findOrFail($id);
        $data->delete();
        return redirect(route('viewInfoBar'));
    }

    public function viewContact(){
        $data = contact::all();
        echo view('console/common/header');
        echo view('console/view-contact', ['contact'=>$data]);
        echo view('console/common/footer');
    }

    public function DeleteContact($id){
        $data = contact::findOrFail($id);
        $data->delete();
        return redirect(route('viewInfoBar'));
    }


    public function ViewProjects(){
        $data = projects::all();
        echo view('console/common/header');
        echo view('console/view-projects', ['projects'=>$data]);
        echo view('console/common/footer');
    } 

    public function AddProjects(){
        $data = projects::all();
        echo view('console/common/header');
        echo view('console/add-project', ['projects'=>$data]);
        echo view('console/common/footer');
    } 

    public function AddEditProjects(Request $request){
       $id = $request->id;
        if(!empty($id)){
            $data = projects::find($id);
            if(!empty($request->image)){
                $image = $request->image;
                $name = $image->getClientOriginalName();
                $image->storeAs('public/image', $name);
            }else{
                $name = $request->hidden_image;
            }
            $data->image = $name;
            $data->title = $request->title;
            $data->url = $request->url;
            $data->save();
            echo $data;
        }
            $data = new projects;
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $image->storeAs('public/image', $name);
            $image->storeAs('public/image', $name);
            $data->image = $name;
            $data->title = $request->title;
            $data->url = $request->url;
            $data->save();
        return redirect(route('ViewProjects'));
    } 

    public function DeleteProject($id){
        $data = projects::findOrFail($id);
        $data->delete();
        return redirect(route('ViewProjects'));
    }

    public function SaveContact(Request $request){
        $data = new contact;
        $data->name = $request->name;
        $data->lastName = $request->surname;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return redirect(route('home'));
    }
}
