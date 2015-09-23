<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']                    = 'Configuración';

// Text
$_['text_stores']                      = 'Stores';
$_['text_success']                     = 'Correcto: Ha Modificado Configuración!';
$_['text_edit']                        = 'Editar configuración';
$_['text_product']                     = 'Productos';
$_['text_review']                      = 'Comentarios';
$_['text_voucher']                     = 'Certificados de Regalos';
$_['text_tax']                         = 'Impuestos';
$_['text_account']                     = 'Cuenta';
$_['text_checkout']                    = 'Pagar';
$_['text_stock']                       = 'Inventario';
$_['text_affiliate']                   = 'Afiliados';
$_['text_return']                      = 'Devoluciones';
$_['text_shipping']                    = 'Dirección de Envío';
$_['text_payment']                     = 'Dirección de Pago';
$_['text_phpmail']                     = 'PHP Mail';
$_['text_sendmail']                    = 'Sendmail';
$_['text_smtp']                        = 'SMTP';
$_['text_google_analytics']            = 'Google Analytics';
$_['text_google_captcha']              = 'Google reCAPTCHA';
$_['text_smtp_encryption_n']           = 'None';
$_['text_smtp_encryption_s']           = 'SSL';
$_['text_smtp_encryption_t']           = 'TLS';
$_['text_common']           		   = 'Common';
$_['text_summernote']        		   = 'Summernote';
$_['text_tinymce']  		           = 'TinyMCE';
$_['text_seo_urls']  		           = 'SEO URLs';
$_['text_seo_metadata']  		       = 'Metadata';
$_['text_seo_sitemap']  		       = 'Sitemap';
$_['text_seo_category_last']           = 'Only Last Category';
$_['text_seo_category_all']            = 'All Parent + Child Categories';
$_['text_seo_www_red_with']            = 'With www';
$_['text_seo_www_red_non']             = 'Without www';
$_['text_metadata']                    = 'Metadata';
$_['text_meta_title_add_pre']          = 'Yes, before their title';
$_['text_meta_title_add_post']         = 'Yes, after their title';
$_['text_secure_checkout']             = 'Account & Checkout';
$_['text_secure_catalog']              = 'Catalog';
$_['text_secure_all']                  = 'All Site (Catalog + Admin)';
$_['text_firewall']                    = 'Firewall';
$_['text_upload']                      = 'Uploads';
$_['text_sec_get']                     = 'GET (URL data)';
$_['text_sec_post']                    = 'POST (Form data)';
$_['text_cache_storage_file']          = 'File';
$_['text_pagecache']                   = 'Page Cache';
$_['text_cache_clear']                 = 'Clear Cache';
$_['text_cache_cleared']               = 'Cache Successfully Cleaned';
$_['text_error_basic']                 = 'Basic';
$_['text_error_advanced']              = 'Advanced';

