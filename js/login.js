login_div = document.getElementById( 'login_div' )
cadastro_div = document.getElementById( 'cadastro_div' )

function ShowCad()
{
    login_div.style.opacity = 0.3

    setTimeout( () =>
    {
        cadastro_div.style.top = '0'
    }, 200 )
}

function HideCad()
{
    login_div.style.opacity = 1

    setTimeout( () =>
    {
        cadastro_div.style.top = '100%'
    }, 200 );
}

function ShowPassword( e )
{
    if ( e.type == 'text' )
    {
        e.setAttribute( 'type', 'password' )
    } else
    {
        e.setAttribute( 'type', 'text' )
    }
}