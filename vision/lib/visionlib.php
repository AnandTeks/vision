<?php
class visionlib {
   
   public $table_account_master = "a";
   public $msg = array();

   public $getConnection = '';
   
   public function __construct($DB){
        $this->getConnection = $DB;
   }

   public function doStandaredQuery($query){
        $prepareQuery = $this->getConnection->query($query);
        $result =  $prepareQuery->fetchAll(PDO::FETCH_ASSOC);
        return $result;
   }


     public function addproduct($produyctArray){
             $productType = $produyctArray['productType'];
             $modelName = $produyctArray['modelName'];
            $productqty = $produyctArray['productqty'];
            $Price= $produyctArray['Price'];
          $addproductquery = 'INSERT INTO  product (productType,Modelname,qty,Price) VALUES(:productType,:modelName,:productqty,:Price)';
          $prepareQuery = $this->getConnection->prepare($addproductquery); 
          $prepareQuery->execute(array('productType'=>$productType,'modelName'=>$modelName,'productqty'=>$productqty,'Price'=>$Price));
          return true;
    }





 public function addCustomerprofile($addCustomerprofileArray){
            

         /* $customerName = $addCustomerprofileArray['customerName'];
          $address = $addCustomerprofileArray['address'];
          $poweroneyes = $addCustomerprofileArray['productType'];
          $power = $addCustomerprofileArray['power'];
          $email = $addCustomerprofileArray['email'];
          $phno = $addCustomerprofileArray['phno'];
          $dateofentry = $addCustomerprofileArray['date'];



          $addCustomerquery = 'INSERT INTO  customerprofile (Name, address,poweroneyes,power,email,phonenumber,dateofentry) VALUES(:customerName,:address,:poweroneyes,:power,:email,:phno,:dateofentry)';
          $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
          $prepareQuery->execute(array("customerName"=>"$customerName","address"=>"$address","poweroneyes"=>"$poweroneyes","power"=>"$power","email"=>"$email","phno"=>"$phno","dateofentry"=>"$dateofentry"));
          return true;*/

$customerName = $addCustomerprofileArray['customerName'];
 $address = $addCustomerprofileArray['address'];
 $GlassRighEyeDistanceSph=$addCustomerprofileArray['GlassRighEyeDistanceSph'];
 $GlassRighEyeDistanceCyl=$addCustomerprofileArray['GlassRighEyeDistanceCyl'];
 $GlassRighEyeDistanceAxis=$addCustomerprofileArray['GlassRighEyeDistanceAxis'];
 $GlassRighEyeDistancePrism=$addCustomerprofileArray['GlassRighEyeDistancePrism'];
 $GlassRighEyeDistanceBase=$addCustomerprofileArray['GlassRighEyeDistanceBase'];
 $GlassRighEyeDistanceVA=$addCustomerprofileArray['GlassRighEyeDistanceVA'];


 $GlassLeftEyeDistanceSph=$addCustomerprofileArray['GlassLeftEyeDistanceSph'];
 $GlassLeftEyeDistanceCyl=$addCustomerprofileArray['GlassLeftEyeDistanceCyl'];
 $GlassLeftEyeDistanceAxis=$addCustomerprofileArray['GlassLeftEyeDistanceAxis'];
 $GlassLeftEyeDistancePrism=$addCustomerprofileArray['GlassLeftEyeDistancePrism'];
 $GlassLeftEyeDistanceBase=$addCustomerprofileArray['GlassLeftEyeDistanceBase'];
 $GlassLeftEyeDistanceVA=$addCustomerprofileArray['GlassLeftEyeDistanceVA']; 


 $GlassRighEyeNearSph=$addCustomerprofileArray['GlassRighEyeNearSph']; 
 $GlassRighEyeNearCyl=$addCustomerprofileArray['GlassRighEyeNearCyl']; 
 $GlassRighEyeNearAxis=$addCustomerprofileArray['GlassRighEyeNearAxis'];
 $GlassRighEyeNearPrism=$addCustomerprofileArray['GlassRighEyeNearPrism'];
 $GlassRighEyeNearBase=$addCustomerprofileArray['GlassRighEyeNearBase'];
 $GlassRighEyeNearVA=$addCustomerprofileArray['GlassRighEyeNearVA']; 


 $GlassLeftEyeNearSph=$addCustomerprofileArray['GlassLeftEyeNearSph']; 
 $GlassLeftEyeNearCyl=$addCustomerprofileArray['GlassLeftEyeNearCyl']; 
 $GlassLeftEyeNearAxis=$addCustomerprofileArray['GlassLeftEyeNearAxis'];
 $GlassLeftEyeNearPrism=$addCustomerprofileArray['GlassLeftEyeNearPrism'];
 $GlassLeftEyeNearBase=$addCustomerprofileArray['GlassLeftEyeNearBase'];
 $GlassLeftEyeNearVA=$addCustomerprofileArray['GlassLeftEyeNearVA']; 


 $LensRightEyeBrand=$addCustomerprofileArray['LensRightEyeBrand']; 
 $LensRightEyeBC=$addCustomerprofileArray['LensRightEyeBC']; 
 $LensRightEyeDio=$addCustomerprofileArray['LensRightEyeDio']; 
 $LensRightEyeSph=$addCustomerprofileArray['LensRightEyeSph']; 
 $LensRightEyeCyl=$addCustomerprofileArray['LensRightEyeCyl']; 
 $LensRightEyeAdd=$addCustomerprofileArray['LensRightEyeAdd']; 
 $LensRightEyeTint=$addCustomerprofileArray['LensRightEyeTint']; 
 $LensRightEyeOZ=$addCustomerprofileArray['LensRightEyeOZ']; 
 $LensRightEyeVA=$addCustomerprofileArray['LensRightEyeVA']; 
 $LensLeftEyeBrand=$addCustomerprofileArray['LensLeftEyeBrand']; 
 $LensLeftEyeBC=$addCustomerprofileArray['LensLeftEyeBC']; 
 $LensLeftEyeDio=$addCustomerprofileArray['LensLeftEyeDio']; 
 $LensLeftEyeSph=$addCustomerprofileArray['LensLeftEyeSph']; 
 $LensLeftEyeCyl=$addCustomerprofileArray['LensLeftEyeCyl']; 
 $LensLeftEyeAdd=$addCustomerprofileArray['LensLeftEyeAdd']; 
 $LensLeftEyeTint=$addCustomerprofileArray['LensLeftEyeTint']; 
 $LensLeftEyeOZ=$addCustomerprofileArray['LensLeftEyeOZ']; 
 $LensLeftEyeVA=$addCustomerprofileArray['LensLeftEyeVA']; 
 $email = $addCustomerprofileArray['email'];
 $phno = $addCustomerprofileArray['phno'];
 $dateofbirth = $addCustomerprofileArray['dateofbirth'];
 $Age = $addCustomerprofileArray['Age'];
$dateofjoin = $addCustomerprofileArray['dateofjoin'];



$addCustomerquery = 'INSERT INTO  customerprofile (Name,address,
  GlassRighEyeDistanceSph,GlassRighEyeDistanceCyl,
  GlassRighEyeDistanceAxis,GlassRighEyeDistancePrism,
  GlassRighEyeDistanceBase,GlassRighEyeDistanceVA,
  GlassRighEyeNearSph,GlassRighEyeNearCyl,
  GlassRighEyeNearAxis,GlassRighEyeNearPrism,
  GlassRighEyeNearBase,GlassRighEyeNearVA,
  GlassLeftEyeDistanceSph, GlassLeftEyeDistanceCyl,
  GlassLeftEyeDistanceAxis,GlassLeftEyeDistancePrism,
  GlassLeftEyeDistanceBase,GlassLeftEyeDistanceVA,
  GlassLeftEyeNearSph, GlassLeftEyeNearCyl,
  GlassLeftEyeNearAxis,GlassLeftEyeNearPrism,
  GlassLeftEyeNearBase,GlassLeftEyeNearVA,
  LensRightEyeBrand, LensRightEyeBC, 
  LensRightEyeDio,LensRightEyeSph,
  LensRightEyeCyl,LensRightEyeAdd,
  LensRightEyeTint,LensRightEyeOZ,
  LensRightEyeVA,LensLeftEyeBrand,
  LensLeftEyeBC,LensLeftEyeDio,
  LensLeftEyeSph,LensLeftEyeCyl,
  LensLeftEyeAdd,LensLeftEyeTint,
  LensLeftEyeOZ,LensLeftEyeVA,
  email,phno,
  dateofbirth,Age,dateofjoin)
  VALUES(:Name,:address,
  :GlassRighEyeDistanceSph,:GlassRighEyeDistanceCyl,
  :GlassRighEyeDistanceAxis,:GlassRighEyeDistancePrism,
  :GlassRighEyeDistanceBase,:GlassRighEyeDistanceVA,
  :GlassRighEyeNearSph,:GlassRighEyeNearCyl,
  :GlassRighEyeNearAxis,:GlassRighEyeNearPrism,
  :GlassRighEyeNearBase,:GlassRighEyeNearVA,
  :GlassLeftEyeDistanceSph,:GlassLeftEyeDistanceCyl,
  :GlassLeftEyeDistanceAxis,:GlassLeftEyeDistancePrism,
  :GlassLeftEyeDistanceBase,:GlassLeftEyeDistanceVA,
  :GlassLeftEyeNearSph,:GlassLeftEyeNearCyl,
  :GlassLeftEyeNearAxis,:GlassLeftEyeNearPrism,
  :GlassLeftEyeNearBase,:GlassLeftEyeNearVA,
  :LensRightEyeBrand,:LensRightEyeBC, 
  :LensRightEyeDio,:LensRightEyeSph,
  :LensRightEyeCyl,:LensRightEyeAdd,
  :LensRightEyeTint,:LensRightEyeOZ,
  :LensRightEyeVA,:LensLeftEyeBrand,
  :LensLeftEyeBC,:LensLeftEyeDio,
  :LensLeftEyeSph,:LensLeftEyeCyl,
  :LensLeftEyeAdd,:LensLeftEyeTint,
  :LensLeftEyeOZ,:LensLeftEyeVA,
   :email,:phno,
  :dateofbirth,:Age,:dateofjoin)';
$prepareQuery = $this->getConnection->prepare($addCustomerquery); 
 $prepareQuery->execute(array(
    "Name"=>"$customerName",
  "address"=>"$address",
  "GlassRighEyeDistanceSph"=>"$GlassRighEyeDistanceSph",
  "GlassRighEyeDistanceCyl"=>"$GlassRighEyeDistanceCyl",
  "GlassRighEyeDistanceAxis"=>"$GlassRighEyeDistanceAxis",
  "GlassRighEyeDistancePrism"=>"$GlassRighEyeDistancePrism",
  "GlassRighEyeDistanceBase"=>"$GlassRighEyeDistanceBase",
  "GlassRighEyeDistanceVA"=>"$GlassRighEyeDistanceVA",
  "GlassRighEyeNearSph"=>"$GlassRighEyeNearSph",
  "GlassRighEyeNearCyl"=>"$GlassRighEyeNearCyl",
  "GlassRighEyeNearAxis"=>"$GlassRighEyeNearAxis",
  "GlassRighEyeNearPrism"=>"$GlassRighEyeNearPrism",
  "GlassRighEyeNearBase"=>"$GlassRighEyeNearBase",
  "GlassRighEyeNearVA"=>"$GlassRighEyeNearVA",
  "GlassLeftEyeDistanceSph"=>"$GlassLeftEyeDistanceSph",
  "GlassLeftEyeDistanceCyl"=>"$GlassLeftEyeDistanceCyl",
  "GlassLeftEyeDistanceAxis"=>"$GlassLeftEyeDistanceAxis",
  "GlassLeftEyeDistancePrism"=>"$GlassLeftEyeDistancePrism",
  "GlassLeftEyeDistanceBase"=>"$GlassLeftEyeDistanceBase",
  "GlassLeftEyeDistanceVA"=>"$GlassLeftEyeDistanceVA",
  "GlassLeftEyeNearSph"=>"$GlassLeftEyeNearSph",
  "GlassLeftEyeNearCyl"=>"$GlassLeftEyeNearCyl",
  "GlassLeftEyeNearAxis"=>"$GlassLeftEyeNearAxis",
  "GlassLeftEyeNearPrism"=>"$GlassLeftEyeNearPrism",
  "GlassLeftEyeNearBase"=>"$GlassLeftEyeNearBase",
  "GlassLeftEyeNearVA"=>"$GlassLeftEyeNearVA",
  "LensRightEyeBrand"=>"$LensRightEyeBrand",
  "LensRightEyeBC"=>"$LensRightEyeBC",
  "LensRightEyeDio"=>"$LensRightEyeDio",
  "LensRightEyeSph"=>"$LensRightEyeSph",
  "LensRightEyeCyl"=>"$LensRightEyeCyl",
  "LensRightEyeAdd"=>"$LensRightEyeAdd",
  "LensRightEyeTint"=>"$LensRightEyeTint",
  "LensRightEyeOZ"=>"$LensRightEyeOZ",
  "LensRightEyeVA"=>"$LensRightEyeVA",
  "LensLeftEyeBrand"=>"$LensLeftEyeBrand",
  "LensLeftEyeBC"=>"$LensLeftEyeBC",
  "LensLeftEyeDio"=>"$LensLeftEyeDio",
  "LensLeftEyeSph"=>"$LensLeftEyeSph",
  "LensLeftEyeCyl"=>"$LensLeftEyeCyl",
  "LensLeftEyeAdd"=>"$LensLeftEyeAdd",
  "LensLeftEyeTint"=>"$LensLeftEyeTint",
  "LensLeftEyeOZ"=>"$LensLeftEyeOZ",
  "LensLeftEyeVA"=>"$LensLeftEyeVA",
  "email"=>"$email",
  "phno"=>"$phno",
  "dateofbirth"=>"$dateofbirth",
  "Age"=>"$Age",
  "dateofjoin"=>"$dateofjoin"

));


return true;

    }


