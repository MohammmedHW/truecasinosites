<?php
if (!isset($_SESSION)){
	session_start();	
}
if(empty($display)){
	$display = array();
}

?>
$(document).ready(function() {
     
    $(document).on('DOMNodeInserted', function(event) {
      /*  $(".dropdown-menu").addClass("pull-right"); */
    });
      $(".big_modal").click(function(){
        $(".modal-dialog ").attr("style","width:70% !important");
     //   $(".modal-body").find("label").addClass('pull-left');
    });      

    $('.clickhider').css('cursor', 'pointer');
         $('.clickhider').click(function(){
             $("#change_icon").toggleClass('icon-minus');    
             $(this).parent().find(".grid-body").slideToggle("600");
         });

    $(".click_minimize").on("click",function(){
          $("#change_icon").toggleClass('icon-minus');    
        $(this).parents(".grid-body").slideUp();
    });

      $(".click_open").click(function(){
        var obj =$(this);
        if(obj.hasClass("click_opened"))
        {
            $('.clickhider').parent().find(".grid-body").slideUp("600");
            obj.removeClass("click_opened").addClass("click_closed");
        }
        else if(obj.hasClass("click_closed"))
        {
            $('.clickhider').parent().find(".grid-body").slideDown("600");
            obj.removeClass("click_closed").addClass("click_opened");
        }
             $("#change_icon").toggleClass('icon-minus'); 
    }); 

      $(".daterange").next("span").click(function(){
          $(this).prev(".daterange").focus();
      });
      
      $(".daterange").prev("span").click(function(){
           $(this).next(".daterange").focus();
      });

    $("a,button").click(function(){
         var obj =$(this);
        if(obj.find("i.icon-refresh"))
        {
          $(document).ajaxStart(function() {
               obj.attr("disabled",true);
                obj.find("i.icon-refresh").addClass("icon-spin");  
            });
            $(document).ajaxComplete(function() {
               obj.find("i.icon-refresh").removeClass("icon-spin");       
               obj.attr("disabled",false);
            });
        }
    });    

  
    function toggleFullScreen() {
          if (!document.fullscreenElement &&    // alternative standard method
              !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
            if (document.documentElement.requestFullscreen) {
              document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
              document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
              document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
          } else {
            if (document.cancelFullScreen) {
              document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            }
          }
        }

        $('#trigger_fullscreen').click(function() {
            toggleFullScreen();
            $(this).toggleClass('icon-resize-small');

        });
        $("body").keyup(function(e){
            if (e.keyCode == 27)
            {
                if($('#trigger_fullscreen').hasClass("icon-resize-full"))
                {
                     $("#trigger_fullscreen").toggleClass('icon-resize-small');
                }
            }
        })

    $(".full_data_selector").attr("readonly","readonly");
    $(".full_data_selector").on("click",function(){
        $(this).select();
    });

    $("#silk_route_search").click(function(){
      
        if($("#search_silk_route").val()!="")
        {
           $("#silk_route_form").submit();
        }
    });

    $(".coll").click(function(event){
            
            event.preventDefault();
            var obj = $(this);
            obj.find("i.coll_id").toggleClass('icon-chevron-down');
          
        });
        

    $("#mini_menu_click").click(function(){
        if($(".page-sidebar").hasClass("mini"))
        {
            $.cookie("mini_menu_active",null,{ expires:7});
        }
        else
        {
            $.cookie("mini_menu_active","true",{ expires:7});
            $(".page-sidebar").find("ul").each(function(){
            $(this).find("li").each(function(){
                $(this).removeClass("open"); 
                $(this).find(".sub-menu").css({"display":"none"});   
            });
        });
        }
    });

    if($.cookie("mini_menu_active")=="true")
    {
        
        $(".page-sidebar").addClass("mini");
        $(".page-sidebar").find("ul").each(function(){
            $(this).find("li").each(function(){
                $(this).removeClass("open"); 
                $(this).find(".sub-menu").css({"display":"none"});   
            });
        });
        $(".page-content").addClass("condensed");
        $(".header-seperation").css({ "display" :  "none"});
        $(".footer-widget").css({ "display" :  "none"});
        $(".scrollup").addClass("to-edge");
    }


jQuery.extend(jQuery.validator.messages, {
    required: 'This field is required',
    email: 'Please enter a valid email address.',
    url: 'Please enter a valid URL.',
    number: 'Please enter a valid number.',
    digits: 'Please enter only digits.',
    equalTo: 'Please enter the same value again.',
    accept: 'Please enter a value with a valid extension.',
    maxlength: jQuery.validator.format('Please enter no more than{0} characters.'),
    minlength: jQuery.validator.format('Please enter at least  {0} characters. '),
    rangelength: jQuery.validator.format('Please enter a value between {0} and {1} characters long.'),
    range: jQuery.validator.format('Please enter a value between {0} and {1}.'),
    max: jQuery.validator.format('Please enter a value less than or equal to {0}.'),
    min: jQuery.validator.format('Please enter a value greater than or equal to {0}.')
});

  
var form = $(".validation");
$(".validation").each(function(){
    var thiss = $(this);
    thiss.validate({
                focusInvalid: true, 
                ignore: ":hidden:not('.validit')",
                rules: {
                 favicon: {
                        extension: "ico"
                        },
                logo: {
                        extension: "jpg|gif|png|jpeg"
                    }

                },
                invalidHandler: function (event, validator) {
                    //display error alert on form submit 

                 if (!validator.numberOfInvalids())
                        return;

                    $('html, body').animate({
                        scrollTop: $(validator.errorList[0].element).offset().top - 80
                    }, 500);
                },

                errorPlacement: function (label, element) { // render error placement for each input type 
                
           			$('<span class="error"></span>').insertAfter(element).append(label);
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('success-control').addClass('error-control');  
                   

                   
                },

                highlight: function (element) { // hightlight error inputs
                   if($(element).hasClass('no_valid_border') == false){
                    var parent = $(element).parent();
                    parent.removeClass('success-control').addClass('error-control'); 
                    }
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    var parent = $(element).parent();
                    parent.removeClass('error-control').addClass('success-control'); 
                },

                success: function (label, element) {
                    var parent = $(element).parent('.input-with-icon');
                    parent.removeClass('error-control').addClass('success-control'); 
                }

            });


})

  var form_submit =1;
    $(".check_password").live("keyup keydown blur",function(){
            var thiss = $(this); 
            var password = $(this).val();
            if(password.length > 6 && password.length < 20 )
            {
                if(password.match(/^[0-9]{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password too Weak").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:25%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                    form_submit =0;
                }
                else if(password.match(/^[A-z]{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Normal ").addClass("text-warning").removeClass("text-primary text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:40%;").addClass("progress-bar-warning").removeClass("progress-bar-danger progress-bar-success progress-bar-primary");
                     form_submit =0;
                }
                else if(password.match(/^[a-z0-9A-Z]{6,20}$/i))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Normal").addClass("text-primary").removeClass("text-warning text-success text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:50%;").addClass("progress-bar-primary").removeClass("progress-bar-danger progress-bar-warning progress-bar-success");
                     form_submit =1;
                }
                else if(password.match(/^(?!.*(.)\1{3})((?=.*[\d])(?=.*[A-Za-z])|(?=.*[^\w\d\s])(?=.*[A-Za-z])).{6,20}$/))
                {
                    thiss.parent().find("#check_pass_span").text("Password is Strong").addClass("text-success").removeClass("text-warning text-primary text-error"); 
                    $("#check_password").removeClass("hide");
                    $(".progress-bar").attr("style","width:90%;").addClass("progress-bar-success").removeClass("progress-bar-danger progress-bar-warning progress-bar-primary ");
                     form_submit =1;
                }
            }
            else
            {
                thiss.parent().find("#check_pass_span").text("Password Should be between 6 to 20 Characters").addClass("text-error").removeClass("text-warning text-primary text-success");  
                 $("#check_password").removeClass("hide");
                 $(".progress-bar").attr("style","width:10%;").removeClass("progress-bar-warning").removeClass("progress-bar-primary").addClass("progress-bar-danger");
                  form_submit =0;
               
            }
            thiss.find("span.error").text("");
    });
            $(".password_form").submit(function(){
                $(".check_password").trigger("blur");
                if(form_submit==0)
                {
                    event.preventDefault();
                       $('html, body').animate({
                          scrollTop: $("#check_password").offset().top
                      }, "slow");
                }    
            });

            function randString(n)
            {
                if(!n)
                {
                    n = 5;
                }

                var text = '';
                var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345678901234567890123456789@#$%&*';

                for(var i=0; i < n; i++)
                {
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                }

                return text;
            }

            $("#generate_pass").click(function(){
                var new_pass = randString(15);
                $("input[type=password]").val(new_pass);
                $(".check_password").val(new_pass);
                var  type= $(".check_password").attr("type");
                var name = $(".check_password").attr("name");
                var  id=   $(".check_password").attr("id");
                var  clas= $(".check_password").attr("class");
                var valu=  new_pass;
                $(".check_password").before('<input type="text" name="'+name+'" id="'+id+'" class="'+clas+'" value="'+valu+'" />');
                $(".check_password :last").remove();
                $(".check_password").trigger('blur');
            });


$.validator.addMethod("alpha", function(value, element) {
return this.optional(element) || value == value.match(/^[a-zA-Z ]+$/);
},"Only Characters Allowed.");

/* API method to get paging information */
$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
{
    return {
        "iStart":         oSettings._iDisplayStart,
        "iEnd":           oSettings.fnDisplayEnd(),
        "iLength":        oSettings._iDisplayLength,
        "iTotal":         oSettings.fnRecordsTotal(),
        "iFilteredTotal": oSettings.fnRecordsDisplay(),
        "iPage":          oSettings._iDisplayLength === -1 ?
            0 : Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
        "iTotalPages":    oSettings._iDisplayLength === -1 ?
            0 : Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
    };
};


/* Bootstrap style pagination control */
$.extend( $.fn.dataTableExt.oPagination, {
    "bootstrap": {
        "fnInit": function( oSettings, nPaging, fnDraw ) {
            var oLang = oSettings.oLanguage.oPaginate;
            var fnClickHandler = function ( e ) {
                e.preventDefault();
                if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
                    fnDraw( oSettings );
                }
            };

            $(nPaging).addClass('pagination').append(
                '<ul>'+
                    '<li class="prev disabled"><a href="#"><i class="icon-chevron-left"></i></a></li>'+
                    '<li class="next disabled"><a href="#"><i class="icon-chevron-right"></i></a></li>'+
                '</ul>'
            );
            var els = $('a', nPaging);
            $(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
            $(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
        },

        "fnUpdate": function ( oSettings, fnDraw ) {
            var iListLength = 5;
            var oPaging = oSettings.oInstance.fnPagingInfo();
            var an = oSettings.aanFeatures.p;
            var i, ien, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);

            if ( oPaging.iTotalPages < iListLength) {
                iStart = 1;
                iEnd = oPaging.iTotalPages;
            }
            else if ( oPaging.iPage <= iHalf ) {
                iStart = 1;
                iEnd = iListLength;
            } else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
                iStart = oPaging.iTotalPages - iListLength + 1;
                iEnd = oPaging.iTotalPages;
            } else {
                iStart = oPaging.iPage - iHalf + 1;
                iEnd = iStart + iListLength - 1;
            }

            for ( i=0, ien=an.length ; i<ien ; i++ ) {
                // Remove the middle elements
                $('li:gt(0)', an[i]).filter(':not(:last)').remove();

                // Add the new list items and their event handlers
                for ( j=iStart ; j<=iEnd ; j++ ) {
                    sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
                    $('<li '+sClass+'><a href="#">'+j+'</a></li>')
                        .insertBefore( $('li:last', an[i])[0] )
                        .bind('click', function (event) {
                            event.preventDefault();
                            oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
                            fnDraw( oSettings );
                        } );
                }

                // Add / remove disabled classes from the static elements
                if ( oPaging.iPage === 0 ) {
                    $('li:first', an[i]).addClass('disabled');
                } else {
                    $('li:first', an[i]).removeClass('disabled');
                }

                if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
                    $('li:last', an[i]).addClass('disabled');
                } else {
                    $('li:last', an[i]).removeClass('disabled');
                }
            }
        }
    }
} );


$.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
        {
            if ( typeof sNewSource != 'undefined' && sNewSource != null )
            {
                oSettings.sAjaxSource = sNewSource;
            }
            this.oApi._fnProcessingDisplay( oSettings, true );
            var that = this;
            var iStart = oSettings._iDisplayStart;

            oSettings.fnServerData( oSettings.sAjaxSource, [], function(json) {
                /* Clear the old information from the table */
                that.oApi._fnClearTable( oSettings );

                /* Got the data - add it to the table */
                var aData =  (oSettings.sAjaxDataProp !== "") ?
                    that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;

                for ( var i=0 ; i<json.aaData.length ; i++ )
                {
                    that.oApi._fnAddData( oSettings, json.aaData[i] );
                }

                oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
                that.fnDraw();

                if ( typeof bStandingRedraw != 'undefined' && bStandingRedraw === true )
                {
                    oSettings._iDisplayStart = iStart;
                    that.fnDraw( false );
                }

                that.oApi._fnProcessingDisplay( oSettings, false );

                /* Callback user function - for event handlers etc */
                if ( typeof fnCallback == 'function' && fnCallback != null )
                {
                    fnCallback( oSettings );
                }
            }, oSettings );
        }


    $('.datatable_with_sorting').each(function(){
        var source = $(this).attr('summary');
     oTable =  $(this).dataTable({
        "sDom": "<'row'<'col-md-12 add'>><'row box'<'col-md-6'l T><'col-md-6'f>r>t<'row  m-t-10'<'col-md-12'p i>>",
                   "oLanguage": {
                                  "sSearch": "Search",
                                  "sInfoEmpty": "no entry",
                                  "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                                  "sLengthMenu": "Display _MENU_ records",
                                  "sZeroRecords":"No matching records found",
                                  "sEmptyTable": "No data available in table",
                                  "sLoadingRecords": "Please wait - loading...",
                                  "sProcessing": "Processing..."
                                },
            "bProcessing":true,
            "bJQueryUI": false,
            "bDestroy": true,
            "sPaginationType": "bootstrap",
            "bAutoWidth": false,
            "bServerSide": true, // true
            "bSort": true,
            'bFilter': true,
            "bScrollCollapse": true,
            "fnDrawCallback": function(oSettings){
                    //alert("recalled");
                    $(".master").attr( "checked", false );
                       
              },
            "sAjaxSource":source,
            'fnInitComplete': function(){ 
                   // alert("finished");
            }
        });
  })

    $('.datatable').each(function(){
    var sour = $(this).attr('id');
    if(sour != '')
    {
        var source = $('#'+sour).attr('summary');
    }
    else
    {
        var source = $('.datatable').attr('summary');
    }
    
   oTable =  $(this).dataTable({
                "sDom": "<'row'<'col-md-12 add'>><'row box'<'col-md-6'l T><'col-md-6'f>r>t<'row m-t-10'<'col-md-12'p i>>",
                   "oLanguage": {
                                  "sSearch": "Search>",
                                  "sInfoEmpty": "no entry",
                                  "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                                  "sLengthMenu": "Display _MENU_ records",
                                  "sZeroRecords":"No matching records found",
                                  "sLoadingRecords": "Please wait - loading...",
                                  "sEmptyTable": "No data available in table",
                                  "sProcessing": "Processing..."  
                                },
                    "bProcessing":true,
                    "bJQueryUI": false,
                    "bDestroy": true,
                    "sPaginationType": "bootstrap",
                    "bAutoWidth": false,
                    "bServerSide": true, // true
                    "bSort": true,
                    'bFilter': true,
                    "fnDrawCallback": function(oSettings){
                            //alert("recalled");
                              $(".master").attr( "checked", false );
                               
                      },
                    "sAjaxSource":source,
                    'fnInitComplete': function(){ 
                           // alert("finished");
                    },
                    "aoColumnDefs": [
                      {
                         'bSortable': false,   aTargets: [ 0,-1 ]
                      }
                    ]
            });
        });


 
     $('.statictable').on('dt', function(){

     $(this). dataTable({
        "sDom": "<'row'<'col-md-6'l T><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
                   "oLanguage": {
                                  "sSearch": "Search",
                                  "sInfoEmpty": "no entry",
                                  "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                                  "sLengthMenu": "Display _MENU_ records",
                                  "sZeroRecords":"No matching records found"
                                },
            "bProcessing":true,
            "bJQueryUI": false,
            "bDestroy": true,
            "sPaginationType": "bootstrap",
            "bAutoWidth": false,
            "bServerSide": false, // true
            "bSort": true,
            'bFilter': true,
            "bScrollCollapse": true
        });

    });

    $('.dataTables_filter input').addClass("input-medium "); // modify table search input
    $('.dataTables_length select').addClass("select2-wrapper span12"); // modify table per page dropdown
    $(".fit").wrap("<div class='scroll'></div>");
    $(".scroll").css('overflow-x','auto');


tinyMCE.init({
    
    mode : "textareas",
    editor_selector : "htmleditor",
    elements:"editor",
    relative_urls :false,
    remove_script_host : false,
    convert_urls: false,
    menubar: " edit format insert table view tools",
    visual: true,
    removed_menuitems: 'newdocument  cut  copy  paste |',
    plugins: "image link advlist preview fullscreen code visualblocks insertdatetime table hr charmap emoticons textcolor searchreplace",
    image_advtab: true,
    toolbar1: " code | undo | redo | bold,italic,underline,strikethrough,| bullist,numlist,| alignleft aligncenter alignright alignjustify| subscript, superscript | fullscreen | link unlink anchor | insertdatetime | image media",
    toolbar2: "forecolor, backcolor| emoticons | code  | preview | fontselect | fontsizeselect",
    setup: function (editor) {
        editor.on("blur",function (ed) {
        
        });
    }
});


    $(".select2-wrapper").select2({minimumResultsForSearch: -1});


        $(".select_styled").select2({
                        allowClear: false
        });

       /*if($("form.validation .select_styled").length > 0){
        $('.select_styled').change(function () {
                form.validate().element($(this)); 
                //revalidate the chosen dropdown value and show error or success message for the input
            });
        }*/
	
	$(".redirect") .click(function(event){
    event.preventDefault();
    var goto = $(this).attr("name");
    window.location = goto;
	})



      //Date Pickers
      $('.input-append.normaldate').datepicker({
                format: "yyyy-mm-dd",
                endDate: 'today',
                autoclose:true,
                todayHighlight: true
       });

        $('.input-append.birthdate').datepicker({
                format: "yyyy-mm-dd",
                endDate: '-18y',
                autoclose:true,
                todayHighlight: true
       });

        $('.input-append.scheduledate').datepicker({
                format: "yyyy-mm-dd",
                autoclose:true,
                todayHighlight: true
       });

        $('.daterange').daterangepicker(
            {
                ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                   'Last 7 Days': [moment().subtract('days', 6), moment()],
                   'Last 30 Days': [moment().subtract('days', 29), moment()],
                   'This Month': [moment().startOf('month'), moment()],
                   'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')],
                },
                format: 'YYYY-MM-DD',
                separator: ' to ',
                startDate: moment().subtract('days', 7),
                endDate: moment(),
                maxDate : moment(),
                opens:"right"
            },
          function(start, end) {
           // alert('A date range was chosen: ' + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
          }
        );

         $('.filter_date').daterangepicker(
            {
                ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                   'Last 7 Days': [moment().subtract('days', 6), moment()],
                   'Last 30 Days': [moment().subtract('days', 29), moment()],
                   'This Month': [moment().startOf('month'), moment()],
                   'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')],
                },
                format: 'YYYY-MM-DD',
                separator: ' to ',
                minDate : moment().subtract('days', 90),
               // startDate: moment().subtract('days', 7),
                endDate: moment(),
                maxDate : moment(),
                opens:"left"
            },
          function(start, end) {
           // alert('A date range was chosen: ' + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
          }
        );

         jQuery('.tabs a').click(function (event) {
     event.preventDefault();
     jQuery(this).tab('show');
         });
     

    $(".reload").click(function(){
        console.log("clicked");
        $(this).parents("body").find("form")[0].reset();
        $('.success-control').removeClass('success-control');
        $('.error-control').removeClass('error-control');
        form.validate().resetForm();
        oTable.fnReloadAjax();
    })    


   /*start Radio hide show */
