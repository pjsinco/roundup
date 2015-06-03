@extends('email/_base')

@section('date')
<!--begin_date()-->
<tr>
    <td width='100%'>
        <font face="Arial" size="2" color="#000000">
            <table style="border-collapse: collapse; line-height: 16px;" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                    <tr>
                        <td class="centermepadtop10" style="font-family: helvetica; font-size: 19px; color: #667574; font-weight: 200;" align="left">
                            <span style="font-weight: 400; color: #ef3f23;">Latest posts</span> {{ $email['date'] }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </font>
    </td>
</tr>
<!--end_date()-->
@stop

@section('quote')
<!--begin_quoted()-->
<tr>
    <td width='100%'>
        <font face="Arial" size="2" color="#000000">
            <table style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                    <tr>
                        <td align="center">
                            <table class="fullwidth" style="border-collapse: collapse;" width="480" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td align="center" width="15">
                                            <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15">
                                        </td>
                                        <td align="center">
                                            <table class="fullwidth" style="border-collapse: collapse;" width="400" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-family: helvetica; font-size: 14pt; font-weight: 200; color: #ef3f23; padding-bottom: 15px; border-bottom: 1px solid #efefef;" align="left">
                                                            <a href="{{ $quote['link'] }}" style="color: #ef3f23; text-decoration: none; font-size: 24px;" target="_blank">Quoted
                                                                <!--TRACKCUSTLINKZ-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td align="center" width="15">
                                            <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15">
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
                                            <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15">
                                        </td>
                                        <td align="center">
                                            <table class="fullwidth" style="border-collapse: collapse;" width="400" cellspacing="0" cellpadding="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-family: helvetica; font-size: 24px; color: #414042; line-height: 32px; font-weight: 200; padding-bottom: 12px;" align="center">
                                                            <a href="http://thedo.osteopathic.org/2015/05/amtrak-crash-do-who-treated-victims-lauds-preparation-teamwork/" style="color: #414042; text-decoration: none; font-family: helvetica; font-size: 24px; line-height: 32px; font-weight: 200;" target="_blank">&#8220;{{ $quote['quote'] }}&#8220;</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: helvetica; font-size: 18px; color: #939393; line-height: 25px; font-weight: 200; margin-top: 12px;" align="right">—{{ $quote['speaker'] }} {{ $quote['context'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td align="center" width="15">
                                            <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </font>
    </td>
</tr>
<!--end_quoted()-->
@stop

@section('body')

    @include('articles.show_feature', ['feature' => $feature])

    @foreach ($articles as $article)
        @include('articles.show_' . $article['type'], ['article' => $article])
    @endforeach

@stop
