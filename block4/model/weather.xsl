<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <xsl:for-each select="current">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Current weather in Livingston
                    </div>
                    <div class="card-body">
                        <p> <!-- get the values from xml using xpath-->
                            Current Weather: <xsl:value-of select="weather/@value"/>
                            <br/>
                            Temperature: <xsl:value-of select="temperature/@value"/> celsius
                            <br/>
                            Wind Speed: <xsl:value-of select="wind/speed/@value"/> m/s
                            <br/>
                            Wind Direction: <xsl:value-of select="wind/direction/@name"/>
                            <br/>
                            Humidity: <xsl:value-of select="humidity/@value"/>
                            <br/>
                            Precipitation: <xsl:value-of select="precipitation/@mode"/>
                        </p>
                    </div>
                </div>
            </div>
        </xsl:for-each>
    </xsl:template>

</xsl:stylesheet>