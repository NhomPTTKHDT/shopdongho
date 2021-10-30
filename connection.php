<?php
 
// Lớp database
class Database
{
    private $hostname = 'localhost',
            $username = 'root',
            $password = '',
            $dbname = 'shop_dong_ho';
 

    public $connect = NULL;

 
    // Hàm kết nối
    public function connect()
    {
        return $this->connect = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
    }
 
    // Hàm ngắt kết nối
    public function close()
    {
        if ($this->connect)
        {
            mysqli_close($this->connect);
        }
    }
 

    
    // Hàm truy vấn
    public function query($sql) 
    {       
        if ($this->connect)
        {
            return mysqli_query($this->connect, $sql);
        }
    }
 
 

    // Hàm lấy dữ liệu
    public function getData($sql){
        $result = mysqli_query($this->connect,$sql);
        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
        } else return null;
        return $data;
    }
    
  
}
 
?>