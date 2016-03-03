<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:html="http://www.w3.org/TR/REC-html40">

<xsl:template match="/">
  <html>
  <body>
  <h1 color="red">Site Map</h1>
    <table border="1">
      <tr bgcolor="#ffa9a9">
        <th style="text-align:centre">URL</th>
      </tr>
      <xsl:for-each select="sitemap:urlset/sitemap:url">
      <tr>
        <td><a color="#00eded"><xsl:attribute name="href"><xsl:value-of select="sitemap:loc"/></xsl:attribute>
        <xsl:value-of select="sitemap:loc"/></a></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>