<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>.: OIL INDUSTRY :.</title>
</head>
    <?php

    $style = [
        /* Layout ------------------------------ */

        'body' => 'margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;',
        'email-wrapper' => 'width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;',

        /* Masthead ----------------------- */

        'email-masthead' => 'padding: 25px 0; text-align: center;',
        'email-masthead_name' => 'font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;',

        'email-body' => 'width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;',
        'email-body_inner' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0;',
        'email-body_cell' => 'padding: 35px;',

        'email-footer' => 'width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;',
        'email-footer_cell' => 'color: #AEAEAE; padding: 35px; text-align: center;',

        /* Body ------------------------------ */

        'body_action' => 'width: 100%; margin: 30px auto; padding: 0; text-align: center;',
        'body_sub' => 'margin-top: 25px; padding-top: 25px; border-top: 1px solid #EDEFF2;',

        /* Type ------------------------------ */

        'anchor' => 'color: #3869D4;',
        'header-1' => 'margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;',
        'paragraph' => 'margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;',
        'paragraph-sub' => 'margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;',
        'paragraph-center' => 'text-align: center;',

        /* Buttons ------------------------------ */

        'button' => 'display: block; display: inline-block; width: 200px; min-height: 20px; padding: 10px;
                     background-color: #3869D4; border-radius: 3px; color: #ffffff; font-size: 15px; line-height: 25px;
                     text-align: center; text-decoration: none; -webkit-text-size-adjust: none;',

        'button--green' => 'background-color: #22BC66;',
        'button--red' => 'background-color: #dc4d2f;',
        'button--blue' => 'background-color: #3869D4;',
    ];
?>

<style>
p {
    text-align: justify;
}
</style>

<body bgcolor="#8d8e90">
    <?php $fontFamily = 'font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;'; ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#8d8e90">
        <tr>
            <td>
                <table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="61">
                                         &nbsp;
                                    </td>
                                    <td width="250">
					<h1>OIL INDUSTRY</h1>
                                    </td>
                                    <td width="287">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td height="46" align="right" valign="middle">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                               &nbsp;
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><hr></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="10%">&nbsp;</td>
                                    <td width="80%" align="left" valign="top">
                                        <table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center">
                                                    <!-- Greeting -->
                                                    <h1 style="{{ $style['header-1'] }}">
                                                        Hello {{ $user->name }},
                                                    </h1>

                                                    <!-- Intro -->

                                                        <p style="{{ $style['paragraph'] }}">
                                                            Click on the below button to verify your email address 
                                                        </p>


                                                    <!-- Action Button -->

                                                        <table style="{{ $style['body_action'] }}" align="center" width="100%" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td align="center">
                                                                    <?php
                                                                        $actionColor = 'button--blue';
                                                                    ?>

                                                                    <a href="{{ url('register/verify/'.$user->email_token) }}"
                                                                        style="{{ $fontFamily }} {{ $style['button'] }} {{ $style[$actionColor] }}"
                                                                        class="button"
                                                                        target="_blank">
                                                                        Verify
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>


                                                    <!-- Outro -->

                                                        <p style="{{ $style['paragraph'] }}">
                                                            Thank you
                                                        </p>


                                                    <!-- Salutation -->
                                                    <p style="{{ $style['paragraph'] }}">
                                                        Regards,<br>{{ config('app.name') }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="10%">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><hr></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <font style="font-family:'Myriad Pro', Helvetica, Arial, sans-serif; color:#231f20; font-size:8px"><strong>If you have any query then contact at our website.</strong></font>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>