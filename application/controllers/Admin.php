<?php 

class Admin extends MY_Controller {

	public function __constuct()
	{
		if(!$this->session->userdata($sessArr))
		
			return redirect('Admin/index');
	}

	public function index()
	{
		
		$this->load->view('Admin/Adminlogin');

	}

	public function admin_login()
	{
		 $email=$this->input->post('email');
		 $password=$this->input->post('password');

		$this->load->model('Admin_model');
		
		$result=$this->Admin_model->admin_login($email,$password);

		if($result)
		{
			$sessArr = array('email' => $email
			);
			$this->session->set_userdata($sessArr);
			
	//	print_r($this->session->all_userdata('email'));


			 return redirect('Admin/dashboard');
		 }

	  else
		  {
		  	$this->session->set_flashdata('message', 'Email Id or Password is Invalid');
		 	 return redirect('Admin/index');
		}

	}

	public function dashboard()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
			//print_r($this->session->all_userdata('email'));
		$this->load->view('Admin/Index');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		//$this->session->sess_destroy();
		return redirect('Admin/index');
	}

	// Change Password

	public function change_password()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->view('Admin/Changepassword');
	}

	public function update_password()
	{
		$session_value=$this->session->userdata($sessArr);

		$Oldpass=$this->input->post('oldpassword');
		$Newpass=$this->input->post('newpassword');
		$Confirmpass=$this->input->post('confirmpassword');

		$this->load->model('Admin_model');

		 $result=$this->Admin_model->check_password($Oldpass,$session_value);
		 if($result)
		 {

		 if($Newpass==$Confirmpass)
		 {
		 $result1=$this->Admin_model->update_password($Newpass,$session_value);
		 	
			if($result1)
			{
			$this->session->set_flashdata('message', 'Password Update Successfully!! Please Login with New Password');
		 	return redirect('Admin/logout');
		
			}else{
			$this->session->set_flashdata('message', 'Error');
			return redirect('Admin/change_password');	
			}
		}else{
			$this->session->set_flashdata('message', 'New Password and Confirm Password not matched');
				return redirect('Admin/change_password');	
			}
	}else
		{
		$this->session->set_flashdata('message', 'Old Password not matched');
		return redirect('Admin/oldnotmatch');	
	 	}
}

	// Category

	public function Addcategory()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->view('Admin/Addcategory');
	}

	public function insertcategory()
	{
		
		echo $category=$this->input->post('category');
		echo $status=$this->input->post('status');
		date_default_timezone_set('Asia/Koltata');
		$now = date('Y-m-d H:i:s');

		$this->load->model('Admin_model');
		$data=array('category' => $category,
						'status' => $status,
						'date' => $now);
		
		
		$result1=$this->Admin_model->checkcategory($data['category']);
	if($result1)
		{
			$this->session->set_flashdata('message', 'Category Already Inserted');

		 
		 	return redirect('Admin/Addcategory');
		 }

	     $insert=$this->Admin_model->insertcategory($data);

		if($insert)
		{
			$this->session->set_flashdata('message', 'Category Add Successfully');

		 
		 	return redirect('Admin/Viewcategory');
		
		}else
		{
			$this->session->set_flashdata('message', 'Error');
				return redirect('Admin/index');
		 	
		}


	}

	public function Viewcategory()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
		$viewcategory=$this->Admin_model->viewcategory();
		$this->load->view('Admin/Viewcategory',['viewcategory'=>$viewcategory]);


	}

		public function deletecategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$del=$this->Admin_model->deletecategory($id);
		if ($del) {
			$this->session->set_flashdata('message', 'Delete successfully');
			return redirect('Admin/viewcategory');
			
		}
		else{
			$this->session->set_flashdata('message', 'Details not deleted');
				return redirect('Admin/viewcategory');
			
		}
	}

	public function editcategory()
	{
		

		$this->load->view('Admin/Editcategory');
	}

	public function updatecategory()
	{
		$id=$this->input->post('id');
		$category=$this->input->post('category');

		$data=array('id'=>$id,
					'category'=>$category);

		$this->load->model('Admin_model');

		$edit=$this->Admin_model->updatecategory($data);

		if ($edit) {
			$this->session->set_flashdata('delete', 'Details Edit successfully');
			return redirect('Admin/Viewcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Details not Edited');
				return redirect('Admin/editcategory');
			
		}

	}

	public function activecategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$active=$this->Admin_model->activecategory($id);

		if ($active) {
			$this->session->set_flashdata('delete', 'Status update successfully');
			return redirect('Admin/Viewcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Status not Updated');
				return redirect('Admin/Viewcategory');
			
		}
	}

	public function inactivecategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$inactive=$this->Admin_model->inactivecategory($id);

		if ($inactive) {
			$this->session->set_flashdata('delete', 'Status update successfully');
			return redirect('Admin/Viewcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Status not Updated');
				return redirect('Admin/Viewcategory');
			
		}
	}

	// Sub Category Start

	public function addsubcategory()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
		$viewcategory=$this->Admin_model->view_active_category();
		$this->load->view('Admin/Addsubcategory',['viewcategory'=>$viewcategory]);
	}

		public function insert_subcategory()
	{
		
		echo $category=$this->input->post('category');
		echo $subcategory=$this->input->post('subcategory');
		echo $status=$this->input->post('status');
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y-m-d H:i:s');

		$this->load->model('Admin_model');
		$data=array('category' => $category,
					'subcategory' => $subcategory,
						'status' => $status,
						'date' => $date);
		

	     $insert=$this->Admin_model->insert_subcategory($data);

		if($insert)
		{
			$this->session->set_flashdata('message', 'SubCategory Add Successfully');

		 
		 	return redirect('Admin/View_subcategory');
		
		}else
		{
			$this->session->set_flashdata('message', 'Error');
				return redirect('Admin/index');
		 	
		}


	}

	public function View_subcategory()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
		$viewsubcategory=$this->Admin_model->view_subcategory();
		$this->load->view('Admin/Viewsubcategory',['viewsubcategory'=>$viewsubcategory]);


	}

		public function delete_subcategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$del=$this->Admin_model->delete_subcategory($id);
		if ($del) {
			$this->session->set_flashdata('message', 'Delete successfully');
			return redirect('Admin/View_subcategory');
			
		}
		else{
			$this->session->set_flashdata('message', 'Details not deleted');
				return redirect('Admin/View_subcategory');
			
		}
	}


	public function edit_subcategory()
	{
		
		$this->load->view('Admin/Editsubcategory');
	}

	public function update_subcategory()
	{
		$id=$this->input->post('id');
		$subcategory=$this->input->post('subcategory');

		$data=array('id'=>$id,
					'subcategory'=>$subcategory);

		$this->load->model('Admin_model');

		$edit=$this->Admin_model->update_subcategory($data);

		if ($edit) {
			$this->session->set_flashdata('delete', 'Details Edit successfully');
			return redirect('Admin/View_subcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Details not Edited');
				return redirect('Admin/edit_subcategory');
			
		}

	}

	public function active_subcategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$active=$this->Admin_model->active_subcategory($id);

		if ($active) {
			$this->session->set_flashdata('delete', 'Status update successfully');
			return redirect('Admin/View_subcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Status not Updated');
				return redirect('Admin/View_subcategory');
			
		}
	}

	public function inactive_subcategory()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$inactive=$this->Admin_model->inactive_subcategory($id);

		if ($inactive) {
			$this->session->set_flashdata('delete', 'Status update successfully');
			return redirect('Admin/View_subcategory');
			
		}
		else{
			$this->session->set_flashdata('delete', 'Status not Updated');
				return redirect('Admin/View_subcategory');
			
		}
	}

	// Banner

	public function add_banner()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->view('Admin/Addbanner');
	}

	public function insert_banner()
	{

              
                $config['upload_path'] = 'uploads/banner/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
               // $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                   echo $uploadData = $this->upload->data();
                   $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }

           echo $name =$this->input->post('name');
           echo  $status = $this->input->post('status');
           echo $image=$_FILES['image']['name'];
             

            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d H:i:s');

            $this->load->model('Admin_model');
            $data = array(
                'name' => $this->input->post('name'),
                'status' => $this->input->post('status'),
                'image' => $image,
                'date' => $date
            );
            
            // Pass user data to model
            
            $insertUserData = $this->Admin_model->insert_banner($data);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been added successfully.');
                return redirect('Admin/view_banner');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/add_banner');
            }
        }

        public function view_banner()
        {
        	if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
        	$this->load->model('Admin_model');
		$viewbanner=$this->Admin_model->view_banner();
		$this->load->view('Admin/Viewbanner',['viewbanner'=>$viewbanner]);
        }


     public function active_banner()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$active=$this->Admin_model->active_banner($id);

		if ($active) {
			$this->session->set_flashdata('message', 'Status update successfully');
			return redirect('Admin/view_banner');
			
		}
		else{
			$this->session->set_flashdata('message', 'Status not Updated');
				return redirect('Admin/view_banner');
			
		}
	}

	public function inactive_banner()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$inactive=$this->Admin_model->inactive_banner($id);

		if ($inactive) {
			$this->session->set_flashdata('message', 'Status update successfully');
			return redirect('Admin/view_banner');
			
		}
		else{
			$this->session->set_flashdata('message', 'Status not Updated');
				return redirect('Admin/view_banner');
			
		}
	}

	public function delete_banner()
	{
		$id=$this->input->get('id');
		$this->load->model('Admin_model');
		$del=$this->Admin_model->delete_banner($id);
		if ($del) {
			$this->session->set_flashdata('message', 'Delete successfully');
			return redirect('Admin/view_banner');
			
		}
		else{
			$this->session->set_flashdata('message', 'Details not deleted');
				return redirect('Admin/view_banner');
			
		}
	}

	public function edit_banner()
	{
		
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$editbanner=$this->Admin_model->edit_banner($id);
		$this->load->view('Admin/Editbanner',['editbanner'=>$editbanner]);
	}

	public function update_banner()
	{
		 if(!empty($_FILES['image']['name'])){

			 $config['upload_path'] = 'uploads/banner/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
               // $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                   $uploadData = $this->upload->data();
                   $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }

            $id=$this->input->post('id');
            $name =$this->input->post('name');
             $image=$_FILES['image']['name'];             
            $this->load->model('Admin_model');
            $data = array(
                'name' => $name,
                'image' => $image,
               'id' => $id
            );
            
            // Pass user data to model
            
            $insertUserData = $this->Admin_model->update_banner_image($data);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been update successfully.');
                return redirect('Admin/view_banner');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/view_banner');
            }
	 }else{
	 	// $config['upload_path'] = 'uploads/banner/';
   //              $config['allowed_types'] = 'jpg|jpeg|png|gif';
   //              $config['file_name'] = $_FILES['image']['name'];
                
   //              //Load upload library and initialize configuration
   //              $this->load->library('upload',$config);
   //             // $this->upload->initialize($config);
                
   //              if($this->upload->do_upload('image')){
   //                 $uploadData = $this->upload->data();
   //                 $picture = $uploadData['file_name'];
   //              }else{
   //                  $picture = '';
   //              }

            $id=$this->input->post('id');
            $name =$this->input->post('name');
     
          //  $image=$_FILES['image']['name'];
             
            $this->load->model('Admin_model');
            $data = array(
                'name' => $name,
              // 'image' => $image,
               'id' => $id
            );
            
            // Pass user data to model
            
            $insertUserData = $this->Admin_model->update_banner($data);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been update successfully.');
                return redirect('Admin/view_banner');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/view_banner');
            }
	 	}
	}

	//Product
    

	public function add_product()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
        $data['category'] = $this->Admin_model->getCountryRows();
        $this->load->view('Admin/Addproduct', $data);
		

	}

	 public function getStates(){
	 	$this->load->model('Admin_model');
        $states = array();
        $country_id = $this->input->post('category');
        if($country_id){
            $con['conditions'] = array('category'=>$country_id);
            $states = $this->Admin_model->getStateRows($con);
        }
        echo json_encode($states);
    }

	
	public function insert_product()
	{
		$config['upload_path'] = 'uploads/product/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['productimage']['name'];

         $this->load->library('upload',$config);
               // $this->upload->initialize($config);
                
                if($this->upload->do_upload('productimage')){
                   echo $uploadData = $this->upload->data();
                   $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }

        //  echo   $category =$this->input->post('category');
        //  echo   $subcategory =$this->input->post('subcategory');
        //  echo   $productname =$this->input->post('productname');
        //   echo  $price =$this->input->post('price');
        //  echo   $disprice =$this->input->post('disprice');
        // echo    $description =$this->input->post('description');
        //  echo   $status = $this->input->post('status');
        //  echo   $image=$_FILES['productimage']['name'];
             
	
            date_default_timezone_set('Asia/Kolkata');
            $date = date('Y-m-d H:i:s');

            $this->load->model('Admin_model');

            $data = array(
             'category' => $this->input->post('category'),
             'subcategory' =>$this->input->post('subcategory'),
             'productname' =>$this->input->post('productname'),
             'price' =>$this->input->post('price'),
             'disprice' =>$this->input->post('disprice'),
             'description'=>$this->input->post('description'),
             'status' =>$this->input->post('status'),
             'productimage' => $_FILES['productimage']['name'],
                'date' => $date
            );
            
            // Pass user data to model
            
            $insertUserData = $this->Admin_model->insert_product($data);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been added successfully.');
                return redirect('Admin/view_product');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/add_product');
            }
	}

	public function view_product()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
		$viewproduct=$this->Admin_model->view_product();
		$this->load->view('Admin/Viewproduct',['viewproduct'=>$viewproduct]);
	}

	public function active_product()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$active=$this->Admin_model->active_product($id);

		if ($active) {
			$this->session->set_flashdata('message', 'Status update successfully');
			return redirect('Admin/view_product');
			
		}
		else{
			$this->session->set_flashdata('message', 'Status not Updated');
				return redirect('Admin/view_product');
			
		}
	}

	public function inactive_product()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		$inactive=$this->Admin_model->inactive_product($id);

		if ($inactive) {
			$this->session->set_flashdata('message', 'Status update successfully');
			return redirect('Admin/view_product');
			
		}
		else{
			$this->session->set_flashdata('message', 'Status not Updated');
				return redirect('Admin/view_product');
			
		}
	}

	public function delete_product()
	{
		$id=$this->input->get('id');
		$this->load->model('Admin_model');
		$del=$this->Admin_model->delete_product($id);
		if ($del) {
			$this->session->set_flashdata('message', 'Delete successfully');
			return redirect('Admin/view_product');
			
		}
		else{
			$this->session->set_flashdata('message', 'Details not deleted');
				return redirect('Admin/view_product');
			
		}
	}

	public function edit_product()
	{
		$id=$this->input->get('id');

		$this->load->model('Admin_model');
		 $editproduct=$this->Admin_model->edit_product($id);
		$this->load->view('Admin/Editproduct',['editproduct'=>$editproduct]);
	}

	public function update_product()
	{
		if(!empty($_FILES['productimage']['name'])){

		$config['upload_path'] = 'uploads/product/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['productimage']['name'];

         $this->load->library('upload',$config);
               // $this->upload->initialize($config);
                
                if($this->upload->do_upload('productimage')){
                   $uploadData = $this->upload->data();
                   $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }

            $this->load->model('Admin_model');

            $data = array(

             'productname' =>$this->input->post('productname'),
             'price' =>$this->input->post('price'),
             'disprice' =>$this->input->post('disprice'),
             'description'=>$this->input->post('description'),
            'id'=> $this->input->post('id'),
             
             'productimage' => $_FILES['productimage']['name']
              
            );
            
            // Pass user data to model
            
         print_r($this->Admin_model->update_product_image($data));
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been added successfully.');
                return redirect('Admin/view_product');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/view_product');
            }
	}else{
		 $this->load->model('Admin_model');
            $data = array(

             'productname' =>$this->input->post('productname'),
             'price' =>$this->input->post('price'),
             'disprice' =>$this->input->post('disprice'),
             'description'=>$this->input->post('description'),
            'id'=> $this->input->post('id')
            );
            
            // Pass user data to model
            
         print_r($this->Admin_model->update_product($data));
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('message', 'User data have been added successfully.');
                return redirect('Admin/view_product');

            }else{
                $this->session->set_flashdata('message', 'Some problems occured, please try again.');
                return redirect('Admin/view_product');
            }
		}
       
	}

	public function view_order()
	{
		if(!$this->session->userdata('email')) {
				redirect('Admin/index');
			}
		$this->load->model('Admin_model');
		$vieworder=$this->Admin_model->view_order();

		//print_r($vieworder);
		$this->load->view('Admin/Orderhistory',['vieworder'=>$vieworder]);


	}
}


?>