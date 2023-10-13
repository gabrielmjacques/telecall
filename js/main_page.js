function onBodyLoad() {
    setApresentationTitle( 'Inovação em Comunicação!' );
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