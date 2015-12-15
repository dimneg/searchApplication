<html> 
<head>
   <!-- DataTables CSS -->
   <link rel="stylesheet" type="text/css" href="/sites/all/js/DataTables/media/css/jquery.dataTables.css"> 
  
   
   <link rel="stylesheet" type="text/css" href="/sites/all/js/dataTable/jquery-ui/jquery-ui.css" />
   
   <!-- DataTables JS -->
   <script type="text/javascript" src="/sites/all/js/dataTable/jQuery/jquery-2.0.3.js"></script>
  
   
  
   <script type="text/javascript" src="/sites/all/js/dataTable/jQuery/jquery-ui.js"></script>  
  
   
  
   <script type="text/javascript" charset="utf8"  src="/sites/all/js/dataTable/dataTables/jquery.dataTables1.js"></script> 
   
	
   <script type="text/javascript" src="/sites/all/js/dataTable/dataTables/dataTables.sorting.js"></script>
   
   
   <script type="text/javascript" src="/sites/all/js/dataTable/date-eu.js"></script>
  




 
 <script> //090166291 090153025
 	$(document).ready( function () {
 	$('#searchResults').DataTable(
	{
        "aaSorting": [[ 1, "desc" ]], //"aaSorting": [[ 3, "desc" ]],
		"bJQueryUI": true,
		"aLengthMenu": [
        [25, 50, 100, 200, -1],
        [25, 50, 100, 200, "All"]
        ],
		
		"oLanguage":{ 	       
		   "sLengthMenu": "Eμφάνιση _MENU_ ",
		   "sZeroRecords": "Δεν βρέθηκαν εγγραφές...",
		   "sInfo": " _START_ - _END_ από _TOTAL_ ",
		   "sInfoEmpty": "Δεν βρέθηκαν εγγραφές",
		   "sInfoFiltered": "(επιλεγμένες από τις _MAX_ εγγραφές)"
		   },
		    "aoColumnDefs": [ 
					//	{  "bVisible": false, "aTargets": [ 3 ] },
						{  "bVisible": false, "aTargets": [ 1 ] },
					//	{  "bVisible": false, "aTargets": [ 2 ] }
                        				
					]
		
    } 
	
	
	);
	
	} ); 
</script>

<!-- <div align="center">
 <a href="/"><img src="/sites/all/themes/logo_alpha.png"></a>
</div> -->
<style>



li.ex1{
list-style-type: none;
display:inline; 
padding-right: 7px;
}

li.ex1:hover {
color: #30b42b;
padding-bottom: 1px;
 }

.general{
width:80%;
align:center;
}

.mblink:visited, a:visited {
 <!--  color: #609; --> 
<!--  color: #FFA500;-->
  <!-- color: #1a0dab; --> 
  }
  a:link {
    color: #1a0dab;
}

/* visited link */
a:visited {
    color: #609;
}
 /* a:link, .w, #prs a:visited, #prs a:active, .q:active, .q:visited, .kl:active, .tbotu {

  <!--  color: #FFA500; -->
   color: #1a0dab; 
} */
h1, #cdr_min, #cdr_max, .cpbb, .kpbb, .kprb, .kpgb, .kpgrb, .ksb {
  font-family: arial,sans-serif;
}


#wrapNew {
width: 80%;
margin: 0 auto;
background: #99c;
}
a {
  padding-left: 0 !important;
<!--  color: #ffb141; -->
<!--  color: #609
} -->


#mainNew {
float:left;
width:75%;
padding-top:5px;
padding-bottom:5px;

}

#sidebarNew {
float:right;
width:25%;
padding-top:5px;
padding-bottom:5px;
}


#mainNewInternal {
float:left;
width:80%;
padding-top:5px;
padding-bottom:5px;

}

#sidebarNewInternal {
float:right;
width:18%;
padding-top:5px;
padding-bottom:5px;
padding-right:5px;

  text-align:center;

 
  height:10px;
}





/* CSSTerm.com Simple CSS menu */

li.ex2{
list-style-type: none;
border-top: solid 1px #E8E8E8;
 height: 47px;
 line-height: 40px;

}


.menu_simple ul {
    margin: 0; 
    padding: 0;
    width:220px;
    list-style-type: none;

}

.menu_simple ul li a {
    text-decoration: none;
    color: black; 
    padding: 10px 10px;

    display:block;

  border-right: solid 1px #E8E8E8;
  border-left: solid 1px #E8E8E8;
  border-bottom: solid 1px #E8E8E8;

}
 
.menu_simple ul li a:visited {
    color: orange;
}
 
.menu_simple ul li a:hover, .menu_simple ul li .current {
    color: black;
    background-color: #5FD367;
}

.imageLi{
vertical-align:middle;
}

.alignleft {
	float: left;
       width: 80%;
}
.alignright {

	float: right;
      padding-right: 30px;
}

a.searchTabs:link {
color: #ffb141; 
}
a.searchTabs:visited {
color: #ffb141; 
}

a.searchTabs:hover {
color: #30b42b;
}

a.searchTabs:active {
color: #1C94C4;
}
a.hereTabs{
font-weight: bold;
font-size: 125%;

}
a.hereTabs:active {
color: #4285f4;
}
a.hereTabs:link {
color: #4285f4;
}
a.hereTabs:hover {
color: #30b42b;
}
a.hereTabs:visited {
color: #4285f4;
}
a.nameLink{
font-weight: bold;
}


</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Search</title>
</head>
<body>
<div class="row-fluid margin-bottom" align="center" >
<form action="search_dev.php" method="post" accept-charset="UTF-8"> 
<p>			
<input type="text" style="width: 450px; height: 32px;" name="formKeyword" placeholder="ΑΦΜ ή Όνομα ή Σημείο Πώλησης ή Προϊόν" value="<?php if (isset($_POST['formKeyword'])) echo $_POST['formKeyword']?>"  maxlength="70" autofocus /> 			
<input type="submit" name="formSubmit" value="search"  style="display: none;" >				
</p>
<div align="center" >
 <!--<li  class="ex1" id="dim" > Δημόσιες Προμήθειες </li><li  class="ex1">Επιδοτήσεις</li> <li  class="ex1">Προϋπολογισμοί</li> <li class="ex1"> Τιμές</li>  -->
<a class="searchTabs" href="searchProcurement.php?varKeyword=<?php if (isset($_POST['formKeyword'])) echo $_POST['formKeyword'] ?>"  >Δημόσιες Προμήθειες</a>
 <a class="searchTabs" href="searchEspa.php?varKeyword=<?php if (isset($_POST['formKeyword'])) echo $_POST['formKeyword'] ?>"    >Επιδοτήσεις</a>

 <a class="searchTabs" href="searchPrices.php?varKeyword=<?php if (isset($_POST['formKeyword'])) echo $_POST['formKeyword'] ?>"   >Τιμές</a>
  <!--style="color:#1C94C4" -->
<!--<form method="post" action="searchKhmdhs.php">
    <input type="hidden" name="varKeyword=" value="varKeyword">
    <input type="submit" style="display: none;">
</form> -->
 <br>
<hr align="center" width="80%">
<li class="ex1" >Αποτελέσματα</li> <li class="ex1">Αναζήτησης</li>
</div>
</form>
                                
	 
<?php
//version 2.0 27/2/2015
//echo $_SERVER['HTTP_REFERER'];
//hybrid_diaugeia khmdhs test 023000463
$time_pre = microtime(true);
$prefix='' ;
$varKeyword=$_POST['formKeyword']; 
$rowKeyword=$varKeyword;
$DbPath='http://83.212.86.158:5984/_fti/local/';
$Db='';  
$DesignDoc='';
$Index='';
$Limit=25;
$Sort='id';
$Wc='';
$calls=0;
$Results=array();
$AlreadyFound=0;
$Boost=1.5;
$Actual_link='';
$Lang='';
$Domain='';
$term1='';
$term2='';
$term12='';
//$newdata=array();

/*register_shutdown_function( "fatal_handler" );

function fatal_handler() {
  $errfile = "unknown file";
  $errstr  = "shutdown";
  $errno   = E_CORE_ERROR;
  $errline = 0;

  $error = error_get_last();

  if( $error !== NULL) {
    $errno   = $error["type"];
    $errfile = $error["file"];
    $errline = $error["line"];
    $errstr  = $error["message"];

    format_error( $errno, $errstr, $errfile, $errline);
  }
}
function format_error( $errno, $errstr, $errfile, $errline ) {
  $trace = print_r( debug_backtrace( false ), true );

  $content = "
  <table>
  <thead><th>Item</th><th>Description</th></thead>
  <tbody>
  <tr>
    <th>Error</th>
    <td><pre>$errstr</pre></td>
  </tr>
  <tr>
    <th>Errno</th>
    <td><pre>$errno</pre></td>
  </tr>
  <tr>
    <th>File</th>
    <td>$errfile</td>
  </tr>
  <tr>
    <th>Line</th>
    <td>$errline</td>
  </tr>
  <tr>
    <th>Trace</th>
    <td><pre>$trace</pre></td>
  </tr>
  </tbody>
  </table>";

  return $content;
}

*/


