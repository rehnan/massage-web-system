<?php

/**
 * Plugin Name: Base Tulio.
 * Description: Controle base do tema Tulio.
 * Version: 0.1
 * Author: Agência Palupa
 * Author URI: http://www.palupa.com.br
 * Licence: GPL2
 */


function baseTulio () {

		// TIPOS DE CONTEÚDO
		conteudosTulio();

		// TAXONOMIA
		taxonomiaTulio();

		// META BOXES
		metaboxesTulio();

		// SHORTCODES
		// shortcodesTulio();

	    // ATALHOS VISUAL COMPOSER
	    //visualcomposerTulio();

	}

	/****************************************************
	* TIPOS DE CONTEÚDO
	*****************************************************/

	function conteudosTulio (){

		// TIPOS DE CONTEÚDO
		tipoCursos();

		tipoDepoimentos();

		tipoDestaques();

		tipoTratamentos();

		/* ALTERAÇÃO DO TÍTULO PADRÃO */
		add_filter( 'enter_title_here', 'trocarTituloPadrao' );
		function trocarTituloPadrao($titulo){

			switch (get_current_screen()->post_type) {

				case 'cursos':
					$titulo = 'Nome do Curso';
				break;

				case 'depoimentos':
					$titulo = 'Nome da pessoa';
				break;

				case 'destaques':
					$titulo = 'Nome do destaque';
				break;

				case 'tratamentos':
					$titulo = 'Nome do Tratamento';
				break;

				default:
				break;
			}

		    return $titulo;

		}

	}


		// CUSTOM POST TYPE CURSOS
		function tipoCursos() {

			$rotulosCursos = array(
									'name'               => 'Cursos',
									'singular_name'      => 'Cursos',
									'menu_name'          => 'Cursos',
									'name_admin_bar'     => 'Cursos',
									'add_new'            => 'Adicionar novo',
									'add_new_item'       => 'Adicionar novo Curso',
									'new_item'           => 'Novo Curso',
									'edit_item'          => 'Editar Curso',
									'view_item'          => 'Ver Curso',
									'all_items'          => 'Todos os Cursos',
									'search_items'       => 'Buscar Curso',
									'parent_item_colon'  => 'Dos Cursos',
									'not_found'          => 'Nenhum Curso cadastrado.',
									'not_found_in_trash' => 'Nenhum Curso na lixeira.'
								);

			$argsCursos 	= array(
									'labels'             => $rotulosCursos,
									'public'             => true,
									'publicly_queryable' => true,
									'show_ui'            => true,
									'show_in_menu'       => true,
									'menu_position'		 => 4,
									'menu_icon'          => 'dashicons-book',
									'query_var'          => true,
									'rewrite'            => array( 'slug' => 'cursos' ),
									'capability_type'    => 'post',
									'has_archive'        => true,
									'hierarchical'       => false,
									'supports'           => array( 'title', 'thumbnail', 'editor' )
								);

			// REGISTRA O TIPO CUSTOMIZADO
			register_post_type('cursos', $argsCursos);

		}


		// CUSTOM POST TYPE TRATAMENTOS
		function tipoTratamentos() {

			$rotulosTratamentos = array(
									'name'               => 'Tratamentos',
									'singular_name'      => 'Tratamentos',
									'menu_name'          => 'Tratamentos',
									'name_admin_bar'     => 'Tratamentos',
									'add_new'            => 'Adicionar novo',
									'add_new_item'       => 'Adicionar novo Tratamento',
									'new_item'           => 'Novo Tratamento',
									'edit_item'          => 'Editar Tratamento',
									'view_item'          => 'Ver Tratamento',
									'all_items'          => 'Todos os Tratamentos',
									'search_items'       => 'Buscar Tratamento',
									'parent_item_colon'  => 'Dos Tratamentos',
									'not_found'          => 'Nenhum Tratamento cadastrado.',
									'not_found_in_trash' => 'Nenhum Tratamento na lixeira.'
								);

			$argsTratamentos 	= array(
									'labels'             => $rotulosTratamentos,
									'public'             => true,
									'publicly_queryable' => true,
									'show_ui'            => true,
									'show_in_menu'       => true,
									'menu_position'		 => 4,
									'menu_icon'          => 'dashicons-universal-access',
									'query_var'          => true,
									'rewrite'            => array( 'slug' => 'tratamentos' ),
									'capability_type'    => 'post',
									'has_archive'        => true,
									'hierarchical'       => false,
									'supports'           => array( 'title', 'thumbnail', 'editor' )
								);

			// REGISTRA O TIPO CUSTOMIZADO
			register_post_type('tratamentos', $argsTratamentos);

		}


		// CUSTOM POST TYPE DEPOIMENTOS
		function tipoDepoimentos() {

			$rotulosDepoimentos = array(
									'name'               => 'Depoimentos',
									'singular_name'      => 'depoimento',
									'menu_name'          => 'Depoimentos',
									'name_admin_bar'     => 'depoimentos',
									'add_new'            => 'Adicionar novo',
									'add_new_item'       => 'Adicionar novo depoimento',
									'new_item'           => 'Novo depoimento',
									'edit_item'          => 'Editar depoimento',
									'view_item'          => 'Ver depoimento',
									'all_items'          => 'Todos os depoimentos',
									'search_items'       => 'Buscar depoimentos',
									'parent_item_colon'  => 'Dos depoimentos',
									'not_found'          => 'Nenhum depoimento cadastrado.',
									'not_found_in_trash' => 'Nenhum depoimento na lixeira.'
								);

			$argsDepoimentos 	= array(
									'labels'             => $rotulosDepoimentos,
									'public'             => true,
									'publicly_queryable' => true,
									'show_ui'            => true,
									'show_in_menu'       => true,
									'menu_position'		 => 4,
									'menu_icon'          => 'dashicons-id-alt',
									'query_var'          => true,
									'rewrite'            => array( 'slug' => 'depoimentos' ),
									'capability_type'    => 'post',
									'has_archive'        => true,
									'hierarchical'       => false,
									'supports'           => array( 'title', 'thumbnail', 'editor' )
								);

			// REGISTRA O TIPO CUSTOMIZADO
			register_post_type('depoimentos', $argsDepoimentos);

		}


		// CUSTOM POST TYPE DESTAQUES
		function tipoDestaques() {

			$rotulosDestaques = array(
									'name'               => 'Destaques',
									'singular_name'      => 'destaque',
									'menu_name'          => 'Destaques',
									'name_admin_bar'     => 'destaques',
									'add_new'            => 'Adicionar novo',
									'add_new_item'       => 'Adicionar novo destaque',
									'new_item'           => 'Novo destaque',
									'edit_item'          => 'Editar destaque',
									'view_item'          => 'Ver destaque',
									'all_items'          => 'Todos os destaques',
									'search_items'       => 'Buscar destaques',
									'parent_item_colon'  => 'Dos destaques',
									'not_found'          => 'Nenhum destaque cadastrado.',
									'not_found_in_trash' => 'Nenhum destaque na lixeira.'
								);

			$argsDestaques 	= array(
									'labels'             => $rotulosDestaques,
									'public'             => true,
									'publicly_queryable' => true,
									'show_ui'            => true,
									'show_in_menu'       => true,
									'menu_position'		 => 4,
									'menu_icon'          => 'dashicons-id-alt',
									'query_var'          => true,
									'rewrite'            => array( 'slug' => 'destaques' ),
									'capability_type'    => 'post',
									'has_archive'        => true,
									'hierarchical'       => false,
									'supports'           => array( 'title', 'thumbnail', 'editor' )
								);

			// REGISTRA O TIPO CUSTOMIZADO
			register_post_type('destaques', $argsDestaques);

		}


	/****************************************************
	* TAXONOMIA
	*****************************************************/
	function taxonomiaTulio () {

		taxonomiaCategoriaTratamento();

		taxonomiaCategoriaCurso();


	}

		function taxonomiaCategoriaTratamento() {

			$rotulosCategoriaTratamento = array(
												'name'              => 'Categorias de Tratamento',
												'singular_name'     => 'Categoria de Tratamento',
												'search_items'      => 'Buscar categorias de Tratamento',
												'all_items'         => 'Todas categorias de Tratamento',
												'parent_item'       => 'Categoria de Tratamento pai',
												'parent_item_colon' => 'Categoria de Tratamento pai:',
												'edit_item'         => 'Editar categoria de Tratamento',
												'update_item'       => 'Atualizar categoria de Tratamento',
												'add_new_item'      => 'Nova categoria de Tratamento',
												'new_item_name'     => 'Nova categoria',
												'menu_name'         => 'Categorias de Tratamento',
											);

			$argsCategoriaTratamento 		= array(
												'hierarchical'      => true,
												'labels'            => $rotulosCategoriaTratamento,
												'show_ui'           => true,
												'show_admin_column' => true,
												'query_var'         => true,
												'rewrite'           => array( 'slug' => 'categoria-tratamento' ),
											);

			register_taxonomy( 'categoriaTratamento', array( 'tratamentos' ), $argsCategoriaTratamento );

		}

		function taxonomiaCategoriaCurso() {

			$rotulosCategoriaCurso = array(
												'name'              => 'Categorias de Curso',
												'singular_name'     => 'Categoria de Curso',
												'search_items'      => 'Buscar categorias de Curso',
												'all_items'         => 'Todas categorias de Curso',
												'parent_item'       => 'Categoria de Curso pai',
												'parent_item_colon' => 'Categoria de Curso pai:',
												'edit_item'         => 'Editar categoria de Curso',
												'update_item'       => 'Atualizar categoria de Curso',
												'add_new_item'      => 'Nova categoria de Curso',
												'new_item_name'     => 'Nova categoria',
												'menu_name'         => 'Categorias de Curso',
											);

			$argsCategoriaCurso 		= array(
												'hierarchical'      => true,
												'labels'            => $rotulosCategoriaCurso,
												'show_ui'           => true,
												'show_admin_column' => true,
												'query_var'         => true,
												'rewrite'           => array( 'slug' => 'categoria-curso' ),
											);

			register_taxonomy( 'categoriaCurso', array( 'cursos' ), $argsCategoriaCurso );

		}

    /****************************************************
	* META BOXES
	*****************************************************/
	function metaboxesTulio(){

		add_filter( 'rwmb_meta_boxes', 'registraMetaboxes' );

	}

		function registraMetaboxes( $metaboxes ){

			$prefix = 'Tulio_';

			// PÁGINAS
			$metaboxes[] = array(

				'id'			=> 'paginasMetabox',
				'title'			=> 'Detalhes da página',
				'pages' 		=> array( 'page' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(

					array(
                        'name'  => 'Galeria de Fotos:',
                        'id'    => "{$prefix}pagina_galeria",
                        'desc'  => '',
                        'type'  => 'image'
                    )
				),
				'validation' 	=> array()
			);

			$metaboxes[] = array(

				'id'			=> 'detalhesTratamentoMetabox',
				'title'			=> 'Detalhes do Tratamento',
				'pages' 		=> array( 'tratamentos' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(

					array(
						'name'  => 'Breve Descrição do Tratamento: ',
						'id'    => "{$prefix}tratamento_resumo",
						'desc'  => '',
						'type'  => 'text'						
					),  

					array(
                        'name'  => 'Galeria de Fotos:',
                        'id'    => "{$prefix}tratamento_galeria",
                        'desc'  => '',
                        'type'  => 'image'
                    ),

                    array(
						'name'  => 'Adicionar/Remover Detalhes do Tratamento:',
						'id'    => "{$prefix}tratamento_detalhes",
						'desc'  => '',
						'type'  => 'text',
						'clone' => true
					)

				),
				'validation' => array(
				    'rules'    => array(
				        "{$prefix}tratamento_resumo" => array(				            
				            'maxlength' => 300
				        )				        
				    ),
				    'messages' => array(
				        "{$prefix}tratamento_resumo" => array(				            
				            'maxlength' => __( 'A sua descrição precisa ser menor.', 'your-prefix' ),
				        ),
				    )
				)
			);


			//DETALHES DO CURSO
			$metaboxes[] = array(

				'id'			=> 'detalhesCursoMetabox',
				'title'			=> 'Detalhes do Curso',
				'pages' 		=> array( 'cursos' ),
				'context' 		=> 'normal',
				'priority' 		=> 'high',
				'autosave' 		=> false,
				'fields' 		=> array(

					array(
						'name'  			=> 'Breve Descrição do Curso: ',
						'id'    			=> "{$prefix}curso_resumo",
						'desc'  			=> '',
						'type'  			=> 'text'						
					),  

                    array(
                        'name'  			=> 'Galeria de Fotos:',
                        'id'    			=> "{$prefix}curso_galeria",
                        'desc'  			=> '',
                        'type'  			=> 'image'
                    ),

                    array(
						'name'  			=> 'Adicionar/Remover Detalhes do Curso:',
						'id'    			=> "{$prefix}curso_detalhes",
						'desc'  			=> '',
						'type'  			=> 'text',
						'clone' 			=> true

					),

     
				),
				'validation' => array(
				    'rules'    => array(
				        "{$prefix}curso_resumo" => array(				            
				            'maxlength' => 300
				        )				        
				    ),
				    'messages' => array(
				        "{$prefix}curso_resumo" => array(				            
				            'maxlength' => __( 'A sua descrição precisa ser menor.', 'your-prefix' ),
				        ),
				    )
				)
			);

			return $metaboxes;
		}

	/****************************************************
	* SHORTCODES
	*****************************************************/
	function shortcodesTulio(){

	}

	/****************************************************
	* ATALHOS VISUAL COMPOSER
	*****************************************************/
	function visualcomposerTulio(){

	    if (class_exists('WPBakeryVisualComposer')){

		}

	}

  	/****************************************************
	* AÇÕES
	*****************************************************/

	// INICIA A FUNÇÃO PRINCIPAL
	add_action('init', 'baseTulio');

	// IMPLEMENTAÇÃO ADICIONAL PARA EXIBIR/OCULTAR META BOX DE PÁGINAS SIMPLES
	//add_action( 'add_meta_boxes', 'metaboxjs');

	// FLUSHS
	function rewrite_flush() {

    	baseTulio();

   		flush_rewrite_rules();
	}

	register_activation_hook( __FILE__, 'rewrite_flush' );