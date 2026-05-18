<script>
var encrypt = 0;
$(document).ready(function(event) {
	     generate_tiny_val = 0;
        $(".check_box").change(function(){
            var $the = $(this);
            var id_to_class = $(this).attr("id");
            $the.parent().parent().parent("div").addClass("blind");
            $("."+id_to_class).removeClass("blind");

        });

        $("#add_more_sub").click(function(event) {
            var classname = $(this).attr("id");
            $("."+classname).removeClass('blind');
        });

        $("#append_values").click(function(event) {
            event.preventDefault();
            $("#table_add_new_values").append('<tr class="custom_variables">\
            <td><input type="text" name="custom_name[]" class="col-md-10 custom_name" /></td>\
            <td><input type="text" name="custom_value[]" class="col-md-10 custom_value" /></td>\
            <td><a href="#" class="icon_minus_remove"><i class="icon-minus"></i></a></td>\
             </tr>');
        });
        $(".icon_minus_remove").live("click",function(event){
                event.preventDefault();
                $(this).parent().closest('.custom_variables').remove();
        });
        //tracking starts here 
        $("#creative_id").change(function(){

            var the = $(this);
            var creative_class = the.attr("name");
            if(the.val()!="0")
            {
                $("."+creative_class).removeClass('blind');   
                $("#preview_code_modal_show_hide").removeClass("blind");
                generate_tracking_domain(); 
            }
            else
            {
                $("#preview_code_modal_show_hide").addClass("blind");
                $("."+creative_class).addClass('blind');
            }
        });
        $("#offer_url_id").change(function(event) {
             generate_tracking_domain(); 
        });
     
        $(".update_data").click(function(){ 
            aff_sub_values="";
            custom_vars=""; 
            $(".affiliate_sub_values").each(function(){ 
                var the = $(this); 
                if(the.val()!="")
                {  
                    aff_sub_values += the.attr("name") + "=" + the.val()+";";
                }
            });
            $(".custom_variables").each(function(){
                var name = $(this).find('.custom_name').val();
                var value = $(this).find('.custom_value').val();
                custom_vars += name +"="+value+";";        
            });
             generate_tracking_domain(); 

      });
       $("#gentiny_url").change(function(){
            if($("#gentiny_url").is(":checked"))
            {
              generate_tiny_val = 1;
            }
            else
            {
                  generate_tiny_val = 0;
            }
             generate_tracking_domain(); 
       });
       $("#preview_code_modal").click(function(event) {
           $(".all_creative_show").addClass("blind");
           $(".creative_show").removeClass('blind');
       });

        jQuery(".browse_all").click(function(event) {
            event.preventDefault();
            $.ajax({
                url: 'php/offers.php',
                type: 'POST',
                data: {
                        get_creative_files : 'get_creative_files',
                        offer_id: '<?php echo $_GET['offer_id'];?>'
                      },
                success:function(data)
                {
                    //alert(data);
                    $(".all_creative_show").removeClass("blind");
                    $(".creative_show").addClass('blind');
                    $("#preview_all_creative_file").html(data);
                    $("#prev_image").addClass("blind");
                }
            });
            

        });  

       $(".select_creative_file_click").live("click",function(){
        var id = $(this).attr("rel");
        $("#creative_id").select2("val",id).trigger('change');
            $("#modal").modal("hide");

    });  
       $("#optional_var").click(function(event) {
         var classname = $(this).attr("id");
         $("."+classname).slideToggle("fast");
       });
     
    $("#change_val_from").change(function(event){
        if($("#change_val_from").val()=="html_javascript_code")
        {
            $("#change_val").html("<?php echo $display['off_add_code'];?><span class='required'>*</span>");    
            $("#help_span").text("<?php echo $display['off_conv_html_content']; ?>");
        }
        else if($("#change_val_from").val()=="image_pixel")
        {
            $("#change_val").html("<?php echo $display['off_add_image_pixel'];?><span class='required'>*</span>");
            $("#help_span").text("<?php echo $display['off_conv_image_content']; ?>");
        }
        else if($("#change_val_from").val()=="postback_url")
        {
            $("#change_val").html("<?php echo $display['off_add_postback_url'];?><span class='required'>*</span>");
            $("#help_span").text("<?php echo $display['off_conv_postback_content']; ?>");    
        }
        
        });
        
        
    $("#generateqrcode").click(function(event) {
            event.preventDefault(); 
             $("#tracking_form").attr("action","offer_qr_code.php");
             $("#tracking_form").submit();
    });


        $(".creative_preview").live('click',function(){
        
        var file = $(this).attr("name");
        var creid = $(this).attr("id");
            $.ajax({
                url:"php/offers.php",
                type:"POST",
                data:{creative_id: creid,creative_preview:"creative_preview"},
                success:function(data){
                    $("#prev_image").html(data);
                    }
                })
            $("#prev_image").removeClass("blind");
            $(".creative_show").addClass("blind");
            $(".all_creative_show").addClass("blind");
            
        });

            $(".click_here_data").click(function(event) {
            event.preventDefault();
            var v = $(this);
            var data = v.attr("rel");
            var show_div = v.attr("name");
            v.parents(".form-group").remove();
            $("."+show_div).show();
            adv_offer_data(data);
            
    });

    $("#dismiss_button").live('click', function(event) {
         $("#prev_image").addClass("blind");
         $(".creative_show").addClass("blind");
         $(".all_creative_show").addClass("blind");
     });

    $("#encrypt").change(function() {

        if($("#encrypt").is(":checked"))
        {
             encrypt = 1;
        }
        else
        {
             encrypt = 0;
        }
        adv_offer_data("");
    });

    <?php if(isset($_GET['creative_side']) && $_GET['creative_side']=="admin")
    { ?>
        var swf_path = 'theme/default/assets/plugins/uploadify/uploadify.swf';
        var private_file = $("#creative_private").val(); 
        var submit_path = 'php/creative_files.php';
    <?php }
    else if(isset($_GET['creative_side']) && $_GET['creative_side']=="client")
        {  ?>
        var swf_path = 'admin/theme/default/assets/plugins/uploadify/uploadify.swf';
        var private_file = 0;
        var submit_path = 'admin/php/creative_files.php';
      
    <?php }
    else 
        { ?>
          var swf_path = 'theme/default/assets/plugins/uploadify/uploadify.swf';
        var private_file = $("#creative_private").val(); 
        var submit_path = 'php/creative_files.php';
        <?php }
     ?>
    $('#upload_file').uploadify({
        'swf'      : swf_path,
        'uploader' : submit_path,
        'formData'      : {'offer' : '<?php echo $creative_row['offer_id'] ?>','private' : private_file,'hidden_asset_insert':'hidden_asset_insert','status':$("#status").val(),"user_type":$("#user_type").val()},
        'onUploadSuccess' : function(file, data, response) {
          if($.trim(data) == 0)
          {
              $("#message").find(".alert").html("<?php echo $display['creative_already_exist']; ?>");
              $("#message").slideDown('slow');
                  
          }
          else if($.trim(data)=='not_proper_format')
          {
              $("#message").find(".alert").html("<?php echo $display['creative_file_not_proper_format']; ?>");
              $("#message").slideDown('slow');
          }
          else
          {
                $("#creative_file_view").append('<input type="text" class="form-control col-md-12 m-b-20" readonly="readonly" value="'+data+'" onClick="this.select()">');
                               
                var src = "get_data/creative_hidden_asset_data.php?offer_id=<?php echo $creative_row['offer_id']; ?>";
                oTable.fnReloadAjax(src);    

          }

          setTimeout(function(){
                  $("#message").slideUp('slow');
          },1500);
        } 
    });


});