/*
 public function addCustomerprofileUpdate($updateCustomerprofileArray){
            
     $id = $updateCustomerprofileArray['customerName'];      
  $customerName = $updateCustomerprofileArray['customerName'];
 $address = $updateCustomerprofileArray['address'];
 $GlassRighEyeDistanceSph=$updateCustomerprofileArray['GlassRighEyeDistanceSph'];
 $GlassRighEyeDistanceCyl=$updateCustomerprofileArray['GlassRighEyeDistanceCyl'];
 $GlassRighEyeDistanceAxis=$updateCustomerprofileArray['GlassRighEyeDistanceAxis'];
 $GlassRighEyeDistancePrism=$updateCustomerprofileArray['GlassRighEyeDistancePrism'];
 $GlassRighEyeDistanceBase=$updateCustomerprofileArray['GlassRighEyeDistanceBase'];
 $GlassRighEyeDistanceVA=$updateCustomerprofileArray['GlassRighEyeDistanceVA'];


 $GlassLeftEyeDistanceSph=$updateCustomerprofileArray['GlassLeftEyeDistanceSph'];
 $GlassLeftEyeDistanceCyl=$updateCustomerprofileArray['GlassLeftEyeDistanceCyl'];
 $GlassLeftEyeDistanceAxis=$updateCustomerprofileArray['GlassLeftEyeDistanceAxis'];
 $GlassLeftEyeDistancePrism=$updateCustomerprofileArray['GlassLeftEyeDistancePrism'];
 $GlassLeftEyeDistanceBase=$updateCustomerprofileArray['GlassLeftEyeDistanceBase'];
 $GlassLeftEyeDistanceVA=$updateCustomerprofileArray['GlassLeftEyeDistanceVA']; 


 $GlassRighEyeNearSph=$updateCustomerprofileArray['GlassRighEyeNearSph']; 
 $GlassRighEyeNearCyl=$updateCustomerprofileArray['GlassRighEyeNearCyl']; 
 $GlassRighEyeNearAxis=$updateCustomerprofileArray['GlassRighEyeNearAxis'];
 $GlassRighEyeNearPrism=$updateCustomerprofileArray['GlassRighEyeNearPrism'];
 $GlassRighEyeNearBase=$updateCustomerprofileArray['GlassRighEyeNearBase'];
 $GlassRighEyeNearVA=$updateCustomerprofileArray['GlassRighEyeNearVA']; 


 $GlassLeftEyeNearSph=$updateCustomerprofileArray['GlassLeftEyeNearSph']; 
 $GlassLeftEyeNearCyl=$updateCustomerprofileArray['GlassLeftEyeNearCyl']; 
 $GlassLeftEyeNearAxis=$updateCustomerprofileArray['GlassLeftEyeNearAxis'];
 $GlassLeftEyeNearPrism=$updateCustomerprofileArray['GlassLeftEyeNearPrism'];
 $GlassLeftEyeNearBase=$updateCustomerprofileArray['GlassLeftEyeNearBase'];
 $GlassLeftEyeNearVA=$updateCustomerprofileArray['GlassLeftEyeNearVA']; 


 $LensRightEyeBrand=$updateCustomerprofileArray['LensRightEyeBrand']; 
 $LensRightEyeBC=$updateCustomerprofileArray['LensRightEyeBC']; 
 $LensRightEyeDio=$updateCustomerprofileArray['LensRightEyeDio']; 
 $LensRightEyeSph=$updateCustomerprofileArray['LensRightEyeSph']; 
 $LensRightEyeCyl=$updateCustomerprofileArray['LensRightEyeCyl']; 
 $LensRightEyeAdd=$updateCustomerprofileArray['LensRightEyeAdd']; 
 $LensRightEyeTint=$updateCustomerprofileArray['LensRightEyeTint']; 
 $LensRightEyeOZ=$updateCustomerprofileArray['LensRightEyeOZ']; 
 $LensRightEyeVA=$updateCustomerprofileArray['LensRightEyeVA']; 
 $LensLeftEyeBrand=$updateCustomerprofileArray['LensLeftEyeBrand']; 
 $LensLeftEyeBC=$updateCustomerprofileArray['LensLeftEyeBC']; 
 $LensLeftEyeDio=$updateCustomerprofileArray['LensLeftEyeDio']; 
 $LensLeftEyeSph=$updateCustomerprofileArray['LensLeftEyeSph']; 
 $LensLeftEyeCyl=$updateCustomerprofileArray['LensLeftEyeCyl']; 
 $LensLeftEyeAdd=$updateCustomerprofileArray['LensLeftEyeAdd']; 
 $LensLeftEyeTint=$updateCustomerprofileArray['LensLeftEyeTint']; 
 $LensLeftEyeOZ=$updateCustomerprofileArray['LensLeftEyeOZ']; 
 $LensLeftEyeVA=$updateCustomerprofileArray['LensLeftEyeVA']; 
 $email = $updateCustomerprofileArray['email'];
 $phno = $updateCustomerprofileArray['phno'];
 $dateofbirth = $updateCustomerprofileArray['dateofbirth'];
 $Age = $updateCustomerprofileArray['Age'];
$dateofjoin = $updateCustomerprofileArray['dateofjoin'];


          $addCustomerquery = 'UPDATE customerprofile SET  Name =:customerName,address=:address,poweroneyes=:poweroneyes,power=:power,email=:email,phonenumber=:phno,dateofentry=:dateofentry WHERE id=:id';
          $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
          $prepareQuery->execute(array("customerName"=>"$customerName","address"=>"$address","poweroneyes"=>"$poweroneyes","power"=>"$power","email"=>"$email","phno"=>"$phno","dateofentry"=>"$dateofentry","id"=>"$id"));
          return true;
    }
*/

     public function updateCustomerprofile($updateCustomerprofileArray){
            
     $id = $updateCustomerprofileArray['id'];      
  $customerName = $updateCustomerprofileArray['customerName'];
 $address = $updateCustomerprofileArray['address'];
 $GlassRighEyeDistanceSph=$updateCustomerprofileArray['GlassRighEyeDistanceSph'];
 $GlassRighEyeDistanceCyl=$updateCustomerprofileArray['GlassRighEyeDistanceCyl'];
 $GlassRighEyeDistanceAxis=$updateCustomerprofileArray['GlassRighEyeDistanceAxis'];
 $GlassRighEyeDistancePrism=$updateCustomerprofileArray['GlassRighEyeDistancePrism'];
 $GlassRighEyeDistanceBase=$updateCustomerprofileArray['GlassRighEyeDistanceBase'];
 $GlassRighEyeDistanceVA=$updateCustomerprofileArray['GlassRighEyeDistanceVA'];


 $GlassLeftEyeDistanceSph=$updateCustomerprofileArray['GlassLeftEyeDistanceSph'];
 $GlassLeftEyeDistanceCyl=$updateCustomerprofileArray['GlassLeftEyeDistanceCyl'];
 $GlassLeftEyeDistanceAxis=$updateCustomerprofileArray['GlassLeftEyeDistanceAxis'];
 $GlassLeftEyeDistancePrism=$updateCustomerprofileArray['GlassLeftEyeDistancePrism'];
 $GlassLeftEyeDistanceBase=$updateCustomerprofileArray['GlassLeftEyeDistanceBase'];
 $GlassLeftEyeDistanceVA=$updateCustomerprofileArray['GlassLeftEyeDistanceVA']; 


 $GlassRighEyeNearSph=$updateCustomerprofileArray['GlassRighEyeNearSph']; 
 $GlassRighEyeNearCyl=$updateCustomerprofileArray['GlassRighEyeNearCyl']; 
 $GlassRighEyeNearAxis=$updateCustomerprofileArray['GlassRighEyeNearAxis'];
 $GlassRighEyeNearPrism=$updateCustomerprofileArray['GlassRighEyeNearPrism'];
 $GlassRighEyeNearBase=$updateCustomerprofileArray['GlassRighEyeNearBase'];
 $GlassRighEyeNearVA=$updateCustomerprofileArray['GlassRighEyeNearVA']; 


 $GlassLeftEyeNearSph=$updateCustomerprofileArray['GlassLeftEyeNearSph']; 
 $GlassLeftEyeNearCyl=$updateCustomerprofileArray['GlassLeftEyeNearCyl']; 
 $GlassLeftEyeNearAxis=$updateCustomerprofileArray['GlassLeftEyeNearAxis'];
 $GlassLeftEyeNearPrism=$updateCustomerprofileArray['GlassLeftEyeNearPrism'];
 $GlassLeftEyeNearBase=$updateCustomerprofileArray['GlassLeftEyeNearBase'];
 $GlassLeftEyeNearVA=$updateCustomerprofileArray['GlassLeftEyeNearVA']; 


 $LensRightEyeBrand=$updateCustomerprofileArray['LensRightEyeBrand']; 
 $LensRightEyeBC=$updateCustomerprofileArray['LensRightEyeBC']; 
 $LensRightEyeDio=$updateCustomerprofileArray['LensRightEyeDio']; 
 $LensRightEyeSph=$updateCustomerprofileArray['LensRightEyeSph']; 
 $LensRightEyeCyl=$updateCustomerprofileArray['LensRightEyeCyl']; 
 $LensRightEyeAdd=$updateCustomerprofileArray['LensRightEyeAdd']; 
 $LensRightEyeTint=$updateCustomerprofileArray['LensRightEyeTint']; 
 $LensRightEyeOZ=$updateCustomerprofileArray['LensRightEyeOZ']; 
 $LensRightEyeVA=$updateCustomerprofileArray['LensRightEyeVA']; 
 $LensLeftEyeBrand=$updateCustomerprofileArray['LensLeftEyeBrand']; 
 $LensLeftEyeBC=$updateCustomerprofileArray['LensLeftEyeBC']; 
 $LensLeftEyeDio=$updateCustomerprofileArray['LensLeftEyeDio']; 
 $LensLeftEyeSph=$updateCustomerprofileArray['LensLeftEyeSph']; 
 $LensLeftEyeCyl=$updateCustomerprofileArray['LensLeftEyeCyl']; 
 $LensLeftEyeAdd=$updateCustomerprofileArray['LensLeftEyeAdd']; 
 $LensLeftEyeTint=$updateCustomerprofileArray['LensLeftEyeTint']; 
 $LensLeftEyeOZ=$updateCustomerprofileArray['LensLeftEyeOZ']; 
 $LensLeftEyeVA=$updateCustomerprofileArray['LensLeftEyeVA']; 
 $email = $updateCustomerprofileArray['email'];
 $phno = $updateCustomerprofileArray['phno'];
 $dateofbirth = $updateCustomerprofileArray['dateofbirth'];
 $Age = $updateCustomerprofileArray['Age'];
$dateofjoin = $updateCustomerprofileArray['dateofjoin'];



$updateCustomerquery = 'UPDATE customerprofile SET  Name =:customerName,
GlassRighEyeDistanceSph=:GlassRighEyeDistanceSph,
  GlassRighEyeDistanceCyl=:GlassRighEyeDistanceCyl,
  GlassRighEyeDistanceAxis=:GlassRighEyeDistanceAxis,
  GlassRighEyeDistancePrism=:GlassRighEyeDistancePrism,
  GlassRighEyeDistanceBase=:GlassRighEyeDistanceBase,
  GlassRighEyeDistanceVA=:GlassRighEyeDistanceVA,
  GlassRighEyeNearSph=:GlassRighEyeNearSph,
  GlassRighEyeNearCyl=:GlassRighEyeNearCyl,
  GlassRighEyeNearAxis=:GlassRighEyeNearAxis,
  GlassRighEyeNearPrism=:GlassRighEyeNearPrism,
  GlassRighEyeNearBase=:GlassRighEyeNearBase,
  GlassRighEyeNearVA=:GlassRighEyeNearVA,
  GlassLeftEyeDistanceSph=:GlassLeftEyeDistanceSph,
  GlassLeftEyeDistanceCyl=:GlassLeftEyeDistanceCyl,
  GlassLeftEyeDistanceAxis=:GlassLeftEyeDistanceAxis,
  GlassLeftEyeDistancePrism=:GlassLeftEyeDistancePrism,
  GlassLeftEyeDistanceBase=:GlassLeftEyeDistanceBase,
  GlassLeftEyeDistanceVA=:GlassLeftEyeDistanceVA,
  GlassLeftEyeNearSph=:GlassLeftEyeNearSph,
  GlassLeftEyeNearCyl=:GlassLeftEyeNearCyl,
  GlassLeftEyeNearAxis=:GlassLeftEyeNearAxis,
  GlassLeftEyeNearPrism=:GlassLeftEyeNearPrism,
  GlassLeftEyeNearBase=:GlassLeftEyeNearBase,
  GlassLeftEyeNearVA=:GlassLeftEyeNearVA,
  LensRightEyeBrand=:LensRightEyeBrand,
  LensRightEyeBC=:LensRightEyeBC,
  LensRightEyeDio=:LensRightEyeDio,
  LensRightEyeSph=:LensRightEyeSph,
  LensRightEyeCyl=:LensRightEyeCyl,
  LensRightEyeAdd=:LensRightEyeAdd,
  LensRightEyeTint=:LensRightEyeTint,
  LensRightEyeOZ=:LensRightEyeOZ,
  LensRightEyeVA=:LensRightEyeVA,
  LensLeftEyeBrand=:LensLeftEyeBrand,
  LensLeftEyeBC=:LensLeftEyeBC,
  LensLeftEyeDio=:LensLeftEyeDio,
  LensLeftEyeSph=:LensLeftEyeSph,
  LensLeftEyeCyl=:LensLeftEyeCyl,
  LensLeftEyeAdd=:LensLeftEyeAdd,
  LensLeftEyeTint=:LensLeftEyeTint,
  LensLeftEyeOZ=:LensLeftEyeOZ,
  LensLeftEyeVA=:LensLeftEyeVA, 
  email=:email,
  phno=:phno,
  dateofbirth=:dateofbirth,
  Age=:Age,
  dateofjoin=:dateofjoin
  
  WHERE id=:id';
  $prepareQuery = $this->getConnection->prepare($updateCustomerquery); 
  $prepareQuery->execute(array(
    "id"=>"$id",
    "customerName"=>"$customerName",
     "GlassRighEyeDistanceSph"=>"$GlassRighEyeDistanceSph",
  "GlassRighEyeDistanceCyl"=>"$GlassRighEyeDistanceCyl",
  "GlassRighEyeDistanceAxis"=>"$GlassRighEyeDistanceAxis",
  "GlassRighEyeDistancePrism"=>"$GlassRighEyeDistancePrism",
  "GlassRighEyeDistanceBase"=>"$GlassRighEyeDistanceBase",
  "GlassRighEyeDistanceVA"=>"$GlassRighEyeDistanceVA",
  "GlassRighEyeNearSph"=>"$GlassRighEyeNearSph",
  "GlassRighEyeNearCyl"=>"$GlassRighEyeNearCyl",
  "GlassRighEyeNearAxis"=>"$GlassRighEyeNearAxis",
  "GlassRighEyeNearPrism"=>"$GlassRighEyeNearPrism",
  "GlassRighEyeNearBase"=>"$GlassRighEyeNearBase",
  "GlassRighEyeNearVA"=>"$GlassRighEyeNearVA",
  "GlassLeftEyeDistanceSph"=>"$GlassLeftEyeDistanceSph",
  "GlassLeftEyeDistanceCyl"=>"$GlassLeftEyeDistanceCyl",
  "GlassLeftEyeDistanceAxis"=>"$GlassLeftEyeDistanceAxis",
  "GlassLeftEyeDistancePrism"=>"$GlassLeftEyeDistancePrism",
  "GlassLeftEyeDistanceBase"=>"$GlassLeftEyeDistanceBase",
  "GlassLeftEyeDistanceVA"=>"$GlassLeftEyeDistanceVA",
  "GlassLeftEyeNearSph"=>"$GlassLeftEyeNearSph",
  "GlassLeftEyeNearCyl"=>"$GlassLeftEyeNearCyl",
  "GlassLeftEyeNearAxis"=>"$GlassLeftEyeNearAxis",
  "GlassLeftEyeNearPrism"=>"$GlassLeftEyeNearPrism",
  "GlassLeftEyeNearBase"=>"$GlassLeftEyeNearBase",
  "GlassLeftEyeNearVA"=>"$GlassLeftEyeNearVA",
  "LensRightEyeBrand"=>"$LensRightEyeBrand",
  "LensRightEyeBC"=>"$LensRightEyeBC",
   "LensRightEyeDio"=>"$LensRightEyeDio",
  "LensRightEyeSph"=>"$LensRightEyeSph",
  "LensRightEyeCyl"=>"$LensRightEyeCyl",
  "LensRightEyeAdd"=>"$LensRightEyeAdd",
  "LensRightEyeTint"=>"$LensRightEyeTint",
  "LensRightEyeOZ"=>"$LensRightEyeOZ",
  "LensRightEyeVA"=>"$LensRightEyeVA",
  "LensLeftEyeBrand"=>"$LensLeftEyeBrand",
  "LensLeftEyeBC"=>"$LensLeftEyeBC",
  "LensLeftEyeDio"=>"$LensLeftEyeDio",
  "LensLeftEyeSph"=>"$LensLeftEyeSph",
  "LensLeftEyeCyl"=>"$LensLeftEyeCyl",
  "LensLeftEyeAdd"=>"$LensLeftEyeAdd",
  "LensLeftEyeTint"=>"$LensLeftEyeTint",
  "LensLeftEyeOZ"=>"$LensLeftEyeOZ",
  "LensLeftEyeVA"=>"$LensLeftEyeVA",
  "email"=>"$email",
  "phno"=>"$phno",
  "dateofbirth"=>"$dateofbirth",
  "Age"=>"$Age",
  "dateofjoin"=>"$dateofjoin"

));

         return true;
    }




 public function billingUpdate($billingUpdate){
            
         $id = $billingUpdate['billNo'];
          $Amountpaid = $billingUpdate['totalAmount'];
          $BalanceAmount = $billingUpdate['balanceAmount'];
          $addCustomerquery = 'UPDATE billing SET amountpaid=:amountpaid,BalanceAmount=:BalanceAmount WHERE id=:id';
          $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
          $prepareQuery->execute(array("id"=>"$id","amountpaid"=>"$Amountpaid","BalanceAmount"=>"$BalanceAmount"));
          return true;
    }



 public function billingUpdateforbillingdetails($billingUpdate){
            
         $billno = $billingUpdate['billNo'];
          $Amountpaid = $billingUpdate['totalAmount'];
          $Balanceamount = $billingUpdate['balanceAmount'];
          var_dump($billingUpdate);
          $addCustomerquery = 'UPDATE billing_details SET amountpaid=:amountpaid,Balanceamount=:Balanceamount WHERE billno=:billno';
          $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
          $prepareQuery->execute(array("billno"=>"$billno","amountpaid"=>"$Amountpaid","Balanceamount"=>"$Balanceamount"));
          return true;
    }




 public function addbillingforfirstrow($BillingInfo){
            
       

 $billno = $BillingInfo['billno'];
 $customerid = $BillingInfo['customerid'];
 @$name = $BillingInfo['Name'];
 @$address = $BillingInfo['address'];
 @ $phno = $BillingInfo['phno'];
 $product=$BillingInfo['firstrowproduct'];
 $code=$BillingInfo['firstrowcode'];
 $qty=$BillingInfo['firstrowqty'];
 $amount=$BillingInfo['firstrowamount'];
 $discount=$BillingInfo['firstrowdiscount'];
 $total=$BillingInfo['firstrowtotal'];
 $grandTotal =$BillingInfo['grandTotal'];
 $amountpaid =$BillingInfo['amountpaid'];
 $Balanceamount =$BillingInfo['Balanceamount'];
$dateofentry =$BillingInfo['dateofentry'];

 $addCustomerquery = 'INSERT INTO  billing_details(
  customerid,
  name,
  address,
  phno,
  product,
  code,
  amount,
  discount,
  total,

  grandTotal,billno,amountpaid
  ,Balanceamount,dateofentry,qty) VALUES(:customerid,
  :name,
  :address,:phno,:product,:code,:amount,
  :discount,:total,:grandTotal,:billno,
  :amountpaid
  ,:Balanceamount,:dateofentry,:qty)';

  $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
  $prepareQuery->execute(array(
    "customerid"=>"$customerid",
    "name"=>"$name",
    "address"=>"$address",
    "phno"=>"$phno",
    "product"=>"$product",
    "code"=>"$code",
    "amount"=>"$amount",
    "discount"=>"$discount",
    "total"=>"$total",
     "grandTotal"=>"$grandTotal",
     "billno"=>"$billno",
      "amountpaid"=>"$amountpaid",
    "Balanceamount"=>"$Balanceamount",
    "dateofentry"=>"$dateofentry",
    "qty"=>"$qty"));
  return true;

    }



 public function addbillingforsecondrow($BillingInfo){
               

 $billno = $BillingInfo['billno'];
 $customerid = $BillingInfo['customerid'];
 @$name = $BillingInfo['Name'];
 @$address = $BillingInfo['address'];
 @ $phno = $BillingInfo['phno'];
 $product=$BillingInfo['secondrowproduct'];
 $code=$BillingInfo['secondrowcode'];
 $qty=$BillingInfo['secondrowqty'];
 $amount=$BillingInfo['secondrowamount'];
 $discount=$BillingInfo['secondrowdiscount'];
 $total=$BillingInfo['secondrowtotal'];
 $grandTotal =$BillingInfo['grandTotal'];
  $amountpaid =$BillingInfo['amountpaid'];
 $Balanceamount =$BillingInfo['Balanceamount'];
$dateofentry =$BillingInfo['dateofentry'];


 $addCustomerquery = 'INSERT INTO  billing_details(
 customerid,
  name,
  address,
  phno,
  product,
  code,
  amount,
  discount,
  total,

  grandTotal,billno,amountpaid
  ,Balanceamount,dateofentry,qty) VALUES(:customerid,
  :name,
  :address,:phno,:product,:code,:amount,
  :discount,:total,:grandTotal,:billno,
  :amountpaid
  ,:Balanceamount,:dateofentry,:qty)';




  $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
  $prepareQuery->execute(array(
    "customerid"=>"$customerid",
    "name"=>"$name",
    "address"=>"$address",
    "phno"=>"$phno",
    "product"=>"$product",
    "code"=>"$code",
    "amount"=>"$amount",
    "discount"=>"$discount",
    "total"=>"$total",
     "grandTotal"=>"$grandTotal",
     "billno"=>"$billno",
      "amountpaid"=>"$amountpaid",
    "Balanceamount"=>"$Balanceamount",
    "dateofentry"=>"$dateofentry",
      "qty"=>"$qty"));
  return true;

    }



