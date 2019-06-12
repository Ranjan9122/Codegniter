<?php 

class User_model extends CI_Model
{
	public function check_register_mail($data)
		{
		$query=$this->db->select('email')
        		 ->where('email',$data['email'])
       			 ->get('user');
       			//echo $this->db->last_query();die;
				if($query->num_rows()>0){
				return true;
			}else{
				return false;
			}
		
		}

		public function register_details($data)
	{

		$query1=$this->db->insert('user',$data);
					return $query1;
	}

	// Login

	public function check_mail($data)
		{
		$query=$this->db->select('email')
        		 ->where('email',$data['email'])
       			 ->get('user');
       			//echo $this->db->last_query();die;
				if(empty($query->num_rows())){
				return true;
			}else{
				return false;
			}
		
		}

		public function user_login($data)
		{
			$query=$this->db->select('*')
  				->where('email',$data['email'])
  				->where('password',$data['password'])
  				->get('user');
  				//echo $this->db->last_query();die;
  				if($query->num_rows())
  				{
  					return True;
  				}
  				else
  				{
  					return False;
  				}
		}

		// Change Password

		public function check_password($Oldpass,$session_value)
		{
		$query=$this->db->select('password')
        		 ->where(['email'=>$session_value])
       			 ->get('user');
				//echo $this->db->last_query();die;
					if($query->num_rows())
  				{
  					return True;
  				}
  				else
  				{
  					return False;
  				}
		}

	public function update_password($Newpass,$session_value)
	{

		$query=$this->db->set(['password'=>$Newpass])
        		 ->where(['email'=>$session_value])
       			 ->update('user');   			
       			 //echo $this->db->last_query();die;
					return $query;
	}

	public function update_profile($session_value)
	{

		$query=$this->db->select('*')
        		 ->where(['email'=>$session_value])
       			 ->get('user');   			
       			// echo $this->db->last_query();die;
					return $query->result();
	}

	public function update_profile_details_image($data)
	{
		$this->db->where('email',$data['email']);

		  $dbdata = array(
          "fname" => $data['fname'],
          "lname" => $data['lname'],
          "mobile" => $data['mobile'],
           "image" => $data['image']
  
     );
		 $this->db->update('user', $dbdata);
					return ;
	}

	public function update_profile_details($data)
	{
		$this->db->where('email',$data['email']);

		  $dbdata = array(
          "fname" => $data['fname'],
          "lname" => $data['lname'],
          "mobile" => $data['mobile']
  
     );
		 $this->db->update('user', $dbdata);
					return ;
	}

	public function view_banner()
	{
		$query=$this->db->select('*')
					->where('status',1)
					->get('banner');
					return $query->result();
	}

	public function view_product()
	{
		$query=$this->db->select('*')
					->where('status',1)
					->get('product');
					return $query->result();
	}

	public function single_product($id)
	{
		$query=$this->db->select('*')
					->where(['id'=>$id])
					->get('product');
					//echo $this->db->last_query();die;
					return $query->result();
	}

	public function similar_product($sid)
	{
		$query=$this->db->select('*')
					->where(['subcategory'=>$sid])
					->where('status',1)
					->get('product');
					//echo $this->db->last_query();die;
					return $query->result();
	}

	public function view_category()
	{
		// $query=$this->db->select('category.category,subcategory.id,subcategory.subcategory')
		// 			->join('subcategory', 'category.id = subcategory.category')
		// 			->where('category.status',1)
		// 			->get('category');
		// 			echo $this->db->last_query();die;
		// 			return $query->result();

					$query=$this->db->select('*')
					// ->join('subcategory', 'category.id = subcategory.category')
					->where('status',1)
					->get('category');
					//echo $this->db->last_query();die;
					return $query->result();
	}

	public function product($id)
	{
		$query=$this->db->select('*')
						->where(['subcategory'=>$id])
						->get('product');
						//echo $this->db->last_query();die;
						return $query->result();
	}

	// public function view_subcategory()
	// {
	// 	$query=$this->db->select('*')
	// 					->where(['category'=>1])
	// 					->get('subcategory');
	// 					//echo $this->db->last_query();die;
	// 					return $query->result();
	// }

	public function add_cart($data)
	{
		$query=$this->db->insert('cart',$data);
				return $query;
	}

	public function view_cart($session_value)
	{
		$query=$this->db->select('*')
					->where(['user'=>$session_value])
				->get('cart');
				return $query->result();
	}

	public function delete_cart_item($id)
	{
		$query=$this->db->where(['id'=>$id])
					->delete('cart');
					return $query;
	}

	public function total_cart_item()
	{
		$query = $this->db->query('SELECT * FROM cart');
			 $query->num_rows();
					//echo $this->db->last_query();die;
				//return $query->result();
	}

	public function update_cart_qty($data)
	{
		$query=$this->db->set('quantity',$data['quantity'])
        		 ->where('id',$data['id'])
       			 ->update('cart');
       			//echo $this->db->last_query();die;
					return $query;
	}

	public function search($search)
	{
		$query= $this->db->select('*')
					->where("productname LIKE '%$search%'")
						->get('product');
						//echo $this->db->last_query();die;
						return $query->result();
	}

	public function user_details($session_value)
	{
		$query= $this->db->select('*')
					->where(['email'=>$session_value])
						->get('user');
						//echo $this->db->last_query();die;
						return $query->result();
	}

	public function order($data)
	{
		$query=$this->db->insert('orderhistory',$data);
				return $query;
	}

	public function delete_cart($session_value)
	{
		$query=$this->db->where(['user'=>$session_value])
					
					->delete('cart');
					return $query;
	}

	public function order_history($session_value)
	{
		$query= $this->db->select('*')
					->where(['email'=>$session_value])
						->get('orderhistory');
						//echo $this->db->last_query();die;
						return $query->result();
	}




}



?>