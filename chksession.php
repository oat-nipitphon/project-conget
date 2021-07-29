<?
require_once("nusoap/lib/nusoap.php");

$server = new soap_server();

$namespace = "http://127.0.0.1/qrcodefororder/chksession.php";
$server->wsdl->schemaTargetNamespace = $namespace;
$server->configureWSDL("ShopLogin");

$varname = array(
    'username' => "xsd:string",
	'password' => "xsd:string");
	
$server->register('ShopLogin',$varname,array('return' => 'tns:ArrayOfString'));

$server->wsdl->addComplexType("ArrayOfString",
	"complexType",
	"array",
	"",
	"SOAP-ENC:Array",
	array(),
	array(array("ref"=>"SOAP-ENC:arrayType","wsdl:arrayType"=>"xsd:string[]")),
	"xsd:string");
	
	function ShopLogin($username,$password)
	{
			
			$objConnect = mysql_connect("localhost","root","09876543210") or die(mysql_error());
			$objDB = mysql_select_db("dbfororder");
			$strSQL = "SELECT * FROM userlogin WHERE user = '".$username."' AND pass = '".$password."' ";
			$objQuery = mysql_query($strSQL) or die(mysql_error());
			$objResult = mysql_fetch_array($objQuery);
			if($objResult)
			{
				$arr[0] = true;
				$arr[1] = $objResult["user"];
				$arr[2] = null;
			}
			else
			{
				
				$arr[0] = false;
				$arr[1] = null;
				$arr[2] = "lnvalid Username or Password";
			}
			
			
			mysql_close($objConnect);
			
			return $arr;
	}
	$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA'])? $GLOBALS['HTTP_RAW_POST_DATA']:'';
	
	$server->service($POST_DATA);
	exit();

?>
			
				
