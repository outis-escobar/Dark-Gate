<?
$owl =$_GET['owl']; // for next&back page and pirint result ;)

$valsearch =  null;
/* valsearch = kay seaech */ 
$url = "http://darkgate.darkunion.info/eng.php?owl=$valsearch&kay=on";
$cdark = curl_init("$url");
curl_setopt($cdark, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cdark, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($cdark, CURLOPT_VERBOSE, 1);
curl_setopt($cdark, CURLOPT_RETURNTRANSFER, 1);
$resultld = curl_exec($cdark);
echo $resultld; // result search html+css

//  https://getbootstrap.com/  --class css's--
/* demo 1 result ----> <div class="alert alert-primary" role="alert">
            <div> <span style="font-size: small;"><h4>http://f2fv76wtuwdvbpci.onion/</h4></span>
            <a href="http://f2fv76wtuwdvbpci.onion/"><h2 class="text-success">161 - The way into the Darknet - Search Tor Scam List Wie ins Darknet kommen ?</h2></a></div>
            <a href="#" class="badge badge-dark">⭐ 80</a>
            </div><br> <----
// demo next&back page ----> <a href="-->?owl=by&page=2<--" class="numpc-coler numpc active" role="button" aria-pressed="true"><span>next</span></a>      
*/       

