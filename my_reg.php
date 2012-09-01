<?php
/*
Plugin Name: DisplayingCountries
Plugin URI: http://cssoftdevlabs.com/Dev008/
Description: Wordpress plugin Countries 2012
Author: YO YO SETHI'S
Version: 1.0.1
Author URI: http://cssoftdevlabs.com/
*/
$siteurl = get_option('siteurl');
define('OLY_FOLDER', dirname(plugin_basename(__FILE__)));
define('OLY_URL', $siteurl.'/wp-content/plugins/' . OLY_FOLDER);
define('OLY_FILE_PATH', dirname(__FILE__));
define('OLY_DIR_NAME', basename(OLY_FILE_PATH));

register_activation_hook(__FILE__,'oly_install');
register_deactivation_hook(__FILE__ , 'oly_uninstall' );
register_uninstall_hook(__FILE__ , 'oly_delete');
function oly_install()
{
    
}
function oly_uninstall()
{
    
}
function oly_delete()
{
  unlink(OLY_FOLDER);
}
add_action('admin_menu','OLY_admin_menu');

function OLY_admin_menu() { 
	add_menu_page(
		"Countrieslist",
		"Countrieslist",
		8,
		__FILE__,
		"oly_admin_menu_list",
		OLY_URL."/images/logo.jpg"
	); 
	
           
}
function oly_admin_menu_list()
{
	echo "<br><br><br>put <strong>[countries_list]</strong>Displays all Countries with their capitals and currencies<br>";
        echo "also Use widget to display Countries<br>";
}

