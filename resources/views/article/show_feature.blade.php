<table style="border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" align="center">
    <tbody>
        <tr>
            <td align="center">
                <table class="fullwidth" style="border-collapse: collapse;" width="480" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{ $article['link'] }}" target="_blank">
                                    <img alt="Image" border="0" class="fullwidth" art="{{ $article['img_alt'] }}" src="{{ $article['img_src'] }}" style="display: block;" width="480" />
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>&#160;</td>
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
                                <img alt="Spacer" border="0" height="15" src="http://amorassoc.informz.net/AmOrAssoc/data/images/TheDo/spacer.gif" style="display: block;" width="15" />
                            </td>
                            <td align="center">
                                <table class="fullwidth" style="border-collapse: collapse;" width="400" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 14px; color: #58595b; line-height: 18px; padding-bottom: 10px; font-weight: normal; text-transform: uppercase; letter-spacing: 1px;" align="center">{{ $article['kicker'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 16pt; color: #ef3f23; line-height: 18px; padding-bottom: 10px;" align="center">
                                                <a href="{{ $article['link'] }}" style="color: #ef3f23; text-decoration: none; font-family: helvetica; font-size: 28px; line-height: 34px; font-weight: 200;" target="_blank">{{ $article['title'] }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-family: helvetica; font-size: 15px; color: #686d75; line-height: 22px; font-weight: normal;" align="center">{{ $article['excerpt'] }}</td>
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
                <a href="{{ $article['link'] }}" target="_blank">
                    <img alt="Read More" border="0" src="http://aoa-do.informz.net/aoa-do/data/images/TheDOResponsive/ReadMore.jpg" style="display: block;" width="214" />
                </a>
            </td>
        </tr>
    </tbody>
</table>