if($_POST['formSubmit'] == "search") {   
//echo $varKeyword;

//echo $Lang;

  if(strlen($varKeyword) != mb_strlen($varKeyword, 'utf-8')) //not only english     
	$varKeyword= prepareKeyword($varKeyword) ;    
  else
	$varKeyword = rtrim(ltrim($varKeyword));  
  
  $words = explode(' ', $varKeyword);  

  
  //read all data
   
  
  if (is_numeric($varKeyword)) //probaby afm
          {		  
		  
		  if (strlen(utf8_decode($varKeyword)) <=6 )
		   {		   
		   //all  exact 	
            prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword); 
            prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$varKeyword);
			
            prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);  
            prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword); 	
             
            prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
            prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);			    
		   }
		   else
		    {
		    //all  like	
		    prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword); 
		    prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
		   
		    prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);  
            prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword); 	
		   
		    prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
            prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);		  
		    }
		   
			
		   }
		 		  
        
          	  
  else //name
        {
		if(strlen($varKeyword) != mb_strlen($varKeyword, 'utf-8')) //greek found
			{
				if (count($words) == 1)
					{ 
						if (strlen(utf8_decode($varKeyword)) <=4 )
							{ // greek  like
							    prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
                                prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);
								
								prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);	             		  
								 
								prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								
								prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);                          								
									    								
							}
							else // exact, fuzzy and then like
							{ 			 
								//exact
								prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
                                prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$varKeyword);	
								
								prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword); 
								prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword); 
								
								prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword); 
								prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
								
								prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);  
                                									
			 
								// fuzzy			 
								prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
                                prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
 								
								prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
								prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
								
								prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
								prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
								
								prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$varKeyword);  
                                									
								
			
									/*if ($AlreadyFound == 0) 
									{			 
								      prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);				 
									  prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);	
									  prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
                                      prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);										
									}	*/
				                //like
								prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);	
                                prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);									
								
								prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);	
								prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								
								prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword); 
							    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword); 
								
								prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);
			                    prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);  
								
								
									
             			  
									/*if ($AlreadyFound == 0)
									{
									    prepareResults($DbPath,"elod_diaugeia_hybrids","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword); 
										prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword); 
										prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);   
                                        prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);										
									}*/
						 
							} //END OF FUZZY THEN LIKE
			
					} //END OF ONE WORD
				else if (count($words) >1) 
				    {  //words>1 1.exact match
					    
					    
						$termsArray= prepareExactKeyword($varKeyword);
						$term1=$termsArray[0];  
						//echo 't1='.$term1;
						$term2=$termsArray[1];
						//echo 't2='.$term2;
						$term12=$termsArray[2];
						//echo 't12='.$term12;
						$varKeyword=$termsArray[3];
						//echo 'vk='.$varKeyword;
						//keyword exact
						prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword); 
						prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$varKeyword);  	
						
						prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
						prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);  
						prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword); 
						prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
						
						prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$varKeyword);
			            prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);
			            prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);  
											
			  
						//word1+2
						prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12);
						prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$term12); 
						
						prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12);
						prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12); 			
						prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$term12);
						prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$term12);
						
						prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$term12);
			            prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$term12);
			            prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$term12);  
						
			
            //term1 like and then fuzzy			  
		    
            if (strlen(utf8_decode($term1)) <=4 ){			
			  	  
						prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term1);
				
						prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);			 			   
						prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1); 	
						prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1);	
 
						prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term1);   
			
			 
			    }
			 
			    else {   			
						prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1); 
						prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$term1); 
						
						prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1); 
						prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1); 
						prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1); 
					    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1);
						
						prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$term1);
						prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1);
						prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1); 
												
			  
					/*if ($AlreadyFound == 0)   {		 
	                     		              
					    prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);	
                        prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);	    
					
					    }		*/		
				        prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1); 
						prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term1); 
						
						prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1); 
						prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1); 
						prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1); 
					    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1);
						
						prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term1);
						prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term1); 
						
                  		/*
				 	   if ($AlreadyFound == 0)  {
					   
					    prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1);
                        prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1); 
			  		
		          	    } */
				  		   
			         }        
				 
	             	if (strlen(utf8_decode($term2)) <=4 ){		 				 
				     prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);
					 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term2);
					 
			         prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);
			         prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);			   
			         prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2); 
                     prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
					 
					 prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term2);
					 prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
					 prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
                    						 
			 			   
			   
			  	   			   
			  }
			  
			  
			  else {
			        prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2); 
					prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$term2); 
					
			        prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2); 
					prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2); 
					
					prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term2);
                    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term2); 	
					
					prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$term2);
					prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term2);
					prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term2);
					
					
			       /* if ($AlreadyFound == 0)   {
					//prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);	
					
				    prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);	
                    prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);	
					prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term2);	
                    			
				  }	 */
				  prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2); 
					prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term2); 
					
			        prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2); 
					prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2); 
					
					prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
                    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2); 	
					
					prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term2);
					prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
					prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
			  		
		          
				   				   
			  
                  /* if ($AlreadyFound == 0)  {
				 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2); 
                 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);	
			     			 
				 }		*/	 
			  }
			             
		 
          }
		
		}
		else //english and greek
		{
		
		
		if (count($words) == 1)
		  { 
		     if (strlen(utf8_decode($varKeyword)) <=4 )
			 { // all like
			  prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
			  prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);				  
								
			  prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
			  prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);       		  
								 
			  prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
			  prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								
			  prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$varKeyword);
			  prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);
			  prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);  	  
			
			  
			 } //end of small latin
			 else // latin, >4,1 word : exact-> fuzzy-> like			 
			 { 			 
			 // exact all 
			 prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$varKeyword);
			 
             prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);       		  
								 
			 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
								
			 prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);  				 
			 
			 
			 // fuzzy all 			 
			 prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
			 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
			 
			 prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);       		  
								 
			 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword);
								
			 prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$varKeyword); 
			 
			 
			/* if ($AlreadyFound == 0)   { // like all buyers not sure IF works
			    prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword); 
				prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);
			    foreach ($jsonAll['databases'] as $rowAll){
			    if (($rowAll['organization']) == 'buyer')	{		 
					prepareResults($DbPath,$rowAll['name'],"buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);	
					}
				}*/
			 prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword); 
			 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$varKeyword);
			 
			 prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$varKeyword);       		  
								 
			 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);
								
			 prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword);
			 prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$varKeyword); 	
                
				
			}	//end of one word > 4
			/*	//same for sellers
				// exact
				
			   foreach ($jsonAll['databases'] as $rowAll){
               if (($rowAll['organization']) == 'seller')	{			   
				prepareResults($DbPath,$rowAll['name'],"sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword); 
				}
               }
			   
			   //fuzzy
			   foreach ($jsonAll['databases'] as $rowAll){
               if (($rowAll['organization']) == 'seller') {
					prepareResults($DbPath,$rowAll['name'],"sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$varKeyword); 
					}
               }		 
			   //like if no results
			   
             if ($AlreadyFound == 0)  {
			    foreach ($jsonAll['databases'] as $rowAll){
                if (($rowAll['organization']) == 'seller') {
					prepareResults($DbPath,$rowAll['name'],"sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$varKeyword);   
					}             	
                } 
				
			} */
						 
		  
		  
		}//end of one word
		 
		  else if (count($words) >1) //words>1 1.exact match
		  { 
		               	  
		    $termsArray= prepareExactKeyword($varKeyword);
			$term1=$termsArray[0];  
			$term2=$termsArray[1];
			$term12=$termsArray[2];
			$varKeyword=$termsArray[3];
			
			//$term12= '"'.$term1."+".$term2.'"';
			
			  
              //echo "λέξη1: ".$term1."λέξη2: ".$term2;
															
              //echo   "keyword= ".$varKeyword ;	
 
		  
		      $varKeyword = rtrim($varKeyword);
			  
			  
		      //exact all words	,need to boost score  
			   prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
			   prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$varKeyword);
			   
			   prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);
			   prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$varKeyword);       		  
								 
			   prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
			   prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$varKeyword);
								
			   prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$varKeyword);
			   prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword);
			   prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$varKeyword); 	
			   
			   
			   
			  
			   //exact first 2 words need to boost
			   prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12);
			   prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'',25,"score",$term12);
			   
			   prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12);
			   prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'',25,"score",$term12);       		  
								 
			   prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$term12);
			   prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'',25,"score",$term12);
								
			   prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'',25,"score",$term12);
			   prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'',25,"score",$term12);
			   prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'',25,"score",$term12); 
			   
			  
			   
			  //term1 like and then fuzzy
			  if (strlen(utf8_decode($term1)) <=4 ){
			   prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);
			   prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term1);
			  
		       prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);
			   prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);       		  
								 
			   prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1);
			   prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term1);
								
			   prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term1);
			   prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term1);
			   prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term1);                 
			   
			   
			  } //end of small word term1
			  
			  
			  else // term1 > 4
			  {		
                     prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);	
					 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$term1);
                     
                     prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);
					 prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);       		  
								 
					 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1);
					 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1);
								
			         prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$term1);
			         prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1);
			         prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1);     					 
					 
					
			        /*if ($AlreadyFound == 0)   {					
					
					foreach ($jsonAll['databases'] as $rowAll){
                    if (($rowAll['organization']) == 'buyer') {
						prepareResults($DbPath,$rowAll['name'],"buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term1);	                   
                        }
					}					
				  }	*/
				     prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);	
					 prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$term1);
                     
                     prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);
					 prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term1);       		  
								 
					 prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1);
					 prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term1);
								
			         prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$term1);
			         prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1);
			         prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term1);      
				  
			  		
					
                 		  
			  } //end of term1  > 4
			  
			    if (strlen(utf8_decode($term2)) <=4 ){				
			    prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);
				prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term2);
				
				prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);
			    prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);       		  
								 
				prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
				prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
								
			    prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term2);
			    prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
			    prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term2); 			
								
			    }
			  
			  
			  else { 		
                    prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2); 
                    prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'~0.75',25,"score",$term2); 
					
					prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2);
			        prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'~0.75',25,"score",$term2);       		  
								 
				    prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term2);
				    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'~0.75',25,"score",$term2);
								
			        prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'~0.75',25,"score",$term2);
			        prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term2);
			        prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'~0.75',25,"score",$term2); 				
					
			        /*if ($AlreadyFound == 0)   {					
					foreach ($jsonAll['databases'] as $rowAll){
			        if (($rowAll['organization']) == 'buyer') {					
						prepareResults($DbPath,$rowAll['name'],"buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);                    
						}
                    }						
				    }	*/
					prepareResults($DbPath,"elod_diaugeia_hybrids","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2); 
                    prepareResults($DbPath,"elod_espa_beneficiaries","VatIdOrName","by_beneficiaryDtls_VatIdOrName",'*',25,"score",$term2); 
					
					prepareResults($DbPath,"elod_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);
			        prepareResults($DbPath,"elod_diaugeia_buyers","buyerVatIdOrName","by_buyerDtls_VatIdOrName",'*',25,"score",$term2);       		  
								 
				    prepareResults($DbPath,"elod_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
				    prepareResults($DbPath,"elod_diaugeia_sellers","sellerVatIdOrName","by_sellerDtls_VatIdOrName",'*',25,"score",$term2);
								
			        prepareResults($DbPath,"elod_eprices_shops","Shop","by_eprices_ShopName",'*',25,"score",$term2);
			        prepareResults($DbPath,"elod_eprices_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
			        prepareResults($DbPath,"elod_kath_products","Product","by_eprices_ProductName",'*',25,"score",$term2);
					
			  				  
			    }
			             
		 
          } //end of words>1
		} //end of english and greek

    } //end of name


//sortResults();

showResults();

curl_close($chAll);
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo  "<div ALIGN='CENTER'>";
echo '(Σε '.number_format($exec_time,2).' δευτερόλεπτα)' ;
echo "</div>";


///////end of MAIN//////
}


function prepareResults($DbPath,$Db,$DesignDoc,$Index,$Wc,$Limit,$Sort,$varKeyword) {
global $AlreadyFound;
//$GLOBALS['newdata'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $DbPath.$Db."/_design/".$DesignDoc."/".$Index."?q=term:".$varKeyword.$Wc."&limit:".$Limit."&sort:".$Sort);
//echo $DbPath.$Db."/_design/".$DesignDoc."/".$Index."?q=term:".$varKeyword.$Wc."&limit:".$Limit."&sort:".$Sort."<br>";
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, 'dimneg:dim1978');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	       'Content-type: application/json; charset=utf-8',
	       'Accept: */*'
            ));

$response = curl_exec($ch); 

curl_close($ch);
global $prefix ; 
global $Results;
global $Lang;

//echo $Db; //ok

//echo $prefix; // ok



$json=json_decode($response,true);
global $Actual_link; 
global $Lang; 
$Actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($Actual_link,'/en/') !== false) {
    $Lang= 'en/';
}
else
if (strpos($Actual_link,'/el/') !== false) {
    $Lang= 'el/';
}
else $Lang='';

if (strpos($Actual_link,'83.212.86.162') !== false){
$Domain="http://83.212.86.162/";
}
else
if (strpos($Actual_link,'83.212.86.164:81') !== false){
$Domain="http://83.212.86.164:81/";
}
else
$Domain="http://linkedeconomy.org/"; 

