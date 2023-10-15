function onBodyLoad() {
    setApresentationTitle( 'Inovação em Comunicação!' );
    setCustomCursorPosition();
}

function setApresentationTitle( title ) {
    const apresentation_title = document.querySelector( '.apr-container-title' );

    if ( window.innerWidth < 768 ) {
        apresentation_title.innerHTML = title;
    } else {
        for ( let i = 0; i < title.length; i++ ) {
            if ( title[ i ] === ' ' ) {
                apresentation_title.innerHTML += '&nbsp;';
            } else {
                apresentation_title.innerHTML += `<span class='letter-hover'>${ title[ i ] }</span>`;
            }
        }
    }
}

function setCustomCursorPosition() {
    if ( window.innerWidth > 768 ) {
        const new_cursor = document.createElement( 'div' );
        new_cursor.classList.add( 'cursor' );
        document.body.appendChild( new_cursor );
        const cursor = document.querySelector( '.cursor' );

        document.body.addEventListener( 'mousemove', ( event ) => {
            cursor.style.left = `${ event.pageX }px`;
            cursor.style.top = `${ event.pageY }px`;
        } );
    }
}