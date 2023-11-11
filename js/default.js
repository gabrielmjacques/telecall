// Função para criar carregar o estilo e tema da página
function LoadStyle() {
    const theme = localStorage.getItem( "theme" );
    const font_size = localStorage.getItem( "font_size" );

    if ( theme == "dark" ) {
        $( "html" ).attr( "data-bs-theme", "dark" );
        $( "#theme_switch" ).attr( "checked", true );
        $( ".apr-wave" ).attr( "src", "assets/main_page/apr_wave_dark.svg" );
        $( ".icons" ).css( "filter", "invert(100%)" );
    } else {
        $( "html" ).attr( "data-bs-theme", "light" );
        $( "#theme_switch" ).attr( "checked", false );
        $( ".apr-wave" ).attr( "src", "assets/main_page/apr_wave.svg" );
        $( ".icons" ).css( "filter", "invert(0%)" );
    }

    if ( font_size ) {
        $( "body" ).get( 0 ).style.setProperty( "--font-size", font_size + "px" );
    }
}

// Função para mudar o tema da página
function ChangeTheme() {
    if ( localStorage.getItem( "theme" ) == "dark" ) {
        localStorage.setItem( "theme", "light" );
    } else {
        localStorage.setItem( "theme", "dark" );
    }

    window.location.reload();
}

// Função para mudar o tamanho da fonte
function ChangeFontSize( val ) {
    localStorage.setItem( "font_size", val );

    window.location.reload();
}

$( document ).ready( () => {
    LoadStyle();
} );