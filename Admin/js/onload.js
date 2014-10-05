   $(document).ready(function(){
                                function fix_height(){
                                        var h = $("#tray").height();   
                                        $("#preview").attr("height", (($(window).height()) - h) + "px");
                                }
                                $(window).resize(function(){ fix_height(); }).resize();
                                //$("#preview").contentWindow.focus();
                        });