<?php
class SinhVienModel extends DB
{
    public function getSV()
    {
        //connect db
      // echo  "Nguyen Van Ti";

        $qr="select * from posts";
        $rows=mysqli_query($this->con,$qr);
        $mang=array();
        while($row=mysqli_fetch_row($rows))
        {
            $mang[]=$row;
        }

         foreach ($mang as $i)
        {
            echo $i->content;
            echo "<br />";
        }


    }
}


?>