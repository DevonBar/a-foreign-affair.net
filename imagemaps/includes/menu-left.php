<Div ID="chatdiv" style="display:none;">
<center><script type="text/javascript" src="/chat/livehelp_js.php?eo=1&relative=Y&amp;department=1&amp;serversession=1&amp;pingtimes=15"></script></center>
</Div>
<?php
function OutMenuItem($src,$TextOfLink) {
echo("<!-- HTTPS --><a class=newLeftLinks href=\"".$src."\">".$TextOfLink."</a>\n");
}
//JSC Test
if($_SERVER["REMOTE_ADDR"]=="87.249.34.1" 
|| $_SERVER["REMOTE_ADDR"]=="195.131.89.91"
|| $_SERVER["REMOTE_ADDR"]=="63.253.146.114"
) {
echo '<A class=newLeftLinks href="/invar/services/member/" title="Login"><b>Member Area/Login</b></a>';
} else {
echo '<A class=newLeftLinks href="/invar/services/member/" title="Login"><b>Member Area/Login</b></a>';
}
$order_s = "/tour/";
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/invar/services/sign.php?",        'Men\'s FREE Registration');
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/information/executive/plan.shtml",     "Executive Service");            

echo "<span class='newLeftLinks-title'>About A Foreign Affair Tours</span>";        

OutMenuItem("http://$SERVER_NAME/tour/",                                "Romance Tours", "");
OutMenuItem("http://$SERVER_NAME/tour/order/order.shtml",               "European Tour Dates", "");
OutMenuItem("http://$SERVER_NAME/tour/order/latin-tour-order.shtml",         "Latin Tour Dates", "");	
OutMenuItem("http://$SERVER_NAME/tour/order/asian-tour-order.shtml",    "Asian Tour Dates", "");
OutMenuItem("http://$SERVER_NAME/tour/photos/",             "Recent Tour Photos", "");
OutMenuItem("http://$SERVER_NAME/information/tourforms/ ",    "Tour Forms", "");                      

echo "<span class='newLeftLinks-title'> A Foreign Affair European Tours</span>";        
OutMenuItem("http://$SERVER_NAME/tour/kiev/",			"Kiev", "");
OutMenuItem("http://$SERVER_NAME/tour/poltava/",			"Poltava", "");
OutMenuItem("http://$SERVER_NAME/tour/dnepropetrovsk/",	"Dnepropetrovsk", "");
OutMenuItem("http://$SERVER_NAME/tour/donetsk/",		"Donetsk", "");
OutMenuItem("http://$SERVER_NAME/tour/kharkov/",		"Kharkov", "");
OutMenuItem("http://$SERVER_NAME/tour/odessa/",		"Odessa-Kherson", "");
OutMenuItem("http://$SERVER_NAME/tour/nikolaev/",		"Nikolaev", "");
OutMenuItem("http://$SERVER_NAME/tour/spb/",			"St.Petersburg", "");
OutMenuItem("http://$SERVER_NAME/tour/crimea/",		"Crimea", "");   

echo "<span class='newLeftLinks-title'> A Foreign Affair Latin Tours</span>";        

OutMenuItem("http://$SERVER_NAME/tour/cartagena/",		"Cartagena", "");
OutMenuItem("http://$SERVER_NAME/tour/barranquilla/",		"Barranquilla", "");
OutMenuItem("http://$SERVER_NAME/tour/medellin/medellin.shtml","Medellin", "");

OutMenuItem("http://$SERVER_NAME/tour/peru/",			"Peru", "");
OutMenuItem("http://$SERVER_NAME/tour/peru/Machu-Picchu.html",	"Machu-Picchu", "");
OutMenuItem("http://$SERVER_NAME/tour/dominican-republic/",		"Dominican Republic", "");
OutMenuItem("http://$SERVER_NAME/tour/costa-rica/",		"Costa Rica", "");


echo "<span class='newLeftLinks-title'> A Foreign Affair Asian Tours</span>";        

OutMenuItem("http://$SERVER_NAME/tour/thailand/thailand.htm",	"Thailand", "");
OutMenuItem("http://$SERVER_NAME/tour/philippine-girls/philippine-girls.html",	"Philippines", "");
OutMenuItem("http://$SERVER_NAME/tour/chinese-women/chinese-women.htm", "Shenzhen China","");  
OutMenuItem("http://$SERVER_NAME/tour/chinese-women/chongqing.html", "Chongqing China","");                 


echo "<span class='newLeftLinks-title'> A Foreign Affair Women</span>";        

OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/update.htm",                     "Newest Women's Profiles"); 
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/women.htm",                      "Foreign Women's Profiles");                    
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/newphotos.htm",                  "Women With New Photos");                       
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/russian/russian-women.htm",      "Russian Women");                       
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/ukraine/ukraine-women.htm",      "Ukraine Women");                       
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/mp/latin-women.htm",  					"Latin Women");                 
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/mp/asian-women.htm",                   "Asian Women"); 
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/chinese/chinese-women.htm",      "Chinese women");                 
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/colombian/colombian-women.htm",                   "Colombian Women");  
OutMenuItem("$SERVER_PROTO://$SERVER_NAME/women/philippines/philippines-women.htm",                   "Philippine Women");  

echo "<span class='newLeftLinks-title'>More A Foreign Affair Tour Information</span>";        


OutMenuItem("http://$SERVER_NAME/media/library/index.html",		"Video/Media Center", "");
OutMenuItem("http://$SERVER_NAME/tour/dual.shtml",		"MultipleCities", "");
OutMenuItem("http://$SERVER_NAME/media/library/videos.html",       "Tour Videos ", "");
OutMenuItem("http://$SERVER_NAME/tour/choose_best_tour.shtml",   "Compare Tours Now!", "");
OutMenuItem("http://$SERVER_NAME/tour/introduction.shtml",       "Your Tour Experience", "");
OutMenuItem("http://$SERVER_NAME/tour/isoc.shtml",               "Socials", "");
OutMenuItem("http://$SERVER_NAME/tour/faq.shtml",                "Tour FAQs", "");
OutMenuItem("http://$SERVER_NAME/tour/consider.shtml",           "Items To Consider...", "");
OutMenuItem("http://$SERVER_NAME/tour/order/order.shtml#rform",  "Reservation Form", "");

?>
<P>&nbsp;</P>
<P>&nbsp;</P>