add_shortcode("countries_list","countries_list_listing_shortcode");
function countries_list_listing_shortcode() 
{ 
?>
       <style type="text/css">
.profile-public{ width:633px;}
.profile-public img{ width:50px; height:50px; float:left; vertical-align: top;}
.profile-public .name-content{ float:left; margin-left:30px;}

.all-opportunity{}
.all-opportunity .right-btns{ float:right; width:500px;}
.right-btns .btns{ float:left; background:#f91c0e; padding:5px 8px; font:bold 12px Arial, Helvetica, sans-serif; color:#fff; margin:0 2px; border-radius:1px 10px 1px 1px;}
.right-btns .btns a{color:#fff; text-decoration:none;}

.job-feed1{width:633px; height: 650px; overflow: scroll;}
.job-feed1 ul{}
.job-feed1 li{padding: 12px 0; border-bottom:1px solid #f4f4f4;}
.job-feed1 a{}
.job-feed1 a:hover{}
.job-feed1 .heading-feed{font:bold 14px Arial, Helvetica, sans-serif; float:left; width:200px; background:#dfdfdf; padding:10px 0 10px 5px;}
.job-feed1 .rss-feed{font:bold 14px Arial, Helvetica, sans-serif; float:left; width:200px; background:#dfdfdf;padding:10px 0;}
.job-feed1 .email-feed{font:bold 14px Arial, Helvetica, sans-serif; float:left;  width:185px;background:#dfdfdf;padding:10px 0;}

.job-feed1 .job-feed-text{font:bold 12px Arial, Helvetica, sans-serif; float:left; width:200px; padding-left:5px; }
.job-feed1 .rss-feed-text{float:left;  width:200px;}
.job-feed1 .email-feed-text{float:left;  width:185px;}

</style>
</head>

<body>
<div class="job-feed1">
	<ul>
    	<li>
        <div class="heading-feed">Country</div>
        <div class="rss-feed">Capital</div>
        <div class="email-feed">Currency</div>
        </li>
        <li>
        <div class="job-feed-text">Afghanistan</div>
        <div class="rss-feed-text">Kabul</div>
        <div class="email-feed-text">Afghani</div>
        </li>
         <li>
        <div class="job-feed-text">Albania</div>
        <div class="rss-feed-text">Tirana</div>
        <div class="email-feed-text">Lek</div>
        </li>
         <li>
        <div class="job-feed-text">Algeria</div>
        <div class="rss-feed-text">Algiers</div>
        <div class="email-feed-text">Dinar</div>
        </li>
         <li>
        <div class="job-feed-text">Andorra</div>
        <div class="rss-feed-text">Andorra la Vella</div>
        <div class="email-feed-text">Euro</div>
        </li>
         <li>
        <div class="job-feed-text">Angola</div>
        <div class="rss-feed-text">Luanda</div>
        <div class="email-feed-text">New Kwanza</div>
        </li>
         <li>
        <div class="job-feed-text">Antigua and Barbuda</div>
        <div class="rss-feed-text">Saint John's </div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Argentina</div>
        <div class="rss-feed-text">Buenos Aires</div>
        <div class="email-feed-text">Peso</div>
        </li>
          <li>
        <div class="job-feed-text">Armenia</div>
        <div class="rss-feed-text">Yerevan </div>
        <div class="email-feed-text">Dram</div>
        </li>
        <li>
        <div class="job-feed-text">Australia</div>
        <div class="rss-feed-text">Canberra </div>
        <div class="email-feed-text"> Australian Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Austria</div>
        <div class="rss-feed-text">Vienna </div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Azerbaijan</div>
        <div class="rss-feed-text">Republic of Baku</div>
        <div class="email-feed-text">Manat</div>
        </li>
         <li>
        <div class="job-feed-text">Bahamas</div>
        <div class="rss-feed-text">Nassau</div>
        <div class="email-feed-text">Bahamian Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bahrain</div>
        <div class="rss-feed-text">Manama</div>
        <div class="email-feed-text">Bahraini Dinar</div>
        </li> 
         <li>
        <div class="job-feed-text">Bangladesh</div>
        <div class="rss-feed-text">Dhaka</div>
        <div class="email-feed-text">Taka</div>
        </li> 
        <li>
        <div class="job-feed-text">Barbados</div>
        <div class="rss-feed-text">Bridgetown</div>
        <div class="email-feed-text">Barbados Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Belarus</div>
        <div class="rss-feed-text">Minsk</div>
        <div class="email-feed-text">Belorussian Rubel</div>
        </li> 
        <li>
        <div class="job-feed-text">Belgium</div>
        <div class="rss-feed-text">Brussels</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Belize</div>
        <div class="rss-feed-text">Belmopan</div>
        <div class="email-feed-text">Belize Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bhutan</div>
        <div class="rss-feed-text">Thimpu</div>
        <div class="email-feed-text">Ngulturm</div>
        </li> 
        <li>
        <div class="job-feed-text">Bolivia</div>
        <div class="rss-feed-text">La Paz </div>
        <div class="email-feed-text">Boliviano</div>
        </li>
         <li>
        <div class="job-feed-text">Bosnia and Herzegovina</div>
        <div class="rss-feed-text">Sarajevo</div>
        <div class="email-feed-text">Marka</div>
        </li>
        <li>
        <div class="job-feed-text">Botswana</div>
        <div class="rss-feed-text">Gaborone</div>
        <div class="email-feed-text">Pula</div>
        </li>
        <li>
        <div class="job-feed-text">Brazil</div>
        <div class="rss-feed-text">Brasilia</div>
        <div class="email-feed-text">Real</div>
        </li>
        <li>
        <div class="job-feed-text">Bhutan</div>
        <div class="rss-feed-text">Thimpu</div>
        <div class="email-feed-text">Ngulturm</div>
        </li> 
        <li>
        <div class="job-feed-text">Brunei</div>
        <div class="rss-feed-text">Bandar Seri Begawan</div>
        <div class="email-feed-text">Brunei Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bulgaria</div>
        <div class="rss-feed-text">Sofia</div>
        <div class="email-feed-text">Lev</div>
        </li> 
         <li>
        <div class="job-feed-text">Burundi</div>
        <div class="rss-feed-text">Bujumbura</div>
        <div class="email-feed-text">Burundi Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Cambodia</div>
        <div class="rss-feed-text">Phnom Panh</div>
        <div class="email-feed-text">Rile</div>
        </li> 
        <li>
        <div class="job-feed-text">Cameroon</div>
        <div class="rss-feed-text">Yaound</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Canada</div>
        <div class="rss-feed-text">Ottawa</div>
        <div class="email-feed-text">Canadian Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Cape Verde</div>
        <div class="rss-feed-text">Praia </div>
        <div class="email-feed-text">Cape Verdean Escudo</div>
        </li>
        <li>
        <div class="job-feed-text">Central African Republic</div>
        <div class="rss-feed-text">Bangui</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Chad</div>
        <div class="rss-feed-text">N'Djamena</div>
        <div class="email-feed-text">N'Djamena</div>
        </li>
        <li>
        <div class="job-feed-text">Chile</div>
        <div class="rss-feed-text">Santiago</div>
        <div class="email-feed-text">Chilean Peso</div>
        </li>
        <li>
        <div class="job-feed-text">China</div>
        <div class="rss-feed-text">Bejing</div>
        <div class="email-feed-text">Yuan</div>
        </li> 
        <li>
        <div class="job-feed-text">Colombia</div>
        <div class="rss-feed-text">Santa Fe de Bogot</div>
        <div class="email-feed-text">Colombian Peso</div>
        </li> 
         <li>
        <div class="job-feed-text">Comoros</div>
        <div class="rss-feed-text">Moroni</div>
        <div class="email-feed-text">Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Congo Dem</div>
        <div class="rss-feed-text">Republic of Kinshasa</div>
        <div class="email-feed-text">Congolese Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Congo Republic</div>
        <div class="rss-feed-text">Brazzaville</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
         <li>
        <div class="job-feed-text">Costa Rica</div>
        <div class="rss-feed-text">San Jose</div>
        <div class="email-feed-text">Colon</div>
        </li>
        <li>
        <div class="job-feed-text">Cote d'Ivoire</div>
        <div class="rss-feed-text">Yamoussoukro</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>  
        <li>
        <div class="job-feed-text">Croatia</div>
        <div class="rss-feed-text">Zagreb</div>
        <div class="email-feed-text">Kuna</div>
        </li>
        <li>
        <div class="job-feed-text">Cuba</div>
        <div class="rss-feed-text">Havana</div>
        <div class="email-feed-text">Cuban Peso</div>
        </li> 
        <li>
        <div class="job-feed-text">Cyprus</div>
        <div class="rss-feed-text">Nicosia</div>
        <div class="email-feed-text">Cyprus Pounnd</div>
        </li>    
         <li>
        <div class="job-feed-text">Czech Republic</div>
        <div class="rss-feed-text">Prague</div>
        <div class="email-feed-text">Koruna</div>
        </li> 
         <li>
        <div class="job-feed-text">Denmark</div>
        <div class="rss-feed-text">Copenhagen</div>
        <div class="email-feed-text">Krone</div>
        </li> 
          <li>
        <div class="job-feed-text">Djibouti</div>
        <div class="rss-feed-text">Djibouti</div>
        <div class="email-feed-text">Djibouti Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Dominica</div>
        <div class="rss-feed-text">Roseau</div>
        <div class="email-feed-text">Cyprus Pounnd</div>
        </li> 
        <li>
        <div class="job-feed-text">Dominican Republic</div>
        <div class="rss-feed-text">Santo Domingo</div>
        <div class="email-feed-text">Dominican Peso</div>
        </li> 
        <li>
        <div class="job-feed-text">East Timor</div>
        <div class="rss-feed-text">Dili</div>
        <div class="email-feed-text">US Dolla</div>
        </li> 
        <li>
        <div class="job-feed-text">Ecuador</div>
        <div class="rss-feed-text">Quito </div>
        <div class="email-feed-text">US Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Egypt</div>
        <div class="rss-feed-text">Cairo</div>
        <div class="email-feed-text">Egyptian Pound</div>
        </li> 
         <li>
        <div class="job-feed-text">El Salvador</div>
        <div class="rss-feed-text">San Salvador</div>
        <div class="email-feed-text">Colon / US Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Equatorial Guinea</div>
        <div class="rss-feed-text">Malabo</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Eritrea</div>
        <div class="rss-feed-text">Asmara</div>
        <div class="email-feed-text">Nakfa</div>
        </li>
        <li>
        <div class="job-feed-text">Egypt</div>
        <div class="rss-feed-text">Cairo</div>
        <div class="email-feed-text">Egyptian Pound</div>
        </li>
        <li>
        <div class="job-feed-text">Ethiopia</div>
        <div class="rss-feed-text">Addis Ababa</div>
        <div class="email-feed-text">Birr</div>
        </li>
        <li>
        <div class="job-feed-text">Fiji</div>
        <div class="rss-feed-text">Suva (Viti Levu)</div>
        <div class="email-feed-text">Birr</div>
        </li>    
         <li>
        <div class="job-feed-text">Finland</div>
        <div class="rss-feed-text">Helsinki</div>
        <div class="email-feed-text">Euro (Formerly Marka)</div>
        </li> 
        <li>
        <div class="job-feed-text">France</div>
        <div class="rss-feed-text">Paris</div>
        <div class="email-feed-text">Euro (Formerly French Franc)</div>
        </li>  
        <li>
        <div class="job-feed-text">Gabon</div>
        <div class="rss-feed-text">Libreville</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Gambia</div>
        <div class="rss-feed-text">Banjul</div>
        <div class="email-feed-text">Dalasi</div>
        </li> 
        <li>
        <div class="job-feed-text">Georgia</div>
        <div class="rss-feed-text">T'bilisi</div>
        <div class="email-feed-text">Lari</div>
        </li> 
        <li>
        <div class="job-feed-text">Germany</div>
        <div class="rss-feed-text">Berlin</div>
        <div class="email-feed-text">Euro </div>
        </li>
         <li>
        <div class="job-feed-text">Ghana</div>
        <div class="rss-feed-text"> Accra</div>
        <div class="email-feed-text">Cedi</div>
        </li>   
         <li>
        <div class="job-feed-text">Greece</div>
        <div class="rss-feed-text">Athens</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Grenada</div>
        <div class="rss-feed-text">Saint George's</div>
        <div class="email-feed-text">East Caribbean Dollar<</div>
        </li> 
        <li>
        <div class="job-feed-text">Guatemala</div>
        <div class="rss-feed-text">Guatemala City</div>
        <div class="email-feed-text">Quetzal</div>
        </li> 
         <li>
        <div class="job-feed-text">Guinea</div>
        <div class="rss-feed-text">Conakry</div>
        <div class="email-feed-text">Guinean Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Guinea Bissau</div>
        <div class="rss-feed-text">Bissau</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Guyana</div>
        <div class="rss-feed-text">Georgetown</div>
        <div class="email-feed-text">Guyanese Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Haiti</div>
        <div class="rss-feed-text">Port-au-Prince </div>
        <div class="email-feed-text">Gourde</div>
        </li>
        <li>
        <div class="job-feed-text">Honduras</div>
        <div class="rss-feed-text">Tegucigalpa</div>
        <div class="email-feed-text">Lempira</div>
        </li>
        <li>
        <div class="job-feed-text">Hungary</div>
        <div class="rss-feed-text">Budapest</div>
        <div class="email-feed-text">Forint</div>
        </li>
        <li>
        <div class="job-feed-text">Iceland</div>
        <div class="rss-feed-text">Reykjavik</div>
        <div class="email-feed-text">Icelandic Krona</div>
        </li>    
   
        <li>
        <div class="job-feed-text">India</div>
        <div class="rss-feed-text">New Delhi</div>
        <div class="email-feed-text">Indian Rupee</div>
        </li>      
        <li>
        <div class="job-feed-text">Indonesia</div>
        <div class="rss-feed-text">Djakarta</div>
        <div class="email-feed-text">Rupiah</div>
        </li> 
        <li>
        <div class="job-feed-text">Iran</div>
        <div class="rss-feed-text">Tehran</div>
        <div class="email-feed-text">Riyal</div>
        </li> 
        <li>
        <div class="job-feed-text">Iraq</div>
        <div class="rss-feed-text">Baghdad</div>
        <div class="email-feed-text">Iraqi Dinar</div>
        </li> 
        <li>
        <div class="job-feed-text">Ireland</div>
        <div class="rss-feed-text">Dublin</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Israel</div>
        <div class="rss-feed-text">Tel Aviv</div>
        <div class="email-feed-text">Shekel</div>
        </li> 
         <li>
        <div class="job-feed-text">Italy</div>
        <div class="rss-feed-text">Rome</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Jamaica</div>
        <div class="rss-feed-text">kingston</div>
        <div class="email-feed-text">Dinar</div>
        </li> 
        <li>  
        <li>
        <div class="job-feed-text">Japan</div>
        <div class="rss-feed-text">Yokyo</div>
        <div class="email-feed-text">Yen</div>
        </li> 
        <li>
        <div class="job-feed-text">Jordan</div>
        <div class="rss-feed-text">Amman</div>
        <div class="email-feed-text">Lordan Dinar</div>
        </li> 
        <li>
        <div class="job-feed-text">Kazakhstan</div>
        <div class="rss-feed-text">Akmola</div>
        <div class="email-feed-text">Tenge</div>
        </li> 
        <li>
        <div class="job-feed-text">Korea(North)</div>
        <div class="rss-feed-text">Pyongyang</div>
        <div class="email-feed-text">Won(KPW)</div>
        </li> 
         <li>
        <div class="job-feed-text">Korea(South)</div>
        <div class="rss-feed-text">Seoul</div>
        <div class="email-feed-text">Won(KRW)</div>
        </li> 
        <li>
        <div class="job-feed-text">Kuwait</div>
        <div class="rss-feed-text">Kuwait City</div>
        <div class="email-feed-text">Kuwait Dinar</div>
        </li>   
        <li>
        <div class="job-feed-text">Kyrgystan</div>
        <div class="rss-feed-text">Bishkek</div>
        <div class="email-feed-text">SOM(KGS)</div>
        </li>  
        <li>
        <div class="job-feed-text">Laos</div>
        <div class="rss-feed-text">Vientiane</div>
        <div class="email-feed-text">Kip</div>
        </li>  
        <li>
        <div class="job-feed-text">Lebanon</div>
        <div class="rss-feed-text">Beirut</div>
        <div class="email-feed-text">Lebnanesse Pound</div>
        </li> 
         <li>
        <div class="job-feed-text">Lesotho</div>
        <div class="rss-feed-text">Maseru</div>
        <div class="email-feed-text">Loti</div>
        </li> 
         <li>
        <div class="job-feed-text">Lebanon</div>
        <div class="rss-feed-text">Beirut</div>
        <div class="email-feed-text">Lebnanesse Pound</div>
        </li> 
          <li>
        <div class="job-feed-text">Liberia</div>
        <div class="rss-feed-text">Monrovia</div>
        <div class="email-feed-text">Liberian</div>
        </li> 
         <li>
        <div class="job-feed-text">Libya</div>
        <div class="rss-feed-text">Tripoli</div>
        <div class="email-feed-text">Libyan Dinar</div>
        </li> 
         <li>
        <div class="job-feed-text">Liechtenstein</div>
        <div class="rss-feed-text">Vaduz</div>
        <div class="email-feed-text">Swiss Franc</div>
        </li> 
          <li>
        <div class="job-feed-text">Lithuania</div>
        <div class="rss-feed-text">Vilnius</div>
        <div class="email-feed-text">Litas</div>
        </li>  
          <li>
        <div class="job-feed-text">Luxembourg</div>
        <div class="rss-feed-text">Luxembourg Ville</div>
        <div class="email-feed-text">Euro</div>
        </li> 
          <li>
        <div class="job-feed-text">Macedonia</div>
        <div class="rss-feed-text">Skopje3</div>
        <div class="email-feed-text">Denar</div>
        </li> 
         <li>
        <div class="job-feed-text">Madagascar</div>
        <div class="rss-feed-text">Antananarivo</div>
        <div class="email-feed-text">Ariary</div>
        </li> 
         <li>
        <div class="job-feed-text">Malawi</div>
        <div class="rss-feed-text">Lilongwe</div>
        <div class="email-feed-text">Kwacha</div>
        </li> 
        <li>
        <div class="job-feed-text">Malaysia</div>
        <div class="rss-feed-text">Kuala Lumpur</div>
        <div class="email-feed-text">Malaysian Ringgit</div>
        </li> 
        <li>
        <div class="job-feed-text">Maldives</div>
        <div class="rss-feed-text">Male</div>
        <div class="email-feed-text">Rufiyaa</div>
        </li>  
        <li>
        <div class="job-feed-text">Mali</div>
        <div class="rss-feed-text">Bamako</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>  
         <li>
        <div class="job-feed-text">Malta</div>
        <div class="rss-feed-text">Valletta </div>
        <div class="email-feed-text">Euro</div>
        </li>   
         <li>
        <div class="job-feed-text">Marshall Islands</div>
        <div class="rss-feed-text">Majuro</div>
        <div class="email-feed-text">US Dollar</div>
        </li>  
          <li>
        <div class="job-feed-text">Mexico</div>
        <div class="rss-feed-text">Mexico City</div>
        <div class="email-feed-text"> Mexican Peso</div>
        </li>  
         <li>
        <div class="job-feed-text">Micronesia</div>
        <div class="rss-feed-text">Palikir</div>
        <div class="email-feed-text">US Dollar</div>
        </li>  
        <li>
        <div class="job-feed-text">Moldova</div>
        <div class="rss-feed-text">Chisinau</div>
        <div class="email-feed-text">Leu</div>
        </li>  
         <li>
        <div class="job-feed-text">Monaco</div>
        <div class="rss-feed-text">Monaco Ville</div>
        <div class="email-feed-text">Euro</div>
        </li>
         <li>
        <div class="job-feed-text">Mongolia</div>
        <div class="rss-feed-text">Ulaanbaatar</div>
        <div class="email-feed-text">Tugrik</div>
        </li>
         <li>
        <div class="job-feed-text">Morocco</div>
        <div class="rss-feed-text">Rabat</div>
        <div class="email-feed-text">Dirham</div>
        </li>
         <li>
        <div class="job-feed-text">Montenegro</div>
        <div class="rss-feed-text">Padgorica</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Mozambique</div>
        <div class="rss-feed-text">Maputo</div>
        <div class="email-feed-text">Metica</div>
        </li>    
         <li>
        <div class="job-feed-text">Moldova</div>
        <div class="rss-feed-text">Chisinau</div>
        <div class="email-feed-text">Leu</div>
        </li> 
         <li>
        <div class="job-feed-text">Myanmar</div>
        <div class="rss-feed-text">Yangoon</div>
        <div class="email-feed-text">Kyat</div>
        </li> 
        <li>
        <div class="job-feed-text">Namibia</div>
        <div class="rss-feed-text"> Windhoek</div>
        <div class="email-feed-text">Namibian Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Nauru</div>
        <div class="rss-feed-text">Yaren </div>
        <div class="email-feed-text">Australian Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Nepal</div>
        <div class="rss-feed-text">Kathamandu</div>
        <div class="email-feed-text">Nepalese Rupee</div>
        </li> 
         <li>
        <div class="job-feed-text">Netherlands</div>
        <div class="rss-feed-text">Amsterdam</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">New Zealand</div>
        <div class="rss-feed-text">Wellington</div>
        <div class="email-feed-text">New Zealand Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Nicaragua</div>
        <div class="rss-feed-text">Managua</div>
        <div class="email-feed-text">Gold Cordoba</div>
        </li> 
        <li>
        <div class="job-feed-text">Niger</div>
        <div class="rss-feed-text">Niamey</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Nigeria</div>
        <div class="rss-feed-text">Abuja</div>
        <div class="email-feed-text">Naira</div>
        </li> 
         <li>
        <div class="job-feed-text">Norway</div>
        <div class="rss-feed-text">Oslo</div>
        <div class="email-feed-text">Norwegian Krone</div>
        </li>   
         <li>
        <div class="job-feed-text">Oman</div>
        <div class="rss-feed-text">Muscat</div>
        <div class="email-feed-text">Omani Rial</div>
        </li> 
         <li>
        <div class="job-feed-text">Pakistan</div>
        <div class="rss-feed-text">Islamabad</div>
        <div class="email-feed-text">Pakistan Rupee</div>
        </li> 
         <li>
        <div class="job-feed-text">Palau</div>
        <div class="rss-feed-text">Koror </div>
        <div class="email-feed-text">US Dollar</div>
        </li>   
         <li>
        <div class="job-feed-text">Panama</div>
        <div class="rss-feed-text">Panama City-Balboa</div>
        <div class="email-feed-text">US Dollar</div>
        </li>   
        <li>
        <div class="job-feed-text">Papua New Guinea</div>
        <div class="rss-feed-text">Port Moresby</div>
        <div class="email-feed-text">Kina</div>
        </li>   
        <li>
        <div class="job-feed-text">Paraguay</div>
        <div class="rss-feed-text">Asuncion</div>
        <div class="email-feed-text">Guarani</div>
        </li>   
         <li>
        <div class="job-feed-text">Peru</div>
        <div class="rss-feed-text">Lima</div>
        <div class="email-feed-text">Nuevo sol</div>
        </li> 
        <li>
        <div class="job-feed-text">Philippines</div>
        <div class="rss-feed-text">Manila</div>
        <div class="email-feed-text">Peso</div>
        </li> 
         <li>
        <div class="job-feed-text">Poland</div>
        <div class="rss-feed-text">Warsaw</div>
        <div class="email-feed-text">Zloty </div>
        </li>
        <li>
        <div class="job-feed-text">Portugal</div>
        <div class="rss-feed-text">Lisbon</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Puerto Rico </div>
        <div class="rss-feed-text">San Juan</div>
        <div class="email-feed-text">US Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Qatar</div>
        <div class="rss-feed-text">Doha</div>
        <div class="email-feed-text">Qatari Riyal</div>
        </li>  
        <li>
        <div class="job-feed-text">Romania</div>
        <div class="rss-feed-text">Bucharest</div>
        <div class="email-feed-text">Leu</div>
        </li>
        <li>
        <div class="job-feed-text">Russia</div>
        <div class="rss-feed-text">Moscow </div>
        <div class="email-feed-text">Ruble</div>
        </li>
        <li>
        <div class="job-feed-text">Rwanda</div>
        <div class="rss-feed-text">Kigali</div>
        <div class="email-feed-text">Rwanda Franc</div>
        </li>
        <li>
        <div class="job-feed-text">St. Kitts and Nevis</div>
        <div class="rss-feed-text">Basseterre</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">St. Lucia</div>
        <div class="rss-feed-text">Castries</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">St. Vincent & the Grenadines</div>
        <div class="rss-feed-text"> Kingstown</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Samoa</div>
        <div class="rss-feed-text">Apia</div>
        <div class="email-feed-text">Tala</div>
        </li>
        <li>
        <div class="job-feed-text">San Marino</div>
        <div class="rss-feed-text">San Marino</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Sao Tome</div>
        <div class="rss-feed-text">Sao Tome</div>
        <div class="email-feed-text">Dobra</div>
        </li>
        <li>
        <div class="job-feed-text">Saudi Arabia</div>
        <div class="rss-feed-text">Riyadh</div>
        <div class="email-feed-text">Riyal</div>
        </li>
         <li>
        <div class="job-feed-text">Senegal</div>
        <div class="rss-feed-text">Dakar</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>    
        <li>
        <div class="job-feed-text">Serbia</div>
        <div class="rss-feed-text">Belgrade</div>
        <div class="email-feed-text">Belgrade</div>
        </li> 
        <li>
        <div class="job-feed-text">Seychelles</div>
        <div class="rss-feed-text">Victoria</div>
        <div class="email-feed-text">Seychelles Dollar</div>
        </li> 
         <li>
        <div class="job-feed-text">Sierra Leone</div>
        <div class="rss-feed-text">Freetown</div>
        <div class="email-feed-text">Leone</div>
        </li>   
        <li>
        <div class="job-feed-text">Saudi Arabia</div>
        <div class="rss-feed-text">Riyadh</div>
        <div class="email-feed-text">Riyal(SAR)</div>
        </li> 
        <li>
        <div class="job-feed-text">Singapore</div>
        <div class="rss-feed-text">Singapore</div>
        <div class="email-feed-text">Singapore Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Slovakia</div>
        <div class="rss-feed-text">Bratislava</div>
        <div class="email-feed-text">Koruna</div>
        </li> 
        <li>
        <div class="job-feed-text">Slovenia</div>
        <div class="rss-feed-text">Ljubljana</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Solomon Islands</div>
        <div class="rss-feed-text">Honiara</div>
        <div class="email-feed-text">Solomon Islands Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Somalia</div>
        <div class="rss-feed-text">Mogadishu</div>
        <div class="email-feed-text">Somali Shilling</div>
        </li> 
        <li>
        <div class="job-feed-text">South Africa</div>
        <div class="rss-feed-text">Pretoria6</div>
        <div class="email-feed-text">Rand</div>
        </li> 
        <li>
        <div class="job-feed-text">Spain</div>
        <div class="rss-feed-text">Madrid</div>
        <div class="email-feed-text">Euror</div>
        </li>     
        <li>
        <div class="job-feed-text">Srilanka</div>
        <div class="rss-feed-text">Colombo</div>
        <div class="email-feed-text">Srilanka Rupee</div>
        </li> 
        <li>
        <div class="job-feed-text">Sudan</div>
        <div class="rss-feed-text">Khartoum</div>
        <div class="email-feed-text">Dinar</div>
        </li>
         <li>
        <div class="job-feed-text">Suriname </div>
        <div class="rss-feed-text">Paramaribo</div>
        <div class="email-feed-text">Surinamese Dollar</div>
        </li>        
        <li>
        <div class="job-feed-text">Swaziland</div>
        <div class="rss-feed-text">Mbabane8</div>
        <div class="email-feed-text">Lilangeni</div>
        </li>    
        <li>
        <div class="job-feed-text">Sweden</div>
        <div class="rss-feed-text">Stockholm</div>
        <div class="email-feed-text">Krona</div>
        </li>
        <li>
        <div class="job-feed-text">Switzerland</div>
        <div class="rss-feed-text">Bern</div>
        <div class="email-feed-text">Swiss Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Syria</div>
        <div class="rss-feed-text">Damascus</div>
        <div class="email-feed-text">Syrian Pound</div>
        </li>
        <li>
        <div class="job-feed-text">Taiwan</div>
        <div class="rss-feed-text">Taipei</div>
        <div class="email-feed-text">Taiwan New Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Tajikistan</div>
        <div class="rss-feed-text">Dushanbe</div>
        <div class="email-feed-text">Somoni</div>
        </li> 
         <li>
        <div class="job-feed-text">Tanzania</div>
        <div class="rss-feed-text">Dar es Salaam9</div>
        <div class="email-feed-text">Tanzanian Shilling</div>
        </li>     
         <li>
        <div class="job-feed-text">Thailand</div>
        <div class="rss-feed-text">Bangkok</div>
        <div class="email-feed-text">Baht</div>
        </li>
         <li>
        <div class="job-feed-text">Togo</div>
        <div class="rss-feed-text">Lome</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
          <li>
        <div class="job-feed-text">Tonga</div>
        <div class="rss-feed-text">Nuku'alofa</div>
        <div class="email-feed-text">Pa'anga</div>
        </li>
         <li>
        <div class="job-feed-text">Trinidad and Tobago</div>
        <div class="rss-feed-text">Port-of-Spain</div>
        <div class="email-feed-text">Trinidad and Tobago Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Tunisia</div>
        <div class="rss-feed-text">Tunis</div>
        <div class="email-feed-text">Tunisian Dinar</div>
        </li>
        <li>
        <div class="job-feed-text">Turkey</div>
        <div class="rss-feed-text">Ankara</div>
        <div class="email-feed-text">Turkish New Lira</div>
        </li>
        <li>
        <div class="job-feed-text">Turkmenistan</div>
        <div class="rss-feed-text">Ashgabat</div>
        <div class="email-feed-text">Manat</div>
        </li>
        <li>
        <div class="job-feed-text">Tuvalu</div>
        <div class="rss-feed-text">Funafuti</div>
        <div class="email-feed-text">Australian dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Uganda</div>
        <div class="rss-feed-text">Kampala</div>
        <div class="email-feed-text">Ugandan New Shilling</div>
        </li>
        <li>
        <div class="job-feed-text">Ukraine</div>
        <div class="rss-feed-text">Kiev</div>
        <div class="email-feed-text">Hryvna</div>
        </li>
        <li>
        <div class="job-feed-text">United Arab Emirates</div>
        <div class="rss-feed-text">Abu Dhabi</div>
        <div class="email-feed-text">UAE Dirham</div>
        </li>  
          <li>
        <div class="job-feed-text">United Kingdom</div>
        <div class="rss-feed-text">London</div>
        <div class="email-feed-text">Pound Sterling</div>
        </li> 
          <li>
        <div class="job-feed-text">United State</div>
        <div class="rss-feed-text">Washington DC</div>
        <div class="email-feed-text">US Dollar</div>
        </li> 
          <li>
        <div class="job-feed-text">Uruguay</div>
        <div class="rss-feed-text">Montevideo</div>
        <div class="email-feed-text">Uruguay Peso</div>
        </li> 
          <li>
        <div class="job-feed-text">Uzbekistan</div>
        <div class="rss-feed-text">Tashkent</div>
        <div class="email-feed-text">Uzbekistani Som</div>
        </li> 
        <li>
        <div class="job-feed-text">Vanuatu</div>
        <div class="rss-feed-text"> Port-Vila</div>
        <div class="email-feed-text">Vatu</div>
        </li> 
        <li>
        <div class="job-feed-text">Vatican City</div>
        <div class="rss-feed-text">- Vatican City</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Venezuela</div>
        <div class="rss-feed-text">Caracas</div>
        <div class="email-feed-text">Bolivars</div>
        </li> 
        <li>
        <div class="job-feed-text">Vietnam</div>
        <div class="rss-feed-text">Hanoi</div>
        <div class="email-feed-text">Dong</div>
        </li> 
        <li>
        <div class="job-feed-text">Yemen</div>
        <div class="rss-feed-text">Sana</div>
        <div class="email-feed-text">Rial</div>
        </li> 
        <li>
        <div class="job-feed-text">Zambia</div>
        <div class="rss-feed-text">Lusaka</div>
        <div class="email-feed-text">Kwacha</div>
        </li>  
        <li>
        <div class="job-feed-text">Zimbabwe</div>
        <div class="rss-feed-text">Harare</div>
        <div class="email-feed-text">Zimbabwean dollar</div>
        </li>  
               
    </ul>
</div>

<?php
}

function countries_list_widget_shortcode()
{
?>
<style type="text/css">
.profile-public{ width:633px;}
.profile-public img{ width:50px; height:50px; float:left; vertical-align: top;}
.profile-public .name-content{ float:left; margin-left:30px;}

.all-opportunity{}
.all-opportunity .right-btns{ float:right; width:500px;}
.right-btns .btns{ float:left; background:#f91c0e; padding:5px 8px; font:bold 10px Arial, Helvetica, sans-serif; color:#fff; margin:0 2px; border-radius:1px 10px 1px 1px;}
.right-btns .btns a{color:#fff; text-decoration:none;}

.job-feed2{width:220px; height: 250px; overflow: scroll;}
.job-feed2 ul{}
.job-feed2 li{padding: 10px 0; border-bottom:1px solid #f4f4f4;}
.job-feed2 a{}
.job-feed2 a:hover{}
.job-feed2 .heading-feed2{font:bold 10px Arial, Helvetica, sans-serif; float:left; width:60px; background:#dfdfdf; padding:10px 0 10px 0px;}
.job-feed2 .rss-feed2{font:bold 10px Arial, Helvetica, sans-serif; float:left; width:60px; background:#dfdfdf;padding:10px 0;}
.job-feed2 .email-feed2{font:bold 10px Arial, Helvetica, sans-serif; float:left;  width:60px;background:#dfdfdf;padding:10px 0;}

.job-feed2 .job-feed-text{font:bold 10px Arial, Helvetica, sans-serif; float:left; width:60px; padding-left:0px; }
.job-feed2 .rss-feed-text{float:left;  width:60px;font:bold 11px Arial, Helvetica, sans-serif;}
.job-feed2 .email-feed-text{float:left;  width:60px;font:bold 11px Arial, Helvetica, sans-serif; text-align:center;}

</style>
</head>

<body>
<div class="job-feed2">
	<ul>
    	<li>
        <div class="heading-feed2">Country</div>
        <div class="rss-feed2">Capital</div>
        <div class="email-feed2">Currency</div>
        </li>
        <li>
        <div class="job-feed-text">Afghanistan</div>
        <div class="rss-feed-text">Kabul</div>
        <div class="email-feed-text">Afghani</div>
        </li>
         <li>
        <div class="job-feed-text">Albania</div>
        <div class="rss-feed-text">Tirana</div>
        <div class="email-feed-text">Lek</div>
        </li>
         <li>
        <div class="job-feed-text">Algeria</div>
        <div class="rss-feed-text">Algiers</div>
        <div class="email-feed-text">Dinar</div>
        </li>
         <li>
        <div class="job-feed-text">Andorra</div>
        <div class="rss-feed-text">Andorra la Vella</div>
        <div class="email-feed-text">Euro</div>
        </li>
         <li>
        <div class="job-feed-text">Angola</div>
        <div class="rss-feed-text">Luanda</div>
        <div class="email-feed-text">New Kwanza</div>
        </li>
         <li>
        <div class="job-feed-text">Antigua and Barbuda</div>
        <div class="rss-feed-text">Saint John's </div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Argentina</div>
        <div class="rss-feed-text">Buenos Aires</div>
        <div class="email-feed-text">Peso</div>
        </li>
          <li>
        <div class="job-feed-text">Armenia</div>
        <div class="rss-feed-text">Yerevan </div>
        <div class="email-feed-text">Dram</div>
        </li>
        <li>
        <div class="job-feed-text">Australia</div>
        <div class="rss-feed-text">Canberra </div>
        <div class="email-feed-text"> Australian Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Austria</div>
        <div class="rss-feed-text">Vienna </div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Azerbaijan</div>
        <div class="rss-feed-text">Republic of Baku</div>
        <div class="email-feed-text">Manat</div>
        </li>
         <li>
        <div class="job-feed-text">Bahamas</div>
        <div class="rss-feed-text">Nassau</div>
        <div class="email-feed-text">Bahamian Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bahrain</div>
        <div class="rss-feed-text">Manama</div>
        <div class="email-feed-text">Bahraini Dinar</div>
        </li> 
         <li>
        <div class="job-feed-text">Bangladesh</div>
        <div class="rss-feed-text">Dhaka</div>
        <div class="email-feed-text">Taka</div>
        </li> 
        <li>
        <div class="job-feed-text">Barbados</div>
        <div class="rss-feed-text">Bridgetown</div>
        <div class="email-feed-text">Barbados Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Belarus</div>
        <div class="rss-feed-text">Minsk</div>
        <div class="email-feed-text">Belorussian Rubel</div>
        </li> 
        <li>
        <div class="job-feed-text">Belgium</div>
        <div class="rss-feed-text">Brussels</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Belize</div>
        <div class="rss-feed-text">Belmopan</div>
        <div class="email-feed-text">Belize Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bhutan</div>
        <div class="rss-feed-text">Thimpu</div>
        <div class="email-feed-text">Ngulturm</div>
        </li> 
        <li>
        <div class="job-feed-text">Bolivia</div>
        <div class="rss-feed-text">La Paz </div>
        <div class="email-feed-text">Boliviano</div>
        </li>
         <li>
        <div class="job-feed-text">Bosnia and Herzegovina</div>
        <div class="rss-feed-text">Sarajevo</div>
        <div class="email-feed-text">Marka</div>
        </li>
        <li>
        <div class="job-feed-text">Botswana</div>
        <div class="rss-feed-text">Gaborone</div>
        <div class="email-feed-text">Pula</div>
        </li>
        <li>
        <div class="job-feed-text">Brazil</div>
        <div class="rss-feed-text">Brasilia</div>
        <div class="email-feed-text">Real</div>
        </li>
        <li>
        <div class="job-feed-text">Bhutan</div>
        <div class="rss-feed-text">Thimpu</div>
        <div class="email-feed-text">Ngulturm</div>
        </li> 
        <li>
        <div class="job-feed-text">Brunei</div>
        <div class="rss-feed-text">Bandar Seri Begawan</div>
        <div class="email-feed-text">Brunei Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Bulgaria</div>
        <div class="rss-feed-text">Sofia</div>
        <div class="email-feed-text">Lev</div>
        </li> 
         <li>
        <div class="job-feed-text">Burundi</div>
        <div class="rss-feed-text">Bujumbura</div>
        <div class="email-feed-text">Burundi Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Cambodia</div>
        <div class="rss-feed-text">Phnom Panh</div>
        <div class="email-feed-text">Rile</div>
        </li> 
        <li>
        <div class="job-feed-text">Cameroon</div>
        <div class="rss-feed-text">Yaound</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Canada</div>
        <div class="rss-feed-text">Ottawa</div>
        <div class="email-feed-text">Canadian Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Cape Verde</div>
        <div class="rss-feed-text">Praia </div>
        <div class="email-feed-text">Cape Verdean Escudo</div>
        </li>
        <li>
        <div class="job-feed-text">Central African Republic</div>
        <div class="rss-feed-text">Bangui</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Chad</div>
        <div class="rss-feed-text">N'Djamena</div>
        <div class="email-feed-text">N'Djamena</div>
        </li>
        <li>
        <div class="job-feed-text">Chile</div>
        <div class="rss-feed-text">Santiago</div>
        <div class="email-feed-text">Chilean Peso</div>
        </li>
        <li>
        <div class="job-feed-text">China</div>
        <div class="rss-feed-text">Bejing</div>
        <div class="email-feed-text">Yuan</div>
        </li> 
        <li>
        <div class="job-feed-text">Colombia</div>
        <div class="rss-feed-text">Santa Fe de Bogot</div>
        <div class="email-feed-text">Colombian Peso</div>
        </li> 
         <li>
        <div class="job-feed-text">Comoros</div>
        <div class="rss-feed-text">Moroni</div>
        <div class="email-feed-text">Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Congo Dem</div>
        <div class="rss-feed-text">Republic of Kinshasa</div>
        <div class="email-feed-text">Congolese Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Congo Republic</div>
        <div class="rss-feed-text">Brazzaville</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
         <li>
        <div class="job-feed-text">Costa Rica</div>
        <div class="rss-feed-text">San Jose</div>
        <div class="email-feed-text">Colon</div>
        </li>
        <li>
        <div class="job-feed-text">Cote d'Ivoire</div>
        <div class="rss-feed-text">Yamoussoukro</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>  
        <li>
        <div class="job-feed-text">Croatia</div>
        <div class="rss-feed-text">Zagreb</div>
        <div class="email-feed-text">Kuna</div>
        </li>
        <li>
        <div class="job-feed-text">Cuba</div>
        <div class="rss-feed-text">Havana</div>
        <div class="email-feed-text">Cuban Peso</div>
        </li> 
        <li>
        <div class="job-feed-text">Cyprus</div>
        <div class="rss-feed-text">Nicosia</div>
        <div class="email-feed-text">Cyprus Pounnd</div>
        </li>    
         <li>
        <div class="job-feed-text">Czech Republic</div>
        <div class="rss-feed-text">Prague</div>
        <div class="email-feed-text">Koruna</div>
        </li> 
         <li>
        <div class="job-feed-text">Denmark</div>
        <div class="rss-feed-text">Copenhagen</div>
        <div class="email-feed-text">Krone</div>
        </li> 
          <li>
        <div class="job-feed-text">Djibouti</div>
        <div class="rss-feed-text">Djibouti</div>
        <div class="email-feed-text">Djibouti Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Dominica</div>
        <div class="rss-feed-text">Roseau</div>
        <div class="email-feed-text">Cyprus Pounnd</div>
        </li> 
        <li>
        <div class="job-feed-text">Dominican Republic</div>
        <div class="rss-feed-text">Santo Domingo</div>
        <div class="email-feed-text">Dominican Peso</div>
        </li> 
        <li>
        <div class="job-feed-text">East Timor</div>
        <div class="rss-feed-text">Dili</div>
        <div class="email-feed-text">US Dolla</div>
        </li> 
        <li>
        <div class="job-feed-text">Ecuador</div>
        <div class="rss-feed-text">Quito </div>
        <div class="email-feed-text">US Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Egypt</div>
        <div class="rss-feed-text">Cairo</div>
        <div class="email-feed-text">Egyptian Pound</div>
        </li> 
         <li>
        <div class="job-feed-text">El Salvador</div>
        <div class="rss-feed-text">San Salvador</div>
        <div class="email-feed-text">Colon / US Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Equatorial Guinea</div>
        <div class="rss-feed-text">Malabo</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
        <li>
        <div class="job-feed-text">Eritrea</div>
        <div class="rss-feed-text">Asmara</div>
        <div class="email-feed-text">Nakfa</div>
        </li>
        <li>
        <div class="job-feed-text">Egypt</div>
        <div class="rss-feed-text">Cairo</div>
        <div class="email-feed-text">Egyptian Pound</div>
        </li>
        <li>
        <div class="job-feed-text">Ethiopia</div>
        <div class="rss-feed-text">Addis Ababa</div>
        <div class="email-feed-text">Birr</div>
        </li>
        <li>
        <div class="job-feed-text">Fiji</div>
        <div class="rss-feed-text">Suva (Viti Levu)</div>
        <div class="email-feed-text">Birr</div>
        </li>    
         <li>
        <div class="job-feed-text">Finland</div>
        <div class="rss-feed-text">Helsinki</div>
        <div class="email-feed-text">Euro (Formerly Marka)</div>
        </li> 
        <li>
        <div class="job-feed-text">France</div>
        <div class="rss-feed-text">Paris</div>
        <div class="email-feed-text">Euro (Formerly French Franc)</div>
        </li>  
        <li>
        <div class="job-feed-text">Gabon</div>
        <div class="rss-feed-text">Libreville</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Gambia</div>
        <div class="rss-feed-text">Banjul</div>
        <div class="email-feed-text">Dalasi</div>
        </li> 
        <li>
        <div class="job-feed-text">Georgia</div>
        <div class="rss-feed-text">T'bilisi</div>
        <div class="email-feed-text">Lari</div>
        </li> 
        <li>
        <div class="job-feed-text">Germany</div>
        <div class="rss-feed-text">Berlin</div>
        <div class="email-feed-text">Euro </div>
        </li>
         <li>
        <div class="job-feed-text">Ghana</div>
        <div class="rss-feed-text"> Accra</div>
        <div class="email-feed-text">Cedi</div>
        </li>   
         <li>
        <div class="job-feed-text">Greece</div>
        <div class="rss-feed-text">Athens</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Grenada</div>
        <div class="rss-feed-text">Saint George's</div>
        <div class="email-feed-text">East Caribbean Dollar<</div>
        </li> 
        <li>
        <div class="job-feed-text">Guatemala</div>
        <div class="rss-feed-text">Guatemala City</div>
        <div class="email-feed-text">Quetzal</div>
        </li> 
         <li>
        <div class="job-feed-text">Guinea</div>
        <div class="rss-feed-text">Conakry</div>
        <div class="email-feed-text">Guinean Franc</div>
        </li> 
         <li>
        <div class="job-feed-text">Guinea Bissau</div>
        <div class="rss-feed-text">Bissau</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Guyana</div>
        <div class="rss-feed-text">Georgetown</div>
        <div class="email-feed-text">Guyanese Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Haiti</div>
        <div class="rss-feed-text">Port-au-Prince </div>
        <div class="email-feed-text">Gourde</div>
        </li>
        <li>
        <div class="job-feed-text">Honduras</div>
        <div class="rss-feed-text">Tegucigalpa</div>
        <div class="email-feed-text">Lempira</div>
        </li>
        <li>
        <div class="job-feed-text">Hungary</div>
        <div class="rss-feed-text">Budapest</div>
        <div class="email-feed-text">Forint</div>
        </li>
        <li>
        <div class="job-feed-text">Iceland</div>
        <div class="rss-feed-text">Reykjavik</div>
        <div class="email-feed-text">Icelandic Krona</div>
        </li>    
   
        <li>
        <div class="job-feed-text">India</div>
        <div class="rss-feed-text">New Delhi</div>
        <div class="email-feed-text">Indian Rupee</div>
        </li>      
        <li>
        <div class="job-feed-text">Indonesia</div>
        <div class="rss-feed-text">Djakarta</div>
        <div class="email-feed-text">Rupiah</div>
        </li> 
        <li>
        <div class="job-feed-text">Iran</div>
        <div class="rss-feed-text">Tehran</div>
        <div class="email-feed-text">Riyal</div>
        </li> 
        <li>
        <div class="job-feed-text">Iraq</div>
        <div class="rss-feed-text">Baghdad</div>
        <div class="email-feed-text">Iraqi Dinar</div>
        </li> 
        <li>
        <div class="job-feed-text">Ireland</div>
        <div class="rss-feed-text">Dublin</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Israel</div>
        <div class="rss-feed-text">Tel Aviv</div>
        <div class="email-feed-text">Shekel</div>
        </li> 
         <li>
        <div class="job-feed-text">Italy</div>
        <div class="rss-feed-text">Rome</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Jamaica</div>
        <div class="rss-feed-text">kingston</div>
        <div class="email-feed-text">Dinar</div>
        </li> 
        <li>  
        <li>
        <div class="job-feed-text">Japan</div>
        <div class="rss-feed-text">Yokyo</div>
        <div class="email-feed-text">Yen</div>
        </li> 
        <li>
        <div class="job-feed-text">Jordan</div>
        <div class="rss-feed-text">Amman</div>
        <div class="email-feed-text">Lordan Dinar</div>
        </li> 
        <li>
        <div class="job-feed-text">Kazakhstan</div>
        <div class="rss-feed-text">Akmola</div>
        <div class="email-feed-text">Tenge</div>
        </li> 
        <li>
        <div class="job-feed-text">Korea(North)</div>
        <div class="rss-feed-text">Pyongyang</div>
        <div class="email-feed-text">Won(KPW)</div>
        </li> 
         <li>
        <div class="job-feed-text">Korea(South)</div>
        <div class="rss-feed-text">Seoul</div>
        <div class="email-feed-text">Won(KRW)</div>
        </li> 
        <li>
        <div class="job-feed-text">Kuwait</div>
        <div class="rss-feed-text">Kuwait City</div>
        <div class="email-feed-text">Kuwait Dinar</div>
        </li>   
        <li>
        <div class="job-feed-text">Kyrgystan</div>
        <div class="rss-feed-text">Bishkek</div>
        <div class="email-feed-text">SOM(KGS)</div>
        </li>  
        <li>
        <div class="job-feed-text">Laos</div>
        <div class="rss-feed-text">Vientiane</div>
        <div class="email-feed-text">Kip</div>
        </li>  
        <li>
        <div class="job-feed-text">Lebanon</div>
        <div class="rss-feed-text">Beirut</div>
        <div class="email-feed-text">Lebnanesse Pound</div>
        </li> 
         <li>
        <div class="job-feed-text">Lesotho</div>
        <div class="rss-feed-text">Maseru</div>
        <div class="email-feed-text">Loti</div>
        </li> 
         <li>
        <div class="job-feed-text">Lebanon</div>
        <div class="rss-feed-text">Beirut</div>
        <div class="email-feed-text">Lebnanesse Pound</div>
        </li> 
          <li>
        <div class="job-feed-text">Liberia</div>
        <div class="rss-feed-text">Monrovia</div>
        <div class="email-feed-text">Liberian</div>
        </li> 
         <li>
        <div class="job-feed-text">Libya</div>
        <div class="rss-feed-text">Tripoli</div>
        <div class="email-feed-text">Libyan Dinar</div>
        </li> 
         <li>
        <div class="job-feed-text">Liechtenstein</div>
        <div class="rss-feed-text">Vaduz</div>
        <div class="email-feed-text">Swiss Franc</div>
        </li> 
          <li>
        <div class="job-feed-text">Lithuania</div>
        <div class="rss-feed-text">Vilnius</div>
        <div class="email-feed-text">Litas</div>
        </li>  
          <li>
        <div class="job-feed-text">Luxembourg</div>
        <div class="rss-feed-text">Luxembourg Ville</div>
        <div class="email-feed-text">Euro</div>
        </li> 
          <li>
        <div class="job-feed-text">Macedonia</div>
        <div class="rss-feed-text">Skopje3</div>
        <div class="email-feed-text">Denar</div>
        </li> 
         <li>
        <div class="job-feed-text">Madagascar</div>
        <div class="rss-feed-text">Antananarivo</div>
        <div class="email-feed-text">Ariary</div>
        </li> 
         <li>
        <div class="job-feed-text">Malawi</div>
        <div class="rss-feed-text">Lilongwe</div>
        <div class="email-feed-text">Kwacha</div>
        </li> 
        <li>
        <div class="job-feed-text">Malaysia</div>
        <div class="rss-feed-text">Kuala Lumpur</div>
        <div class="email-feed-text">Malaysian Ringgit</div>
        </li> 
        <li>
        <div class="job-feed-text">Maldives</div>
        <div class="rss-feed-text">Male</div>
        <div class="email-feed-text">Rufiyaa</div>
        </li>  
        <li>
        <div class="job-feed-text">Mali</div>
        <div class="rss-feed-text">Bamako</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>  
         <li>
        <div class="job-feed-text">Malta</div>
        <div class="rss-feed-text">Valletta </div>
        <div class="email-feed-text">Euro</div>
        </li>   
         <li>
        <div class="job-feed-text">Marshall Islands</div>
        <div class="rss-feed-text">Majuro</div>
        <div class="email-feed-text">US Dollar</div>
        </li>  
          <li>
        <div class="job-feed-text">Mexico</div>
        <div class="rss-feed-text">Mexico City</div>
        <div class="email-feed-text"> Mexican Peso</div>
        </li>  
         <li>
        <div class="job-feed-text">Micronesia</div>
        <div class="rss-feed-text">Palikir</div>
        <div class="email-feed-text">US Dollar</div>
        </li>  
        <li>
        <div class="job-feed-text">Moldova</div>
        <div class="rss-feed-text">Chisinau</div>
        <div class="email-feed-text">Leu</div>
        </li>  
         <li>
        <div class="job-feed-text">Monaco</div>
        <div class="rss-feed-text">Monaco Ville</div>
        <div class="email-feed-text">Euro</div>
        </li>
         <li>
        <div class="job-feed-text">Mongolia</div>
        <div class="rss-feed-text">Ulaanbaatar</div>
        <div class="email-feed-text">Tugrik</div>
        </li>
         <li>
        <div class="job-feed-text">Morocco</div>
        <div class="rss-feed-text">Rabat</div>
        <div class="email-feed-text">Dirham</div>
        </li>
         <li>
        <div class="job-feed-text">Montenegro</div>
        <div class="rss-feed-text">Padgorica</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Mozambique</div>
        <div class="rss-feed-text">Maputo</div>
        <div class="email-feed-text">Metica</div>
        </li>    
         <li>
        <div class="job-feed-text">Moldova</div>
        <div class="rss-feed-text">Chisinau</div>
        <div class="email-feed-text">Leu</div>
        </li> 
         <li>
        <div class="job-feed-text">Myanmar</div>
        <div class="rss-feed-text">Yangoon</div>
        <div class="email-feed-text">Kyat</div>
        </li> 
        <li>
        <div class="job-feed-text">Namibia</div>
        <div class="rss-feed-text"> Windhoek</div>
        <div class="email-feed-text">Namibian Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Nauru</div>
        <div class="rss-feed-text">Yaren </div>
        <div class="email-feed-text">Australian Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Nepal</div>
        <div class="rss-feed-text">Kathamandu</div>
        <div class="email-feed-text">Nepalese Rupee</div>
        </li> 
         <li>
        <div class="job-feed-text">Netherlands</div>
        <div class="rss-feed-text">Amsterdam</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">New Zealand</div>
        <div class="rss-feed-text">Wellington</div>
        <div class="email-feed-text">New Zealand Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Nicaragua</div>
        <div class="rss-feed-text">Managua</div>
        <div class="email-feed-text">Gold Cordoba</div>
        </li> 
        <li>
        <div class="job-feed-text">Niger</div>
        <div class="rss-feed-text">Niamey</div>
        <div class="email-feed-text">CFA Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Nigeria</div>
        <div class="rss-feed-text">Abuja</div>
        <div class="email-feed-text">Naira</div>
        </li> 
         <li>
        <div class="job-feed-text">Norway</div>
        <div class="rss-feed-text">Oslo</div>
        <div class="email-feed-text">Norwegian Krone</div>
        </li>   
         <li>
        <div class="job-feed-text">Oman</div>
        <div class="rss-feed-text">Muscat</div>
        <div class="email-feed-text">Omani Rial</div>
        </li> 
         <li>
        <div class="job-feed-text">Pakistan</div>
        <div class="rss-feed-text">Islamabad</div>
        <div class="email-feed-text">Pakistan Rupee</div>
        </li> 
         <li>
        <div class="job-feed-text">Palau</div>
        <div class="rss-feed-text">Koror </div>
        <div class="email-feed-text">US Dollar</div>
        </li>   
         <li>
        <div class="job-feed-text">Panama</div>
        <div class="rss-feed-text">Panama City-Balboa</div>
        <div class="email-feed-text">US Dollar</div>
        </li>   
        <li>
        <div class="job-feed-text">Papua New Guinea</div>
        <div class="rss-feed-text">Port Moresby</div>
        <div class="email-feed-text">Kina</div>
        </li>   
        <li>
        <div class="job-feed-text">Paraguay</div>
        <div class="rss-feed-text">Asuncion</div>
        <div class="email-feed-text">Guarani</div>
        </li>   
         <li>
        <div class="job-feed-text">Peru</div>
        <div class="rss-feed-text">Lima</div>
        <div class="email-feed-text">Nuevo sol</div>
        </li> 
        <li>
        <div class="job-feed-text">Philippines</div>
        <div class="rss-feed-text">Manila</div>
        <div class="email-feed-text">Peso</div>
        </li> 
         <li>
        <div class="job-feed-text">Poland</div>
        <div class="rss-feed-text">Warsaw</div>
        <div class="email-feed-text">Zloty </div>
        </li>
        <li>
        <div class="job-feed-text">Portugal</div>
        <div class="rss-feed-text">Lisbon</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Puerto Rico </div>
        <div class="rss-feed-text">San Juan</div>
        <div class="email-feed-text">US Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Qatar</div>
        <div class="rss-feed-text">Doha</div>
        <div class="email-feed-text">Qatari Riyal</div>
        </li>  
        <li>
        <div class="job-feed-text">Romania</div>
        <div class="rss-feed-text">Bucharest</div>
        <div class="email-feed-text">Leu</div>
        </li>
        <li>
        <div class="job-feed-text">Russia</div>
        <div class="rss-feed-text">Moscow </div>
        <div class="email-feed-text">Ruble</div>
        </li>
        <li>
        <div class="job-feed-text">Rwanda</div>
        <div class="rss-feed-text">Kigali</div>
        <div class="email-feed-text">Rwanda Franc</div>
        </li>
        <li>
        <div class="job-feed-text">St. Kitts and Nevis</div>
        <div class="rss-feed-text">Basseterre</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">St. Lucia</div>
        <div class="rss-feed-text">Castries</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">St. Vincent & the Grenadines</div>
        <div class="rss-feed-text"> Kingstown</div>
        <div class="email-feed-text">East Caribbean Dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Samoa</div>
        <div class="rss-feed-text">Apia</div>
        <div class="email-feed-text">Tala</div>
        </li>
        <li>
        <div class="job-feed-text">San Marino</div>
        <div class="rss-feed-text">San Marino</div>
        <div class="email-feed-text">Euro</div>
        </li>
        <li>
        <div class="job-feed-text">Sao Tome</div>
        <div class="rss-feed-text">Sao Tome</div>
        <div class="email-feed-text">Dobra</div>
        </li>
        <li>
        <div class="job-feed-text">Saudi Arabia</div>
        <div class="rss-feed-text">Riyadh</div>
        <div class="email-feed-text">Riyal</div>
        </li>
         <li>
        <div class="job-feed-text">Senegal</div>
        <div class="rss-feed-text">Dakar</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>    
        <li>
        <div class="job-feed-text">Serbia</div>
        <div class="rss-feed-text">Belgrade</div>
        <div class="email-feed-text">Belgrade</div>
        </li> 
        <li>
        <div class="job-feed-text">Seychelles</div>
        <div class="rss-feed-text">Victoria</div>
        <div class="email-feed-text">Seychelles Dollar</div>
        </li> 
         <li>
        <div class="job-feed-text">Sierra Leone</div>
        <div class="rss-feed-text">Freetown</div>
        <div class="email-feed-text">Leone</div>
        </li>   
        <li>
        <div class="job-feed-text">Saudi Arabia</div>
        <div class="rss-feed-text">Riyadh</div>
        <div class="email-feed-text">Riyal(SAR)</div>
        </li> 
        <li>
        <div class="job-feed-text">Singapore</div>
        <div class="rss-feed-text">Singapore</div>
        <div class="email-feed-text">Singapore Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Slovakia</div>
        <div class="rss-feed-text">Bratislava</div>
        <div class="email-feed-text">Koruna</div>
        </li> 
        <li>
        <div class="job-feed-text">Slovenia</div>
        <div class="rss-feed-text">Ljubljana</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Solomon Islands</div>
        <div class="rss-feed-text">Honiara</div>
        <div class="email-feed-text">Solomon Islands Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Somalia</div>
        <div class="rss-feed-text">Mogadishu</div>
        <div class="email-feed-text">Somali Shilling</div>
        </li> 
        <li>
        <div class="job-feed-text">South Africa</div>
        <div class="rss-feed-text">Pretoria6</div>
        <div class="email-feed-text">Rand</div>
        </li> 
        <li>
        <div class="job-feed-text">Spain</div>
        <div class="rss-feed-text">Madrid</div>
        <div class="email-feed-text">Euror</div>
        </li>     
        <li>
        <div class="job-feed-text">Srilanka</div>
        <div class="rss-feed-text">Colombo</div>
        <div class="email-feed-text">Srilanka Rupee</div>
        </li> 
        <li>
        <div class="job-feed-text">Sudan</div>
        <div class="rss-feed-text">Khartoum</div>
        <div class="email-feed-text">Dinar</div>
        </li>
         <li>
        <div class="job-feed-text">Suriname </div>
        <div class="rss-feed-text">Paramaribo</div>
        <div class="email-feed-text">Surinamese Dollar</div>
        </li>        
        <li>
        <div class="job-feed-text">Swaziland</div>
        <div class="rss-feed-text">Mbabane8</div>
        <div class="email-feed-text">Lilangeni</div>
        </li>    
        <li>
        <div class="job-feed-text">Sweden</div>
        <div class="rss-feed-text">Stockholm</div>
        <div class="email-feed-text">Krona</div>
        </li>
        <li>
        <div class="job-feed-text">Switzerland</div>
        <div class="rss-feed-text">Bern</div>
        <div class="email-feed-text">Swiss Franc</div>
        </li> 
        <li>
        <div class="job-feed-text">Syria</div>
        <div class="rss-feed-text">Damascus</div>
        <div class="email-feed-text">Syrian Pound</div>
        </li>
        <li>
        <div class="job-feed-text">Taiwan</div>
        <div class="rss-feed-text">Taipei</div>
        <div class="email-feed-text">Taiwan New Dollar</div>
        </li> 
        <li>
        <div class="job-feed-text">Tajikistan</div>
        <div class="rss-feed-text">Dushanbe</div>
        <div class="email-feed-text">Somoni</div>
        </li> 
         <li>
        <div class="job-feed-text">Tanzania</div>
        <div class="rss-feed-text">Dar es Salaam9</div>
        <div class="email-feed-text">Tanzanian Shilling</div>
        </li>     
         <li>
        <div class="job-feed-text">Thailand</div>
        <div class="rss-feed-text">Bangkok</div>
        <div class="email-feed-text">Baht</div>
        </li>
         <li>
        <div class="job-feed-text">Togo</div>
        <div class="rss-feed-text">Lome</div>
        <div class="email-feed-text">CFA Franc</div>
        </li>
          <li>
        <div class="job-feed-text">Tonga</div>
        <div class="rss-feed-text">Nuku'alofa</div>
        <div class="email-feed-text">Pa'anga</div>
        </li>
         <li>
        <div class="job-feed-text">Trinidad and Tobago</div>
        <div class="rss-feed-text">Port-of-Spain</div>
        <div class="email-feed-text">Trinidad and Tobago Dollar</div>
        </li>
         <li>
        <div class="job-feed-text">Tunisia</div>
        <div class="rss-feed-text">Tunis</div>
        <div class="email-feed-text">Tunisian Dinar</div>
        </li>
        <li>
        <div class="job-feed-text">Turkey</div>
        <div class="rss-feed-text">Ankara</div>
        <div class="email-feed-text">Turkish New Lira</div>
        </li>
        <li>
        <div class="job-feed-text">Turkmenistan</div>
        <div class="rss-feed-text">Ashgabat</div>
        <div class="email-feed-text">Manat</div>
        </li>
        <li>
        <div class="job-feed-text">Tuvalu</div>
        <div class="rss-feed-text">Funafuti</div>
        <div class="email-feed-text">Australian dollar</div>
        </li>
        <li>
        <div class="job-feed-text">Uganda</div>
        <div class="rss-feed-text">Kampala</div>
        <div class="email-feed-text">Ugandan New Shilling</div>
        </li>
        <li>
        <div class="job-feed-text">Ukraine</div>
        <div class="rss-feed-text">Kiev</div>
        <div class="email-feed-text">Hryvna</div>
        </li>
        <li>
        <div class="job-feed-text">United Arab Emirates</div>
        <div class="rss-feed-text">Abu Dhabi</div>
        <div class="email-feed-text">UAE Dirham</div>
        </li>  
          <li>
        <div class="job-feed-text">United Kingdom</div>
        <div class="rss-feed-text">London</div>
        <div class="email-feed-text">Pound Sterling</div>
        </li> 
          <li>
        <div class="job-feed-text">United State</div>
        <div class="rss-feed-text">Washington DC</div>
        <div class="email-feed-text">US Dollar</div>
        </li> 
          <li>
        <div class="job-feed-text">Uruguay</div>
        <div class="rss-feed-text">Montevideo</div>
        <div class="email-feed-text">Uruguay Peso</div>
        </li> 
          <li>
        <div class="job-feed-text">Uzbekistan</div>
        <div class="rss-feed-text">Tashkent</div>
        <div class="email-feed-text">Uzbekistani Som</div>
        </li> 
        <li>
        <div class="job-feed-text">Vanuatu</div>
        <div class="rss-feed-text"> Port-Vila</div>
        <div class="email-feed-text">Vatu</div>
        </li> 
        <li>
        <div class="job-feed-text">Vatican City</div>
        <div class="rss-feed-text">- Vatican City</div>
        <div class="email-feed-text">Euro</div>
        </li> 
        <li>
        <div class="job-feed-text">Venezuela</div>
        <div class="rss-feed-text">Caracas</div>
        <div class="email-feed-text">Bolivars</div>
        </li> 
        <li>
        <div class="job-feed-text">Vietnam</div>
        <div class="rss-feed-text">Hanoi</div>
        <div class="email-feed-text">Dong</div>
        </li> 
        <li>
        <div class="job-feed-text">Yemen</div>
        <div class="rss-feed-text">Sana</div>
        <div class="email-feed-text">Rial</div>
        </li> 
        <li>
        <div class="job-feed-text">Zambia</div>
        <div class="rss-feed-text">Lusaka</div>
        <div class="email-feed-text">Kwacha</div>
        </li>  
        <li>
        <div class="job-feed-text">Zimbabwe</div>
        <div class="rss-feed-text">Harare</div>
        <div class="email-feed-text">Zimbabwean dollar</div>
        </li>  
               
    </ul>
</div>

<?php
}

class CountryWidget extends WP_Widget
{
  function CountryWidget()
  {
    $widget_ops = array('classname' => 'CountriesWidget', 'description' => 'Displays all Countries list');
    $this->WP_Widget('CountriesWidget', 'Countries list', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
   countries_list_widget_shortcode();
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("CountryWidget");') );


?>
