<?php
    
    /*$dbhost="127.0.0.1:3306";
    $dbuser="u882545907_vidhylawarcade";
    $dbpass="Shanu@123";
    $dbname="u882545907_vidhylawarcade";*/

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="vidhylaw";
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn)
    {
        die("Could not connect to the database".mysqli_connect_error());
    }

    if(!isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']))
    {
        exit('Empty Field(s)');
    }

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']))
    {
        exit('Values Empty');
    }
     
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $greet=$_POST['greet'];
    $sql= "INSERT into contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";

    mysqli_query($conn,$sql);

    //$to="rajiv@vidhylawarcade.com"; // admin
    $to="harshitapatni06@gmail.com";
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: $email" . "\r\n";
    $subject = "Message Received from $email";
    $msg = '<html>
                    <body>
                        <p>Dear Admin</p>
                        <p>
                            You have received a message from '.$name.' at VidhyLaw Arcade Website. 
                        </p>
                        <p>
                            The details of the inquiry are as follows:<br>
                            Name: '.$name.'<br>
                            Contact No.: '.$phone.'<br>
                            EmailID: '.$email.'<br>
                            Message: '.$message.'<br>
                        </p>
                        <p>
                        Thanks,<br>
                        '.$name.'
                        </p>
                    </body>
                </html>';     
    $sent= mail( $to, $subject, $msg, $headers ); 

    $to = $email;
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: NO-REPLY<no-reply@vidhylawarcade.com>" . "\r\n";
    $subject = "Response to Your Inquiry - VidhyLaw Arcade";   
    $msg = 
    '<html>

    <body alink="#eaa636" vlink="#eaa636" alink="#eaa636">
        <table class="main contenttable" align="center" style="width: 600px;  font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: georgia, sans-serif;color: #000000; rgba(240, 240, 207, 0.741);font-size: 13px;line-height: 19.5px;">
            <tr background="https://ibb.co/dK2M3cn" style="background-size: cover; background-repeat: no-repeat;background-position: center;">
                <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;">
                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: georgia, sans-serif;">
                        <tr style="text-align:center!important">
                            <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none; color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;text-align: center;>
                                    <a href=" https://vidhylawarcade.com "><img class="top-image " src="https://vidhylawarcade.com/images/logo.png " style=" line-height: 50px;padding: 20px; " alt="Vidhylaw Arcade Logo "></a>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top " class="side title " style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;vertical-align:
                                top;border-top: none; ">
                                    <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: georgia, sans-serif; ">
                                        <tr>
                                            <td class="head-title " style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 22px;line-height: 33px;font-weight:
                                bold; text-align: center; ">
                                                <div class="mktEditable " id="main_title ">
                                                    Thank You
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sub-title " style="border-collapse: collapse;border: 0;margin: 0;padding: 0;padding-top:0px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 15px;line-height:
                                22.5px;font-weight: bold;text-align: center; ">
                                                <div class="mktEditable " id="intro_title ">
                                                    For Contacting Us
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top-padding " style="border-collapse: collapse;border: 0;margin: 0;padding: 13px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px; "></td>
                                        </tr>
                                        <tr>
                                            <td class="content-copy " style="border-collapse: collapse;border: 0;margin: 13px;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;letter-spacing: 0.25px; ">
                                                <div class="mktEditable " id="main_content ">
                                                    '.$greet.' '.$name.',
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top-padding " style="border-collapse: collapse;border: 0;margin: 0;padding: 6.5px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px; "></td>
                                        </tr>
                                            <tr>
                                            <td class="content-copy " style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;letter-spacing: 0.25px; ">
                                                <div class="mktEditable " id="main_content ">
                                                    <p>We have successfully received your following message:</p>
                                                    <p>" '.$message.' "</p>
                                                    <p> We look forward to assisting you and finding the best possible solution to your situation.</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content-copy " style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;letter-spacing: 0.25px; ">
                                                <div class="mktEditable " id="main_content ">
                                                    <p>If you have any further inquiry, or require additional assistance, please feel free to contact us either by phone or email.</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center " style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px; ">
                                                <table class="button " style="text-align: center; font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: georgia, sans-serif; ">
                                                    <tr style="display: flex!important; flex-wrap: wrap!important; justify-content: space-around!important ">
                                                        
                                                        <td style="border-collapse: collapse;border: 0;margin: 10px 20px ;padding: 0px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;text-align:
                                center;background-color: #eaa636;border-radius: 5px; ">
                                                            <a href="tel:9999999999 " class="mktEditable " id="cta_button_2 " style="font-weight: bold;letter-spacing: 1px;line-height: 30px;text-align: center;text-decoration: none;color: white;font-family:
                                georgia, sans-serif;font-size: 13px;display: inline-block;text-transform: uppercase;margin: 0;padding: 10px 25px;-webkit-text-size-adjust: none; ">Call</a>
                                                        </td>
                                                        <td style="border-collapse: collapse;border: 0;margin: 10px 20px;padding: 0;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px;text-align:
                                center;background-color: #eaa636;border-radius: 5px; ">
                                                            <a href="mailto:rajiv@vidhylawarcade.com " class="mktEditable " id="cta_button_2 " style="font-weight: bold;letter-spacing: 1px;line-height: 30px;text-align: center;text-decoration: none;color:
                                white;font-family: georgia, sans-serif;font-size: 13px;display: inline-block;text-transform: uppercase;margin: 0;padding: 10px 25px;-webkit-text-size-adjust: none; ">E-mail</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top-padding " style="border-collapse: collapse;border: 0;margin: 0;padding: 80px;-webkit-text-size-adjust: none;color: #000000;font-family: georgia, sans-serif;font-size: 13px;line-height: 19.5px; "></td>
                                        </tr>
                                        <tr>
                                            <td align="center " style="border-collapse: collapse;border: 0;margin: 0;padding: 30px 0px 0px 0px;-webkit-text-size-adjust: none;color: #ffffff;font-family: georgia, sans-serif;font-size: 12px;line-height: 18px; letter-spacing: 0.25px;">
                                                <div class="mktEditable " id="unsubscribe_info ">
                                                    <p>Thank you once again for considering Vidhylaw for your legal needs.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
        
        
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        
        </html>';
    
    $sent= mail( $to, $subject, $msg, $headers ); 

    if(!$sent)
    {
        echo "notsent";
    }
    else{
        echo "sent";
    }
    $conn->close();
?>
