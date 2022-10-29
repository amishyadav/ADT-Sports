<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All Titles and static string in blade files
    |--------------------------------------------------------------------------
    | 
    */

    'login'                   => 'Acceso',
    'new_here'                => 'Nuevo aquí',
    'create_an_account'       => 'Crea una cuenta',
    'all_rights_reserved'     => 'Reservados todos los derechos',
    'i_agree'                 => 'Estoy de acuerdo',
    'terms_and_conditions'    => 'Términos y condiciones',
    'registration'            => 'Registro',
    'already_have_an_account' => 'Ya tienes una cuenta',
    'sign_in_here'            => 'Firme aquí',

    //roles
    'role'                    => [
        'admin'  => 'Administración',
        'member' => 'Miembro',
    ],

    //filters
    'filter'                  => [
        'all'      => 'Todos',
        'active'   => 'Activo',
        'deactive' => 'Desactivado',
    ],

    'dashboard'    => [
        'dashboard'      => 'Tablero',
        'progress_style' => 'Estilo de progreso',
        'theme_style'    => 'Estilo de tema',
        'left_icon'      => 'Icono izquierdo',
        'right_icon'     => 'Icono derecho',
    ],

    // Header notification
    'notification' => [
        'notifications'                     => 'Notificaciones',
        'unread_messages'                   => 'Mensajes no leídos',
        'mark_all_as_read'                  => 'Marcar todo como leido',
        'empty_notifications'               => 'No pudimos encontrar ninguna notificación',
        'job_application_rejected_message'  => 'Su solicitud es rechazada por',
        'job_application_shortlist_message' => 'Su solicitud está preseleccionada para',
        'job_application_select_message'    => 'Eres seleccionado para',
        'started_following'                 => 'empezó a seguir',
        'started_following_you'             => 'empecé a seguirte.',
        'new_candidate_registered'          => 'Nuevo Candidato Registrado',
        'new_employer_registered'           => 'Nuevo empleador registrado',
        'company_marked_featured'           => 'La empresa marcada como destacada por',
        'company'                           => 'Compañía',
        'marked_as_featured'                => 'marcado como destacado',
        'job_application_submitted'         => 'Solicitud de empleo enviada para',
        'purchase'                          => 'compra',
        'read_notification'                 => 'Notificación leída con éxito',
    ],

    //user keys
    'user'         => [
        'first_name'            => 'Primer nombre',
        'last_name'             => 'Apellido',
        'username'              => 'Nombre de usuario',
        'name'                  => 'Nombre',
        'email'                 => 'Correo electrónico',
        'phone'                 => 'Teléfono',
        'designation'           => 'Designacion',
        'gender'                => 'Género',
        'male'                  => 'Masculino',
        'female'                => 'Femenino',
        'qualification'         => 'Calificación',
        'dob'                   => 'Fecha de nacimiento',
        'password'              => 'Clave',
        'password_confirmation' => 'Confirmar contraseña',
        'city'                  => 'Ciudad',
        'zip'                   => 'Cremallera',
        'status'                => 'Estado',
        'edit_profile'          => 'Editar perfil',
        'change_password'       => 'Cambia la contraseña',
        'logout'                => 'Cerrar sesión',
        'new_user'              => 'Nuevo Usuario',
        'edit_user'             => 'Editar usuario',
        'user_details'          => 'Detalles de usuario',
        'email_verified'        => 'Correo Electrónico Verificado',
        'enter_email'           => 'Ingrese correo electrónico',
        'change_language'       => 'Cambiar idioma',
        'language'              => 'Idioma',
        'profile_details'       => 'Detalles del perfil',
    ],

    //common keys
    'common'       => [
        'profile'                          => 'Perfil',
        'status'                           => 'Estado',
        'action'                           => 'Acción',
        'save'                             => 'Ahorrar',
        'cancel'                           => 'Cancelar',
        'canceled'                         => 'Cancelado',
        'confirm'                          => 'Confirmar',
        'back'                             => 'Atrás',
        'created_on'                       => 'Creado en',
        'last_updated'                     => 'Última actualización',
        'n/a'                              => 'N / A',
        'new'                              => 'Nuevo',
        'total'                            => 'Total',
        'add'                              => 'Agregar',
        'active'                           => 'Activo',
        'name'                             => 'Nombre',
        'edit'                             => 'Editar',
        'delete'                           => 'Borrar',
        'view'                             => 'Vista',
        'de_active'                        => 'Desactivado',
        'description'                      => 'Descripción',
        'created_at'                       => 'Creado en',
        'updated_at'                       => 'Última actualización',
        'is_available'                     => 'Está disponible',
        'choose'                           => 'Elegir',
        'yes'                              => 'Sí',
        'no'                               => 'No',
        'address'                          => 'Dirección',
        'reset'                            => 'Reiniciar',
        'actions'                          => 'Comportamiento',
        'filter_options'                   => 'Opciones de filtro',
        'select_status'                    => 'Seleccionar Estado',
        'showing'                          => 'Demostración',
        'of'                               => 'de',
        'results'                          => 'Resultados',
        'show'                             => 'Espectáculo',
        'previous'                         => 'Anterior',
        'next'                             => 'Próximo',
        'default_plan'                     => 'Plan predeterminado',
        'select_type'                      => 'Seleccione tipo',
        'select_type_number'               => 'Seleccionar número de tipo',
        'filter'                           => 'Filtrar',
        'user_details'                     => 'Usuario',
        'no_data_available'                => 'No hay datos disponibles en la tabla',
        'allow_img_text'                   => 'Tipos de archivos permitidos: png, jpg, jpeg, svg.',
        'search'                           => 'Búsqueda',
        'no_matching_records_found'        => 'No se encontraron registros coincidentes',
        'custom'                           => 'Disfraz',
        'apply'                            => 'aplicar',
        'from'                             => 'de',
        'to'                               => 'A',
        'invalid_number'                   => 'Número invalido',
        'invalid_country_code'             => 'Código de país no válido',
        'too_short'                        => 'Demasiado corto',
        'too_long'                         => 'Demasiado largo',
        'undefined'                        => 'indefinido',
        'not_found'                        => 'extraviado',
        'no data available in table'       => 'No hay datos disponibles en la tabla',
        'status_updated_successfully'      => 'Estado actualizado con éxito.',
        'saved_successfully'               => 'Guardado exitosamente',
        'updated_successfully'             => 'actualizado con éxito',
        'deleted_successfully'             => 'borrado exitosamente',
        'are_you_sure_want_to_delete_this' => 'Estas seguro que quieres borrar esto ',
        'deleted'                          => 'Eliminado',
        'has_been_deleted'                 => 'ha sido eliminado.',
        'cant_be_deleted'                  => 'no se puede eliminar',
        'ok'                               => 'OK',
        'select_payment'                   => 'Seleccionar estado de pago',
        'forgot_your_password'             => 'Olvidaste tu contraseña',
        'remember_me'                      => 'Acuérdate de mí',
        'discard'                          => 'Desechar',
        'manage_matches'                   => 'Administrar partidos',
        'leagues'                          => 'ligas',
        'categories'                       => 'Categorías',
        'dashboard'                        => 'Tablero',
        'category'                         => 'Categoría',
        'add_new'                          => 'Agregar nuevo',
    ],

    'category' => [
        'add_category'  => 'Añadir categoría',
        'edit_category' => 'Editar categoria',
        'name'          => 'Nombre',
        'status'        => 'Estado',
        'league'        => 'Liga',
        'action'        => 'Acción',
    ],

    'league' => [
        'name'        => 'Nombre',
        'category'    => 'Categoría',
        'icon'        => 'Icono',
        'select_icon' => 'Seleccionar icono',
        'match_count' => 'Número de coincidencias',
        'status'      => 'Estado',
        'action'      => 'Acción',
        'add_league'  => 'Añadir Liga',
        'edit_league' => 'Editar Liga',
    ],

    'matches' => [
        'add_match'           => 'Agregar coincidencia',
        'edit_match'          => 'Editar coincidencia',
        'match_title'         => 'Título del partido',
        'select_league'       => 'Seleccionar Liga',
        'league'              => 'Liga',
        'all_matches'         => 'Todos los partidos',
        'category_league'     => 'Clase | Liga',
        'start_from_end_at'   => 'Comienza desde | Termina en',
        'start_at'            => 'Empieza en',
        'end_at'              => 'Termina en',
        'betting_starts_from' => "Las apuestas comienzan desde",
        'betting_ends_at'     => "La apuesta termina en",
        'status'              => 'Estado',
        'action'              => 'Acción',
    ],

    'setting'     => [
        'setting'          => 'Ajuste',
        'app_name'         => 'Nombre de la aplicación',
        'company_name'     => 'Nombre de empresa',
        'app_logo'         => 'Logotipo de la aplicación',
        'change_logo'      => 'Cambiar logotipo',
        'about_us'         => 'Sobre nosotros',
        'image_validation' => 'La imagen debe tener un píxel de 90 x 60.',
        'favicon'          => 'Favicón',
        'copy_right_text'  => 'Copiar texto correcto',
        'contact_number'   => ' Número de contacto',
        'logo'             => 'Logo',
        'min_bet'          => 'Apuesta mínima',
        'max_bet'          => 'Apuesta Máxima',
        'currency'         => 'Divisa',

    ],
    'seo-tool'    => [
        'seo_tool'           => 'Herramienta SEO',
        'meta_keyword'       => 'Metapalabra clave',
        'meta_description'   => 'Metadescripción',
        'social_title'       => 'Título Social',
        'social_description' => 'Descripción Social',
    ],
    'languages'   => [
        'language'            => 'Idioma',
        'add_language'        => 'Añadir Idiomas',
        'iso_code'            => 'Código ISO',
        'new_language'        => 'Nuevo idioma',
        'edit_translation'    => 'Editar traducción',
        'translation_manager' => 'Administrador de traducción',
        'edit_language'       => 'Editar idioma',
    ],
    'placeholder' => [
        'language_save' => 'Idioma guardado con éxito',
    ],
    'flash'       => [
        'language_update'  => 'Idioma actualizado correctamente.',
        'language_deleted' => 'Idioma eliminado con éxito',
    ],
    'currency'    => [
        'currency'      => 'Divisa',
        'add_currency'  => 'Agregar moneda',
        'currency_name' => 'Nombre de moneda',
        'currency_icon' => 'Icono de moneda',
        'currency_code' => 'Código de moneda',
        'edit_currency' => 'Editar moneda',
    ],

    'referral' => [
        'referrals' => 'Referencias',
        'level' => 'Nivel',
        'commission' => 'Comisión',
        'how_many_level' => 'CUANTOS NIVELES',
        'generate' => 'GENERAR',
        'level_and_commission' => 'Nivel y Comisión',
        'old_levels_will_remove_after_generate' => 'Los niveles antiguos se eliminarán después de generar',
    ]
];