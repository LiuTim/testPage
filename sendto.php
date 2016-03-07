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

    $sys_time=date('Y-m-d H:i:s');

    $mailContent = '<table align="center" cellpadding="5" cellspacing="2" width="100%">
                        <tr>
                            <td align="center" width="10%" class="name">留單時間</td>
                            <td align="left" width="40%"  class="value">'.$sys_time.'</td>
                        </tr>
                         <tr>
                            <td align="center" width="10%" class="name">Company Name : </td>
                            <td align="left" width="40%"  class="value">'.$CompanyName.'</td>
                            <td align="center" width="10%" class="name">Website : </td>
                            <td align="left" width="40%"  class="value">'.$Website.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Contact Person : </td>
                            <td align="left" width="20%"  class="value">'.$ContactPerson.'</td>
                            <td align="center" width="70%" class="value">'.$ContactPersonName.' </td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Email : </td>
                            <td align="left" width="40%"  class="value">'.$Email.'</td>
                            <td align="center" width="10%" class="name">Title : </td>
                            <td align="left" width="40%"  class="value">'.$Title.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Tel : </td>
                            <td align="left" width="40%"  class="value">'.$Tel.'</td>
                            <td align="center" width="10%" class="name">Fax : </td>
                            <td align="left" width="40%"  class="value">'.$Fax.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Moblie : </td>
                            <td align="left" width="40%"  class="value">'.$Moblie.'</td>
                            <td align="center" width="10%" class="name">Country : </td>
                            <td align="left" width="40%"  class="value">'.$Country.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Skype : </td>
                            <td align="left" width="40%"  class="value">'.$Skype.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">State/Province : </td>
                            <td align="left" width="40%"  class="value">'.$State.'</td>
                            <td align="center" width="10%" class="name">City : </td>
                            <td align="left" width="40%"  class="value">'.$City.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">ZIP CODE : </td>
                            <td align="left" width="40%"  class="value">'.$ZIP.'</td>
                            <td align="center" width="10%" class="name">Address : </td>
                            <td align="left" width="40%"  class="value">'.$Address.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">You are a  </td>
                            <td align="left" width="40%" class="name">'.$CustomerIdentity.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">How many people </td>
                            <td align="left" width="40%" class="value">'.$CustomerIdentity.'in your company</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">How do you know about our company </td>
                            <td align="left" width="20%" class="value">'.$SearchInfo.'</td>
                            <td align="left" width="20%" class="value">'.$SearchInfoOther.'</td>
                        </tr>
                        <tr>
                            <td align="left" width="10%" class="value">'.$request.'</td>
                        </tr>
                        <tr>
                            <td align="center" width="10%" class="name">Send Catalog </td>
                            <td align="left" width="40%" class="value">'.$SendCatalog.'</td>
                        </tr>
                    </table>';

    echo $mailContent;

    include("webadmin/mailer/class.phpmailer.php");

    $mail             = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->CharSet    = "utf-8";
    $mail->Encoding   = "base64";

    $mail->Username   = "lchangchih@gmail.com";  
    $mail->Password   = "";  //需要輸入gmail password
    //需要設定gmail登入和安全性，設定「允許安全性較低的應用程式存取您的帳戶」

    $mail->From       = "lchangchih@gmail.com";
    $mail->FromName   = "findlight test"; //可以照自己的意思輸入

    $mail->SingleTo   =true;

    $email="tim@activa.com.tw";
    // 收件者信箱
    $name="activaTim";
    // 收件者的名稱or暱稱

    $mail->AddAddress($email,$name);

    $mail->Subject    = "test subject";

    $mail->Body       = "content";  

    $mail->IsHTML(true); // send as HTML


    /*if(!$mail->Send()){
    echo "寄信發生錯誤：" . $mail->ErrorInfo;
    //如果有錯誤會印出原因
    }
    else{ 
    echo "寄信成功";
    }*/

?>