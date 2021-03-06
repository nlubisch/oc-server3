{***************************************************************************
* You can find the license in the docs directory
***************************************************************************}

<div class="content2-pagetitle">
    <img src="resource2/{$opt.template.style}/images/misc/32x32-tools.png" style="margin-right: 10px;" width="32" height="32" alt="" />Erlaubte HTML-Elemente
</div>
<div class="content-txtbox-noshade" style="padding-right: 25px;">

    <p>Alle hier nicht aufgeführten Tags und Attribute werden gefiltert.
    Gegebenenfalls wird die Liste erweitert oder um das eine oder andere Element gekürzt.
    Alle bereits eingestellten Beschreibungen bleiben davon jedoch unberührt.</p>
    <p>
        <i>Kursiv</i> wiedergegebene Tags und Attribute werden in <a href="https://de.wikipedia.org/wiki/HTML5" target="_blank">HTML5</a> nicht mehr unterstützt und sollten vermieden werden.<br /><br />
    </p>

    <div class="content2-container bg-blue02">
      <p class="content-title-noshade-size2" style="margin:0 !important">&nbsp;Tags</p>
    </div>

    <p><b>Die folgenden HTML-Tags sind erlaubt:</b></p>

    <p class="indent">!--, a, abbr, <i>acronym</i>, address, area, b, bdo, <i>big</i>, blockquote, br, caption, cite, code, col, colgroup, dd, del, dfn, div, dl, dt, em, fieldset, <i>font</i><sup>1</sup>, h1, h2, h3, h4, h5, h6, hr, i, img, ins, kbd, legend, li, map, ol, p, pre, q, samp, small, span, strike<sup>1</sup>, strong, sub, sup, table, tbody, td, th, thead, tfoot, tr, <i>tt</i>, u, ul, var<br />
    </p>

    <p><b>Ersatz für nicht erlaubte oder veraltete Tags:</b></p>
    <p class="indent">
        <span class="html_replacetags">acronym</span>  &rarr; &nbsp; abbr<br />
        <span class="html_replacetags">big</span>      &rarr; &nbsp; span style="font-size:larger"<br />
        <span class="html_replacetags">center</span>   &rarr; &nbsp; p style="text-align:center"<br />
        <span class="html_replacetags">s</span>        &rarr; &nbsp; span style="text-decoration:line-through"<br />
        <span class="html_replacetags">tt</span>       &rarr; &nbsp; code
        <br />
    </p>

    <p>
        <sup>1</sup> Wird im Eingabemodus „Editor“ in andere Elemente umgewandelt.<br />
        <br />
    </p>

    <div id="htmlattributes" class="content2-container bg-blue02">
      <p class="content-title-noshade-size2" style="margin:0 !important">&nbsp;Attribute</p>
    </div>

    <p><b>Die folgenden allgemeinen HTML-Attribute sind erlaubt:</b></p>

    <p class="indent">class, dir, id<sup>2</sup>, lang, style, title</p>

    <p><b>Die folgenden speziellen HTML-Attribute sind erlaubt:</b></p>

    <p class="indent">
        <span class="html_attributes">a</span>           href, <i>name</i><sup>2</sup>, rel, target='_blank'<br />
        <span class="html_attributes">area</span>        alt, coords, href, shape, target='_blank'<br />
        <span class="html_attributes">bdo</span>         dir<br />
        <span class="html_attributes">blockquote</span>  cite<br />
        <span class="html_attributes">col</span>         <i>align</i>, span, <i>width</i><br />
        <span class="html_attributes">colgroup</span>    span<br />
        <span class="html_attributes">del</span>         cite<br />
        <span class="html_attributes"><i>font</i></span> color, size<br />
        <span class="html_attributes">hr</span>          <i>size</i>, <i>noshade</i><br />
        <span class="html_attributes">img</span>         <i>align</i>, alt, <i>border</i>, height, <i>hspace</i>, src, usemap<sup>2</sup>, <i>vspace</i>, width<br />
        <span class="html_attributes">ins</span>         cite<br />
        <span class="html_attributes">map</span>         name<sup>2</sup><br />
        <span class="html_attributes">ol</span>          <i>compact</i>, type<br />
        <span class="html_attributes">q</span>           cite<br />
        <span class="html_attributes">table</span>       <i>align</i>, <i>bgcolor</i>, <i>border</i>, <i>cellpadding</i>, <i>cellspacing</i>, <i>frame</i>, <i>rules</i>, <i>summary</i>, <i>width</i><br />
        <span class="html_attributes">td, th</span>      <i>abbr</i>, <i>align</i>, <i>bgcolor</i>, colspan, <i>height</i>, <i>nowrap</i>, rowspan, <i>scope</i>, <i>valign</i>, <i>width</i><br />
        <span class="html_attributes">tr</span>          <i>align</i>, <i>bgcolor</i>, <i>valign</i><br />
        <span class="html_attributes">ul</span>          <i>compact</i><br />
    </p>

    <p><b>Ersatz für nicht erlaubte oder veraltete Attribute:</b></p>
    <p class="indent">
        <span class="html_replaceattrs">align</span>    &rarr; &nbsp; style="text-align:...; vertical-align:..."<br />
        <span class="html_replaceattrs">bgcolor</span>  &rarr; &nbsp; style="background-color:..."<br />
        <span class="html_replaceattrs">border</span>   &rarr; &nbsp; style="border:..."<br />
        <span class="html_replaceattrs">color</span>    &rarr; &nbsp; style="text-color:..."<br />
        <span class="html_replaceattrs">hspace</span>   &rarr; &nbsp; style="margin-left:...; margin-right:..."<br />
        <span class="html_replaceattrs">name</span>     &rarr; &nbsp; id="..."<br />
        <span class="html_replaceattrs">vspace</span>   &rarr; &nbsp; style="margin-top:...; margin-bottom:..."<br />
        <span class="html_replaceattrs">width</span>    &rarr; &nbsp; style="width:..."<br />
    </p>

    <p>
        <sup>2</sup> Die IDs bzw. Namen müssen mit <code>custom_</code> beginnen.
        <br /><br />
    </p>

    <div id="cssstyles" class="content2-container bg-blue02">
      <p class="content-title-noshade-size2" style="margin:0 !important">&nbsp;CSS-Stile</p>
    </div>

    <p><b>Die folgenden CSS-Stile sind erlaubt:</b></p>

    <p class="html_css">background, background-attachment, background-color, background-image, <span class="nowrap">background-position,</span> <span class="nowrap">background-repeat</span></p>
    <p class="html_css">border, border-bottom, border-bottom-color, border-bottom-style, <span class="nowrap">border-bottom-width,</span> <span class="nowrap">border-collapse,</span> <span class="nowrap">border-color</span> <span class="nowrap">border-left,</span> <span class="nowrap">border-left-color,</span> <span class="nowrap">border-left-style,</span> <span class="nowrap">border-left-width,</span> <span class="nowrap">border-right,</span> <span class="nowrap">border-right-color,</span> <span class="nowrap">border-right-style,</span> <span class="nowrap">border-right-width,</span> <span class="nowrap">border-spacing</span> <span class="nowrap">border-style</span> <span class="nowrap">border-top,</span> <span class="nowrap">border-top-color,</span> <span class="nowrap">border-top-style</span> <span class="nowrap">border-width</span></p>
    <p class="html_css">caption-side<br />
    <p class="html_css">clear</p>
    <p class="html_css">color</p>
    <p class="html_css">display</p>
    <p class="html_css">float</p>
    <p class="html_css">font, font-family, font-size, font-style, font-variant, font-weight</p>
    <p class="html_css">height</p>
    <p class="html_css">letter-spacing</p>
    <p class="html_css">line-height</p>
    <p class="html_css">list-style, list-style-image, list-style-position, list-style-type</p>
    <p class="html_css">margin, margin-bottom, margin-left, margin-right, margin-top</p>
    <p class="html_css">min-height, max-height, min-width, max-width</p>
    <p class="html_css">padding, padding-bottom, padding-left, padding-right, padding-top</p>
    <p class="html_css">table-layout</p>
    <p class="html_css">text-align, text-decoration, text-indent, text-transform</p>
    <p class="html_css">vertical-align</p>
    <p class="html_css">visibility</p>
    <p class="html_css">white-space</p>
    <p class="html_css">width</p>
    <p class="html_css">word-spacing</p>
    <br />
</div>
