<?php
date_default_timezone_set('UTC+06:00');
	function getBanglaDate($date){
 $engArray = array(1,2,3,4,5,6,7,8,9,0,'Sat','Sun','Mon','Tue','Wed','Thu','Fri','January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December','am', 'pm');
  $bangArray = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'পুর্বাহ্ন','অপরাহ্ন');

 $converted = str_replace($engArray, $bangArray, $date);
 return $converted;
}
		$timestamp=time();
		$timestamp=$timestamp+(6*60*60);
	 $date = date( "D, j F, Y, a g:i",$timestamp) ;
	 $date = getBanglaDate($date);
	 echo "বাংলাদেশ ,".$date;
 
?>