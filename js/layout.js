dojo.ready(function(){               
    // instantiate the accordeon component
    var aContainer = new dijit.layout.AccordionContainer({style:"height: 300px"}, "accordeon");
    var genericImage = "<img src='http://placehold.it/150x150'>";
    aContainer.addChild(new dijit.layout.ContentPane({
        title:"Bakery",
        id:"bakery-tab",
        content: genericImage
    }));
    aContainer.addChild(new dijit.layout.ContentPane({
        title:"Drugstore",
        id:"drugstore-tab",
        content: genericImage
    }));
    aContainer.addChild(new dijit.layout.ContentPane({
        title:"Grosery",
        id:"grosery-tab",
        content: genericImage
    }));
    aContainer.addChild(new dijit.layout.ContentPane({
        title:"Book store",
        id:"bookstore-tab",
        content: genericImage
    }));
    aContainer.startup();             

    
    // create the BorderContainer and attach it to our appLayout div
    var appLayout = new dijit.layout.BorderContainer({
        design: "headline"
    }, "appLayout");


    // create the TabContainer
    var contentTabs = new dijit.layout.TabContainer({
        region: "center",
        id: "contentTabs",
        tabPosition: "top",
        "class": "centerPanel",
        href: "contentCenter.html"
    })

    // add the TabContainer as a child of the BorderContainer
    appLayout.addChild( contentTabs );
    
    // create and add the BorderContainer edge regions
    appLayout.addChild(
        new dijit.layout.ContentPane({
            region: "top",
            "class": "edgePanel"
        }, "headerContent")
    )
    appLayout.addChild(
        new dijit.layout.ContentPane({
            region: "bottom",
            "class": "edgePanel footer"
        }, "footerContent")
    )
    appLayout.addChild(
        new dijit.layout.ContentPane({
            region: "left",
            id: "leftCol", "class": "edgePanel",
            splitter: true
        }, "sidebarContent")
    );

    // Add initial content to the TabContainer
    contentTabs.addChild(
        new dijit.layout.ContentPane({
            title: "Location"
        }, "startContent")
    );
    
    contentTabs.addChild(
        new dijit.layout.ContentPane({
            title: "About us"
        }, "aboutContent")
    );
    
    contentTabs.addChild(
        new dijit.layout.ContentPane({
            title: "Team"
        })
    );
    
    // start up and do layout
    appLayout.startup();
});