if(isset ($json['rows'])) 
foreach($json['rows'] as $r)
{  
switch ($Db) {
case "elod_buyers":
        $prefix=$Domain.$Lang."khmdhs/" ;
		break;
case "elod_sellers":
        $prefix=$Domain.$Lang."khmdhs/" ;
		break;
case "elod_diaugeia_buyers":
        $prefix=$Domain.$Lang."diaugeia/" ;
		break;
case "elod_diaugeia_sellers":
        $prefix=$Domain.$Lang."diaugeia/" ;
		break;
case "elod_australia_buyers":
        $prefix=$Domain.$Lang."australia/" ;
		break;
case "elod_australia_sellers":
        $prefix=$Domain.$Lang."australia/" ;
		break;  
case "elod_diaugeia_hybrids":
        $prefix=$Domain.$Lang."diaugeia/" ;
		break;  
case "elod_new_york_buyers":
        $prefix=$Domain.$Lang."newyork/" ;
		break;  
case "elod_new_york_sellers":
        $prefix=$Domain.$Lang."newyork/" ;
		break;
case "elod_new_york_state_buyers":
        $prefix=$Domain.$Lang."newyorkstate/" ;
		break;  
case "elod_new_york_state_sellers":
        $prefix=$Domain.$Lang."newyorkstate/" ;
		break;
case "elod_london_city_buyers":
        $prefix=$Domain.$Lang."london/" ;
		break;  
case "elod_london_city_sellers":
        $prefix=$Domain.$Lang."london/" ;
		break; 
case "elod_europa_fts_buyers":
        $prefix=$Domain.$Lang."eu/" ;
		break;  
case "elod_europa_fts_sellers":
        $prefix=$Domain.$Lang."eu/" ;
		break;
case "elod_espa_beneficiaries":
        $prefix=$Domain.$Lang."" ;
		break;
case "elod_eprices_shops":
        $prefix=$Domain.$Lang."page/" ;
		break;  
case "elod_eprices_products":
        $prefix=$Domain.$Lang."page/" ;
		break;
case "elod_kath_products":
        $prefix=$Domain.$Lang."" ;
		break;  		
}
global $Boost;
$Boost=10; //1.5 previous value
switch ($Wc) {
case "";
	{	
	
	$r['score'] *=$Boost;
	
	break; 
	
	}
case "*";
	{
	
	$r['score'] *=1;
	
	break; 
	
	}
case "~0.75";
    {
	
	$r['score'] *=1;
	
	break; 
	}
}
//echo $Boost;
	
if(isset ($json['rows'])) 
 $newdata =  array (
     // 'name' => $r['fields']['term'][1],
	  'name' => (isset($r['fields']['term'][1])) ? $r['fields']['term'][1] : null ,
	 /* 'smallimage' => (isset($product_option_value_description_query->row['smallimage'])) ?
        $product_option_value_description_query->row['smallimage'] : null, */
	 
      'vat' => $r['fields']['term'][0],
      'link' => $prefix.$r['id'],
	  'address'=>(isset($r['fields']['address']) ) ? $r['fields']['address'] : null ,
	  'pc'=>(isset($r['fields']['pc']) ) ? $r['fields']['pc'] : null ,   
	  'city'=>(isset($r['fields']['city']) ) ? $r['fields']['city'] : null ,
	  'score' =>  $r['score'],
	  'id' => $r['id'],
      'lastUpdate'=> $r['fields']['lastUpdate'],
       //ΔΙΑΥΓΕΙΑ
      'award0'=>(isset($r['fields']['awardAmount0']) ) ? $r['fields']['awardAmount0'] : null ,
	  'award1'=> (isset($r['fields']['awardAmount1']) ) ? $r['fields']['awardAmount1'] : null ,
      'award2'=> (isset($r['fields']['awardAmount2']) ) ? $r['fields']['awardAmount2'] : null ,
	  'awardCnt0'=> (isset($r['fields']['awardCounter0']) ) ? $r['fields']['awardCounter0'] : null ,
	  'awardCnt1'=> (isset($r['fields']['awardCounter1']) ) ? $r['fields']['awardCounter1'] : null ,
	  'awardCnt2'=> (isset($r['fields']['awardCounter2']) ) ? $r['fields']['awardCounter2'] : null ,
	 // 'awardItemsNo'=> $r['fields']['awardItemsNo'], //Not in use
	  'spend0'=> (isset($r['fields']['spendAmount0']) ) ? $r['fields']['spendAmount0'] : null ,
      'spend1'=> (isset($r['fields']['spendAmount1']) ) ? $r['fields']['spendAmount1'] : null ,
	  'spend2'=> (isset($r['fields']['spendAmount2']) ) ? $r['fields']['spendAmount2'] : null ,
	  'spendCnt0'=>  (isset($r['fields']['spendCounter0']) ) ? $r['fields']['spendCounter0'] : null ,
	  'spendCnt1'=>  (isset($r['fields']['spendCounter1']) ) ? $r['fields']['spendCounter1'] : null ,
	  'spendCnt2'=> (isset($r['fields']['spendCounter2']) ) ? $r['fields']['spendCounter2'] : null ,
      //'spendingItemsNo'=> $r['fields']['spendingItemsNo'], //Not in use	 	   
	  //ΚΗΜΔΗΣ
	  'contractAmountPrev'=> (isset($r['fields']['contractsAmount0']) ) ? $r['fields']['contractsAmount0'] : null ,
	  'contractAmountCur'=> (isset($r['fields']['contractsAmount1']) ) ? $r['fields']['contractsAmount1'] : null ,
	   // 'contract2'=> $r['fields']['contractsAmount2'],
	  'paymentAmountPrev'=> (isset($r['fields']['paymentsAmount0']) ) ? $r['fields']['paymentsAmount0'] : null ,
      'paymentAmountCur'=> (isset($r['fields']['paymentsAmount1']) ) ? $r['fields']['paymentsAmount1'] : null ,
	   // 'payment2'=> $r['fields']['paymentsAmount2'], 	  
      'contractItemsNo'=> (isset($r['fields']['contractItemsNo']) ) ? $r['fields']['contractItemsNo'] : null ,
      'paymentItemsNo'=>  (isset($r['fields']['paymentItemsNo']) ) ? $r['fields']['paymentItemsNo'] : null ,
	  
	  //australia & London & europa & newyork
	  'contractAmount0'=> (isset($r['fields']['contractAmount0']) ) ? $r['fields']['contractAmount0'] : null ,
	  'contractAmount1'=> (isset($r['fields']['contractAmount1']) ) ? $r['fields']['contractAmount1'] : null ,
	  'contractAmount2'=> (isset($r['fields']['contractAmount2']) ) ? $r['fields']['contractAmount2'] : null ,
	  'contractAmount3'=> (isset($r['fields']['contractAmount3']) ) ? $r['fields']['contractAmount3'] : null , //london only
	  'contractCounter0'=>(isset($r['fields']['contractCounter0']) ) ? $r['fields']['contractCounter0'] : null ,
	  'contractCounter1'=> (isset($r['fields']['contractCounter1']) ) ? $r['fields']['contractCounter1'] : null ,
	  'contractCounter2'=> (isset($r['fields']['contractCounter2']) ) ? $r['fields']['contractCounter2'] : null ,
	  'contractCounter3'=> (isset($r['fields']['contractCounter3']) ) ? $r['fields']['contractCounter3'] : null , //london only
	 
	  // for last item
	  
	   //diaygeia
	  'award0_2'=>' ',	
	  'award1_2'=>' ',
      'award2_2'=> ' ',
	  'awardCnt0_2'=>' ',
	  'awardCnt1_2'=>' ',
	  'awardCnt2_2'=>' ',		  
	  'spend0_2'=>' ',
	  'spend1_2'=>' ',	 
	  'spend2_2'=>' ',	
	  'spendCnt0_2'=>' ',
	  'spendCnt1_2'=>' ',
	  'spendCnt2_2'=>' ',
	  
	  //khmdhs
	  'contractAmountPrev_2'=> ' ',
      'contractAmountCur_2'=>' ', 
	  'paymentAmountPrev_2'=>' ',
      'paymentAmountCur_2'=>' ',	  
      'contractItemsNo_2'=>' ',
      'paymentItemsNo_2'=>' ',   
	  
	  //bοth
	  'lastUpdate_2'=>' ',
      'dk_flag'=>' ',
  
       //espa  	
	  'SubsContractsAmount'=> (isset($r['fields']['SubsContractsAmount']) ) ? $r['fields']['SubsContractsAmount'] : null ,
	  'SubsPaymentsAmount'=>(isset($r['fields']['SubsPaymentsAmount']) ) ? $r['fields']['SubsPaymentsAmount'] : null ,	
	  'SubsContractsCounter'=>(isset($r['fields']['SubsContractsCounter']) ) ? $r['fields']['SubsContractsCounter'] : null ,
	  'SubsPaymentsCounter'=> (isset($r['fields']['SubsPaymentsCounter']) ) ? $r['fields']['SubsPaymentsCounter'] : null,  
	  'pageKind'=> (isset($r['fields']['pageKind']) ) ? $r['fields']['pageKind'] : null,  
	   //espa extra
	     //espa-khmdhs
			'linkEKS'=>' ',
			'contractAmountPrevEKS'=>' ',
			'contractAmountCurEKS'=>' ',
		    'paymentAmountPrevEKS'=>' ',
		    'paymentAmountCurEKS'=>' ',
			'contractItemsNoEKS'=>' ',
			'paymentItemsNoEKS'=>' ',
			'lastUpdateEKS'=>' ',	
			
			'linkEKB'=>' ',
			'contractAmountPrevEKB'=>' ',
			'contractAmountCurEKB'=>' ',
		    'paymentAmountPrevEKB'=>' ',
		    'paymentAmountCurEKB'=>' ',
			'contractItemsNoEKB'=>' ',
			'paymentItemsNoEKB'=>' ',
			'lastUpdateEKB'=>' ',	
			
		//espa-diaugeia	
		   'linkEDS'=>' ',		  		
		   'award0EDS'=>' ',
	       'award1EDS'=> ' ',
           'award2EDS'=>' ' ,
	       'awardCnt0EDS'=>' ',
	       'awardCnt1EDS'=>' ' ,
	       'awardCnt2EDS'=>' ' ,	
	       'spend0EDS'=>' ' ,
		   'spend1EDS'=>' ' ,
	       'spend2EDS'=>' ' ,
	       'spendCnt0EDS'=>' '  ,
	       'spendCnt1EDS'=>' ',
	       'spendCnt2EDS'=>' ' ,
	       'lastUpdateEDS'=>' ',
		   
	       'linkEDB'=>' ',
		   'award0EDB'=>' ',
	       'award1EDB'=> ' ',
           'award2EDB'=>' ' ,
	       'awardCnt0EDB'=>' ',
	       'awardCnt1EDB'=>' ' ,
	       'awardCnt2EDB'=>' ' ,	
	       'spend0EDB'=>' ' ,
		   'spend1EDB'=>' ' ,
	       'spend2EDB'=>' ' ,
	       'spendCnt0EDB'=>' '  ,
	       'spendCnt1EDB'=>' ',
	       'spendCnt2EDB'=>' ' ,
	       'lastUpdateEDB'=>' ',
	  
       //diaugeia-hybrids sellers  
	  'awardSel0'=> (isset($r['fields']['awardAmountSel0']) ) ? $r['fields']['awardAmountSel0'] : null ,
	  'awardSel1'=> (isset($r['fields']['awardAmountSel1']) ) ? $r['fields']['awardAmountSel1'] : null ,
      'awardSel2'=> (isset($r['fields']['awardAmountSel2']) ) ? $r['fields']['awardAmountSel2'] : null ,
	  'awardCntSel0'=> (isset($r['fields']['awardCounterSel0']) ) ? $r['fields']['awardCounterSel0'] : null ,
	  'awardCntSel1'=> (isset($r['fields']['awardCounterSel1']) ) ? $r['fields']['awardCounterSel1'] : null ,
	  'awardCntSel2'=> (isset($r['fields']['awardCounterSel2']) ) ? $r['fields']['awardCounterSel2'] : null ,	  
	  'spendSel0'=> (isset($r['fields']['spendAmountSel0']) ) ? $r['fields']['spendAmountSel0'] : null ,	
      'spendSel1'=> (isset($r['fields']['spendAmountSel1']) ) ? $r['fields']['spendAmountSel1'] : null ,	
	  'spendSel2'=> (isset($r['fields']['spendAmountSel2']) ) ? $r['fields']['spendAmountSel2'] : null ,	
	  'spendCntSel0'=> (isset($r['fields']['spendCounterSel0']) ) ? $r['fields']['spendCounterSel0'] : null ,	
	  'spendCntSel1'=> (isset($r['fields']['spendCounterSel1']) ) ? $r['fields']['spendCounterSel1'] : null ,	
	  'spendCntSel2'=> (isset($r['fields']['spendCounterSel2']) ) ? $r['fields']['spendCounterSel2'] : null ,	
	  
	  //diaugeia-hybrids ->khmdhs
	  'linkHKS'=>' ',
	  'linkHKB'=>' ',
	  'contractAmountPrevHKS'=> ' ' ,
	  'contractAmountPrevHKB'=> ' ' ,
	  'contractAmountCurHKS'=> ' ' ,
	  'contractAmountCurHKS'=> ' ' ,	  
	  'paymentAmountPrevHKS'=> ' ' ,
	  'paymentAmountPrevHKB'=> ' ' ,
      'paymentAmountCurHKS'=> ' ' ,
	  'paymentAmountCurHKB'=> ' ' ,
	  'contractItemsNoHKS'=> ' ' ,
	  'contractItemsNoHKB'=> ' ' ,
	  'paymentItemsNoHKS'=> ' ' ,
	  'paymentItemsNoHKB'=> ' ',
	  'lastUpdateHKS'=> ' ',	  
	  'lastUpdateHKB'=> ' ', 
	  
	  'psName' => (isset($r['fields']['term'][0])) ? $r['fields']['term'][0] : null ,     //product,shop name
	  'minPrice'=>(isset($r['fields']['minPrice']) ) ? $r['fields']['minPrice'] : null , 
	  'maxPrice'=>(isset($r['fields']['maxPrice']) ) ? $r['fields']['maxPrice'] : null ,    
	  //shops     
	  'countOfProducts'=>(isset($r['fields']['countOfProducts']) ) ? $r['fields']['countOfProducts'] : null ,
	  'countOfCategories'=>(isset($r['fields']['countOfCategories']) ) ? $r['fields']['countOfCategories'] : null ,             
      'unitOfMeasurement'=>(isset($r['fields']['unitOfMeasurement']) ) ? $r['fields']['unitOfMeasurement'] : null ,  
	  'unitOfMeasurementMin'=>(isset($r['fields']['unitOfMeasurementMin']) ) ? $r['fields']['unitOfMeasurementMin'] : null , 
	  'unitOfMeasurementMax'=>(isset($r['fields']['unitOfMeasurementMax']) ) ? $r['fields']['unitOfMeasurementMax'] : null , 
      'minProdName'=>(isset($r['fields']['minProdName']) ) ? $r['fields']['minProdName'] : null ,  
      'maxProdName'=>(isset($r['fields']['maxProdName']) ) ? $r['fields']['maxProdName'] : null ,              
       //products	     
	  'average'=>(isset($r['fields']['average']) ) ? $r['fields']['average'] : null ,
	  'variationPrice'=>(isset($r['fields']['variationPrice']) ) ? $r['fields']['variationPrice'] : null, 
	  'locMin'=>(isset($r['fields']['locMin']) ) ? $r['fields']['locMin'] : null, 
	  'locMax'=>(isset($r['fields']['locMax']) ) ? $r['fields']['locMax'] : null,
	  //kath only
	  'dominantPriceDetails'=>(isset($r['fields']['dominantPriceDetails']) ) ? $r['fields']['dominantPriceDetails'] : null ,	
	  'weekDominantPriceDetails'=>(isset($r['fields']['weekDominantPriceDetails']) ) ? $r['fields']['weekDominantPriceDetails'] : null ,		
	  'yearDominantPriceDetails'=>(isset($r['fields']['yearDominantPriceDetails']) ) ? $r['fields']['yearDominantPriceDetails'] : null ,		
      'quantityDetails'=>(isset($r['fields']['quantityDetails']) ) ? $r['fields']['quantityDetails'] : null 
	  	
     	
    );	
	
	
    $arrayElements=count($Results);
	//echo $arrayElements;
	if  ($arrayElements < 3000)
	$Results[]=$newdata; 
}


 if (!empty($newdata)) 
	$AlreadyFound = 1 ;  
 else 
	$AlreadyFound = 0;
 
}
function showResults(){


global $Actual_link;
global $Lang;
$Actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($Actual_link,'/en/') !== false) {
    $Lang= 'en/';
}
else
if (strpos($Actual_link,'/el/') !== false) {
    $Lang= 'el/';
}
else $Lang='';

global $prefix;

global $Results;
$source=' ';
$double=array();


//make array unique


$uniqueResults = unique_multidim_array($Results,'link');

////////check for diaugeiaKhmdhs////////
////////////////////////////////////////
//////////////////////////////////////////
foreach ($uniqueResults as $key => $row) {
  $id[$key]  = $row['id']; 	  
}
//print_r($id);
array_multisort($id, SORT_ASC, $uniqueResults );
$uniqueResults  = array_reverse($uniqueResults );
//print_r ($uniqueResults);
$last_item = NULL;
$last_item_2 = NULL;
$last_item_3 = NULL;
$last_item_4 = NULL;
$numItems = count($uniqueResults);
$c = 0;
foreach ($uniqueResults as $key => &$row) { //diaygeia + khmdhs (2 records) become  diaygeiakhmdhs (1 record) for buyer and one for seller if exist
echo $c.'for<br>';
if   (strpos($row['link'],'diaugeia/organization-hybrid') !== false)
$row['link']=str_replace('diaugeia/organization-hybrid','zdiaugeia/diaugeia-hybrids',$row['link']);
if   (strpos($row['link'],'organization-beneficiary') !== false)
$row['link']=str_replace('organization-beneficiary','zorganization-beneficiary',$row['link']);
echo 'r='.$row['link'].'<br>';
echo 'l2='.$last_item_2['link'].'<br>';
//echo substr($row['link'],strpos($row['link'], "?=") ); 
		if ($last_item['id'] === $row['id'])   {
		
		//if (($last_item['id'] === $row['id']) || (substr($row['link'],strpos($row['link'], "?=") ) ==  substr($last_item['link'],strpos($last_item['link'], "?=") ) ))  {
//if	((substr($row['id'],strpos($row['id'], "?=") )) == (substr($last_item['id'],strpos($last_item['id'], "?=") ))) {			
		   $double[]=$last_item; //copy doubles to other table
		   //echo $last_item['id'].'/deleted<br>';
		 
		  
		   
	
		if (strpos($row['link'],'/diaugeia/') !== false ) { //DIAUGEIA
			$row['dk_flag']='d';
			$row['link'] =  str_replace('diaugeia','diaugeiakhmdhs', $row['link'] );	
			
			$row['lastUpdate_2']=$last_item['lastUpdate'];
			
			$row['contractAmountPrev_2']=$last_item['contractAmountPrev'];
			$row['contractAmountCur_2']=$last_item['contractAmountCur'];
			$row['paymentAmountPrev_2']=$last_item['paymentAmountPrev'];
			$row['paymentAmountCur_2']=$last_item['paymentAmountCur'];
			$row['contractItemsNo_2']=$last_item['contractItemsNo'];
			$row['paymentItemsNo_2']=$last_item['paymentItemsNo']; 
			
			
          		
				
	    }
	
        else
		if (strpos($row['link'],'/khmdhs/') !== false ) 	{ //KHMDHS
			$row['dk_flag']='k';
			$row['link'] =  str_replace('khmdhs','diaugeiakhmdhs', $row['link'] );
			$row['address'] =  $last_item['address'];			
			$row['pc'] =  $last_item['pc'];
			$row['city'] =  $last_item['city'];
			$row['lastUpdate_2']=$last_item['lastUpdate'];
			//echo $row['lastUpdate_2'];
			
			$row['award0_2']=$last_item['award0'];
			$row['award1_2']=$last_item['award1'];	
			$row['award2_2']=$last_item['award2'];	
			$row['awardCnt0_2']=$last_item['awardCnt0'];	
			$row['awardCnt1_2']=$last_item['awardCnt1'];	
			$row['awardCnt2_2']=$last_item['awardCnt2'];			  
			$row['spend0_2']=$last_item['spend0'];
			$row['spend1_2']=$last_item['spend1'];
			$row['spend2_2']=$last_item['spend2'];
			$row['spendCnt0_2']=$last_item['spendCnt0'];
			$row['spendCnt1_2']=$last_item['spendCnt1'];
			$row['spendCnt2_2']=$last_item['spendCnt2'];
	
		}
	
	    $row['score'] = $row['score'] + $last_item['score'];
	
    }	
	 if	(
	( substr($row['id'],strpos($row['id'], "?=") ) == substr($last_item['id'],strpos($last_item['id'], "?=") ))
	 && 
	 (substr($last_item_2['id'],strpos($last_item_2['id'], "?=") ) == (substr($last_item['id'],strpos($last_item['id'], "?=") )))
	 )
	 {
		   echo 'found:'.substr($row['id'],strpos($row['id'], "?=") );
		   echo 'found:'.substr($last_item_2['id'],strpos($last_item_2['id'], "?=") );
		   $double[]=$last_item_2;
		   echo $last_item_2['link'].'ok!<br>';
		   }
	//echo 'current '.$row['id'].'<br>';
	//echo 'prev '.$last_item['id'].'<br>';
    if(++$c !== $numItems) {
    //echo "not last index!";
	$last_item = $row;
	$last_item_2 = $last_item;
    }
	
	
}
//print_r($double);
$c = 0;
$toMerge=0;


//$sort = array();

/////////////////hybrid///////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
foreach ($uniqueResults as $key => &$row){
 $sort['id'][$key] = substr($row['id'],strpos($row['id'], "?=") );
 $sort['link'][$key] = $row['link'];
}
array_multisort($sort['id'], SORT_ASC, $sort['link'], SORT_ASC,$uniqueResults );

