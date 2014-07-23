<?php

class PackagesTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('packages')->delete();

        $packages = array(
        		['name' => 'Martis Camp',
                    'language' => 'en',
                    'country' => 'United States',
                    'state' => 'California',
                    'city' => 'Truckee',
                    'postal_code' => '96161',
                    'address' => '12000 Lodgetrail Drive',
            		'subdomain' => 'martiscamp', 
            		'logo' => 'martiscamp_logo.png', 
            		'menu_color' => '#000000',
                    'content_font_family' => "Georgia, serif",
            		'menu_font_family' => "Georgia, serif",
            		'menu_font_size' => '20px',
            		'menu_font_color' => '#919191',
                    'menu_font_shadow' => null,
                    'sub_menu_font_color' => '#9b5c03',
                    'sub_menu_hover_color' => '#333333',
            		'background_color' => '#FFFFFF',
                    'content_background_color' => '#FFFFFF',
                    'header_font_color' => '#9b5c03',
                    'header_font_family' => null,
                    'header_section_color' => '#dcdcdc',
                    'font_variant' => 'small-caps',
                    'bold_font' => null,
                    'disable_contact' => 1,
                    'other_contact' => 'If you have questions about Martis Camp, we’d love to hear from you. You can reach us by phone at 1-800-721-9005 or 530-550-3200. You can visit our sales office at 12000 Lodgetrail Drive, Truckee CA 96161.',
                    'favicon' => null,
                    'custom_css' => null,
                    'email_subject' => null,
                    'html_email' => '
                        <table border="0" cellpadding="0" cellspacing="0" width="600">
                          <tbody>
                            <tr>
                              <td height="15" style="background: #DCDCDC;" width="600">
                                &nbsp;</td>
                            </tr>
                            <tr>
                              <td height="15" width="600">
                                <table border="0" cellpadding="0" cellspacing="0" width="600">
                                  <tbody>
                                    <tr>
                                      <td style="background: #DCDCDC;" width="15">
                                        &nbsp;</td>
                                      <td width="570">
                                        <table border="0" cellpadding="0" cellspacing="0" width="570">
                                          <tbody>
                                            <tr>
                                              <td style="background: #DCDCDC; text-align: center; padding: 15px 0 30px 0;" width="570">
                                                <center>
                                                  <img height="95" src="http://martiscamp.cve.io/uploads/logos/martiscamp_logo.png" style="display: block; " width="124" /></center>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="text-align:center;" width="570">
                                                <img src="http://martiscamp.cve.io/uploads/images/MartisCampHeader.jpg" style="display: block;" width="570" /></td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#ffffff" style="color: #333333; font-family: \'Times New Roman\', Times, serif; font-size: 13px; line-height: 18px; padding: 40px;" width="490">
                                                
                                                <p>
                                                  Thank you for your interest in Martis Camp. Following up on your request, I have sent you our Ownership Package, a comprehensive electronic presentation to assist in your review of this very special opportunity at Martis Camp. Kindly call or email me with any questions.</p>
                                                <h2 style="font-size: 18px; font-weight: normal;">
                                                  Contents</h2>
                                                <table border="0" cellpadding="0" cellspacing="0">
                                                  <tbody>
                                                    <tr style="color: #333333; font-family: \'Times New Roman\', Times, serif; font-size: 13px; line-height: 18px;">
                                                      <td valign="top">
                                                        <ul style="color: #333333; font-family: \'Times New Roman\', Times, serif; font-size: 13px; line-height: 18px;">
                                                          <li>
                                                            Discover Martis Camp Video</li>
                                                          <li>
                                                            Ownership Information</li>
                                                          <li>
                                                            Community and Club Membership</li>
                                                        </ul>
                                                      </td>
                                                      <td valign="top">
                                                        <ul style="color: #333333; font-family: \'Times New Roman\', Times, serif; font-size: 13px; line-height: 18px;">
                                                          
                                                        
                                                          <li>
                                                            Martis Camp Lifestyle & Experiences</li>
                                                          <li>
                                                            Your Invitation</li>
                                                        </ul>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                <table border="0" cellpadding="0" cellspacing="0">
                                                  <tbody>
                                                    <tr>
                                                      <td><a href="{!PackageURL}" target="_blank"><img border="0" src="http://cve.io/img/open_package.jpg" style="display: block;" /></a></td>
                                                      <td><a href="{!PackageURL}" target="_blank" style="text-decoration:none"><h3 style="background:#DCDCDC;padding:5px;margin-top:10px;color: #333333; font-family: \'Times New Roman\', Times, serif;">Click Here to Open Ownership Package</h3></a></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                                
                                                <p>
                                                  I look forward to speaking with you soon.</p>
                                                <p>
                                                  Warm Regards,<br />
                                                  <br />
                                                  <strong>Jonas Mikals </strong>&nbsp;&nbsp;&nbsp;Sales Executive<br />
                                                  12000 Lodgetrail Drive&nbsp;&nbsp;&nbsp; Truckee, CA. 96161<br />
                                                  P 530.550.3200&nbsp;&nbsp;&nbsp; F 530.550.3211&nbsp;&nbsp;&nbsp; C 530.386.5945<br />
                                                  <a href="http://martiscamp.com">martiscamp.com</a>&nbsp;&nbsp;&nbsp;<a href="mailto:jmikals@martiscamp.com">jmikals@martiscamp.com</a><br /></p>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td bgcolor="#ffffff" style="text-align: center;padding:0 0 1px 0;" width="570">
                                                <img src="http://martiscamp.cve.io/uploads/images/MartisCampFooter.jpg" style="display: block;" />
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td style="background: #DCDCDC;" width="15">
                                        &nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                            <tr>
                              <td height="15" style="background: #DCDCDC;" width="600">
                                &nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                    '],
                ['name' => 'The Palms',
                    'language' => 'en',
                    'country' => 'Costa Rica',
                    'state' => 'Guanacaste',
                    'city' => 'Playa Flamingo',
                    'postal_code' => null,
                    'address' => null,
                    'subdomain' => 'thepalms', 
                    'logo' => 'thepalms_logo.png', 
                    'menu_color' => '#662701',
                    'content_font_family' => "'Adobe Caslon Pro', 'Adobe Garamond Pro', Georgia, 'Times New Roman', serif",
                    'menu_font_family' => "'Cinzel', serif",
                    'menu_font_size' => '20px',
                    'menu_font_color' => '#FFFFFF',
                    'menu_font_shadow' => null,
                    'sub_menu_font_color' => '#FFFFFF',
                    'sub_menu_hover_color' => '#DDDDDD',
                    'content_background_color' => '#FFFFFF',
                    'background_color' => '#DFD4B4',
                    'header_font_color' => '#bfae73',
                    'header_font_family' => '"Adobe Caslon Pro", "Adobe Garamond Pro", Georgia, "Times New Roman", serif',
                    'header_section_color' => '#beac67',
                    'font_variant' => 'small-caps',
                    'bold_font' => null,
                    'disable_contact' => 0,
                    'other_contact' => null,
                    'favicon' => null,
                    'custom_css' => null,
                    'email_subject' => null,
                    'html_email' => null],
                ['name' => 'Vines of Mendoza - English',
                    'language' => 'en',
                    'country' => 'Argentina',
                    'state' => 'Mendoza Province',
                    'city' => 'Mendoza',
                    'postal_code' => null,
                    'address' => null,
                    'subdomain' => 'vom-en', 
                    'logo' => 'vineyards_logo.png',
                    'menu_color' => '#8d0e3b',
                    'content_font_family' => '"Alright Sans Light", sans-serif',
                    'menu_font_family' => '"Alright Sans Light", sans-serif',
                    'menu_font_size' => '15px',
                    'menu_font_color' => '#FFFFFF',
                    'menu_font_shadow' => null,
                    'sub_menu_font_color' => '#BA6614',
                    'sub_menu_hover_color' => '#893001',
                    'content_background_color' => '#FFFFFF',
                    'background_color' => '#bd6712',
                    'header_font_color' => '#333333',
                    'header_font_family' => '"Alright Sans Regular", sans-serif',
                    'header_section_color' => null,
                    'font_variant' => 'lowercase',
                    'bold_font' => '"Alright Sans Medium", sans-serif',
                    'disable_contact' => 0,
                    'other_contact' => null,
                    'favicon' => '/uploads/images/vines_fav.ico',
                    'custom_css' => "body {
                                        padding-top: 130px;
                                    }

                                    .navbar-inner { 
                                          background-image: url('/uploads/images/mountains_pink_pattern.jpg');
                                          background-repeat: repeat-x;
                                          background-position: -50px bottom;
                                          border: none;
                                    }

                                    .navbar {
                                        box-shadow: none;
                                        border-top: 10px solid #883002;
                                        border-bottom: 10px solid #883002;
                                    }

                                    .navbar .brand, .navbar .nav>li>a {
                                        border: none;
                                    }

                                    .header-nav a {
                                        text-transform: none;
                                    }

                                    .navbar .nav>li>a {
                                        text-transform: uppercase;
                                    }

                                    .section-hr {
                                        width: 100%;
                                        height: 1px;
                                        background: none;
                                        filter: none;
                                        border-top: 1px solid #8d0e3b;
                                    }

                                    h3 {
                                        font-size: 21px;
                                        line-height: 21px;
                                    }

                                    h2 {
                                        font-size: 26px;
                                        line-height: 30px;
                                    }",
                    'email_subject' => 'Your Vines of Mendoza Ownership Information has arrived',
                    'html_email' => '   <style type="text/css">

                                            #outlook a{padding:0;}
                                            #email_content{width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0;}
                                            #email_content .ExternalClass{width:100%;}
                                            .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%;}
                                            .bodytbl{margin:0;padding:0;width:100% !important;}
                                            img{outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block;max-width:100%;}
                                            a img{border:none;}
                                            p{margin:1em 0;}
                                            
                                            table{border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;}
                                            table td{border-collapse:collapse;}
                                            .o-fix table,.o-fix td{mso-table-lspace:0pt;mso-table-rspace:0pt;}
                                            
                                            #email_content,.bodytbl{background-color:#FAFAFA/*Background Color*/;}
                                            
                                            #email_content table{color:#787878/*Text Color*/;}
                                            #email_content td, #email_content p{color:#787878;}
                                            .h1{color:#353535/*Headings*/;}
                                            .h2{color:#353535;}
                                            .quote{color:#AAAAAA;}
                                            .invert,.invert h1,.invert td,.invert p{background-color:#353535;color:#FAFAFA !important;}
                                            
                                            .wrap.header{}
                                            .wrap.body{}
                                            .wrap.body-i{background-color:#353535;}
                                            .wrap.footer{}
                                            .padd{width:20px;}
                                            
                                            #email_content a{color:#00A9E0;}
                                            #email_content a:link,#email_content a:visited,#email_content a:hover{color:#00A9E0/*Contrast*/;}
                                            #email_content .btn,#email_content .btn div,#email_content .btn a,#email_content td.label a{color:#FFFFFF/*Contrast Link Color*/;}
                                            #email_content .btn a, #email_content .btn a img,#email_content td.label{background:#00A8E0/*Button Color*/;}
                                            #email_content .invert .btn a,#email_content .invert .btn a img{background:none;}
                                            
                                            #email_content h1,#email_content h2, #email_content h3,#email_content h4,#email_content h5,#email_content h6{color:#353535;font-family:Helvetica,Arial,sans-serif;font-weight:bold;}
                                            #email_content h1{font-size:24px;letter-spacing:-2px;margin-bottom:6px;margin-top:6px;line-height:24px;}
                                            #email_content h2{font-size:20px;margin-bottom:12px;margin-top:2px;line-height:24px;}
                                            #email_content h3{font-size:18px;margin-bottom:12px;margin-top:2px;line-height:24px;}
                                            #email_content h4{font-size:16px;}
                                            #email_content h5{font-size:14px;}
                                            #email_content h6{font-size:12px;}
                                            #email_content h1 a, #email_content h2 a,#email_content h3 a, #email_content h4 a, #email_content h5 a, #email_content h6 a{color:#00A9E0;}
                                            #email_content h1 a:active,#email_content h2 a:active,#email_content h3 a:active,#email_content h4 a:active,#email_content h5 a:active,#email_content h6 a:active{color:#00A9E0 !important;}
                                            #email_content h1 a:visited,#email_content h2 a:visited,#email_content h3 a:visited,#email_content h4 a:visited,#email_content h5 a:visited,#email_content h6 a:visited{color:#00A9E0 !important;}
                                            .h1{font-family:Helvetica,Arial,sans-serif;font-size:55px;font-weight:bold;line-height:40px !important;letter-spacing:-2px;}
                                            .h2{font-family:Helvetica,Arial,sans-serif;font-size:19px;font-weight:bold;letter-spacing:-1px;line-height:24px;}
                                            .h3{font-family:Helvetica,Arial,sans-serif;font-size:17px;letter-spacing:-1px;line-height:24px;}

                                            #email_content {margin:0;padding:0;}
                                            .bodytbl{margin:0;padding:0;-webkit-text-size-adjust:none;}
                                            .line{border-bottom:1px solid #AAAAAA/*Separator*/;}
                                            #email_content table{font-family:Helvetica,Arial,sans-serif;font-size:12px;}
                                            #email_content td, #email_content p{line-height:20px;}
                                            #email_content ul, #email_content ol{margin-top:20px;margin-bottom:20px;}
                                            #email_content li{line-height:20px;} 
                                            #email_content td, #email_content tr{padding:0;}
                                            .quote{font-family:Helvetica,Arial,sans-serif;font-size:24px;letter-spacing:0;margin-bottom:6px;margin-top:6px;line-height:24px;font-style:italic;}
                                            .small{font-size:10px;color:#787878;line-height:15px;text-transform:uppercase;word-spacing:-1px;margin-bottom:4px;margin-top:6px;}
                                            .plan td{border-right:1px solid #EBEBEB/*Lines*/;border-bottom:1px solid #EBEBEB;text-align:center;}
                                            .plan td.last{border-right:0;}
                                            .plan th{text-align:center;border-bottom:1px solid #EBEBEB;}
                                            #email_content a{text-decoration:none;padding:2px 0px;}
                                            #email_content td.label a{margin:2px 4px;line-height:1em;text-decoration:none;display:block;mso-padding-alt:4pt 4pt 4pt 4pt;}
                                            #email_content td.label{mso-padding-alt:0 4px 4px 4px;}
                                            #email_content .btn{margin-top:10px;display:block;}
                                            #email_content .btn a{display:inline-block;padding:0;line-height:0.5em;}
                                            #email_content .btn img,#email_content .social img{display:inline;margin:0;}
                                            #email_content .social .btn a,#email_content .social .btn a img{background:none;}
                                            .right{text-align:right;}
                                            
                                            #email_content table.textbutton td{background:#00A8E0;padding:0px 14px;color:#FFF;display:block;height:24px;vertical-align:top;}
                                            #email_content table.textbutton a{color:#FFF;font-size:13px;font-weight:100;line-height:24px;width:100%;display:inline-block;}
                                            
                                            #email_content div.preheader{line-height:0px;font-size:0px;height:0px;display:none !important;visibility:hidden;text-indent:-9999px;}
                                            
                                            @media only screen and (max-device-width: 480px) {
                                                #email_content {-webkit-text-size-adjust:120% !important;-ms-text-size-adjust:120% !important;}
                                                #email_content table[class=bodytbl] .wrap{width:460px !important;}
                                                #email_content table[class=bodytbl] .wrap .padd{width:10px !important;}
                                                #email_content table[class=bodytbl] .wrap table{width:100% !important;}
                                                #email_content table[class=bodytbl] .wrap img {max-width:100% !important;height:auto !important;}
                                                #email_content table[class=bodytbl] .wrap .m-padd {padding:0 20px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-w-auto{;width:auto !important;}
                                                #email_content table[class=bodytbl] .wrap .m-100{width:100% !important;max-width:460px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-l{text-align:left !important;}
                                                #email_content table[class=bodytbl] .wrap .h div{letter-spacing:-1px !important;font-size:18px !important;}
                                                #email_content table[class=bodytbl] .m-0{width:0;display:none;}
                                                #email_content table[class=bodytbl] .m-b{display:block;width:100% !important;margin-bottom:20px !important;}
                                                #email_content table[class=bodytbl] .m-1-2{max-width:264px !important;}
                                                #email_content table[class=bodytbl] .m-1-3{max-width:168px !important;}
                                                #email_content table[class=bodytbl] .m-1-4{max-width:120px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac{width:340px !important;max-width:340px !important;margin-left:38px;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-t img{width:339px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-h img{height:192px !important;width:15px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-i img{width:309px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-b img{max-width:406px !important;margin-left:4px;}
                                            }
                                            
                                            @media only screen and (max-device-width: 320px) {
                                                #email_content table[class=bodytbl] .wrap{width:310px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-100{max-width:310px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac{width:239px !important;max-width:239px !important;margin-left:23px;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-t img{width:238px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-h img{height:134px !important;width:11px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-i img{width:216px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-b img{max-width:285px !important;margin-left:-1px;}
                                            }
                                            
                                        </style>

                                        <table id="email_content" class="bodytbl" width="100%" cellspacing="0" cellpadding="0">

                                        <tr>
                                            <td align="center">
                                            
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap">
                                                <tr height="20">
                                                    <td align="center" valign="bottom">
                                                        <div class="preheader"></div> <div class="small"><span>The Vines Private vineyards - Ownership information</span><a name="top"></a></div>
                                                    </td>
                                                </tr>
                                                </table>
                                                
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap">
                                                <tr height="60">
                                                    <td align="left" valign="bottom">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td rowspan="1" align="center" valign="bottom" class="h1">
                                                            <span><img src="http://vom-en.cve.io/uploads/logos/vineyards_logo_black.png" width="200" height="56" border="0"></span>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                                
                                                <!--<table width="600" cellspacing="0" cellpadding="0" class="wrap line"><tr><td height="19">&nbsp;</td></tr></table>-->
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap"><tr><td height="5">&nbsp;</td></tr></table>
                                                

                                        <!-- ☺ header block ends here -->
                                        <!-- Full Size Image start  -->
                                            
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top">
                                                <!-- CONTENT start -->
                                                    <img src="http://vom-en.cve.io/libs/timthumb.php?src=../uploads/images/vines_email_photo.jpg&h=300&w=600" class="m-100" alt="" title="" width="600" height="300" border="0" style="max-width:600px;box-shadow:0px 5px 7px;"  />
                                                <!-- CONTENT end -->
                                                    </td>
                                                </tr>
                                                </table>
                                            
                                        <!-- Full Size Image end   -->
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap"><tr><td height="20">&nbsp;</td></tr></table>


                                                <!-- 1/2 Image Features right start  -->
                                            
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top" align="center">
                                                        <table width="100%" cellpadding="0" cellspacing="0" class="o-fix">
                                                        <tr>
                                                            <td valign="top">
                                                <!-- CONTENT start -->
                                                            
                                                            <table width="600" cellspacing="0" cellpadding="0" align="left">
                                                            <tr>
                                                                <td colspan="2" valign="top" align="left">
                                                                    <h1><span>Detailed Ownership Information is Enclosed</span></h1>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="top" align="left" width="60%">
                                                                    <div><p style="font-size:14px;text-align:justify;">{!PackageMessage}</p></div>
                                                                    <div>
                                                                        <h2 style="margin-bottom:5px"><span>Package Contents:</span></h2>
                                                                        <ul style="margin-top:0px;list-style-type: none;column-count:2;-moz-column-count:2;-webkit-column-count:2;">
                                                                            {!PackageContents}
                                                                        </ul>
                                                                    </div>
                                                                    <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                                                        <tr>
                                                                            <td align="center" width="100%">
                                                                                <div>
                                                                                    <a href="{!PackageURL}"><h1 style="color:#FFF;letter-spacing:1px;margin-top:4px;padding:5px 0px;background-color:#00A8E0">&nbsp;Open Package Now</h1></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </table>
                                                            </td>
                                                <!-- CONTENT end -->
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                            
                                        <!-- 1/2 Image Features right end   -->


                                                <!-- Footer start -->


                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap line"><tr><td height="20">&nbsp;</td></tr></table>
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top" align="center">
                                                        <table width="100%" cellpadding="0" cellspacing="0" class="o-fix">
                                                        <tr>
                                                <!-- CONTENT start -->
                                                            <td valign="top" align="left">
                                                                <table width="600" cellpadding="0" cellspacing="0" align="left">
                                                                <tr>
                                                                    <td class="small" align="center" valign="top">
                                                                        <div><span>You have received this email because you requested more information from The Vines of Mendoza.</span></div>
                                                                    </td>
                                                                </tr>
                                                                </table>
                                                            </td>
                                                <!-- CONTENT end -->
                                                        </tr>
                                                        <tr class="m-0"><td height="24">&nbsp;</td></tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                        <!-- Footer end -->


                                            </td>
                                        </tr>
                                        </table>'],
                ['name' => 'Grand Isle Resort', 
                    'language' => 'en',
                    'country' => 'The Bahamas',
                    'state' => 'Great Exuma',
                    'city' => null,
                    'postal_code' => null,
                    'address' => null,
                    'subdomain' => 'grandisle', 
                    'logo' => 'grandisle_logo.png',
                    'menu_color' => '#b5edf2',
                    'content_font_family' => '"Lato", sans-serif',
                    'menu_font_family' => '"Lato", sans-serif',
                    'menu_font_size' => '17px',
                    'menu_font_color' => '#0060a9',
                    'menu_font_shadow' => null,
                    'sub_menu_font_color' => '#0060a9',
                    'sub_menu_hover_color' => '#3082c1',
                    'content_background_color' => '#e2f9ff',
                    'background_color' => '#0060a9',
                    'header_font_color' => '#0060a9',
                    'header_font_family' => '"Lato", sans-serif',
                    'header_section_color' => '#b2e2e7',
                    'font_variant' => 'small-caps',
                    'bold_font' => null,
                    'disable_contact' => 0,
                    'favicon' => null,
                    'other_contact' => null,
                    'custom_css' => null,
                    'email_subject' => 'Your Grand Isle Ownership Information has arrived',
                    'html_email' => '   <style type="text/css">

                                            #outlook a{padding:0;}
                                            #email_content{width:100% !important;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;margin:0;padding:0;}
                                            #email_content .ExternalClass{width:100%;}
                                            .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%;}
                                            .bodytbl{margin:0;padding:0;width:100% !important;}
                                            img{outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;image-rendering:optimizeQuality;display:block;max-width:100%;}
                                            a img{border:none;}
                                            p{margin:1em 0;}
                                            
                                            table{border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;}
                                            table td{border-collapse:collapse;}
                                            .o-fix table,.o-fix td{mso-table-lspace:0pt;mso-table-rspace:0pt;}
                                            
                                            #email_content,.bodytbl{background-color:#FAFAFA/*Background Color*/;}
                                            
                                            #email_content table{color:#787878/*Text Color*/;}
                                            #email_content td, #email_content p{color:#787878;}
                                            .h1{color:#353535/*Headings*/;}
                                            .h2{color:#353535;}
                                            .quote{color:#AAAAAA;}
                                            .invert,.invert h1,.invert td,.invert p{background-color:#353535;color:#FAFAFA !important;}
                                            
                                            .wrap.header{}
                                            .wrap.body{}
                                            .wrap.body-i{background-color:#353535;}
                                            .wrap.footer{}
                                            .padd{width:20px;}
                                            
                                            #email_content a{color:#00A9E0;}
                                            #email_content a:link,#email_content a:visited,#email_content a:hover{color:#00A9E0/*Contrast*/;}
                                            #email_content .btn,#email_content .btn div,#email_content .btn a,#email_content td.label a{color:#FFFFFF/*Contrast Link Color*/;}
                                            #email_content .btn a, #email_content .btn a img,#email_content td.label{background:#00A8E0/*Button Color*/;}
                                            #email_content .invert .btn a,#email_content .invert .btn a img{background:none;}
                                            
                                            #email_content h1,#email_content h2, #email_content h3,#email_content h4,#email_content h5,#email_content h6{color:#353535;font-family:Helvetica,Arial,sans-serif;font-weight:bold;}
                                            #email_content h1{font-size:24px;letter-spacing:-2px;margin-bottom:6px;margin-top:6px;line-height:24px;}
                                            #email_content h2{font-size:20px;margin-bottom:12px;margin-top:2px;line-height:24px;}
                                            #email_content h3{font-size:18px;margin-bottom:12px;margin-top:2px;line-height:24px;}
                                            #email_content h4{font-size:16px;}
                                            #email_content h5{font-size:14px;}
                                            #email_content h6{font-size:12px;}
                                            #email_content h1 a, #email_content h2 a,#email_content h3 a, #email_content h4 a, #email_content h5 a, #email_content h6 a{color:#00A9E0;}
                                            #email_content h1 a:active,#email_content h2 a:active,#email_content h3 a:active,#email_content h4 a:active,#email_content h5 a:active,#email_content h6 a:active{color:#00A9E0 !important;}
                                            #email_content h1 a:visited,#email_content h2 a:visited,#email_content h3 a:visited,#email_content h4 a:visited,#email_content h5 a:visited,#email_content h6 a:visited{color:#00A9E0 !important;}
                                            .h1{font-family:Helvetica,Arial,sans-serif;font-size:55px;font-weight:bold;line-height:40px !important;letter-spacing:-2px;}
                                            .h2{font-family:Helvetica,Arial,sans-serif;font-size:19px;font-weight:bold;letter-spacing:-1px;line-height:24px;}
                                            .h3{font-family:Helvetica,Arial,sans-serif;font-size:17px;letter-spacing:-1px;line-height:24px;}

                                            #email_content {margin:0;padding:0;}
                                            .bodytbl{margin:0;padding:0;-webkit-text-size-adjust:none;}
                                            .line{border-bottom:1px solid #AAAAAA/*Separator*/;}
                                            #email_content table{font-family:Helvetica,Arial,sans-serif;font-size:12px;}
                                            #email_content td, #email_content p{line-height:20px;}
                                            #email_content ul, #email_content ol{margin-top:20px;margin-bottom:20px;}
                                            #email_content li{line-height:20px;} 
                                            #email_content td, #email_content tr{padding:0;}
                                            .quote{font-family:Helvetica,Arial,sans-serif;font-size:24px;letter-spacing:0;margin-bottom:6px;margin-top:6px;line-height:24px;font-style:italic;}
                                            .small{font-size:10px;color:#787878;line-height:15px;text-transform:uppercase;word-spacing:-1px;margin-bottom:4px;margin-top:6px;}
                                            .plan td{border-right:1px solid #EBEBEB/*Lines*/;border-bottom:1px solid #EBEBEB;text-align:center;}
                                            .plan td.last{border-right:0;}
                                            .plan th{text-align:center;border-bottom:1px solid #EBEBEB;}
                                            #email_content a{text-decoration:none;padding:2px 0px;}
                                            #email_content td.label a{margin:2px 4px;line-height:1em;text-decoration:none;display:block;mso-padding-alt:4pt 4pt 4pt 4pt;}
                                            #email_content td.label{mso-padding-alt:0 4px 4px 4px;}
                                            #email_content .btn{margin-top:10px;display:block;}
                                            #email_content .btn a{display:inline-block;padding:0;line-height:0.5em;}
                                            #email_content .btn img,#email_content .social img{display:inline;margin:0;}
                                            #email_content .social .btn a,#email_content .social .btn a img{background:none;}
                                            .right{text-align:right;}
                                            
                                            #email_content table.textbutton td{background:#00A8E0;padding:0px 14px;color:#FFF;display:block;height:24px;vertical-align:top;}
                                            #email_content table.textbutton a{color:#FFF;font-size:13px;font-weight:100;line-height:24px;width:100%;display:inline-block;}
                                            
                                            #email_content div.preheader{line-height:0px;font-size:0px;height:0px;display:none !important;visibility:hidden;text-indent:-9999px;}
                                            
                                            @media only screen and (max-device-width: 480px) {
                                                #email_content {-webkit-text-size-adjust:120% !important;-ms-text-size-adjust:120% !important;}
                                                #email_content table[class=bodytbl] .wrap{width:460px !important;}
                                                #email_content table[class=bodytbl] .wrap .padd{width:10px !important;}
                                                #email_content table[class=bodytbl] .wrap table{width:100% !important;}
                                                #email_content table[class=bodytbl] .wrap img {max-width:100% !important;height:auto !important;}
                                                #email_content table[class=bodytbl] .wrap .m-padd {padding:0 20px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-w-auto{;width:auto !important;}
                                                #email_content table[class=bodytbl] .wrap .m-100{width:100% !important;max-width:460px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-l{text-align:left !important;}
                                                #email_content table[class=bodytbl] .wrap .h div{letter-spacing:-1px !important;font-size:18px !important;}
                                                #email_content table[class=bodytbl] .m-0{width:0;display:none;}
                                                #email_content table[class=bodytbl] .m-b{display:block;width:100% !important;margin-bottom:20px !important;}
                                                #email_content table[class=bodytbl] .m-1-2{max-width:264px !important;}
                                                #email_content table[class=bodytbl] .m-1-3{max-width:168px !important;}
                                                #email_content table[class=bodytbl] .m-1-4{max-width:120px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac{width:340px !important;max-width:340px !important;margin-left:38px;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-t img{width:339px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-h img{height:192px !important;width:15px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-i img{width:309px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-b img{max-width:406px !important;margin-left:4px;}
                                            }
                                            
                                            @media only screen and (max-device-width: 320px) {
                                                #email_content table[class=bodytbl] .wrap{width:310px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-100{max-width:310px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac{width:239px !important;max-width:239px !important;margin-left:23px;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-t img{width:238px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-h img{height:134px !important;width:11px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-i img{width:216px !important;}
                                                #email_content table[class=bodytbl] .wrap .m-mac-b img{max-width:285px !important;margin-left:-1px;}
                                            }
                                            
                                        </style>

                                        <table id="email_content" class="bodytbl" width="100%" cellspacing="0" cellpadding="0">

                                        <tr>
                                            <td align="center">
                                            
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap">
                                                <tr height="20">
                                                    <td align="center" valign="bottom">
                                                        <div class="preheader"></div> <div class="small"><span><div contenteditable="true">Your Grand Isle ownership information has arrived.</div></span><a name="top"></a></div>
                                                    </td>
                                                </tr>
                                                </table>
                                                
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap">
                                                <tr height="80">
                                                    <td align="left" valign="bottom">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td rowspan="1" align="center" valign="bottom" class="h1">
                                                            <span><img src="http://grandisle.cve.io/uploads/logos/grandisle_logo.png" width="175" height="119" border="0"></span>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap"><tr><td height="20">&nbsp;</td></tr></table>
                                                

                                        <!-- ☺ header block ends here -->
                                        <!-- Full Size Image start  -->
                                            
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top">
                                                <!-- CONTENT start -->
                                                    <img src="http://grandisle.cve.io/libs/timthumb.php?src=../uploads/images/grandisle_2-1.jpg&h=260&w=600" class="m-100" alt="" title="" width="600" height="260" border="0" style="max-width:600px;box-shadow:0px 5px 7px;"  />
                                                <!-- CONTENT end -->
                                                    </td>
                                                </tr>
                                                </table>
                                            
                                        <!-- Full Size Image end   -->
                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap"><tr><td height="20">&nbsp;</td></tr></table>


                                                <!-- 1/2 Image Features right start  -->
                                            
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top" align="center">
                                                        <table width="100%" cellpadding="0" cellspacing="0" class="o-fix">
                                                        <tr>
                                                            <td valign="top">
                                                <!-- CONTENT start -->
                                                            
                                                            <table width="600" cellspacing="0" cellpadding="0" align="left">
                                                            <tr>
                                                                <td colspan="2" valign="top" align="left">
                                                                    <div contenteditable="true"><h1>Detailed Ownership Information is Enclosed</h1></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="top" align="left" width="60%">
                                                                    <div><div contenteditable="true"><p style="font-size:14px;text-align:justify;">{!PackageMessage}</p></div></div>
                                                                    <div>
                                                                        <div contenteditable="true">
                                                                          <h2 style="margin-bottom:5px">Package Contents:</h2>
                                                                        </div>
                                                                        <div contenteditable="true">
                                                                          <ul style="margin-top:0px;list-style-type: none;column-count:2;-moz-column-count:2;-webkit-column-count:2;">
                                                                              {!PackageContents}
                                                                          </ul>
                                                                        </div>
                                                                    </div>
                                                                    <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                                                        <tr>
                                                                            <td align="center" width="100%">
                                                                                <div>
                                                                                    <a href="{!PackageURL}"><h1 style="color:#FFF;letter-spacing:1px;margin-top:4px;padding:5px 0px;background-color:#00A8E0">&nbsp;Open Package Now</h1></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </table>
                                                            </td>
                                                <!-- CONTENT end -->
                                                        </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                            
                                        <!-- 1/2 Image Features right end   -->


                                                <!-- Footer start -->


                                                <table width="600" cellspacing="0" cellpadding="0" class="wrap line"><tr><td height="20">&nbsp;</td></tr></table>
                                                <table width="600" cellpadding="0" cellspacing="0" class="wrap">
                                                <tr>
                                                    <td valign="top" align="center">
                                                        <table width="100%" cellpadding="0" cellspacing="0" class="o-fix">
                                                        <tr>
                                                <!-- CONTENT start -->
                                                            <td valign="top" align="left">
                                                                <table width="600" cellpadding="0" cellspacing="0" align="left">
                                                                <tr>
                                                                    <td class="small" align="left" valign="top">
                                                                        <div contenteditable="true"><span>You have received this email because you requested more information from Grand Isle Resort and Spa.</span></div>
                                                                        <span>Powered by <a href="http://clearviewexpress.com" target="_blank">Clearview Express</a>, All rights reserved.</span>
                                                                    </td>
                                                                </tr>
                                                                </table>
                                                            </td>
                                                <!-- CONTENT end -->
                                                        </tr>
                                                        <tr class="m-0"><td height="24">&nbsp;</td></tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </table>
                                        <!-- Footer end -->


                                            </td>
                                        </tr>
                                        </table>'],
            ['name' => 'Vines of Mendoza - Español',
                'language' => 'esp',
                'country' => 'Argentina',
                'state' => 'Mendoza Province',
                'city' => 'Mendoza',
                'postal_code' => null,
                'address' => null,
                'subdomain' => 'vom-esp', 
                'logo' => 'vineyards_logo.png',
                'menu_color' => '#8d0e3b',
                'content_font_family' => '"Alright Sans Light", sans-serif',
                'menu_font_family' => '"Alright Sans Light", sans-serif',
                'menu_font_size' => '15px',
                'menu_font_color' => '#FFFFFF',
                'menu_font_shadow' => null,
                'sub_menu_font_color' => '#BA6614',
                'sub_menu_hover_color' => '#893001',
                'content_background_color' => '#FFFFFF',
                'background_color' => '#bd6712',
                'header_font_color' => '#333333',
                'header_font_family' => '"Alright Sans Regular", sans-serif',
                'header_section_color' => null,
                'font_variant' => 'lowercase',
                'bold_font' => '"Alright Sans Medium", sans-serif',
                'disable_contact' => 0,
                'other_contact' => null,
                'favicon' => '/uploads/images/vines_fav.ico',
                'custom_css' => "body {
                                    padding-top: 130px;
                                }

                                .navbar-inner { 
                                      background-image: url('/uploads/images/mountains_pink_pattern.jpg');
                                      background-repeat: repeat-x;
                                      background-position: -50px bottom;
                                      border: none;
                                }

                                .navbar {
                                    box-shadow: none;
                                    border-top: 10px solid #883002;
                                    border-bottom: 10px solid #883002;
                                }

                                .navbar .brand, .navbar .nav>li>a {
                                    border: none;
                                }

                                .header-nav a {
                                    text-transform: none;
                                }

                                .navbar .nav>li>a {
                                    text-transform: uppercase;
                                }

                                .section-hr {
                                    width: 100%;
                                    height: 1px;
                                    background: none;
                                    filter: none;
                                    border-top: 1px solid #8d0e3b;
                                }

                                h3 {
                                    font-size: 21px;
                                    line-height: 21px;
                                }

                                h2 {
                                    font-size: 26px;
                                    line-height: 30px;
                                }",
                'email_subject' => null,
                'html_email' => null],
            ['name' => 'Vines of Mendoza - Português',
                'language' => 'pt',
                'country' => 'Argentina',
                'state' => 'Mendoza Province',
                'city' => 'Mendoza',
                'postal_code' => null,
                'address' => null,
                'subdomain' => 'vom-pt', 
                'logo' => 'vineyards_logo.png',
                'menu_color' => '#8d0e3b',
                'content_font_family' => '"Alright Sans Light", sans-serif',
                'menu_font_family' => '"Alright Sans Light", sans-serif',
                'menu_font_size' => '15px',
                'menu_font_color' => '#FFFFFF',
                'menu_font_shadow' => null,
                'sub_menu_font_color' => '#BA6614',
                'sub_menu_hover_color' => '#893001',
                'content_background_color' => '#FFFFFF',
                'background_color' => '#bd6712',
                'header_font_color' => '#333333',
                'header_font_family' => '"Alright Sans Regular", sans-serif',
                'header_section_color' => null,
                'font_variant' => 'lowercase',
                'bold_font' => '"Alright Sans Medium", sans-serif',
                'disable_contact' => 0,
                'other_contact' => null,
                'favicon' => '/uploads/images/vines_fav.ico',
                'custom_css' => "body {
                                    padding-top: 130px;
                                }

                                .navbar-inner { 
                                      background-image: url('/uploads/images/mountains_pink_pattern.jpg');
                                      background-repeat: repeat-x;
                                      background-position: -50px bottom;
                                      border: none;
                                }

                                .navbar {
                                    box-shadow: none;
                                    border-top: 10px solid #883002;
                                    border-bottom: 10px solid #883002;
                                }

                                .navbar .brand, .navbar .nav>li>a {
                                    border: none;
                                }

                                .header-nav a {
                                    text-transform: none;
                                }

                                .navbar .nav>li>a {
                                    text-transform: uppercase;
                                }

                                .section-hr {
                                    width: 100%;
                                    height: 1px;
                                    background: none;
                                    filter: none;
                                    border-top: 1px solid #8d0e3b;
                                }

                                h3 {
                                    font-size: 21px;
                                    line-height: 21px;
                                }

                                h2 {
                                    font-size: 26px;
                                    line-height: 30px;
                                }",
                'email_subject' => null,
                'html_email' => null]
        );

        // Uncomment the below to run the seeder
        DB::table('packages')->insert($packages);
        
        /*
        foreach($packages as $key => $package) {
            $id = $key + 1;
            DB::table('packages')->where('id', $id)->update($package);
            echo "Package ({$id}) updated!\n";
        }
*/
    }

}