<?php 
class Admin_model extends CI_Model
{

	public function admin_login($email,$password)
	{
  $query=$this->db->select('*')
  				->where(['email'=>$email,'password'=>$password])
  				->get('adminlogin');
  				
  				if($query->num_rows())
  				{
  					return True;
  				}
  				else
  				{
  					return False;
  				}
	}

	public function check_password($Oldpass,$session_value)
	{
		$query=$this->db->select('password')
        		 ->where('email',$session_value['email'])
       			 ->get('adminlogin');
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
        		 ->where('email',$session_value['email'])
       			 ->update('adminlogin');
       			

       			 //echo $this->db->last_query();die;

       			
					return $query;
	}
		
		// Category

	public function insertcategory($data)
	{

		$query1=$this->db->insert('category',$data);
					return $query1;
	}

	public function checkcategory($data)
	{

		$query=$this->db->select('category')
        		 ->where('category',$data)
       			 ->get('category');
				if($query->num_rows()>0)
				{
					return $query->result();
				}
				else
				{
					return $query->result();
				}

	}

	public function viewcategory()
	{
	$query=$this->db->select('*')
					
					->get('category');
					return $query->result();

	}

	public function deletecategory($id)
	{
	 $query=$this->db->query("delete category,subcategory,product from category inner join subcategory on category.id=subcategory.category inner join product on category.id=product.category where category.id=$id ");

		// echo $this->db->last_query();die;

		 return $query;

	}

	public function updatecategory($data)
	{

	$query=$this->db->set('category',$data['category'])
        		 ->where('id',$data['id'])
       			 ->update('category');
					return $query;

	}

	public function activecategory($id)
	{
		// $query=$this->db->set('status',1)
 //        		 ->where('id',$id)
 //

	$query=$this->db->query("update category inner join subcategory on subcategory.category=category.id INNER JOIN product on category.id=product.category set category.status=0,subcategory.status=0,product.status=0 where category.id=$id");
	
       			// echo $this->db->last_query();die;
					return $query;

	}

	public function inactivecategory($id)
	{

	// $query=$this->db->set('status',1)
 //        		 ->where('id',$id)
 //       			 ->update('category');

		$query=$this->db->query("update category inner join subcategory on subcategory.category=category.id INNER JOIN product on category.id=product.category set category.status=1,subcategory.status=1,product.status=1 where category.id=$id");
					return $query;

	}

	// Sub Category Start

	public function view_active_category()
	{
	$query=$this->db->select('*')
					->where('status',1)
					->get('category');
					return $query->result();

	}

	public function insert_subcategory($data)
	{

		$query1=$this->db->insert('subcategory',$data);
					return $query1;
	}

	public function view_subcategory()
	{
	$query=$this->db->select('category.category,subcategory.subcategory,subcategory.status,subcategory.date,subcategory.id')
					->join('subcategory', 'category.id = subcategory.category')
					->get('category');
					return $query->result();

	}

	public function delete_subcategory($id)
	{
	$query=$this->db->where(['id'=>$id])
					->delete('subcategory');
					return $query;

	}

	public function update_subcategory($data)
	{

	$query=$this->db->set('subcategory',$data['subcategory'])
        		 ->where('id',$data['id'])
       			 ->update('subcategory');
					return $query;
	}

	public function active_subcategory($id)
	{

	$query=$this->db->query("update subcategory inner join product on subcategory.id=product.subcategory set subcategory.status=0,product.status=0 where subcategory.id=$id");
			return $query;

	}

	public function inactive_subcategory($id)
	{

	$query=$this->db->query("update subcategory inner join product on subcategory.id=product.subcategory set subcategory.status=1,product.status=1 where subcategory.id=$id");
			return $query;

	}

	// Banner



	public function insert_banner($data)
	{
		$query=$this->db->insert('banner',$data);
			return $query;
		
	}

	public function view_banner()
	{
		$query=$this->db->select('*')
					->get('banner');
			return $query->result();
		
	}