foreach ($uniqueResults as $key => &$row){
//echo $row['link'].'<br>';

if (strpos($row['link'],'zdiaugeia') !== false){
	if	((substr($row['id'],strpos($row['id'], "?=") )) == (substr($last_item['id'],strpos($last_item['id'], "?=") )))
	{
	//echo $last_item['id'].'<br>';
	if ((strpos($last_item['link'],'/diaugeia/') !== false ) || (strpos($last_item['link'],'/diaugeiakhmdhs/') !== false ) )
	$double[]=$last_item;
    if (strpos($last_item['link'],'/khmdhs/') !== false ) {
	$double[]=$last_item;
	if (strpos($last_item['link'],'seller')!== false){
		$row['linkHKS']=$last_item['link'];		
		$row['contractAmountPrevHKS']=$last_item['contractAmountPrev']; 
		$row['contractAmountCurHKS']=$last_item['contractAmountCur'];
		$row['paymentAmountPrevHKS']=$last_item['paymentAmountPrev'];
		$row['paymentAmountCurHKS']=$last_item['paymentAmountCur'];
		$row['contractItemsNoHKS']=$last_item['contractItemsNo'];
		$row['paymentItemsNoHKS']=$last_item['paymentItemsNo'];
		$row['lastUpdateHKS']=$last_item['lastUpdate'];	 		
		}
	else{
	    $row['linkHKB']=$last_item['link'];	
		$row['contractAmountPrevHKB']=$last_item['contractAmountPrev']; 
		$row['contractAmountCurHKB']=$last_item['contractAmountCur'];
		$row['paymentAmountPrevHKB']=$last_item['paymentAmountPrev'];
		$row['paymentAmountCurHKB']=$last_item['paymentAmountCur'];
		$row['contractItemsNoHKB']=$last_item['contractItemsNo'];
		$row['paymentItemsNoHKB']=$last_item['paymentItemsNo'];	 
		$row['lastUpdateHKB']=$last_item['lastUpdate'];	 
	 }
    }	
			
	if ((substr($last_item_2['id'],strpos($last_item_2['id'], "?=") )) == (substr($last_item['id'],strpos($last_item['id'], "?=") )))
		{	
		//echo $last_item_2['id'].'<br>';
		if ((strpos($last_item_2['link'],'/diaugeia/') !== false ) || (strpos($last_item_2['link'],'/diaugeiakhmdhs/') !== false ) )
		$double[]=$last_item_2;
		if (strpos($last_item_2['link'],'/khmdhs/') !== false ) {
		$double[]=$last_item_2;
		if (strpos($last_item_2['link'],'seller')!== false){
			$row['linkHKS']=$last_item_2['link'];			
			$row['contractAmountPrevHKS']=$last_item_2['contractAmountPrev']; 
			$row['contractAmountCurHKS']=$last_item_2['contractAmountCur'];
			$row['paymentAmountPrevHKS']=$last_item_2['paymentAmountPrev'];
			$row['paymentAmountCurHKS']=$last_item_2['paymentAmountCur'];
			$row['contractItemsNoHKS']=$last_item_2['contractItemsNo'];
			$row['paymentItemsNoHKS']=$last_item_2['paymentItemsNo'];
			$row['lastUpdateHKS']=$last_item_2['lastUpdate'];	 
		}
		else {
			$row['linkHKB']=$last_item_2['link'];
			$row['contractAmountPrevHKB']=$last_item_2['contractAmountPrev']; 
			$row['contractAmountCurHKB']=$last_item_2['contractAmountCur'];
			$row['paymentAmountPrevHKB']=$last_item_2['paymentAmountPrev'];
			$row['paymentAmountCurHKB']=$last_item_2['paymentAmountCur'];
			$row['contractItemsNoHKB']=$last_item_2['contractItemsNo'];
			$row['paymentItemsNoHKB']=$last_item_2['paymentItemsNo'];	 
			$row['lastUpdateHKB']=$last_item_2['lastUpdate'];	 
		}
		}
			if ((substr($last_item_3['id'],strpos($last_item_3['id'], "?=") )) == (substr($last_item_2['id'],strpos($last_item_2['id'], "?=") )))
			{
			   // echo $last_item_3['id'].'<br>';
				if ((strpos($last_item_3['link'],'/diaugeia/') !== false ) || (strpos($last_item_3['link'],'/diaugeiakhmdhs/') !== false ) )
				$double[]=$last_item_3;
				if (strpos($last_item_3['link'],'/khmdhs/') !== false ) {
				$double[]=$last_item_3;
				if (strpos($last_item_3['link'],'seller')!== false){
					$row['linkHKS']=$last_item_3['link'];						
					$row['contractAmountPrevHKS']=$last_item_3['contractAmountPrev']; 
					$row['contractAmountCurHKS']=$last_item_3['contractAmountCur'];
					$row['paymentAmountPrevHKS']=$last_item_3['paymentAmountPrev'];
					$row['paymentAmountCurHKS']=$last_item_3['paymentAmountCur'];
					$row['contractItemsNoHKS']=$last_item_3['contractItemsNo'];
					$row['paymentItemsNoHKS']=$last_item_3['paymentItemsNo'];
					$row['lastUpdateHKS']=$last_item_3['lastUpdate'];	 
                }				
				else
				{
					$row['linkHKB']=$last_item_3['link'];
					$row['contractAmountPrevHKB']=$last_item_3['contractAmountPrev']; 
					$row['contractAmountCurHKB']=$last_item_3['contractAmountCur'];
					$row['paymentAmountPrevHKB']=$last_item_3['paymentAmountPrev'];
					$row['paymentAmountCurHKB']=$last_item_3['paymentAmountCur'];
					$row['contractItemsNoHKB']=$last_item_3['contractItemsNo'];
					$row['paymentItemsNoHKB']=$last_item_3['paymentItemsNo'];	 
					$row['lastUpdateHKB']=$last_item_3['lastUpdate'];	 
				}
				}
				if ((substr($last_item_4['id'],strpos($last_item_4['id'], "?=") )) == (substr($last_item_3['id'],strpos($last_item_3['id'], "?=") ))){
				//echo $last_item_4['id'].'<br>';
				if ((strpos($last_item_4['link'],'/diaugeia/') !== false ) || (strpos($last_item_4['link'],'/diaugeiakhmdhs/') !== false ) )
				$double[]=$last_item_4;
				if (strpos($last_item_4['link'],'/khmdhs/') !== false ) {
				$double[]=$last_item_4;
				if (strpos($last_item_4['link'],'seller')!== false){
					$row['linkHKS']=$last_item_4['link'];						
					$row['contractAmountPrevHKS']=$last_item_4['contractAmountPrev']; 
					$row['contractAmountCurHKS']=$last_item_4['contractAmountCur'];
					$row['paymentAmountPrevHKS']=$last_item_4['paymentAmountPrev'];
					$row['paymentAmountCurHKS']=$last_item_4['paymentAmountCur'];
					$row['contractItemsNoHKS']=$last_item_4['contractItemsNo'];
					$row['paymentItemsNoHKS']=$last_item_4['paymentItemsNo'];
					$row['lastUpdateHKS']=$last_item_4['lastUpdate'];	 
                }				
				else
				{
					$row['linkHKB']=$last_item_4['link'];
					$row['contractAmountPrevHKB']=$last_item_4['contractAmountPrev']; 
					$row['contractAmountCurHKB']=$last_item_4['contractAmountCur'];
					$row['paymentAmountPrevHKB']=$last_item_4['paymentAmountPrev'];
					$row['paymentAmountCurHKB']=$last_item_4['paymentAmountCur'];
					$row['contractItemsNoHKB']=$last_item_4['contractItemsNo'];
					$row['paymentItemsNoHKB']=$last_item_4['paymentItemsNo'];	 
					$row['lastUpdateHKB']=$last_item_4['lastUpdate'];	 
				}
				
			    	}
				
				}
			}
		}
    }
		
}
 if(++$c !== $numItems) {
    //echo "not last index!";
	$last_item_4=$last_item_3;
	$last_item_3=$last_item_2;
	$last_item_2=$last_item;
	$last_item = $row;
    }
} 

/////////Espa///////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

foreach ($uniqueResults as $key => &$row){
 $sort['id'][$key] = substr($row['id'],strpos($row['id'], "?=") );
 $sort['link'][$key] = $row['link'];
}
array_multisort($sort['id'], SORT_ASC, $sort['link'], SORT_ASC,$uniqueResults );

