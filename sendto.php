<?php

	header ('content-type:text/html; charset=utf-8');

	$CompanyName=$_POST['CompanyName'];
    $Website=$_POST['Website'];
    $ContactPerson=$_POST['ContactPersonRadio'];
    $ContactPersonName=$_POST['ContactPersonName'];
    $Email=$_POST['Email'];
    $Title=$_POST['Title'];
    $Tel=$_POST['Tel'];
    $Fax=$_POST['Fax'];
    $Mobile=$_POST['Mobile'];
    $Country=$_POST['Country'];
    $Skype=$_POST['Skype'];
    $State=$_POST['State'];
    $City=$_POST['City'];
    $ZIPCode=$_POST['ZIPCode'];
    $Address=$_POST['Address'];
    $CustomerIdentity=$_POST['CustomerIdentity'];
    $CompanyPeople=$_POST['CompanyPeople'];
    $SearchInfo=$_POST['SearchInfo'];
    $SearchInfoOther=$_POST['SearchInfoOther'];
    $request=$_POST['request'];
    $SendCatalog=$_POST['SendCatalog'];

    echo $CompanyName."<br>".$Website."<br>".$ContactPerson."<br>".$ContactPersonName."<br>".$Email."<br>".$Title."<br>".$Tel."<br>".$Fax."<br>".$Mobile."<br>".$Skype."<br>".$Country."<br>".$ZIPCode."<br>".$State."<br>".$Address."<br>".$CustomerIdentity."<br>".$CompanyPeople."<br>".$SearchInfo."<br>".$request."<br>".$SendCatalog;
?>
<p>test html in php <?php echo $CompanyName ?></p>