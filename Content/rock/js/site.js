$('#rockstar-map').rmap({
    height: 700,
    image: {
        src: '../../Content/rock/images/map.png',
        width: 2000,
        height: 1600
    },
    animations: {
        move: true,
        inertia: true
    },
    nav_ui: {
        autohide: false,
    },
    menu: {
        show: false
    }
});