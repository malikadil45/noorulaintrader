<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Replace 'users' with your actual table name


    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    public function getmemberByEmail($email)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('email', $email);
        return $builder->get()->getRowArray();
    }
    public function getmemberByusername($username)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('username', $username);
        return $builder->get()->getRowArray();
    }

    public function getmemberdata($id)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        return $builder->get()->getRowArray();
    }

    public function getstaffdata($id)
    {
        $builder = $this->db->table('staff');
        $builder->select("*");
        $builder->where('staffid', $id);
        return $builder->get()->getResult();
    }

    public function getproductquantitybyid($id)
    {
        $builder = $this->db->table('products');
        $builder->select("*");
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getphonenumber($phonenumber)
    {
        $builder = $this->db->table('shopkeeper');
        $builder->select("*");
        $builder->where('phonenumber', $phonenumber);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getproductpricebyid($id, $shopkeeper_id)
    {
        $builder = $this->db->table('productprice');
        $builder->select("*");
        $builder->where('productid', $id);
        $builder->where('shopkeeper', $shopkeeper_id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getshopkeeperbyid($id)
    {
        $builder = $this->db->table('shopkeeper');
        $builder->select("*");
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getproductbyid($id)
    {
        $builder = $this->db->table('products');
        $builder->select("*");
        $builder->where('id', $id);
        $query = $builder->get();
        return $query->getRowArray();
    }
    public function updateshopkeeperById($id, $data)
    {
        $builder = $this->db->table('shopkeeper');
        $builder->where('id', $id);
        $builder->update($data);
    }


    public function updateshopkeeperprice($condition1, $condition2, $data)
    {
        $builder = $this->db->table('productprice');
        $builder->where(['productid' => $condition1, 'shopkeeper' => $condition2]);
        $builder->update($data);
    }

    public function updateproductorderById($id, $data)
    {
        $builder = $this->db->table('products');
        $builder->where('id', $id);
        $builder->update($data);
    }

    public function updateproductById($id, $data)
    {
        $builder = $this->db->table('products');
        $builder->where('id', $id);
        $builder->update($data);
    }


    public function deleteCityById($id)
    {
        $builder = $this->db->table('shopkeeper');
        $builder->where('id', $id);
        $builder->delete();
    }
    public function deleteData($condition1, $condition2, $condition3)
    {
        $builder = $this->db->table('temporderproduct');

        $builder->where($condition1)
            ->Where($condition2)
            ->Where($condition3);

        $builder->delete();
    }

    public function updatetodaystock($productid, $data1)
    {
        $builder = $this->db->table('products');
        $builder->where('id', $productid);
        $builder->update($data1);
    }

    public function resetprice($productid, $data)
    {
        $builder = $this->db->table('productprice');
        $builder->where('productid', $productid);
        $builder->update($data);
    }

    public function weekend($todaystock, $todaystockpiece, $todaycaton, $catonSoldatabase, $boxesSoldatabase, $piecesSolddatabase)
    {
        $builder = $this->db->table('products');
        $builder->set([$todaystock => null, $todaystockpiece => null, $todaycaton => null, $catonSoldatabase => null, $boxesSoldatabase => null, $piecesSolddatabase => null]); // Specify the column name and the new value

        // You can add more conditions to target specific rows if needed
        // For example:
        // $builder->where('some_column', 'some_value');

        $builder->update();
    }

    public function getProductNames($productIds)
    {
        $builder = $this->db->table('products');
        $builder->select("*");
        $builder->whereIn('productid', $productIds);
        return $builder->get()->getResult();
    }

    public function getProductNamessecond($productIds)
    {
        $builder = $this->db->table('products');
        $builder->select("*");
        $builder->where('id', $productIds);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function updateCountryById($id, $data)
    {
        $builder = $this->db->table('country');
        $builder->where('id', $id);
        $builder->update($data);
    }

    public function updatememberById($id, $data)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        $builder->update($data);
    }

    public function updatelogo($id, $data)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        $builder->update($data);
    }


    public function approvedmember($id, $data)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        $builder->update($data);
    }

    public function verify($id, $data)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        $builder->update($data);
    }


    public function rejectmember($id, $data)
    {
        $builder = $this->db->table('member_signup');
        $builder->where('id', $id);
        $builder->update($data);
    }
    // public function copytable($ordernumber)
    // {
    //     $sourceTable = 'temporderproduct';
    //     $destinationTable = 'orderproduct';
    //     // Build the SQL query to copy data from source_table to destination_table
    //     $query = $this->db->query("INSERT INTO $destinationTable SELECT * FROM $sourceTable where orderid = '".$ordernumber."'");

    //     // Execute the query
    //     $query->getResult();
    // }

    public function copytable($ordernumber)
    {
        $sourceTable = 'temporderproduct';
        $destinationTable = 'orderproduct';

        // Get the columns excluding the 'id' column
        $columns = $this->db->getFieldNames($sourceTable);
        $columns = array_filter($columns, function ($column) {
            return $column !== 'id';
        });

        // Build the SQL query to copy data from source_table to destination_table
        $columnString = implode(', ', $columns);
        $query = $this->db->query("INSERT INTO $destinationTable ($columnString) SELECT $columnString FROM $sourceTable WHERE orderid = '$ordernumber'");

        // Execute the query
        $query->getResult();
    }

    public function selectData($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $query = $builder->get();
        return $query->getResult();
    }
    public function selectorderdashboard($table, $where = array())
    {
        date_default_timezone_set("Asia/Karachi");
        $today = date('Y-m-d');
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $builder->where('DATE(date) =', $today);
        $builder->orderBy('id', 'DESC'); // Replace 'your_column' with the actual column name
        $builder->limit(30); // Set the limit to 5
        $query = $builder->get();
        return $query->getResult();
    }

    public function selectorderlists($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $builder->orderBy('id', 'DESC'); // Replace 'your_column' with the actual column name
        $query = $builder->get();
        return $query->getResult();
    }

    public function selectstock($table)
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where("todaycaton != 0");
        $builder->orWhere("todaystock != 0");
        $builder->orWhere("todaystockpiece != 0");
        $query = $builder->get();
        return $query->getResult();
    }

    public function getTodayData()
    {
        // Get today's date in the format 'Y-m-d'
        date_default_timezone_set("Asia/Karachi");
        $today = date('Y-m-d');
        $builder = $this->db->table('orders');
        $builder->select("*");
        $builder->where('DATE(date) =', $today);
        $query = $builder->get();
        return $query->getResult();
    }
    public function gettotalsale()
    {

        $builder = $this->db->table('orders');
        $builder->select("*");
        $query = $builder->get();
        return $query->getResult();
    }

    public function getTodayDatacash()
    {
        // Get today's date in the format 'Y-m-d'
        date_default_timezone_set("Asia/Karachi");
        $today = date('Y-m-d');
        $paymentmethod = 1;
        $builder = $this->db->table('orders');
        $builder->select("*");
        $builder->where('DATE(date) =', $today);
        $builder->where('paymentmethod', $paymentmethod);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getTodayDatacredit()
    {
        // Get today's date in the format 'Y-m-d'
        date_default_timezone_set("Asia/Karachi");
        $today = date('Y-m-d');
        $paymentmethod = 2;
        $builder = $this->db->table('orders');
        $builder->select("*");
        $builder->where('DATE(date) =', $today);
        $builder->where('paymentmethod', $paymentmethod);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getDatacredit()
    {
        $paymentmethod = 2;
        $builder = $this->db->table('orders');
        $builder->select("*");
        $builder->where('paymentmethod', $paymentmethod);
        $query = $builder->get();
        return $query->getResult();
    }

    public function selectDatarow($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $query = $builder->get();
        return $query->getRowArray();
    }
    public function selectLastRow($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $builder->orderBy('id', 'DESC'); // Assuming 'id' is the primary key or a unique identifier
        $builder->limit(1); // Limit the result to one row
        $query = $builder->get();
        return $query->getRowArray();
    }
    public function selectDatarowlimit($table, $where = array())
    {
        $builder = $this->db->table($table);
        $builder->select("*");
        $builder->where($where);
        $builder->orderBy('id', 'DESC'); // Replace 'your_column' with the actual column name
        $builder->limit(1); // Set the limit to 5
        $query = $builder->get();
        return $query->getRowArray();
    }
    public function countRows($table)
    {
        $db = \Config\Database::connect(); // Get database connection
        $builder = $db->table($table); // Replace 'your_table_name' with your actual table name

        $totalRows = $builder->countAllResults(); // Count all rows in the table
        return $totalRows;
    }
}