function generate_tracking_domain()
{
    $(document).ajaxStart(function() {
            $("#please_waiting_div").removeClass('blind');
    });
    $.ajax({

        url: 'php/offers.php',
        type: 'POST',
       dataType: 'JSON',
        data: {
                fetch_tracking_domain : 'fetch_tracking_domain', 
                tracking_link: '<?php echo $track; ?>', 
                offer_id : '<?php echo $_GET['offer_id']; ?>',
                track_dom_id : '<?php echo $offer_row['track_domain_id']; ?>',
                creative_id : $("#creative_id").val(),
                aff_id : '<?php echo $_SESSION['comp_id']; ?>',
                aff_src : $("#aff_src_val").val(),
                aff_sub : aff_sub_values ,
                custom_var : custom_vars,
                web_link : $("#web_url").val(),
                generate_tiny_url : generate_tiny_val,
                generate_track :  '<?php echo $offer_row["generate_track"]; ?>',
                offer_url_id :  $("#offer_url_id").val()
              },
        success : function(data)
        { 
            $("#tracking_link").val(data[0]);
            $("#creative_code").val(data[1]);
            $("#preview_of_creativefile").html(data[1]);
            $(".impression_pixel_data").val(data[2]);
            $(document).ajaxComplete(function() {
                $("#please_waiting_div").addClass('blind');
            });
        }
    });
}  

function adv_offer_data(data)
{
    $(document).ajaxStart(function() {
                $("#please_waiting_div").removeClass('blind');
        });
    $.ajax({
        url: 'php/offers.php',
        type: 'POST',
        data: {        
                    adv_offer_ajax_req : 'adv_offer_ajax_req',
                    offer_id: '<?php echo $_GET['offer_id']; ?>',
                    tracking_domain_id: '<?php echo $offer_row['track_domain_id']; ?>',
                    tracking_def_link : $("#tracking_link").val(),
                    click_type : data,
                    tracking_click_type : '<?php echo $offer_row['tracking_type']; ?>',
                    encrypt_track_type : '<?php echo $offer_row['encrypt_con_track']; ?>',
                    encrypt : encrypt
              }
    })
    .done(function(data) {
        //alert(data);
        $("#tracking_link").val("");
        $("#tracking_link").val($.trim(data));
        $(document).ajaxComplete(function() {
            $("#please_waiting_div").addClass('blind');
        });
    });
    
}
</script>