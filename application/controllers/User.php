<?php 

class User extends MY_Controller {

	public function index()
	{


  

		$this->load->model('User_model');
		$viewbanner=$this->User_model->view_banner();
		$viewproduct=$this->User_model->view_product();
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->total_cart_item();
		//$viewsubcategory=$this->User_model->view_subcategory();

		$data = array('viewbanner' =>$viewbanner,
						'viewproduct' =>$viewproduct,
						'viewcategory' =>$viewcategory,
						'viewcart' =>$viewcart
						 //'sub' =>$sub

		 );
		// $this->load->view('User/Index',['viewbanner'=>$viewbanner]);
		$this->load->view('User/Index',$data);

	}

	public function login()
	{
		$session_value=$this->session->userdata('email');
		$this->load->model('User_model');
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);
		

		$data = array('viewcategory' =>$viewcategory,
						'viewcart' =>$viewcart
					);
		$this->load->view('User/Login',$data);
	}

	public function user_login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));

		$this->load->model('User_model');
		$data = array('email' => $email,
					'password' =>$password );

		$result=$this->User_model->check_mail($data);
		print_r($result);

		if ($result) {
			$this->session->set_flashdata('notregister', 'Your Email id is not registred');
		 	return redirect('User/login');
		}
			$value=$this->User_model->user_login($data);
		
		if ($value) {

			$sessArr = array('email' => $email
							// 'fname' => $value->$fname
							
						);
			$this->session->set_userdata($sessArr);

			// print_r($this->session->userdata('email'));
			// print_r($this->session->userdata('fname'));

		 	return redirect(base_url());
		}
		else{
			$this->session->set_flashdata('message', 'Email Id or Password are invalid');
		 	return redirect('User/login');
			}
		}

		public function logout()
		{
			$this->session->unset_userdata('email');
			return redirect(base_url());
		}

		public function change_password()
		{
			if(!$this->session->userdata('email')) {
				redirect(base_url());
			}

			$session_value=$this->session->userdata('email');
			$this->load->model('User_model');

		$viewcategory=$this->User_model->view_category();

		$viewcart =$this->User_model->view_cart($session_value);
		

		$data = array('viewcategory' =>$viewcategory,
						'viewcart' =>$viewcart
					);

		$this->load->view('User/Changepassword',$data);
		}

		public function update_password()
		{
			$session_value=$this->session->userdata('email');

		$Oldpass=md5($this->input->post('oldpassword'));
		$Newpass=md5($this->input->post('newpassword'));
		$Confirmpass=md5($this->input->post('confirmpassword'));

		$this->load->model('User_model');

		 $result=$this->User_model->check_password($Oldpass,$session_value);
		 if($result)
		 {

		 if($Newpass==$Confirmpass)
		 {
		 $result1=$this->User_model->update_password($Newpass,$session_value);
		 	
			if($result1)
			{
			$this->session->set_flashdata('success', 'Password Update Successfully!! Please Login with New Password');
		 	return redirect('User/logout');
		
			}else{
			$this->session->set_flashdata('error', 'Error');
			return redirect('User/change_password');	
			}
		}else{
			$this->session->set_flashdata('psdnotmatch', 'New Password and Confirm Password not matched');
				return redirect('User/change_password');	
			}
	}else
		{
		$this->session->set_flashdata('opsdnmatch', 'Old Password not matched');
		return redirect('User/change_password');	
	 	}
		}

		public function register()
		{
			$this->load->model('User_model');

			$session_value=$this->session->userdata('email');
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);
		

		$data = array('viewcategory' =>$viewcategory,
						'viewcart' =>$viewcart
					);

		$this->load->view('User/Register',$data);
		}

		public function register_details()
		{
			$password=$this->input->post('password');
			$Cpassword=$this->input->post('confirmpassword');

			if($password==$Cpassword)
			{

			$this->load->model('User_model');

		$data = array('fname' =>$this->input->post('fname'),
						'lname' =>$this->input->post('lname'),
						'email' =>$this->input->post('email'),
						'password' =>md5($this->input->post('password'))

			 );

			$result=$this->User_model->check_register_mail($data);

			if($result)
			{
				$this->session->set_flashdata('message', 'Your Email Id is already Registerd');
				return redirect('User/register');	
			}
			$insert_data=$this->User_model->register_details($data);
			if ($insert_data) 
				{
				$this->session->set_flashdata('success', 'Your registration has been sucessfully completed');
				return redirect('User/login');	
			}
			else{
				$this->session->set_flashdata('error', 'Somethings Worng');
				return redirect('User/register');
			}
			}else{
				$this->session->set_flashdata('notmatch', 'Password and Confirm password not matched');
				return redirect('User/register');
			}

		}

		public function update_profile()
		{
			
			$session_value=$this->session->userdata('email');
			$this->load->model('User_model');
			$viewuser=$this->User_model->update_profile($session_value);
			$viewcategory=$this->User_model->view_category();
			$viewcart=$this->User_model->view_cart($session_value);

			$data = array('viewcategory' =>$viewcategory,
						'viewuser' =>$viewuser,
						'viewcart' =>$viewcart
						 );

		$this->load->view('User/Updateprofile',$data);
		}

		public function update_profile_details()
	{
		 if(!empty($_FILES['image']['name'])){

			 $config['upload_path'] = 'uploads/user/';
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
 

            $this->load->model('User_model');
            $data = array(
                'image' => $_FILES['image']['name'],
               'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'mobile' => $this->input->post('mobile'),
               'email' => $this->input->post('email')
            );
            
            // Pass user data to model
            
            $updateUserData = $this->User_model->update_profile_details_image($data);
            
            //Storing insertion status message.
            if($updateUserData){
                $this->session->set_flashdata('success', 'Your details have been update successfully.');
                return redirect('User/update_profile');

            }else{
                $this->session->set_flashdata('error', 'Some problems occured, please try again.');
                return redirect('User/update_profile');
            }
	 }else{

             
            $this->load->model('User_model');
            $data = array(
           
               'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'mobile' => $this->input->post('mobile'),
               'email' => $this->input->post('email')
            );
            
            // Pass user data to model
            
            $updateUserData = $this->User_model->update_profile_details($data);
            

            if($updateUserData){
                $this->session->set_flashdata('success', 'User details have been update successfully.');
                return redirect('User/update_profile');
            
            }else{
                $this->session->set_flashdata('error', 'Some problems occured, please try again.');
                return redirect('User/update_profile');
            }
	 	}
	}

	public function single_product()
	{
		$id=$this->input->get('pid');
		 $sid=$this->input->get('subid');

		 $session_value=$this->session->userdata('email');

		$this->load->model('User_model');
		$product=$this->User_model->single_product($id);
		$viewcategory=$this->User_model->view_category();
		$similarproduct=$this->User_model->similar_product($sid);
		$viewcart =$this->User_model->view_cart($session_value);

		$data = array('product' => $product,
					 'similarproduct' => $similarproduct,
					 'viewcategory' => $viewcategory,
					  'viewcart' => $viewcart  
					);

		$this->load->view('User/Singleproduct',$data);
	}

	public function product()
	{
		$id=$this->input->get('subid');
		// $sid=$this->input->get('subid');

		$session_value=$this->session->userdata('email');

		$this->load->model('User_model');
		$product=$this->User_model->product($id);
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);


		//$similarproduct=$this->User_model->similar_product($sid);

		$data = array('product' => $product,
					 'viewcategory' => $viewcategory,
					 'viewcart' => $viewcart 
					);

		$this->load->view('User/Product',$data);
	}

	public function add_cart()
	{
		if(!$this->session->userdata('email')) {
			return redirect('User/login');
			}
			
		

		$data = array('productname' => $this->input->post('productname'),
			'productimage' => $this->input->post('productimage'),
			'productid' => $this->input->post('productid'),
			'price' => $this->input->post('price'),
			'disprice' => $this->input->post('disprice'),
			'quantity' => $this->input->post('quantity'),
			'subcategory' => $this->input->post('subcategory'),
			'user' => $this->session->userdata('email')
			

				 );
			$this->load->model('User_model');
			$viewcart=$this->User_model->add_cart($data);

			if($viewcart)
			{
				 return redirect('User/view_cart');
			}
			else{
				return redirect('User/Index');
			}
	
	}

	public function view_cart()
	{
		$this->load->model('User_model');

		$session_value=$this->session->userdata('email');

		$data = array('viewcategory' =>$this->User_model->view_category(),
		'viewcart' =>$this->User_model->view_cart($session_value)

		 );

		$this->load->view('User/Viewcart',$data);
	}

	public function delete_cart_item()
	{
		$id=$this->input->get('cartid');
		$this->load->model('User_model');
		$result=$this->User_model->delete_cart_item($id);

		if($result)
			{
				return redirect('User/view_cart');
			}
			else{
				return redirect('User/Index');
			}

	}

	public function update_cart_qty()
	{
		// echo $id=$this->input->post('cartid');
		// echo $qty=$this->input->post('quantity');
		$this->load->model('User_model');

		$data = array('id' => $this->input->post('cartid'),
					'quantity' => $this->input->post('quantity')
				);

		$result=$this->User_model->update_cart_qty($data);

		if($result)
			{
				return redirect('User/view_cart');
			}
			else{
				return redirect('User/Index');
			}
	}


	public function checkout()
	{
		$email=$this->session->userdata('email');
		if(empty($email))
		{
			return redirect('User/login');
		}else{

			$session_value=$this->session->userdata('email');

		$this->load->model('User_model');
	
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);
		$userdata =$this->User_model->user_details($session_value);


		//$similarproduct=$this->User_model->similar_product($sid);

		$data = array('viewcategory' => $viewcategory,
					 'viewcart' => $viewcart,
					 'userdata' => $userdata 
					);

			$this->load->view('User/Address',$data);
			// return redirect('User/address');
		}
	}

	public function search()
	{

		$session_value=$this->session->userdata('email');
		$search=$this->input->post('search');

		$this->load->model('User_model');
		$search=$this->User_model->search($search);

		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);

		$data = array('search' => $search,
					'viewcategory' => $viewcategory,
					'viewcart' => $viewcart,
						 );

		$this->load->view('User/Search',$data);
		

	}

	public function order()
	{

		 // HOLDER OF PIN CODES 
    $num_pins = 10; // THE NUMBER OF PIN CODES YOU WANT TO GENERATE
    $len_pins = 15; // THE LENGTH OF THE PIN CODES YOU WANT TO GENERATE

    // LOOP and generate the PIN codes
    for($i = 0; $i < $num_pins; $i++) {
        //REPLACE 'pin_fieldname' WITH WHATEVER FIELD NAME YOU HAVE IN YOUR TABLE 'pin'
        $pins = array('orderid'=>random_string('alnum', $len_pins));
        //IF YOU WANT TO HAVE DIFFERENT LENGTHS OF YOUR PIN CODES 
        //YOU CAN PUT SOME LOGIC HERE TO CHANGE $len_pins
        // $len_pins = {WHATEVER NUMBER};    
    }   


		$session_value=$this->session->userdata('email');
		date_default_timezone_set('Asia/Koltata');
		 $date = date('Y-m-d H:i:s');

		$this->load->model('User_model');
		$cartdata=$this->User_model->view_cart($session_value);

		 $data = array(
           
               'fname' => $this->input->post('fname'),
               'lname' => $this->input->post('lname'),
                'mobile' => $this->input->post('mobile'),
               'email' => $this->input->post('email'),
               'address' => $this->input->post('address'),
               'orderdate' => $date,
               'order_id' => json_encode($pins),
               'orderdata' => json_encode($cartdata)
            );
		//print_r($data);
		$result = $this->User_model->order($data);

		if($result)
			{
				return redirect('User/invoice');
			}
			else{
				return redirect('User/Index');
			}
	}

	public function invoice()
	{
		$session_value=$this->session->userdata('email');
		$this->load->model('User_model');
		$result=$this->User_model->delete_cart($session_value);
		if($result)
			{
				return redirect('User/view_cart');
			}
			else{
				return redirect('User/Inde');
			}
	}

	public function order_history()
	{
		$session_value=$this->session->userdata('email');
		$this->load->model('User_model');

		$orderhistory =$this->User_model->order_history($session_value);
		$viewcategory=$this->User_model->view_category();
		$viewcart =$this->User_model->view_cart($session_value);

		$data = array('orderhistory' => $orderhistory,
					'viewcategory' => $viewcategory,
					 'viewcart' => $viewcart 
					);
		$this->load->view('User/Orderhistory',$data);
	}


	


	
}

?>