public function addbillingforthirdrow($BillingInfo){
               

 $billno = $BillingInfo['billno'];
 $customerid = $BillingInfo['customerid'];
 @$name = $BillingInfo['Name'];
 @$address = $BillingInfo['address'];
 @ $phno = $BillingInfo['phno'];
 $product=$BillingInfo['thirdrowproduct'];
 $code=$BillingInfo['thirdrowcode'];
 $qty=$BillingInfo['thirdrowqty'];
 $amount=$BillingInfo['thirdrowamount'];
 $discount=$BillingInfo['thirdrowdiscount'];
 $total=$BillingInfo['thirdrowtotal'];
 $grandTotal =$BillingInfo['grandTotal'];
  $amountpaid =$BillingInfo['amountpaid'];
 $Balanceamount =$BillingInfo['Balanceamount'];
$dateofentry =$BillingInfo['dateofentry'];


 $addCustomerquery = 'INSERT INTO  billing_details(
  customerid,
  name,
  address,
  phno,
  product,
  code,
  amount,
  discount,
  total,

  grandTotal,billno,amountpaid
  ,Balanceamount,dateofentry,qty) VALUES(:customerid,
  :name,
  :address,:phno,:product,:code,:amount,
  :discount,:total,:grandTotal,:billno,
  :amountpaid
  ,:Balanceamount,:dateofentry,:qty)';
  $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
  $prepareQuery->execute(array(
    "customerid"=>"$customerid",
    "name"=>"$name",
    "address"=>"$address",
    "phno"=>"$phno",
    "product"=>"$product",
    "code"=>"$code",
    "amount"=>"$amount",
    "discount"=>"$discount",
    "total"=>"$total",
     "grandTotal"=>"$grandTotal",
     "billno"=>"$billno",
      "amountpaid"=>"$amountpaid",
    "Balanceamount"=>"$Balanceamount",
    "dateofentry"=>"$dateofentry",
      "qty"=>"$qty"));
  return true;

    }