foreach ($uniqueResults as $key => &$row){
//echo 'r='.$row['link'].'<br>';
//echo 'l='.$last_item['link'].'<br>';
//echo 'l2='.$last_item_2['link'].'<br>';
//echo 'l3='.$last_item_3['link'].'<br>';
//echo 'l4='.$last_item_4['link'].'<br>';

if    ((strpos($row['link'],'espa') !== false) ||(strpos($row['link'],'beneficiary') !== false)){
	if	((substr($row['id'],strpos($row['id'], "?=") )) == (substr($last_item['id'],strpos($last_item['id'], "?=") )))
	{
	//echo '1'.$last_item['link'].'<br>';
	if ((strpos($last_item['link'],'/diaugeia/') !== false ) || (strpos($last_item['link'],'/diaugeiakhmdhs/') !== false ) || (strpos($last_item['link'],'hybrid') !== false )){
	$double[]=$last_item; //for hide
	   if (strpos($last_item['link'],'seller')!== false){
	   $row['linkEDS']=$last_item['link'];	
	   $row['award0EDS']=$last_item['award0']; 
	   $row['award1EDS']=$last_item['award1'];
	   $row['award2EDS']=$last_item['award2'];
	   $row['awardCnt0EDS']=$last_item['awardCnt0'];
	   $row['awardCnt1EDS']=$last_item['awardCnt1'];
	   $row['awardCnt2EDS']=$last_item['awardCnt2'];
       $row['spend0EDS']=$last_item['spend0'];	
	   $row['spend1EDS']=$last_item['spend1'];
       $row['spend2EDS']=$last_item['spend2']; 	   
	   $row['spendCnt0EDS']=$last_item['spendCnt0']; 
	   $row['spendCnt1EDS']=$last_item['spendCnt1'];
       $row['spendCnt2EDS']=$last_item['spendCnt2'];
       $row['lastUpdateEDS']=$last_item['lastUpdate'];        	  
	       
	      
	   }
	   else{
	   $row['linkEDB']=$last_item['link'];	
	   $row['award0EDB']=$last_item['award0']; 
	   $row['award1EDB']=$last_item['award1'];
	   $row['award2EDB']=$last_item['award2'];
	   $row['awardCnt0EDB']=$last_item['awardCnt0'];
	   $row['awardCnt1EDB']=$last_item['awardCnt1'];
	   $row['awardCnt2EDB']=$last_item['awardCnt2'];
       $row['spend0EDB']=$last_item['spend0'];	
	   $row['spend1EDB']=$last_item['spend1'];
       $row['spend2EDB']=$last_item['spend2']; 	   
	   $row['spendCnt0EDB']=$last_item['spendCnt0']; 
	   $row['spendCnt1EDB']=$last_item['spendCnt1'];
       $row['spendCnt2EDB']=$last_item['spendCnt2'];
	   $row['lastUpdateEDB']=$last_item['lastUpdate'];	
	   }
	}
    if (strpos($last_item['link'],'/khmdhs/') !== false ) {
	$double[]=$last_item; // for hide
	if (strpos($last_item['link'],'seller')!== false){
		$row['linkEKS']=$last_item['link'];		
		$row['contractAmountPrevEKS']=$last_item['contractAmountPrev']; 
		$row['contractAmountCurEKS']=$last_item['contractAmountCur'];
		$row['paymentAmountPrevEKS']=$last_item['paymentAmountPrev'];
		$row['paymentAmountCurEKS']=$last_item['paymentAmountCur'];
		$row['contractItemsNoEKS']=$last_item['contractItemsNo'];
		$row['paymentItemsNoEKS']=$last_item['paymentItemsNo'];
		$row['lastUpdateEKS']=$last_item['lastUpdate'];	 		
		}
	else{
	    $row['linkEKB']=$last_item['link'];	
		$row['contractAmountPrevEKB']=$last_item['contractAmountPrev']; 
		$row['contractAmountCurEKB']=$last_item['contractAmountCur'];
		$row['paymentAmountPrevEKB']=$last_item['paymentAmountPrev'];
		$row['paymentAmountCurEKB']=$last_item['paymentAmountCur'];
		$row['contractItemsNoEKB']=$last_item['contractItemsNo'];
		$row['paymentItemsNoEKB']=$last_item['paymentItemsNo'];	 
		$row['lastUpdateEKB']=$last_item['lastUpdate'];	 
	 }
    }	
			
	if ((substr($last_item_2['id'],strpos($last_item_2['id'], "?=") )) == (substr($last_item['id'],strpos($last_item['id'], "?=") )))
		{	
		//echo '2'.$last_item_2['link'].'<br>';
		
		if ((strpos($last_item_2['link'],'/diaugeia/') !== false ) || (strpos($last_item_2['link'],'/diaugeiakhmdhs/') !== false ) || (strpos($last_item_2['link'],'hybrid') !== false )){
		 $double[]=$last_item_2; //for hide
			if (strpos($last_item_2['link'],'seller')!== false){
			$row['linkEDS']=$last_item_2['link'];	
	        $row['award0EDS']=$last_item_2['award0']; 
	        $row['award1EDS']=$last_item_2['award1'];
	        $row['award2EDS']=$last_item_2['award2'];
	        $row['awardCnt0EDS']=$last_item_2['awardCnt0'];
	        $row['awardCnt1EDS']=$last_item_2['awardCnt1'];
	        $row['awardCnt2EDS']=$last_item_2['awardCnt2'];
            $row['spend0EDS']=$last_item_2['spend0'];	
	        $row['spend1EDS']=$last_item_2['spend1'];
            $row['spend2EDS']=$last_item_2['spend2']; 	   
	        $row['spendCnt0EDS']=$last_item_2['spendCnt0']; 
	        $row['spendCnt1EDS']=$last_item_2['spendCnt1'];
            $row['spendCnt2EDS']=$last_item_2['spendCnt2'];
            $row['lastUpdateEDS']=$last_item_2['lastUpdate'];   			
	   
			}
			else{
			$row['linkEDB']=$last_item_2['link'];	
			$row['award0EDB']=$last_item_2['award0']; 
	        $row['award1EDB']=$last_item_2['award1'];
	        $row['award2EDB']=$last_item_2['award2'];
	        $row['awardCnt0EDB']=$last_item_2['awardCnt0'];
	        $row['awardCnt1EDB']=$last_item_2['awardCnt1'];
	        $row['awardCnt2EDB']=$last_item_2['awardCnt2'];
            $row['spend0EDB']=$last_item_2['spend0'];	
	        $row['spend1EDB']=$last_item_2['spend1'];
            $row['spend2EDB']=$last_item_2['spend2']; 	   
	        $row['spendCnt0EDB']=$last_item_2['spendCnt0']; 
	        $row['spendCnt1EDB']=$last_item_2['spendCnt1'];
            $row['spendCnt2EDB']=$last_item_2['spendCnt2'];
			$row['lastUpdateEDB']=$last_item_2['lastUpdate'];	 
			}
		
		}
		if (strpos($last_item_2['link'],'/khmdhs/') !== false ) {
		$double[]=$last_item_2;
		if (strpos($last_item_2['link'],'seller')!== false){
			$row['linkEKS']=$last_item_2['link'];			
			$row['contractAmountPrevEKS']=$last_item_2['contractAmountPrev']; 
			$row['contractAmountCurEKS']=$last_item_2['contractAmountCur'];
			$row['paymentAmountPrevEKS']=$last_item_2['paymentAmountPrev'];
			$row['paymentAmountCurEKS']=$last_item_2['paymentAmountCur'];
			$row['contractItemsNoEKS']=$last_item_2['contractItemsNo'];
			$row['paymentItemsNoEKS']=$last_item_2['paymentItemsNo'];
			$row['lastUpdateEKS']=$last_item_2['lastUpdate'];	 
		}
		else {
			$row['linkEKB']=$last_item_2['link'];
			$row['contractAmountPrevEKB']=$last_item_2['contractAmountPrev']; 
			$row['contractAmountCurEKB']=$last_item_2['contractAmountCur'];
			$row['paymentAmountPrevEKB']=$last_item_2['paymentAmountPrev'];
			$row['paymentAmountCurEKB']=$last_item_2['paymentAmountCur'];
			$row['contractItemsNoEKB']=$last_item_2['contractItemsNo'];
			$row['paymentItemsNoEKB']=$last_item_2['paymentItemsNo'];	 
			$row['lastUpdateEKB']=$last_item_2['lastUpdate'];	 
		}
		}
		 	if ((substr($last_item_3['id'],strpos($last_item_3['id'], "?=") )) == (substr($last_item_2['id'],strpos($last_item_2['id'], "?=") )))
			{
			   //echo '3'.$last_item_3['link'].'<br>';
				if ((strpos($last_item_3['link'],'/diaugeia/') !== false ) || (strpos($last_item_3['link'],'/diaugeiakhmdhs/') !== false ) || (strpos($last_item_3['link'],'hybrid') !== false ) ){
				$double[]=$last_item_3;
					if (strpos($last_item_3['link'],'seller')!== false){
					$row['linkEDS']=$last_item_3['link'];	
					$row['award0EDS']=$last_item_3['award0']; 
					$row['award1EDS']=$last_item_3['award1'];
					$row['award2EDS']=$last_item_3['award2'];
					$row['awardCnt0EDS']=$last_item_3['awardCnt0'];
					$row['awardCnt1EDS']=$last_item_3['awardCnt1'];
					$row['awardCnt2EDS']=$last_item_3['awardCnt2'];
					$row['spend0EDS']=$last_item_3['spend0'];	
					$row['spend1EDS']=$last_item_3['spend1'];
					$row['spend2EDS']=$last_item_3['spend2']; 	   
					$row['spendCnt0EDS']=$last_item_3['spendCnt0']; 
					$row['spendCnt1EDS']=$last_item_3['spendCnt1'];
					$row['spendCnt2EDS']=$last_item_3['spendCnt2'];
					$row['lastUpdateEDS']=$last_item_3['lastUpdate'];  			
	   
					}
			    else{
			        $row['linkEDB']=$last_item_3['link'];	
				    $row['award0EDB']=$last_item_3['award0']; 
	                $row['award1EDB']=$last_item_3['award1'];
	                $row['award2EDB']=$last_item_3['award2'];
	                $row['awardCnt0EDB']=$last_item_3['awardCnt0'];
	                $row['awardCnt1EDB']=$last_item_3['awardCnt1'];
	                $row['awardCnt2EDB']=$last_item_3['awardCnt2'];
                    $row['spend0EDB']=$last_item_3['spend0'];	
	                $row['spend1EDB']=$last_item_3['spend1'];
                    $row['spend2EDB']=$last_item_3['spend2']; 	   
	                $row['spendCnt0EDB']=$last_item_3['spendCnt0']; 
	                $row['spendCnt1EDB']=$last_item_3['spendCnt1'];
                    $row['spendCnt2EDB']=$last_item_3['spendCnt2'];
			        $row['lastUpdateEDB']=$last_item_3['lastUpdate'];	 
			        }
				
				
				}
				if (strpos($last_item_3['link'],'/khmdhs/') !== false ) {
				$double[]=$last_item_3;
				if (strpos($last_item_3['link'],'seller')!== false){
					$row['linkEKS']=$last_item_3['link'];						
					$row['contractAmountPrevEKS']=$last_item_3['contractAmountPrev']; 
					$row['contractAmountCurEKS']=$last_item_3['contractAmountCur'];
					$row['paymentAmountPrevEKS']=$last_item_3['paymentAmountPrev'];
					$row['paymentAmountCurEKS']=$last_item_3['paymentAmountCur'];
					$row['contractItemsNoEKS']=$last_item_3['contractItemsNo'];
					$row['paymentItemsNoEKS']=$last_item_3['paymentItemsNo'];
					$row['lastUpdateEKS']=$last_item_3['lastUpdate'];	 
                }				
				else
				{
					$row['linkEKB']=$last_item_3['link'];
					$row['contractAmountPrevEKB']=$last_item_3['contractAmountPrev']; 
					$row['contractAmountCurEKB']=$last_item_3['contractAmountCur'];
					$row['paymentAmountPrevEKB']=$last_item_3['paymentAmountPrev'];
					$row['paymentAmountCurEKB']=$last_item_3['paymentAmountCur'];
					$row['contractItemsNoEKB']=$last_item_3['contractItemsNo'];
					$row['paymentItemsNoEKB']=$last_item_3['paymentItemsNo'];	 
					$row['lastUpdateEKB']=$last_item_3['lastUpdate'];	 
				}
				}
				
				if ((substr($last_item_4['id'],strpos($last_item_4['id'], "?=") )) == (substr($last_item_3['id'],strpos($last_item_3['id'], "?=") ))){
			//	echo '4'.$last_item_4['link'].'<br>';
				  if ((strpos($last_item_4['link'],'/diaugeia/') !== false ) || (strpos($last_item_4['link'],'/diaugeiakhmdhs/') !== false ) || (strpos($last_item_4['link'],'hybrid') !== false ) ){				
			    	$double[]=$last_item_4;
				    if (strpos($last_item_4['link'],'seller')!== false){
						$row['linkEDS']=$last_item_4['link'];	
						$row['award0EDS']=$last_item_4['award0']; 
						$row['award1EDS']=$last_item_4['award1'];
						$row['award2EDS']=$last_item_4['award2'];
						$row['awardCnt0EDS']=$last_item_4['awardCnt0'];
						$row['awardCnt1EDS']=$last_item_4['awardCnt1'];
						$row['awardCnt2EDS']=$last_item_4['awardCnt2'];
						$row['spend0EDS']=$last_item_4['spend0'];	
						$row['spend1EDS']=$last_item_4['spend1'];
						$row['spend2EDS']=$last_item_4['spend2']; 	   
						$row['spendCnt0EDS']=$last_item_4['spendCnt0']; 
						$row['spendCnt1EDS']=$last_item_4['spendCnt1'];
						$row['spendCnt2EDS']=$last_item_4['spendCnt2'];
						$row['lastUpdateEDS']=$last_item_4['lastUpdate'];  			
	   
					}
			          else{
			          $row['linkEDB']=$last_item_4['link'];	
				      $row['award0EDB']=$last_item_4['award0']; 
	                  $row['award1EDB']=$last_item_4['award1'];
	                  $row['award2EDB']=$last_item_4['award2'];
	                  $row['awardCnt0EDB']=$last_item_4['awardCnt0'];
	                  $row['awardCnt1EDB']=$last_item_4['awardCnt1'];
	                  $row['awardCnt2EDB']=$last_item_4['awardCnt2'];
                      $row['spend0EDB']=$last_item_4['spend0'];	
	                  $row['spend1EDB']=$last_item_4['spend1'];
                      $row['spend2EDB']=$last_item_4['spend2']; 	   
	                  $row['spendCnt0EDB']=$last_item_4['spendCnt0']; 
	                  $row['spendCnt1EDB']=$last_item_4['spendCnt1'];
                      $row['spendCnt2EDB']=$last_item_4['spendCnt2'];
			          $row['lastUpdateEDB']=$last_item_4['lastUpdate'];	 
			        }
				
				
			     }
				  if (strpos($last_item_4['link'],'/khmdhs/') !== false ) {
				$double[]=$last_item_4;
				if (strpos($last_item_4['link'],'seller')!== false){
					$row['linkEKS']=$last_item_4['link'];						
					$row['contractAmountPrevEKS']=$last_item_4['contractAmountPrev']; 
					$row['contractAmountCurEKS']=$last_item_4['contractAmountCur'];
					$row['paymentAmountPrevEKS']=$last_item_4['paymentAmountPrev'];
					$row['paymentAmountCurEKS']=$last_item_4['paymentAmountCur'];
					$row['contractItemsNoEKS']=$last_item_4['contractItemsNo'];
					$row['paymentItemsNoEKS']=$last_item_4['paymentItemsNo'];
					$row['lastUpdateEKS']=$last_item_4['lastUpdate'];	 
                }				
				else
				{
					$row['linkEKB']=$last_item_4['link'];
					$row['contractAmountPrevEKB']=$last_item_4['contractAmountPrev']; 
					$row['contractAmountCurEKB']=$last_item_4['contractAmountCur'];
					$row['paymentAmountPrevEKB']=$last_item_4['paymentAmountPrev'];
					$row['paymentAmountCurEKB']=$last_item_4['paymentAmountCur'];
					$row['contractItemsNoEKB']=$last_item_4['contractItemsNo'];
					$row['paymentItemsNoEKB']=$last_item_4['paymentItemsNo'];	 
					$row['lastUpdateEKB']=$last_item_4['lastUpdate'];	 
				}
				
			    	}
				
				} 
			} //end of last item3, 4 
		}
    }
		
}
 if(++$c !== $numItems) {
    //echo "not last index!";
	$last_item_4=$last_item_3;
	$last_item_3=$last_item_2;
	$last_item_2=$last_item;
	$last_item = $row;
    }
}

 
//print_r($double);
$i = 0;
$sumResults=count($uniqueResults);
$sumSpend=0;
$sumAward=0;
$sumContracts=0;
$sumPayments=0;
$counterContracts=0;
$sumAwardSel=0;
$sumSpendSel=0;


echo "<table id='searchResults' class='display'  ><thead><tr><th></th><th></th></thead>";  
 //<th>Score</th><th>id</th></tr>
