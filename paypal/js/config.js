//Helper Functions
function showDom(id) {
    let arr;
    if (!Array.isArray(id)) {
        arr = [id];
    } else {
        arr = id;
    }
    arr.forEach(function (domId) {
        document.getElementById(domId).style.display = 'block';
    });
}

function hideDom(id) {
    let arr;
    if (!Array.isArray(id)) {
        arr = [id];
    } else {
        arr = id;
    }
    arr.forEach(function (domId) {
        document.getElementById(domId).style.display = 'none';
    });
}

function getUrlParams(prop) {
    let params = {},
        search = decodeURIComponent( window.location.href.slice( window.location.href.indexOf( '?' ) + 1 ) ),
        definitions = search.split( '&' );

    definitions.forEach( function(val) {
        let parts = val.split( '=', 2 );
        params[ parts[ 0 ] ] = parts[ 1 ];
    } );

    return ( prop && prop in params ) ? params[ prop ] : params;
}