//        $(".blind").hide();
        
        $(".rts").each(function(){
            $(this).click(function(){
                var nam = $(this).attr("name");
                var id = $(this).attr("id");
                $("."+id +"toggle").show();
                $("input[name='"+ nam +"']").not(this).each(function(){
                    var ida = $(this).attr("id");
                    $("."+ida +"toggle").hide();
                })
            })
        });
        /*end Radio hide show */


          /*start checkbox hide show*/

           $(".hideshow").change(function(){
                var i = $(this).attr("id");
                 if($(this).is(":checked")){
                    $("." + i).toggle();
                 }else{
                    $("." + i).toggle();
                 }
            })
           /* End checkbox hide show */

     // hide show start

            $(".visible").click(function(){
                var id = $(this).attr('id');
                $("."+id+"toggle").toggle();
                $("."+id+"show").show();
                $("."+id+"hide").hide();
            })

    // hide show end

         // hide show start

            $(".visible_remove").click(function(){
                var id = $(this).attr('id');
                $(this).find(".remove").remove();
                $("."+id+"toggle").toggle();
                $(this).unbind("click");
            })

    // hide show end

    /*Start Select Hide show*/

    $(".selecths").change(function(){
         var sid = $(this).attr('id');
         var oid = $(this).find("option:selected").attr("id");
         var tid = "."+sid+"_"+oid+"_"+"show";
         $("."+ sid +"_"+ "hide").hide();
         $(tid).show();

    })

    /*End Select Hide show*/

            $(".scroll").each(function(){
                $(this).click(function(){
                    setTimeout(function(){
                    var top = $(".scroll_to:visible").offset();
                    var toppx = (top.top - 5)+"px";
                    $("html, body").animate({scrollTop:toppx});
                    },10);
                });
            })
      

            $("#client").autocomplete({                    
                source:'php/names.php',
                select: function( event, ui ) {
                    if(ui.item.value == 0){
                    $("#client").val("");
                    }else{
                    var id = $("#client").val(ui.item.value);
                    //alert("ui");
                    event.preventDefault();
                    $("#client_id").val(ui.item.value);
                    $("#client").val(ui.item.label);
                }},
                 search : function(event, ui ) {
                    $("#client_id").val("");
                    //alert("start");
                 },
                 response: function( event, ui ) {
                            if(ui.content[0].value == 0){
                                $("#client_id").val("");
                                $("#client").val("");
                                }
                        },
                        focus: function(event, ui) {
                               $("#client_id").val(ui.item.value);
                                $("#client").val(ui.item.label);
                                return false;
                        }  
            });
              $("#new_country").on('change',function(){
                   country_name = $(this).val();
                   $.ajax({
                       url: 'php/countries.php',
                       type: 'POST',
                       data: {    
                                   get_state_from_country : 'get_state_from_country', 
                                   country_name: country_name                                   
                             }
                   }).done(function(data) {
                      $("#new_state").html(data);
                      $("#new_state").select2("val","");
                   });
            });

               $(document).ajaxStart(function() {
                   $(".ajax-loader").removeClass('blind');
                });
                $(document).ajaxComplete(function() {
                    $(".ajax-loader").addClass('blind');
                });

          $(".country_img").select2({
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function (m) {
                return m;
            }
        });


    $(".deleteAll").attr("disabled","disabled");
     $('.datatable .master').change(function () {
                var set = $(".checks");
                var checked = $(this).is(":checked");
                if (checked) {
                 set.each(function () {
                        $(this).attr("checked", true);
                });
                 }else{
                set.each(function () {
                        $(this).attr("checked", false);
                });
                }
            if (checked) {
                    $(this).closest('table').find('.checks').parents('tr').addClass('row_selected');
                       if($(".checks:checked").length > 0){
                            $(".deleteAll").removeAttr("disabled");
                        }
                        else{
                            $(".deleteAll").attr("disabled","disabled");
                            }
                }
                    else{ 
                     $(this).closest('table').find('.checks').parents('tr').removeClass('row_selected');
                    $(".deleteAll").attr("disabled","disabled");
                        
                        }
            });


        $(".checks").live("click",function(){
                var thiss = $(this);
                var numb = $(".checks").length;
                var chk = $(".checks:checked").length;
                var unchk = $(".checks:unchecked").length;
                if($(this).is(":checked")){
                    $(this).parents('tr').addClass('row_selected');
                }else{
                    $(this).parents('tr').removeClass('row_selected');
                }
                if(chk >0)
                {
                    $(".deleteAll").removeAttr("disabled");
                }
                else
                {
                    $(".deleteAll").attr("disabled","disabled");
                }
                if(numb==chk)
                {
                    $(".master").attr( "checked", true );
                }
                if(numb==unchk)
                {
                    $(".master").attr( "checked", false );
                }
                
            });

        $('body').popover({
            placement:"bottom",
            trigger:"hover",
            selector:".pop",
            html:true
        });

        $(".confirm").live("click",function(){
              return confirm("Are you sure you want to continue?");
            
            })

        $(".grid-accord").click(function(){
            $(".clicked").removeClass("clicked");
            var t = $(this);
            t.parents(".grid").find(".grid-body").addClass("clicked");
            $(".grid-body").not(".clicked").slideUp('200');
            t.parents(".grid").find(".grid-body").slideToggle('200');

        })

        $('.tip').tooltip();

        $(".back").click(function(){
            history.back();
        })

            $('#file_upload').uploadify({
                /*'multi'    : false,  */  
                'swf'      : 'theme/default/assets/plugins/uploadify/uploadify.swf',
                'uploader' : 'php/creative_files.php',
                'formData'      : {'overwrite' : 'No', 'offers' : 1,'ajax_upload':'ajax_upload'},
                'onUploadStart' : function(file) {

                    var offers = $("#offers").val();
                                if(offers == ''){
                                    alert("Please Select Offer");
                                    $('#file_upload').uploadify('cancel','*');
                                }
                    var file_type = $("#creative_type").val();
                    var overwrite = $("#overwrite").val();
                    $("#file_upload").uploadify('settings','formData' ,{ 'file_type': file_type });
                    $("#file_upload").uploadify('settings','formData' ,{ 'offers': offers });
                    $("#file_upload").uploadify('settings','formData' ,{'overwrite': overwrite });
                }, 
                'onUploadSuccess' : function(file, data, response) 
                {
                    if(data == 0)
                    {
                        alert('File not in proper format');
                         $('#file_upload').uploadify('cancel','*');
                    }else if(data == 1)
                    {
                        alert('File could not be uploaded');
                         $('#file_upload').uploadify('cancel','*');
                    }else if(data == 3)
                    {
                        alert('File Size Exceeded your Limit');
                         $('#file_upload').uploadify('cancel','*');

                   }
                   else if(data == 4)
                   {
                     alert('Permission Denied Unable to Create Folder');
                      $('#file_upload').uploadify('cancel','*');

                   }
                    else
                    {
    					$("#creative_files").append('<input type="text" class="form-control col-md-12 m-b-20" readonly="readonly" value='+data+' onClick="this.select()">');
                        val = $("#f_path").val();
                        if(val!="")
                        {
                            val+=","+$.trim(data);
                        
                        }
                        else
                        {
                            val= data;
                        }
    					$("#f_path").val(val);
                    }
                } 
            });

            $('#offer_thumbnail_upload').uploadify({
                'multi'    : false,  
                'swf'      : 'theme/default/assets/plugins/uploadify/uploadify.swf',
                'uploader' : 'php/creative_files.php',
                'formData'      : {'overwrite' : 'No', 'offers' : 1,'ajax_upload':'ajax_upload'},
                'onUploadStart' : function(file) {

                    var offers = $("#offers").val();
                                if(offers == ''){
                                    alert("Please Select Offer");
                                    $('#offer_thumbnail_upload').uploadify('cancel','*');
                                }
                    var file_type = $("#creative_type").val();
                    var overwrite = $("#overwrite").val();
                    $("#offer_thumbnail_upload").uploadify('settings','formData' ,{ 'file_type': file_type });
                    $("#offer_thumbnail_upload").uploadify('settings','formData' ,{ 'offers': offers });
                    $("#offer_thumbnail_upload").uploadify('settings','formData' ,{'overwrite': overwrite });
                }, 
                'onUploadSuccess' : function(file, data, response) 
                {
                    if(data == 0)
                    {
                        alert('File not in proper format');
                         $('#offer_thumbnail_upload').uploadify('cancel','*');
                    }else if(data == 1)
                    {
                        alert('File could not be uploaded');
                         $('#offer_thumbnail_upload').uploadify('cancel','*');
                    }else if(data == 3)
                    {
                        alert('File Size Exceeded your Limit');
                         $('#offer_thumbnail_upload').uploadify('cancel','*');

                   }
                   else if(data == 4)
                   {
                     alert('Permission Denied Unable to Create Folder');
                      $('#offer_thumbnail_upload').uploadify('cancel','*');

                   }
                    else
                    {
                        $("#creative_files").append('<input type="text" class="form-control col-md-12 m-b-20" readonly="readonly" value="'+data+'" onClick="this.select()">');
                        val = $("#f_path").val();
                        if(val!="")
                        {
                            val+=","+$.trim(data);
                        
                        }
                        else
                        {
                            val= data;
                        }
                        $("#f_path").val(val);
                    }
                } 
            });

             $('#file_upload_client').uploadify({
                'swf'      : 'admin/theme/default/assets/plugins/uploadify/uploadify.swf',
                'uploader' : 'admin/php/creative_files.php',
                'formData'      : {'overwrite' : 'No', 'offers' : 1,'ajax_upload_client':'ajax_upload_client'},
                'onUploadStart' : function(file) {
                    var offers = $("#offers").val();
                    
                                if(offers == ''){
                                    alert("Please Select Offer");
                                    $('#file_upload_client').uploadify('cancel','*');
                                }
                    <?php if((isset($_SESSION['user_type']))&& ($_SESSION['user_type'] != '')) { ?>
                    var user_type = "<?php echo $_SESSION['user_type']; ?>";
                    $("#file_upload_client").uploadify('settings','formData' ,{ 'user_type': user_type });
                    <?php } ?>
                    var file_type = $("#creative_type").val();
                    var overwrite = $("#overwrite").val();
                    $("#file_upload_client").uploadify('settings','formData' ,{ 'offers': offers });
                    $("#file_upload_client").uploadify('settings','formData' ,{ 'file_type': file_type });
                    $("#file_upload_client").uploadify('settings','formData' ,{'overwrite': overwrite });
                }, 
                'onUploadSuccess' : function(file, data, response) {
                    if(data == 0){
                        alert('File not in proper format');
                         $('#file_upload_client').uploadify('cancel','*');
                    }else if(data == 1){
                        alert('File could not be uploaded');
                         $('#file_upload_client').uploadify('cancel','*');
                    }else if(data == 3)
                    {
                        alert('File Size Exceeded your Limit');
                         $('#file_upload_client').uploadify('cancel','*');

                   }else if(data == 4)
                    {
                     alert('Permission Denied Unable to Create Folder');
                      $('#file_upload_client').uploadify('cancel','*');

                   }else{
                       $("#creative_files").append('<input type="text" class="form-control col-md-12 m-b-20" readonly="readonly" value="'+data+'" onClick="this.select()">');
                        val = $("#f_path").val();
                        if(val!="")
                        {
                            val+=","+$.trim(data);
                        
                        }
                        else
                        {
                            val= data;
                        }
                        $("#f_path").val(val);
                     }
                    } 
            });

             $('#offer_thumbnail_upload_client').uploadify({
                 'multi'    : false,  
                'swf'      : 'admin/theme/default/assets/plugins/uploadify/uploadify.swf',
                'uploader' : 'admin/php/creative_files.php',
                'formData'      : {'overwrite' : 'No', 'offers' : 1,'ajax_upload_client':'ajax_upload_client'},
                'onUploadStart' : function(file) {
                    var offers = $("#offers").val();
                    
                                if(offers == ''){
                                    alert("Please Select Offer");
                                    $('#offer_thumbnail_upload_client').uploadify('cancel','*');
                                }
                    <?php if((isset($_SESSION['user_type']))&& ($_SESSION['user_type'] != '')) { ?>
                    var user_type = "<?php echo $_SESSION['user_type']; ?>";
                    $("#offer_thumbnail_upload_client").uploadify('settings','formData' ,{ 'user_type': user_type });
                    <?php } ?>
                    var file_type = $("#creative_type").val();
                    var overwrite = $("#overwrite").val();
                    $("#offer_thumbnail_upload_client").uploadify('settings','formData' ,{ 'offers': offers });
                    $("#offer_thumbnail_upload_client").uploadify('settings','formData' ,{ 'file_type': file_type });
                    $("#offer_thumbnail_upload_client").uploadify('settings','formData' ,{'overwrite': overwrite });
                }, 
                'onUploadSuccess' : function(file, data, response) {
                    if(data == 0){
                        alert('File not in proper format');
                         $('#offer_thumbnail_upload_client').uploadify('cancel','*');
                    }else if(data == 1){
                        alert('File could not be uploaded');
                         $('#offer_thumbnail_upload_client').uploadify('cancel','*');
                    }else if(data == 3)
                    {
                        alert('File Size Exceeded your Limit');
                         $('#offer_thumbnail_upload_client').uploadify('cancel','*');

                   }else if(data == 4)
                    {
                     alert('Permission Denied Unable to Create Folder');
                      $('#offer_thumbnail_upload_client').uploadify('cancel','*');

                   }else{
                       $("#creative_files").append('<input type="text" class="form-control col-md-12 m-b-20" readonly="readonly" value="'+data+'" onClick="this.select()">');
                        val = $("#f_path").val();
                        if(val!="")
                        {
                            val+=","+$.trim(data);
                        
                        }
                        else
                        {
                            val= data;
                        }
                        $("#f_path").val(val);
                     }
                    } 
            });

         if($('.exin').length > 0){  
         var arr_string ;
         var exin ;

        }

        $(".exin").live('click',function() {
                 var id = $(this).attr('name');
            if($(this).text() == 'Exclude') {
              $(this).removeClass("btn-danger").addClass('btn-success');
              $(this).text('Include');
               arr_string = $("#hidden-field").val();
               exin = arr_string.split(',');
              var ind = exin.indexOf(id);
              exin.splice(ind,1); 
              $("#hidden-field").val(exin ); 
            
            }else  {
              $(this).removeClass("btn-success").addClass('btn-danger');
              $(this).text('Exclude');
              exin.push(id);
              $("#hidden-field").val(exin ); 
            }

            });


            $(".showdtcol").click(function(){
                fnShowHide(1);

            })


        
        $(".bootstrap-duallistbox-container").find(".btn-default").removeClass("btn-default").addClass("btn-success");

        $(".menu_out").hover(function(){
             $(this).find(".sub_menu_out").css("display","block");
        },function(){
             $(this).find(".sub_menu_out").css("display","none");

        })

