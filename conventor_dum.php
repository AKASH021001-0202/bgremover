<?php include('header.php') ?>
<script data-n-head="ssr" data-hid="gtm-script">
    if (!window._gtm_init) {
        window._gtm_init = 1;
        (function(w, n, d, m, e, p) {
            w[d] = (w[d] == 1 || n[d] == 'yes' || n[d] == 1 || n[m] == 1 || (w[e] && w[e][p] && w[e][p]())) ? 1 : 0
        })(window, navigator, 'doNotTrack', 'msDoNotTrack', 'external', 'msTrackingProtectionEnabled');
        (function(w, d, s, l, x, y) {
            w[x] = {};
            w._gtm_inject = function(i) {
                if (w.doNotTrack || w[x][i]) return;
                w[x][i] = 1;
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s);
                j.async = true;
                j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i;
                f.parentNode.insertBefore(j, f);
            };
            w[y]('GTM-TRMVBM3')
        })(window, document, 'script', 'dataLayer', '_gtm_ids', '_gtm_inject')
    }
</script>
<style>
    data-vue-ssr-id="9cd44e4e:0 3df299d4:0 7c6fe9cc:0 7c6fe9cc:1 2b402586:0 2a93aeba:0 11e67104:0 0e4308bd:0 627059c7:0 ff441b2e:0 8c106a24:0 048deff8:0 a0093880:0 6dcbdebf:0 15983a17:0 6ac43550:0 2e00f206:0 4c094da0:0 5fb93d56:0 26b1f205:0 5b2fb587:0 6f9d10ec:0 56ad5d8e:0 56a754d3:0 598def05:0 4b61b712:0 1fb75413:0 6fb818b5:0 6e319fd0:0 501b90b0:0 0f4c6b8c:0 4ac36878:0 2c94f894:0 255d584a:0 1ecbf7e2:0 5b9d9ff1:0 1f96aa8d:0 4783e4b6:0 63e0c7e1:0 daca0c8c:0 c19d4178:0 e1c3454c:0 471bad92:0 6d855c4e:0 d10b87f8:0 281c762e:0 e2b00abc:0 7dc380fa:0 4738020b:0 63483271:0 50aa8c48:0 25020d10:0 f9d415a4:0 72fbb360:0 131b447a:0 35338d4d:0 403f6a09:0 ebb630ce:0 72bf51d2:0">.nuxt-progress {
        position: fixed;
        top: 0px;
        left: 0px;
        right: 0px;
        height: 5px;
        width: 0%;
        opacity: 1;
        transition: width 0.1s, opacity 0.4s;
        background-color: #727CF5;
        z-index: 999999;
    }

    .nuxt-progress.nuxt-progress-notransition {
        transition: none;
    }

    .nuxt-progress-failed {
        background-color: red;
    }

    #fc[data-v-6546e003] {
        min-height: 100vh;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        position: relative
    }

    #fc__app[data-v-6546e003] {
        padding-top: 58px;
        flex-grow: 1;
        position: relative;
        z-index: 1
    }

    #fc__app.has-breadcrumb[data-v-6546e003] {
        padding-top: 106px !important
    }

    @media only screen and (max-width: 1281px) {
        #fc__app.has-breadcrumb[data-v-6546e003] {
            padding-top: 58px !important
        }
    }

    @media only screen and (max-width: 1281px) {
        #fc__app[data-v-6546e003] {
            padding-top: 58px !important
        }
    }

    #fc .loader[data-v-6546e003] {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000
    }

    .resize-observer[data-v-8859cc6c] {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        border: none;
        background-color: transparent;
        pointer-events: none;
        display: block;
        overflow: hidden;
        opacity: 0
    }

    .resize-observer[data-v-8859cc6c] object {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
        pointer-events: none;
        z-index: -1
    }

    .v-popper__popper {
        z-index: 10000;
        top: 0;
        left: 0;
        outline: none
    }

    .v-popper__popper.v-popper__popper--hidden {
        visibility: hidden;
        opacity: 0;
        transition: opacity .15s, visibility .15s;
        pointer-events: none
    }

    .v-popper__popper.v-popper__popper--shown {
        visibility: visible;
        opacity: 1;
        transition: opacity .15s
    }

    .v-popper__popper.v-popper__popper--skip-transition,
    .v-popper__popper.v-popper__popper--skip-transition>.v-popper__wrapper {
        transition: none !important
    }

    .v-popper__backdrop {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none
    }

    .v-popper__inner {
        position: relative;
        box-sizing: border-box;
        overflow-y: auto
    }

    .v-popper__inner>div {
        position: relative;
        z-index: 1;
        max-width: inherit;
        max-height: inherit
    }

    .v-popper__arrow-container {
        position: absolute;
        width: 10px;
        height: 10px
    }

    .v-popper__popper--arrow-overflow .v-popper__arrow-container,
    .v-popper__popper--no-positioning .v-popper__arrow-container {
        display: none
    }

    .v-popper__arrow-inner,
    .v-popper__arrow-outer {
        border-style: solid;
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0
    }

    .v-popper__arrow-inner {
        visibility: hidden;
        border-width: 7px
    }

    .v-popper__arrow-outer {
        border-width: 6px
    }

    .v-popper__popper[data-popper-placement^=top] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-inner {
        left: -2px
    }

    .v-popper__popper[data-popper-placement^=top] .v-popper__arrow-outer,
    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-outer {
        left: -1px
    }

    .v-popper__popper[data-popper-placement^=top] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=top] .v-popper__arrow-outer {
        border-bottom-width: 0;
        border-left-color: transparent !important;
        border-right-color: transparent !important;
        border-bottom-color: transparent !important
    }

    .v-popper__popper[data-popper-placement^=top] .v-popper__arrow-inner {
        top: -2px
    }

    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-container {
        top: 0
    }

    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-outer {
        border-top-width: 0;
        border-left-color: transparent !important;
        border-right-color: transparent !important;
        border-top-color: transparent !important
    }

    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-inner {
        top: -4px
    }

    .v-popper__popper[data-popper-placement^=bottom] .v-popper__arrow-outer {
        top: -6px
    }

    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-inner {
        top: -2px
    }

    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-outer,
    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-outer {
        top: -1px
    }

    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-outer {
        border-left-width: 0;
        border-left-color: transparent !important;
        border-top-color: transparent !important;
        border-bottom-color: transparent !important
    }

    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-inner {
        left: -4px
    }

    .v-popper__popper[data-popper-placement^=right] .v-popper__arrow-outer {
        left: -6px
    }

    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-container {
        right: -10px
    }

    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-inner,
    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-outer {
        border-right-width: 0;
        border-top-color: transparent !important;
        border-right-color: transparent !important;
        border-bottom-color: transparent !important
    }

    .v-popper__popper[data-popper-placement^=left] .v-popper__arrow-inner {
        left: -2px
    }

    .v-popper--theme-dropdown .v-popper__inner {
        background: #fff;
        color: #000;
        border-radius: 6px;
        border: 1px solid #ddd;
        box-shadow: 0 6px 30px #0000001a
    }

    .v-popper--theme-dropdown .v-popper__arrow-inner {
        visibility: visible;
        border-color: #fff
    }

    .v-popper--theme-dropdown .v-popper__arrow-outer {
        border-color: #ddd
    }

    .v-popper--theme-tooltip .v-popper__inner {
        background: rgba(0, 0, 0, .8);
        color: #fff;
        border-radius: 6px;
        padding: 7px 12px 6px
    }

    .v-popper--theme-tooltip .v-popper__arrow-outer {
        border-color: #000c
    }

    .v-popper__wrapper {
        max-width: 480px
    }

    @media only screen and (max-width: 480px) {
        .v-popper__wrapper {
            max-width: 100vw
        }
    }

    .v-popper__inner {
        background: #212121 !important;
        overflow-wrap: break-word
    }

    .v-popper__inner * {
        overflow-wrap: break-word
    }

    @media only screen and (max-width: 768px) {
        #launcher-frame {
            min-width: 85px !important;
            max-width: 85px !important
        }
    }

    .navbar-container[data-v-15e33fc5] {
        background: #fff;
        position: fixed;
        top: 0;
        z-index: 50;
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        height: auto;
        padding: 0;
        transition: all .2s ease-in-out;
        max-width: 100vw
    }

    .navbar-container.has-dialog[data-v-15e33fc5] {
        z-index: 1
    }

    @media only screen and (max-width: 768px) {
        .navbar-container[data-v-15e33fc5] {
            width: 100% !important
        }
    }

    #Navigation[data-v-15e33fc5] {
        background-color: #fff;
        transition: width .1s ease, left .1s ease;
        padding: 0;
        z-index: 100
    }

    #Navigation.shadow[data-v-15e33fc5] {
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08)
    }

    @media only screen and (max-width: 1280px) {
        #Navigation[data-v-15e33fc5] {
            z-index: 210
        }
    }

    #Navigation.sidebar-folded .page-wrapper .navbar[data-v-15e33fc5] {
        width: 100% !important;
        left: 0 !important
    }

    #Navigation .navbar-content[data-v-15e33fc5] {
        display: flex;
        width: 100%;
        height: 100%;
        padding: 0 25px
    }

    @media only screen and (max-width: 1280px) {
        #Navigation .navbar-content[data-v-15e33fc5] {
            padding: 0
        }
    }

    @media only screen and (max-width: 1280px) {
        .navbar-content[data-v-15e33fc5] {
            padding: 0 !important
        }
    }

    .sidebar-folded .page-wrapper .navbar {
        width: 100% !important;
        left: 0 !important;
        right: 0;
    }

    .invisible[data-v-9357f980] {
        opacity: 0;
        transition: opacity .3s ease-out
    }

    .navigation-responsive[data-v-9357f980] {
        position: relative;
        padding: 8px 16px;
        width: 100%;
        display: none
    }

    .navigation-responsive .Logo[data-v-9357f980] {
        display: contents !important
    }

    @media only screen and (max-width: 1280px) {
        .navigation-responsive.tab[data-v-9357f980] {
            display: block;
            box-shadow: 0 3px 24px rgba(0, 0, 0, .08)
        }
    }

    @media only screen and (max-width: 1280px) {
        .navigation-responsive[data-v-9357f980] {
            display: block;
            box-shadow: 0 3px 24px rgba(0, 0, 0, .08)
        }
    }

    .navigation-responsive__navbar[data-v-9357f980] {
        padding: 5px 0;
        z-index: 100
    }

    .navigation-responsive__drawer[data-v-9357f980] {
        position: fixed;
        top: 0;
        left: -100vw;
        bottom: 0;
        display: flex;
        height: 100vh;
        width: 100vw;
        overflow-x: auto;
        background-color: #fff;
        transition: .3s ease-out left;
        -moz-transition: .3s ease-out left;
        -webkit-transition: .3s ease-out left
    }

    .navigation-responsive__search[data-v-9357f980] {
        height: 35px;
        width: 35px;
        position: relative
    }

    .navigation-responsive__search .search[data-v-9357f980] {
        position: absolute;
        top: 0;
        right: 0
    }

    .button-burger-menu[data-v-00bbbc7b] {
        transform: scale(0.7);
        position: relative;
        height: 28px;
        width: 36px;
        cursor: pointer;
        z-index: 10
    }

    .button-burger-menu .line-top[data-v-00bbbc7b],
    .button-burger-menu .line-middle[data-v-00bbbc7b],
    .button-burger-menu .line-bottom[data-v-00bbbc7b] {
        position: absolute;
        display: block;
        height: 4px;
        width: 36px;
        border-radius: 2px;
        background: #000
    }

    .button-burger-menu .line-top[data-v-00bbbc7b] {
        top: 0;
        transform-origin: 34px 2px
    }

    .button-burger-menu .line-middle[data-v-00bbbc7b] {
        top: 12px;
        transition: opacity 200ms linear
    }

    .button-burger-menu .line-bottom[data-v-00bbbc7b] {
        bottom: 0;
        transform-origin: 34px 2px
    }

    .button-burger-menu.is-open .line-top[data-v-00bbbc7b] {
        animation: line-top-out-00bbbc7b 600ms linear normal;
        animation-fill-mode: forwards;
        background: #282f3a
    }

    .button-burger-menu.is-open .line-middle[data-v-00bbbc7b] {
        opacity: 0;
        background: #282f3a
    }

    .button-burger-menu.is-open .line-bottom[data-v-00bbbc7b] {
        animation: line-bot-out-00bbbc7b 600ms linear normal;
        animation-fill-mode: forwards;
        background: #282f3a
    }

    .button-burger-menu.is-closed .line-top[data-v-00bbbc7b] {
        animation: line-top-in-00bbbc7b 600ms linear normal;
        animation-fill-mode: forwards;
        background: #282f3a
    }

    .button-burger-menu.is-closed .line-middle[data-v-00bbbc7b] {
        transition-delay: 200ms;
        background: #282f3a
    }

    .button-burger-menu.is-closed .line-bottom[data-v-00bbbc7b] {
        animation: line-bot-in-00bbbc7b 600ms linear normal;
        animation-fill-mode: forwards;
        background: #282f3a
    }

    @keyframes fade-in-00bbbc7b {
        0% {
            background: #282f3a
        }

        30% {
            background: #727cf5
        }

        100% {
            background: #fff
        }
    }

    @keyframes fade-out-00bbbc7b {
        0% {
            background: #fff
        }

        70% {
            background: #727cf5
        }

        100% {
            background: #282f3a
        }
    }

    @keyframes line-top-in-00bbbc7b {
        0% {
            left: -5px;
            bot: 0;
            transform: rotate(-45deg)
        }

        20% {
            left: -5px;
            bot: 0;
            transform: rotate(-60deg)
        }

        80% {
            left: 0;
            bot: 0;
            transform: rotate(15deg)
        }

        100% {
            left: 0;
            bot: 1px;
            transform: rotate(0deg)
        }
    }

    @keyframes line-top-out-00bbbc7b {
        0% {
            left: 0;
            top: 0;
            transform: rotate(0deg)
        }

        20% {
            left: 0;
            top: 0;
            transform: rotate(15deg)
        }

        80% {
            left: -5px;
            top: 0;
            transform: rotate(-60deg)
        }

        100% {
            left: -5px;
            top: 1px;
            transform: rotate(-45deg)
        }
    }

    @keyframes line-bot-in-00bbbc7b {
        0% {
            left: -5px;
            transform: rotate(45deg)
        }

        20% {
            left: -5px;
            bot: 0;
            transform: rotate(60deg)
        }

        80% {
            left: 0;
            bot: 0;
            transform: rotate(-15deg)
        }

        100% {
            left: 0;
            transform: rotate(0deg)
        }
    }

    @keyframes line-bot-out-00bbbc7b {
        0% {
            left: 0;
            transform: rotate(0deg)
        }

        20% {
            left: 0;
            transform: rotate(-15deg)
        }

        80% {
            left: -5px;
            transform: rotate(60deg)
        }

        100% {
            left: -5px;
            transform: rotate(45deg)
        }
    }

    .Logo[data-v-11580f7e] {
        font-weight: 900;
        font-size: 1.25em
    }

    .Logo img[data-v-11580f7e] {
        height: 25px;
        width: auto;
        margin-right: 2px
    }

    .Logo[data-v-11580f7e]:hover {
        text-decoration: none
    }

    .Logo .main[data-v-11580f7e] {
        color: #727cf5
    }

    .Logo .dark[data-v-11580f7e] {
        color: #282f3a
    }

    .Logo .regular[data-v-11580f7e] {
        color: #828a98
    }

    .Logo .light[data-v-11580f7e] {
        color: #fff
    }

    .navigation-drawer[data-v-c6a3c0ae] {
        width: 100%;
        height: 100%;
        max-height: 100vh;
        padding-top: 60px;
        overflow: auto;
        position: relative;
        z-index: 1000
    }

    .navigation-drawer__header[data-v-c6a3c0ae] {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .navigation-drawer__search[data-v-c6a3c0ae] {
        padding: 5px 0;
        display: flex;
        justify-content: center
    }

    .navigation-drawer__body[data-v-c6a3c0ae] {
        height: calc(100vh - 130px);
        overflow: auto
    }

    .hl[data-v-7aeb9386] {
        height: 1px;
        background-color: #f5f4f3;
        padding: 0 !important;
        margin-left: 16px !important
    }

    .navigation-auth[data-v-7aeb9386] {
        margin-left: 10px
    }

    @media only screen and (max-width: 1280px) {
        .navigation-auth[data-v-7aeb9386] {
            flex-direction: column-reverse;
            margin: 0 16px
        }

        .navigation-auth.logged-in[data-v-7aeb9386] {
            margin-bottom: 0
        }
    }

    @media only screen and (max-width: 1280px) {
        .navigation-auth__account-button[data-v-7aeb9386] {
            padding: 0 16px
        }
    }

    .navigation-auth__account-options[data-v-7aeb9386] {
        list-style: none
    }

    .navigation-auth__account-options li svg[data-v-7aeb9386] {
        position: relative;
        margin-right: 10px
    }

    .navigation-auth__icon-button[data-v-7aeb9386] {
        height: 40px;
        width: 40px;
        padding: 5px;
        transition: 0s all;
        background-color: #f8f8f8
    }

    .navigation-auth__icon-button .dot[data-v-7aeb9386] {
        display: inline-block;
        height: 12px;
        width: 12px;
        background: #727cf5;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 50%;
        border: 2px solid #fff
    }

    .navigation-auth__icon[data-v-7aeb9386] {
        transform: scale(0.7)
    }

    .navigation-auth__wrapper[data-v-7aeb9386] {
        display: flex
    }

    @media only screen and (max-width: 1280px) {
        .navigation-auth__wrapper[data-v-7aeb9386] {
            margin-top: 10px;
            flex-direction: column;
            width: 100%
        }
    }

    .navigation-auth__button[data-v-7aeb9386] {
        margin-left: 10px;
        display: block;
        text-align: center;
        justify-content: center;
        font-size: 16px;
        padding: 7px 7px 5px 7px
    }

    @media only screen and (max-width: 1280px) {
        .navigation-auth__button[data-v-7aeb9386] {
            margin: 0 0 10px 0;
            font-size: 14px;
            width: 90%
        }
    }

    .navigation-auth__icon-button {
        color: #000 !important
    }

    .user-dropdown {
        background: #fff
    }

    .user-dropdown__item {
        font-size: 16px !important;
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        background-color: transparent;
        border: 0;
        width: 172px;
        height: 42px;
        display: flex;
        justify-content: start;
        align-items: center
    }

    .user-dropdown__item:hover {
        background-color: #727cf5;
        color: #fff
    }

    .nested-links[data-v-0d0a64f3] {
        width: 100%;
        border-bottom: 1px solid #f5f4f3
    }

    .nested-links__parent[data-v-0d0a64f3] {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px 0;
        box-sizing: border-box;
        cursor: pointer;
        color: #282f3a !important;
        background: none;
        border: none
    }

    .nested-links__parent[data-v-0d0a64f3]:active,
    .nested-links__parent[data-v-0d0a64f3]:hover {
        text-decoration: none !important
    }

    .nested-links__parent.active[data-v-0d0a64f3] {
        text-decoration: none !important
    }

    .nested-links__parent.active .nested-links__parent__text[data-v-0d0a64f3] {
        color: #727cf5
    }

    .nested-links__parent__text[data-v-0d0a64f3] {
        flex-grow: 1;
        color: #282f3a !important;
        text-align: left
    }

    .nested-links__parent__icon[data-v-0d0a64f3] {
        float: right;
        transform: scale(1, 0.5);
        -webkit-transform: scale(1, 0.5);
        -moz-transform: scale(1, 0.5);
        -ms-transform: scale(1, 0.5);
        -o-transform: scale(1, 0.5);
        transition: .3s ease-in-out all
    }

    .nested-links__parent__icon.active[data-v-0d0a64f3] {
        transform: scaleY(-1) scale(1, 0.5);
        transition: .3s ease-in-out all
    }

    .nested-links__content[data-v-0d0a64f3] {
        height: 0;
        overflow: auto
    }

    .nested-links__content.active[data-v-0d0a64f3] {
        height: auto
    }

    .nested-links ul[data-v-0d0a64f3] {
        list-style: none;
        width: 100%;
        box-sizing: border-box;
        border-top: none;
        height: auto;
        overflow: hidden;
        transition: .3s ease-in-out max-height;
        -moz-transition: .3s ease-in-out max-height;
        -webkit-transition: .3s ease-in-out max-height
    }

    .nested-links ul li[data-v-0d0a64f3] {
        padding: 15px 16px;
        width: 100%
    }

    .nested-links ul li[data-v-0d0a64f3]:last-child {
        border-bottom: none
    }

    .nested-links ul li a[data-v-0d0a64f3] {
        color: #282f3a
    }

    .drop[data-v-3da286e4] {
        position: relative;
        margin: 0;
        display: inline-block
    }

    .drop__trigger[data-v-3da286e4] {
        padding: 5px;
        background-color: transparent;
        text-decoration: none;
        color: #282f3a;
        display: flex;
        align-items: center
    }

    .drop__trigger[data-v-3da286e4]:hover {
        color: #727cf5;
        background-color: transparent
    }

    .drop__trigger svg[data-v-3da286e4] {
        transform: scale(0.7);
        transition: all ease-out .2s;
        pointer-events: none;
        min-width: 25px;
        float: right
    }

    .drop__trigger__text[data-v-3da286e4] {
        flex-grow: 1
    }

    .drop__content[data-v-3da286e4] {
        transform: translateY(-100%);
        pointer-events: none;
        transform-origin: 0 0;
        border-radius: 4px;
        overflow: hidden
    }

    .drop__content.drop-pos-top[data-v-3da286e4] {
        transform: translateY(100%)
    }

    .drop__content-wrapper[data-v-3da286e4] {
        position: absolute;
        left: 0;
        top: calc(100%);
        border-radius: 4px;
        overflow: hidden;
        background: transparent;
        pointer-events: none;
        z-index: 49
    }

    .drop__content-wrapper.drop-pos-top[data-v-3da286e4] {
        top: auto;
        bottom: calc(100%);
        right: 0;
        left: auto;
        top: auto
    }

    .drop__content-wrapper.drop-pos-left[data-v-3da286e4] {
        right: 0;
        left: auto
    }

    .drop:hover .drop__content[data-v-3da286e4] {
        opacity: 1 !important;
        pointer-events: auto !important;
        transform: translateY(0) !important
    }

    .drop:hover.hidden .drop__content[data-v-3da286e4] {
        opacity: 0 !important;
        pointer-events: none !important;
        transform: translateY(-1) !important
    }

    .drop:hover .drop__content-wrapper[data-v-3da286e4] {
        box-shadow: 0 14px 50px rgba(0, 0, 0, .08)
    }

    .drop:hover.hidden .drop__content-wrapper[data-v-3da286e4] {
        box-shadow: none
    }

    .drop:hover .drop__content-wrapper.drop-pos-top[data-v-3da286e4] {
        box-shadow: 0 15px 50px rgba(0, 0, 0, .25)
    }

    .drop:hover .drop__trigger svg.drop__icon[data-v-3da286e4] {
        transform: scale(0.7) scaleY(-1)
    }

    .drop:hover .drop__trigger svg[data-v-3da286e4] {
        color: #727cf5
    }

    .drop .drop__content-wrapper:focus-within .drop__content[data-v-3da286e4] {
        opacity: 0;
        pointer-events: none;
        transform: translateY(-1)
    }

    .drop.lang-selector[data-v-3da286e4] {
        font-size: 14px
    }

    .drop.lang-selector:hover .drop__trigger[data-v-3da286e4] {
        background-color: rgba(0, 0, 0, .1) !important
    }

    .drop.lang-selector .drop__trigger[data-v-3da286e4] {
        color: #89919d;
        padding: 8px;
        border-radius: 4px
    }

    .drop.target-selector .drop__content-wrapper[data-v-3da286e4] {
        right: 0;
        left: auto
    }

    .drop.target-selector .drop__content[data-v-3da286e4] {
        background: #fff
    }

    .navigation-links--responsive.logged-in[data-v-12992d83] {
        padding-top: 0
    }

    .navigation-web[data-v-1e56b686] {
        background: #fff;
        position: relative;
        z-index: 10;
        padding: 0 15px
    }

    .navigation-web nav[data-v-1e56b686] {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 16px;
        width: 100%;
        min-height: 57px
    }

    .navigation-web nav.dashboard[data-v-1e56b686] {
        max-width: none;
        width: 100% !important
    }

    @media only screen and (max-width: 1280px) {
        .navigation-web nav[data-v-1e56b686] {
            display: none
        }
    }

    @media only screen and (max-width: 1280px) {
        .dashboard-logo {
            display: none !important
        }
    }

    @media only screen and (max-width: 1280px) {
        .navigation-web .navbar.dashboard {
            padding: 0
        }
    }

    .nav-item a[data-v-b09df6b0],
    .nav-item a[data-v-b09df6b0]:hover,
    .nav-item a[data-v-b09df6b0]:active {
        text-decoration: none
    }

    .navigation-links__links[data-v-b09df6b0] {
        flex-grow: 1;
        margin: 0 40px 0 60px;
        padding: 3px 0
    }

    @media only screen and (max-width: 1280px) {
        .navigation-links__links[data-v-b09df6b0] {
            margin: 0 0 0 0 !important;
            flex-direction: column
        }
    }

    .navigation-links__links__item[data-v-b09df6b0] {
        margin: 0 16px
    }

    .navigation-links__links__item a[data-v-b09df6b0] {
        color: #282f3a;
        font-size: 16px
    }

    .navigation-links__links__item a[data-v-b09df6b0]:hover {
        text-decoration: none;
        color: #727cf5
    }

    .navigation-links__links__item[data-v-b09df6b0]:first-child {
        margin-left: 10px
    }

    @media only screen and (max-width: 1280px) {
        .navigation-links__links__item[data-v-b09df6b0] {
            margin: 0
        }

        .navigation-links__links__item--top[data-v-b09df6b0] {
            margin-bottom: 10px !important
        }
    }

    @media screen and (max-width: 1280px) {
        .navigation-links__links.dashboard {
            max-width: 380px !important
        }

        .navigation-links__links.dashboard li {
            margin: 0;
            padding: 0 10px
        }

        .navigation-links__links.dashboard li a[data-automation-id=NavigationPricing] {
            padding: 0 10px
        }
    }

    .converters {
        width: 220px !important
    }

    .navigation-links__links__item .drop .drop__trigger {
        font-size: 16px !important;
        padding: 9px 5px !important
    }

    .tools[data-v-11bde71a] {
        max-height: calc(100vh - 80px);
        overflow-Y: scroll;
        overflow-x: hidden;
        background-color: #fff;
        padding: 0 !important
    }

    .tools__column[data-v-11bde71a] {
        flex-grow: 1;
        min-width: 220px
    }

    .tools__column:last-child .tools__list[data-v-11bde71a] {
        border-right: none !important
    }

    .tools__list[data-v-11bde71a] {
        border-right: 1px solid #e8ebf1;
        height: 100%;
        display: block
    }

    .tools__list ul[data-v-11bde71a] {
        list-style: none
    }

    .tools__list ul li a[data-v-11bde71a] {
        width: 100%;
        display: inline-block;
        color: #000;
        padding: 10px;
        cursor: pointer;
        background-color: transparent;
        font-size: 16px
    }

    .tools__list ul li a[data-v-11bde71a]:hover {
        color: #fff;
        background-color: #727cf5
    }

    .tools__title[data-v-11bde71a] {
        white-space: nowrap;
        padding: 15px 30px 15px 10px;
        font-size: 16px;
        border-bottom: 1px solid #e8ebf1
    }

    .tools__title svg[data-v-11bde71a] {
        position: relative;
        margin-right: 5px
    }

    .navigation-tools-dropdown.dashboard .drop__content-wrapper {
        left: -200px
    }

    @media only screen and (max-width: 1280px) {
        .navigation-tools-dropdown .drop__content-wrapper {
            left: -250px
        }
    }

    #breadcrumb {
        width: 100%;
        padding-left: 0;
        border-top: 1px solid #f5f4f3;
        background-color: #fff;
        padding: 0;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        transition: all .3s ease-out;
        max-height: 48px
    }

    #breadcrumb.invisible {
        top: 0;
        z-index: 0
    }

    @media only screen and (max-width: 1280px) {
        #breadcrumb {
            display: none
        }
    }

    #breadcrumb .breadcrumb {
        display: flex;
        align-items: center;
        max-width: 1280px;
        width: 100%;
        height: 48px;
        margin: 0 auto;
        background-color: transparent;
        opacity: 1;
        padding: 12px 16px;
        list-style: none
    }

    #breadcrumb .breadcrumb li {
        position: relative;
        padding-left: 30px
    }

    #breadcrumb .breadcrumb li:first-child {
        padding-left: 0
    }

    #breadcrumb .breadcrumb li:last-child a {
        color: #7987a1
    }

    #breadcrumb .breadcrumb li a {
        font-size: 14px;
        color: #727cf5
    }

    #breadcrumb .breadcrumb li svg {
        position: absolute;
        top: 3px;
        left: 5px;
        color: #7987a1
    }

    .converter-page__title[data-v-6e6ecefb] {
        color: #282f3a;
        font-weight: 900;
        font-size: 3em;
        line-height: 58px;
        text-align: center;
        margin-top: 50px;
        overflow-x: auto;
        overflow-y: hidden;
        height: auto
    }

    @media only screen and (max-width: 768px) {
        .converter-page__title[data-v-6e6ecefb] {
            font-size: 2em;
            margin-top: 0;
            margin-bottom: 0;
            line-height: 44px;
            transform: translateY(15px)
        }
    }

    .converter-page__title.break[data-v-6e6ecefb] {
        word-break: break-all
    }

    .converter-page__description[data-v-6e6ecefb] {
        color: #282f3a;
        font-size: 1.1875em;
        line-height: 29px;
        text-align: center;
        margin-bottom: 0
    }

    @media only screen and (max-width: 768px) {
        .converter-page__description[data-v-6e6ecefb] {
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 0;
            transform: translateY(15px)
        }
    }

    .div-sticky-class[data-v-58c0dd80] {
        position: sticky;
        position: -webkit-sticky;
        top: 0;
        padding-top: 0
    }

    .ad-sticky-wrapper[data-v-58c0dd80] {
        position: relative;
        height: 100%;
        width: 100%;
        display: block !important
    }

    .ad-sticky-wrapper .ad-container[data-v-58c0dd80],
    .ad-sticky-wrapper .ad-container .adsense-side-ad[data-v-58c0dd80] {
        background-color: #f4f4f4;
        height: 600px !important;
        max-height: 600px !important;
        width: 300px !important;
        overflow: hidden
    }

    @media screen and (min-width: 1440px) {

        .ad-sticky-wrapper .ad-container[data-v-58c0dd80],
        .ad-sticky-wrapper .ad-container .adsense-side-ad[data-v-58c0dd80] {
            height: 600px !important;
            max-height: 600px !important;
            width: 300px !important
        }
    }

    @media screen and (min-width: 1025px)and (max-width: 1439px) {

        .ad-sticky-wrapper .ad-container[data-v-58c0dd80],
        .ad-sticky-wrapper .ad-container .adsense-side-ad[data-v-58c0dd80] {
            height: 600px !important;
            max-height: 600px !important;
            width: 160px !important
        }
    }

    @media screen and (min-width: 768px)and (max-width: 1024px) {

        .ad-sticky-wrapper .ad-container[data-v-58c0dd80],
        .ad-sticky-wrapper .ad-container .adsense-side-ad[data-v-58c0dd80] {
            display: none !important
        }
    }

    @media screen and (max-width: 768px) {

        .ad-sticky-wrapper .ad-container[data-v-58c0dd80],
        .ad-sticky-wrapper .ad-container .adsense-side-ad[data-v-58c0dd80] {
            display: none !important
        }
    }

    .ads-side-layout[data-v-5c6d6a47] {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 100px;
        right: 0;
        z-index: -1;
        overflow: visible
    }

    .ads-side-layout__placement[data-v-5c6d6a47] {
        position: sticky;
        top: 0;
        padding-top: 100px;
        cursor: pointer
    }

    @media screen and (min-width: 1440px) {
        .ads-side-layout__placement[data-v-5c6d6a47] {
            height: 600px !important;
            max-height: 600px !important;
            width: 300px !important
        }
    }

    @media screen and (min-width: 1025px)and (max-width: 1439px) {
        .ads-side-layout__placement[data-v-5c6d6a47] {
            height: 600px !important;
            max-height: 600px !important;
            width: 160px !important
        }
    }

    @media screen and (min-width: 768px)and (max-width: 1024px) {
        .ads-side-layout__placement[data-v-5c6d6a47] {
            display: none !important
        }
    }

    @media screen and (max-width: 768px) {
        .ads-side-layout__placement[data-v-5c6d6a47] {
            display: none !important
        }
    }

    .ads-side-layout__left[data-v-5c6d6a47],
    .ads-side-layout__right[data-v-5c6d6a47] {
        position: absolute;
        top: 0;
        bottom: 60px;
        z-index: 2
    }

    .ads-side-layout__left[data-v-5c6d6a47] {
        right: calc(100% + 20px)
    }

    .ads-side-layout__right[data-v-5c6d6a47] {
        left: calc(100% + 20px)
    }

    .alert--theme[data-v-ec8f07c2] {
        margin-top: 20px;
        font-size: 14px;
        padding: 14px 20px;
        cursor: pointer
    }

    .alert--theme strong[data-v-ec8f07c2] {
        font-weight: 600
    }

    .alert--theme svg[data-v-ec8f07c2] {
        transform: scale(0.8)
    }

    .alert.alert-success[data-v-ec8f07c2] {
        background: #cff1de;
        color: #485f2e;
        border: 1px solid #bcebd1
    }

    .alert.alert-success svg[data-v-ec8f07c2] {
        color: #6ca886
    }

    .alert.alert-error[data-v-ec8f07c2] {
        background: #ffd6e0;
        color: #851b35;
        border: 1px solid #f0bac8
    }

    .alert.alert-error svg[data-v-ec8f07c2] {
        color: #c2788a
    }

    .alert.alert-danger[data-v-ec8f07c2] {
        background: #ffd6e0;
        color: #851b35;
        border: 1px solid #f0bac8
    }

    .alert.alert-danger svg[data-v-ec8f07c2] {
        color: #c2788a
    }

    .alert.alert-info[data-v-ec8f07c2] {
        background: #e4e7ec;
        color: #3f4654;
        border: 1px solid #d9dde5
    }

    .alert.alert-info svg[data-v-ec8f07c2] {
        color: #9197a0
    }

    .alert.alert-[data-v-ec8f07c2] {
        background: #fef2cd;
        color: #836203;
        border: 1px solid #feecb9
    }

    .alert.alert- svg[data-v-ec8f07c2] {
        color: #c0aa68
    }

    .ads-in-page[data-v-131ac230] {
        text-align: center;
        max-width: 100%;
        overflow: hidden;
        background: transparent;
        cursor: pointer
    }

    @media screen and (min-width: 768px)and (max-width: 1023px) {
        .ads-in-page[data-v-131ac230] {
            padding: 0;
            box-shadow: none;
            background: transparent
        }
    }

    @media only screen and (max-width: 768px) {
        .ads-in-page[data-v-131ac230] {
            padding: 0;
            background: transparent;
            box-shadow: none
        }
    }

    .ads-in-page__wrapper[data-v-131ac230] {
        display: block;
        margin: 0 auto;
        max-width: 100% !important;
        overflow: hidden;
        background-color: #f1f1f1;
        height: 90px !important;
        max-height: 90px !important;
        width: 728px !important
    }

    @media screen and (max-width: 768px) {
        .ads-in-page__wrapper[data-v-131ac230] {
            height: 50px !important;
            max-height: 50px !important;
            width: 320px !important
        }
    }

    .ads-in-page img[data-v-131ac230] {
        width: 100%
    }

    .ad-in-page[data-v-131ac230] {
        display: block
    }

    .ad-in-page__container[data-v-131ac230],
    .ad-in-page__container .adsense-top-ad[data-v-131ac230] {
        display: block;
        margin: 0 auto;
        max-width: 100% !important;
        overflow: hidden;
        background-color: #f4f4f4;
        height: 90px !important;
        max-height: 90px !important;
        width: 728px !important
    }

    @media screen and (min-width: 1025px)and (max-width: 1200px) {

        .ad-in-page__container[data-v-131ac230],
        .ad-in-page__container .adsense-top-ad[data-v-131ac230] {
            height: 60px !important;
            max-height: 60px !important;
            width: 468px !important
        }
    }

    @media screen and (max-width: 768px) {

        .ad-in-page__container[data-v-131ac230],
        .ad-in-page__container .adsense-top-ad[data-v-131ac230] {
            height: 50px !important;
            max-height: 50px !important;
            width: 320px !important
        }
    }

    .ad-in-page__loader[data-v-131ac230] {
        display: block;
        height: 90px
    }

    .hidden[data-v-35695f94] {
        display: none
    }

    .layout__section--elevated[data-v-39849a7f] {
        background: #fff;
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        border-radius: 4px
    }

    .sidebar-folded .sidebar .sidebar-header[data-v-39849a7f] {
        width: 70px
    }

    .sidebar-folded .sidebar .sidebar-header .sidebar-brand[data-v-39849a7f] {
        display: none
    }

    .sidebar-folded .page-wrapper[data-v-39849a7f] {
        width: calc(100% - 70px);
        margin-left: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar[data-v-39849a7f] {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header[data-v-39849a7f] {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header .sidebar-brand[data-v-39849a7f] {
        opacity: 0;
        visibility: hidden;
        width: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-title[data-v-39849a7f],
    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow[data-v-39849a7f] {
        visibility: hidden;
        opacity: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-39849a7f] {
        visibility: hidden
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-39849a7f]::before {
        content: "";
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #9b9b9b;
        position: absolute;
        top: 5px;
        left: 6px;
        visibility: visible
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav.sub-menu[data-v-39849a7f] {
        display: none
    }

    @media(max-width: 991px) {

        .sidebar-open .main-wrapper[data-v-39849a7f]::before,
        .settings-open .main-wrapper[data-v-39849a7f]::before {
            content: "";
            width: 100vw;
            background: rgba(0, 0, 0, .3);
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 99;
            -webkit-transition: all 3s ease;
            transition: all 3s ease;
            z-index: 980
        }
    }

    .rtl[data-v-39849a7f] {
        direction: rtl;
        text-align: right
    }

    .rtl .main-wrapper .sidebar[data-v-39849a7f] {
        right: 0;
        left: auto
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .sidebar[data-v-39849a7f] {
            margin-right: -240px
        }

        .sidebar-open.rtl .main-wrapper .sidebar[data-v-39849a7f] {
            margin-right: 0
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-header[data-v-39849a7f] {
        border-right: 0;
        border-left: 1px solid #f2f4f9
    }

    .sidebar-dark.rtl .main-wrapper .sidebar .sidebar-header[data-v-39849a7f] {
        border-left: 1px solid #182647
    }

    .rtl .main-wrapper .sidebar .sidebar-body[data-v-39849a7f] {
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav[data-v-39849a7f] {
        width: 100%
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .sidebar .sidebar-body .nav[data-v-39849a7f] {
            direction: rtl
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item[data-v-39849a7f] {
        width: 100%;
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link[data-v-39849a7f] {
        direction: rtl
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-title[data-v-39849a7f] {
        margin-left: 0;
        margin-right: 30px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow[data-v-39849a7f] {
        margin-left: 0;
        margin-right: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.active .nav-link[data-v-39849a7f]::before {
        right: -25px;
        left: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-39849a7f]::before {
        right: 6px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu[data-v-39849a7f] {
        padding: 0 33px 15px 0
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link[data-v-39849a7f]::before {
        left: auto;
        right: -29px
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .page-wrapper[data-v-39849a7f] {
            margin-left: 0;
            margin-right: 240px
        }

        .sidebar-folded.rtl .main-wrapper .page-wrapper[data-v-39849a7f] {
            margin-right: 70px
        }
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .page-wrapper[data-v-39849a7f] {
            margin-right: 0;
            width: 100%
        }
    }

    .rtl .main-wrapper .page-wrapper.full-page[data-v-39849a7f] {
        margin-right: 0;
        margin-left: 0
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content p[data-v-39849a7f] {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content .highlight pre[data-v-39849a7f] {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .content-nav-wrapper[data-v-39849a7f] {
        right: auto;
        left: 0;
        border-left: 0;
        border-right: 1px solid #e8ebf1
    }

    .swal2-popup.swal2-toast.swal2-show[data-v-39849a7f] {
        padding: 14px;
        background-color: #fceb71
    }

    .swal2-popup.swal2-toast.swal2-show .swal2-title[data-v-39849a7f] {
        font-size: .9375em
    }

    .file-input[data-v-39849a7f] {
        max-width: 1920px;
        margin: 0 auto
    }

    .file-input.preview[data-v-39849a7f] {
        width: 90vw;
        left: 50%;
        transform: translateX(-50%);
        position: relative
    }

    .file-input.file-preview-full[data-v-39849a7f] {
        z-index: 10
    }

    @media only screen and (max-width: 768px) {
        .file-input[data-v-39849a7f] {
            box-shadow: none
        }
    }

    .spins[data-v-0102f2c1] {
        animation-name: spin-0102f2c1;
        animation-duration: 1500ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    @keyframes spin-0102f2c1 {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    .input-loader[data-v-0102f2c1] {
        height: 64px;
        width: 260px;
        background: #727cf5;
        border-radius: 4px;
        color: #fff
    }

    .dropzone[data-v-0102f2c1] {
        position: relative;
        background: #efeef3;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 3px dashed #bec0da;
        padding: 70px
    }

    @media only screen and (max-width: 768px) {
        .dropzone[data-v-0102f2c1] {
            padding: 20px 20px
        }
    }

    .dropzone.more[data-v-0102f2c1] {
        border: none;
        padding: 0
    }

    .dropzone .msg[data-v-0102f2c1] {
        color: #282f3a;
        font-weight: 300;
        font-size: .9375em;
        margin-top: 10px;
        text-align: center;
        display: block
    }

    .dropzone .msg a[data-v-0102f2c1] {
        color: #727cf5;
        text-decoration: underline
    }

    .dropzone .msg span[data-v-0102f2c1] {
        display: inline
    }

    .single-uploader[data-v-0102f2c1] {
        margin-bottom: -41px
    }

    .over .dropzone[data-v-0102f2c1] {
        border-color: #008004;
        background: #def0ff42
    }

    .theme-checkbox[data-v-a5f7ea3c] {
        position: relative;
        margin: 10px 0;
        text-align: left
    }

    @media only screen and (max-width: 768px) {
        .theme-checkbox[data-v-a5f7ea3c] {
            margin: 10px 0
        }
    }

    .theme-checkbox.theme-checkbox-inline[data-v-a5f7ea3c] {
        display: inline-block
    }

    .theme-checkbox label[data-v-a5f7ea3c] {
        cursor: pointer;
        display: inline;
        line-height: 1.15em;
        vertical-align: top;
        clear: both;
        padding-left: 1px
    }

    .theme-checkbox label[data-v-a5f7ea3c]:not(:empty) {
        padding-left: 1.75em
    }

    .theme-checkbox label[data-v-a5f7ea3c]:before,
    .theme-checkbox label[data-v-a5f7ea3c]:after {
        content: "";
        position: absolute;
        left: 0;
        top: -1px
    }

    .theme-checkbox label[data-v-a5f7ea3c]:before {
        width: 1.15em;
        height: 1.15em;
        background: #fff;
        border: 2px solid #727cf5;
        border-radius: .125em;
        cursor: pointer;
        transition: background .3s
    }

    .theme-checkbox input[type=checkbox][data-v-a5f7ea3c] {
        outline: 0;
        visibility: hidden;
        width: 1.15em;
        margin: 0;
        display: block;
        float: left;
        font-size: inherit;
        position: absolute
    }

    .theme-checkbox input[type=checkbox]:checked+label[data-v-a5f7ea3c]:before {
        background: #727cf5;
        border: none
    }

    .theme-checkbox input[type=checkbox]:checked+label[data-v-a5f7ea3c]:after {
        transform: translate(0.25em, 0.325em) rotate(-45deg);
        width: .65em;
        height: .325em;
        border: .125em solid #fff;
        border-top-style: none;
        border-right-style: none
    }

    .theme-checkbox input[type=checkbox]:disabled+label[data-v-a5f7ea3c]:before {
        border-color: rgba(0, 0, 0, .1)
    }

    .theme-checkbox input[type=checkbox]:disabled:checked+label[data-v-a5f7ea3c]:before {
        background: rgba(0, 0, 0, .1)
    }

    .shake[data-v-a5f7ea3c] {
        animation: shake-a5f7ea3c .5s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
        transform: translate3d(0, 0, 0)
    }

    @keyframes shake-a5f7ea3c {

        10%,
        90% {
            transform: translate3d(-1px, 0, 0)
        }

        20%,
        80% {
            transform: translate3d(2px, 0, 0)
        }

        30%,
        50%,
        70% {
            transform: translate3d(-4px, 0, 0)
        }

        40%,
        60% {
            transform: translate3d(4px, 0, 0)
        }
    }

    .spins[data-v-a5f7ea3c] {
        animation-name: spin-a5f7ea3c;
        animation-duration: 1500ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    @keyframes spin-a5f7ea3c {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    .loading[data-v-a5f7ea3c]:after {
        overflow: hidden;
        display: inline-block;
        vertical-align: bottom;
        -webkit-animation: ellipsis-a5f7ea3c steps(3, end) 900ms infinite;
        animation: ellipsis-a5f7ea3c steps(3, end) 900ms infinite;
        content: "…";
        width: 0
    }

    @keyframes ellipsis-a5f7ea3c {
        to {
            width: 1.25em
        }
    }

    @-webkit-keyframes ellipsis-a5f7ea3c {
        to {
            width: 1.25em
        }
    }

    input[type=file][data-v-a5f7ea3c],
    input[type=file][data-v-a5f7ea3c]::-webkit-file-upload-button {
        cursor: pointer
    }

    .file-input-dropdown__input[data-v-a5f7ea3c] {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        overflow: hidden;
        opacity: 0;
        cursor: pointer;
        max-width: 100%;
        width: 100%
    }

    .file-input-dropdown__button__content[data-v-a5f7ea3c] {
        position: relative
    }

    .invalid-dialog__errors[data-v-a5f7ea3c] {
        color: #f36 !important
    }

    .invalid-dialog p span[data-v-a5f7ea3c] {
        color: #727cf5
    }

    .disabled-picker {
        pointer-events: none;
        background: #727cf5
    }

    div.file-input-dropdown:not(.more):hover+.file-input-dropdown__placeHolder {
        display: none !important
    }

    .file-input-dropdown {
        cursor: pointer;
        display: flex;
        position: relative
    }

    .file-input-dropdown__placeHolder {
        opacity: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 10;
        background: transparent;
        cursor: pointer
    }

    .file-input-dropdown__placeHolder .file-input-dropdown__button__content {
        color: #fff
    }

    .file-input-dropdown__placeHolder.more {
        width: 150px;
        height: 55px;
        opacity: 0
    }

    .file-input-dropdown__placeHolder.more .file-input-dropdown__button__content {
        font-size: 16px;
        padding: 0 10px 0 0;
        height: 48px;
        display: flex;
        font-weight: 400 !important;
        align-items: center;
        text-align: center;
        justify-content: center;
        align-content: center
    }

    .file-input-dropdown__placeHolder.more .file-input-dropdown__button__content svg {
        margin: 0 5px;
        transform: scale(0.9);
        position: relative;
        top: -1px
    }

    .file-input-dropdown__wrapper {
        position: relative
    }

    .file-input-dropdown__wrapper.more {
        width: 100%
    }

    .file-input-dropdown__holder {
        position: relative;
        min-width: 250px
    }

    .file-input-dropdown__holder.more.hover .file-input-dropdown__button .file-input-dropdown__button__drop .caret-holder__icon {
        transform: rotateX(180deg) !important;
        transition: all .2s ease-out
    }

    .file-input-dropdown__holder.more.hover .file-input-dropdown__list {
        border-top: 1px solid #9ebde3;
        max-height: 350px;
        box-shadow: 0 16px 35px rgba(114, 124, 245, .25);
        border-radius: 4px
    }

    .file-input-dropdown__button {
        width: auto;
        background: #727cf5;
        color: #f3f3f3;
        font-weight: 600;
        text-transform: capitalize;
        box-shadow: 0 10px 20px rgba(78, 132, 253, .4);
        display: flex;
        transition: .3s;
        justify-content: space-between;
        border-radius: 4px;
        cursor: pointer
    }

    .file-input-dropdown__button__content {
        flex-grow: 1;
        text-align: center;
        font-weight: 600;
        font-size: 1.375em;
        line-height: 27px;
        padding: 16px 10px
    }

    .file-input-dropdown__button__icon {
        position: relative;
        top: -1px
    }

    .file-input-dropdown__button__drop {
        width: 60px;
        border-left: 1px solid #9ebde4;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: .3s;
        cursor: pointer
    }

    .file-input-dropdown__button.more.webpage {
        width: 245px !important
    }

    .file-input-dropdown__list {
        overflow: hidden;
        height: auto;
        max-height: 0;
        list-style: none;
        position: absolute;
        width: max-content;
        min-width: 100%;
        top: 100%;
        z-index: 10;
        transition: .3s;
        padding: 0;
        right: 0
    }

    .file-input-dropdown__list.showing {
        max-height: 350px;
        box-shadow: 0 16px 35px rgba(114, 124, 245, .25);
        border-radius: 4px
    }

    .file-input-dropdown__list__item {
        padding: 20px;
        background: #727cf5;
        border-top: none;
        transition: .3s;
        width: 100%;
        cursor: pointer;
        color: #fff;
        font-size: 1.1875em;
        line-height: 29px;
        border-top: 1px solid #7c86f6;
        margin-bottom: 0 !important
    }

    .file-input-dropdown__list__item:first-child {
        border-top: none
    }

    .file-input-dropdown__list__item:hover {
        background: #868fef
    }

    .file-input-dropdown__list__item__icon {
        margin-right: 16px;
        position: relative;
        top: 1px
    }

    @media only screen and (max-width: 768px) {
        .file-input-dropdown__list {
            margin-top: 0
        }
    }

    .file-input-dropdown__action {
        background: #e8ebf1;
        padding: 20px;
        border-radius: 0 0 4px 4px;
        flex-direction: row-reverse;
        position: sticky;
        bottom: 0;
        z-index: 9
    }

    @media only screen and (max-width: 768px) {
        .file-input-dropdown__action {
            flex-direction: column-reverse
        }
    }

    @media screen and (min-width: 1025px)and (max-width: 1200px) {
        .file-input-dropdown__action {
            flex-direction: column-reverse
        }
    }

    .file-input-dropdown__action__convert {
        width: auto;
        height: 61px;
        justify-content: center;
        padding: 16px 24px !important;
        overflow: visible !important;
        z-index: 0
    }

    .file-input-dropdown__action__convert.convert-disabled {
        opacity: .7;
        cursor: default
    }

    .file-input-dropdown__action__convert.convert-disabled:hover svg {
        transform: translateX(0) !important
    }

    @media only screen and (max-width: 768px) {
        .file-input-dropdown__action__convert {
            width: 100%;
            margin-top: 16px
        }
    }

    @media screen and (min-width: 1025px)and (max-width: 1200px) {
        .file-input-dropdown__action__convert {
            width: 100%;
            margin-top: 16px
        }
    }

    .file-input-dropdown__action__convert__loading {
        display: inline-block;
        width: 90px;
        text-align: left
    }

    .file-input-dropdown__action__convert span {
        font-size: 1.375em
    }

    .file-input-dropdown__action__convert svg {
        position: relative;
        top: -2px;
        margin-left: 10px;
        transition: all .15s ease-in-out
    }

    .file-input-dropdown__action__convert:hover svg {
        transform: translateX(5px)
    }

    .file-input-dropdown:not(.more):hover .file-input-dropdown__button .file-input-dropdown__button__drop .caret-holder__icon {
        transform: rotateX(180deg);
        transition: all .2s ease-out
    }

    .file-input-dropdown:not(.more):hover .file-input-dropdown__list {
        border-top: 1px solid #9ebde3;
        max-height: 350px;
        box-shadow: 0 16px 35px rgba(114, 124, 245, .25);
        border-radius: 4px
    }

    .file-input-dropdown.more {
        flex-direction: column;
        cursor: default;
        background: #fff
    }

    .file-input-dropdown.more .file-input-dropdown__holder {
        align-self: flex-start;
        width: auto;
        min-width: 180px
    }

    .file-input-dropdown.more .file-input-dropdown__holder .file-input-dropdown__button {
        width: max-content !important;
        background: #e8ebf1;
        color: #727cf5;
        font-weight: 400;
        box-shadow: none;
        border: 1px solid #e0e0e0;
        border-bottom: 0;
        border-radius: 4px 4px 0 0
    }

    .file-input-dropdown.more .file-input-dropdown__holder .file-input-dropdown__button .file-input-dropdown__button__content {
        font-size: 16px;
        padding: 0 10px 0 0;
        height: 48px;
        display: flex;
        font-weight: 400 !important;
        align-items: center;
        text-align: center;
        justify-content: center;
        align-content: center
    }

    .file-input-dropdown.more .file-input-dropdown__holder .file-input-dropdown__button .file-input-dropdown__button__content svg {
        margin: 0 5px;
        transform: scale(0.9);
        position: relative;
        top: -1px
    }

    .file-input-dropdown.more .file-input-dropdown__holder .file-input-dropdown__button .file-input-dropdown__button__drop {
        width: 48px;
        color: #7987a1;
        border-color: #e0e0e0
    }

    .file-input-dropdown.more .file-input-dropdown__list.showing {
        border: 1px solid #e0e0e0
    }

    .file-input-dropdown.more .file-input-dropdown__list .file-input-dropdown__list__item {
        border: none;
        padding: 10px;
        font-size: 16px
    }

    .file-input-dropdown.more .file-input-dropdown__list .file-input-dropdown__list__item .file-input-dropdown__list__item__icon {
        margin-right: 8px;
        top: 0
    }

    .merge-checkbox {
        margin-left: 10px !important
    }

    @media only screen and (max-width: 768px) {
        .merge-checkbox {
            margin-left: 0 !important;
            margin-bottom: 0 !important;
            margin-top: 15px !important
        }
    }

    @media screen and (min-width: 1025px)and (max-width: 1200px) {
        .merge-checkbox {
            margin-left: 0 !important;
            margin-bottom: 0 !important;
            margin-top: 15px !important
        }
    }

    .breadcrumb-toleft {
        margin-left: 0 !important
    }

    .file-preview-full {
        width: 100vw !important
    }

    .spins[data-v-0d62b028] {
        animation-name: spin-0d62b028;
        animation-duration: 1500ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    @keyframes spin-0d62b028 {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    .url-uploader__title[data-v-0d62b028] {
        margin-top: 15px;
        padding: 0 60px;
        margin-bottom: 20px
    }

    @media only screen and (max-width: 768px) {
        .url-uploader__title[data-v-0d62b028] {
            padding: 0;
            font-size: 1.375em
        }
    }

    .url-uploader__body[data-v-0d62b028] {
        padding: 0 60px
    }

    @media only screen and (max-width: 768px) {
        .url-uploader__body[data-v-0d62b028] {
            padding: 0
        }
    }

    .url-uploader__input[data-v-0d62b028] {
        position: relative
    }

    .url-uploader__input input[data-v-0d62b028] {
        background: #f9fafb;
        border: 1px solid #e8ebf1;
        padding: 15px;
        font-size: 14px;
        height: auto !important;
        color: #282f3a
    }

    .url-uploader__input input[data-v-0d62b028]:focus {
        outline: none;
        box-shadow: none;
        border-color: #727cf5
    }

    .url-uploader__input__remove[data-v-0d62b028] {
        position: absolute;
        right: 15px;
        top: 15px;
        background: #f9fafb;
        color: #7987a1
    }

    .url-uploader__input__remove a[data-v-0d62b028] {
        color: #7987a1 !important
    }

    .url-uploader__input__remove:hover a[data-v-0d62b028] {
        color: #f36 !important
    }

    .url-uploader__buttons[data-v-0d62b028] {
        display: flex;
        align-items: center
    }

    @media only screen and (max-width: 768px) {
        .url-uploader__buttons[data-v-0d62b028] {
            flex-direction: column
        }
    }

    .url-uploader__buttons button[data-v-0d62b028] {
        padding: 8px 16px;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .url-uploader__buttons button.disabled[data-v-0d62b028] {
        pointer-events: none;
        opacity: .7
    }

    @media only screen and (max-width: 768px) {
        .url-uploader__buttons button[data-v-0d62b028] {
            width: 100%;
            display: flex;
            justify-content: center
        }
    }

    .url-uploader__buttons button svg[data-v-0d62b028] {
        position: relative;
        margin-right: 5px;
        top: -1px
    }

    .url-uploader__buttons__more[data-v-0d62b028] {
        margin-right: 10px
    }

    .url-uploader__buttons__more.disabled[data-v-0d62b028] {
        opacity: .7;
        pointer-events: none
    }

    @media only screen and (max-width: 768px) {
        .url-uploader__buttons__more[data-v-0d62b028] {
            margin-right: 0;
            margin-bottom: 10px
        }
    }

    .url-dialog .dialog__footer {
        padding-top: 10px
    }

    .scrollbar-theme {
        overflow: auto
    }

    .scrollbar-theme::-webkit-scrollbar {
        width: 8px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme::-webkit-scrollbar {
            width: 3px
        }
    }

    .scrollbar-theme::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme::-webkit-scrollbar-thumb {
        background: #89919d;
        border-radius: 8px
    }

    .scrollbar-theme::-webkit-scrollbar-thumb:hover {
        background: #89919d
    }

    .scrollbar-theme--light {
        overflow: auto
    }

    .scrollbar-theme--light::-webkit-scrollbar {
        width: 14px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme--light::-webkit-scrollbar {
            width: 3px !important
        }
    }

    .scrollbar-theme--light::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--light::-webkit-scrollbar-thumb {
        background: #e8ebf1;
        border-radius: 14px
    }

    .scrollbar-theme--light::-webkit-scrollbar-thumb:hover {
        background: #e8ebf1
    }

    .scrollbar-theme--dark {
        overflow: auto
    }

    .scrollbar-theme--dark::-webkit-scrollbar {
        width: 14px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme--dark::-webkit-scrollbar {
            width: 3px !important
        }
    }

    .scrollbar-theme--dark::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--dark::-webkit-scrollbar-thumb {
        background: #c7c7c7;
        border-radius: 14px
    }

    .scrollbar-theme--dark::-webkit-scrollbar-thumb:hover {
        background: #c7c7c7
    }

    .scrollbar-theme--small {
        overflow: auto
    }

    .scrollbar-theme--small::-webkit-scrollbar {
        width: 4px
    }

    .scrollbar-theme--small::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--small::-webkit-scrollbar-thumb {
        background: #89919d;
        border-radius: 4px
    }

    .scrollbar-theme--small::-webkit-scrollbar-thumb:hover {
        background: #89919d
    }

    .dialog {
        position: fixed;
        height: 100vh;
        width: 100%;
        background: rgba(0, 0, 0, .5);
        top: 0;
        left: 0;
        z-index: 1040;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: auto
    }

    .dialog__backdrop {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #333;
        opacity: .5;
        z-index: 1001
    }

    .dialog__content {
        position: relative;
        background: #fff;
        border-radius: 4px;
        max-width: 870px;
        z-index: 1002;
        flex: 0 1 870px;
        display: flex;
        flex-direction: column;
        width: 100%
    }

    @media only screen and (max-width: 768px) {
        .dialog__content {
            padding: 20px;
            max-width: 90% !important;
            max-height: 90vh !important
        }
    }

    .dialog__content .dialog-header .dialog-header-text {
        font-weight: 600;
        font-size: 1.875em;
        line-height: 36px;
        color: #282f3a
    }

    .dialog__close {
        position: absolute;
        top: 25px;
        right: 25px;
        opacity: 1;
        background: transparent;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: all .1s
    }

    @media only screen and (max-width: 768px) {
        .dialog__close {
            top: 20px;
            right: 20px
        }
    }

    .dialog__close:hover {
        transform: scale(1.1)
    }

    .dialog__close.fixed {
        position: fixed;
        color: #fff
    }

    .dialog__header {
        padding: 30px 30px 15px 30px
    }

    @media only screen and (max-width: 768px) {
        .dialog__header {
            padding: 0
        }
    }

    .dialog__body {
        max-height: 60vh;
        overflow: auto;
        overflow-y: overlay
    }

    .dialog__footer {
        padding: 30px
    }

    @media only screen and (max-width: 768px) {
        .dialog__footer {
            padding: 20px 0 0 0
        }
    }

    .dialog.medium .dialog__content {
        max-width: 420px
    }

    @media only screen and (max-width: 768px) {
        .dialog.url .dialog__header {
            padding: 4px
        }
    }

    .dialog.url .dialog__footer {
        padding: 10px 60px 60px
    }

    @media only screen and (max-width: 768px) {
        .dialog.url .dialog__footer {
            padding: 0
        }
    }

    .dialog.fullbox .dialog__content {
        background: transparent;
        position: absolute;
        width: max-content
    }

    .dialog.fullbox .dialog__close {
        position: fixed;
        top: 25px;
        right: 25px;
        color: #fff
    }

    .dialog.fullbox .dialog__body {
        overflow: hidden
    }

    .dialog.fullbox .dialog__backdrop {
        cursor: zoom-out
    }

    .dialog.top-fix {
        align-items: flex-start;
        padding-top: 70px
    }

    .scroll--off {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
        overflow-y: hidden;
        height: 100vh;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .scroll--off::-webkit-scrollbar {
        display: none;
    }

    .prompt .dialog__content {
        max-width: 480px
    }

    .prompt__content {
        text-align: center;
        padding: 20px
    }

    .prompt__content p {
        max-width: 80%;
        margin: 0 auto
    }

    .prompt__action button {
        width: 40%;
        display: flex;
        justify-content: center
    }

    .prompt__action__primary {
        border: 1px solid #727cf5
    }

    .prompt__action.right {
        justify-content: right !important
    }

    .prompt__action.right button {
        width: auto;
        padding: 10px 20px
    }

    .prompt.small-file-dialog .title-container,
    .prompt.small-file-dialog .radio-group-container {
        text-align: left
    }

    .prompt.small-file-dialog .filename-container {
        text-align: left;
        margin: 0
    }

    .prompt.small-file-dialog .modal-title {
        font-weight: bold
    }

    .prompt.small-file-dialog .modal-footer {
        display: flex;
        justify-content: space-between !important;
        border: none;
        padding: 0
    }

    .prompt.small-file-dialog .dialog__content {
        max-width: 480px;
        top: -20px
    }

    .prompt.small-file-dialog .dialog__footer {
        padding-top: 0
    }

    .prompt.small-file-dialog .dialog__header {
        padding: 15px 30px 15px 30px;
        border-bottom: 1px solid #dee2e6
    }

    .prompt.small-file-dialog .dialog__close {
        top: 15px
    }

    .prompt.small-file-dialog__content {
        display: flex;
        flex-direction: column;
        justify-content: left;
        text-align: center;
        padding: 20px
    }

    .prompt.small-file-dialog__content p {
        max-width: 80%;
        margin: 0 auto
    }

    .prompt.small-file-dialog__action button {
        width: 40%;
        display: flex;
        justify-content: center
    }

    .prompt.small-file-dialog__action__primary {
        border: 1px solid #727cf5
    }

    .prompt.small-file-dialog__action.right {
        justify-content: right !important
    }

    .prompt.small-file-dialog__action.right button {
        width: auto;
        padding: 10px 20px
    }

    .full-page-dropzone[data-v-c0980dc4] {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #727cf5;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #fff
    }

    .full-page-dropzone p[data-v-c0980dc4] {
        font-size: 2em;
        font-weight: 400;
        pointer-events: none
    }

    .full-page-dropzone img[data-v-c0980dc4] {
        margin-bottom: 20px;
        pointer-events: none
    }

    .layout__section--elevated[data-v-6f7a418c] {
        background: #fff;
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        border-radius: 4px
    }

    .sidebar-folded .sidebar .sidebar-header[data-v-6f7a418c] {
        width: 70px
    }

    .sidebar-folded .sidebar .sidebar-header .sidebar-brand[data-v-6f7a418c] {
        display: none
    }

    .sidebar-folded .page-wrapper[data-v-6f7a418c] {
        width: calc(100% - 70px);
        margin-left: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar[data-v-6f7a418c] {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header[data-v-6f7a418c] {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header .sidebar-brand[data-v-6f7a418c] {
        opacity: 0;
        visibility: hidden;
        width: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-title[data-v-6f7a418c],
    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow[data-v-6f7a418c] {
        visibility: hidden;
        opacity: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-6f7a418c] {
        visibility: hidden
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-6f7a418c]::before {
        content: "";
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #9b9b9b;
        position: absolute;
        top: 5px;
        left: 6px;
        visibility: visible
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav.sub-menu[data-v-6f7a418c] {
        display: none
    }

    @media(max-width: 991px) {

        .sidebar-open .main-wrapper[data-v-6f7a418c]::before,
        .settings-open .main-wrapper[data-v-6f7a418c]::before {
            content: "";
            width: 100vw;
            background: rgba(0, 0, 0, .3);
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 99;
            -webkit-transition: all 3s ease;
            transition: all 3s ease;
            z-index: 980
        }
    }

    .rtl[data-v-6f7a418c] {
        direction: rtl;
        text-align: right
    }

    .rtl .main-wrapper .sidebar[data-v-6f7a418c] {
        right: 0;
        left: auto
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .sidebar[data-v-6f7a418c] {
            margin-right: -240px
        }

        .sidebar-open.rtl .main-wrapper .sidebar[data-v-6f7a418c] {
            margin-right: 0
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-header[data-v-6f7a418c] {
        border-right: 0;
        border-left: 1px solid #f2f4f9
    }

    .sidebar-dark.rtl .main-wrapper .sidebar .sidebar-header[data-v-6f7a418c] {
        border-left: 1px solid #182647
    }

    .rtl .main-wrapper .sidebar .sidebar-body[data-v-6f7a418c] {
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav[data-v-6f7a418c] {
        width: 100%
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .sidebar .sidebar-body .nav[data-v-6f7a418c] {
            direction: rtl
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item[data-v-6f7a418c] {
        width: 100%;
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link[data-v-6f7a418c] {
        direction: rtl
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-title[data-v-6f7a418c] {
        margin-left: 0;
        margin-right: 30px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow[data-v-6f7a418c] {
        margin-left: 0;
        margin-right: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.active .nav-link[data-v-6f7a418c]::before {
        right: -25px;
        left: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.nav-category[data-v-6f7a418c]::before {
        right: 6px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu[data-v-6f7a418c] {
        padding: 0 33px 15px 0
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link[data-v-6f7a418c]::before {
        left: auto;
        right: -29px
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .page-wrapper[data-v-6f7a418c] {
            margin-left: 0;
            margin-right: 240px
        }

        .sidebar-folded.rtl .main-wrapper .page-wrapper[data-v-6f7a418c] {
            margin-right: 70px
        }
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .page-wrapper[data-v-6f7a418c] {
            margin-right: 0;
            width: 100%
        }
    }

    .rtl .main-wrapper .page-wrapper.full-page[data-v-6f7a418c] {
        margin-right: 0;
        margin-left: 0
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content p[data-v-6f7a418c] {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content .highlight pre[data-v-6f7a418c] {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .content-nav-wrapper[data-v-6f7a418c] {
        right: auto;
        left: 0;
        border-left: 0;
        border-right: 1px solid #e8ebf1
    }

    .swal2-popup.swal2-toast.swal2-show[data-v-6f7a418c] {
        padding: 14px;
        background-color: #fceb71
    }

    .swal2-popup.swal2-toast.swal2-show .swal2-title[data-v-6f7a418c] {
        font-size: .9375em
    }

    .app-links[data-v-6f7a418c] {
        padding: 30px
    }

    .app-links .links-header .h3[data-v-6f7a418c] {
        font-size: 1.25em;
        margin-bottom: 10px;
        font-weight: bold
    }

    .app-links .app-link-btns[data-v-6f7a418c] {
        display: flex;
        justify-content: center;
        margin-top: 20px
    }

    .app-links a.google-play-link[data-v-6f7a418c],
    .app-links a.ios-link[data-v-6f7a418c] {
        display: inline-block;
        padding: 7px 11px;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
        background: #1a1a1a;
        color: #fff;
        margin: 0 0 0 16px
    }

    .app-links a.google-play-link[data-v-6f7a418c]:first-child,
    .app-links a.ios-link[data-v-6f7a418c]:first-child {
        margin-left: 0
    }

    .app-popup[data-v-6f7a418c] {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1000
    }

    .app-popup .popup-content[data-v-6f7a418c] {
        position: relative;
        padding: 30px;
        background: #fff;
        box-shadow: 0 3px 20px #3066dd 1a;
        border: 1px solid #e0e0e0
    }

    .app-popup .popup-content .close-btn[data-v-6f7a418c] {
        position: absolute;
        right: 20px;
        top: 24px;
        color: #000;
        cursor: pointer
    }

    .app-popup .popup-content .hero[data-v-6f7a418c] {
        display: flex;
        align-items: flex-start
    }

    .app-popup .popup-content .hero img[data-v-6f7a418c] {
        width: 50px;
        margin-right: 16px
    }

    @media(max-width: 380px) {
        .app-popup .popup-content .hero img[data-v-6f7a418c] {
            width: 40px;
            margin-right: 12px
        }
    }

    .app-popup .popup-content .hero h2[data-v-6f7a418c] {
        font-weight: bold;
        margin-bottom: 4px;
        font-size: 16px;
        color: #000
    }

    .app-popup .popup-content .hero p[data-v-6f7a418c] {
        color: #a6b4c9;
        margin-bottom: 0
    }

    .app-popup .popup-content .stars img[data-v-6f7a418c] {
        width: 12px;
        margin: 0
    }

    .app-popup .popup-content .popup-bottom[data-v-6f7a418c] {
        align-items: center;
        margin-top: 0;
        min-height: 30px
    }

    .app-popup .confirm[data-v-6f7a418c] {
        background: #197dff;
        color: #f3f3f3;
        font-weight: 600;
        text-transform: capitalize;
        box-shadow: 0 10px 20px #4e84fd 66;
        padding: 10px 20px;
        margin-top: 30px;
        display: inline-block
    }

    .home-conversion-guide {
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        border-radius: 4px;
        color: #282f3a
    }

    .home-conversion-guide * a {
        color: #282f3a;
        text-decoration: underline
    }

    .home-conversion-guide__instructions {
        margin-bottom: 3em
    }

    .home-conversion-guide__wrapper {
        padding: 45px 30px
    }

    @media only screen and (max-width: 768px) {
        .home-conversion-guide__wrapper {
            padding: 20px
        }
    }

    .usp-card {
        color: #282f3a
    }

    .usp-card svg {
        stroke: #282f3a !important
    }

    .usp-card h2 {
        min-height: 52px;
        text-align: center
    }

    @media only screen and (max-width: 768px) {
        .usp-card h2 {
            min-height: 0;
            margin-bottom: 12px
        }
    }

    .usp-card p {
        text-align: justify
    }

    .usp-card__icon {
        margin-bottom: 15px;
        text-align: center
    }

    .usp-card__icon svg {
        stroke: #282f3a !important;
        height: 36px;
        width: 36px
    }

    @media only screen and (max-width: 768px) {
        .usp-card__icon {
            margin-top: 20px
        }

        .usp-card__icon:first-child {
            margin-top: 0
        }
    }

    @media only screen and (max-width: 768px) {
        .usp-card {
            margin-top: 30px
        }
    }

    .usp-card i {
        color: #282f3a !important
    }

    .layout__section--elevated {
        background: #fff;
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        border-radius: 4px
    }

    .sidebar-folded .sidebar .sidebar-header {
        width: 70px
    }

    .sidebar-folded .sidebar .sidebar-header .sidebar-brand {
        display: none
    }

    .sidebar-folded .page-wrapper {
        width: calc(100% - 70px);
        margin-left: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header {
        width: 70px
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-header .sidebar-brand {
        opacity: 0;
        visibility: hidden;
        width: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-title,
    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow {
        visibility: hidden;
        opacity: 0
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category {
        visibility: hidden
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav .nav-item.nav-category::before {
        content: "";
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #9b9b9b;
        position: absolute;
        top: 5px;
        left: 6px;
        visibility: visible
    }

    .sidebar-folded:not(.open-sidebar-folded) .sidebar .sidebar-body .nav.sub-menu {
        display: none
    }

    @media(max-width: 991px) {

        .sidebar-open .main-wrapper::before,
        .settings-open .main-wrapper::before {
            content: "";
            width: 100vw;
            background: rgba(0, 0, 0, .3);
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 99;
            -webkit-transition: all 3s ease;
            transition: all 3s ease;
            z-index: 980
        }
    }

    .rtl {
        direction: rtl;
        text-align: right
    }

    .rtl .main-wrapper .sidebar {
        right: 0;
        left: auto
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .sidebar {
            margin-right: -240px
        }

        .sidebar-open.rtl .main-wrapper .sidebar {
            margin-right: 0
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-header {
        border-right: 0;
        border-left: 1px solid #f2f4f9
    }

    .sidebar-dark.rtl .main-wrapper .sidebar .sidebar-header {
        border-left: 1px solid #182647
    }

    .rtl .main-wrapper .sidebar .sidebar-body {
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav {
        width: 100%
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .sidebar .sidebar-body .nav {
            direction: rtl
        }
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item {
        width: 100%;
        direction: ltr
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link {
        direction: rtl
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-title {
        margin-left: 0;
        margin-right: 30px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item .nav-link .link-arrow {
        margin-left: 0;
        margin-right: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.active .nav-link::before {
        right: -25px;
        left: auto
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav .nav-item.nav-category::before {
        right: 6px
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu {
        padding: 0 33px 15px 0
    }

    .rtl .main-wrapper .sidebar .sidebar-body .nav.sub-menu .nav-item .nav-link::before {
        left: auto;
        right: -29px
    }

    @media(min-width: 992px) {
        .rtl .main-wrapper .page-wrapper {
            margin-left: 0;
            margin-right: 240px
        }

        .sidebar-folded.rtl .main-wrapper .page-wrapper {
            margin-right: 70px
        }
    }

    @media(max-width: 991px) {
        .rtl .main-wrapper .page-wrapper {
            margin-right: 0;
            width: 100%
        }
    }

    .rtl .main-wrapper .page-wrapper.full-page {
        margin-right: 0;
        margin-left: 0
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content p {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .main-content .highlight pre {
        direction: ltr
    }

    .rtl .main-wrapper .page-wrapper .page-content .content-nav-wrapper {
        right: auto;
        left: 0;
        border-left: 0;
        border-right: 1px solid #e8ebf1
    }

    .swal2-popup.swal2-toast.swal2-show {
        padding: 14px;
        background-color: #fceb71
    }

    .swal2-popup.swal2-toast.swal2-show .swal2-title {
        font-size: .9375em
    }

    .content-html {
        height: auto;
        max-height: initial;
        overflow: hidden;
        transition: .2s ease-in max-height;
        -moz-transition: .2s ease-in max-height;
        -webkit-transition: .2s ease-in max-height
    }

    .content-html__title h1,
    .content-html__title h2,
    .content-html__title h3,
    .content-html__title h4,
    .content-html__title h5,
    .content-html__title h6 {
        margin: 0 !important
    }

    .content-html__plain {
        padding: 30px
    }

    @media only screen and (max-width: 768px) {
        .content-html__plain {
            padding: 20px
        }
    }

    .content-html__wrapper {
        padding: 0 30px 30px
    }

    @media only screen and (max-width: 768px) {
        .content-html__wrapper {
            padding: 0 20px 20px
        }
    }

    .accordion[data-v-7cef10e7] {
        transform: translateZ(0);
        box-shadow: 0 3px 24px rgba(0, 0, 0, .08);
        border-radius: 4px;
        background: #fff;
        margin: 15px 0
    }

    .accordion section[data-v-7cef10e7] {
        font-weight: 300 !important
    }

    .accordion section a[data-v-7cef10e7] {
        color: #727cf5 !important
    }

    @media only screen and (max-width: 768px) {
        .accordion__title[data-v-7cef10e7] {
            max-width: calc(100% - 20px)
        }
    }

    .accordion>.accordion-toggle[data-v-7cef10e7] {
        position: absolute;
        opacity: 0;
        display: none
    }

    .accordion>label[data-v-7cef10e7] {
        position: relative;
        display: block;
        line-height: 24px;
        padding: 30px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        margin: 0
    }

    @media only screen and (max-width: 768px) {
        .accordion>label[data-v-7cef10e7] {
            display: flex;
            padding: 20px
        }
    }

    .accordion>label .accordion__icon[data-v-7cef10e7] {
        position: absolute;
        top: 30px;
        right: 20px;
        transform: rotate(0deg);
        transition: .3s transform
    }

    @media only screen and (max-width: 768px) {
        .accordion>label .accordion__icon[data-v-7cef10e7] {
            top: 20px
        }
    }

    .accordion>section[data-v-7cef10e7] {
        height: 0;
        transition: .3s all;
        overflow: hidden;
        opacity: 0
    }

    .accordion>.accordion-toggle.open~label .accordion__icon[data-v-7cef10e7] {
        transform: rotate(180deg)
    }

    .accordion>.accordion-toggle.open~section[data-v-7cef10e7] {
        height: auto;
        opacity: 1
    }

    .accordion section a {
        color: #727cf5 !important
    }

    .accordion section a:hover {
        text-decoration: none
    }

    .flex-col-1[data-v-bc2b46e4] {
        -webkit-column-count: 1;
        column-count: 1;
        -moz-column-count: 1
    }

    .flex-col-2[data-v-bc2b46e4] {
        -webkit-column-count: 2;
        column-count: 2;
        -moz-column-count: 2
    }

    .flex-col-3[data-v-bc2b46e4] {
        -webkit-column-count: 3;
        column-count: 3;
        -moz-column-count: 3
    }

    .flex-col-4[data-v-bc2b46e4] {
        -webkit-column-count: 4;
        column-count: 4;
        -moz-column-count: 4
    }

    .flex-col-5[data-v-bc2b46e4] {
        -webkit-column-count: 5;
        column-count: 5;
        -moz-column-count: 5
    }

    .flex-col-6[data-v-bc2b46e4] {
        -webkit-column-count: 6;
        column-count: 6;
        -moz-column-count: 6
    }

    .flex-col-7[data-v-bc2b46e4] {
        -webkit-column-count: 7;
        column-count: 7;
        -moz-column-count: 7
    }

    .flex-col-8[data-v-bc2b46e4] {
        -webkit-column-count: 8;
        column-count: 8;
        -moz-column-count: 8
    }

    .flex-col-9[data-v-bc2b46e4] {
        -webkit-column-count: 9;
        column-count: 9;
        -moz-column-count: 9
    }

    .flex-col-10[data-v-bc2b46e4] {
        -webkit-column-count: 10;
        column-count: 10;
        -moz-column-count: 10
    }

    .flex-col-11[data-v-bc2b46e4] {
        -webkit-column-count: 11;
        column-count: 11;
        -moz-column-count: 11
    }

    .flex-col-12[data-v-bc2b46e4] {
        -webkit-column-count: 12;
        column-count: 12;
        -moz-column-count: 12
    }

    #flexible-grid-columns[data-v-bc2b46e4] {
        -webkit-column-count: 1;
        column-count: 1;
        -moz-column-count: 1;
        -webkit-column-gap: 10px;
        -webkit-column-fill: auto;
        -moz-column-gap: 10px;
        -moz-column-fill: auto;
        column-gap: 15px;
        column-fill: auto;
        padding-bottom: 20px
    }

    @media only screen and (max-width: 768px) {
        #flexible-grid-columns[data-v-bc2b46e4] {
            -webkit-column-count: 1 !important;
            column-count: 1 !important;
            -moz-column-count: 1 !important
        }
    }

    .flexible-grid__card {
        display: inline-block;
        margin: 0 0 0 0;
        -webkit-column-break-inside: avoid;
        -moz-column-break-inside: avoid;
        column-break-inside: avoid;
        -webkit-transition: all .2s ease;
        -moz-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease;
        background-color: #f3f3f3;
        border-radius: 5px;
        box-sizing: content-box
    }

    .content-card__title[data-v-fe23d34c] {
        margin: 0
    }

    .content-card__wrapper[data-v-fe23d34c] {
        padding: 0 30px 30px
    }

    @media only screen and (max-width: 768px) {
        .content-card__wrapper[data-v-fe23d34c] {
            padding: 0 20px 20px
        }
    }

    .content-card__plain[data-v-fe23d34c] {
        padding: 30px
    }

    @media only screen and (max-width: 768px) {
        .content-card__plain[data-v-fe23d34c] {
            padding: 20px
        }
    }

    .content-card-list {
        padding: 10px
    }

    .content-card-list ul {
        list-style: none;
        padding: 10px;
        margin-bottom: 0
    }

    .content-card-list ul li {
        padding-left: 0
    }

    @media only screen and (max-width: 768px) {
        .content-card-list ul li {
            padding: 0
        }
    }

    .content-card-list ul li.bordered {
        border-bottom: 1px solid #e8ebf1
    }

    .content-card-list ul li a {
        display: inline-block;
        color: #727cf5;
        padding: 10px 0;
        padding-right: 10px !important
    }

    .try-free[data-v-2bd1d246] {
        position: relative;
        background-color: #727cf5;
        max-width: 840px;
        border-radius: 4px 4px 0 0;
        color: #fff;
        padding: 60px 20px;
        margin: 0 auto
    }

    @media only screen and (max-width: 768px) {
        .try-free[data-v-2bd1d246] {
            padding: 30px 0
        }
    }

    .try-free[data-v-2bd1d246]:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        height: 60px;
        bottom: -60px;
        background-color: #253959;
        border-radius: 0 0 4px 4px
    }

    .try-free__text[data-v-2bd1d246] {
        font-weight: 600;
        font-size: 1.75em;
        line-height: 36px;
        text-align: center;
        margin: 0
    }

    @media only screen and (max-width: 768px) {
        .try-free__text[data-v-2bd1d246] {
            font-weight: 600;
            font-size: 1.375em;
            line-height: 27px;
            max-width: 80%;
            margin: 0 auto
        }
    }

    .try-free__buttons[data-v-2bd1d246] {
        max-width: 280px;
        margin: 20px auto 0 auto
    }

    .try-free__buttons__wrapper[data-v-2bd1d246] {
        padding: 5px 10px
    }

    .try-free__buttons a[data-v-2bd1d246] {
        width: 100%;
        text-align: center;
        justify-content: center
    }

    #Footer[data-v-235b9c48] {
        background: #1e2e47;
        padding: 140px 80px 50px 80px
    }

    @media only screen and (max-width: 768px) {
        #Footer[data-v-235b9c48] {
            padding: 105px 20px 20px 20px
        }
    }

    #FooterLinkLists[data-v-2ef19d32] {
        display: flex;
        max-width: 1280px;
        margin: 0 auto
    }

    #FooterLinkLists .footer-link-list[data-v-2ef19d32] {
        padding-left: 10px;
        padding-right: 10px
    }

    #FooterLinkLists .footer-link-list__title[data-v-2ef19d32] {
        font-size: 16px;
        color: #fff;
        margin-bottom: 12px;
        font-weight: normal;
        margin-top: 15px;
        font-size: 17px
    }

    #FooterLinkLists .footer-link-list__list[data-v-2ef19d32] {
        list-style: none;
        padding: 0
    }

    #FooterLinkLists .footer-link-list__list li a[data-v-2ef19d32] {
        color: #fff;
        font-size: 14px
    }

    #FooterLinkLists .footer-link-list__list li a[data-v-2ef19d32]:hover {
        color: #727cf5
    }

    #FooterLinkLists .footer-link-list__more[data-v-2ef19d32] {
        color: #fff;
        text-transform: capitalize;
        font-size: 14px
    }

    #FooterLinkLists .footer-link-list__more[data-v-2ef19d32]:hover {
        text-decoration: none;
        color: #727cf5
    }

    @media only screen and (max-width: 768px) {
        #FooterLinkLists .footer-link-list[data-v-2ef19d32] {
            padding-left: 0;
            margin-bottom: 10px
        }
    }

    @media only screen and (max-width: 1280px) {
        .footer-link-list__list .container {
            max-width: 100% !important
        }
    }

    .footer-navigation__links[data-v-584b8b0a] {
        max-width: 1280px;
        margin: 40px auto 0 auto;
        padding: 3px 0;
        flex-direction: row
    }

    @media only screen and (max-width: 768px) {
        .footer-navigation__links[data-v-584b8b0a] {
            flex-direction: column !important;
            margin: 0 auto 0 auto;
            flex-direction: column;
            flex-direction: column;
            align-self: flex-start
        }
    }

    .footer-navigation__links__item[data-v-584b8b0a] {
        margin: 10px
    }

    @media only screen and (max-width: 768px) {
        .footer-navigation__links__item[data-v-584b8b0a] {
            margin: 0
        }
    }

    .footer-navigation__links__item a[data-v-584b8b0a] {
        color: #fff;
        font-size: 14px
    }

    .footer-navigation__links__item a[data-v-584b8b0a]:hover {
        color: #727cf5;
        text-decoration: none
    }

    .footer-navigation__links__item[data-v-584b8b0a]:first-child {
        margin-left: 0
    }

    @media only screen and (max-width: 768px) {
        .footer-navigation__links__item[data-v-584b8b0a] {
            margin-left: 0
        }

        .footer-navigation__links__item--top[data-v-584b8b0a] {
            margin-bottom: 10px !important
        }
    }

    @media only screen and (max-width: 768px) {
        #FooterBottom[data-v-38edb786] {
            margin-bottom: 100px
        }
    }

    .footer-bottom[data-v-38edb786] {
        max-width: 1280px;
        margin: 0 auto;
        padding: 15px 0 30px 0;
        border-top: 1.5px solid rgba(255, 255, 255, .1)
    }

    @media only screen and (max-width: 768px) {
        .footer-bottom[data-v-38edb786] {
            padding: 5px 0
        }
    }

    .footer-bottom--bottom[data-v-38edb786] {
        display: none;
        padding: 20px 0 25px 0;
        border-top: 1.5px solid rgba(255, 255, 255, .1)
    }

    @media only screen and (max-width: 768px) {
        .footer-bottom--bottom[data-v-38edb786] {
            display: flex
        }
    }

    .footer-bottom__copyright[data-v-38edb786] {
        color: #89919d;
        font-size: 14px;
        margin: 0
    }

    @media only screen and (max-width: 768px) {
        .footer-bottom__copyright[data-v-38edb786] {
            width: 100%
        }
    }

    .app-version:hover,
    .app-version:active {
        text-decoration: underline
    }

    .scrollbar-theme[data-v-6e7ccebb] {
        overflow: auto
    }

    .scrollbar-theme[data-v-6e7ccebb]::-webkit-scrollbar {
        width: 8px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme[data-v-6e7ccebb]::-webkit-scrollbar {
            width: 3px
        }
    }

    .scrollbar-theme[data-v-6e7ccebb]::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme[data-v-6e7ccebb]::-webkit-scrollbar-thumb {
        background: #89919d;
        border-radius: 8px
    }

    .scrollbar-theme[data-v-6e7ccebb]::-webkit-scrollbar-thumb:hover {
        background: #89919d
    }

    .scrollbar-theme--light[data-v-6e7ccebb] {
        overflow: auto
    }

    .scrollbar-theme--light[data-v-6e7ccebb]::-webkit-scrollbar {
        width: 14px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme--light[data-v-6e7ccebb]::-webkit-scrollbar {
            width: 3px !important
        }
    }

    .scrollbar-theme--light[data-v-6e7ccebb]::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--light[data-v-6e7ccebb]::-webkit-scrollbar-thumb {
        background: #e8ebf1;
        border-radius: 14px
    }

    .scrollbar-theme--light[data-v-6e7ccebb]::-webkit-scrollbar-thumb:hover {
        background: #e8ebf1
    }

    .scrollbar-theme--dark[data-v-6e7ccebb] {
        overflow: auto
    }

    .scrollbar-theme--dark[data-v-6e7ccebb]::-webkit-scrollbar {
        width: 14px
    }

    @media only screen and (max-width: 768px) {
        .scrollbar-theme--dark[data-v-6e7ccebb]::-webkit-scrollbar {
            width: 3px !important
        }
    }

    .scrollbar-theme--dark[data-v-6e7ccebb]::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--dark[data-v-6e7ccebb]::-webkit-scrollbar-thumb {
        background: #c7c7c7;
        border-radius: 14px
    }

    .scrollbar-theme--dark[data-v-6e7ccebb]::-webkit-scrollbar-thumb:hover {
        background: #c7c7c7
    }

    .scrollbar-theme--small[data-v-6e7ccebb] {
        overflow: auto
    }

    .scrollbar-theme--small[data-v-6e7ccebb]::-webkit-scrollbar {
        width: 4px
    }

    .scrollbar-theme--small[data-v-6e7ccebb]::-webkit-scrollbar-track {
        background: transparent
    }

    .scrollbar-theme--small[data-v-6e7ccebb]::-webkit-scrollbar-thumb {
        background: #89919d;
        border-radius: 4px
    }

    .scrollbar-theme--small[data-v-6e7ccebb]::-webkit-scrollbar-thumb:hover {
        background: #89919d
    }

    .language-selector svg[data-v-6e7ccebb] {
        height: 24px;
        width: 24px
    }

    .language-list[data-v-6e7ccebb] {
        width: 250px;
        margin: 0;
        list-style: none;
        z-index: 1000;
        padding: 0;
        max-height: 200px;
        overflow: auto;
        background-color: #1e2e47
    }

    .language-list li[data-v-6e7ccebb] {
        height: 41px
    }

    .language-list li a[data-v-6e7ccebb] {
        display: inline-block;
        padding: 10px;
        width: 100%;
        height: 100%;
        cursor: pointer;
        color: #fff;
        position: relative
    }

    .language-list li a[data-v-6e7ccebb]:hover {
        background-color: #727cf5;
        color: #fff;
        text-decoration: none
    }

    .language-list li a.dropdown-selected[data-v-6e7ccebb] {
        background-color: #fff;
        color: #282f3a
    }

    .toast__container[data-v-8de78ad0] {
        position: fixed;
        top: 58px;
        right: 40px;
        z-index: 1050;
        display: flex;
        flex-direction: column-reverse
    }

    @media only screen and (max-width: 768px) {
        .toast__container[data-v-8de78ad0] {
            right: 20px;
            left: 20px
        }
    }

    .spins {
        animation-name: spin;
        animation-duration: 1500ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    @keyframes spin {
        from {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(360deg)
        }
    }

    .freshdesk-widget-placeholder {
        position: fixed;
        bottom: 35px;
        left: 30px;
        height: 34.5px;
        width: 78.19px;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        float: left;
        border-radius: 30px 8px 30px 30px;
        background-color: #727cf5;
        box-shadow: none;
        color: #fff;
        z-index: 500;
        cursor: pointer;
        padding: 8px;
        transition: all .1s ease-out 0s;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased
    }

    .freshdesk-widget-placeholder:hover {
        box-shadow: rgba(0, 0, 0, .2) 0 2px 8px;
        transform: scale(1.04);
        transition: all .5s linear 0s;
        background: radial-gradient(circle, transparent 1%, #727cf5 1%) center center/15000% #727cf5
    }

    .freshdesk-widget-placeholder__text {
        font-size: .875rem;
        font-weight: 600;
        float: left;
        user-select: none;
        margin: 0 8px 0 6px;
        white-space: nowrap;
        overflow: hidden;
        transition: all .2s ease-in-out 0s
    }
</style>

<section style="padding-top:200px">
    <div class="container">



        <div type="image" info="[object Object]" class="index-template" data-v-35695f94 data-v-6e6ecefb>
            <div class="file-input" data-v-39849a7f data-v-35695f94>
                <div class="dropzone flex-column" data-v-0102f2c1 data-v-39849a7f>
                    <div class="file-input-dropdown__wrapper" data-v-a5f7ea3c data-v-0102f2c1>
                        <div id="FileInputDropdown" data-automation-id="FileInputDropdownButton" class="file-input-dropdown" data-v-a5f7ea3c>
                            <div class="upload-from-device" data-v-0712bab8 data-v-a5f7ea3c><input type="file" data-automation-id="DeviceUploaderInput" multiple="multiple" accept="" style="display: none" data-v-0712bab8>
                            </div>
                            <div id="FileInputDropdownHolder" class="file-input-dropdown__holder" data-v-a5f7ea3c>
                                <div class="file-input-dropdown__button" data-v-a5f7ea3c>
                                    <div id="upload-file-button" data-automation-id="FilePickerButton" class="file-input-dropdown__button__content" data-v-a5f7ea3c>
                                        <label for="file" style="display: none" data-v-a5f7ea3c>File</label> <input multiple="multiple" accept="" type="file" name="file" class="file-input-dropdown__input" data-v-a5f7ea3c> <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="file-input-dropdown__button__icon feather feather-file-plus" data-v-a5f7ea3c data-v-a5f7ea3c>
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" data-v-a5f7ea3c data-v-a5f7ea3c></path>
                                            <polyline points="14 2 14 8 20 8" data-v-a5f7ea3c data-v-a5f7ea3c></polyline>
                                            <line x1="12" y1="18" x2="12" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                            <line x1="9" y1="15" x2="15" y2="15" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                        </svg> <span data-v-a5f7ea3c>Choose Files</span>
                                    </div>
                                    <div id="FileInputDropDownTrigger" data-automation-id="FileInputDropDownTrigger" class="file-input-dropdown__button__drop" data-v-a5f7ea3c><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="caret-holder__icon feather feather-chevron-down" data-v-a5f7ea3c data-v-a5f7ea3c>
                                            <polyline points="6 9 12 15 18 9" data-v-a5f7ea3c data-v-a5f7ea3c></polyline>
                                        </svg></div>
                                </div>
                                <ul data-automation-id="FileInputDropdownList" class="file-input-dropdown__list" data-v-a5f7ea3c>
                                    <li class="file-input-dropdown__list__item" data-v-a5f7ea3c>
                                        <div data-v-a5f7ea3c><svg id="Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 26" height="20" width="26" class="file-input-dropdown__list__item__icon" data-v-a5f7ea3c>
                                                <g>
                                                    <path d="M20 16C20 16.5304 19.7893 17.0391 19.4142 17.4142C19.0391 17.7893 18.5304 18 18 18H2C1.46957 18 0.960859 17.7893 0.585786 17.4142C0.210714 17.0391 0 16.5304 0 16V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H7L9 3H18C18.5304 3 19.0391 3.21071 19.4142 3.58579C19.7893 3.96086 20 4.46957 20 5V16Z" fill="white"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3L7 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V16C0 16.5304 0.210714 17.0391 0.585786 17.4142C0.960859 17.7893 1.46957 18 2 18H18C18.5304 18 19.0391 17.7893 19.4142 17.4142C19.7893 17.0391 20 16.5304 20 16V5C20 4.46957 19.7893 3.96086 19.4142 3.58579C19.0391 3.21071 18.5304 3 18 3H9ZM5.92963 2H2V16H18V5H9C8.33129 5 7.70683 4.6658 7.3359 4.1094L5.92963 2Z" fill="white"></path>
                                                </g>
                                            </svg>
                                            From Device
                                        </div>
                                    </li>
                                    <li class="file-input-dropdown__list__item disabled-picker" data-v-a5f7ea3c>
                                        <div class="d-flex" data-v-a5f7ea3c><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="spins file-input-dropdown__list__item__icon feather feather-loader" data-v-a5f7ea3c data-v-a5f7ea3c>
                                                <line x1="12" y1="2" x2="12" y2="6" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="12" y1="18" x2="12" y2="22" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="4.93" y1="4.93" x2="7.76" y2="7.76" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="16.24" y1="16.24" x2="19.07" y2="19.07" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="2" y1="12" x2="6" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="18" y1="12" x2="22" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="4.93" y1="19.07" x2="7.76" y2="16.24" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="16.24" y1="7.76" x2="19.07" y2="4.93" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                            </svg>
                                            <div data-v-a5f7ea3c>
                                                From Dropbox
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-input-dropdown__list__item disabled-picker" data-v-a5f7ea3c>
                                        <div class="d-flex" data-v-a5f7ea3c><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="spins file-input-dropdown__list__item__icon feather feather-loader" data-v-a5f7ea3c data-v-a5f7ea3c>
                                                <line x1="12" y1="2" x2="12" y2="6" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="12" y1="18" x2="12" y2="22" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="4.93" y1="4.93" x2="7.76" y2="7.76" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="16.24" y1="16.24" x2="19.07" y2="19.07" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="2" y1="12" x2="6" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="18" y1="12" x2="22" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="4.93" y1="19.07" x2="7.76" y2="16.24" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                                <line x1="16.24" y1="7.76" x2="19.07" y2="4.93" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                            </svg>
                                            <div data-v-a5f7ea3c>
                                                From Google Drive
                                            </div>
                                        </div>
                                    </li>
                                    <li class="file-input-dropdown__list__item" data-v-a5f7ea3c>
                                        <div data-v-a5f7ea3c><svg id="Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 26" height="20" width="26" class="file-input-dropdown__list__item__icon" data-v-a5f7ea3c>
                                                <g>
                                                    <path d="M11.7661 13.8266L8.70516 16.8876C7.43935 18.1535 5.37946 18.1537 4.11351 16.8878C3.50023 16.2745 3.16256 15.4591 3.16256 14.592C3.16256 13.7249 3.50023 12.9096 4.11329 12.2963C4.11322 12.2964 4.11336 12.2963 4.11329 12.2963L7.17449 9.23507C7.59708 8.81242 7.59708 8.12713 7.17442 7.70454C6.75183 7.28196 6.06655 7.28196 5.64389 7.70454L2.5829 10.7656C2.58312 10.7654 2.58269 10.7658 2.5829 10.7656C1.56133 11.7875 0.998047 13.1469 0.998047 14.592C0.998047 16.0373 1.56089 17.3962 2.58298 18.4183C3.63796 19.4732 5.02361 20.0007 6.40933 20.0007C7.79506 20.0007 9.18078 19.4732 10.2356 18.4183L13.2967 15.3571C13.7193 14.9345 13.7193 14.2492 13.2966 13.8266C12.8741 13.404 12.1889 13.404 11.7661 13.8266Z" fill="white"></path>
                                                    <path d="M21.0037 5.4087C21.0037 3.96331 20.4408 2.60443 19.4187 1.58234C17.3088 -0.527483 13.8758 -0.527411 11.7661 1.58234C11.7662 1.5822 11.766 1.58249 11.7661 1.58234L8.70488 4.64354C8.28223 5.06613 8.28223 5.75149 8.70488 6.17407C8.91629 6.38547 9.1932 6.4911 9.47018 6.4911C9.7471 6.4911 10.0242 6.3854 10.2354 6.17407L13.2963 3.11323C13.2962 3.11338 13.2964 3.11309 13.2963 3.11323C14.5621 1.84742 16.6222 1.84699 17.8882 3.11287C18.5014 3.72615 18.8392 4.54152 18.8392 5.4087C18.8392 6.2758 18.5015 7.09103 17.8884 7.70431C17.8885 7.70424 17.8883 7.70438 17.8884 7.70431L14.8272 10.7656C14.4046 11.1882 14.4046 11.8735 14.8273 12.2961C15.0386 12.5074 15.3156 12.6131 15.5925 12.6131C15.8695 12.6131 16.1465 12.5074 16.3578 12.2961L19.4188 9.23506C19.4186 9.23527 19.419 9.23484 19.4188 9.23506C20.4404 8.21312 21.0037 6.85373 21.0037 5.4087Z" fill="white"></path>
                                                    <path d="M7.17449 13.8266C7.38582 14.0379 7.6628 14.1436 7.93972 14.1436C8.2167 14.1436 8.49369 14.0379 8.70502 13.8266L14.8271 7.70447C15.2498 7.28189 15.2498 6.59661 14.8271 6.17395C14.4045 5.75136 13.7193 5.75136 13.2966 6.17395L7.17449 12.296C6.75183 12.7187 6.75183 13.404 7.17449 13.8266Z" fill="white"></path>
                                                </g>
                                            </svg>
                                            From Url
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="file-input-dropdown__placeHolder" data-v-a5f7ea3c>
                            <div class="file-input-dropdown__button__content" data-v-a5f7ea3c><input multiple="multiple" accept="" type="file" name="file" class="file-input-dropdown__input" data-v-a5f7ea3c> <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="file-input-dropdown__button__icon feather feather-file-plus" data-v-a5f7ea3c data-v-a5f7ea3c>
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" data-v-a5f7ea3c data-v-a5f7ea3c></path>
                                    <polyline points="14 2 14 8 20 8" data-v-a5f7ea3c data-v-a5f7ea3c>
                                    </polyline>
                                    <line x1="12" y1="18" x2="12" y2="12" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                    <line x1="9" y1="15" x2="15" y2="15" data-v-a5f7ea3c data-v-a5f7ea3c></line>
                                </svg> <span data-v-a5f7ea3c>Choose Files</span></div>
                        </div>
                        <div data-v-a5f7ea3c></div>
                        <div data-v-a5f7ea3c></div>
                        <div id="fullpageDrop" class="full-page-dropzone" style="display:none;" data-v-c0980dc4 data-v-a5f7ea3c><img src="../cdn.freeconvert.com/add-file.png" alt="Drop Files" loading="lazy" data-v-c0980dc4>
                            <p data-v-c0980dc4>Drop any files here!</p>
                        </div>
                    </div> <span class="msg" data-v-0102f2c1><span data-v-0102f2c1>Max
                            file size 1GB.
                            <span style="display:none;" data-v-0102f2c1><a href="pricing.html" data-v-0102f2c1>Upgrade to Pro</a></span> <span data-v-0102f2c1><a href="pricing.html" data-v-0102f2c1>Sign Up</a> for
                                more
                            </span></span></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h3>
            Before Upload
        </h3>

        <div class="row  pt-50 icon_bg">
            <div class="col-lg-12 bg_shadow">
                <input type="file" id="fileInput" class="button-63 form_img" accept="image/*" onchange="handleFileUpload()">
                <table id="imageTable">

                    <div class="row counter_file">

                        <div class="col-lg-4 align_cen">

                            <p class="text-dark" id="fileDetail"></p>
                        </div>
                        <div class="col-lg-2 align_cen">

                            <p class="text-black" id="fileSize"></p>
                        </div>
                        <div class="col-lg-6">
                            <button id="button-cancel" type="button" class="mark button cdownload mr-12">
                                Cancel
                            </button>
                            <button id="button-submit" type="button" class="mark button cancel_btn">
                                Download
                            </button>
                        </div>
                    </div>
                    <div class="row counter_file_12">
                        <div class="col-lg-6">

                            <!-- HTML !-->
                            <button class="button-46" role="button">Covert More Files</button>

                        </div>
                        <div class="col-lg-6">

                        </div>
                    </div>
                    <tbody id="imageInfo">
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</section>
<!-- <section>
    <div class="container">
        <h3>
            After Upload
        </h3>

        <div class="row  pt-50  pb-50 icon_bg">
            <div class="col-lg-12 bg_shadow">
                <input type="file" id="fileInput_1" class="button-63 form_img" accept="image/*" onchange="handleFileUpload()">
                <div class="row counter_file ">
                    <div class="col-lg-4 align_cen ">
                        <p class="text-dark" id="fileDetail_1"></p>
                    </div>
                    <div class="col-lg-2 align_cen ">
                        <p class="text-black" id="fileSize_1"></p>
                    </div>
                    <div class="col-lg-4 align_cen ">
                        <p class="text-dark">File Type : <button style="background-color: #000000; color:white;padding:10px;" data-toggle="modal" data-target="#Modalpop">Convert </button></p>
                    </div>

                    <div class="col-lg-2  align_cen " style="gap:30px">
                        <p class="text-dark"> <a><i style="font-size:24px" class="fas">&#xf013;</i></a></p>
                        <p class="text-dark"> <a><i style="font-size:24px" class="fab">&#10006;</i></a></p>
                    </div>


                

                    <div class="modal-body" id="modelpop">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">.col-md-4</div>
                                <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    Level 1: .col-sm-9
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row counter_file_12">
                    <div class="col-lg-8 align_cen ">
                        <p class="text-dark" id="fileCount_1"></p>
                    </div>
                    <div class="col-lg-4 align_cen ">
                     
                        <button class="button-46" role="button">Convert </button>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section> -->



<style>
    .align_cen {
        display: flex;
        align-items: center;
    }

    /* CSS */
    .button-46 {
        align-items: center;
        background-color: rgba(240, 240, 240, 0.26);
        border: 1px solid #DFDFDF;
        border-radius: 16px;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: flex;
        font-family: Inter, sans-serif;
        font-size: 18px;
        justify-content: center;
        line-height: 28px;
        max-width: 100%;
        padding: 14px 22px;
        text-decoration: none;
        transition: all .2s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: 100%;
    }

    .button-46:active,
    .button-46:hover {
        outline: 0;
    }

    .button-46:hover {
        background-color: #FFFFFF;
        border-color: rgba(0, 0, 0, 0.19);
    }

    @media (min-width: 768px) {
        .button-46 {
            font-size: 20px;
            min-width: 200px;
            padding: 14px 16px;
        }
    }
</style>
<style>
    .container {
        width: 100vw;

        position: relative;
    }

    .button-container {
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .button {
        cursor: pointer;
        border: none;
        padding: 12px 24px;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    .cancel_btn {
        background-color: rgb(0, 102, 204);
        color: white;
    }

    button#button-cancel {
        border: 1px solid green;
        color: green;
    }

    /* 
.cancel_btn:hover {
  background-color: rgb(0, 102, 204, 0.85);
}
 */
    .cdownload {
        border: 2px solid #0066CC;
        background-color: white;
        color: #0066CC;
    }

    .cdownload:hover {

        color: #fff;
    }

    /* .cdownload:hover {
  background-color: rgb(0, 102, 204, 0.1);
}
 */
    .mr-12 {
        margin-right: 12px;
    }

    .popup {
        width: 300px;
        height: 100px;
        border: 2px solid black;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* .top-right {
  position: absolute;
  top: 0%;
  right: 0%;
  transform: translateX(100%);
  transition: 1s;
}

.bottom-right {
  position: absolute;  
  bottom: 12px;
  right: 0%;
  transform: translateX(100%);
  transition: 1s;
} */
    /* CSS */
    .button-63 {
        align-items: center;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-family: Phantomsans, sans-serif;
        font-size: 20px;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 140px;
        padding: 19px 24px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
    }

    .button-63:active,
    .button-63:hover {
        outline: 0;
    }

    @media (min-width: 768px) {
        .button-63 {
            font-size: 24px;
            min-width: 196px;
        }
    }

    input#fileInput {
        background: #efefef;
        width: 30%;
        padding: 30px;
        border-radius: 0;
    }

    .row.pt-50.icon_bg {
        background: white;
    }

    .counter_file {
        background: white;
        padding: 10px;
        margin: 0;
        border-radius: 1px;
        height: 75px;
        border: 2px solid #f1f1f1;
    }

    button.button-46 {
        width: 50%;
        border: 1px solid;
        border-radius: 10px;
    }

    .counter_file_12 {
        background: #f1f1f1;
        padding: 10px;
        margin: 0;
        border-radius: 1px;
        height: 75px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    #fileCountMessage {
        margin-top: 10px;
        font-weight: bold;
    }

    #uploadedImage {
        max-width: 100%;
        display: none;
    }
</style>

<!-- script 1 -->
<script>
    function handleFileUpload() {
        const fileInput = document.getElementById('fileInput');
        const fileDetail = document.getElementById('fileDetail');
        const fileSize = document.getElementById('fileSize');
        const uploadedImage = document.getElementById('uploadedImage');

        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const fileName = file.name;
            const fileType = getFileType(fileName);
            const formattedSize = formatFileSize(file.size);

            // Display the file details and size
            fileDetail.textContent = `File Name: ${fileName}`;
            fileSize.textContent = `File Size: ${formattedSize}`;

            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedImage.src = e.target.result;
                uploadedImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            fileDetail.textContent = '';
            fileSize.textContent = ''; // Clear file size
            uploadedImage.style.display = 'none';
        }
    }

    function getFileType(fileName) {
        const parts = fileName.split('.');
        if (parts.length > 1) {
            return parts[parts.length - 1];
        }
        return 'N/A'; // No file extension found
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';

        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));

        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }
</script>

<!-- script-2 -->
<!-- <script>
    function handleFileUpload() {
        const fileInput = document.getElementById('fileInput_1');
        const fileDetail = document.getElementById('fileDetail_1');
        const fileSize = document.getElementById('fileSize_1');
        const fileTypeDropdown = document.getElementById('fileTypeDropdown');
        const fileCount = document.getElementById('fileCount_1');
        const uploadedImage = document.getElementById('uploadedImage');

        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            const fileName = file.name;
            const fileTypeValue = getFileType(fileName);
            const formattedSize = formatFileSize(file.size);

            // Display the file details, size, and set the selected option in the dropdown
            fileDetail.textContent = `File Name: ${fileName}`;
            fileSize.textContent = `File Size: ${formattedSize}`;
            fileCount.textContent = `File Count: 1`; // Assuming you want to display the count of uploaded files

            // Set the selected option in the dropdown based on the file type
            for (let i = 0; i < fileTypeDropdown.options.length; i++) {
                if (fileTypeDropdown.options[i].value === fileTypeValue) {
                    fileTypeDropdown.selectedIndex = i;
                    break;
                }
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedImage.src = e.target.result;
                uploadedImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            fileDetail.textContent = '';
            fileSize.textContent = '';
            fileTypeDropdown.innerHTML = '<option value="N/A">N/A</option>'; // Clear dropdown
            fileCount.textContent = ''; // Clear file count
            uploadedImage.style.display = 'none';
        }
    }

    function getFileType(fileName) {
        const parts = fileName.split('.');
        if (parts.length > 1) {
            return parts[parts.length - 1];
        }
        return 'N/A'; // No file extension found
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';

        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));

        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }
</script>
 -->
<?php include('footer.php') ?>