M.block_turnitin = {
    init: function(Y) {
        YUI().use("node", "io", "dump", "json-parse", function(Y) {

            var tiiblock = Y.one(".block_turnitin");
            if (!tiiblock) {
                return;
            }

            Y.one(".block_turnitin .block_loading").setStyle("display", "block");

            Y.io(M.cfg.wwwroot + "/mod/turnitintooltwo/ajax.php", {
                timeout: 60000,
                method: "GET",
                data: {
                    action: "search_classes",
                    request_source: "block",
                    sesskey: M.cfg.sesskey
                },

                on: {
                    success: function (x, o) {
                        // Process the JSON data returned from the server
                        try {
                            var data = Y.JSON.parse(o.responseText);
                        }
                        catch (e) {
                            //tiiblock.hide();
                        }

                        if (data.blockHTML == '') {
                            Y.one(".block_turnitin #block_migrate_content").setHTML(data.blockHTML);
                        } else {
                            //tiiblock.hide();
                        }
                    },

                    failure: function (x, o) {
                        tiiblock.hide();
                    }
                }
            });
        });
    }
}