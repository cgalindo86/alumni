<?php

    HorarioAsesor('','','1700','1930','17:00','19:30','');

    function HorarioAsesor($asesor,$dia,$horai,$horaf,$inicio,$fin,$distrito){
        //include('conexion.php');

        //$ini = intval($horai);
        //$fin = intval($horaf);
        $in = round(floatval($horai)/100);
        $fi = round(floatval($horaf)/100);
        
        $ci = 1;
        $cf = intval($fi) - intval($in);

        for($i=$in; $i<=$fi-1; $i=$i+1){
            $fin2 = $i+1;
            if(intval($fin2)<10){ $fin2 = '0'.$fin2;}
            if($ci==1){
                $ee = explode(":",$inicio);
                $cin = intval($ee[0])."".$ee[1];
                $cif = intval($fin2).'00';
                
                $cin1 = $ee[0].":".$ee[1];
                $cif1 = $fin2.':00';
                echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
            } else if($ci==$cf){
                $cin = $i.'00';
                $cif = $fin2.'00';
                $cin1 = $i.":00";
                if(intval($i)<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $fin2.":00";
                echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';

                $ee = explode(":",$fin);
                $cif = intval($ee[0])."".$ee[1];
                $cin = (intval($i)+1).'00';
                $cin1 = (intval($i)+1).":00";
                if(intval($i)+1<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $ee[0].":".$ee[1];
                echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
            } else {
                $cin = $i.'00';
                $cif = $fin2.'00';
                $cin1 = $i.":00";
                if(intval($i)<10){ $cin1 = '0'.$i.":00";}
                $cif1 = $fin2.":00";
                echo $cin1."-".$cif1.'-'.$cin.'-'.$cif.'<br>';
            }
            
            $ci=$ci+1;

        }
        
    }


?>