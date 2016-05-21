<form action="" method="GET">
	Username <input type="text" name="username"/> <button>Go</button>
</form>
<hr>

<?php
	
	// access_token
	$access_token = "1353051347.1677ed0.06decb6c48ab45a088da10e4a7358bf4";
	
	// username
	$username = (!empty($_GET['username']) ? $_GET['username'] : 'bachors');
	
	// max_id untuk gallery selanjutnya
	$next_page = (!empty($_GET['next_page']) ? $_GET['next_page'] : '');
	
	// mendapatkan user_id berdasarkan username
	$user_id = get_user_id(json_to_array('users/search?q='.'asdan15'.'&access_token='.$access_token), 'asdan15');
	
	// menampilkan gambar
	echo get_user_gallery(json_to_array('users/'.$user_id.'/media/recent/?access_token='.$access_token.'&max_id='.$next_page), $username);
	

	// fungsi untuk merubah data json menjadi array
	function json_to_array($url){
		$json_url = 'https://api.instagram.com/v1/'.$url;
		$json = file_get_contents($json_url);
		$array = json_decode($json);
		return $array;
	}
	
	// fungsi untuk mendapatkan user_id berdasarkan username
	function get_user_id($user_array, $username){
		foreach($user_array->data as $user) {
			if ($user->username == $username){
				return $user->id;
			}
		}
	}
	
	// fungsi untuk menampilkan semua gambar
	function get_user_gallery($gallery_array, $username){
		$html = '';
		foreach( $gallery_array->data as $gallery ) {
			$html .= '<a href = "'.$gallery->link.'" title="'.(!empty($gallery->caption->text) ? $gallery->caption->text.' - '.get_date($gallery->created_time) : get_date($gallery->created_time)).'" target="blank"><img src ="'.$gallery->images->thumbnail->url.'"/></a>';
		}
		$html .= (!empty($gallery_array->pagination->next_max_id) ? '<h3 align="center"><a href="?username='.$username.'&next_page='.$gallery_array->pagination->next_max_id.'">NEXT</a></h3>' : '');
		return $html;
	}
	
	// fungsi untuk merubah format time
	function get_date($time)
	{
		$time = time() - $time;
		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);
		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s ago':'');
		}
	}

?>								
