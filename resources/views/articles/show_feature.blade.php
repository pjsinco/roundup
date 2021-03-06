<!--begin_news()-->
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
                                        <td>
                                            <a href="{{ $feature['link'] }}" target="_blank">
                                                <img alt="Image" border="0" alt="{{ $feature['img_alt'] }}" class="fullwidth" src="{{ $feature['img_src'] }}" style="display: block;" width="480" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
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
                                                        <td style="font-family: helvetica; font-size: 14px; color: #58595b; line-height: 18px; padding-bottom: 10px; font-weight: normal; text-transform: uppercase; letter-spacing: 1px;" align="center">{{ $feature['kicker'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: helvetica; font-size: 16pt; color: #ef3f23; line-height: 18px; padding-bottom: 10px;" align="center">
                                                            <a href="{{ $feature['link'] }}" style="color: #ef3f23; text-decoration: none; font-family: helvetica; font-size: 28px; line-height: 34px; font-weight: 200;" target="_blank">{{ $feature['title'] }}</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: helvetica; font-size: 15px; color: #686d75; line-height: 22px; font-weight: normal;" align="center">{{ $feature['excerpt'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
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
                            <a href="{{ $feature['link'] }}" target="_blank">
                                <img alt="Read More" border="0" src="http://aoa-do.informz.net/aoa-do/data/images/TheDOResponsive/ReadMore.jpg" style="display: block;" width="214">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </font>
    </td>
</tr>
<!--end_news()-->

@if ($feature['bottom_rule'])
<!--begin_news()-->
<tr>
    <td width='100%'>
        <font face="Arial" size="2" color="#000000">
            <table style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                    <tr>
                        <td align="center">
                            <table class="fullwidth" style="border-collapse: collapse; height: 50px;" width="400" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td style="border-bottom: 1px solid #efefef;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
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
<!--end_news()-->
@endif

