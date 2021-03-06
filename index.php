<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dojo test</title>
        <!-- Shamelessly stolen from http://dojotoolkit.org/documentation/tutorials/1.6/dijit_layout/demo/addTabs.html -->
        <link rel="stylesheet" href="css/demo.css" media="screen">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/dojo/1.6/dijit/themes/claro/claro.css" media="screen">
        <!-- load dojo and provide config via data attribute -->
        <script src="http://ajax.googleapis.com/ajax/libs/dojo/1.6.1/dojo/dojo.xd.js" djConfig="parseOnLoad: true">
        </script>
        <script src="js/app.data.js"></script>
        <script src="js/layout.js"></script>
        <script>
            dojo.require("dijit.layout.BorderContainer");
            dojo.require("dijit.layout.ContentPane");
            dojo.require("dijit.layout.TabContainer");
            dojo.require('dijit.layout.AccordionContainer');
            dojo.ready(function(){
                // attach listeners events to tabs
                dojo.query('.dijitAccordionTitle').forEach(function(el, i){ 
                    el.onclick = function(evt) {
                        var href = data[el.id.replace('_button', '')].href; // ugh
                        // create the iframe element, so 95'
                        if (!dojo.byId('iframe')) {
                            iframe = document.createElement('iframe');
                            iframe.id = 'iframe'; // duh
                            dojo.byId('aboutContent').appendChild(iframe);;
                        }
                        // fill it
                        dojo.byId('iframe').src = href;
                    };
                });
                // force tab to load
                dojo.byId('bakery-tab_button').click();
            });
        </script>
    </head>
    <body class="claro">
        <div id="appLayout" class="demoLayout"></div>
        <div id="startContent">
        </div>
        <div id="headerContent">
            <a href="#"><img src="http://placehold.it/350x65"></a>
            <div class="header session">
                <a href="#">Logout</a>
            </div>
        </div>
        <div id="footerContent">
            <a href="#">Footer</a> | <a href="#">Legal</a> | <a href="http://www.gnu.org/philosophy/pragmatic.html">Copyleft!</a>
        </div>
        <div id="sidebarContent">
            <div id="accordeon" style="width: 182px; height: 300px"></div>
        </div>
        <div id="aboutContent"></div>
    </body>
</html>