// Entry
$_['entry_name']                       = 'Nombre de la Tienda:';
$_['entry_owner']                      = 'Gerente de la Tienda:';
$_['entry_address']                    = 'Dirección:';
$_['entry_geocode']                    = 'GeoCode';
$_['entry_email']                      = 'E-Mail:';
$_['entry_telephone']                  = 'Teléfono:';
$_['entry_fax']                        = 'Fax:';
$_['entry_image']                      = 'Imagen';
$_['entry_open']                       = 'Horario de apertura';
$_['entry_comment']                    = 'Comentario';
$_['entry_location']                   = 'Ubicación de la Tienda';
$_['entry_meta_title']                 = 'Meta Title';
$_['entry_meta_description']           = 'Descripción Etiquetas Meta:';
$_['entry_meta_keyword']               = 'Meta Tag Keywords';
$_['entry_layout']                     = 'Ubicación Predeterminada:';
$_['entry_template']                   = 'Plantilla:';
$_['entry_country']                    = 'País:';
$_['entry_zone']                       = 'Ciudad / Provincia:';
$_['entry_language']                   = 'Idioma:';
$_['entry_admin_language']             = 'Idioma de Administración:';
$_['entry_currency']                   = 'Moneda:<br /><span class="help">Cambie la moneda predeterminada. Limpie el cache del explorador para ver los cambios y resetee su cookie existente.</span>';
$_['entry_currency_auto']              = 'Auto Actualizar Moneda:<br /><span class="help">Configure su tienda para que actualice automaticamente su moneda diariamente.</span>';
$_['entry_length_class']               = 'Tipo de Medida:';
$_['entry_weight_class']               = 'Tipo de Peso:';
$_['entry_product_limit']              = 'Elementos predeterminados por página (Catálogo)';
$_['entry_product_description_length'] = 'Límite lista Descripción(Catálogo)';
$_['entry_limit_admin']                = 'Elementos predeterminados por página (Admin)';
$_['entry_product_count']              = 'Conteo de Productos en Categoría:<br /><span class="help">Muestra el número de productos dentro de las subcategorías en el Menú Principal de Categorías de la Tienda. <b>Se advierte, esto causará una ejecución extrema para tiendas con una gran cantidad de subcategorías!</b></span>';
$_['entry_review']                     = 'Permitir Comentarios:<br /><span class="help">Habilitar/Deshabilitar nuevos Comentarios y mostrar los existentes</span>';
$_['entry_review_guest']               = 'Permitir comentarios';
$_['entry_review_mail']                = 'Nuevo informe alerta Mail';
$_['entry_voucher_min']                = 'Monto mínimo Certificado:<br /><span class="help">Monto mínimo para que un Cliente pueda comprar un Certificado.</span>';
$_['entry_voucher_max']                = 'Monto máximo Certificado:<br /><span class="help">Monto máximo para que un Cliente pueda comprar un Certificado.</span>';
$_['entry_tax']                        = 'Ver Precios con Impuesto:';
$_['entry_tax_default']                = 'Usar el Impuesto de la Tienda:<br /><span class="help">Use la dirección de la tienda para calcular los impuestos si nadie está Conectado. Usted puede escoger usar la Dirección de la Tienda para los Envios de los Clientes o la Dirección de Facturación.</span>';
$_['entry_tax_customer']               = 'Usar el Impuesto por Dirección Cliente:<br /><span class="help">Usar la Dirección predeterminada del Cliente cuando inician sesión para Calcular los Impuestos. Usted puede escoger usar la Dirección de Envío predeterminada para los Envíos de los Cliente o la Dirección de Facturación.</span>';
$_['entry_customer_online']            = 'Clientes en línea';
$_['entry_customer_group']             = 'Grupo de Clientes:<br /><span class="help">Grupo de Clientes predeterminado.</span>';
$_['entry_customer_group_display']     = 'Grupos de Clientes:<br /><span class="help">Muestra Grupos de Clientes para que los Nuevos Clientes puedan seleccionarlos y usarlos para Venta o Negocio cuando se Registren.</span>';
$_['entry_customer_price']             = 'Conectado muestra Precios:<br /><span class="help">Solo muestra precios cuando el Cliente se conecta.</span>';
$_['entry_login_attempts']             = 'Máximo de intentos de inicio de sesión';
$_['entry_account']                    = 'Términos de Cuenta:<br /><span class="help">Forzar antes a los Clientes a estar de Acuerdo con los términos para que una Cuenta pueda ser creada.</span>';
$_['entry_account_mail']               = 'Correo de Alerta Nueva Cuenta:<br /><span class="help">Envía un email a la Tienda cuando una Nueva Cuenta se ha Registrado.</span>';
$_['entry_api']                        = 'Usuario API';
$_['entry_cart_weight']                = 'Mostrar Peso en la pägina del Carro:<br /><span class="help">Mostrar el peso del carro en la página del carro de de compras</span>';
$_['entry_checkout_guest']             = 'Compra como invitado';
$_['entry_checkout']                   = 'Términos de Pago:<br /><span class="help">Forzar antes a los Clientes a estar de Acuerdo con los términos para que Cliente pueda Pagar.</span>';
$_['entry_invoice_prefix']             = 'Prefijo de Factura:<br /><span class="help">Configure el prefijo de la Factura (ejemplo FAC-2011-00). ID de Factura comenzará con 1 por cada prefijo único</span>';
$_['entry_order_status']               = 'Estado Orden:<br /><span class="help">Configure el Estado predeterminado de la Orden cuando es Procesada.</span>';
$_['entry_processing_status']          = 'Estado de la orden de procesamiento';
$_['entry_complete_status']            = 'Estado Orden Completa:<br /><span class="help">Configure el Estado que la Orden de los Clientes deben alcanzar antes que puedan accesar sus Productos Descargables y Certificados de Regalos.</span>';
$_['entry_order_mail']                 = 'E-mail de Alerta Nuevo pedido';
$_['entry_mail_alert']                 = 'Alertas de E-mail adicionales';
$_['entry_stock_display']              = 'Mostrar Inventario:<br /><span class="help">Muestra cantidad de inventario en la página de productos.</span>';
$_['entry_stock_warning']              = 'Muestra advertencia de Agotado:<br /><span class="help">Mostrar mensaje de Agotado en la página del Carro de Compras si un producto se encuentra Agotado y el campo Compra de Producto Agotado es SI. (Aviso: Siempre se muestra si el campo Compra de Producto Agotado es NO)</span>';
$_['entry_stock_checkout']             = 'Compra de Producto Agotado:<br /><span class="help">Permite a los Clientes a continuar el proceso de Pago aunque los Productos que han ordenado no se encuentran en Existencia.</span>';
$_['entry_affiliate_approval']         = 'Afiliado requiere aprobación';
$_['entry_affiliate_auto']             = 'Comisión automática';
$_['entry_affiliate_commission']       = 'Comisión de Afiliación (%)';
$_['entry_affiliate']                  = 'Términos de Afiliado:<br /><span class="help">Forzar antes a los Clientes a estar de Acuerdo con los términos para que una Cuenta de Afiliado pueda ser creada.</span>';
$_['entry_affiliate_mail']             = 'E-mail de Alerta nuevo afiliado';
$_['entry_return']                     = 'Condiciones de devoluciones';
$_['entry_return_status']              = 'Estado de Devolución:<br /><span class="help">Configure el Estado predeterminado de la Devolución cuando una solicitud es recibida.</span>';
$_['entry_logo']                       = 'Logotipo Tienda:<br /><span class="help">Predeterminado 268px x 50px</span>';
$_['entry_icon']                       = 'Icono:<br /><span class="help">El ícono debe ser un archivo PNG de 16px x 16px.</span>';
$_['entry_image_category']             = 'Tamaño imagen lista de Categoría:<br /><span class="help">Predeterminado 80px x 80px</span>';
$_['entry_image_thumb']                = 'Tamaño imagen miniatura del Producto:<br /><span class="help">Predeterminado 228px x 228px</span>';
$_['entry_image_popup']                = 'Tamaño imagen emergente del Producto:<br /><span class="help">Predeterminado 500px x 500px</span>';
$_['entry_image_product']              = 'Tamaño imagen lista del Producto:<br /><span class="help">Predeterminado 80px x 80px</span>';
$_['entry_image_additional']           = 'Tamaño imagen adicional del Producto:<br /><span class="help">Predeterminado 74px x 74px</span>';
$_['entry_image_related']              = 'Tamaño imagen Producto Relacionado:<br /><span class="help">Predeterminado 80px x 80px</span>';
$_['entry_image_compare']              = 'Tamaño imagen de Comparar:<br /><span class="help">Predeterminado 90px x 90px</span>';
$_['entry_image_wishlist']             = 'Tamaño imagen de Lista Deseo:<br /><span class="help">Predeterminado 47px x 47px</span>';
$_['entry_image_cart']                 = 'Tamaño imagen del Carro de Compras:<br /><span class="help">Predeterminado 47px x 47px</span>';
$_['entry_image_location']             = 'Tamaño de la imagen de tienda';
$_['entry_width']                      = 'Ancho';
$_['entry_height']                     = 'Alto';
$_['entry_mail_protocol']              = 'Protocolo del Correo:<span class="help">Seleccione CORREO a menos que su host haya deshabilitado la funcion PHP MAIL.</span>';
$_['entry_mail_sendmail_path']         = 'Sendmail Path';
$_['entry_smtp_hostname']              = 'Nombre de host SMTP';
$_['entry_smtp_username']              = 'SMTP Nombre Usuario:';
$_['entry_smtp_password']              = 'SMTP Clave:';
$_['entry_smtp_port']                  = 'SMTP Puerto:';
$_['entry_smtp_encryption']            = 'SMTP Security';
$_['entry_fraud_detection']            = 'Use MaxMind Fraud Detection System:<br /><span class="help">MaxMind is a fraud detections service. If you don\'t have a license key you can <a onclick="window.open(\'http://www.maxmind.com/?rId=opencart\');"><u>sign up here</u></a>. Once you have obtained a key copy and paste it into the field below.</span>';
$_['entry_fraud_key']                  = 'MaxMind License Key:</span>';
$_['entry_fraud_score']                = 'MaxMind Risk Score:<br /><span class="help">The higher the score the more likly the order is fraudulent. Set a score between 0 - 100.</span>';
$_['entry_fraud_status']               = 'MaxMind Fraud Order Status:<br /><span class="help">Orders over your set score will be assigned this order status and will not be allowed to reach the complete status automatically.</span>';
$_['entry_secure']                     = 'Usar SSL';
$_['entry_shared']                     = 'Uso compartido de sesiones';
$_['entry_robots']                     = 'Robots';
$_['entry_file_max_size']	           = 'Tamaño de archivo máximo';
$_['entry_file_ext_allowed']           = 'Formatos de archivo permitidos';
$_['entry_file_mime_allowed']          = 'Tipos de archivo Mime permitidos';
$_['entry_maintenance']                = 'Modo Mantenimiento:<br /><span class="help">Previene a los clientes a entrar a su tienda y verán un mensaje de mantenimiento. Si está conectado como Administrador Usted verá la tienda normalmente.</span>';
$_['entry_password']                   = 'Permite contraseña olvidada';
$_['entry_encryption']                 = 'Llave de Encriptado:<br /><span class="help">Por favor provea una clave secreta que podrá ser usada para cifrar información privada cuando procese las Ordenes.</span>';
$_['entry_compression']                = 'Nivel compresion de salida:<br /><span class="help">GZIP para una mayor eficiencia para transferencia para requerir clientes. Nivel de compresion debe estar entre 0 y 9</span>';
$_['entry_debug_system']               = 'Debug System';
$_['entry_error_display']              = 'Mostrar Errores:';
$_['entry_error_log']                  = 'Registro de Errores:';
$_['entry_error_filename']             = 'Nombre Archivo de Registro de Errores:';
$_['entry_google_analytics']           = 'Código Google Analytics:<br /><span class="help">Conéctese a su cuenta <a onclick="window.open(\'http://www.google.com/analytics/\');"><u>Google Analytics</u></a> y después de crear su perfil de su Sitio Web copie y pegue el código analytics dentro de este campo.</span>';
$_['entry_google_captcha_public']      = 'Site key';
$_['entry_google_captcha_secret']      = 'Secret key';
$_['entry_status']                     = 'Status';
$_['entry_text_editor']                = 'Text Editor (Admin)';
$_['entry_seo_url']                    = 'Use SEO URLs:<br /><span class="help">Para utilizar SEO URLs el módulo Apache debe ser mod-rewrite y necesita renombrar htaccess.txt a .htaccess.</span>';
$_['entry_seo_rewrite']                = 'Remove index.php';
$_['entry_seo_suffix']                 = 'Add Suffix to URLs';
$_['entry_seo_category']               = 'Add Category to Products URLs';
$_['entry_seo_translate']              = 'Translate URLs';
$_['entry_seo_lang_code']              = 'Add language code to URLs';
$_['entry_seo_canonical']              = 'Use canonical links';
$_['entry_seo_www_red']                = 'www Redirection';
$_['entry_seo_nonseo_red']             = 'non-SEO to SEO URLs Redirection';
$_['entry_meta_title_add']             = 'Add to other titles';
$_['entry_meta_generator']             = 'Meta Generator';
$_['entry_meta_googlekey']             = 'Meta Google Key';
$_['entry_meta_alexakey']              = 'Meta Alexa Key';
$_['entry_sitemap_all']                = 'All items XML map';
$_['entry_sitemap_products']           = 'Products XML map';
$_['entry_sitemap_categories']         = 'Categories XML map';
$_['entry_sitemap_manufacturers']      = 'Manufacturers XML map';
$_['entry_sec_admin_login']            = 'Email on Admin Login';
$_['entry_sec_admin_keyword']          = 'Keyword for Admin Panel';
$_['entry_sec_lfi']                    = 'LFI Protection';
$_['entry_sec_rfi']                    = 'RFI Protection';
$_['entry_sec_sql']                    = 'SQLi Protection';
$_['entry_sec_xss']                    = 'XSS Protection';
$_['entry_sec_htmlpurifier']           = 'Use HTMLPurifier';
$_['entry_cache_storage']              = 'Storage';
$_['entry_cache_lifetime']             = 'Lifetime';
$_['entry_cache_clear']                = 'Clear After Save';
$_['entry_pagecache']                  = 'Use Page Cache';
$_['entry_pagecache_exclude']          = 'Exclude Routes';

