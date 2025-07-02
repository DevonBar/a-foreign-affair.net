<Div ID="chatdiv" style="display:none;">
   <center><script type="text/javascript" src="/chat/livehelp_js.php?eo=1&relative=Y&amp;department=1&amp;serversession=1&amp;pingtimes=15"></script></center>
</Div>
<?php
	function OutMenuItemF($src,$TextOfLink, $target) 
	{
		echo("<A class=newLeftLinks href=\"".$src."\"".$target.">".$TextOfLink."</a>\n");
	}
	

	OutMenuItemF("http://$SERVER_NAME/tour/",                                "Romance Tours", "");
	OutMenuItemF("http://$SERVER_NAME/tour/order/order.shtml",               "European Tour Dates", "");
	OutMenuItemF("http://$SERVER_NAME/tour/order/latin-tour-order.shtml",         "Latin Tour Dates", "");	
	OutMenuItemF("http://$SERVER_NAME/tour/order/asian-tour-order.shtml",    "Asian Tour Dates", "");
	OutMenuItemF("http://$SERVER_NAME/tour/photos/",             "Recent Tour Photos", "");
	OutMenuItemF("http://$SERVER_NAME/information/tourforms/ ",    "Tour Forms", "");                      
	
echo "<span class='newLeftLinks-title'>European Tours</span>";        
	OutMenuItemF("http://$SERVER_NAME/tour/kiev/",			"Kiev", "");
	OutMenuItemF("http://$SERVER_NAME/tour/poltava/",			"Poltava", "");
	OutMenuItemF("http://$SERVER_NAME/tour/dnepropetrovsk/",	"Dnepropetrovsk", "");
	OutMenuItemF("http://$SERVER_NAME/tour/donetsk/",		"Donetsk", "");
	OutMenuItemF("http://$SERVER_NAME/tour/kharkov/",		"Kharkov", "");
	OutMenuItemF("http://$SERVER_NAME/tour/odessa/",		"Odessa-Kherson", "");
	OutMenuItemF("http://$SERVER_NAME/tour/nikolaev/",		"Nikolaev", "");
	OutMenuItemF("http://$SERVER_NAME/tour/spb/",			"St.Petersburg", "");
	OutMenuItemF("http://$SERVER_NAME/tour/crimea/",		"Crimea", "");   

	/*OutMenuItemF("http://$SERVER_NAME/tour/krivoy_rog/",		"Krivoy Rog", "");*/
	/*OutMenuItemF("http://$SERVER_NAME/tour/nizhniy-novgorod/",	"Nizhny Novgorod", "");*/
	/*OutMenuItemF("http://$SERVER_NAME/tour/chernigov/",		"Chernigov", "");*/
	

echo "<span class='newLeftLinks-title'>Latin America Tours</span>";        
     
	OutMenuItemF("http://$SERVER_NAME/tour/cartagena/",		"Cartagena", "");
	OutMenuItemF("http://$SERVER_NAME/tour/barranquilla/",		"Barranquilla", "");
	OutMenuItemF("http://$SERVER_NAME/tour/medellin/medellin.shtml","Medellin", "");
	
	OutMenuItemF("http://$SERVER_NAME/tour/peru/",			"Peru", "");
	OutMenuItemF("http://$SERVER_NAME/tour/peru/Machu-Picchu.html",	"Machu-Picchu", "");
	OutMenuItemF("http://$SERVER_NAME/tour/dominican-republic/",		"Dominican Republic", "");
	OutMenuItemF("http://$SERVER_NAME/tour/costa-rica/",		"Costa Rica", "");
	

echo "<span class='newLeftLinks-title'>Asian Tours</span>";        
     
	OutMenuItemF("http://$SERVER_NAME/tour/thailand/thailand.htm",	"Thailand", "");
	OutMenuItemF("http://$SERVER_NAME/tour/philippine-girls/philippine-girls.html",	"Philippines", "");
	OutMenuItemF("http://$SERVER_NAME/tour/chinese-women/chinese-women.htm", "Shenzhen China","");  
	OutMenuItemF("http://$SERVER_NAME/tour/chinese-women/chongqing.html", "Chongqing China","");                 


echo "<span class='newLeftLinks-title'>Tour Information</span>";        
  
	
	OutMenuItemF("http://$SERVER_NAME/media/library/index.html",		"Video/Media Center", "");
	OutMenuItemF("http://$SERVER_NAME/tour/dual.shtml",		"MultipleCities", "");
	OutMenuItemF("http://$SERVER_NAME/tour/tour96.shtml",             "Testimonials", "");
	OutMenuItemF("http://$SERVER_NAME/tour/testimonials.shtml",       "Video Testimonials", "");
	OutMenuItemF("http://$SERVER_NAME/media/library/videos.html",       "Tour Videos ", "");
	OutMenuItemF("http://$SERVER_NAME/tour/choose_best_tour.shtml",   "Compare Tours Now!", "");
	OutMenuItemF("http://$SERVER_NAME/tour/introduction.shtml",       "Your Tour Experience", "");
	OutMenuItemF("http://$SERVER_NAME/tour/isoc.shtml",               "Socials", "");
	OutMenuItemF("http://$SERVER_NAME/tour/hospitality.shtml",        "The Hospitality Suite", "");
	OutMenuItemF("http://$SERVER_NAME/tour/faq.shtml",                "Tour FAQs", "");
	OutMenuItemF("http://$SERVER_NAME/tour/consider.shtml",           "Items To Consider...", "");
	OutMenuItemF("http://$SERVER_NAME/tour/order/order.shtml#rform",  "Reservation Form", "");
	OutMenuItemF("http://$SERVER_NAME/live/",  "<b>LIVE</b> Webcasts", "");
	OutMenuItemF("http://$SERVER_NAME/information/conference-call.php",           "Conference Calls ", "");


echo "<span class='newLeftLinks-title'>K1 Visa Information</span>";        

	OutMenuItemF("http://$SERVER_NAME/fiancee-visa/",                              "Fiancee Visa","");
	OutMenuItemF("http://$SERVER_NAME/invar/articles/90-day-fiancee.html",		"Surviving The Fiancee Visa", "");
	OutMenuItemF("http://$SERVER_NAME/travel/",		"Visa's & Airfare", "");



//echo "<span class='newLeftLinks-title'>AFA Awards</span><BR>";        
//echo("<center><img src='/img/idate-winner-bestnichedating-2016-180px.jpg' width='180' hspace=0 align='center' vspace=0 border=0></center>");
?>