public function addbillingforfourthrow($BillingInfo){
               

 $billno = $BillingInfo['billno'];
 $customerid = $BillingInfo['customerid'];
 @$name = $BillingInfo['Name'];
 @$address = $BillingInfo['address'];
 @ $phno = $BillingInfo['phno'];
 $product=$BillingInfo['fourthrowproduct'];
 $code=$BillingInfo['fourthrowcode'];
 $qty=$BillingInfo['fourthrowqty'];
 $amount=$BillingInfo['fourthrowamount'];
 $discount=$BillingInfo['fourthrowdiscount'];
 $total=$BillingInfo['fourthrowtotal'];
 $grandTotal =$BillingInfo['grandTotal'];
 $amountpaid =$BillingInfo['amountpaid'];
 $Balanceamount =$BillingInfo['Balanceamount'];
$dateofentry =$BillingInfo['dateofentry'];

 $addCustomerquery = 'INSERT INTO  billing_details(
 customerid,
  name,
  address,
  phno,
  product,
  code,
  amount,
  discount,
  total,
  grandTotal,billno,amountpaid
  ,Balanceamount,dateofentry,qty) VALUES(:customerid,
  :name,
  :address,:phno,:product,:code,:amount,
  :discount,:total,:grandTotal,:billno,
  :amountpaid
  ,:Balanceamount,:dateofentry,:qty)';
  $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
  $prepareQuery->execute(array(
    "customerid"=>"$customerid",
    "name"=>"$name",
    "address"=>"$address",
    "phno"=>"$phno",
    "product"=>"$product",
    "code"=>"$code",
    "amount"=>"$amount",
    "discount"=>"$discount",
    "total"=>"$total",
     "grandTotal"=>"$grandTotal",
     "billno"=>"$billno",
     "amountpaid"=>"$amountpaid",
    "Balanceamount"=>"$Balanceamount",
    "dateofentry"=>"$dateofentry",
      "qty"=>"$qty"


     ));
  return true;

    }