	public function active_banner($id)
	{

	$query=$this->db->set('status',0)
        		 ->where('id',$id)
       			 ->update('banner');
					return $query;

	}

	public function inactive_banner($id)
	{

	$query=$this->db->set('status',1)
        		 ->where('id',$id)
       			 ->update('banner');
					return $query;

	}

	public function delete_banner($id)
	{
	$query=$this->db->where(['id'=>$id])
					
					->delete('banner');
					return $query;
	}

	public function edit_banner($id)
	{
		$query=$this->db->select('*')
					->where(['id'=>$id])
					->get('banner');
			return $query->result();
	}

	public function update_banner_image($data)
	{
		$this->db->where('id',$data['id']);

		  $dbdata = array(
          "name" => $data['name'],
           "image" => $data['image']
  
     );
		 $this->db->update('banner', $dbdata);
					return ;
	}

	public function update_banner($data)
	{
		$this->db->where('id',$data['id']);

		  $dbdata = array(
          "name" => $data['name']
          // "image" => $data['image']
  
     );
		 $this->db->update('banner', $dbdata);
					return ;
	}

	// Product

	 function getCountryRows($params = array()){
        $this->db->select('id,category');
        $this->db->from('category');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('category'.$key,$value);
                }
            }
        }
        $this->db->where('status','1');
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }

	 function getStateRows($params = array()){
        $this->db->select('s.id, s.subcategory');
        $this->db->from($this->subcategory.' as s');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('s.'.$key,$value);
                }
            }
        }
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }


	public function insert_product($data)
	{
		$query=$this->db->insert('product',$data);
			return $query;
		
	}

	public function view_product()
	{
		$query=$this->db->select('*')


		// ('category.category,subcategory.subcategory,product.productname,product.productimage,product.price,product.disprice,product.description,product.date,product.id,product.status')
		// ->join('subcategory', 'subcategory.category = category.id')
		// ->join('product', 'product.category = category.id')
			->get('product');

		// query('select category.category,subcategory.subcategory,product.productname,product.productimage,product.price,product.disprice,product.description,product.date,product.status,product.id from category INNER JOIN subcategory on category.id=subcategory.category INNER JOIN product on category.id=product.category');

		

					//echo $this->db->last_query();die;
			return $query->result();
		
	}

	public function active_product($id)
	{

	$query=$this->db->set('status',0)
        		 ->where('id',$id)
       			 ->update('product');
					return $query;

	}

	public function inactive_product($id)
	{

	$query=$this->db->set('status',1)
        		 ->where('id',$id)
       			 ->update('product');
					return $query;

	}

	public function delete_product($id)
	{
	$query=$this->db->where(['id'=>$id])
					
					->delete('product');
					return $query;
	}

	public function edit_product($id)
	{
		$query=$this->db->select('*')

		// ('category.category,subcategory.subcategory,product.productname,product.productimage,product.price,product.disprice,product.description')
		// ->join('subcategory','subcategory.category = category.id')
		// ->join('product','product.category = category.id')
					->where(['id'=>$id])
					->get('product');
						//echo $this->db->last_query();die;
			return $query->result();
	}

	public function update_product_image($data)
	{
		$this->db->where('id',$data['id']);

		  $dbdata = array(
          "productname" => $data['productname'],
          "productimage" => $data['productimage'],
          "price" => $data['price'],
          "disprice" => $data['disprice'],
          "description" => $data['description']
  
     );
		 $this->db->update('product', $dbdata);
					return ;
	}

	public function update_product($data)
	{
		$this->db->where('id',$data['id']);

		  $dbdata = array(
          "productname" => $data['productname'],
          "price" => $data['price'],
          "disprice" => $data['disprice'],
          "description" => $data['description']
  
     );
		 $this->db->update('product', $dbdata);
					return ;
	}

	public function view_order()
	{
		$query=$this->db->select('*')
					->get('orderhistory');
			return $query->result();
	}



}
?>