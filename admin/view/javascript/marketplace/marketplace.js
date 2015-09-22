if (typeof(Marketplace) === 'undefined') {
	var Marketplace = {};
}

Marketplace.apps = {
	view: "dashboard",
	id: 0,
	ordering: "",
	cssfiles: [],
	jsfiles: [],
	list: 0,
	loaded: 0,
	update: false
};

Marketplace.loadweb = function(url) {
	if ('' == url) { return false; }

	url += '&list='+(Marketplace.apps.list ? 'list' : 'grid')+'&version='+apps_version+'&token='+token;

	$('#marketplace-loading')
		.css("top", $('.panel-body').position().top - $(window).scrollTop())
		.css("left", $('.panel-body').position().left - $(window).scrollLeft())
		.css("width", $('.panel-body').outerWidth())
		.css("height", $('.panel-body').outerHeight());

	$.ajax({
		url: url,
		dataType: 'jsonp',
		cache: true,
		jsonpCallback: "arapi_jsonpcallback",
		beforeSend: function () {
			elem = $('<div id="marketplace-loading" class="text-center"><div class="loading-wrap"><i class="fa fa-spinner fa-spin checkout-spin"></i></div></div>')
				.css("background", "50% 15% no-repeat rgba(224, 224, 224, 0.8)")
				.css("top", $('.panel-body').offset().top - $(window).scrollTop())
				.css("left", $('.panel-body').offset().left - $(window).scrollLeft())
				.css("width", $('.panel-body').outerWidth())
				.css("height", $('.panel-body').outerHeight())
				.css("position", "fixed")
				.css("z-index", "1000")
				.css("opacity", "0.80")
				.css("-ms-filter", "progid:DXImageTransform.Microsoft.Alpha(Opacity = 80)")
				.css("filter", "alpha(opacity = 80)")
				.appendTo('.panel-body');
		},
		success: function (response) {
			if (response.error) {
				$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> '+response.error.warning+'<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			} else {
				$('.panel-body').html(response.html);
			}
		},
		fail: function() {
			$('#marketplace-loading').hide();
			$('#web-loader-error').show();
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('#marketplace-loading').hide();
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
	return true;
};

var step = new Array();
Marketplace.installfromweb = function (product_id, product_name, product_version, obj) {
	$.ajax({
		url: 'index.php?route=extension/installer/install&token=' + token,
		dataType: 'json',
		type: 'post',
		data   : {product_id: product_id, store: store},
		beforeSend: function () {
			$(obj).html('<div class="install-loading" class="text-center"><i class="fa fa-spinner fa-spin"></i></div>');
			$(obj).attr('disabled', 'disabled');
		},
		success: function(json) {
			if (json['error']) {
				$('html, body').animate({ scrollTop: 0 }, 'slow');
				$('.alert, .text-danger').remove();
				$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			if (json['step']) {
				step = json['step'];
				next(product_id, product_name, product_version);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
	return true;
};

Marketplace.apps.initialize = function() {
	Marketplace.apps.loaded = 1;
	Marketplace.loadweb(baseUrl+'index.php?route=extension/marketplace/api&api=api/marketplace');
};

$(document).on('keypress', '#marketplace-search-input', function(event) {
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '13'){
			var search = $(this).val();
			var searchFilter = $('#marketplace-search-option').val();

			var store_name = '&store=extensions';
            if(store != '') {
                store_name = '&store=' + store;
            }

			Marketplace.loadweb( baseUrl + 'index.php?route=extension/marketplace/api&api=api/search&search=' + search + '&type=' + searchFilter + store_name );
		}
});

function searchFilter (store_id, store_name) {
	$('#marketplace-search-option').val(store_id);
	store = store_name.toLowerCase();
}

function next(product_id, product_name, product_version) {
	data = step.shift();
	if (data) {
		$.ajax({
			url: data.url,
			type: 'post',
			dataType: 'json',
			data   : {path: data.path, store: store, product_id: product_id, product_name: product_name, product_version: product_version},
			success: function(json) {
				$('.alert-success, .alert-danger').remove();

				if (json['error']) {
					$('html, body').animate({ scrollTop: 0 }, 'slow');
					$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}

				if (json['success']) {
					$('html, body').animate({ scrollTop: 0 }, 'slow');
					$('.install-loading').html('<i class="fa fa-check"></i>');
					$('.panel.panel-default').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="success">&times;</button></div>');
				}

				if (!json['error'] && !json['success']) {
					next(product_id, product_name, product_version);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

$(document).on('click', '.uninstall-button', function(e) {
	$.ajax({
		url: 'index.php?route=extension/installer/uninstall&product_id=' + $(this).attr('data-product-id') + '&token=' + token,
		dataType: 'json',
		beforeSend: function() {
			if(!confirm('Are you sure ?')) {
				return false;
			}
			$(e.target).children('.fa').addClass('fa-spinner fa-spin');
			$(e.target).children('.fa').removeClass('fa-minus');
			$(e.target).attr('disabled', 'disabled');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();
			$('html, body').animate({ scrollTop: 0 }, 'slow');

			if (json['error']) {
				$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			if (json['success']) {
				$(e.target).children('.fa').removeClass('fa-spinner fa-spin');
				$(e.target).children('.fa').addClass('fa-plus');
				$('.install-loading').html('<i class="fa fa-check"></i>');
				$('.panel.panel-default').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="success">&times;</button></div>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$(document).on('click', '.uninstall-button-product', function() {
	clicked_button = $('.uninstall-button-product');
	$.ajax({
		url: 'index.php?route=extension/installer/uninstall&product_id=' + $(this).attr('data-product-id') + '&token=' + token,
		dataType: 'json',
		beforeSend: function() {
			if(!confirm('Are you sure ?')) {
				return false;
			}
			$(clicked_button).children('.fa').addClass('fa-spinner fa-spin');
			$(clicked_button).children('.fa').removeClass('fa-minus');
			$(clicked_button).attr('disabled', 'disabled');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();
			$('html, body').animate({ scrollTop: 0 }, 'slow');

			if (json['error']) {
				$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			if (json['success']) {
				$(clicked_button).html('<i class="fa fa-plus"></i> Install');
				$('.panel.panel-default').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="success">&times;</button></div>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// Set last page opened on the menu
$(document).on('click', '#marketplace-menu a[onclick]', function() {
	sessionStorage.setItem('marketplace-menu', $(this).attr('onclick'));
});