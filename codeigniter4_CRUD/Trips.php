<?php

namespace App\Controllers;

use App\Models\TripsModel;

class Trips extends BaseController {
    
    public function index()
    { 
        $model = new TripsModel();

        $data['trips'] = $model->getTrips();

        return view('/TripViews/trips_list', $data);

    }

    public function detail($id= null)
    {  
        $model =  new TripsModel();
      
        
        $data['trip'] = $model->getTrips($id);
      
        return view('/TripViews/trip_detail', $data);
       
    } 

    public function create()
    {  
        $model = new TripsModel();

        helper(['form']);

        $data =[];
       
        if ($this->request->getMethod() === 'post'  ) 
        {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ];
            if ($this->validate($rules))
            {
                $model->save([
                    'title' => $this->request->getPost('title'),
                    
                    'body'  => $this->request->getPost('body'),
                ]);
                
            return redirect()->to('/trips');

            }else{
        
          $data['validation'] = $this->validator;
          
            }
        
        }
        return view('/TripViews/trip_create', $data);
      
    }
    public function edit($id= null)
    { 
        $model =  new TripsModel();
     
    
        $data['trip'] = $model->getTrips($id);
        
        return view('/TripViews/trip_edit', $data);
       
    }

    public function tripUpdate($id =null)
    {

    $model = new TripsModel();

    helper(['Form']);

    if ($this->request->getMethod() === 'post'  ) 
        {
        $rules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required'
        ];
            if ($this->validate($rules))
            {
                $model->update($id,[
                    'title' => $this->request->getPost('title'),
                    
                    'body'  => $this->request->getPost('body'),
                ]);
                
            return redirect()->to('/trips');

            }else{
        
          $data['validation'] = $this->validator;
          $data['trip'] = (object)[
            'id' => $this->request->getPost('id'),
            'title' => $this->request->getPost('title'),   
            'body'  => $this->request->getPost('body'),
          ];
     
            }
        
        }
        return view('/TripViews/trip_edit', $data);
      
    }
    public function setDelete($id= null)
    {
       
        $model =  new TripsModel();
         
        $data['trip'] = $model->getTrips($id);
      
        return view('/TripViews/trip_setdelete', $data);
       
    }

    public function Delete($id= null)
    {
       
        $model =  new TripsModel();
       
        $model->delete($id);
      
        return redirect()->to('/trips');
       
    } 

 
}