<!-- Table Extras -->
        $(".tabextrali").toggle(function(){
            $(this).css("border-left","2px solid red");
        },function(){
            $(this).css("border-left","none");
         })


        $("#tabaction").click(function(){
            $(".tabaction").toggle();

        })

        $("#tabfilter").click(function(event) {
            $(".tabfilter").toggle();

        });

       
       
<!-- End Table Extras -->

     function format(state) {
        if (!state.id) 
        return state.text; 
       return "<img class='flag' src='<?php echo  dirname(dirname(dirname(dirname(dirname($_SERVER['PHP_SELF']))))); ?>/plugins/flags/" + state.id + ".png'/>&nbsp;&nbsp;" + state.text; 
    } 


function fnShowHide( iCol )
{
    var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
    oTable.fnSetColumnVis( iCol, bVis ? false : true );
}

 $(function(){
        $('.demo2').colorpicker({format : "hex"}).on('change',function(event){
          the = $(this);

          var get_color = the.find("input").val();  
         the.find(".span_color").css({"background-color":get_color});
        });
    });

}); // end document ready

$(function() {
    $('input, textarea, select').placeholder();
});





<!-- 05-07-2016 home page circle -->
var handlKnobElements = function () {
        //knob does not support ie8 so skip it
        if (!jQuery().knob || isIE8) {
            return;
        }

        $(".knob").knob({
            'dynamicDraw': true,
            'thickness': 0.2,
            'tickColorizeValues': true,
            'skin': 'tron'
        });

        if ($(".knobify").size() > 0) {
            $(".knobify").knob({
                readOnly: true,
                skin: "tron",
                'width': 100,
                'height': 100,
                'dynamicDraw': true,
                'thickness': 0.2,
                'tickColorizeValues': true,
                'skin': 'tron',
                draw: function () {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') {

                        var a = this.angle(this.cv) // Angle
                        ,
                            sa = this.startAngle // Previous start angle
                            ,
                            sat = this.startAngle // Start angle
                            ,
                            ea // Previous end angle
                            ,
                            eat = sat + a // End angle
                            ,
                            r = 1;

                        this.g.lineWidth = this.lineWidth;

                        this.o.cursor && (sat = eat - 0.3) && (eat = eat + 0.3);

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.v);
                            this.o.cursor && (sa = ea - 0.3) && (ea = ea + 0.3);
                            this.g.beginPath();
                            this.g.strokeStyle = this.pColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;

                    }
                }
            });
        }
    }