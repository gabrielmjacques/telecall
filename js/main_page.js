function onBodyLoad() {
    setApresentationTitle( 'Inovação em Comunicação!' );
    setCustomCursorPosition();
    setContactModalMask();
}

function setApresentationTitle( title ) {
    const apresentation_title = $( '.apr-container-title' );

    if ( window.innerWidth < 768 ) {
        apresentation_title.html( title );

    } else {
        for ( let i = 0; i < title.length; i++ ) {
            if ( title[ i ] === ' ' ) {
                apresentation_title.html( apresentation_title.html() + '&nbsp;' );
            } else {
                apresentation_title.html( apresentation_title.html() + `<span class='letter-hover'>${ title[ i ] }</span>` );
            }
        }
    }
}

function setCustomCursorPosition() {
    if ( window.innerWidth > 768 ) {
        const new_cursor = document.createElement( 'div' );
        new_cursor.classList.add( 'cursor' );
        document.body.appendChild( new_cursor );
        const cursor = $( '.cursor' );

        document.body.addEventListener( 'mousemove', ( event ) => {
            cursor.css( 'left', `${ event.pageX }px` );
            cursor.css( 'top', `${ event.pageY }px` );
        } );
    }
}

function setContactModalMask() {
    $( "#cel_entry" ).mask( "+55 (00) 00000-0000" );
}