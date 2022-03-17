<?php

/*

1- Carregamento dos CSSs
2- Logo tela de login do painel adm
3-Rodapé do painel adm
4-widgets do tema

*/




// 1- Carregamento dos CSSs 
/* Ordem de carregamento dos arquivos CSS e JS carrega os arquivos do tema pai e depois do tema filho */
function load_arquivos_estaticos()
{
    //carrega o CSS do tema pai
    $ps = 'parent-style';
    wp_enqueue_style( $ps, get_template_directory_uri() . '/style.css');
    //carrega o CSS do tema filho
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
}
/*Para executar a função, deve-se especificar qual ação (evento) que vai rodar a função*/
add_action('wp_enqueue_scripts', 'load_arquivos_estaticos');


//3-Rodapé do painel adm
//Altera o texto do rodape do painel administrativo
function remove_footer_admin () {
    $ano = date('Y');
    $nome_site = get_bloginfo('name');
    $email = get_bloginfo('email');

    echo '<p clss="rodape"> ' .$ano. ' | '.$nome_site. ' | ' .$email. ' © Desenvolvido por Gui</p>';
    echo '
    <style>
        .rodape{
            text-align: center;
            border-top: 1px #ccc solid;
        }
    </style>
    ';
    
}
add_filter('admin_footer_text', 'remove_footer_admin');

/*  ** Personaliza a tela de login do painel de administração **
 1-Filtra o link do ícone
 2- Action de carregamento do HEAD da  */

 function link_logologin()
 {
    return get_bloginfo('url');
 }
 add_filter( 'login_headerurl', 'link_logologin' );

 function modifica_img_logologin()
{
    $url = get_bloginfo('url') .'/wp-content/uploads/2022/02/logo.png';
    echo '
        <style>
            h1 a{
                background-image: url("'.$url.'")!important;
                width: 160px !important;
                height: 55px !important;
                background-size: 160px !important;
            }
            .login{
                background: rgb(133,0,255);
                background: linear-gradient(180deg, rgba(133,0,255,1) 0%, rgba(186,19,153,1) 55%, rgba(0,255,248,1) 100%);
            }
            </style>
    ';
}
add_action( 'login_head', 'modifica_img_logologin' );


//4-widgets do tema
function novas_areas_widget()
{
    //COLUNA 1
    register_sidebar(
        array(
            'name' =>__('Rodapé: Coluna 1', 'lojabase'),
            'id' => 'col-1',
            'description' => 'Insira um bloco aqui.',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    //COLUNA 2
    register_sidebar(
        array(
            'name' =>__('Rodapé: Coluna 2', 'lojabase'),
            'id' => 'col-2',
            'description' => 'Insira um bloco aqui.',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );
    //COLUNA 3
    register_sidebar(
        array(
            'name' =>__('Rodapé: Coluna 3', 'lojabase'),
            'id' => 'col-3',
            'description' => 'Insira um bloco aqui.',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        )
    );

    
}
add_action( 'widgets_init', 'novas_areas_widget');