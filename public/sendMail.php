<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Allow-Headers "origin, x-requested-with, content-type"');
// header('Access-Control-Allow-Methods "PUT, GET, POST, DELETE, OPTIONS"');
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require '../vendor/autoload.php';
// If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>    <!--[if gte mso 9]><xml>     <o:OfficeDocumentSettings>      <o:AllowPNG/>      <o:PixelsPerInch>96</o:PixelsPerInch>     </o:OfficeDocumentSettings>    </xml><![endif]-->    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    <meta name="viewport" content="width=device-width">    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->    <title></title>            <style type="text/css" id="media-query">      body {  margin: 0;  margin-top: 50px;  padding: 0; }table, tr, td {  vertical-align: top;  border-collapse: collapse; }.ie-browser table, .mso-container table {  table-layout: fixed; }* {  line-height: inherit; }a[x-apple-data-detectors=true] {  color: inherit !important;  text-decoration: none !important; }[owa] .img-container div, [owa] .img-container button {  display: block !important; }[owa] .fullwidth button {  width: 100% !important; }[owa] .block-grid .col {  display: table-cell;  float: none !important;  vertical-align: top; }.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {  width: 500px !important; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {  line-height: 100%; }.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {  width: 164px !important; }.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {  width: 328px !important; }.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {  width: 250px !important; }.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {  width: 166px !important; }.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {  width: 125px !important; }.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {  width: 100px !important; }.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {  width: 83px !important; }.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {  width: 71px !important; }.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {  width: 62px !important; }.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {  width: 55px !important; }.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {  width: 50px !important; }.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {  width: 45px !important; }.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {  width: 41px !important; }@media only screen and (min-width: 520px) {  .block-grid {    width: 500px !important; }  .block-grid .col {    display: table-cell;    Float: none !important;    vertical-align: top; }    .block-grid .col.num12 {      width: 500px !important; }  .block-grid.mixed-two-up .col.num4 {    width: 164px !important; }  .block-grid.mixed-two-up .col.num8 {    width: 328px !important; }  .block-grid.two-up .col {    width: 250px !important; }  .block-grid.three-up .col {    width: 166px !important; }  .block-grid.four-up .col {    width: 125px !important; }  .block-grid.five-up .col {    width: 100px !important; }  .block-grid.six-up .col {    width: 83px !important; }  .block-grid.seven-up .col {    width: 71px !important; }  .block-grid.eight-up .col {    width: 62px !important; }  .block-grid.nine-up .col {    width: 55px !important; }  .block-grid.ten-up .col {    width: 50px !important; }  .block-grid.eleven-up .col {    width: 45px !important; }  .block-grid.twelve-up .col {    width: 41px !important; } }@media (max-width: 520px) {  .block-grid, .col {    min-width: 320px !important;    max-width: 100% !important; }  .block-grid {    width: calc(100% - 40px) !important; }  .col {    width: 100% !important; }    .col > div {      margin: 0 auto; }  img.fullwidth {    max-width: 100% !important; } }    </style>		</head><body class="clean-body" style="margin: 0; padding: 0;-webkit-text-size-adjust: 100%;">  <!--[if IE]><div class="ie-browser"><![endif]-->  <!--[if mso]><div class="mso-container"><![endif]-->  <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #D7E3BF; width: 700px; margin-top: 50px;">    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #D7E3BF;"><![endif]-->    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid four-up">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="125" style=" width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num3" style="Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <div align="center" class="img-container center fullwidth" style="padding-right: 0px;  padding-left: 0px;"><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->  <img class="center fullwidth" align="center" border="0" src="http://i.imgur.com/HcThrLJ.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 125px; margin-top: 10px;" width="125"><!--[if mso]></td></tr></table><![endif]--></div>                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>              <!--[if (mso)|(IE)]></td><td align="center" width="125" style=" width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num3" style="Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>              <!--[if (mso)|(IE)]></td><td align="center" width="125" style=" width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num3" style="Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>              <!--[if (mso)|(IE)]></td><td align="center" width="125" style=" width:125px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num3" style="Float: left;max-width: 320px;min-width: 125px;width: 125px;width: calc(97625px - 19500%);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <div align="center" class="img-container center fullwidth" style="padding-right: 0px;  padding-left: 0px;"><!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]--><div style="line-height:15px;font-size:1px">&#160;</div>  <img class="center fullwidth" align="center" border="0" src="http://i.imgur.com/QZjM22J.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: 0;height: auto;float: none;width: 100%;max-width: 125px" width="125"><!--[if mso]></td></tr></table><![endif]--></div>                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">    <div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 12px;line-height: 14px"><span style="font-size: 20px; line-height: 24px"><strong>You have a new message in GDX Chat</strong></span></p></div></div> </div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>         <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 12px;line-height: 14px"><span style="font-size: 20px; line-height: 24px">Hi <strong>' . $_POST['toName'] . '</strong>, you have a new message from <strong>' . $_POST['fromName'] . '</strong>.</span></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px">' . $_POST['message'] . '<br><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px"><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>    <div style="background-color:transparent;">      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">        <div style="border-collapse: collapse;display: table;width: 100%;">          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">              <div style="background-color: transparent; width: 100% !important;">              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]--><div style="color:#555555;line-height:120%;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">		<div style="font-size:12px;line-height:14px;color:#555555;font-family:Arial, \'Helvetica Neue\', Helvetica, sans-serif;text-align:left;"><div style="font-size:12px; line-height:14px;"><p style="margin: 0;font-size: 14px;line-height: 16px;text-align: center"><strong>Copyright&#160;© 2017 Georgia Defense Exchange. All rights reserved.</strong><br></p></div></div>	</div><!--[if mso]></td></tr></table><![endif]-->                                <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->              </div>            </div>          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->        </div>      </div>    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->  </div>  <!--[if (mso)|(IE)]></div><![endif]--></body></html>';
$from = new SendGrid\Email($_POST['fromName'], $_POST['from-email']);
$subject = "Georgia Defense Exchange | New Message from " . $_POST['fromName'];
$to = new SendGrid\Email($_POST['toName'], $_POST['to-email']);
$content = new SendGrid\Content("text/html", $body);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$sg = new \SendGrid('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');
$response = $sg->client->mail()->send()->post($mail);
print_r($response);