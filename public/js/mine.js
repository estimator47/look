$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

var BaseRecord=(function() {

return {

destroynews: function(id){
var ajaxSetting = {
   method: 'delete',
   url: '/news/'+id,
   //data
   success: function(data){
       $('#back-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroynews($(this).attr('id'));
        return false;
        });
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},
 destroyobriz: function(id){
        var ajaxSetting = {
            method: 'delete',
            url: '/forms/'+id,
            //data
            success: function(data){
                $('#obriz-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroyobriz($(this).attr('id'));
                    return false;
                });
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },
 destroykalonka: function(id){
        var ajaxSetting = {
            method: 'delete',
            url: '/kalonkas/'+id,
            //data
            success: function(data){
                $('#kalonka-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroykalonka($(this).attr('id'));
                    return false;
                });
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },
  destroytip: function(id){
        var ajaxSetting = {
            method: 'delete',
            url: '/tips/'+id,
            //data
            success: function(data){
                $('#tip-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroytip($(this).attr('id'));
                    return false;
                });
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },

destroycategory: function(id){
        var ajaxSetting = {
            method: 'delete',
            url: '/categories/'+id,
            //data
            success: function(data){
                $('#category-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroycategory($(this).attr('id'));
                    return false;
                });
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
  },

destroycatalog: function(id){
var ajaxSetting = {
   method: 'delete',
   url: '/catalogs/'+id,
   //data
   success: function(data){
       $('#catalog-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroycatalog($(this).attr('id'));
        return false;
        });
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},


  destroymodel: function(id){
        var ajaxSetting = {
            method: 'delete',
            url: '/models/'+id,
            //data
            success: function(data){
                $('#model-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroymodel($(this).attr('id'));
                    return false;
                });
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },

destroymessage: function(id){
var ajaxSetting = {
   method: 'post',
   url: '/remove',
   data: {
         id: id,
      },
   success: function(data){
       BaseRecord.lisoofmessage();
   },
   error: function(data){
        alert(data.responseText);
    },
};
$.ajax(ajaxSetting);
},

lisoofmessage: function(){
var ajaxSetting = {
   method: 'get',
   url: '/xabar',
  success: function(data){
       $('#message-pannel').html(data.table);
       $('.listbuttonremove').click(function(){
        BaseRecord.destroymessage($(this).attr('id'));
        return false;
        });
   },
};
$.ajax(ajaxSetting);
},

destroyprice: function(id){
        var ajaxSetting = {
            method: 'post',
            url: '/remove_price',
            data: {
                id: id,
            },
            success: function(data){
                BaseRecord.lisoofprice();
            },
            error: function(data){
                alert(data.responseText);
            },
        };
        $.ajax(ajaxSetting);
    },

lisoofprice: function(){
        var ajaxSetting = {
            method: 'get',
            url: '/narx',
            success: function(data){
                $('#price-pannel').html(data.table);
                $('.listbuttonremove').click(function(){
                    BaseRecord.destroyprice($(this).attr('id'));
                    return false;
                });
            },
        };
        $.ajax(ajaxSetting);
    },

search: function(name){
   var ajaxSetting={
      method: 'get',
      url: '/catalog',
      data: {
         search: name,
      },
      success: function(data){
         //alert(data.table);
          $('#catalog-pannel').html(data.table);
      },
   };
   $.ajax(ajaxSetting);
},



}

})();
