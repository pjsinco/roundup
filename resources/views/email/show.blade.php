@extends('email/_base')

@section('date')
<table style="border-collapse: collapse; line-height: 16px;" width="100%" cellspacing="0" cellpadding="0" align="center">
    <tbody>
        <tr>
            <td class="centermepadtop10" style="font-family: helvetica; font-size: 19px; color: #667574; font-weight: 200;" align="left">
                <span style="font-weight: 400; color: #ef3f23;">Latest posts</span> {{ $email['date'] }}
            </td>
        </tr>
    </tbody>
</table>
@stop

@section('quote')
<table style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" align="center">
    <tbody>
        <tr>
            <td align="center">
                <table class="fullwidth" style="border-collapse: collapse;" width="480" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                        <tr>
                            <td align="center" width="15">
                                <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15" />
                            </td>
                            <td align="center">
                                <table class="fullwidth" style="border-collapse: collapse;" width="400" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 14pt; font-weight: 200; color: #ef3f23; padding-bottom: 15px; border-bottom: 1px solid #efefef;" align="left">
                                                <a href="#" style="color: #ef3f23; text-decoration: none; font-size: 24px;" target="_blank">Quoted</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&#160;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td align="center" width="15">
                                <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table class="fullwidth" style="border-collapse: collapse;" width="480" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                        <tr>
                            <td align="center" width="15">
                                <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15" />
                            </td>
                            <td align="center">
                                <table class="fullwidth" style="border-collapse: collapse;" width="400" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 24px; color: #414042; line-height: 32px; font-weight: 200; padding-bottom: 12px;" align="center">&#8220;{{ $quote['quote'] }}&#8221;</td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 18px; color: #939393; line-height: 25px; font-weight: 200; margin-top: 12px;" align="right">&#8212;{{ $quote['speaker'] }}, fringilla dapibus elit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td align="center" width="15">
                                <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
@stop

