<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <div class="row">
        <xsl:for-each select="articles/article">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <xsl:value-of select="title"/>
                        </h3>
                    </div>
                    <div class="card-body">

                        <img class="shadow-sm mb-2 w-100 rounded">
                            <xsl:attribute name="src">
                                <xsl:value-of select="imagefile"/>
                            </xsl:attribute>
                        </img>

                        <p> <!-- get the values from xml using xpath-->
                            <xsl:value-of select="description"/>
                        </p>
                        <xsl:element name="a">
                            <xsl:attribute name="href">
                                <xsl:value-of select="link"/>
                            </xsl:attribute>
                            <xsl:attribute name="class">
                                btn btn-secondary
                            </xsl:attribute>
                            Go to site
                        </xsl:element>

                    </div>
                </div>
            </div>
        </xsl:for-each>
    </div>
</xsl:template>

</xsl:stylesheet>