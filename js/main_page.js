function LoadData() {
    const profile_dropdown = $( "#profile-dropdown" )
    const profile_login = $( "#profile_login" )
    const user = localStorage.getItem( "user" )
    const create_account_btn = $( "#create_account_btn" )

    if ( user ) {
        profile_login.text( user )
        profile_dropdown.css( "display", "block" )
        create_account_btn.css( "display", "none" )
    } else {
        profile_dropdown.css( "display", "none" )
        create_account_btn.css( "display", "block" )
    }
}

function Logoff() {
    localStorage.clear()
    window.location.reload()
}