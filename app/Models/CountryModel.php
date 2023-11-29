<?php
namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model
{
    protected $table;

    protected $primaryKey = 'id'; // Replace 'id' with your actual primary key column name
    protected $allowedFields = ['city_name', 'country_flag', 'country_name']; // Replace with your actual field names

    public function __construct()
    {
        parent::__construct();
        $this->table = ''; // Set the default table name here
    }

    public function selecttable($tableName)
    {
        $this->table = $tableName;
    }

    public function getRecord($id)
    {
        return $this->find($id);
    }

    public function updateRecord($id, $data)
    {
        return $this->update($id, $data);
    }
}