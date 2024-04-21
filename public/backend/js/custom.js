

jQuery(document).ready(function(){

    // jQuery(document).on('click', '.catEdit',function(e){
    //     e.preventDefault();

    //     var catId=jQuery(this).val();
    //     $.ajax({
    //         url:'catedit/'+catId,
    //         type:'GET',
    //         dataType:'json',
    //         success:function(result){
    //             jQuery("#name").val(result.data.name);
    //             jQuery("#des").val(result.data.des);
    //             jQuery("#tag").val(result.data.tag);
                
    //             jQuery(".sts").val(result.data.status);
    //             if(result.data.status==1){
    //                 jQuery(".sts").text("Active");
    //             }
    //             else{
    //                 jQuery(".sts").text("Inactive");
    //             }
                
    //         }
    //     });
    // });


    // showData();
    // function showData(){
    //     $.ajax({
    //         url:'catshow',
    //         type:'GET',
    //         datatype:'json',
    //         success:function(result){
    //             var sl=1;
    //             jQuery(".tbody").html('');
    //             $.each(result.data, function(key, item){
    //                 jQuery(".tbody").append('<tr>\
    //                 <td>'+sl+'</td>\
    //                 <td>'+item.name+'</td>\
    //                 <td>'+item.des+'</td>\
    //                 <td>'+item.tag+'</td>\
    //                 <td>'+item.status+'</td>\
    //                 <td>\
    //                   <button data-target="#editCategory" data-toggle="modal" class="btn btn-sm btn-info catEdit" value="'+item.id+'" ><i class="fa fa-edit"></i></button>\
    //                   <button  value="'+item.id+'" >Delete</button>\
    //                 </td>\
    //               </tr>');
    //               sl++;
    //             });
    //         }
    //     });
    // }

    // jQuery(".addCategory").click(function(){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     var name=jQuery(".name").val();
    //     var des=jQuery(".des").val();
    //     var tag=jQuery(".tag").val();
    //     var status=jQuery(".status").val();

    //     $.ajax({
    //         url:'catinsert',
    //         type:'POST',
    //         dataType:'json',
    //         data:{
    //             'name':name,
    //             'des':des,
    //             'tag':tag,
    //             'status':status
    //         },
    //         success: function(result){
    //             if(result.success == 'faild'){
    //                 jQuery(".nameError").text(result.errors.name);
    //                 jQuery(".desError").text(result.errors.des);
    //                 jQuery(".tagError").text(result.errors.tag);

    //             }
    //             else{
    //                 showData();
    //                 jQuery(".msg").append('<div class="alert alert-success">'+result.msg+'</div>');
    //                 jQuery("#addCategory").modal('hide');
    //                 jQuery("#addCategory").find('input').val('');
    //                 jQuery("#addCategory").find('textarea').val('');
    //                 jQuery(".msg").fadeOut(5000);
                    
    //             }
    //         }
    //     });
    // });

    // $('#product_description').summernote();
    
    jQuery('.search').keyup(function(){
        var search=jQuery(this).val();
        if(search != ""){
            jQuery(".tabledata").show();
            $.ajax({
            url:'/admin/tax/searchData/'+search,
            type:'get',
            dataType:'json',
            success:function(result){
                 console.log(result)
                var tabledata='<table class="table" border="1">\
                          <tr>\
                              <th>ভোটার আইডি নং  </th>\
                              <th>নাম</th>\
                              <th>ওয়ার্ড নং</th>\
                              <th>ইউনিয়ন</th>\
                              <th>হোল্ডিং নং</th>\
                          </tr>';
                if(result.status='success'){
                    
                     $.each(result.data, function(key, item){
                        
                        tabledata += '<tr>\
                             <td name="id">'+item.nid+'</td>\
                             <td name="name">'+item.khana_prodhaner_name+'</td>\
                             <td>'+item.word+'</td>\
                             <td>'+item.dakghor+'</td>\
                             <td>'+item.holding_number+'</td>\
                        </tr>';
                     });
                    tabledata +='</table>';
                    
                }
                else if(result.status='no'){
                   tabledata +='<tr><th>Data Not Found</th></tr>';
                   tabledata +='</table>';
                }
               jQuery(".tabledata").html(tabledata);
                
            }
        });
        }
        else{
            jQuery(".tabledata").hide();
        }
    });
    
    jQuery(document).on('click', 'td', function(){
       // alert("OK");
       var currentRow=$(this).closest("tr");
       var name=currentRow.find("td:eq(1)").text();
       var nid=currentRow.find("td:eq(0)").text();
         jQuery(".search").val(name);
         jQuery(".tabledata").hide();
        //  jQuery(".tabledata").show();
            $.ajax({
            url:'/admin/tax/findforTax/'+nid,
            type:'get',
            dataType:'json',
            success:function(result){
                jQuery("#name").val(result.data.khana_prodhaner_name);
                jQuery("#holdingNumber").val(result.data.holding_number);
                jQuery("#pitarName").val(result.data.pitar_nam);
                jQuery("#gram").val(result.data.gram);
                jQuery("#wordNumber").val(result.data.word);
                jQuery("#sid").val(result.data.id);
                jQuery("#mobile").val(result.data.mobile);
                jQuery("#kor").val(result.data.apnar_tax);
            }
            });
    });
    
    // jQuery(".search").blur(function(){
    //     jQuery(".tabledata").hide();
    // });
    
    jQuery(document).on('change','#search_word_no', function(){
        var word=jQuery(this).val();
        jQuery(".textword").text(word);
        $.ajax({
           url:'byword/'+word,
           dataType:'json',
           type:'get',
           success:function(result){
               var alldata="";
               jQuery(".data").html("");
               $.each(result.data, function(key, item){
                    alldata +='<tr><td>'+item.holding+'</td>\
            	    <td class="text-left">'+item.homeowner+'</td>\
            	    <td class="text-left">'+item.fname+'</td>\
            	    <td>'+item.occupation+'</td>\
            	    <td>'+item.nid+'</td>\
            	    <td>'+item.area+'</td>\
            	    <td>'+item.members+'</td>\
            	    <td>'+item.hometype+'</td>\
            	    <td>'+item.tax+'</td>\
            	    <td>&nbsp;</td>\
            	    <td>&nbsp;</td>\
            	    <td>&nbsp;</td>\
            	    <td>&nbsp;</td>\
            	    <td>&nbsp;</td></tr>'
               });
               jQuery(".data").append(alldata);
           }
        });
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});