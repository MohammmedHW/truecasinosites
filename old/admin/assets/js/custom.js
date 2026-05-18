$(document).ready(function() {  
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
                                  "sSearch": "Search",
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
}); 