public function billing($billingfirstrow)
{

 $billno = $billingfirstrow['billno'];
 $customerid = $billingfirstrow['customerid'];
 $grandTotal =$billingfirstrow['grandTotal'];
 $dateofentry =$billingfirstrow['dateofentry'];
  $amountpaid =$billingfirstrow['amountpaid'];
 $Balanceamount =$billingfirstrow['Balanceamount'];


 $addCustomerquery = 'INSERT INTO  billing(
  customerid,grandTotal,billno,dateofentry,amountpaid,Balanceamount) VALUES(:customerid,
  :grandTotal,:billno, :dateofentry,:amountpaid,:Balanceamount)';
  $prepareQuery = $this->getConnection->prepare($addCustomerquery); 
  $prepareQuery->execute(array(
    "customerid"=>"$customerid",
    "dateofentry"=>"$dateofentry",
     "grandTotal"=>"$grandTotal",
     "billno"=>"$billno",
     "amountpaid"=>"$amountpaid",
    "Balanceamount"=>"$Balanceamount"
     ));
  return true;
}

        public function deleteproducts($id){

              
        $sql = "DELETE FROM customerprofile WHERE id =  :id";
        $prepareQuery = $this->getConnection->prepare($sql);
        $prepareQuery->bindParam(':id', $id, PDO::PARAM_INT);   
        $prepareQuery->execute();
          }





    }


?>

