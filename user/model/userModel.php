<?php


include_once '../util/MySQLConnet.php';
class userModel
{
    //put your code here
    private $maKH;
    private $tenKH;
    private $sdt;
    private $email;
    private $taiKhoan;
    private $matKhau;
    public function getmatKhau()
    {
        return $this->matKhau;
    }

    public function setMatKhau($matKhau)
    {
        $this->password = $matKhau;
    }
    public function getTaiKhoan()
    {
        return $this->taiKhoan;
    }

    public function setTaiKhoan($taiKhoan)
    {
        $this->password = $taiKhoan;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->password = $email;
    }
    public function getsdt()
    {
        return $this->sdt;
    }

    public function setsdt($sdt)
    {
        $this->password = $sdt;
    }
    public function getTenKH()
    {
        return $this->tenKH;
    }

    public function setTenKH($tenKH)
    {
        $this->password = $tenKH;
    }
    public function getMaKH()
    {
        return $this->maKH;
    }

    public function setMaKH($maKH)
    {
        $this->password = $maKH;
    }


    public function __construct($maKH,$tenKH,$sdt,$email,$taiKhoan,$matKhau) {
        $this->maKH = $maKH;
        $this->tenKH = $tenKH;
        $this->sdt = $sdt;
        $this->email = $email;
        $this->taiKhoan = $taiKhoan;
        $this->matKhau = $matKhau;
    }

    public function  inssertUser()
    {
        $data = [
            'maKH' => $this->maKH,
            'tenKH'=>$this->tenKH,
            'sdt' => $this->sdt,
            'email'=>$this->email,
            'taiKhoan' => $this->taiKhoan,
            'matKhau' => $this->matKhau
        ];
        $dbConnet = new MySQLConnet();
        $pdo = $dbConnet->connet();
        $sql = "INSERT INTO khachhang (maKH,tenKH, SDT,email,taiKhoan,matKhau) VALUES (:maKH,:tenKH,:sdt,:email,:taiKhoan,:matKhau)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
    }
    public function getData()
    {
        $data = ["taiKhoan" =>$this-> taiKhoan];
        $dbConn = new MySQLConnet();
        $sql = "SELECT * FROM khachhang WHERE taiKhoan=:taiKhoan";
        return $dbConn->getData($sql, $data);
    }

    public function deleteData($userName)
    {
        $data = [
            'userName' => $userName
        ];
        $dbConnet = new MySQLConnet();
        $sql = "DELETE FROM admin WHERE tenTK=:userName";
        $dbConnet->deleteData($sql, $data);
    }
    public function updateData()
    {
        $data = [

            'tenKH'=>$this->tenKH,
            'maKH' => $this->maKH,
            'sdt' => $this->sdt,
            'email'=>$this->email,
            'taiKhoan' => $this->taiKhoan,
            'matKhau' => $this->matKhau
        ];
    
        $dbConnet = new MySQLConnet();
        $sql = "UPDATE khachhang set tenKH=:tenKH,sdt=:sdt,email=:email,matKhau=:matKhau WHERE maKH=:maKH";
        $dbConnet->update($sql, $data);
    }
}
