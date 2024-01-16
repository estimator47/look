$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

let BaseRecord = (function () {

    return {
        /* frontend part */
        sort: function (fabric, id) {
            let ajaxSetting = {
                method: 'get',
                url: '/product/' + fabric,
                data: {
                    sort: id,
                },
                success: function (data) {
                    //    alert(data.table);
                    $('#product-panel').html(data.table);
                    $('.sort').click(function () {
                        BaseRecord.sort($(this).attr('id'));
                        return false;
                    });
                    $('#input-sort').change(function () {
                        BaseRecord.sort($('#fabric_input').val(), $(this).val());
                        return false;
                    });
                },
            };
            $.ajax(ajaxSetting);
        },

        /* product search method  */
        search: function (title) {
            let ajaxSetting = {
                method: 'get',
                url: '/product/cotton/',
                data: {
                    search: title,
                },
                success: function (data) {
                    $('#product-panel').html(data.table);
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        /* getting more blogs */
        more: function (id) {
            let ajaxSetting = {
                method: 'get',
                url: '/blog/more',
                data: {
                    more: Number(id),
                },
                success: function (data) {
                    // alert(data.table);
                    let more = Number(id) + 1;
                    $('#blog-list').append(data.table);
                    $('#next').html(more)
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        /* blog search method */
        searchBlog: function (title) {
            let ajaxSetting = {
                method: 'get',
                url: '/blog/all/',
                data: {
                    search: title,
                },
                success: function (data) {
                    $('#blog-list').html(data.table);
                    $('#next_button').css('display', 'none')
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        /* Back end*/

        destroyMaterial: function (id) {
            let ajaxSetting = {
                method: 'delete',
                url: '/materials/' + id,
                //data
                success: function (data) {
                    $('#material-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyMaterial($(this).attr('id'));
                        return false;
                    });
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        // destroyBlog: function(id){
        //     let ajaxSetting = {
        //         method: 'delete',
        //         url: '/blogs/'+id,
        //         //data
        //         success: function(data){
        //             $('#blog-pannel').html(data.table);
        //             $('.btn-tbl-delete').click(function(){
        //                 BaseRecord.destroyBlog($(this).attr('id'));
        //                 return false;
        //             });
        //         },
        //         error: function(data){
        //             alert(data.responseText);
        //         },
        //     };
        //     $.ajax(ajaxSetting);
        // },

        // destroyCatalog: function(id){
        //     let ajaxSetting = {
        //         method: 'delete',
        //         url: '/types/'+id,
        //         success: function(data){
        //             $('#type-pannel').html(data.table);
        //             $('.btn-tbl-delete').click(function(){
        //                 BaseRecord.destroyCatalog($(this).attr('id'));
        //                 return false;
        //             });
        //         },
        //         error: function(data){
        //             alert(data.responseText);
        //         },
        //     };
        //     $.ajax(ajaxSetting);
        // },


        destroyBlog: function (id) {
            let ajaxSetting = {
                method: 'post',
                url: '/remove-blog',
                data: {
                    id: id,
                },
                success: function (data) {
                    $('#blog-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyBlog($(this).attr('id'));
                        return false;
                    });
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        destroyProduct: function (id) {
            let ajaxSetting = {
                method: 'post',
                url: '/remove-product',
                data: {
                    id: id,
                },
                success: function (data) {
                    $('#catalog-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyProduct($(this).attr('id'));
                        return false;
                    });
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        destroyMessage: function (id) {
            let ajaxSetting = {
                method: 'post',
                url: '/remove',
                data: {
                    id: id,
                },
                success: function (data) {
                    BaseRecord.lisoofmessage();

                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },
        lisoofmessage: function () {
            let ajaxSetting = {
                method: 'get',
                url: 'message_list',
                success: function (data) {
                    $('#message-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyMessage($(this).attr('id'));
                        return false;
                    });
                },
            };
            $.ajax(ajaxSetting);
        },


        destroyCertificateType: function (id) {
            var ajaxSetting = {
                method: 'delete',
                url: '/remove-certificate-type/' + id,
                //data
                success: function (data) {
                    $('#certificate-type-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyCertificateType($(this).attr('id'));
                        return false;
                    });
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },

        destroyCertificateFile: function (id) {
            var ajaxSetting = {
                method: 'post',
                url: '/remove-certificate/' + id,
                //data
                success: function (data) {
                    $('#certificate-pannel').html(data.table);
                    $('.btn-tbl-delete').click(function () {
                        BaseRecord.destroyCertificateFile($(this).attr('id'));
                        return false;
                    });
                },
                error: function (data) {
                    alert(data.responseText);
                },
            };
            $.ajax(ajaxSetting);
        },


    }

})();