// Help
$_['help_geocode']                     = 'Por favor ingrese el geocódigo de la ubicación de la tienda manualmente.';
$_['help_open']                        = 'Complete con los horarios de atención de su tienda.';
$_['help_comment']                     = 'Este campo es para notas especiales para el cliente Ejem: la tienda no acepta cheques.';
$_['help_location']                    = 'Diferentes ubicaciones de tiendas que usted quiere que sean mostradas en el formulario de contacto.';
$_['help_currency']                    = 'Cambiar la moneda por defecto. Vaciar la caché del navegador para ver el cambio y reconfigurar su cookie existente.';
$_['help_currency_auto']               = 'Configura tu tienda para actualizar automáticamente las monedas diariamente.';
$_['help_product_limit'] 	           = 'Determina cuántos artículos del catálogo se muestran por página (productos, categorías, etc.).';
$_['help_product_description_length']  = 'En la vista lista, Descripción corta el límite de caracteres de  (categorías, especial etc.).';
$_['help_limit_admin']   	           = 'Determina cuántos elementos se muestran por página en la vista administrador (pedidos, clientes, etc.).';
$_['help_product_count']               = 'Muestra el numero de productos dentro de las subcategorias en el menú de categoría. Advertencia esto puede causar bajo rendimiento en tiendas con muchas subcategorias !';
$_['help_review']       	           = 'Habilitar/deshabilitar nuevos comentarios y mostrar comentarios existentes.';
$_['help_review_guest']       	       = 'Permite a los visitantes publicar comentarios.';
$_['help_review_mail']                 = 'Enviar un correo electrónico al dueño de la tienda cuando se crea una nueva revisión.';
$_['help_voucher_min']                 = 'Cantidad mínima para compra de Bono de regalo.';
$_['help_voucher_max']                 = 'Cantidad máxima para compra de Bono de regalo.';
$_['help_tax_default']                 = 'Utilice la dirección de tienda para calcular los impuestos si nadie está conectado. Puede utilizar la dirección de la tienda para la dirección de envío o pago del cliente.';
$_['help_tax_customer']                = 'Utilice la dirección del cliente por defecto cuando inicie sesión para calcular los impuestos. Puede utilizar la dirección predeterminada para la dirección de envío o pago del cliente.';
$_['help_customer_online']             = 'Seguimiento clientes en línea a través de la sección de informes de clientes.';
$_['help_customer_group']              = 'Grupo de atención al cliente por defecto.';
$_['help_customer_group_display']      = 'Mostrar los grupos de clientes que los nuevos clientes pueden utilizar como mayoristas y negocios al registrarse.';
$_['help_customer_price']              = 'Sólo muestra los precios cuando un cliente se registra.';
$_['help_login_attempts']              = 'Intentos de acceso máximo permitidos antes de que la cuenta sea bloqueada durante 1 hora. Cuentas de cliente y afiliados pueden ser desbloqueadas por el cliente o afiliado administrador de páginas.';
$_['help_account']                     = 'Hacer que la gente acepte términos antes de que la cuenta sea creada.';
$_['help_account_mail']                = 'Enviar un correo electrónico al propietario de la tienda cuando se registra una cuenta nueva.';
$_['help_invoice_prefix']              = 'Configurar el prefijo de número de factura (ej.. INV-2011-00).  El ID de la factura comenzará por 1 para cada prefijo único.';
$_['help_api']                         = 'El administrador debe usar el usuario por defecto del API.';
$_['help_cart_weight']                 = 'Mostrar el peso del carro en la página del carrito.';
$_['help_checkout_guest']              = 'Permiten a los clientes comprar sin crear una cuenta. Esto no estará disponible cuando un producto descargable esté en el carrito de compras.';
$_['help_checkout']                    = 'Obliga al usuario a aceptar los términos y condiciones antes de poder comprar.';
$_['help_order_status']                = 'Establece el estado del pedido por defecto cuando se procesa un pedido.';
$_['help_processing_status']           = 'Establecer el estado del pedido del cliente  antes de que comience la orden resta stock y redención cupón, bono y recompensas.';
$_['help_complete_status']             = 'Establecer el estado del pedido que el pedido del cliente debe llegar antes de que se les permite tener acceso a sus productos descargables y vales de regalo.';
$_['help_order_mail']                  = 'Enviar un correo electrónico al propietario de la tienda cuando se crea un nuevo pedido.';
$_['help_stock_display']               = 'Mostrar cantidad de stock en la página del producto.';
$_['help_stock_warning']               = 'Indicador de mensaje en la página de carro de compras de acciones si un producto está fuera de stock pero stock checkout es sí. (ADVERTENCIA siempre muestra si es retirada de stock ventas afirmativa. (NOTA: SIEMPRE SE MUESTRA SI NO HAY PRODUCTO)';
$_['help_stock_checkout']              = 'Permiten a los clientes comprar aunque el producto que solicita no tenga stock.';
$_['help_affiliate_approval']          = 'Aprobar automáticamente cualquier nuevos afiliados que se inscriban.';
$_['help_affiliate_auto']              = 'Añadir automáticamente comisión cuando cada orden alcanza el estado completo.';
$_['help_affiliate_commission']        = 'El porcentaje de comisión de afiliado por defecto.';
$_['help_affiliate']                   = 'Fuerza a la gente a aceptar los términos y condiciones antes de crear una cuenta de afiliado.';
$_['help_affiliate_mail']              = 'Enviar un correo electrónico al propietario de la tienda cuando se registra un nuevo afiliado.';
$_['help_return']                      = 'Fuerza a la gente a aceptar los términos y condiciones crear una devolución.';
$_['help_return_status']               = 'Establecer el estado de retorno por defecto cuando se envía una solicitud de devolución.';
$_['help_icon']                        = 'El icono debe ser un PNG de 16x16 píxeles.';
$_['help_mail_protocol']               = 'Sólo elija \'Mail\' a menos que su alojamiento haya desactivado la función de correo php.';
$_['help_mail_sendmail_path']          = 'Enter the path to the Sendmail program directory on the host server.';
$_['help_mail_smtp_encryption']        = 'Select the security method that your SMTP server uses..';
$_['help_mail_alert']                  = 'Cualquier correo adicional en el que deseé recibir el correo electrónico de alerta, además de la principal. (separados por comas).';
$_['help_fraud_detection']             = 'MaxMind es un servicio de detección de fraude. Si no tienes una clave de licencia puede <a href="http://www.maxmind.com/?rId=opencart" target="_blank"> <u>registrarse aquí</u></a>. Una vez que haya obtenido una llave, copiar y pegar en el campo de abajo.';
$_['help_fraud_score']                 = 'Cuanto mayor sea el resultado es más probable que el pedido sea fraudulento. Establece  una puntuación entre 0 - 100.';
$_['help_fraud_status']                = 'Ordenes por encima del puntaje establecido se les asignará este estatus y automaticamente no se les permetirá que se alcancen el estatus COMPLETO.';
$_['help_secure']                      = 'Para usar SSL compruebe que su alojamiento tiene un certificado SSL y agrega la URL de SSL para los archivos config de catalog y admin.';
$_['help_shared']                      = 'Intentar compartir la cookie de sesión entre las tiendas por lo que el carro se puede pasar entre diferentes dominios.';
$_['help_robots']                      = 'No se utilizará con una lista de agentes de usuario rastreador web que comparten las sesiones. Utilizar líneas separadas para cada agente de usuario.';
$_['help_file_max_size']		       = 'El tamaño del archivo de imagen máxima que puede subir en Image Manager. Introduzca como bytes.';
$_['help_file_ext_allowed']            = 'Agrega que  extensiones de archivo pueden ser subidos. Utilice una nueva línea para cada valor.';
$_['help_file_mime_allowed']           = 'Agrega que  extensiones de archivo pueden ser subidos. Utilice una nueva línea para cada valor.';
$_['help_maintenance']                 = 'Evita que a los clientes naveguen en su tienda. En su lugar verán un mensaje de mantenimiento. Si ha iniciado sesión como administrador, usted verá la tienda de manera normal.';
$_['help_password']                    = 'Permitir olvido de  la contraseña que se utilizará para el admin. Esto se desactivará automáticamente si el sistema de detecta un intento de hackeo.';
$_['help_encryption']                  = 'Por favor proporcione una clave secreta que se utilizará para cifrar información privada cuando la tramitación de pedidos.';
$_['help_compression']                 = 'GZIP para transferencia más eficiente a los clientes solicitantes. El nivel de compresión debe estar entre 0 - 9.';
$_['help_debug_system']                = 'If enabled, diagnostic information (i.e. run time, memory) will be displayed at the bottom of every page of the store back-end and front-end. It is not advisable to leave the debug mode activated when running a live store.';
$_['help_google_analytics']            = 'Ingresa codigo de google analytics';
$_['help_google_captcha']              = 'Go to <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank"><u>Google reCAPTCHA page</u></a> and register your website.';
$_['help_text_editor']                 = 'Admin panel all textarea filed text editor.';
$_['help_seo_url']                     = 'Para utilizar SEO URLs, debe instalarse el módulo mod-rewrite de apache y tienes que renombrar el htaccess.txt a .htaccess.';
$_['help_seo_rewrite']                 = 'To remove index.php, Apache mod_rewrite module must be installed in your host/server and you need to rename the htaccess.txt to .htaccess';
$_['help_seo_suffix']                  = 'Append .html suffix to the SEO URLs.';
$_['help_seo_category']                = 'Select whether to prepend the category slugs to product URL.';
$_['help_seo_translate']               = 'Translate URLs based on the selected language.';
$_['help_seo_lang_code']               = 'Prepend the language code (en, de) to the SEO URLs.';
$_['help_seo_canonical']               = 'Add canonical link to header for pagination, sorgint etc URLs.';
$_['help_seo_www_red']                 = 'Select whether to redirect to with or without www prefix.';
$_['help_seo_nonseo_red']              = 'Select whether to redirect to the SEO URL if the URL is non-SEO.';
$_['help_meta_title_add']              = 'Add the store title into other pages (product, category, manufacturer etc.) title like My Store - My Product.';
$_['help_meta_generator']              = 'The generator meta tag is generally used to show the company/program that has built the site.';
$_['help_meta_googlekey']              = 'Enter your Google Site Verification Key to verify your site.';
$_['help_meta_alexakey']               = 'Enter your Alexa Site Verification Key to verify your site.';
$_['help_sitemap_all']                 = 'The XML Sitemap link for all store items (products, categories, manufacturers, informations and other pages). The content is updated automatically whenever you create a new item.';
$_['help_sitemap_products']            = 'The XML Sitemap link for products. The content is updated automatically whenever you create a new item.';
$_['help_sitemap_categories']          = 'The XML Sitemap link for categories. The content is updated automatically whenever you create a new item.';
$_['help_sitemap_manufacturers']       = 'The XML Sitemap link for manufacturers. The content is updated automatically whenever you create a new item.';
$_['help_sec_admin_login']             = 'Enter an email address to be notified upon a successful login of anyone in your admin panel. Leave blank to not be sent a notification.';
$_['help_sec_admin_keyword']           = 'Enter a keyword to access the admin panel such as \'mypanel\' so that the system will require it to be in the link like domain.com/admin?mypanel. Leave blank to disable it.';
$_['help_sec_lfi']                     = '(Local File Inclusion) This feature will try to protect against directory traversal techniques (such as route=../../../etc/passwd) that might allow an attacker to read sensitive files.';
$_['help_sec_rfi']                     = '(Remote File Inclusion) This feature will try to protect against access to URLs (such as route=http://www.malicious-site.com/exploit.txt) that might allow an attacker to download and run malicious scripts.';
$_['help_sec_sql']                     = '(SQL Injection) This feature will try to protect against common SQL injection attacks (such as SELECT xyx FROM users) that might allow an attacker to get sensitive data from your database.';
$_['help_sec_xss']                     = '(Cross Site Scripting) This feature will try to protect against Javascript attacks that might cause connection drop.';
$_['help_sec_htmlpurifier']            = 'HTMLPurifier Library offers higher security level by cleaning the content of request variables. Enabling this option may affect the page load slightly.';
$_['help_cache_storage']               = 'Select the storage to save the cached data. All options except File require a specific PHP extension to be installed in your server. Please, check the documentation for further details.';
$_['help_cache_lifetime']              = 'The maximum length of time in seconds for a cache file to be stored before it is refreshed. Default: 86400 (24 hours)';
$_['help_cache_clear']                 = 'Clear the cache after a product, category, manufacturer, information is created/edited.';
$_['help_pagecache']                   = 'Page Cache acts as like a page snapshot. It\'s super fast as it caches everything in HTML format. The cache is created on the first page visit by the first visitor of the store. After that, all other visitors will get this page loaded from the cache. Not applicable when visitor logged in or added product to cart or is in cart/checkout page.';
$_['help_pagecache_exclude']           = 'Route values (i.e. common/home) to be excluded from the Page Cache. Enter one route per line.';