echo "<tbody>";
while ($i<$sumResults) { 



if  ( (isset($uniqueResults[$i]['link'])) 
				&& 
	(strpos($uniqueResults[$i]['link'],'person') == false) 
			&&  
	(hideDuplicate($double,$uniqueResults[$i]['link'])!= 1) 
	     //     &&  
//((hideDuplicate($hidden,$uniqueResults[$i]['link'])!= 1) &&($toMerge>1) ) 
	) { 
      

$link=($uniqueResults[$i]['link']);
//fix hybrid link
if   (strpos($link,'zdiaugeia/diaugeia-hybrids') !== false)
$link=str_replace('zdiaugeia/','diaugeia/',$link);

//generate espa link http://83.212.86.158:5984/elod_espa_beneficiaries/_design/all/_view/all
if (($uniqueResults[$i]['pageKind']) =='sellerBoth')
$link= str_replace('zorganization-beneficiary','espa-both-organization-seller',$link); //diaugeiakhmdhs+diaugeiakhmdhs+espa
else
if (($uniqueResults[$i]['pageKind']) =='buyerBoth')
$link= str_replace('zorganization-beneficiary','espa-both-organization-buyer',$link); //diaugeiakhmdhs+diaugeiakhmdhs+espa
else
if (($uniqueResults[$i]['pageKind']) =='sellerDiavgeia')
$link= str_replace('zorganization-beneficiary','espa-diavgeia-organization-seller',$link); //diaugeia+espa
else
if (($uniqueResults[$i]['pageKind']) =='buyerDiavgeia')
$link= str_replace('zorganization-beneficiary','espa-diavgeia-organization-buyer',$link); //diaugeia+espa
else
if (($uniqueResults[$i]['pageKind']) =='sellerKhmdhs')
$link= str_replace('zorganization-beneficiary','espa-khmdhs-organization-seller',$link); //khmdhs+espa
else
if (($uniqueResults[$i]['pageKind']) =='buyerKhmdhs')
$link= str_replace('zorganization-beneficiary','espa-khmdhs-organization-buyer',$link); //khmdhs+espa
else if  ((($uniqueResults[$i]['pageKind']) =='') || (($uniqueResults[$i]['pageKind']) =='general'))
$link= str_replace('zorganization-beneficiary','organization-beneficiary',$link);

$nameLink=$link;
$name=$uniqueResults[$i]['name'];
$psName=$uniqueResults[$i]['psName'];



if    ((strpos($link,'seller') !== false) && (strpos($link,'espa') == false)) {
$property='ΑΝΑΔΟΧΟΣ';
}
else 
if    ((strpos($link,'buyer') !== false)&& (strpos($link,'espa') == false)){
$property='ΦΟΡΕΑΣ';
}
else 
if    (strpos($link,'hybrid') !== false){
$property='ΥΒΡΙΔΙΚΟΣ';
}
else 
if    ((strpos($link,'espa') !== false) ||(strpos($link,'beneficiary') !== false)){
$property='ΔΙΚΑΙΟΥΧΟΣ';
}
else 
$property=' ';

echo "<tr>";

if  	(strpos($link,'diaugeia/org') !== false)   { //διαυγεια 035970655
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">"; 
	//echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
	//echo '<B>'.$name.'</B><br>';
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$name</a> </br>";	
	//echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo '<I>';
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'Α.Φ.Μ. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo '</I>';
	//echo  '<B>'.(getSource($link,'d')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>";
	//echo '<B>';
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
	echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
	//echo '</B>';
	echo  'Οριστικοποίηση Πληρωμών: ';
		$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0']) + fromTextToNumber($uniqueResults[$i]['spend1']) + fromTextToNumber($uniqueResults[$i]['spend2'])  ;
	echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0']+$uniqueResults[$i]['spendCnt1']+$uniqueResults[$i]['spendCnt2']),0).'</B>) '; 
	echo  'Κατακυρώσεις: ';
		$sumAward=fromTextToNumber($uniqueResults[$i]['award0']) + fromTextToNumber($uniqueResults[$i]['award1']) + fromTextToNumber($uniqueResults[$i]['award2'])  ;
	echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0']+$uniqueResults[$i]['awardCnt1']+$uniqueResults[$i]['awardCnt2']),0).'</B>) '; 
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
} 
else if ((strpos($link,'espa') !== false) ||(strpos($link,'beneficiary') !== false) )    {
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	
	//echo '<B>'.$name.'</B><br>';
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$name</a> </br>";
	echo '<I>';
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'Α.Φ.Μ. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo '</I>';
	
	if (($uniqueResults[$i]['pageKind']) =='sellerBoth'){ //eg 999243471 099360290 fixed 099360290 double problem
	//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
	$link4=$uniqueResults[$i]['linkEDB'];   
    if ((isset($link4)) && ($link4 !== ' ')) {	//missing buyer for 099360290
		//echo $link4."</br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
		//echo "<a href='".$link4."'target='_blank' fontcolor='#FFA500' size='1' > <B>Φορέας </B></a> ";
		echo "<a href='".$link4."'target='_blank' style='font-size: 10px; color: #FFA500;'  <B>ΦΟΡΕΑΣ</B> </a> ";
		//echo ' <font color="#FFA500" size="1">Ανάδοχος</font> '; 
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDB']) + fromTextToNumber($uniqueResults[$i]['spend1EDB']) + fromTextToNumber($uniqueResults[$i]['spend2EDB'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDB']+$uniqueResults[$i]['spendCnt1EDB']+$uniqueResults[$i]['spendCnt2EDB']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDB']) + fromTextToNumber($uniqueResults[$i]['award1EDB']) + fromTextToNumber($uniqueResults[$i]['award2EDB'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDB']+$uniqueResults[$i]['awardCnt1EDB']+$uniqueResults[$i]['awardCnt2EDB']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDB'].']</br>';
	    }
	
	
	
	
	$link2=$uniqueResults[$i]['linkEDS'];   //must be diaugeiakhmdhs
    if ((isset($link2)) && ($link2 !== ' ')){	
		//echo $link2."</br>"; 	
		//echo '<B>';		
	    echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ</font> '; 
		//echo '</B>';
        echo  'Οριστικοποίηση Πληρωμών: ';
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDS']) + fromTextToNumber($uniqueResults[$i]['spend1EDS']) + fromTextToNumber($uniqueResults[$i]['spend2EDS'])  ;
	    echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
	    echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDS']+$uniqueResults[$i]['spendCnt1EDS']+$uniqueResults[$i]['spendCnt2EDS']),0).'</B>) '; 
    	echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDS']) + fromTextToNumber($uniqueResults[$i]['award1EDS']) + fromTextToNumber($uniqueResults[$i]['award2EDS'])  ;
	    echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
	    echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDS']+$uniqueResults[$i]['awardCnt1EDS']+$uniqueResults[$i]['awardCnt2EDS']),0).'</B>) '; 
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDS'].']</br>';			
        }		
    $link3=$uniqueResults[$i]['linkEKS'];   
    if ((isset($link3)) && ($link3 !== ' ')) {	
		//echo $link3."</br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> ';
		//echo '<B>';
	    echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ</font> '; 
		//echo '</B>';
		echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevEKS']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurEKS'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoEKS']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevEKS']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurEKS'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoEKS']),0).'</B>) ';		
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEKS'].']</br>';	
	    }
	}
	else
	if (($uniqueResults[$i]['pageKind']) =='buyerBoth'){ //eg 090050779 χάνουμε τον  πιθανο seller -fixed 090050779 double problem
	$link2=$uniqueResults[$i]['linkEDB']; 
	if ((isset($link2)) && ($link2 !== ' ')){
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
		//echo '<B>';
		echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ</font> '; 
		//echo '</B>';
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDB']) + fromTextToNumber($uniqueResults[$i]['spend1EDB']) + fromTextToNumber($uniqueResults[$i]['spend2EDB'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDB']+$uniqueResults[$i]['spendCnt1EDB']+$uniqueResults[$i]['spendCnt2EDB']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDB']) + fromTextToNumber($uniqueResults[$i]['award1EDB']) + fromTextToNumber($uniqueResults[$i]['award2EDB'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDB']+$uniqueResults[$i]['awardCnt1EDB']+$uniqueResults[$i]['awardCnt2EDB']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDB'].']</br>';
	}
	$link4=$uniqueResults[$i]['linkEDS'];   
    if ((isset($link4)) && ($link4 !== ' ')) {	//test for missing seller, works
		//echo $link4."</br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
		echo "<a href='".$link4."'target='_blank' style='font-size: 10px; color: #FFA500;'  <B>ΑΝΑΔΟΧΟΣ</B> </a> ";
		//echo ' <font color="#FFA500" size="1">Ανάδοχος</font> '; 
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDS']) + fromTextToNumber($uniqueResults[$i]['spend1EDS']) + fromTextToNumber($uniqueResults[$i]['spend2EDS'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDS']+$uniqueResults[$i]['spendCnt1EDS']+$uniqueResults[$i]['spendCnt2EDS']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDS']) + fromTextToNumber($uniqueResults[$i]['award1EDS']) + fromTextToNumber($uniqueResults[$i]['award2EDS'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDS']+$uniqueResults[$i]['awardCnt1EDS']+$uniqueResults[$i]['awardCnt2EDS']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDS'].']</br>';
	    }
	
	$link3=$uniqueResults[$i]['linkEKB'];   
    if ((isset($link3)) && ($link3 !== ' ')) {	
		//echo $link4."</br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> ';
		//echo '<B>';
	    echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ</font> '; 
		//echo '</B>';
		echo  'Συμβάσεις: ';                                  
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevEKB']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurEKB'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoEKB']),0).'</B>) ';
		echo  'Πληρωμές: ';                           
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevEKB']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurEKB'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoEKB']),0).'</B>) ';		
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEKB'].']</br>';	
	    }
		
	
	
	}
	else
	if (($uniqueResults[$i]['pageKind']) =='sellerDiavgeia'){ //eg  004322968 012377598
	//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
	    //echo '<B>';
	    echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ</font> '; 
		//echo '</B>';
        echo  'Οριστικοποίηση Πληρωμών: ';
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDS']) + fromTextToNumber($uniqueResults[$i]['spend1EDS']) + fromTextToNumber($uniqueResults[$i]['spend2EDS'])  ;
	    echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
	    echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDS']+$uniqueResults[$i]['spendCnt1EDS']+$uniqueResults[$i]['spendCnt2EDS']),0).'</B>) '; 
    	echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDS']) + fromTextToNumber($uniqueResults[$i]['award1EDS']) + fromTextToNumber($uniqueResults[$i]['award2EDS'])  ;
	    echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
	    echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDS']+$uniqueResults[$i]['awardCnt1EDS']+$uniqueResults[$i]['awardCnt2EDS']),0).'</B>) '; 
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDS'].']</br>';	
	
	}
	else
	if (($uniqueResults[$i]['pageKind']) =='buyerDiavgeia'){ //eg 017130241 χανουμε τον seller (buyerdiaugeia ενω εχει seller) δεν δουλεύει 018133333 + double problem
	  //  echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
		//echo '<B>';
		echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ</font> '; 
		//echo '</B>';
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDB']) + fromTextToNumber($uniqueResults[$i]['spend1EDB']) + fromTextToNumber($uniqueResults[$i]['spend2EDB'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDB']+$uniqueResults[$i]['spendCnt1EDB']+$uniqueResults[$i]['spendCnt2EDB']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDB']) + fromTextToNumber($uniqueResults[$i]['award1EDB']) + fromTextToNumber($uniqueResults[$i]['award2EDB'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDB']+$uniqueResults[$i]['awardCnt1EDB']+$uniqueResults[$i]['awardCnt2EDB']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDB'].']</br>';
		
		$link2=$uniqueResults[$i]['linkEDS'];
		if ((isset($link2)) && ($link2 !== ' ')) {	//
		//echo $link4."</br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; //use namelink for superprofile
		echo "<a href='".$link2."'target='_blank' style='font-size: 10px; color: #FFA500;'  <B>ΑΝΑΔΟΧΟΣ</B> </a> ";
		//echo ' <font color="#FFA500" size="1">Ανάδοχος</font> '; 
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDS']) + fromTextToNumber($uniqueResults[$i]['spend1EDS']) + fromTextToNumber($uniqueResults[$i]['spend2EDS'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDS']+$uniqueResults[$i]['spendCnt1EDS']+$uniqueResults[$i]['spendCnt2EDS']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDS']) + fromTextToNumber($uniqueResults[$i]['award1EDS']) + fromTextToNumber($uniqueResults[$i]['award2EDS'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDS']+$uniqueResults[$i]['awardCnt1EDS']+$uniqueResults[$i]['awardCnt2EDS']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDS'].']</br>';
	    }
	
	}
	else
	if (($uniqueResults[$i]['pageKind']) =='sellerKhmdhs'){
	    //echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> ';
		//echo '<B>';
	    echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ</font> '; 
		//echo '</B>';
		echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevEKS']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurEKS'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoEKS']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevEKS']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurEKS'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoEKS']),0).'</B>) ';		
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEKS'].']</br>';	
	
	}
	if (($uniqueResults[$i]['pageKind']) =='buyerKhmdhs'){ //eg 090034024 buyerKhmdhs αλλα έχει και διαυγεια fixed
	    $link2=$uniqueResults[$i]['linkEDB'];
		if ((isset($link2)) && ($link2 !== ' ')){
		if (strpos($link2,'diaugeiakhmdhs') !== false) 		
		$link2=str_replace('diaugeiakhmdhs','diaugeia', $link2);
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> ';
		//echo "<a href='".$link2."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>"; 
		//echo '<B>';
		echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ</font> '; 
		//echo '</B>';
		echo  'Οριστικοποίηση Πληρωμών: ';               
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0EDB']) + fromTextToNumber($uniqueResults[$i]['spend1EDB']) + fromTextToNumber($uniqueResults[$i]['spend2EDB'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0EDB']+$uniqueResults[$i]['spendCnt1EDB']+$uniqueResults[$i]['spendCnt2EDB']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0EDB']) + fromTextToNumber($uniqueResults[$i]['award1EDB']) + fromTextToNumber($uniqueResults[$i]['award2EDB'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0EDB']+$uniqueResults[$i]['awardCnt1EDB']+$uniqueResults[$i]['awardCnt2EDB']),0).'</B>) '; 
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEDB'].']</br>';			
		
		}
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> ';
	//	echo '<B>';
	    echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ</font> '; 
		//echo '<B>';
		echo  'Συμβάσεις: ';                                  
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevEKB']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurEKB'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoEKB']),0).'</B>) ';
		echo  'Πληρωμές: ';                           
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevEKB']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurEKB'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoEKB']),0).'</B>) ';		
	    echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateEKB'].']</br>';	
	}
	//only espa	
	//echo "<a href='".$nameLink."'target='_blank'  > <B>Στις ΕΠΙΔΟΤΗΣΕΙΣ ΕΣΠΑ</B></a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">Επιδοτήσεις ΕΣΠΑ</font></br> ';
	//echo '<B>';
	echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
	//echo '</B>';
	echo  'Συμβάσεις: ';
			//$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrev']) + fromTextToNumber($uniqueResults[$i]['contractAmountCur'])  ;
		echo '<B>'.$uniqueResults[$i]['SubsContractsAmount'].'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['SubsContractsCounter']),0).'</B>) ';
		echo  'Πληρωμές: ';
			//$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrev']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCur'])  ;
		echo '<B>'.$uniqueResults[$i]['SubsPaymentsAmount'].'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['SubsPaymentsCounter']),0).'</B>) ';
		
	echo  ' &nbsp [έως '.convertDate($uniqueResults[$i]['lastUpdate']).']</br>';
	
	
	
    echo "</td>";
}
else if (strpos($link,'diaugeia/dia') !== false)   { //υβριδικος Διαύγεια + ελεγχος Κημδης 090166291
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">"; 
	//echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
	//echo '<B>'.$name.'</B><br>';
	//echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$name</a> </br>";	
	echo '<I>';
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';	
	echo 'Α.Φ.Μ. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo '</I>';
	//echo  '<B>ΣΤΗ ΔΙΑΥΓΕΙΑ<sup><font size="1">ΦΟΡΕΑΣ</font></sup> :  </B>'; 
	//echo  '<B>ΣΤΗ ΔΙΑΥΓΕΙΑ :  </B>';
	//echo 'Στη ';
	//echo "<a href='".$nameLink."'target='_blank' > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> '; 
	//echo '<B> ';
	echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ&nbsp </font> '; 
    //	echo '</B> ';
	echo  'Οριστικοποίηση Πληρωμών: ';
		  $sumSpend=
		  fromTextToNumber($uniqueResults[$i]['spend0'])
		+ fromTextToNumber($uniqueResults[$i]['spend1'])
		+ fromTextToNumber($uniqueResults[$i]['spend2']) ;
	echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0']+$uniqueResults[$i]['spendCnt1']+$uniqueResults[$i]['spendCnt2']),0).'</B>) '; 
	echo  'Κατακυρώσεις: ';
		  $sumAward=
		  fromTextToNumber($uniqueResults[$i]['award0'])
		+ fromTextToNumber($uniqueResults[$i]['award1'])
		+ fromTextToNumber($uniqueResults[$i]['award2'])  ;
	echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0']+$uniqueResults[$i]['awardCnt1']+$uniqueResults[$i]['awardCnt2']),0).'</B>)';
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']<BR>';	
   // echo '<sup><font size="2">ΑΝΑΔΟΧΟΣ: </font></sup>';
    //echo '<B> ';
	echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ&nbsp </font> ';
    //echo ' <font color="#006621" font  size="1">ΑΝΑΔΟΧΟΣ&nbsp </font> '; 	
	//echo '</B> ';
	echo  'Οριστικοποίηση Πληρωμών: ';
		  $sumSpendSel=
		  fromTextToNumber($uniqueResults[$i]['spendSel0'])
		+ fromTextToNumber($uniqueResults[$i]['spendSel1'])
		+ fromTextToNumber($uniqueResults[$i]['spendSel2']) ;
	echo '<B> '.fromNumberToText($sumSpendSel,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['spendCntSel0']+$uniqueResults[$i]['spendCntSel1']+$uniqueResults[$i]['spendCntSel2']),0).'</B>) '; 
	echo  'Κατακυρώσεις: ';
		$sumAwardSel=
		  fromTextToNumber($uniqueResults[$i]['awardSel0'])
		+ fromTextToNumber($uniqueResults[$i]['awardSel1'])
		+ fromTextToNumber($uniqueResults[$i]['awardSel2'])  ; 
	echo  '<B> '.fromNumberToText($sumAwardSel,'€').'</B>';
	echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0']+$uniqueResults[$i]['awardCnt1']+$uniqueResults[$i]['awardCnt2']),0).'</B>) '; 	
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']<br>';	
	
	//echo  substr($nameLink,strpos($nameLink, "?="));
	//$link2=fromHidden($hidden,(substr($nameLink,strpos($nameLink, "?="))));
	$link2=$uniqueResults[$i]['linkHKB'];
	if ((isset($link2)) && ($link2 !== ' ')){
	//echo "<a href='".$link2."'target='_blank' <FONT COLOR='#006621' >$link2</FONT></a> </br>";	
	//echo "<a href='".$link2."'target='_blank'  > <font  <B>Στο ΚΗΜΔΗΣ</B></font> </a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> '; 
	//echo '<sup><font size="2">ΦΟΡΕΑΣ: </font></sup>';
	//echo '<B> ';
	echo ' <font color="#FFA500" size="1">ΦΟΡΕΑΣ&nbsp </font> '; 
	//echo ' <font color="#006621" size="1">ΦΟΡΕΑΣ&nbsp </font> '; 
	//echo '</B> ';
	echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevHKB']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurHKB'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoHKB']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevHKB']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurHKB'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoHKB']),0).'</B>) ';
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateHKB'].']<br>';	
	}
	$link3=$uniqueResults[$i]['linkHKS'];
	if ((isset($link3)) && ($link3 !== ' ')){
	//$link3=fromHidden($hidden,(substr($nameLink,strpos($nameLink, "?="))));	
	//echo "<a href='".$link3."'target='_blank' <FONT COLOR='#006621' >$link3</FONT></a> </br>";
	//echo 'Στο ';
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> '; 
	//echo "<a href='".$link3."'target='_blank' > <B>Στο ΚΗΜΔΗΣ</B></a> </br>";
	//echo '<B> ';
	echo ' <font color="#FFA500" size="1">ΑΝΑΔΟΧΟΣ&nbsp </font> '; 
	//echo ' <font color="#006621" size="1">ΑΝΑΔΟΧΟΣ&nbsp </font> '; 
	//echo '</B> ';
	//echo  '<B>ΚΗΜΔΗΣ<sup><font size="1">ΑΝΑΔΟΧΟΣ</font></sup> :  </B>'; 
	$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrevHKS']) + fromTextToNumber($uniqueResults[$i]['contractAmountCurHKS'])  ;	
	echo  'Συμβάσεις: ';
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNoHKS']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrevHKS']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCurHKS'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNoHKS']),0).'</B>) ';
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdateHKS'].']<br>';
	}
	
	//echo  '<B>ΚΗΜΔΗΣ<sup><font size="1">ΑΝΑΔΟΧΟΣ</font></sup> :  </B><br>'; 
	
	echo "</td>";
} 
else if (strpos($link,'diaugeiakhmdhs') !== false) { //και Διαυγεια και κημδης 998154476
    echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";	
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$name</a> </br>";
	//echo '<B>'.$name.'</B><br>';
	//echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo '<I>';
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'Α.Φ.Μ. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo '</I>';
	//echo  '<B>'.(getSource($link,'d')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; //DIAVGEIA
	
		if ($uniqueResults[$i]['dk_flag']=='d') { //αν δηλαδή η τρέχουσα γραμμή είναι όντως απο διαύγεια
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ - ΚΗΜΔΗΣ</B></a> </br>";
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> '; 
		//echo '<B>';
	    echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
        //echo '</B>';		
	    echo  'Οριστικοποίηση Πληρωμών: ';
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0']) + fromTextToNumber($uniqueResults[$i]['spend1']) + fromTextToNumber($uniqueResults[$i]['spend2'])  ;
        echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0']+$uniqueResults[$i]['spendCnt1']+$uniqueResults[$i]['spendCnt2']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
			$sumAward=fromTextToNumber($uniqueResults[$i]['award0']) + fromTextToNumber($uniqueResults[$i]['award1']) + fromTextToNumber($uniqueResults[$i]['award2'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0']+$uniqueResults[$i]['awardCnt1']+$uniqueResults[$i]['awardCnt2']),0).'</B>) '; 	
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']<br>';	
		}
		
		else{ //η τρέχουσα γραμμή είναι απο κημδης
		//echo "<a href='".$nameLink."'target='_blank'  > <font  <B>Στο ΚΗΜΔΗΣ</B></font> </a> </br>";
		//echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
		//echo "<a href='".$nameLink."'target='_blank'  > <B>Στη ΔΙΑΥΓΕΙΑ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΔΙΑΥΓΕΙΑ</font></br> '; 
		//echo '<B>';
		echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
		//echo '</B>';
		echo  'Οριστικοποίηση Πληρωμών: ';
			$sumSpend=fromTextToNumber($uniqueResults[$i]['spend0_2']) + fromTextToNumber($uniqueResults[$i]['spend1_2']) + fromTextToNumber($uniqueResults[$i]['spend2_2'])  ;
		echo '<B> '.fromNumberToText($sumSpend,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['spendCnt0_2']+$uniqueResults[$i]['spendCnt1_2']+$uniqueResults[$i]['spendCnt2_2']),0).'</B>) '; 
		echo  'Κατακυρώσεις: ';
		$sumAward=fromTextToNumber($uniqueResults[$i]['award0_2']) + fromTextToNumber($uniqueResults[$i]['award1_2']) + fromTextToNumber($uniqueResults[$i]['award2_2'])  ;
		echo  '<B> '.fromNumberToText($sumAward,'€').'</B>';
		echo ' (<B>'.round(($uniqueResults[$i]['awardCnt0_2']+$uniqueResults[$i]['awardCnt1_2']+$uniqueResults[$i]['awardCnt2_2']),0).'</B>) '; 	
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate_2'].']<br>';
		}
		
		
	//echo  '<B>'.(getSource($link,'k')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; //KHMDHS
	    // echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
		echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> '; 
	    //echo '<B>';
	    echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
		//echo '</B>';	
	    if ($uniqueResults[$i]['dk_flag']=='k') { //αν δηλαδή η τρέχουσα γραμμή είναι όντως απο κημδης
		echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrev']) + fromTextToNumber($uniqueResults[$i]['contractAmountCur'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNo']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrev']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCur'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNo']),0).'</B>) ';		
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
		}
		else //η τρέχουσα γραμμή είναι  απο διαύγεια
		{
		echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrev_2']) + fromTextToNumber($uniqueResults[$i]['contractAmountCur_2'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNo_2']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrev_2']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCur_2'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNo_2']),0).'</B>) ';	
		echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate_2'].']';	
	    echo "</td>";
		}
 }	
