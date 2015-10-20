/*global SpilGames: true*/
/*jslint newcap: true, plusplus: true */

SpilGames(['Social', 'DOMSelect'], function (Social, DOMSelect) {
    'use strict';

    var likeButton = DOMSelect.get('.wdg_facebook_like_button'),
        locale = (likeButton && likeButton.getAttribute('data-locale')) || false,
        href   = (likeButton && likeButton.getAttribute('data-href')) || false;

    Social.createFacebookButton('.wdg_facebook_like_button', null, {
        "send"   : false,
        "layout" : 'button_count',
        "width"  : 102,
        "locale" : locale,
        "href"   : href
    });
});
