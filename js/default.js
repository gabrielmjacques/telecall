$( document ).ready( () => {
    const theme = localStorage.getItem( "theme" )
    const font_size = localStorage.getItem( "font_size" )

    if ( theme == "dark" ) {
        $( "html" ).attr( "data-bs-theme", "dark" )
        $( "#theme_switch" ).attr( "checked", true )
        $( ".apr-wave" ).attr( "src", "assets/main_page/apr_wave_dark.svg" )
        $( ".icons" ).css( "filter", "invert(100%)" )
    } else {
        $( "html" ).attr( "data-bs-theme", "light" )
        $( "#theme_switch" ).attr( "checked", false )
        $( ".apr-wave" ).attr( "width", "assets/main_page/apr_wave.svg" )
        $( ".icons" ).css( "filter", "invert(0%)" )
    }

    if ( font_size ) {
        $( "body" ).get( 0 ).style.setProperty( "--h-size", font_size + "em" )
        $( "body" ).get( 0 ).style.setProperty( "--p-size", font_size - 0.4 + "em" )
        $( "body" ).get( 0 ).style.setProperty( "--feedback-size", font_size - 0.6 + "em" )
    }
} )

function ChangeTheme() {
    if ( localStorage.getItem( "theme" ) == "dark" ) {
        localStorage.setItem( "theme", "light" )
    } else {
        localStorage.setItem( "theme", "dark" )
    }

    window.location.reload()
}

function ChangeFontSize( val ) {
    localStorage.setItem( "font_size", val )

    window.location.reload()
}