else if (strpos($link,'/australia/') !== false) { //australia
echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
    echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'V.A.T. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmount0']) + fromTextToNumber($uniqueResults[$i]['contractAmount1'])  + fromTextToNumber($uniqueResults[$i]['contractAmount2'])    ;
	echo '<B>'.fromNumberToText($sumContracts,'$').'</B>';
	        $counterContracts=$uniqueResults[$i]['contractCounter0'] + $uniqueResults[$i]['contractCounter1'] + $uniqueResults[$i]['contractCounter2'] ;
	echo  ' (<B>'.round($counterContracts,0).'</B>) ';		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
}
else if (strpos($link,'/london/') !== false) { //Λονδίνο
echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
    echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'V.A.T. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	if (strpos($link,'buyer')  !== false)
	echo  'Συμβάσεις: ';
	else 
	echo  'Πληρωμές: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmount0']) + fromTextToNumber($uniqueResults[$i]['contractAmount1'])  + fromTextToNumber($uniqueResults[$i]['contractAmount2']) + fromTextToNumber($uniqueResults[$i]['contractAmount3'])   ;
	echo '<B>'.fromNumberToText($sumContracts,'£').'</B>';
	        $counterContracts=$uniqueResults[$i]['contractCounter0'] + $uniqueResults[$i]['contractCounter1'] + $uniqueResults[$i]['contractCounter2'] + $uniqueResults[$i]['contractCounter3'];
	echo  ' (<B>'.round($counterContracts,0).'</B>) ';		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
}
else if (strpos($link,'/eu/') !== false) { //ευρώπη
echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
    //echo $name;
	echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
    echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'V.A.T. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	echo  'Συμβάσεις: ';	
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmount0']) + fromTextToNumber($uniqueResults[$i]['contractAmount1'])  + fromTextToNumber($uniqueResults[$i]['contractAmount2'])   ;
	echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
	        $counterContracts=$uniqueResults[$i]['contractCounter0'] + $uniqueResults[$i]['contractCounter1'] + $uniqueResults[$i]['contractCounter2'] ;
	echo  ' (<B>'.round($counterContracts,0).'</B>) ';		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
}
else if (strpos($link,'/newyork/') !== false) { //Νέα Υόρκη-πόλη
echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
    echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'V.A.T. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	echo  'Συμβάσεις: ';	
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmount0']) + fromTextToNumber($uniqueResults[$i]['contractAmount1'])  + fromTextToNumber($uniqueResults[$i]['contractAmount2'])   ;
	echo '<B>'.fromNumberToText($sumContracts,'$').'</B>';
	        $counterContracts=$uniqueResults[$i]['contractCounter0'] + $uniqueResults[$i]['contractCounter1'] + $uniqueResults[$i]['contractCounter2'] ;
	echo  ' (<B>'.round($counterContracts,0).'</B>) ';		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
}
else if (strpos($link,'/newyorkstate/') !== false) { //Νέα Υόρκη-πόλιτεία
echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
    echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'V.A.T. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	echo  'Συμβάσεις: ';	
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmount0']) + fromTextToNumber($uniqueResults[$i]['contractAmount1'])  + fromTextToNumber($uniqueResults[$i]['contractAmount2'])   ;
	echo '<B>'.fromNumberToText($sumContracts,'$').'</B>';
	        $counterContracts=$uniqueResults[$i]['contractCounter0'] + $uniqueResults[$i]['contractCounter1'] + $uniqueResults[$i]['contractCounter2'] ;
	echo  ' (<B>'.round($counterContracts,0).'</B>) ';		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
	echo "</td>";
}
else if ((strpos($link,'product') !== false) && (strpos($link,'eprices') !== false)) { //φασόλια
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	//echo '<B>'.$psName.'</B><br>';
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$psName</a> </br>";	
	//echo '<B>';
	//echo "<a href='".$nameLink."'target='_blank' >Στο ΠΑΡΑΤΗΡΗΤΗΡΙΟ ΤΙΜΩΝ</a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.75em">ΠΑΡΑΤΗΡΗΤΗΡΙΟ ΤΙΜΩΝ-Προϊόν</font></br> '; 
	//echo '</B>';
	//echo '<B>';
	//echo ' <font color="#FFA500" size="1">ΠΡΟΙΟΝ</font></br> '; 
	//echo '</B>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Μέση 2015&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['average'];	
	echo '</B>';
	echo '&nbsp';
	echo '<font color="#FFA500" style="font-size: 0.80em">Διαφορά Τιμής 2015&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['variationPrice'];	
	echo '</B>';
	echo '</br>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Χαμηλότερη τιμή 2015&nbsp</font> ';
	echo '<B>';	
	echo $uniqueResults[$i]['minPrice'].'/'.$uniqueResults[$i]['unitOfMeasurement'];	
	echo '</B>';
	echo '&nbsp';
		$locMin=$uniqueResults[$i]['locMin'];
	echo "<FONT size='2'>$locMin</FONT>"; 	
	echo '</br>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Υψηλότερη τιμή 2015&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['maxPrice'].'/'.$uniqueResults[$i]['unitOfMeasurement'];
	echo '</B>';
	echo '&nbsp';
		$locMax=$uniqueResults[$i]['locMax'];
	echo "<FONT size='2'>$locMax</FONT>"; 	
	echo '</br>'; 
	echo  '[';
	echo '<font  style="font-size: 0.80em">Τελευταία ενημέρωση&nbsp</font> ';
	echo  $uniqueResults[$i]['lastUpdate'];	
	echo  ']';
	echo "</td>";
    
	
	echo "</td>";
}
else if ((strpos($link,'product') !== false) && (strpos($link,'kath') !== false)) { //Αγγουράκια
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	//echo '<B>'.mb_strtoupper($psName, "UTF-8").'</B><br>';
	$psName=mb_strtoupper($psName, "UTF-8");
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$psName</a> </br>";	
	//echo '<B>';
	//echo "<a href='".$nameLink."'target='_blank' >Στην ΚΕΝΤΡΙΚΗ ΑΓΟΡΑ ΘΕΣ/ΝΙΚΗΣ</a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.75em">ΚΕΝΤΡΙΚΗ ΑΓΟΡΑ ΘΕΣ/ΝΙΚΗΣ-Προϊόν</font></br> '; 
	//echo '</B>';
	//echo '<B>';
	//echo ' <font color="#FFA500" size="1">ΠΡΟΙΟΝ</font></br> '; 
	//echo '</B>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Επικρατέστερη τιμή&nbsp</font> ';
	echo '&nbsp';
	echo '<B>';
	echo $uniqueResults[$i]['dominantPriceDetails'].' €/'.$uniqueResults[$i]['unitOfMeasurement'];	
	echo '</B>';
	echo '&nbsp';
	echo '<font color="#FFA500" style="font-size: 0.80em">Επικρατέστερη εβδομάδας&nbsp</font> ';	
	echo '&nbsp';
	echo '<B>';
	echo $uniqueResults[$i]['weekDominantPriceDetails'].' €/'.$uniqueResults[$i]['unitOfMeasurement'];	
	echo '</B>';
	echo '</br>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Επικρατέστερη έτους&nbsp</font> ';	
	echo '&nbsp';
	echo '<B>';	
	echo $uniqueResults[$i]['yearDominantPriceDetails'].' €/'.$uniqueResults[$i]['unitOfMeasurement'];		
	echo '</B>';
	echo '&nbsp';
	echo '<font color="#FFA500" style="font-size: 0.80em">Ποσότητα προς διάθεση&nbsp</font> ';	
	echo '&nbsp';
	echo '<B>';	
	echo $uniqueResults[$i]['quantityDetails'].'&nbspκιλά';
	echo '</br>';
	echo '</B>';
	echo  '[';
	echo '<font  style="font-size: 0.80em">Τελευταία ενημέρωση&nbsp</font> ';
	echo  $uniqueResults[$i]['lastUpdate'];	
	echo  ']';
	echo "</td>"; 
	

}
else if  	((strpos($link,'shop') !== false) && (strpos($link,'eprices')) !== false){ //ΣΚΛΑΒΕΝΙΤΗΣ ΒΑΡΗΣ
	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	//echo '<B>'.$name.'</B><br>';
	//echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	//echo '<B>'.$psName.'</B><br>';
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$psName</a> </br>";	
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΠΑΡΑΤΗΡΗΤΗΡΙΟ ΤΙΜΩΝ-Σημείο Πώλησης</font></br> '; 
	//echo '<B>';
	//echo "<a href='".$nameLink."'target='_blank' >Στο ΠΑΡΑΤΗΡΗΤΗΡΙΟ ΤΙΜΩΝ</a> </br>";
	//echo '</B>';
	//echo '<B>';
	//echo ' <font color="#FFA500" size="1">ΣΗΜΕΙΟ ΠΩΛΗΣΗΣ</font></br> '; 
	//echo '</B>';
    //echo 'Πλήθος Ειδών ';
	echo '<font color="#FFA500" style="font-size: 0.80em">Προϊόντα&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['countOfProducts'];	
	echo '</B>';
	echo '&nbsp';
	echo '<font color="#FFA500" style="font-size: 0.80em">Κατηγορίες&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['countOfCategories'];	
	echo '</B>';
	echo '</br>'; 
	echo '<font color="#FFA500" style="font-size: 0.80em">Υψηλότερη τιμή&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['maxPrice'].'/'.$uniqueResults[$i]['unitOfMeasurementMax'];	
	echo '</B>';
    echo '&nbsp';		
		$maxProdName=$uniqueResults[$i]['maxProdName'];
	echo "<FONT size='2'>$maxProdName</FONT>";	
	echo '</br>';
	echo '<font color="#FFA500" style="font-size: 0.80em">Χαμηλότερη τιμή&nbsp</font> ';
	echo '<B>';
	echo $uniqueResults[$i]['minPrice'].'/'.$uniqueResults[$i]['unitOfMeasurementMin'];		
	echo '</B>';
	echo '&nbsp';	
		$minProdName=$uniqueResults[$i]['minProdName'];
	echo "<FONT size='2'>$minProdName</FONT>"; 	
	echo '</br>'; 
	echo  '[';
	echo '<font  style="font-size: 0.80em">Τελευταία ενημέρωση&nbsp</font> ';
	echo  $uniqueResults[$i]['lastUpdate'];	
	echo  ']';
	echo "</td>";
}
else { //κημδης και τα αλλα 023199666

	echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:400px;\">";
	//echo "<a href='".$nameLink."'target='_blank' >$name</a> </br>";
	//echo '<B>'.$name.'</B><br>';
	echo "<a class='nameLink' href='".$nameLink."'target='_blank' >$name</a> </br>";	
    //echo "<FONT COLOR='#006621 '>$link</FONT></br>"; 
	echo '<I>';
	echo hide_not_avail($uniqueResults[$i]['address']);
	echo ' ';
	echo hide_not_avail($uniqueResults[$i]['pc']);
	echo ' ';
	echo hide_not_avail_space($uniqueResults[$i]['city']); 
	echo ' ';
	echo 'Α.Φ.Μ. '.hide_not_avail($uniqueResults[$i]['vat']."</br>");
	echo '</I>';
	//echo "<a href='".$nameLink."'target='_blank'  > <B>Στo ΚΗΜΔΗΣ</B></a> </br>";
	echo ' <font class="dataset" color="#006621" style="font-size: 0.77em">ΚΗΜΔΗΣ</font></br> '; 
	//echo '<B>';
	echo ' <font color="#FFA500" size="1">'.$property.'</font> '; 
	//echo '<B>';
	//echo  '<B>'.(getSource($link,'all')).'<sup><font size="1">'.$property.'</font></sup> :  </B>'; 
	echo  'Συμβάσεις: ';
			$sumContracts=fromTextToNumber($uniqueResults[$i]['contractAmountPrev']) + fromTextToNumber($uniqueResults[$i]['contractAmountCur'])  ;
		echo '<B>'.fromNumberToText($sumContracts,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['contractItemsNo']),0).'</B>) ';
		echo  'Πληρωμές: ';
			$sumPayments=fromTextToNumber($uniqueResults[$i]['paymentAmountPrev']) + fromTextToNumber($uniqueResults[$i]['paymentAmountCur'])  ;
		echo '<B>'.fromNumberToText($sumPayments,'€').'</B>';
		echo  ' (<B>'.round(($uniqueResults[$i]['paymentItemsNo']),0).'</B>) ';
		
	echo  ' &nbsp [έως '.$uniqueResults[$i]['lastUpdate'].']';	
    echo "</td>";
}  
	          
				
	
 
 /*echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:200px;\">";
 if(empty($uniqueResults[$i]['vat']) ||  ((strpos($link,'newyorkstate') !== false) &&  (strpos($link,'seller') !== false))  ) {
 echo "-";
 }
 else
 echo $uniqueResults[$i]['vat']; //HIDDEN
 echo "</td>";
 
 echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:200px;\">";
 //echo getSource($link); 
 echo "</td>";
  */
 echo "<td style=\" text-align:left; border-left: 0px solid #ccc; font-size:15px; padding-right:0px;  width:80px;\">";
 echo $uniqueResults[$i]['score']; //hidden

 echo "</td>";

 
 
 echo "</tr>"; 

}
 
 $i++;
 
 }
 echo "</tbody>";
 echo"</table>";


};
function prepareExactKeywordArray($word){ //not in use
$word = ltrim($word);
$words = explode(' ', $word);
$wordArray=array();
if (count($words) >0) {
		$termArray=array();
		$len=count($words);
		foreach($words as $w) {		
								if  (mb_strlen($w, 'utf-8') >2)			   									   
								array_push($termArray,$w);                       			   
					          }  		                	  
  
		       

						}

return $termArray;
}
function prepareExactKeyword($word){
$word = ltrim($word);
$words = explode(' ', $word);
$wordArray=array();
if (count($words) >1) {
//echo 'yes';
$t1=' ';
$t2=' ';
$t12=' ';
$word ='';
$i = 0;
$len=count($words);
foreach($words as $w) {		
               if ($i == 0)  
			   {	
					if	(mb_strlen($w, 'utf-8') >3) { 			   
					$t1 = $w;
					}
			   $w='"'.$w.'+';			 
               }
			   else
			   if (($i > 0) && ($i < ($len-1)))
               { 	
			       
                   if ($i == 1) 	
                   {
				      if	(mb_strlen($w, 'utf-8') >3 ){ 
				      $t2 = $w;	
                      }					 
				   }	
                   $w=$w.'+';				   
			  
			   }		
			   else
               if ($i == ($len-1) )	
			   {
			       
			       if ($i == 1) 
				   {
				    $t2 = $w;					
				   }	
                  $w=$w.'"';				   
			       
				}      			  			  
			 	                  	  
			  $word .=$w; 	
	          $i++;			  
		      }   
$t12= '"'.$t1."+".$t2.'"';
}
return array($t1,$t2,$t12,$word);
}
function prepareKeyword($word){
$word= rtrim(ltrim(str_replace('ς','σ', $word)));
$word = str_replace('ά','α',$word);
$word = str_replace('έ','ε',$word);
$word = str_replace('ή','η',$word);
$word = str_replace('ί','ι',$word);
$word = str_replace('ύ','υ',$word);
$word = str_replace('ό','ο',$word);
$word = str_replace('ώ','ω',$word);
$word = str_replace('πατρ.',' ',$word);
$word = str_replace('<',' ',$word);
$word = str_replace('>',' ',$word);
$word = str_replace('&',' ',$word);
$word = str_replace('-',' ',$word);
$word = str_replace('||',' ',$word);
$word = str_replace(' ||',' ',$word);
$word = str_replace('|| ',' ',$word);
$word = str_replace(',,',' ',$word);
$word = str_replace(',',' ',$word);
return $word;
}
function unique_multidim_array($array, $key){
    $temp_array = array(); //empty array
    $i = 0;
    $key_array = array(); //empty array
	//echo "<table id='doubleResults' class='display'  ><thead><tr><th>unique link</th><th>counter</th></tr></thead>"; 
	    
    foreach($array as $val){	

   
        if 	(!in_array($val[$key],$key_array)		)   { 
			
            $key_array[$i] = $val[$key];
			
            $temp_array[$i] = $val;
			
			$i++;
        }
		else { 
		}
        
    }
    return $temp_array;
	
}
function unique_hybrid_array($array, $key){
 $temp_array = array();
 $i = 0;
 $key_array = array();
  foreach($array as $val){	
  
  }
}