// Error
$_['error_warning']                    = 'Advertencia: Por favor, revise cuidadosamente el formulario por errores';
$_['error_permission']                 = 'Advertencia: No tiene permiso para modificar la configuración';
$_['error_name']                       = 'Nombre de la tienda debe estar entre 3 y 32 caracteres!';
$_['error_owner']                      = 'Dueño de Tienda debe estar entre 3 y 64 caracteres!';
$_['error_address']                    = 'Dirección de la tienda debe estar entre 10 y 256 caracteres!';
$_['error_email']                      = 'E-Mail no parece ser válido';
$_['error_telephone']                  = 'Teléfono debe estar entre 3 y 32 caracteres!';
$_['error_meta_title']                 = 'El nombre debe tener entre 3 y 32 caracteres!';
$_['error_limit']       	           = 'Límite requerido';
$_['error_login_attempts']       	   = 'Intentos de inicio de sesión deben ser mayores que 0.';
$_['error_customer_group_display']     = 'Usted debe incluir el grupo de clientes predeterminado si Usted usará esta opción!';
$_['error_voucher_min']                = 'Monto mínimo del Certificado requerido!';
$_['error_voucher_max']                = 'Monto máximo del Certificado requerido!';
$_['error_processing_status']          = 'Usted debe elegir al menos 1 estado de proceso de pedidos';
$_['error_complete_status']            = 'Usted debe elegir al menos 1 estado completo de la orden';
$_['error_image_thumb']                = 'Tamaño imagen miniatura del producto requerido:';
$_['error_image_popup']                = 'Tamaño imagen emergente del producto requerido:';
$_['error_image_product']              = 'Tamaño imagen lista del producto requerido:';
$_['error_image_category']             = 'Tamaño imagen lista de categoría requerido:';
$_['error_image_additional']           = 'Tamaño imagen adicional del producto requerido:';
$_['error_image_related']              = 'Tamaño imagen producto relacionado requerido:';
$_['error_image_compare']              = 'Tamaño imagen de comparar requerido:';
$_['error_image_wishlist']             = 'Tamaño imagen de lista deseo requerido:';
$_['error_image_cart']                 = 'Tamaño imagen del carro de compras requerido:';
$_['error_image_location']             = 'Tamaño de imagen de tienda requerida!';
$_['error_error_filename']             = 'Nombre de archivo del registro de errores requerido';
$_['error_encryption']                 = 'Clave de cifrado debe tener entre 3 y 32 caracteres.';
$_['error_cache_not_cleared']          = 'Cache Not Cleaned';