<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                version="1.0"
>

    <xsl:template match="/">
        <html>
            <head>
                <title>Sitemap - Bubbles Bargain World</title>
                <!-- the favicon for browsers 
                <link rel="icon" href="images/favicon.png">-->
                <style type="text/css">
                    body {
                    font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana;
                    width: 100%;
                    }

                    table {
                    padding: 0;
                    margin: auto;
                    }
                    th {
                    text-align: left;
                    }

                    a {
                    color: black;
                    }
                </style>
            </head>
            <body>
                <h1>Site Map</h1>
                <table border="1">
                    <tr bgcolor="#ffa9a9">
                        <th>URL</th>
                    </tr>
                    <xsl:for-each select="sitemap:urlset/sitemap:url">
                        <tr>
                            <td>
                                <a>
                                    <xsl:attribute name="href">
                                        <xsl:value-of select="sitemap:loc"/>
                                    </xsl:attribute>
                                    <xsl:value-of select="sitemap:loc"/>
                                </a>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>