function searchForId($id, $array) { 
   foreach ($array as $key => $val) {
   //echo $val['vat'];
   //echo $id;
       if ($val['link'] == $id) {
           return $key;
		   //echo $key."double";
       }
	   //else echo 'not equal';
   }
   return null;
}
function _make_url_clickable_cb($matches) {
    $ret = '';
    $url = $matches[2];

    if ( empty($url) )
        return $matches[0];
    // removed trailing [.,;:] from URL
    if ( in_array(substr($url, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($url, -1);
        $url = substr($url, 0, strlen($url)-1);
    }
    return $matches[1] . "<a href=\"$url\" rel=\"nofollow\">$url</a>" . $ret;
}

function _make_web_ftp_clickable_cb($matches) {
    $ret = '';
    $dest = $matches[2];
    $dest = 'http://' . $dest;

    if ( empty($dest) )
        return $matches[0];
    // removed trailing [,;:] from URL
    if ( in_array(substr($dest, -1), array('.', ',', ';', ':')) === true ) {
        $ret = substr($dest, -1);
        $dest = substr($dest, 0, strlen($dest)-1);
    }
    return $matches[1] . "<a href=\"$dest\" rel=\"nofollow\">$dest</a>" . $ret;
}

function _make_email_clickable_cb($matches) {
    $email = $matches[2] . '@' . $matches[3];
    return $matches[1] . "<a href=\"mailto:$email\">$email</a>";
}

function make_clickable($ret) {
    $ret = ' ' . $ret;
    // in testing, using arrays here was found to be faster
    $ret = preg_replace_callback('#([\s>])([\w]+?://[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_url_clickable_cb', $ret);
    //$ret = preg_replace_callback('#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_web_ftp_clickable_cb', $ret);
    //$ret = preg_replace_callback('#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $ret);

    // this one is not in an array because we need it to run last, for cleanup of accidental links within links
    $ret = preg_replace("#(<a( [^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i", "$1$3</a>", $ret);
    $ret = trim($ret);
    return $ret;
}
function hide_not_avail($field){
	if ($field=='Μη Διαθέσιμο'){
	$field='';
	}
	return $field;
}
function hide_not_avail_space($field){
	if (($field=='Μη Διαθέσιμο') || ($field=='')){
	$field=' ';
	}
	else {
	$field=($field.' &nbsp');
	}
	
	return $field;
}

function fromTextToNumber($text) {
$numbered=0;
if ((strpos($text,'M') !== false) || (strpos($text,'Μ') !== false)) {
$numbered=str_replace("€", "",$text);
$numbered=str_replace("$", "",$numbered);
$numbered=str_replace("£", "",$numbered);
$numbered=str_replace("M", "",$numbered);
$numbered*=1000000;
}
else 
if ((strpos($text,'K') !== false) || (strpos($text,'Κ') !== false)) {
$numbered=str_replace("€", "",$text);
$numbered=str_replace("$", "",$numbered);
$numbered=str_replace("£", "",$numbered);
$numbered=str_replace("K", "",$numbered);
$numbered*=1000;
}
else 
if ((strpos($text,'B') !== false) || (strpos($text,'Β') !== false)) {
$numbered=str_replace("€", "",$text);
$numbered=str_replace("$", "",$text);
$numbered=str_replace("£", "",$numbered);
$numbered=str_replace("B", "",$numbered);
$numbered*=1000000000;
}
else {
$numbered*=1;
}

return $numbered;
}

function fromNumberToText($number,$currency) {
$texted=$currency.'0.0K'; //€0.0K
$digits=strlen($number);
	if (($digits == 1) || (($digits) == 2)){
	$texted=$currency.'0.0K';
	}
	else
	if ($digits == 3) { //e.g. 860=0.8K
	$dividor=1000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'K';
	}
	else
	if ($digits == 4) { //e.g 8600->8.6K
	$dividor=1000;
	//$texted='€'.round($number/($dividor),1).'K';
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'K';
	}
	else
	if ($digits == 5) { //e.g 86000->86K
	$dividor=1000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'K';
	}
	else
	if ($digits == 6) { //e.g 860000->0.8M (kanonika 0.9)
	$dividor=1000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'M';
	}
	else
	if ($digits == 7) { //e.g 8.600.000->8.6K  
	$dividor=1000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'M';
	}
	else
	if ($digits == 8) { //e.g 80.600.000->80.6M  
	$dividor=1000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'M';
	}
	else
	if ($digits == 9) { //e.g 800.600.000->0.8B  //ok
	$dividor=1000000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'B';
	}
	else
	if ($digits == 10) { //e.g 8.000.600.000->8B  //ok
	$dividor=1000000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'B';
	}
	else
	if ($digits == 11) { //e.g 80.000.600.000->80B  //ok
	$dividor=1000000000;
	$texted=$currency.number_format(round($number/($dividor),1), 1, '.', '').'B';
	}
	else {
	$texted=$currency.'0.0K'; //test only
	}

	return $texted;
}
//main
function getSource($link,$dk){
if ($dk=='d')
$source="ΔΙΑΥΓΕΙΑ";
else
 if ($dk=='k')
$source="ΚΗΜΔΗΣ";
else if ($dk=='all' ) {
if  ((strpos($link,'khmdhs') !== false) && (strpos($link,'diaugeiakhmdhs') == false))
{
$source="ΚΗΜΔΗΣ";
}
else
if  ((strpos($link,'diaugeia') !== false) && (strpos($link,'diaugeiakhmdhs') == false))
{
$source="ΔΙΑΥΓΕΙΑ";
}
else
if  ((strpos($link,'australia') !== false) &&  (strpos($link,'buyer') !== false)) 
{
$source="ΑΥΣΤΡΑΛΙΑ";
}
else
if  (strpos($link,'diaugeiakhmdhs') !== false) 
{
$source="ΔΙΑΥΓΕΙΑ / ΚΗΜΔΗΣ ";
}
else
if  (strpos($link,'australia') !== false)
{
$source="ΑΥΣΤΡΑΛΙΑ ";
}
else
if  ((strpos($link,'hybrid') !== false) ) 
{
$source="ΔΙΑΥΓΕΙΑ";
}
else
if  ((strpos($link,'newyork') !== false) &&  (strpos($link,'newyorkstate') == false)) 
{
$source="ΝΕΑ ΥΟΡΚΗ(Πόλη) ";
}
else
if  (strpos($link,'newyorkstate') !== false)  
{
$source="ΝΕΑ ΥΟΡΚΗ(Πολιτεία)";
}

if  (strpos($link,'london') !== false) 
{
$source="ΛΟΝΔΙΝΟ";
}
if  (strpos($link,'eu') !== false)  
{
$source="ΕΥΡΩΠΗ FTS ";
}
}
//echo  $source;
return $source;
}

function hideDuplicate($double,$link){
$remove=0;
foreach ($double as $key => $val) {
if ($val['link'] == $link)
$remove=1;
}
return $remove;
}
function fromHidden($hidden,$link){
foreach ($hidden as $key => $val){

if (substr($val['link'],strpos($val['link'], "?=") == $link))
//echo '';
return $val['link'];
}

}
function convertDate($date){
if (substr($date,0,3)== 201)
//$revDate='wrong'.$date;
$revDate= date("d-m-Y", strtotime($date));
else $revDate=$date;
return $revDate;
 
}
echo  "<div ALIGN='RIGHT'>";
echo 'Έκδοση 0.29' ;
echo "</div>";
?>
 

	  
</body>
</html>




