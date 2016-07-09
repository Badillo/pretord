$(function() {


	/********* Categories Methods ***********/
    $('#add_category').on('click', function() {
        var name = $('#name').val();
        if (name != '') {
            var _token = $('#_token').val();

            $.ajax({
                url: main_path + '/admin/categories/store',
                type: 'post',
                data: {
                    name: name,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $('#name').val('');

                        $("#categories-table").empty();
                        $("#categories-table").html(construct_categories_table(response.categories));
                    }
                }
            });
            return true;
        }

        alert('Debes ingresar una categoria');
        return false;
    });

    $('#edit_category').on('click', function() {
        var name = $('#edit_name').val();;

        if (name != '') {
            var id = $('#edit_id').val();
            var _token = $('#_token').val();

            $.ajax({
                url: main_path + '/admin/categories/edit',
                type: 'post',
                data: {
                    id: id,
                    name: name,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $('#edit_name').val('');
                        $('#edit_id').val('');

                        $("#categories-table").empty();
                        $("#categories-table").html(construct_categories_table(response.categories));
                    }
                }
            });
            return true;
        }

        alert('Debes escribir la categoria a editar');
        return false;
    });

    $("#categories-table").on('click', '.edit_category', function() {
        var category_id = $(this).data('id');
        var category_name = $('#category_name_' + category_id).html();

        $('#edit_name').val(category_name);
        $('#edit_id').val(category_id);
    });

    $("#categories-table").on('click', '.delete_category', function() {
        var id = $(this).data('id');
        var name = $('#category_name_' + id).html();
        var _token = $('#_token').val();

        if (confirm('¿Desea eliminar la categoria "' + name + '"?')) {
            $.ajax({
                url: main_path + '/admin/categories/delete',
                type: 'post',
                data: {
                    id: id,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $("#categories-table").empty();
                        $("#categories-table").html(construct_categories_table(response.categories));
                    }
                }
            });
            return true;
        }

        return false;
    });

    function construct_categories_table(categories) {
        var categories_table = '';

        $.each(categories, function(i, category) {
            categories_table += '<tr>' +
                '<td id="category_name_' + category.id + '">' + category.name + '</td>' +
                '<td class="text-center">' +
                '<div class="btn-group btn-group-xs">' +
                '<a data-id="' + category.id + '" class="btn btn-xs btn-default edit_category" data-original-title="Editar">Editar</a>' +
                '<a data-id="' + category.id + '" title="Eliminar" class="btn btn-danger delete_category">X</a>' +
                '</div>' +
                '</td>' +
                '</tr>';
        });

        return categories_table;
    }

    /********* Collections Methods ***********/
    $('#add_collection').on('click', function() {
        var name = $('#name').val();
        if (name != '') {
            var _token = $('#_token').val();

            $.ajax({
                url: main_path + '/admin/collections/store',
                type: 'post',
                data: {
                    name: name,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $('#name').val('');

                        $("#collections-table").empty();
                        $("#collections-table").html(construct_collections_table(response.collections));
                    }
                }
            });
            return true;
        }

        alert('Debes ingresar una colección');
        return false;
    });

    $('#edit_collection').on('click', function() {
        var name = $('#edit_name').val();;

        if (name != '') {
            var id = $('#edit_id').val();
            var _token = $('#_token').val();

            $.ajax({
                url: main_path + '/admin/collections/edit',
                type: 'post',
                data: {
                    id: id,
                    name: name,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $('#edit_name').val('');
                        $('#edit_id').val('');

                        $("#collections-table").empty();
                        $("#collections-table").html(construct_collections_table(response.collections));
                    }
                }
            });
            return true;
        }

        alert('Debes escribir la colección a editar');
        return false;
    });

    $("#collections-table").on('click', '.edit_collection', function() {
        var collection_id = $(this).data('id');
        var collection_name = $('#collection_name_' + collection_id).html();

        $('#edit_name').val(collection_name);
        $('#edit_id').val(collection_id);
    });

    $("#collections-table").on('click', '.delete_collection', function() {
        var id = $(this).data('id');
        var name = $('#collection_name_' + id).html();
        var _token = $('#_token').val();

        if (confirm('¿Desea eliminar la colección "' + name + '"?')) {
            $.ajax({
                url: main_path + '/admin/collections/delete',
                type: 'post',
                data: {
                    id: id,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $("#collections-table").empty();
                        $("#collections-table").html(construct_collections_table(response.collections));
                    }
                }
            });
            return true;
        }

        return false;
    });

    function construct_collections_table(collections) {
        var collections_table = '';

        $.each(collections, function(i, collection) {
            collections_table += '<tr>' +
                '<td id="collection_name_' + collection.id + '">' + collection.name + '</td>' +
                '<td class="text-center">' +
                '<div class="btn-group btn-group-xs">' +
                '<a data-id="' + collection.id + '" class="btn btn-xs btn-default edit_collection" data-original-title="Editar">Editar</a>' +
                '<a data-id="' + collection.id + '" title="Eliminar" class="btn btn-danger delete_collection">X</a>' +
                '</div>' +
                '</td>' +
                '</tr>';
        });

        return collections_table;
    }

    /********* Products Methods ***********/
    $('#add_product').on('click', function() {
		var name        = $('#name').val();
		var description = $('#description').val();
		var price       = $('#price').val();
		var image       = $('#image').prop('files')[0];
		var isOffer     = ($('#isOffer').prop( "checked" ) ? 1 : 0);
		var isDuo       = ($('#isDuo').prop( "checked" ) ? 1 : 0);
		var type        = $('#type').val();
		var category    = $('#category').val();
		var collection  = $('#collection').val();
		var _token      = $('#_token').val();

		if (name != '' && description != '') {
			var formData    = new FormData();

	        formData.append('name',name);
	        formData.append('description',description);
	        formData.append('price',price);
	        formData.append('image',image);
	        formData.append('isOffer',isOffer);
	        formData.append('isDuo',isDuo);
	        formData.append('type',type);
	        formData.append('category',category);
	        formData.append('collection',collection);
	        formData.append('_token',_token);        

	        $.ajax({
		        url: main_path + '/admin/products/store',
		        type: 'post',
		        data: formData,
		        dataType:'json',
		        cache: false,
		        contentType: false,
		        processData: false,
		        statusCode: {
					200: function(response) {
						/*
						$("#products-table").empty();
	                    $("#products-table").html(construct_collections_table(response.products));*/
	                    console.log('Listo');
					}
				}

	            
	        });

	        return true;
    	}

        alert('Debes ingresar un nombre y descripción');
        return false;
    });





    $("#products-table").on('click', '.edit_product', function() {
        var id = $(this).data('id');

        var name        = $('#product_data_' + id).data('name');
		var description = $('#product_data_' + id).data('description');
		var price       = $('#product_data_' + id).data('price');
		var image       = $('#product_data_' + id).data('image');
		var isOffer     = $('#product_data_' + id).data('isoffer');
		var isDuo       = $('#product_data_' + id).data('isduo');
		var type        = $('#product_data_' + id).data('type');
		var category    = $('#product_data_' + id).data('category');
		var collection  = $('#product_data_' + id).data('collection');
        
        $('#edit_name').val(name);
		$('#edit_description').val(description);
		$('#edit_price').val(price);
		$('#logo_image').attr('src', main_path + '/' + image);
		(isOffer == 1 ? isOffer = true : isOffer = false );
		$('#edit_isOffer').prop('checked', isOffer);
		(isDuo == 1 ? isDuo = true : isDuo = false );
		$('#edit_isDuo').prop('checked', isDuo);
		$('#edit_type_product').val(type);
		$('#edit_category_product').val(category);
		$('#edit_collection_product').val(collection);        
    });


    $('#edit_product').on('click', function() {
        var name = $('#edit_name').val();;

        if (name != '') {
            var id = $('#edit_id').val();
            var _token = $('#_token').val();

            $.ajax({
                url: main_path + '/admin/products/edit',
                type: 'post',
                data: {
                    id: id,
                    name: name,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $('#edit_name').val('');
                        $('#edit_id').val('');

                        $("#products-table").empty();
                        $("#products-table").html(construct_products_table(response.products));
                    }
                }
            });
            return true;
        }

        alert('Debes escribir la colección a editar');
        return false;
    });

    

    $("#products-table").on('click', '.delete_product', function() {
        var id = $(this).data('id');
        var name = $('#product_name_' + id).html();
        var _token = $('#_token').val();

        if (confirm('¿Desea eliminar la colección "' + name + '"?')) {
            $.ajax({
                url: main_path + '/admin/products/delete',
                type: 'post',
                data: {
                    id: id,
                    _token: _token
                },
                dataType: 'json',
                statusCode: {
                    200: function(response) {
                        $("#products-table").empty();
                        $("#products-table").html(construct_products_table(response.products));
                    }
                }
            });
            return true;
        }

        return false;
    });

    function construct_products_table(products) {
        var products_table = '';

        $.each(products, function(i, product) {
            products_table += '<tr>' +
                '<td id="product_name_' + product.id + '">' + product.name + '</td>' +
                '<td class="text-center">' +
                '<div class="btn-group btn-group-xs">' +
                '<a data-id="' + product.id + '" class="btn btn-xs btn-default edit_product" data-original-title="Editar">Editar</a>' +
                '<a data-id="' + product.id + '" title="Eliminar" class="btn btn-danger delete_product">X</a>' +
                '</div>' +
                '</td>' +
                '</tr>';
        });

        return products_table;
    }

    
});
