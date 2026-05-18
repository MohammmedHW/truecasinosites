<script>
<?php 
    if(isset($_GET['called_from']) && $_GET['called_from']=="admin_side")
    { ?>
        var request_page = 'php/countries.php';    
     <?php }else if(isset($_GET['called_from']) && $_GET['called_from']=="client_side")
    {?>
        var request_page = 'admin/php/countries.php';    
  <?php  }
?>
    $(document).ajaxStart(function() {
            $("#please_waiting_div").removeClass('blind');
    });
    $(document).ajaxComplete(function() {
            $("#please_waiting_div").addClass('blind');
    });
    $(document).ready(function($) {

        $("#offer_clear_selec").click(function(event) {
            $(".offer_grp_name option:selected").each(function(){
                $(this).removeAttr("selected");
            });
        });
        $("#offer_all_selec").click(function(event) {
            $(".offer_grp_name option").each(function(){
                $(this).attr("selected","selected");
            });
        });    
        $(".country_add").live("click",function(event) {
            var the = $(this);
            var select_id = the.attr("rel");
                if($("#"+select_id+" option:selected").length >=  0)
                {
                    $("."+select_id+" option").each(function(){
                        if($(this).val()==0)
                        {
                            $(this).remove();
                        }
                    });
                }
                if(select_id=="get_countries")
                {
                       get_countries($("#"+select_id).val());
                }

            $("#"+select_id+" option:selected").each(function()
            {
                if($(this).val()!=""){
                    $("."+select_id).append(new Option($(this).text(),$(this).val()));
                    $(this).remove();
                }
            });
        });

        $(".country_remove").live("click",function(event) {
            var the = $(this);
            var country_id = the.attr("rel");
             $("#"+country_id+" option:selected").each(function(){
                 $("."+country_id).append(new Option($(this).text(),$(this).val()));
                 var id = $(this).val();
                 var res = id.replace(/\s/g,"_");
                 $("#"+res).remove();    
                $(this).remove();
             });
                if(country_id=="remove_country"){
                    if($("#"+country_id+" option").length==0)
                    {
                        $("#"+country_id).append($("<option></option>").val(0).html("<?php echo $display['offer_all_country']; ?>"));
                        $(".multiple_states_div").addClass("blind");
                    }
                }
                else
                {
                    if($("#"+country_id+" option").length==0)
                    {
                        $("#"+country_id).append($("<option></option>").val(0).html("<?php echo $display['offer_all_states']; ?>"))
                    }
                }
             var list_items =  [];
             $("."+country_id+" option").each(function(){
                 list_items.push($(this).html());
             });
             list_items.sort();
             $("."+country_id+" option").remove();
             $.each(list_items , function(val, text){
                  $("."+country_id).append($('<option></option>').val($.trim(text)).html($.trim(text)));
             });
        });

        jQuery("#advanced_targeting_select").change(function(event) {
            
            if($(this).val()==1)
            {
                $.ajax({
                    url: request_page,
                    type: 'POST',
                    data: {        
                                get_advanced_targetting : 'get_advanced_targetting',
                                offer_id: '<?php echo $_GET['offer_id']; ?>'
                          },
                    success:function(data)
                    {
                        $(".offer_adv_targeting").html(data);
                        $(".offer_adv_targeting").removeClass("blind");
                        <?php 
                           if(isset($_GET['called_from']) && $_GET['called_from']=="client_side")
                           { ?>
                               $(".save_rule_modal").addClass("blind");
                          <?php } 
                         ?>
                    }
                });                
            }
            else
            {
                $(".offer_adv_targeting").addClass("blind");
            }
        });
        jQuery(".add_rule_modal").live("click",function(){
            $.ajax({
                url: request_page,
                type: 'POST',
                data: {    
                            get_target_rulez: 'get_target_rulez'
                      }
            })
            .done(function(data) {
                $(".add_rule_div").html(data).promise().done(function(){
                    $.each($(".target_values_remover_at_new_add"),function(){
                        var the = $(this);
                        $.each($("#target_rules_add_rule_click option"),function(){
                            var new_the = $(this);
                            if(new_the.val()==the.attr("id"))
                            {
                                new_the.remove();
                            }
                        })
                    });
                });
                    
            });
                $(".add_rule").removeClass("blind");
                $(".save_rule").addClass("blind");
                $(".save_ruleers").addClass("blind");

        });

        jQuery(".save_rule_modal").live("click",function(){
            $.ajax({
                url: request_page,
                type: 'POST',
                data: {    
                            get_save_rulez: 'get_save_rulez'
                      }
            })
            .done(function(data) {
                $(".save_rule_div").html(data);
            });
            
                $(".add_rule").addClass("blind");
                $(".save_rule").removeClass("blind");
        });
                
        $("#create_offer_new_rule").live("click",function(){
            classname = $(this).attr("id");
            $("."+classname).slideDown('400');
            $(this).attr("disabled","disabled");
            $("#target_rule_name").attr("disabled","disabled");
            if($("#target_rule_name").val()!="0")
            {
                $(".save_rule_div_2").addClass('blind');
                $("#target_rule_name").val('0')
            }
            
        });

        $("#cancel_new_rule").live("click",function(){
            variable_name = $(this).attr("rel");
            $("."+variable_name).slideUp('400');
            $("#"+variable_name).removeAttr("disabled");
            $("#target_rule_name").removeAttr("disabled");
        });

        $("#target_rule_name").live("change",function(){
            var target_rule_id = $(this).val();
            $.ajax({
                url: request_page,
                type: 'POST',
                data: {
                             get_save_target_rule: target_rule_id 
                      }
            }).done(function(data) {
                if(data!=0)
                {
                    $(".save_rule_div_2").removeClass('blind');
                    $(".save_rule_div_2").html(data);
                    
                    $.each($(".select_option_removers"),function(){
                        var the = $(this);
                        var option_name = the.text();
                        $("#get_offer_targeting_option_variable option[value='"+option_name+"']").remove();
                    })
                }
                else
                {
                    $(".save_rule_div_2").addClass('blind');
                }
            });
        });    
        $("#save_new_rule").live('click',function(event) {
            event.preventDefault();
            if($("#target_rule_name_save").val()!="")
            {
                var name = $("#target_rule_name_save").val();
                $("#target_rule_name").append($('<option></option>').val(name).html(name));
                    $("#target_rule_name").val(name);
                    $.ajax({
                        url: request_page,
                        type: 'POST',
                        data: {
                             new_target_rule_data : 'new_target_rule_data', 
                             new_target_rule_name : name, 
                        }
                    })
                    .done(function(data) {
                            
                            $(".create_offer_new_rule").html(data);
                            $(".save_ruleers").removeClass('blind');
                    });
            }
        });
        jQuery("#get_offer_targeting_option_variable").live("change",function(){
            var the = $(this);
            name = the.val();
        
                classname = the.attr("id");
                $("."+classname).removeClass('blind');
                $(".appender").append("<tr class='appended_values'>\
                <td class='get_name' >"+name+"</td>\
                <td><input type='text' name='optional_target_vars["+name+"]' id='' class='new_target_rule_values' /></td>\
                <td><i class='icon-minus-sign text-error appended_value_remover'></i></td>\
                </tr>");
                $("#get_offer_targeting_option_variable option:selected").remove();
                $("#get_offer_targeting_option_variable").val(0);
        })
        jQuery(".appended_value_remover").live('click',function(){
                var the = $(this);
                var option_name = the.parents("tr").find(".get_name").text();
                $("#get_offer_targeting_option_variable").append($("<option></option>").val(option_name).html(option_name));
                the.parents("tr").remove();
                if($(".appended_value_remover").length==0)
                {
                    $(".get_offer_targeting_option_variable").addClass('blind');
                }
        });
        $(".save_ruleers").click(function(event) {
            event.preventDefault();
            if($(".new_target_rule_values").val()!="")
            {
                $.post(
                    request_page,
                     $("#rule_form").serialize(), 
                     function(data) {
                         if(data==1)
                        {
                            $(".success_note_message").text("<?php echo $display['offer_target_rule_saved']; ?>").addClass("alert-success").removeClass('blind alert-error ');
                            if($(".success_note_message").text()!="")
                            {
                                setTimeout(function(){ 
                                    jQuery(".popup_canceler").trigger("click");
                                },1300);
                            }
                        }
                        else
                        {
                            $(".success_note_message").text("<?php echo $display['offer_target_rule_saved_not']; ?>").addClass("alert-error").removeClass('blind alert-success');                        
                        }
                });
            }
            
        });                
        $(".update_target_values").live('click',function(event) {
                $.post(
                        request_page, 
                        ($("#rule_form").serialize()+"&"+$.param({update_rules_hidden:'update_rules_hidden'})),
                        function(data) {
                        if(data==1)
                        {
                            $(".success_note_message").text("<?php echo $display['offer_target_rule_updated']; ?>").addClass("alert-success").removeClass('blind alert-error ');
                            if($(".success_note_message").text()!="")
                            {
                                setTimeout(function(){ 
                                    jQuery(".popup_canceler").trigger("click");
                                },1300);
                            }
                        }
                        else
                        {
                            $(".success_note_message").text("<?php echo $display['offer_target_rule_updated_not']; ?>").addClass("alert-error").removeClass('blind alert-success');    
                        }
                    });
            
        });
        $(".delete_this_rule").live('click', function(event) {
              if (confirm("<?php echo $display['offer_delete_confirm']; ?>"))
              {
                  $.post(
                      request_page, 
                       ($("#rule_form").serialize()+"&"+$.param({ delete_rule_hidden:'delete_rule_hidden' })),
                      function(data) {
                      if(data==1)
                    {
                        $(".success_note_message").text("<?php echo $display['offer_target_delete_success']; ?>").addClass("alert-success").removeClass('blind alert-error ');
                        if($(".success_note_message").text()!="")
                        {
                            setTimeout(function(){ 
                                jQuery(".popup_canceler").trigger("click");
                            },1300);
                        }
                    }
                    else
                    {
                        $(".success_note_message").text("<?php echo $display['offer_target_delete_fail']; ?>").addClass("alert-error").removeClass('blind alert-success');    
                    }
                  });
              }
              else
              {
                  return false;
              }
        });
        $("#add_rule_savers").live('click',function(event){
            event.preventDefault();
            if($("#target_rules_add_rule_click").val()==0)
            {
                $("#empty_target_rule_message").text("<?php echo $display['offer_target_rule_no_select']; ?>").removeClass('blind');
            }
            else
            {
                $("#empty_target_rule_message").text("").addClass('blind');
                $.post(
                        request_page,
                        ($("#rule_form").serialize()+"&"+$.param({ add_new_rule:'add_new_rule',offer_id : '<?php echo $_GET['offer_id']; ?>' })),
                        function(data)
                        {
                            
                            if(data==1)
                            {
                                $(".success_note_message").text("<?php echo $display['offer_target_rule_inserted']; ?>").addClass("alert-success").removeClass('blind alert-error ');
                                if($(".success_note_message").text()!="")
                                {
                                    setTimeout(function(){ 
                                    jQuery(".popup_canceler").trigger("click");
                                    jQuery("#advanced_targeting_select").trigger("change");
                                    },1300);

                                }
                            }
                            else
                            {
                            $(".success_note_message").text("<?php echo $display['offer_target_rule_not_inserted']; ?>").addClass("alert-error").removeClass('blind alert-success');    
                            }
                        }
                    );
            }
        });
        $(".advnc_trgtng_actions").live('click', function(event) {
                event.preventDefault();
                var curr = $(this);
                offer_id = curr.attr("rel");
                rule_values = curr.attr("name");
                $.post(
                        request_page, 
                        {
                            delete_one_target_rule: 'delete_one_target_rule', 
                            offer_id:offer_id,
                            delete_rule_name : rule_values
                        },
                        function(data) {
                            if(data==1)
                            {
                                $(".delete_alerter").text("<?php echo $display['offer_target_rule_removed']; ?>").addClass("alert-success").removeClass('blind alert-error ');
                                if($(".delete_alerter").text()!="")
                                {
                                    setTimeout(function(){ 
                                        jQuery("#advanced_targeting_select").trigger("change");
                                    },1000);

                                }
                            }
                            else
                            {
                            $(".delete_alerter").text("<?php echo $display['offer_target_rule_removed_not']; ?>").addClass("alert-error").removeClass('blind alert-success');    
                            }
                    });
        });
        $(".save_targetting_data").click(function(event) {
            event.preventDefault();
            $(".all_data_submitter option").each(function(index, val) {
                 $(this).attr("selected","selected");

            });
            $("#targetting_form_sub").submit();
        });    
        
        $(".popup_canceler").click(function(e){
                $(".save_rule_div_2").addClass('blind');
                $("add_rule").addClass('blind');
                $("save_rule").addClass('blind');
        })
        $(document).on('keyup keydown',function(event) {
            if(event.keyCode===27)
            {
                $(".save_rule_div_2").addClass('blind');
                $("add_rule").addClass('blind');
                $("save_rule").addClass('blind');
            }
        });

        $("#rule_form").on("submit",function(event){
            event.preventDefault();
        });


    <?php 
         if($targetting['countries']!='0')
        { ?>
            $.ajax({
                url: request_page,
                type: 'POST',
                data: {
                            get_countries_with_states : 'get_countries_with_states' ,
                            country_data : '<?php echo $targetting['countries']; ?>'
                      }
            })
            .done(function(data) {
                if(data!="")
                {
                    $(".multiple_states_div").html(data).promise().done(function(){
                        $.each($(".all_data_submitter"),function(){
                            var divs = $(this);
                            var state_remove = divs.attr("id");
                            $.each($("#"+state_remove+" option"), function() {
                                var remove_city =  $(this);
                                $.each($("."+state_remove+" option"), function() {    
                                       var removed_city = $(this);
                                       if(removed_city.val() == remove_city.val())
                                       {
                                           removed_city.remove();
                                       }
                                   });
                            });
                        });
                        $("#remove_country option").each(function() {
                            var remove_cou = $(this);
                            $(".remove_country option").each(function() {
                                var removed_cou = $(this);
                                if(removed_cou.val()==remove_cou.val())
                                {
                                    removed_cou.remove();
                                }
                            });
                        });
                    });
                    $(".multiple_states_div").removeClass("blind")
                }
            });
            jQuery("#advanced_targeting_select").trigger('change');
            
<?php    }
     ?>
    });
    function get_countries(data)
    {
         $.ajax({
                    url: request_page,
                    type: 'post',
                    data: {
                            get_coutries : 'get_coutries',
                            all_countries  : data
                    },
                    success: function (data) {
                        $(".multiple_states_div").append(data);
                             $(".multiple_states_div").removeClass('blind');
                    }
                });
    }
</script>