<?php
class home extends  Controll {



    public function getdata()
    {
//      $sv=$this->model("SinhVienModel");
//      echo $sv->getSV();
       // echo "danh sach SV";
      //  require_once "./mvc/models/SinhVienModel.php";
       // SinhVienModel::getSV();

         $servername="localhost";
         $username="root123";
         $password="";
         $dbname="jiahsin_app";
        $con=mysqli_connect($servername,$username,$password) or die ("NOT CONNECT TO SERVER");
        mysqli_select_db($con,$dbname);


        $qry="select * from posts";
        $result= mysqli_query($con,$qry);
        while ($row=mysqli_fetch_row($result))
        {
            echo $row[4];
            echo "<br />";
        }

    }
     function show()
    {
         //init("SinhVienModel");
         //   $this->view("aodep");
    }
}



?>
