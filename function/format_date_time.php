<?php

	function convert_date($date, $format_type = 'format_date') { 
		$format = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu',
			'Jan' => 'Januari',
			'Feb' => 'Februari',
			'Mar' => 'Maret',
			'Apr' => 'April',
			'May' => 'Mei',
			'Jun' => 'Juni',
			'Jul' => 'Juli',
			'Aug' => 'Agustus',
			'Sep' => 'September',
			'Oct' => 'Oktober',
			'Nov' => 'November',
			'Dec' => 'Desember'
		);
		
		if ($format_type == 'format_date') {
			$var_format = 'd M Y';
		} else if ($format_type == 'format_datetime') {
			$var_format = 'd M Y H:i:s';
		} else if ($format_type == 'format_time') {
			$var_format = 'H:i:s';
		} else {
			$var_format = 'd-M-Y H:i:s';
		}
		
		if ($date == '0000-00-00 00:00:00' or $date === null) {
			return '-';
		} else { 
			return strtr(date($var_format, strtotime($date)), $format);
		}
	}
	
	function nama_hari($tanggal) {
        $ubah = gmdate($tanggal, time()+60*60*8);
        $pecah = explode("-",$ubah);
        $tgl = $pecah[2];
        $bln = $pecah[1];
        $thn = $pecah[0];
		
        $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
        $nama_hari = "";
        if($nama=="Sunday") {$nama_hari="Minggu";}
        else if($nama=="Monday") {$nama_hari="Senin";}
        else if($nama=="Tuesday") {$nama_hari="Selasa";}
        else if($nama=="Wednesday") {$nama_hari="Rabu";}
        else if($nama=="Thursday") {$nama_hari="Kamis";}
        else if($nama=="Friday") {$nama_hari="Jum'at";}
        else if($nama=="Saturday") {$nama_hari="Sabtu";}
        return $nama_hari;
    }
	
	function month_3_char($bln) {
        switch ($bln) {
            case 1:
                return "Jan";
                break;
            case 2:
                return "Feb";
                break;
            case 3:
                return "Mar";
                break;
            case 4:
                return "Apr";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Jun";
                break;
            case 7:
                return "Jul";
                break;
            case 8:
                return "Agu";
                break;
            case 9:
                return "Sep";
                break;
            case 10:
                return "Okt";
                break;
            case 11:
                return "Nov";
                break;
            case 12:
                return "Des";
                break;
        }
    }
	
	function datediff($start,$end=false)
	{
		$return = array();
	   
		try {
			$start = new DateTime($start);
			$end = new DateTime($end);
			$form = $start->diff($end);
		} catch (Exception $e){
			return $e->getMessage();
		}
	   
		$display = array('y'=>'year',
						 'm'=>'month',
						 'd'=>'day',
						 'h'=>'hour',
						 'i'=>'minute',
						 's'=>'second');
						
		foreach($display as $key => $value) {
			if($form->$key > 0){
				$return[] = $form->$key.' '.($form->$key > 1 ? $value.'s' : $value);
			}
		}
	   
		return implode($return, ', ');
	}
	
	function bulan_num_to_char($bln) {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }

?>